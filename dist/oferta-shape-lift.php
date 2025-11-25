<?php

/**
 * MAGIC SALON - Oferta: Shape & Lift (oferta-shape-lift.php)
 * Wersja: 2.4 - Zoptymalizowane treści SEO dla usługi
 */

// Załaduj konfigurację
require_once __DIR__ . DIRECTORY_SEPARATOR . 'config.php';

// Konfiguracja meta tagów dla strony Shape & Lift
$meta = [
    'title' => 'Shape & Lift – Modelowanie Sylwetki EMS, RF, Vacuum | MAGIC SALON',
    'description' => 'Odkryj Shape & Lift w Magic Salon Dobrzykowice. 3 technologie w 1 zabiegu: EMS, RF i Vacuum. Skuteczne budowanie mięśni, spalanie tłuszczu i redukcja cellulitu. Sprawdź cennik!',
    'keywords' => 'shape lift zabieg, modelowanie sylwetki dobrzykowice, ems elektrostymulacja wrocław, fale radiowe na ciało, vacuum drenaż, lifting pośladków, redukcja cellulitu, ujędrnianie ciała czernica',
    'canonical' => BASE_URL . '/oferta-shape-lift.php',
    'robots' => 'index, follow, max-image-preview:large',
    'og' => [
        'type' => 'website',
        'title' => 'Shape & Lift – Twoja Wymarzona Sylwetka',
        'description' => 'Trzy technologie, jeden cel: perfekcyjne ciało. Połącz siłę mięśni, redukcję tłuszczu i jędrną skórę dzięki Shape & Lift. Bez skalpela i rekonwalescencji.',
        'url' => BASE_URL . '/oferta-shape-lift.php',
        'image' => BASE_URL . '/images/oferta-details/shape-lift-og.jpg', // Upewnij się, że ta grafika istnieje
    ],
    'twitter' => [
        'card' => 'summary_large_image',
        'title' => 'Shape & Lift w MAGIC SALON',
        'description' => 'EMS + RF + Vacuum. Kompleksowe modelowanie sylwetki w jednym zabiegu.',
    ],
    'schema' => [
        'enabled' => true,
        'type' => 'Service',
        'name' => 'Zabieg Shape & Lift',
        'description' => 'Zaawansowany zabieg na ciało łączący elektrostymulację EMS, fale radiowe (RF) oraz masaż podciśnieniowy (Vacuum) dla efektu liftingu, redukcji tłuszczu i budowy mięśni.',
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
            'priceRange' => '120-160 PLN'
        ],
        'areaServed' => [
            '@type' => 'City',
            'name' => 'Dobrzykowice'
        ],
        'hasOfferCatalog' => [
            '@type' => 'OfferCatalog',
            'name' => 'Modelowanie Sylwetki',
            'itemListElement' => [
                [
                    '@type' => 'Offer',
                    'itemOffered' => [
                        '@type' => 'Service',
                        'name' => 'Shape & Lift - Ramiona',
                        'price' => '120.00',
                        'priceCurrency' => 'PLN'
                    ]
                ],
                [
                    '@type' => 'Offer',
                    'itemOffered' => [
                        '@type' => 'Service',
                        'name' => 'Shape & Lift - Brzuch',
                        'price' => '160.00',
                        'priceCurrency' => 'PLN'
                    ]
                ],
                [
                    '@type' => 'Offer',
                    'itemOffered' => [
                        '@type' => 'Service',
                        'name' => 'Shape & Lift - Pośladki',
                        'price' => '160.00',
                        'priceCurrency' => 'PLN'
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
            // Konfiguracja dynamicznego banera i breadcrumbs dla usługi
            $banner_img = 'images/banner/gallery-banner.jpg';
            
            $page_title = 'Shape & Lift – Rewolucja w Modelowaniu';
            
            // Unikalny opis wprowadzający do konkretnej usługi
            $page_desc = 'Shape & Lift to Twoja tajna broń w walce o perfekcyjną sylwetkę. Wyobraź sobie zabieg, który wykonuje pracę za Ciebie – stymuluje tysiące skurczów mięśni, jednocześnie ujędrniając skórę ciepłem fal radiowych i drenując toksyny. To kompleksowa terapia, która modeluje brzuch, unosi pośladki i wysmukla uda, dając efekty niemożliwe do osiągnięcia samą dietą czy standardowymi ćwiczeniami. Poczuj moc technologii w służbie Twojego piękna.';
            
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
                    'label' => 'Shape & Lift', // Element aktywny
                    'url' => '',
                    'icon' => ''
                ]
            ];
            
            // Załadowanie dedykowanego partiala
            include 'partials/breadcrumbs.php';
            ?>

            <!--====== Start Main Content ======-->

            <!-- Hero Section with Hexagonal Pattern -->
            <div style="position: relative; overflow: hidden; background: linear-gradient(135deg, #6D356F 0%, #9F5BA4 50%, #6D356F 100%); padding: 100px 0;">
                <!-- Hexagonal Pattern Overlay -->
                <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; opacity: 0.1; background-image: repeating-linear-gradient(0deg, transparent, transparent 50px, rgba(255,255,255,0.1) 50px, rgba(255,255,255,0.1) 51px), repeating-linear-gradient(90deg, transparent, transparent 50px, rgba(255,255,255,0.1) 50px, rgba(255,255,255,0.1) 51px);"></div>

                <div class="container" style="position: relative; z-index: 2;">
                    <div class="row align-items-center">
                        <div class="col-lg-7" data-aos="fade-right">
                            <div style="color: white;">
                                <h1 style="font-size: 52px; font-weight: 700; color: white; margin-bottom: 20px; text-shadow: 2px 2px 4px rgba(0,0,0,0.3);">
                                    Shape & Lift
                                </h1>
                                <p style="font-size: 24px; color: #E8C068; font-weight: 600; margin-bottom: 30px;">
                                    Kompleksowe Ujędrnianie i Modelowanie Ciała
                                </p>
                                <p style="font-size: 18px; line-height: 1.8; color: rgba(255,255,255,0.95); margin-bottom: 40px;">
                                    Rewolucyjny zabieg łączący <strong>EMS</strong>, <strong>fale radiowe RF</strong> i <strong>masaż podciśnieniowy</strong>.
                                    Jeden zabieg może wywołać nawet <strong style="color: #D7A54F;">20 000-30 000 skurczów mięśniowych</strong> –
                                    efekt treningu bez potu i zmęczenia!
                                </p>
                                <div style="display: flex; gap: 15px; flex-wrap: wrap;">
                                    <a href="https://booksy.magicsalon.pl" target="_blank" style="background: linear-gradient(135deg, #D7A54F, #E8C068); color: #222; padding: 18px 40px; border-radius: 50px; font-weight: 600; text-decoration: none; display: inline-block; box-shadow: 0 8px 20px rgba(215,165,79,0.4); transition: all 0.3s ease;">
                                        Umów Wizytę Online
                                    </a>
                                    <a href="#cennik" style="background: rgba(255,255,255,0.2); backdrop-filter: blur(10px); color: white; padding: 18px 40px; border-radius: 50px; font-weight: 600; text-decoration: none; display: inline-block; border: 2px solid rgba(255,255,255,0.3); transition: all 0.3s ease;">
                                        Zobacz Cennik
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5" data-aos="fade-left" data-aos-delay="200">
                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 30px;">
                                <!-- Stat Card 1 -->
                                <div style="background: rgba(255,255,255,0.15); backdrop-filter: blur(10px); padding: 30px; border-radius: 20px; text-align: center; border: 1px solid rgba(255,255,255,0.2);">
                                    <div style="font-size: 42px; font-weight: 700; color: #D7A54F; margin-bottom: 10px;">16-20%</div>
                                    <div style="color: white; font-size: 16px;">Wzrost Masy Mięśniowej</div>
                                </div>
                                <!-- Stat Card 2 -->
                                <div style="background: rgba(255,255,255,0.15); backdrop-filter: blur(10px); padding: 30px; border-radius: 20px; text-align: center; border: 1px solid rgba(255,255,255,0.2);">
                                    <div style="font-size: 42px; font-weight: 700; color: #D7A54F; margin-bottom: 10px;">15-19%</div>
                                    <div style="color: white; font-size: 16px;">Redukcja Tkanki Tłuszczowej</div>
                                </div>
                                <!-- Stat Card 3 -->
                                <div style="background: rgba(255,255,255,0.15); backdrop-filter: blur(10px); padding: 30px; border-radius: 20px; text-align: center; border: 1px solid rgba(255,255,255,0.2);">
                                    <div style="font-size: 42px; font-weight: 700; color: #D7A54F; margin-bottom: 10px;">2-4 cm</div>
                                    <div style="color: white; font-size: 16px;">Zmniejszenie Talii</div>
                                </div>
                                <!-- Stat Card 4 -->
                                <div style="background: rgba(255,255,255,0.15); backdrop-filter: blur(10px); padding: 30px; border-radius: 20px; text-align: center; border: 1px solid rgba(255,255,255,0.2);">
                                    <div style="font-size: 42px; font-weight: 700; color: #D7A54F; margin-bottom: 10px;">96%</div>
                                    <div style="color: white; font-size: 16px;">Zadowolenie Klientów</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Technology Section with Animated Badges -->
            <div class="container" style="padding: 80px 0;">
                <div class="text-center" style="margin-bottom: 60px;" data-aos="fade-up">
                    <h2 style="font-size: 42px; color: #6D356F; font-weight: 700; margin-bottom: 20px;">
                        Czym Jest <span style="color: #D7A54F;">Shape & Lift</span>?
                    </h2>
                    <p style="font-size: 18px; color: #444; max-width: 800px; margin: 0 auto;">
                        Innowacyjny zabieg wykorzystujący synergię najnowocześniejszych technologii do wielopoziomowego działania
                        na tkankę mięśniową, skórę i tkankę tłuszczową.
                    </p>
                </div>

                <div class="row" style="margin-bottom: 60px;">
                    <!-- EMS Badge -->
                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="0">
                        <div style="background: linear-gradient(135deg, rgba(109, 53, 111, 0.1), rgba(159, 91, 164, 0.1)); padding: 40px; border-radius: 20px; text-align: center; border: 2px solid #6D356F; transition: all 0.4s ease; height: 100%;" onmouseover="this.style.transform='translateY(-10px) scale(1.05)'; this.style.boxShadow='0 20px 40px rgba(109,53,111,0.3)';" onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='none';">
                            <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #6D356F, #9F5BA4); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; box-shadow: 0 10px 30px rgba(109,53,111,0.4);">
                                <i class="fa fa-bolt" style="font-size: 36px; color: white;"></i>
                            </div>
                            <h4 style="font-size: 22px; color: #6D356F; font-weight: 700; margin-bottom: 15px;">EMS</h4>
                            <p style="color: #666; font-size: 15px; margin: 0;">Elektrostymulacja mięśni – intensywne skurcze supramaksymalne</p>
                        </div>
                    </div>

                    <!-- RF Badge -->
                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                        <div style="background: linear-gradient(135deg, rgba(215, 165, 79, 0.1), rgba(232, 192, 104, 0.1)); padding: 40px; border-radius: 20px; text-align: center; border: 2px solid #D7A54F; transition: all 0.4s ease; height: 100%;" onmouseover="this.style.transform='translateY(-10px) scale(1.05)'; this.style.boxShadow='0 20px 40px rgba(215,165,79,0.3)';" onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='none';">
                            <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #D7A54F, #E8C068); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; box-shadow: 0 10px 30px rgba(215,165,79,0.4);">
                                <i class="fa fa-fire" style="font-size: 36px; color: white;"></i>
                            </div>
                            <h4 style="font-size: 22px; color: #D7A54F; font-weight: 700; margin-bottom: 15px;">RF</h4>
                            <p style="color: #666; font-size: 15px; margin: 0;">Fale radiowe – głębokie ogrzewanie i produkcja kolagenu</p>
                        </div>
                    </div>

                    <!-- Vacuum Badge -->
                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                        <div style="background: linear-gradient(135deg, rgba(109, 53, 111, 0.1), rgba(159, 91, 164, 0.1)); padding: 40px; border-radius: 20px; text-align: center; border: 2px solid #6D356F; transition: all 0.4s ease; height: 100%;" onmouseover="this.style.transform='translateY(-10px) scale(1.05)'; this.style.boxShadow='0 20px 40px rgba(109,53,111,0.3)';" onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='none';">
                            <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #6D356F, #9F5BA4); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; box-shadow: 0 10px 30px rgba(109,53,111,0.4);">
                                <i class="fa fa-wind" style="font-size: 36px; color: white;"></i>
                            </div>
                            <h4 style="font-size: 22px; color: #6D356F; font-weight: 700; margin-bottom: 15px;">Vacuum</h4>
                            <p style="color: #666; font-size: 15px; margin: 0;">Masaż podciśnieniowy – drenaż limfatyczny i detoks</p>
                        </div>
                    </div>

                    <!-- HIFEM Badge -->
                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                        <div style="background: linear-gradient(135deg, rgba(215, 165, 79, 0.1), rgba(232, 192, 104, 0.1)); padding: 40px; border-radius: 20px; text-align: center; border: 2px solid #D7A54F; transition: all 0.4s ease; height: 100%;" onmouseover="this.style.transform='translateY(-10px) scale(1.05)'; this.style.boxShadow='0 20px 40px rgba(215,165,79,0.3)';" onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='none';">
                            <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #D7A54F, #E8C068); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; box-shadow: 0 10px 30px rgba(215,165,79,0.4);">
                                <i class="fa fa-magnet" style="font-size: 36px; color: white;"></i>
                            </div>
                            <h4 style="font-size: 22px; color: #D7A54F; font-weight: 700; margin-bottom: 15px;">HIFEM</h4>
                            <p style="color: #666; font-size: 15px; margin: 0;">Wysokoenergetyczne pole elektromagnetyczne</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- How It Works Section with 3D Magnetic Cards -->
            <div style="background: linear-gradient(180deg, #f9f9f9 0%, #ffffff 100%); padding: 80px 0;">
                <div class="container">
                    <div class="text-center" style="margin-bottom: 60px;" data-aos="fade-up">
                        <h2 style="font-size: 42px; color: #6D356F; font-weight: 700; margin-bottom: 20px;">
                            Jak Działa <span style="color: #D7A54F;">Shape & Lift</span>?
                        </h2>
                        <p style="font-size: 18px; color: #444; max-width: 800px; margin: 0 auto;">
                            Nauka i technologia w służbie Twojego piękna
                        </p>
                    </div>

                    <div class="row">
                        <!-- Card 1: EMS -->
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                            <div style="background: white; padding: 40px; border-radius: 20px; box-shadow: 0 10px 40px rgba(0,0,0,0.1); margin-bottom: 30px; transition: all 0.4s ease; border: 2px solid transparent;" onmouseover="this.style.transform='rotateY(5deg) rotateX(5deg)'; this.style.borderColor='#6D356F'; this.style.boxShadow='0 20px 60px rgba(109,53,111,0.3)';" onmouseout="this.style.transform='rotateY(0deg) rotateX(0deg)'; this.style.borderColor='transparent'; this.style.boxShadow='0 10px 40px rgba(0,0,0,0.1)';">
                                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #6D356F, #9F5BA4); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                                    <i class="fa fa-dumbbell" style="font-size: 28px; color: white;"></i>
                                </div>
                                <h4 style="font-size: 24px; color: #6D356F; font-weight: 700; margin-bottom: 15px;">
                                    Elektromiostymulacja
                                </h4>
                                <p style="color: #666; font-size: 16px; line-height: 1.8; margin-bottom: 20px;">
                                    Technologia <strong>EMS</strong> generuje impulsy elektryczne wywołujące <strong>skurcze supramaksymalne</strong> –
                                    intensywniejsze niż podczas tradycyjnych ćwiczeń.
                                </p>
                                <ul style="list-style: none; padding: 0; margin: 0; color: #666;">
                                    <li style="margin-bottom: 10px;"><i class="fa fa-check" style="color: #D7A54F; margin-right: 10px;"></i> Wzrost masy mięśniowej</li>
                                    <li style="margin-bottom: 10px;"><i class="fa fa-check" style="color: #D7A54F; margin-right: 10px;"></i> Wzmocnienie mięśni</li>
                                    <li style="margin-bottom: 10px;"><i class="fa fa-check" style="color: #D7A54F; margin-right: 10px;"></i> Spalanie tłuszczu</li>
                                    <li><i class="fa fa-check" style="color: #D7A54F; margin-right: 10px;"></i> Poprawa metabolizmu</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Card 2: RF -->
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div style="background: white; padding: 40px; border-radius: 20px; box-shadow: 0 10px 40px rgba(0,0,0,0.1); margin-bottom: 30px; transition: all 0.4s ease; border: 2px solid transparent;" onmouseover="this.style.transform='rotateY(5deg) rotateX(5deg)'; this.style.borderColor='#D7A54F'; this.style.boxShadow='0 20px 60px rgba(215,165,79,0.3)';" onmouseout="this.style.transform='rotateY(0deg) rotateX(0deg)'; this.style.borderColor='transparent'; this.style.boxShadow='0 10px 40px rgba(0,0,0,0.1)';">
                                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #D7A54F, #E8C068); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                                    <i class="fa fa-temperature-high" style="font-size: 28px; color: white;"></i>
                                </div>
                                <h4 style="font-size: 24px; color: #D7A54F; font-weight: 700; margin-bottom: 15px;">
                                    Fale Radiowe RF
                                </h4>
                                <p style="color: #666; font-size: 16px; line-height: 1.8; margin-bottom: 20px;">
                                    Fale radiowe penetrują głębokie warstwy skóry, powodując kontrolowane ogrzewanie do <strong>40-42°C</strong>.
                                </p>
                                <ul style="list-style: none; padding: 0; margin: 0; color: #666;">
                                    <li style="margin-bottom: 10px;"><i class="fa fa-check" style="color: #6D356F; margin-right: 10px;"></i> Produkcja kolagenu</li>
                                    <li style="margin-bottom: 10px;"><i class="fa fa-check" style="color: #6D356F; margin-right: 10px;"></i> Poprawa krążenia</li>
                                    <li style="margin-bottom: 10px;"><i class="fa fa-check" style="color: #6D356F; margin-right: 10px;"></i> Przyspieszenie metabolizmu</li>
                                    <li><i class="fa fa-check" style="color: #6D356F; margin-right: 10px;"></i> Efekt liftingu</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Card 3: Vacuum -->
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div style="background: white; padding: 40px; border-radius: 20px; box-shadow: 0 10px 40px rgba(0,0,0,0.1); margin-bottom: 30px; transition: all 0.4s ease; border: 2px solid transparent;" onmouseover="this.style.transform='rotateY(5deg) rotateX(5deg)'; this.style.borderColor='#6D356F'; this.style.boxShadow='0 20px 60px rgba(109,53,111,0.3)';" onmouseout="this.style.transform='rotateY(0deg) rotateX(0deg)'; this.style.borderColor='transparent'; this.style.boxShadow='0 10px 40px rgba(0,0,0,0.1)';">
                                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #6D356F, #9F5BA4); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                                    <i class="fa fa-spa" style="font-size: 28px; color: white;"></i>
                                </div>
                                <h4 style="font-size: 24px; color: #6D356F; font-weight: 700; margin-bottom: 15px;">
                                    Masaż Podciśnieniowy
                                </h4>
                                <p style="color: #666; font-size: 16px; line-height: 1.8; margin-bottom: 20px;">
                                    Technologia <strong>Vacuum</strong> wspomaga drenaż limfatyczny i oczyszczanie organizmu z toksyn.
                                </p>
                                <ul style="list-style: none; padding: 0; margin: 0; color: #666;">
                                    <li style="margin-bottom: 10px;"><i class="fa fa-check" style="color: #D7A54F; margin-right: 10px;"></i> Usuwa nadmiar płynów</li>
                                    <li style="margin-bottom: 10px;"><i class="fa fa-check" style="color: #D7A54F; margin-right: 10px;"></i> Oczyszcza z toksyn</li>
                                    <li style="margin-bottom: 10px;"><i class="fa fa-check" style="color: #D7A54F; margin-right: 10px;"></i> Wygładza cellulit</li>
                                    <li><i class="fa fa-check" style="color: #D7A54F; margin-right: 10px;"></i> Poprawia krążenie</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- For Whom Section -->
            <div class="container" style="padding: 80px 0;">
                <div class="row align-items-center">
                    <div class="col-lg-6" data-aos="fade-right">
                        <h2 style="font-size: 42px; color: #6D356F; font-weight: 700; margin-bottom: 30px;">
                            Dla Kogo Jest <span style="color: #D7A54F;">Shape & Lift</span>?
                        </h2>
                        <p style="font-size: 18px; color: #666; line-height: 1.8; margin-bottom: 30px;">
                            Zabieg został stworzony dla osób, które pragną kompleksowej przemiany swojego ciała bez inwazyjnych zabiegów chirurgicznych.
                        </p>

                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                            <div style="background: linear-gradient(135deg, rgba(109, 53, 111, 0.05), rgba(159, 91, 164, 0.05)); padding: 20px; border-radius: 15px; border-left: 4px solid #6D356F;">
                                <i class="fa fa-heart" style="color: #D7A54F; font-size: 24px; margin-bottom: 10px; display: block;"></i>
                                <p style="color: #444; font-size: 15px; margin: 0;">Chcą ujędrnić sylwetkę bez chirurgii</p>
                            </div>
                            <div style="background: linear-gradient(135deg, rgba(215, 165, 79, 0.05), rgba(232, 192, 104, 0.05)); padding: 20px; border-radius: 15px; border-left: 4px solid #D7A54F;">
                                <i class="fa fa-baby" style="color: #6D356F; font-size: 24px; margin-bottom: 10px; display: block;"></i>
                                <p style="color: #444; font-size: 15px; margin: 0;">Utrata jędrności po ciąży</p>
                            </div>
                            <div style="background: linear-gradient(135deg, rgba(109, 53, 111, 0.05), rgba(159, 91, 164, 0.05)); padding: 20px; border-radius: 15px; border-left: 4px solid #6D356F;">
                                <i class="fa fa-running" style="color: #D7A54F; font-size: 24px; margin-bottom: 10px; display: block;"></i>
                                <p style="color: #444; font-size: 15px; margin: 0;">Osłabione mięśnie</p>
                            </div>
                            <div style="background: linear-gradient(135deg, rgba(215, 165, 79, 0.05), rgba(232, 192, 104, 0.05)); padding: 20px; border-radius: 15px; border-left: 4px solid #D7A54F;">
                                <i class="fa fa-bullseye" style="color: #6D356F; font-size: 24px; margin-bottom: 10px; display: block;"></i>
                                <p style="color: #444; font-size: 15px; margin: 0;">Walczą z cellulitem</p>
                            </div>
                            <div style="background: linear-gradient(135deg, rgba(109, 53, 111, 0.05), rgba(159, 91, 164, 0.05)); padding: 20px; border-radius: 15px; border-left: 4px solid #6D356F;">
                                <i class="fa fa-chart-line" style="color: #D7A54F; font-size: 24px; margin-bottom: 10px; display: block;"></i>
                                <p style="color: #444; font-size: 15px; margin: 0;">Lokalne złogi tłuszczu</p>
                            </div>
                            <div style="background: linear-gradient(135deg, rgba(215, 165, 79, 0.05), rgba(232, 192, 104, 0.05)); padding: 20px; border-radius: 15px; border-left: 4px solid #D7A54F;">
                                <i class="fa fa-bolt" style="color: #6D356F; font-size: 24px; margin-bottom: 10px; display: block;"></i>
                                <p style="color: #444; font-size: 15px; margin: 0;">Szybkie efekty bez rekonwalescencji</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                        <div style="background: linear-gradient(135deg, #6D356F, #9F5BA4); padding: 50px; border-radius: 30px; color: white; text-align: center; box-shadow: 0 20px 60px rgba(109,53,111,0.4);">
                            <h3 style="font-size: 32px; font-weight: 700; color: white; margin-bottom: 30px;">Pierwsze Efekty</h3>
                            <div style="font-size: 72px; font-weight: 700; color: #D7A54F; margin-bottom: 20px;">2-3</div>
                            <p style="font-size: 24px; margin-bottom: 30px;">Zabiegi</p>
                            <p style="font-size: 16px; opacity: 0.9; margin-bottom: 30px;">
                                Widoczne rezultaty już po kilku sesjach!
                            </p>
                            <div style="background: rgba(255,255,255,0.2); padding: 20px; border-radius: 15px; backdrop-filter: blur(10px);">
                                <p style="font-size: 16px; margin: 0;">
                                    <strong>Zalecana seria:</strong> 6-12 zabiegów, 2x w tygodniu
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pricing Section with Body Part Grid -->
            <div id="cennik" style="background: linear-gradient(180deg, #f9f9f9 0%, #ffffff 100%); padding: 80px 0;">
                <div class="container">
                    <div class="text-center" style="margin-bottom: 60px;" data-aos="fade-up">
                        <h2 style="font-size: 42px; color: #6D356F; font-weight: 700; margin-bottom: 20px;">
                            Cennik <span style="color: #D7A54F;">Shape & Lift</span>
                        </h2>
                        <p style="font-size: 18px; color: #444;">
                            Wybierz partię ciała, którą chcesz modelować
                        </p>
                    </div>

                    <div class="row justify-content-center">
                        <!-- Arms -->
                        <div class="col-lg-4 col-md-6" data-aos="flip-up" data-aos-delay="0">
                            <div style="background: white; padding: 40px; border-radius: 20px; text-align: center; box-shadow: 0 10px 40px rgba(0,0,0,0.1); margin-bottom: 30px; transition: all 0.3s ease; border: 3px solid transparent;" onmouseover="this.style.borderColor='#6D356F'; this.style.transform='scale(1.05)'; this.style.boxShadow='0 20px 60px rgba(109,53,111,0.3)';" onmouseout="this.style.borderColor='transparent'; this.style.transform='scale(1)'; this.style.boxShadow='0 10px 40px rgba(0,0,0,0.1)';">
                                <div style="width: 80px; height: 80px; background: linear-gradient(135deg, rgba(109, 53, 111, 0.1), rgba(159, 91, 164, 0.1)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                                    <i class="fa fa-hand-paper" style="font-size: 36px; color: #6D356F;"></i>
                                </div>
                                <h4 style="font-size: 24px; color: #6D356F; font-weight: 700; margin-bottom: 15px;">Ramiona</h4>
                                <p style="color: #666; font-size: 15px; margin-bottom: 20px;">Wzmocnienie i ujędrnienie mięśni ramion</p>
                                <div style="font-size: 48px; font-weight: 700; color: #D7A54F; margin-bottom: 10px;">120 zł</div>
                                <p style="color: #999; font-size: 14px;">za zabieg</p>
                            </div>
                        </div>

                        <!-- Glutes -->
                        <div class="col-lg-4 col-md-6" data-aos="flip-up" data-aos-delay="100">
                            <div style="background: linear-gradient(135deg, #6D356F, #9F5BA4); padding: 40px; border-radius: 20px; text-align: center; box-shadow: 0 10px 40px rgba(109,53,111,0.4); margin-bottom: 30px; position: relative; border: 3px solid #D7A54F; transform: scale(1.05);">
                                <div style="position: absolute; top: -15px; right: 20px; background: #D7A54F; color: white; padding: 8px 20px; border-radius: 20px; font-weight: 700; font-size: 12px; box-shadow: 0 5px 15px rgba(215,165,79,0.5);">
                                    BESTSELLER
                                </div>
                                <div style="width: 80px; height: 80px; background: rgba(255,255,255,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; backdrop-filter: blur(10px);">
                                    <i class="fa fa-circle" style="font-size: 36px; color: white;"></i>
                                </div>
                                <h4 style="font-size: 24px; color: white; font-weight: 700; margin-bottom: 15px;">Pośladki</h4>
                                <p style="color: rgba(255,255,255,0.9); font-size: 15px; margin-bottom: 20px;">Lifting pośladków bez skalpela!</p>
                                <div style="font-size: 48px; font-weight: 700; color: #D7A54F; margin-bottom: 10px;">160 zł</div>
                                <p style="color: rgba(255,255,255,0.7); font-size: 14px;">za zabieg</p>
                            </div>
                        </div>

                        <!-- Abdomen -->
                        <div class="col-lg-4 col-md-6" data-aos="flip-up" data-aos-delay="200">
                            <div style="background: white; padding: 40px; border-radius: 20px; text-align: center; box-shadow: 0 10px 40px rgba(0,0,0,0.1); margin-bottom: 30px; transition: all 0.3s ease; border: 3px solid transparent;" onmouseover="this.style.borderColor='#D7A54F'; this.style.transform='scale(1.05)'; this.style.boxShadow='0 20px 60px rgba(215,165,79,0.3)';" onmouseout="this.style.borderColor='transparent'; this.style.transform='scale(1)'; this.style.boxShadow='0 10px 40px rgba(0,0,0,0.1)';">
                                <div style="width: 80px; height: 80px; background: linear-gradient(135deg, rgba(215, 165, 79, 0.1), rgba(232, 192, 104, 0.1)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                                    <i class="fa fa-square" style="font-size: 36px; color: #D7A54F;"></i>
                                </div>
                                <h4 style="font-size: 24px; color: #D7A54F; font-weight: 700; margin-bottom: 15px;">Brzuch</h4>
                                <p style="color: #666; font-size: 15px; margin-bottom: 20px;">Wzmocnienie mięśni, płaski brzuch</p>
                                <div style="font-size: 48px; font-weight: 700; color: #6D356F; margin-bottom: 10px;">160 zł</div>
                                <p style="color: #999; font-size: 14px;">za zabieg</p>
                            </div>
                        </div>

                        <!-- Thighs -->
                        <div class="col-lg-4 col-md-6" data-aos="flip-up" data-aos-delay="300">
                            <div style="background: white; padding: 40px; border-radius: 20px; text-align: center; box-shadow: 0 10px 40px rgba(0,0,0,0.1); margin-bottom: 30px; transition: all 0.3s ease; border: 3px solid transparent;" onmouseover="this.style.borderColor='#6D356F'; this.style.transform='scale(1.05)'; this.style.boxShadow='0 20px 60px rgba(109,53,111,0.3)';" onmouseout="this.style.borderColor='transparent'; this.style.transform='scale(1)'; this.style.boxShadow='0 10px 40px rgba(0,0,0,0.1)';">
                                <div style="width: 80px; height: 80px; background: linear-gradient(135deg, rgba(109, 53, 111, 0.1), rgba(159, 91, 164, 0.1)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                                    <i class="fa fa-arrows-alt-v" style="font-size: 36px; color: #6D356F;"></i>
                                </div>
                                <h4 style="font-size: 24px; color: #6D356F; font-weight: 700; margin-bottom: 15px;">Uda</h4>
                                <p style="color: #666; font-size: 15px; margin-bottom: 20px;">Ujędrnienie i redukcja cellulitu</p>
                                <div style="font-size: 48px; font-weight: 700; color: #D7A54F; margin-bottom: 10px;">160 zł</div>
                                <p style="color: #999; font-size: 14px;">za zabieg</p>
                            </div>
                        </div>

                        <!-- Calves -->
                        <div class="col-lg-4 col-md-6" data-aos="flip-up" data-aos-delay="400">
                            <div style="background: white; padding: 40px; border-radius: 20px; text-align: center; box-shadow: 0 10px 40px rgba(0,0,0,0.1); margin-bottom: 30px; transition: all 0.3s ease; border: 3px solid transparent;" onmouseover="this.style.borderColor='#D7A54F'; this.style.transform='scale(1.05)'; this.style.boxShadow='0 20px 60px rgba(215,165,79,0.3)';" onmouseout="this.style.borderColor='transparent'; this.style.transform='scale(1)'; this.style.boxShadow='0 10px 40px rgba(0,0,0,0.1)';">
                                <div style="width: 80px; height: 80px; background: linear-gradient(135deg, rgba(215, 165, 79, 0.1), rgba(232, 192, 104, 0.1)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                                    <i class="fa fa-shoe-prints" style="font-size: 36px; color: #D7A54F;"></i>
                                </div>
                                <h4 style="font-size: 24px; color: #D7A54F; font-weight: 700; margin-bottom: 15px;">Łydki</h4>
                                <p style="color: #666; font-size: 15px; margin-bottom: 20px;">Modelowanie i wzmocnienie</p>
                                <div style="font-size: 48px; font-weight: 700; color: #6D356F; margin-bottom: 10px;">160 zł</div>
                                <p style="color: #999; font-size: 14px;">za zabieg</p>
                            </div>
                        </div>
                    </div>

                    <!-- Package Offer -->
                    <div class="row justify-content-center" style="margin-top: 40px;">
                        <div class="col-lg-8" data-aos="zoom-in">
                            <div style="background: linear-gradient(135deg, rgba(215, 165, 79, 0.1), rgba(232, 192, 104, 0.1)); padding: 40px; border-radius: 20px; text-align: center; border: 3px dashed #D7A54F;">
                                <h4 style="font-size: 28px; color: #6D356F; font-weight: 700; margin-bottom: 20px;">
                                    <i class="fa fa-gift" style="color: #D7A54F; margin-right: 10px;"></i>
                                    Pakiety Promocyjne
                                </h4>
                                <p style="font-size: 18px; color: #666; margin-bottom: 20px;">
                                    Seria 8 zabiegów na brzuch: <strong style="color: #D7A54F;">1280 zł</strong>
                                </p>
                                <p style="font-size: 16px; color: #999;">
                                    Zapytaj o indywidualne pakiety podczas konsultacji!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Procedure Section -->
            <div class="container" style="padding: 80px 0;">
                <div class="text-center" style="margin-bottom: 60px;" data-aos="fade-up">
                    <h2 style="font-size: 42px; color: #6D356F; font-weight: 700; margin-bottom: 20px;">
                        Przebieg <span style="color: #D7A54F;">Zabiegu</span>
                    </h2>
                    <p style="font-size: 18px; color: #444;">
                        Komfortowy zabieg w 4 prostych krokach
                    </p>
                </div>

                <div class="row">
                    <!-- Step 1 -->
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="0">
                        <div style="text-align: center; padding: 30px; position: relative;">
                            <div style="width: 100px; height: 100px; background: linear-gradient(135deg, #6D356F, #9F5BA4); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; box-shadow: 0 10px 30px rgba(109,53,111,0.3); font-size: 48px; color: white; font-weight: 700;">
                                1
                            </div>
                            <h4 style="font-size: 20px; color: #6D356F; font-weight: 700; margin-bottom: 15px;">Konsultacja</h4>
                            <p style="color: #666; font-size: 15px;">Bezpłatna konsultacja i ocena stanu skóry przez specjalistę</p>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div style="text-align: center; padding: 30px; position: relative;">
                            <div style="width: 100px; height: 100px; background: linear-gradient(135deg, #D7A54F, #E8C068); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; box-shadow: 0 10px 30px rgba(215,165,79,0.3); font-size: 48px; color: white; font-weight: 700;">
                                2
                            </div>
                            <h4 style="font-size: 20px; color: #D7A54F; font-weight: 700; margin-bottom: 15px;">Przygotowanie</h4>
                            <p style="color: #666; font-size: 15px;">Wypicie 1,5-2L wody, lekki posiłek, czysta skóra</p>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div style="text-align: center; padding: 30px; position: relative;">
                            <div style="width: 100px; height: 100px; background: linear-gradient(135deg, #6D356F, #9F5BA4); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; box-shadow: 0 10px 30px rgba(109,53,111,0.3); font-size: 48px; color: white; font-weight: 700;">
                                3
                            </div>
                            <h4 style="font-size: 20px; color: #6D356F; font-weight: 700; margin-bottom: 15px;">Zabieg</h4>
                            <p style="color: #666; font-size: 15px;">20-30 minut relaksu z aplikatorami EMS, RF i Vacuum</p>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div style="text-align: center; padding: 30px; position: relative;">
                            <div style="width: 100px; height: 100px; background: linear-gradient(135deg, #D7A54F, #E8C068); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; box-shadow: 0 10px 30px rgba(215,165,79,0.3); font-size: 48px; color: white; font-weight: 700;">
                                4
                            </div>
                            <h4 style="font-size: 20px; color: #D7A54F; font-weight: 700; margin-bottom: 15px;">Po Zabiegu</h4>
                            <p style="color: #666; font-size: 15px;">Brak rekonwalescencji - natychmiastowy powrót do aktywności</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Comparison Table -->
            <div style="background: linear-gradient(180deg, #f9f9f9 0%, #ffffff 100%); padding: 80px 0;">
                <div class="container">
                    <div class="text-center" style="margin-bottom: 60px;" data-aos="fade-up">
                        <h2 style="font-size: 42px; color: #6D356F; font-weight: 700; margin-bottom: 20px;">
                            Porównanie <span style="color: #D7A54F;">Metod</span>
                        </h2>
                        <p style="font-size: 18px; color: #444;">
                            Shape & Lift vs inne zabiegi modelujące
                        </p>
                    </div>

                    <div style="overflow-x: auto;" data-aos="zoom-in">
                        <table style="width: 100%; background: white; border-radius: 20px; overflow: hidden; box-shadow: 0 10px 40px rgba(0,0,0,0.1);">
                            <thead>
                                <tr style="background: linear-gradient(135deg, #6D356F, #9F5BA4); color: white;">
                                    <th style="padding: 20px; text-align: left; font-size: 16px; font-weight: 700;">Zabieg</th>
                                    <th style="padding: 20px; text-align: center; font-size: 16px; font-weight: 700;">Technologia</th>
                                    <th style="padding: 20px; text-align: center; font-size: 16px; font-weight: 700;">Czas Efektów</th>
                                    <th style="padding: 20px; text-align: center; font-size: 16px; font-weight: 700;">Rekonwalescencja</th>
                                    <th style="padding: 20px; text-align: center; font-size: 16px; font-weight: 700;">Cena</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="background: linear-gradient(135deg, rgba(215, 165, 79, 0.1), rgba(232, 192, 104, 0.1)); border-bottom: 2px solid #D7A54F;">
                                    <td style="padding: 20px; font-weight: 700; color: #6D356F;">Shape & Lift</td>
                                    <td style="padding: 20px; text-align: center; color: #666;">EMS + RF + Vacuum</td>
                                    <td style="padding: 20px; text-align: center; color: #666;">2-3 zabiegi</td>
                                    <td style="padding: 20px; text-align: center; color: #28a745; font-weight: 700;">Brak</td>
                                    <td style="padding: 20px; text-align: center; font-weight: 700; color: #D7A54F;">Od 120 zł</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #eee;">
                                    <td style="padding: 20px; font-weight: 600; color: #444;">Liposukcja</td>
                                    <td style="padding: 20px; text-align: center; color: #666;">Chirurgiczne odsysanie</td>
                                    <td style="padding: 20px; text-align: center; color: #666;">Natychmiastowe</td>
                                    <td style="padding: 20px; text-align: center; color: #dc3545; font-weight: 700;">2-4 tygodnie</td>
                                    <td style="padding: 20px; text-align: center; color: #666;">Od 5000 zł</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #eee; background: rgba(0,0,0,0.02);">
                                    <td style="padding: 20px; font-weight: 600; color: #444;">Kriolipoliza</td>
                                    <td style="padding: 20px; text-align: center; color: #666;">Zamrażanie tłuszczu</td>
                                    <td style="padding: 20px; text-align: center; color: #666;">6-8 tygodni</td>
                                    <td style="padding: 20px; text-align: center; color: #28a745; font-weight: 700;">Brak</td>
                                    <td style="padding: 20px; text-align: center; color: #666;">Od 500 zł</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #eee;">
                                    <td style="padding: 20px; font-weight: 600; color: #444;">Kawitacja</td>
                                    <td style="padding: 20px; text-align: center; color: #666;">Ultradźwięki</td>
                                    <td style="padding: 20px; text-align: center; color: #666;">4-6 zabiegów</td>
                                    <td style="padding: 20px; text-align: center; color: #28a745; font-weight: 700;">Brak</td>
                                    <td style="padding: 20px; text-align: center; color: #666;">Od 150 zł</td>
                                </tr>
                                <tr style="background: rgba(0,0,0,0.02);">
                                    <td style="padding: 20px; font-weight: 600; color: #444;">Endermologia (LPG)</td>
                                    <td style="padding: 20px; text-align: center; color: #666;">Masaż mechaniczny</td>
                                    <td style="padding: 20px; text-align: center; color: #666;">6-10 zabiegów</td>
                                    <td style="padding: 20px; text-align: center; color: #28a745; font-weight: 700;">Brak</td>
                                    <td style="padding: 20px; text-align: center; color: #666;">Od 100 zł</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div style="margin-top: 40px; text-align: center;" data-aos="fade-up">
                        <div style="background: linear-gradient(135deg, rgba(109, 53, 111, 0.1), rgba(159, 91, 164, 0.1)); padding: 30px; border-radius: 20px; border-left: 5px solid #6D356F; display: inline-block; max-width: 800px;">
                            <p style="font-size: 18px; color: #444; margin: 0; line-height: 1.8;">
                                <strong style="color: #6D356F;">Shape & Lift</strong> wyróżnia się tym, że <strong>nie tylko redukuje tkankę tłuszczową</strong>,
                                ale przede wszystkim <strong style="color: #D7A54F;">buduje i wzmacnia mięśnie</strong>, co daje efekt naprawdę wyrzeźbionego,
                                atletycznego ciała – nie tylko szczupłego, ale też jędrnego i umięśnionego!
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonials Section with Staggered Layout -->
            <div class="container" style="padding: 80px 0;">
                <div class="text-center" style="margin-bottom: 60px;" data-aos="fade-up">
                    <h2 style="font-size: 42px; color: #6D356F; font-weight: 700; margin-bottom: 20px;">
                        Opinie <span style="color: #D7A54F;">Naszych Klientów</span>
                    </h2>
                    <p style="font-size: 18px; color: #444;">
                        Co mówią o Shape & Lift?
                    </p>
                </div>

                <div class="row">
                    <!-- Testimonial 1 -->
                    <div class="col-lg-6" data-aos="fade-right" data-aos-delay="0">
                        <div style="background: white; padding: 40px; border-radius: 20px; box-shadow: 0 10px 40px rgba(0,0,0,0.1); margin-bottom: 30px; position: relative; border-left: 5px solid #6D356F;">
                            <div style="color: #D7A54F; font-size: 48px; margin-bottom: 20px;">"</div>
                            <p style="color: #666; font-size: 16px; line-height: 1.8; margin-bottom: 20px;">
                                Po ciąży i karmieniu moje pośladki straciły jędrność. Po 8 zabiegach Shape & Lift w Magic Salon wyglądają lepiej niż przed ciążą!
                                Nie mogę uwierzyć, że to moje ciało. Polecam każdej mamie!
                            </p>
                            <div style="display: flex; align-items: center; gap: 15px;">
                                <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #6D356F, #9F5BA4); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 700; font-size: 20px;">
                                    K
                                </div>
                                <div>
                                    <div style="font-weight: 700; color: #6D356F;">Karolina</div>
                                    <div style="color: #D7A54F; font-size: 14px;">⭐⭐⭐⭐⭐</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                        <div style="background: white; padding: 40px; border-radius: 20px; box-shadow: 0 10px 40px rgba(0,0,0,0.1); margin-bottom: 30px; position: relative; border-left: 5px solid #D7A54F; margin-top: 50px;">
                            <div style="color: #6D356F; font-size: 48px; margin-bottom: 20px;">"</div>
                            <p style="color: #666; font-size: 16px; line-height: 1.8; margin-bottom: 20px;">
                                Przez lata walczyłam z 'oponą' na brzuchu. Dieta i ćwiczenia nie pomagały. Shape & Lift był dla mnie przełomem –
                                po 10 zabiegach straciłam 6 cm w talii i mój brzuch jest naprawdę płaski!
                            </p>
                            <div style="display: flex; align-items: center; gap: 15px;">
                                <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #D7A54F, #E8C068); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 700; font-size: 20px;">
                                    A
                                </div>
                                <div>
                                    <div style="font-weight: 700; color: #D7A54F;">Anna</div>
                                    <div style="color: #6D356F; font-size: 14px;">⭐⭐⭐⭐⭐</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 3 -->
                    <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                        <div style="background: white; padding: 40px; border-radius: 20px; box-shadow: 0 10px 40px rgba(0,0,0,0.1); margin-bottom: 30px; position: relative; border-left: 5px solid #6D356F;">
                            <div style="color: #D7A54F; font-size: 48px; margin-bottom: 20px;">"</div>
                            <p style="color: #666; font-size: 16px; line-height: 1.8; margin-bottom: 20px;">
                                Jestem aktywny sportowo, ale niektóre partie ciała były oporne na trening. Shape & Lift pomógł mi wyrzeźbić mięśnie brzucha i ramion. Efekty są niesamowite!
                            </p>
                            <div style="display: flex; align-items: center; gap: 15px;">
                                <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #6D356F, #9F5BA4); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 700; font-size: 20px;">
                                    M
                                </div>
                                <div>
                                    <div style="font-weight: 700; color: #6D356F;">Michał</div>
                                    <div style="color: #D7A54F; font-size: 14px;">⭐⭐⭐⭐⭐</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 4 -->
                    <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
                        <div style="background: white; padding: 40px; border-radius: 20px; box-shadow: 0 10px 40px rgba(0,0,0,0.1); margin-bottom: 30px; position: relative; border-left: 5px solid #D7A54F; margin-top: 50px;">
                            <div style="color: #6D356F; font-size: 48px; margin-bottom: 20px;">"</div>
                            <p style="color: #666; font-size: 16px; line-height: 1.8; margin-bottom: 20px;">
                                Cellulit na udach był moim kompleksem od lat. Po serii zabiegów Shape & Lift moja skóra jest gładka i jędrna.
                                W końcu mogę nosić krótkie spódnice bez wstydu!
                            </p>
                            <div style="display: flex; align-items: center; gap: 15px;">
                                <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #D7A54F, #E8C068); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 700; font-size: 20px;">
                                    M
                                </div>
                                <div>
                                    <div style="font-weight: 700; color: #D7A54F;">Małgorzata</div>
                                    <div style="color: #6D356F; font-size: 14px;">⭐⭐⭐⭐⭐</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQ Section -->
            <div style="background: linear-gradient(180deg, #f9f9f9 0%, #ffffff 100%); padding: 80px 0;">
                <div class="container">
                    <div class="text-center" style="margin-bottom: 60px;" data-aos="fade-up">
                        <h2 style="font-size: 42px; color: #6D356F; font-weight: 700; margin-bottom: 20px;">
                            Często Zadawane <span style="color: #D7A54F;">Pytania</span>
                        </h2>
                        <p style="font-size: 18px; color: #444;">
                            Wszystko, co musisz wiedzieć o Shape & Lift
                        </p>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="accordion" id="faqAccordion">
                                <!-- FAQ 1 -->
                                <div class="accordion-item" style="border: none; margin-bottom: 20px;" data-aos="fade-up" data-aos-delay="0">
                                    <h2 class="accordion-header" style="border-radius: 15px; overflow: hidden;">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" style="background: white; color: #6D356F; font-weight: 700; font-size: 18px; padding: 25px; box-shadow: 0 5px 20px rgba(0,0,0,0.1); border-radius: 15px;">
                                            Czy zabieg Shape & Lift jest bolesny?
                                        </button>
                                    </h2>
                                    <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body" style="background: white; padding: 25px; color: #666; font-size: 16px; line-height: 1.8; box-shadow: 0 5px 20px rgba(0,0,0,0.05); border-radius: 0 0 15px 15px;">
                                            <strong>Nie!</strong> Zabieg jest całkowicie bezbolesny. Większość pacjentów odczuwa przyjemne mrowienie, delikatne wibracje i ciepło. Wielu opisuje go jako relaksujący masaż.
                                        </div>
                                    </div>
                                </div>

                                <!-- FAQ 2 -->
                                <div class="accordion-item" style="border: none; margin-bottom: 20px;" data-aos="fade-up" data-aos-delay="100">
                                    <h2 class="accordion-header" style="border-radius: 15px; overflow: hidden;">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" style="background: white; color: #6D356F; font-weight: 700; font-size: 18px; padding: 25px; box-shadow: 0 5px 20px rgba(0,0,0,0.1); border-radius: 15px;">
                                            Kiedy zobaczę pierwsze efekty?
                                        </button>
                                    </h2>
                                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body" style="background: white; padding: 25px; color: #666; font-size: 16px; line-height: 1.8; box-shadow: 0 5px 20px rgba(0,0,0,0.05); border-radius: 0 0 15px 15px;">
                                            Pierwsze efekty widoczne są już po <strong>2-3 zabiegach</strong>, jednak najlepsze rezultaty osiągniesz po zakończeniu pełnej serii 6-12 zabiegów.
                                        </div>
                                    </div>
                                </div>

                                <!-- FAQ 3 -->
                                <div class="accordion-item" style="border: none; margin-bottom: 20px;" data-aos="fade-up" data-aos-delay="200">
                                    <h2 class="accordion-header" style="border-radius: 15px; overflow: hidden;">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" style="background: white; color: #6D356F; font-weight: 700; font-size: 18px; padding: 25px; box-shadow: 0 5px 20px rgba(0,0,0,0.1); border-radius: 15px;">
                                            Czy efekty są trwałe?
                                        </button>
                                    </h2>
                                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body" style="background: white; padding: 25px; color: #666; font-size: 16px; line-height: 1.8; box-shadow: 0 5px 20px rgba(0,0,0,0.05); border-radius: 0 0 15px 15px;">
                                            <strong>Tak, jeśli dbasz o odpowiedni styl życia!</strong> Przy regularnej aktywności fizycznej i zdrowej diecie efekty mogą utrzymywać się przez wiele miesięcy, a nawet lat. Zalecamy zabiegi przypominające raz na 3-4 tygodnie.
                                        </div>
                                    </div>
                                </div>

                                <!-- FAQ 4 -->
                                <div class="accordion-item" style="border: none; margin-bottom: 20px;" data-aos="fade-up" data-aos-delay="300">
                                    <h2 class="accordion-header" style="border-radius: 15px; overflow: hidden;">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" style="background: white; color: #6D356F; font-weight: 700; font-size: 18px; padding: 25px; box-shadow: 0 5px 20px rgba(0,0,0,0.1); border-radius: 15px;">
                                            Czy mogę łączyć Shape & Lift z innymi zabiegami?
                                        </button>
                                    </h2>
                                    <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body" style="background: white; padding: 25px; color: #666; font-size: 16px; line-height: 1.8; box-shadow: 0 5px 20px rgba(0,0,0,0.05); border-radius: 0 0 15px 15px;">
                                            <strong>Oczywiście!</strong> Shape & Lift doskonale komponuje się z innymi zabiegami modelującymi, takimi jak liposukcja ultradźwiękowa, lipolaser, czy dermomasaż. Nasz specjalista pomoże Ci stworzyć optymalny plan zabiegowy.
                                        </div>
                                    </div>
                                </div>

                                <!-- FAQ 5 -->
                                <div class="accordion-item" style="border: none; margin-bottom: 20px;" data-aos="fade-up" data-aos-delay="400">
                                    <h2 class="accordion-header" style="border-radius: 15px; overflow: hidden;">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" style="background: white; color: #6D356F; font-weight: 700; font-size: 18px; padding: 25px; box-shadow: 0 5px 20px rgba(0,0,0,0.1); border-radius: 15px;">
                                            Ile kosztuje seria zabiegów?
                                        </button>
                                    </h2>
                                    <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body" style="background: white; padding: 25px; color: #666; font-size: 16px; line-height: 1.8; box-shadow: 0 5px 20px rgba(0,0,0,0.05); border-radius: 0 0 15px 15px;">
                                            Cena zależy od liczby zabiegów i partii ciała. Przykładowo, seria 8 zabiegów na brzuch to <strong style="color: #D7A54F;">1280 zł</strong>. Oferujemy również pakiety promocyjne – zapytaj o szczegóły podczas konsultacji!
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Final CTA Section -->
            <div style="background: linear-gradient(135deg, #6D356F 0%, #6D356F 100%); padding: 100px 0; position: relative; overflow: hidden;">
                <div style="position: absolute; top: -50px; right: -50px; width: 300px; height: 300px; background: rgba(255,255,255,0.1); border-radius: 50%;"></div>
                <div style="position: absolute; bottom: -100px; left: -100px; width: 400px; height: 400px; background: rgba(215,165,79,0.1); border-radius: 50%;"></div>

                <div class="container" style="position: relative; z-index: 2;">
                    <div class="text-center" data-aos="zoom-in">
                        <h2 style="font-size: 48px; color: white; font-weight: 700; margin-bottom: 30px;">
                            Zacznij Swoją <span style="color: #D7A54F;">Metamorfozę</span> Już Dziś!
                        </h2>
                        <p style="font-size: 22px; color: rgba(255,255,255,0.9); margin-bottom: 40px; max-width: 800px; margin-left: auto; margin-right: auto;">
                            Shape & Lift to Twoja droga do jędrnego, wyrzeźbionego ciała bez skalpela i długiej rekonwalescencji!
                        </p>

                        <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap; margin-bottom: 50px;">
                            <a href="https://booksy.magicsalon.pl" target="_blank" style="background: linear-gradient(135deg, #D7A54F, #E8C068); color: #222; padding: 20px 50px; border-radius: 50px; font-weight: 700; font-size: 18px; text-decoration: none; display: inline-block; box-shadow: 0 10px 30px rgba(215,165,79,0.5); transition: all 0.3s ease;">
                                <i class="fa fa-calendar-check" style="margin-right: 10px;"></i>
                                Umów Wizytę Online
                            </a>
                            <a href="tel:+48883481581" style="background: rgba(255,255,255,0.2); backdrop-filter: blur(10px); color: white; padding: 20px 50px; border-radius: 50px; font-weight: 700; font-size: 18px; text-decoration: none; display: inline-block; border: 2px solid rgba(255,255,255,0.3); transition: all 0.3s ease;">
                                <i class="fa fa-phone" style="margin-right: 10px;"></i>
                                +48 883 481 581
                            </a>
                        </div>

                        <div style="display: flex; gap: 40px; justify-content: center; flex-wrap: wrap; color: white;">
                            <div>
                                <i class="fa fa-map-marker-alt" style="color: #D7A54F; font-size: 24px; margin-bottom: 10px; display: block;"></i>
                                <p style="margin: 0; font-size: 16px;">ul. Borówkowa 13, Dobrzykowice</p>
                            </div>
                            <div>
                                <i class="fa fa-clock" style="color: #D7A54F; font-size: 24px; margin-bottom: 10px; display: block;"></i>
                                <p style="margin: 0; font-size: 16px;">Pon-Sob: 9:00-18:00</p>
                            </div>
                            <div>
                                <i class="fa fa-envelope" style="color: #D7A54F; font-size: 24px; margin-bottom: 10px; display: block;"></i>
                                <p style="margin: 0; font-size: 16px;">biuro@magicsalon.pl</p>
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

    <link rel="stylesheet" href="css/aos.css" />
    <script src="js/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
            offset: 100
        });
    </script>

</body>
</html>
