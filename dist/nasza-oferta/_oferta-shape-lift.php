<?php

/**
 * MAGIC SALON - Oferta: Stylizacja Rzęs (oferta-stylizacja-rzes.php)
 * Wersja: 2.3 - Zoptymalizowane treści SEO dla usługi
 */

// Załaduj konfigurację
require_once __DIR__ . DIRECTORY_SEPARATOR . 'config.php';

// Konfiguracja meta tagów dla strony Stylizacja Rzęs
$meta = [
    'title' => 'Przedłużanie i Zagęszczanie Rzęs – Stylizacja Oka | MAGIC SALON',
    'description' => 'Perfekcyjna stylizacja rzęs w Dobrzykowicach. Metody 1:1, objętościowe 2D-4D. Podkreśl swoje spojrzenie i zapomnij o tuszu. Umów wizytę w Magic Salon!',
    'keywords' => 'przedłużanie rzęs dobrzykowice, zagęszczanie rzęs wrocław, rzęsy 1:1, metody objętościowe rzęsy, stylistka rzęs czernica, rzęsy objętościowe, magic salon rzęsy',
    // Canonical URL dla tej konkretnej usługi
    'canonical' => BASE_URL . '/oferta-stylizacja-rzes.php',
    'robots' => 'index, follow, max-image-preview:large',
    'og' => [
        'type' => 'website',
        'title' => 'Przedłużanie Rzęs – Spojrzenie Pełne Blasku',
        'description' => 'Marzysz o długich i gęstych rzęsach? Wybierz profesjonalną stylizację w Magic Salon. Indywidualny dobór metody i spektakularny efekt.',
        'url' => BASE_URL . '/oferta-stylizacja-rzes.php',
        'image' => BASE_URL . '/images/oferta-details/przedluzanieizageszczanierzes.jpg', // Zdjęcie konkretnej usługi
    ],
    'twitter' => [
        'card' => 'summary_large_image',
        'title' => 'Stylizacja Rzęs w MAGIC SALON',
        'description' => 'Przedłużanie i zagęszczanie rzęs. Metody 1:1 oraz objętościowe.',
    ],
    'schema' => [
        'enabled' => true,
        'type' => 'Service',
        'name' => 'Przedłużanie i Zagęszczanie Rzęs',
        'description' => 'Profesjonalny zabieg stylizacji rzęs polegający na doklejaniu rzęs syntetycznych do naturalnych metodami 1:1 lub objętościowymi.',
        'provider' => [
            '@type' => 'BeautySalon',
            'name' => 'MAGIC SALON',
            'address' => [
                'streetAddress' => 'ul. Borówkowa 13',
                'postalCode' => '55-002',
                'addressLocality' => 'Dobrzykowice',
                'addressCountry' => 'PL'
            ]
        ],
        'areaServed' => [
            '@type' => 'City',
            'name' => 'Dobrzykowice'
        ],
        'hasOfferCatalog' => [
            '@type' => 'OfferCatalog',
            'name' => 'Stylizacja Rzęs',
            'itemListElement' => [
                [
                    '@type' => 'Offer',
                    'itemOffered' => [
                        '@type' => 'Service',
                        'name' => 'Przedłużanie Rzęs Metoda 1:1'
                    ]
                ],
                [
                    '@type' => 'Offer',
                    'itemOffered' => [
                        '@type' => 'Service',
                        'name' => 'Przedłużanie Rzęs Metody Objętościowe (2D-8D)'
                    ]
                ],
                [
                    '@type' => 'Offer',
                    'itemOffered' => [
                        '@type' => 'Service',
                        'name' => 'Uzupełnianie Rzęs'
                    ]
                ]
            ]
        ]
    ]
];

// Załaduj head partial
include 'partials/head.php'; 
?>

<body id="bg">	

    <div class="page-wraper">  
      	
        <!-- HEADER START -->
        <!-- Header -->
        <?php include 'partials/header.php'; ?>
        <!-- HEADER END -->
        
        <!-- CONTENT START -->
        <div class="page-content  bg-white">
        
        <?php
            // Konfiguracja dynamicznego banera i breadcrumbs dla usługi
            $banner_img = 'images/banner/gallery-banner.jpg'; 
            $page_title = 'Stylizacja Rzęs';
            // Unikalny opis wprowadzający do konkretnej usługi
            $page_desc = 'Oczy są zwierciadłem duszy, a rzęsy ich najpiękniejszą oprawą. W Magic Salon tworzymy spojrzenia, które hipnotyzują. Nasza usługa przedłużania i zagęszczania rzęs to nie tylko zabieg kosmetyczny, to sztuka dopasowania stylizacji do Twojej urody i stylu życia. Niezależnie od tego, czy pragniesz naturalnego efektu "mascara look", czy spektakularnej objętości na wielkie wyjście – gwarantujemy precyzję, trwałość i bezpieczeństwo aplikacji.';
            $breadcrumbs = [
                [
                    'label' => 'Strona Główna',
                    'url' => 'index.php',
                    'icon' => 'fa fa-home'
                ],
                [
                    'label' => 'Oferta', // Powrót do ogólnej oferty
                    'url' => 'oferta.php',
                    'icon' => 'fa fa-list'
                ],
                [
                    'label' => 'Przedłużanie Rzęs', // Element aktywny
                    'url' => '', 
                    'icon' => ''
                ]
            ];
            
            // Załadowanie dedykowanego partiala
            include 'partials/breadcrumbs.php';
            ?>

            <!--====== Start Main Content ======-->
            
            <!--====== End Main Content ======-->

            <!-- INSTAGRAM SECTION START -->
            <div class="section-full p-t50 p-b10 overlay-wraper site-bg-primary bg-repeat" style="background-image:url(images/background/bg-7.png);">
                <div class="container">
                    <div class="section-head text-center">
                        <h2 style="color: #fff;"><span class="site-text-primary" style="color: #fff;">Nasz </span> Instagram</h2>
                        <p style="color: #fff;">Najświeższe nowinki z naszego salonu będą dla Państwa dostepne w naszych social mediach na profilu Instagramowym. Koniecznie obserwuj nasze ruchy w social mediach.</p>
                    </div>
                    
                    <!-- IMAGE CAROUSEL START -->
                    <div class="section-content">

                       <!-- LightWidget WIDGET --><script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="https://cdn.lightwidget.com/widgets/1b3ffdfb097a529b9970baf400113732.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>
                    </div>
                    <!-- IMAGE CAROUSEL START -->
                </div>
            </div>
            <!-- OUR INSTAGRAM SLIDER END -->
            
        <!-- CONTENT END -->
        </div>
        <!-- CONTENT END -->
        
        <!-- Footer -->
        <?php include 'partials/footer.php'; ?>