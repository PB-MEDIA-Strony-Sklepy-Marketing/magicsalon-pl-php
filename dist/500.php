<?php

/**
 * MAGIC SALON - Error 500 (500.php)
 * Wersja: 2.3 - Strona błędu wewnętrznego serwera
 */

// Załaduj konfigurację
require_once __DIR__ . DIRECTORY_SEPARATOR . 'config.php';

// Konfiguracja meta tagów dla strony błędu 500
$meta = [
    'title' => 'Błąd 500 – Wewnętrzny Błąd Serwera | MAGIC SALON Dobrzykowice',
    'description' => 'Przepraszamy, wystąpił niespodziewany błąd techniczny po naszej stronie. Nasz zespół już pracuje nad rozwiązaniem problemu. Spróbuj odświeżyć stronę za chwilę.',
    'keywords' => 'błąd 500, internal server error, awaria strony, magic salon błąd techniczny',
    'canonical' => BASE_URL . '/500.php',
    'robots' => 'noindex, follow', // Strony błędów technicznych nie powinny być indeksowane
    'og' => [
        'type' => 'website',
        'title' => 'Chwilowa Przerwa Techniczna – MAGIC SALON',
        'description' => 'Nawet najlepsze technologie czasem potrzebują chwili wytchnienia. Pracujemy nad przywróceniem pełnej sprawności serwisu.',
        'url' => BASE_URL . '/500.php',
        'image' => BASE_URL . '/images/logo-7.png',
    ],
    'twitter' => [
        'card' => 'summary',
        'title' => 'Błąd 500 – Pracujemy nad tym',
        'description' => 'Wystąpił błąd serwera. Prosimy o chwilę cierpliwości.',
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
            
            $page_title = 'Mała usterka techniczna';
            
            // Opis łagodzący sytuację, nawiązujący do branży beauty
            $page_desc = 'Nawet w świecie piękna zdarzają się techniczne niespodzianki. Nasz serwer potrzebuje chwili regeneracji, ale specjaliści już nad nim pracują. Przepraszamy za niedogodności i prosimy o chwilę cierpliwości.';
            
            $breadcrumbs = [
                [
                    'label' => 'Strona Główna',
                    'url' => 'index.php',
                    'icon' => 'fa fa-home'
                ],
                [
                    'label' => 'Error 500',
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
                                        <strong>5<i class="fa fa-cogs site-text-primary"></i>0</strong>
                                        <span>Wewnętrzny błąd serwera</span>
                                        <p class="m-b20">Coś poszło nie tak po naszej stronie. Prosimy spróbuj odświeżyć stronę za kilka minut lub skontaktuj się z nami telefonicznie, jeśli chcesz pilnie umówić wizytę.</p>
                                        <a href="index.php" class="site-button">WRÓĆ NA STRONĘ GŁÓWNĄ <i class="fa fa-angle-double-right"></i></a>
                                    </form>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="page-notfound-left text-center bg-gray">
                                    <div class="constrot-strip"></div>
                                    <!-- Ikona trybików symbolizująca prace techniczne -->
                                    <span class="fa fa-cogs" style="font-size: 100px; color: var(--color-theme-primary); display:block; padding: 40px 0;"></span>
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