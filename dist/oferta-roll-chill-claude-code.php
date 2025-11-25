<?php

/**
 * MAGIC SALON - Oferta: Roll & Chill
 * Wersja: 1.0 - Premium design z diagonal sections i wave dividers
 */

// Załaduj konfigurację
require_once __DIR__ . DIRECTORY_SEPARATOR . 'config.php';

// Konfiguracja meta tagów dla strony Roll & Chill
$meta = [
    'title' => 'Roll & Chill Dobrzykowice – Relaksujący Masaż Rolkowy | MAGIC SALON',
    'description' => 'Roll & Chill - innowacyjny masaż rolkowy łączący modelowanie sylwetki z głębokim relaksem. Cena 120 zł. Redukcja cellulitu i odprężenie w jednym zabiegu.',
    'keywords' => 'roll chill, rollmasaż wrocław, masaż na cellulit, drenaż limfatyczny, modelowanie sylwetki, salon kosmetyczny dobrzykowice, masaż rolkowy',
    'canonical' => BASE_URL . '/oferta-roll-chill.php',
    'robots' => 'index, follow, max-image-preview:large',
    'og' => [
        'type' => 'website',
        'title' => 'Roll & Chill – Masaż Rolkowy z Relaksem',
        'description' => 'Skuteczny rollmasaż z podczerwienią. Redukcja cellulitu, modelowanie sylwetki i głęboka relaksacja. Zabieg 45-60 minut za 120 zł.',
        'url' => BASE_URL . '/oferta-roll-chill.php',
        'image' => BASE_URL . '/images/oferta/roll-chill-og.jpg',
    ],
    'twitter' => [
        'card' => 'summary_large_image',
        'title' => 'Roll & Chill w MAGIC SALON',
        'description' => 'Relaksujący masaż rolkowy z efektem modelującym.',
    ],
    'schema' => [
        'enabled' => true,
        'type' => 'Service',
        'name' => 'Roll & Chill - Masaż Rolkowy',
        'description' => 'Innowacyjny zabieg łączący skuteczność rollmasażu z głębokim efektem relaksacyjnym. Masaż wykonywany przy użyciu drewnianych rolek z podczerwienią.',
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
        'offers' => [
            '@type' => 'Offer',
            'price' => '120',
            'priceCurrency' => 'PLN',
            'availability' => 'https://schema.org/InStock'
        ]
    ],
    'styles' => [
        'css/bootstrap.min.css',
        'css/style.css',
        'plugins/revolution/revolution/css/settings.css',
        'plugins/revolution/revolution/css/layers.css',
        'plugins/revolution/revolution/css/navigation.css',
        'css/skin/skin-7.css',
        'css/templete.css',
        'plugins/aos/aos.css'
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
            $page_title = 'Roll & Chill';
            $page_desc = 'Relaksujący masaż rolkowy z efektem modelującym. Połączenie skuteczności i odprężenia.';
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
                    'label' => 'Roll & Chill',
                    'url' => '',
                    'icon' => ''
                ]
            ];

            include 'partials/breadcrumbs.php';
        ?>

        <!--====== Start Main Content ======-->

        <!-- Hero Section with Split Design -->
        <div class="section-full" style="position: relative; overflow: hidden; min-height: 700px;">
            <!-- Left side - Content -->
            <div class="row g-0">
                <div class="col-lg-6 d-flex align-items-center" style="background: linear-gradient(135deg, #6D356F 0%, #9F5BA4 100%); min-height: 700px; position: relative; z-index: 2;">
                    <div class="container">
                        <div class="p-5" data-aos="fade-right" data-aos-duration="1000">
                            <div class="mb-4">
                                <span class="badge px-4 py-2" style="background: rgba(255, 255, 255, 0.2); color: #fff; border: 1px solid rgba(255, 255, 255, 0.3); border-radius: 50px; font-size: 14px;">
                                    <i class="fa fa-leaf me-2"></i>Naturalny relaks
                                </span>
                            </div>

                            <h1 class="text-white mb-4" style="font-size: 64px; font-weight: 900; line-height: 1.1;">
                                Roll<br/>
                                <span style="background: linear-gradient(90deg, #D7A54F, #E8C068); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">& Chill</span>
                            </h1>

                            <p class="text-white mb-4" style="font-size: 20px; line-height: 1.7; opacity: 0.95;">
                                Innowacyjny zabieg łączący <strong>skuteczność rollmasażu</strong> z głębokim efektem <strong>relaksacyjnym</strong>.
                                Drewniane rolki + podczerwień = perfekcyjne połączenie.
                            </p>

                            <!-- Benefits List -->
                            <div class="mb-5">
                                <div class="d-flex align-items-center mb-3 text-white">
                                    <div style="width: 40px; height: 40px; background: rgba(215, 165, 79, 0.3); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                                        <i class="fa fa-check" style="color: #D7A54F;"></i>
                                    </div>
                                    <span style="font-size: 16px;">Redukcja cellulitu i modelowanie</span>
                                </div>
                                <div class="d-flex align-items-center mb-3 text-white">
                                    <div style="width: 40px; height: 40px; background: rgba(215, 165, 79, 0.3); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                                        <i class="fa fa-check" style="color: #D7A54F;"></i>
                                    </div>
                                    <span style="font-size: 16px;">Głęboka relaksacja i odprężenie</span>
                                </div>
                                <div class="d-flex align-items-center text-white">
                                    <div style="width: 40px; height: 40px; background: rgba(215, 165, 79, 0.3); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                                        <i class="fa fa-check" style="color: #D7A54F;"></i>
                                    </div>
                                    <span style="font-size: 16px;">Drenaż limfatyczny i detoks</span>
                                </div>
                            </div>

                            <!-- Price and CTA -->
                            <div class="d-flex flex-wrap gap-3 align-items-center mb-4">
                                <div class="px-4 py-3" style="background: rgba(255, 255, 255, 0.15); backdrop-filter: blur(10px); border-radius: 15px; border: 1px solid rgba(255, 255, 255, 0.2);">
                                    <div style="font-size: 14px; color: rgba(255, 255, 255, 0.8);">Cena zabiegu</div>
                                    <div style="font-size: 36px; font-weight: 800; color: #D7A54F; line-height: 1;">120 zł</div>
                                </div>
                                <div class="px-4 py-3" style="background: rgba(255, 255, 255, 0.15); backdrop-filter: blur(10px); border-radius: 15px; border: 1px solid rgba(255, 255, 255, 0.2);">
                                    <div style="font-size: 14px; color: rgba(255, 255, 255, 0.8);">Czas trwania</div>
                                    <div style="font-size: 24px; font-weight: 700; color: #fff; line-height: 1;">45-60 min</div>
                                </div>
                            </div>

                            <div class="d-flex flex-wrap gap-3">
                                <a href="https://booksy.magicsalon.pl" target="_blank" class="btn btn-lg px-5 py-3" style="background: #D7A54F; color: #fff; border: none; border-radius: 50px; font-weight: 600; transition: all 0.3s; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);" onmouseover="this.style.transform='translateY(-3px)'; this.style.background='#E8C068';" onmouseout="this.style.transform='translateY(0)'; this.style.background='#D7A54F';">
                                    <i class="fa fa-calendar-check me-2"></i>Zarezerwuj online
                                </a>
                                <a href="tel:+48883481581" class="btn btn-lg btn-outline-light px-5 py-3" style="border: 2px solid #fff; border-radius: 50px; font-weight: 600; transition: all 0.3s;" onmouseover="this.style.background='#fff'; this.style.color='#6D356F';" onmouseout="this.style.background='transparent'; this.style.color='#fff';">
                                    <i class="fa fa-phone me-2"></i>Zadzwoń
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right side - Image with Overlay -->
                <div class="col-lg-6" style="position: relative; min-height: 700px;">
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: url('images/oferta/roll-chill-hero.jpg'); background-size: cover; background-position: center;">
                        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(90deg, #6D356F 0%, transparent 50%); opacity: 0.7;"></div>
                    </div>

                    <!-- Floating Card -->
                    <div class="position-absolute" style="bottom: 50px; left: 50px; right: 50px; z-index: 10;" data-aos="fade-up" data-aos-delay="300">
                        <div class="p-4" style="background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(20px); border-radius: 20px; box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);">
                            <div class="row g-3 text-center">
                                <div class="col-4">
                                    <i class="fa fa-spa fa-2x mb-2" style="color: #6D356F;"></i>
                                    <div style="font-weight: 700; color: #6D356F; font-size: 18px;">Relaks</div>
                                    <small style="color: #666;">głęboki</small>
                                </div>
                                <div class="col-4">
                                    <i class="fa fa-fire fa-2x mb-2" style="color: #D7A54F;"></i>
                                    <div style="font-weight: 700; color: #6D356F; font-size: 18px;">Podczerwień</div>
                                    <small style="color: #666;">terapia ciepłem</small>
                                </div>
                                <div class="col-4">
                                    <i class="fa fa-heartbeat fa-2x mb-2" style="color: #6D356F;"></i>
                                    <div style="font-weight: 700; color: #6D356F; font-size: 18px;">Drenaż</div>
                                    <small style="color: #666;">limfatyczny</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Wave Divider -->
        <div style="background: #fff; margin-top: -1px;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 120" style="display: block; margin-top: -50px;">
                <path fill="#6D356F" d="M0,64L48,69.3C96,75,192,85,288,80C384,75,480,53,576,48C672,43,768,53,864,58.7C960,64,1056,64,1152,58.7C1248,53,1344,43,1392,37.3L1440,32L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
            </svg>
        </div>

        <!-- Czym jest Roll & Chill -->
        <div class="section-full p-t80 p-b80 bg-white">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-8 text-center" data-aos="fade-up">
                        <span class="badge px-4 py-2 mb-3" style="background: rgba(109, 53, 111, 0.1); color: #6D356F; font-size: 14px; border-radius: 50px;">
                            <i class="fa fa-info-circle me-2"></i>O zabiegu
                        </span>
                        <h2 class="mb-4" style="color: #6D356F; font-weight: 700; font-size: 42px;">
                            Czym jest zabieg Roll & Chill?
                        </h2>
                        <p class="lead" style="color: #444; line-height: 1.8;">
                            <strong>Roll & Chill</strong> to więcej niż zwykły masaż. To połączenie skuteczności
                            rollmasażu z głębokim efektem relaksacyjnym, które odmieni Twoje ciało i umysł.
                        </p>
                    </div>
                </div>

                <!-- 3 Fazy działania -->
                <div class="row g-4 mb-5">
                    <div class="col-lg-4" data-aos="flip-left" data-aos-delay="0">
                        <div class="position-relative h-100" style="border-radius: 25px; overflow: hidden; box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);">
                            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(109, 53, 111, 0.95), rgba(159, 91, 164, 0.95)); z-index: 1;"></div>
                            <div style="position: relative; z-index: 2; padding: 50px 30px; color: #fff;">
                                <div class="mb-4" style="width: 80px; height: 80px; background: rgba(215, 165, 79, 0.3); border-radius: 20px; display: flex; align-items: center; justify-content: center;">
                                    <span style="font-size: 36px; font-weight: 800; color: #D7A54F;">1</span>
                                </div>
                                <h3 class="mb-3" style="font-weight: 700; font-size: 24px;">Stymulacja mechaniczna</h3>
                                <p style="opacity: 0.95; line-height: 1.8;">
                                    Drewniane rolki wykonują <strong>głaskanie, ugniatanie i drenaż limfatyczny</strong>.
                                    Rozpoczynamy od stóp, przechodząc przez całe ciało zgodnie z naturalnym kierunkiem przepływu limfy.
                                </p>
                                <div class="mt-4">
                                    <i class="fa fa-hand-holding-heart fa-3x" style="opacity: 0.5;"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4" data-aos="flip-left" data-aos-delay="100">
                        <div class="position-relative h-100" style="border-radius: 25px; overflow: hidden; box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);">
                            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(215, 165, 79, 0.95), rgba(232, 192, 104, 0.95)); z-index: 1;"></div>
                            <div style="position: relative; z-index: 2; padding: 50px 30px; color: #fff;">
                                <div class="mb-4" style="width: 80px; height: 80px; background: rgba(109, 53, 111, 0.3); border-radius: 20px; display: flex; align-items: center; justify-content: center;">
                                    <span style="font-size: 36px; font-weight: 800; color: #fff;">2</span>
                                </div>
                                <h3 class="mb-3" style="font-weight: 700; font-size: 24px;">Terapia ciepłem</h3>
                                <p style="opacity: 0.95; line-height: 1.8;">
                                    <strong>Promieniowanie podczerwone</strong> przenika głęboko w tkanki. Rozszerza naczynia,
                                    przyspiesza metabolizm i rozluźnia napięte mięśnie. Przyjemne ciepło wywołuje efekt odprężenia.
                                </p>
                                <div class="mt-4">
                                    <i class="fa fa-fire fa-3x" style="opacity: 0.5;"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4" data-aos="flip-left" data-aos-delay="200">
                        <div class="position-relative h-100" style="border-radius: 25px; overflow: hidden; box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);">
                            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(109, 53, 111, 0.95), rgba(159, 91, 164, 0.95)); z-index: 1;"></div>
                            <div style="position: relative; z-index: 2; padding: 50px 30px; color: #fff;">
                                <div class="mb-4" style="width: 80px; height: 80px; background: rgba(215, 165, 79, 0.3); border-radius: 20px; display: flex; align-items: center; justify-content: center;">
                                    <span style="font-size: 36px; font-weight: 800; color: #D7A54F;">3</span>
                                </div>
                                <h3 class="mb-3" style="font-weight: 700; font-size: 24px;">Efekt "Chill"</h3>
                                <p style="opacity: 0.95; line-height: 1.8;">
                                    Specjalny nacisk na <strong>aspekt relaksacyjny</strong>. Stonowane oświetlenie,
                                    muzyka, aromaty. Redukcja kortyzolu i stymulacja endorfin – hormonów szczęścia.
                                </p>
                                <div class="mt-4">
                                    <i class="fa fa-spa fa-3x" style="opacity: 0.5;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Diagonal Section - Korzyści -->
        <div class="section-full position-relative" style="background: linear-gradient(135deg, #6D356F 0%, #9F5BA4 100%); padding: 120px 0; margin-top: -50px; transform: skewY(-3deg); transform-origin: top left;">
            <div style="transform: skewY(3deg);">
                <div class="container">
                    <div class="row justify-content-center mb-5">
                        <div class="col-lg-8 text-center" data-aos="fade-up">
                            <span class="badge px-4 py-2 mb-3" style="background: rgba(255, 255, 255, 0.2); color: #fff; border: 1px solid rgba(255, 255, 255, 0.3); border-radius: 50px; font-size: 14px;">
                                <i class="fa fa-award me-2"></i>Wieloaspektowe działanie
                            </span>
                            <h2 class="mb-4 text-white" style="font-weight: 700; font-size: 42px;">
                                Korzyści z zabiegu Roll & Chill
                            </h2>
                            <p class="lead text-white" style="opacity: 0.95; line-height: 1.8;">
                                Efekty estetyczne, zdrowotne i psychiczne w jednym zabiegu.
                            </p>
                        </div>
                    </div>

                    <!-- Tabs Navigation -->
                    <div class="text-center mb-5" data-aos="fade-up">
                        <div class="d-inline-flex gap-3 p-2" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border-radius: 50px; border: 1px solid rgba(255, 255, 255, 0.2);">
                            <button class="btn benefits-tab active" data-tab="aesthetic" style="background: #D7A54F; color: #fff; border: none; border-radius: 50px; padding: 12px 30px; font-weight: 600; transition: all 0.3s;" onclick="switchTab('aesthetic', this)">
                                <i class="fa fa-sparkles me-2"></i>Estetyczne
                            </button>
                            <button class="btn benefits-tab" data-tab="health" style="background: transparent; color: #fff; border: none; border-radius: 50px; padding: 12px 30px; font-weight: 600; transition: all 0.3s;" onclick="switchTab('health', this)">
                                <i class="fa fa-heartbeat me-2"></i>Zdrowotne
                            </button>
                            <button class="btn benefits-tab" data-tab="mental" style="background: transparent; color: #fff; border: none; border-radius: 50px; padding: 12px 30px; font-weight: 600; transition: all 0.3s;" onclick="switchTab('mental', this)">
                                <i class="fa fa-brain me-2"></i>Psychiczne
                            </button>
                        </div>
                    </div>

                    <!-- Tabs Content -->
                    <div class="tab-content-wrapper">
                        <!-- Aesthetic Tab -->
                        <div class="tab-pane-custom active" id="aesthetic" data-aos="fade-up">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="p-4" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border-radius: 20px; border: 1px solid rgba(255, 255, 255, 0.2); height: 100%;">
                                        <div class="d-flex align-items-start">
                                            <i class="fa fa-check-circle fa-2x me-3" style="color: #D7A54F;"></i>
                                            <div class="text-white">
                                                <h4 style="font-weight: 700; margin-bottom: 10px;">Redukcja cellulitu</h4>
                                                <p style="opacity: 0.9; margin: 0;">Rozbijanie złogów tłuszczowych i wygładzanie "skórki pomarańczowej". <strong>Efekty po 4-5 zabiegach</strong>.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border-radius: 20px; border: 1px solid rgba(255, 255, 255, 0.2); height: 100%;">
                                        <div class="d-flex align-items-start">
                                            <i class="fa fa-check-circle fa-2x me-3" style="color: #D7A54F;"></i>
                                            <div class="text-white">
                                                <h4 style="font-weight: 700; margin-bottom: 10px;">Modelowanie sylwetki</h4>
                                                <p style="opacity: 0.9; margin: 0;">Zmniejszenie obwodów w newralgicznych miejscach. <strong>Serie 8-10 zabiegów</strong> dla widocznych rezultatów.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border-radius: 20px; border: 1px solid rgba(255, 255, 255, 0.2); height: 100%;">
                                        <div class="d-flex align-items-start">
                                            <i class="fa fa-check-circle fa-2x me-3" style="color: #D7A54F;"></i>
                                            <div class="text-white">
                                                <h4 style="font-weight: 700; margin-bottom: 10px;">Ujędrnienie skóry</h4>
                                                <p style="opacity: 0.9; margin: 0;">Poprawa napięcia i elastyczności skóry. <strong>Pierwsze efekty po 3-4 zabiegach</strong>.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border-radius: 20px; border: 1px solid rgba(255, 255, 255, 0.2); height: 100%;">
                                        <div class="d-flex align-items-start">
                                            <i class="fa fa-check-circle fa-2x me-3" style="color: #D7A54F;"></i>
                                            <div class="text-white">
                                                <h4 style="font-weight: 700; margin-bottom: 10px;">Redukcja obrzęków</h4>
                                                <p style="opacity: 0.9; margin: 0;">Usunięcie nadmiaru wody z organizmu. <strong>Już po pierwszym zabiegu</strong> odczujesz ulgę.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Health Tab -->
                        <div class="tab-pane-custom" id="health" style="display: none;" data-aos="fade-up">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="p-4" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border-radius: 20px; border: 1px solid rgba(255, 255, 255, 0.2); height: 100%;">
                                        <div class="d-flex align-items-start">
                                            <i class="fa fa-heart fa-2x me-3" style="color: #D7A54F;"></i>
                                            <div class="text-white">
                                                <h4 style="font-weight: 700; margin-bottom: 10px;">Poprawa krążenia</h4>
                                                <p style="opacity: 0.9; margin: 0;">Lepsze dotlenienie tkanek, szybsze usuwanie toksyn. Wsparcie dla krwi i limfy.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border-radius: 20px; border: 1px solid rgba(255, 255, 255, 0.2); height: 100%;">
                                        <div class="d-flex align-items-start">
                                            <i class="fa fa-fire-alt fa-2x me-3" style="color: #D7A54F;"></i>
                                            <div class="text-white">
                                                <h4 style="font-weight: 700; margin-bottom: 10px;">Przyspieszenie metabolizmu</h4>
                                                <p style="opacity: 0.9; margin: 0;">Wspomaga procesy spalania tkanki tłuszczowej i regeneracji komórkowej.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border-radius: 20px; border: 1px solid rgba(255, 255, 255, 0.2); height: 100%;">
                                        <div class="d-flex align-items-start">
                                            <i class="fa fa-shield-alt fa-2x me-3" style="color: #D7A54F;"></i>
                                            <div class="text-white">
                                                <h4 style="font-weight: 700; margin-bottom: 10px;">Poprawa odporności</h4>
                                                <p style="opacity: 0.9; margin: 0;">Stymulacja układu limfatycznego wspiera system immunologiczny organizmu.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border-radius: 20px; border: 1px solid rgba(255, 255, 255, 0.2); height: 100%;">
                                        <div class="d-flex align-items-start">
                                            <i class="fa fa-running fa-2x me-3" style="color: #D7A54F;"></i>
                                            <div class="text-white">
                                                <h4 style="font-weight: 700; margin-bottom: 10px;">Eliminacja "ciężkich nóg"</h4>
                                                <p style="opacity: 0.9; margin: 0;">Idealne dla osób prowadzących siedzący tryb życia i pracujących przy biurku.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Mental Tab -->
                        <div class="tab-pane-custom" id="mental" style="display: none;" data-aos="fade-up">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="p-4" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border-radius: 20px; border: 1px solid rgba(255, 255, 255, 0.2); height: 100%;">
                                        <div class="d-flex align-items-start">
                                            <i class="fa fa-smile fa-2x me-3" style="color: #D7A54F;"></i>
                                            <div class="text-white">
                                                <h4 style="font-weight: 700; margin-bottom: 10px;">Głęboka relaksacja</h4>
                                                <p style="opacity: 0.9; margin: 0;">Redukcja stresu i napięcia nerwowego. Chwila wytchnienia od codziennych obowiązków.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border-radius: 20px; border: 1px solid rgba(255, 255, 255, 0.2); height: 100%;">
                                        <div class="d-flex align-items-start">
                                            <i class="fa fa-laugh-beam fa-2x me-3" style="color: #D7A54F;"></i>
                                            <div class="text-white">
                                                <h4 style="font-weight: 700; margin-bottom: 10px;">Poprawa nastroju</h4>
                                                <p style="opacity: 0.9; margin: 0;">Stymulacja wydzielania endorfin – naturalnych hormonów szczęścia.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border-radius: 20px; border: 1px solid rgba(255, 255, 255, 0.2); height: 100%;">
                                        <div class="d-flex align-items-start">
                                            <i class="fa fa-bed fa-2x me-3" style="color: #D7A54F;"></i>
                                            <div class="text-white">
                                                <h4 style="font-weight: 700; margin-bottom: 10px;">Lepszy sen</h4>
                                                <p style="opacity: 0.9; margin: 0;">Regularne zabiegi pomagają w walce z bezsennością i problemami ze snem.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border-radius: 20px; border: 1px solid rgba(255, 255, 255, 0.2); height: 100%;">
                                        <div class="d-flex align-items-start">
                                            <i class="fa fa-bolt fa-2x me-3" style="color: #D7A54F;"></i>
                                            <div class="text-white">
                                                <h4 style="font-weight: 700; margin-bottom: 10px;">Zwiększenie energii</h4>
                                                <p style="opacity: 0.9; margin: 0;">Uczucie lekkości i witalności po zabiegu. Redukcja objawów przemęczenia.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Przebieg zabiegu -->
        <div class="section-full p-t120 p-b80 bg-white" style="margin-top: -50px;">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-8 text-center" data-aos="fade-up">
                        <span class="badge px-4 py-2 mb-3" style="background: rgba(215, 165, 79, 0.1); color: #D7A54F; font-size: 14px; border-radius: 50px;">
                            <i class="fa fa-route me-2"></i>Krok po kroku
                        </span>
                        <h2 class="mb-4" style="color: #6D356F; font-weight: 700; font-size: 42px;">
                            Przebieg zabiegu Roll & Chill
                        </h2>
                        <p class="lead" style="color: #444; line-height: 1.8;">
                            Sesja trwa około <strong>45-60 minut</strong>. Poznaj szczegółowy przebieg zabiegu.
                        </p>
                    </div>
                </div>

                <!-- Timeline -->
                <div class="position-relative" style="max-width: 900px; margin: 0 auto;">
                    <div style="position: absolute; left: 50%; top: 0; bottom: 0; width: 4px; background: linear-gradient(180deg, #6D356F, #D7A54F); transform: translateX(-50%); z-index: 0;"></div>

                    <!-- Step 1 -->
                    <div class="row mb-5" data-aos="fade-right">
                        <div class="col-md-6 text-end pe-5">
                            <div class="p-4" style="background: #f8f9fa; border-radius: 20px; border-right: 4px solid #6D356F;">
                                <h4 style="color: #6D356F; font-weight: 700; margin-bottom: 10px;">Rozgrzewka</h4>
                                <p class="mb-2" style="color: #666;">Delikatny start, przygotowanie ciała do intensywniejszego masażu.</p>
                                <div style="color: #D7A54F; font-weight: 600;"><i class="fa fa-clock me-2"></i>5-10 min</div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-center">
                            <div style="width: 60px; height: 60px; background: #6D356F; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 24px; font-weight: 800; box-shadow: 0 10px 30px rgba(109, 53, 111, 0.3); position: relative; z-index: 1; margin: 0 auto;">
                                1
                            </div>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="row mb-5" data-aos="fade-left">
                        <div class="col-md-6 d-flex align-items-center order-md-1">
                            <div style="width: 60px; height: 60px; background: #D7A54F; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 24px; font-weight: 800; box-shadow: 0 10px 30px rgba(215, 165, 79, 0.3); position: relative; z-index: 1; margin: 0 auto;">
                                2
                            </div>
                        </div>
                        <div class="col-md-6 ps-5 order-md-2">
                            <div class="p-4" style="background: #f8f9fa; border-radius: 20px; border-left: 4px solid #D7A54F;">
                                <h4 style="color: #6D356F; font-weight: 700; margin-bottom: 10px;">Stopy i łydki</h4>
                                <p class="mb-2" style="color: #666;">Aktywacja refleksologii, pobudzenie krążenia w dolnych partiach ciała.</p>
                                <div style="color: #6D356F; font-weight: 600;"><i class="fa fa-clock me-2"></i>10 min</div>
                            </div>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="row mb-5" data-aos="fade-right">
                        <div class="col-md-6 text-end pe-5">
                            <div class="p-4" style="background: #f8f9fa; border-radius: 20px; border-right: 4px solid #6D356F;">
                                <h4 style="color: #6D356F; font-weight: 700; margin-bottom: 10px;">Uda i pośladki</h4>
                                <p class="mb-2" style="color: #666;">Intensywna praca nad strefami problematycznymi. Najdłuższy etap zabiegu.</p>
                                <div style="color: #D7A54F; font-weight: 600;"><i class="fa fa-clock me-2"></i>15 min</div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-center">
                            <div style="width: 60px; height: 60px; background: #6D356F; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 24px; font-weight: 800; box-shadow: 0 10px 30px rgba(109, 53, 111, 0.3); position: relative; z-index: 1; margin: 0 auto;">
                                3
                            </div>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="row mb-5" data-aos="fade-left">
                        <div class="col-md-6 d-flex align-items-center order-md-1">
                            <div style="width: 60px; height: 60px; background: #D7A54F; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 24px; font-weight: 800; box-shadow: 0 10px 30px rgba(215, 165, 79, 0.3); position: relative; z-index: 1; margin: 0 auto;">
                                4
                            </div>
                        </div>
                        <div class="col-md-6 ps-5 order-md-2">
                            <div class="p-4" style="background: #f8f9fa; border-radius: 20px; border-left: 4px solid #D7A54F;">
                                <h4 style="color: #6D356F; font-weight: 700; margin-bottom: 10px;">Brzuch i biodra</h4>
                                <p class="mb-2" style="color: #666;">Modelowanie talii, stymulacja trawienia i pracy narządów wewnętrznych.</p>
                                <div style="color: #6D356F; font-weight: 600;"><i class="fa fa-clock me-2"></i>10 min</div>
                            </div>
                        </div>
                    </div>

                    <!-- Step 5 -->
                    <div class="row" data-aos="fade-right">
                        <div class="col-md-6 text-end pe-5">
                            <div class="p-4" style="background: linear-gradient(135deg, rgba(109, 53, 111, 0.1), rgba(215, 165, 79, 0.1)); border-radius: 20px; border-right: 4px solid #6D356F;">
                                <h4 style="color: #6D356F; font-weight: 700; margin-bottom: 10px;">Plecy i ramiona</h4>
                                <p class="mb-2" style="color: #666;">Rozluźnienie napięć, pełny efekt relaksacyjny. Finalizacja zabiegu.</p>
                                <div style="color: #D7A54F; font-weight: 600;"><i class="fa fa-clock me-2"></i>10-15 min</div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-center">
                            <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #6D356F, #D7A54F); border-radius: 50%; display: flex; align-items-center; justify-content: center; color: #fff; font-size: 24px; font-weight: 800; box-shadow: 0 10px 30px rgba(109, 53, 111, 0.3); position: relative; z-index: 1; margin: 0 auto;">
                                5
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cennik -->
        <div class="section-full p-t80 p-b80" style="background: linear-gradient(135deg, rgba(109, 53, 111, 0.03) 0%, rgba(215, 165, 79, 0.03) 100%);">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-8 text-center" data-aos="fade-up">
                        <span class="badge px-4 py-2 mb-3" style="background: rgba(215, 165, 79, 0.1); color: #D7A54F; font-size: 14px; border-radius: 50px;">
                            <i class="fa fa-tag me-2"></i>Przystępne ceny
                        </span>
                        <h2 class="mb-4" style="color: #6D356F; font-weight: 700; font-size: 42px;">
                            Cennik zabiegów masaż
                        </h2>
                        <p class="lead" style="color: #444; line-height: 1.8;">
                            Atrakcyjne ceny w regionie Wrocławia i okolic.
                        </p>
                    </div>
                </div>

                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="0">
                        <div class="card h-100 border-0 shadow-lg" style="border-radius: 30px; border: 3px solid #D7A54F; position: relative; overflow: hidden;">
                            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 5px; background: linear-gradient(90deg, #6D356F, #D7A54F);"></div>
                            <div class="card-body p-5 text-center">
                                <div class="mb-4">
                                    <i class="fa fa-star fa-4x" style="color: #D7A54F;"></i>
                                </div>
                                <h3 class="mb-3" style="color: #6D356F; font-weight: 700; font-size: 28px;">Roll & Chill</h3>
                                <div class="mb-4">
                                    <div style="font-size: 56px; font-weight: 800; color: #6D356F; line-height: 1;">120 zł</div>
                                    <p class="text-muted mb-0">Sesja 45-60 minut</p>
                                </div>
                                <ul class="list-unstyled mb-4 text-start">
                                    <li class="mb-2"><i class="fa fa-check text-success me-2"></i>Rollmasaż całego ciała</li>
                                    <li class="mb-2"><i class="fa fa-check text-success me-2"></i>Terapia podczerwienią</li>
                                    <li class="mb-2"><i class="fa fa-check text-success me-2"></i>Drenaż limfatyczny</li>
                                    <li class="mb-2"><i class="fa fa-check text-success me-2"></i>Efekt relaksacyjny</li>
                                </ul>
                                <a href="https://booksy.magicsalon.pl" target="_blank" class="btn w-100 btn-lg" style="background: linear-gradient(135deg, #6D356F, #9F5BA4); color: #fff; border: none; border-radius: 50px; padding: 15px; font-weight: 600; transition: all 0.3s;" onmouseover="this.style.transform='scale(1.05)';" onmouseout="this.style.transform='scale(1)';">
                                    <i class="fa fa-calendar-check me-2"></i>Zarezerwuj teraz
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                        <div class="card h-100 border-0 shadow" style="border-radius: 30px;">
                            <div class="card-body p-5">
                                <h4 class="mb-4" style="color: #6D356F; font-weight: 700;">Inne zabiegi na ciało</h4>

                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="d-flex justify-content-between align-items-center p-3" style="background: #f8f9fa; border-radius: 15px; border-left: 4px solid #6D356F;">
                                            <div>
                                                <div style="font-weight: 600; color: #6D356F;">Cool Down Roll</div>
                                                <small style="color: #999;">Chłodzenie + modelowanie</small>
                                            </div>
                                            <div style="font-size: 24px; font-weight: 700; color: #6D356F;">120 zł</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex justify-content-between align-items-center p-3" style="background: #f8f9fa; border-radius: 15px; border-left: 4px solid #D7A54F;">
                                            <div>
                                                <div style="font-weight: 600; color: #6D356F;">Goodbye Cellulite</div>
                                                <small style="color: #999;">Intensywna redukcja</small>
                                            </div>
                                            <div style="font-size: 24px; font-weight: 700; color: #6D356F;">180 zł</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex justify-content-between align-items-center p-3" style="background: #f8f9fa; border-radius: 15px; border-left: 4px solid #6D356F;">
                                            <div>
                                                <div style="font-weight: 600; color: #6D356F;">Detox & Drenaż – ramiona</div>
                                                <small style="color: #999;">Oczyszczanie limfy</small>
                                            </div>
                                            <div style="font-size: 24px; font-weight: 700; color: #6D356F;">120 zł</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex justify-content-between align-items-center p-3" style="background: #f8f9fa; border-radius: 15px; border-left: 4px solid #D7A54F;">
                                            <div>
                                                <div style="font-weight: 600; color: #6D356F;">Detox & Drenaż – uda</div>
                                                <small style="color: #999;">Uda + pośladki</small>
                                            </div>
                                            <div style="font-size: 24px; font-weight: 700; color: #6D356F;">150 zł</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4 p-4 text-center" style="background: linear-gradient(135deg, rgba(109, 53, 111, 0.05), rgba(215, 165, 79, 0.05)); border-radius: 20px;">
                                    <i class="fa fa-info-circle fa-2x mb-2" style="color: #6D356F;"></i>
                                    <p class="mb-0" style="color: #666;">
                                        <strong>Pakiety zabiegowe</strong> dostępne w atrakcyjnych cenach.<br/>
                                        Skontaktuj się z nami, aby poznać szczegóły!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Final with Gradient -->
        <div class="section-full p-t100 p-b100" style="background: linear-gradient(135deg, #6D356F 0%, #9F5BA4 50%, #D7A54F 100%); position: relative; overflow: hidden;">
            <!-- Animated circles -->
            <div style="position: absolute; top: -100px; left: -100px; width: 400px; height: 400px; background: rgba(255, 255, 255, 0.05); border-radius: 50%; animation: float 6s ease-in-out infinite;"></div>
            <div style="position: absolute; bottom: -150px; right: -150px; width: 500px; height: 500px; background: rgba(255, 255, 255, 0.05); border-radius: 50%; animation: float 8s ease-in-out infinite reverse;"></div>

            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center" data-aos="zoom-in">
                        <i class="fa fa-spa fa-5x mb-4 text-white" style="opacity: 0.9;"></i>
                        <h2 class="mb-4 text-white" style="font-weight: 900; font-size: 48px; text-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);">
                            Gotowa na Roll & Chill?
                        </h2>
                        <p class="lead text-white mb-5" style="opacity: 0.95; font-size: 22px; line-height: 1.7;">
                            Połącz skuteczność modelowania z głębokim relaksem.<br/>
                            <strong>120 zł</strong> za sesję pełną odprężenia i efektów.
                        </p>

                        <div class="d-flex flex-wrap gap-4 justify-content-center">
                            <a href="https://booksy.magicsalon.pl" target="_blank" class="btn btn-lg px-5 py-4" style="background: #fff; color: #6D356F; border: none; border-radius: 50px; font-weight: 700; font-size: 18px; transition: all 0.3s; box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);" onmouseover="this.style.transform='translateY(-5px) scale(1.05)'; this.style.boxShadow='0 20px 50px rgba(0, 0, 0, 0.4)';" onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='0 15px 40px rgba(0, 0, 0, 0.3)';">
                                <i class="fa fa-calendar-check me-2"></i>Zarezerwuj przez Booksy
                            </a>
                            <a href="tel:+48883481581" class="btn btn-lg px-5 py-4" style="background: rgba(255, 255, 255, 0.2); color: #fff; border: 2px solid #fff; backdrop-filter: blur(10px); border-radius: 50px; font-weight: 700; font-size: 18px; transition: all 0.3s;" onmouseover="this.style.background='#fff'; this.style.color='#6D356F';" onmouseout="this.style.background='rgba(255, 255, 255, 0.2)'; this.style.color='#fff';">
                                <i class="fa fa-phone me-2"></i>+48 883 481 581
                            </a>
                        </div>

                        <div class="mt-5 text-white">
                            <p class="mb-2"><i class="fa fa-map-marker-alt me-2"></i>ul. Borówkowa 13, 55-002 Dobrzykowice</p>
                            <p class="mb-0"><i class="fa fa-envelope me-2"></i>biuro@magicsalon.pl</p>
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

    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-30px); }
        }

        .tab-pane-custom {
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>

    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            offset: 100
        });

        // Tabs functionality
        function switchTab(tabId, button) {
            // Hide all tabs
            document.querySelectorAll('.tab-pane-custom').forEach(tab => {
                tab.style.display = 'none';
            });

            // Show selected tab
            document.getElementById(tabId).style.display = 'block';

            // Update button states
            document.querySelectorAll('.benefits-tab').forEach(btn => {
                btn.style.background = 'transparent';
                btn.style.color = '#fff';
            });

            button.style.background = '#D7A54F';
            button.style.color = '#fff';
        }

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
    </script>

</body>
</html>
