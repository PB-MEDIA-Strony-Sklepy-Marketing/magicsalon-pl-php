# GitHub Copilot Instructions for MAGIC SALON Project

## Project Context

This is a **Polish beauty salon website** (MAGIC SALON) built with **pure PHP 8.x** (no framework). The project was converted from static HTML to modular PHP components and is mid-migration toward full componentization.

**Production URL:** https://magicsalon.pl/
**Language:** Polish (content, comments, variable names)
**Architecture:** See [CLAUDE.md](../CLAUDE.md) for detailed architecture

## Critical Development Rules

### 1. Working Directory
- **ALWAYS work in `/dist/` directory** - this is the active application
- `/src/` contains original HTML templates (reference only, do not modify)

### 2. Path Handling
```php
// File system paths - ALWAYS use DIRECTORY_SEPARATOR
require_once __DIR__ . DIRECTORY_SEPARATOR . 'config.php';
$path = ROOT_PATH . DIRECTORY_SEPARATOR . 'partials' . DIRECTORY_SEPARATOR . 'header.php';

// Frontend URLs - use BASE_URL
$url = BASE_URL . '/kontakt.php';

// Assets with cache-busting - use asset() function
echo asset('css/style.css'); // Outputs: /css/style.css?v=timestamp
```

**Never mix path separators.** Windows uses `\`, Linux uses `/`. DIRECTORY_SEPARATOR handles this automatically.

### 3. Output Escaping
**Always escape user-facing output:**
```php
// Correct
echo e($variable);
echo escape_html($user_input);

// Incorrect - NEVER do this
echo $_POST['name'];  // XSS vulnerability!
echo $user_input;     // Unsafe!
```

### 4. PHP Version Compatibility
- Target: **PHP 8.5** (compatible with PHP 8.x)
- Avoid deprecated features:
  - `E_STRICT` is deprecated in PHP 8.4+
  - Use type hints where possible
  - Prefer modern syntax

### 5. Include/Require Pattern
```php
// Always check file existence for partials
$headerFile = __DIR__ . DIRECTORY_SEPARATOR . 'partials' . DIRECTORY_SEPARATOR . 'header.php';
if (file_exists($headerFile)) {
    require_once $headerFile;
}

// Or use safe_include helper
safe_include(PARTIALS_PATH . DIRECTORY_SEPARATOR . 'header.php');
```

## Standard Page Structure

When creating new pages, follow this exact pattern:

```php
<?php
/**
 * Page description
 * MAGIC SALON
 */

// Load configuration
require_once __DIR__ . DIRECTORY_SEPARATOR . 'config.php';

// Page-specific meta configuration
$meta = [
    'title' => 'Page Title - MAGIC SALON',
    'description' => 'SEO description for this page',
    'keywords' => 'relevant, keywords, here',
    'canonical' => BASE_URL . '/page-name.php',
    'og' => [
        'image' => '/images/page-specific-image.jpg',
        'type' => 'website'
    ],
    'schema' => [
        'enabled' => true,
        // Additional schema properties if needed
    ]
];

// Load head partial
require_once __DIR__ . DIRECTORY_SEPARATOR . 'partials' . DIRECTORY_SEPARATOR . 'head.php';
?>

<body id="page-id" class="page-class">

    <?php require_once __DIR__ . '/partials/header.php'; ?>

    <div class="page-content">
        <!-- Page-specific content here -->
    </div>

    <?php require_once __DIR__ . '/partials/footer.php'; ?>

</body>
```

## Component Architecture

### partials/head.php
- Accepts `$meta` array with page-specific overrides
- Has comprehensive defaults (title, description, styles, schema, etc.)
- Handles SEO, Open Graph, Twitter Cards, Schema.org
- Includes tracking codes (GA, Facebook Pixel, GTM)
- Function: `resolve_asset_href($href)` - resolves assets with cache-busting

### partials/header.php
- Dynamic navigation from `$main_menu` array
- Active page detection: `is_active($page, $current)`
- Mobile-responsive menu
- Social media links
- CTA button (Booksy booking)
- Function: `nav_url($path)` - generates navigation URLs

### partials/footer.php
- Widget sections
- Contact information
- WhatsApp and Booksy floating widgets
- JavaScript includes
- Function: `footer_url($path)` - generates footer URLs

## Brand Guidelines

### Color Palette
When writing CSS or inline styles, use these brand colors:

```css
:root {
    --color-theme-primary: #6D356F;    /* Purple - primary brand */
    --color-theme-secondary: #D7A54F;  /* Gold - secondary/accent */
    --color-hover: #9F5BA4;            /* Lighter purple for hover */
    --site-button-color: #222222;      /* Button text */
    --color-text: #444444;             /* Body text */
    --color-background: #ffffff;       /* Background */
}
```

### Typography
- Main font: Poppins (Google Fonts)
- Font weights: 300, 400, 500, 600, 700, 800, 900

### Company Information
```php
// Use these exact values
$company = [
    'name' => 'MAGIC SALON – Salon kosmetyczny',
    'address' => 'ul. Borówkowa 13, 55-002 Dobrzykowice',
    'phone' => '+48883481581',
    'phone_display' => '+48 883 481 581',
    'email' => 'biuro@magicsalon.pl',
    'booksy' => 'https://booksy.magicsalon.pl',
    'coordinates' => ['lat' => '51.0961', 'lng' => '17.1994'],
    'hours' => [
        'weekdays' => 'Mo-Fr 09:00-20:00',
        'saturday' => 'Sa 09:00-18:00'
    ]
];
```

## Helper Functions Reference

### Must-Use Helpers (from helpers.php)

```php
// HTML escaping
e($string)                           // Short escape
escape_html($string)                 // Full escape

// URL and asset handling
asset($path)                         // Asset URL with cache-busting
get_current_url()                    // Current page URL

// Text manipulation
create_slug($text)                   // Polish-aware slug generation
truncate($text, $length, $suffix)    // Text truncation
format_phone($phone)                 // Format to +48 XXX XXX XXX

// Development
dd($data, $die = true)               // Debug dump (development only)
safe_include($path, $vars = [])      // Safe file inclusion

// Utilities
is_https()                           // Check if HTTPS
```

## Security Requirements

### 1. Input Validation
```php
// Always validate and sanitize user input
$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$name = trim(strip_tags($_POST['name']));
```

### 2. SQL Safety
```php
// Use prepared statements (if using database)
$stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
$stmt->execute([$email]);
```

### 3. CSRF Protection
```php
// Generate token for forms
if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// Verify token on submission
if (!hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
    die('CSRF token validation failed');
}
```

### 4. File Uploads
```php
// Validate file types and sizes
$allowed = ['jpg', 'jpeg', 'png', 'gif'];
$extension = strtolower(pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION));
if (!in_array($extension, $allowed)) {
    die('Invalid file type');
}
```

## Accessibility (WCAG 2.2)

### Required Attributes
```html
<!-- Images - always include alt -->
<img src="..." alt="Descriptive text">

<!-- Links - descriptive text or aria-label -->
<a href="..." aria-label="Detailed description">Link</a>

<!-- Interactive elements - roles and labels -->
<button role="button" aria-label="Open menu" aria-expanded="false">Menu</button>

<!-- Form inputs - labels and descriptions -->
<label for="email">Email:</label>
<input type="email" id="email" name="email" aria-describedby="email-help">
<small id="email-help">Enter your email address</small>
```

### Focus Management
```css
/* Visible focus indicators */
a:focus, button:focus, input:focus {
    outline: 2px solid var(--color-theme-primary);
    outline-offset: 2px;
}
```

## Responsive Design

### Breakpoints
```css
/* Mobile first approach */
/* xs: 0-575px (default) */
/* sm: 576px-767px */
@media (min-width: 576px) { }

/* md: 768px-991px */
@media (min-width: 768px) { }

/* lg: 992px-1199px */
@media (min-width: 992px) { }

/* xl: 1200px+ */
@media (min-width: 1200px) { }
```

## Integration Points

### Booksy (Booking System)
```php
// Booking URL
$booksy_url = 'https://booksy.magicsalon.pl';

// Widget is included in footer.php
// JavaScript: booksy-embed.js, booksy-widget.js
```

### Analytics & Tracking
- Google Analytics: `G-ZFZ2DQZQC6`
- Google Tag Manager: `GTM-K76PV6PD`
- Facebook Pixel: `23924298163858020`, `24229370236712758`
- Facebook App ID: `464369106147391`

### Social Media
```php
$social = [
    'facebook' => 'https://www.facebook.com/magicsalonpl',
    'instagram' => 'https://www.instagram.com/magicsalonpl',
    'tiktok' => 'https://www.tiktok.com/@magicsalonpl',
    'whatsapp' => 'https://wa.me/48883481581'
];
```

## Common Pitfalls to Avoid

### ❌ DON'T
```php
// Don't use relative paths without DIRECTORY_SEPARATOR
require_once '../config.php';

// Don't concatenate paths with /
$path = $dir . '/' . $file;

// Don't output unescaped user input
echo $_POST['comment'];

// Don't use short PHP tags
<? echo $var; ?>

// Don't use deprecated error constants
error_reporting(E_ALL | E_STRICT);  // E_STRICT deprecated in 8.4+
```

### ✅ DO
```php
// Use DIRECTORY_SEPARATOR for file paths
require_once __DIR__ . DIRECTORY_SEPARATOR . 'config.php';

// Use BASE_URL for frontend URLs
$url = BASE_URL . '/about.php';

// Always escape output
echo e($_POST['comment']);

// Use full PHP tags
<?php echo $var; ?>

// Use modern error reporting
error_reporting(E_ALL);
```

## Testing Checklist

Before submitting code, verify:

- [ ] Works on PHP 8.x
- [ ] Paths use DIRECTORY_SEPARATOR
- [ ] All output is escaped
- [ ] Responsive on mobile, tablet, desktop
- [ ] Keyboard navigation works
- [ ] Images have alt attributes
- [ ] Links have descriptive text
- [ ] Console has no errors
- [ ] Tested in Chrome, Firefox, Safari (if possible)

## Code Style

### PHP
```php
// Function declaration
function myFunction(string $param): ReturnType
{
    // Code here
}

// Type hints preferred
public function process(array $data, int $id): bool

// Check function existence
if (!function_exists('my_custom_function')) {
    function my_custom_function() {
        // Implementation
    }
}
```

### Naming Conventions
- Variables: `$snake_case`
- Functions: `snake_case()`
- Constants: `UPPER_SNAKE_CASE`
- Classes: `PascalCase` (if adding classes in future)

### Comments
```php
// Polish is OK for business logic comments
// Opisz złożoną logikę po polsku

// English is preferred for technical comments
// Describe technical implementation in English
```

## File Encoding

**CRITICAL:** All files must be **UTF-8 without BOM**

Check encoding in your editor:
- VS Code: Lower right corner, select "UTF-8"
- PHPStorm: File > File Encoding > UTF-8

## Environment Configuration

### Development
```php
// config.php
define('APP_ENV', 'development');
// Full error reporting
// No caching
// Debug helpers enabled
```

### Production
```php
// config.php
define('APP_ENV', 'production');
// Error logging only
// Browser caching enabled
// Debug disabled
```

## Quick Reference: Creating New Features

### Adding a New Page
1. Copy `dist/index.php` as template
2. Update `$meta` array
3. Replace content between header and footer
4. Add to navigation in `partials/header.php` if needed
5. Test on PHP 8.x locally

### Adding Styles
1. Add to existing CSS file in `dist/css/`
2. OR add to `$meta['styles']` array in page file
3. Use brand color variables
4. Test responsive behavior

### Adding JavaScript
1. Add file to `dist/js/`
2. Include in footer.php or page-specific
3. Use modern ES6+ syntax
4. Ensure no console errors

### Updating Navigation
1. Edit `$main_menu` array in `partials/header.php`
2. Follow existing structure
3. Test mobile menu
4. Verify active state highlighting

## Additional Resources

- Full architecture: [CLAUDE.md](../CLAUDE.md)
- How to contribute: [CONTRIBUTING.md](../CONTRIBUTING.md)
- SEO guidelines: `META TAG-OPENGRAPH-CSSSTYLESHET.txt`
- Help & Support: [SUPPORT.md](../SUPPORT.md)

---

**Remember:** This is a commercial website for a real beauty salon. Code quality, security, and accessibility are critical. When in doubt, ask or check the documentation!
