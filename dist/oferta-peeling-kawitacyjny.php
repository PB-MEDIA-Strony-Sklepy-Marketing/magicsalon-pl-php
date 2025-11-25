<?php

/**
 * MAGIC SALON - Oferta: Peeling Kawitacyjny (oferta-peeling-kawitacyjny.php)
 * Wersja: 2.3 - Zoptymalizowane treści SEO dla usługi
 */

// Załaduj konfigurację
require_once __DIR__ . DIRECTORY_SEPARATOR . 'config.php';

// Konfiguracja meta tagów dla strony Peelingu Kawitacyjnego
$meta = [
    'title' => 'Peeling Kawitacyjny – Bezbolesne Oczyszczanie Twarzy | MAGIC SALON',
    'description' => 'Głębokie oczyszczanie skóry ultradźwiękami w Dobrzykowicach. Peeling kawitacyjny usuwa wągry, martwy naskórek i nadmiar sebum bez podrażnień. Sprawdź ofertę!',
    'keywords' => 'peeling kawitacyjny dobrzykowice, oczyszczanie twarzy ultradźwiękami, usuwanie wągrów wrocław, kawitacja zabieg, bezbolesne oczyszczanie, zabiegi na trądzik, odświeżenie cery',
    // Canonical URL dla tej konkretnej usługi
    'canonical' => BASE_URL . '/oferta-peeling-kawitacyjny.php',
    'robots' => 'index, follow, max-image-preview:large',
    'og' => [
        'type' => 'website',
        'title' => 'Peeling Kawitacyjny – Świeżość i Blask Twojej Skóry',
        'description' => 'Bezpieczne i skuteczne oczyszczanie twarzy. Pozbądź się zanieczyszczeń i odzyskaj promienny wygląd dzięki kawitacji w Magic Salon.',
        'url' => BASE_URL . '/oferta-peeling-kawitacyjny.php',
        'image' => BASE_URL . '/images/oferta-details/peelingkawitacyjny.jpg', // Zdjęcie konkretnej usługi
    ],
    'twitter' => [
        'card' => 'summary_large_image',
        'title' => 'Peeling Kawitacyjny w MAGIC SALON',
        'description' => 'Ultradźwiękowe oczyszczanie twarzy. Idealne dla cery wrażliwej.',
    ],
    'schema' => [
        'enabled' => true,
        'type' => 'Service',
        'name' => 'Zabieg Peeling Kawitacyjny',
        'description' => 'Bezinwazyjny zabieg oczyszczający skórę przy użyciu fal ultradźwiękowych, usuwający zrogowaciały naskórek i nadmiar sebum.',
        'provider' => [
            '@type' => 'BeautySalon',
            'name' => 'MAGIC SALON',
            'address' => [
                'streetAddress' => 'ul. Borówkowa 13',
                'postalCode' => '55-002',
                'addressLocality' => 'Dobrzykowice',
                'addressCountry' => 'PL'
            ]
        ],
        'areaServed' => [
            '@type' => 'City',
            'name' => 'Dobrzykowice'
        ],
        'hasOfferCatalog' => [
            '@type' => 'OfferCatalog',
            'name' => 'Oczyszczanie Twarzy',
            'itemListElement' => [
                [
                    '@type' => 'Offer',
                    'itemOffered' => [
                        '@type' => 'Service',
                        'name' => 'Peeling Kawitacyjny Twarz'
                    ]
                ],
                [
                    '@type' => 'Offer',
                    'itemOffered' => [
                        '@type' => 'Service',
                        'name' => 'Peeling Kawitacyjny Twarz + Szyja + Dekolt'
                    ]
                ],
                [
                    '@type' => 'Offer',
                    'itemOffered' => [
                        '@type' => 'Service',
                        'name' => 'Peeling Kawitacyjny z Ampułką i Maską'
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
        <!-- Header -->
        <?php include 'partials/header.php'; ?>
        <!-- HEADER END -->
        
        <!-- CONTENT START -->
        <div class="page-content  bg-white">
        
        <?php
            // Konfiguracja dynamicznego banera i breadcrumbs dla usługi
            $banner_img = 'images/banner/gallery-banner.jpg'; 
            $page_title = 'Peeling Kawitacyjny';
            // Unikalny opis wprowadzający do konkretnej usługi
            $page_desc = 'Twoja skóra potrzebuje głębokiego oddechu? Peeling kawitacyjny to nowoczesna odpowiedź na potrzeby cery zanieczyszczonej, szarej i zmęczonej. Wykorzystując moc ultradźwięków, delikatnie, ale niezwykle skutecznie usuwamy martwy naskórek i odblokowujemy pory, nie powodując przy tym podrażnień. To idealny wstęp do dalszej pielęgnacji oraz sposób na natychmiastowe przywrócenie skórze blasku i aksamitnej gładkości.';
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
                    'label' => 'Peeling Kawitacyjny', // Element aktywny
                    'url' => '', 
                    'icon' => ''
                ]
            ];
            
            // Załadowanie dedykowanego partiala
            include 'partials/breadcrumbs.php';
            ?>  
                              
            <!-- SECTION CONTENT -->         
            <div class="section-full  p-t80 p-b50  ">
                <div class="container  bg-white ">
                    <div class="section-content ">
                        <div class="row"> 
                            
                            <!-- RIGHT PART -->
                            <div class="col-lg-9 col-md-12 m-b30 animate bounceInRight animated">
                       			<!-- BLOG POST CAROUSEL -->
                                
                                 <!-- SERVICES SITE -->
                                 <div class="p-lr15">
                                     
                                        <div class="row">
                                        <!-- OUR OFFER --> 
                                            <div class="col-lg-6 col-md-8 m-b30">
                                <div class="about-com-pic">
                                    <img src="../images/oferta-details/peelingkawitacyjny.jpg" alt="Peeling Kawitacyjny w MAGIC SALON – Skóra Odmłodzona i Oczyszczona w Naturalny Sposób" class="img-responsive">
                                </div>
                            </div>
                                            
                                         <!-- WHY IT'S BEST? -->
                                         <div class="col-md-6 col-sm-6">
                                                <div class="text-left m-b10">
                                                   <h3 class="text-uppercase">Peeling Kawitacyjny w MAGIC SALON – Skóra Odmłodzona i Oczyszczona w Naturalny Sposób</h3>
                                                   <div class="wt-separator-outer">
                                                       <div class="wt-separator style-icon">
                                                           <i class="fa fa-leaf text-black"></i>
                                                           <span class="separator-left site-bg-primary"></span>
                                                           <span class="separator-right site-bg-primary"></span>
                                                       </div>                            
                                                   </div>
                                                </div>
                                                
                                             <p>MAGIC SALON oferuje innowacyjny zabieg peelingu kawitacyjnego – nowoczesnej metody oczyszczania skóry, która pozwala na usunięcie martwego naskórka, zanieczyszczeń i nadmiaru sebum w sposób bezpieczny i bezbolesny. Peeling kawitacyjny jest idealnym rozwiązaniem dla osób, które pragną poprawić wygląd swojej skóry, przywrócić jej świeżość i blask, a także zadbać o jej zdrowie. Dzięki wykorzystaniu ultradźwięków, zabieg działa głęboko, regenerując i odświeżając skórę, jednocześnie przygotowując ją na kolejne zabiegi pielęgnacyjne.</p>

                                            </div>
                                     </div>
                                     
                                     <div class="row">
                                        <!-- OUR OFFER --> 
                                            <div class="col-lg-12 col-md-12 m-b30 text-left">
                                                <h3 class="text-uppercase">Czym Jest Peeling Kawitacyjny?</h3>
                                                <p>Peeling kawitacyjny to metoda oczyszczania skóry, która wykorzystuje ultradźwięki do generowania mikroskopijnych pęcherzyków powietrza, które rozpadają się na skutek wibracji. Podczas zabiegu, ultradźwięki wytwarzają fale dźwiękowe, które powodują efekt kawitacji – czyli pęknięcia pęcherzyków powietrza na powierzchni skóry. To zjawisko skutkuje usuwaniem martwego naskórka, zanieczyszczeń i nadmiaru sebum, bez konieczności stosowania agresywnych substancji chemicznych lub mechanicznych. W efekcie skóra staje się głęboko oczyszczona, wygładzona, nawilżona i zrewitalizowana.</p>
                                         </div>
                                        <div class="col-lg-12 col-md-12 m-b30 text-left">
                                                <h3 class="text-uppercase">Zalety Peelingu Kawitacyjnego</h3>
                                                <p>1.	Bezbolesność Zabiegu – Peeling kawitacyjny jest zabiegiem całkowicie bezbolesnym, dlatego jest odpowiedni nawet dla osób o wrażliwej skórze. Zabieg jest komfortowy, a uczucie, które towarzyszy jego wykonaniu, jest porównywalne do lekkiego masażu skóry.<br>2.	Głębokie Oczyszczenie – Ultradzwięki docierają do głębszych warstw skóry, usuwając martwe komórki naskórka oraz zanieczyszczenia, które mogą powodować problemy skórne, takie jak zaskórniki czy trądzik.<br>3.	Redukcja Niedoskonałości – Zabieg ma na celu również zmniejszenie widoczności drobnych zmarszczek, blizn po trądziku czy przebarwień, poprawiając wygląd skóry i przywracając jej młodszy i świeży wygląd.<br>4.	Stymulacja Regeneracji Skóry – Dzięki działaniu ultradźwięków, dochodzi do zwiększenia przepływu krwi, co przyczynia się do lepszego dotlenienia i odżywienia skóry, wspomagając procesy regeneracyjne.<br>5.	Bezpieczeństwo i Skuteczność – Peeling kawitacyjny jest bezpieczny dla wszystkich typów skóry, w tym dla osób z cerą wrażliwą, skłonną do podrażnień. Jego skuteczność została potwierdzona w licznych badaniach, co sprawia, że jest to jeden z najpopularniejszych zabiegów w nowoczesnej kosmetologii.</p>
                                         </div>
                                        <div class="col-lg-12 col-md-12 m-b30 text-left">
                                                <h3 class="text-uppercase">Przebieg Zabiegu Peelingu Kawitacyjnego</h3>
                                                <p>Zabieg peelingu kawitacyjnego w MAGIC SALON jest szybki i komfortowy. Cała procedura trwa zwykle od 30 do 60 minut, w zależności od potrzeb skóry i zakresu zabiegu. Oto jak przebiega:</p>
                                                <p>1.	Konsultacja i Przygotowanie Skóry – Na początku zabiegu przeprowadzamy konsultację, aby poznać Twoje potrzeby i oczekiwania. Następnie skóra jest dokładnie oczyszczana z makijażu i zanieczyszczeń.<br>2.	Aplikacja Peelingu Kawitacyjnego – Za pomocą specjalistycznego urządzenia emitującego fale ultradźwiękowe, przeprowadzamy peeling na całej powierzchni twarzy, szyi lub dekoltu, w zależności od Twoich potrzeb. Fale ultradźwiękowe skutecznie usuwają martwy naskórek i zanieczyszczenia.<br>3.	Tonizowanie Skóry – Po zakończeniu zabiegu, skóra jest tonizowana specjalnym preparatem, który przywraca jej naturalne pH i przygotowuje do dalszej pielęgnacji.<br>4.	Zakończenie i Porady Pielęgnacyjne – Na zakończenie zabiegu zalecamy odpowiednią pielęgnację, dostosowaną do Twojego typu skóry, aby utrzymać efekty zabiegu i wspomóc procesy regeneracyjne.</p>
                                         </div>
                                     </div>
                                     
                                    <div class="section-head">
                                    	<div class="text-left m-b10">
                                             <h3 class="text-uppercase">Zobacz także inne usługi</h3>
                                             <div class="wt-separator-outer">
                                               <div class="wt-separator style-icon">
                                                   <i class="fa fa-leaf text-black"></i>
                                                   <span class="separator-left site-bg-primary"></span>
                                                   <span class="separator-right site-bg-primary"></span>
                                               </div>                                                        
                                            </div>
                                         </div>
                                    </div>
                                    <div class="section-content">
                                        <div class="owl-carousel blog-carousel  owl-btn-vertical-center">
                                        
                                            <div class="item">
                                                <div class="ow-blog-post date-style-2">
                                                    <div class="ow-post-media wt-img-effect zoom-slow">
                                                        <img src="../images/oferta-details/architekturilaminacjarwi.jpg" alt="Architektura i laminacja brwi">
                                                    </div>
                                                    <div class="ow-post-info p-tb30 bg-white">
                                                        <div class="ow-post-title">
                                                            <h4 class="post-title"><a href="architektura-i-laminacja-brwi.php" title="Architektura i laminacja brwi">Architektura i laminacja brwi</a></h4>
                                                        </div>
                                                        <div class="ow-post-text">
                                                            <p>Modelowanie brwi dopasowane do kształtu twarzy oraz indywidualnych preferencji klientki. Efekt? Wyrazista, naturalna oprawa oka.</p>
                                                        </div>
                                                        <div class="ow-post-readmore "> 
                                                            <a href="architektura-i-laminacja-brwi.php" title="CZYTAJ WIĘCEJ" rel="bookmark" class=" site-button-link"> CZYTAJ WIĘCEJ  <i class="fa fa-angle-double-right"></i></a> 
                                                        </div>
                                                        <div class="ow-post-tags clearfix">
                                                            
                                                        </div>
                                                    </div>                                      
                                                </div>
                                            </div>
                                            
                                            <div class="item">
                                                <div class="ow-blog-post date-style-2">
                                                    <div class="ow-post-media wt-img-effect zoom-slow">
                                                        <img src="../images/oferta-details/depilacjawoskiem.jpg" alt="Depilacja woskiem">
                                                    </div>
                                                    <div class="ow-post-info p-tb30 bg-white">
                                                        <div class="ow-post-title">
                                                            <h4 class="post-title"><a href="depilacja-woskiem.php" title="Depilacja woskiem">Depilacja woskiem</a></h4>
                                                        </div>
                                                        <div class="ow-post-text">
                                                            <p>Sprawdzona metoda usuwania owłosienia z natychmiastowym efektem. Zabieg przeprowadzany z dbałością o komfort i higienę.</p>
                                                        </div>
                                                        <div class="ow-post-readmore "> 
                                                            <a href="depilacja-woskiem.php" title="CZYTAJ WIĘCEJ" rel="bookmark" class=" site-button-link"> CZYTAJ WIĘCEJ  <i class="fa fa-angle-double-right"></i></a> 
                                                        </div>
                                                        <div class="ow-post-tags clearfix">
                                                            
                                                        </div>
                                                    </div>                                      
                                                </div>
                                            </div>
                                            
                                            <div class="item">
                                                <div class="ow-blog-post date-style-2">
                                                    <div class="ow-post-media wt-img-effect zoom-slow">
                                                        <img src="../images/oferta-details/dermomasaz.jpg" alt="Dermomasaż podciśnienowy">
                                                    </div>
                                                    <div class="ow-post-info p-tb30 bg-white">
                                                        <div class="ow-post-title">
                                                            <h4 class="post-title"><a href="dermomasaz.php" title="Dermomasaż podciśnienowy">Dermomasaż podciśnienowy</a></h4>
                                                        </div>
                                                        <div class="ow-post-text">
                                                            <p>Zabieg łączący masaż próżniowy z terapią antycellulitową. Stymuluje krążenie, ujędrnia skórę i poprawia metabolizm komórkowy.</p>
                                                        </div>
                                                        <div class="ow-post-readmore "> 
                                                            <a href="dermomasaz.php" title="CZYTAJ WIĘCEJ" rel="bookmark" class=" site-button-link"> CZYTAJ WIĘCEJ  <i class="fa fa-angle-double-right"></i></a> 
                                                        </div>
                                                        <div class="ow-post-tags clearfix">
                                                            
                                                        </div>
                                                    </div>                                      
                                                </div>
                                            </div>
                                            
                                            <div class="item">
                                                <div class="ow-blog-post date-style-2 date-skew">
                                                    <div class="ow-post-media wt-img-effect zoom-slow">
                                                        <img src="../images/oferta-details/epilacjalaserowa.jpg" alt="Epilacja laserowa">
                                                    </div>
                                                    <div class="ow-post-info p-tb30 bg-white">
                                                        <div class="ow-post-title">
                                                            <h4 class="post-title"><a href="epilacja-laserowa.php" title="Epilacja laserowa">Epilacja laserowa</a></h4>
                                                        </div>
                                                        <div class="ow-post-text">
                                                            <p>Nowoczesna metoda depilacji zapewniająca trwały efekt gładkiej skóry. Skuteczna zarówno dla kobiet, jak i mężczyzn – bez podrażnień i wrastających włosków.</p>
                                                        </div>
                                                        <div class="ow-post-readmore "> 
                                                            <a href="epilacja-laserowa.php" title="CZYTAJ WIĘCEJ" rel="bookmark" class=" site-button-link"> CZYTAJ WIĘCEJ  <i class="fa fa-angle-double-right"></i></a> 
                                                        </div>
                                                        <div class="ow-post-tags clearfix">
                                                            
                                                        </div>
                                                    </div>                                      
                                                </div>
                                            </div>
                                            
                                            <div class="item">
                                                <div class="ow-blog-post date-style-2">
                                                    <div class="ow-post-media wt-img-effect zoom-slow">
                                                        <img src="../images/oferta-details/glowlift.jpg" alt="Glow & Lift">
                                                    </div>
                                                    <div class="ow-post-info p-tb30 bg-white">
                                                        <div class="ow-post-title">
                                                            <h4 class="post-title"><a href="glow-lift.php" title="Glow & Lift">Glow & Lift</a></h4>
                                                        </div>
                                                        <div class="ow-post-text">
                                                            <p>Zabieg stworzony z myślą o osobach, które pragną natychmiastowego efektu liftingu, rozświetlenia i ujędrnienia skóry. Dzięki wykorzystaniu nowoczesnych technologii stymulujemy produkcję kolagenu i elastyny, co przekłada się na młodszy i zdrowszy wygląd.</p>
                                                        </div>
                                                        <div class="ow-post-readmore "> 
                                                            <a href="glow-lift.php" title="CZYTAJ WIĘCEJ" rel="bookmark" class=" site-button-link"> CZYTAJ WIĘCEJ  <i class="fa fa-angle-double-right"></i></a> 
                                                        </div>
                                                        <div class="ow-post-tags clearfix">
                                                            
                                                        </div>
                                                    </div>                                      
                                                </div>
                                            </div>
                                            
                                            <div class="item">
                                                <div class="ow-blog-post date-style-2 ">
                                                    <div class="ow-post-media wt-img-effect zoom-slow">
                                                        <img src="../images/oferta-details/liftingilaminacjarzes.jpg" alt="Lifting i laminacja rzęs">
                                                    </div>
                                                    <div class="ow-post-info p-tb30 bg-white">
                                                        <div class="ow-post-title">
                                                            <h4 class="post-title"><a href="lifting-i-laminacja-rzes.php" title="Lifting i laminacja rzęs">Lifting i laminacja rzęs</a></h4>
                                                        </div>
                                                        <div class="ow-post-text">
                                                            <p>Zabieg podkreślający naturalne piękno rzęs – uniesione, pogrubione i zadbane rzęsy bez użycia tuszu.</p>
                                                        </div>
                                                        <div class="ow-post-readmore "> 
                                                            <a href="lifting-i-laminacja-rzes.php" title="CZYTAJ WIĘCEJ" rel="bookmark" class=" site-button-link"> CZYTAJ WIĘCEJ  <i class="fa fa-angle-double-right"></i></a> 
                                                        </div>
                                                        <div class="ow-post-tags clearfix">
                                                            
                                                        </div>
                                                    </div>                                      
                                                </div>
                                            </div>
            
                                        </div>
                                    </div>
                                     
                                    <div class="row">
                                        <!-- OUR OFFER --> 
                                            <div class="col-lg-12 col-md-8 m-b30 text-left">
                                                <h3 class="text-uppercase">Dlaczego Warto Skorzystać z Peelingu Kawitacyjnego w MAGIC SALON?</h3>
                                                <p>1.	Profesjonalna Obsługa – W MAGIC SALON zapewniamy indywidualne podejście do każdego Klienta. Nasi doświadczeni kosmetolodzy dobiorą odpowiednią intensywność zabiegu i zalecenia pielęgnacyjne, które będą najlepiej odpowiadać Twoim potrzebom.<br>2.	Nowoczesna Technologia – Wykorzystujemy najnowsze urządzenia i technologie do peelingu kawitacyjnego, co zapewnia wysoką jakość zabiegu oraz maksymalną skuteczność.<br>3.	Bezpieczeństwo – Zabieg jest bezpieczny i bezbolesny, a zastosowanie ultradźwięków pozwala na głębokie oczyszczenie skóry bez ryzyka podrażnień.<br>4.	Widoczny Efekt – Już po pierwszym zabiegu skóra staje się gładsza, bardziej promienna i oczyszczona. Efekty są długotrwałe, a skóra pozostaje odświeżona i nawilżona przez długi czas.<br>5.	Idealny dla Każdego Typu Skóry – Peeling kawitacyjny jest odpowiedni dla wszystkich rodzajów skóry, w tym skóry wrażliwej, skłonnej do podrażnień czy trądziku.</p>
                                         </div>
                                     </div>
                                     
                                    <div class="row">
                                        <!-- OUR OFFER --> 
                                         <div class="col-md-6 col-sm-6">
                                                <div class="text-left m-b10">
                                                     <h3 class="text-uppercase">Podsumowanie:</h3>
                                                     <div class="wt-separator-outer">
                                                       <div class="wt-separator style-icon">
                                                           <i class="fa fa-leaf text-black"></i>
                                                           <span class="separator-left site-bg-primary"></span>
                                                           <span class="separator-right site-bg-primary"></span>
                                                       </div>                            
                                                    </div>
                                                 </div>
                                                <div>
                                                    <p>Peeling kawitacyjny to skuteczny, bezpieczny i bezbolesny zabieg oczyszczający, który pozwala na poprawę kondycji skóry oraz jej wyglądu. Dzięki wykorzystaniu ultradźwięków, zabieg działa głęboko, usuwając zanieczyszczenia i martwy naskórek, co skutkuje uzyskaniem gładkiej, promiennej i zdrowo wyglądającej skóry. W MAGIC SALON zapewniamy profesjonalną obsługę oraz nowoczesną technologię, abyś mogła cieszyć się efektami, które przerosną Twoje oczekiwania.</p>
                                                </div>
                                            </div>
                                            
                                         <!-- WHY IT'S BEST? -->
                                         <div class="col-md-6 col-sm-6">
                                                <div class="text-left m-b10">
                                                   <h3 class="text-uppercase">Umów się na Zabieg!</h3>
                                                   <div class="wt-separator-outer">
                                                       <div class="wt-separator style-icon">
                                                           <i class="fa fa-leaf text-black"></i>
                                                           <span class="separator-left site-bg-primary"></span>
                                                           <span class="separator-right site-bg-primary"></span>
                                                       </div>                            
                                                   </div>
                                                </div>
                                             <p>Zadbaj o swoją skórę i umów się na peeling kawitacyjny w MAGIC SALON. Ciesz się zdrowym, młodym wyglądem i promienną cerą.</p>
                                            </div>
                                     </div>
                    			 </div>
                             </div>
                            <!-- RIGHT PART -->
                            
                            <!-- LEFT PART -->
                            <div class="col-lg-3 col-md-12 m-b30 animate bounceInLeft animated">
                                <!-- WHAT WE DO -->
                                <div class="wt-nav-block m-b50">
                                    <h4 class="wt-nav-title">Nawigacja oferta</h4>
                                    <ul class="wt-nav wt-nav-pills">
                                      <li><a href="epilacja-laserowa.php">Epilacja laserowa</a></li>
                                      <li><a href="peeling-kawitacyjny.php">Peeling kawitacyjny</a></li>
                                      <li><a href="lifting-i-laminacja-rzes.php">Lifting i laminacja rzęs</a></li>
                                      <li><a href="architektura-i-laminacja-brwi.php">Architektura i laminacja brwi</a></li>
                                      <li><a href="detox-drenaz.php">Detox & Drenaż</a></li>
                                      <li><a href="modelowanie-360.php">Glow & Lift</a></li>
                                    <li><a href="modelowanie-360.php">Modelowanie 360°</a></li>
                                    <li><a href="dermomasaz.php">Dermomasaż</a></li>
                                    <li><a href="liposukcja-ultradzwiekowa.php">Liposukcja ultradźwiękowa</a></li>
                                    <li><a href="lipolaser-duo.php">Lipolaser DUO</a></li>
                                    <li><a href="silkroll.php">SilkRoll</a></li>
                                    <li><a href="depilacja-woskiem.php">Depilacja woskiem</a></li>
                                    <li><a href="przedluzanie-i-zageszczanie-rzes.php">Przedłużanie i zagęszczanie rzęs</a></li>
                                    </ul>
                                </div>
                                <!-- OUR SERVICES -->
                                <div class="widget widget_gallery mfp-gallery">
                                    <h5 class="widget-title">Galeria zdjęć zabiegu</h5>
                                    <ul>
                                        <li>
                                            <div class="wt-post-thum">
                                                <a href="../images/gallery/silkroll/pic1.jpg" class="mfp-link" ><img src="../images/gallery/silkroll/thumb/pic1.jpg" alt="Galeria zdjęć zabiegu Peeling kawitacyjny"></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wt-post-thum ">
                                                <a href="../images/gallery/silkroll/pic2.jpg" class="mfp-link"><img src="../images/gallery/silkroll/thumb/pic2.jpg" alt="Galeria zdjęć zabiegu Peeling kawitacyjny"></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wt-post-thum  ">
                                                <a href="../images/gallery/silkroll/pic3.jpg" class="mfp-link"><img src="../images/gallery/silkroll/thumb/pic3.jpg" alt="Galeria zdjęć zabiegu Peeling kawitacyjny"></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wt-post-thum ">
                                                <a href="../images/gallery/silkroll/pic4.jpg" class="mfp-link"><img src="../images/gallery/silkroll/thumb/pic4.jpg" alt="Galeria zdjęć zabiegu Peeling kawitacyjny"></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wt-post-thum ">
                                                <a href="../images/gallery/silkroll/pic5.jpg" class="mfp-link"><img src="../images/gallery/silkroll/thumb/pic5.jpg" alt="Galeria zdjęć zabiegu Peeling kawitacyjny"></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wt-post-thum ">
                                                <a href="../images/gallery/silkroll/pic6.jpg" class="mfp-link"><img src="../images/gallery/silkroll/thumb/pic6.jpg" alt="Galeria zdjęć zabiegu Peeling kawitacyjny"></a>
                                            </div>
                                        </li>
                                        
                                        <li>
                                            <div class="wt-post-thum ">
                                                <a href="../images/gallery/silkroll/pic7.jpg" class="mfp-link"><img src="../images/gallery/silkroll/thumb/pic7.jpg" alt="Galeria zdjęć zabiegu Peeling kawitacyjny"></a>
                                            </div>
                                        </li>
                                        
                                        <li>
                                            <div class="wt-post-thum ">
                                                <a href="../images/gallery/silkroll/pic8.jpg" class="mfp-link"><img src="../images/gallery/silkroll/thumb/pic8.jpg" alt="Galeria zdjęć zabiegu Peeling kawitacyjny"></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- SOCIAL MEDIA -->
                                <div class="m-b50">
                                    <h5 class="widget-title ">Social media salonu</h5>
                                    <ul class="social-icons bdr-1 p-a10 bdr-gray">
                                        <li><a href="https://www.facebook.com/magicsalonpl" class="fa fa-facebook" target="_blank"></a></li>
                                        <li><a href="https://www.instagram.com/magicsalonpl/" class="fa fa-instagram" target="_blank"></a></li>
                                    </ul>
                                </div>
                            
                             
                                <div class="wt-accordion acc-bg-gray m-b50" id="accordion9">
                                    <h5 class="widget-title ">Dlaczego my?</h5>
                                        <div class="panel wt-panel">
                                        
                                            <div class="acod-head acc-actives">
                                                <h6 class="acod-title text-uppercase">
                                                    <a data-bs-toggle="collapse" href="javascript:;"  data-bs-target="#collapseOne9"><i class="fa fa-chevron-down"></i>
                                                        Indywidualne podejście do każdego Klienta
                                                        <span class="indicator"><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </h6>
                                            </div>
                                            
                                            <div id="collapseOne9" class="acod-body collapse show" data-bs-parent="#accordion9">
                                                <div class="acod-content p-tb15">Uważnie słuchamy i dopasowujemy zabiegi do potrzeb Twojej skóry i sylwetki. Każdy Klient traktowany jest z pełnym zaangażowaniem i szacunkiem – bo Twoje piękno jest unikalne.</div>
                                            </div>
                                            
                                        </div>
                                        
                                        <div class="panel wt-panel">
                                            <div class="acod-head">
                                                <h6 class="acod-title text-uppercase">
                                                    <a data-bs-toggle="collapse" class="collapsed" href="javascript:;"  data-bs-target="#collapseTwo10"><i class="fa fa-chevron-down"></i>
                                                    Nowoczesne technologie i sprawdzone metody 
                                                    <span class="indicator"><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </h6>
                                            </div>
                                            <div id="collapseTwo10" class="acod-body collapse" data-bs-parent="#accordion9" >
                                                <div class="acod-content p-tb15">Pracujemy na certyfikowanych, bezpiecznych urządzeniach najnowszej generacji, m.in. Trio Laser Medika, Lipolaser Duo, SilkRoll czy Lampa LED. To gwarancja skuteczności i widocznych rezultatów.</div>
                                            </div>
                                        </div>
                                        
                                        <div class="panel wt-panel">
                                            <div class="acod-head">
                                                <h6 class="acod-title text-uppercase">
                                                    <a data-bs-toggle="collapse" class="collapsed" href="javascript:;"  data-bs-target="#collapseThree11"><i class="fa fa-chevron-down"></i>
                                                    Szeroka oferta zabiegów na twarz i ciało
                                                    <span class="indicator"><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </h6>
                                            </div>
                                            <div id="collapseThree11" class="acod-body collapse"  data-bs-parent="#accordion9">
                                                <div class="acod-content p-tb15">Od epilacji laserowej, przez modelowanie sylwetki, po pielęgnację skóry – oferujemy kompleksowe rozwiązania w jednym miejscu. Dzięki temu możesz zadbać o siebie od stóp do głów.</div>
                                            </div>
                                        </div>
                                        <div class="panel wt-panel">
                                            <div class="acod-head">
                                                <h6 class="acod-title text-uppercase">
                                                    <a data-bs-toggle="collapse" class="collapsed" href="javascript:;"  data-bs-target="#collapseThree12"><i class="fa fa-chevron-down"></i>
                                                    Doświadczony i wykwalifikowany personel
                                                    <span class="indicator"><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </h6>
                                            </div>
                                            <div id="collapseThree12" class="acod-body collapse"  data-bs-parent="#accordion9">
                                                <div class="acod-content p-tb15">Zespół MAGIC SALON tworzą certyfikowani kosmetolodzy i pasjonatki branży beauty. Nieustannie się szkolimy, by oferować najnowsze trendy i najwyższą jakość usług.</div>
                                            </div>
                                        </div>
                                        <div class="panel wt-panel">
                                            <div class="acod-head">
                                                <h6 class="acod-title text-uppercase">
                                                    <a data-bs-toggle="collapse" class="collapsed" href="javascript:;"  data-bs-target="#collapseThree13"><i class="fa fa-chevron-down"></i>
                                                    Kameralna atmosfera i pełen relaks
                                                    <span class="indicator"><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </h6>
                                            </div>
                                            <div id="collapseThree13" class="acod-body collapse"  data-bs-parent="#accordion9">
                                                <div class="acod-content p-tb15">Stworzyliśmy miejsce, w którym możesz naprawdę odpocząć. Komfortowe wnętrza, spokojna muzyka i aromatyczna kawa – to wszystko sprawia, że każda wizyta jest chwilą tylko dla Ciebie.</div>
                                            </div>
                                        </div>
                                        <div class="panel wt-panel">
                                            <div class="acod-head">
                                                <h6 class="acod-title text-uppercase">
                                                    <a data-bs-toggle="collapse" class="collapsed" href="javascript:;"  data-bs-target="#collapseThree14"><i class="fa fa-chevron-down"></i>
                                                    Bezpieczeństwo i higiena na najwyższym poziomie
                                                    <span class="indicator"><i class="fa fa-plus"></i></span>
                                                    </a>
                                                </h6>
                                            </div>
                                            <div id="collapseThree14" class="acod-body collapse"  data-bs-parent="#accordion9">
                                                <div class="acod-content p-tb15">Przestrzegamy wszelkich norm sanitarnych, używamy jednorazowych materiałów i sterylizowanych narzędzi. Twoje zdrowie i bezpieczeństwo są dla nas priorytetem.</div>
                                            </div>
                                        </div>            
                                </div>  
                                
                                <div class="m-b50">
                                <h5 class="widget-title ">MAGIC SALON - Piękno jest tak blisko!</h5>
                                <img src="../images/bannersidebar.jpg" alt="Banner Sidebar Magic Salon" class="img-responsive">
                                </div>
                                
                             </div>
                            <!-- LEFT PART -->
                            
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
            
        <!-- CONTENT END -->
        </div>
        <!-- CONTENT END -->
        
        <!-- Footer -->
        <?php include 'partials/footer.php'; ?>

</body>

</html>
