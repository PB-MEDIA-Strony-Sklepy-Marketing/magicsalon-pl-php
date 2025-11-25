<?php

/**
 * MAGIC SALON - Error 403 (403.php)
 * Wersja: 2.3 - Strona błędu braku dostępu
 */

// Załaduj konfigurację
require_once __DIR__ . DIRECTORY_SEPARATOR . 'config.php';

// Konfiguracja meta tagów dla strony błędu 403
$meta = [
    'title' => 'Błąd 403 – Dostęp Zabroniony | MAGIC SALON Dobrzykowice',
    'description' => 'Przepraszamy, ale nie masz uprawnień do przeglądania tej strony. Wróć na stronę główną Magic Salon i odkryj naszą ofertę zabiegową.',
    'keywords' => 'błąd 403, dostęp zabroniony, magic salon błąd, strona niedostępna',
    'canonical' => BASE_URL . '/403.php',
    'robots' => 'noindex, follow', // Strony błędów nie powinny być indeksowane w Google
    'og' => [
        'type' => 'website',
        'title' => 'Dostęp Zabroniony – MAGIC SALON',
        'description' => 'Wygląda na to, że trafiłeś do miejsca dostępnego tylko dla wybranych. Zapraszamy na stronę główną.',
        'url' => BASE_URL . '/403.php',
        'image' => BASE_URL . '/images/logo-7.png',
    ],
    'twitter' => [
        'card' => 'summary',
        'title' => 'Błąd 403 – Dostęp Zabroniony',
        'description' => 'Brak uprawnień do wyświetlenia zasobu.',
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
            // Używamy neutralnego banera
            $banner_img = 'images/banner/about-banner.jpg'; 
            $page_title = 'Dostęp Ograniczony';
            // Przyjazny opis błędu
            $page_desc = 'Wygląda na to, że próbujesz dostać się do miejsca, które jest chronione magicznym zaklęciem... lub po prostu wymaga uprawnień administratora. Nie martw się – pełna oferta naszych zabiegów jest dostępna dla każdego!';
            $breadcrumbs = [
                [
                    'label' => 'Strona Główna',
                    'url' => 'index.php',
                    'icon' => 'fa fa-home'
                ],
                [
                    'label' => 'Error 403',
                    'url' => '', // Pusty URL oznacza element aktywny
                    'icon' => ''
                ]
            ];
            
            // Załadowanie dedykowanego partiala (jeśli używasz wersji z banerem)
            // Jeśli wolisz wersję bez dużego banera na stronie błędu, możesz użyć include 'partials/breadcrumbs.php';
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
                                        <strong class="text-uppercase">Oops!</strong>
                                        <strong>4<i class="fa fa-lock site-text-primary"></i>3</strong>
                                        <span>Dostęp do tej strony jest zabroniony</span>
                                        <p class="m-b20">Nie posiadasz wystarczających uprawnień, aby zobaczyć tę zawartość. <br>Wróć do bezpiecznej przystani piękna.</p>
                                        <a href="index.php" class="site-button">WRÓĆ NA STRONĘ GŁÓWNĄ <i class="fa fa-angle-double-right"></i></a>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="page-notfound-left text-center bg-gray">
                                    <div class="constrot-strip"></div>
                                    <!-- Zmieniona ikona na kłódkę/bezpieczeństwo, pasującą do 403 -->
                                    <span class="fa fa-lock" style="font-size: 100px; color: var(--color-theme-primary); display:block; padding: 40px 0;"></span>
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