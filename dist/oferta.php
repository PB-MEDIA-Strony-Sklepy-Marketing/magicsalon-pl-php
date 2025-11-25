<?php

/**
 * MAGIC SALON - Oferta (oferta.php)
 * Wersja: 2.3 - Zoptymalizowane treści SEO i zmienne dla Oferty
 */

// Załaduj konfigurację
require_once __DIR__ . DIRECTORY_SEPARATOR . 'config.php';

// Konfiguracja meta tagów dla strony Oferty
$meta = [
    'title' => 'Oferta Zabiegów i Cennik Usług | MAGIC SALON Dobrzykowice',
    'description' => 'Poznaj pełną ofertę MAGIC SALON. Nowoczesna kosmetologia, epilacja laserowa, modelowanie sylwetki, stylizacja rzęs i brwi. Sprawdź szczegóły naszych zabiegów i umów wizytę.',
    'keywords' => 'oferta magic salon, zabiegi kosmetyczne dobrzykowice, cennik usług kosmetycznych, epilacja laserowa oferta, zabiegi na twarz wrocław, modelowanie sylwetki cennik',
    'canonical' => BASE_URL . '/oferta.php',
    'robots' => 'index, follow, max-image-preview:large',
    'og' => [
        'type' => 'website',
        'title' => 'Oferta Zabiegów – Piękno i Relaks w MAGIC SALON',
        'description' => 'Kompleksowa pielęgnacja twarzy i ciała. Sprawdź naszą ofertę zabiegową i wybierz idealne rozwiązanie dla siebie.',
        'url' => BASE_URL . '/oferta.php',
        'image' => BASE_URL . '/images/nasza-oferta/glowlift.jpg', // Reprezentatywne zdjęcie usługi
    ],
    'twitter' => [
        'card' => 'summary_large_image',
        'title' => 'Oferta MAGIC SALON – Twoje Piękno w Dobrych Rękach',
        'description' => 'Zobacz jakie zabiegi oferujemy w naszym salonie w Dobrzykowicach.',
    ],
    'schema' => [
        'enabled' => true,
        'type' => 'Service', // Schema dla usług
        'name' => 'Usługi Kosmetyczne MAGIC SALON',
        'description' => 'Szeroki zakres usług kosmetycznych: zabiegi na twarz, ciało, laseroterapia i stylizacja oprawy oka.',
        'provider' => [
            '@type' => 'BeautySalon',
            'name' => 'MAGIC SALON',
            'address' => [
                'streetAddress' => 'ul. Borówkowa 13',
                'postalCode' => '55-002',
                'addressLocality' => 'Dobrzykowice',
                'addressCountry' => 'PL'
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
            // Konfiguracja dynamicznego banera i breadcrumbs dla podstrony Oferta
            $banner_img = 'images/banner/gallery-banner.jpg'; // Jeśli masz dedykowany baner np. 'offer-banner.jpg', użyj go tutaj
            $page_title = 'Nasza Oferta Zabiegowa';
            // Unikalny opis, budujący wizerunek ekspercki i zachęcający do eksploracji usług
            $page_desc = 'W MAGIC SALON łączymy zaawansowane technologie z holistycznym podejściem do pielęgnacji. Nasza oferta to starannie wyselekcjonowane zabiegi na twarz i ciało, które nie tylko poprawiają wygląd, ale także przywracają równowagę i dobre samopoczucie. Niezależnie od tego, czy szukasz spektakularnej metamorfozy, czy chwili głębokiego relaksu – znajdziesz tu rozwiązanie skrojone na miarę Twoich potrzeb.';
            
            $breadcrumbs = [
                [
                    'label' => 'Strona Główna',
                    'url' => 'index.php',
                    'icon' => 'fa fa-home'
                ],
                [
                    'label' => 'Oferta Usług',
                    'url' => '', // Element aktywny
                    'icon' => ''
                ]
            ];
            
            // Załadowanie dedykowanego partiala (korzystamy z wersji breadcrumbs-botttom-header.php dla spójności)
            include 'partials/breadcrumbs.php';
            ?>

            <!-- SECTION CONTENT -->
            <div class="section-full p-t80 p-b50">
                <div class="container">
                    <!-- TITLE START -->
                    <div class="section-head text-center">
                        <h3 class="text-uppercase">Zadbaj o siebie kompleksowo – odkryj ofertę MAGIC SALON!</h3>
                        <div class="wt-separator-outer">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left site-bg-primary"></span>
                                <span class="separator-right site-bg-primary"></span>
                            </div>
                        </div>
                        <p>W MAGIC SALON wierzymy, że piękno to nie luksus, a codzienność, na którą zasługuje każdy z nas. Dlatego stworzyliśmy miejsce, gdzie nowoczesne technologie kosmetologiczne łączą się z relaksem, bezpieczeństwem i najwyższą jakością obsługi. Oferta to kompleksowa gama zabiegów pielęgnacyjnych, estetycznych i relaksacyjnych, które pomogą Ci wyglądać i czuć się najlepiej — każdego dnia.</p>
                    </div>
                    <!-- TITLE END -->
                    <div class="section-content">
                        <div class="row">

                            <!-- COLUMNS 1 -->
                            <div class="col-lg-4 col-md-6 m-b30 animate bounceInLeft animated">
                                <div class="wt-box bg-white">
                                    <div class="wt-media wt-thum-bx wt-img-effect off-color">
                                        <a href="nasza-oferta/glow-lift.html"><img src="images/nasza-oferta/glowlift.jpg" alt="Glow & Lift – Lifting i rozświetlenie twarzy"></a>
                                    </div>
                                    <div class="wt-info p-a30 bg-gray">
                                        <h4 class="wt-title m-t0"><a href="nasza-oferta/glow-lift.html">Glow & Lift – Lifting i rozświetlenie twarzy</a></h4>
                                        <p>Zabieg stworzony z myślą o osobach, które pragną natychmiastowego efektu liftingu, rozświetlenia i ujędrnienia skóry. Dzięki wykorzystaniu nowoczesnych technologii stymulujemy produkcję kolagenu i elastyny, co przekłada się na młodszy i zdrowszy wygląd.</p>
                                        <a href="nasza-oferta/glow-lift.html" class="site-button ">Czytaj więcej <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 2 -->
                            <div class="col-lg-4 col-md-6 m-b30 animate bounceInLeft animated">
                                <div class="wt-box bg-white">
                                    <div class="wt-media wt-thum-bx wt-img-effect off-color">
                                        <a href="nasza-oferta/detox-drenaz.html"><img src="images/nasza-oferta/detoxdrenaz.jpg" alt="Detox & Drenaż – oczyszczenie i lekkość"></a>
                                    </div>
                                    <div class="wt-info p-a30 bg-gray">
                                        <h4 class="wt-title m-t0"><a href="nasza-oferta/detox-drenaz.html">Detox & Drenaż – oczyszczenie i lekkość</a></h4>
                                        <p>Idealne rozwiązanie dla osób borykających się z opuchlizną, uczuciem ciężkości i zanieczyszczoną skórą. Zabieg działa detoksykująco, wspomaga metabolizm i poprawia krążenie limfy, przynosząc natychmiastową ulgę i świeżość.</p>
                                        <a href="nasza-oferta/detox-drenaz.html" class="site-button ">Czytaj więcej <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 3 -->
                            <div class="col-lg-4 col-md-6 m-b30 animate bounceInLeft animated">
                                <div class="wt-box bg-white">
                                    <div class="wt-media wt-thum-bx wt-img-effect off-color">
                                        <a href="nasza-oferta/silkroll.html"><img src="images/nasza-oferta/silkroll.jpg" alt="SilkRoll – wygładzenie i regeneracja"></a>
                                    </div>
                                    <div class="wt-info p-a30 bg-gray">
                                        <h4 class="wt-title m-t0"><a href="nasza-oferta/silkroll.html">SilkRoll – wygładzenie i regeneracja</a></h4>
                                        <p>To luksusowy zabieg dla skóry zmęczonej i pozbawionej blasku. Dzięki mikromasażowi oraz regenerującym składnikom aktywnym, skóra staje się jedwabiście gładka, nawilżona i pełna energii.</p>
                                        <a href="nasza-oferta/silkroll.html" class="site-button ">Czytaj więcej <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 4 -->
                            <div class="col-lg-4 col-md-6 m-b30 animate bounceInRight animated">
                                <div class="wt-box bg-white">
                                    <div class="wt-media wt-thum-bx wt-img-effect off-color">
                                        <a href="nasza-oferta/modelowanie-360.html"><img src="images/nasza-oferta/modelowaniesylwetki360.jpg" alt="Modelowanie 360° – kompleksowe podejście do ciała"></a>
                                    </div>
                                    <div class="wt-info p-a30 bg-gray">
                                        <h4 class="wt-title m-t0"><a href="nasza-oferta/modelowanie-360.html">Modelowanie 360° – kompleksowe podejście do ciała</a></h4>
                                        <p>Zabieg, który modeluje sylwetkę w sposób holistyczny – redukuje cellulit, poprawia jędrność skóry, wyszczupla i kształtuje kontury ciała. To idealny wybór dla osób, które chcą szybko i skutecznie zobaczyć efekty.</p>
                                        <a href="nasza-oferta/modelowanie-360.html" class="site-button ">Czytaj więcej <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 5 -->
                            <div class="col-lg-4 col-md-6 m-b30 animate bounceInRight animated">
                                <div class="wt-box bg-white">
                                    <div class="wt-media wt-thum-bx wt-img-effect off-color">
                                        <a href="nasza-oferta/liposukcja-ultradzwiekowa.html"><img src="images/nasza-oferta/liposukcja.jpg" alt="Liposukcja ultradźwiękowa – nieinwazyjne wyszczuplanie"></a>
                                    </div>
                                    <div class="wt-info p-a30 bg-gray">
                                        <h4 class="wt-title m-t0"><a href="nasza-oferta/liposukcja-ultradzwiekowa.html">Liposukcja ultradźwiękowa – nieinwazyjne wyszczuplanie</a></h4>
                                        <p>Bez skalpela i bez bólu! Technologia ultradźwiękowa rozbija komórki tłuszczowe, które są następnie naturalnie usuwane z organizmu. Efekt? Smukła sylwetka i lepsze samopoczucie już po kilku zabiegach.</p>
                                        <a href="nasza-oferta/liposukcja-ultradzwiekowa.html" class="site-button ">Czytaj więcej <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 6 -->
                            <div class="col-lg-4 col-md-6 m-b30 animate bounceInRight animated">
                                <div class="wt-box bg-white">
                                    <div class="wt-media wt-thum-bx wt-img-effect off-color">
                                        <a href="nasza-oferta/lipolaser-duo.html"><img src="images/nasza-oferta/lipolaserduo.jpg" alt="Lipolaser Duo – precyzyjne wyszczuplanie wybranych partii"></a>
                                    </div>
                                    <div class="wt-info p-a30 bg-gray">
                                        <h4 class="wt-title m-t0"><a href="nasza-oferta/lipolaser-duo.html">Lipolaser Duo – precyzyjne wyszczuplanie wybranych partii</a></h4>
                                        <p>Idealne rozwiązanie dla tych, którzy chcą zredukować tkankę tłuszczową z konkretnych obszarów ciała – brzucha, ud, ramion czy bioder. Zabieg bezpieczny i skuteczny, z widocznymi rezultatami.</p>
                                        <a href="nasza-oferta/lipolaser-duo.html" class="site-button ">Czytaj więcej <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 7 -->
                            <div class="col-lg-4 col-md-6 m-b30 animate bounceIn animated">
                                <div class="wt-box bg-white">
                                    <div class="wt-media wt-thum-bx wt-img-effect off-color">
                                        <a href="nasza-oferta/epilacja-laserowa.html"><img src="images/nasza-oferta/epilacjalaserowa.jpg" alt="Epilacja laserowa – trwałe usuwanie owłosienia"></a>
                                    </div>
                                    <div class="wt-info p-a30 bg-gray">
                                        <h4 class="wt-title m-t0"><a href="nasza-oferta/epilacja-laserowa.html">Epilacja laserowa – trwałe usuwanie owłosienia</a></h4>
                                        <p>Nowoczesna metoda depilacji zapewniająca trwały efekt gładkiej skóry. Skuteczna zarówno dla kobiet, jak i mężczyzn – bez podrażnień i wrastających włosków.</p>
                                        <a href="nasza-oferta/epilacja-laserowa.html" class="site-button ">Czytaj więcej <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 8 -->
                            <div class="col-lg-4 col-md-6 m-b30 animate bounceIn animated">
                                <div class="wt-box bg-white">
                                    <div class="wt-media wt-thum-bx wt-img-effect off-color">
                                        <a href="nasza-oferta/depilacja-woskiem.html"><img src="images/nasza-oferta/depilacjawoskiem.jpg" alt="Depilacja woskiem – szybka i dokładna"></a>
                                    </div>
                                    <div class="wt-info p-a30 bg-gray">
                                        <h4 class="wt-title m-t0"><a href="nasza-oferta/depilacja-woskiem.html">Depilacja woskiem – szybka i dokładna</a></h4>
                                        <p>Sprawdzona metoda usuwania owłosienia z natychmiastowym efektem. Zabieg przeprowadzany z dbałością o komfort i higienę.</p>
                                        <a href="nasza-oferta/depilacja-woskiem.html" class="site-button  ">Czytaj więcej <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 9 -->
                            <div class="col-lg-4 col-md-6 m-b30 animate bounceIn animated" style="display: none;">
                                <div class="wt-box bg-white">
                                    <div class="wt-media wt-thum-bx wt-img-effect off-color">
                                        <a href="nasza-oferta/manicure.html"><img src="images/nasza-oferta/manicure.jpg" alt="Manicure – klasyczny i hybrydowy"></a>
                                    </div>
                                    <div class="wt-info p-a30 bg-gray">
                                        <h4 class="wt-title m-t0"><a href="nasza-oferta/manicure.html">Manicure – klasyczny i hybrydowy</a></h4>
                                        <p>Zadbane dłonie to wizytówka każdej osoby. Oferujemy profesjonalny manicure klasyczny, hybrydowy oraz pielęgnacyjny – dla pięknych, zdrowych paznokci każdego dnia.</p>
                                        <a href="nasza-oferta/manicure.html" class="site-button ">Czytaj więcej <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 10 -->
                            <div class="col-lg-4 col-md-6 m-b30 animate rotateIn animated">
                                <div class="wt-box bg-white">
                                    <div class="wt-media wt-thum-bx wt-img-effect off-color">
                                        <a href="nasza-oferta/architektura-i-laminacja-brwi.html"><img src="images/nasza-oferta/architekturalaminacjabrwi.jpg" alt="Architektura i laminacja brwi"></a>
                                    </div>
                                    <div class="wt-info p-a30 bg-gray">
                                        <h4 class="wt-title m-t0"><a href="nasza-oferta/architektura-i-laminacja-brwi.html">Architektura i laminacja brwi</a></h4>
                                        <p>Modelowanie brwi dopasowane do kształtu twarzy oraz indywidualnych preferencji klientki. Efekt? Wyrazista, naturalna oprawa oka.</p>
                                        <a href="nasza-oferta/architektura-i-laminacja-brwi.html" class="site-button ">Czytaj więcej <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 11 -->
                            <div class="col-lg-4 col-md-6 m-b30 animate rotateIn animated">
                                <div class="wt-box bg-white">
                                    <div class="wt-media wt-thum-bx wt-img-effect off-color">
                                        <a href="nasza-oferta/lifting-i-laminacja-rzes.html"><img src="images/nasza-oferta/laminacjaliftingrzes.jpg" alt="Lifting i Laminacja Rzęs"></a>
                                    </div>
                                    <div class="wt-info p-a30 bg-gray">
                                        <h4 class="wt-title m-t0"><a href="nasza-oferta/lifting-i-laminacja-rzes.html">Lifting i Laminacja Rzęs</a></h4>
                                        <p>Zabieg podkreślający naturalne piękno rzęs – uniesione, pogrubione i zadbane rzęsy bez użycia tuszu.</p>
                                        <a href="nasza-oferta/lifting-i-laminacja-rzes.html" class="site-button ">Czytaj więcej <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 12 -->
                            <div class="col-lg-4 col-md-6 m-b30 animate rotateIn animated">
                                <div class="wt-box bg-white">
                                    <div class="wt-media wt-thum-bx wt-img-effect off-color">
                                        <a href="nasza-oferta/przedluzanie-i-zageszczanie-rzes.html"><img src="images/nasza-oferta/przedluzaniezageszczanierzes.jpg" alt="Przedłużanie i zagęszczanie rzęs"></a>
                                    </div>
                                    <div class="wt-info p-a30 bg-gray">
                                        <h4 class="wt-title m-t0"><a href="nasza-oferta/przedluzanie-i-zageszczanie-rzes.html">Przedłużanie i zagęszczanie rzęs</a></h4>
                                        <p>Dla tych, którzy marzą o wyrazistym spojrzeniu na co dzień. Rzęsy metodą 1:1, 2:1, 3D i objętościową – zawsze indywidualnie dobrane. </p>
                                        <a href="nasza-oferta/przedluzanie-i-zageszczanie-rzes.html" class="site-button ">Czytaj więcej <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 13 -->
                            <div class="col-lg-4 col-md-6 m-b30 animate rotateInUpRight animated" style="display: none">
                                <div class="wt-box bg-white">
                                    <div class="wt-media wt-thum-bx wt-img-effect off-color">
                                        <a href="nasza-oferta/zabieg-lampa-led.html"><img src="images/nasza-oferta/zabieglampaled.jpg" alt="Zabieg Lampą LED"></a>
                                    </div>
                                    <div class="wt-info p-a30 bg-gray">
                                        <h4 class="wt-title m-t0"><a href="nasza-oferta/zabieg-lampa-led.html">Zabieg Lampą LED</a></h4>
                                        <p>Światłoterapia LED wspiera regenerację skóry, łagodzi stany zapalne i przyspiesza procesy odnowy komórkowej. Idealny jako samodzielny zabieg lub dodatek do innych terapii.</p>
                                        <a href="nasza-oferta/zabieg-lampa-led.html" class="site-button ">Czytaj więcej <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 14 -->
                            <div class="col-lg-4 col-md-6 m-b30 animate rotateInUpRight animated">
                                <div class="wt-box bg-white">
                                    <div class="wt-media wt-thum-bx wt-img-effect off-color">
                                        <a href="nasza-oferta/peeling-kawitacyjny.html"><img src="images/nasza-oferta/peelingkawitacyjny.jpg" alt="Peeling kawitacyjny"></a>
                                    </div>
                                    <div class="wt-info p-a30 bg-gray">
                                        <h4 class="wt-title m-t0"><a href="nasza-oferta/peeling-kawitacyjny.html">Peeling kawitacyjny</a></h4>
                                        <p>Bezbolesne, głębokie oczyszczanie skóry ultradźwiękami. Idealny dla każdego typu cery, także wrażliwej.</p>
                                        <a href="nasza-oferta/peeling-kawitacyjny.html" class="site-button ">Czytaj więcej <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 15 -->
                            <div class="col-lg-4 col-md-6 m-b30 animate rotateInUpRight animated">
                                <div class="wt-box bg-white">
                                    <div class="wt-media wt-thum-bx wt-img-effect off-color">
                                        <a href="nasza-oferta/dermomasaz.html"><img src="images/nasza-oferta/dermomasaz.jpg" alt="Dermomasaż podciśnieniowy"></a>
                                    </div>
                                    <div class="wt-info p-a30 bg-gray">
                                        <h4 class="wt-title m-t0"><a href="nasza-oferta/dermomasaz.html">Dermomasaż podciśnieniowy</a></h4>
                                        <p>Zabieg łączący masaż próżniowy z terapią antycellulitową. Stymuluje krążenie, ujędrnia skórę i poprawia metabolizm komórkowy.</p>
                                        <a href="nasza-oferta/dermomasaz.html" class="site-button ">Czytaj więcej <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- SECTION KONIEC OFERTA START -->
                    <div class="section-full p-t80 p-b50">
                        <div class="container">
                            <div class="section-content">
                                <div class="row">
                                    <!--From Styel 1-->
                                    <div class="col-md-12 animate rotateInDownLeft animated">

                                        <!-- OUR GALLERY BLOCK START -->
                                        <div class="widget widget_gallery mfp-gallery">
                                            <h4 class="widget-title">Dlaczego warto wybrać MAGIC SALON?</h4>
                                            <p>Indywidualne podejście do każdego klienta. Najnowsze technologie kosmetologiczne. Profesjonalny, doświadczony zespół. Ciepła atmosfera i pełen relaks. Bezpieczeństwo i skuteczność</p>
                                            <ul>
                                                <li>
                                                    <div class="wt-post-thum">
                                                        <a href="images/gallery/pic1.jpg" class="mfp-link"><img src="images/our-work/pic1.jpg" alt="Zdjęcie Dlaczego warto wybrać MAGIC SALON?"></a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="wt-post-thum ">
                                                        <a href="images/gallery/pic2.jpg" class="mfp-link"><img src="images/our-work/pic2.jpg" alt="Zdjęcie Dlaczego warto wybrać MAGIC SALON?"></a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="wt-post-thum  ">
                                                        <a href="images/gallery/pic3.jpg" class="mfp-link"><img src="images/our-work/pic3.jpg" alt="Zdjęcie Dlaczego warto wybrać MAGIC SALON?"></a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="wt-post-thum ">
                                                        <a href="images/gallery/pic4.jpg" class="mfp-link"><img src="images/our-work/pic4.jpg" alt="Zdjęcie Dlaczego warto wybrać MAGIC SALON?"></a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="wt-post-thum ">
                                                        <a href="images/gallery/pic5.jpg" class="mfp-link"><img src="images/our-work/pic5.jpg" alt="Zdjęcie Dlaczego warto wybrać MAGIC SALON?"></a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="wt-post-thum ">
                                                        <a href="images/gallery/pic6.jpg" class="mfp-link"><img src="images/our-work/pic6.jpg" alt="Zdjęcie Dlaczego warto wybrać MAGIC SALON?"></a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="wt-post-thum ">
                                                        <a href="images/gallery/pic7.jpg" class="mfp-link"><img src="images/our-work/pic7.jpg" alt="Zdjęcie Dlaczego warto wybrać MAGIC SALON?"></a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="wt-post-thum ">
                                                        <a href="images/gallery/pic8.jpg" class="mfp-link"><img src="images/our-work/pic8.jpg" alt="Zdjęcie Dlaczego warto wybrać MAGIC SALON?"></a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- OUR GALLERY BLOCK END -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- SECTION KONIEC OFERTA END -->

                </div>
            </div>
            <!-- SECTION CONTENT END -->

            <!-- INSTAGRAM SECTION START -->
            <div class="section-full p-t50 p-b10 overlay-wraper site-bg-primary bg-repeat">
                <div class="container">
                    <div class="section-head text-center">
                        <h2 style="color: #fff;"><span class="site-text-primary" style="color: #fff;">Nasz </span> Instagram</h2>
                        <p style="color: #fff;">Najświeższe nowinki z naszego salonu będą dla Państwa dostepne w naszych social mediach na profilu Instagramowym. Koniecznie obserwuj nasze ruchy w social mediach.</p>
                    </div>

                    <!-- IMAGE CAROUSEL START -->
                    <div class="section-content">

                        <!-- LightWidget WIDGET -->
                        <script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="https://cdn.lightwidget.com/widgets/1b3ffdfb097a529b9970baf400113732.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>

                    </div>
                    <!-- IMAGE CAROUSEL START -->
                </div>
            </div>
            <!-- OUR INSTAGRAM SLIDER END -->

        </div>
        <!-- CONTENT END -->

        <!-- Footer -->
        <?php include 'partials/footer.php'; ?>

</body>

</html>