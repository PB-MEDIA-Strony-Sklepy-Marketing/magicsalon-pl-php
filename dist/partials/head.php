<?php

/**
 * partials/head.php
 * Dynamic head partial - MAGIC SALON
 * Wersja: 2.0
 */

// Definicja BASE_URL jeśli nie istnieje
if (!defined('BASE_URL')) {
    $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $host = $_SERVER['HTTP_HOST'] ?? 'localhost';
    $scriptDir = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\');
    $basePath = ($scriptDir === '/' || $scriptDir === '\\') ? '' : $scriptDir;
    define('BASE_URL', $scheme . '://' . $host . $basePath);
}

/**
 * Resolve asset href to absolute URL with cache-busting
 */
function resolve_asset_href(string $href): string
{
    $href = trim($href);
    if ($href === '') return '';

    // Absolutne URL
    if (preg_match('#^(https?:)?//#i', $href)) {
        return $href;
    }

    // Root-relative path
    $path = (strpos($href, '/') === 0) ? $href : '/' . ltrim($href, '/');
    $abs = rtrim(BASE_URL, '/') . $path;

    // Cache-busting
    $documentRoot = $_SERVER['DOCUMENT_ROOT'] ?? '';
    if ($documentRoot) {
        $localFile = $documentRoot . $path;
        if (file_exists($localFile) && is_file($localFile)) {
            $mtime = @filemtime($localFile);
            if ($mtime !== false) {
                $separator = (strpos($abs, '?') === false) ? '?' : '&';
                $abs .= $separator . 'v=' . $mtime;
            }
        }
    }

    return $abs;
}

// Defaults
$defaults = [
    'title' => 'MAGIC SALON – Salon Kosmetyczny Dobrzykowice | Profesjonalne Zabiegi Beauty',
    'description' => 'Profesjonalny salon kosmetyczny MAGIC SALON w Dobrzykowicach k. Wrocławia ✨ Zabiegi na twarz, depilacja laserowa, modelowanie sylwetki, lifting rzęs ⭐ Rezerwuj online przez Booksy!',
    'keywords' => 'salon kosmetyczny dobrzykowice, beauty salon wrocław, depilacja laserowa, zabiegi na twarz, modelowanie ciała, lifting rzęs, manicure, pedicure, spa dobrzykowice, magic salon',
    'author' => 'MAGIC SALON - salon kosmetyczny',
    'robots' => 'index, follow, max-image-preview:large',
    'canonical' => BASE_URL . '/',
    'favicon' => '/images/favicon.png',
    'styles' => [
        '/css/bootstrap.min.css',
        '/css/bootstrap-grid-extended.css',
        '/css/fontawesome-7.1.0/css/all.min.css',
        '/css/bootstrap-icons-1.13.1/bootstrap-icons.min.css',
        '/css/flaticon.min.css',
        '/css/animate.min.css',
        '/css/owl.carousel.min.css',
        '/css/bootstrap-select.min.css',
        '/css/magnific-popup.min.css',
        '/css/loader.min.css',
        '/css/style.css',
        '/css/skin/skin-7.css',
        '/css/booksy-embed.css',
        '/plugins/revolution/revolution/css/settings.css',
        '/plugins/revolution/revolution/css/navigation.css',
        '/css/min/cookieconsent.min.css',
        '/css/min/iframemanager.min.css',
        '/css/fix-css-style.css',
        '/css/frontend-fixes-important.css',
        '/css/custom.css',
    ],
    'scripts' => [], // Dodatkowe skrypty w head
    'google_fonts' => 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap',
    'og' => [
        'type' => 'website',
        'title' => null,
        'description' => null,
        'url' => null,
        'image' => '/images/og-image.jpg',
        'site_name' => 'MAGIC SALON',
        'locale' => 'pl_PL',
        'fb_admins' => '464369106147391',
        'fb_app_id' => '464369106147391'
    ],
    'twitter' => [
        'card' => 'summary_large_image',
        'title' => null,
        'description' => null,
        'image' => '/images/og-image.jpg',
        'site' => '@magicsalon'
    ],
    'schema' => [
        'enabled' => true,
        'type' => 'BeautySalon',
        'name' => 'MAGIC SALON',
        'description' => 'Profesjonalny salon kosmetyczny oferujący zabiegi na twarz i ciało, depilację laserową, stylizację rzęs i brwi',
        'telephone' => '+48883481581',
        'email' => 'biuro@magicsalon.pl',
        'priceRange' => '20-450 PLN',
        'address' => [
            'streetAddress' => 'ul. Borówkowa 13',
            'postalCode' => '55-002',
            'addressLocality' => 'Dobrzykowice',
            'addressRegion' => 'Dolnośląskie',
            'addressCountry' => 'PL'
        ],
        'geo' => [
            'latitude' => '51.0961',
            'longitude' => '17.1994'
        ],
        'openingHours' => [
            'Mo-Fr 09:00-20:00',
            'Sa 09:00-18:00'
        ]
    ]
];

// Merge z przekazanym $meta
$meta = isset($meta) && is_array($meta) ? array_replace_recursive($defaults, $meta) : $defaults;

// Normalize OG/Twitter fallbacks
$meta['og']['title'] = $meta['og']['title'] ?? $meta['title'];
$meta['og']['description'] = $meta['og']['description'] ?? $meta['description'];
$meta['og']['url'] = $meta['og']['url'] ?? $meta['canonical'] ?? get_current_url();

$meta['twitter']['title'] = $meta['twitter']['title'] ?? $meta['title'];
$meta['twitter']['description'] = $meta['twitter']['description'] ?? $meta['description'];
?>
<!doctype html>
<html lang="pl">

<head>
    <!-- Podstawowe meta tagi -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <title><?php echo e($meta['title']); ?></title>
    <meta name="description" content="<?php echo e($meta['description']); ?>">
    <meta name="keywords" content="<?php echo e($meta['keywords']); ?>">
    <meta name="author" content="<?php echo e($meta['author']); ?>">
    <meta name="robots" content="<?php echo e($meta['robots']); ?>">

    <!-- Favicon -->
    <link rel="icon" href="<?php echo e(resolve_asset_href($meta['favicon'])); ?>" type="image/png">
    <link rel="shortcut icon" href="<?php echo e(resolve_asset_href($meta['favicon'])); ?>" type="image/png">
    <link rel="apple-touch-icon" href="<?php echo e(resolve_asset_href($meta['favicon'])); ?>">

    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo e($meta['canonical']); ?>">

    <!-- Open Graph Meta Tags -->
    <meta property="og:type" content="<?php echo e($meta['og']['type']); ?>">
    <meta property="og:title" content="<?php echo e($meta['og']['title']); ?>">
    <meta property="og:description" content="<?php echo e($meta['og']['description']); ?>">
    <meta property="og:url" content="<?php echo e($meta['og']['url']); ?>">
    <meta property="og:image" content="<?php echo e(resolve_asset_href($meta['og']['image'])); ?>">
    <meta property="og:site_name" content="<?php echo e($meta['og']['site_name']); ?>">
    <meta property="og:locale" content="<?php echo e($meta['og']['locale']); ?>">
    <?php if (!empty($meta['og']['fb_admins'])): ?>
        <meta property="fb:admins" content="<?php echo e($meta['og']['fb_admins']); ?>">
    <?php endif; ?>
    <?php if (!empty($meta['og']['fb_app_id'])): ?>
        <meta property="fb:app_id" content="<?php echo e($meta['og']['fb_app_id']); ?>">
    <?php endif; ?>

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="<?php echo e($meta['twitter']['card']); ?>">
    <meta name="twitter:title" content="<?php echo e($meta['twitter']['title']); ?>">
    <meta name="twitter:description" content="<?php echo e($meta['twitter']['description']); ?>">
    <meta name="twitter:image" content="<?php echo e(resolve_asset_href($meta['twitter']['image'])); ?>">
    <meta name="twitter:site" content="<?php echo e($meta['twitter']['site']); ?>">

    <!-- Preconnect dla optymalizacji -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://connect.facebook.net">
    <link rel="dns-prefetch" href="https://www.googletagmanager.com">

    <!-- Stylesheets -->
    <?php
    if (!empty($meta['styles']) && is_array($meta['styles'])) {
        foreach ($meta['styles'] as $style) {
            $href = resolve_asset_href($style);
            $attrs = strpos($style, 'skin-') !== false ? ' class="skin"' : '';
            echo '<link rel="stylesheet" href="' . htmlspecialchars($href, ENT_QUOTES, 'UTF-8') . '"' . $attrs . '>' . PHP_EOL;
        }
    }
    ?>

    <!-- Fix for Revolution Slider and Menu Issues -->
    <link rel="stylesheet" href="css/fixes.css">
    <link rel="stylesheet" href="css/booksy-iframe.css">

    <!-- Google Fonts -->
    <?php if (!empty($meta['google_fonts'])): ?>
        <link href="<?php echo e($meta['google_fonts']); ?>" rel="stylesheet">
    <?php endif; ?>

    <!-- Additional Scripts -->
    <?php if (!empty($meta['scripts']) && is_array($meta['scripts'])): ?>
        <?php foreach ($meta['scripts'] as $script): ?>
            <script src="<?php echo e(resolve_asset_href($script)); ?>"></script>
        <?php endforeach; ?>
    <?php endif; ?>

    <!-- Theme Color -->
    <meta name="theme-color" content="#6D356F">
    <meta name="msapplication-TileColor" content="#6D356F">

    <!-- Schema.org JSON-LD -->
    <?php if (!empty($meta['schema']['enabled'])): ?>
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "<?php echo e($meta['schema']['type']); ?>",
                "name": "<?php echo e($meta['schema']['name']); ?>",
                "description": "<?php echo e($meta['schema']['description'] ?? $meta['description']); ?>",
                "image": "<?php echo e(resolve_asset_href($meta['og']['image'])); ?>",
                "telephone": "<?php echo e($meta['schema']['telephone']); ?>",
                "email": "<?php echo e($meta['schema']['email']); ?>",
                "address": {
                    "@type": "PostalAddress",
                    "streetAddress": "<?php echo e($meta['schema']['address']['streetAddress']); ?>",
                    "addressLocality": "<?php echo e($meta['schema']['address']['addressLocality']); ?>",
                    "addressRegion": "<?php echo e($meta['schema']['address']['addressRegion'] ?? ''); ?>",
                    "postalCode": "<?php echo e($meta['schema']['address']['postalCode']); ?>",
                    "addressCountry": "<?php echo e($meta['schema']['address']['addressCountry']); ?>"
                },
                <?php if (!empty($meta['schema']['geo'])): ?> "geo": {
                        "@type": "GeoCoordinates",
                        "latitude": "<?php echo e($meta['schema']['geo']['latitude']); ?>",
                        "longitude": "<?php echo e($meta['schema']['geo']['longitude']); ?>"
                    },
                <?php endif; ?> "url": "<?php echo e($meta['canonical']); ?>",
                "priceRange": "<?php echo e($meta['schema']['priceRange'] ?? '$$'); ?>",
                "openingHoursSpecification": [
                    <?php if (!empty($meta['schema']['openingHours']) && is_array($meta['schema']['openingHours'])): ?>
                        <?php foreach ($meta['schema']['openingHours'] as $index => $hours):
                            list($days, $time) = explode(' ', $hours, 2);
                            list($opens, $closes) = explode('-', $time);

                            $dayMap = [
                                'Mo' => 'Monday',
                                'Tu' => 'Tuesday',
                                'We' => 'Wednesday',
                                'Th' => 'Thursday',
                                'Fr' => 'Friday',
                                'Sa' => 'Saturday',
                                'Su' => 'Sunday'
                            ];

                            if (strpos($days, '-') !== false) {
                                list($start, $end) = explode('-', $days);
                                $daysArray = [];
                                $daysOrder = array_keys($dayMap);
                                $startIdx = array_search($start, $daysOrder);
                                $endIdx = array_search($end, $daysOrder);
                                for ($i = $startIdx; $i <= $endIdx; $i++) {
                                    $daysArray[] = '"' . $dayMap[$daysOrder[$i]] . '"';
                                }
                                $daysOutput = implode(', ', $daysArray);
                            } else {
                                $daysOutput = '"' . ($dayMap[$days] ?? 'Monday') . '"';
                            }
                        ?> {
                                "@type": "OpeningHoursSpecification",
                                "dayOfWeek": [<?php echo $daysOutput; ?>],
                                "opens": "<?php echo trim($opens); ?>",
                                "closes": "<?php echo trim($closes); ?>"
                            }
                            <?php echo ($index < count($meta['schema']['openingHours']) - 1) ? ',' : ''; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                ]
            }
        </script>
    <?php endif; ?>

    <!-- Meta Pixel Code - ID: 23924298163858020 -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window,
            document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '23924298163858020');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=23924298163858020&ev=PageView&noscript=1"
            alt="">
    </noscript>

    <!-- Meta Pixel Code - ID: 24229370236712758 -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window,
            document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '24229370236712758');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=24229370236712758&ev=PageView&noscript=1"
            alt="">
    </noscript>

    <!-- Facebook SDK -->
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                appId: '464369106147391',
                xfbml: true,
                version: 'v21.0'
            });
        };
    </script>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v21.0&appId=464369106147391"></script>

    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZFZ2DQZQC6"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-ZFZ2DQZQC6', {
            'anonymize_ip': true,
            'cookie_flags': 'SameSite=None;Secure'
        });
    </script>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-K76PV6PD');
    </script>

</head>