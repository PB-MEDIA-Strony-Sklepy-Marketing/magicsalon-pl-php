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
                                    <img src="../images/blog/default/thum2.jpg" alt="Zdjęcie wyróżniające się. Jak Wybrać Idealny Zabieg Kosmetyczny dla Siebie?">
                                </div>
                                <div class="post-description-area p-t30">
                                    <div class="wt-post-title ">
                                        <h3 class="post-title">Jak Wybrać Idealny Zabieg Kosmetyczny dla Siebie?</h3>
                                    </div>
                                    <div class="wt-post-text">
                                        <p>W dzisiejszych czasach, kiedy tempo życia jest niezwykle szybkie, a otoczenie pełne jest nowych technologii, dbanie o siebie stało się nie tylko modą, ale również koniecznością. W salonach kosmetycznych, takich jak MAGIC SALON, dostępne są najnowocześniejsze zabiegi, które pomagają poprawić wygląd, samopoczucie i zdrowie skóry. Jednak, jak wybrać zabieg, który będzie odpowiedni do Twoich potrzeb i oczekiwań? W tym wpisie podpowiemy, jak dokonać wyboru, który pozwoli Ci poczuć się piękniejszą, młodszą i bardziej zrelaksowaną!</p> 
                                        <h3>1. Zrozumienie Potrzeb Twojej Skóry</h3>
                    
                                        <p class="clearfix">Każdy z nas ma inny typ skóry, który może wymagać różnej pielęgnacji. Dlatego pierwszym krokiem do wyboru odpowiedniego zabiegu kosmetycznego jest dokładna analiza stanu swojej skóry. W MAGIC SALON oferujemy szeroki wybór zabiegów, które odpowiadają na różne potrzeby:</p>
                                        <p><b>•	Skóra sucha</b> – wymaga nawilżenia i odżywienia. Dobrze sprawdzą się tutaj zabiegi nawilżające, takie jak Glow & Lift, które oprócz odmłodzenia, dostarczają skórze niezbędnych składników odżywczych.<br><b>•	Skóra tłusta</b> – narażona na zatykanie porów i powstawanie niedoskonałości. Idealnym rozwiązaniem będą zabiegi oczyszczające, takie jak peeling kawitacyjny czy detox & drenaż, które skutecznie oczyszczają skórę z toksyn i nadmiaru sebum.<br><b>•	Skóra wrażliwa</b> – wymaga delikatnej pielęgnacji. W tym przypadku zalecamy zabiegi, które łagodzą podrażnienia, takie jak zabiegi z lampą LED, które regenerują skórę i wspomagają gojenie.</p>
                                        <p>Przed wyborem zabiegu, warto również skonsultować się z naszymi specjalistami, którzy przeanalizują stan Twojej skóry i doradzą, które zabiegi będą dla Ciebie najbardziej skuteczne.</p>
                                        
                                        <h3>2. Celem Zabiegu – Co Chcesz Osiągnąć?</h3>
                                      <p class="clearfix">Każdy zabieg kosmetyczny ma inny cel – niektóre zabiegi skupiają się na oczyszczaniu, inne na ujędrnianiu, a jeszcze inne na poprawie konturów ciała. Zastanów się, co chcesz osiągnąć:</p>
                                        <p><b>•	Odmłodzenie</b> – Jeśli Twoim celem jest poprawa jędrności skóry i redukcja zmarszczek, doskonałym wyborem będą zabiegi takie jak Glow & Lift, które łączą działanie liftingujące z regeneracją skóry.<br><b>•	Modelowanie sylwetki</b> – Marzysz o smuklejszej sylwetce i redukcji cellulitu? Modelowanie 360°, liposukcja ultradźwiękowa oraz lipolaser duo to nowoczesne technologie, które skutecznie modelują sylwetkę, usuwają nadmiar tkanki tłuszczowej i poprawiają elastyczność skóry.<br><b>•	Oczyszczenie skóry</b> – Jeżeli Twoja skóra potrzebuje głębokiego oczyszczenia, wybierz zabiegi takie jak detox & drenaż lub peeling kawitacyjny, które skutecznie usuwają martwy naskórek i zanieczyszczenia, przywracając skórze zdrowy i promienny wygląd.<br><b>•	Relaks i regeneracja</b> – Czasem warto po prostu odpocząć i zrelaksować się. W takim przypadku idealnym rozwiązaniem będą zabiegi relaksacyjne, takie jak dermomasaż czy zabieg lampą LED, które nie tylko poprawiają kondycję skóry, ale także wprowadzają w stan głębokiego relaksu.</p>
                                    
                                        <h3>3. Nowoczesne Technologie w Służbie Piękna</h3>
                                      <p class="clearfix">MAGIC SALON stawia na nowoczesne technologie, które pozwalają uzyskać spektakularne efekty w krótkim czasie. Nasze urządzenia są bezpieczne, precyzyjne i skuteczne. Dzięki innowacyjnym zabiegom, takim jak liposukcja ultradźwiękowa, lipolaser duo, czy silkroll, możesz liczyć na wyjątkowe rezultaty, które będą widoczne od pierwszej wizyty. Nowoczesne technologie to także gwarancja komfortu i bezpieczeństwa – nasze zabiegi nie wymagają rekonwalescencji, a ich efekty utrzymują się przez długi czas.</p>
                                    
                                        <h3>4. Pielęgnacja na Wysokim Poziomie – Zaufaj Specjalistom</h3>
                                      <p class="clearfix">Decydując się na zabieg w MAGIC SALON, możesz mieć pewność, że trafisz w ręce profesjonalistów. Nasz zespół składa się z doświadczonych kosmetologów i terapeutów, którzy posiadają wiedzę i umiejętności niezbędne do przeprowadzenia zabiegów na najwyższym poziomie. Dzięki indywidualnemu podejściu, każdy zabieg jest dostosowany do Twoich potrzeb i oczekiwań.</p>
                                        <p>Nasze kosmetyki oraz urządzenia pochodzą od renomowanych producentów, co zapewnia skuteczność i bezpieczeństwo zabiegów. Przed każdym zabiegiem przeprowadzamy szczegółową konsultację, aby poznać Twoje potrzeby oraz przeciwwskazania, co gwarantuje 100% bezpieczeństwa.</p>
                                        
                                        <h3>5. Regularność i Systematyczność – Klucz do Sukcesu</h3>
                                      <p class="clearfix">Wiele z naszych zabiegów daje najlepsze efekty, gdy są wykonywane regularnie. W MAGIC SALON proponujemy indywidualnie dobrane programy pielęgnacyjne, które pozwolą Ci osiągnąć zamierzony cel. Bez względu na to, czy marzysz o wygładzeniu zmarszczek, poprawie sylwetki, czy po prostu o odświeżeniu skóry – regularne zabiegi zapewnią Ci długotrwałe i widoczne rezultaty.</p>
                                        
                                        <h3>6. Dobre Samopoczucie i Relaks</h3>
                                      <p class="clearfix">Zabiegi kosmetyczne to nie tylko poprawa wyglądu, ale także czas dla Ciebie. MAGIC SALON to miejsce, gdzie możesz się zrelaksować, odprężyć i zadbać o swoje ciało. W naszym salonie dbamy o atmosferę, aby każda wizyta była prawdziwym doświadczeniem dla zmysłów. Warto zainwestować w swój komfort i poczuć, jak cudownie jest odpoczywać w rękach ekspertów.</p>
                                        
                                        <h3>Podsumowanie</h3>
                                        <p>Wybór odpowiedniego zabiegu kosmetycznego to inwestycja w Twoje zdrowie, urodę i samopoczucie. Dzięki MAGIC SALON możesz mieć pewność, że Twoje potrzeby zostaną spełnione, a efekty przerosną oczekiwania. Nie zwlekaj, umów się na wizytę i odkryj, jak nasze zabiegi mogą odmienić Twoje życie! Czekamy na Ciebie!</p>
                                        <p>Zadbaj o swoje piękno z MAGIC SALON – miejscem, w którym każda chwila to relaks i pielęgnacja na najwyższym poziomie!</p>
                                        
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
