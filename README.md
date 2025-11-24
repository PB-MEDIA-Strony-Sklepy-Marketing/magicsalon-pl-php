# Magic Salon – strona WWW w PHP (konwersja z HTML)

Repozytorium zawiera kod źródłowy strony internetowej **Magic Salon – Salon kosmetyczny** w miejscowości Dobrzykowice, po konwersji z klasycznego szablonu HTML/CSS/JS na **modularny projekt w PHP**.  
Celem projektu jest:

- ułatwienie dalszego rozwoju i utrzymania strony,
- dostosowanie pod kątem **SEO**, **wydajności**, **WCAG 2.2**,
- stworzenie spójnych, wielokrotnego użytku komponentów (nagłówek, stopka, sekcje),
- integracja z systemem rezerwacji **Booksy**.

Adres produkcyjny: **https://magicsalon.pl/**  

---

## 1. Stos technologiczny

- **PHP** – docelowo PHP 8.5 (obecny kod jest kompatybilny z PHP 8.x, ale nie wykorzystuje frameworka).
- **HTML5** – semantyczny kod, sekcje podstron (home, oferta, cennik, galeria, kontakt itd.).
- **CSS**:
  - własne arkusze (`css/`, `fixes.css`),
  - planowane wykorzystanie zmiennych CSS (`:root`) z paletą kolorów brandu.
- **JavaScript** – skrypty w katalogu `js/` (np. animacje, interakcje, slider, nawigacja).
- **Bootstrap** – układ responsywny w oparciu o grid i komponenty (w kodzie HTML/PHP poszczególnych podstron).
- **Ikony** – Font Awesome lub podobne (włączane w szablonach).
- **Google Fonts** – elegancka, czytelna czcionka webowa (w head).
- **SEO / OpenGraph**:
  - plik referencyjny: `META TAG-OPENGRAPH-CSSSTYLESHET.txt` – wytyczne dot. meta tagów, OG, CSS.
  - dedykowany prompt: `prompt do generowania teksty SEO.md` – do generowania treści SEO.

---

## 2. Struktura repozytorium (główne elementy)

> Uwaga: poniższa lista bazuje na częściowo ograniczonych danych z API GitHuba – pełna struktura dostępna jest tutaj:  
> https://github.com/PB-MEDIA-Strony-Sklepy-Marketing/magicsalon-pl-php/tree/main

Najważniejsze elementy:

- `index.php` – strona główna serwisu (HOME);
- Strony statyczno-dynamiczne (podstrony serwisu):
  - `o-firmie.php` – informacje o firmie / o nas,
  - `nasza-oferta.php`, `oferta.php` – oferta zabiegów,
  - `cennik.php` – cennik usług,
  - `galeria.php` – galeria zdjęć,
  - `opinie-klientow.php` – opinie klientów,
  - `faq-pytania.php` – najczęściej zadawane pytania (FAQ),
  - `kontakt.php` – dane kontaktowe, formularz, mapa,
  - `polityka-prywatnosci-rodo.php` – polityka prywatności / RODO,
  - `zarezerwuj-wizyte.php` – strona CTA z rezerwacją wizyty (integracja z Booksy).
- Strony błędów:
  - `403.php` – błąd dostępu,
  - `404.php` – strona nieznaleziona,
  - `500.php` – błąd serwera.
- Konfiguracja i helpery:
  - `config.php` – główne ustawienia serwisu (np. dane firmy, podstawowe stałe, ścieżki),
  - `helpers.php` – funkcje pomocnicze (np. generowanie tytułów, meta tagów, skróty dla sekcji).
- Struktura zasobów:
  - `/css` – główne arkusze stylów,
  - `fixes.css` – łatki i poprawki wizualne / responsywne,
  - `/js` – skrypty JavaScript (interakcje, slider, nawigacja itd.),
  - `/images` – grafiki, zdjęcia, favicony,
  - `/fonts` – pliki z czcionkami,
  - `/plugins` – zewnętrzne wtyczki JS/CSS (np. slider, lightbox),
  - `/logs` – logi aplikacji (np. do błędów, diagnostyki).
- Dodatkowe katalogi i treści:
  - `/blog` – zaczątek lub struktura pod blog,
  - `/o-nas`, `/nasza-oferta` – podkatalogi dla wariantów treści / sekcji oferty,
  - `/partials` – **kierunek na komponentyzację** (nagłówki/stopki/sekcje jako include).

Pliki projektowe / meta:

- `.gitattributes` – konfiguracja Git dotycząca typów plików / normalizacji końca linii,
- `.gitignore` – ignorowane pliki (np. logi, pliki tymczasowe),
- `.vscode/` – konfiguracja edytora VS Code dla projektu,
- `.github/` – podstawowe ustawienia / przyszłe Actions.

---

## 3. Konwersja z HTML na PHP – obecny stan

Na ten moment:

- Strony HTML zostały przekonwertowane na **indywidualne pliki PHP**:
  - główny layout i treści znajdują się bezpośrednio w plikach typu `index.php`, `o-firmie.php`, `cennik.php` itd.
- Widoczny jest początek **modularyzacji**:
  - katalog `/partials` sygnalizuje wyodrębnianie wspólnych fragmentów (header, footer, sekcje),
  - pliki `config.php` i `helpers.php` agregują logikę wspólną i konfigurację.
- Strona jest przystosowana do pracy na serwerze z PHP, ale layout nadal w wielu miejscach zachowuje strukturę „statycznego HTML” (dużo powtarzających się sekcji w plikach podstron).

Docelowy kierunek (zgodnie z założeniami projektu):

- pełne wykorzystanie komponentów PHP:
  - `partials/header.php`, `partials/footer.php`, `partials/navigation.php` itp.,
  - minimalizacja duplikacji kodu HTML między podstronami,
- centralne zarządzanie SEO (tytuły, opisy, OG, dane strukturalne) np. przez funkcje w `helpers.php` + konfigurację w `config.php`,
- standaryzacja styli z użyciem zmiennych CSS i palety kolorystycznej brandu.

---

## 4. Wymagania projektowe (biznes / UX / SEO / WCAG)

Zgodnie z założeniami:

**Dane firmy:**

- Nazwa: **Magic Salon – Salon kosmetyczny**
- Strona WWW: **https://www.magicsalon.pl/**
- Adres: ul. Borówkowa 13, 55-002 Dobrzykowice
- Telefon: +48 883 481 581
- Email: biuro@magicsalon.pl
- Rezerwacja wizyt (Booksy): https://booksy.magicsalon.pl  
- Hasło przewodnie:  
  _„MAGIC SALON – Twoje piękno, nasza pasja – odkryj magię profesjonalnej pielęgnacji!”_

**Paleta kolorystyczna (brand, do ujednolicenia w CSS):**

```css
:root {
    --color-theme-primary: #6D356F;
    --color-theme-secondary: #D7A54F;
    --color-hover: #9F5BA4;
    --site-button-color: #222222;
    --color-text: #444444;
    --color-background: #ffffff;
}