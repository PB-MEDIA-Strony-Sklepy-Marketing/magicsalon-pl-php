<?php

/**
 * MAGIC SALON - Zabiegi na Twarz (zabiegi-na-twarz.php)
 * Wersja: 2.3 - Zoptymalizowane treści SEO i zmienne dla podstrony
 */

// Załaduj konfigurację
require_once __DIR__ . DIRECTORY_SEPARATOR . 'config.php';

// Konfiguracja meta tagów dla strony Zabiegi na Twarz
$meta = [
    'title' => 'Zabiegi na Twarz – Lifting, Oczyszczanie i Pielęgnacja | MAGIC SALON',
    'description' => 'Profesjonalna pielęgnacja twarzy w Dobrzykowicach. Sprawdź naszą ofertę: Glow & Lift, peeling kawitacyjny, laminacja brwi i rzęs oraz terapie anti-aging. Przywróć skórze blask!',
    'keywords' => 'zabiegi na twarz dobrzykowice, kosmetyczka wrocław, peeling kawitacyjny, lifting twarzy, laminacja brwi, glow and lift, oczyszczanie twarzy, zabiegi odmładzające',
    'canonical' => BASE_URL . '/zabiegi-na-twarz.php',
    'robots' => 'index, follow, max-image-preview:large',
    'og' => [
        'type' => 'website',
        'title' => 'Zabiegi na Twarz – Twoja Cera w Dobrych Rękach',
        'description' => 'Zadbaj o promienną cerę z MAGIC SALON. Oferujemy nowoczesne terapie liftingujące, nawilżające i regenerujące.',
        'url' => BASE_URL . '/zabiegi-na-twarz.php',
        'image' => BASE_URL . '/images/nasza-oferta/glowlift.jpg', // Zdjęcie reprezentujące główną usługę
    ],
    'twitter' => [
        'card' => 'summary_large_image',
        'title' => 'Profesjonalna Pielęgnacja Twarzy w MAGIC SALON',
        'description' => 'Odkryj nasze zabiegi: Glow & Lift, SilkRoll i wiele więcej.',
    ],
    'schema' => [
        'enabled' => true,
        'type' => 'BeautySalon',
        'name' => 'MAGIC SALON - Zabiegi na Twarz',
        'description' => 'Specjalistyczne zabiegi kosmetyczne na twarz: oczyszczanie, nawilżanie, lifting i stylizacja oprawy oka.',
        'url' => BASE_URL . '/zabiegi-na-twarz.php',
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
            // Konfiguracja dynamicznego banera i breadcrumbs dla podstrony Zabiegi na Twarz
            $banner_img = 'images/banner/gallery-banner.jpg'; 
            
            $page_title = 'Pielęgnacja i Odmładzanie Twarzy';
            
            // Unikalny opis zachęcający do zadbania o cerę
            $page_desc = 'Twoja twarz to Twoja wizytówka, która zasługuje na wyjątkową troskę. W MAGIC SALON oferujemy kompleksowe terapie dobrane do indywidualnych potrzeb Twojej skóry. Od głębokiego oczyszczania, przez intensywne nawilżanie, aż po zaawansowane zabiegi liftingujące – pomagamy wydobyć naturalne piękno, przywrócić blask i zachować młody wygląd na dłużej.';
            
            $breadcrumbs = [
                [
                    'label' => 'Strona Główna',
                    'url' => 'index.php',
                    'icon' => 'fa fa-home'
                ],
                [
                    'label' => 'Zabiegi na twarz',
                    'url' => '', // Pusty URL oznacza element aktywny
                    'icon' => ''
                ]
            ];
            
            // Załadowanie dedykowanego partiala
            include 'partials/breadcrumbs.php';
            ?>                   
        
            <!-- SECTION CONTENT START -->
            <div class="section-full p-t80 p-b50">
                <div class="container">
                    <div class="row">
                    	<!-- LEFT PART START -->
                        <div class="col-lg-12 col-md-12">
                
                            <!-- BLOG START -->
                            <div class="blog-post date-style-1 blog-post-single">
                                <div class="wt-post-media wt-img-effect">
                                    <img src="../images/blog/default/thum5.jpg" alt="Zdjęcie wyróżniające się. Odkryj Moc Twój Piękno: Najnowsze Trendy i Innowacje w Pielęgnacji Skóry w MAGIC SALON">
                                </div>
                                <div class="post-description-area p-t30">
                                    <div class="wt-post-title ">
                                        <h3 class="post-title">Odkryj Moc Twój Piękno: Najnowsze Trendy i Innowacje w Pielęgnacji Skóry w MAGIC SALON</h3>
                                    </div>
                                    <div class="wt-post-text">
                                        <p>Piękno nie jest jedynie tym, co widzimy na zewnątrz – to także to, jak się czujemy i jak dbamy o siebie. W MAGIC SALON wierzymy, że każda kobieta zasługuje na to, by poczuć się wyjątkowo, dlatego oferujemy szeroką gamę usług pielęgnacyjnych, które pozwolą Ci podkreślić swoją naturalną urodę, poczuć się pewnie i komfortowo we własnej skórze. Nasz salon kosmetyczny to miejsce, gdzie nowoczesne technologie łączą się z doświadczeniem i pasją naszych specjalistów.</p> 
                                        <p>W dzisiejszym wpisie przybliżymy Wam kilka najnowszych trendów w kosmetyce, które możemy zaoferować w MAGIC SALON, a także opowiemy o zabiegach, które w znaczący sposób mogą poprawić Twoje samopoczucie oraz wygląd.</p>
                                        
                                        <h3>Nowoczesna pielęgnacja z użyciem technologii</h3>
                                        <p class="clearfix">W dobie szybkiego tempa życia, dbanie o siebie nie musi być czasochłonne. Nowoczesne technologie pozwalają na szybkie, efektywne i bezpieczne przeprowadzenie zabiegów kosmetycznych, które oferują doskonałe rezultaty. MAGIC SALON korzysta z najnowszych osiągnięć w branży beauty, takich jak liposukcja ultradźwiękowa, lipolaser Duo, czy dermomasaż podciśnieniowy. Dzięki nim osiągniesz wymarzoną sylwetkę i zdrową, promienną skórę w rekordowym czasie!</p>
                                         
                                        <h3>Liposukcja ultradźwiękowa – idealne modelowanie sylwetki</h3>
                                      <p class="clearfix">Liposukcja ultradźwiękowa to nowoczesna, nieinwazyjna metoda, która skutecznie redukuje tkankę tłuszczową, poprawiając wygląd skóry oraz kształt sylwetki. Bez potrzeby interwencji chirurgicznej, wykorzystując tylko fale ultradźwiękowe, możemy osiągnąć rezultaty zbliżone do tradycyjnej liposukcji, ale bez ryzyka oraz długiego czasu rekonwalescencji. To idealne rozwiązanie dla osób, które szukają skutecznego sposobu na pozbycie się nadmiaru tłuszczu w problematycznych miejscach, takich jak brzuch, uda czy ramiona.</p>
                                    
                                        <h3>Glow & Lift – kompleksowa pielęgnacja twarzy</h3>
                                      <p class="clearfix">Chcesz poczuć się młodziej i odświeżona? Zabieg Glow & Lift jest tym, czego potrzebujesz. Łączy on w sobie właściwości oczyszczające, regenerujące oraz liftingujące, co sprawia, że twarz nabiera blasku, a skóra staje się gładka i napięta. To zabieg dedykowany osobom, które chcą poprawić kondycję skóry twarzy oraz zredukować oznaki starzenia. Doskonałe rezultaty już po pierwszym zabiegu!</p>
                                    
                                        <h3>Detox & Drenaż – oczyszczenie organizmu</h3>
                                      <p class="clearfix">Oczyszczanie organizmu to jeden z kluczowych elementów dbania o zdrowie i urodę. Detox & Drenaż to kompleksowy zabieg, który łączy kilka nowoczesnych technologii w celu skutecznego usuwania toksyn z organizmu. Dzięki niemu poprawia się krążenie, redukują się obrzęki, a skóra staje się bardziej jędrna i nawilżona. To idealna propozycja, gdy chcesz pozbyć się nadmiaru wody w organizmie i poczuć się lekko.</p>
                                        
                                        <h3>Piękno w zasięgu ręki</h3>
                                      <p class="clearfix">Nasz salon to nie tylko miejsce, w którym zadbasz o swoje ciało, ale także przestrzeń, w której odpoczniesz od codziennego stresu. Zaufaj naszym specjalistom, którzy dzięki swojemu doświadczeniu oraz indywidualnemu podejściu do każdego klienta, zadbają o Twój wygląd i dobre samopoczucie.</p>
                                        
                                        <h3>Manicure i pedicure – perfekcja na każdą okazję</h3>
                                      <p class="clearfix">Zadbane dłonie to wizytówka każdej kobiety, a manicure hybrydowy czy żelowy to rozwiązanie, które pozwala cieszyć się pięknymi paznokciami przez długi czas. W MAGIC SALON oferujemy także pedicure, który zapewnia nie tylko estetykę, ale również komfort oraz pielęgnację stóp. Przed każdą wizytą możesz liczyć na profesjonalne doradztwo, które pomoże Ci dobrać odpowiedni kolor czy styl, w zależności od Twoich preferencji.</p>
                                        
                                        <h3>Laminacja i architektura brwi</h3>
                                        <p class="clearfix">Chcesz, by Twoje brwi były idealnie ukształtowane? Laminacja brwi i architektura brwi to zabiegi, które pozwalają uzyskać perfekcyjny kształt oraz objętość brwi, dopasowaną do indywidualnych rysów twarzy. Dzięki tej metodzie, brwi stają się bardziej gęste i wyglądają naturalnie, a efekt utrzymuje się przez długi czas.</p>
                                        
                                        <h3>Przedłużanie i zagęszczanie rzęs</h3>
                                        <p class="clearfix">Marzysz o długich, gęstych rzęsach, które podkreślą Twoje spojrzenie? W MAGIC SALON oferujemy usługę przedłużania i zagęszczania rzęs, która jest doskonałą alternatywą dla codziennego malowania rzęs. Dzięki zastosowaniu wysokiej jakości materiałów oraz precyzyjnej aplikacji, efekt jest naturalny i trwały. Po zabiegu, Twoje rzęsy będą wyglądały spektakularnie, a Ty zaoszczędzisz czas każdego dnia.</p>
                                        
                                        <h3>Zrelaksuj się i poczuj się wyjątkowo</h3>
                                        <p class="clearfix">Każda wizyta w MAGIC SALON to nie tylko zabieg kosmetyczny, ale także chwila relaksu i odprężenia. Współpracujemy z najlepszymi specjalistami w branży, którzy zadbają o każdy szczegół Twojego wyglądu. Dzięki nowoczesnym technologiom oraz indywidualnemu podejściu do każdego klienta, jesteśmy pewni, że znajdziesz u nas idealny zabieg, który poprawi Twoje samopoczucie i wygląd.</p>
                                        <p>Zaufaj MAGIC SALON i odkryj magię pielęgnacji, która odmieni Twoje ciało i umysł. Skontaktuj się z nami już dziś i zarezerwuj wizytę, by poczuć się piękniejsza, pewniejsza siebie i bardziej zrelaksowana. Czekamy na Ciebie!</p>
                                        
                                    </div>
                                    <div class="wt-divider bg-gray-dark"><i class="icon-dot c-square"></i></div>
                                </div>
                            </div>
                            
                            <!-- BLOG END -->        
                                            
                        </div>
                        <!-- LEFT PART END -->       
                         
                        <!-- RIGHT PART START -->  
                            
                        <!-- RIGHT PART END -->  
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
