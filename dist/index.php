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

<body id="bg" class="home-page">

<!-- GOOGLE TAG MANAGER KOD DO BODY -->
<?php include 'partials/GTMbodytag.php'; ?>

    <div class="page-wraper">

        <!-- HEADER START -->

        <!-- Header -->
        <?php include 'partials/header.php'; ?>

        <!-- HEADER END -->

        <!-- CONTENT START -->
        <div class="page-content">

        <!-- SLIDER START -->
            <div id="heroSlider" class="carousel slide carousel-fade hero-slider" data-bs-ride="carousel" data-bs-interval="6000" data-bs-pause="hover">
                <!-- Wskaźniki (Dots) -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>

                <div class="carousel-inner h-100">
                    <!-- SLIDE 1 -->
                    <div class="carousel-item active h-100">
                        <div class="hero-image-wrapper">
                            <img src="images/main-slider/slider2/slide1.jpg" class="d-block w-100 hero-bg-img" alt="Magic Salon - Najlepsze miejsce dla Ciebie">
                            <div class="hero-overlay"></div>
                        </div>
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-start">
                                    <div class="col-lg-9 col-md-10 mx-auto mx-md-0">
                                        <div class="hero-subtitle text-uppercase">
                                            Najlepsze miejsce <span class="text-primary-theme">Dla Ciebie!</span>
                                        </div>
                                        <h1 class="hero-title text-uppercase">
                                            <span class="text-primary-theme">Piękno</span> w zasięgu ręki!
                                        </h1>
                                        <p class="hero-desc">
                                            Witaj w MAGIC SALON – wyjątkowym salonie piękności, który powstał z pasji do estetyki, zdrowia i holistycznego podejścia do pielęgnacji ciała i ducha.
                                        </p>
                                        <div class="hero-buttons">
                                            <a href="oferta.php" class="site-button radius-sm button-lg">Oferta</a>
                                            <a href="o-firmie.php" class="site-button-secondry radius-sm button-lg">O firmie</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SLIDE 2 -->
                    <div class="carousel-item h-100">
                        <div class="hero-image-wrapper">
                            <img src="images/main-slider/slider2/slide2.jpg" class="d-block w-100 hero-bg-img" alt="Relaks w Magic Salon">
                            <div class="hero-overlay"></div>
                        </div>
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-start">
                                    <div class="col-lg-9 col-md-10 mx-auto mx-md-0">
                                        <div class="hero-subtitle text-uppercase">
                                            Zrelaksuj się <span class="text-primary-theme">w Salon Magic</span>
                                        </div>
                                        <h1 class="hero-title text-uppercase">
                                            <span class="text-primary-theme">Twoje piękno</span> nasza pasja
                                        </h1>
                                        <p class="hero-desc">
                                            Nasze motto: "Piękno w zasięgu ręki. Zrelaksuj się i poczuj się wyjątkowo." – to nie tylko slogan, ale codzienna filozofia, którą realizujemy z troską.
                                        </p>
                                        <div class="hero-buttons">
                                            <a href="opinie-klientow.php" class="site-button radius-sm button-lg">Opinie klientów</a>
                                            <a href="faq-pytania.php" class="site-button-secondry radius-sm button-lg">FAQ & Pytania</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SLIDE 3 -->
                    <div class="carousel-item h-100">
                        <div class="hero-image-wrapper">
                            <img src="images/main-slider/slider2/slide3.jpg" class="d-block w-100 hero-bg-img" alt="Magic Salon - Profesjonalna pielęgnacja">
                            <div class="hero-overlay"></div>
                        </div>
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-start">
                                    <div class="col-lg-9 col-md-10 mx-auto mx-md-0">
                                        <div class="hero-subtitle text-uppercase">
                                            Witamy <span class="text-primary-theme">w Magicznym Miejscu</span>
                                        </div>
                                        <h1 class="hero-title text-uppercase">
                                            <span class="text-primary-theme">Gdzie Twoje</span> Piękno Rozkwita!
                                        </h1>
                                        <p class="hero-desc">
                                            To właśnie tu, w atmosferze luksusu i profesjonalizmu, odkryjesz swoją prawdziwą urodę pod okiem doświadczonych ekspertów.
                                        </p>
                                        <div class="hero-buttons">
                                            <a href="galeria.php" class="site-button radius-sm button-lg">Galeria</a>
                                            <a href="zarezerwuj-wizyte.php" class="site-button-secondry radius-sm button-lg">Zarezerwuj wizytę</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Nawigacja (Strzałki) -->
                <button class="carousel-control-prev" type="button" data-bs-target="#heroSlider" data-bs-slide="prev">
                    <span class="carousel-control-btn">
                        <i class="fa fa-angle-left"></i>
                    </span>
                    <span class="visually-hidden">Poprzedni</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#heroSlider" data-bs-slide="next">
                    <span class="carousel-control-btn">
                        <i class="fa fa-angle-right"></i>
                    </span>
                    <span class="visually-hidden">Następny</span>
                </button>
            </div>
            <!-- SLIDER END -->
            

            <!-- ABOUT SECTION START -->
            <div class="section-full p-t100 p-b70 bg-bottom-center bg-full-width bg-no-repeat">
                <div class="container ">
                    <div class="section-content about4-section">
                        <div class="row">
                            <div class="col-md-5 col-sm-5 m-b30 animate rubberBand animated">
                                <div class="about4-section-pic ">
                                    <div class="wt-media">
                                        <img src="images/slid-2.jpg" alt="Logo oficjalne Magic Salon">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-7 col-sm-7 m-b30 animate rubberBand animated">
                                <div class="about4-content">
                                    <h3 class="text-uppercase text-secondry">Zaopiekujemy się Tobą!</h3>
                                    <h2><span class="site-text-primary">Witamy w </span> MAGIC SALON </h2>
                                    <p><strong>MAGIC SALON – Twoje piękno, nasza pasja – odkryj magię profesjonalnej pielęgnacji!</strong></p>
                                    <p>Witamy w Magicznym Miejscu, Gdzie Twoje Piękno Rozkwita! Witaj w MAGIC SALON – wyjątkowym salonie piękności, który powstał z pasji do estetyki, zdrowia i holistycznego podejścia do pielęgnacji ciała i ducha. Nasze motto: "Piękno w zasięgu ręki. Zrelaksuj się i poczuj się wyjątkowo." – to nie tylko slogan, ale codzienna filozofia, którą realizujemy z troską i zaangażowaniem. To właśnie tu, w atmosferze luksusu i profesjonalizmu, odkryjesz swoją prawdziwą urodę. </p>
                                    <div class="text-left p-b30">
                                        <img src="images/piekno.png" alt="Piękno nie musi być daleko!">
                                    </div>
                                    <div>
                                        <a href="o-nas/blog.php" class="site-button radius-sm">
                                            <span class="font-weight-700 inline-block text-uppercase p-lr15">Blog</span>
                                        </a>
                                        <a href="oferta.php" class="site-button-secondry radius-sm">
                                            <span class="font-weight-700 inline-block text-uppercase p-lr15">Oferta</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ABOUT COMPANY SECTION END -->

            <!-- WELCOME SECTION START -->
            <div class="section-full p-t100  p-b70 bg-bottom-center bg-full-width bg-no-repeat" style="background-image:url(images/background/bg-1.png);">
                <div class="container ">
                    <div class="section-head text-center">
                        <h1><span class="site-text-primary"> MAGIC SALON </span> Twoje piękno, nasza pasja</h1>
                        <div class="wt-separator-outer ">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left site-bg-primary"></span>
                                <span class="separator-right site-bg-primary"></span>
                            </div>
                        </div>

                        <p class="font-16"><strong>
                                Co wyróżnia MAGIC SALON?
                            </strong>
                        </p>

                    </div>
                    <div class="section-content text-center about-spa m-b30">
                        <p>
                            MAGIC SALON to miejsce, gdzie najnowsze technologie spotykają się z indywidualnym podejściem do klienta. Wiemy, że każda osoba jest wyjątkowa, dlatego nasze zabiegi są precyzyjnie dobierane do potrzeb skóry, sylwetki i stylu życia naszych Klientów. Wyróżnia nas szeroka oferta zabiegów kosmetycznych, estetycznych i relaksacyjnych – wykonywanych wyłącznie przez certyfikowanych specjalistów z doświadczeniem.
                        </p>
                        <p>
                            Naszą misją jest nie tylko poprawa wyglądu, ale i samopoczucia – wierzymy, że piękno to równowaga ciała i ducha.
                        </p>
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-4 col-md-6 m-b30 animate tada animated">
                                <div class="wt-icon-box-wraper p-a30 center">
                                    <div class="wt-icon-box-md radius bg-secondry m-b20 circle-line-effect">
                                        <span class="icon-cell text-white"><span class="flaticon-female-hairs"></span></span>
                                    </div>
                                    <div class="icon-content">
                                        <h4 class="wt-tilte font-weight-500">Profesjonalizm na najwyższym poziomie</h4>
                                        <p class="text-secondry">W Salonie Magic stawiamy na najwyższą jakość usług. Nasi wykwalifikowani specjaliści dbają o każdy detal, abyś czuła się w pełni zaopiekowana. Każdy zabieg wykonywany jest z pełnym zaangażowaniem i indywidualnym podejściem.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 m-b30 animate tada animated">
                                <div class="wt-icon-box-wraper p-a30 center">
                                    <div class="wt-icon-box-md radius bg-secondry m-b20 circle-line-effect">
                                        <span class="icon-cell text-white"><span class="flaticon-female-hairs"></span></span>
                                    </div>
                                    <div class="icon-content">
                                        <h4 class="wt-tilte font-weight-500">Innowacyjne technologie</h4>
                                        <p class="text-secondry">Korzystamy z najnowszych urządzeń i technologii, które zapewniają skuteczność i bezpieczeństwo naszych zabiegów. Dzięki zaawansowanym metodom, takim jak liposukcja ultradźwiękowa czy terapia mikrodrgań, osiągamy spektakularne efekty w krótkim czasie.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 m-b30 animate tada animated">
                                <div class="wt-icon-box-wraper p-a30 center">
                                    <div class="wt-icon-box-md radius bg-secondry m-b20 circle-line-effect">
                                        <span class="icon-cell text-white"><span class="flaticon-female-hairs"></span></span>
                                    </div>
                                    <div class="icon-content">
                                        <h4 class="wt-tilte font-weight-500">Komfort i relaks</h4>
                                        <p class="text-secondry">Dbamy o to, aby każda wizyta w naszym salonie była przyjemnością. Oferujemy komfortową atmosferę, w której możesz się zrelaksować i odpocząć, a także doświadczyć wyjątkowej pielęgnacji, która odmieni Twoje ciało i umysł.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <a href="opinie-klientow.php" class="m-b15 site-button text-uppercase radius-sm m-lr15 font-weight-700 button-lg">Opinie klientów</a>
                            <a href="faq-pytania.php" class="m-b15 site-button-secondry text-uppercase radius-sm m-lr15 font-weight-700 button-lg">FAQ & Najczęściej zadawane pytania</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- WELCOME COMPANY SECTION END -->

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


            <!-- WELCOME SECTION START -->
            <div class="section-full p-t100 p-b70 bg-bottom-center bg-full-width bg-no-repeat" style="background-image:url(images/background/bg-1.png);">
                <div class="container ">
                    <div class="section-head text-center">
                        <h2><span class="site-text-primary">Dla kogo </span> jest MAGIC SALON? </h2>
                        <div class="wt-separator-outer ">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left site-bg-primary"></span>
                                <span class="separator-right site-bg-primary"></span>
                            </div>
                        </div>

                        <p>
                            Nasze zabiegi są skierowane zarówno do kobiet, jak i mężczyzn. Dbamy o każdego Klienta z tą samą uwagą i troską. Wyglądaj dobrze, czuj się dobrze. Specjalizujemy się w zabiegach kosmetycznych wykonywanych w formie zastrzyków oraz zabiegach pielęgnacyjnych skóry o charakterze medycznym dla osób, które chcą wyglądać i czuć się jak najlepiej.
                        </p>

                    </div>
                    <div class="section-content circle-block-outer" data-bs-toggle="tab-hover">
                        <div class="row  nav nav-tab">

                            <div class="col-lg-4 col-md-12 m-b30">
                                <div class="nav-item">
                                    <a class="nav-link active wt-icon-box-wraper right p-a10 m-b20" href="#tab1" data-bs-toggle="tab">
                                        <div class="icon-md site-text-primary radius">
                                            <span class="icon-cell  site-text-primary"><img src="images/icon/candle-1.png" alt="Profesjonalizm"></span>
                                        </div>
                                        <div class="icon-content">
                                            <h4 class="wt-tilte text-uppercase">• Profesjonalizm</h4>
                                            <p>Nasz zespół tworzą wykwalifikowane kosmetolożki, linergistki i terapeuci</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="nav-item">
                                    <a class="nav-link wt-icon-box-wraper right p-a10 m-r30 m-b20" href="#tab2" data-bs-toggle="tab">
                                        <div class="icon-md site-text-primary radius">
                                            <span class="icon-cell  site-text-primary"><img src="images/icon/leaves.png" alt="Bezpieczeństwo"></span>
                                        </div>
                                        <div class="icon-content">
                                            <h4 class="wt-tilte text-uppercase">• Bezpieczeństwo</h4>
                                            <p>Pracujemy na certyfikowanym sprzęcie i sprawdzonych preparatach.</p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-12 m-b30">
                                <div class="circle-content-pic tab-content ">
                                    <div id="tab1" class="tab-pane in active">
                                        <div class="wt-box">
                                            <div class="wt-media site-text-primary m-b20 ">
                                                <img src="images/circle-block/1.jpg" class="radius-bx" alt="Dla kogo jest MAGIC SALON?">
                                            </div>
                                        </div>
                                    </div>

                                    <div id="tab2" class="tab-pane">
                                        <div class="wt-box">
                                            <div class="wt-media site-text-primary m-b20">
                                                <img src="images/circle-block/2.jpg" class="radius-bx" alt="Dla kogo jest MAGIC SALON?">
                                            </div>
                                        </div>
                                    </div>

                                    <div id="tab4" class="tab-pane">
                                        <div class="wt-box">
                                            <div class="wt-media site-text-primary m-b20">
                                                <img src="images/circle-block/4.jpg" class="radius-bx" alt="Dla kogo jest MAGIC SALON?">
                                            </div>
                                        </div>
                                    </div>

                                    <div id="tab5" class="tab-pane">
                                        <div class="wt-box">
                                            <div class="wt-media site-text-primary m-b20">
                                                <img src="images/circle-block/5.jpg" class="radius-bx" alt="Dla kogo jest MAGIC SALON?">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-4 col-md-12 m-b30">
                                <div class="nav-item">
                                    <a class="nav-link wt-icon-box-wraper left p-a10 m-b20" href="#tab4" data-bs-toggle="tab">
                                        <div class="icon-md site-text-primary radius">
                                            <span class="icon-cell  site-text-primary"><img src="images/icon/bathtub.png" alt="Indywidualne podejście"></span>
                                        </div>
                                        <div class="icon-content">
                                            <h4 class="wt-tilte text-uppercase">• Indywidualne podejście</h4>
                                            <p>Każdy zabieg poprzedzony jest konsultacją.</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="nav-item">
                                    <a class="nav-link wt-icon-box-wraper left p-a10 m-l30 m-b20" href="#tab5" data-bs-toggle="tab">
                                        <div class="icon-md site-text-primary radius">
                                            <span class="icon-cell  site-text-primary"><img src="images/icon/jacuzzi.png" alt="Nowoczesność"></span>
                                        </div>
                                        <div class="icon-content">
                                            <h4 class="wt-tilte text-uppercase">• Nowoczesność</h4>
                                            <p>Śledzimy najnowsze trendy w kosmetologii i stale rozszerzamy ofertę.</p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- WELCOME COMPANY SECTION END -->

            <!-- OUR SPECIAL OFFER SECTION start  -->
            <div class="section-full  special-offer-block2 overlay-wraper bg-repeat p-t100 p-b70" style="background-image:url(images/background/bg-6.jpg);">
                <div class="overlay-main bg-white opacity-01"></div>
                <div class="left-larg-pic">
                    <div class="wt-media">
                        <img src="images/stone_flower2.png" alt="Zarezerwuj swoją chwilę dla siebie – zasługujesz na to, co najlepsze">
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3">

                        </div>
                        <div class="col-md-9 col-sm-9 m-b30">
                            <div class="awesome-counter text-right">
                                <h3 class="font-24 text-secondry">Odwiedź nas już dziś!</h3>
                                <h2 class="font-60 font-weight-600"><span class="site-text-primary">Zarezerwuj swoją chwilę dla siebie – zasługujesz na to, co najlepsze. </span></h2>
                                <p>Zapraszamy Cię do naszego salonu, gdzie możesz zadbać o siebie w atmosferze spokoju i pełnego komfortu. Nasza przestrzeń została stworzona z myślą o tym, by każdy klient poczuł się wyjątkowo od pierwszego kroku. Magiczna atmosfera, pachnące olejki, relaksacyjna muzyka i uśmiechnięty personel czekają na Ciebie.</p>
                            </div>
                            <div class="pull-right counter-small-1">
                                <ul class="list-inline">
                                    <li>
                                        <div class="wt-icon-box-wraper left p-a10 text-secondry">
                                            <span class="icon-sm">
                                                <span class="flaticon-happy"></span>
                                            </span>
                                            <div class="icon-content">
                                                <div class="font-20 font-weight-600"><span class="counter">100</span><b>+</b></div>
                                                <span class="text-uppercase">Zadowolonych klientów</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wt-icon-box-wraper left p-a10 text-secondry">
                                            <span class="icon-sm">
                                                <span class="flaticon-trophy"></span>
                                            </span>
                                            <div class="icon-content">
                                                <div class="font-20 font-weight-600"><span class="counter">100</span><b>%</b></div>
                                                <span class="text-uppercase">Naszego zaangażowania</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wt-icon-box-wraper left p-a10 text-secondry">
                                            <span class="icon-sm">
                                                <span class="flaticon-female-hairs"></span>
                                            </span>
                                            <div class="icon-content">
                                                <div class="font-20 font-weight-600"><span class="counter">100</span><b>+</b></div>
                                                <span class="text-uppercase">Wykonanych zabiegów</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- OUR SPECIAL OFFER SECTION END  -->

            <!-- GALLERY STYLE-2 -->
            <div class="section-full p-t100 p-b70 bg-white" id="content1">
                <div class="container">
                    <!-- TITLE START-->
                    <div class="section-head text-center">
                        <h2><span class="site-text-primary">Nasza</span> Galeria</h2>
                        <div class="wt-separator-outer ">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left site-bg-primary"></span>
                                <span class="separator-right site-bg-primary"></span>
                            </div>
                        </div>
                        <p>Odzyskaj młody wygląd. Wystarczy jeden krok! Twoje bezpieczeństwo i komfort są dla nas priorytetem. Każdy zabieg dostosowujemy indywidualnie, aby osiągnąć naturalny, piękny i trwały efekt.</p>
                    </div>
                    <!-- TITLE END-->

                    <div class="portfolio-wrap mfp-gallery  no-col-gap m-b30">
                        <div class="row">
                            <div class="masonry-item cat-filter-1 col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                <div class="wt-gallery-bx">
                                    <div class="wt-thum-bx wt-img-effect wt-img-overlay7">

                                        <a href="galeria.php">
                                            <img src="images/gallery/portrait/pic5.jpg" alt="Nasza Galeria">
                                        </a>

                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <a href="galeria.php">
                                                    <i class="fa fa-link wt-icon-box-xs"></i>
                                                </a>
                                                <a href="images/gallery/portrait/pic5.jpg" class="mfp-link">
                                                    <i class="fa fa-picture-o wt-icon-box-xs"></i>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="masonry-item cat-filter-2 col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                <div class="wt-gallery-bx">
                                    <div class="wt-thum-bx wt-img-effect wt-img-overlay7">

                                        <a href="galeria.php">
                                            <img src="images/gallery/portrait-half/pic1.jpg" alt="Nasza Galeria">
                                        </a>

                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <a href="galeria.php">
                                                    <i class="fa fa-link wt-icon-box-xs"></i>
                                                </a>
                                                <a href="images/gallery/portrait-half/pic1.jpg" class="mfp-link">
                                                    <i class="fa fa-picture-o wt-icon-box-xs"></i>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="masonry-item cat-filter-3 col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                <div class="wt-gallery-bx">
                                    <div class="wt-thum-bx wt-img-effect wt-img-overlay7">

                                        <a href="galeria.php">
                                            <img src="images/gallery/portrait/pic6.jpg" alt="Nasza Galeria">
                                        </a>

                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <a href="galeria.php">
                                                    <i class="fa fa-link wt-icon-box-xs"></i>
                                                </a>
                                                <a href="images/gallery/portrait/pic6.jpg" class="mfp-link">
                                                    <i class="fa fa-picture-o wt-icon-box-xs"></i>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="masonry-item cat-filter-4 col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                <div class="wt-gallery-bx">
                                    <div class="wt-thum-bx wt-img-effect wt-img-overlay7">

                                        <a href="galeria.php">
                                            <img src="images/gallery/portrait-half/pic2.jpg" alt="Nasza Galeria">
                                        </a>

                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <a href="galeria.php">
                                                    <i class="fa fa-link wt-icon-box-xs"></i>
                                                </a>
                                                <a href="images/gallery/portrait-half/pic2.jpg" class="mfp-link">
                                                    <i class="fa fa-picture-o wt-icon-box-xs"></i>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="masonry-item cat-filter-5 col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                <div class="wt-gallery-bx">
                                    <div class="wt-thum-bx wt-img-effect wt-img-overlay7">

                                        <a href="galeria.php">
                                            <img src="images/gallery/portrait-half/pic3.jpg" alt="Nasza Galeria">
                                        </a>

                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <a href="galeria.php">
                                                    <i class="fa fa-link wt-icon-box-xs"></i>
                                                </a>
                                                <a href="images/gallery/portrait-half/pic3.jpg" class="mfp-link">
                                                    <i class="fa fa-picture-o wt-icon-box-xs"></i>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="masonry-item cat-filter-1 col-lg-8 col-md-8 col-sm-8 col-xs-6">
                                <div class="wt-gallery-bx">
                                    <div class="wt-thum-bx wt-img-effect wt-img-overlay7">

                                        <a href="galeria.php">
                                            <img src="images/gallery/landscape-half/pic1.jpg" alt="Nasza Galeria">
                                        </a>

                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <a href="galeria.php">
                                                    <i class="fa fa-link wt-icon-box-xs"></i>
                                                </a>
                                                <a href="images/gallery/landscape-half/pic1.jpg" class="mfp-link">
                                                    <i class="fa fa-picture-o wt-icon-box-xs"></i>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- GALLERY STYLE-2 End -->

            <!-- OUR SPECIAL OFFER SECTION END  -->
            <div class="section-full site-bg-primary">
                <div class="container-fluid bg-top-right bg-no-repeat bg-full-height special-offer-block no-col-gap" style="background-image:url(images/special-offer.jpg);">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="section-content special-offer-outer site-bg-primary radius  p-tb60">
                                <div class="special-offer radius p-tb60">
                                    <div class="wt-left-part special-offer-in">
                                        <div class="wt-box p-r100 text-white">
                                            <h1>Skorzystaj z naszych okazyjnych zabiegów!</h1>
                                            <h2 class="text-uppercase">Nasz zespół MAGIC SALON</h2>
                                            <p>"W naszej klinice dbamy o najwyższą jakość i bezpieczeństwo wykonywanych zabiegów. Komfort i satysfakcja naszych pacjentów to dla nas absolutny priorytet."</p>
                                            <a href="oferta.php" class="site-button text-uppercase radius-sm font-weight-700 button-lg">zobacz naszą kompleksową ofertę</a>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="section-content">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- OUR SPECIAL OFFER SECTION END  -->

<!-- Sekcja Rezerwacji Online - Booksy Embed -->
<section class="booksy-reservation-section" id="rezerwacja">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <!-- Nagłówek sekcji -->
                <div class="section-header text-center mb-4 mb-md-5">
                    <h2 class="section-title">Zarezerwuj Swoją Wizytę Online</h2>
                    <p class="section-subtitle">Wybierz termin i usługę w kilka sekund przez system Booksy</p>
                </div>

                <!-- Kontener Iframe -->
                <div class="booksy-iframe-wrapper">
                    <!-- Loader Animation -->
                    <div class="iframe-loader" id="iframeLoader">
                        <div class="spinner-border" role="status">
                            <span class="visually-hidden">Ładowanie...</span>
                        </div>
                        <p class="loader-text mt-3">Ładowanie systemu rezerwacji...</p>
                    </div>

                    <!-- Responsive Iframe z poprawionymi atrybutami -->
                    <iframe
                        id="booksyFrame"
                        src="https://magicsalon28.booksy.com"
                        class="booksy-iframe"
                        title="Rezerwacja online - Magic Salon"
                        loading="lazy"
                        allow="geolocation *; camera *; microphone *; payment *; fullscreen *"
                        allowfullscreen
                        allowpaymentrequest
                        referrerpolicy="no-referrer-when-downgrade"
                        onload="hideLoader()"
                        onerror="console.error('Iframe loading error')">
                    </iframe>
                    
                    <!-- Fallback dla blokowanych iframe -->
                    <noscript>
                        <div class="text-center p-4 bg-light">
                            <p>JavaScript jest wyłączony. Aby zarezerwować wizytę online, włącz JavaScript lub</p>
                            <a href="https://booksy.magicsalon.pl" target="_blank" class="btn btn-primary">
                                Otwórz Booksy w nowej karcie
                            </a>
                        </div>
                    </noscript>
                </div>

                <!-- Przycisk alternatywny -->
                <div class="text-center mt-4">
                    <a
                        href="https://booksy.magicsalon.pl"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="btn btn-primary-magic btn-reservation-alt"
                        aria-label="Otwórz rezerwację w nowym oknie">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-calendar-check me-2" viewBox="0 0 16 16">
                            <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                        </svg>
                        Otwórz rezerwację w nowej karcie
                    </a>
                </div>

                <!-- Info box -->
                <div class="reservation-info-box mt-4">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <div class="info-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="info-icon" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                </svg>
                                <div class="info-content">
                                    <h4>Rezerwacja 24/7</h4>
                                    <p>Zarezerwuj wizytę o dowolnej porze</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="info-icon" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                    <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                </svg>
                                <div class="info-content">
                                    <h4>Natychmiastowe potwierdzenie</h4>
                                    <p>Otrzymasz SMS i email z potwierdzeniem</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="info-icon" viewBox="0 0 16 16">
                                    <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
                                </svg>
                                <div class="info-content">
                                    <h4>Bezpieczne płatności</h4>
                                    <p>Twoje dane są w pełni chronione</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

            <!-- CONTACT US SECTION END  -->
            <div class="section-full p-t100 p-b70">
                <div class="container equal-wraper no-col-gap m-b30">

                    <!-- TITLE START -->
                    <div class="section-head text-center">
                        <h1><span class="site-text-primary"> Kontakt z nami</span> Umów się na wizytę</h1>
                        <div class="wt-separator-outer ">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left site-bg-primary"></span>
                                <span class="separator-right site-bg-primary"></span>
                            </div>
                        </div>
                        <p>Dzięki bogatemu doświadczeniu oraz ciągłemu podnoszeniu swoich kwalifikacji, jesteśmy w stanie zapewnić Ci usługi na najwyższym poziomie. Każdy zabieg, bez względu na jego rodzaj, traktujemy indywidualnie, uwzględniając Twoje potrzeby, oczekiwania i typ skóry. Chcemy, aby każda wizyta w naszym salonie była nie tylko efektywna, ale również przyjemna i relaksująca.</p>
                    </div>
                    <!-- TITLE END -->

                    <div class="row conntact-home bg-gray m-b30">
                        <div class="col-lg-4 col-md-6 contact-home-left bg-no-repeat site-bg-primary bg-left-center" style="background-image:url(images/background/contact-map.png);">
                            <div class="section-content">
                                <div class="p-a50">

                                    <div class="wt-icon-box-wraper left p-b20 text-white">
                                        <span class="icon-lg">
                                            <span class="flaticon-placeholder"></span>
                                        </span>
                                        <div class="icon-content">
                                            <h4 class="m-b5">Adres</h4>
                                            <span class="font-12">MAGIC SALON ul. Borówkowa 13, 55-002 Dobrzykowice</span>
                                        </div>
                                    </div>

                                    <div class="wt-icon-box-wraper left p-b20 text-white">
                                        <span class="icon-lg">
                                            <span class="flaticon-envelope"></span>
                                        </span>
                                        <div class="icon-content">
                                            <h4 class="m-b5">Adres e-mail</h4>
                                            <span class="font-12">biuro@magicsalon.pl </span><br>
                                            <span class="font-12">wizyty@magicsalon.pl </span>
                                        </div>
                                    </div>

                                    <div class="wt-icon-box-wraper left p-b20 text-white">
                                        <span class="icon-lg">
                                            <span class="flaticon-smartphone"></span>
                                        </span>
                                        <div class="icon-content">
                                            <h4 class="m-b5">Numer telefonu</h4>
                                            <span class="font-12" style="color: #fff"><a href="tel:+48 883 481 581" style="color: #fff">+48 883 481 581</a></span>
                                        </div>
                                    </div>

                                    <div class="Opening-hours text-white">
                                        <h3 class="wt-title text-uppercase m-t0">Godziny otwarcia</h3>
                                        <ul class="list-unstyled">
                                            <li>Poniedziałek - Sobota <span class="pull-right">9:00 - 18:00</span></li>
                                            <li>Niedziela <span class="pull-right">Zamknięte</span></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-6">
                            <div class="section-content bg-gray">
                                <div class="contact-home-right p-a30">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2505.7127763849394!2d17.19449491252832!3d51.095308040605865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470fe7e89195dbfd%3A0xdef91235a7163465!2sMagic%20Salon%20-%20Salon%20kosmetyczny!5e0!3m2!1spl!2spl!4v1760599642418!5m2!1spl!2spl" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- CONTACT US OFFER SECTION END  -->

            <!-- LATEST BLOG SECTION START -->
            <div class="section-full latest-blog bg-gray p-t100 p-b70">
                <div class="container">
                    <!-- TITLE -->
                    <div class="section-head text-center">
                        <h2><span class="site-text-primary">Najnowsze </span> wpisy na naszym blogu</h2>
                        <div class="wt-separator-outer ">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left site-bg-primary"></span>
                                <span class="separator-right site-bg-primary"></span>
                            </div>
                        </div>
                        <p>Przejrzyj nasz blog kosmetyczny. Dobierz do siebie odpowiednie zabiegi. Pozyskuj wiedzę ekspercką z naszych wpisów. Zainspiruj się do zmian w swoim wyglądzie.</p>
                    </div>

                    <!-- TITLE -->

                    <div class="section-content ">
                        <div class="row equal-wraper">
                            <!-- COLUMNS 1 -->
                            <div class="col-lg-6 col-md-12 m-b30">

                                <div class="blog-post latest-blog-3 blog-md date-style-1 clearfix">
                                    <div class="wt-post-media wt-img-effect zoom-slow">
                                        <a href="blog/jak-nowoczesne-zabiegi-kosmetyczne-zmieniaja-nasze-podejscie-do-pielegnacji-skory.php"><img src="images/blog/blog-small/pic1.jpg" alt="Jak Nowoczesne Zabiegi Kosmetyczne Zmieniają Nasze Podejście do Pielęgnacji Skóry"></a>
                                    </div>
                                    <div class="wt-post-info">
                                        <div class="wt-post-title ">
                                            <h4 class="post-title font-weight-800"><a href="blog/jak-nowoczesne-zabiegi-kosmetyczne-zmieniaja-nasze-podejscie-do-pielegnacji-skory.php">Jak Nowoczesne Zabiegi Kosmetyczne Zmieniają Nasze Podejście do Pielęgnacji Skóry</a></h4>
                                        </div>

                                    </div>
                                </div>

                                <div class="blog-post latest-blog-3 blog-md date-style-1 clearfix">
                                    <div class="wt-post-media wt-img-effect zoom-slow">
                                        <a href="blog/jak-wybrac-idealny-zabieg-kosmetyczny-dla-siebie.php"><img src="images/blog/blog-small/pic2.jpg" alt="Jak Wybrać Idealny Zabieg Kosmetyczny dla Siebie?"></a>
                                    </div>
                                    <div class="wt-post-info">
                                        <div class="wt-post-title ">
                                            <h4 class="post-title font-weight-800"><a href="blog/jak-wybrac-idealny-zabieg-kosmetyczny-dla-siebie.php">Jak Wybrać Idealny Zabieg Kosmetyczny dla Siebie?</a></h4>
                                        </div>

                                    </div>
                                </div>

                                <div class="blog-post latest-blog-3 blog-md date-style-1 clearfix">
                                    <div class="wt-post-media wt-img-effect zoom-slow">
                                        <a href="blog/nowoczesne-zabiegi-kosmetyczne-jak-technologie-zmienia-twoje-piekno.php"><img src="images/blog/blog-small/pic3.jpg" alt="Nowoczesne Zabiegi Kosmetyczne: Jak Technologie Zmienią Twoje Piękno"></a>
                                    </div>
                                    <div class="wt-post-info">
                                        <div class="wt-post-title ">
                                            <h4 class="post-title font-weight-800"><a href="blog/nowoczesne-zabiegi-kosmetyczne-jak-technologie-zmienia-twoje-piekno.php">Nowoczesne Zabiegi Kosmetyczne: Jak Technologie Zmienią Twoje Piękno</a></h4>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="blog-post latest-blog-3 overlay-wraper post-overlay date-style-1 bg-cover bg-no-repeat bg-top-center" style="background-image:url(images/blog-big.jpg);">
                                    <div class="overlay-main opacity-08 primary-gradi"></div>
                                    <div class="wt-post-info p-a30 text-white">
                                        <div class="post-overlay-position">
                                            <div class="wt-post-title ">
                                                <h3 class="post-title"><a href="blog/odkryj-moc-nowoczesnej-pielegnacji-innowacyjne-zabiegi-na-twarz-i-cialo-w-magic-salon.php" class="text-white text-capitalize">Odkryj Moc Nowoczesnej Pielęgnacji: Innowacyjne Zabiegi na Twarz i Ciało w MAGIC SALON</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- LATEST BLOG SECTION END -->

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