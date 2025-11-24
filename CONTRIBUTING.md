# Wytyczne dla Współtwórców / Contributing Guidelines

## Witamy! / Welcome!

Dziękujemy za zainteresowanie współtworzeniem projektu **MAGIC SALON**! Ten dokument zawiera wytyczne, które pomogą Ci przyczynić się do rozwoju projektu.

Thank you for your interest in contributing to the **MAGIC SALON** project! This document contains guidelines to help you contribute to the project.

## 📋 Spis Treści / Table of Contents

- [Jak mogę pomóc?](#jak-mogę-pomóc--how-can-i-help)
- [Zgłaszanie błędów](#zgłaszanie-błędów--reporting-bugs)
- [Sugerowanie ulepszeń](#sugerowanie-ulepszeń--suggesting-enhancements)
- [Proces Pull Request](#proces-pull-request--pull-request-process)
- [Standardy kodowania](#standardy-kodowania--coding-standards)
- [Struktura commitów](#struktura-commitów--commit-structure)

## Jak mogę pomóc? / How Can I Help?

Istnieje wiele sposobów, aby przyczynić się do projektu:
There are many ways to contribute to the project:

- 🐛 Zgłaszanie błędów / Report bugs
- 💡 Proponowanie nowych funkcji / Suggest new features
- 📝 Ulepszanie dokumentacji / Improve documentation
- 🔧 Naprawianie błędów / Fix bugs
- ✨ Dodawanie nowych funkcjonalności / Add new features
- 🎨 Ulepszanie UI/UX / Improve UI/UX
- 🌐 Tłumaczenia / Translations
- ♿ Poprawa dostępności (WCAG 2.2) / Improve accessibility

## Zgłaszanie Błędów / Reporting Bugs

Przed zgłoszeniem błędu:
Before reporting a bug:

1. Sprawdź, czy błąd nie został już zgłoszony w Issues
2. Sprawdź, czy używasz najnowszej wersji kodu z głównej gałęzi

Zgłaszając błąd, dołącz:
When reporting a bug, include:

- Jasny i opisowy tytuł / Clear and descriptive title
- Kroki do odtworzenia problemu / Steps to reproduce the issue
- Oczekiwane zachowanie / Expected behavior
- Rzeczywiste zachowanie / Actual behavior
- Zrzuty ekranu (jeśli dotyczy) / Screenshots (if applicable)
- Środowisko (przeglądarka, wersja PHP, system operacyjny) / Environment (browser, PHP version, OS)
- Dodatkowy kontekst / Additional context

## Sugerowanie Ulepszeń / Suggesting Enhancements

Przy sugerowaniu ulepszeń:
When suggesting enhancements:

- Użyj jasnego i opisowego tytułu / Use a clear and descriptive title
- Podaj szczegółowy opis sugerowanego ulepszenia / Provide a detailed description
- Wyjaśnij, dlaczego to ulepszenie byłoby przydatne / Explain why this enhancement would be useful
- Dołącz przykłady lub mockupy (jeśli to możliwe) / Include examples or mockups (if possible)

## Proces Pull Request / Pull Request Process

### 1. Fork i Clone

```bash
# Fork repozytorium na swoim koncie GitHub
# Clone your fork
git clone https://github.com/YOUR_USERNAME/magicsalon-pl-php.git
cd magicsalon-pl-php
```

### 2. Utwórz Branch

```bash
# Utwórz nowy branch dla swojej funkcjonalności
git checkout -b feature/nazwa-funkcji

# lub dla naprawy błędu
git checkout -b fix/nazwa-bledu
```

### 3. Wprowadź Zmiany

- Pracuj w katalogu `/dist/` (aktywny kod aplikacji)
- Postępuj zgodnie ze standardami kodowania (patrz niżej)
- Przetestuj swoje zmiany lokalnie
- Upewnij się, że kod działa w PHP 8.x

### 4. Commit

```bash
# Dodaj zmienione pliki
git add .

# Commit ze znaczącym komunikatem
git commit -m "feat: dodaj nową funkcjonalność X"
```

### 5. Push i Pull Request

```bash
# Push do swojego fork'a
git push origin feature/nazwa-funkcji
```

Następnie utwórz Pull Request na GitHubie:
Then create a Pull Request on GitHub:

- Wypełnij szablon Pull Request
- Odnieś się do powiązanych Issues (jeśli istnieją)
- Wyjaśnij wprowadzone zmiany
- Dodaj zrzuty ekranu (jeśli dotyczy)

## Standardy Kodowania / Coding Standards

### PHP

```php
<?php
// Zawsze używaj pełnych tagów PHP (nie skrótów)
// Always use full PHP tags (no short tags)

// Używaj type hints
function example(string $name, int $age): bool
{
    // ...
}

// Sprawdzaj istnienie funkcji przed definicją
if (!function_exists('my_function')) {
    function my_function() {
        // ...
    }
}

// Escapuj output
echo e($variable);  // lub escape_html($variable)

// Używaj DIRECTORY_SEPARATOR dla ścieżek systemowych
require_once __DIR__ . DIRECTORY_SEPARATOR . 'config.php';

// Używaj BASE_URL dla URL-i frontendowych
$url = BASE_URL . '/kontakt.php';
```

### HTML/CSS

- Użyj semantycznego HTML5
- Dodaj odpowiednie atrybuty `alt` do obrazów
- Używaj zmiennych CSS z palety kolorów brandu:
  ```css
  :root {
      --color-theme-primary: #6D356F;
      --color-theme-secondary: #D7A54F;
      --color-hover: #9F5BA4;
  }
  ```
- Zapewnij responsywność (mobile-first)

### JavaScript

- Używaj nowoczesnego JavaScript (ES6+)
- Unikaj globalnych zmiennych
- Komentuj skomplikowaną logikę
- Upewnij się, że kod działa w głównych przeglądarkach

### Dostępność (WCAG 2.2)

- Dodaj odpowiednie atrybuty ARIA
- Zapewnij kontrast kolorów
- Umożliw nawigację klawiaturą
- Dodaj opisy do interaktywnych elementów

## Struktura Commitów / Commit Structure

Używamy konwencji Conventional Commits:
We use Conventional Commits convention:

```
<typ>(<zakres>): <opis>

[opcjonalne ciało]

[opcjonalne stopka]
```

### Typy commitów / Commit types:

- `feat`: Nowa funkcjonalność / New feature
- `fix`: Naprawa błędu / Bug fix
- `docs`: Zmiany w dokumentacji / Documentation changes
- `style`: Formatowanie, brakujące średniki, itp. / Formatting, missing semicolons, etc.
- `refactor`: Refaktoryzacja kodu / Code refactoring
- `perf`: Poprawa wydajności / Performance improvement
- `test`: Dodanie testów / Adding tests
- `chore`: Zmiany w procesie budowania, narzędzia, itp. / Build process changes, tools, etc.

### Przykłady / Examples:

```
feat(header): dodaj przycisk rezerwacji w menu mobilnym
fix(footer): popraw wyświetlanie widget'u WhatsApp na iOS
docs(readme): zaktualizuj instrukcje instalacji
style(css): uporządkuj zmienne kolorów brandu
refactor(helpers): zoptymalizuj funkcję asset()
```

## Testowanie / Testing

Przed przesłaniem Pull Request:
Before submitting a Pull Request:

1. Przetestuj kod lokalnie:
   ```bash
   cd dist
   php -S localhost:8000
   ```

2. Sprawdź w różnych przeglądarkach:
   - Chrome/Edge
   - Firefox
   - Safari (jeśli możliwe)

3. Przetestuj responsywność:
   - Desktop (1920px+)
   - Tablet (768px-1024px)
   - Mobile (320px-767px)

4. Sprawdź dostępność:
   - Nawigacja klawiaturą
   - Czytniki ekranu (jeśli możliwe)

## Proces Review

1. Co najmniej jeden opiekun projektu przejrzy twój Pull Request
2. Mogą być wymagane zmiany lub poprawki
3. Po zatwierdzeniu, twój kod zostanie zmergowany do głównej gałęzi

## Pytania? / Questions?

Jeśli masz pytania:
If you have questions:

- Otwórz Issue z etykietą "question"
- Skontaktuj się z zespołem: biuro@magicsalon.pl
- Zobacz dokumentację: [CLAUDE.md](CLAUDE.md), [README.md](README.md)

## Licencja / License

Przesyłając Pull Request, zgadzasz się, że twój wkład będzie objęty tą samą licencją, co projekt.

By submitting a Pull Request, you agree that your contributions will be licensed under the same license as the project.

---

**Dziękujemy za twoją współpracę! / Thank you for your contribution!** 🎉
