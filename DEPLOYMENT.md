# Przewodnik Wdrożenia / Deployment Guide

## 📋 Spis Treści / Table of Contents

- [Wymagania](#wymagania--requirements)
- [Przygotowanie do Wdrożenia](#przygotowanie-do-wdrożenia--pre-deployment)
- [Wdrożenie na Produkcję](#wdrożenie-na-produkcję--production-deployment)
- [Konfiguracja Serwera](#konfiguracja-serwera--server-configuration)
- [Automatyczne Wdrożenie](#automatyczne-wdrożenie--automated-deployment)
- [Rollback](#rollback)
- [Monitoring](#monitoring)

---

## Wymagania / Requirements

### Minimalne Wymagania Serwera / Minimum Server Requirements

```
PHP:        8.0 lub nowszy / 8.0 or newer (target: 8.5)
Web Server: Apache 2.4+ lub Nginx 1.18+
RAM:        512 MB minimum (1GB recommended)
Disk:       100 MB dla aplikacji / for application
            + przestrzeń na logi i media / + space for logs and media
SSL:        Certyfikat SSL (Let's Encrypt recommended)
```

### Wymagane Rozszerzenia PHP / Required PHP Extensions

```bash
php -m | grep -E 'mbstring|json|fileinfo|gd|zip'

# Wymagane / Required:
- mbstring   (Unicode string handling)
- json       (JSON encoding/decoding)
- fileinfo   (File type detection)
- gd         (Image manipulation)

# Opcjonalne / Optional:
- zip        (Backup compression)
- curl       (External API calls)
- opcache    (Performance)
```

### Zalecane Ustawienia PHP / Recommended PHP Settings

```ini
; php.ini
memory_limit = 256M
upload_max_filesize = 20M
post_max_size = 20M
max_execution_time = 60
max_input_time = 60
display_errors = Off
log_errors = On
error_log = /path/to/logs/php-errors.log
date.timezone = Europe/Warsaw
```

---

## Przygotowanie do Wdrożenia / Pre-Deployment

### 1. **Checklist Przed Wdrożeniem**

- [ ] Wszystkie testy przeszły pomyślnie / All tests passed
- [ ] Kod przeszedł review / Code reviewed
- [ ] Dokumentacja zaktualizowana / Documentation updated
- [ ] Changelog zaktualizowany / Changelog updated
- [ ] Backup bazy danych (jeśli dotyczy) / Database backup (if applicable)
- [ ] Backup plików produkcyjnych / Production files backup
- [ ] Zmienne środowiskowe skonfigurowane / Environment variables configured
- [ ] SSL certyfikat ważny / SSL certificate valid
- [ ] DNS skonfigurowany poprawnie / DNS configured correctly

### 2. **Zmienne Środowiskowe**

Utwórz plik `.env` (NIE commituj do Git!):

```bash
# .env
APP_ENV=production
BASE_URL=https://magicsalon.pl
ERROR_LOG_PATH=/var/www/magicsalon/logs/php-errors.log

# External services (if needed)
BOOKSY_API_KEY=your_key_here
GA_MEASUREMENT_ID=G-ZFZ2DQZQC6
```

Załaduj w `config.php`:

```php
// Load environment variables
if (file_exists(__DIR__ . '/.env')) {
    $env = parse_ini_file(__DIR__ . '/.env');
    foreach ($env as $key => $value) {
        $_ENV[$key] = $value;
    }
}
```

### 3. **Optymalizacja Kodu**

```bash
# Minifikacja CSS (opcjonalnie)
npm install -g clean-css-cli
cleancss -o dist/css/style.min.css dist/css/style.css

# Minifikacja JS (opcjonalnie)
npm install -g uglify-js
uglifyjs dist/js/custom.js -o dist/js/custom.min.js -c -m

# Optymalizacja obrazów
# Użyj narzędzi: ImageOptim, TinyPNG, lub:
find dist/images -name "*.jpg" -exec jpegoptim --max=85 {} \;
find dist/images -name "*.png" -exec optipng -o5 {} \;
```

---

## Wdrożenie na Produkcję / Production Deployment

### Metoda 1: FTP/SFTP (Tradycyjna)

```bash
# Używając lftp
lftp -u username,password ftp.magicsalon.pl
cd public_html
mirror -R dist/ ./
bye

# Lub SFTP
sftp user@magicsalon.pl
put -r dist/* /var/www/magicsalon/public_html/
```

### Metoda 2: Git Pull (Zalecana)

```bash
# Na serwerze produkcyjnym
cd /var/www/magicsalon
git pull origin main

# Uprawnienia
sudo chown -R www-data:www-data /var/www/magicsalon
sudo chmod -R 755 /var/www/magicsalon
sudo chmod -R 775 /var/www/magicsalon/dist/logs
```

### Metoda 3: rsync (Szybka Synchronizacja)

```bash
# Z lokalnej maszyny na serwer
rsync -avz --delete \
  --exclude '.git' \
  --exclude 'node_modules' \
  --exclude '.env' \
  --exclude 'logs/*' \
  dist/ user@magicsalon.pl:/var/www/magicsalon/public_html/

# Sprawdź przed wykonaniem (dry-run)
rsync -avzn --delete dist/ user@magicsalon.pl:/var/www/magicsalon/public_html/
```

### Metoda 4: GitHub Actions (Automatyczna - patrz sekcja Automatyczne Wdrożenie)

---

## Konfiguracja Serwera / Server Configuration

### Apache Configuration

```apache
# .htaccess w katalogu dist/

# Włącz mod_rewrite
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteBase /

    # HTTPS redirect
    RewriteCond %{HTTPS} off
    RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]

    # WWW redirect (opcjonalnie)
    RewriteCond %{HTTP_HOST} !^www\. [NC]
    RewriteRule ^(.*)$ https://www.%{HTTP_HOST}/$1 [L,R=301]

    # Remove .php extension
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME}\.php -f
    RewriteRule ^(.*)$ $1.php [L]

    # 404 handling
    ErrorDocument 404 /404.php
    ErrorDocument 403 /403.php
    ErrorDocument 500 /500.php
</IfModule>

# Security headers
<IfModule mod_headers.c>
    Header set X-Content-Type-Options "nosniff"
    Header set X-Frame-Options "SAMEORIGIN"
    Header set X-XSS-Protection "1; mode=block"
    Header set Referrer-Policy "strict-origin-when-cross-origin"

    # Cache control
    <FilesMatch "\.(css|js|jpg|jpeg|png|gif|ico|svg|woff|woff2)$">
        Header set Cache-Control "public, max-age=31536000, immutable"
    </FilesMatch>

    <FilesMatch "\.(html|php)$">
        Header set Cache-Control "public, max-age=3600, must-revalidate"
    </FilesMatch>
</IfModule>

# Disable directory listing
Options -Indexes

# Protect sensitive files
<FilesMatch "^(config\.php|helpers\.php|\.env|\.git|composer\.json)$">
    Order allow,deny
    Deny from all
</FilesMatch>
```

### Nginx Configuration

```nginx
server {
    listen 80;
    listen [::]:80;
    server_name magicsalon.pl www.magicsalon.pl;

    # HTTPS redirect
    return 301 https://$server_name$request_uri;
}

server {
    listen 443 ssl http2;
    listen [::]:443 ssl http2;
    server_name magicsalon.pl www.magicsalon.pl;

    root /var/www/magicsalon/dist;
    index index.php index.html;

    # SSL Configuration
    ssl_certificate /etc/letsencrypt/live/magicsalon.pl/fullchain.pem;
    ssl_certificate_key /etc/letsencrypt/live/magicsalon.pl/privkey.pem;
    ssl_protocols TLSv1.2 TLSv1.3;
    ssl_ciphers HIGH:!aNULL:!MD5;

    # Logs
    access_log /var/log/nginx/magicsalon-access.log;
    error_log /var/log/nginx/magicsalon-error.log;

    # Security headers
    add_header X-Content-Type-Options "nosniff" always;
    add_header X-Frame-Options "SAMEORIGIN" always;
    add_header X-XSS-Protection "1; mode=block" always;
    add_header Referrer-Policy "strict-origin-when-cross-origin" always;

    # PHP handling
    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.2-fpm.sock;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        include fastcgi_params;
    }

    # Remove .php extension
    location / {
        try_files $uri $uri/ $uri.php?$query_string;
    }

    # Static files caching
    location ~* \.(css|js|jpg|jpeg|png|gif|ico|svg|woff|woff2)$ {
        expires 1y;
        add_header Cache-Control "public, immutable";
    }

    # Deny access to sensitive files
    location ~ /\.(git|env) {
        deny all;
    }

    location ~ /(config|helpers)\.php$ {
        deny all;
    }

    # Error pages
    error_page 404 /404.php;
    error_page 403 /403.php;
    error_page 500 502 503 504 /500.php;
}
```

---

## Automatyczne Wdrożenie / Automated Deployment

### GitHub Actions Workflow

Plik: `.github/workflows/deploy.yml` (zostanie wygenerowany)

```yaml
name: Deploy to Production

on:
  push:
    branches: [ main ]
  workflow_dispatch:

jobs:
  deploy:
    runs-on: ubuntu-latest

    steps:
    - name: Checkout code
      uses: actions/checkout@v4

    - name: Setup PHP
      uses: shivammathur/setup-php@v2
      with:
        php-version: '8.2'

    - name: Deploy via SSH
      uses: easingthemes/ssh-deploy@v4
      with:
        SSH_PRIVATE_KEY: ${{ secrets.SSH_PRIVATE_KEY }}
        REMOTE_HOST: ${{ secrets.REMOTE_HOST }}
        REMOTE_USER: ${{ secrets.REMOTE_USER }}
        SOURCE: "dist/"
        TARGET: "/var/www/magicsalon/public_html/"
        EXCLUDE: "/logs/, /.git/, /.env, /node_modules/"

    - name: Set permissions
      uses: appleboy/ssh-action@master
      with:
        host: ${{ secrets.REMOTE_HOST }}
        username: ${{ secrets.REMOTE_USER }}
        key: ${{ secrets.SSH_PRIVATE_KEY }}
        script: |
          cd /var/www/magicsalon
          sudo chown -R www-data:www-data public_html
          sudo chmod -R 755 public_html
          sudo chmod -R 775 public_html/logs
```

### Konfiguracja Secrets w GitHub

```
Settings → Secrets and variables → Actions → New repository secret

SSH_PRIVATE_KEY: [Your SSH private key]
REMOTE_HOST: magicsalon.pl (or IP address)
REMOTE_USER: deploy_user
```

---

## Rollback

### Szybki Rollback (Git)

```bash
# Na serwerze
cd /var/www/magicsalon
git log --oneline -n 5  # Zobacz ostatnie commity
git checkout <previous-commit-hash>

# Lub revert ostatniego commitu
git revert HEAD
git push origin main
```

### Rollback z Backup

```bash
# Przywróć z backupu
cd /var/www/magicsalon
sudo rm -rf public_html
sudo tar -xzf backups/backup-2025-11-24.tar.gz
sudo chown -R www-data:www-data public_html
```

### Automatyczny Backup Przed Wdrożeniem

```bash
#!/bin/bash
# deploy-with-backup.sh

BACKUP_DIR="/var/www/magicsalon/backups"
DATE=$(date +%Y-%m-%d-%H%M%S)
BACKUP_FILE="$BACKUP_DIR/backup-$DATE.tar.gz"

# Create backup
tar -czf $BACKUP_FILE -C /var/www/magicsalon public_html

# Keep only last 10 backups
ls -t $BACKUP_DIR/*.tar.gz | tail -n +11 | xargs rm -f

# Deploy
cd /var/www/magicsalon
git pull origin main

# Verify
if [ $? -eq 0 ]; then
    echo "Deployment successful"
else
    echo "Deployment failed, rolling back..."
    tar -xzf $BACKUP_FILE -C /var/www/magicsalon
fi
```

---

## Monitoring

### Uptime Monitoring

**Zalecane narzędzia:**
- UptimeRobot (https://uptimerobot.com/) - Free
- Pingdom (https://www.pingdom.com/)
- StatusCake (https://www.statuscake.com/)

### Log Monitoring

```bash
# Monitoruj logi PHP
tail -f /var/www/magicsalon/dist/logs/php-errors.log

# Monitoruj logi Nginx/Apache
tail -f /var/log/nginx/magicsalon-error.log
tail -f /var/log/apache2/error.log

# Filtruj błędy
grep -i "error" /var/www/magicsalon/dist/logs/php-errors.log | tail -20
```

### Performance Monitoring

**Google Analytics:**
- Core Web Vitals
- Page load times
- Bounce rate

**Server Monitoring:**
```bash
# CPU & Memory
htop

# Disk usage
df -h

# Network
netstat -tuln
```

---

## Post-Deployment Checklist

- [ ] Strona dostępna pod https://magicsalon.pl
- [ ] SSL certyfikat ważny (sprawdź: https://www.ssllabs.com/ssltest/)
- [ ] Wszystkie linki działają poprawnie
- [ ] Formularze działają
- [ ] Widget Booksy działa
- [ ] Widget WhatsApp działa
- [ ] Google Analytics śledzi wizyty
- [ ] Facebook Pixel działa
- [ ] Responsywność na mobile
- [ ] Szybkość ładowania < 3s
- [ ] Brak błędów w konsoli przeglądarki
- [ ] Brak błędów w logach PHP
- [ ] Backup wykonany i zweryfikowany
- [ ] Monitoring ustawiony
- [ ] DNS propagacja zakończona

---

## Troubleshooting

### Problem: Błąd 500

```bash
# Sprawdź logi
tail -f /var/www/magicsalon/dist/logs/php-errors.log

# Typowe przyczyny:
# 1. Błędy składni PHP
# 2. Brak wymaganych rozszerzeń
# 3. Błędne uprawnienia plików
# 4. Limit pamięci PHP przekroczony
```

### Problem: Strona pokazuje kod PHP

```bash
# PHP nie jest zainstalowane lub skonfigurowane
php -v  # Sprawdź wersję

# Apache: włącz mod_php
sudo a2enmod php8.2
sudo systemctl restart apache2

# Nginx: sprawdź konfigurację PHP-FPM
sudo systemctl status php8.2-fpm
```

### Problem: Assety (CSS/JS) nie ładują się

```bash
# Sprawdź uprawnienia
ls -la /var/www/magicsalon/dist/css
ls -la /var/www/magicsalon/dist/js

# Powinny być readable przez web server
sudo chmod -R 755 /var/www/magicsalon/dist
```

### Problem: "Permission denied" w logach

```bash
# Folder logs musi być writable
sudo chmod 775 /var/www/magicsalon/dist/logs
sudo chown www-data:www-data /var/www/magicsalon/dist/logs
```

---

## Kontakt / Contact

**Wsparcie wdrożenia:**
Deployment support:

- 📧 Email: biuro@magicsalon.pl
- 📚 Docs: [README.md](README.md)
- 🏗️ Architecture: [ARCHITECTURE.md](ARCHITECTURE.md)

---

**Ostatnia aktualizacja / Last updated:** 2025-11-24
**Wersja / Version:** 1.0.0
