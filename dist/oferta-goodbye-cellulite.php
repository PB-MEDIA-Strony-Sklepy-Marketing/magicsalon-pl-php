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
        <?php include 'partials/header.php'; ?>
        <!-- HEADER END -->

        <!-- CONTENT START -->
        <div class="page-content bg-white">

        <?php
            // Konfiguracja dynamicznego banera i breadcrumbs
            $banner_img = 'images/banner/gallery-banner.jpg';
            $page_title = 'Goodbye Cellulite';
            $page_desc = 'Pożegnaj cellulit na zawsze z autorskim zabiegiem Goodbye Cellulite w Magic Salon! Ta zaawansowana terapia łączy najskuteczniejsze techniki modelowania ciała, redukując widoczność cellulitu, wygładzając skórę i poprawiając jej elastyczność. Dzięki połączeniu ultradźwięków, masażu próżniowego i lipodrenażu uzyskasz spektakularne efekty już po pierwszym zabiegu. Odkryj gładką, jędrną skórę i ciesz się pewnym siebie ciałem!';
            $breadcrumbs = [
                [
                    'label' => 'Strona Główna',
                    'url' => 'index.php',
                    'icon' => 'fa fa-home'
                ],
                [
                    'label' => 'Oferta',
                    'url' => 'oferta.php',
                    'icon' => 'fa fa-list'
                ],
                [
                    'label' => 'Goodbye Cellulite',
                    'url' => '',
                    'icon' => ''
                ]
            ];

            include 'partials/breadcrumbs.php';
        ?>

        <!--====== Start Main Content ======-->

        <!-- Hero Section with Parallax -->
        <div class="section-full p-t80 p-b50 bg-cover bg-center" style="background: linear-gradient(135deg, rgba(109, 53, 111, 0.95) 0%, rgba(159, 91, 164, 0.9) 100%), url('images/background/cellulite-hero.jpg'); background-attachment: fixed; background-size: cover;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12" data-aos="fade-right" data-aos-duration="1000">
                        <div class="text-white">
                            <span class="badge bg-light text-dark px-4 py-2 mb-3" style="font-size: 14px; border-radius: 50px;">
                                <i class="fa fa-sparkles me-2"></i>Skuteczność potwierdzona klinicznie
                            </span>
                            <h1 class="display-4 fw-bold mb-4" style="line-height: 1.2;">
                                Goodbye Cellulite
                            </h1>
                            <p class="lead mb-4" style="font-size: 20px; opacity: 0.95;">
                                Profesjonalne zabiegi antycellulitowe z widocznymi efektami już po 3-4 sesjach.
                                Redukcja obwodów 2-7 cm, wygładzenie skóry i poprawa jędrności.
                            </p>
                            <div class="d-flex flex-wrap gap-3 mb-4">
                                <div class="d-flex align-items-center bg-white bg-opacity-10 px-4 py-3 rounded" style="backdrop-filter: blur(10px);">
                                    <i class="fa fa-check-circle fa-2x me-3" style="color: #D7A54F;"></i>
                                    <div>
                                        <div class="fw-bold">80-90%</div>
                                        <small>kobiet ma cellulit</small>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center bg-white bg-opacity-10 px-4 py-3 rounded" style="backdrop-filter: blur(10px);">
                                    <i class="fa fa-clock fa-2x me-3" style="color: #D7A54F;"></i>
                                    <div>
                                        <div class="fw-bold">10-15 sesji</div>
                                        <small>seria zabiegów</small>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center bg-white bg-opacity-10 px-4 py-3 rounded" style="backdrop-filter: blur(10px);">
                                    <i class="fa fa-star fa-2x me-3" style="color: #D7A54F;"></i>
                                    <div>
                                        <div class="fw-bold">180 zł</div>
                                        <small>za zabieg</small>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex gap-3">
                                <a href="https://booksy.magicsalon.pl" target="_blank" class="btn btn-lg px-5 py-3" style="background: #D7A54F; color: #fff; border: none; border-radius: 50px; font-weight: 600; transition: all 0.3s;" onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 10px 30px rgba(215, 165, 79, 0.4)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none';">
                                    <i class="fa fa-calendar-check me-2"></i>Umów wizytę
                                </a>
                                <a href="tel:+48883481581" class="btn btn-lg btn-outline-light px-5 py-3" style="border: 2px solid #fff; border-radius: 50px; font-weight: 600; transition: all 0.3s;" onmouseover="this.style.background='#fff'; this.style.color='#6D356F';" onmouseout="this.style.background='transparent'; this.style.color='#fff';">
                                    <i class="fa fa-phone me-2"></i>Zadzwoń
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 text-center" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                        <div class="position-relative d-inline-block">
                            <img src="images/oferta/goodbye-cellulite-main.jpg" alt="Zabieg Goodbye Cellulite" class="img-fluid rounded shadow-lg" style="border-radius: 20px !important; border: 5px solid rgba(255, 255, 255, 0.2);">
                            <div class="position-absolute" style="top: -20px; right: -20px; background: #D7A54F; color: #fff; padding: 20px; border-radius: 50%; width: 100px; height: 100px; display: flex; flex-direction: column; align-items: center; justify-content: center; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);">
                                <div style="font-size: 24px; font-weight: 700;">-50%</div>
                                <div style="font-size: 11px;">cellulitu</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Czym jest cellulit -->
        <div class="section-full p-t80 p-b50 bg-white">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-12 text-center" data-aos="fade-up">
                        <span class="badge px-4 py-2 mb-3" style="background: rgba(109, 53, 111, 0.1); color: #6D356F; font-size: 14px; border-radius: 50px;">
                            <i class="fa fa-info-circle me-2"></i>Wiedza ekspercka
                        </span>
                        <h2 class="mb-4" style="color: #6D356F; font-weight: 700;">
                            Czym jest cellulit i dlaczego powstaje?
                        </h2>
                        <p class="lead" style="color: #444; line-height: 1.8;">
                            Cellulit (lipodystrofia ginoidalna) to zmiana topograficzna skóry charakteryzująca się
                            dołkami i nierównościami tworzącymi efekt "skórki pomarańczowej". Dotyka <strong>80-90% kobiet</strong>
                            po okresie dojrzewania.
                        </p>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                        <div class="card h-100 border-0 shadow-sm" style="border-radius: 20px; transition: all 0.3s;" onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 15px 40px rgba(109, 53, 111, 0.15)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 5px 15px rgba(0, 0, 0, 0.08)';">
                            <div class="card-body p-4 text-center">
                                <div class="mb-4" style="width: 80px; height: 80px; background: linear-gradient(135deg, #6D356F, #9F5BA4); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                                    <i class="fa fa-dna fa-2x text-white"></i>
                                </div>
                                <h4 class="mb-3" style="color: #6D356F; font-weight: 600;">Anatomia cellulitu</h4>
                                <p style="color: #666; line-height: 1.8;">
                                    U kobiet septa (przegrody łącznotkankowe) ułożone są <strong>pionowo</strong> do powierzchni skóry,
                                    przez co nie utrzymują wypychających zrazików tłuszczowych.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card h-100 border-0 shadow-sm" style="border-radius: 20px; transition: all 0.3s;" onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 15px 40px rgba(109, 53, 111, 0.15)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 5px 15px rgba(0, 0, 0, 0.08)';">
                            <div class="card-body p-4 text-center">
                                <div class="mb-4" style="width: 80px; height: 80px; background: linear-gradient(135deg, #D7A54F, #E8C068); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                                    <i class="fa fa-venus fa-2x text-white"></i>
                                </div>
                                <h4 class="mb-3" style="color: #6D356F; font-weight: 600;">Rola estrogenów</h4>
                                <p style="color: #666; line-height: 1.8;">
                                    Hormony kobiece stymulują produkcję kolagenazy, sprzyjają lipogenezie
                                    i powodują retencję płynów, co nasila efekt cellulitu.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="card h-100 border-0 shadow-sm" style="border-radius: 20px; transition: all 0.3s;" onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 15px 40px rgba(109, 53, 111, 0.15)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 5px 15px rgba(0, 0, 0, 0.08)';">
                            <div class="card-body p-4 text-center">
                                <div class="mb-4" style="width: 80px; height: 80px; background: linear-gradient(135deg, #6D356F, #9F5BA4); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                                    <i class="fa fa-chart-line fa-2x text-white"></i>
                                </div>
                                <h4 class="mb-3" style="color: #6D356F; font-weight: 600;">Stopnie zaawansowania</h4>
                                <p style="color: #666; line-height: 1.8;">
                                    Cellulit klasyfikujemy w skali 0-III według Nürnberger-Müller.
                                    Nasze zabiegi skutecznie redukują cellulit I-III stopnia.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Na czym polega zabieg -->
        <div class="section-full p-t80 p-b80" style="background: linear-gradient(180deg, #f8f9fa 0%, #fff 100%);">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-12 text-center" data-aos="fade-up">
                        <span class="badge px-4 py-2 mb-3" style="background: rgba(215, 165, 79, 0.1); color: #D7A54F; font-size: 14px; border-radius: 50px;">
                            <i class="fa fa-cog me-2"></i>Technologia
                        </span>
                        <h2 class="mb-4" style="color: #6D356F; font-weight: 700;">
                            Na czym polega zabieg Goodbye Cellulite?
                        </h2>
                        <p class="lead" style="color: #444; line-height: 1.8;">
                            Zabieg łączy sprawdzone technologie antycellulitowe, które działają na trzech poziomach:
                            <strong>redukcja tkanki tłuszczowej</strong>, <strong>remodelowanie kolagenu</strong>
                            oraz <strong>drenaż limfatyczny</strong>.
                        </p>
                    </div>
                </div>

                <div class="row align-items-center mb-5">
                    <div class="col-lg-6 mb-4" data-aos="fade-right">
                        <img src="images/oferta/cellulite-treatment.jpg" alt="Przebieg zabiegu" class="img-fluid rounded shadow" style="border-radius: 20px !important;">
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <h3 class="mb-4" style="color: #6D356F; font-weight: 600;">Wykorzystywane technologie</h3>

                        <div class="mb-4 p-4" style="background: #fff; border-left: 4px solid #6D356F; border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);">
                            <div class="d-flex align-items-start">
                                <div class="me-3">
                                    <i class="fa fa-hand-holding-medical fa-2x" style="color: #D7A54F;"></i>
                                </div>
                                <div>
                                    <h5 style="color: #6D356F; font-weight: 600;">Masaż próżniowy (vacuum)</h5>
                                    <p class="mb-0" style="color: #666;">Podciśnienie rozrywa zesztywniałe włókna kolagenowe i poprawia mikrokrążenie.</p>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4 p-4" style="background: #fff; border-left: 4px solid #D7A54F; border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);">
                            <div class="d-flex align-items-start">
                                <div class="me-3">
                                    <i class="fa fa-fire fa-2x" style="color: #6D356F;"></i>
                                </div>
                                <div>
                                    <h5 style="color: #6D356F; font-weight: 600;">Fale radiowe RF</h5>
                                    <p class="mb-0" style="color: #666;">Podgrzewanie tkanek do 40-60°C stymuluje produkcję kolagenu i elastyny.</p>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4 p-4" style="background: #fff; border-left: 4px solid #6D356F; border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);">
                            <div class="d-flex align-items-start">
                                <div class="me-3">
                                    <i class="fa fa-water fa-2x" style="color: #D7A54F;"></i>
                                </div>
                                <div>
                                    <h5 style="color: #6D356F; font-weight: 600;">Kawitacja ultradźwiękowa</h5>
                                    <p class="mb-0" style="color: #666;">Ultradźwięki 25-40 kHz rozbijają komórki tłuszczowe i redukują adipocyty o 23-26%.</p>
                                </div>
                            </div>
                        </div>

                        <div class="p-4" style="background: #fff; border-left: 4px solid #D7A54F; border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);">
                            <div class="d-flex align-items-start">
                                <div class="me-3">
                                    <i class="fa fa-spa fa-2x" style="color: #6D356F;"></i>
                                </div>
                                <div>
                                    <h5 style="color: #6D356F; font-weight: 600;">Endermologia LPG</h5>
                                    <p class="mb-0" style="color: #666;">Masaż rolkami + vacuum. 145 badań klinicznych zatwierdzonych przez FDA.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Procedura zabiegu -->
                <div class="row mt-5" data-aos="fade-up">
                    <div class="col-12">
                        <div class="p-5 rounded shadow" style="background: linear-gradient(135deg, rgba(109, 53, 111, 0.05) 0%, rgba(215, 165, 79, 0.05) 100%); border-radius: 20px !important;">
                            <h3 class="mb-5 text-center" style="color: #6D356F; font-weight: 600;">Procedura zabiegu krok po kroku</h3>

                            <div class="row g-4">
                                <div class="col-md-3">
                                    <div class="text-center h-100 p-4" style="background: #fff; border-radius: 15px;">
                                        <div class="mb-3" style="width: 60px; height: 60px; background: #6D356F; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; color: #fff; font-size: 24px; font-weight: 700;">1</div>
                                        <h5 style="color: #6D356F; font-weight: 600;">Konsultacja</h5>
                                        <p class="small mb-2" style="color: #666;">5-10 min</p>
                                        <p class="small mb-0" style="color: #666;">Wywiad medyczny, ocena stopnia cellulitu</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="text-center h-100 p-4" style="background: #fff; border-radius: 15px;">
                                        <div class="mb-3" style="width: 60px; height: 60px; background: #D7A54F; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; color: #fff; font-size: 24px; font-weight: 700;">2</div>
                                        <h5 style="color: #6D356F; font-weight: 600;">Przygotowanie</h5>
                                        <p class="small mb-2" style="color: #666;">5-10 min</p>
                                        <p class="small mb-0" style="color: #666;">Oczyszczenie skóry, założenie stroju zabiegowego</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="text-center h-100 p-4" style="background: #fff; border-radius: 15px;">
                                        <div class="mb-3" style="width: 60px; height: 60px; background: #6D356F; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; color: #fff; font-size: 24px; font-weight: 700;">3</div>
                                        <h5 style="color: #6D356F; font-weight: 600;">Zabieg główny</h5>
                                        <p class="small mb-2" style="color: #666;">20-50 min</p>
                                        <p class="small mb-0" style="color: #666;">Aplikacja głowicą urządzenia zgodnie z kierunkiem limfy</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="text-center h-100 p-4" style="background: #fff; border-radius: 15px;">
                                        <div class="mb-3" style="width: 60px; height: 60px; background: #D7A54F; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; color: #fff; font-size: 24px; font-weight: 700;">4</div>
                                        <h5 style="color: #6D356F; font-weight: 600;">Zakończenie</h5>
                                        <p class="small mb-2" style="color: #666;">5-10 min</p>
                                        <p class="small mb-0" style="color: #666;">Aplikacja kremu, zalecenia pozabiegowe</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Efekty i korzyści -->
        <div class="section-full p-t80 p-b80 bg-white">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-12 text-center" data-aos="fade-up">
                        <span class="badge px-4 py-2 mb-3" style="background: rgba(109, 53, 111, 0.1); color: #6D356F; font-size: 14px; border-radius: 50px;">
                            <i class="fa fa-award me-2"></i>Potwierdzona skuteczność
                        </span>
                        <h2 class="mb-4" style="color: #6D356F; font-weight: 700;">
                            Efekty i korzyści zabiegu
                        </h2>
                        <p class="lead" style="color: #444; line-height: 1.8;">
                            Nasze zabiegi przynoszą <strong>widoczne i długotrwałe rezultaty</strong>
                            potwierdzone badaniami klinicznymi i zadowoleniem setek klientek.
                        </p>
                    </div>
                </div>

                <!-- Statystyki -->
                <div class="row g-4 mb-5">
                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="0">
                        <div class="text-center p-4 h-100" style="background: linear-gradient(135deg, #6D356F, #9F5BA4); border-radius: 20px; color: #fff;">
                            <i class="fa fa-ruler-combined fa-3x mb-3" style="color: #D7A54F;"></i>
                            <div style="font-size: 48px; font-weight: 700; line-height: 1;">2-7 cm</div>
                            <p class="mb-0 mt-2" style="opacity: 0.9;">redukcja obwodów</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                        <div class="text-center p-4 h-100" style="background: linear-gradient(135deg, #D7A54F, #E8C068); border-radius: 20px; color: #fff;">
                            <i class="fa fa-percentage fa-3x mb-3"></i>
                            <div style="font-size: 48px; font-weight: 700; line-height: 1;">50%</div>
                            <p class="mb-0 mt-2" style="opacity: 0.9;">poprawa mikrokrążenia</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="text-center p-4 h-100" style="background: linear-gradient(135deg, #6D356F, #9F5BA4); border-radius: 20px; color: #fff;">
                            <i class="fa fa-arrow-up fa-3x mb-3" style="color: #D7A54F;"></i>
                            <div style="font-size: 48px; font-weight: 700; line-height: 1;">9-15%</div>
                            <p class="mb-0 mt-2" style="opacity: 0.9;">wzrost ujędrnienia skóry</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                        <div class="text-center p-4 h-100" style="background: linear-gradient(135deg, #D7A54F, #E8C068); border-radius: 20px; color: #fff;">
                            <i class="fa fa-clock fa-3x mb-3"></i>
                            <div style="font-size: 48px; font-weight: 700; line-height: 1;">3-4</div>
                            <p class="mb-0 mt-2" style="opacity: 0.9;">pierwsze efekty (zabiegi)</p>
                        </div>
                    </div>
                </div>

                <!-- Harmonogram efektów -->
                <div class="row" data-aos="fade-up">
                    <div class="col-12">
                        <div class="p-5 rounded shadow-sm" style="background: linear-gradient(180deg, #f8f9fa 0%, #fff 100%); border-radius: 20px !important;">
                            <h3 class="mb-4 text-center" style="color: #6D356F; font-weight: 600;">Harmonogram widocznych efektów</h3>

                            <div class="timeline position-relative">
                                <div class="timeline-item mb-4 d-flex align-items-start">
                                    <div class="timeline-marker me-4" style="min-width: 60px; height: 60px; background: #6D356F; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; font-weight: 700; box-shadow: 0 5px 15px rgba(109, 53, 111, 0.3);">1-2</div>
                                    <div class="p-4 flex-grow-1" style="background: #fff; border-radius: 15px; border-left: 4px solid #6D356F;">
                                        <h5 style="color: #6D356F; font-weight: 600;">Po 1-2 zabiegach</h5>
                                        <p class="mb-0" style="color: #666;">Uczucie lekkości, poprawa krążenia, redukcja obrzęków</p>
                                    </div>
                                </div>

                                <div class="timeline-item mb-4 d-flex align-items-start">
                                    <div class="timeline-marker me-4" style="min-width: 60px; height: 60px; background: #D7A54F; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; font-weight: 700; box-shadow: 0 5px 15px rgba(215, 165, 79, 0.3);">3-4</div>
                                    <div class="p-4 flex-grow-1" style="background: #fff; border-radius: 15px; border-left: 4px solid #D7A54F;">
                                        <h5 style="color: #6D356F; font-weight: 600;">Po 3-4 zabiegach</h5>
                                        <p class="mb-0" style="color: #666;"><strong>Pierwsze widoczne efekty wygładzenia</strong> – redukcja "skórki pomarańczowej"</p>
                                    </div>
                                </div>

                                <div class="timeline-item mb-4 d-flex align-items-start">
                                    <div class="timeline-marker me-4" style="min-width: 60px; height: 60px; background: #6D356F; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; font-weight: 700; box-shadow: 0 5px 15px rgba(109, 53, 111, 0.3);">6-8</div>
                                    <div class="p-4 flex-grow-1" style="background: #fff; border-radius: 15px; border-left: 4px solid #6D356F;">
                                        <h5 style="color: #6D356F; font-weight: 600;">Po 6-8 zabiegach</h5>
                                        <p class="mb-0" style="color: #666;">Znacząca redukcja cellulitu i obwodów, wyraźna poprawa jędrności</p>
                                    </div>
                                </div>

                                <div class="timeline-item d-flex align-items-start">
                                    <div class="timeline-marker me-4" style="min-width: 60px; height: 60px; background: #D7A54F; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; font-weight: 700; box-shadow: 0 5px 15px rgba(215, 165, 79, 0.3);">10-15</div>
                                    <div class="p-4 flex-grow-1" style="background: #fff; border-radius: 15px; border-left: 4px solid #D7A54F;">
                                        <h5 style="color: #6D356F; font-weight: 600;">Po 10-15 zabiegach</h5>
                                        <p class="mb-0" style="color: #666;"><strong>Pełne efekty</strong> – optymalne rezultaty, gładka i jędrna skóra</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cennik i pakiety -->
        <div class="section-full p-t80 p-b80" style="background: linear-gradient(135deg, rgba(109, 53, 111, 0.03) 0%, rgba(215, 165, 79, 0.03) 100%);">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-12 text-center" data-aos="fade-up">
                        <span class="badge px-4 py-2 mb-3" style="background: rgba(215, 165, 79, 0.1); color: #D7A54F; font-size: 14px; border-radius: 50px;">
                            <i class="fa fa-tag me-2"></i>Konkurencyjne ceny
                        </span>
                        <h2 class="mb-4" style="color: #6D356F; font-weight: 700;">
                            Cennik zabiegów Goodbye Cellulite
                        </h2>
                        <p class="lead" style="color: #444; line-height: 1.8;">
                            Oferujemy <strong>atrakcyjne pakiety</strong> zabiegowe z rabatem.
                            Jakość profesjonalnych gabinetów miejskich w cenie podmiejskiej.
                        </p>
                    </div>
                </div>

                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                        <div class="card h-100 border-0 shadow" style="border-radius: 20px; transition: all 0.3s;" onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 50px rgba(109, 53, 111, 0.2)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 30px rgba(0, 0, 0, 0.1)';">
                            <div class="card-body p-5 text-center">
                                <div class="mb-4">
                                    <i class="fa fa-star fa-3x" style="color: #D7A54F;"></i>
                                </div>
                                <h4 class="mb-3" style="color: #6D356F; font-weight: 600;">Zabieg pojedynczy</h4>
                                <div class="mb-4">
                                    <div style="font-size: 48px; font-weight: 700; color: #6D356F;">180 zł</div>
                                    <p class="small text-muted mb-0">za sesję 30-60 min</p>
                                </div>
                                <ul class="list-unstyled mb-4 text-start">
                                    <li class="mb-2"><i class="fa fa-check text-success me-2"></i>Indywidualna konsultacja</li>
                                    <li class="mb-2"><i class="fa fa-check text-success me-2"></i>Profesjonalny sprzęt</li>
                                    <li class="mb-2"><i class="fa fa-check text-success me-2"></i>Zalecenia pozabiegowe</li>
                                    <li class="mb-2"><i class="fa fa-check text-success me-2"></i>Możliwość testowa</li>
                                </ul>
                                <a href="https://booksy.magicsalon.pl" target="_blank" class="btn btn-outline-primary w-100" style="border: 2px solid #6D356F; color: #6D356F; border-radius: 50px; padding: 12px; font-weight: 600; transition: all 0.3s;" onmouseover="this.style.background='#6D356F'; this.style.color='#fff';" onmouseout="this.style.background='transparent'; this.style.color='#6D356F';">
                                    Umów wizytę
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="position-relative">
                            <div class="position-absolute" style="top: -15px; right: 20px; background: #D7A54F; color: #fff; padding: 8px 20px; border-radius: 50px; font-weight: 600; box-shadow: 0 5px 15px rgba(215, 165, 79, 0.4); z-index: 1;">
                                POLECAMY
                            </div>
                            <div class="card h-100 border-0 shadow-lg" style="border-radius: 20px; border: 3px solid #D7A54F; transition: all 0.3s;" onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 50px rgba(215, 165, 79, 0.3)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 40px rgba(215, 165, 79, 0.2)';">
                                <div class="card-body p-5 text-center">
                                    <div class="mb-4">
                                        <i class="fa fa-crown fa-3x" style="color: #D7A54F;"></i>
                                    </div>
                                    <h4 class="mb-3" style="color: #6D356F; font-weight: 600;">Pakiet 10 zabiegów</h4>
                                    <div class="mb-4">
                                        <div class="text-decoration-line-through text-muted mb-1">1800 zł</div>
                                        <div style="font-size: 48px; font-weight: 700; color: #D7A54F;">1600 zł</div>
                                        <p class="small text-muted mb-0">160 zł za sesję</p>
                                        <span class="badge mt-2" style="background: rgba(215, 165, 79, 0.1); color: #D7A54F;">Oszczędzasz 200 zł</span>
                                    </div>
                                    <ul class="list-unstyled mb-4 text-start">
                                        <li class="mb-2"><i class="fa fa-check text-success me-2"></i>Kompleksowa seria</li>
                                        <li class="mb-2"><i class="fa fa-check text-success me-2"></i>Widoczne efekty</li>
                                        <li class="mb-2"><i class="fa fa-check text-success me-2"></i>Indywidualny plan</li>
                                        <li class="mb-2"><i class="fa fa-check text-success me-2"></i>Najlepsza wartość</li>
                                    </ul>
                                    <a href="https://booksy.magicsalon.pl" target="_blank" class="btn w-100" style="background: #D7A54F; color: #fff; border: none; border-radius: 50px; padding: 12px; font-weight: 600; transition: all 0.3s;" onmouseover="this.style.background='#E8C068'; this.style.transform='scale(1.05)';" onmouseout="this.style.background='#D7A54F'; this.style.transform='scale(1)';">
                                        Kup pakiet
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="card h-100 border-0 shadow" style="border-radius: 20px; transition: all 0.3s;" onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 50px rgba(109, 53, 111, 0.2)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 30px rgba(0, 0, 0, 0.1)';">
                            <div class="card-body p-5 text-center">
                                <div class="mb-4">
                                    <i class="fa fa-gem fa-3x" style="color: #6D356F;"></i>
                                </div>
                                <h4 class="mb-3" style="color: #6D356F; font-weight: 600;">Pakiet 15 zabiegów</h4>
                                <div class="mb-4">
                                    <div class="text-decoration-line-through text-muted mb-1">2700 zł</div>
                                    <div style="font-size: 48px; font-weight: 700; color: #6D356F;">2250 zł</div>
                                    <p class="small text-muted mb-0">150 zł za sesję</p>
                                    <span class="badge mt-2" style="background: rgba(109, 53, 111, 0.1); color: #6D356F;">Oszczędzasz 450 zł</span>
                                </div>
                                <ul class="list-unstyled mb-4 text-start">
                                    <li class="mb-2"><i class="fa fa-check text-success me-2"></i>Pełna terapia</li>
                                    <li class="mb-2"><i class="fa fa-check text-success me-2"></i>Maksymalne efekty</li>
                                    <li class="mb-2"><i class="fa fa-check text-success me-2"></i>Opieka specjalisty</li>
                                    <li class="mb-2"><i class="fa fa-check text-success me-2"></i>Największe oszczędności</li>
                                </ul>
                                <a href="https://booksy.magicsalon.pl" target="_blank" class="btn btn-outline-primary w-100" style="border: 2px solid #6D356F; color: #6D356F; border-radius: 50px; padding: 12px; font-weight: 600; transition: all 0.3s;" onmouseover="this.style.background='#6D356F'; this.style.color='#fff';" onmouseout="this.style.background='transparent'; this.style.color='#6D356F';">
                                    Umów wizytę
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- FAQ -->
        <div class="section-full p-t80 p-b80 bg-white">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-12 text-center" data-aos="fade-up">
                        <span class="badge px-4 py-2 mb-3" style="background: rgba(109, 53, 111, 0.1); color: #6D356F; font-size: 14px; border-radius: 50px;">
                            <i class="fa fa-question-circle me-2"></i>Najczęstsze pytania
                        </span>
                        <h2 class="mb-4" style="color: #6D356F; font-weight: 700;">
                            FAQ – odpowiadamy na Twoje pytania
                        </h2>
                        <p class="lead" style="color: #444; line-height: 1.8;">
                            Zebraliśmy najczęściej zadawane pytania dotyczące zabiegów antycellulitowych.
                        </p>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="accordion" id="faqAccordion">

                            <div class="accordion-item mb-3 border-0 shadow-sm" style="border-radius: 15px; overflow: hidden;" data-aos="fade-up" data-aos-delay="0">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" style="background: #fff; color: #6D356F; font-weight: 600; padding: 20px;">
                                        <i class="fa fa-tag me-3" style="color: #D7A54F;"></i>
                                        Ile kosztuje zabieg na cellulit w Magic Salon?
                                    </button>
                                </h3>
                                <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body" style="padding: 20px; color: #666;">
                                        Zabieg Goodbye Cellulite kosztuje <strong>180 zł za sesję</strong>. Oferujemy także pakiety zabiegowe z rabatem: pakiet 10 zabiegów za 1600 zł (160 zł/sesja) oraz pakiet 15 zabiegów za 2250 zł (150 zł/sesja).
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item mb-3 border-0 shadow-sm" style="border-radius: 15px; overflow: hidden;" data-aos="fade-up" data-aos-delay="100">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" style="background: #fff; color: #6D356F; font-weight: 600; padding: 20px;">
                                        <i class="fa fa-calculator me-3" style="color: #D7A54F;"></i>
                                        Ile zabiegów na cellulit trzeba wykonać?
                                    </button>
                                </h3>
                                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body" style="padding: 20px; color: #666;">
                                        Zalecamy <strong>serię 10-15 zabiegów</strong> wykonywanych <strong>2 razy w tygodniu</strong>. Pierwsze widoczne efekty można zauważyć już po 3-4 sesjach, jednak pełne rezultaty osiągamy po zakończeniu całej serii.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item mb-3 border-0 shadow-sm" style="border-radius: 15px; overflow: hidden;" data-aos="fade-up" data-aos-delay="200">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" style="background: #fff; color: #6D356F; font-weight: 600; padding: 20px;">
                                        <i class="fa fa-heartbeat me-3" style="color: #D7A54F;"></i>
                                        Czy zabiegi na cellulit bolą?
                                    </button>
                                </h3>
                                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body" style="padding: 20px; color: #666;">
                                        <strong>Nie, zabiegi są bezbolesne!</strong> Większość klientek porównuje je do intensywnego, głębokiego masażu. Podczas zabiegu możesz odczuwać przyjemne ciepło oraz delikatne ssanie na skórze (vacuum), które jest całkowicie komfortowe.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item mb-3 border-0 shadow-sm" style="border-radius: 15px; overflow: hidden;" data-aos="fade-up" data-aos-delay="300">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" style="background: #fff; color: #6D356F; font-weight: 600; padding: 20px;">
                                        <i class="fa fa-clock me-3" style="color: #D7A54F;"></i>
                                        Jak długo utrzymują się efekty?
                                    </button>
                                </h3>
                                <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body" style="padding: 20px; color: #666;">
                                        Przy zdrowym stylu życia efekty utrzymują się <strong>kilka miesięcy do roku</strong>. Zalecamy zabiegi podtrzymujące <strong>1 raz w miesiącu</strong>, aby długotrwale cieszyć się gładką skórą. Ważne jest również odpowiednie nawodnienie, aktywność fizyczna i zbilansowana dieta.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item mb-3 border-0 shadow-sm" style="border-radius: 15px; overflow: hidden;" data-aos="fade-up" data-aos-delay="400">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" style="background: #fff; color: #6D356F; font-weight: 600; padding: 20px;">
                                        <i class="fa fa-baby me-3" style="color: #D7A54F;"></i>
                                        Czy można robić zabiegi w ciąży?
                                    </button>
                                </h3>
                                <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body" style="padding: 20px; color: #666;">
                                        <strong>Nie, ciąża jest bezwzględnym przeciwwskazaniem</strong> do wykonywania zabiegów antycellulitowych. Zabiegi te mogą stwarzać ryzyko dla płodu. Podobnie w okresie karmienia piersią – toksyny uwalniane podczas zabiegu mogą przenikać do mleka.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item mb-3 border-0 shadow-sm" style="border-radius: 15px; overflow: hidden;" data-aos="fade-up" data-aos-delay="500">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6" style="background: #fff; color: #6D356F; font-weight: 600; padding: 20px;">
                                        <i class="fa fa-chart-line me-3" style="color: #D7A54F;"></i>
                                        Po ilu zabiegach widać efekty?
                                    </button>
                                </h3>
                                <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body" style="padding: 20px; color: #666;">
                                        <strong>Pierwsze efekty widać już po 3-4 zabiegach</strong> – skóra staje się gładsza, poprawia się krążenie. Pełne rezultaty z maksymalną redukcją cellulitu i obwodów osiągamy po <strong>10-15 sesjach</strong>.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Dlaczego Magic Salon -->
        <div class="section-full p-t80 p-b80" style="background: linear-gradient(135deg, #6D356F 0%, #9F5BA4 100%);">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-12 text-center" data-aos="fade-up">
                        <span class="badge px-4 py-2 mb-3" style="background: rgba(255, 255, 255, 0.2); color: #fff; font-size: 14px; border-radius: 50px;">
                            <i class="fa fa-heart me-2"></i>Twój lokalny ekspert
                        </span>
                        <h2 class="mb-4 text-white" style="font-weight: 700;">
                            Dlaczego warto wybrać Magic Salon?
                        </h2>
                        <p class="lead text-white" style="opacity: 0.95; line-height: 1.8;">
                            Profesjonalne zabiegi bez konieczności jazdy do centrum Wrocławia.
                            Jakość miejska w cenie podmiejskiej.
                        </p>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="0">
                        <div class="text-center p-4 h-100" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border-radius: 20px; border: 1px solid rgba(255, 255, 255, 0.2);">
                            <i class="fa fa-map-marker-alt fa-3x mb-3" style="color: #D7A54F;"></i>
                            <h5 class="text-white mb-3">Lokalizacja</h5>
                            <p class="text-white mb-0" style="opacity: 0.9;">Jedyny profesjonalny gabinet w Dobrzykowicach – bez korków i stresu</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="text-center p-4 h-100" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border-radius: 20px; border: 1px solid rgba(255, 255, 255, 0.2);">
                            <i class="fa fa-user-md fa-3x mb-3" style="color: #D7A54F;"></i>
                            <h5 class="text-white mb-3">Doświadczenie</h5>
                            <p class="text-white mb-0" style="opacity: 0.9;">Certyfikowani specjaliści z wieloletnim doświadczeniem w beauty</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="text-center p-4 h-100" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border-radius: 20px; border: 1px solid rgba(255, 255, 255, 0.2);">
                            <i class="fa fa-star fa-3x mb-3" style="color: #D7A54F;"></i>
                            <h5 class="text-white mb-3">Jakość</h5>
                            <p class="text-white mb-0" style="opacity: 0.9;">Profesjonalny sprzęt i produkty najwyższej jakości</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="text-center p-4 h-100" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border-radius: 20px; border: 1px solid rgba(255, 255, 255, 0.2);">
                            <i class="fa fa-calendar-check fa-3x mb-3" style="color: #D7A54F;"></i>
                            <h5 class="text-white mb-3">Dostępność</h5>
                            <p class="text-white mb-0" style="opacity: 0.9;">Elastyczne terminy, łatwa rezerwacja przez Booksy</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Final -->
        <div class="section-full p-t80 p-b80 bg-white">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center" data-aos="zoom-in">
                        <div class="p-5 rounded shadow-lg" style="background: linear-gradient(135deg, rgba(109, 53, 111, 0.05) 0%, rgba(215, 165, 79, 0.05) 100%); border-radius: 30px !important;">
                            <i class="fa fa-sparkles fa-4x mb-4" style="color: #D7A54F;"></i>
                            <h2 class="mb-4" style="color: #6D356F; font-weight: 700;">
                                Gotowa pożegnać cellulit?
                            </h2>
                            <p class="lead mb-5" style="color: #444; line-height: 1.8;">
                                Umów się na <strong>bezpłatną konsultację</strong> i poznaj swój indywidualny plan terapii.
                                Zapraszamy do Magic Salon w Dobrzykowicach!
                            </p>
                            <div class="d-flex flex-wrap gap-3 justify-content-center">
                                <a href="https://booksy.magicsalon.pl" target="_blank" class="btn btn-lg px-5 py-3" style="background: #6D356F; color: #fff; border: none; border-radius: 50px; font-weight: 600; transition: all 0.3s;" onmouseover="this.style.background='#9F5BA4'; this.style.transform='translateY(-3px)'; this.style.boxShadow='0 10px 30px rgba(109, 53, 111, 0.3)';" onmouseout="this.style.background='#6D356F'; this.style.transform='translateY(0)'; this.style.boxShadow='none';">
                                    <i class="fa fa-calendar-check me-2"></i>Zarezerwuj przez Booksy
                                </a>
                                <a href="tel:+48883481581" class="btn btn-lg px-5 py-3" style="background: #D7A54F; color: #fff; border: none; border-radius: 50px; font-weight: 600; transition: all 0.3s;" onmouseover="this.style.background='#E8C068'; this.style.transform='translateY(-3px)'; this.style.boxShadow='0 10px 30px rgba(215, 165, 79, 0.3)';" onmouseout="this.style.background='#D7A54F'; this.style.transform='translateY(0)'; this.style.boxShadow='none';">
                                    <i class="fa fa-phone me-2"></i>+48 883 481 581
                                </a>
                            </div>
                            <div class="mt-4">
                                <p class="mb-0 text-muted">
                                    <i class="fa fa-map-marker-alt me-2"></i>ul. Borówkowa 13, 55-002 Dobrzykowice
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--====== End Main Content ======-->

        <!-- INSTAGRAM SECTION START -->
        <div class="section-full p-t50 p-b10 overlay-wraper site-bg-primary bg-repeat" style="background-image:url(images/background/bg-7.png);">
            <div class="container">
                <div class="section-head text-center">
                    <h2 style="color: #fff;"><span class="site-text-primary" style="color: #fff;">Nasz </span> Instagram</h2>
                    <p style="color: #fff;">Najświeższe nowinki z naszego salonu będą dla Państwa dostępne w naszych social mediach na profilu Instagramowym. Koniecznie obserwuj nasze ruchy w social mediach.</p>
                </div>

                <!-- IMAGE CAROUSEL START -->
                <div class="section-content">
                   <script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="https://cdn.lightwidget.com/widgets/1b3ffdfb097a529b9970baf400113732.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>
                </div>
                <!-- IMAGE CAROUSEL END -->
            </div>
        </div>
        <!-- OUR INSTAGRAM SLIDER END -->

        <!-- CONTENT END -->
        </div>
        <!-- CONTENT END -->

        <!-- Footer -->
        <?php include 'partials/footer.php'; ?>

    </div>

    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            offset: 100
        });

        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Parallax effect on hero
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const parallax = document.querySelector('.bg-cover');
            if (parallax) {
                parallax.style.transform = 'translateY(' + (scrolled * 0.5) + 'px)';
            }
        });
    </script>

</body>
</html>
