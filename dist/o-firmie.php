<?php

/**
 * MAGIC SALON - O Firmie (o-firmie.php)
 * Wersja: 2.3 - Zoptymalizowano treści SEO i zmienne dla podstrony O Nas
 */

// Załaduj konfigurację
require_once __DIR__ . DIRECTORY_SEPARATOR . 'config.php';

// Konfiguracja meta tagów dla strony O Firmie
$meta = [
    'title' => 'O Nas – MAGIC SALON Dobrzykowice | Poznaj Nasz Zespół i Misję',
    'description' => 'Poznaj MAGIC SALON w Dobrzykowicach. Nasz zespół to certyfikowani specjaliści, dla których kosmetologia to pasja. Sprawdź naszą misję, doświadczenie i dlaczego warto nam zaufać. ✨',
    'keywords' => 'salon kosmetyczny dobrzykowice, o nas magic salon, zespół kosmetyczek wrocław, historia magic salon, specjaliści beauty, gabinet kosmetyczny opinie, misja salonu',
    'canonical' => BASE_URL . '/o-firmie.php',
    'robots' => 'index, follow',
    'og' => [
        'type' => 'website',
        'title' => 'O Nas – MAGIC SALON | Pasja, Profesjonalizm, Piękno',
        'description' => 'Miejsce stworzone z miłości do piękna. Poznaj ludzi, którzy zadbają o Twój wygląd i samopoczucie w Dobrzykowicach.',
        'url' => BASE_URL . '/o-firmie.php',
        'image' => BASE_URL . '/images/about-pic.jpg', // Zdjęcie reprezentujące firmę
    ],
    'twitter' => [
        'card' => 'summary_large_image',
        'title' => 'O Nas – MAGIC SALON Dobrzykowice',
        'description' => 'Poznaj zespół ekspertów beauty w MAGIC SALON.',
    ],
    'schema' => [
        'enabled' => true,
        'type' => 'BeautySalon',
        'name' => 'MAGIC SALON - O Nas',
        'description' => 'Profesjonalny zespół kosmetologów oferujący zabiegi na najwyższym poziomie w Dobrzykowicach.',
        'url' => BASE_URL . '/o-firmie.php',
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
        <!-- Header -->
        <?php include 'partials/header.php'; ?>
        <!-- HEADER END -->

    <!-- CONTENT START -->
    <div class="page-content">

                <?php
            // Konfiguracja dynamicznego banera i breadcrumbs dla podstrony O Firmie
            // Upewnij się, że plik 'images/banner/about-banner.jpg' istnieje, lub użyj ogólnego banera
            $banner_img = 'images/banner/about-banner.jpg'; 
            $page_title = 'O Nas – Twoje Piękno, Nasza Pasja';
            $page_desc = 'Magic Salon to więcej niż salon kosmetyczny – to miejsce, gdzie magia profesjonalnej pielęgnacji staje się rzeczywistością. Od pierwszego dnia naszej działalności w Dobrzykowicach stawiamy na najwyższą jakość usług, nowoczesny sprzęt i ciągły rozwój naszego zespołu. Specjalizujemy się w depilacji laserowej, zabiegach na twarz, modelowaniu ciała oraz stylizacji rzęs i brwi. Nasza filozofia? Twoje piękno, nasza pasja – to nie tylko hasło, ale codzienne zobowiązanie wobec każdego klienta, który przekracza próg naszego salonu.';
            
            $breadcrumbs = [
                [
                    'label' => 'Strona Główna',
                    'url' => 'index.php',
                    'icon' => 'fa fa-home'
                ],
                [
                    'label' => 'O Firmie',
                    'url' => '', // Element aktywny
                    'icon' => ''
                ]
            ];
            
            // Załadowanie partiala (zgodnie z Twoją strukturą plików)
            // Upewnij się, że używasz poprawnej nazwy pliku (np. breadcrumbs.php lub breadcrumbs-botttom-header.php)
            include 'partials/breadcrumbs.php';
        ?>

        <!-- ABOUT COMPANY SECTION START -->
        <div class="section-full p-t80 p-b50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-8 m-b30">
                        <div class="about-com-pic">
                            <img src="images/about-pic.jpg" alt="O salonie MAGIC SALON" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 m-b30">
                        <div class="section-head text-left">
                            <h3 class="text-uppercase">O salonie MAGIC SALON </h3>
                            <div class="wt-separator-outer">
                                <div class="wt-separator style-icon">
                                    <i class="fa fa-leaf text-black"></i>
                                    <span class="separator-left site-bg-primary"></span>
                                    <span class="separator-right site-bg-primary"></span>
                                </div>
                            </div>
                            <p>MAGIC SALON to więcej niż salon kosmetyczny – to przestrzeń stworzona z miłości do piękna, harmonii i dbałości o potrzeby współczesnej kobiety (i mężczyzny!). Od samego początku naszym celem było połączenie najwyższych standardów usług z przyjazną, komfortową atmosferą, która sprzyja zarówno głębokiemu relaksowi, jak i skutecznej pielęgnacji. Nasza misja? Sprawić, by każdy klient opuszczał nasz salon z uśmiechem, poczuciem lekkości, świeżości i pewności siebie.
                            </p>
                            <h3>Kim jesteśmy?</h3>
                            <p>
                                Zespół MAGIC SALON to doświadczeni kosmetolodzy, specjaliści od medycyny estetycznej i terapeuci urody, których łączy jedno – pasja do piękna i nieustannego doskonalenia. Nasza wiedza i umiejętności poparte są licznymi szkoleniami, certyfikatami oraz praktyką zdobywaną przez lata. Wiemy, jak indywidualne mogą być potrzeby skóry, ciała i duszy, dlatego każdą wizytę traktujemy jako osobistą historię, której chcemy towarzyszyć – z troską, delikatnością i skutecznością.
                            </p>
                        </div>
                        <div class="about-types row">
                            <div class="col-md-6 col-sm-6 col-xs-6 col-xs-100pc m-b30">
                                <div class="wt-icon-box-wraper left">
                                    <div class="icon-md site-text-primary">
                                        <a href="oferta.php" class="icon-cell p-t5 center-block"><i class="flaticon-female-hairs"></i></a>
                                    </div>
                                    <div class="icon-content">
                                        <h5 class="wt-tilte text-uppercase m-b0">Indywidualne podejście</h5>
                                        <p>Każda klientka i każdy klient są dla nas wyjątkowi.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 col-xs-100pc m-b30 ">
                                <div class="wt-icon-box-wraper left">
                                    <div class="icon-md site-text-primary">
                                        <a href="oferta.php" class="icon-cell p-t5 center-block"><i class="flaticon-eye"></i></a>
                                    </div>
                                    <div class="icon-content">
                                        <h5 class="wt-tilte text-uppercase m-b0">Nowoczesne technologie</h5>
                                        <p>Stale inwestujemy w najlepszy sprzęt i innowacyjne metody</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 col-xs-100pc m-b30 ">
                                <div class="wt-icon-box-wraper left">
                                    <div class="icon-md site-text-primary">
                                        <a href="oferta.php" class="icon-cell p-t5 center-block"><i class="flaticon-mirror"></i></a>
                                    </div>
                                    <div class="icon-content">
                                        <h5 class="wt-tilte text-uppercase m-b0 ">Doświadczony zespół</h5>
                                        <p>Profesjonaliści z pasją i wiedzą.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 col-xs-100pc m-b30 ">
                                <div class="wt-icon-box-wraper left">
                                    <div class="icon-md site-text-primary">
                                        <a href="oferta.php" class="icon-cell p-t5 center-block"><i class="flaticon-spray-bottle" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="icon-content">
                                        <h5 class="wt-tilte text-uppercase m-b0">Relaks i bezpieczeństwo</h5>
                                        <p>Komfortowa przestrzeń, intymna atmosfera i pełna dyskrecja.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ABOUT COMPANY SECTION END -->

        <!--COUNTER SECTION START -->
        <div class="section-full p-t30 site-bg-primary">

            <div class="container">
                <!-- COUNTER BLOCKS START -->
                <div class="section-content">
                    <div class="row">

                        <div class="col-md-3 col-sm-6">
                            <div class="wt-icon-box-wraper right p-a10 text-white m-b30">
                                <span class="icon-md p-t10">
                                    <i class="fa fa-building"></i>
                                </span>
                                <div class="icon-content">
                                    <div class="font-26 font-weight-800  m-b5"><span class="counter">1000</span><b>+</b></div>
                                    <span class="text-uppercase">Zrealizowanych zabiegów</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="wt-icon-box-wraper right p-a10 text-white m-b30">
                                <span class="icon-md p-t10">
                                    <i class="fa fa-users"></i>
                                </span>
                                <div class="icon-content">
                                    <div class="font-26 font-weight-800  m-b5"><span class="counter">100</span><b>+</b></div>
                                    <span>ZADOWOLONYCH KLIENTÓW</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="wt-icon-box-wraper right p-a10 text-white m-b30">
                                <span class="icon-md p-t10">
                                    <i class="fa fa-user-plus"></i>
                                </span>
                                <div class="icon-content">
                                    <div class="counter font-26 font-weight-800 m-b5">2</div>
                                    <span>ZATRUDNIONYCH PRACOWNIKÓW</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="wt-icon-box-wraper right p-a10 text-white m-b30">
                                <span class="icon-md p-t10">
                                    <i class="fa fa-trophy"></i>
                                </span>
                                <div class="icon-content">
                                    <div class="counter font-26 font-weight-800 m-b5">10</div>
                                    <span>UYRZĄDZEŃ MEDYCZNYCH</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- COUNTER BLOCKS START -->
            </div>
        </div>
        <!-- COUNTER SECTION END -->

        <!-- OUR BEST SERVICES SECTION  START-->
        <div class="section-full text-center p-t80 p-b50 bg-gray">
            <div class="container">

                <!-- TITLE START -->
                <div class="section-head">
                    <h3 class="text-uppercase">Nasze najlepsze strony</h3>
                    <div class="wt-separator style-icon">
                        <i class="fa fa-leaf text-black"></i>
                        <span class="separator-left site-bg-primary"></span>
                        <span class="separator-right site-bg-primary"></span>
                    </div>
                </div>
                <!-- TITLE END -->

                <!-- OUR BEST SERVICES BLOCKS START -->
                <div class="section-content">
                    <div class="row">

                        <!-- COLUMNS 1 -->
                        <div class="col-lg-4 col-md-6 col-sm-6 m-b30 animate_line">
                            <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                                <div class="icon-md site-text-primary m-b20">
                                    <a href="oferta.php" class="icon-cell"><i class="flaticon-cosmetics" aria-hidden="true"></i></a>
                                </div>
                                <div class="icon-content">
                                    <h5 class="wt-tilte text-uppercase">Profesjonalizm i doświadczenie</h5>
                                    <p>Zespół MAGIC SALON to wykwalifikowani specjaliści z wieloletnim doświadczeniem w branży beauty i kosmetologii estetycznej. Regularnie uczestniczymy w szkoleniach i targach branżowych, by być na bieżąco z najnowszymi trendami i technologiami.</p>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 2 -->
                        <div class="col-lg-4 col-md-6 col-sm-6 m-b30 animate_line">
                            <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                                <div class="icon-md site-text-primary m-b20">
                                    <a href="oferta.php" class="icon-cell"><i class="flaticon-blush"></i></a>
                                </div>
                                <div class="icon-content ">
                                    <h5 class="wt-tilte text-uppercase">Indywidualne podejście do Klienta</h5>
                                    <p>Każda osoba jest inna – dlatego oferujemy spersonalizowane konsultacje i dobór zabiegów do potrzeb, typu skóry i oczekiwań Klienta. Twoje zadowolenie i komfort są dla nas priorytetem.</p>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 3 -->
                        <div class="col-lg-4 col-md-6 col-sm-6 m-b30 animate_line">
                            <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                                <div class="icon-md site-text-primary m-b20">
                                    <a href="oferta.php" class="icon-cell"><i class="flaticon-combs"></i></a>
                                </div>
                                <div class="icon-content">
                                    <h5 class="wt-tilte text-uppercase">Innowacyjne technologie</h5>
                                    <p>Korzystamy wyłącznie z nowoczesnych, certyfikowanych urządzeń oraz sprawdzonych metod zabiegowych, takich jak Lipolaser Duo, Glow & Lift, SilkRoll czy Trio Laser Medika. To gwarancja skuteczności i bezpieczeństwa.</p>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 4 -->
                        <div class="col-lg-4 col-md-6 col-sm-6 m-b30 animate_line" style="display: none;">
                            <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                                <div class="icon-md site-text-primary m-b20">
                                    <a href="oferta.php" class="icon-cell"><i class="flaticon-bronzer"></i></a>
                                </div>
                                <div class="icon-content">
                                    <h5 class="wt-tilte text-uppercase">Szeroka oferta zabiegów</h5>
                                    <p>W MAGIC SALON znajdziesz kompleksową pielęgnację ciała i twarzy: od epilacji laserowej, przez manicure, aż po zabiegi liftingujące, antycellulitowe i modelujące sylwetkę. Wszystko w jednym miejscu.</p>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 5 -->
                        <div class="col-lg-4 col-md-6 col-sm-6 m-b30 animate_line">
                            <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                                <div class="icon-md site-text-primary m-b20">
                                    <a href="oferta.php" class="icon-cell"><i class="flaticon-hair-dryer"></i></a>
                                </div>
                                <div class="icon-content">
                                    <h5 class="wt-tilte text-uppercase">Komfortowa i relaksująca przestrzeń</h5>
                                    <p>Nasze wnętrza zostały zaprojektowane z myślą o odprężeniu i estetyce. Kameralne gabinety, przyjazna atmosfera i dbałość o każdy detal sprawiają, że każda wizyta staje się przyjemnym rytuałem.</p>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 6 -->
                        <div class="col-lg-4 col-md-6 col-sm-6 m-b30 animate_line">
                            <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                                <div class="icon-md site-text-primary m-b20">
                                    <a href="oferta.php" class="icon-cell"><i class="flaticon-spa"></i></a>
                                </div>
                                <div class="icon-content">
                                    <h5 class="wt-tilte text-uppercase">Elastyczne godziny i łatwa rezerwacja</h5>
                                    <p>Jesteśmy dostępni również w godzinach popołudniowych i weekendowych, by dopasować się do Twojego trybu życia. Wizytę możesz zarezerwować online, telefonicznie lub przez e-mail – szybko i wygodnie.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- OUR BEST SERVICES BLOCKS END -->

            </div>
        </div>
        <!-- OUR BEST SERVICES SECTION END -->

        <!-- OFERTA SECTION START -->
            <?php
            // Definicja usług w PHP dla łatwiejszego zarządzania i generowania HTML
            // Kategorie: face, body, eyes, laser, other
            $services = [
                // TWARZ
                [
                    'title' => 'Glow & Lift',
                    'category' => 'face',
                    'cat_name' => 'Pielęgnacja Twarzy',
                    'image' => 'images/our-services/large/s1.jpg',
                    'url' => 'nasza-oferta/glow-lift.php',
                    'desc' => 'Kompleksowa pielęgnacja twarzy łącząca oczyszczanie, regenerację i lifting. Idealna dla każdego typu cery.'
                ],
                [
                    'title' => 'Peeling Kawitacyjny',
                    'category' => 'face',
                    'cat_name' => 'Oczyszczanie',
                    'image' => 'images/our-services/large/s2.jpg',
                    'url' => 'nasza-oferta/peeling-kawitacyjny.php',
                    'desc' => 'Bezbolesne oczyszczanie skóry za pomocą ultradźwięków. Usuwa zanieczyszczenia i martwy naskórek.'
                ],
                // CIAŁO
                [
                    'title' => 'SilkRoll (Roll & Chill)',
                    'category' => 'body',
                    'cat_name' => 'Modelowanie Ciała',
                    'image' => 'images/our-services/large/s3.jpg',
                    'url' => 'nasza-oferta/roll-chill.php',
                    'desc' => 'Masaż mechaniczny z podczerwienią. Redukuje cellulit, ujędrnia skórę i wspomaga odchudzanie.'
                ],
                [
                    'title' => 'Modelowanie 360°',
                    'category' => 'body',
                    'cat_name' => 'Wyszczuplanie',
                    'image' => 'images/our-services/large/s11.jpg',
                    'url' => 'nasza-oferta/modelowanie-360.php',
                    'desc' => 'Kompleksowy program łączący technologie dla maksymalnej redukcji tkanki tłuszczowej i poprawy konturu.'
                ],
                [
                    'title' => 'Dermomasaż',
                    'category' => 'body',
                    'cat_name' => 'Antycellulit',
                    'image' => 'images/our-services/large/s12.jpg',
                    'url' => 'nasza-oferta/dermomasaz.php',
                    'desc' => 'Masaż podciśnieniowy rozbijający tkankę tłuszczową i redukujący widoczność cellulitu.'
                ],
                [
                    'title' => 'Liposukcja Ultradźwiękowa',
                    'category' => 'body',
                    'cat_name' => 'Modelowanie',
                    'image' => 'images/our-services/large/s13.jpg',
                    'url' => 'nasza-oferta/liposukcja-ultradzwiekowa-jedna-partia.php',
                    'desc' => 'Bezinwazyjna metoda redukcji tkanki tłuszczowej za pomocą fal ultradźwiękowych.'
                ],
                [
                    'title' => 'Lipolaser Duo',
                    'category' => 'body',
                    'cat_name' => 'Wyszczuplanie',
                    'image' => 'images/our-services/large/s14.jpg',
                    'url' => 'nasza-oferta/lipolaser-jedna-partia.php',
                    'desc' => 'Zimny laser biostymulujący naturalny proces rozpadu komórek tłuszczowych.'
                ],
                [
                    'title' => 'Detox & Drenaż',
                    'category' => 'body',
                    'cat_name' => 'Zdrowie',
                    'image' => 'images/our-services/large/s15.jpg',
                    'url' => 'nasza-oferta/detox-drenaz.php',
                    'desc' => 'Oczyszczenie organizmu z toksyn, redukcja obrzęków i poprawa krążenia limfatycznego.'
                ],
                // LASER I EPILACJA
                [
                    'title' => 'Epilacja Laserowa',
                    'category' => 'laser',
                    'cat_name' => 'Trwałe Usuwanie Włosów',
                    'image' => 'images/our-services/large/s7.jpg',
                    'url' => 'nasza-oferta/depilacja-laserowa.php',
                    'desc' => 'Najskuteczniejsza metoda trwałego usuwania owłosienia przy użyciu lasera diodowego.'
                ],
                [
                    'title' => 'Depilacja Woskiem',
                    'category' => 'laser',
                    'cat_name' => 'Depilacja',
                    'image' => 'images/our-services/large/s8.jpg',
                    'url' => 'nasza-oferta/depilacja-woskiem.php',
                    'desc' => 'Klasyczna metoda usuwania zbędnego owłosienia zapewniająca gładką skórę na tygodnie.'
                ],
                // OPRAWA OCZU
                [
                    'title' => 'Laminacja i Lifting Rzęs',
                    'category' => 'eyes',
                    'cat_name' => 'Stylizacja Rzęs',
                    'image' => 'images/our-services/large/s5.jpg',
                    'url' => 'nasza-oferta/laminacja-rzes.php',
                    'desc' => 'Podkręcenie, odżywienie i przyciemnienie naturalnych rzęs. Efekt otwartego oka.'
                ],
                [
                    'title' => 'Architektura Brwi',
                    'category' => 'eyes',
                    'cat_name' => 'Stylizacja Brwi',
                    'image' => 'images/our-services/large/s6.jpg',
                    'url' => 'nasza-oferta/laminacja-brwi.php',
                    'desc' => 'Idealny kształt i kolor brwi dobrany indywidualnie do rysów twarzy. Geometria i laminacja.'
                ],
                [
                    'title' => 'Stylizacja Rzęs',
                    'category' => 'eyes',
                    'cat_name' => 'Przedłużanie',
                    'image' => 'images/our-services/large/s10.jpg',
                    'url' => 'nasza-oferta/stylizacja-rzes.php',
                    'desc' => 'Profesjonalne przedłużanie i zagęszczanie rzęs metodami od 1:1 do dużych objętości.'
                ]
            ];
            ?>

            <div class="magic-premium-offer-section" id="oferta">
                <div class="container">
                    
                    <!-- Header -->
                    <div class="magic-section-head">
                        <h5 class="text-uppercase font-weight-600 text-primary-theme mb-2">Odkryj nasze możliwości</h5>
                        <h2><span class="text-highlight">Kompleksowa</span> Oferta Usług</h2>
                        <div class="magic-separator">
                            <div class="magic-separator-line"></div>
                            <i class="fa fa-leaf"></i>
                            <div class="magic-separator-line"></div>
                        </div>
                        <p style="max-width: 700px; margin: 0 auto; color: #666;">
                            W MAGIC SALON oferujemy szeroki wachlarz nowoczesnych zabiegów, zaprojektowanych z myślą o Twoim pięknie i komforcie. Wybierz kategorię poniżej, aby znaleźć idealny zabieg dla siebie.
                        </p>
                    </div>

                    <!-- Filter Buttons -->
                    <div class="magic-filter-container">
                        <button class="magic-filter-btn active" data-filter="all">Wszystkie</button>
                        <button class="magic-filter-btn" data-filter="face">Twarz</button>
                        <button class="magic-filter-btn" data-filter="body">Ciało</button>
                        <button class="magic-filter-btn" data-filter="eyes">Oprawa Oczu</button>
                        <button class="magic-filter-btn" data-filter="laser">Epilacja</button>
                    </div>

                    <!-- Service Grid -->
                    <div class="magic-offer-grid">
                        <?php foreach ($services as $service): ?>
                            <div class="magic-service-card animate-card" data-category="<?php echo $service['category']; ?>">
                                <div class="magic-card-img-wrapper">
                                    <img src="<?php echo $service['image']; ?>" alt="<?php echo $service['title']; ?>" class="magic-card-img">
                                    <div class="magic-card-overlay"></div>
                                </div>
                                <div class="magic-card-content">
                                    <div class="magic-card-category"><?php echo $service['cat_name']; ?></div>
                                    <h3 class="magic-card-title"><?php echo $service['title']; ?></h3>
                                    <p class="magic-card-desc"><?php echo $service['desc']; ?></p>
                                    <a href="<?php echo $service['url']; ?>" class="magic-card-btn">
                                        Szczegóły zabiegu <i class="fa fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Bottom CTA -->
                    <div class="text-center mt-5">
                        <a href="cennik.php" class="site-button radius-sm button-lg">
                            <span class="font-weight-700 text-uppercase p-lr15">Zobacz pełny cennik</span>
                        </a>
                    </div>

                </div>
            </div>

            <!-- Inline JS for Filtering logic (Lightweight) -->
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const filterBtns = document.querySelectorAll('.magic-filter-btn');
                    const cards = document.querySelectorAll('.magic-service-card');

                    filterBtns.forEach(btn => {
                        btn.addEventListener('click', () => {
                            // Remove active class from all buttons
                            filterBtns.forEach(b => b.classList.remove('active'));
                            // Add active class to clicked button
                            btn.classList.add('active');

                            const filterValue = btn.getAttribute('data-filter');

                            cards.forEach(card => {
                                // Reset animation
                                card.classList.remove('animate-card');
                                void card.offsetWidth; // trigger reflow

                                if (filterValue === 'all' || card.getAttribute('data-category') === filterValue) {
                                    card.classList.remove('hidden');
                                    card.classList.add('animate-card');
                                } else {
                                    card.classList.add('hidden');
                                }
                            });
                        });
                    });
                });
            </script>
            <!-- OFERTA SECTION END -->

        <!-- O NAS ZAKOŃCZENIE SECTION -->
        <div class="section-full p-t80 p-b50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 m-b30">
                        <div class="section-head text-left">
                            <h3 class="text-uppercase">Nasza filozofia </h3>
                            <div class="wt-separator-outer">
                                <div class="wt-separator style-icon">
                                    <i class="fa fa-leaf text-black"></i>
                                    <span class="separator-left site-bg-primary"></span>
                                    <span class="separator-right site-bg-primary"></span>
                                </div>
                            </div>
                            <p>Wierzymy, że prawdziwe piękno zaczyna się od wnętrza, a pielęgnacja ciała jest formą miłości do samego siebie. Dlatego w naszym salonie nie ma miejsca na pośpiech, powierzchowność i schematy. Każdy zabieg poprzedzony jest szczegółową konsultacją – dobieramy metody, technologie i produkty, które najlepiej odpowiadają Twoim oczekiwaniom i potrzebom.
                            </p>
                            <p>Stawiamy na jakość, bezpieczeństwo i skuteczność. W MAGIC SALON korzystamy wyłącznie z renomowanego sprzętu i certyfikowanych preparatów, co pozwala nam osiągać spektakularne efekty przy pełnym komforcie i bezpieczeństwie klientów.</p>
                            <h3>Zapraszamy do MAGIC SALON</h3>
                            <p>
                                Jeśli szukasz miejsca, gdzie w sposób kompleksowy i profesjonalny zadbasz o swoją urodę, zdrowie skóry i dobre samopoczucie – trafiłeś idealnie. MAGIC SALON to oaza piękna, relaksu i nowoczesnej pielęgnacji, gdzie każda wizyta jest wyjątkowym doświadczeniem.
                            </p>
                            <p>MAGIC SALON – Piękno w zasięgu ręki. Zrelaksuj się i poczuj się wyjątkowo – zaufaj ekspertom, którzy zadbają o Ciebie z sercem i precyzją.</p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-8 m-b30">
                        <div class="about-com-pic wt-thum-bx wt-img-effect rotate">
                            <img src="images/about-pic1.jpg" alt="Nasza filozofia. Zapraszamy do MAGIC SALON" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- O NAS ZAKOŃCZENIE SECTION END  -->

        <!-- INSTAGRAM SECTION START -->
        <div class="section-full p-t50 p-b10 overlay-wraper site-bg-primary bg-repeat">
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

    </div>
    <!-- CONTENT END -->

        <!-- Footer -->
        <?php include 'partials/footer.php'; ?>

</body>

</html>