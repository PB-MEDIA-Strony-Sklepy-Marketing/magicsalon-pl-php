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
        <div class="page-content  bg-white">
        
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
            
            <!-- ABOUT COMPANY SECTION START -->
            <div class="section-full p-t80">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 m-b30">
                                <div class="section-head text-center">
                                    <h3 class="text-uppercase">Depilacja i pielęgnacja - MAGIC SALON – Piękno w zasięgu ręki!</h3>
                                    <div class="wt-separator-outer">
                                        <div class="wt-separator style-icon">
                                            <i class="fa fa-leaf text-black"></i>
                                            <span class="separator-left site-bg-primary"></span>
                                            <span class="separator-right site-bg-primary"></span>
                                        </div>                            
                                    </div>
                                    <p style="max-width:100%">Witaj w świecie piękna i komfortu, gdzie Twoja skóra otrzymuje to, czego naprawdę potrzebuje. W MAGIC SALON wierzymy, że zadbane ciało to nie tylko kwestia estetyki, ale przede wszystkim wyraz troski o siebie, dobre samopoczucie i pewność siebie. Dlatego stworzyliśmy specjalistyczną ofertę usług z zakresu epilacji i pielęgnacji skóry, które skutecznie usuwają owłosienie, regenerują, nawilżają i przywracają skórze naturalny blask.
                                    </p>
                                    <p style="max-width:100%">Nasze zabiegi to połączenie nowoczesnych technologii, precyzji oraz komfortu. Skorzystaj z doświadczenia naszych specjalistów, którzy z pasją i troską zadbają o każdy centymetr Twojej skóry, niezależnie od jej typu i potrzeb. Niezależnie od tego, czy chcesz pozbyć się niechcianego owłosienia, czy też zadbać o kondycję skóry – jesteś w dobrym miejscu.</p>
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
                            <h3 class="text-uppercase">Umów się na zabieg – Twoja skóra Ci podziękuje</h3>
                            <div class="wt-separator-outer">
                               <div class="wt-separator style-icon">
                                   <i class="fa fa-leaf text-black"></i>
                                   <span class="separator-left site-bg-primary"></span>
                                   <span class="separator-right site-bg-primary"></span>
                               </div>                            
                           </div>
                            <p style="max-width:100%">W MAGIC SALON zadbamy o to, by Twoja skóra była nie tylko piękna, ale też zdrowa i pełna blasku. Niezależnie od tego, czy zdecydujesz się na epilację, zabieg pielęgnacyjny czy kompleksową kurację – możesz mieć pewność, że jesteś w najlepszych rękach. Piękno w zasięgu ręki. Zrelaksuj się i poczuj się wyjątkowo. Zaufaj profesjonalistom i odkryj magię pielęgnacji, która odmieni Twoje ciało i umysł!</p>
                        </div>
                    <!-- TITLE END -->     
                    <div class="section-content">
                        <div class="row">

                            <!-- COLUMNS 7 -->
                             <div class="col-lg-6 col-md-6 m-b30 animate bounceIn animated">
                                <div class="wt-box bg-white">
                                    <div class="wt-media wt-thum-bx wt-img-effect off-color">
                                        <a href="../nasza-oferta/epilacja-laserowa.html"><img src="../images/nasza-oferta/epilacjalaserowa.jpg" alt="Epilacja laserowa – trwałe usuwanie owłosienia"></a>
                                    </div>
                                    <div class="wt-info p-a30 bg-gray">
                                        <h4 class="wt-title m-t0"><a href="../nasza-oferta/epilacja-laserowa.html">Epilacja laserowa – trwałe usuwanie owłosienia</a></h4>
                                        <p>Nowoczesna metoda depilacji zapewniająca trwały efekt gładkiej skóry. Skuteczna zarówno dla kobiet, jak i mężczyzn – bez podrażnień i wrastających włosków.</p>
                                        <a href="../nasza-oferta/epilacja-laserowa.html" class="site-button ">Czytaj więcej <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 8 -->
                            <div class="col-lg-6 col-md-6 m-b30 animate bounceIn animated">
                                <div class="wt-box bg-white">
                                    <div class="wt-media wt-thum-bx wt-img-effect off-color">
                                        <a href="../nasza-oferta/depilacja-woskiem.html"><img src="../images/nasza-oferta/depilacjawoskiem.jpg" alt="Depilacja woskiem – szybka i dokładna"></a>
                                    </div>
                                    <div class="wt-info p-a30 bg-gray">
                                        <h4 class="wt-title m-t0"><a href="../nasza-oferta/depilacja-woskiem.html">Depilacja woskiem – szybka i dokładna</a></h4>
                                        <p>Sprawdzona metoda usuwania owłosienia z natychmiastowym efektem. Zabieg przeprowadzany z dbałością o komfort i higienę.</p>
                                        <a href="../nasza-oferta/depilacja-woskiem.html" class="site-button  ">Czytaj więcej <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 9 -->
                            <div class="col-lg-6 col-md-6 m-b30 animate bounceIn animated" style="display: none">
                                <div class="wt-box bg-white">
                                    <div class="wt-media wt-thum-bx wt-img-effect off-color">
                                        <a href="../nasza-oferta/manicure.html"><img src="../images/nasza-oferta/manicure.jpg" alt="Manicure – klasyczny i hybrydowy"></a>
                                    </div>
                                    <div class="wt-info p-a30 bg-gray">
                                        <h4 class="wt-title m-t0"><a href="../nasza-oferta/manicure.html">Manicure – klasyczny i hybrydowy</a></h4>
                                        <p>Zadbane dłonie to wizytówka każdej osoby. Oferujemy profesjonalny manicure klasyczny, hybrydowy oraz pielęgnacyjny – dla pięknych, zdrowych paznokci każdego dnia.</p>
                                        <a href="../nasza-oferta/manicure.html" class="site-button ">Czytaj więcej <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 12 -->
                            <div class="col-lg-6 col-md-6 m-b30 animate rotateIn animated">
                                <div class="wt-box bg-white">
                                    <div class="wt-media wt-thum-bx wt-img-effect off-color">
                                        <a href="../nasza-oferta/przedluzanie-i-zageszczanie-rzes.html"><img src="../images/nasza-oferta/przedluzaniezageszczanierzes.jpg" alt="Przedłużanie i zagęszczanie rzęs"></a>
                                    </div>
                                    <div class="wt-info p-a30 bg-gray">
                                        <h4 class="wt-title m-t0"><a href="../nasza-oferta/przedluzanie-i-zageszczanie-rzes.html">Przedłużanie i zagęszczanie rzęs</a></h4>
                                        <p>Dla tych, którzy marzą o wyrazistym spojrzeniu na co dzień. Rzęsy metodą 1:1, 2:1, 3D i objętościową – zawsze indywidualnie dobrane. </p>
                                        <a href="../nasza-oferta/przedluzanie-i-zageszczanie-rzes.html" class="site-button ">Czytaj więcej <i class="fa fa-angle-double-right"></i></a>
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
                                    <h3 class="text-uppercase">Epilacja – skuteczność i trwałość</h3>
                                    <div class="wt-separator-outer">
                                        <div class="wt-separator style-icon">
                                            <i class="fa fa-leaf text-black"></i>
                                            <span class="separator-left site-bg-primary"></span>
                                            <span class="separator-right site-bg-primary"></span>
                                        </div>                            
                                    </div>
                                    <p>Pozbądź się owłosienia skutecznie, komfortowo i na długo! W MAGIC SALON oferujemy:</p>
                                    <p>🔹 Epilacja laserowa Trio Laser Medika<br>To zaawansowany zabieg trwałego usuwania owłosienia z wykorzystaniem trzech długości fal laserowych. Dzięki temu urządzenie działa precyzyjnie na różne głębokości skóry, eliminując zarówno powierzchowne, jak i głębiej osadzone cebulki włosów. Zabieg jest szybki, bezpieczny i niemal bezbolesny, a jego efekty są widoczne już po kilku sesjach.<br>➡️ Polecany do okolic takich jak: nogi, pachy, bikini, plecy, klatka piersiowa czy twarz.<br><br>🔹 Depilacja woskiem<br>Szybka i skuteczna metoda usuwania niechcianego owłosienia, pozostawiająca skórę idealnie gładką nawet na kilka tygodni. Wykorzystujemy wysokiej jakości woski do różnych typów skóry – także wrażliwej.<br>➡️ Dostępna depilacja: nóg, rąk, bikini, twarzy, pach i innych partii ciała.<br><br>🔹 Depilacja twarzy i brwi<br>Delikatne zabiegi usuwania owłosienia z twarzy – bez podrażnień, z zachowaniem idealnego kształtu i symetrii, np. przy regulacji brwi lub usuwaniu meszku.</p>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-12 m-b30">
                                <div class="section-head text-left">
                                    <h3 class="text-uppercase">Pielęgnacja skóry – zadbaj o zdrowie i wygląd</h3>
                                    <div class="wt-separator-outer">
                                        <div class="wt-separator style-icon">
                                            <i class="fa fa-leaf text-black"></i>
                                            <span class="separator-left site-bg-primary"></span>
                                            <span class="separator-right site-bg-primary"></span>
                                        </div>                            
                                    </div>
                                    <p>Dobra pielęgnacja to podstawa pięknej, jędrnej i zdrowej skóry. W naszym salonie znajdziesz zabiegi dopasowane do Twoich potrzeb:</p>
                                    <p>🔸 Peeling kawitacyjny<br>Bezbolesna i skuteczna metoda głębokiego oczyszczania skóry przy pomocy ultradźwięków. Usuwa martwe komórki naskórka, zanieczyszczenia i nadmiar sebum. Idealny dla skóry wrażliwej, trądzikowej, tłustej i zmęczonej.<br><br>🔸 Laminacja brwi i rzęs z pielęgnacją<br>To nie tylko efekt estetyczny, ale również odżywienie i wzmocnienie włosków. Naturalny wygląd, podkreślone spojrzenie i zadbana oprawa oczu – bez makijażu.<br><br>🔸 SilkRoll – innowacyjna terapia modelująca i pielęgnacyjna<br>Zabieg łączący mikrodrgania, światłoterapię i delikatny masaż, poprawiający jędrność i koloryt skóry. Działa głęboko regenerująco, jednocześnie modelując sylwetkę i poprawiając elastyczność skóry.</p>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 m-b30">
                                <div class="section-head text-left">
                                    <h3 class="text-uppercase">Dlaczego warto nam zaufać?</h3>
                                    <div class="wt-separator-outer">
                                        <div class="wt-separator style-icon">
                                            <i class="fa fa-leaf text-black"></i>
                                            <span class="separator-left site-bg-primary"></span>
                                            <span class="separator-right site-bg-primary"></span>
                                        </div>                            
                                    </div>
                                    <p>✨ Nowoczesne technologie<br>✨ Indywidualne podejście do każdego Klienta<br>✨ Bezpieczeństwo i higiena na najwyższym poziomie<br>✨ Profesjonalna, certyfikowana kadra<br>✨ Widoczne efekty i długotrwałe rezultaty</p>
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
                                                <a href="../images/gallery/pic1.jpg" class="mfp-link"><img src="../images/our-work/pic1.jpg" alt="Zdjęcie Dlaczego akurat Magic Salon"></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wt-post-thum ">
                                                <a href="../images/gallery/pic2.jpg" class="mfp-link"><img src="../images/our-work/pic2.jpg" alt="Zdjęcie Dlaczego akurat Magic Salon"></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wt-post-thum  ">
                                                <a href="../images/gallery/pic3.jpg" class="mfp-link"><img src="../images/our-work/pic3.jpg" alt="Zdjęcie Dlaczego akurat Magic Salon"></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wt-post-thum ">
                                                <a href="../images/gallery/pic4.jpg" class="mfp-link"><img src="../images/our-work/pic4.jpg" alt="Zdjęcie Dlaczego akurat Magic Salon"></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wt-post-thum ">
                                                <a href="../images/gallery/pic5.jpg" class="mfp-link"><img src="../images/our-work/pic5.jpg" alt="Zdjęcie Dlaczego akurat Magic Salon"></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wt-post-thum ">
                                                <a href="../images/gallery/pic6.jpg" class="mfp-link"><img src="../images/our-work/pic6.jpg" alt="Zdjęcie Dlaczego akurat Magic Salon"></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wt-post-thum ">
                                                <a href="../images/gallery/pic7.jpg" class="mfp-link"><img src="../images/our-work/pic7.jpg" alt="Zdjęcie Dlaczego akurat Magic Salon"></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wt-post-thum ">
                                                <a href="../images/gallery/pic8.jpg" class="mfp-link"><img src="../images/our-work/pic8.jpg" alt="Zdjęcie Dlaczego akurat Magic Salon"></a>
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
