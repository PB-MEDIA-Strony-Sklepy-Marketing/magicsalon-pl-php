<?php

/**
 * MAGIC SALON - Oferta: Depilacja Woskiem (oferta-depilacja-woskiem.php)
 * Wersja: 2.3 - Zoptymalizowane treści SEO dla usługi
 */

// Załaduj konfigurację
require_once __DIR__ . DIRECTORY_SEPARATOR . 'config.php';

// Konfiguracja meta tagów dla strony Depilacji Woskiem
$meta = [
    'title' => 'Depilacja Woskiem – Gładka Skóra na Tygodnie | MAGIC SALON',
    'description' => 'Profesjonalna depilacja woskiem w Dobrzykowicach. Szybkie i skuteczne usuwanie owłosienia: nogi, bikini, pachy, wąsik. Ciesz się jedwabiście gładką skórą. Umów wizytę!',
    'keywords' => 'depilacja woskiem dobrzykowice, usuwanie owłosienia woskiem, depilacja bikini wrocław, woskowanie nóg, gładka skóra, kosmetyczka dobrzykowice, depilacja wąsika',
    // Canonical URL dla tej konkretnej usługi
    'canonical' => BASE_URL . '/oferta-depilacja-woskiem.php',
    'robots' => 'index, follow, max-image-preview:large',
    'og' => [
        'type' => 'website',
        'title' => 'Depilacja Woskiem – Natychmiastowy Efekt Gładkości',
        'description' => 'Szybki sposób na idealnie gładkie ciało. Wybierz depilację woskiem w Magic Salon i zapomnij o maszynce na kilka tygodni.',
        'url' => BASE_URL . '/oferta-depilacja-woskiem.php',
        'image' => BASE_URL . '/images/oferta-details/depilacjawoskiem.jpg', // Zdjęcie konkretnej usługi
    ],
    'twitter' => [
        'card' => 'summary_large_image',
        'title' => 'Depilacja Woskiem w MAGIC SALON',
        'description' => 'Skuteczne usuwanie owłosienia woskiem. Sprawdź naszą ofertę.',
    ],
    'schema' => [
        'enabled' => true,
        'type' => 'Service',
        'name' => 'Depilacja Woskiem',
        'description' => 'Mechaniczne usuwanie owłosienia przy użyciu ciepłego wosku, zapewniające gładkość skóry na 3-4 tygodnie.',
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
            'name' => 'Usługi Depilacji',
            'itemListElement' => [
                [
                    '@type' => 'Offer',
                    'itemOffered' => [
                        '@type' => 'Service',
                        'name' => 'Depilacja Woskiem Nóg'
                    ]
                ],
                [
                    '@type' => 'Offer',
                    'itemOffered' => [
                        '@type' => 'Service',
                        'name' => 'Depilacja Woskiem Bikini'
                    ]
                ],
                [
                    '@type' => 'Offer',
                    'itemOffered' => [
                        '@type' => 'Service',
                        'name' => 'Depilacja Woskiem Wąsika'
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
            $page_title = 'Depilacja Woskiem';
            // Unikalny opis wprowadzający do konkretnej usługi
            $page_desc = 'Ciesz się uczuciem jedwabistej gładkości przez długi czas. Depilacja woskiem w Magic Salon to sprawdzona, bezpieczna i szybka metoda usuwania zbędnego owłosienia. Dzięki doświadczeniu naszych kosmetyczek i zastosowaniu wysokiej jakości wosków, zabieg jest maksymalnie komfortowy, a efekty zachwycają precyzją. To idealne rozwiązanie dla osób ceniących natychmiastowy efekt.';
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
                    'label' => 'Depilacja Woskiem', // Element aktywny
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
                                    <img src="../images/oferta-details/depilacjawoskiem.jpg" alt="Depilacja Woskiem w MAGIC SALON – Gładka Skóra na Dłużej" class="img-responsive">
                                </div>
                            </div>
                                            
                                         <!-- WHY IT'S BEST? -->
                                         <div class="col-md-6 col-sm-6">
                                                <div class="text-left m-b10">
                                                   <h3 class="text-uppercase">Depilacja Woskiem w MAGIC SALON – Gładka Skóra na Dłużej</h3>
                                                   <div class="wt-separator-outer">
                                                       <div class="wt-separator style-icon">
                                                           <i class="fa fa-leaf text-black"></i>
                                                           <span class="separator-left site-bg-primary"></span>
                                                           <span class="separator-right site-bg-primary"></span>
                                                       </div>                            
                                                   </div>
                                                </div>
                                                
                                             <p>Depilacja woskiem to jedna z najbardziej popularnych i skutecznych metod usuwania niechcianego owłosienia. Dzięki tej technice, możemy cieszyć się gładką skórą przez długi czas, a efekt pozostaje widoczny przez kilka tygodni. W MAGIC SALON oferujemy depilację woskiem na najwyższym poziomie, dzięki czemu każdy zabieg wykonujemy szybko, skutecznie i komfortowo. Zaufaj naszym specjalistom i pozwól sobie na gładką skórę, której efekt utrzyma się na długo.</p>

                                            </div>
                                     </div>
                                     
                                     <div class="row">
                                        <!-- OUR OFFER --> 
                                            <div class="col-lg-12 col-md-12 m-b30 text-left">
                                                <h3 class="text-uppercase">Co to jest depilacja woskiem?</h3>
                                                <p>Depilacja woskiem to zabieg polegający na usuwaniu owłosienia z korzeniami przy użyciu specjalnego wosku. Proces jest szybki i efektywny, a skóra po zabiegu jest gładka przez kilka tygodni. Podczas depilacji woskiem, ciepły wosk nakładany jest na skórę w kierunku wzrostu włosów, a następnie przykładany jest pasek materiału, który pozwala na precyzyjne usunięcie włosów. Wosk chwyta włosy, a po szybkim zerwaniu paska, owłosienie zostaje usunięte w całości, pozostawiając skórę gładką i miękką.</p>
                                         </div>
                                        <div class="col-lg-12 col-md-12 m-b30 text-left">
                                                <h3 class="text-uppercase">Zalety depilacji woskiem w MAGIC SALON</h3>
                                                <p>1.	Przygotowanie skóry – Przed zabiegiem skóra zostaje dokładnie oczyszczona i przygotowana do depilacji. Nasi specjaliści dbają o to, aby skóra była czysta i wolna od nadmiaru sebum, co zwiększa skuteczność zabiegu.<br>2.	Aplikacja wosku – Na wybraną partię ciała nakładamy ciepły wosk. Dzięki precyzyjnemu nakładaniu, wosk doskonale przylega do włosów, co zapewnia ich skuteczne usunięcie.<br>3.	Usuwanie włosów – Następnie na wosk nakłada się pasek materiału, który jest szybkim ruchem zerwany, co pozwala na usunięcie owłosienia wraz z cebulką. Zabieg jest szybki, ale skuteczny, a efekty są widoczne od razu.<br>4.	Zakończenie zabiegu – Po depilacji wosk zostaje usunięty, a skóra zostaje nawilżona specjalnym preparatem, który łagodzi ewentualne podrażnienia i zaczerwienienia.</p>
                                                <p>Zabieg jest stosunkowo szybki i nie sprawia dużego dyskomfortu, a po jego wykonaniu można od razu wrócić do codziennych aktywności.</p>
                                         </div>
                                        <div class="col-lg-12 col-md-12 m-b30 text-left">
                                                <h3 class="text-uppercase">Gdzie można wykonać depilację woskiem?</h3>
                                                <p>Zabieg depilacji woskiem w naszym salonie odbywa się w kilku prostych krokach, które zapewniają komfort, bezpieczeństwo oraz szybkie i skuteczne usunięcie owłosienia. Oto, jak wygląda cała procedura:</p>
                                                <p>MAGIC SALON oferuje depilację woskiem na wielu częściach ciała, w tym:</p>
                                                <p>•	Depilacja nóg – popularna usługa, która pozwala na długotrwałe usunięcie owłosienia z nóg, pozostawiając skórę gładką na kilka tygodni.<br>•	Depilacja okolic bikini – precyzyjne usunięcie owłosienia w delikatnych miejscach, zapewniające komfort i pewność siebie.<br>•	Depilacja pach – szybka metoda na pozbycie się owłosienia z pach, która daje uczucie świeżości przez dłuższy czas.<br>•	Depilacja rąk – dla osób, które chcą cieszyć się gładką skórą na rękach.<br>•	Depilacja twarzy – depilacja górnej wargi, brwi, a także innych drobnych miejsc na twarzy, gdzie owłosienie może być uciążliwe.</p>
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
                                                            <h4 class="post-title"><a href="depilacja-woskiem.php" title="Video post">Depilacja woskiem</a></h4>
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
                                                            <h4 class="post-title"><a href="dermomasaz.php" title="Video post">Dermomasaż podciśnienowy</a></h4>
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
                                                            <h4 class="post-title"><a href="epilacja-laserowa.php" title="Video post">Epilacja laserowa</a></h4>
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
                                                            <h4 class="post-title"><a href="glow-lift.php" title="Video post">Glow & Lift</a></h4>
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
                                                            <h4 class="post-title"><a href="lifting-i-laminacja-rzes.php" title="Video post">Lifting i laminacja rzęs</a></h4>
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
                                                <h3 class="text-uppercase">Jakie są efekty depilacji woskiem?</h3>
                                                <p>Po zabiegu depilacji woskiem skóra jest gładka i jedwabista przez długi czas. Efekty zależą od indywidualnych cech organizmu, jednak z reguły utrzymują się od 3 do 6 tygodni, w zależności od szybkości wzrostu włosów. Regularne stosowanie depilacji woskiem sprawia, że włosy stają się coraz cieńsze i słabsze, a odrosty są rzadsze, co sprawia, że zabieg jest coraz mniej bolesny i bardziej komfortowy.</p>
                                         </div>
                                     </div>
                                     
                                    <div class="row">
                                        <!-- OUR OFFER --> 
                                         <div class="col-md-6 col-sm-6">
                                                <div class="text-left m-b10">
                                                     <h3 class="text-uppercase">Dlaczego warto wybrać depilację woskiem w MAGIC SALON?</h3>
                                                     <div class="wt-separator-outer">
                                                       <div class="wt-separator style-icon">
                                                           <i class="fa fa-leaf text-black"></i>
                                                           <span class="separator-left site-bg-primary"></span>
                                                           <span class="separator-right site-bg-primary"></span>
                                                       </div>                            
                                                    </div>
                                                 </div>
                                                <div>
                                                    <p>W MAGIC SALON stawiamy na profesjonalizm, komfort i bezpieczeństwo naszych klientów. Korzystamy z wysokiej jakości wosków, które skutecznie usuwają owłosienie, a jednocześnie dbają o skórę. Nasi specjaliści przeprowadzają każdy zabieg z najwyższą starannością, zapewniając Ci komfort i pełną satysfakcję z efektów.</p>
                                                    <p>•	Doświadczeni specjaliści<br>•	Wysokiej jakości woski, bezpieczne dla skóry<br>•	Indywidualne podejście do każdego klienta<br>•	Komfort i szybka realizacja zabiegu<br>•	Długotrwałe efekty gładkiej skóry</p>
                                             </div>
                                            </div>
                                            
                                         <!-- WHY IT'S BEST? -->
                                         <div class="col-md-6 col-sm-6">
                                                <div class="text-left m-b10">
                                                   <h3 class="text-uppercase">Umów się na zabieg depilacji woskiem!</h3>
                                                   <div class="wt-separator-outer">
                                                       <div class="wt-separator style-icon">
                                                           <i class="fa fa-leaf text-black"></i>
                                                           <span class="separator-left site-bg-primary"></span>
                                                           <span class="separator-right site-bg-primary"></span>
                                                       </div>                            
                                                   </div>
                                                </div>
                                             <p>Jeśli marzysz o gładkiej skórze, która pozostanie taka przez długie tygodnie, umów się na zabieg depilacji woskiem w MAGIC SALON. Zadzwoń lub napisz, aby zarezerwować swoją wizytę i cieszyć się piękną, gładką skórą bez niechcianego owłosienia.</p>
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
                                                <a href="../images/gallery/architektura-i-laminacja-brwi/pic1.jpg" class="mfp-link" ><img src="../images/gallery/architektura-i-laminacja-brwi/thumb/pic1.jpg" alt="Galeria zdjęć zabiegu Depilacja woskiem"></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wt-post-thum ">
                                                <a href="../images/gallery/architektura-i-laminacja-brwi/pic2.jpg" class="mfp-link"><img src="../images/gallery/architektura-i-laminacja-brwi/thumb/pic2.jpg" alt="Galeria zdjęć zabiegu Depilacja woskiem"></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wt-post-thum  ">
                                                <a href="../images/gallery/architektura-i-laminacja-brwi/pic3.jpg" class="mfp-link"><img src="../images/gallery/architektura-i-laminacja-brwi/thumb/pic3.jpg" alt="Galeria zdjęć zabiegu Depilacja woskiem"></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wt-post-thum ">
                                                <a href="../images/gallery/architektura-i-laminacja-brwi/pic4.jpg" class="mfp-link"><img src="../images/gallery/architektura-i-laminacja-brwi/thumb/pic4.jpg" alt="Galeria zdjęć zabiegu Depilacja woskiem"></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wt-post-thum ">
                                                <a href="../images/gallery/architektura-i-laminacja-brwi/pic5.jpg" class="mfp-link"><img src="../images/gallery/architektura-i-laminacja-brwi/thumb/pic5.jpg" alt="Galeria zdjęć zabiegu Depilacja woskiem"></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wt-post-thum ">
                                                <a href="../images/gallery/architektura-i-laminacja-brwi/pic6.jpg" class="mfp-link"><img src="../images/gallery/architektura-i-laminacja-brwi/thumb/pic6.jpg" alt="Galeria zdjęć zabiegu Depilacja woskiem"></a>
                                            </div>
                                        </li>
                                        
                                        <li>
                                            <div class="wt-post-thum ">
                                                <a href="../images/gallery/architektura-i-laminacja-brwi/pic7.jpg" class="mfp-link"><img src="../images/gallery/architektura-i-laminacja-brwi/thumb/pic7.jpg" alt="Galeria zdjęć zabiegu Depilacja woskiem"></a>
                                            </div>
                                        </li>
                                        
                                        <li>
                                            <div class="wt-post-thum ">
                                                <a href="../images/gallery/architektura-i-laminacja-brwi/pic8.jpg" class="mfp-link"><img src="../images/gallery/architektura-i-laminacja-brwi/thumb/pic8.jpg" alt="Galeria zdjęć zabiegu Depilacja woskiem"></a>
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
