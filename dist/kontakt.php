<?php

/**
 * MAGIC SALON - Strona główna (index.php)
 * Wersja: 2.1 - Naprawiono ścieżki i błędy
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

// Załaduj head partial - POPRAWIONA ŚCIEŻKA
include 'partials/head.php'; ?>
?>

<body id="bg">

    <div class="page-wraper">

        <!-- HEADER START -->
        <?php include 'partials/header.php'; ?>
        <!-- HEADER END -->

        <!-- CONTENT START -->
        <div class="page-content">

            <!-- BREADCRUMB ROW -->
            <div class="bg-gray-light p-tb20">
                <div class="container">
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="index.php"><i class="fa fa-home"></i> Strona Główna</a></li>
                        <li>Kontakt</li>
                    </ul>
                </div>
            </div>
            <!-- BREADCRUMB ROW END -->

            <!-- ABOUT COMPANY SECTION START -->
            <div class="section-full m-t80">
                <div class="container">
                    <div class="row">
                        <h1 class="text-uppercase">Kontakt – skontaktuj się z MAGIC SALON i odkryj piękno na nowo!</h1>
                        <div class="col-lg-12 col-md-12 m-b30">
                            <div class="section-head text-left">
                                <p>Witaj w strefie kontaktu z MAGIC SALON – salonem piękna, urody i relaksu, w którym każda Klientka i każdy Klient jest traktowany z najwyższą troską i indywidualnym podejściem. Jeśli masz pytania, chcesz umówić się na wizytę, skonsultować dobór zabiegu lub po prostu dowiedzieć się więcej o naszych usługach – jesteśmy tutaj, aby Ci pomóc.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 m-b30">
                            <div class="section-head text-left">
                                <h3 class="text-uppercase">Godziny otwarcia:</h3>
                                <p>Nasze drzwi są dla Ciebie otwarte od poniedziałku do soboty. Pracujemy elastycznie, dostosowując godziny do indywidualnych preferencji i dostępności Klientów. Prosimy o wcześniejszy kontakt w celu umówienia wizyty.</p>
                                <p>🕒 Poniedziałek – Piątek: 09:00 – 19:00<br>🕒 Sobota: 09:00 – 14:00<br>🔒 Niedziela: Salon nieczynny</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 m-b30">
                            <div class="section-head text-left">
                                <h3 class="text-uppercase">Znajdź nas również w mediach społecznościowych:</h3>
                                <p>Śledź nas na Facebooku i Instagramie, aby być na bieżąco z nowościami, promocjami, metamorfozami naszych Klientek i efektami zabiegów. Dołącz do naszej społeczności i czerp inspirację każdego dnia!</p>
                                <p><a href="https://www.facebook.com/magicsalonpl" target="_blank">🔹 Facebook – MAGIC SALON</a><br><a href="https://www.instagram.com/magicsalonpl" target="_blank">🔹 Instagram – @magicsalon_beauty</a></p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ABOUT COMPANY SECTION END -->

            <!-- SECTION CONTENTG START -->
            <div class="section-full p-b46 m-b50">
                <div class="container">

                    <div class="section-content m-b50">
                        <div class="row">

                            <!-- LOCATION BLOCK-->
                            <div class="wt-box col-md-6">
                                <h4 class="text-uppercase">Lokalizacja MAGIC SALON</h4>
                                <div class="wt-separator-outer m-b30">
                                    <div class="wt-separator style-icon">
                                        <i class="fa fa-leaf text-black"></i>
                                        <span class="separator-left site-bg-primary"></span>
                                        <span class="separator-right site-bg-primary"></span>
                                    </div>
                                    <h4>Umów się na wizytę już dziś i odkryj magię pielęgnacji!</h4>
                                    <p>Nie czekaj na „lepszy moment” – Twoje piękno zasługuje na najlepszą opiekę już teraz. Zadzwoń, napisz lub odwiedź nas osobiście. MAGIC SALON to przestrzeń, w której poczujesz się wyjątkowo – tak jak na to zasługujesz.</p>
                                </div>
                                <div class="gmap-outline m-b30">
                                    <div id="gmap_canvas" class="google-map">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2505.7127763785393!2d17.194500276859536!3d51.09530804072397!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470fe7e89195dbfd%3A0xdef91235a7163465!2sMAGIC%20SALON%20-%20salon%20kosmetyczny%20%2F%20salon%20beauty%20%2F%20spa%20%2F%20salon%20pi%C4%99kno%C5%9Bci%20%2F%20lasery%20medyczne%20%2F%20manicure%20%26%20pedicure!5e0!3m2!1spl!2spl!4v1750957704498!5m2!1spl!2spl" width="100%" height="450" style="border:0;" allowfullscreen="1" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                            </div>

                            <!-- CONTACT FORM-->
                            <div class="wt-box col-md-6">
                                <h4 class="text-uppercase">Formularz kontaktowy </h4>
                                <div class="wt-separator-outer m-b30">
                                    <div class="wt-separator style-icon">
                                        <i class="fa fa-leaf text-black"></i>
                                        <span class="separator-left site-bg-primary"></span>
                                        <span class="separator-right site-bg-primary"></span>
                                    </div>
                                    <h4>Masz pytania? Skonsultuj się z nami bez zobowiązań!</h4>
                                    <p>Nie jesteś pewna, który zabieg będzie dla Ciebie najlepszy? Chcesz wiedzieć, czym różni się Glow & Lift od klasycznego masażu liftingującego? A może potrzebujesz porady dotyczącej pielęgnacji domowej po wykonanym zabiegu? Napisz lub zadzwoń – jesteśmy tu po to, aby pomóc.</p>
                                </div>
                                <h4>Kliknij na przycisk i zareerwuj wizytę przez portal booksy.com</h4>
                                <script type="text/javascript" src="https://booksy.com/widget/code.js?id=305936&country=pl&lang=pl"></script>
                            </div>

                        </div>
                    </div>

                    <!-- ABOUT COMPANY SECTION START -->
                    <div class="section-full m-t80">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 m-b30">
                                    <div class="section-head text-left">
                                        <h3 class="text-uppercase">Dlaczego warto się z nami skontaktować?</h3>
                                        <p>MAGIC SALON to miejsce, w którym Twoje potrzeby i oczekiwania są najważniejsze. Oferujemy:</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 m-b30">
                                    <div class="section-head text-left">
                                        <p><b>✅ Indywidualne podejście</b> – każda konsultacja opiera się na dokładnej analizie stanu skóry i oczekiwań Klienta<br><b>✅ Zespół profesjonalistów</b> – wykwalifikowane kosmetolożki z pasją i doświadczeniem<br><b>✅ Nowoczesne technologie i urządzenia</b> – skuteczność, bezpieczeństwo i efektywność zabiegów</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 m-b30">
                                    <div class="section-head text-left">
                                        <p><b>✅ Szeroki zakres usług</b> – od relaksacyjnych masaży po zaawansowane zabiegi estetyczne<br><b>✅ Dbałość o atmosferę</b> – kameralne wnętrza, relaksacyjna muzyka i pełne odprężenie</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ABOUT COMPANY SECTION END -->

                    <!-- CONTACT DETAIL BLOCK -->
                    <div class="section-content ">
                        <div class="row">
                            <div class="wt-box col-md-12">
                                <h4 class="text-uppercase">Skontaktuj się z nami:</h4>
                                <div class="wt-separator-outer m-b30">
                                    <div class="wt-separator style-icon">
                                        <i class="fa fa-leaf text-black"></i>
                                        <span class="separator-left site-bg-primary"></span>
                                        <span class="separator-right site-bg-primary"></span>
                                    </div>
                                    <p>Jeśli chcesz zarezerwować termin wizyty, skonsultować stan swojej skóry, dobrać odpowiedni zabieg lub zadać pytania dotyczące naszej oferty, napisz do nas maila lub zadzwoń. Nasz zespół z przyjemnością odpowie na wszystkie pytania i zaproponuje termin wizyty dostosowany do Twoich potrzeb.</p>
                                </div>
                                <div class="row">

                                    <div class="col-md-4 col-sm-12 m-b30">
                                        <div class="wt-icon-box-wraper center p-a30 bdr-2 bdr-gray-light">
                                            <div class="wt-icon-box-sm site-bg-primary m-b20"><span class="icon-cell text-white"><i class="fa fa-phone"></i></span></div>
                                            <div class="icon-content">
                                                <h5>Numer telefonu:</h5>
                                                <p><a href="tel:+48 883 481 581">+48 883 481 581</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12 m-b30">
                                        <div class="wt-icon-box-wraper center p-a30 bdr-2 bdr-gray-light">
                                            <div class="wt-icon-box-sm site-bg-primary m-b20"><span class="icon-cell text-white"><i class="fa fa-envelope"></i></span></div>
                                            <div class="icon-content">
                                                <h6>Adres e-mail:</h6>
                                                <p>biuro@magicsalon.pl</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12 m-b30">
                                        <div class="wt-icon-box-wraper center p-a30 bdr-2 bdr-gray-light">
                                            <div class="wt-icon-box-sm site-bg-primary m-b20"><span class="icon-cell text-white"><i class="fa fa-map-marker"></i></span></div>
                                            <div class="icon-content">
                                                <h5>Adres salonu:</h5>
                                                <p>ul. Borówkowa 13, 55-002 Dobrzykowice</p>
                                            </div>
                                        </div>
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

                        <!-- LightWidget WIDGET -->
                        <script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="https://cdn.lightwidget.com/widgets/1b3ffdfb097a529b9970baf400113732.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>

                    </div>
                    <!-- IMAGE CAROUSEL START -->
                </div>
            </div>
            <!-- OUR INSTAGRAM SLIDER END -->

        </div>
        <!-- CONTENT END -->

        <?php include __DIR__ . '/partials/root/footer-root-columns.html'; ?>

        <?php include __DIR__ . '/partials/root/footer-root.html'; ?>

</body>

</html>