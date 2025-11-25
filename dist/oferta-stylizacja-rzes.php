<?php

/**
 * MAGIC SALON - Oferta (oferta.php)
 * Wersja: 2.3 - Zoptymalizowane treści SEO i zmienne dla Oferty
 */

// Załaduj konfigurację
require_once __DIR__ . DIRECTORY_SEPARATOR . 'config.php';

// Konfiguracja meta tagów dla strony Oferty
$meta = [
    'title' => 'Oferta Zabiegów i Cennik Usług | MAGIC SALON Dobrzykowice',
    'description' => 'Poznaj pełną ofertę MAGIC SALON. Nowoczesna kosmetologia, epilacja laserowa, modelowanie sylwetki, stylizacja rzęs i brwi. Sprawdź szczegóły naszych zabiegów i umów wizytę.',
    'keywords' => 'oferta magic salon, zabiegi kosmetyczne dobrzykowice, cennik usług kosmetycznych, epilacja laserowa oferta, zabiegi na twarz wrocław, modelowanie sylwetki cennik',
    'canonical' => BASE_URL . '/oferta.php',
    'robots' => 'index, follow, max-image-preview:large',
    'og' => [
        'type' => 'website',
        'title' => 'Oferta Zabiegów – Piękno i Relaks w MAGIC SALON',
        'description' => 'Kompleksowa pielęgnacja twarzy i ciała. Sprawdź naszą ofertę zabiegową i wybierz idealne rozwiązanie dla siebie.',
        'url' => BASE_URL . '/oferta.php',
        'image' => BASE_URL . '/images/nasza-oferta/glowlift.jpg', // Reprezentatywne zdjęcie usługi
    ],
    'twitter' => [
        'card' => 'summary_large_image',
        'title' => 'Oferta MAGIC SALON – Twoje Piękno w Dobrych Rękach',
        'description' => 'Zobacz jakie zabiegi oferujemy w naszym salonie w Dobrzykowicach.',
    ],
    'schema' => [
        'enabled' => true,
        'type' => 'Service', // Schema dla usług
        'name' => 'Usługi Kosmetyczne MAGIC SALON',
        'description' => 'Szeroki zakres usług kosmetycznych: zabiegi na twarz, ciało, laseroterapia i stylizacja oprawy oka.',
        'provider' => [
            '@type' => 'BeautySalon',
            'name' => 'MAGIC SALON',
            'address' => [
                'streetAddress' => 'ul. Borówkowa 13',
                'postalCode' => '55-002',
                'addressLocality' => 'Dobrzykowice',
                'addressCountry' => 'PL'
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
            // Konfiguracja dynamicznego banera i breadcrumbs dla podstrony Oferta
            $banner_img = 'images/banner/gallery-banner.jpg'; // Jeśli masz dedykowany baner np. 'offer-banner.jpg', użyj go tutaj
            $page_title = 'Nasza Oferta Zabiegowa';
            // Unikalny opis, budujący wizerunek ekspercki i zachęcający do eksploracji usług
            $page_desc = 'W MAGIC SALON łączymy zaawansowane technologie z holistycznym podejściem do pielęgnacji. Nasza oferta to starannie wyselekcjonowane zabiegi na twarz i ciało, które nie tylko poprawiają wygląd, ale także przywracają równowagę i dobre samopoczucie. Niezależnie od tego, czy szukasz spektakularnej metamorfozy, czy chwili głębokiego relaksu – znajdziesz tu rozwiązanie skrojone na miarę Twoich potrzeb.';
            
            $breadcrumbs = [
                [
                    'label' => 'Strona Główna',
                    'url' => 'index.php',
                    'icon' => 'fa fa-home'
                ],
                [
                    'label' => 'Oferta Usług',
                    'url' => '', // Element aktywny
                    'icon' => ''
                ]
            ];
            
            // Załadowanie dedykowanego partiala (korzystamy z wersji breadcrumbs-botttom-header.php dla spójności)
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
                                    <img src="../images/oferta-details/przedluzanieizageszczanierzes.jpg" alt="Przedłużanie i Zagęszczanie Rzęs w MAGIC SALON" class="img-responsive">
                                </div>
                            </div>
                                            
                                         <!-- WHY IT'S BEST? -->
                                         <div class="col-md-6 col-sm-6">
                                                <div class="text-left m-b10">
                                                   <h3 class="text-uppercase">Przedłużanie i Zagęszczanie Rzęs w MAGIC SALON</h3>
                                                   <div class="wt-separator-outer">
                                                       <div class="wt-separator style-icon">
                                                           <i class="fa fa-leaf text-black"></i>
                                                           <span class="separator-left site-bg-primary"></span>
                                                           <span class="separator-right site-bg-primary"></span>
                                                       </div>                            
                                                   </div>
                                                </div>
                                                
                                             <p>Każda kobieta marzy o spojrzeniu, które przyciąga uwagę, podkreśla naturalne piękno i dodaje pewności siebie. W MAGIC SALON oferujemy usługę przedłużania i zagęszczania rzęs, która pozwala uzyskać pełne, gęste i długie rzęsy, które będą wyglądały naturalnie, a jednocześnie efektownie. To idealna propozycja dla kobiet, które pragną oszczędzić czas na codziennym makijażu, a jednocześnie cieszyć się wyrazistym spojrzeniem przez wiele tygodni.</p>
                                             <p>Zabieg przedłużania i zagęszczania rzęs to jedna z najczęściej wybieranych usług w naszym salonie, która cieszy się ogromnym zainteresowaniem. Dzięki zastosowaniu nowoczesnych technik, indywidualnie dopasowanych do kształtu i długości rzęs Klientki, jesteśmy w stanie osiągnąć spektakularny efekt – długie, gęste i naturalnie wyglądające rzęsy.</p>

                                            </div>
                                     </div>
                                     
                                     <div class="row">
                                        <!-- OUR OFFER --> 
                                            <div class="col-lg-12 col-md-12 m-b30 text-left">
                                                <h3 class="text-uppercase">Czym Jest Przedłużanie i Zagęszczanie Rzęs?</h3>
                                                <p>Przedłużanie rzęs to zabieg polegający na doklejeniu do naturalnych rzęs specjalnie dobranych, syntetycznych włosków, które mają na celu ich wydłużenie. Z kolei zagęszczanie rzęs to zabieg polegający na doklejeniu kilku sztuk rzęs do jednej naturalnej, dzięki czemu efekt jest bardziej spektakularny i gęsty.</p>
                                                <p>W MAGIC SALON używamy najwyższej jakości materiałów, które są lekkie i bezpieczne dla naturalnych rzęs. Każda rzęsa jest aplikowana indywidualnie, aby uzyskać jak najbardziej naturalny efekt. Dzięki temu rzęsy są nie tylko długie, ale również zachowują swoją naturalną elastyczność i wygląd.</p>
                                         </div>
                                        <div class="col-lg-12 col-md-12 m-b30 text-left">
                                                <h3 class="text-uppercase">Korzyści z Zabiegu Przedłużania i Zagęszczania Rzęs</h3>
                                                <p>1.	Piękne, wyraziste spojrzenie przez cały dzień – Przedłużenie i zagęszczenie rzęs daje efekt pełnego i intensywnego spojrzenia bez konieczności stosowania maskary. Rzęsy pozostają gęste i podkręcone przez długi czas.<br>2.	Oszczędność czasu – Zapomnij o porannym malowaniu rzęs! Zabieg pozwala zaoszczędzić czas, który normalnie spędzałabyś na aplikacji tuszu do rzęs.<br>3.	Naturalny efekt – W MAGIC SALON stosujemy indywidualne podejście do każdej Klientki. Wybieramy odpowiednią długość, kształt i grubość rzęs, aby efekt był jak najbardziej naturalny, pasujący do kształtu twarzy i oczów.<br>4.	Długotrwały efekt – Rzęsy utrzymują się przez 3-6 tygodni, w zależności od cyklu wzrostu rzęs naturalnych. Można je także regularnie uzupełniać, aby utrzymać pełny efekt.<br>5.	Bezpieczny zabieg – Nasz zespół składa się z doświadczonych profesjonalistów, którzy dbają o bezpieczeństwo i komfort każdej Klientki. Zabieg jest przeprowadzany z zachowaniem wszelkich standardów higieny, a używane produkty są hypoalergiczne i bezpieczne.</p>
                                         </div>
                                        <div class="col-lg-12 col-md-12 m-b30 text-left">
                                                <h3 class="text-uppercase">Jak Przebiega Zabieg Przedłużania i Zagęszczania Rzęs w MAGIC SALON?</h3>
                                                <p>1.	Konsultacja – Na początku zabiegu przeprowadzamy konsultację, aby określić, jakie efekty chciałabyś uzyskać. Wspólnie wybieramy odpowiednią długość, grubość oraz rodzaj rzęs, które najlepiej pasują do Twoich oczekiwań i naturalnych rzęs.<br>2.	Przygotowanie – Następnie przechodzimy do przygotowania rzęs do zabiegu. Oczy są dokładnie oczyszczane, a skóra wokół oczu zabezpieczona, aby zapobiec podrażnieniom.<br>3.	Aplikacja – W zależności od wybranej metody, rzęsy są aplikowane pojedynczo lub w grupach, za pomocą specjalnego kleju, który zapewnia trwałość efektu przez długi czas.<br>4.	Zakończenie – Po zakończeniu zabiegu rzęsy są dokładnie sprawdzane i korygowane, aby uzyskać perfekcyjny efekt. Cały proces trwa zazwyczaj 1,5 do 2 godzin, w zależności od wybranego efektu.</p>
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
                                                            <h4 class="post-title"><a href="architektura-i-laminacja-brwi.html" title="Architektura i laminacja brwi">Architektura i laminacja brwi</a></h4>
                                                        </div>
                                                        <div class="ow-post-text">
                                                            <p>Modelowanie brwi dopasowane do kształtu twarzy oraz indywidualnych preferencji klientki. Efekt? Wyrazista, naturalna oprawa oka.</p>
                                                        </div>
                                                        <div class="ow-post-readmore "> 
                                                            <a href="architektura-i-laminacja-brwi.html" title="CZYTAJ WIĘCEJ" rel="bookmark" class=" site-button-link"> CZYTAJ WIĘCEJ  <i class="fa fa-angle-double-right"></i></a> 
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
                                                            <h4 class="post-title"><a href="depilacja-woskiem.html" title="Depilacja woskiem">Depilacja woskiem</a></h4>
                                                        </div>
                                                        <div class="ow-post-text">
                                                            <p>Sprawdzona metoda usuwania owłosienia z natychmiastowym efektem. Zabieg przeprowadzany z dbałością o komfort i higienę.</p>
                                                        </div>
                                                        <div class="ow-post-readmore "> 
                                                            <a href="depilacja-woskiem.html" title="CZYTAJ WIĘCEJ" rel="bookmark" class=" site-button-link"> CZYTAJ WIĘCEJ  <i class="fa fa-angle-double-right"></i></a> 
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
                                                            <h4 class="post-title"><a href="dermomasaz.html" title="Dermomasaż podciśnienowy">Dermomasaż podciśnienowy</a></h4>
                                                        </div>
                                                        <div class="ow-post-text">
                                                            <p>Zabieg łączący masaż próżniowy z terapią antycellulitową. Stymuluje krążenie, ujędrnia skórę i poprawia metabolizm komórkowy.</p>
                                                        </div>
                                                        <div class="ow-post-readmore "> 
                                                            <a href="dermomasaz.html" title="CZYTAJ WIĘCEJ" rel="bookmark" class=" site-button-link"> CZYTAJ WIĘCEJ  <i class="fa fa-angle-double-right"></i></a> 
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
                                                            <h4 class="post-title"><a href="epilacja-laserowa.html" title="Epilacja laserowa">Epilacja laserowa</a></h4>
                                                        </div>
                                                        <div class="ow-post-text">
                                                            <p>Nowoczesna metoda depilacji zapewniająca trwały efekt gładkiej skóry. Skuteczna zarówno dla kobiet, jak i mężczyzn – bez podrażnień i wrastających włosków.</p>
                                                        </div>
                                                        <div class="ow-post-readmore "> 
                                                            <a href="epilacja-laserowa.html" title="CZYTAJ WIĘCEJ" rel="bookmark" class=" site-button-link"> CZYTAJ WIĘCEJ  <i class="fa fa-angle-double-right"></i></a> 
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
                                                            <h4 class="post-title"><a href="glow-lift.html" title="Glow & Lift">Glow & Lift</a></h4>
                                                        </div>
                                                        <div class="ow-post-text">
                                                            <p>Zabieg stworzony z myślą o osobach, które pragną natychmiastowego efektu liftingu, rozświetlenia i ujędrnienia skóry. Dzięki wykorzystaniu nowoczesnych technologii stymulujemy produkcję kolagenu i elastyny, co przekłada się na młodszy i zdrowszy wygląd.</p>
                                                        </div>
                                                        <div class="ow-post-readmore "> 
                                                            <a href="glow-lift.html" title="CZYTAJ WIĘCEJ" rel="bookmark" class=" site-button-link"> CZYTAJ WIĘCEJ  <i class="fa fa-angle-double-right"></i></a> 
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
                                                            <h4 class="post-title"><a href="lifting-i-laminacja-rzes.html" title="Lifting i laminacja rzęs">Lifting i laminacja rzęs</a></h4>
                                                        </div>
                                                        <div class="ow-post-text">
                                                            <p>Zabieg podkreślający naturalne piękno rzęs – uniesione, pogrubione i zadbane rzęsy bez użycia tuszu.</p>
                                                        </div>
                                                        <div class="ow-post-readmore "> 
                                                            <a href="lifting-i-laminacja-rzes.html" title="CZYTAJ WIĘCEJ" rel="bookmark" class=" site-button-link"> CZYTAJ WIĘCEJ  <i class="fa fa-angle-double-right"></i></a> 
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
                                                <h3 class="text-uppercase">Rodzaje Przedłużania i Zagęszczania Rzęs</h3>
                                                <p>1.	Przedłużanie rzęs metodą 1:1 – Jest to klasyczna metoda, w której jedna sztuka sztucznych rzęs jest aplikowana na jedną naturalną rzęsę. Efekt jest naturalny, idealny dla osób, które preferują subtelne, ale widoczne przedłużenie rzęs.<br>2.	Metoda 2D, 3D i 4D (objętościowe przedłużanie rzęs) – W tej metodzie kilka rzęs (dwie, trzy lub cztery) jest aplikowanych na jedną naturalną rzęsę, co daje efekt pełniejszych, gęstszych rzęs. To doskonały wybór dla osób, które pragną uzyskać bardziej spektakularny efekt.<br>3.	Lash Lift i Lash Botox – Zabiegi alternatywne, które podkręcają, zagęszczają i pielęgnują naturalne rzęsy, bez konieczności doklejania sztucznych włosków.</p>
                                         </div>
                                     </div>
                                     
                                    <div class="row">
                                        <!-- OUR OFFER --> 
                                         <div class="col-md-6 col-sm-6">
                                                <div class="text-left m-b10">
                                                     <h3 class="text-uppercase">Dlaczego Warto Wybrać Przedłużanie i Zagęszczanie Rzęs w MAGIC SALON?</h3>
                                                     <div class="wt-separator-outer">
                                                       <div class="wt-separator style-icon">
                                                           <i class="fa fa-leaf text-black"></i>
                                                           <span class="separator-left site-bg-primary"></span>
                                                           <span class="separator-right site-bg-primary"></span>
                                                       </div>                            
                                                    </div>
                                                 </div>
                                                <div>
                                                    <p>1.	Doświadczeni profesjonaliści – Nasz zespół to wykwalifikowane kosmetyczki, które posiadają wieloletnie doświadczenie w przeprowadzaniu zabiegów przedłużania i zagęszczania rzęs. Pracujemy z najwyższą starannością, dbając o każdy szczegół.<br>2.	Indywidualne podejście – Każda Klientka jest dla nas wyjątkowa. Z tego względu przed zabiegiem przeprowadzamy dokładną konsultację, aby dopasować efekt do Twoich oczekiwań i naturalnych rzęs.<br>3.	Bezpieczne produkty – W naszym salonie używamy tylko najlepszych, hipoalergicznych materiałów do przedłużania rzęs, które są bezpieczne i delikatne dla skóry. Gwarantujemy, że zabieg będzie komfortowy i bezpieczny.<br>4.	Efekty, które zachwycają – Z nami możesz cieszyć się pięknymi, gęstymi rzęsami przez długi czas. Efekty są naturalne, a zarazem spektakularne, dając Ci spojrzenie, które nigdy nie przestanie przyciągać wzrok.</p>
                                                </div>
                                            </div>
                                            
                                         <!-- WHY IT'S BEST? -->
                                         <div class="col-md-6 col-sm-6">
                                                <div class="text-left m-b10">
                                                   <h3 class="text-uppercase">Zarezerwuj wizytę na przedłużanie rzęs już teraz!</h3>
                                                   <div class="wt-separator-outer">
                                                       <div class="wt-separator style-icon">
                                                           <i class="fa fa-leaf text-black"></i>
                                                           <span class="separator-left site-bg-primary"></span>
                                                           <span class="separator-right site-bg-primary"></span>
                                                       </div>                            
                                                   </div>
                                                </div>
                                             <p>Chcesz uzyskać perfekcyjnie długie i gęste rzęsy? Zadzwoń lub napisz do nas, aby umówić się na zabieg. Czekamy na Ciebie w MAGIC SALON!</p>
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
                                      <li><a href="epilacja-laserowa.html">Epilacja laserowa</a></li>
                                      <li><a href="peeling-kawitacyjny.html">Peeling kawitacyjny</a></li>
                                      <li><a href="lifting-i-laminacja-rzes.html">Lifting i laminacja rzęs</a></li>
                                      <li><a href="architektura-i-laminacja-brwi.html">Architektura i laminacja brwi</a></li>
                                      <li><a href="detox-drenaz.html">Detox & Drenaż</a></li>
                                      <li><a href="modelowanie-360.html">Glow & Lift</a></li>
                                    <li><a href="modelowanie-360.html">Modelowanie 360°</a></li>
                                    <li><a href="dermomasaz.html">Dermomasaż</a></li>
                                    <li><a href="liposukcja-ultradzwiekowa.html">Liposukcja ultradźwiękowa</a></li>
                                    <li><a href="lipolaser-duo.html">Lipolaser DUO</a></li>
                                    <li><a href="silkroll.html">SilkRoll</a></li>
                                    <li><a href="depilacja-woskiem.html">Depilacja woskiem</a></li>
                                    <li><a href="przedluzanie-i-zageszczanie-rzes.html">Przedłużanie i zagęszczanie rzęs</a></li>
                                    </ul>
                                </div>
                                <!-- OUR SERVICES -->
                                <div class="widget widget_gallery mfp-gallery">
                                    <h5 class="widget-title">Galeria zdjęć zabiegu</h5>
                                    <ul>
                                        <li>
                                            <div class="wt-post-thum">
                                                <a href="../images/gallery/silkroll/pic1.jpg" class="mfp-link" ><img src="../images/gallery/silkroll/thumb/pic1.jpg" alt="Galeria zdjęć zabiegu Przedłużanie i Zagęszczanie Rzęs"></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wt-post-thum ">
                                                <a href="../images/gallery/silkroll/pic2.jpg" class="mfp-link"><img src="../images/gallery/silkroll/thumb/pic2.jpg" alt="Galeria zdjęć zabiegu Przedłużanie i Zagęszczanie Rzęs"></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wt-post-thum  ">
                                                <a href="../images/gallery/silkroll/pic3.jpg" class="mfp-link"><img src="../images/gallery/silkroll/thumb/pic3.jpg" alt="Galeria zdjęć zabiegu Przedłużanie i Zagęszczanie Rzęs"></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wt-post-thum ">
                                                <a href="../images/gallery/silkroll/pic4.jpg" class="mfp-link"><img src="../images/gallery/silkroll/thumb/pic4.jpg" alt="Galeria zdjęć zabiegu Przedłużanie i Zagęszczanie Rzęs"></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wt-post-thum ">
                                                <a href="../images/gallery/silkroll/pic5.jpg" class="mfp-link"><img src="../images/gallery/silkroll/thumb/pic5.jpg" alt="Galeria zdjęć zabiegu Przedłużanie i Zagęszczanie Rzęs"></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wt-post-thum ">
                                                <a href="../images/gallery/silkroll/pic6.jpg" class="mfp-link"><img src="../images/gallery/silkroll/thumb/pic6.jpg" alt="Galeria zdjęć zabiegu Przedłużanie i Zagęszczanie Rzęs"></a>
                                            </div>
                                        </li>
                                        
                                        <li>
                                            <div class="wt-post-thum ">
                                                <a href="../images/gallery/silkroll/pic7.jpg" class="mfp-link"><img src="../images/gallery/silkroll/thumb/pic7.jpg" alt="Galeria zdjęć zabiegu Przedłużanie i Zagęszczanie Rzęs"></a>
                                            </div>
                                        </li>
                                        
                                        <li>
                                            <div class="wt-post-thum ">
                                                <a href="../images/gallery/silkroll/pic8.jpg" class="mfp-link"><img src="../images/gallery/silkroll/thumb/pic8.jpg" alt="Galeria zdjęć zabiegu Przedłużanie i Zagęszczanie Rzęs"></a>
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
            <div class="section-full p-t50 p-b10 overlay-wraper site-bg-primary bg-repeat" style="background-image:url(images/background/bg-7.png);">
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
