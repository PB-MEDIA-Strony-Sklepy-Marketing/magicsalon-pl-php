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
        <div class="page-content bg-white">
        
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
            
            <!-- ABOUT COMPANY SECTION START -->
            <div class="section-full p-t80">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 m-b30">
                                <div class="section-head text-center">
                                    <h3 class="text-uppercase">Zabiegi na twarz - MAGIC SALON – Zarezerwuj wizytę już dziś i odkryj piękno, które w Tobie drzemie!</h3>
                                    <div class="wt-separator-outer">
                                        <div class="wt-separator style-icon">
                                            <i class="fa fa-leaf text-black"></i>
                                            <span class="separator-left site-bg-primary"></span>
                                            <span class="separator-right site-bg-primary"></span>
                                        </div>                            
                                    </div>
                                    <p style="max-width:100%">Witaj w świecie piękna i profesjonalnej pielęgnacji skóry twarzy w MAGIC SALON – miejscu, gdzie estetyka spotyka się z zaawansowaną technologią, a każda wizyta staje się wyjątkowym doświadczeniem. Nasze zabiegi na twarz zostały stworzone z myślą o kobietach i mężczyznach, którzy oczekują najwyższej jakości usług, widocznych rezultatów i indywidualnego podejścia.
                                    </p>
                                    <p style="max-width:100%">Twoja twarz to Twoja wizytówka. Zadbana, promienna i zdrowa cera nie tylko dodaje pewności siebie, ale także wpływa na ogólne samopoczucie i wizerunek. Dlatego w MAGIC SALON przykładamy ogromną wagę do każdego szczegółu – od precyzyjnej diagnostyki skóry, przez dobór odpowiednich metod, aż po finalny efekt zabiegu. Naszym celem jest nie tylko poprawa wyglądu, ale także odbudowa komfortu, równowagi i naturalnego blasku.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- ABOUT COMPANY SECTION END -->
            
            <!-- SECTION CONTENT -->         
            <div class="section-full p-b50">
                <div class="container">
                	<!-- TITLE START -->
                    <div class="section-head text-center">
                            <h3 class="text-uppercase">Zasługujesz na najlepsze</h3>
                            <div class="wt-separator-outer">
                               <div class="wt-separator style-icon">
                                   <i class="fa fa-leaf text-black"></i>
                                   <span class="separator-left site-bg-primary"></span>
                                   <span class="separator-right site-bg-primary"></span>
                               </div>                            
                           </div>
                            <p style="max-width:100%">MAGIC SALON to coś więcej niż zwykły salon kosmetyczny. To miejsce, w którym każdy zabieg jest rytuałem – Twoją chwilą relaksu, regeneracji i metamorfozy. Zaufaj nam i przekonaj się, jak wiele może zmienić odpowiednio dobrana pielęgnacja twarzy. Zarezerwuj wizytę już dziś i odkryj piękno, które w Tobie drzemie!</p>
                        </div>
                    <!-- TITLE END -->     
                    <div class="section-content">
                        <div class="row">
                        
                            <!-- COLUMNS 1 --> 
                            <div class="col-lg-4 col-md-6 m-b30 animate bounceInLeft animated">
                                <div class="wt-box bg-white">
                                    <div class="wt-media wt-thum-bx wt-img-effect off-color">
                                        <a href="../nasza-oferta/glow-lift.php"><img src="../images/nasza-oferta/glowlift.jpg" alt="Glow & Lift – Lifting i rozświetlenie twarzy"></a>
                                    </div>
                                    <div class="wt-info p-a30 bg-gray">
                                        <h4 class="wt-title m-t0"><a href="../nasza-oferta/glow-lift.php">Glow & Lift – Lifting i rozświetlenie twarzy</a></h4>
                                        <p>Zabieg stworzony z myślą o osobach, które pragną natychmiastowego efektu liftingu, rozświetlenia i ujędrnienia skóry. Dzięki wykorzystaniu nowoczesnych technologii stymulujemy produkcję kolagenu i elastyny, co przekłada się na młodszy i zdrowszy wygląd.</p>
                                        <a href="../nasza-oferta/glow-lift.php" class="site-button ">Czytaj więcej <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 3 -->
                            <div class="col-lg-4 col-md-6 m-b30 animate bounceInLeft animated">
                                <div class="wt-box bg-white">
                                    <div class="wt-media wt-thum-bx wt-img-effect off-color">
                                        <a href="../nasza-oferta/silkroll.php"><img src="../images/nasza-oferta/silkroll.jpg" alt="SilkRoll – wygładzenie i regeneracja"></a>
                                    </div>
                                    <div class="wt-info p-a30 bg-gray">
                                        <h4 class="wt-title m-t0"><a href="../nasza-oferta/silkroll.php">SilkRoll – wygładzenie i regeneracja</a></h4>
                                        <p>To luksusowy zabieg dla skóry zmęczonej i pozbawionej blasku. Dzięki mikromasażowi oraz regenerującym składnikom aktywnym, skóra staje się jedwabiście gładka, nawilżona i pełna energii.</p>
                                        <a href="../nasza-oferta/silkroll.php" class="site-button ">Czytaj więcej <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 10 -->
                            <div class="col-lg-4 col-md-6 m-b30 animate rotateIn animated">
                                <div class="wt-box bg-white">
                                    <div class="wt-media wt-thum-bx wt-img-effect off-color">
                                        <a href="../nasza-oferta/architektura-i-laminacja-brwi.php"><img src="../images/nasza-oferta/architekturalaminacjabrwi.jpg" alt="Architektura i laminacja brwi"></a>
                                    </div>
                                    <div class="wt-info p-a30 bg-gray">
                                        <h4 class="wt-title m-t0"><a href="../nasza-oferta/architektura-i-laminacja-brwi.php">Architektura i laminacja brwi</a></h4>
                                        <p>Modelowanie brwi dopasowane do kształtu twarzy oraz indywidualnych preferencji klientki. Efekt? Wyrazista, naturalna oprawa oka.</p>
                                        <a href="../nasza-oferta/architektura-i-laminacja-brwi.php" class="site-button ">Czytaj więcej <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 11 -->
                            <div class="col-lg-4 col-md-6 m-b30 animate rotateIn animated">
                                <div class="wt-box bg-white">
                                    <div class="wt-media wt-thum-bx wt-img-effect off-color">
                                        <a href="../nasza-oferta/lifting-i-laminacja-rzes.php"><img src="../images/nasza-oferta/laminacjaliftingrzes.jpg" alt="Lifting i Laminacja Rzęs"></a>
                                    </div>
                                    <div class="wt-info p-a30 bg-gray">
                                        <h4 class="wt-title m-t0"><a href="../nasza-oferta/lifting-i-laminacja-rzes.php">Lifting i Laminacja Rzęs</a></h4>
                                        <p>Zabieg podkreślający naturalne piękno rzęs – uniesione, pogrubione i zadbane rzęsy bez użycia tuszu.</p>
                                        <a href="../nasza-oferta/lifting-i-laminacja-rzes.php" class="site-button ">Czytaj więcej <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 13 -->
                            <div class="col-lg-4 col-md-6 m-b30 animate rotateInUpRight animated" style="display: none">
                                <div class="wt-box bg-white">
                                    <div class="wt-media wt-thum-bx wt-img-effect off-color">
                                        <a href="../nasza-oferta/zabieg-lampa-led.php"><img src="../images/nasza-oferta/zabieglampaled.jpg" alt="Zabieg Lampą LED"></a>
                                    </div>
                                    <div class="wt-info p-a30 bg-gray">
                                        <h4 class="wt-title m-t0"><a href="../nasza-oferta/zabieg-lampa-led.php">Zabieg Lampą LED</a></h4>
                                        <p>Światłoterapia LED wspiera regenerację skóry, łagodzi stany zapalne i przyspiesza procesy odnowy komórkowej. Idealny jako samodzielny zabieg lub dodatek do innych terapii.</p>
                                        <a href="../nasza-oferta/zabieg-lampa-led.php" class="site-button ">Czytaj więcej <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 14 -->
                            <div class="col-lg-4 col-md-6 m-b30 animate rotateInUpRight animated">
                                <div class="wt-box bg-white">
                                    <div class="wt-media wt-thum-bx wt-img-effect off-color">
                                        <a href="../nasza-oferta/peeling-kawitacyjny.php"><img src="../images/nasza-oferta/peelingkawitacyjny.jpg" alt="Peeling kawitacyjny"></a>
                                    </div>
                                    <div class="wt-info p-a30 bg-gray">
                                        <h4 class="wt-title m-t0"><a href="../nasza-oferta/peeling-kawitacyjny.php">Peeling kawitacyjny</a></h4>
                                        <p>Bezbolesne, głębokie oczyszczanie skóry ultradźwiękami. Idealny dla każdego typu cery, także wrażliwej.</p>
                                        <a href="../nasza-oferta/peeling-kawitacyjny.php" class="site-button ">Czytaj więcej <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                    
                    <!-- ZAKOŃCZENIE ZABIEGI SECTION START -->
                    <div class="section-full p-t80">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 m-b30">
                                <div class="section-head text-left">
                                    <h3 class="text-uppercase">Co nas wyróżnia?</h3>
                                    <div class="wt-separator-outer">
                                        <div class="wt-separator style-icon">
                                            <i class="fa fa-leaf text-black"></i>
                                            <span class="separator-left site-bg-primary"></span>
                                            <span class="separator-right site-bg-primary"></span>
                                        </div>                            
                                    </div>
                                    <p><b>🔹 Nowoczesne technologie</b> – korzystamy z najnowszych osiągnięć kosmetologii i medycyny estetycznej, takich jak światłoterapia LED, liposukcja ultradźwiękowa, peeling kawitacyjny, dermomasaż, zabiegi liftingujące i regenerujące.<br><br><b>🔹 Indywidualne podejście</b> – każdy zabieg dobieramy do potrzeb Twojej skóry, typu cery, wieku oraz oczekiwanych rezultatów.<br><br><b>🔹 Bezpieczeństwo i higiena</b> – pracujemy wyłącznie na certyfikowanych produktach renomowanych marek i przy zachowaniu najwyższych standardów sanitarno-higienicznych.<br><br><b>🔹 Profesjonalna kadra</b> – nasz zespół to wykwalifikowani kosmetolodzy i kosmetyczki z pasją i doświadczeniem.</p>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-12 m-b30">
                                <div class="section-head text-left">
                                    <h3 class="text-uppercase">Dla kogo są nasze zabiegi?</h3>
                                    <div class="wt-separator-outer">
                                        <div class="wt-separator style-icon">
                                            <i class="fa fa-leaf text-black"></i>
                                            <span class="separator-left site-bg-primary"></span>
                                            <span class="separator-right site-bg-primary"></span>
                                        </div>                            
                                    </div>
                                    <p>➡️ Dla osób zmagających się z trądzikiem, przebarwieniami, rozszerzonymi porami, suchością skóry czy oznakami starzenia.<br><br>➡️ Dla Klientów w każdym wieku – oferujemy zarówno delikatne zabiegi pielęgnacyjne, jak i intensywne kuracje regenerujące dla dojrzałej skóry.<br><br>➡️ Dla wszystkich, którzy chcą zadbać o swoją twarz profesjonalnie, skutecznie i bezpiecznie.</p>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 m-b30">
                                <div class="section-head text-left">
                                    <h3 class="text-uppercase">Nasze zabiegi na twarz obejmują:</h3>
                                    <div class="wt-separator-outer">
                                        <div class="wt-separator style-icon">
                                            <i class="fa fa-leaf text-black"></i>
                                            <span class="separator-left site-bg-primary"></span>
                                            <span class="separator-right site-bg-primary"></span>
                                        </div>                            
                                    </div>
                                    <p><b>💎 Glow & Lift</b> – połączenie oczyszczania, regeneracji i liftingu. Idealne rozwiązanie dla skóry wymagającej odmłodzenia i ujędrnienia.<br><br><b>💎 Peeling kawitacyjny</b> – bezinwazyjne i bezbolesne oczyszczanie skóry za pomocą ultradźwięków. Polecany dla skóry wrażliwej i problematycznej.<br><br><b>💎 Lifting i laminacja rzęs</b> – perfekcyjne podkreślenie spojrzenia bez przedłużania rzęs. Naturalny efekt, który utrzymuje się tygodniami.<br><br><b>💎 Architektura i laminacja brwi</b> – idealnie ukształtowane, gęste i pełne brwi dopasowane do rysów twarzy.<br><br><b>💎 Zabiegi nawilżające i odżywcze</b> – intensywne kuracje przywracające elastyczność, miękkość i blask skórze odwodnionej lub zmęczonej.<br><br><b>💎 Zabiegi przeciwstarzeniowe (anti-aging)</b> – wykorzystujemy składniki aktywne oraz zabiegi stymulujące odbudowę kolagenu, które widocznie wygładzają zmarszczki i poprawiają owal twarzy.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <!-- ZAKOŃCZENIE GALERIA SECTION END -->
                    
                    <!-- SECTION KONIEC OFERTA START -->
                    <div class="section-full p-b50">
                <div class="container">
                    <div class="section-content">
                        <div class="row">
                            <!--From Styel 1-->
                            <div class="col-md-12 animate rotateInDownLeft animated">
                                
                            	<!-- OUR GALLERY BLOCK START -->
                                <div class="widget widget_gallery mfp-gallery">
                                    <h4 class="widget-title">Dlaczego warto wybrać MAGIC SALON?</h4>
                                    <p>Indywidualne podejście do każdego klienta. Najnowsze technologie kosmetologiczne. Profesjonalny, doświadczony zespół. Ciepła atmosfera i pełen relaks. Bezpieczeństwo i skuteczność</p>
                                    <ul>
                                        <li>
                                            <div class="wt-post-thum">
                                                <a href="../images/gallery/pic1.jpg" class="mfp-link"><img src="../images/our-work/pic1.jpg" alt="Zdjęcie Dlaczego warto wybrać MAGIC SALON?"></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wt-post-thum ">
                                                <a href="../images/gallery/pic2.jpg" class="mfp-link"><img src="../images/our-work/pic2.jpg" alt="Zdjęcie Dlaczego warto wybrać MAGIC SALON?"></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wt-post-thum  ">
                                                <a href="../images/gallery/pic3.jpg" class="mfp-link"><img src="../images/our-work/pic3.jpg" alt="Zdjęcie Dlaczego warto wybrać MAGIC SALON?"></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wt-post-thum ">
                                                <a href="../images/gallery/pic4.jpg" class="mfp-link"><img src="../images/our-work/pic4.jpg" alt="Zdjęcie Dlaczego warto wybrać MAGIC SALON?"></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wt-post-thum ">
                                                <a href="../images/gallery/pic5.jpg" class="mfp-link"><img src="../images/our-work/pic5.jpg" alt="Zdjęcie Dlaczego warto wybrać MAGIC SALON?"></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wt-post-thum ">
                                                <a href="../images/gallery/pic6.jpg" class="mfp-link"><img src="../images/our-work/pic6.jpg" alt="Zdjęcie Dlaczego warto wybrać MAGIC SALON?"></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wt-post-thum ">
                                                <a href="../images/gallery/pic7.jpg" class="mfp-link"><img src="../images/our-work/pic7.jpg" alt="Zdjęcie Dlaczego warto wybrać MAGIC SALON?"></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wt-post-thum ">
                                                <a href="../images/gallery/pic8.jpg" class="mfp-link"><img src="../images/our-work/pic8.jpg" alt="Zdjęcie Dlaczego warto wybrać MAGIC SALON?"></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- OUR GALLERY BLOCK END -->    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                    <!-- SECTION KONIEC OFERTA END -->
                    
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
