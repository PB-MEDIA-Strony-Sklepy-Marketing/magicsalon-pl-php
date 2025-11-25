<?php

/**
 * MAGIC SALON - Galeria (galeria.php)
 * Wersja: 2.3 - Zoptymalizowane treści SEO i zmienne dla Galerii
 */

// Załaduj konfigurację
require_once __DIR__ . DIRECTORY_SEPARATOR . 'config.php';

// Konfiguracja meta tagów dla strony Galerii
$meta = [
    'title' => 'Galeria Realizacji – Efekty Zabiegów | MAGIC SALON Dobrzykowice',
    'description' => 'Zobacz autentyczne efekty zabiegów w MAGIC SALON. Galeria zdjęć: metamorfozy twarzy, modelowanie sylwetki, stylizacja oprawy oczu oraz relaksujące wnętrza naszego salonu.',
    'keywords' => 'galeria magic salon, efekty zabiegów dobrzykowice, metamorfozy wrocław, stylizacja rzęs zdjęcia, makijaż permanentny galeria, wnętrze salonu kosmetycznego, zabiegi na twarz efekty',
    'canonical' => BASE_URL . '/galeria.php',
    'robots' => 'index, follow, max-image-preview:large',
    'og' => [
        'type' => 'website',
        'title' => 'Galeria Realizacji – Zobacz Efekty w MAGIC SALON',
        'description' => 'Obraz mówi więcej niż słowa. Sprawdź nasze portfolio zabiegowe i zobacz, jak dbamy o Twoje piękno w Dobrzykowicach.',
        'url' => BASE_URL . '/galeria.php',
        'image' => BASE_URL . '/images/galeria/pic1.jpg', // Reprezentatywne zdjęcie z galerii
    ],
    'twitter' => [
        'card' => 'summary_large_image',
        'title' => 'Galeria MAGIC SALON – Efekty Zabiegów',
        'description' => 'Zobacz nasze realizacje i wnętrza salonu w Dobrzykowicach.',
    ],
    'schema' => [
        'enabled' => true,
        'type' => 'BeautySalon', // Można rozważyć dodanie ImageGallery w przyszłości jako osobny element schema
        'name' => 'MAGIC SALON - Galeria',
        'description' => 'Portfolio zrealizowanych zabiegów kosmetycznych oraz galeria wnętrz salonu Magic Salon.',
        'url' => BASE_URL . '/galeria.php',
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
            // Konfiguracja dynamicznego banera i breadcrumbs dla podstrony Galeria
            $banner_img = 'images/banner/gallery-banner.jpg';
            $page_title = 'Galeria – Piękno w Obiektywie';
            // Unikalny opis dla nagłówka galerii, zachęcający do przeglądania
            $page_desc = 'Witaj w magicznym świecie transformacji! Nasza galeria to kolekcja spektakularnych efektów zabiegów kosmetycznych, które zmieniły życie naszych klientów. Od delikatnych zabiegów na twarz, przez profesjonalną depilację laserową, po modelowanie sylwetki i artystyczną stylizację rzęs – każda realizacja opowiada unikalną historię piękna. Zainspiruj się i odkryj, co Magic Salon może zrobić dla Ciebie!';
            $breadcrumbs = [
                [
                    'label' => 'Strona Główna',
                    'url' => 'index.php',
                    'icon' => 'fa fa-home'
                ],
                [
                    'label' => 'Galeria Realizacji',
                    'url' => '', // Pusty URL oznacza element aktywny (tekst bez linku)
                    'icon' => ''
                ]
            ];
            
            // Załadowanie dedykowanego partiala (utworzonego w poprzednich krokach)
            include 'partials/breadcrumbs.php';
            ?>

            <!-- O firmie ZAKOŃCZENIE SECTION -->
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
                                <p>Witaj w sekcji najczęściej zadawanych pytań MAGIC SALON – miejscu, gdzie rozwiewamy wszelkie wątpliwości, które mogą pojawić się przed Twoją wizytą w naszym salonie. Wiemy, jak ważne jest poczucie komfortu, bezpieczeństwa i pełnego zrozumienia oferowanych usług jeszcze przed skorzystaniem z zabiegów. Dlatego przygotowaliśmy przejrzysty i pomocny dział FAQ, dzięki któremu łatwiej zaplanujesz swoją pierwszą (lub kolejną!) wizytę w naszym beauty studio.
                                </p>
                                <p>Zebraliśmy tu najczęściej pojawiające się pytania naszych Klientów – zarówno tych, którzy odwiedzają nas po raz pierwszy, jak i stałych Gości, którzy regularnie korzystają z naszej oferty. Znajdziesz tu m.in. informacje o przygotowaniu do zabiegów, przeciwwskazaniach, procedurach rezerwacji oraz zasadach dotyczących płatności czy wizyt odwoływanych w ostatniej chwili.</p>
                                <h3>Zapraszamy do MAGIC SALON</h3>
                                <p>
                                    MAGIC SALON to miejsce stworzone z myślą o Tobie – Twoim pięknie, zdrowiu i dobrym samopoczuciu. Zależy nam, aby każdy kontakt z naszym zespołem przebiegał w atmosferze profesjonalizmu i pełnej otwartości. Sekcja FAQ to jeden z elementów naszej troski o transparentność i najwyższą jakość obsługi.
                                </p>
                                <p>Zachęcamy do zapoznania się z odpowiedziami – być może rozwieją one Twoje wątpliwości i ułatwią wybór odpowiedniego zabiegu. Jeśli jednak nie znajdziesz tutaj konkretnej informacji, skontaktuj się z nami – chętnie odpowiemy na każde pytanie.</p>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-8 m-b30">
                            <div class="about-com-pic wt-thum-bx wt-img-effect blurr">
                                <img src="images/about-pic4.jpg" alt="FAQ & Pytania" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- O firmie ZAKOŃCZENIE SECTION END  -->

            <!-- SECTION CONTENT -->
            <div class="section-full p-b50">

                <div class="container">
                    <div class="row">
                        <div class="col-md-12 m-b30">

                            <!-- TITLE  START -->
                            <div class="p-b30">
                                <h3 class="text-uppercase">FAQ & Najczęściej zadawane pytania</h3>
                                <div class="wt-separator-outer">
                                    <div class="wt-separator style-icon">
                                        <i class="fa fa-leaf text-black"></i>
                                        <span class="separator-left site-bg-primary"></span>
                                        <span class="separator-right site-bg-primary"></span>
                                    </div>
                                </div>
                            </div>
                            <!-- TITLE START -->

                            <!-- ACCORDION START -->
                            <div class="wt-accordion acc-bg-gray" id="accordion5">

                                <div class="panel wt-panel">
                                    <div class="acod-head acc-actives">
                                        <h6 class="acod-title text-uppercase">
                                            <a data-bs-toggle="collapse" href="javascript:;" data-bs-target="#collapseOne5"> <i class="fa fa-angle-double-right"></i>
                                                Jak mogę umówić się na wizytę?
                                                <span class="indicator"><i class="fa fa-plus"></i></span>
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapseOne5" class="acod-body collapse show" data-bs-parent="#accordion5">
                                        <div class="acod-content p-tb15">
                                            Najwygodniej jest zarezerwować termin online przez naszą stronę internetową www.magicsalon.pl, telefonicznie pod numerem <a href="tel:+48 883 481 581">+48 883 481 581</a> lub automatycznie przez booksy.com . Polecamy wcześniejszą rezerwację, szczególnie w godzinach popołudniowych i weekendowych – to najczęściej wybierany czas przez naszych Klientów.
                                        </div>
                                    </div>
                                </div>

                                <div class="panel wt-panel">
                                    <div class="acod-head">
                                        <h6 class="acod-title text-uppercase">
                                            <a data-bs-toggle="collapse" href="javascript:;" data-bs-target="#collapseTwo5" class="collapsed"> <i class="fa fa-angle-double-right"></i>
                                                . Ile czasu trwa przeciętny zabieg?
                                                <span class="indicator"><i class="fa fa-plus"></i></span>
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapseTwo5" class="acod-body collapse" data-bs-parent="#accordion5">
                                        <div class="acod-content p-tb15">Czas trwania zależy od rodzaju zabiegu:<br>• Glow & Lift – twarz: ok. 90 minut<br>• Detox & Drenaż: 60–75 minut<br>• Epilacja laserowa (zależnie od partii ciała): 15–60 minut<br>• Modelowanie 360°: 60 minut<br>Szczegółowe informacje uzyskasz podczas rezerwacji lub konsultacji w salonie.</div>
                                    </div>
                                </div>

                                <div class="panel wt-panel">
                                    <div class="acod-head">
                                        <h6 class="acod-title text-uppercase">
                                            <a data-bs-toggle="collapse" href="javascript:;" data-bs-target="#collapseThree5" class="collapsed"> <i class="fa fa-angle-double-right"></i>
                                                Czy przed zabiegiem muszę się jakoś specjalnie przygotować?
                                                <span class="indicator"><i class="fa fa-plus"></i></span>
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapseThree5" class="acod-body collapse" data-bs-parent="#accordion5">
                                        <div class="acod-content p-tb15">W przypadku niektórych zabiegów – tak. Na przykład:<br>• Epilacja laserowa: nie opalaj skóry przez 7 dni przed zabiegiem, nie używaj peelingów, ogól włosy dzień wcześniej.<br>• Peeling kawitacyjny lub zabiegi na twarz: zalecamy przyjść bez makijażu.<br>• Modelowanie sylwetki: najlepiej przyjść po lekkim posiłku i wypić dużo wody.<br>Szczegóły przygotowania omawiamy zawsze przed wizytą.</div>
                                    </div>
                                </div>

                                <div class="panel wt-panel">
                                    <div class="acod-head">
                                        <h6 class="acod-title text-uppercase">
                                            <a data-bs-toggle="collapse" href="javascript:;" data-bs-target="#collapseFour5" class="collapsed"> <i class="fa fa-angle-double-right"></i>
                                                Czy zabiegi są bezpieczne?
                                                <span class="indicator"><i class="fa fa-plus"></i></span>
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapseFour5" class="acod-body collapse" data-bs-parent="#accordion5">
                                        <div class="acod-content p-tb15">Tak. Wszystkie nasze zabiegi są wykonywane przez wykwalifikowany personel, z użyciem nowoczesnych i certyfikowanych urządzeń. Pracujemy zgodnie z zasadami higieny i bezpieczeństwa, a sprzęt jest regularnie dezynfekowany i serwisowany. Każdy zabieg poprzedzamy krótką konsultacją, by dobrać odpowiednią metodę i wykluczyć przeciwwskazania.</div>
                                    </div>
                                </div>

                                <div class="panel wt-panel">
                                    <div class="acod-head">
                                        <h6 class="acod-title text-uppercase">
                                            <a data-bs-toggle="collapse" href="javascript:;" data-bs-target="#collapseFive5" class="collapsed"> <i class="fa fa-angle-double-right"></i>
                                                Czy mogę skorzystać z kilku zabiegów podczas jednej wizyty?
                                                <span class="indicator"><i class="fa fa-plus"></i></span>
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapseFive5" class="acod-body collapse" data-bs-parent="#accordion5">
                                        <div class="acod-content p-tb15">Tak, to bardzo częste rozwiązanie! Jeśli planujesz kompleksową pielęgnację, daj nam znać wcześniej – dobierzemy dla Ciebie indywidualny plan zabiegów.</div>
                                    </div>
                                </div>

                                <div class="panel wt-panel">
                                    <div class="acod-head">
                                        <h6 class="acod-title text-uppercase">
                                            <a data-bs-toggle="collapse" href="javascript:;" data-bs-target="#collapseSix5" class="collapsed"> <i class="fa fa-angle-double-right"></i>
                                                Jak mogę zapłacić za zabieg?
                                                <span class="indicator"><i class="fa fa-plus"></i></span>
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapseSix5" class="acod-body collapse" data-bs-parent="#accordion5">
                                        <div class="acod-content p-tb15">Akceptujemy płatność:<br>• gotówką,<br>• kartą (Visa, Mastercard),<br>• BLIKiem.</div>
                                    </div>
                                </div>

                                <div class="panel wt-panel">
                                    <div class="acod-head">
                                        <h6 class="acod-title text-uppercase">
                                            <a data-bs-toggle="collapse" href="javascript:;" data-bs-target="#collapseSeven5" class="collapsed"> <i class="fa fa-angle-double-right"></i>
                                                Czy mogę anulować lub przełożyć wizytę?
                                                <span class="indicator"><i class="fa fa-plus"></i></span>
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapseSeven5" class="acod-body collapse" data-bs-parent="#accordion5">
                                        <div class="acod-content p-tb15">Tak, oczywiście. Prosimy tylko o kontakt minimum 24 godziny wcześniej, abyśmy mogli przekazać termin innemu Klientowi. Wizyty anulowane później niż 12 godzin przed planowanym terminem mogą wiązać się z opłatą rezerwacyjną.</div>
                                    </div>
                                </div>
                                <div class="panel wt-panel">
                                    <div class="acod-head">
                                        <h6 class="acod-title text-uppercase">
                                            <a data-bs-toggle="collapse" href="javascript:;" data-bs-target="#collapseSeven6" class="collapsed"> <i class="fa fa-angle-double-right"></i>
                                                Czy wykonujecie zabiegi dla mężczyzn?
                                                <span class="indicator"><i class="fa fa-plus"></i></span>
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapseSeven6" class="acod-body collapse" data-bs-parent="#accordion5">
                                        <div class="acod-content p-tb15">Tak, oferujemy pełen zakres usług również dla mężczyzn – epilacja laserowa, oczyszczanie twarzy, peelingi kawitacyjne, modelowanie sylwetki i wiele innych. Zadbany wygląd to kwestia stylu, nie płci!</div>
                                    </div>
                                </div>
                                <div class="panel wt-panel">
                                    <div class="acod-head">
                                        <h6 class="acod-title text-uppercase">
                                            <a data-bs-toggle="collapse" href="javascript:;" data-bs-target="#collapseSeven7" class="collapsed"> <i class="fa fa-angle-double-right"></i>
                                                Czy mogę kupić voucher lub prezent dla kogoś?
                                                <span class="indicator"><i class="fa fa-plus"></i></span>
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapseSeven7" class="acod-body collapse" data-bs-parent="#accordion5">
                                        <div class="acod-content p-tb15">Jak najbardziej! Oferujemy eleganckie vouchery prezentowe na dowolną kwotę lub konkretny zabieg. Idealny pomysł na urodziny, rocznicę, Dzień Matki lub święta.</div>
                                    </div>
                                </div>
                                <div class="panel wt-panel">
                                    <div class="acod-head">
                                        <h6 class="acod-title text-uppercase">
                                            <a data-bs-toggle="collapse" href="javascript:;" data-bs-target="#collapseSeven8" class="collapsed"> <i class="fa fa-angle-double-right"></i>
                                                Czy są jakieś przeciwwskazania do zabiegów?
                                                <span class="indicator"><i class="fa fa-plus"></i></span>
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapseSeven8" class="acod-body collapse" data-bs-parent="#accordion5">
                                        <div class="acod-content p-tb15">Tak. Przeciwwskazania różnią się w zależności od zabiegu, ale najczęściej są to:<br>• ciąża i karmienie piersią,<br>• choroby skóry w miejscu zabiegowym,<br>• choroby nowotworowe,<br>• infekcje wirusowe lub bakteryjne,<br>• przyjmowanie leków światłouczulających (np. przy epilacji).<br>Przed każdym zabiegiem przeprowadzamy konsultację i wywiad, aby wykluczyć ryzyko i dobrać najbezpieczniejszą metodę pielęgnacji.</div>
                                    </div>
                                </div>

                            </div>
                            <!-- ACCORDION END -->
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

        <!-- Footer -->
        <?php include 'partials/footer.php'; ?>
        
</body>

</html>