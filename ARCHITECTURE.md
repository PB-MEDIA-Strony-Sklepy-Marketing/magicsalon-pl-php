# Architektura Projektu / Project Architecture

## 📋 Spis Treści / Table of Contents

- [Przegląd](#przegląd--overview)
- [Struktura Katalogów](#struktura-katalogów--directory-structure)
- [Architektura Kodu](#architektura-kodu--code-architecture)
- [Flow Przetwarzania](#flow-przetwarzania--processing-flow)
- [Komponenty](#komponenty--components)
- [Warstwa Danych](#warstwa-danych--data-layer)
- [Integracje](#integracje--integrations)
- [Bezpieczeństwo](#bezpieczeństwo--security)
- [Wydajność](#wydajność--performance)

---

## Przegląd / Overview

**MAGIC SALON** to modularny projekt PHP 8.x bez frameworka, skoncentrowany na prostocie, wydajności i łatwości utrzymania. Projekt powstał z konwersji statycznych szablonów HTML na dynamiczny system PHP z komponentami wielokrotnego użytku.

### Kluczowe Cechy / Key Features

- 🚀 **Pure PHP 8.x** - Bez frameworka, zero overhead
- 🧩 **Modular Components** - Reużywalne partials (header, footer, head)
- 🎨 **SEO-First** - Dynamiczne meta tagi, Schema.org, OpenGraph
- 📱 **Mobile-First** - Responsywny design z Bootstrap 5
- ♿ **WCAG 2.2** - Dostępność jako priorytet
- 🔒 **Security Headers** - CSP, X-Frame-Options, HTTPS enforcement
- ⚡ **Performance** - Cache-busting, asset optimization

### Stack Technologiczny / Tech Stack

```
Frontend:
├── HTML5 (semantic)
├── CSS3 (custom + Bootstrap 5)
├── JavaScript ES6+ (vanilla + jQuery)
├── Bootstrap Icons + Font Awesome 7.1.0
└── Revolution Slider (commercial plugin)

Backend:
├── PHP 8.x (pure, no framework)
├── Custom helpers library
└── Session management (optional)

Infrastructure:
├── Apache/Nginx (web server)
├── Git (version control)
└── GitHub Actions (CI/CD)

Integrations:
├── Booksy (booking system)
├── Google Analytics (GA4)
├── Google Tag Manager
├── Facebook Pixel
└── WhatsApp Business API
```

---

## Struktura Katalogów / Directory Structure

```
magicsalon-pl-php/
│
├── .github/                          # GitHub configuration
│   ├── workflows/                    # CI/CD pipelines
│   │   ├── php.yml                  # PHP validation
│   │   ├── node.js.yml              # Node.js testing
│   │   ├── deploy.yml               # Deployment automation
│   │   └── tests.yml                # Test automation
│   ├── ISSUE_TEMPLATE/              # Issue templates
│   ├── instructions/                # AI instructions
│   ├── PULL_REQUEST_TEMPLATE.md
│   └── copilot-instructions.md
│
├── dist/                            # 🎯 ACTIVE APPLICATION CODE
│   │
│   ├── partials/                    # Reusable PHP components
│   │   ├── head.php                # <head> with meta, SEO, tracking
│   │   ├── header.php              # Site header with navigation
│   │   └── footer.php              # Site footer with widgets
│   │
│   ├── css/                         # Stylesheets
│   │   ├── style.css               # Main stylesheet
│   │   ├── skin/                   # Color schemes
│   │   │   └── skin-7.css          # Brand colors
│   │   ├── bootstrap.min.css       # Bootstrap framework
│   │   ├── fontawesome-7.1.0/      # Icon library
│   │   ├── fix-css-style.css       # Visual fixes
│   │   └── custom.css              # Custom styles
│   │
│   ├── js/                          # JavaScript files
│   │   ├── jquery-3.6.1.min.js     # jQuery library
│   │   ├── bootstrap.min.js        # Bootstrap JS
│   │   ├── custom.js               # Custom scripts
│   │   ├── booksy-widget.js        # Booksy integration
│   │   └── whatsapp-ctc-chatbox.js # WhatsApp widget
│   │
│   ├── images/                      # Graphics and media
│   │   ├── logo-7.png              # Brand logo
│   │   ├── favicon.png             # Site favicon
│   │   ├── og-image.jpg            # Social sharing image
│   │   └── [various page images]
│   │
│   ├── plugins/                     # Third-party plugins
│   │   └── revolution/             # Revolution Slider
│   │
│   ├── logs/                        # Application logs
│   │   └── php-errors.log          # PHP error log
│   │
│   ├── config.php                   # 🔧 Main configuration
│   ├── helpers.php                  # 🛠️ Helper functions
│   │
│   ├── index.php                    # Home page
│   ├── o-firmie.php                # About page
│   ├── oferta.php                  # Services page
│   ├── cennik.php                  # Pricing page
│   ├── galeria.php                 # Gallery page
│   ├── kontakt.php                 # Contact page
│   ├── zarezerwuj-wizyte.php       # Booking page
│   ├── opinie-klientow.php         # Reviews page
│   ├── faq-pytania.php             # FAQ page
│   ├── polityka-prywatnosci-rodo.php # Privacy policy
│   │
│   ├── 403.php                      # Access denied page
│   ├── 404.php                      # Not found page
│   └── 500.php                      # Server error page
│
├── src/                             # 📚 REFERENCE ONLY (original HTML)
│   └── [static HTML templates]
│
├── logs/                            # Root logs directory
├── prompty/                         # AI prompts and instructions
│
├── .gitignore                       # Git ignore rules
├── .gitattributes                   # Git attributes
├── README.md                        # Project readme
├── CLAUDE.md                        # Claude Code documentation
├── ARCHITECTURE.md                  # This file
├── CONTRIBUTING.md                  # Contribution guidelines
├── CHANGELOG.md                     # Version history
├── LICENSE.md                       # License
├── SECURITY.md                      # Security policy
└── SUPPORT.md                       # Support guide
```

### Podział Odpowiedzialności / Separation of Concerns

| Katalog | Rola | Modyfikacje |
|---------|------|-------------|
| `/dist/` | Aktywna aplikacja | ✅ TAK |
| `/src/` | Referencja HTML | ❌ NIE |
| `/prompty/` | AI instrukcje | ⚠️ Rzadko |
| `/.github/` | DevOps config | ⚠️ Rzadko |

---

## Architektura Kodu / Code Architecture

### 1. **Bootstrap Layer** (config.php)

```php
┌─────────────────────────────────────┐
│         config.php                  │
│  ┌───────────────────────────────┐  │
│  │ Environment Detection         │  │
│  │ (development/production)      │  │
│  └───────────────────────────────┘  │
│  ┌───────────────────────────────┐  │
│  │ Error Reporting Configuration │  │
│  │ (display_errors, log_errors)  │  │
│  └───────────────────────────────┘  │
│  ┌───────────────────────────────┐  │
│  │ Path Constants Definition     │  │
│  │ (BASE_URL, ROOT_PATH, etc.)   │  │
│  └───────────────────────────────┘  │
│  ┌───────────────────────────────┐  │
│  │ Session Configuration         │  │
│  │ (cookie settings, security)   │  │
│  └───────────────────────────────┘  │
│  ┌───────────────────────────────┐  │
│  │ Security Headers              │  │
│  │ (CSP, X-Frame-Options, etc.)  │  │
│  └───────────────────────────────┘  │
│  ┌───────────────────────────────┐  │
│  │ Auto-load helpers.php         │  │
│  └───────────────────────────────┘  │
└─────────────────────────────────────┘
```

**Key Responsibilities:**
- Environment detection and configuration
- Path constant definitions (cross-platform)
- Security header injection
- Helper library auto-loading
- Output buffering initialization

### 2. **Utility Layer** (helpers.php)

```php
┌─────────────────────────────────────┐
│         helpers.php                 │
│  ┌───────────────────────────────┐  │
│  │ Security Functions            │  │
│  │ • escape_html() / e()         │  │
│  │ • safe_include()              │  │
│  └───────────────────────────────┘  │
│  ┌───────────────────────────────┐  │
│  │ URL & Asset Functions         │  │
│  │ • asset() [cache-busting]     │  │
│  │ • get_current_url()           │  │
│  └───────────────────────────────┘  │
│  ┌───────────────────────────────┐  │
│  │ Text Processing Functions     │  │
│  │ • create_slug() [PL-aware]    │  │
│  │ • truncate()                  │  │
│  │ • format_phone()              │  │
│  └───────────────────────────────┘  │
│  ┌───────────────────────────────┐  │
│  │ Debug Functions               │  │
│  │ • dd() [dev only]             │  │
│  └───────────────────────────────┘  │
└─────────────────────────────────────┘
```

### 3. **Component Layer** (partials/)

#### partials/head.php
```
┌─────────────────────────────────────┐
│  Input: $meta array (page config)  │
└─────────────────────────────────────┘
              ↓
┌─────────────────────────────────────┐
│  Merge with defaults                │
│  • title, description, keywords     │
│  • canonical URL                    │
│  • OpenGraph tags                   │
│  • Twitter Cards                    │
│  • Schema.org JSON-LD               │
│  • Stylesheets array                │
└─────────────────────────────────────┘
              ↓
┌─────────────────────────────────────┐
│  Output: Complete <head> section    │
│  • Meta tags (SEO, OG, Twitter)     │
│  • Links (favicon, canonical)       │
│  • Stylesheets (with cache-busting) │
│  • Tracking codes (GA, FB, GTM)     │
│  • Schema.org structured data       │
└─────────────────────────────────────┘
```

#### partials/header.php
```
┌─────────────────────────────────────┐
│  Detect current page                │
│  (via $_SERVER['PHP_SELF'])         │
└─────────────────────────────────────┘
              ↓
┌─────────────────────────────────────┐
│  Render components                  │
│  • Top bar (contact info)           │
│  • Logo section                     │
│  • Navigation menu ($main_menu)     │
│    - Desktop version                │
│    - Mobile collapsible version     │
│  • Social media links               │
│  • CTA button (Booksy)              │
└─────────────────────────────────────┘
              ↓
┌─────────────────────────────────────┐
│  JavaScript for interactivity       │
│  • Sticky header on scroll          │
│  • Mobile menu toggle               │
│  • Submenu expand/collapse          │
└─────────────────────────────────────┘
```

#### partials/footer.php
```
┌─────────────────────────────────────┐
│  Widget sections                    │
│  • About company                    │
│  • Recent blog posts                │
│  • Navigation links                 │
│  • Social media                     │
│  • Contact info blocks              │
└─────────────────────────────────────┘
              ↓
┌─────────────────────────────────────┐
│  Floating widgets                   │
│  • WhatsApp click-to-chat           │
│  • Booksy booking widget            │
│  • Slideout social links            │
└─────────────────────────────────────┘
              ↓
┌─────────────────────────────────────┐
│  JavaScript includes                │
│  • jQuery, Bootstrap                │
│  • Custom scripts                   │
│  • Revolution Slider                │
│  • Widget scripts                   │
│  • Cookie consent                   │
└─────────────────────────────────────┘
```

### 4. **Page Layer** (*.php files)

```php
┌─────────────────────────────────────┐
│  1. Load config.php                 │
│     (environment, paths, helpers)   │
└─────────────────────────────────────┘
              ↓
┌─────────────────────────────────────┐
│  2. Define $meta array              │
│     (page-specific SEO, styles)     │
└─────────────────────────────────────┘
              ↓
┌─────────────────────────────────────┐
│  3. Include partials/head.php       │
│     (outputs <head> with meta)      │
└─────────────────────────────────────┘
              ↓
┌─────────────────────────────────────┐
│  4. <body> tag + page ID/class      │
└─────────────────────────────────────┘
              ↓
┌─────────────────────────────────────┐
│  5. Include partials/header.php     │
│     (outputs site header)           │
└─────────────────────────────────────┘
              ↓
┌─────────────────────────────────────┐
│  6. Page-specific content           │
│     (HTML + inline PHP for data)    │
└─────────────────────────────────────┘
              ↓
┌─────────────────────────────────────┐
│  7. Include partials/footer.php     │
│     (outputs footer + scripts)      │
└─────────────────────────────────────┘
```

---

## Flow Przetwarzania / Processing Flow

### Request Lifecycle

```
User Request
    ↓
┌───────────────────────────────────┐
│  Web Server (Apache/Nginx)        │
│  • .htaccess rules (if Apache)    │
│  • HTTPS redirect                 │
│  • PHP-FPM handler                │
└───────────────────────────────────┘
    ↓
┌───────────────────────────────────┐
│  PHP Initialization               │
│  • Load config.php                │
│    - Set environment              │
│    - Define constants             │
│    - Configure error handling     │
│    - Set security headers         │
│    - Auto-load helpers            │
└───────────────────────────────────┘
    ↓
┌───────────────────────────────────┐
│  Page Script Execution            │
│  • Define $meta array             │
│  • Include partials/head.php      │
│  • Output buffering active        │
└───────────────────────────────────┘
    ↓
┌───────────────────────────────────┐
│  Component Rendering              │
│  • head.php: merge $meta, output  │
│  • header.php: detect page, menu  │
│  • Page content: HTML + PHP       │
│  • footer.php: widgets + scripts  │
└───────────────────────────────────┘
    ↓
┌───────────────────────────────────┐
│  Output Buffer Flush              │
│  • Apply final transformations    │
│  • Send headers (if not sent)     │
│  • Stream HTML to browser         │
└───────────────────────────────────┘
    ↓
┌───────────────────────────────────┐
│  Client-side Processing           │
│  • Parse HTML                     │
│  • Load CSS (with cache query)    │
│  • Execute JavaScript             │
│  • Initialize widgets             │
│  • Track pageview (GA, FB)        │
└───────────────────────────────────┘
    ↓
Rendered Page
```

---

## Komponenty / Components

### Core Components

#### 1. **Meta Management System**

```php
// Default configuration (head.php)
$defaults = [
    'title' => 'Default title',
    'description' => 'Default description',
    'canonical' => BASE_URL . '/',
    'styles' => [ /* array of stylesheets */ ],
    'og' => [ /* OpenGraph tags */ ],
    'twitter' => [ /* Twitter Cards */ ],
    'schema' => [ /* Schema.org data */ ]
];

// Page override (any page.php)
$meta = [
    'title' => 'Specific page title',
    'og' => ['image' => '/images/page-image.jpg']
];

// Merge: array_replace_recursive($defaults, $meta)
```

**Benefits:**
- DRY principle (defaults in one place)
- Easy page-specific customization
- Consistent SEO across site
- Schema.org automation

#### 2. **Navigation System**

```php
// Navigation data structure (header.php)
$main_menu = [
    [
        'title' => 'Menu Item',
        'icon' => 'fa-solid fa-icon',
        'url' => 'page.php',
        'page_id' => 'page-identifier',
        'submenu' => [
            ['title' => 'Sub Item', 'url' => 'sub-page.php']
        ],
        'mega_menu' => true // Optional mega menu
    ]
];
```

**Features:**
- Centralized menu configuration
- Active state detection
- Dropdown and mega menu support
- Mobile-responsive
- Icon support (Font Awesome)
- Hierarchical structure

#### 3. **Asset Management**

```php
// asset() function (helpers.php)
function asset(string $path): string
{
    $fullPath = ROOT_PATH . DIRECTORY_SEPARATOR . $path;
    $url = BASE_URL . '/' . $path;

    if (file_exists($fullPath)) {
        $mtime = filemtime($fullPath);
        $url .= '?v=' . $mtime; // Cache-busting
    }

    return $url;
}

// Usage
echo asset('css/style.css');
// Output: /css/style.css?v=1700000000
```

**Benefits:**
- Automatic cache invalidation
- Browser caching optimization
- CDN-ready structure

---

## Warstwa Danych / Data Layer

### Current State: No Database

Projekt obecnie **nie używa bazy danych**. Wszystkie dane są:

1. **Hardcoded** w plikach PHP (content)
2. **Konfigurowane** w arrays (menu, contact info)
3. **Zewnętrzne** (Booksy dla rezerwacji)

### Data Sources

```
┌─────────────────────────────────────┐
│  Static Data (in PHP files)         │
│  • Menu structure                   │
│  • Contact information              │
│  • Business hours                   │
│  • Social media links               │
└─────────────────────────────────────┘

┌─────────────────────────────────────┐
│  External APIs                      │
│  • Booksy (booking system)          │
│  • Google Analytics (tracking)      │
│  • Facebook Pixel (tracking)        │
└─────────────────────────────────────┘

┌─────────────────────────────────────┐
│  Files                              │
│  • Images (local storage)           │
│  • CSS/JS (local storage)           │
│  • Logs (php-errors.log)            │
└─────────────────────────────────────┘
```

### Future Database Integration (Optional)

Jeśli w przyszłości będzie potrzebna baza danych:

```php
// Recommended: PDO with prepared statements
$pdo = new PDO($dsn, $user, $pass, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false
]);

// Example query
$stmt = $pdo->prepare("SELECT * FROM services WHERE active = ?");
$stmt->execute([1]);
$services = $stmt->fetchAll();
```

**Potential use cases:**
- Blog system
- Contact form submissions
- Newsletter subscribers
- User reviews
- Service bookings (if moving away from Booksy)

---

## Integracje / Integrations

### 1. **Booksy (Booking System)**

```javascript
// Integration points:
// 1. CTA buttons → https://booksy.magicsalon.pl
// 2. Floating widget (footer.php)
// 3. Dedicated page: zarezerwuj-wizyte.php

// Widget initialization (booksy-widget.js)
function toggleBooksyChatbox() {
    const chatbox = document.getElementById('booksyChatboxWidget');
    chatbox.style.display = chatbox.style.display === 'none' ? 'block' : 'none';
}
```

### 2. **Google Analytics (GA4)**

```html
<!-- Tracking code (head.php) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-ZFZ2DQZQC6"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-ZFZ2DQZQC6', {
    'anonymize_ip': true,
    'cookie_flags': 'SameSite=None;Secure'
  });
</script>
```

### 3. **Facebook Pixel**

```javascript
// Two pixels configured (head.php)
// ID: 23924298163858020
// ID: 24229370236712758

fbq('init', '23924298163858020');
fbq('track', 'PageView');
```

### 4. **Google Tag Manager**

```html
<!-- GTM Container: GTM-K76PV6PD -->
<!-- Loaded in head.php -->
<!-- Noscript fallback in footer.php -->
```

### 5. **WhatsApp Business**

```javascript
// Click-to-chat widget (footer.php)
// Number: +48883481581
// Opens: https://wa.me/48883481581

function toggleCtcChatbox() {
    const chatbox = document.getElementById('customCtcChatbox');
    chatbox.style.display = chatbox.style.display === 'none' ? 'block' : 'none';
}
```

---

## Bezpieczeństwo / Security

### Security Layers

#### 1. **PHP Configuration** (config.php)

```php
// Production settings
error_reporting(E_ALL & ~E_DEPRECATED & ~E_WARNING);
ini_set('display_errors', '0');
ini_set('log_errors', '1');

// Session security
@ini_set('session.cookie_httponly', '1');
@ini_set('session.cookie_secure', SITE_SCHEME === 'https' ? '1' : '0');
@ini_set('session.cookie_samesite', 'Lax');
@ini_set('session.use_strict_mode', '1');
```

#### 2. **HTTP Security Headers** (config.php)

```php
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: SAMEORIGIN');
header('X-XSS-Protection: 1; mode=block');
header('Referrer-Policy: strict-origin-when-cross-origin');
```

#### 3. **Output Escaping** (helpers.php)

```php
// Always escape user-facing output
function escape_html(string $string): string {
    return htmlspecialchars($string, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

// Short alias
function e($string): string {
    return escape_html((string)$string);
}
```

#### 4. **Input Validation** (Best Practices)

```php
// Example: Contact form
$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$name = trim(strip_tags($_POST['name']));
$message = htmlspecialchars($_POST['message'], ENT_QUOTES);
```

### Security Checklist

- ✅ HTTPS enforcement
- ✅ Security headers configured
- ✅ Output escaping helpers
- ✅ Session security settings
- ✅ Error logging (not displaying)
- ✅ No sensitive data in repository
- ⚠️ CSRF protection (manual implementation needed)
- ⚠️ Rate limiting (server-level recommended)
- ⚠️ Input validation (per-form implementation)

---

## Wydajność / Performance

### Optimization Strategies

#### 1. **Cache-Busting**

```php
// Automatic version query string
asset('css/style.css') → /css/style.css?v=1700000000

// Benefits:
// - Forces browser to load new version when file changes
// - Allows aggressive browser caching (max-age: 31536000)
// - No manual cache clearing needed
```

#### 2. **Output Buffering**

```php
// config.php
ob_start(); // At start

// footer.php
ob_end_flush(); // At end (implicit)

// Benefits:
// - Headers can be sent anywhere in script
// - Entire page can be post-processed
// - Better error handling
```

#### 3. **Asset Loading**

```php
// Stylesheets in <head>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">

// Scripts at end of <body> (footer.php)
<script src="js/jquery-3.6.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>

// Benefits:
// - CSS loaded first (prevents FOUC)
// - JS loaded last (non-blocking)
// - Critical rendering path optimized
```

#### 4. **Image Optimization**

```html
<!-- Lazy loading -->
<img src="image.jpg" loading="lazy" alt="Description">

<!-- Responsive images -->
<img srcset="image-small.jpg 480w,
             image-medium.jpg 768w,
             image-large.jpg 1200w"
     sizes="(max-width: 768px) 100vw, 50vw"
     src="image-medium.jpg"
     alt="Description">
```

#### 5. **Preconnect & DNS Prefetch**

```html
<!-- head.php -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="dns-prefetch" href="https://www.googletagmanager.com">
```

### Performance Metrics Goals

| Metric | Target | Current |
|--------|--------|---------|
| First Contentful Paint (FCP) | < 1.8s | TBD |
| Largest Contentful Paint (LCP) | < 2.5s | TBD |
| Cumulative Layout Shift (CLS) | < 0.1 | TBD |
| Time to Interactive (TTI) | < 3.8s | TBD |
| Total Page Size | < 3MB | TBD |

---

## Diagramy / Diagrams

### Component Dependency Graph

```
config.php
    │
    ├─→ helpers.php (auto-loaded)
    │       │
    │       └─→ Used by: all pages, all partials
    │
    └─→ Constants defined (BASE_URL, ROOT_PATH, etc.)
            │
            └─→ Used by: all pages, all partials

partials/head.php
    ├─→ Depends on: config.php constants
    ├─→ Uses: escape_html() from helpers.php
    └─→ Receives: $meta array from page

partials/header.php
    ├─→ Depends on: config.php constants
    ├─→ Uses: escape_html() from helpers.php
    └─→ Uses: asset() from helpers.php

partials/footer.php
    ├─→ Depends on: config.php constants
    ├─→ Uses: escape_html(), asset() from helpers.php
    └─→ Outputs: JavaScript includes

Page Files (*.php)
    ├─→ Requires: config.php
    ├─→ Defines: $meta array
    ├─→ Includes: partials/head.php
    ├─→ Includes: partials/header.php
    ├─→ Contains: page content
    └─→ Includes: partials/footer.php
```

### Data Flow Diagram

```
                    ┌─────────────┐
                    │   Browser   │
                    └──────┬──────┘
                           │ HTTP Request
                           ↓
                    ┌─────────────┐
                    │ Web Server  │
                    └──────┬──────┘
                           │ PHP-FPM
                           ↓
                    ┌─────────────┐
                    │ config.php  │
                    │ • Constants │
                    │ • Helpers   │
                    └──────┬──────┘
                           │
                           ↓
                    ┌─────────────┐
                    │  page.php   │
                    │ • $meta     │
                    └──────┬──────┘
                           │
                ┌──────────┴──────────┐
                ↓                     ↓
         ┌─────────────┐       ┌─────────────┐
         │  head.php   │       │ header.php  │
         │ (meta tags) │       │ (nav menu)  │
         └──────┬──────┘       └──────┬──────┘
                │                     │
                └──────────┬──────────┘
                           ↓
                    ┌─────────────┐
                    │   Content   │
                    │ (page body) │
                    └──────┬──────┘
                           │
                           ↓
                    ┌─────────────┐
                    │  footer.php │
                    │ (widgets +  │
                    │  scripts)   │
                    └──────┬──────┘
                           │
                           ↓
                    ┌─────────────┐
                    │ HTML Output │
                    └──────┬──────┘
                           │
                           ↓
                    ┌─────────────┐
                    │   Browser   │
                    │  (rendered) │
                    └─────────────┘
```

---

## Rozszerzalność / Extensibility

### Dodawanie Nowej Strony / Adding New Page

```php
// 1. Create new file: dist/nowa-strona.php
<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . 'config.php';

$meta = [
    'title' => 'Nowa Strona - MAGIC SALON',
    'description' => 'Opis nowej strony',
    'canonical' => BASE_URL . '/nowa-strona.php'
];

require_once __DIR__ . DIRECTORY_SEPARATOR . 'partials' . DIRECTORY_SEPARATOR . 'head.php';
?>

<body id="nowa-strona">
    <?php require_once __DIR__ . '/partials/header.php'; ?>

    <div class="page-content">
        <!-- Content here -->
    </div>

    <?php require_once __DIR__ . '/partials/footer.php'; ?>
</body>

// 2. Add to navigation (partials/header.php)
$main_menu[] = [
    'title' => 'Nowa Strona',
    'url' => 'nowa-strona.php',
    'page_id' => 'nowa-strona'
];
```

### Dodawanie Integracji / Adding Integration

```php
// 1. Add configuration (config.php or dedicated config)
define('NEW_API_KEY', 'your-api-key');
define('NEW_API_ENDPOINT', 'https://api.example.com');

// 2. Create helper function (helpers.php)
if (!function_exists('call_new_api')) {
    function call_new_api(string $endpoint, array $data): array {
        // API call implementation
    }
}

// 3. Add tracking/scripts (head.php or footer.php)
// <script src="integration-script.js"></script>
```

### Dodawanie Komponentu / Adding Component

```php
// 1. Create file: dist/partials/new-component.php
<?php
// Component logic
?>
<div class="new-component">
    <!-- Component markup -->
</div>

// 2. Include in pages
<?php require_once __DIR__ . '/partials/new-component.php'; ?>
```

---

## Wytyczne Architektoniczne / Architectural Guidelines

### Zasady Projektowe / Design Principles

1. **Separation of Concerns**
   - Configuration separated from logic
   - Presentation separated from data
   - Components are independent

2. **DRY (Don't Repeat Yourself)**
   - Shared code in partials
   - Utilities in helpers.php
   - Configuration centralized

3. **KISS (Keep It Simple, Stupid)**
   - No unnecessary abstraction
   - Straightforward file structure
   - Minimal dependencies

4. **Security First**
   - Escape all output
   - Validate all input
   - Secure headers by default

5. **Performance Matters**
   - Cache-busting enabled
   - Lazy loading where possible
   - Minimal HTTP requests

### Anty-wzorce / Anti-patterns to Avoid

❌ **Don't:**
- Mix path separators (`/` and `\`)
- Output unescaped user input
- Hardcode URLs (use `BASE_URL`)
- Repeat component code (use partials)
- Skip type hints on functions
- Use short PHP tags `<?`
- Commit sensitive data (API keys)

✅ **Do:**
- Use `DIRECTORY_SEPARATOR` for file paths
- Use `BASE_URL` for URLs
- Escape with `e()` or `escape_html()`
- Create reusable partials
- Add type hints to functions
- Use full PHP tags `<?php`
- Keep secrets in `.env` or config

---

## Dalszy Rozwój / Future Development

### Roadmap Items

1. **Short-term (1-3 months)**
   - ✅ Complete modularization (eliminate duplicated code)
   - ⬜ Add automated tests (PHPUnit)
   - ⬜ Implement CSRF protection
   - ⬜ Add contact form with validation
   - ⬜ Optimize images (WebP format)

2. **Medium-term (3-6 months)**
   - ⬜ Blog system (optional database integration)
   - ⬜ Admin panel for content management
   - ⬜ Multi-language support (PL/EN)
   - ⬜ Progressive Web App (PWA) features
   - ⬜ Advanced analytics dashboard

3. **Long-term (6-12 months)**
   - ⬜ Headless CMS integration
   - ⬜ API for mobile app
   - ⬜ Booking system integration (if moving from Booksy)
   - ⬜ Customer portal
   - ⬜ Advanced SEO automation

---

## Kontakt / Contact

**Pytania dotyczące architektury:**
Questions about architecture:

- 📧 Email: biuro@magicsalon.pl
- 📚 Docs: [CLAUDE.md](CLAUDE.md)
- 💬 Support: [SUPPORT.md](SUPPORT.md)
- 🐛 Issues: [GitHub Issues](../../issues)

---

**Ostatnia aktualizacja / Last updated:** 2025-11-24
**Wersja dokumentu / Document version:** 1.0.0
