# Strategia Testowania / Testing Strategy

## 📋 Przegląd / Overview

Ten dokument opisuje strategię testowania projektu **MAGIC SALON**, w tym rodzaje testów, narzędzia i procedury zapewniania jakości.

This document describes the testing strategy for the **MAGIC SALON** project, including test types, tools, and quality assurance procedures.

---

## 🎯 Cele Testowania / Testing Goals

1. ✅ Zapewnić poprawne działanie wszystkich funkcjonalności
2. 🐛 Wykryć błędy przed wdrożeniem na produkcję
3. 🔒 Zweryfikować bezpieczeństwo aplikacji
4. ♿ Sprawdzić dostępność (WCAG 2.2)
5. 📱 Potwierdzić responsywność na wszystkich urządzeniach
6. ⚡ Zoptymalizować wydajność

---

## 🧪 Rodzaje Testów / Types of Tests

### 1. **Testy Manualne / Manual Testing**

#### Browser Testing

**Przeglądarki do przetestowania:**
- ✅ Chrome (latest) - główna przeglądarka
- ✅ Firefox (latest)
- ✅ Safari (latest) - jeśli dostępne
- ✅ Edge (latest)
- ⚠️ Mobile browsers (Chrome Mobile, Safari iOS)

**Checklist:**
```
[ ] Wszystkie strony ładują się poprawnie
[ ] Menu nawigacyjne działa (desktop + mobile)
[ ] Formularze działają
[ ] Linki prowadzą do właściwych stron
[ ] Obrazy ładują się poprawnie
[ ] Assety (CSS/JS) są załadowane
[ ] Brak błędów w konsoli przeglądarki
[ ] Widgety (Booksy, WhatsApp) działają
```

#### Responsive Testing

**Breakpointy do przetestowania:**
- 📱 Mobile: 320px, 375px, 414px
- 📱 Tablet: 768px, 1024px
- 💻 Desktop: 1280px, 1920px

**Narzędzia:**
- Chrome DevTools (Device Mode)
- Firefox Responsive Design Mode
- BrowserStack / LambdaTest (opcjonalnie)

**Checklist:**
```
[ ] Layout dostosowuje się do szerokości ekranu
[ ] Tekst jest czytelny na małych ekranach
[ ] Menu mobile działa poprawnie
[ ] Obrazy są responsywne
[ ] Przyciski są łatwe do kliknięcia (min 44x44px)
[ ] Brak poziomego scrollowania
[ ] Sticky header działa poprawnie
```

#### Accessibility Testing (WCAG 2.2)

**Narzędzia:**
- WAVE (https://wave.webaim.org/)
- axe DevTools (Chrome extension)
- Lighthouse (Chrome DevTools)
- NVDA / JAWS (screen readers)

**Checklist:**
```
[ ] Wszystkie obrazy mają atrybut alt
[ ] Linki mają opisowy tekst
[ ] Formularze mają odpowiednie labele
[ ] Kontrast kolorów ≥ 4.5:1
[ ] Nawigacja klawiaturą działa (Tab, Enter, Escape)
[ ] Focus indicators są widoczne
[ ] Atrybuty ARIA są poprawne
[ ] Nagłówki (h1-h6) są hierarchiczne
[ ] Skip navigation link
```

---

### 2. **Testy Funkcjonalne / Functional Testing**

#### Testy Stron / Page Tests

**index.php (Home Page)**
```
[ ] Revolution Slider działa
[ ] Sekcje "O nas", "Oferta", "Cennik" wyświetlają się
[ ] CTA "Zarezerwuj wizytę" prowadzi do Booksy
[ ] Social media linki działają
[ ] Footer zawiera wszystkie informacje kontaktowe
```

**kontakt.php (Contact Page)**
```
[ ] Mapa Google wyświetla się
[ ] Dane kontaktowe są poprawne
[ ] WhatsApp widget działa
[ ] Email link otwiera klienta pocztowego
[ ] Telefon link otwiera telefon (mobile)
```

**zarezerwuj-wizyte.php (Booking Page)**
```
[ ] Booksy widget ładuje się
[ ] Można wybrać usługę
[ ] Można wybrać termin
[ ] Rezerwacja przekierowuje do Booksy
```

**galeria.php (Gallery Page)**
```
[ ] Obrazy ładują się (lazy loading)
[ ] Lightbox działa po kliknięciu
[ ] Filtrowanie kategorii działa (jeśli jest)
[ ] Obrazy mają alt text
```

#### Testy Komponentów / Component Tests

**partials/head.php**
```php
// Test: Meta tags rendering
$meta = [
    'title' => 'Test Title',
    'description' => 'Test Description'
];

// Oczekiwane:
// <title>Test Title</title>
// <meta name="description" content="Test Description">
```

**partials/header.php**
```
[ ] Logo prowadzi do strony głównej
[ ] Wszystkie elementy menu są widoczne
[ ] Active state zaznacza aktualną stronę
[ ] Submenu rozwija się po hover/click
[ ] Mobile menu toggle działa
[ ] CTA button jest widoczny
```

**partials/footer.php**
```
[ ] Widget WhatsApp działa
[ ] Widget Booksy działa
[ ] Slideout social media działa
[ ] Copyright year jest aktualny
[ ] Wszystkie linki działają
[ ] Facebook widget ładuje się
```

---

### 3. **Testy Bezpieczeństwa / Security Testing**

#### XSS (Cross-Site Scripting)

```php
// Test: Output escaping
$user_input = '<script>alert("XSS")</script>';

// Niepoprawne (vulnerable):
echo $user_input;

// Poprawne (safe):
echo e($user_input);
// Output: &lt;script&gt;alert(&quot;XSS&quot;)&lt;/script&gt;
```

**Checklist:**
```
[ ] Wszystkie outputy użytkownika są escapowane
[ ] Funkcja e() jest używana wszędzie
[ ] Brak direct echo $_POST lub $_GET
```

#### SQL Injection (jeśli będzie baza danych)

```php
// Niepoprawne:
$query = "SELECT * FROM users WHERE email = '" . $_POST['email'] . "'";

// Poprawne:
$stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
$stmt->execute([$_POST['email']]);
```

#### CSRF (Cross-Site Request Forgery)

```php
// TODO: Implement CSRF protection
// Generate token
if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// Verify token
if (!hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
    die('CSRF token validation failed');
}
```

#### Security Headers

```
[ ] X-Content-Type-Options: nosniff
[ ] X-Frame-Options: SAMEORIGIN
[ ] X-XSS-Protection: 1; mode=block
[ ] Referrer-Policy: strict-origin-when-cross-origin
[ ] HTTPS enforced
[ ] Secure cookie flags set
```

**Test online:**
- https://securityheaders.com/
- https://observatory.mozilla.org/

---

### 4. **Testy Wydajności / Performance Testing**

#### Metrics to Monitor

```
First Contentful Paint (FCP): < 1.8s
Largest Contentful Paint (LCP): < 2.5s
First Input Delay (FID): < 100ms
Cumulative Layout Shift (CLS): < 0.1
Time to Interactive (TTI): < 3.8s
Total Page Size: < 3MB
```

#### Tools

1. **Google Lighthouse**
   ```bash
   # Chrome DevTools → Lighthouse
   # Test on:
   - Performance
   - Accessibility
   - Best Practices
   - SEO
   ```

2. **Google PageSpeed Insights**
   - https://pagespeed.web.dev/
   - Test URL: https://magicsalon.pl/

3. **GTmetrix**
   - https://gtmetrix.com/
   - Track over time

4. **WebPageTest**
   - https://www.webpagetest.org/
   - Advanced diagnostics

#### Optimization Checklist

```
[ ] Images optimized (WebP, lazy loading)
[ ] CSS minified
[ ] JavaScript minified
[ ] Gzip/Brotli compression enabled
[ ] Browser caching configured
[ ] Cache-busting for assets (asset() function)
[ ] Preconnect to external domains
[ ] Critical CSS inline (optional)
[ ] Defer non-critical JavaScript
[ ] CDN usage (optional)
```

---

### 5. **Testy SEO / SEO Testing**

#### On-Page SEO

```
[ ] Unique title dla każdej strony (50-60 znaków)
[ ] Meta description (150-160 znaków)
[ ] H1 tag present (jeden na stronę)
[ ] Hierarchia H1-H6 zachowana
[ ] Canonical URL ustawiony
[ ] Open Graph tags present
[ ] Twitter Card tags present
[ ] Schema.org structured data
[ ] Alt text na obrazach
[ ] Semantic HTML5
[ ] Mobile-friendly
[ ] HTTPS enabled
[ ] robots.txt present
[ ] sitemap.xml present (TODO)
```

#### Tools

1. **Google Search Console**
   - Verify ownership
   - Submit sitemap
   - Monitor indexing

2. **SEO Checkers**
   - https://www.seobility.net/
   - https://www.seoptimer.com/
   - https://neilpatel.com/seo-analyzer/

3. **Structured Data Testing**
   - https://search.google.com/test/rich-results

---

## 🔄 Automated Testing (Future)

### PHPUnit (Unit Tests)

```php
// tests/HelpersTest.php
use PHPUnit\Framework\TestCase;

class HelpersTest extends TestCase
{
    public function testEscapeHtml()
    {
        $input = '<script>alert("XSS")</script>';
        $expected = '&lt;script&gt;alert(&quot;XSS&quot;)&lt;/script&gt;';
        $this->assertEquals($expected, escape_html($input));
    }

    public function testFormatPhone()
    {
        $input = '883481581';
        $expected = '+48 883 481 581';
        $this->assertEquals($expected, format_phone($input));
    }

    public function testAsset()
    {
        $input = 'css/style.css';
        $output = asset($input);
        $this->assertStringContainsString('?v=', $output);
    }
}
```

### Setup PHPUnit

```bash
# Install via Composer
composer require --dev phpunit/phpunit

# Run tests
./vendor/bin/phpunit tests

# With coverage
./vendor/bin/phpunit --coverage-html coverage tests
```

### Integration Tests (Future)

```php
// tests/Integration/PageTest.php
class PageTest extends TestCase
{
    public function testHomePage()
    {
        $response = $this->get('/index.php');
        $response->assertStatus(200);
        $response->assertSeeInOrder(['MAGIC SALON', 'Zarezerwuj wizytę']);
    }

    public function testContactPage()
    {
        $response = $this->get('/kontakt.php');
        $response->assertStatus(200);
        $response->assertSee('biuro@magicsalon.pl');
    }
}
```

---

## 🚀 CI/CD Testing

### GitHub Actions Workflow

```yaml
# .github/workflows/tests.yml
name: Tests

on: [push, pull_request]

jobs:
  test:
    runs-on: ubuntu-latest

    steps:
    - uses: actions/checkout@v4

    - name: Setup PHP
      uses: shivammathur/setup-php@v2
      with:
        php-version: '8.2'
        extensions: mbstring, json, fileinfo

    - name: PHP Lint
      run: find dist -name "*.php" -exec php -l {} \;

    - name: PHPUnit Tests
      run: ./vendor/bin/phpunit tests

    - name: PHP Code Sniffer
      run: ./vendor/bin/phpcs --standard=PSR12 dist

    - name: PHPStan Analysis
      run: ./vendor/bin/phpstan analyse dist
```

---

## 📝 Test Documentation

### Test Plan Template

```markdown
# Test Plan: [Feature Name]

## Objective
[What are we testing?]

## Scope
[What is included/excluded?]

## Test Cases

### TC-001: [Test Case Name]
- **Description:** [What this test does]
- **Prerequisites:** [Setup required]
- **Steps:**
  1. Step 1
  2. Step 2
  3. Step 3
- **Expected Result:** [What should happen]
- **Actual Result:** [What actually happened]
- **Status:** Pass/Fail
- **Notes:** [Any additional information]
```

### Bug Report Template

```markdown
# Bug Report: [Bug Title]

## Description
[Clear description of the bug]

## Steps to Reproduce
1. Go to...
2. Click on...
3. See error

## Expected Behavior
[What should happen]

## Actual Behavior
[What actually happens]

## Environment
- PHP Version:
- Browser:
- OS:
- Screen Size:

## Screenshots
[Attach screenshots]

## Additional Context
[Any other relevant information]
```

---

## 🎯 Definition of Done

Przed zamknięciem Issue lub merge Pull Request:

```
[ ] Wszystkie testy manualne przeszły
[ ] Testy automatyczne przeszły (jeśli istnieją)
[ ] Code review wykonany
[ ] Dokumentacja zaktualizowana
[ ] No console errors
[ ] No PHP errors in logs
[ ] Lighthouse score > 90
[ ] WCAG 2.2 AA compliance
[ ] Tested on Chrome, Firefox, Safari
[ ] Tested on mobile and desktop
[ ] Performance acceptable (< 3s load time)
```

---

## 📊 Test Metrics

### Tracking

```
Test Coverage: [TBD with PHPUnit]
Bug Density: [Bugs per 1000 lines of code]
Pass Rate: [Passed tests / Total tests]
Mean Time to Resolution: [Average time to fix bugs]
```

### Goals

```
Test Coverage: > 70%
Bug Density: < 1 per 1000 LOC
Pass Rate: > 95%
MTTR: < 48 hours
```

---

## 🔗 Resources

### Testing Tools
- PHPUnit: https://phpunit.de/
- Selenium: https://www.selenium.dev/
- Cypress: https://www.cypress.io/
- BrowserStack: https://www.browserstack.com/

### Accessibility
- WebAIM: https://webaim.org/
- A11y Project: https://www.a11yproject.com/
- WAVE: https://wave.webaim.org/

### Performance
- Web.dev: https://web.dev/
- Google Lighthouse: https://developers.google.com/web/tools/lighthouse

---

## 📞 Kontakt / Contact

**Pytania dotyczące testowania:**
Questions about testing:

- 📧 Email: biuro@magicsalon.pl
- 📚 Docs: [CONTRIBUTING.md](CONTRIBUTING.md)
- 🐛 Issues: [GitHub Issues](../../issues)

---

**Ostatnia aktualizacja / Last updated:** 2025-11-24
**Wersja / Version:** 1.0.0
