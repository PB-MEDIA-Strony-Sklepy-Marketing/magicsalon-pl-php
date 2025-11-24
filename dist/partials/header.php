<?php

/**
 * partials/header.php
 * Dynamiczny header z top bar i głównym menu nawigacyjnym
 * MAGIC SALON - Wersja 2.1
 */

// Pobierz aktualną ścieżkę dla aktywnego menu
$current_page = basename($_SERVER['PHP_SELF'], '.php');
$current_path = $_SERVER['REQUEST_URI'];

/**
 * Funkcja sprawdzająca czy link jest aktywny
 */
function is_active($page, $current)
{
    if (
        $page === $current ||
        (strpos($current, $page) !== false && $page !== 'index')
    ) {
        return ' active';
    }
    return '';
}

/**
 * Generuje bezpieczny URL względem BASE_URL
 */
function nav_url($path)
{
    $path = ltrim($path, '/');
    return BASE_URL . '/' . $path;
}

// Dane kontaktowe
$contact = [
    'email' => 'biuro@magicsalon.pl',
    'phone' => '+48883481581',
    'phone_display' => '+48 883 481 581',
    'address' => [
        'street' => 'ul. Borówkowa 13',
        'postal' => '55-002 Dobrzykowice'
    ]
];

// Social Media Links
$social_media = [
    [
        'name' => 'Facebook',
        'icon' => 'fa-brands fa-facebook',
        'url' => 'https://www.facebook.com/magicsalonpl',
        'aria' => 'Odwiedź nasz profil na Facebook'
    ],
    [
        'name' => 'Instagram',
        'icon' => 'fa-brands fa-instagram',
        'url' => 'https://www.instagram.com/magicsalonpl',
        'aria' => 'Odwiedź nasz profil na Instagram'
    ],
    [
        'name' => 'TikTok',
        'icon' => 'fa-brands fa-tiktok',
        'url' => 'https://www.tiktok.com/@magicsalonpl',
        'aria' => 'Odwiedź nasz profil na TikTok'
    ],
    [
        'name' => 'WhatsApp',
        'icon' => 'fa-brands fa-whatsapp',
        'url' => 'https://wa.me/48883481581',
        'aria' => 'Napisz do nas na WhatsApp'
    ],
    [
        'name' => 'Booksy',
        'icon' => 'fa iconcustom-booksyonlyicon iconcustom-lg',
        'url' => 'https://booksy.magicsalon.pl',
        'aria' => 'Zarezerwuj wizytę przez Booksy'
    ]
];

// Menu Structure - Główne menu nawigacyjne
$main_menu = [
    [
        'title' => 'Strona Główna',
        'icon' => 'fa-solid fa-house',
        'url' => 'index.php',
        'page_id' => 'index'
    ],
    [
        'title' => 'O firmie',
        'icon' => 'fa-solid fa-arrow-right',
        'url' => 'o-firmie.php',
        'page_id' => 'o-firmie',
        'submenu' => [
            [
                'title' => 'Zabiegi na twarz',
                'url' => 'o-nas/zabiegi-na-twarz.php',
                'icon' => 'fa-solid fa-right-long'
            ],
            [
                'title' => 'Epilacja i pielęgnacja',
                'url' => 'o-nas/epilacja-i-pielegnacja.php',
                'icon' => 'fa-solid fa-right-long'
            ],
            [
                'title' => 'Zabiegi na ciało',
                'url' => 'o-nas/zabiegi-na-cialo.php',
                'icon' => 'fa-solid fa-right-long'
            ],
            [
                'title' => 'Blog MAGIC SALON',
                'url' => 'o-nas/blog.php',
                'icon' => 'fa-solid fa-right-long'
            ],
            [
                'title' => 'Opinie klientów',
                'icon' => 'fa-solid fa-thumbs-up',
                'url' => 'opinie-klientow.php',
                'page_id' => 'opinie-klientow'
            ],
            [
                'title' => 'FAQ & Pytania',
                'icon' => 'fa-solid fa-comments',
                'url' => 'faq-pytania.php',
                'page_id' => 'faq-pytania'
            ],
            [
                'title' => 'Galeria',
                'icon' => 'fa-solid fa-images',
                'url' => 'galeria.php',
                'page_id' => 'galeria'
            ],
        ]
    ],
    [
        'title' => 'Oferta',
        'icon' => 'fa-solid fa-arrow-right',
        'url' => 'oferta.php',
        'page_id' => 'oferta',
        'mega_menu' => true,
        'submenu' => [
            'col1' => [
                [
                    'title' => 'Epilacja laserowa',
                    'url' => 'nasza-oferta/epilacja-laserowa.php',
                    'icon' => 'fa-solid fa-right-long'
                ],
                [
                    'title' => 'Peeling kawitacyjny',
                    'url' => 'nasza-oferta/peeling-kawitacyjny.php',
                    'icon' => 'fa-solid fa-right-long'
                ],
                [
                    'title' => 'Lifting i laminacja rzęs',
                    'url' => 'nasza-oferta/lifting-i-laminacja-rzes.php',
                    'icon' => 'fa-solid fa-right-long'
                ],
                [
                    'title' => 'Architektura i laminacja brwi',
                    'url' => 'nasza-oferta/architektura-i-laminacja-brwi.php',
                    'icon' => 'fa-solid fa-right-long'
                ],
                [
                    'title' => 'Detox & Drenaż',
                    'url' => 'nasza-oferta/detox-drenaz.php',
                    'icon' => 'fa-solid fa-right-long'
                ]
            ],
            'col2' => [
                [
                    'title' => 'Glow & Lift',
                    'url' => 'nasza-oferta/glow-lift.php',
                    'icon' => 'fa-solid fa-right-long'
                ],
                [
                    'title' => 'Modelowanie 360°',
                    'url' => 'nasza-oferta/modelowanie-360.php',
                    'icon' => 'fa-solid fa-right-long'
                ],
                [
                    'title' => 'Dermomasaż',
                    'url' => 'nasza-oferta/dermomasaz.php',
                    'icon' => 'fa-solid fa-right-long'
                ],
                [
                    'title' => 'Liposukcja ultradźwiękowa',
                    'url' => 'nasza-oferta/liposukcja-ultradzwiekowa.php',
                    'icon' => 'fa-solid fa-right-long'
                ],
                [
                    'title' => 'Lipolaser DUO',
                    'url' => 'nasza-oferta/lipolaser-duo.php',
                    'icon' => 'fa-solid fa-right-long'
                ]
            ],
            'col3' => [
                [
                    'title' => 'SilkRoll',
                    'url' => 'nasza-oferta/silkroll.php',
                    'icon' => 'fa-solid fa-right-long'
                ],
                [
                    'title' => 'Depilacja woskiem',
                    'url' => 'nasza-oferta/depilacja-woskiem.php',
                    'icon' => 'fa-solid fa-right-long'
                ],
                [
                    'title' => 'Przedłużanie i zagęszczanie rzęs',
                    'url' => 'nasza-oferta/przedluzanie-i-zageszczanie-rzes.php',
                    'icon' => 'fa-solid fa-right-long'
                ]
            ]
        ]
    ],
    [
        'title' => 'Cennik',
        'icon' => 'fa-solid fa-tag',
        'url' => 'cennik.php',
        'page_id' => 'cennik'
    ],
    [
        'title' => 'Kontakt',
        'icon' => 'fa-solid fa-phone-volume',
        'url' => 'kontakt.php',
        'page_id' => 'kontakt'
    ]
];
?>

<!-- Header Start -->
<header class="site-header header-style-modern" role="banner">

    <!-- Top Bar -->
    <div class="top-bar site-bg-primary" style="background-color: #6D356F;">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Side - Contact Info -->
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="wt-topbar-left">
                        <ul class="list-unstyled e-p-bx d-flex flex-wrap m-0">
                            <li class="m-2">
                                <i class="fa fa-envelope me-2" aria-hidden="true"></i>
                                <a href="mailto:<?php echo e($contact['email']); ?>"
                                    class="text-white text-decoration-none hover-link"
                                    style="transition: all 0.3s ease;"
                                    aria-label="Wyślij email do <?php echo e($contact['email']); ?>">
                                    <?php echo e($contact['email']); ?>
                                </a>
                            </li>
                            <li class="m-2">
                                <i class="fa fa-phone me-2" aria-hidden="true"></i>
                                <a href="tel:<?php echo e($contact['phone']); ?>"
                                    class="text-white text-decoration-none hover-link"
                                    style="transition: all 0.3s ease;"
                                    aria-label="Zadzwoń pod numer <?php echo e($contact['phone_display']); ?>">
                                    <?php echo e($contact['phone_display']); ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Right Side - Social Media -->
                <div class="col-lg-4 col-md-0 col-sm-0 d-sm-none d-md-none d-none d-xl-block">
                    <div class="wt-topbar-right text-end">
                        <ul class="social-bx list-inline m-0">
                            <?php foreach ($social_media as $social): ?>
                                <li class="list-inline-item">
                                    <a href="<?php echo e($social['url']); ?>"
                                        class="<?php echo e($social['icon']); ?> social-icon-link"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        style="color: #ffffff; font-size: 1rem; transition: all 0.3s ease; display: inline-block;"
                                        aria-label="<?php echo e($social['aria']); ?>"
                                        title="<?php echo e($social['name']); ?>">
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Middle - Logo & Info -->
    <div class="header-middle bg-white py-3" style="box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
        <div class="container">
            <div class="row mx-auto p-2 align-items-center">
                <!-- Logo -->
                <div class="col-xl-3 col-lg-3 col-md-tablet-2 col-md-8 col-sm-10 col-xs-mobile-9 col-10">
                    <div class="logo-header">
                        <a href="<?php echo nav_url('index.php'); ?>"
                            title="MAGIC SALON - Strona Główna"
                            aria-label="Przejdź do strony głównej MAGIC SALON">
                            <img src="<?php echo asset('images/logo-7.png'); ?>"
                                width="100%"
                                height="100%"
                                alt="MAGIC SALON - Logo Salon Kosmetyczny Dobrzykowice"
                                class="img-fluid"
                                style="max-height: 100%; width: 100%;">
                        </a>
                    </div>
                </div>

                <!-- Header Info -->
                <div class="col-xl-9 col-lg-9 col-md-tablet-10 col-md-4 col-sm-2 col-xs-mobile-3 col-2">
                    <div class="header-info d-none d-lg-block">
                        <ul class="list-unstyled d-flex justify-content-end align-items-center m-0">
                            <!-- Address -->
                            <li class="me-4">
                                <div class="d-flex align-items-center">
                                    <div class="icon-sm me-3">
                                        <span class="icon-cell d-flex align-items-center justify-content-center"
                                            style="width: 45px; height: 45px; background-color: rgba(109, 53, 111, 0.1); border-radius: 50%;">
                                            <i class="flaticon-placeholder"
                                                style="color: #6D356F; font-size: 1.25rem;"
                                                aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <div class="icon-content">
                                        <strong style="color: #444444; font-size: 0.875rem; display: block; margin-bottom: 0.25rem;">
                                            Adres salonu
                                        </strong>
                                        <span style="color: #666666; font-size: 0.8125rem;">
                                            <?php echo e($contact['address']['street']); ?>,
                                            <?php echo e($contact['address']['postal']); ?>
                                        </span>
                                    </div>
                                </div>
                            </li>

                            <!-- Phone -->
                            <li class="me-4">
                                <div class="d-flex align-items-center">
                                    <div class="icon-sm me-3">
                                        <span class="icon-cell d-flex align-items-center justify-content-center"
                                            style="width: 45px; height: 45px; background-color: rgba(215, 165, 79, 0.1); border-radius: 50%;">
                                            <i class="flaticon-smartphone"
                                                style="color: #D7A54F; font-size: 1.25rem;"
                                                aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <div class="icon-content">
                                        <strong style="color: #444444; font-size: 0.875rem; display: block; margin-bottom: 0.25rem;">
                                            Numer telefonu
                                        </strong>
                                        <a href="tel:<?php echo e($contact['phone']); ?>"
                                            style="color: #6D356F; font-size: 0.875rem; text-decoration: none; font-weight: 600; transition: color 0.3s ease;"
                                            aria-label="Zadzwoń pod numer <?php echo e($contact['phone_display']); ?>">
                                            <?php echo e($contact['phone_display']); ?>
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <!-- CTA Button -->
                            <li>
                                <a href="<?php echo nav_url('zarezerwuj-wizyte.php'); ?>"
                                    class="btn site-button text-uppercase px-4 py-2 d-inline-flex align-items-center gap-2"
                                    style="background: linear-gradient(135deg, #6D356F 0%, #9F5BA4 100%); 
                                          color: #ffffff; 
                                          border-radius: 0.5rem; 
                                          font-weight: 700; 
                                          font-size: 0.875rem;
                                          box-shadow: 0 4px 15px rgba(109, 53, 111, 0.3);
                                          transition: all 0.3s ease;
                                          border: none;"
                                    aria-label="Zarezerwuj wizytę w MAGIC SALON">
                                    <i class="fa-solid fa-circle-exclamation" aria-hidden="true"></i>
                                    <span>Zarezerwuj wizytę</span>
                                    <i class="fa-solid fa-calendar-plus" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- Mobile CTA Button -->
                    <div class="d-lg-none px-2">
                        <a href="<?php echo nav_url('zarezerwuj-wizyte.php'); ?>"
                            class="btn btn-sm px-3 py-2"
                            style="background-color: #6D356F; color: #ffffff; border-radius: 0.5rem; font-weight: 600; font-size: 0.875rem;"
                            aria-label="Zarezerwuj wizytę">
                            <i class="fa-solid fa-calendar-plus" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation -->
    <div class="sticky-header main-bar-wraper" style="position: sticky; top: 0; z-index: 1000; background-color: #ffffff; box-shadow: 0 2px 15px rgba(0,0,0,0.1); transition: all 0.3s ease;">
        <nav class="main-bar header-bottom"
            style="background-color: #444444; width: 100%; margin: 0; padding: 0;"
            role="navigation"
            aria-label="Główne menu nawigacyjne">

            <!-- Desktop Navigation Container -->
            <div class="container-fluid d-none d-lg-block" style="padding: 0;">
                <div class="row align-items-center g-0 mx-auto padding-extech-shortcode-footer">
                    <div class="col-12">
                        <div class="header-nav">
                            <ul class="nav navbar-nav mb-0" style="width: 100%;">
                                <?php foreach ($main_menu as $menu_item): ?>
                                    <?php
                                    $has_submenu = isset($menu_item['submenu']);
                                    $is_mega_menu = isset($menu_item['mega_menu']) && $menu_item['mega_menu'];
                                    $active_class = is_active($menu_item['page_id'], $current_page);
                                    $highlight_class = isset($menu_item['highlight']) && $menu_item['highlight'] ? ' menu-highlight' : '';
                                    ?>

                                    <li class="nav-item<?php echo $active_class . $highlight_class; ?><?php echo $is_mega_menu ? ' has-mega-menu' : ($has_submenu ? ' dropdown' : ''); ?>" style="flex: 1;">
                                        <a href="<?php echo nav_url($menu_item['url']); ?>"
                                            class="nav-link d-flex align-items-center justify-content-center gap-2"
                                            style="color: #ffffff; 
                                              padding: 1rem 1.25rem; 
                                              font-weight: 600; 
                                              font-size: 0.9375rem;
                                              transition: all 0.3s ease;
                                              position: relative;
                                              display: flex;
                                              <?php echo isset($menu_item['highlight']) && $menu_item['highlight'] ? 'background: linear-gradient(135deg, #D7A54F 0%, #E8B968 100%); border-radius: 0.5rem; margin: 0.25rem;' : ''; ?>"
                                            <?php echo $has_submenu || $is_mega_menu ? 'data-bs-toggle="dropdown" aria-expanded="false"' : ''; ?>
                                            aria-label="<?php echo e($menu_item['title']); ?>">
                                            <?php if (!empty($menu_item['icon'])): ?>
                                                <i class="<?php echo e($menu_item['icon']); ?>" aria-hidden="true"></i>
                                            <?php endif; ?>
                                            <span><?php echo e($menu_item['title']); ?></span>
                                            <?php if ($has_submenu || $is_mega_menu): ?>
                                                <i class="fa fa-chevron-down ms-1" style="font-size: 0.75rem;" aria-hidden="true"></i>
                                            <?php endif; ?>
                                        </a>

                                        <?php if ($has_submenu && !$is_mega_menu): ?>
                                            <!-- Standard Dropdown -->
                                            <ul class="dropdown-menu sub-menu"
                                                style="background-color: #ffffff; 
                                               border: none; 
                                               border-radius: 0.75rem; 
                                               box-shadow: 0 10px 40px rgba(0,0,0,0.15); 
                                               padding: -0.75rem 0;
                                               margin-top: -0.5rem;
                                               width: 100%;
                                               max-width: 100%;
                                               min-width: 100%;">
                                                <?php foreach ($menu_item['submenu'] as $sub_item): ?>
                                                    <li>
                                                        <a href="<?php echo nav_url($sub_item['url']); ?>"
                                                            class="dropdown-item d-flex align-items-center gap-2 px-4 py-2"
                                                            style="color: #444444; 
                                                      font-size: 0.9375rem; 
                                                      font-weight: 500;
                                                      transition: all 0.3s ease;"
                                                            aria-label="<?php echo e($sub_item['title']); ?>">
                                                            <?php if (!empty($sub_item['icon'])): ?>
                                                                <i class="<?php echo e($sub_item['icon']); ?>" style="color: #D7A54F;" aria-hidden="true"></i>
                                                            <?php endif; ?>
                                                            <span><?php echo e($sub_item['title']); ?></span>
                                                        </a>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        <?php endif; ?>

                                        <?php if ($is_mega_menu): ?>
                                            <!-- Mega Menu -->
                                            <ul class="dropdown-menu mega-menu"
                                                style="background-color: #ffffff; 
                                               border: none; 
                                               border-radius: 0.75rem; 
                                               box-shadow: 0 15px 50px rgba(0,0,0,0.15); 
                                               padding: 2rem;
                                               margin-top: -0.5rem;
                                               min-width: 900px;">
                                                <li>
                                                    <div class="row g-4">
                                                        <?php foreach (['col1', 'col2', 'col3'] as $col): ?>
                                                            <?php if (isset($menu_item['submenu'][$col])): ?>
                                                                <div class="col-lg-4">
                                                                    <ul class="list-unstyled mb-0">
                                                                        <?php foreach ($menu_item['submenu'][$col] as $mega_item): ?>
                                                                            <li class="mb-2">
                                                                                <a href="<?php echo nav_url($mega_item['url']); ?>"
                                                                                    class="d-flex align-items-center rounded"
                                                                                    style="color: #444444; 
                                                                  text-decoration: none; 
                                                                  font-size: 0.9375rem; 
                                                                  font-weight: 500;
                                                                  transition: all 0.3s ease;
                                                                  background-color: transparent;"
                                                                                    aria-label="<?php echo e($mega_item['title']); ?>">
                                                                                    <?php if (!empty($mega_item['icon'])): ?>
                                                                                        <i class="<?php echo e($mega_item['icon']); ?>" style="color: #D7A54F; font-size: 0.875rem;" aria-hidden="true"></i>
                                                                                    <?php endif; ?>
                                                                                    <span><?php echo e($mega_item['title']); ?></span>
                                                                                </a>
                                                                            </li>
                                                                        <?php endforeach; ?>
                                                                    </ul>
                                                                </div>
                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
                                                    </div>
                                                </li>
                                            </ul>
                                        <?php endif; ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile Navigation -->
            <div class="d-lg-none" style="width: 100%; margin: 0; padding: 0; overflow-x: hidden;">
                <!-- Mobile Menu Toggle Button - Full Width -->
                <div style="width: 100%; display: flex; align-items: stretch; padding: 0; margin: 0;">
                    <button id="mobile-side-drawer"
                        type="button"
                        class="mobile-menu-btn"
                        data-bs-toggle="collapse"
                        data-bs-target="#mainNavigation"
                        aria-controls="mainNavigation"
                        aria-expanded="false"
                        aria-label="Przełącz menu nawigacyjne"
                        style="width: 100%; 
                           display: flex; 
                           flex-direction: column; 
                           align-items: center; 
                           justify-content: center; 
                           gap: 0.5rem;
                           background-color: #6D356F; 
                           border: none; 
                           padding: 1rem;
                           border-radius: 0;
                           cursor: pointer;
                           transition: all 0.3s ease;
                           min-height: 70px;">

                        <div style="display: flex; flex-direction: column; gap: 0.375rem; align-items: center;">
                            <span class="icon-bar" style="display: block; width: 28px; height: 3px; background-color: #ffffff; border-radius: 2px; transition: all 0.3s ease;"></span>
                            <span class="icon-bar" style="display: block; width: 28px; height: 3px; background-color: #ffffff; border-radius: 2px; transition: all 0.3s ease;"></span>
                            <span class="icon-bar" style="display: block; width: 28px; height: 3px; background-color: #ffffff; border-radius: 2px; transition: all 0.3s ease;"></span>
                        </div>

                        <span style="color: #ffffff; 
                                font-weight: 700; 
                                font-size: 0.75rem;
                                letter-spacing: 1px;
                                text-transform: uppercase;">MENU</span>
                    </button>
                </div>

                <!-- Mobile Navigation Menu - Full Width -->
                <div class="mobile-menu-container collapse" id="mainNavigation" style="width: 100%; margin: 0; padding: 0; overflow-x: hidden;">
                    <ul class="mobile-nav-list nav flex-column mb-0" style="background-color: #444444; margin: 0; padding: 0; border-radius: 0;">
                        <?php foreach ($main_menu as $menu_item): ?>
                            <?php
                            $has_submenu = isset($menu_item['submenu']);
                            $is_mega_menu = isset($menu_item['mega_menu']) && $menu_item['mega_menu'];
                            $active_class = is_active($menu_item['page_id'], $current_page);
                            $highlight_class = isset($menu_item['highlight']) && $menu_item['highlight'] ? ' menu-highlight' : '';
                            $submenu_id = 'mobile-submenu-' . preg_replace('/[^a-zA-Z0-9]+/', '-', strtolower($menu_item['title']));
                            ?>

                            <li class="mobile-nav-item nav-item<?php echo $active_class . $highlight_class; ?>" style="border-bottom: 1px solid rgba(255,255,255,0.1); margin: 0; padding: 0;">
                                <div style="display: flex; align-items: center; justify-content: space-between; width: 100%;">
                                    <a href="<?php echo nav_url($menu_item['url']); ?>"
                                        class="mobile-nav-link nav-link d-flex align-items-center gap-2"
                                        style="color: #ffffff; 
                                          padding: 1rem 1.5rem; 
                                          font-weight: 600; 
                                          font-size: 0.9375rem;
                                          transition: all 0.3s ease;
                                          position: relative;
                                          flex: 1;
                                          margin: 0;
                                          <?php echo isset($menu_item['highlight']) && $menu_item['highlight'] ? 'background: linear-gradient(135deg, #D7A54F 0%, #E8B968 100%);' : ''; ?>"
                                        aria-label="<?php echo e($menu_item['title']); ?>">
                                        <?php if (!empty($menu_item['icon'])): ?>
                                            <i class="<?php echo e($menu_item['icon']); ?>" aria-hidden="true"></i>
                                        <?php endif; ?>
                                        <span><?php echo e($menu_item['title']); ?></span>
                                    </a>

                                    <?php if ($has_submenu || $is_mega_menu): ?>
                                        <button class="mobile-submenu-toggle"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#<?php echo $submenu_id; ?>"
                                            aria-controls="<?php echo $submenu_id; ?>"
                                            aria-expanded="false"
                                            style="background: none; 
                                               border: none; 
                                               padding: 1rem 1.5rem; 
                                               cursor: pointer;
                                               color: #ffffff;
                                               font-size: 1.25rem;
                                               transition: all 0.3s ease;
                                               display: flex;
                                               align-items: center;
                                               justify-content: center;">
                                            <i class="fa fa-plus" style="transition: all 0.3s ease;" aria-hidden="true"></i>
                                        </button>
                                    <?php endif; ?>
                                </div>

                                <?php if ($has_submenu && !$is_mega_menu): ?>
                                    <!-- Mobile Standard Dropdown -->
                                    <div class="collapse mobile-submenu" id="<?php echo $submenu_id; ?>" style="width: 100%; margin: 0; padding: 0;">
                                        <ul class="list-unstyled mb-0" style="background-color: rgba(0,0,0,0.15); margin: 0; padding: 0;">
                                            <?php foreach ($menu_item['submenu'] as $sub_item): ?>
                                                <li style="border-bottom: 1px solid rgba(255,255,255,0.05); margin: 0; padding: 0;">
                                                    <a href="<?php echo nav_url($sub_item['url']); ?>"
                                                        class="d-flex align-items-center gap-2"
                                                        style="color: #ffffff; 
                                                      font-size: 0.875rem; 
                                                      font-weight: 500;
                                                      transition: all 0.3s ease;
                                                      padding: 0.75rem 2.5rem;
                                                      display: block;
                                                      text-decoration: none;"
                                                        aria-label="<?php echo e($sub_item['title']); ?>">
                                                        <?php if (!empty($sub_item['icon'])): ?>
                                                            <i class="<?php echo e($sub_item['icon']); ?>" style="color: #D7A54F; font-size: 0.875rem;" aria-hidden="true"></i>
                                                        <?php endif; ?>
                                                        <span><?php echo e($sub_item['title']); ?></span>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>

                                <?php if ($is_mega_menu): ?>
                                    <!-- Mobile Mega Menu -->
                                    <div class="collapse mobile-submenu" id="<?php echo $submenu_id; ?>" style="width: 100%; margin: 0; padding: 0;">
                                        <div style="background-color: rgba(0,0,0,0.15); padding: 0;">
                                            <?php foreach (['col1', 'col2', 'col3'] as $col): ?>
                                                <?php if (isset($menu_item['submenu'][$col])): ?>
                                                    <div style="padding: 1rem 1.5rem;">
                                                        <ul class="list-unstyled mb-0" style="margin: 0; padding: 0;">
                                                            <?php foreach ($menu_item['submenu'][$col] as $mega_item): ?>
                                                                <li style="margin-bottom: 0.5rem; padding: 0;">
                                                                    <a href="<?php echo nav_url($mega_item['url']); ?>"
                                                                        class="d-flex align-items-center gap-2"
                                                                        style="color: #ffffff; 
                                                                      text-decoration: none; 
                                                                      font-size: 0.875rem; 
                                                                      font-weight: 500;
                                                                      transition: all 0.3s ease;
                                                                      padding: 0.5rem 0;"
                                                                        aria-label="<?php echo e($mega_item['title']); ?>">
                                                                        <?php if (!empty($mega_item['icon'])): ?>
                                                                            <i class="<?php echo e($mega_item['icon']); ?>" style="color: #D7A54F; font-size: 0.875rem;" aria-hidden="true"></i>
                                                                        <?php endif; ?>
                                                                        <span><?php echo e($mega_item['title']); ?></span>
                                                                    </a>
                                                                </li>
                                                            <?php endforeach; ?>
                                                        </ul>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

</header>

<!-- JavaScript for Sticky Header -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const stickyHeader = document.querySelector('.sticky-header');

        window.addEventListener('scroll', function() {
            if (window.scrollY > 100) {
                stickyHeader.classList.add('scrolled');
            } else {
                stickyHeader.classList.remove('scrolled');
            }
        });
    });
</script>
<!-- JavaScript for Enhanced Interactivity -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuBtn = document.getElementById('mobile-side-drawer');
        const mainNavigation = document.getElementById('mainNavigation');
        const mobileSubmenuToggles = document.querySelectorAll('.mobile-submenu-toggle');

        // Handle main menu button
        if (mobileMenuBtn) {
            mobileMenuBtn.addEventListener('click', function() {
                const isExpanded = this.getAttribute('aria-expanded') === 'true';
                this.setAttribute('aria-expanded', !isExpanded);
            });
        }

        // Handle submenu toggles
        mobileSubmenuToggles.forEach(toggle => {
            toggle.addEventListener('click', function(e) {
                e.preventDefault();
                const isExpanded = this.getAttribute('aria-expanded') === 'true';
                this.setAttribute('aria-expanded', !isExpanded);

                // Smooth scroll to submenu
                const targetId = this.getAttribute('data-bs-target');
                const targetElement = document.querySelector(targetId);
                if (targetElement && !isExpanded) {
                    setTimeout(() => {
                        targetElement.scrollIntoView({
                            behavior: 'smooth',
                            block: 'nearest'
                        });
                    }, 150);
                }
            });
        });

        // Close menu when clicking outside
        document.addEventListener('click', function(e) {
            if (!e.target.closest('.main-bar-wraper')) {
                if (mainNavigation && mainNavigation.classList.contains('show')) {
                    const bsCollapse = new bootstrap.Collapse(mainNavigation, {
                        toggle: false
                    });
                    bsCollapse.hide();
                    mobileMenuBtn.setAttribute('aria-expanded', 'false');
                }
            }
        });

        // Handle window resize
        window.addEventListener('resize', function() {
            if (window.innerWidth >= 992) {
                if (mainNavigation && mainNavigation.classList.contains('show')) {
                    const bsCollapse = new bootstrap.Collapse(mainNavigation, {
                        toggle: false
                    });
                    bsCollapse.hide();
                    mobileMenuBtn.setAttribute('aria-expanded', 'false');
                }
            }
        });
    });
</script>