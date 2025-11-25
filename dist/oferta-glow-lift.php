<?php

/**
 * MAGIC SALON - Oferta: Glow & Lift (oferta-glow-lift.php)
 * Wersja: 2.3 - Zoptymalizowane treści SEO dla usługi
 */

// Załaduj konfigurację
require_once __DIR__ . DIRECTORY_SEPARATOR . 'config.php';

// Konfiguracja meta tagów dla strony Glow & Lift
$meta = [
    'title' => 'Glow & Lift – Zabieg Bankietowy i Lifting Twarzy | MAGIC SALON',
    'description' => 'Natychmiastowy efekt liftingu i rozświetlenia w Dobrzykowicach. Zabieg Glow & Lift to idealne rozwiązanie przed wielkim wyjściem. Promienna cera, nawilżenie i napięcie skóry.',
    'keywords' => 'zabieg bankietowy wrocław, glow and lift, lifting bez skalpela, rozświetlenie twarzy, zabieg przed ślubem, kosmetyczka dobrzykowice, odmładzanie twarzy',
    // Canonical URL dla tej konkretnej usługi
    'canonical' => BASE_URL . '/oferta-glow-lift.php',
    'robots' => 'index, follow, max-image-preview:large',
    'og' => [
        'type' => 'website',
        'title' => 'Glow & Lift – Twój Sekret Promiennej Cery',
        'description' => 'Potrzebujesz efektu WOW? Wybierz nasz autorski zabieg Glow & Lift. Lifting, nawilżenie i blask w jednej sesji. Sprawdź szczegóły!',
        'url' => BASE_URL . '/oferta-glow-lift.php',
        'image' => BASE_URL . '/images/oferta-details/glowlift.jpg', // Zdjęcie konkretnej usługi
    ],
    'twitter' => [
        'card' => 'summary_large_image',
        'title' => 'Zabieg Glow & Lift w MAGIC SALON',
        'description' => 'Lifting i rozświetlenie skóry. Idealny zabieg bankietowy.',
    ],
    'schema' => [
        'enabled' => true,
        'type' => 'Service',
        'name' => 'Zabieg Glow & Lift',
        'description' => 'Ekskluzywny zabieg pielęgnacyjny łączący lifting, głębokie nawilżenie i rozświetlenie skóry twarzy, szyi i dekoltu.',
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
            'name' => 'Zabiegi Bankietowe i Liftingujące',
            'itemListElement' => [
                [
                    '@type' => 'Offer',
                    'itemOffered' => [
                        '@type' => 'Service',
                        'name' => 'Glow & Lift Twarz'
                    ]
                ],
                [
                    '@type' => 'Offer',
                    'itemOffered' => [
                        '@type' => 'Service',
                        'name' => 'Glow & Lift Twarz + Szyja + Dekolt'
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
            $page_title = 'Glow & Lift – Natychmiastowy Blask';
            // Unikalny opis wprowadzający do konkretnej usługi
            $page_desc = 'Marzysz o cerze jak z okładki magazynu? Glow & Lift to nasza odpowiedź na potrzeby skóry zmęczonej, poszarzałej i wymagającej natychmiastowej rewitalizacji. To idealny "zabieg bankietowy", który w krótkim czasie przywraca skórze witalność, poprawia jej napięcie i nadaje niesamowity blask. Poczuj się pewnie i olśniewaj wyglądem podczas każdej ważnej chwili.';
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
                    'label' => 'Glow & Lift', // Element aktywny
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
                                    <img src="../images/oferta-details/glowlift.jpg" alt="MAGIC SALON – Twoje piękno, nasza pasja." class="img-responsive">
                                </div>
                            </div>
                                            
                                         <!-- WHY IT'S BEST? -->
                                         <div class="col-md-6 col-sm-6">
                                                <div class="text-left m-b10">
                                                   <h3 class="text-uppercase">MAGIC SALON – Twoje piękno, nasza pasja.</h3>
                                                   <div class="wt-separator-outer">
                                                       <div class="wt-separator style-icon">
                                                           <i class="fa fa-leaf text-black"></i>
                                                           <span class="separator-left site-bg-primary"></span>
                                                           <span class="separator-right site-bg-primary"></span>
                                                       </div>                            
                                                   </div>
                                                </div>
                                                
                                             <p>Zrelaksuj się i pozwól swojej skórze rozbłysnąć na nowo dzięki wyjątkowemu zabiegowi Glow & Lift, który łączy w sobie kompleksową pielęgnację, głęboką regenerację i widoczny efekt liftingu bez skalpela.</p>
                                             <p>Współczesne tempo życia, stres, zanieczyszczenia środowiska i niedobór snu odbijają się na naszej skórze – traci ona blask, staje się szara, zmęczona i mniej elastyczna. Dlatego w MAGIC SALON stworzyliśmy wyjątkowy zabieg Glow & Lift, który działa wielopłaszczyznowo: oczyszcza, nawilża, napina, regeneruje i rozświetla cerę już od pierwszej wizyty.</p>

                                            </div>
                                     </div>
                                     
                                     <div class="row">
                                        <!-- OUR OFFER --> 
                                            <div class="col-lg-12 col-md-12 m-b30 text-left">
                                                <h3 class="text-uppercase">Na czym polega zabieg Glow & Lift?</h3>
                                                <p>Glow & Lift to wieloetapowy rytuał, w którym wykorzystujemy innowacyjne technologie i najwyższej jakości preparaty aktywne, by kompleksowo zadbać o kondycję Twojej skóry. Zabieg został stworzony z myślą o osobach, które oczekują natychmiastowych efektów odświeżenia, ujędrnienia i promiennego wyglądu – bez konieczności długiej rekonwalescencji.</p>
                                         </div>
                                        <div class="col-lg-12 col-md-12 m-b30 text-left">
                                                <h3 class="text-uppercase">Etapy zabiegu Glow & Lift:</h3>
                                                <p>1.	Delikatne, ale skuteczne oczyszczenie skóry – usuwa zanieczyszczenia, makijaż oraz martwy naskórek, przygotowując cerę do kolejnych kroków.<br>2.	Eksfoliacja enzymatyczna lub kawitacyjna – wyrównuje strukturę skóry i pobudza jej naturalną odnowę komórkową.<br>3.	Aplikacja intensywnie regenerujących serum i koktajli liftingujących – zawierających peptydy, kwas hialuronowy i antyoksydanty.<br>4.	Masaż liftingujący lub zastosowanie technologii napinających (np. fala radiowa, mikroprądy) – pobudza mikrokrążenie, poprawia napięcie mięśniowe i modeluje owal twarzy.<br>5.	Maska rozświetlająco-ujędrniająca – która nadaje skórze zdrowy koloryt, zmniejsza widoczność porów i wygładza powierzchnię naskórka.<br>6.	Zakończenie pielęgnacją dobraną do typu skóry – kremem odżywczym, nawilżającym i ochroną przeciwsłoneczną.</p>
                                         </div>
                                        <div class="col-lg-12 col-md-12 m-b30 text-left">
                                                <h3 class="text-uppercase">Efekty zabiegu Glow & Lift:</h3>
                                                <p>Już po jednym zabiegu zauważysz:</p>
                                                <p>•	promienną, zdrowo wyglądającą cerę,<br>•	wygładzenie drobnych zmarszczek i poprawę jędrności,<br>•	zniwelowanie oznak zmęczenia i stresu,<br>•	poprawę owalu twarzy,<br>•	wyrównanie kolorytu skóry i głębokie nawilżenie,<br>•	efekt natychmiastowego "glow" – idealny na ważne wyjście czy sesję zdjęciową!</p>
                                                <p>Regularne stosowanie zabiegu Glow & Lift pozwala zachować młody wygląd skóry na dłużej, bez potrzeby stosowania inwazyjnych metod.</p>
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
                                                <h3 class="text-uppercase">Dla kogo przeznaczony jest Glow & Lift?</h3>
                                                <p>Zabieg Glow & Lift polecamy szczególnie:</p>
                                                <p>•	osobom z cerą zmęczoną, poszarzałą, odwodnioną,<br>•	kobietom i mężczyznom z pierwszymi oznakami starzenia,<br>•	osobom po 30. roku życia, które chcą zachować młody wygląd na dłużej,<br>•	wszystkim, którzy chcą olśniewać wyglądem przed ważnym wydarzeniem.</p>
                                         </div>
                                     </div>
                                     
                                    <div class="row">
                                        <!-- OUR OFFER --> 
                                         <div class="col-md-6 col-sm-6">
                                                <div class="text-left m-b10">
                                                     <h3 class="text-uppercase">Częstotliwość i zalecenia:</h3>
                                                     <div class="wt-separator-outer">
                                                       <div class="wt-separator style-icon">
                                                           <i class="fa fa-leaf text-black"></i>
                                                           <span class="separator-left site-bg-primary"></span>
                                                           <span class="separator-right site-bg-primary"></span>
                                                       </div>                            
                                                    </div>
                                                 </div>
                                                <div>
                                                    <p>Zabieg Glow & Lift może być wykonany jako jednorazowy zabieg bankietowy lub w formie serii 4–6 zabiegów dla pogłębionych i utrwalonych efektów.</p>
                                                </div>
                                            </div>
                                            
                                         <!-- WHY IT'S BEST? -->
                                         <div class="col-md-6 col-sm-6">
                                                <div class="text-left m-b10">
                                                   <h3 class="text-uppercase">Zarezerwuj swoją wizytę już dziś!</h3>
                                                   <div class="wt-separator-outer">
                                                       <div class="wt-separator style-icon">
                                                           <i class="fa fa-leaf text-black"></i>
                                                           <span class="separator-left site-bg-primary"></span>
                                                           <span class="separator-right site-bg-primary"></span>
                                                       </div>                            
                                                   </div>
                                                </div>
                                             <p>Nie czekaj, aż Twoja skóra przypomni Ci o potrzebie pielęgnacji. Podaruj sobie luksus, na jaki zasługujesz. Umów się na konsultację w MAGIC SALON i pozwól nam zatroszczyć się o Twoje naturalne piękno.</p>

                                            </div>
                                     </div>
                    			 </div>
                             </div>
                            <!-- RIGHT PART -->
                            
                            <!-- LEFT PART -->
                            <div class="col-lg-3 col-md-12 m-b30 animate bounce animated">
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
                                                <a href="../images/gallery/architektura-i-laminacja-brwi/pic1.jpg" class="mfp-link" ><img src="../images/gallery/architektura-i-laminacja-brwi/thumb/pic1.jpg" alt="Galeria zdjęć zabiegu Glow & Lift"></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wt-post-thum ">
                                                <a href="../images/gallery/architektura-i-laminacja-brwi/pic2.jpg" class="mfp-link"><img src="../images/gallery/architektura-i-laminacja-brwi/thumb/pic2.jpg" alt="Galeria zdjęć zabiegu Glow & Lift"></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wt-post-thum  ">
                                                <a href="../images/gallery/architektura-i-laminacja-brwi/pic3.jpg" class="mfp-link"><img src="../images/gallery/architektura-i-laminacja-brwi/thumb/pic3.jpg" alt="Galeria zdjęć zabiegu Glow & Lift"></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wt-post-thum ">
                                                <a href="../images/gallery/architektura-i-laminacja-brwi/pic4.jpg" class="mfp-link"><img src="../images/gallery/architektura-i-laminacja-brwi/thumb/pic4.jpg" alt="Galeria zdjęć zabiegu Glow & Lift"></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wt-post-thum ">
                                                <a href="../images/gallery/architektura-i-laminacja-brwi/pic5.jpg" class="mfp-link"><img src="../images/gallery/architektura-i-laminacja-brwi/thumb/pic5.jpg" alt="Galeria zdjęć zabiegu Glow & Lift"></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wt-post-thum ">
                                                <a href="../images/gallery/architektura-i-laminacja-brwi/pic6.jpg" class="mfp-link"><img src="../images/gallery/architektura-i-laminacja-brwi/thumb/pic6.jpg" alt="Galeria zdjęć zabiegu Glow & Lift"></a>
                                            </div>
                                        </li>
                                        
                                        <li>
                                            <div class="wt-post-thum ">
                                                <a href="../images/gallery/architektura-i-laminacja-brwi/pic7.jpg" class="mfp-link"><img src="../images/gallery/architektura-i-laminacja-brwi/thumb/pic7.jpg" alt="Galeria zdjęć zabiegu Glow & Lift"></a>
                                            </div>
                                        </li>
                                        
                                        <li>
                                            <div class="wt-post-thum ">
                                                <a href="../images/gallery/architektura-i-laminacja-brwi/pic8.jpg" class="mfp-link"><img src="../images/gallery/architektura-i-laminacja-brwi/thumb/pic8.jpg" alt="Galeria zdjęć zabiegu Glow & Lift"></a>
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
