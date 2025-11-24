# Wsparcie / Support

## 🆘 Potrzebujesz Pomocy? / Need Help?

Witamy w sekcji wsparcia projektu **MAGIC SALON**! Ten dokument pomoże Ci znaleźć odpowiedzi na pytania i uzyskać pomoc.

Welcome to the **MAGIC SALON** project support section! This document will help you find answers and get help.

## 📚 Dokumentacja / Documentation

Zanim poprosisz o pomoc, sprawdź dostępną dokumentację:
Before asking for help, check the available documentation:

### Dokumenty Główne / Main Documents

- 📖 [README.md](README.md) - Podstawowe informacje o projekcie / Basic project information
- 🤖 [CLAUDE.md](CLAUDE.md) - Szczegółowa dokumentacja architektury / Detailed architecture documentation
- 🤝 [CONTRIBUTING.md](CONTRIBUTING.md) - Jak współtworzyć projekt / How to contribute
- 🔒 [SECURITY.md](SECURITY.md) - Polityka bezpieczeństwa / Security policy
- ⚖️ [LICENSE.md](LICENSE.md) - Informacje o licencji / License information

### Pliki Referencyjne / Reference Files

- `META TAG-OPENGRAPH-CSSSTYLESHET.txt` - Wytyczne SEO i meta tagów
- `prompt do generowania teksty SEO.md` - Prompt do generowania treści SEO
- `/dist/config.php` - Główny plik konfiguracyjny
- `/dist/helpers.php` - Funkcje pomocnicze z przykładami użycia

## 🔍 Szukanie Istniejących Odpowiedzi / Search Existing Answers

### GitHub Issues

Sprawdź, czy twoje pytanie nie zostało już zadane:
Check if your question hasn't been asked before:

1. Przejdź do [Issues](../../issues)
2. Użyj wyszukiwarki z słowami kluczowymi
3. Sprawdź zarówno otwarte, jak i zamknięte Issues
4. Przeczytaj podobne dyskusje

### GitHub Discussions (jeśli włączone)

Sprawdź sekcję Discussions dla ogólnych pytań i dyskusji.
Check the Discussions section for general questions and discussions.

## 💬 Rodzaje Wsparcia / Types of Support

### 1. 🐛 Problemy Techniczne / Technical Issues

Jeśli napotkałeś błąd lub problem:
If you encountered a bug or issue:

**[Utwórz nowy Issue](../../issues/new)**

Dołącz:
Include:
- Jasny opis problemu / Clear description of the problem
- Kroki do odtworzenia / Steps to reproduce
- Oczekiwane vs rzeczywiste zachowanie / Expected vs actual behavior
- Środowisko (PHP, przeglądarka, OS) / Environment
- Zrzuty ekranu / Screenshots

### 2. 💡 Pytania o Funkcjonalności / Feature Questions

Masz pytanie o istniejącą funkcjonalność?
Have a question about existing functionality?

**[Utwórz Issue z etykietą "question"](../../issues/new)**

### 3. 🎯 Sugestie Ulepszeń / Enhancement Suggestions

Chcesz zaproponować nową funkcję?
Want to propose a new feature?

**[Utwórz Issue z etykietą "enhancement"](../../issues/new)**

### 4. 📖 Pytania o Dokumentację / Documentation Questions

Dokumentacja jest niejasna lub brakuje informacji?
Documentation is unclear or missing information?

**[Utwórz Issue z etykietą "documentation"](../../issues/new)**

### 5. 🔧 Pomoc w Rozwoju / Development Help

Potrzebujesz pomocy w implementacji?
Need help with implementation?

**[Sprawdź CONTRIBUTING.md](CONTRIBUTING.md)** lub utwórz Issue

## 📧 Kontakt Bezpośredni / Direct Contact

### Email

Dla pilnych spraw lub prywatnych pytań:
For urgent matters or private questions:

- **Email:** biuro@magicsalon.pl
- **Czas odpowiedzi:** 1-3 dni robocze / 1-3 business days

**Kiedy używać email:**
When to use email:
- Pytania biznesowe / Business inquiries
- Prywatne informacje / Private information
- Problemy z bezpieczeństwem (zobacz [SECURITY.md](SECURITY.md))
- Współpraca komercyjna / Commercial collaboration

### Telefon / Phone

Dla klientów salonu:
For salon clients:

- **Telefon / Phone:** +48 883 481 581
- **Godziny / Hours:** Pon-Pt 09:00-20:00, Sob 09:00-18:00

## 🚀 Często Zadawane Pytania / FAQ

### Instalacja i Konfiguracja / Installation & Configuration

**Q: Jak uruchomić projekt lokalnie?**
**Q: How to run the project locally?**

A:
```bash
cd dist
php -S localhost:8000
```
Wymagania: PHP 8.x lub nowszy
Requirements: PHP 8.x or newer

**Q: Gdzie zmienić konfigurację?**
**Q: Where to change configuration?**

A: Edytuj `dist/config.php` - zawiera wszystkie główne ustawienia.
A: Edit `dist/config.php` - contains all main settings.

**Q: Jak dodać nową stronę?**
**Q: How to add a new page?**

A:
1. Skopiuj strukturę z `dist/index.php`
2. Zaktualizuj `$meta` array
3. Dodaj treść między header a footer
4. Opcjonalnie zaktualizuj nawigację w `partials/header.php`

### Stylowanie / Styling

**Q: Gdzie są kolory brandu?**
**Q: Where are the brand colors?**

A: Zobacz sekcję "Brand Colors" w [CLAUDE.md](CLAUDE.md):
```css
--color-theme-primary: #6D356F;
--color-theme-secondary: #D7A54F;
```

**Q: Jak dodać nowy CSS?**
**Q: How to add new CSS?**

A: Dodaj do `$meta['styles']` array na stronie lub edytuj istniejące pliki w `dist/css/`.

### Rozwój / Development

**Q: Czy używamy frameworka PHP?**
**Q: Do we use a PHP framework?**

A: Nie, to czysty PHP z customowymi helperami w `helpers.php`.
A: No, it's pure PHP with custom helpers in `helpers.php`.

**Q: Jak działa cache-busting?**
**Q: How does cache-busting work?**

A: Funkcja `asset()` automatycznie dodaje `?v=timestamp` do plików.
A: The `asset()` function automatically adds `?v=timestamp` to files.

**Q: Dlaczego używamy DIRECTORY_SEPARATOR?**
**Q: Why do we use DIRECTORY_SEPARATOR?**

A: Dla kompatybilności między Windows i Linux/Mac. Zobacz [CLAUDE.md](CLAUDE.md) sekcja "Path Handling".

### SEO i Meta Tagi / SEO & Meta Tags

**Q: Jak zmienić SEO na stronie?**
**Q: How to change SEO on a page?**

A: Zaktualizuj `$meta` array w pliku strony przed `require head.php`.

**Q: Gdzie są ustawienia Schema.org?**
**Q: Where are Schema.org settings?**

A: W `partials/head.php` w sekcji `$defaults['schema']`.

## 🎓 Zasoby Edukacyjne / Learning Resources

### PHP
- [Oficjalna dokumentacja PHP](https://www.php.net/manual/pl/)
- [PHP 8 Features](https://www.php.net/releases/8.0/en.php)

### HTML/CSS
- [MDN Web Docs](https://developer.mozilla.org/)
- [CSS-Tricks](https://css-tricks.com/)

### Dostępność / Accessibility
- [WCAG 2.2 Guidelines](https://www.w3.org/WAI/WCAG22/quickref/)
- [WebAIM](https://webaim.org/)

### Bootstrap
- [Bootstrap 5 Documentation](https://getbootstrap.com/docs/5.0/)

## 🕒 Czasy Odpowiedzi / Response Times

| Typ / Type               | Czas / Time         |
| ------------------------ | ------------------- |
| Security Issues          | 24h                 |
| Critical Bugs            | 1-2 dni / days      |
| General Questions        | 3-5 dni / days      |
| Feature Requests         | 1-2 tygodnie / weeks|
| Documentation Updates    | 1 tydzień / week    |

## ✅ Przed Zadaniem Pytania / Before Asking

Sprawdź:
Check:

- [ ] Przeczytałem dokumentację / I've read the documentation
- [ ] Przeszukałem istniejące Issues / I've searched existing issues
- [ ] Przetestowałem na najnowszej wersji / I've tested on the latest version
- [ ] Przygotowałem minimalny przykład problemu / I've prepared a minimal example
- [ ] Dołączam informacje o środowisku / I'm including environment info

## 🤝 Społeczność / Community

### Kod Postępowania / Code of Conduct

Wszyscy uczestnicy muszą przestrzegać naszego [Kodeksu Postępowania](CODE_OF_CONDUCT.md).
All participants must follow our [Code of Conduct](CODE_OF_CONDUCT.md).

### Jak Pomóc Innym / How to Help Others

- Odpowiadaj na pytania w Issues
- Dziel się swoimi rozwiązaniami
- Ulepszaj dokumentację
- Recenzuj Pull Requesty

## 🔄 Aktualizacje / Updates

Ten dokument jest regularnie aktualizowany. Ostatnia aktualizacja: 2025-11-24

This document is regularly updated. Last update: 2025-11-24

---

**Dziękujemy za bycie częścią społeczności MAGIC SALON!**
**Thank you for being part of the MAGIC SALON community!** 💜
