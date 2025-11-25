<?php

/**
 * MAGIC SALON - Oferta: Liposukcja Ultradźwiękowa Jedna Partia (oferta-liposukcja-ultradzwiekowa-jedna-partia.php)
 * Wersja: 2.3 - Zoptymalizowane treści SEO dla usługi
 */

// Załaduj konfigurację
require_once __DIR__ . DIRECTORY_SEPARATOR . 'config.php';

// Konfiguracja meta tagów dla strony Liposukcji (1 partia)
$meta = [
    'title' => 'Liposukcja Ultradźwiękowa na Wybraną Partię Ciała | MAGIC SALON',
    'description' => 'Precyzyjne modelowanie sylwetki w Dobrzykowicach. Liposukcja kawitacyjna na brzuch, uda lub pośladki. Skuteczna redukcja miejscowej tkanki tłuszczowej bez skalpela.',
    'keywords' => 'liposukcja ultradźwiękowa jedna partia, kawitacja brzuch, wyszczuplanie ud, redukcja boczków, bezinwazyjna liposukcja wrocław, modelowanie sylwetki dobrzykowice',
    // Canonical URL dla tej konkretnej usługi
    'canonical' => BASE_URL . '/oferta-liposukcja-ultradzwiekowa-jedna-partia.php',
    'robots' => 'index, follow, max-image-preview:large',
    'og' => [
        'type' => 'website',
        'title' => 'Liposukcja Ultradźwiękowa – Precyzyjne Wyszczuplanie',
        'description' => 'Masz problem z jedną partią ciała? Wybierz liposukcję ultradźwiękową na brzuch, uda lub ramiona. Szybkie efekty bez bólu w Magic Salon.',
        'url' => BASE_URL . '/oferta-liposukcja-ultradzwiekowa-jedna-partia.php',
        'image' => BASE_URL . '/images/oferta-details/liposukcjaultradzwiekowa.jpg', // Zdjęcie konkretnej usługi
    ],
    'twitter' => [
        'card' => 'summary_large_image',
        'title' => 'Liposukcja Ultradźwiękowa (1 partia) - MAGIC SALON',
        'description' => 'Skuteczna walka z miejscowym tłuszczem.',
    ],
    'schema' => [
        'enabled' => true,
        'type' => 'Service',
        'name' => 'Liposukcja Ultradźwiękowa na jedną partię ciała',
        'description' => 'Zabieg wykorzystujący zjawisko kawitacji do rozbijania komórek tłuszczowych w wybranym obszarze ciała (np. brzuch, uda, pośladki).',
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
            'name' => 'Modelowanie Sylwetki',
            'itemListElement' => [
                [
                    '@type' => 'Offer',
                    'itemOffered' => [
                        '@type' => 'Service',
                        'name' => 'Liposukcja Kawitacyjna Brzuch'
                    ]
                ],
                [
                    '@type' => 'Offer',
                    'itemOffered' => [
                        '@type' => 'Service',
                        'name' => 'Liposukcja Kawitacyjna Uda'
                    ]
                ],
                [
                    '@type' => 'Offer',
                    'itemOffered' => [
                        '@type' => 'Service',
                        'name' => 'Liposukcja Kawitacyjna Pośladki'
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
            $page_title = 'Liposukcja Ultradźwiękowa (1 partia)';
            // Unikalny opis wprowadzający do konkretnej usługi
            $page_desc = 'Twoja sylwetka jest prawie idealna, ale jeden obszar spędza Ci sen z powiek? Wybierz celowaną terapię. Liposukcja ultradźwiękowa na jedną partię ciała to skoncentrowana dawka energii, która precyzyjnie uderza w oporne komórki tłuszczowe tam, gdzie jest to najbardziej potrzebne. Niezależnie od tego, czy walczysz z "boczkami", czy chcesz wysmuklić uda – ten zabieg to bezpieczna alternatywa dla skalpela, gwarantująca widoczną redukcję centymetrów w wybranej strefie.';
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
                    'label' => 'Liposukcja (1 partia)', // Element aktywny
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
                                    <img src="../images/oferta-details/liposukcjaultradzwiekowa.jpg" alt="Liposukcja ultradźwiękowa w MAGIC SALON – Nowoczesna Metoda Modelowania Sylwetki" class="img-responsive">
                                </div>
                            </div>
                                            
                                         <!-- WHY IT'S BEST? -->
                                         <div class="col-md-6 col-sm-6">
                                                <div class="text-left m-b10">
                                                   <h3 class="text-uppercase">Liposukcja ultradźwiękowa w MAGIC SALON – Nowoczesna Metoda Modelowania Sylwetki</h3>
                                                   <div class="wt-separator-outer">
                                                       <div class="wt-separator style-icon">
                                                           <i class="fa fa-leaf text-black"></i>
                                                           <span class="separator-left site-bg-primary"></span>
                                                           <span class="separator-right site-bg-primary"></span>
                                                       </div>                            
                                                   </div>
                                                </div>
                                                
                                             <p>W MAGIC SALON oferujemy innowacyjne i skuteczne zabiegi z zakresu kosmetologii estetycznej, w tym liposukcję ultradźwiękową – nowoczesną metodę, która pozwala na modelowanie sylwetki i redukcję tkanki tłuszczowej bez konieczności inwazyjnych procedur chirurgicznych. Dzięki zastosowaniu technologii ultradźwiękowej, możemy osiągnąć wyraźne efekty wyszczuplenia i poprawy wyglądu skóry, nie narażając naszych Klientów na ból, ryzyko czy długotrwałą rekonwalescencję. To doskonała alternatywa dla tradycyjnej liposukcji, dająca spektakularne rezultaty bez potrzeby skalpela.</p>

                                            </div>
                                     </div>
                                     
                                     <div class="row">
                                        <!-- OUR OFFER --> 
                                            <div class="col-lg-12 col-md-12 m-b30 text-left">
                                                <h3 class="text-uppercase">Czym jest Liposukcja Ultradźwiękowa?</h3>
                                                <p>Liposukcja ultradźwiękowa to bezinwazyjny zabieg, który wykorzystuje falę ultradźwiękową do precyzyjnego rozbicia cząsteczek tłuszczu w obrębie problematycznych partii ciała. Energia ultradźwiękowa wnika w głąb skóry, rozbijając tkankę tłuszczową na mniejsze cząsteczki, które następnie są naturalnie usuwane przez układ limfatyczny. Dzięki tej technologii możliwe jest skuteczne modelowanie sylwetki, usuwanie nadmiaru tłuszczu oraz poprawa jędrności skóry – wszystko bez konieczności przeprowadzania operacji chirurgicznej.</p>
                                                <p>Zabieg liposukcji ultradźwiękowej jest szybki, bezbolesny i bezpieczny. Działa na poziomie komórek tłuszczowych, co pozwala na uzyskanie precyzyjnych efektów w problematycznych miejscach, takich jak brzuch, uda, pośladki czy ramiona.</p>
                                         </div>
                                        <div class="col-lg-12 col-md-12 m-b30 text-left">
                                                <h3 class="text-uppercase">Korzyści z Zabiegu Liposukcji Ultradźwiękowej w MAGIC SALON</h3>
                                                <p>1.	Bezinwazyjność i Bezbolesność – Zabieg liposukcji ultradźwiękowej jest całkowicie bezinwazyjny. Nie wymaga stosowania skalpela ani znieczulenia. Jest bezbolesny, a Klientki mogą wrócić do codziennych obowiązków od razu po zabiegu.<br>2.	Redukcja Tkanki Tłuszczowej – Dzięki technologii ultradźwiękowej tłuszcz w obszarze poddanym zabiegowi jest rozbity i usunięty z organizmu, co prowadzi do wyraźnej redukcji objętości ciała w problematycznych miejscach.<br>3.	Poprawa Konturu Ciała – Liposukcja ultradźwiękowa skutecznie modeluje sylwetkę, przywracając jej smukłość i proporcjonalność. Dzięki zabiegowi możesz cieszyć się lepszymi konturami w obszarach, które wcześniej były obciążone nadmiarem tłuszczu.<br>4.	Stymulacja Produkcji Kolagenu – Fale ultradźwiękowe wpływają nie tylko na redukcję tłuszczu, ale także stymulują produkcję kolagenu w skórze, co poprawia jej jędrność i elastyczność. Efektem tego jest wygładzenie skóry, która staje się bardziej napięta i sprężysta.<br>5.	Brak Czasu Rekonwalescencji – Po zabiegu nie ma potrzeby przechodzenia długotrwałej rekonwalescencji. Możesz od razu wrócić do swojej codziennej rutyny. Jedyny wymóg to odpowiednia pielęgnacja skóry po zabiegu, aby maksymalizować efekty.</p>
                                         </div>
                                        <div class="col-lg-12 col-md-12 m-b30 text-left">
                                                <h3 class="text-uppercase">Jak Przebiega Zabieg Liposukcji Ultradźwiękowej w MAGIC SALON?</h3>
                                                <p>1.	Konsultacja Przedzabiegowa – Przed przystąpieniem do zabiegu, w MAGIC SALON przeprowadzamy dokładną konsultację. Nasz kosmetolog zbiera informacje o Twoich oczekiwaniach i stanie zdrowia, aby dostosować zabieg do Twoich indywidualnych potrzeb.<br>2.	Przygotowanie Skóry – Po konsultacji skóra w obszarze, który ma zostać poddany zabiegowi, jest oczyszczana i przygotowywana do działania ultradźwięków. Na skórę może zostać nałożony specjalny żel, który umożliwia skuteczne przenikanie fal ultradźwiękowych.<br>3.	Zabieg – Urządzenie do liposukcji ultradźwiękowej wytwarza fale ultradźwiękowe, które są kierowane na wybrany obszar ciała. Fale te rozbijają komórki tłuszczowe, które następnie są naturalnie usuwane z organizmu.<br>4.	Po zabiegu – Po zakończeniu zabiegu nie jest wymagana długa rekonwalescencja. Klientka może natychmiast wrócić do codziennych aktywności. Jednak zaleca się picie dużej ilości wody, aby wspomóc proces detoksykacji organizmu.</p>
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
                                                <h3 class="text-uppercase">Dlaczego Warto Wybrać Liposukcję Ultradźwiękową w MAGIC SALON?</h3>
                                                <p>1.	Nowoczesna Technologia – Korzystamy z najnowszych urządzeń i technologii, które gwarantują wysoką skuteczność zabiegu oraz pełne bezpieczeństwo. Nasze urządzenia są sprawdzone i przetestowane, a zabiegi wykonują wykwalifikowani specjaliści.<br>2.	Indywidualne Podejście – W MAGIC SALON dokładamy wszelkich starań, aby każde spotkanie z naszymi Klientkami było wyjątkowe. Dlatego dostosowujemy zabieg do indywidualnych potrzeb i oczekiwań, aby uzyskać jak najlepsze efekty.<br>3.	Bezpieczeństwo i Komfort – Liposukcja ultradźwiękowa w naszym salonie jest bezpieczna i komfortowa. Dzięki bezinwazyjnej metodzie nie ma potrzeby obawiania się o skutki uboczne czy długotrwałą rekonwalescencję.<br>4.	Szybkie Efekty – Jednym z głównych atutów liposukcji ultradźwiękowej jest to, że efekty są widoczne już po kilku zabiegach. Skóra staje się gładsza, jędrniejsza, a sylwetka smuklejsza i bardziej proporcjonalna.</p>
                                         </div>
                                     </div>
                                     
                                    <div class="row">
                                        <!-- OUR OFFER --> 
                                         <div class="col-md-6 col-sm-6">
                                                <div class="text-left m-b10">
                                                     <h3 class="text-uppercase">Podsumowanie</h3>
                                                     <div class="wt-separator-outer">
                                                       <div class="wt-separator style-icon">
                                                           <i class="fa fa-leaf text-black"></i>
                                                           <span class="separator-left site-bg-primary"></span>
                                                           <span class="separator-right site-bg-primary"></span>
                                                       </div>                            
                                                    </div>
                                                 </div>
                                                <div>
                                                    <p>Liposukcja ultradźwiękowa to nowoczesna, bezinwazyjna metoda, która pomaga w modelowaniu sylwetki, redukcji tkanki tłuszczowej oraz poprawie wyglądu skóry. Dzięki tej technologii, w MAGIC SALON oferujemy skuteczny sposób na uzyskanie smuklejszej sylwetki bez ryzyka, bólu czy długiej rekonwalescencji. Jeżeli marzysz o gładkiej, jędrnej skórze i smukłej sylwetce, liposukcja ultradźwiękowa to idealne rozwiązanie dla Ciebie.</p>
                                                </div>
                                            </div>
                                            
                                         <!-- WHY IT'S BEST? -->
                                         <div class="col-md-6 col-sm-6">
                                                <div class="text-left m-b10">
                                                   <h3 class="text-uppercase">Umów się na zabieg Liposukcji Ultradźwiękowej w MAGIC SALON!</h3>
                                                   <div class="wt-separator-outer">
                                                       <div class="wt-separator style-icon">
                                                           <i class="fa fa-leaf text-black"></i>
                                                           <span class="separator-left site-bg-primary"></span>
                                                           <span class="separator-right site-bg-primary"></span>
                                                       </div>                            
                                                   </div>
                                                </div>
                                             <p>Ciesz się smukłą sylwetką i jędrną skórą dzięki liposukcji ultradźwiękowej!</p>
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
                                                <a href="../images/gallery/architektura-i-laminacja-brwi/pic1.jpg" class="mfp-link" ><img src="../images/gallery/architektura-i-laminacja-brwi/thumb/pic1.jpg" alt="Galeria zdjęć zabiegu Liposukcja ultradźwiękowa"></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wt-post-thum ">
                                                <a href="../images/gallery/architektura-i-laminacja-brwi/pic2.jpg" class="mfp-link"><img src="../images/gallery/architektura-i-laminacja-brwi/thumb/pic2.jpg" alt="Galeria zdjęć zabiegu Liposukcja ultradźwiękowa"></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wt-post-thum  ">
                                                <a href="../images/gallery/architektura-i-laminacja-brwi/pic3.jpg" class="mfp-link"><img src="../images/gallery/architektura-i-laminacja-brwi/thumb/pic3.jpg" alt="Galeria zdjęć zabiegu Liposukcja ultradźwiękowa"></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wt-post-thum ">
                                                <a href="../images/gallery/architektura-i-laminacja-brwi/pic4.jpg" class="mfp-link"><img src="../images/gallery/architektura-i-laminacja-brwi/thumb/pic4.jpg" alt="Galeria zdjęć zabiegu Liposukcja ultradźwiękowa"></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wt-post-thum ">
                                                <a href="../images/gallery/architektura-i-laminacja-brwi/pic5.jpg" class="mfp-link"><img src="../images/gallery/architektura-i-laminacja-brwi/thumb/pic5.jpg" alt="Galeria zdjęć zabiegu Liposukcja ultradźwiękowa"></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wt-post-thum ">
                                                <a href="../images/gallery/architektura-i-laminacja-brwi/pic6.jpg" class="mfp-link"><img src="../images/gallery/architektura-i-laminacja-brwi/thumb/pic6.jpg" alt="Galeria zdjęć zabiegu Liposukcja ultradźwiękowa"></a>
                                            </div>
                                        </li>
                                        
                                        <li>
                                            <div class="wt-post-thum ">
                                                <a href="../images/gallery/architektura-i-laminacja-brwi/pic7.jpg" class="mfp-link"><img src="../images/gallery/architektura-i-laminacja-brwi/thumb/pic7.jpg" alt="Galeria zdjęć zabiegu Liposukcja ultradźwiękowa"></a>
                                            </div>
                                        </li>
                                        
                                        <li>
                                            <div class="wt-post-thum ">
                                                <a href="../images/gallery/architektura-i-laminacja-brwi/pic8.jpg" class="mfp-link"><img src="../images/gallery/architektura-i-laminacja-brwi/thumb/pic8.jpg" alt="Galeria zdjęć zabiegu Liposukcja ultradźwiękowa"></a>
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
            
        <!-- CONTENT END -->
        </div>
        <!-- CONTENT END -->
        
        <!-- Footer -->
        <?php include 'partials/footer.php'; ?>

</body>

</html>
