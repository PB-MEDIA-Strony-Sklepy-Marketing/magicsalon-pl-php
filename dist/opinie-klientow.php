<?php

/**
 * MAGIC SALON - Opinie Klientów (opinie-klientow.php)
 * Wersja: 2.3 - Zoptymalizowane treści SEO i zmienne dla sekcji Opinii
 */

// Załaduj konfigurację
require_once __DIR__ . DIRECTORY_SEPARATOR . 'config.php';

// Konfiguracja meta tagów dla strony Opinii
$meta = [
    'title' => 'Opinie Klientów – Zobacz Co Mówią o MAGIC SALON Dobrzykowice',
    'description' => 'Sprawdź autentyczne opinie o MAGIC SALON. Tysiące zadowolonych klientów, profesjonalizm i pasja. Przeczytaj recenzje zabiegów i dołącz do grona osób, które nam zaufały.',
    'keywords' => 'opinie magic salon, recenzje salon kosmetyczny dobrzykowice, polecany kosmetolog wrocław, magic salon oceny, najlepszy salon beauty dobrzykowice, rekomendacje zabiegów',
    'canonical' => BASE_URL . '/opinie-klientow.php',
    'robots' => 'index, follow, max-image-preview:large',
    'og' => [
        'type' => 'website',
        'title' => 'Opinie Klientów – Zaufanie i Profesjonalizm w MAGIC SALON',
        'description' => 'Twoja satysfakcja jest naszą najlepszą wizytówką. Zobacz, jak oceniane są nasze zabiegi i atmosfera w salonie.',
        'url' => BASE_URL . '/opinie-klientow.php',
        'image' => BASE_URL . '/images/about-pic3.jpg', // Zdjęcie reprezentujące zadowoloną klientkę lub zespół
    ],
    'twitter' => [
        'card' => 'summary_large_image',
        'title' => 'Opinie o MAGIC SALON Dobrzykowice',
        'description' => 'Sprawdź, dlaczego klientki kochają Magic Salon.',
    ],
    'schema' => [
        'enabled' => true,
        'type' => 'BeautySalon',
        'name' => 'MAGIC SALON - Opinie',
        'description' => 'Zbiór recenzji i opinii klientów korzystających z usług salonu kosmetycznego Magic Salon.',
        'url' => BASE_URL . '/opinie-klientow.php',
        'telephone' => '+48883481581',
        'email' => 'biuro@magicsalon.pl',
        'aggregateRating' => [
            '@type' => 'AggregateRating',
            'ratingValue' => '5.0',
            'reviewCount' => '100' // Wartość przykładowa, warto aktualizować zgodnie z Booksy/Google
        ],
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
            // Konfiguracja dynamicznego banera i breadcrumbs dla podstrony Opinie
            // Sugeruję użycie banera związanego z relacjami/ludźmi, np. about-banner lub dedykowany reviews-banner
            $banner_img = 'images/banner/about-banner.jpg'; 
            $page_title = 'Wasze Historie Piękna';
            // Unikalny opis, który nie duplikuje treści poniżej, ale stanowi wstęp do sekcji
            $page_desc = 'Nie musisz wierzyć nam na słowo – poznaj opinie prawdziwych klientów Magic Salon! Każda recenzja to autentyczna historia związana z naszymi zabiegami. Od depilacji laserowej, przez profesjonalne pielęgnacje twarzy, po modelowanie sylwetki – odkryj, dlaczego tysiące osób z Dobrzykowic i Wrocławia poleca właśnie nas swoim znajomym!';
            
            $breadcrumbs = [
                [
                    'label' => 'Strona Główna',
                    'url' => 'index.php',
                    'icon' => 'fa fa-home'
                ],
                [
                    'label' => 'Opinie Klientów',
                    'url' => '', // Element aktywny
                    'icon' => ''
                ]
            ];
            
            // Załadowanie partiala (korzystamy z wersji breadcrumbs-botttom-header.php utworzonej w poprzednim kroku)
            include 'partials/breadcrumbs.php';
            ?>

            <!-- ABOUT COMPANY SECTION START -->
            <div class="section-full p-t80 p-b50">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-8 m-b30 animate tada animated">
                            <div class="about-com-pic wt-thum-bx wt-img-effect blurr-invert">
                                <img src="images/about-pic3.jpg" alt="Twój głos ma dla nas znaczenie – poznaj opinie o MAGIC SALON" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-12 m-b30 animate tada animated">
                            <div class="section-head text-left">
                                <h3 class="text-uppercase">Twój głos ma dla nas znaczenie – poznaj opinie o MAGIC SALON </h3>
                                <div class="wt-separator-outer">
                                    <div class="wt-separator style-icon">
                                        <i class="fa fa-leaf text-black"></i>
                                        <span class="separator-left site-bg-primary"></span>
                                        <span class="separator-right site-bg-primary"></span>
                                    </div>
                                </div>
                                <p>W MAGIC SALON najważniejsze jest Twoje zadowolenie. To właśnie dzięki naszym Klientkom i Klientom nieustannie się rozwijamy, doskonalimy nasze zabiegi i wzbogacamy ofertę o nowoczesne, skuteczne i bezpieczne rozwiązania w zakresie kosmetologii, pielęgnacji oraz estetyki twarzy i ciała. Opinie naszych Klientów to nie tylko potwierdzenie jakości naszych usług, ale również najlepsza wizytówka naszego salonu.
                                </p>
                                <p>Zapraszamy Cię do zapoznania się z wybranymi opiniami osób, które zdecydowały się nam zaufać. Być może i Ty dołączysz do grona zadowolonych Klientów, którzy dzięki naszym zabiegom poczuli się piękniej, pewniej i bardziej zadbani.</p>
                                <h3>Dlaczego warto nam zaufać?</h3>
                                <p>
                                    Zespół MAGIC SALON to doświadczeni kosmetolodzy, specjaliści od medycyny estetycznej i terapeuci urody, których łączy jedno – pasja do piękna i nieustannego doskonalenia. Nasza wiedza i umiejętności poparte są licznymi szkoleniami, certyfikatami oraz praktyką zdobywaną przez lata. Wiemy, jak indywidualne mogą być potrzeby skóry, ciała i duszy, dlatego każdą wizytę traktujemy jako osobistą historię, której chcemy towarzyszyć – z troską, delikatnością i skutecznością.
                                </p>
                            </div>
                            <div class="about-types row">
                                <div class="col-md-6 col-sm-6 col-xs-6 col-xs-100pc m-b30">
                                    <div class="wt-icon-box-wraper left">
                                        <div class="icon-md site-text-primary">
                                            <a href="oferta.html" class="icon-cell p-t5 center-block"><i class="flaticon-female-hairs"></i></a>
                                        </div>
                                        <div class="icon-content">
                                            <h5 class="wt-tilte text-uppercase m-b0">Indywidualne podejście</h5>
                                            <p>Każda klientka traktowana jest wyjątkowo. Dobieramy zabiegi do realnych potrzeb i oczekiwań.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 col-xs-100pc m-b30 ">
                                    <div class="wt-icon-box-wraper left">
                                        <div class="icon-md site-text-primary">
                                            <a href="oferta.html" class="icon-cell p-t5 center-block"><i class="flaticon-eye"></i></a>
                                        </div>
                                        <div class="icon-content">
                                            <h5 class="wt-tilte text-uppercase m-b0">Nowoczesne technologie</h5>
                                            <p>pracujemy na sprawdzonym i certyfikowanym sprzęcie najwyższej klasy.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 col-xs-100pc m-b30 ">
                                    <div class="wt-icon-box-wraper left">
                                        <div class="icon-md site-text-primary">
                                            <a href="oferta.html" class="icon-cell p-t5 center-block"><i class="flaticon-mirror"></i></a>
                                        </div>
                                        <div class="icon-content">
                                            <h5 class="wt-tilte text-uppercase m-b0 ">Zespół z pasją</h5>
                                            <p>Nasz personel to wykwalifikowane kosmetolożki i stylistki, które nieustannie się szkolą i rozwijają. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 col-xs-100pc m-b30 ">
                                    <div class="wt-icon-box-wraper left">
                                        <div class="icon-md site-text-primary">
                                            <a href="oferta.html" class="icon-cell p-t5 center-block"><i class="flaticon-spray-bottle" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="icon-content">
                                            <h5 class="wt-tilte text-uppercase m-b0">Komfort i relaks</h5>
                                            <p>Stworzyliśmy przestrzeń, w której możesz poczuć się bezpiecznie, swobodnie i... po prostu dobrze.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ABOUT COMPANY SECTION END -->

            <!-- SECTION CONTENT START -->
            <div class="section-full p-t80 p-b50 overlay-wraper bg-parallax" data-stellar-background-ratio="0.5" style="background-image:url(images/background/bg2.jpg);">
                <div class="overlay-main bg-black opacity-07"></div>

                <div class="container">
                    <!-- TITLE START -->
                    <div class="section-head text-center text-white">
                        <h3 class="text-uppercase">Zostaw swoją opinię – pomóż innym odnaleźć piękno!</h3>
                        <span class="title-small">Byłaś u nas? Skorzystałaś z zabiegu, który poprawił Twoje samopoczucie i wygląd? A może dopiero planujesz wizytę i chcesz dowiedzieć się więcej od innych klientek? Napisz dO firmie lub zostaw recenzję na naszej stronie lub w mediach społecznościowych! Twoja opinia jest dla nas cenna – pomaga nam być lepszymi każdego dnia.</span>
                        <div class="wt-separator-outer">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-white"></i>
                                <span class="separator-left site-bg-primary"></span>
                                <span class="separator-right site-bg-primary"></span>
                            </div>
                        </div>
                    </div>
                    <!-- TITLE END -->

                    <!-- TESTIMONIAL GRID STYLE 2 ON BG -->
                    <div class="section-content">
                        <div class="row testimonial-grid">

                            <!-- COLUMNS 1 -->
                            <div class="col-lg-6 col-md-6 m-b30">
                                <div class="testimonial-grid-2 testimonial-bg">
                                    <div class="testimonial-text">
                                        <span class="fa fa-quote-left"></span>
                                        <p>„Jestem zachwycona efektami zabiegu Glow & Lift w MAGIC SALON! Moja skóra nigdy nie wyglądała lepiej – jest bardziej promienna, napięta i pełna blasku. Profesjonalna obsługa, miła atmosfera i świetna opieka sprawiają, że wracam do tego salonu za każdym razem. Gorąco polecam!”</p>
                                    </div>
                                    <div class="testimonial-detail clearfix">
                                        <strong class="testimonial-name">Monika Nowak</strong>
                                        <span class="testimonial-position">Zadowolony klient</span>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 2 -->
                            <div class="col-lg-6 col-md-6 m-b30">
                                <div class="testimonial-grid-2 testimonial-bg">
                                    <div class="testimonial-text">
                                        <span class="fa fa-quote-left"></span>
                                        <p>„Od kiedy zaczęłam chodzić do MAGIC SALON na liposukcję ultradźwiękową, zauważyłam ogromną różnicę w wyglądzie mojej sylwetki. Efekty są naprawdę widoczne! Dodatkowo zabiegi są komfortowe, a personel bardzo profesjonalny. Zdecydowanie polecam każdemu, kto marzy o smukłej sylwetce i gładkiej skórze!”</p>
                                    </div>
                                    <div class="testimonial-detail clearfix">
                                        <strong class="testimonial-name">Agnieszka Kowalska</strong>
                                        <span class="testimonial-position">Zadowolony klient</span>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 3 -->
                            <div class="col-lg-6 col-md-6 m-b30">
                                <div class="testimonial-grid-2 testimonial-bg">
                                    <div class="testimonial-text">
                                        <span class="fa fa-quote-left"></span>
                                        <p>„Zabieg detox & drenaż to prawdziwa rewelacja! Po każdej wizycie czuję się lekko, pełna energii, a moja skóra jest bardziej jędrna i nawilżona. MAGIC SALON to miejsce, gdzie odpoczywam, a efekty są naprawdę widoczne. Profesjonalizm i pełne zaangażowanie pracowników sprawiają, że jestem wierną klientką!”</p>
                                    </div>
                                    <div class="testimonial-detail clearfix">
                                        <strong class="testimonial-name">Karolina Zielińska</strong>
                                        <span class="testimonial-position">Zadowolony klient</span>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 4 -->
                            <div class="col-lg-6 col-md-6 m-b30">
                                <div class="testimonial-grid-2 testimonial-bg">
                                    <div class="testimonial-text">
                                        <span class="fa fa-quote-left"></span>
                                        <p>„Zdecydowałam się na lifting i laminację rzęs w MAGIC SALON, a efekt przerósł moje oczekiwania! Moje rzęsy są pięknie podkręcone, gęste i wyraziste. Teraz codziennie budzę się z perfekcyjnie wyglądającymi rzęsami – bez konieczności malowania! Zabieg był szybki, bezbolesny, a personel bardzo uprzejmy. Zdecydowanie polecam!”</p>
                                    </div>
                                    <div class="testimonial-detail clearfix">
                                        <strong class="testimonial-name">Joanna Wiśniewska</strong>
                                        <span class="testimonial-position">Zadowolony klient</span>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 5 -->
                            <div class="col-lg-6 col-md-6 m-b30">
                                <div class="testimonial-grid-2 testimonial-bg">
                                    <div class="testimonial-text">
                                        <span class="fa fa-quote-left"></span>
                                        <p>„Peeling kawitacyjny w MAGIC SALON to mój ulubiony zabieg! Moja skóra po nim jest gładka, oczyszczona i pełna blasku. Czuć, że salon korzysta z nowoczesnych technologii, a profesjonalna obsługa sprawia, że każda wizyta to czysta przyjemność. Na pewno wrócę na kolejne zabiegi!”</p>
                                    </div>
                                    <div class="testimonial-detail clearfix">
                                        <strong class="testimonial-name">Katarzyna Nowicka</strong>
                                        <span class="testimonial-position">Zadowolony klient</span>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 6 -->
                            <div class="col-lg-6 col-md-6 m-b30">
                                <div class="testimonial-grid-2 testimonial-bg">
                                    <div class="testimonial-text">
                                        <span class="fa fa-quote-left"></span>
                                        <p>„Przedłużanie rzęs w MAGIC SALON to absolutny strzał w dziesiątkę! Rzęsy wyglądają naturalnie, ale zarazem są pełne objętości i długości. Efekt jest spektakularny, a zabieg wykonany bardzo precyzyjnie. Jestem zachwycona, że nie muszę już codziennie malować rzęs. Pełen profesjonalizm i wspaniała atmosfera!”</p>
                                    </div>
                                    <div class="testimonial-detail clearfix">
                                        <strong class="testimonial-name">Magdalena Szymańska</strong>
                                        <span class="testimonial-position">Zadowolony klient</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

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