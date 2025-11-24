# Changelog

Wszystkie istotne zmiany w projekcie będą dokumentowane w tym pliku.
All notable changes to this project will be documented in this file.

Format bazuje na [Keep a Changelog](https://keepachangelog.com/pl/1.0.0/),
a projekt stosuje [Semantic Versioning](https://semver.org/lang/pl/).

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

### Planowane / Planned
- Blog system
- Multi-language support (PL/EN)
- Admin panel
- Automated tests (PHPUnit)
- Contact form with backend processing

---

## [2.1.0] - 2025-11-24

### Dodano / Added
- 📚 Kompletna dokumentacja projektu:
  - CLAUDE.md - Dokumentacja dla AI
  - ARCHITECTURE.md - Architektura systemu
  - API_DOCUMENTATION.md - Dokumentacja API (przyszłość)
  - DEPLOYMENT.md - Przewodnik wdrożenia
  - TESTING.md - Strategia testowania
  - CHANGELOG.md - Ten plik
- 🤝 Pliki społeczności:
  - CODE_OF_CONDUCT.md
  - CONTRIBUTING.md
  - SECURITY.md
  - SUPPORT.md
  - LICENSE.md
- ⚙️ Pliki konfiguracyjne:
  - composer.json - Zarządzanie zależnościami PHP
  - .editorconfig - Spójne formatowanie kodu
  - .php-cs-fixer.php - Code style fixer
  - phpstan.neon - Static analysis
- 🎯 GitHub templates:
  - PULL_REQUEST_TEMPLATE.md
  - ISSUE_TEMPLATE/bug_report.yml
  - ISSUE_TEMPLATE/feature_request.yml
  - ISSUE_TEMPLATE/documentation.yml
  - ISSUE_TEMPLATE/question.yml
  - copilot-instructions.md
- 🚀 GitHub Actions workflows:
  - deploy.yml - Automatyczne wdrożenie
  - tests.yml - Rozszerzone testy

### Zmieniono / Changed
- ♻️ Poprawiono strukturę katalogów
- 📝 Zaktualizowano README.md
- 🔧 Ulepszone komentarze w config.php
- 🎨 Standaryzacja formatowania kodu

### Naprawiono / Fixed
- 🐛 Naprawiono błędy ścieżek w config.php (DIRECTORY_SEPARATOR)
- 🔒 Poprawiono nagłówki bezpieczeństwa
- 📱 Naprawiono responsywność menu mobilnego
- 🖼️ Poprawiono wyświetlanie Revolution Slider

---

## [2.0.0] - 2025-10-20

### Dodano / Added
- 🎯 Modularyzacja projektu:
  - `partials/head.php` - Dynamiczny <head> z SEO
  - `partials/header.php` - Responsywny header z nawigacją
  - `partials/footer.php` - Footer z widgetami
- ⚙️ System konfiguracji:
  - `config.php` - Centralna konfiguracja
  - `helpers.php` - Biblioteka funkcji pomocniczych
- 🔐 Security features:
  - Security headers (X-Frame-Options, CSP, etc.)
  - Output escaping helpers
  - Session security configuration
- 📊 Integracje:
  - Google Analytics (GA4)
  - Facebook Pixel (2 pixele)
  - Google Tag Manager
  - Booksy widget
  - WhatsApp click-to-chat
- 📱 Responsive design:
  - Mobile-first approach
  - Bootstrap 5 integration
  - Collapsible mobile menu

### Zmieniono / Changed
- 🔄 Konwersja z HTML na PHP:
  - Wszystkie strony .html → .php
  - Statyczne treści → dynamiczne komponenty
  - Duplikaty kodu → reużywalne partials
- 📝 SEO improvements:
  - Dynamiczne meta tagi
  - Schema.org structured data
  - Open Graph tags
  - Twitter Cards
- 🎨 UI/UX enhancements:
  - Ulepszona nawigacja
  - Floating widgets (WhatsApp, Booksy)
  - Sticky header on scroll
  - Smooth animations

### Naprawiono / Fixed
- 🐛 Cross-browser compatibility issues
- 📱 Mobile menu display problems
- 🖼️ Image loading optimization
- ⚡ Page load performance

---

## [1.0.0] - 2025-08-09

### Dodano / Added
- 🎉 Initial release
- 🏠 Static HTML website:
  - index.html - Strona główna
  - o-firmie.html - O nas
  - oferta.html - Oferta
  - cennik.html - Cennik
  - galeria.html - Galeria
  - kontakt.html - Kontakt
  - opinie-klientow.html - Opinie
  - faq-pytania.html - FAQ
  - polityka-prywatnosci-rodo.html - Polityka prywatności
  - zarezerwuj-wizyte.html - Rezerwacja
- 🎨 Design system:
  - Brand colors (purple #6D356F, gold #D7A54F)
  - Custom CSS with Bootstrap 5
  - Font Awesome 7.1.0 icons
  - Google Fonts (Poppins)
- 🖼️ Media:
  - Logo and branding
  - Service images
  - Gallery photos
- 🔌 Third-party plugins:
  - Revolution Slider
  - Owl Carousel
  - Magnific Popup

---

## Typy Zmian / Types of Changes

- `Added` / Dodano - nowe funkcje
- `Changed` / Zmieniono - zmiany w istniejącej funkcjonalności
- `Deprecated` / Przestarzałe - funkcje które zostaną usunięte
- `Removed` / Usunięto - usunięte funkcje
- `Fixed` / Naprawiono - naprawione błędy
- `Security` / Bezpieczeństwo - poprawki bezpieczeństwa

---

## Semantic Versioning Guide

**Format:** `MAJOR.MINOR.PATCH`

- **MAJOR** (1.0.0 → 2.0.0): Breaking changes - zmiany niekompatybilne wstecz
- **MINOR** (1.0.0 → 1.1.0): New features - nowe funkcje, kompatybilne wstecz
- **PATCH** (1.0.0 → 1.0.1): Bug fixes - poprawki błędów

**Przykłady / Examples:**
- `2.1.0` - Nowa funkcjonalność dodana (blog system)
- `2.0.1` - Naprawa błędu w menu mobilnym
- `3.0.0` - Przepisanie na framework (Laravel, Symfony)

---

## Linki / Links

- [Unreleased] vs [2.1.0]: https://github.com/PB-MEDIA-Strony-Sklepy-Marketing/magicsalon-pl-php/compare/v2.0.0...HEAD
- [2.1.0] vs [2.0.0]: https://github.com/PB-MEDIA-Strony-Sklepy-Marketing/magicsalon-pl-php/compare/v1.0.0...v2.0.0
- [2.0.0] vs [1.0.0]: https://github.com/PB-MEDIA-Strony-Sklepy-Marketing/magicsalon-pl-php/compare/v1.0.0...v2.0.0

---

## Kontrybucje / Contributing

Zobacz [CONTRIBUTING.md](CONTRIBUTING.md) aby dowiedzieć się jak przyczynić się do projektu.
See [CONTRIBUTING.md](CONTRIBUTING.md) to learn how to contribute to the project.

---

**Utrzymywane przez / Maintained by:** PB MEDIA
**Kontakt / Contact:** biuro@magicsalon.pl
**Website:** https://magicsalon.pl/
