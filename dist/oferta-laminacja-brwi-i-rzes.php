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
                            <div class="col-lg-9 col-md-12 m-b30 animate shake animated">
                       			<!-- BLOG POST CAROUSEL -->
                                
                                 <!-- SERVICES SITE -->
                                 <div class="p-lr15">
                                     
                                        <div class="row">
                                        <!-- OUR OFFER --> 
                                            <div class="col-lg-6 col-md-8 m-b30 animate flash animated">
                                <div class="about-com-pic">
                                    <img src="../images/oferta-details/architekturilaminacjarwi.jpg" alt="Architektura i Laminacja Brwi w MAGIC SALON – Wyraziste i Piękne Brwi na Długi Czas" class="img-responsive">
                                </div>
                            </div>
                                            
                                         <!-- WHY IT'S BEST? -->
                                         <div class="col-md-6 col-sm-6 animate bounceInLeft animated">
                                                <div class="text-left m-b10">
                                                   <h3 class="text-uppercase">Architektura i Laminacja Brwi w MAGIC SALON – Wyraziste i Piękne Brwi na Długi Czas</h3>
                                                   <div class="wt-separator-outer">
                                                       <div class="wt-separator style-icon">
                                                           <i class="fa fa-leaf text-black"></i>
                                                           <span class="separator-left site-bg-primary"></span>
                                                           <span class="separator-right site-bg-primary"></span>
                                                       </div>                            
                                                   </div>
                                                </div>
                                                
                                             <p>Brwi są jednym z najważniejszych elementów twarzy, które wpływają na nasz wygląd, dodając charakteru i wyrazistości. W MAGIC SALON rozumiemy, jak ważne jest, aby brwi były odpowiednio ukształtowane i zadbane. Nasza oferta architektury i laminacji brwi pozwala uzyskać perfekcyjny kształt, pełną objętość i idealny kolor, który będzie harmonizował z naturalnymi rysami twarzy. Dzięki naszym profesjonalnym zabiegom, Twoje brwi będą wyglądały zawsze perfekcyjnie, bez konieczności codziennego malowania czy stylizacji.</p>

                                            </div>
                                     </div>
                                     
                                     <div class="row">
                                        <!-- OUR OFFER --> 
                                            <div class="col-lg-12 col-md-12 m-b30 text-left animate bounceInLeft animated">
                                                <h3 class="text-uppercase">Architektura Brwi – Idealny Kształt i Precyzyjne Modelowanie</h3>
                                                <p>Zabieg architektury brwi polega na profesjonalnym podkreśleniu naturalnego kształtu brwi poprzez ich dokładne wyregulowanie. Podczas zabiegu korzystamy z różnych technik, takich jak depilacja woskiem, pęsetą, aby usunąć zbędne włoski, które mogą zaburzać ich naturalny wygląd. Dobieramy odpowiedni kształt brwi, który pasuje do Twojej twarzy, uwzględniając jej rysy oraz Twoje indywidualne preferencje. Celem zabiegu jest uzyskanie równych, symetrycznych i harmonijnych brwi, które dodadzą Twojej twarzy wyrazistości i elegancji.</p>
                                         </div>
                                        <div class="col-lg-12 col-md-12 m-b30 text-left animate bounceInLeft animated">
                                                <h3 class="text-uppercase">Laminacja Brwi – Gładkie, Lśniące i Upiększone Brwi</h3>
                                                <p>Laminacja brwi to innowacyjna metoda, która zyskuje coraz większą popularność. Zabieg ten ma na celu wygładzenie, nadanie objętości oraz utrwalenie brwi w pożądanym kształcie. Dzięki laminacji włoski brwi stają się bardziej elastyczne, gęste i błyszczące, a także utrzymują idealny kształt przez długi czas, nawet do kilku tygodni. Laminacja jest szczególnie polecana osobom, które mają niesforne, cienkie lub rzadkie brwi, ponieważ zabieg skutecznie poprawia ich wygląd, nadając im pełniejszy i bardziej zadbany wygląd. W zależności od potrzeb, możemy zastosować także specjalną hennę lub farbkę, które dodatkowo podkreślają kolor brwi, zapewniając trwały efekt.</p>
                                         </div>
                                        <div class="col-lg-12 col-md-12 m-b30 text-left animate bounceInLeft animated">
                                                <h3 class="text-uppercase">Zabieg Architektury i Laminacji Brwi z Henną lub Farbą – Piękne Brwi bez Codziennego Malowania</h3>
                                                <p>Jeśli chcesz, aby Twoje brwi były jeszcze bardziej wyraziste i pełne koloru, oferujemy zabieg architektury i laminacji brwi połączony z henną lub farbką. Zabieg ten zapewnia intensywny kolor, który utrzymuje się przez długi czas, bez konieczności codziennego malowania brwi. Henna jest naturalnym barwnikiem, który idealnie wkomponowuje się w kolor włosów i skóry, natomiast farbka daje bardziej wyrazisty efekt. Dzięki tej kombinacji, Twoje brwi zyskają perfekcyjny kształt, pełny kolor oraz niesamowitą trwałość. To idealne rozwiązanie dla osób, które pragną zaoszczędzić czas na codziennej stylizacji brwi i cieszyć się ich pięknym wyglądem przez długie tygodnie.</p>
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
                                                            <h4 class="post-title"><a href="depilacja-woskiem.html" title="Video post">Depilacja woskiem</a></h4>
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
                                                            <h4 class="post-title"><a href="dermomasaz.html" title="Video post">Dermomasaż podciśnienowy</a></h4>
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
                                                            <h4 class="post-title"><a href="epilacja-laserowa.html" title="Video post">Epilacja laserowa</a></h4>
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
                                                            <h4 class="post-title"><a href="glow-lift.html" title="Video post">Glow & Lift</a></h4>
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
                                                            <h4 class="post-title"><a href="lifting-i-laminacja-rzes.html" title="Video post">Lifting i laminacja rzęs</a></h4>
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
                                            <div class="col-lg-12 col-md-8 m-b30 text-left animate bounceInRight animated">
                                                <h3 class="text-uppercase">Dlaczego Warto Skorzystać z Usługi Architektury i Laminacji Brwi w MAGIC SALON?</h3>
                                                <p>1.	Profesjonalizm i Doświadczenie – Nasi specjaliści w MAGIC SALON posiadają wiedzę i doświadczenie niezbędne do precyzyjnego przeprowadzenia zabiegu architektury i laminacji brwi. Dzięki temu, możesz mieć pewność, że Twoje brwi będą wyglądały naturalnie i harmonijnie, pasując do kształtu Twojej twarzy.<br>2.	Indywidualne Podejście – Każda twarz jest inna, dlatego dostosowujemy zabieg do Twoich indywidualnych potrzeb. Kształt brwi, ich długość, a także kolor są dobierane zgodnie z Twoimi preferencjami oraz unikalnymi cechami twarzy.<br>3.	Długotrwały Efekt – Laminacja brwi, w połączeniu z henną lub farbą, zapewnia długotrwały efekt, dzięki czemu nie musisz martwić się o codzienne malowanie brwi. Włosy stają się bardziej lśniące, gęste, a kształt brwi utrzymuje się przez kilka tygodni.<br>4.	Zwiększenie Komfortu Codziennego – Dzięki zabiegowi architektury i laminacji brwi, zaoszczędzisz czas i energię poświęcaną na codzienne malowanie brwi. Twoje brwi będą zawsze wyglądały perfekcyjnie, co pozwoli Ci cieszyć się pięknym wyglądem bez konieczności dodatkowych zabiegów w domu.</p>
                                         </div>
                                     </div>
                                     
                                    <div class="row">
                                        <!-- OUR OFFER --> 
                                         <div class="col-md-6 col-sm-6 animate bounceInRight animated">
                                                <div class="text-left m-b10">
                                                     <h3 class="text-uppercase">Zalety Zabiegu Architektury i Laminacji Brwi:</h3>
                                                     <div class="wt-separator-outer">
                                                       <div class="wt-separator style-icon">
                                                           <i class="fa fa-leaf text-black"></i>
                                                           <span class="separator-left site-bg-primary"></span>
                                                           <span class="separator-right site-bg-primary"></span>
                                                       </div>                            
                                                    </div>
                                                 </div>
                                                <div>
                                                    <p>•	Idealnie dobrany kształt brwi, który pasuje do Twoich rysów twarzy.<br>•	Zwiększenie objętości brwi, które stają się gęstsze i bardziej elastyczne.<br>•	Trwały efekt bez konieczności codziennego malowania.<br>•	Użycie profesjonalnych produktów, takich jak henna i farba, które gwarantują naturalny efekt.<br>•	Poprawa wyglądu brwi, nawet w przypadku cienkich, rzadkich lub niesfornych włosków.</p>
                                                </div>
                                            </div>
                                            
                                         <!-- WHY IT'S BEST? -->
                                         <div class="col-md-6 col-sm-6 animate bounceInRight animated">
                                                <div class="text-left m-b10">
                                                   <h3 class="text-uppercase">Podkreśl Swoje Piękno z MAGIC SALON</h3>
                                                   <div class="wt-separator-outer">
                                                       <div class="wt-separator style-icon">
                                                           <i class="fa fa-leaf text-black"></i>
                                                           <span class="separator-left site-bg-primary"></span>
                                                           <span class="separator-right site-bg-primary"></span>
                                                       </div>                            
                                                   </div>
                                                </div>
                                             <p>MAGIC SALON to miejsce, gdzie Twoje piękno jest w centrum naszej uwagi. Nasz zespół specjalistów zadba o to, aby zabieg architektury i laminacji brwi nie tylko poprawił wygląd Twojej twarzy, ale także zapewnił Ci pełne zadowolenie z efektów. Zaufaj naszym profesjonalistom i ciesz się brwiami, które zawsze będą wyglądały perfekcyjnie!</p>
                                             <p><b>Umów się na wizytę!</b></p>
                                             <p>Chcesz podkreślić naturalne piękno swojej twarzy? Umów się na zabieg architektury i laminacji brwi w MAGIC SALON i ciesz się brwiami, które zachwycą Cię swoją perfekcją i trwałością.</p>

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
                                                <a href="../images/gallery/architektura-i-laminacja-brwi/pic1.jpg" class="mfp-link" ><img src="../images/gallery/architektura-i-laminacja-brwi/thumb/pic1.jpg" alt="Galeria zdjęć zabiegu Architektura i laminacja brwi"></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wt-post-thum ">
                                                <a href="../images/gallery/architektura-i-laminacja-brwi/pic2.jpg" class="mfp-link"><img src="../images/gallery/architektura-i-laminacja-brwi/thumb/pic2.jpg" alt="Galeria zdjęć zabiegu Architektura i laminacja brwi"></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wt-post-thum  ">
                                                <a href="../images/gallery/architektura-i-laminacja-brwi/pic3.jpg" class="mfp-link"><img src="../images/gallery/architektura-i-laminacja-brwi/thumb/pic3.jpg" alt="Galeria zdjęć zabiegu Architektura i laminacja brwi"></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wt-post-thum ">
                                                <a href="../images/gallery/architektura-i-laminacja-brwi/pic4.jpg" class="mfp-link"><img src="../images/gallery/architektura-i-laminacja-brwi/thumb/pic4.jpg" alt="Galeria zdjęć zabiegu Architektura i laminacja brwi"></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wt-post-thum ">
                                                <a href="../images/gallery/architektura-i-laminacja-brwi/pic5.jpg" class="mfp-link"><img src="../images/gallery/architektura-i-laminacja-brwi/thumb/pic5.jpg" alt="Galeria zdjęć zabiegu Architektura i laminacja brwi"></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wt-post-thum ">
                                                <a href="../images/gallery/architektura-i-laminacja-brwi/pic6.jpg" class="mfp-link"><img src="../images/gallery/architektura-i-laminacja-brwi/thumb/pic6.jpg" alt="Galeria zdjęć zabiegu Architektura i laminacja brwi"></a>
                                            </div>
                                        </li>
                                        
                                        <li>
                                            <div class="wt-post-thum ">
                                                <a href="../images/gallery/architektura-i-laminacja-brwi/pic7.jpg" class="mfp-link"><img src="../images/gallery/architektura-i-laminacja-brwi/thumb/pic7.jpg" alt="Galeria zdjęć zabiegu Architektura i laminacja brwi"></a>
                                            </div>
                                        </li>
                                        
                                        <li>
                                            <div class="wt-post-thum ">
                                                <a href="../images/gallery/architektura-i-laminacja-brwi/pic8.jpg" class="mfp-link"><img src="../images/gallery/architektura-i-laminacja-brwi/thumb/pic8.jpg" alt="Galeria zdjęć zabiegu Architektura i laminacja brwi"></a>
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
