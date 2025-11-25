<?php

/**
 * MAGIC SALON - Error 404 (404.php)
 * Wersja: 2.3 - Strona błędu nie znaleziono zasobu
 */

// Załaduj konfigurację
require_once __DIR__ . DIRECTORY_SEPARATOR . 'config.php';

// Konfiguracja meta tagów dla strony błędu 404
$meta = [
    'title' => 'Błąd 404 – Strona Nie Znaleziona | MAGIC SALON Dobrzykowice',
    'description' => 'Ups! Strona, której szukasz, nie istnieje lub została przeniesiona. Wróć na stronę główną i sprawdź naszą ofertę zabiegową.',
    'keywords' => 'błąd 404, strona nie znaleziona, magic salon błąd, nieprawidłowy adres',
    'canonical' => BASE_URL . '/404.php',
    'robots' => 'noindex, follow', // Ważne dla SEO: nie indeksujemy stron błędów
    'og' => [
        'type' => 'website',
        'title' => 'Strona Nie Znaleziona – MAGIC SALON',
        'description' => 'Zabłądziłeś w poszukiwaniu piękna? Ten adres nie istnieje, ale nasze zabiegi są jak najbardziej realne.',
        'url' => BASE_URL . '/404.php',
        'image' => BASE_URL . '/images/logo-7.png',
    ],
    'twitter' => [
        'card' => 'summary',
        'title' => 'Błąd 404 – Strona Nie Znaleziona',
        'description' => 'Przepraszamy, taki adres nie istnieje.',
    ],
    'schema' => [
        'enabled' => true,
        'type' => 'BeautySalon',
        'name' => 'MAGIC SALON',
        'description' => 'Salon kosmetyczny w Dobrzykowicach.',
        'url' => BASE_URL . '/',
        'telephone' => '+48883481581',
        'email' => 'biuro@magicsalon.pl',
        'address' => [
            'streetAddress' => 'ul. Borówkowa 13',
            'postalCode' => '55-002',
            'addressLocality' => 'Dobrzykowice',
            'addressRegion' => 'Dolnośląskie',
            'addressCountry' => 'PL'
        ]
    ]
];

// Załaduj head partial
include 'partials/head.php'; 
?>

<body id="bg">

    <div class="page-wraper">

        <!-- HEADER START -->
        <?php include 'partials/header.php'; ?>
        <!-- HEADER END -->

        <!-- CONTENT START -->
        <div class="page-content">

                        <?php
            // Konfiguracja dynamicznego banera i breadcrumbs dla strony błędu
            $banner_img = 'images/banner/about-banner.jpg'; 
            
            $page_title = 'Ups... Coś poszło nie tak';
            
            // Przyjazny opis błędu
            $page_desc = 'Wygląda na to, że zabłądziłaś/eś w poszukiwaniu idealnego zabiegu. Strona, której szukasz, zniknęła niczym zmarszczki po naszej terapii liftingującej. Nie martw się – główna oferta wciąż na Ciebie czeka!';
            
            $breadcrumbs = [
                [
                    'label' => 'Strona Główna',
                    'url' => 'index.php',
                    'icon' => 'fa fa-home'
                ],
                [
                    'label' => 'Error 404',
                    'url' => '', // Pusty URL oznacza element aktywny
                    'icon' => ''
                ]
            ];
            
            // Załadowanie dedykowanego partiala
            include 'partials/breadcrumbs.php';
            ?>

            <!-- SECTION CONTENT START -->
            <div class="section-full p-t80 p-b50">
                <div class="container">
                    <div class="section-content">
                        <div class="page-notfound-wrap row">

                            <div class="col-lg-8 col-md-6 col-sm-6">
                                <div class="page-notfound text-center">
                                    <form method="post">
                                        <strong class="text-uppercase">Error</strong>
                                        <strong>4<i class="fa fa-search-minus site-text-primary"></i>4</strong>
                                        <span>Strona nie została znaleziona</span>
                                        <p class="m-b20">Adres URL może być błędny lub strona została przeniesiona do innego działu.<br>Skorzystaj z przycisku poniżej, aby wrócić do świata relaksu.</p>
                                        <a href="index.php" class="site-button">WRÓĆ NA STRONĘ GŁÓWNĄ <i class="fa fa-angle-double-right"></i></a>
                                    </form>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="page-notfound-left text-center bg-gray">
                                    <div class="constrot-strip"></div>
                                    <!-- Ikona lupy symbolizująca szukanie -->
                                    <span class="fa fa-search" style="font-size: 100px; color: var(--color-theme-primary); display:block; padding: 40px 0;"></span>
                                    <div class="constrot-strip"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- SECTION CONTENT END -->

        </div>
        <!-- CONTENT END -->

        <!-- Footer -->
        <?php include 'partials/footer.php'; ?>

</body>

</html>