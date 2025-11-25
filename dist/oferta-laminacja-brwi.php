<?php

/**
 * MAGIC SALON - Oferta: Laminacja Brwi (oferta-laminacja-brwi.php)
 * Wersja: 2.3 - Zoptymalizowane treści SEO dla usługi
 */

// Załaduj konfigurację
require_once __DIR__ . DIRECTORY_SEPARATOR . 'config.php';

// Konfiguracja meta tagów dla strony Laminacja Brwi
$meta = [
    'title' => 'Laminacja Brwi z Geometrią i Farbką | MAGIC SALON Dobrzykowice',
    'description' => 'Idealnie ułożone brwi na 6 tygodni. Kompleksowy zabieg laminacji z architekturą i farbowaniem w Magic Salon. Sprawdź efekt "brwi na mydełko"!',
    'keywords' => 'laminacja brwi dobrzykowice, brow lamination wrocław, architektura brwi, geometria brwi, stylizacja brwi czernica, brwi na mydełko, farbowanie brwi',
    // Canonical URL dla tej konkretnej usługi
    'canonical' => BASE_URL . '/oferta-laminacja-brwi.php',
    'robots' => 'index, follow, max-image-preview:large',
    'og' => [
        'type' => 'website',
        'title' => 'Laminacja Brwi – Perfekcyjny Kształt i Objętość',
        'description' => 'Zapomnij o niesfornych włoskach. Wybierz laminację brwi w Magic Salon i ciesz się idealną oprawą oczu przez wiele tygodni.',
        'url' => BASE_URL . '/oferta-laminacja-brwi.php',
        'image' => BASE_URL . '/images/oferta-details/laminacja-brwi-share.jpg', // Zdjęcie konkretnej usługi
    ],
    'twitter' => [
        'card' => 'summary_large_image',
        'title' => 'Laminacja Brwi w MAGIC SALON',
        'description' => 'Trwałe ułożenie i odżywienie brwi. Sprawdź naszą ofertę.',
    ],
    'schema' => [
        'enabled' => true,
        'type' => 'Service',
        'name' => 'Laminacja i Architektura Brwi',
        'description' => 'Zabieg trwałego modelowania brwi (brow lamination) połączony z geometrią, regulacją i farbowaniem.',
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
            'name' => 'Stylizacja Brwi',
            'itemListElement' => [
                [
                    '@type' => 'Offer',
                    'itemOffered' => [
                        '@type' => 'Service',
                        'name' => 'Pakiet Kompleksowy: Laminacja + Architektura + Farba',
                        'price' => '140.00',
                        'priceCurrency' => 'PLN'
                    ]
                ],
                [
                    '@type' => 'Offer',
                    'itemOffered' => [
                        '@type' => 'Service',
                        'name' => 'Henna Pudrowa z Geometrią'
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
        <div class="page-content bg-white">

                <?php
            // Konfiguracja dynamicznego banera i breadcrumbs dla usługi
            $banner_img = 'images/banner/gallery-banner.jpg'; 
            
            $page_title = 'Laminacja i Architektura Brwi';
            
            // Unikalny opis wprowadzający do konkretnej usługi
            $page_desc = 'Brwi to rama dla Twoich oczu – nadaj jej perfekcyjny kształt. Laminacja brwi w Magic Salon to więcej niż stylizacja; to kompleksowa terapia ujarzmiająca niesforne włoski, nadająca im objętość i wymarzony kierunek. Dzięki połączeniu z precyzyjną geometrią i profesjonalną koloryzacją, uzyskujemy efekt naturalnie gęstych, lśniących i idealnie ułożonych brwi, który utrzymuje się przez długie tygodnie.';
            
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
                    'label' => 'Laminacja Brwi', // Element aktywny
                    'url' => '', 
                    'icon' => ''
                ]
            ];
            
            // Załadowanie dedykowanego partiala
            include 'partials/breadcrumbs.php';
            ?>

        <!--====== Start Main Content ======-->

        <!-- Hero Section -->
        <div class="section-full p-t80 p-b80" style="background: linear-gradient(135deg, rgba(109, 53, 111, 0.97) 0%, rgba(159, 91, 164, 0.95) 50%, rgba(215, 165, 79, 0.9) 100%), url('images/background/brows-pattern.jpg'); background-size: cover; background-attachment: fixed;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-12 mb-4" data-aos="fade-right" data-aos-duration="1000">
                        <div class="text-white">
                            <div class="d-inline-flex align-items-center mb-4 px-4 py-2" style="background: rgba(255, 255, 255, 0.15); backdrop-filter: blur(10px); border-radius: 50px; border: 1px solid rgba(255, 255, 255, 0.3);">
                                <i class="fa fa-certificate me-2" style="color: #D7A54F;"></i>
                                <span style="font-size: 14px; font-weight: 600;">Certyfikowani specjaliści</span>
                            </div>
                            <h1 class="mb-4" style="font-size: 56px; font-weight: 800; line-height: 1.1;">
                                Laminacja<br/>
                                <span style="color: #D7A54F;">Brwi</span>
                            </h1>
                            <p class="lead mb-4" style="font-size: 22px; opacity: 0.95; line-height: 1.6;">
                                Perfekcyjnie ułożone, gęste i wyraziste brwi na <strong>4-6 tygodni</strong>.
                                Kompleksowy pakiet: laminacja + architektura + farbka.
                            </p>

                            <!-- Stats Row -->
                            <div class="row g-3 mb-5">
                                <div class="col-md-4 col-6">
                                    <div class="text-center p-3" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border-radius: 15px; border: 1px solid rgba(255, 255, 255, 0.2);">
                                        <div style="font-size: 36px; font-weight: 800; line-height: 1;">4-6</div>
                                        <div class="small" style="opacity: 0.9;">tygodni efektu</div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-6">
                                    <div class="text-center p-3" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border-radius: 15px; border: 1px solid rgba(255, 255, 255, 0.2);">
                                        <div style="font-size: 36px; font-weight: 800; line-height: 1;">60-75</div>
                                        <div class="small" style="opacity: 0.9;">minut zabiegu</div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-6">
                                    <div class="text-center p-3" style="background: rgba(215, 165, 79, 0.3); backdrop-filter: blur(10px); border-radius: 15px; border: 2px solid #D7A54F;">
                                        <div style="font-size: 36px; font-weight: 800; line-height: 1;">140 zł</div>
                                        <div class="small" style="opacity: 0.9;">pełen pakiet</div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex flex-wrap gap-3">
                                <a href="https://booksy.magicsalon.pl" target="_blank" class="btn btn-lg px-5 py-3" style="background: #D7A54F; color: #fff; border: none; border-radius: 50px; font-weight: 600; transition: all 0.3s; box-shadow: 0 10px 30px rgba(215, 165, 79, 0.4);" onmouseover="this.style.transform='translateY(-3px) scale(1.05)'; this.style.boxShadow='0 15px 40px rgba(215, 165, 79, 0.5)';" onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='0 10px 30px rgba(215, 165, 79, 0.4)';">
                                    <i class="fa fa-calendar-check me-2"></i>Zarezerwuj wizytę
                                </a>
                                <a href="tel:+48883481581" class="btn btn-lg btn-outline-light px-5 py-3" style="border: 2px solid #fff; border-radius: 50px; font-weight: 600; transition: all 0.3s;" onmouseover="this.style.background='#fff'; this.style.color='#6D356F';" onmouseout="this.style.background='transparent'; this.style.color='#fff';">
                                    <i class="fa fa-phone me-2"></i>+48 883 481 581
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 text-center" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                        <div class="position-relative d-inline-block">
                            <div style="position: absolute; top: -30px; left: -30px; width: 100%; height: 100%; background: linear-gradient(135deg, #D7A54F, transparent); border-radius: 30px; opacity: 0.3; z-index: 0;"></div>
                            <img src="images/oferta/laminacja-brwi-main.jpg" alt="Laminacja Brwi" class="img-fluid rounded shadow-lg position-relative" style="border-radius: 30px !important; border: 3px solid rgba(255, 255, 255, 0.3); z-index: 1;">

                            <!-- Floating badge -->
                            <div class="position-absolute" style="bottom: 20px; right: -20px; background: linear-gradient(135deg, #fff, #f8f9fa); color: #6D356F; padding: 25px; border-radius: 20px; box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2); z-index: 2;">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-check-circle fa-2x me-3" style="color: #D7A54F;"></i>
                                    <div>
                                        <div style="font-weight: 700; font-size: 18px;">Efekt</div>
                                        <div style="font-size: 14px; color: #666;">natychmiast</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Czym jest laminacja -->
        <div class="section-full p-t80 p-b50 bg-white">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-4" data-aos="fade-right">
                        <span class="badge px-4 py-2 mb-3" style="background: rgba(109, 53, 111, 0.1); color: #6D356F; font-size: 14px; border-radius: 50px;">
                            <i class="fa fa-lightbulb me-2"></i>Co to jest?
                        </span>
                        <h2 class="mb-4" style="color: #6D356F; font-weight: 700; font-size: 42px;">
                            Czym jest laminacja brwi?
                        </h2>
                        <p class="lead mb-4" style="color: #444; line-height: 1.8;">
                            <strong>Laminacja brwi</strong> (brow lamination) to innowacyjny zabieg kosmetyczny,
                            który polega na <strong>trwałym ułożeniu i wyprostowaniu włosków brwi</strong>
                            za pomocą specjalistycznych preparatów.
                        </p>
                        <p style="color: #666; line-height: 1.8; font-size: 16px;">
                            Podczas zabiegu specjalne preparaty przenikają w strukturę włosa, zmiękczając go
                            i czyniąc podatnym na modelowanie. Stylistka układa włoski w pożądanym kierunku –
                            najczęściej w górę, co optycznie powiększa oko i daje efekt tzw. <strong>„brwi na mydełko"</strong> (soap brows).
                        </p>

                        <div class="mt-5">
                            <div class="d-flex align-items-start mb-4">
                                <div class="me-3" style="min-width: 50px; height: 50px; background: linear-gradient(135deg, #6D356F, #9F5BA4); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div>
                                    <h5 style="color: #6D356F; font-weight: 600; margin-bottom: 5px;">Elastyczne i łatwe do układania</h5>
                                    <p class="mb-0" style="color: #666;">Włoski stają się miękkie i podatne na stylizację</p>
                                </div>
                            </div>

                            <div class="d-flex align-items-start mb-4">
                                <div class="me-3" style="min-width: 50px; height: 50px; background: linear-gradient(135deg, #D7A54F, #E8C068); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div>
                                    <h5 style="color: #6D356F; font-weight: 600; margin-bottom: 5px;">Optycznie gęstsze brwi</h5>
                                    <p class="mb-0" style="color: #666;">Efekt pełniejszych, bardziej wyrazistych brwi</p>
                                </div>
                            </div>

                            <div class="d-flex align-items-start">
                                <div class="me-3" style="min-width: 50px; height: 50px; background: linear-gradient(135deg, #6D356F, #9F5BA4); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div>
                                    <h5 style="color: #6D356F; font-weight: 600; margin-bottom: 5px;">Oszczędność czasu</h5>
                                    <p class="mb-0" style="color: #666;">Bez codziennej stylizacji i malowania brwi</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6" data-aos="fade-left">
                        <div class="position-relative">
                            <img src="images/oferta/brow-lamination-process.jpg" alt="Proces laminacji" class="img-fluid rounded shadow-lg" style="border-radius: 25px !important;">

                            <!-- Overlay card -->
                            <div class="position-absolute" style="top: 30px; left: -30px; background: linear-gradient(135deg, rgba(109, 53, 111, 0.95), rgba(159, 91, 164, 0.95)); padding: 30px; border-radius: 20px; max-width: 280px; box-shadow: 0 15px 40px rgba(109, 53, 111, 0.4);">
                                <div class="text-white">
                                    <i class="fa fa-magic fa-3x mb-3" style="color: #D7A54F;"></i>
                                    <h4 class="mb-2" style="font-weight: 700;">Kompleksowy pakiet</h4>
                                    <p class="mb-0" style="opacity: 0.9; font-size: 14px;">Laminacja + architektura + farbka = perfekcyjne brwi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Przebieg zabiegu - 5 etapów -->
        <div class="section-full p-t80 p-b80" style="background: linear-gradient(180deg, #f8f9fa 0%, #fff 100%);">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-12 text-center" data-aos="fade-up">
                        <span class="badge px-4 py-2 mb-3" style="background: rgba(215, 165, 79, 0.1); color: #D7A54F; font-size: 14px; border-radius: 50px;">
                            <i class="fa fa-list-ol me-2"></i>Krok po kroku
                        </span>
                        <h2 class="mb-4" style="color: #6D356F; font-weight: 700; font-size: 42px;">
                            Przebieg zabiegu laminacji brwi
                        </h2>
                        <p class="lead" style="color: #444; line-height: 1.8;">
                            Wizyta w Magic Salon trwa około <strong>60-75 minut</strong>.
                            Zobacz jak przebiega cały proces.
                        </p>
                    </div>
                </div>

                <div class="row g-4">
                    <!-- Etap 1 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                        <div class="h-100 p-4 position-relative overflow-hidden" style="background: #fff; border-radius: 25px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08); transition: all 0.3s;" onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 50px rgba(109, 53, 111, 0.15)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 30px rgba(0, 0, 0, 0.08)';">
                            <div class="position-absolute" style="top: -20px; right: -20px; width: 120px; height: 120px; background: linear-gradient(135deg, rgba(109, 53, 111, 0.05), transparent); border-radius: 50%;"></div>

                            <div class="d-flex align-items-center mb-4">
                                <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #6D356F, #9F5BA4); border-radius: 20px; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 28px; font-weight: 800; box-shadow: 0 10px 25px rgba(109, 53, 111, 0.3);">
                                    1
                                </div>
                                <div class="ms-3">
                                    <div style="font-size: 12px; color: #999; text-transform: uppercase; letter-spacing: 1px;">Etap 1</div>
                                    <h4 style="color: #6D356F; font-weight: 700; margin: 0;">Konsultacja</h4>
                                </div>
                            </div>

                            <div class="mb-3" style="color: #D7A54F; font-weight: 600;">
                                <i class="fa fa-clock me-2"></i>10-15 minut
                            </div>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2" style="color: #666;"><i class="fa fa-check-circle me-2" style="color: #D7A54F;"></i>Wywiad i analiza</li>
                                <li class="mb-2" style="color: #666;"><i class="fa fa-check-circle me-2" style="color: #D7A54F;"></i>Ocena kształtu twarzy</li>
                                <li style="color: #666;"><i class="fa fa-check-circle me-2" style="color: #D7A54F;"></i>Oczyszczenie brwi</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Etap 2 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="h-100 p-4 position-relative overflow-hidden" style="background: #fff; border-radius: 25px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08); transition: all 0.3s;" onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 50px rgba(215, 165, 79, 0.15)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 30px rgba(0, 0, 0, 0.08)';">
                            <div class="position-absolute" style="top: -20px; right: -20px; width: 120px; height: 120px; background: linear-gradient(135deg, rgba(215, 165, 79, 0.05), transparent); border-radius: 50%;"></div>

                            <div class="d-flex align-items-center mb-4">
                                <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #D7A54F, #E8C068); border-radius: 20px; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 28px; font-weight: 800; box-shadow: 0 10px 25px rgba(215, 165, 79, 0.3);">
                                    2
                                </div>
                                <div class="ms-3">
                                    <div style="font-size: 12px; color: #999; text-transform: uppercase; letter-spacing: 1px;">Etap 2</div>
                                    <h4 style="color: #6D356F; font-weight: 700; margin: 0;">Architektura</h4>
                                </div>
                            </div>

                            <div class="mb-3" style="color: #6D356F; font-weight: 600;">
                                <i class="fa fa-clock me-2"></i>10-15 minut
                            </div>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2" style="color: #666;"><i class="fa fa-check-circle me-2" style="color: #6D356F;"></i>Mapping brwi</li>
                                <li class="mb-2" style="color: #666;"><i class="fa fa-check-circle me-2" style="color: #6D356F;"></i>Akceptacja projektu</li>
                                <li style="color: #666;"><i class="fa fa-check-circle me-2" style="color: #6D356F;"></i>Regulacja pęsetą</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Etap 3 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="h-100 p-4 position-relative overflow-hidden" style="background: #fff; border-radius: 25px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08); transition: all 0.3s;" onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 50px rgba(109, 53, 111, 0.15)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 30px rgba(0, 0, 0, 0.08)';">
                            <div class="position-absolute" style="top: -20px; right: -20px; width: 120px; height: 120px; background: linear-gradient(135deg, rgba(109, 53, 111, 0.05), transparent); border-radius: 50%;"></div>

                            <div class="d-flex align-items-center mb-4">
                                <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #6D356F, #9F5BA4); border-radius: 20px; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 28px; font-weight: 800; box-shadow: 0 10px 25px rgba(109, 53, 111, 0.3);">
                                    3
                                </div>
                                <div class="ms-3">
                                    <div style="font-size: 12px; color: #999; text-transform: uppercase; letter-spacing: 1px;">Etap 3</div>
                                    <h4 style="color: #6D356F; font-weight: 700; margin: 0;">Laminacja</h4>
                                </div>
                            </div>

                            <div class="mb-3" style="color: #D7A54F; font-weight: 600;">
                                <i class="fa fa-clock me-2"></i>25-30 minut
                            </div>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2" style="color: #666;"><i class="fa fa-check-circle me-2" style="color: #D7A54F;"></i>Aktywator (8-12 min)</li>
                                <li class="mb-2" style="color: #666;"><i class="fa fa-check-circle me-2" style="color: #D7A54F;"></i>Układanie włosków</li>
                                <li class="mb-2" style="color: #666;"><i class="fa fa-check-circle me-2" style="color: #D7A54F;"></i>Neutralizator (8-10 min)</li>
                                <li style="color: #666;"><i class="fa fa-check-circle me-2" style="color: #D7A54F;"></i>Odżywienie keratyną</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Etap 4 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="h-100 p-4 position-relative overflow-hidden" style="background: #fff; border-radius: 25px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08); transition: all 0.3s;" onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 50px rgba(215, 165, 79, 0.15)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 30px rgba(0, 0, 0, 0.08)';">
                            <div class="position-absolute" style="top: -20px; right: -20px; width: 120px; height: 120px; background: linear-gradient(135deg, rgba(215, 165, 79, 0.05), transparent); border-radius: 50%;"></div>

                            <div class="d-flex align-items-center mb-4">
                                <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #D7A54F, #E8C068); border-radius: 20px; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 28px; font-weight: 800; box-shadow: 0 10px 25px rgba(215, 165, 79, 0.3);">
                                    4
                                </div>
                                <div class="ms-3">
                                    <div style="font-size: 12px; color: #999; text-transform: uppercase; letter-spacing: 1px;">Etap 4</div>
                                    <h4 style="color: #6D356F; font-weight: 700; margin: 0;">Farbowanie</h4>
                                </div>
                            </div>

                            <div class="mb-3" style="color: #6D356F; font-weight: 600;">
                                <i class="fa fa-clock me-2"></i>10-15 minut
                            </div>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2" style="color: #666;"><i class="fa fa-check-circle me-2" style="color: #6D356F;"></i>Dobór odcienia</li>
                                <li class="mb-2" style="color: #666;"><i class="fa fa-check-circle me-2" style="color: #6D356F;"></i>Aplikacja farbki</li>
                                <li style="color: #666;"><i class="fa fa-check-circle me-2" style="color: #6D356F;"></i>Czas działania</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Etap 5 -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="h-100 p-4 position-relative overflow-hidden" style="background: #fff; border-radius: 25px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08); transition: all 0.3s;" onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 50px rgba(109, 53, 111, 0.15)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 30px rgba(0, 0, 0, 0.08)';">
                            <div class="position-absolute" style="top: -20px; right: -20px; width: 120px; height: 120px; background: linear-gradient(135deg, rgba(109, 53, 111, 0.05), transparent); border-radius: 50%;"></div>

                            <div class="d-flex align-items-center mb-4">
                                <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #6D356F, #9F5BA4); border-radius: 20px; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 28px; font-weight: 800; box-shadow: 0 10px 25px rgba(109, 53, 111, 0.3);">
                                    5
                                </div>
                                <div class="ms-3">
                                    <div style="font-size: 12px; color: #999; text-transform: uppercase; letter-spacing: 1px;">Etap 5</div>
                                    <h4 style="color: #6D356F; font-weight: 700; margin: 0;">Finalizacja</h4>
                                </div>
                            </div>

                            <div class="mb-3" style="color: #D7A54F; font-weight: 600;">
                                <i class="fa fa-clock me-2"></i>5 minut
                            </div>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2" style="color: #666;"><i class="fa fa-check-circle me-2" style="color: #D7A54F;"></i>Aplikacja olejku</li>
                                <li class="mb-2" style="color: #666;"><i class="fa fa-check-circle me-2" style="color: #D7A54F;"></i>Zalecenia pielęgnacyjne</li>
                                <li style="color: #666;"><i class="fa fa-check-circle me-2" style="color: #D7A54F;"></i>Perfekcyjny efekt!</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Before After visual -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="h-100 p-5 text-center d-flex flex-column justify-content-center" style="background: linear-gradient(135deg, #6D356F, #9F5BA4); border-radius: 25px; box-shadow: 0 15px 40px rgba(109, 53, 111, 0.3);">
                            <i class="fa fa-star fa-4x mb-3 text-white" style="color: #D7A54F !important;"></i>
                            <h3 class="text-white mb-3" style="font-weight: 700;">Efekt końcowy</h3>
                            <p class="text-white mb-0" style="opacity: 0.95; font-size: 16px;">
                                Piękne, perfekcyjnie ułożone brwi gotowe do podziwiania!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Dla kogo -->
        <div class="section-full p-t80 p-b80 bg-white">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-12 text-center" data-aos="fade-up">
                        <span class="badge px-4 py-2 mb-3" style="background: rgba(109, 53, 111, 0.1); color: #6D356F; font-size: 14px; border-radius: 50px;">
                            <i class="fa fa-users me-2"></i>Dla kogo?
                        </span>
                        <h2 class="mb-4" style="color: #6D356F; font-weight: 700; font-size: 42px;">
                            Dla kogo jest laminacja brwi?
                        </h2>
                        <p class="lead" style="color: #444; line-height: 1.8;">
                            Laminacja brwi to idealny zabieg dla każdej kobiety pragnącej pięknych,
                            bez wysiłku stylizowanych brwi.
                        </p>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="0">
                        <div class="text-center p-5 h-100" style="background: linear-gradient(180deg, #f8f9fa 0%, #fff 100%); border-radius: 25px; border: 2px solid rgba(109, 53, 111, 0.1); transition: all 0.3s;" onmouseover="this.style.borderColor='#6D356F'; this.style.transform='translateY(-5px)';" onmouseout="this.style.borderColor='rgba(109, 53, 111, 0.1)'; this.style.transform='translateY(0)';">
                            <div class="mb-4" style="width: 80px; height: 80px; background: linear-gradient(135deg, #6D356F, #9F5BA4); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                                <i class="fa fa-wind fa-2x text-white"></i>
                            </div>
                            <h4 style="color: #6D356F; font-weight: 700; margin-bottom: 15px;">Niesforne brwi</h4>
                            <p style="color: #666; line-height: 1.8;">
                                Włoski rosną w różnych kierunkach i sterczą? Laminacja je ujarzmia i porządkuje.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                        <div class="text-center p-5 h-100" style="background: linear-gradient(180deg, #f8f9fa 0%, #fff 100%); border-radius: 25px; border: 2px solid rgba(215, 165, 79, 0.1); transition: all 0.3s;" onmouseover="this.style.borderColor='#D7A54F'; this.style.transform='translateY(-5px)';" onmouseout="this.style.borderColor='rgba(215, 165, 79, 0.1)'; this.style.transform='translateY(0)';">
                            <div class="mb-4" style="width: 80px; height: 80px; background: linear-gradient(135deg, #D7A54F, #E8C068); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                                <i class="fa fa-feather fa-2x text-white"></i>
                            </div>
                            <h4 style="color: #6D356F; font-weight: 700; margin-bottom: 15px;">Cienkie brwi</h4>
                            <p style="color: #666; line-height: 1.8;">
                                Rzadkie włoski? Laminacja optycznie zagęszcza brwi i daje efekt pełności.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="text-center p-5 h-100" style="background: linear-gradient(180deg, #f8f9fa 0%, #fff 100%); border-radius: 25px; border: 2px solid rgba(109, 53, 111, 0.1); transition: all 0.3s;" onmouseover="this.style.borderColor='#6D356F'; this.style.transform='translateY(-5px)';" onmouseout="this.style.borderColor='rgba(109, 53, 111, 0.1)'; this.style.transform='translateY(0)';">
                            <div class="mb-4" style="width: 80px; height: 80px; background: linear-gradient(135deg, #6D356F, #9F5BA4); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                                <i class="fa fa-clock fa-2x text-white"></i>
                            </div>
                            <h4 style="color: #6D356F; font-weight: 700; margin-bottom: 15px;">Oszczędność czasu</h4>
                            <p style="color: #666; line-height: 1.8;">
                                Zamiast codziennego rysowania – kilka tygodni bez stylizacji brwi.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                        <div class="text-center p-5 h-100" style="background: linear-gradient(180deg, #f8f9fa 0%, #fff 100%); border-radius: 25px; border: 2px solid rgba(215, 165, 79, 0.1); transition: all 0.3s;" onmouseover="this.style.borderColor='#D7A54F'; this.style.transform='translateY(-5px)';" onmouseout="this.style.borderColor='rgba(215, 165, 79, 0.1)'; this.style.transform='translateY(0)';">
                            <div class="mb-4" style="width: 80px; height: 80px; background: linear-gradient(135deg, #D7A54F, #E8C068); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                                <i class="fa fa-sun fa-2x text-white"></i>
                            </div>
                            <h4 style="color: #6D356F; font-weight: 700; margin-bottom: 15px;">Jasne brwi</h4>
                            <p style="color: #666; line-height: 1.8;">
                                W połączeniu z farbką daje wyrazisty efekt nawet na bardzo jasnych włoskach.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                        <div class="text-center p-5 h-100" style="background: linear-gradient(180deg, #f8f9fa 0%, #fff 100%); border-radius: 25px; border: 2px solid rgba(109, 53, 111, 0.1); transition: all 0.3s;" onmouseover="this.style.borderColor='#6D356F'; this.style.transform='translateY(-5px)';" onmouseout="this.style.borderColor='rgba(109, 53, 111, 0.1)'; this.style.transform='translateY(0)';">
                            <div class="mb-4" style="width: 80px; height: 80px; background: linear-gradient(135deg, #6D356F, #9F5BA4); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                                <i class="fa fa-heart fa-2x text-white"></i>
                            </div>
                            <h4 style="color: #6D356F; font-weight: 700; margin-bottom: 15px;">Naturalny efekt</h4>
                            <p style="color: #666; line-height: 1.8;">
                                Podkreśla naturalne piękno bez efektu sztuczności makijażu permanentnego.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="500">
                        <div class="text-center p-5 h-100" style="background: linear-gradient(180deg, #f8f9fa 0%, #fff 100%); border-radius: 25px; border: 2px solid rgba(215, 165, 79, 0.1); transition: all 0.3s;" onmouseover="this.style.borderColor='#D7A54F'; this.style.transform='translateY(-5px)';" onmouseout="this.style.borderColor='rgba(215, 165, 79, 0.1)'; this.style.transform='translateY(0)';">
                            <div class="mb-4" style="width: 80px; height: 80px; background: linear-gradient(135deg, #D7A54F, #E8C068); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                                <i class="fa fa-camera fa-2x text-white"></i>
                            </div>
                            <h4 style="color: #6D356F; font-weight: 700; margin-bottom: 15px;">Ważne wydarzenia</h4>
                            <p style="color: #666; line-height: 1.8;">
                                Ślub, sesja zdjęciowa, wakacje – perfekcyjne brwi przez wiele tygodni.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cennik -->
        <div class="section-full p-t80 p-b80" style="background: linear-gradient(135deg, rgba(109, 53, 111, 0.03) 0%, rgba(215, 165, 79, 0.03) 100%);">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-12 text-center" data-aos="fade-up">
                        <span class="badge px-4 py-2 mb-3" style="background: rgba(215, 165, 79, 0.1); color: #D7A54F; font-size: 14px; border-radius: 50px;">
                            <i class="fa fa-tag me-2"></i>Atrakcyjne ceny
                        </span>
                        <h2 class="mb-4" style="color: #6D356F; font-weight: 700; font-size: 42px;">
                            Cennik laminacji brwi
                        </h2>
                        <p class="lead" style="color: #444; line-height: 1.8;">
                            Jakość profesjonalnych gabinetów miejskich w cenie podmiejskiej.
                        </p>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-6 mb-6" data-aos="zoom-in" data-aos-delay="0">
                        <div class="position-relative">
                            <div class="position-absolute" style="top: -15px; right: 30px; background: #D7A54F; color: #fff; padding: 8px 25px; border-radius: 50px; font-weight: 700; box-shadow: 0 8px 20px rgba(215, 165, 79, 0.4); z-index: 1; font-size: 14px;">
                                BESTSELLER
                            </div>
                            <div class="card h-100 border-0 shadow-lg" style="border-radius: 30px; border: 3px solid #D7A54F; overflow: hidden;">
                                <div class="p-5">
                                    <div class="text-center mb-4">
                                        <i class="fa fa-crown fa-4x mb-3" style="color: #D7A54F;"></i>
                                        <h3 style="color: #6D356F; font-weight: 700; font-size: 28px; margin-bottom: 10px;">Pakiet Kompleksowy</h3>
                                        <p style="color: #666; margin: 0;">Wszystko czego potrzebujesz</p>
                                    </div>

                                    <div class="text-center mb-4 p-4" style="background: linear-gradient(135deg, rgba(109, 53, 111, 0.05), rgba(215, 165, 79, 0.05)); border-radius: 20px;">
                                        <div style="font-size: 64px; font-weight: 800; color: #6D356F; line-height: 1;">140 zł</div>
                                        <p class="mb-0 mt-2" style="color: #666;">Kompleksowa usługa</p>
                                    </div>

                                    <div class="mb-4">
                                        <h5 style="color: #6D356F; font-weight: 600; margin-bottom: 20px;">W cenie otrzymujesz:</h5>
                                        <ul class="list-unstyled">
                                            <li class="mb-3 d-flex align-items-start">
                                                <i class="fa fa-check-circle fa-lg me-3 mt-1" style="color: #D7A54F;"></i>
                                                <span style="color: #666;"><strong>Konsultacja i analiza</strong> kształtu twarzy</span>
                                            </li>
                                            <li class="mb-3 d-flex align-items-start">
                                                <i class="fa fa-check-circle fa-lg me-3 mt-1" style="color: #D7A54F;"></i>
                                                <span style="color: #666;"><strong>Architektura brwi</strong> (mapping, regulacja)</span>
                                            </li>
                                            <li class="mb-3 d-flex align-items-start">
                                                <i class="fa fa-check-circle fa-lg me-3 mt-1" style="color: #D7A54F;"></i>
                                                <span style="color: #666;"><strong>Pełna laminacja</strong> z odżywieniem keratynowym</span>
                                            </li>
                                            <li class="mb-3 d-flex align-items-start">
                                                <i class="fa fa-check-circle fa-lg me-3 mt-1" style="color: #D7A54F;"></i>
                                                <span style="color: #666;"><strong>Farbowanie</strong> profesjonalną farbką</span>
                                            </li>
                                            <li class="d-flex align-items-start">
                                                <i class="fa fa-check-circle fa-lg me-3 mt-1" style="color: #D7A54F;"></i>
                                                <span style="color: #666;"><strong>Zalecenia</strong> pozabiegowe</span>
                                            </li>
                                        </ul>
                                    </div>

                                    <a href="https://booksy.magicsalon.pl" target="_blank" class="btn btn-lg w-100" style="background: linear-gradient(135deg, #6D356F, #9F5BA4); color: #fff; border: none; border-radius: 50px; padding: 15px; font-weight: 600; transition: all 0.3s; box-shadow: 0 10px 30px rgba(109, 53, 111, 0.3);" onmouseover="this.style.transform='translateY(-3px) scale(1.02)'; this.style.boxShadow='0 15px 40px rgba(109, 53, 111, 0.4)';" onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='0 10px 30px rgba(109, 53, 111, 0.3)';">
                                        <i class="fa fa-calendar-check me-2"></i>Zarezerwuj termin
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 mb-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="card h-100 border-0 shadow" style="border-radius: 30px; border: 2px solid rgba(109, 53, 111, 0.1);">
                            <div class="p-5">
                                <div class="text-center mb-4">
                                    <i class="fa fa-palette fa-4x mb-3" style="color: #6D356F;"></i>
                                    <h3 style="color: #6D356F; font-weight: 700; font-size: 28px; margin-bottom: 10px;">Inne usługi brwi</h3>
                                    <p style="color: #666; margin: 0;">Uzupełniające stylizacje</p>
                                </div>

                                <div class="mb-4">
                                    <div class="d-flex justify-content-between align-items-center p-3 mb-3" style="background: #f8f9fa; border-radius: 15px; border-left: 4px solid #6D356F;">
                                        <div>
                                            <div style="font-weight: 600; color: #6D356F;">Henna brwi z regulacją</div>
                                            <small style="color: #999;">Intensywny kolor na 2-4 tygodnie</small>
                                        </div>
                                        <div style="font-size: 24px; font-weight: 700; color: #6D356F;">50 zł</div>
                                    </div>

                                    <div class="d-flex justify-content-between align-items-center p-3" style="background: #f8f9fa; border-radius: 15px; border-left: 4px solid #D7A54F;">
                                        <div>
                                            <div style="font-weight: 600; color: #6D356F;">Henna brwi + henna rzęs</div>
                                            <small style="color: #999;">Komplet na brwi i rzęsy</small>
                                        </div>
                                        <div style="font-size: 24px; font-weight: 700; color: #6D356F;">65 zł</div>
                                    </div>
                                </div>

                                <div class="p-4 text-center" style="background: linear-gradient(135deg, rgba(109, 53, 111, 0.05), rgba(215, 165, 79, 0.05)); border-radius: 20px;">
                                    <i class="fa fa-info-circle mb-2" style="color: #6D356F;"></i>
                                    <p class="mb-0 small" style="color: #666;">
                                        <strong>Porady bezpłatnie!</strong><br/>
                                        Skontaktuj się z nami, aby dobrać odpowiednią usługę.
                                    </p>
                                </div>
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
                            <i class="fa fa-question-circle me-2"></i>FAQ
                        </span>
                        <h2 class="mb-4" style="color: #6D356F; font-weight: 700; font-size: 42px;">
                            Najczęściej zadawane pytania
                        </h2>
                        <p class="lead" style="color: #444; line-height: 1.8;">
                            Odpowiadamy na wszystkie Twoje wątpliwości dotyczące laminacji brwi.
                        </p>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="accordion" id="faqAccordion">

                            <div class="accordion-item mb-3 border-0 shadow-sm" style="border-radius: 20px; overflow: hidden;" data-aos="fade-up" data-aos-delay="0">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" style="background: #fff; color: #6D356F; font-weight: 600; padding: 25px; font-size: 17px;">
                                        <i class="fa fa-heartbeat me-3" style="color: #D7A54F;"></i>
                                        Czy laminacja brwi boli?
                                    </button>
                                </h3>
                                <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body" style="padding: 25px; color: #666; line-height: 1.8;">
                                        <strong>Nie.</strong> Zabieg jest całkowicie bezbolesny i nieinwazyjny. Możesz odczuwać delikatne mrowienie podczas działania preparatów, ale nie jest to nieprzyjemne.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item mb-3 border-0 shadow-sm" style="border-radius: 20px; overflow: hidden;" data-aos="fade-up" data-aos-delay="100">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" style="background: #fff; color: #6D356F; font-weight: 600; padding: 25px; font-size: 17px;">
                                        <i class="fa fa-clock me-3" style="color: #D7A54F;"></i>
                                        Jak długo trwa zabieg?
                                    </button>
                                </h3>
                                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body" style="padding: 25px; color: #666; line-height: 1.8;">
                                        Kompletny zabieg (konsultacja + architektura + laminacja + farbowanie) trwa około <strong>60-75 minut</strong>. To czas, który warto zainwestować w perfekcyjny wygląd na kolejne tygodnie!
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item mb-3 border-0 shadow-sm" style="border-radius: 20px; overflow: hidden;" data-aos="fade-up" data-aos-delay="200">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" style="background: #fff; color: #6D356F; font-weight: 600; padding: 25px; font-size: 17px;">
                                        <i class="fa fa-calendar-alt me-3" style="color: #D7A54F;"></i>
                                        Jak długo utrzymuje się efekt?
                                    </button>
                                </h3>
                                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body" style="padding: 25px; color: #666; line-height: 1.8;">
                                        Efekt laminacji brwi utrzymuje się <strong>od 4 do 6 tygodni</strong>, a w niektórych przypadkach nawet do 8 tygodni. Trwałość zależy od typu skóry, tempa wzrostu włosów i domowej pielęgnacji.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item mb-3 border-0 shadow-sm" style="border-radius: 20px; overflow: hidden;" data-aos="fade-up" data-aos-delay="300">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" style="background: #fff; color: #6D356F; font-weight: 600; padding: 25px; font-size: 17px;">
                                        <i class="fa fa-scissors me-3" style="color: #D7A54F;"></i>
                                        Czy mogę robić laminację na przycięte brwi?
                                    </button>
                                </h3>
                                <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body" style="padding: 25px; color: #666; line-height: 1.8;">
                                        <strong>Nie.</strong> Przycięte brwi są bezwzględnym przeciwwskazaniem – włoski o różnej długości nie ułożą się prawidłowo i efekt będzie niesatysfakcjonujący. Poczekaj, aż brwi odrosną do naturalnej długości.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item mb-3 border-0 shadow-sm" style="border-radius: 20px; overflow: hidden;" data-aos="fade-up" data-aos-delay="400">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" style="background: #fff; color: #6D356F; font-weight: 600; padding: 25px; font-size: 17px;">
                                        <i class="fa fa-exclamation-triangle me-3" style="color: #D7A54F;"></i>
                                        Czy laminacja niszczy brwi?
                                    </button>
                                </h3>
                                <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body" style="padding: 25px; color: #666; line-height: 1.8;">
                                        <strong>Nie, jeśli jest wykonana prawidłowo</strong> przez doświadczoną stylistkę i nie częściej niż co 6-8 tygodni. W Magic Salon stosujemy preparaty z keratyną i składnikami odżywczymi, które <strong>wzmacniają włoski</strong>.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item border-0 shadow-sm" style="border-radius: 20px; overflow: hidden;" data-aos="fade-up" data-aos-delay="500">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6" style="background: #fff; color: #6D356F; font-weight: 600; padding: 25px; font-size: 17px;">
                                        <i class="fa fa-redo me-3" style="color: #D7A54F;"></i>
                                        Jak często mogę robić laminację?
                                    </button>
                                </h3>
                                <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body" style="padding: 25px; color: #666; line-height: 1.8;">
                                        Zalecamy powtarzanie zabiegu <strong>nie częściej niż co 6-8 tygodni</strong>, aby nie osłabiać struktury włosków. To optymalny czas, który zapewnia bezpieczeństwo i najlepsze efekty.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Final -->
        <div class="section-full p-t80 p-b80" style="background: linear-gradient(135deg, #6D356F 0%, #6D356F 50%, #6D356F 100%); position: relative; overflow: hidden;">
            <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: url('images/background/pattern-dots.png'); opacity: 0.1;"></div>

            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center" data-aos="zoom-in">
                        <div class="mb-4">
                            <i class="fa fa-stars fa-4x text-white mb-3" style="opacity: 0.9;"></i>
                        </div>
                        <h2 class="mb-4 text-white" style="font-weight: 800; font-size: 48px;">
                            Gotowy na perfekcyjne brwi?
                        </h2>
                        <p class="lead text-white mb-5" style="opacity: 0.95; font-size: 22px; line-height: 1.6;">
                            Umów się na <strong>laminację brwi</strong> w Magic Salon i zapomnij o codziennej stylizacji.<br/>
                            Efekt do 6 tygodni – gładkie, gęste, pięknie ułożone brwi!
                        </p>

                        <div class="d-flex flex-wrap gap-3 justify-content-center mb-5">
                            <a href="https://booksy.magicsalon.pl" target="_blank" class="btn btn-lg px-5 py-4" style="background: #fff; color: #6D356F; border: none; border-radius: 50px; font-weight: 700; font-size: 18px; transition: all 0.3s; box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);" onmouseover="this.style.transform='translateY(-5px) scale(1.05)'; this.style.boxShadow='0 20px 50px rgba(0, 0, 0, 0.4)';" onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='0 15px 40px rgba(0, 0, 0, 0.3)';">
                                <i class="fa fa-calendar-check me-2"></i>Zarezerwuj przez Booksy
                            </a>
                            <a href="tel:+48883481581" class="btn btn-lg px-5 py-4" style="background: rgba(255, 255, 255, 0.2); color: #fff; border: 2px solid #fff; backdrop-filter: blur(10px); border-radius: 50px; font-weight: 700; font-size: 18px; transition: all 0.3s;" onmouseover="this.style.background='#fff'; this.style.color='#6D356F';" onmouseout="this.style.background='rgba(255, 255, 255, 0.2)'; this.style.color='#fff';">
                                <i class="fa fa-phone me-2"></i>+48 883 481 581
                            </a>
                        </div>

                        <div class="row g-4 mt-4">
                            <div class="col-md-4">
                                <div class="p-3 rounded" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px);">
                                    <i class="fa fa-map-marker-alt fa-2x mb-2 text-white"></i>
                                    <div class="text-white small">ul. Borówkowa 13<br/>Dobrzykowice</div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-3 rounded" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px);">
                                    <i class="fa fa-clock fa-2x mb-2 text-white"></i>
                                    <div class="text-white small">Pon-Pt: 09:00-20:00<br/>Sob: 09:00-18:00</div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-3 rounded" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px);">
                                    <i class="fa fa-tag fa-2x mb-2 text-white"></i>
                                    <div class="text-white small">Kompleksowy pakiet<br/><strong>140 zł</strong></div>
                                </div>
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

    

    <!-- AOS Animation Library -->
    <link href="css/aos.css" rel="stylesheet">
    <script src="js/aos.js"></script>
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

        // Parallax effect
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const parallaxElements = document.querySelectorAll('[style*="background-attachment: fixed"]');
            parallaxElements.forEach(el => {
                el.style.backgroundPositionY = -(scrolled * 0.5) + 'px';
            });
        });
    </script>

    <!-- Footer -->
    <?php include 'partials/footer.php'; ?>
</div>
</body>
</html>
