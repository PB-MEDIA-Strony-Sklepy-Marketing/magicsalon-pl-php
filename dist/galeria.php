<?php

/**
 * MAGIC SALON - Strona główna (index.php)
 * Wersja: 2.2 - Poprawiono błędy konsoli i literówki
 */

// Załaduj konfigurację
require_once __DIR__ . DIRECTORY_SEPARATOR . 'config.php';

// Konfiguracja meta tagów dla strony głównej
$meta = [
    'title' => 'MAGIC SALON – Salon Kosmetyczny Dobrzykowice | Profesjonalne Zabiegi Beauty',
    'description' => 'Profesjonalny salon kosmetyczny MAGIC SALON w Dobrzykowicach k. Wrocławia ✨ Zabiegi na twarz, depilacja laserowa, modelowanie sylwetki, lifting rzęs ⭐ Rezerwuj online przez Booksy!',
    'keywords' => 'salon kosmetyczny dobrzykowice, beauty salon wrocław, depilacja laserowa, zabiegi na twarz, modelowanie ciała, lifting rzęs, magic salon, spa dobrzykowice',
    'canonical' => BASE_URL . '/',
    'robots' => 'index, follow, max-image-preview:large',
    'og' => [
        'type' => 'website',
        'title' => 'MAGIC SALON – Profesjonalny Salon Kosmetyczny w Dobrzykowicach',
        'description' => 'Odkryj magię profesjonalnej pielęgnacji w MAGIC SALON! Zabiegi na twarz, depilacja laserowa, modelowanie sylwetki. Umów wizytę online!',
        'url' => BASE_URL . '/',
        'image' => BASE_URL . '/images/og-image.jpg',
    ],
    'twitter' => [
        'card' => 'summary_large_image',
        'title' => 'MAGIC SALON – Salon Kosmetyczny Dobrzykowice',
        'description' => 'Profesjonalne zabiegi kosmetyczne w Dobrzykowicach k. Wrocławia',
    ],
    'schema' => [
        'enabled' => true,
        'type' => 'BeautySalon',
        'name' => 'MAGIC SALON',
        'description' => 'Profesjonalny salon kosmetyczny oferujący zabiegi na twarz i ciało, depilację laserową, stylizację rzęs i brwi',
        'telephone' => '+48883481581',
        'email' => 'biuro@magicsalon.pl',
        'priceRange' => '20-450 PLN',
        'address' => [
            'streetAddress' => 'ul. Borówkowa 13',
            'postalCode' => '55-002',
            'addressLocality' => 'Dobrzykowice',
            'addressRegion' => 'Dolnośląskie',
            'addressCountry' => 'PL'
        ],
        'geo' => [
            'latitude' => '51.0961',
            'longitude' => '17.1994'
        ],
        'openingHours' => [
            'Mo-Fr 09:00-20:00',
            'Sa 09:00-18:00'
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
        <div class="page-content">

            <?php
            // Konfiguracja dynamicznego banera i breadcrumbs dla tej podstrony
            $banner_img = 'images/banner/gallery-banner.jpg';
            $page_title = 'Galeria MAGIC SALON';
            $page_desc = 'Zapraszamy Cię do świata wyjątkowej estetyki, harmonii i relaksu, który codziennie tworzymy w naszym salonie. Galeria MAGIC SALON to przestrzeń pełna inspiracji i dowód na to, jak wiele można osiągnąć dzięki indywidualnie dobranym zabiegom, zaawansowanej technologii oraz oddanemu zespołowi profesjonalistów.';
            $breadcrumbs = [
                [
                    'label' => 'Strona Główna',
                    'url' => 'index.php',
                    'icon' => 'fa fa-home'
                ],
                [
                    'label' => 'Galeria MAGIC SALON',
                    'url' => '', // Pusty URL oznacza element aktywny (tekst bez linku)
                    'icon' => ''
                ]
            ];
            
            // Załadowanie partiala
            include 'partials/breadcrumbs.php';
            ?>

            <!-- ABOUT COMPANY SECTION START -->
            <div class="section-full p-t80 p-b50">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-8 m-b30">
                            <div class="about-com-pic wt-img-overlay9">
                                <img src="images/galeria-pic3.jpg" alt="Galeria Magic Salon" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-12 m-b30">
                            <div class="section-head text-left">
                                <h3 class="text-uppercase">Witamy w galerii MAGIC SALON – miejscu, gdzie piękno spotyka się z pasją i nowoczesną pielęgnacją!</h3>
                                <div class="wt-separator-outer">
                                    <div class="wt-separator style-icon">
                                        <i class="fa fa-leaf text-black"></i>
                                        <span class="separator-left site-bg-primary"></span>
                                        <span class="separator-right site-bg-primary"></span>
                                    </div>
                                </div>
                                <p>Zapraszamy Cię do świata wyjątkowej estetyki, harmonii i relaksu, który codziennie tworzymy w naszym salonie. Galeria MAGIC SALON to przestrzeń pełna inspiracji i dowód na to, jak wiele można osiągnąć dzięki indywidualnie dobranym zabiegom, zaawansowanej technologii oraz oddanemu zespołowi profesjonalistów. Każde zdjęcie to nie tylko efekt pracy, ale także spełnione marzenie naszego Klienta.
                                </p>
                                <h3>📍 Odwiedź nas i przekonaj się osobiście!</h3>
                                <p>
                                    Galeria MAGIC SALON to dopiero początek – jeśli chcesz na własnej skórze poczuć efekty naszej pracy, umów się na wizytę już dziś. Zainspiruj się zdjęciami, wybierz zabieg dla siebie i zrób pierwszy krok do zmiany!
                                </p>
                                <p>Zaufaj doświadczeniu, technologii i pasji – zaufaj MAGIC SALON!</p>
                                <p>📍 Adres strony: www.magicsalon.pl<br>📞 Telefon: <a href="tel:+48 883 481 581">+48 883 481 581</a><br>📧 E-mail: biuro@magicsalon.pl</p>
                                <script type="text/javascript" src="https://booksy.com/widget/code.js?id=305936&country=pl&lang=pl"></script>
                                <p><b>Twoje piękno – nasza pasja. Zrelaksuj się, my zajmiemy się resztą.</b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ABOUT COMPANY SECTION END -->

            <!-- SECTION CONTENT START -->
            <div class="section-full p-b50">
                <div class="container">
                    <h3 class="text-uppercase">Galeria – Zobacz magię piękna w MAGIC SALON</h3>
                    <div class="wt-separator-outer p-b10">
                        <div class="wt-separator style-icon">
                            <i class="fa fa-leaf text-black"></i>
                            <span class="separator-left site-bg-primary"></span>
                            <span class="separator-right site-bg-primary"></span>
                        </div>
                    </div>

                    <!-- GALLERY CONTENT START -->

                    <div class="portfolio-wrap mfp-gallery row">

                        <!-- COLUMNS 1 -->
                        <div class="masonry-item cat-1 col-lg-3 col-md-3 col-sm-6 col-xs-6 m-b30">
                            <div class="wt-gallery-bx">
                                <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
                                    <a href="oferta.php">
                                        <img src="images/galeria/pic1.jpg" alt="Zdjęcie Galeria Magic Salon">
                                    </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a href="oferta.php">
                                                <i class="fa fa-external-link wt-icon-box-xs"></i>
                                            </a>
                                            <a href="images/galeria/large/pic1.jpg" class="mfp-link">
                                                <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 2 -->
                        <div class="masonry-item cat-2 col-lg-3 col-md-3 col-sm-6 col-xs-6 m-b30">
                            <div class="wt-gallery-bx">
                                <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
                                    <a href="oferta.php">
                                        <img src="images/galeria/pic2.jpg" alt="Zdjęcie Galeria Magic Salon">
                                    </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a href="oferta.php">
                                                <i class="fa fa-external-link wt-icon-box-xs"></i>
                                            </a>
                                            <a href="images/galeria/large/pic2.jpg" class="mfp-link">
                                                <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 3 -->
                        <div class="masonry-item cat-3 col-lg-3 col-md-3 col-sm-6 col-xs-6 m-b30">
                            <div class="wt-gallery-bx">
                                <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
                                    <a href="oferta.php">
                                        <img src="images/galeria/pic3.jpg" alt="Zdjęcie Galeria Magic Salon">
                                    </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a href="oferta.php">
                                                <i class="fa fa-external-link wt-icon-box-xs"></i>
                                            </a>
                                            <a href="images/galeria/large/pic3.jpg" class="mfp-link">
                                                <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 4 -->
                        <div class="masonry-item cat-4 col-lg-3 col-md-3 col-sm-6 col-xs-6 m-b30">
                            <div class="wt-gallery-bx">
                                <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
                                    <a href="oferta.php">
                                        <img src="images/galeria/pic4.jpg" alt="Zdjęcie Galeria Magic Salon">
                                    </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a href="oferta.php">
                                                <i class="fa fa-external-link wt-icon-box-xs"></i>
                                            </a>
                                            <a href="images/galeria/large/pic4.jpg" class="mfp-link m-b15">
                                                <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 5 -->
                        <div class="masonry-item cat-5 col-lg-3 col-md-3 col-sm-6 col-xs-6 m-b30">
                            <div class="wt-gallery-bx">
                                <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
                                    <a href="oferta.php">
                                        <img src="images/galeria/pic5.jpg" alt="Zdjęcie Galeria Magic Salon">
                                    </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a href="oferta.php">
                                                <i class="fa fa-external-link wt-icon-box-xs"></i>
                                            </a>
                                            <a href="images/galeria/large/pic5.jpg" class="mfp-link">
                                                <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 6 -->
                        <div class="masonry-item cat-4 col-lg-3 col-md-3 col-sm-6 col-xs-6 m-b30">
                            <div class="wt-gallery-bx">
                                <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
                                    <a href="oferta.php">
                                        <img src="images/galeria/pic6.jpg" alt="Zdjęcie Galeria Magic Salon">
                                    </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a href="oferta.php">
                                                <i class="fa fa-external-link wt-icon-box-xs"></i>
                                            </a>
                                            <a href="images/galeria/large/pic6.jpg" class="mfp-link">
                                                <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 7 -->
                        <div class="masonry-item cat-3 col-lg-3 col-md-3 col-sm-6 col-xs-6 m-b30">
                            <div class="wt-gallery-bx">
                                <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
                                    <a href="oferta.php">
                                        <img src="images/galeria/pic7.jpg" alt="Zdjęcie Galeria Magic Salon">
                                    </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a href="oferta.php">
                                                <i class="fa fa-external-link wt-icon-box-xs"></i>
                                            </a>
                                            <a href="images/galeria/large/pic7.jpg" class="mfp-link">
                                                <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 8 -->
                        <div class="masonry-item cat-2 col-lg-3 col-md-3 col-sm-6 col-xs-6 m-b30">
                            <div class="wt-gallery-bx">
                                <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
                                    <a href="oferta.php">
                                        <img src="images/galeria/pic8.jpg" alt="Zdjęcie Galeria Magic Salon">
                                    </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a href="oferta.php">
                                                <i class="fa fa-external-link wt-icon-box-xs"></i>
                                            </a>
                                            <a href="images/galeria/large/pic8.jpg" class="mfp-link">
                                                <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 9 -->
                        <div class="masonry-item cat-2 col-lg-3 col-md-3 col-sm-6 col-xs-6 m-b30">
                            <div class="wt-gallery-bx">
                                <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
                                    <a href="oferta.php">
                                        <img src="images/galeria/pic9.jpg" alt="Zdjęcie Galeria Magic Salon">
                                    </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a href="oferta.php">
                                                <i class="fa fa-external-link wt-icon-box-xs"></i>
                                            </a>
                                            <a href="images/galeria/large/pic9.jpg" class="mfp-link">
                                                <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 10 -->
                        <div class="masonry-item cat-2 col-lg-3 col-md-3 col-sm-6 col-xs-6 m-b30">
                            <div class="wt-gallery-bx">
                                <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
                                    <a href="oferta.php">
                                        <img src="images/galeria/pic10.jpg" alt="Zdjęcie Galeria Magic Salon">
                                    </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a href="oferta.php">
                                                <i class="fa fa-external-link wt-icon-box-xs"></i>
                                            </a>
                                            <a href="images/galeria/large/pic10.jpg" class="mfp-link">
                                                <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 11 -->
                        <div class="masonry-item cat-2 col-lg-3 col-md-3 col-sm-6 col-xs-6 m-b30">
                            <div class="wt-gallery-bx">
                                <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
                                    <a href="oferta.php">
                                        <img src="images/galeria/pic11.jpg" alt="Zdjęcie Galeria Magic Salon">
                                    </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a href="oferta.php">
                                                <i class="fa fa-external-link wt-icon-box-xs"></i>
                                            </a>
                                            <a href="images/galeria/large/pic11.jpg" class="mfp-link">
                                                <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 12 -->
                        <div class="masonry-item cat-2 col-lg-3 col-md-3 col-sm-6 col-xs-6 m-b30">
                            <div class="wt-gallery-bx">
                                <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
                                    <a href="oferta.php">
                                        <img src="images/galeria/pic12.jpg" alt="Zdjęcie Galeria Magic Salon">
                                    </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a href="oferta.php">
                                                <i class="fa fa-external-link wt-icon-box-xs"></i>
                                            </a>
                                            <a href="images/galeria/large/pic12.jpg" class="mfp-link">
                                                <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- GALLERY CONTENT END -->

                </div>
            </div>
            <!-- SECTION CONTENT END -->

            <!-- ZAKOŃCZENIE GALERIA SECTION START -->
            <div class="section-full p-t80 p-b50">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 m-b30">
                            <div class="section-head text-left">
                                <h3 class="text-uppercase">Zajrzyj za kulisy piękna</h3>
                                <div class="wt-separator-outer">
                                    <div class="wt-separator style-icon">
                                        <i class="fa fa-leaf text-black"></i>
                                        <span class="separator-left site-bg-primary"></span>
                                        <span class="separator-right site-bg-primary"></span>
                                    </div>
                                </div>
                                <p>W naszej galerii znajdziesz:</p>
                                <p><b>• Realne efekty metamorfoz twarzy i ciała,</b> które osiągnęliśmy dzięki zabiegom takim jak Glow & Lift, Detox & Drenaż, czy Modelowanie 360°.<br><b>• Procesy zabiegowe i profesjonalny sprzęt</b> – pokażemy Ci, jak wygląda przebieg takich usług jak liposukcja ultradźwiękowa, lipolaser Duo czy epilacja laserowa.<br><b>• Estetyka wnętrz salonu,</b> które zostały zaprojektowane z myślą o komforcie i relaksie każdego odwiedzającego.<br><b>• Prace naszych stylistek i kosmetolożek</b> – manicure, laminacja rzęs i brwi, peeling kawitacyjny czy przedłużanie rzęs – zobacz na własne oczy ich precyzję i kunszt.<br><b>• Zadowolonych klientów</b> – ich uśmiechy mówią więcej niż tysiąc słów.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 m-b30">
                            <div class="section-head text-left">
                                <h3 class="text-uppercase">Dlaczego warto obejrzeć naszą galerię?</h3>
                                <div class="wt-separator-outer">
                                    <div class="wt-separator style-icon">
                                        <i class="fa fa-leaf text-black"></i>
                                        <span class="separator-left site-bg-primary"></span>
                                        <span class="separator-right site-bg-primary"></span>
                                    </div>
                                </div>
                                <p><b>• Autentyczność</b> – wszystkie zdjęcia są prawdziwe i przedstawiają efekty pracy naszego zespołu.<br><b>• Inspiracja</b> – dzięki galerii możesz lepiej zrozumieć, jak dany zabieg może zmienić Twoje samopoczucie i wygląd.<br><b>• Transparentność</b> – pokazujemy, jak pracujemy i jak wygląda nasz salon, abyś jeszcze przed wizytą poczuła się komfortowo i pewnie.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 m-b30">
                            <div class="section-head text-left">
                                <h3 class="text-uppercase">Co możesz zobaczyć?</h3>
                                <div class="wt-separator-outer">
                                    <div class="wt-separator style-icon">
                                        <i class="fa fa-leaf text-black"></i>
                                        <span class="separator-left site-bg-primary"></span>
                                        <span class="separator-right site-bg-primary"></span>
                                    </div>
                                </div>
                                <p><b>🔹 Zabiegi na twarz i ciało:</b> efekty Glow & Lift, Detox & Drenaż, SilkRoll i więcej<br><b>🔹 Modelowanie sylwetki:</b> metamorfozy po Lipolaser Duo, Liposukcji ultradźwiękowej i Modelowaniu 360°<br><b>🔹 Stylizacje okolic oczu i dłoni:</b> lifting i laminacja rzęs, architektura brwi, manicure hybrydowy<br><b>🔹 Wnętrze salonu:</b> nasza strefa relaksu, gabinety zabiegowe i profesjonalne zaplecze technologiczne<br><b>🔹 Atmosfera i zespół:</b> nasze specjalistki w akcji, codzienna pasja i uśmiech, który towarzyszy każdemu zabiegowi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ZAKOŃCZENIE GALERIA SECTION END -->

            <!-- SECTION ZREALIZOWANE ZABIEGI START -->
            <div class="section-full p-b50">
                <div class="container">
                    <h3 class="text-uppercase">Realizacje w MAGIC SALON</h3>
                    <div class="wt-separator-outer p-b10">
                        <div class="wt-separator style-icon">
                            <i class="fa fa-leaf text-black"></i>
                            <span class="separator-left site-bg-primary"></span>
                            <span class="separator-right site-bg-primary"></span>
                        </div>
                    </div>

                    <!-- GALLERY CONTENT START -->

                    <div class="portfolio-wrap mfp-gallery row" style="position: relative; height: 594.234px;">

                        <!-- COLUMNS 1 -->
                        <div class="masonry-item cat-1 col-lg-3 col-md-3 col-sm-6 col-xs-6 m-b30" style="position: absolute; left: 0px; top: 0px;">
                            <div class="wt-gallery-bx">
                                <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
                                    <a href="zarezerwuj-wizyte.php">
                                        <img src="images/galeria/zrealizowane/henna-brwi.jpg" alt="Henna bri">
                                    </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a href="zarezerwuj-wizyte.php">
                                                <i class="fa fa-external-link wt-icon-box-xs"></i>
                                            </a>
                                            <a href="images/galeria/zrealizowane/henna-brwi.jpg" class="mfp-link">
                                                <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 2 -->
                        <div class="masonry-item cat-2 col-lg-3 col-md-3 col-sm-6 col-xs-6 m-b30" style="position: absolute; left: 292.5px; top: 0px;">
                            <div class="wt-gallery-bx">
                                <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
                                    <a href="zarezerwuj-wizyte.php">
                                        <img src="images/galeria/zrealizowane/laminacja-brwi-i-przedluzanie-rzes-2D.jpg" alt="Laminacjha brwi i przedłużanie rzęs 2D">
                                    </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a href="zarezerwuj-wizyte.php">
                                                <i class="fa fa-external-link wt-icon-box-xs"></i>
                                            </a>
                                            <a href="images/galeria/zrealizowane/laminacja-brwi-i-przedluzanie-rzes-2D.jpg" class="mfp-link">
                                                <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 3 -->
                        <div class="masonry-item cat-3 col-lg-3 col-md-3 col-sm-6 col-xs-6 m-b30" style="position: absolute; left: 585px; top: 0px;">
                            <div class="wt-gallery-bx">
                                <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
                                    <a href="zarezerwuj-wizyte.php">
                                        <img src="images/galeria/zrealizowane/lifting-i-laminacja-rzes-laminacja-i-farbka-brwi.jpg" alt="Lifting i laminacja rzęs laminacja i farbka brwi">
                                    </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a href="zarezerwuj-wizyte.php">
                                                <i class="fa fa-external-link wt-icon-box-xs"></i>
                                            </a>
                                            <a href="images/galeria/zrealizowane/lifting-i-laminacja-rzes-laminacja-i-farbka-brwi.jpg" class="mfp-link">
                                                <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 4 -->
                        <div class="masonry-item cat-4 col-lg-3 col-md-3 col-sm-6 col-xs-6 m-b30" style="position: absolute; left: 877.5px; top: 0px;">
                            <div class="wt-gallery-bx">
                                <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
                                    <a href="zarezerwuj-wizyte.php">
                                        <img src="images/galeria/zrealizowane/po-przedluzaniu-2D.jpg" alt="Po przedłużaniu 2D">
                                    </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <a href="zarezerwuj-wizyte.php">
                                                <i class="fa fa-external-link wt-icon-box-xs"></i>
                                            </a>
                                            <a href="images/galeria/zrealizowane/po-przedluzaniu-2D.jpg" class="mfp-link m-b15">
                                                <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- GALLERY CONTENT END -->

                </div>
            </div>
            <!-- SECTION ZREALIZOWANE ZABIEGI END -->

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