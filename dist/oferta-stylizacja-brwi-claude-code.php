<?php

/**
 * MAGIC SALON - Oferta: Stylizacja Brwi (oferta-stylizacja-brwi-claude-code.php)
 * Wersja: 1.0 - Profesjonalna stylizacja brwi: henna, architektura, laminacja
 */

// Załaduj konfigurację
require_once __DIR__ . DIRECTORY_SEPARATOR . 'config.php';

// Konfiguracja meta tagów dla strony Stylizacja Brwi
$meta = [
    'title' => 'Stylizacja Brwi Dobrzykowice – Henna, Laminacja, Architektura | MAGIC SALON',
    'description' => 'Profesjonalna stylizacja brwi w Dobrzykowicach. Henna brwi 50 zł, Laminacja 140 zł. Architektura, regulacja, fluffy brows. Efekt do 6 tygodni!',
    'keywords' => 'stylizacja brwi dobrzykowice, henna brwi wrocław, laminacja brwi, architektura brwi, regulacja brwi nitką, fluffy brows, henna pudrowa, geometria brwi, salon kosmetyczny dobrzykowice, magic salon',
    'canonical' => BASE_URL . '/oferta-stylizacja-brwi-claude-code.php',
    'robots' => 'index, follow, max-image-preview:large',
    'og' => [
        'type' => 'website',
        'title' => 'Stylizacja Brwi – Architektura, Henna, Laminacja | MAGIC SALON',
        'description' => 'Odkryj sztukę idealnych brwi! Henna pudrowa, laminacja fluffy brows, profesjonalna architektura. Efekt naturalny i długotrwały.',
        'url' => BASE_URL . '/oferta-stylizacja-brwi-claude-code.php',
        'image' => BASE_URL . '/images/oferta-details/stylizacja-brwi-og.jpg',
    ],
    'twitter' => [
        'card' => 'summary_large_image',
        'title' => 'Stylizacja Brwi – Magic Salon',
        'description' => 'Perfekcyjne brwi na 6 tygodni!',
    ],
    'schema' => [
        'enabled' => true,
        'type' => 'Service',
        'name' => 'Stylizacja Brwi – Architektura, Henna i Laminacja',
        'description' => 'Kompleksowa stylizacja brwi łącząca architekturę, koloryzację henną pudrową i laminację dla efektu fluffy brows.',
        'provider' => [
            '@type' => 'BeautySalon',
            'name' => 'MAGIC SALON',
            'address' => [
                'streetAddress' => 'ul. Borówkowa 13',
                'postalCode' => '55-002',
                'addressLocality' => 'Dobrzykowice',
                'addressCountry' => 'PL'
            ],
            'telephone' => '+48883481581',
            'priceRange' => '50-140 PLN'
        ],
        'areaServed' => [
            '@type' => 'City',
            'name' => 'Dobrzykowice'
        ],
        'offers' => [
            [
                '@type' => 'Offer',
                'name' => 'Henna Brwi z Regulacją',
                'price' => '50',
                'priceCurrency' => 'PLN'
            ],
            [
                '@type' => 'Offer',
                'name' => 'Henna Brwi + Henna Rzęs',
                'price' => '65',
                'priceCurrency' => 'PLN'
            ],
            [
                '@type' => 'Offer',
                'name' => 'Laminacja + Architektura + Farbka',
                'price' => '140',
                'priceCurrency' => 'PLN'
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
            $banner_img = 'images/banner/gallery-banner.jpg';
            $page_title = 'Stylizacja Brwi';
            $page_desc = 'Odkryj sztukę idealnych brwi w Magic Salon – profesjonalna stylizacja łącząca architekturę, hennę pudrową i laminację dla perfekcyjnego, długotrwałego efektu!';
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
                    'label' => 'Stylizacja Brwi',
                    'url' => '',
                    'icon' => ''
                ]
            ];

            include 'partials/breadcrumbs.php';
            ?>

            <!--====== Start Main Content ======-->

            <!-- Hero Section with Circular Orbit Design -->
            <div style="position: relative; background: radial-gradient(circle at center, #9F5BA4 0%, #6D356F 100%); padding: 120px 0; overflow: hidden;">
                <!-- Animated Circles -->
                <div style="position: absolute; top: 10%; left: 10%; width: 200px; height: 200px; border: 2px solid rgba(215,165,79,0.3); border-radius: 50%; animation: rotate 20s linear infinite;"></div>
                <div style="position: absolute; bottom: 10%; right: 15%; width: 150px; height: 150px; border: 2px solid rgba(255,255,255,0.2); border-radius: 50%; animation: rotate 15s linear infinite reverse;"></div>

                <div class="container" style="position: relative; z-index: 2;">
                    <div class="row align-items-center">
                        <div class="col-lg-6" data-aos="fade-right">
                            <div style="color: white;">
                                <div style="display: inline-block; background: rgba(215,165,79,0.2); padding: 10px 25px; border-radius: 30px; margin-bottom: 20px;">
                                    <span style="color: #D7A54F; font-size: 14px; font-weight: 600; letter-spacing: 2px;">✨ PROFESJONALNA STYLIZACJA</span>
                                </div>
                                <h1 style="font-size: 56px; font-weight: 700; color: white; margin-bottom: 20px; line-height: 1.2;">
                                    Stylizacja Brwi
                                </h1>
                                <p style="font-size: 20px; color: #E8C068; font-weight: 600; margin-bottom: 25px;">
                                    Architektura • Henna • Laminacja
                                </p>
                                <p style="font-size: 18px; line-height: 1.8; color: rgba(255,255,255,0.9); margin-bottom: 40px;">
                                    Brwi to <strong>najważniejszy element twarzy</strong> – rama dla Twoich oczu, która odmienia całą twarz.
                                    Profesjonalna stylizacja w Magic Salon to klucz do harmonijnego wyglądu i <strong>oszczędność 15 minut każdego ranka</strong>!
                                </p>

                                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin-bottom: 40px;">
                                    <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(10px); padding: 20px; border-radius: 15px; border: 1px solid rgba(255,255,255,0.2);">
                                        <div style="font-size: 32px; font-weight: 700; color: #D7A54F; margin-bottom: 5px;">4-6</div>
                                        <div style="color: white; font-size: 14px;">tygodni efektu</div>
                                    </div>
                                    <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(10px); padding: 20px; border-radius: 15px; border: 1px solid rgba(255,255,255,0.2);">
                                        <div style="font-size: 32px; font-weight: 700; color: #D7A54F; margin-bottom: 5px;">Od 50 zł</div>
                                        <div style="color: white; font-size: 14px;">już od</div>
                                    </div>
                                </div>

                                <a href="https://booksy.magicsalon.pl" target="_blank" style="background: linear-gradient(135deg, #D7A54F, #E8C068); color: #222; padding: 18px 45px; border-radius: 50px; font-weight: 700; font-size: 18px; text-decoration: none; display: inline-block; box-shadow: 0 10px 30px rgba(215,165,79,0.5); transition: all 0.3s ease;">
                                    <i class="fa fa-calendar-check" style="margin-right: 10px;"></i>
                                    Zarezerwuj Termin
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                            <div style="position: relative; text-align: center;">
                                <!-- Central Circle -->
                                <div style="width: 350px; height: 350px; margin: 0 auto; position: relative;">
                                    <div style="width: 100%; height: 100%; background: rgba(255,255,255,0.15); backdrop-filter: blur(10px); border-radius: 50%; border: 3px solid rgba(255,255,255,0.3); display: flex; align-items: center; justify-content: center; flex-direction: column;">
                                        <i class="fa fa-eye" style="font-size: 80px; color: #D7A54F; margin-bottom: 20px;"></i>
                                        <h3 style="color: white; font-size: 24px; font-weight: 700;">Perfekcyjne Brwi</h3>
                                        <p style="color: rgba(255,255,255,0.8); font-size: 16px; margin-top: 10px;">Na 6 Tygodni</p>
                                    </div>

                                    <!-- Orbiting Elements -->
                                    <div style="position: absolute; top: 0; left: 50%; transform: translateX(-50%) translateY(-80px); animation: float 4s ease-in-out infinite;">
                                        <div style="background: linear-gradient(135deg, #D7A54F, #E8C068); width: 100px; height: 100px; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 10px 30px rgba(215,165,79,0.4);">
                                            <span style="color: white; font-weight: 700; font-size: 16px; text-align: center;">Henna<br>50 zł</span>
                                        </div>
                                    </div>

                                    <div style="position: absolute; bottom: 0; left: 50%; transform: translateX(-50%) translateY(80px); animation: float 4s ease-in-out infinite 1s;">
                                        <div style="background: linear-gradient(135deg, #6D356F, #9F5BA4); width: 100px; height: 100px; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 10px 30px rgba(109,53,111,0.4);">
                                            <span style="color: white; font-weight: 700; font-size: 16px; text-align: center;">Laminacja<br>140 zł</span>
                                        </div>
                                    </div>

                                    <div style="position: absolute; top: 50%; left: 0; transform: translateX(-80px) translateY(-50%); animation: float 4s ease-in-out infinite 2s;">
                                        <div style="background: linear-gradient(135deg, #D7A54F, #E8C068); width: 90px; height: 90px; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 10px 30px rgba(215,165,79,0.4);">
                                            <span style="color: white; font-weight: 700; font-size: 14px; text-align: center;">Regulacja</span>
                                        </div>
                                    </div>

                                    <div style="position: absolute; top: 50%; right: 0; transform: translateX(80px) translateY(-50%); animation: float 4s ease-in-out infinite 3s;">
                                        <div style="background: linear-gradient(135deg, #6D356F, #9F5BA4); width: 90px; height: 90px; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 10px 30px rgba(109,53,111,0.4);">
                                            <span style="color: white; font-weight: 700; font-size: 14px; text-align: center;">Architektura</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <style>
                    @keyframes rotate {
                        from { transform: rotate(0deg); }
                        to { transform: rotate(360deg); }
                    }
                    @keyframes float {
                        0%, 100% { transform: translateY(0px); }
                        50% { transform: translateY(-20px); }
                    }
                </style>
            </div>

            <!-- Why Eyebrows Matter -->
            <div class="container" style="padding: 80px 0;">
                <div class="text-center" style="margin-bottom: 60px;" data-aos="fade-up">
                    <h2 style="font-size: 42px; color: #6D356F; font-weight: 700; margin-bottom: 20px;">
                        Dlaczego Brwi Są <span style="color: #D7A54F;">Tak Ważne</span>?
                    </h2>
                    <p style="font-size: 18px; color: #444; max-width: 800px; margin: 0 auto;">
                        To nie tylko ozdoba – to najważniejszy element komunikacji niewerbalnej
                    </p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="0">
                        <div style="text-align: center; padding: 40px; background: white; border-radius: 20px; box-shadow: 0 10px 40px rgba(0,0,0,0.08); margin-bottom: 30px; transition: all 0.4s ease; border-top: 5px solid #6D356F;" onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 60px rgba(109,53,111,0.2)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 40px rgba(0,0,0,0.08)';">
                            <div style="width: 80px; height: 80px; background: linear-gradient(135deg, rgba(109, 53, 111, 0.1), rgba(159, 91, 164, 0.1)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                                <i class="fa fa-star" style="font-size: 36px; color: #6D356F;"></i>
                            </div>
                            <h4 style="font-size: 20px; color: #6D356F; font-weight: 700; margin-bottom: 15px;">Nadają Wyrazu</h4>
                            <p style="color: #666; font-size: 15px;">Podkreślają oczy i rysy twarzy</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                        <div style="text-align: center; padding: 40px; background: white; border-radius: 20px; box-shadow: 0 10px 40px rgba(0,0,0,0.08); margin-bottom: 30px; transition: all 0.4s ease; border-top: 5px solid #D7A54F;" onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 60px rgba(215,165,79,0.2)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 40px rgba(0,0,0,0.08)';">
                            <div style="width: 80px; height: 80px; background: linear-gradient(135deg, rgba(215, 165, 79, 0.1), rgba(232, 192, 104, 0.1)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                                <i class="fa fa-magic" style="font-size: 36px; color: #D7A54F;"></i>
                            </div>
                            <h4 style="font-size: 20px; color: #D7A54F; font-weight: 700; margin-bottom: 15px;">Odmładzają</h4>
                            <p style="color: #666; font-size: 15px;">Podniesiony łuk brwiowy wizualnie odmładza</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                        <div style="text-align: center; padding: 40px; background: white; border-radius: 20px; box-shadow: 0 10px 40px rgba(0,0,0,0.08); margin-bottom: 30px; transition: all 0.4s ease; border-top: 5px solid #6D356F;" onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 60px rgba(109,53,111,0.2)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 40px rgba(0,0,0,0.08)';">
                            <div style="width: 80px; height: 80px; background: linear-gradient(135deg, rgba(109, 53, 111, 0.1), rgba(159, 91, 164, 0.1)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                                <i class="fa fa-balance-scale" style="font-size: 36px; color: #6D356F;"></i>
                            </div>
                            <h4 style="font-size: 20px; color: #6D356F; font-weight: 700; margin-bottom: 15px;">Korygują Proporcje</h4>
                            <p style="color: #666; font-size: 15px;">Harmonizują rysy twarzy</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                        <div style="text-align: center; padding: 40px; background: white; border-radius: 20px; box-shadow: 0 10px 40px rgba(0,0,0,0.08); margin-bottom: 30px; transition: all 0.4s ease; border-top: 5px solid #D7A54F;" onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 60px rgba(215,165,79,0.2)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 40px rgba(0,0,0,0.08)';">
                            <div style="width: 80px; height: 80px; background: linear-gradient(135deg, rgba(215, 165, 79, 0.1), rgba(232, 192, 104, 0.1)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                                <i class="fa fa-clock" style="font-size: 36px; color: #D7A54F;"></i>
                            </div>
                            <h4 style="font-size: 20px; color: #D7A54F; font-weight: 700; margin-bottom: 15px;">Oszczędzają Czas</h4>
                            <p style="color: #666; font-size: 15px;">Nie musisz malować brwi codziennie</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                        <div style="text-align: center; padding: 40px; background: white; border-radius: 20px; box-shadow: 0 10px 40px rgba(0,0,0,0.08); margin-bottom: 30px; transition: all 0.4s ease; border-top: 5px solid #6D356F;" onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 60px rgba(109,53,111,0.2)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 40px rgba(0,0,0,0.08)';">
                            <div style="width: 80px; height: 80px; background: linear-gradient(135deg, rgba(109, 53, 111, 0.1), rgba(159, 91, 164, 0.1)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                                <i class="fa fa-heart" style="font-size: 36px; color: #6D356F;"></i>
                            </div>
                            <h4 style="font-size: 20px; color: #6D356F; font-weight: 700; margin-bottom: 15px;">Dodają Pewności</h4>
                            <p style="color: #666; font-size: 15px;">Zadbane brwi sprawiają, że czujesz się piękna</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="500">
                        <div style="text-align: center; padding: 40px; background: white; border-radius: 20px; box-shadow: 0 10px 40px rgba(0,0,0,0.08); margin-bottom: 30px; transition: all 0.4s ease; border-top: 5px solid #D7A54F;" onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 60px rgba(215,165,79,0.2)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 40px rgba(0,0,0,0.08)';">
                            <div style="width: 80px; height: 80px; background: linear-gradient(135deg, rgba(215, 165, 79, 0.1), rgba(232, 192, 104, 0.1)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                                <i class="fa fa-eye" style="font-size: 36px; color: #D7A54F;"></i>
                            </div>
                            <h4 style="font-size: 20px; color: #D7A54F; font-weight: 700; margin-bottom: 15px;">Tworzą Ramę</h4>
                            <p style="color: #666; font-size: 15px;">Wydobywają głębię spojrzenia</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Services Section with Slide-in Cards -->
            <div style="background: linear-gradient(180deg, #f9f9f9 0%, #ffffff 100%); padding: 80px 0;">
                <div class="container">
                    <div class="text-center" style="margin-bottom: 60px;" data-aos="fade-up">
                        <h2 style="font-size: 42px; color: #6D356F; font-weight: 700; margin-bottom: 20px;">
                            Nasza Oferta <span style="color: #D7A54F;">Stylizacji Brwi</span>
                        </h2>
                        <p style="font-size: 18px; color: #444;">
                            Kompleksowe usługi dostosowane do Twoich indywidualnych potrzeb
                        </p>
                    </div>

                    <div class="row">
                        <!-- Service 1: Henna -->
                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="0">
                            <div style="background: white; border-radius: 25px; overflow: hidden; box-shadow: 0 15px 50px rgba(0,0,0,0.1); transition: all 0.4s ease; height: 100%; margin-bottom: 30px;" onmouseover="this.style.transform='translateY(-15px) scale(1.02)'; this.style.boxShadow='0 25px 70px rgba(109,53,111,0.25)';" onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='0 15px 50px rgba(0,0,0,0.1)';">
                                <div style="background: linear-gradient(135deg, #6D356F, #9F5BA4); padding: 40px 30px; position: relative; overflow: hidden;">
                                    <div style="position: absolute; top: -50px; right: -50px; width: 150px; height: 150px; background: rgba(255,255,255,0.1); border-radius: 50%;"></div>
                                    <div style="position: relative; z-index: 2;">
                                        <div style="width: 70px; height: 70px; background: rgba(255,255,255,0.2); backdrop-filter: blur(10px); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                                            <i class="fa fa-leaf" style="font-size: 32px; color: white;"></i>
                                        </div>
                                        <h3 style="font-size: 28px; color: white; font-weight: 700; margin-bottom: 15px;">Henna Brwi</h3>
                                        <div style="font-size: 42px; font-weight: 700; color: #D7A54F; margin-bottom: 10px;">50 zł</div>
                                        <p style="color: rgba(255,255,255,0.9); font-size: 15px; margin: 0;">z regulacją</p>
                                    </div>
                                </div>
                                <div style="padding: 30px;">
                                    <p style="color: #666; font-size: 16px; line-height: 1.8; margin-bottom: 25px;">
                                        Koloryzacja henną pudrową z profesjonalną regulacją. Naturalnie podkreślone brwi bez codziennego malowania.
                                    </p>
                                    <ul style="list-style: none; padding: 0; margin: 0 0 25px 0;">
                                        <li style="margin-bottom: 12px; color: #444; font-size: 15px;">
                                            <i class="fa fa-check-circle" style="color: #D7A54F; margin-right: 10px;"></i>
                                            Architektura i geometria brwi
                                        </li>
                                        <li style="margin-bottom: 12px; color: #444; font-size: 15px;">
                                            <i class="fa fa-check-circle" style="color: #D7A54F; margin-right: 10px;"></i>
                                            Dobór koloru henny
                                        </li>
                                        <li style="margin-bottom: 12px; color: #444; font-size: 15px;">
                                            <i class="fa fa-check-circle" style="color: #D7A54F; margin-right: 10px;"></i>
                                            Koloryzacja henną pudrową
                                        </li>
                                        <li style="margin-bottom: 12px; color: #444; font-size: 15px;">
                                            <i class="fa fa-check-circle" style="color: #D7A54F; margin-right: 10px;"></i>
                                            Regulacja brwi
                                        </li>
                                        <li style="color: #444; font-size: 15px;">
                                            <i class="fa fa-check-circle" style="color: #D7A54F; margin-right: 10px;"></i>
                                            Pielęgnacja po zabiegu
                                        </li>
                                    </ul>
                                    <div style="background: linear-gradient(135deg, rgba(109, 53, 111, 0.1), rgba(159, 91, 164, 0.1)); padding: 15px; border-radius: 12px; text-align: center;">
                                        <p style="margin: 0; color: #6D356F; font-weight: 600; font-size: 14px;">
                                            <i class="fa fa-clock" style="margin-right: 8px;"></i>
                                            Czas: 30-45 minut
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Service 2: Henna + Lashes -->
                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                            <div style="background: white; border-radius: 25px; overflow: hidden; box-shadow: 0 15px 50px rgba(0,0,0,0.1); transition: all 0.4s ease; height: 100%; margin-bottom: 30px;" onmouseover="this.style.transform='translateY(-15px) scale(1.02)'; this.style.boxShadow='0 25px 70px rgba(215,165,79,0.25)';" onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='0 15px 50px rgba(0,0,0,0.1)';">
                                <div style="background: linear-gradient(135deg, #D7A54F, #E8C068); padding: 40px 30px; position: relative; overflow: hidden;">
                                    <div style="position: absolute; top: -50px; right: -50px; width: 150px; height: 150px; background: rgba(255,255,255,0.1); border-radius: 50%;"></div>
                                    <div style="position: relative; z-index: 2;">
                                        <div style="width: 70px; height: 70px; background: rgba(255,255,255,0.2); backdrop-filter: blur(10px); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                                            <i class="fa fa-eye" style="font-size: 32px; color: white;"></i>
                                        </div>
                                        <h3 style="font-size: 28px; color: white; font-weight: 700; margin-bottom: 15px;">Henna Brwi + Rzęs</h3>
                                        <div style="font-size: 42px; font-weight: 700; color: #6D356F; margin-bottom: 10px;">65 zł</div>
                                        <p style="color: rgba(255,255,255,0.9); font-size: 15px; margin: 0;">komplet</p>
                                    </div>
                                </div>
                                <div style="padding: 30px;">
                                    <p style="color: #666; font-size: 16px; line-height: 1.8; margin-bottom: 25px;">
                                        Kompleksowy zabieg podkreślający brwi i rzęsy. Idealne dla jasnych włosów – intensywny, spójny efekt.
                                    </p>
                                    <ul style="list-style: none; padding: 0; margin: 0 0 25px 0;">
                                        <li style="margin-bottom: 12px; color: #444; font-size: 15px;">
                                            <i class="fa fa-check-circle" style="color: #6D356F; margin-right: 10px;"></i>
                                            Wszystko z henny brwi
                                        </li>
                                        <li style="margin-bottom: 12px; color: #444; font-size: 15px;">
                                            <i class="fa fa-check-circle" style="color: #6D356F; margin-right: 10px;"></i>
                                            Koloryzacja rzęs henną
                                        </li>
                                        <li style="margin-bottom: 12px; color: #444; font-size: 15px;">
                                            <i class="fa fa-check-circle" style="color: #6D356F; margin-right: 10px;"></i>
                                            Harmonijny efekt
                                        </li>
                                        <li style="margin-bottom: 12px; color: #444; font-size: 15px;">
                                            <i class="fa fa-check-circle" style="color: #6D356F; margin-right: 10px;"></i>
                                            Efekt do 6 tygodni
                                        </li>
                                        <li style="color: #444; font-size: 15px;">
                                            <i class="fa fa-check-circle" style="color: #6D356F; margin-right: 10px;"></i>
                                            Intensywny czarny kolor
                                        </li>
                                    </ul>
                                    <div style="background: linear-gradient(135deg, rgba(215, 165, 79, 0.1), rgba(232, 192, 104, 0.1)); padding: 15px; border-radius: 12px; text-align: center;">
                                        <p style="margin: 0; color: #D7A54F; font-weight: 600; font-size: 14px;">
                                            <i class="fa fa-clock" style="margin-right: 8px;"></i>
                                            Czas: 45-60 minut
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Service 3: Lamination -->
                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                            <div style="background: white; border-radius: 25px; overflow: hidden; box-shadow: 0 15px 50px rgba(0,0,0,0.1); transition: all 0.4s ease; height: 100%; margin-bottom: 30px; position: relative; border: 3px solid #D7A54F;" onmouseover="this.style.transform='translateY(-15px) scale(1.02)'; this.style.boxShadow='0 25px 70px rgba(109,53,111,0.25)';" onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='0 15px 50px rgba(0,0,0,0.1)';">
                                <div style="position: absolute; top: 15px; right: 15px; background: linear-gradient(135deg, #D7A54F, #E8C068); color: white; padding: 8px 20px; border-radius: 20px; font-weight: 700; font-size: 12px; box-shadow: 0 5px 15px rgba(215,165,79,0.5); z-index: 3;">
                                    ⭐ NAJPOPULARNIEJSZE
                                </div>
                                <div style="background: linear-gradient(135deg, #6D356F, #9F5BA4); padding: 40px 30px; position: relative; overflow: hidden;">
                                    <div style="position: absolute; top: -50px; right: -50px; width: 150px; height: 150px; background: rgba(255,255,255,0.1); border-radius: 50%;"></div>
                                    <div style="position: relative; z-index: 2;">
                                        <div style="width: 70px; height: 70px; background: rgba(255,255,255,0.2); backdrop-filter: blur(10px); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                                            <i class="fa fa-crown" style="font-size: 32px; color: #D7A54F;"></i>
                                        </div>
                                        <h3 style="font-size: 28px; color: white; font-weight: 700; margin-bottom: 15px;">Laminacja Full</h3>
                                        <div style="font-size: 42px; font-weight: 700; color: #D7A54F; margin-bottom: 10px;">140 zł</div>
                                        <p style="color: rgba(255,255,255,0.9); font-size: 15px; margin: 0;">zabieg 3w1</p>
                                    </div>
                                </div>
                                <div style="padding: 30px;">
                                    <p style="color: #666; font-size: 16px; line-height: 1.8; margin-bottom: 25px;">
                                        Luksusowy zabieg 3w1: laminacja + architektura + farbka. Efekt "fluffy brows" – gęste, puszste, perfekcyjnie ułożone!
                                    </p>
                                    <ul style="list-style: none; padding: 0; margin: 0 0 25px 0;">
                                        <li style="margin-bottom: 12px; color: #444; font-size: 15px;">
                                            <i class="fa fa-star" style="color: #D7A54F; margin-right: 10px;"></i>
                                            Architektura brwi
                                        </li>
                                        <li style="margin-bottom: 12px; color: #444; font-size: 15px;">
                                            <i class="fa fa-star" style="color: #D7A54F; margin-right: 10px;"></i>
                                            Laminacja długotrwała
                                        </li>
                                        <li style="margin-bottom: 12px; color: #444; font-size: 15px;">
                                            <i class="fa fa-star" style="color: #D7A54F; margin-right: 10px;"></i>
                                            Koloryzacja farbką
                                        </li>
                                        <li style="margin-bottom: 12px; color: #444; font-size: 15px;">
                                            <i class="fa fa-star" style="color: #D7A54F; margin-right: 10px;"></i>
                                            Regulacja brwi
                                        </li>
                                        <li style="color: #444; font-size: 15px;">
                                            <i class="fa fa-star" style="color: #D7A54F; margin-right: 10px;"></i>
                                            Odżywienie i regeneracja
                                        </li>
                                    </ul>
                                    <div style="background: linear-gradient(135deg, rgba(109, 53, 111, 0.1), rgba(159, 91, 164, 0.1)); padding: 15px; border-radius: 12px; text-align: center;">
                                        <p style="margin: 0; color: #6D356F; font-weight: 600; font-size: 14px;">
                                            <i class="fa fa-clock" style="margin-right: 8px;"></i>
                                            Czas: 60-90 minut
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Process Timeline -->
            <div class="container" style="padding: 80px 0;">
                <div class="text-center" style="margin-bottom: 60px;" data-aos="fade-up">
                    <h2 style="font-size: 42px; color: #6D356F; font-weight: 700; margin-bottom: 20px;">
                        Przebieg Zabiegu <span style="color: #D7A54F;">Laminacji</span>
                    </h2>
                    <p style="font-size: 18px; color: #444;">
                        7 kroków do perfekcyjnych "fluffy brows"
                    </p>
                </div>

                <div class="row" style="position: relative;">
                    <!-- Connecting Line -->
                    <div style="position: absolute; left: 50%; top: 80px; bottom: 80px; width: 3px; background: linear-gradient(180deg, #6D356F 0%, #D7A54F 50%, #6D356F 100%); transform: translateX(-50%); display: none;" class="timeline-line"></div>

                    <!-- Step 1 -->
                    <div class="col-12" data-aos="fade-right">
                        <div style="display: flex; align-items: center; margin-bottom: 40px; gap: 30px;">
                            <div style="min-width: 100px; height: 100px; background: linear-gradient(135deg, #6D356F, #9F5BA4); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 10px 30px rgba(109,53,111,0.4); font-size: 42px; color: white; font-weight: 700;">
                                1
                            </div>
                            <div style="flex: 1; background: white; padding: 30px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.08);">
                                <h4 style="font-size: 22px; color: #6D356F; font-weight: 700; margin-bottom: 10px;">Oczyszczenie</h4>
                                <p style="color: #666; font-size: 16px; margin-bottom: 10px;">Dokładne oczyszczenie brwi i skóry z zanieczyszczeń i makijażu</p>
                                <span style="color: #D7A54F; font-size: 14px; font-weight: 600;"><i class="fa fa-clock" style="margin-right: 5px;"></i> 5 minut</span>
                            </div>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="col-12" data-aos="fade-left">
                        <div style="display: flex; align-items: center; margin-bottom: 40px; gap: 30px; flex-direction: row-reverse;">
                            <div style="min-width: 100px; height: 100px; background: linear-gradient(135deg, #D7A54F, #E8C068); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 10px 30px rgba(215,165,79,0.4); font-size: 42px; color: white; font-weight: 700;">
                                2
                            </div>
                            <div style="flex: 1; background: white; padding: 30px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); text-align: right;">
                                <h4 style="font-size: 22px; color: #D7A54F; font-weight: 700; margin-bottom: 10px;">Rolki Silikonowe</h4>
                                <p style="color: #666; font-size: 16px; margin-bottom: 10px;">Naklejenie specjalnych rolek nadających włoskom kierunek</p>
                                <span style="color: #6D356F; font-size: 14px; font-weight: 600;"><i class="fa fa-clock" style="margin-right: 5px;"></i> 5 minut</span>
                            </div>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="col-12" data-aos="fade-right">
                        <div style="display: flex; align-items: center; margin-bottom: 40px; gap: 30px;">
                            <div style="min-width: 100px; height: 100px; background: linear-gradient(135deg, #6D356F, #9F5BA4); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 10px 30px rgba(109,53,111,0.4); font-size: 42px; color: white; font-weight: 700;">
                                3
                            </div>
                            <div style="flex: 1; background: white; padding: 30px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.08);">
                                <h4 style="font-size: 22px; color: #6D356F; font-weight: 700; margin-bottom: 10px;">Preparat Laminujący</h4>
                                <p style="color: #666; font-size: 16px; margin-bottom: 10px;">Aplikacja preparatu otwierającego łuski włosa</p>
                                <span style="color: #D7A54F; font-size: 14px; font-weight: 600;"><i class="fa fa-clock" style="margin-right: 5px;"></i> 10-15 minut</span>
                            </div>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="col-12" data-aos="fade-left">
                        <div style="display: flex; align-items: center; margin-bottom: 40px; gap: 30px; flex-direction: row-reverse;">
                            <div style="min-width: 100px; height: 100px; background: linear-gradient(135deg, #D7A54F, #E8C068); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 10px 30px rgba(215,165,79,0.4); font-size: 42px; color: white; font-weight: 700;">
                                4
                            </div>
                            <div style="flex: 1; background: white; padding: 30px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); text-align: right;">
                                <h4 style="font-size: 22px; color: #D7A54F; font-weight: 700; margin-bottom: 10px;">Preparat Fiksujący</h4>
                                <p style="color: #666; font-size: 16px; margin-bottom: 10px;">Zamykanie łusek i utrwalanie nowego kształtu</p>
                                <span style="color: #6D356F; font-size: 14px; font-weight: 600;"><i class="fa fa-clock" style="margin-right: 5px;"></i> 10-15 minut</span>
                            </div>
                        </div>
                    </div>

                    <!-- Step 5 -->
                    <div class="col-12" data-aos="fade-right">
                        <div style="display: flex; align-items: center; margin-bottom: 40px; gap: 30px;">
                            <div style="min-width: 100px; height: 100px; background: linear-gradient(135deg, #6D356F, #9F5BA4); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 10px 30px rgba(109,53,111,0.4); font-size: 42px; color: white; font-weight: 700;">
                                5
                            </div>
                            <div style="flex: 1; background: white; padding: 30px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.08);">
                                <h4 style="font-size: 22px; color: #6D356F; font-weight: 700; margin-bottom: 10px;">Odżywienie</h4>
                                <p style="color: #666; font-size: 16px; margin-bottom: 10px;">Aplikacja odżywczego serum z keratyną</p>
                                <span style="color: #D7A54F; font-size: 14px; font-weight: 600;"><i class="fa fa-clock" style="margin-right: 5px;"></i> 5 minut</span>
                            </div>
                        </div>
                    </div>

                    <!-- Step 6 -->
                    <div class="col-12" data-aos="fade-left">
                        <div style="display: flex; align-items: center; margin-bottom: 40px; gap: 30px; flex-direction: row-reverse;">
                            <div style="min-width: 100px; height: 100px; background: linear-gradient(135deg, #D7A54F, #E8C068); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 10px 30px rgba(215,165,79,0.4); font-size: 42px; color: white; font-weight: 700;">
                                6
                            </div>
                            <div style="flex: 1; background: white; padding: 30px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); text-align: right;">
                                <h4 style="font-size: 22px; color: #D7A54F; font-weight: 700; margin-bottom: 10px;">Koloryzacja</h4>
                                <p style="color: #666; font-size: 16px; margin-bottom: 10px;">Farbowanie henną lub farbką w wybranym odcieniu</p>
                                <span style="color: #6D356F; font-size: 14px; font-weight: 600;"><i class="fa fa-clock" style="margin-right: 5px;"></i> 10 minut</span>
                            </div>
                        </div>
                    </div>

                    <!-- Step 7 -->
                    <div class="col-12" data-aos="fade-right">
                        <div style="display: flex; align-items: center; margin-bottom: 40px; gap: 30px;">
                            <div style="min-width: 100px; height: 100px; background: linear-gradient(135deg, #6D356F, #9F5BA4); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 10px 30px rgba(109,53,111,0.4); font-size: 42px; color: white; font-weight: 700;">
                                7
                            </div>
                            <div style="flex: 1; background: white; padding: 30px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.08);">
                                <h4 style="font-size: 22px; color: #6D356F; font-weight: 700; margin-bottom: 10px;">Regulacja</h4>
                                <p style="color: #666; font-size: 16px; margin-bottom: 10px;">Finalne ukształtowanie brwi pęsetą lub nitką</p>
                                <span style="color: #D7A54F; font-size: 14px; font-weight: 600;"><i class="fa fa-check" style="margin-right: 5px;"></i> Gotowe!</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Henna vs Traditional Table -->
            <div style="background: linear-gradient(180deg, #f9f9f9 0%, #ffffff 100%); padding: 80px 0;">
                <div class="container">
                    <div class="text-center" style="margin-bottom: 60px;" data-aos="fade-up">
                        <h2 style="font-size: 42px; color: #6D356F; font-weight: 700; margin-bottom: 20px;">
                            Henna Pudrowa vs <span style="color: #D7A54F;">Tradycyjna</span>
                        </h2>
                        <p style="font-size: 18px; color: #444;">
                            Dlaczego henna pudrowa jest lepsza?
                        </p>
                    </div>

                    <div style="overflow-x: auto;" data-aos="zoom-in">
                        <table style="width: 100%; background: white; border-radius: 20px; overflow: hidden; box-shadow: 0 10px 40px rgba(0,0,0,0.1); border-collapse: separate; border-spacing: 0;">
                            <thead>
                                <tr style="background: linear-gradient(135deg, #6D356F, #9F5BA4); color: white;">
                                    <th style="padding: 25px; text-align: left; font-size: 18px; font-weight: 700; border-right: 1px solid rgba(255,255,255,0.1);">Cecha</th>
                                    <th style="padding: 25px; text-align: center; font-size: 18px; font-weight: 700; background: rgba(215,165,79,0.3); border-right: 1px solid rgba(255,255,255,0.1);">Henna Pudrowa</th>
                                    <th style="padding: 25px; text-align: center; font-size: 18px; font-weight: 700;">Tradycyjna Henna</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="border-bottom: 1px solid #eee;">
                                    <td style="padding: 20px; font-weight: 600; color: #444;">Paleta kolorów</td>
                                    <td style="padding: 20px; text-align: center; background: rgba(215,165,79,0.05); color: #28a745; font-weight: 700;">Szeroka (10+ odcieni)</td>
                                    <td style="padding: 20px; text-align: center; color: #666;">Ograniczona (2-3 kolory)</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #eee; background: rgba(0,0,0,0.01);">
                                    <td style="padding: 20px; font-weight: 600; color: #444;">Trwałość na skórze</td>
                                    <td style="padding: 20px; text-align: center; background: rgba(215,165,79,0.05); color: #28a745; font-weight: 700;">3-14 dni</td>
                                    <td style="padding: 20px; text-align: center; color: #666;">1-3 dni</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #eee;">
                                    <td style="padding: 20px; font-weight: 600; color: #444;">Trwałość na włoskach</td>
                                    <td style="padding: 20px; text-align: center; background: rgba(215,165,79,0.05); color: #28a745; font-weight: 700;">4-6 tygodni</td>
                                    <td style="padding: 20px; text-align: center; color: #666;">2-3 tygodnie</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #eee; background: rgba(0,0,0,0.01);">
                                    <td style="padding: 20px; font-weight: 600; color: #444;">Efekt</td>
                                    <td style="padding: 20px; text-align: center; background: rgba(215,165,79,0.05); color: #28a745; font-weight: 700;">Naturalny, pudrowy</td>
                                    <td style="padding: 20px; text-align: center; color: #dc3545; font-weight: 700;">Często przerysowany</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #eee;">
                                    <td style="padding: 20px; font-weight: 600; color: #444;">Działanie pielęgnujące</td>
                                    <td style="padding: 20px; text-align: center; background: rgba(215,165,79,0.05); color: #28a745; font-weight: 700;">TAK (keratyna, witaminy)</td>
                                    <td style="padding: 20px; text-align: center; color: #666;">Minimalne</td>
                                </tr>
                                <tr>
                                    <td style="padding: 20px; font-weight: 600; color: #444;">Możliwość mieszania</td>
                                    <td style="padding: 20px; text-align: center; background: rgba(215,165,79,0.05); color: #28a745; font-weight: 700;">TAK</td>
                                    <td style="padding: 20px; text-align: center; color: #666;">Ograniczona</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Face Shapes Section -->
            <div class="container" style="padding: 80px 0;">
                <div class="text-center" style="margin-bottom: 60px;" data-aos="fade-up">
                    <h2 style="font-size: 42px; color: #6D356F; font-weight: 700; margin-bottom: 20px;">
                        Idealny Kształt Brwi dla <span style="color: #D7A54F;">Twojej Twarzy</span>
                    </h2>
                    <p style="font-size: 18px; color: #444;">
                        Dobrze dobrane brwi harmonizują rysy twarzy
                    </p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6" data-aos="flip-left" data-aos-delay="0">
                        <div style="background: white; padding: 30px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); margin-bottom: 30px; text-align: center; transition: all 0.3s ease;" onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 15px 45px rgba(109,53,111,0.2)';" onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 10px 30px rgba(0,0,0,0.08)';">
                            <div style="width: 100px; height: 100px; background: linear-gradient(135deg, rgba(109, 53, 111, 0.1), rgba(159, 91, 164, 0.1)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; font-size: 48px;">
                                🔷
                            </div>
                            <h4 style="font-size: 20px; color: #6D356F; font-weight: 700; margin-bottom: 15px;">Twarz Owalna</h4>
                            <p style="color: #666; font-size: 15px; margin-bottom: 15px;">Miękko zaokrąglony łuk z delikatnym załamaniem</p>
                            <div style="background: rgba(215,165,79,0.1); padding: 12px; border-radius: 10px;">
                                <p style="color: #D7A54F; font-size: 14px; margin: 0; font-weight: 600;">Zachowuje naturalne proporcje</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="flip-left" data-aos-delay="100">
                        <div style="background: white; padding: 30px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); margin-bottom: 30px; text-align: center; transition: all 0.3s ease;" onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 15px 45px rgba(215,165,79,0.2)';" onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 10px 30px rgba(0,0,0,0.08)';">
                            <div style="width: 100px; height: 100px; background: linear-gradient(135deg, rgba(215, 165, 79, 0.1), rgba(232, 192, 104, 0.1)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; font-size: 48px;">
                                🔶
                            </div>
                            <h4 style="font-size: 20px; color: #D7A54F; font-weight: 700; margin-bottom: 15px;">Twarz Okrągła</h4>
                            <p style="color: #666; font-size: 15px; margin-bottom: 15px;">Wyraźnie załamane z wysokim łukiem</p>
                            <div style="background: rgba(109,53,111,0.1); padding: 12px; border-radius: 10px;">
                                <p style="color: #6D356F; font-size: 14px; margin: 0; font-weight: 600;">Optycznie wydłuża twarz</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="flip-left" data-aos-delay="200">
                        <div style="background: white; padding: 30px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); margin-bottom: 30px; text-align: center; transition: all 0.3s ease;" onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 15px 45px rgba(109,53,111,0.2)';" onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 10px 30px rgba(0,0,0,0.08)';">
                            <div style="width: 100px; height: 100px; background: linear-gradient(135deg, rgba(109, 53, 111, 0.1), rgba(159, 91, 164, 0.1)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; font-size: 48px;">
                                🔲
                            </div>
                            <h4 style="font-size: 20px; color: #6D356F; font-weight: 700; margin-bottom: 15px;">Twarz Kwadratowa</h4>
                            <p style="color: #666; font-size: 15px; margin-bottom: 15px;">Łagodnie zaokrąglone z delikatnym łukiem</p>
                            <div style="background: rgba(215,165,79,0.1); padding: 12px; border-radius: 10px;">
                                <p style="color: #D7A54F; font-size: 14px; margin: 0; font-weight: 600;">Złagadza ostre kąty</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="flip-left" data-aos-delay="300">
                        <div style="background: white; padding: 30px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); margin-bottom: 30px; text-align: center; transition: all 0.3s ease;" onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 15px 45px rgba(215,165,79,0.2)';" onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 10px 30px rgba(0,0,0,0.08)';">
                            <div style="width: 100px; height: 100px; background: linear-gradient(135deg, rgba(215, 165, 79, 0.1), rgba(232, 192, 104, 0.1)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; font-size: 48px;">
                                💎
                            </div>
                            <h4 style="font-size: 20px; color: #D7A54F; font-weight: 700; margin-bottom: 15px;">Twarz Diament</h4>
                            <p style="color: #666; font-size: 15px; margin-bottom: 15px;">Zaokrąglone z soft apex</p>
                            <div style="background: rgba(109,53,111,0.1); padding: 12px; border-radius: 10px;">
                                <p style="color: #6D356F; font-size: 14px; margin: 0; font-weight: 600;">Balansuje kości policzkowe</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="flip-left" data-aos-delay="400">
                        <div style="background: white; padding: 30px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); margin-bottom: 30px; text-align: center; transition: all 0.3s ease;" onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 15px 45px rgba(109,53,111,0.2)';" onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 10px 30px rgba(0,0,0,0.08)';">
                            <div style="width: 100px; height: 100px; background: linear-gradient(135deg, rgba(109, 53, 111, 0.1), rgba(159, 91, 164, 0.1)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; font-size: 48px;">
                                ❤️
                            </div>
                            <h4 style="font-size: 20px; color: #6D356F; font-weight: 700; margin-bottom: 15px;">Twarz Serce</h4>
                            <p style="color: #666; font-size: 15px; margin-bottom: 15px;">Zaokrąglone bez ostrych załamań</p>
                            <div style="background: rgba(215,165,79,0.1); padding: 12px; border-radius: 10px;">
                                <p style="color: #D7A54F; font-size: 14px; margin: 0; font-weight: 600;">Balansuje szerokie czoło</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="flip-left" data-aos-delay="500">
                        <div style="background: white; padding: 30px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); margin-bottom: 30px; text-align: center; transition: all 0.3s ease;" onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 15px 45px rgba(215,165,79,0.2)';" onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 10px 30px rgba(0,0,0,0.08)';">
                            <div style="width: 100px; height: 100px; background: linear-gradient(135deg, rgba(215, 165, 79, 0.1), rgba(232, 192, 104, 0.1)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; font-size: 48px;">
                                ⬜
                            </div>
                            <h4 style="font-size: 20px; color: #D7A54F; font-weight: 700; margin-bottom: 15px;">Twarz Prostokątna</h4>
                            <p style="color: #666; font-size: 15px; margin-bottom: 15px;">Płaskie, proste z minimalnym łukiem</p>
                            <div style="background: rgba(109,53,111,0.1); padding: 12px; border-radius: 10px;">
                                <p style="color: #6D356F; font-size: 14px; margin: 0; font-weight: 600;">Optycznie skraca twarz</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonials Carousel -->
            <div style="background: linear-gradient(135deg, #6D356F, #9F5BA4); padding: 80px 0; position: relative; overflow: hidden;">
                <div style="position: absolute; top: -100px; right: -100px; width: 400px; height: 400px; background: rgba(255,255,255,0.05); border-radius: 50%;"></div>
                <div style="position: absolute; bottom: -150px; left: -150px; width: 500px; height: 500px; background: rgba(215,165,79,0.1); border-radius: 50%;"></div>

                <div class="container" style="position: relative; z-index: 2;">
                    <div class="text-center" style="margin-bottom: 60px;" data-aos="fade-up">
                        <h2 style="font-size: 42px; color: white; font-weight: 700; margin-bottom: 20px;">
                            Co Mówią <span style="color: #D7A54F;">Nasze Klientki</span>?
                        </h2>
                        <p style="font-size: 18px; color: rgba(255,255,255,0.9);">
                            Przekonaj się, dlaczego są zachwycone!
                        </p>
                    </div>

                    <div class="row">
                        <div class="col-lg-6" data-aos="fade-right">
                            <div style="background: rgba(255,255,255,0.15); backdrop-filter: blur(20px); padding: 40px; border-radius: 25px; margin-bottom: 30px; border: 1px solid rgba(255,255,255,0.2);">
                                <div style="color: #D7A54F; font-size: 48px; margin-bottom: 20px;">"</div>
                                <p style="color: white; font-size: 16px; line-height: 1.8; margin-bottom: 25px;">
                                    Przez lata malowałam brwi kredką, ale nigdy nie wyglądały naturalnie. Po zabiegu henny w Magic Salon moje brwi są idealne – wyraziste, ale naturalne. Nie muszę ich już malować!
                                </p>
                                <div style="display: flex; align-items: center; gap: 15px;">
                                    <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #D7A54F, #E8C068); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 700; font-size: 20px;">
                                        M
                                    </div>
                                    <div>
                                        <div style="font-weight: 700; color: white;">Marta</div>
                                        <div style="color: #D7A54F; font-size: 14px;">⭐⭐⭐⭐⭐</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6" data-aos="fade-left">
                            <div style="background: rgba(255,255,255,0.15); backdrop-filter: blur(20px); padding: 40px; border-radius: 25px; margin-bottom: 30px; border: 1px solid rgba(255,255,255,0.2);">
                                <div style="color: #D7A54F; font-size: 48px; margin-bottom: 20px;">"</div>
                                <p style="color: white; font-size: 16px; line-height: 1.8; margin-bottom: 25px;">
                                    Laminacja to game changer! Moje brwi zawsze rosły w różnych kierunkach. Teraz mam modne 'fluffy brows' bez żadnego wysiłku. Efekt trzyma się już 7 tygodni!
                                </p>
                                <div style="display: flex; align-items: center; gap: 15px;">
                                    <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #D7A54F, #E8C068); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 700; font-size: 20px;">
                                        K
                                    </div>
                                    <div>
                                        <div style="font-weight: 700; color: white;">Karolina</div>
                                        <div style="color: #D7A54F; font-size: 14px;">⭐⭐⭐⭐⭐</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6" data-aos="fade-right">
                            <div style="background: rgba(255,255,255,0.15); backdrop-filter: blur(20px); padding: 40px; border-radius: 25px; margin-bottom: 30px; border: 1px solid rgba(255,255,255,0.2);">
                                <div style="color: #D7A54F; font-size: 48px; margin-bottom: 20px;">"</div>
                                <p style="color: white; font-size: 16px; line-height: 1.8; margin-bottom: 25px;">
                                    Pani stylistka bardzo dokładnie wyjaśniła mi cały proces, dobrała idealny kolor i kształt. Czuję się teraz dużo pewniej – moje brwi wyglądają jak z okładki magazynu!
                                </p>
                                <div style="display: flex; align-items: center; gap: 15px;">
                                    <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #D7A54F, #E8C068); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 700; font-size: 20px;">
                                        A
                                    </div>
                                    <div>
                                        <div style="font-weight: 700; color: white;">Anna</div>
                                        <div style="color: #D7A54F; font-size: 14px;">⭐⭐⭐⭐⭐</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6" data-aos="fade-left">
                            <div style="background: rgba(255,255,255,0.15); backdrop-filter: blur(20px); padding: 40px; border-radius: 25px; margin-bottom: 30px; border: 1px solid rgba(255,255,255,0.2);">
                                <div style="color: #D7A54F; font-size: 48px; margin-bottom: 20px;">"</div>
                                <p style="color: white; font-size: 16px; line-height: 1.8; margin-bottom: 25px;">
                                    Zawsze bałam się regulacji bo jest bolesna. W Magic Salon zastosowali technikę nitkowania i praktycznie nic nie czułam! A efekt jest perfekcyjny.
                                </p>
                                <div style="display: flex; align-items: center; gap: 15px;">
                                    <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #D7A54F, #E8C068); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 700; font-size: 20px;">
                                        P
                                    </div>
                                    <div>
                                        <div style="font-weight: 700; color: white;">Paulina</div>
                                        <div style="color: #D7A54F; font-size: 14px;">⭐⭐⭐⭐⭐</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQ Accordion -->
            <div class="container" style="padding: 80px 0;">
                <div class="text-center" style="margin-bottom: 60px;" data-aos="fade-up">
                    <h2 style="font-size: 42px; color: #6D356F; font-weight: 700; margin-bottom: 20px;">
                        Najczęściej Zadawane <span style="color: #D7A54F;">Pytania</span>
                    </h2>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="accordion" id="faqAccordion">
                            <!-- FAQ 1 -->
                            <div class="accordion-item" style="border: none; margin-bottom: 20px;" data-aos="fade-up">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" style="background: white; color: #6D356F; font-weight: 700; font-size: 18px; padding: 25px; box-shadow: 0 5px 20px rgba(0,0,0,0.08); border-radius: 15px;">
                                        Czy stylizacja brwi jest bolesna?
                                    </button>
                                </h2>
                                <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body" style="background: white; padding: 25px; color: #666; font-size: 16px; line-height: 1.8; box-shadow: 0 5px 20px rgba(0,0,0,0.05); border-radius: 0 0 15px 15px;">
                                        Regulacja może być lekko bolesna, ale ból jest tolerowany przez większość osób. Najłagodniejsza metoda to <strong>nitkowanie</strong>, najbardziej intensywna – <strong>wosk</strong>. Henna i laminacja są całkowicie bezbolesne.
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 2 -->
                            <div class="accordion-item" style="border: none; margin-bottom: 20px;" data-aos="fade-up" data-aos-delay="50">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" style="background: white; color: #6D356F; font-weight: 700; font-size: 18px; padding: 25px; box-shadow: 0 5px 20px rgba(0,0,0,0.08); border-radius: 15px;">
                                        Jak długo trwa zabieg?
                                    </button>
                                </h2>
                                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body" style="background: white; padding: 25px; color: #666; font-size: 16px; line-height: 1.8; box-shadow: 0 5px 20px rgba(0,0,0,0.05); border-radius: 0 0 15px 15px;">
                                        <ul style="list-style: none; padding: 0; margin: 0;">
                                            <li style="margin-bottom: 10px;"><strong>Henna brwi z regulacją:</strong> 30-45 minut</li>
                                            <li style="margin-bottom: 10px;"><strong>Henna brwi + rzęs:</strong> 45-60 minut</li>
                                            <li><strong>Laminacja + architektura + farbka:</strong> 60-90 minut</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 3 -->
                            <div class="accordion-item" style="border: none; margin-bottom: 20px;" data-aos="fade-up" data-aos-delay="100">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" style="background: white; color: #6D356F; font-weight: 700; font-size: 18px; padding: 25px; box-shadow: 0 5px 20px rgba(0,0,0,0.08); border-radius: 15px;">
                                        Jak długo utrzymuje się efekt?
                                    </button>
                                </h2>
                                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body" style="background: white; padding: 25px; color: #666; font-size: 16px; line-height: 1.8; box-shadow: 0 5px 20px rgba(0,0,0,0.05); border-radius: 0 0 15px 15px;">
                                        <ul style="list-style: none; padding: 0; margin: 0;">
                                            <li style="margin-bottom: 10px;"><strong>Henna na skórze:</strong> 3-14 dni</li>
                                            <li style="margin-bottom: 10px;"><strong>Henna na włoskach:</strong> 4-6 tygodni</li>
                                            <li><strong>Laminacja:</strong> 4-8 tygodni (średnio 6 tygodni)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 4 -->
                            <div class="accordion-item" style="border: none; margin-bottom: 20px;" data-aos="fade-up" data-aos-delay="150">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" style="background: white; color: #6D356F; font-weight: 700; font-size: 18px; padding: 25px; box-shadow: 0 5px 20px rgba(0,0,0,0.08); border-radius: 15px;">
                                        Czy mogę moczyć brwi po zabiegu?
                                    </button>
                                </h2>
                                <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body" style="background: white; padding: 25px; color: #666; font-size: 16px; line-height: 1.8; box-shadow: 0 5px 20px rgba(0,0,0,0.05); border-radius: 0 0 15px 15px;">
                                        <strong>NIE przez pierwsze 24 godziny!</strong> To najważniejsza zasada. Później możesz normalnie myć twarz, ale unikaj długich kąpieli parowych przez tydzień po laminacji.
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 5 -->
                            <div class="accordion-item" style="border: none; margin-bottom: 20px;" data-aos="fade-up" data-aos-delay="200">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" style="background: white; color: #6D356F; font-weight: 700; font-size: 18px; padding: 25px; box-shadow: 0 5px 20px rgba(0,0,0,0.08); border-radius: 15px;">
                                        Ile kosztuje stylizacja brwi?
                                    </button>
                                </h2>
                                <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body" style="background: white; padding: 25px; color: #666; font-size: 16px; line-height: 1.8; box-shadow: 0 5px 20px rgba(0,0,0,0.05); border-radius: 0 0 15px 15px;">
                                        <ul style="list-style: none; padding: 0; margin: 0;">
                                            <li style="margin-bottom: 10px;"><strong>Henna brwi z regulacją:</strong> 50 zł</li>
                                            <li style="margin-bottom: 10px;"><strong>Henna brwi + henna rzęs:</strong> 65 zł</li>
                                            <li><strong>Laminacja + architektura + farbka:</strong> 140 zł</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Final CTA -->
            <div style="background: linear-gradient(135deg, #D7A54F, #E8C068); padding: 100px 0;">
                <div class="container">
                    <div class="text-center" data-aos="zoom-in">
                        <h2 style="font-size: 48px; color: white; font-weight: 700; margin-bottom: 30px; text-shadow: 2px 2px 4px rgba(0,0,0,0.2);">
                            Odkryj Magię <span style="color: #6D356F;">Idealnych Brwi</span>!
                        </h2>
                        <p style="font-size: 22px; color: rgba(255,255,255,0.95); margin-bottom: 40px; max-width: 800px; margin-left: auto; margin-right: auto;">
                            Oszczędź 15 minut każdego ranka i ciesz się perfekcyjnymi brwiami przez 6 tygodni!
                        </p>

                        <a href="https://booksy.magicsalon.pl" target="_blank" style="background: linear-gradient(135deg, #6D356F, #9F5BA4); color: white; padding: 22px 55px; border-radius: 50px; font-weight: 700; font-size: 20px; text-decoration: none; display: inline-block; box-shadow: 0 15px 40px rgba(109,53,111,0.5); transition: all 0.3s ease; margin-bottom: 40px;">
                            <i class="fa fa-calendar-check" style="margin-right: 12px;"></i>
                            Zarezerwuj Online
                        </a>

                        <div style="display: flex; gap: 40px; justify-content: center; flex-wrap: wrap; color: white;">
                            <div>
                                <i class="fa fa-phone" style="font-size: 24px; margin-bottom: 10px; display: block;"></i>
                                <p style="margin: 0; font-size: 18px; font-weight: 600;">+48 883 481 581</p>
                            </div>
                            <div>
                                <i class="fa fa-map-marker-alt" style="font-size: 24px; margin-bottom: 10px; display: block;"></i>
                                <p style="margin: 0; font-size: 18px; font-weight: 600;">ul. Borówkowa 13, Dobrzykowice</p>
                            </div>
                            <div>
                                <i class="fa fa-clock" style="font-size: 24px; margin-bottom: 10px; display: block;"></i>
                                <p style="margin: 0; font-size: 18px; font-weight: 600;">Pon-Sob: 9:00-18:00</p>
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
    <!-- page-wraper -->

    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
            offset: 100
        });
    </script>

</body>
</html>
