# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

**MAGIC SALON** is a professional beauty salon website for a cosmetic salon in Dobrzykowice, Poland. The project is a converted PHP modular website originally built from static HTML/CSS/JS templates. The codebase is in **Polish**.

- **Production URL**: https://magicsalon.pl/
- **PHP Target**: PHP 8.5 (compatible with PHP 8.x)
- **No Framework**: Pure PHP implementation with custom helpers
- **Status**: Mid-conversion from static HTML to modular PHP components

## Directory Structure

```
/src/          - Original static HTML templates (reference only)
/dist/         - Active PHP application (work here)
  /partials/   - Reusable PHP components (header, footer, head)
  /css/        - Stylesheets including brand colors
  /js/         - JavaScript files
  /images/     - Graphics, photos, favicons
  /plugins/    - External plugins (Revolution Slider, etc.)
  /logs/       - Application logs
  config.php   - Main configuration file
  helpers.php  - Helper functions
  *.php        - Individual page files
```

**Important**: All development work happens in `/dist/`. The `/src/` directory contains original HTML templates for reference.

## Core Configuration Files

### config.php (dist/config.php)
- Sets up environment (development/production)
- Defines path constants: `BASE_URL`, `BASE_PATH`, `ROOT_PATH`, `PARTIALS_PATH`
- Configures error reporting (avoid E_STRICT - deprecated in PHP 8.4+)
- Sets security headers
- Uses output buffering (`ob_start()`)
- Auto-loads `helpers.php`
- Uses `DIRECTORY_SEPARATOR` for cross-platform compatibility

### helpers.php (dist/helpers.php)
Key functions:
- `escape_html($string)` / `e($string)` - HTML escaping
- `asset($path)` - Asset URLs with cache-busting
- `create_slug($text)` - Polish-character-aware slug generation
- `format_phone($phone)` - Format phone numbers (+48 XXX XXX XXX)
- `truncate($text, $length)` - Text truncation
- `dd($data)` - Debug helper (development only)
- `safe_include($filePath, $variables)` - Safe file inclusion with error handling

## Page Structure Pattern

Each page file follows this pattern:

```php
<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . 'config.php';

$meta = [
    'title' => 'Page Title',
    'description' => 'SEO description',
    'canonical' => BASE_URL . '/page-url',
    'keywords' => 'keywords, here',
    'og' => ['image' => '/images/page-og.jpg'],
    // ... other meta overrides
];

require_once __DIR__ . DIRECTORY_SEPARATOR . 'partials' . DIRECTORY_SEPARATOR . 'head.php';
?>

<body>
    <?php require_once __DIR__ . '/partials/header.php'; ?>

    <div class="page-content">
        <!-- Page-specific content -->
    </div>

    <?php require_once __DIR__ . '/partials/footer.php'; ?>
</body>
```

## Partial Components

### partials/head.php
- Accepts `$meta` array for customization with smart defaults
- Handles SEO meta tags, Open Graph, Twitter Cards
- Schema.org structured data (BeautySalon type)
- Includes Google Analytics, Facebook Pixel, GTM tracking codes
- Dynamic stylesheet loading with cache-busting
- `resolve_asset_href($href)` function for asset URL resolution

**Default Meta Configuration**:
```php
$defaults = [
    'title' => 'MAGIC SALON – Salon Kosmetyczny Dobrzykowice | Profesjonalne Zabiegi Beauty',
    'description' => 'Profesjonalny salon kosmetyczny...',
    'keywords' => 'salon kosmetyczny dobrzykowice...',
    'canonical' => BASE_URL . '/',
    'robots' => 'index, follow, max-image-preview:large',
    'styles' => [ /* default stylesheets */ ],
    'schema' => [ /* structured data */ ]
];
```

### partials/header.php
- Dynamic top bar with contact info
- Responsive main navigation with dropdown and mega menu support
- Active page detection: `is_active($page, $current)`
- Mobile-friendly collapsible menu
- Social media links integration
- Structured menu array `$main_menu` for easy updates
- CTA button for booking appointments (Booksy integration)

**Menu Structure**: Modify `$main_menu` array to update navigation.

### partials/footer.php
- Widget sections (about, recent posts, useful links, social media)
- Contact information blocks
- Facebook page widget integration
- WhatsApp and Booksy floating chat widgets
- Slideout social media widgets
- JavaScript includes (jQuery, Bootstrap, Revolution Slider, custom scripts)
- Cookie consent and privacy policy integration
- `footer_url($path)` function for URL generation

## Brand Colors & Styling

The brand color palette (to be standardized in CSS variables):

```css
:root {
    --color-theme-primary: #6D356F;
    --color-theme-secondary: #D7A54F;
    --color-hover: #9F5BA4;
    --site-button-color: #222222;
    --color-text: #444444;
    --color-background: #ffffff;
}
```

Apply these colors when working with styles or inline CSS.

## Business Information

- **Company**: MAGIC SALON – Salon kosmetyczny
- **Address**: ul. Borówkowa 13, 55-002 Dobrzykowice
- **Phone**: +48 883 481 581
- **Email**: biuro@magicsalon.pl
- **Booksy URL**: https://booksy.magicsalon.pl
- **Tagline**: "MAGIC SALON – Twoje piękno, nasza pasja – odkryj magię profesjonalnej pielęgnacji!"
- **Opening Hours**: Mon-Fri 09:00-20:00, Sat 09:00-18:00
- **Coordinates**: 51.0961, 17.1994

## SEO & Meta Configuration

Reference files for SEO guidelines:
- `META TAG-OPENGRAPH-CSSSTYLESHET.txt` - Meta tag and OpenGraph specifications
- `prompt do generowania teksty SEO.md` - SEO content generation prompt

All pages should have:
1. Unique title and description
2. Canonical URL
3. Open Graph tags for social sharing
4. Schema.org structured data (via `partials/head.php`)
5. Proper image alt text

## External Integrations

- **Booksy**: Online appointment booking system at booksy.magicsalon.pl
- **Google Analytics**: ID `G-ZFZ2DQZQC6`
- **Google Tag Manager**: ID `GTM-K76PV6PD`
- **Facebook Pixel**: IDs `23924298163858020`, `24229370236712758`
- **Facebook App**: App ID `464369106147391`
- **Revolution Slider**: Third-party slider plugin in `/plugins/revolution/`
- **WhatsApp**: Click-to-chat widget with number +48883481581

## Path Handling Best Practices

1. Always use `DIRECTORY_SEPARATOR` for file system paths
2. Use `BASE_URL` for generating frontend URLs
3. Use `asset($path)` function for static assets (adds cache-busting)
4. Use `__DIR__` for relative requires
5. Normalize paths with `str_replace('\\', '/', $path)` for URLs

**Example**:
```php
// File system path
require_once __DIR__ . DIRECTORY_SEPARATOR . 'config.php';

// URL generation
$url = BASE_URL . '/kontakt.php';

// Asset with cache-busting
echo asset('css/style.css'); // Outputs: /css/style.css?v=1234567890
```

## Development vs Production

Environment is controlled via `APP_ENV` in config.php:

- **Development**: Full error reporting, no caching, debug helpers enabled
- **Production**: Error logging only, browser caching enabled, debug disabled

Check environment:
```php
if (APP_ENV === 'development') {
    // Dev-only code
}
```

## Common Development Tasks

### Running the Site Locally
1. Ensure PHP 8.x is installed
2. Navigate to `/dist/` directory
3. Start built-in server: `php -S localhost:8000`
4. Access: http://localhost:8000/

### Adding a New Page
1. Create new PHP file in `/dist/` (e.g., `new-page.php`)
2. Copy structure from `index.php` as template
3. Update `$meta` array with page-specific SEO data
4. Add page content between header and footer includes
5. Update navigation in `partials/header.php` if needed

### Modifying Navigation
Edit the `$main_menu` array in `partials/header.php`:
```php
$main_menu = [
    [
        'title' => 'Menu Item',
        'icon' => 'fa-solid fa-icon',
        'url' => 'page.php',
        'page_id' => 'page-slug',
        'submenu' => [ /* optional submenu items */ ]
    ]
];
```

### Working with Styles
- Main styles: `/dist/css/style.css`
- Custom fixes: `/dist/css/fix-css-style.css`, `/dist/css/frontend-fixes-important.css`
- Skin colors: `/dist/css/skin/skin-7.css`
- Add new stylesheets to `$meta['styles']` array in page file

## Important Notes

1. **Character Encoding**: All files must be UTF-8 without BOM
2. **Polish Language**: Content, comments, and variable names may be in Polish
3. **No Composer**: Project doesn't use Composer (GitHub Action is configured but not active)
4. **Session Management**: Sessions are configured but not started by default - uncomment in config.php if needed
5. **Revolution Slider**: Has known display issues - fixes applied via `revolution-fixes.php` and inline JavaScript
6. **Cache Busting**: Asset files automatically get `?v=timestamp` query parameter
7. **Mobile-First**: Navigation and layout are responsive with mobile-specific implementations

## Code Style Preferences

- Use `<?php` tags (no short tags)
- Functions check existence with `!function_exists()` before definition
- Type hints on function parameters where possible
- Escape output with `e()` or `escape_html()`
- Use heredoc for multi-line strings in HTML context
- Prefer `require_once` over `include_once` for critical files

## Testing & CI/CD

GitHub Actions workflows configured in `.github/workflows/`:
- `php.yml` - PHP Composer validation (currently no composer.json exists)
- `node.js.yml` - Node.js testing workflow

No active test suite currently implemented.

## Migration Status

The project is partially migrated from static HTML to modular PHP:
- ✅ Core partials created (head, header, footer)
- ✅ Configuration and helpers implemented
- ✅ Individual page files converted to PHP
- ⚠️ Some duplicate HTML still exists across page files
- 🎯 Goal: Full componentization with minimal code duplication

When making changes, prefer creating reusable components in `/partials/` over duplicating code in individual page files.
