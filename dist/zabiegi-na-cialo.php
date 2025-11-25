<?php

/**
 * MAGIC SALON - Zabiegi na Ciało (zabiegi-na-cialo.php)
 * Wersja: 2.3 - Zoptymalizowane treści SEO i zmienne dla podstrony
 */

// Załaduj konfigurację
require_once __DIR__ . DIRECTORY_SEPARATOR . 'config.php';

// Konfiguracja meta tagów dla strony Zabiegi na Ciało
$meta = [
    'title' => 'Zabiegi na Ciało – Modelowanie i Ujędrnianie | MAGIC SALON Dobrzykowice',
    'description' => 'Odkryj skuteczne zabiegi na ciało w MAGIC SALON. Modelowanie sylwetki 360°, redukcja cellulitu, drenaż limfatyczny, liposukcja ultradźwiękowa i lipolaser. Poczuj się pięknie w swoim ciele!',
    'keywords' => 'zabiegi na ciało dobrzykowice, modelowanie sylwetki wrocław, usuwanie cellulitu, liposukcja ultradźwiękowa, drenaż limfatyczny, ujędrnianie skóry, dermomasaż, lipolaser efekty',
    'canonical' => BASE_URL . '/zabiegi-na-cialo.php',
    'robots' => 'index, follow, max-image-preview:large',
    'og' => [
        'type' => 'website',
        'title' => 'Zabiegi na Ciało – Twoja Droga do Idealnej Sylwetki',
        'description' => 'Zadbaj o swoje ciało kompleksowo. Oferujemy nowoczesne terapie wyszczuplające, antycellulitowe i relaksacyjne w Dobrzykowicach.',
        'url' => BASE_URL . '/zabiegi-na-cialo.php',
        'image' => BASE_URL . '/images/nasza-oferta/modelowaniesylwetki360.jpg', // Zdjęcie reprezentujące główną usługę
    ],
    'twitter' => [
        'card' => 'summary_large_image',
        'title' => 'Modelowanie Ciała w MAGIC SALON',
        'description' => 'Sprawdź nasze metody na piękną sylwetkę: Lipolaser, Dermomasaż, Modelowanie 360°.',
    ],
    'schema' => [
        'enabled' => true,
        'type' => 'BeautySalon',
        'name' => 'MAGIC SALON - Zabiegi na Ciało',
        'description' => 'Profesjonalne zabiegi kosmetyczne na ciało: modelowanie sylwetki, redukcja tkanki tłuszczowej i cellulitu.',
        'url' => BASE_URL . '/zabiegi-na-cialo.php',
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
        <div class="page-content  bg-white">
        
                <?php
            // Konfiguracja dynamicznego banera i breadcrumbs dla podstrony Zabiegi na Ciało
            $banner_img = 'images/banner/gallery-banner.jpg'; 
            $page_title = 'Modelowanie i Pielęgnacja Ciała';
            // Unikalny opis zachęcający do skorzystania z usług modelowania sylwetki
            $page_desc = 'Twoje ciało to Twoja świątynia, dlatego zasługuje na najlepszą opiekę. W MAGIC SALON łączymy zaawansowane technologie z holistycznym podejściem, aby pomóc Ci osiągnąć wymarzoną sylwetkę, zredukować cellulit i ujędrnić skórę. Poczuj lekkość, energię i pewność siebie dzięki naszym spersonalizowanym terapiom.';
            $breadcrumbs = [
                [
                    'label' => 'Strona Główna',
                    'url' => 'index.php',
                    'icon' => 'fa fa-home'
                ],
                [
                    'label' => 'Zabiegi na ciało',
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
                                    <h3 class="text-uppercase">Zabiegi na ciało - MAGIC SALON – Zadbaj o swoje ciało z pomocą doświadczonych specjalistów</h3>
                                    <div class="wt-separator-outer">
                                        <div class="wt-separator style-icon">
                                            <i class="fa fa-leaf text-black"></i>
                                            <span class="separator-left site-bg-primary"></span>
                                            <span class="separator-right site-bg-primary"></span>
                                        </div>                            
                                    </div>
                                    <p style="max-width:100%">Witaj w świecie profesjonalnej pielęgnacji ciała w MAGIC SALON, gdzie każda usługa została stworzona z myślą o poprawie wyglądu, samopoczucia i ogólnego komfortu naszych Klientek i Klientów. Nasz salon to miejsce, w którym nowoczesna technologia, pasja do piękna i indywidualne podejście spotykają się w jednym celu – byś czuł/a się doskonale w swoim ciele.
                                    </p>
                                    <p style="max-width:100%">Dbanie o ciało to nie tylko kwestia estetyki – to również element troski o zdrowie, kondycję skóry i poczucie własnej wartości. Dlatego w MAGIC SALON oferujemy szeroki wachlarz zabiegów modelujących sylwetkę, redukujących tkankę tłuszczową, ujędrniających oraz wspomagających detoksykację organizmu. Każdy zabieg dobieramy indywidualnie – w zależności od potrzeb, problematyki ciała oraz oczekiwanych rezultatów.</p>
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
                            <h3 class="text-uppercase">Czas na Twoją metamorfozę!</h3>
                            <div class="wt-separator-outer">
                               <div class="wt-separator style-icon">
                                   <i class="fa fa-leaf text-black"></i>
                                   <span class="separator-left site-bg-primary"></span>
                                   <span class="separator-right site-bg-primary"></span>
                               </div>                            
                           </div>
                            <p style="max-width:100%">W MAGIC SALON pomagamy wydobyć to, co w Tobie najpiękniejsze. Nasze zabiegi na ciało to nie tylko widoczna poprawa sylwetki, ale również relaks, oddech od codzienności i dawka pozytywnej energii. Zadbaj o swoje ciało z pomocą doświadczonych specjalistów i innowacyjnych rozwiązań. Zasługujesz na to, co najlepsze.</p>
                        </div>
                    <!-- TITLE END -->     
                    <div class="section-content">
                        <div class="row">
                        
                            <!-- COLUMNS 2 -->
                            <div class="col-lg-4 col-md-6 m-b30 animate bounceInLeft animated">
                                <div class="wt-box bg-white">
                                    <div class="wt-media wt-thum-bx wt-img-effect off-color">
                                        <a href="../nasza-oferta/detox-drenaz.php"><img src="../images/nasza-oferta/detoxdrenaz.jpg" alt="Detox & Drenaż – oczyszczenie i lekkość"></a>
                                    </div>
                                    <div class="wt-info p-a30 bg-gray">
                                        <h4 class="wt-title m-t0"><a href="../nasza-oferta/detox-drenaz.php">Detox & Drenaż – oczyszczenie i lekkość</a></h4>
                                        <p>Idealne rozwiązanie dla osób borykających się z opuchlizną, uczuciem ciężkości i zanieczyszczoną skórą. Zabieg działa detoksykująco, wspomaga metabolizm i poprawia krążenie limfy, przynosząc natychmiastową ulgę i świeżość.</p>
                                        <a href="../nasza-oferta/detox-drenaz.php" class="site-button ">Czytaj więcej <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 4 -->
                            <div class="col-lg-4 col-md-6 m-b30 animate bounceInRight animated">
                                <div class="wt-box bg-white">
                                    <div class="wt-media wt-thum-bx wt-img-effect off-color">
                                        <a href="../nasza-oferta/modelowanie-360.php"><img src="../images/nasza-oferta/modelowaniesylwetki360.jpg" alt="Modelowanie 360° – kompleksowe podejście do ciała"></a>
                                    </div>
                                    <div class="wt-info p-a30 bg-gray">
                                        <h4 class="wt-title m-t0"><a href="../nasza-oferta/modelowanie-360.php">Modelowanie 360° – kompleksowe podejście do ciała</a></h4>
                                        <p>Zabieg, który modeluje sylwetkę w sposób holistyczny – redukuje cellulit, poprawia jędrność skóry, wyszczupla i kształtuje kontury ciała. To idealny wybór dla osób, które chcą szybko i skutecznie zobaczyć efekty.</p>
                                        <a href="../nasza-oferta/modelowanie-360.php" class="site-button ">Czytaj więcej <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 6 -->
                            <div class="col-lg-4 col-md-6 m-b30 animate bounceInRight animated">
                                <div class="wt-box bg-white">
                                    <div class="wt-media wt-thum-bx wt-img-effect off-color">
                                        <a href="../nasza-oferta/lipolaser-duo.php"><img src="../images/nasza-oferta/lipolaserduo.jpg" alt="Lipolaser Duo – precyzyjne wyszczuplanie wybranych partii"></a>
                                    </div>
                                    <div class="wt-info p-a30 bg-gray">
                                        <h4 class="wt-title m-t0"><a href="../nasza-oferta/lipolaser-duo.php">Lipolaser Duo – precyzyjne wyszczuplanie wybranych partii</a></h4>
                                        <p>Idealne rozwiązanie dla tych, którzy chcą zredukować tkankę tłuszczową z konkretnych obszarów ciała – brzucha, ud, ramion czy bioder. Zabieg bezpieczny i skuteczny, z widocznymi rezultatami.</p>
                                        <a href="../nasza-oferta/lipolaser-duo.php" class="site-button ">Czytaj więcej <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 15 -->
                            <div class="col-lg-4 col-md-6 m-b30 animate rotateInUpRight animated">
                                <div class="wt-box bg-white">
                                    <div class="wt-media wt-thum-bx wt-img-effect off-color">
                                        <a href="../nasza-oferta/dermomasaz.php"><img src="../images/nasza-oferta/dermomasaz.jpg" alt="Dermomasaż podciśnieniowy"></a>
                                    </div>
                                    <div class="wt-info p-a30 bg-gray">
                                        <h4 class="wt-title m-t0"><a href="../nasza-oferta/dermomasaz.php">Dermomasaż podciśnieniowy</a></h4>
                                        <p>Zabieg łączący masaż próżniowy z terapią antycellulitową. Stymuluje krążenie, ujędrnia skórę i poprawia metabolizm komórkowy.</p>
                                        <a href="../nasza-oferta/dermomasaz.php" class="site-button ">Czytaj więcej <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 5 -->
                            <div class="col-lg-4 col-md-6 m-b30 animate bounceInRight animated" style="visibility: visible;">
                                <div class="wt-box bg-white">
                                    <div class="wt-media wt-thum-bx wt-img-effect off-color">
                                        <a href="../nasza-oferta/liposukcja-ultradzwiekowa.php"><img src="../images/nasza-oferta/glowlift.jpg" alt="Liposukcja ultradźwiękowa – nieinwazyjne wyszczuplanie"></a>
                                    </div>
                                    <div class="wt-info p-a30 bg-gray">
                                        <h4 class="wt-title m-t0"><a href="../nasza-oferta/liposukcja-ultradzwiekowa.php">Liposukcja ultradźwiękowa – nieinwazyjne wyszczuplanie</a></h4>
                                        <p>Bez skalpela i bez bólu! Technologia ultradźwiękowa rozbija komórki tłuszczowe, które są następnie naturalnie usuwane z organizmu. Efekt? Smukła sylwetka i lepsze samopoczucie już po kilku zabiegach.</p>
                                        <a href="../nasza-oferta/liposukcja-ultradzwiekowa.php" class="site-button ">Czytaj więcej <i class="fa fa-angle-double-right"></i></a>
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
                                    <h3 class="text-uppercase">Nasze podejście</h3>
                                    <div class="wt-separator-outer">
                                        <div class="wt-separator style-icon">
                                            <i class="fa fa-leaf text-black"></i>
                                            <span class="separator-left site-bg-primary"></span>
                                            <span class="separator-right site-bg-primary"></span>
                                        </div>                            
                                    </div>
                                    <p><b>🔹 Zaawansowana technologia</b> – pracujemy wyłącznie na sprawdzonych, nowoczesnych urządzeniach i metodach, które są skuteczne, bezpieczne i nieinwazyjne.<br><b>🔹 Doświadczeni specjaliści</b> – nasz zespół to kosmetolodzy i technicy zabiegowi z pasją, wiedzą i empatią.<br><b>🔹 Pełna dyskrecja i komfort</b> – każdy zabieg przeprowadzany jest w atmosferze relaksu i pełnego zaufania, z poszanowaniem prywatności i intymności Klienta.<br><b>🔹 Efekty widoczne gołym okiem</b> – nasze zabiegi są tak dobierane i wykonywane, by dawały nie tylko uczucie lekkości i odprężenia, ale przede wszystkim realne rezultaty.</p>
                                    <h3>Dla kogo są nasze zabiegi?</h3>
                                    <p>✔️ Dla osób, które chcą wyszczuplić i wymodelować sylwetkę<br>✔️ Dla osób walczących z cellulitem, zatrzymywaniem wody czy wiotkością skóry<br>✔️ Dla kobiet po ciąży i osób w trakcie odchudzania<br>✔️ Dla wszystkich, którzy chcą poczuć się lżej, młodziej i bardziej komfortowo we własnym ciele</p>
                                    <p>🌿 SilkRoll<br>Połączenie mikrodrgań, światłoterapii LED i kompresji, które działa na wielu poziomach – od modelowania sylwetki po poprawę kondycji skóry. Zabieg działa relaksująco, ale jednocześnie niezwykle skutecznie modeluje ciało.<br><br>🌿 Zabieg Lampą LED<br>Terapia światłem LED dla całego ciała – poprawia jędrność, wspomaga regenerację, rozświetla i stymuluje komórki skóry do odnowy. To zabieg nie tylko estetyczny, ale również terapeutyczny, polecany także przy problemach skórnych.</p>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-12 m-b30">
                                <div class="section-head text-left">
                                    <h3 class="text-uppercase">Oferta zabiegów na ciało obejmuje:</h3>
                                    <div class="wt-separator-outer">
                                        <div class="wt-separator style-icon">
                                            <i class="fa fa-leaf text-black"></i>
                                            <span class="separator-left site-bg-primary"></span>
                                            <span class="separator-right site-bg-primary"></span>
                                        </div>                            
                                    </div>
                                    <p>🌿 Modelowanie 360°<br>Kompleksowy program wyszczuplająco-ujędrniający, który łączy kilka innowacyjnych technologii, aby skutecznie redukować tkankę tłuszczową, modelować sylwetkę i poprawiać elastyczność skóry. Doskonałe rozwiązanie dla osób, które pragną zmienić wygląd swojego ciała bez skalpela.<br><br>🌿 Detox & Drenaż<br>Zabieg wspierający naturalne procesy oczyszczania organizmu, pobudzający krążenie limfatyczne, redukujący obrzęki i uczucie ciężkości. Idealny jako kuracja wspomagająca odchudzanie i regenerację organizmu.<br><br>🌿 Liposukcja ultradźwiękowa<br>Nieinwazyjna metoda usuwania nadmiaru tkanki tłuszczowej za pomocą ultradźwięków. Zabieg pozwala skutecznie wyszczuplić newralgiczne partie ciała, takie jak uda, brzuch, pośladki czy ramiona, bez bólu i rekonwalescencji.<br><br>🌿 Lipolaser Duo<br>Zabieg z wykorzystaniem zimnego lasera o podwójnym działaniu. Skutecznie rozbija komórki tłuszczowe i wspiera ich naturalne usuwanie z organizmu. Efektem jest wyraźnie smuklejsza sylwetka i poprawiona jędrność skóry.<br><br>🌿 Dermomasaż podciśnieniowy<br>Innowacyjny masaż próżniowy, który intensywnie pobudza mikrokrążenie, poprawia elastyczność skóry i pomaga w walce z cellulitem. Skóra staje się bardziej napięta, gładsza, a obwody ciała zmniejszają się już po kilku sesjach.</p>
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
