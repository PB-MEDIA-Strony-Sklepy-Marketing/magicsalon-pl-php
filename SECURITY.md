# Polityka Bezpieczeństwa / Security Policy

## 🔒 Wspierane Wersje / Supported Versions

Aktualnie wspieramy następujące wersje projektu pod kątem aktualizacji bezpieczeństwa:
We currently support the following versions for security updates:

| Wersja / Version | Wspierana / Supported |
| ---------------- | --------------------- |
| main (latest)    | ✅ Tak / Yes          |
| develop          | ✅ Tak / Yes          |
| < 2.0            | ❌ Nie / No           |

## 🚨 Zgłaszanie Luk w Zabezpieczeniach / Reporting a Vulnerability

### Dla Poważnych Problemów / For Critical Issues

Jeśli odkryjesz poważną lukę w zabezpieczeniach:
If you discover a critical security vulnerability:

**NIE** twórz publicznego Issue!
**DO NOT** create a public issue!

Zamiast tego / Instead:

1. 📧 Wyślij email na: **biuro@magicsalon.pl**
2. 📝 Użyj tematu: "SECURITY: [krótki opis problemu]"
3. 🔐 Jeśli to możliwe, zaszyfruj wiadomość

### Co Zawrzeć w Zgłoszeniu / What to Include

Twoje zgłoszenie powinno zawierać:
Your report should include:

- 📋 Typ luki (SQL injection, XSS, CSRF, itp.)
- 📍 Lokalizacja problemu (plik, funkcja, linia kodu)
- 🔍 Kroki do odtworzenia luki
- 💥 Potencjalny wpływ na bezpieczeństwo
- 🛠️ Sugerowane rozwiązanie (jeśli masz)
- 🎯 Proof of Concept (jeśli jest bezpieczne do udostępnienia)

### Przykład Zgłoszenia / Example Report

```
Temat: SECURITY: Potencjalny XSS w formularzu kontaktowym

Opis:
Znalazłem potencjalną lukę XSS w formularzu kontaktowym (kontakt.php).
Pole "message" nie jest odpowiednio escapowane przed wyświetleniem.

Lokalizacja:
Plik: dist/kontakt.php
Linia: ~123

Kroki do odtworzenia:
1. Przejdź do formularza kontaktowego
2. Wprowadź w polu wiadomości: <script>alert('XSS')</script>
3. Wyślij formularz
4. Skrypt zostaje wykonany

Wpływ:
Atakujący może wykonać złośliwy JavaScript w kontekście użytkownika.

Sugerowane rozwiązanie:
Użyć funkcji e() lub escape_html() przed wyświetleniem:
echo e($message);
```

## ⏱️ Oczekiwany Czas Odpowiedzi / Expected Response Time

| Priorytet / Priority | Czas Odpowiedzi / Response Time |
| -------------------- | ------------------------------- |
| Krytyczny / Critical | 24 godziny / hours              |
| Wysoki / High        | 72 godziny / hours              |
| Średni / Medium      | 1 tydzień / week                |
| Niski / Low          | 2 tygodnie / weeks              |

## 🔐 Najlepsze Praktyki Bezpieczeństwa / Security Best Practices

### Dla Deweloperów / For Developers

1. **Walidacja Danych Wejściowych / Input Validation**
   ```php
   // Zawsze waliduj i sanityzuj dane wejściowe
   $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
   ```

2. **Escapowanie Output / Output Escaping**
   ```php
   // Używaj funkcji e() lub escape_html()
   echo e($user_input);
   ```

3. **Przygotowane Zapytania / Prepared Statements**
   ```php
   // Nigdy nie konkatenuj SQL bezpośrednio
   $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
   $stmt->execute([$email]);
   ```

4. **CSRF Protection**
   ```php
   // Generuj i weryfikuj tokeny CSRF dla formularzy
   $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
   ```

5. **Nagłówki Bezpieczeństwa / Security Headers**
   - X-Content-Type-Options: nosniff
   - X-Frame-Options: SAMEORIGIN
   - X-XSS-Protection: 1; mode=block
   - Content-Security-Policy (gdy to możliwe)

### Dla Użytkowników / For Users

1. **Używaj Silnych Haseł / Use Strong Passwords**
   - Minimum 12 znaków
   - Kombinacja liter, cyfr i symboli

2. **Aktualizuj Oprogramowanie / Keep Software Updated**
   - PHP 8.x lub nowszy
   - Aktualne biblioteki i zależności

3. **Bezpieczna Konfiguracja / Secure Configuration**
   - Ustaw `APP_ENV=production` na produkcji
   - Wyłącz wyświetlanie błędów (`display_errors=0`)
   - Używaj HTTPS

## 🛡️ Znane Problemy / Known Issues

### Aktualne / Current

Brak znanych problemów bezpieczeństwa.
No known security issues at this time.

### Rozwiązane / Resolved

Lista rozwiązanych problemów będzie aktualizowana tutaj.
List of resolved issues will be updated here.

## 📚 Zasoby / Resources

- [OWASP Top 10](https://owasp.org/www-project-top-ten/)
- [PHP Security Best Practices](https://www.php.net/manual/en/security.php)
- [WCAG 2.2 Guidelines](https://www.w3.org/WAI/WCAG22/quickref/)

## 🏆 Program Uznania / Recognition Program

Doceniamy odpowiedzialne zgłaszanie luk w zabezpieczeniach:
We appreciate responsible disclosure of security vulnerabilities:

- 🎖️ Uznanie w pliku SECURITY.md (za zgodą zgłaszającego)
- 📢 Publiczne podziękowanie po naprawie luki
- 🤝 Możliwość współpracy przy rozwiązaniu problemu

### Hall of Fame

*Lista osób, które pomogły nam poprawić bezpieczeństwo:*
*List of people who helped us improve security:*

- (Brak zgłoszeń / No reports yet)

## 📞 Kontakt / Contact

**Bezpieczeństwo / Security:**
- Email: biuro@magicsalon.pl
- Temat: "SECURITY: [opis]"

**Ogólne pytania / General questions:**
- Zobacz: [SUPPORT.md](SUPPORT.md)

---

**Dziękujemy za pomoc w utrzymaniu bezpieczeństwa MAGIC SALON!**
**Thank you for helping keep MAGIC SALON secure!** 🔐
