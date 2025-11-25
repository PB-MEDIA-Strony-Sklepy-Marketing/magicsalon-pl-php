<?php

/**
 * MAGIC SALON - Zarezerwuj Wizytę (zarezerwuj-wizyte.php)
 * Wersja: 2.3 - Zoptymalizowane treści SEO i zmienne dla strony Rezerwacji
 */

// Załaduj konfigurację
require_once __DIR__ . DIRECTORY_SEPARATOR . 'config.php';

// Konfiguracja meta tagów dla strony Zarezerwuj Wizytę
$meta = [
    'title' => 'Zarezerwuj Wizytę Online | MAGIC SALON Dobrzykowice – Booksy',
    'description' => 'Umów wizytę w MAGIC SALON szybko i wygodnie! 📅 Rezerwacja online przez Booksy 24/7 lub telefonicznie. Wybierz zabieg na twarz lub ciało i zarezerwuj termin w Dobrzykowicach.',
    'keywords' => 'rezerwacja wizyty kosmetyczka, booksy magic salon, umów wizytę dobrzykowice, salon beauty rezerwacja online, wolne terminy kosmetyczka wrocław, zabiegi na twarz rezerwacja',
    'canonical' => BASE_URL . '/zarezerwuj-wizyte.php',
    'robots' => 'index, follow',
    'og' => [
        'type' => 'website',
        'title' => 'Zarezerwuj Chwilę dla Siebie – MAGIC SALON Dobrzykowice',
        'description' => 'Twój termin czeka! Sprawdź dostępność w kalendarzu online i umów się na profesjonalne zabiegi pielęgnacyjne bez wychodzenia z domu.',
        'url' => BASE_URL . '/zarezerwuj-wizyte.php',
        'image' => BASE_URL . '/images/background/bg-6.jpg', // Zdjęcie zachęcające do relaksu/wizyty
    ],
    'twitter' => [
        'card' => 'summary_large_image',
        'title' => 'Zarezerwuj Wizytę w MAGIC SALON',
        'description' => 'Szybka rezerwacja online przez Booksy. Sprawdź wolne terminy!',
    ],
    'schema' => [
        'enabled' => true,
        'type' => 'BeautySalon',
        'name' => 'MAGIC SALON',
        'description' => 'Salon kosmetyczny oferujący rezerwację wizyt online.',
        'url' => BASE_URL . '/zarezerwuj-wizyte.php',
        'telephone' => '+48883481581',
        'email' => 'biuro@magicsalon.pl',
        'address' => [
            'streetAddress' => 'ul. Borówkowa 13',
            'postalCode' => '55-002',
            'addressLocality' => 'Dobrzykowice',
            'addressRegion' => 'Dolnośląskie',
            'addressCountry' => 'PL'
        ],
        // Dodanie akcji rezerwacji do schema
        'potentialAction' => [
            '@type' => 'ReserveAction',
            'target' => [
                '@type' => 'EntryPoint',
                'urlTemplate' => 'https://booksy.magicsalon.pl',
                'inLanguage' => 'pl-PL',
                'actionPlatform' => [
                    'http://schema.org/DesktopWebPlatform',
                    'http://schema.org/IOSPlatform',
                    'http://schema.org/AndroidPlatform'
                ]
            ],
            'result' => [
                '@type' => 'Reservation',
                'name' => 'Rezerwacja wizyty kosmetycznej'
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
        <div class="page-content">

                <?php
            // Konfiguracja dynamicznego banera i breadcrumbs dla podstrony Zarezerwuj Wizytę
            // Wybieramy baner kojarzący się z relaksem i czasem dla siebie
            $banner_img = 'images/banner/about-banner.jpg'; 
            $page_title = 'Zarezerwuj Swój Termin';
            // Unikalny opis, podkreślający łatwość rezerwacji i szacunek dla czasu klienta
            $page_desc = 'Twój czas jest dla nas cenny, dlatego proces umawiania wizyt w MAGIC SALON jest maksymalnie uproszczony. Skorzystaj z naszego kalendarza online dostępnego 24/7, zadzwoń do nas lub napisz. Niezależnie od wybranej formy kontaktu, dołożymy wszelkich starań, aby znaleźć dla Ciebie idealny termin na chwilę relaksu i profesjonalnej pielęgnacji.';
            $breadcrumbs = [
                [
                    'label' => 'Strona Główna',
                    'url' => 'index.php',
                    'icon' => 'fa fa-home'
                ],
                [
                    'label' => 'Zarezerwuj wizytę',
                    'url' => '', // Pusty URL oznacza element aktywny
                    'icon' => ''
                ]
            ];
            
            // Załadowanie dedykowanego partiala
            include 'partials/breadcrumbs.php';
            ?>

            <!-- ABOUT COMPANY SECTION START -->
            <div class="section-full m-t150">
                <div class="container">
                    <div class="row">
                        <h1 class="text-uppercase">Zarezerwuj wizytę – Twój pierwszy krok do piękna i relaksu w MAGIC SALON</h1>
                        <div class="col-lg-12 col-md-12 m-b30">
                            <div class="section-head text-left">
                                <h3 class="text-uppercase">Piękno w zasięgu ręki. Zrelaksuj się i poczuj się wyjątkowo.</h3>
                                <p>Witaj w miejscu, gdzie piękno spotyka się z nowoczesnością, a każdy zabieg jest rytuałem zaprojektowanym z myślą o Twoim komforcie i potrzebach. MAGIC SALON to przestrzeń, w której dbamy nie tylko o wygląd zewnętrzny, ale również o wewnętrzną harmonię, samopoczucie i pewność siebie. Jeśli marzysz o profesjonalnej opiece kosmetologicznej, to najlepszy moment, by zarezerwować wizytę!</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 m-b30">
                            <div class="section-head text-left">
                                <h3 class="text-uppercase">💫 Dlaczego warto zarezerwować wizytę w MAGIC SALON?</h3>
                            </div>
                            <div class="about-types row">
                                <div class="col-md-6 col-sm-6 col-xs-6 col-xs-100pc m-b30">
                                    <div class="wt-icon-box-wraper left">
                                        <div class="icon-md site-text-primary">
                                            <a href="oferta.php" class="icon-cell p-t5 center-block"><i class="flaticon-female-hairs"></i></a>
                                        </div>
                                        <div class="icon-content">
                                            <h5 class="wt-tilte text-uppercase m-b0">Indywidualne podejście:</h5>
                                            <p>Każda wizyta rozpoczyna się od konsultacji, dzięki której dobierzemy idealny zabieg dopasowany do Twoich oczekiwań, typu skóry i kondycji ciała.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 col-xs-100pc m-b30 ">
                                    <div class="wt-icon-box-wraper left">
                                        <div class="icon-md site-text-primary">
                                            <a href="oferta.php" class="icon-cell p-t5 center-block"><i class="flaticon-eye"></i></a>
                                        </div>
                                        <div class="icon-content">
                                            <h5 class="wt-tilte text-uppercase m-b0">Profesjonalny zespół:</h5>
                                            <p>Nasze specjalistki to wykwalifikowane kosmetolożki i linergistki, które stale podnoszą swoje kwalifikacje, uczestnicząc w szkoleniach i kursach.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 col-xs-100pc m-b30 ">
                                    <div class="wt-icon-box-wraper left">
                                        <div class="icon-md site-text-primary">
                                            <a href="oferta.php" class="icon-cell p-t5 center-block"><i class="flaticon-mirror"></i></a>
                                        </div>
                                        <div class="icon-content">
                                            <h5 class="wt-tilte text-uppercase m-b0 ">Nowoczesny sprzęt i bezpieczne technologie:</h5>
                                            <p>Wykorzystujemy innowacyjne urządzenia i certyfikowane produkty, które gwarantują skuteczność i bezpieczeństwo zabiegów.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 col-xs-100pc m-b30 ">
                                    <div class="wt-icon-box-wraper left">
                                        <div class="icon-md site-text-primary">
                                            <a href="oferta.php" class="icon-cell p-t5 center-block"><i class="flaticon-spray-bottle" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="icon-content">
                                            <h5 class="wt-tilte text-uppercase m-b0">Szeroka oferta usług:</h5>
                                            <p>Od relaksujących rytuałów po zaawansowaną kosmetologię estetyczną – w naszej ofercie znajdziesz wszystko, czego potrzebujesz, by wyglądać i czuć się najlepiej.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 m-b30">
                            <div class="section-head text-left">
                                <h3 class="text-uppercase">Przebieg wizyty w MAGIC SALON</h3>
                                <p><b>1. Powitanie i konsultacja:</b> Zaczynamy od rozmowy, podczas której poznajemy Twoje potrzeby i oczekiwania.<br><br><b>2. Dobór zabiegu:</b> Na podstawie analizy skóry i preferencji dobieramy najlepszy zabieg.<br><br><b>3. Zabieg:</b> W komfortowych warunkach, przy relaksującej muzyce, wykonujemy wybrany rytuał pielęgnacyjny.<br><br><b>4. Zalecenia po zabiegu:</b> Otrzymasz wskazówki dotyczące pielęgnacji domowej i rekomendację ewentualnych kolejnych kroków.</p>
                                <h3 class="text-uppercase">Magiczne rezultaty – opinie naszych Klientek</h3>
                                <p>Zaufało nam już wiele zadowolonych Klientek i Klientów, którzy wracają dO firmie z uśmiechem na twarzy. Ich opinie są dla nas najlepszą motywacją do dalszej pracy i rozwoju. Sprawdź naszą zakładkę Opinie klientów i przekonaj się, że MAGIC SALON to miejsce, które spełnia oczekiwania nawet najbardziej wymagających osób.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ABOUT COMPANY SECTION END -->

            <!-- Section content -->
            <div class="wt-contact-wrap row p-b50">
                <div class="container">
                    <div class="row">
                        <h4 class="text-uppercase">Lokalizacja MAGIC SALON</h4>
                        <div class="wt-separator-outer m-b30">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left site-bg-primary"></span>
                                <span class="separator-right site-bg-primary"></span>
                            </div>
                        </div>

                        <!-- MAP BLOCK START -->
                        <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                            <div class="contact-left-part" style="width: 100%">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2505.7127763785393!2d17.194500276859536!3d51.09530804072397!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470fe7e89195dbfd%3A0xdef91235a7163465!2sMAGIC%20SALON%20-%20salon%20kosmetyczny%20%2F%20salon%20beauty%20%2F%20spa%20%2F%20salon%20pi%C4%99kno%C5%9Bci%20%2F%20lasery%20medyczne%20%2F%20manicure%20%26%20pedicure!5e0!3m2!1spl!2spl!4v1750957704498!5m2!1spl!2spl" width="100%" height="400" style="border:0;" allowfullscreen="1" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 m-b30">
                            <h3>Jak zarezerwować wizytę?</h3>
                            <p>Rezerwacja w MAGIC SALON jest szybka i wygodna. Możesz umówić się z nami w dogodny dla siebie sposób:</p>
                            <p>📞 Telefonicznie: <a href="tel:+48 883 481 581">+48 883 481 581</a><br>📧 Automatycznie przez www.booksy.com</p>
                            <script type="text/javascript" src="https://booksy.com/widget/code.js?id=305936&country=pl&lang=pl"></script>
                            <p>Wybierz dogodny termin, a my zadbamy o resztę. W razie potrzeby z przyjemnością doradzimy, który zabieg będzie dla Ciebie najbardziej odpowiedni.</p>
                        </div>
                        <!-- MAP BLOCK END -->

                        <!-- RIGHT PART START -->
                        <div class="contact-right-part" style="width: 100%">

                            <!-- CONTACT DETAIL -->
                            <div class="p-a30  wt-box">
                                <h4 class="text-uppercase">Dane kontaktowe</h4>
                                <div class="wt-separator-outer m-b30">
                                    <div class="wt-separator style-icon">
                                        <i class="fa fa-leaf text-black"></i>
                                        <span class="separator-left site-bg-primary"></span>
                                        <span class="separator-right site-bg-primary"></span>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                                        <div class="wt-icon-box-wraper center p-a30 bdr-2 bdr-gray-light">
                                            <div class="wt-icon-box-sm site-bg-primary m-b20">
                                                <span class="icon-cell text-white">
                                                    <i class="fa fa-phone"></i>
                                                </span>
                                            </div>
                                            <div class="icon-content">
                                                <h5>Numer telefonu:</h5>
                                                <p><a href="tel:+48 883 481 581">+48 883 481 581</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                                        <div class="wt-icon-box-wraper center p-a30 bdr-2 bdr-gray-light">
                                            <div class="wt-icon-box-sm site-bg-primary m-b20">
                                                <span class="icon-cell text-white">
                                                    <i class="fa fa-envelope"></i>
                                                </span>
                                            </div>
                                            <div class="icon-content">
                                                <h6>Adres e-mail:</h6>
                                                <p><a href="mailto:biuro@magicsalon.pl">biuro@magicsalon.pl</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-12 col-sm-12 m-b30">
                                        <div class="wt-icon-box-wraper center p-a30 bdr-2 bdr-gray-light">
                                            <div class="wt-icon-box-sm site-bg-primary m-b20">
                                                <span class="icon-cell text-white">
                                                    <i class="fa fa-map-marker"></i>
                                                </span>
                                            </div>
                                            <div class="icon-content">
                                                <h5>Adres salonu:</h5>
                                                <p>ul. Borówkowa 13, 55-002 Dobrzykowice</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!-- RIGHT PART END -->
                    </div>
                </div>
            </div>
            <!-- Section content END -->

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