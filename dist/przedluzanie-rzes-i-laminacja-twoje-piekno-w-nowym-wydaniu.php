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
                                    <img src="../images/blog/default/thum6.jpg" alt="Zdjęcie wyróżniające się. Przedłużanie Rzęs i Laminacja – Twoje Piękno w Nowym Wydaniu!">
                                </div>
                                <div class="post-description-area p-t30">
                                    <div class="wt-post-title ">
                                        <h3 class="post-title">Przedłużanie Rzęs i Laminacja – Twoje Piękno w Nowym Wydaniu!</h3>
                                    </div>
                                    <div class="wt-post-text">
                                        <p>Piękne i zadbane rzęsy to jeden z kluczowych elementów, który podkreśla wyrazistość naszego spojrzenia. W dzisiejszym zabieganym świecie, gdzie każdy dzień pełen jest wyzwań, codzienna aplikacja maskary i poświęcanie czasu na makijaż może stać się uciążliwe. Jednak teraz, dzięki nowoczesnym zabiegom takim jak przedłużanie rzęs i laminacja, możesz cieszyć się idealnym wyglądem swoich rzęs bez codziennego nakładania tuszu!</p> 
                                        <p>MAGIC SALON to miejsce, gdzie Twoje rzęsy mogą stać się pełniejsze, dłuższe i bardziej podkręcone. Dzięki naszym profesjonalnym zabiegom, poczujesz się piękniejsza, zyskując pewność siebie każdego dnia. Sprawdź, dlaczego warto skorzystać z naszych usług i odkryj, jak nasza oferta może odmienić Twój codzienny look!</p>
                                        
                                        <h3>Przedłużanie Rzęs – Efekt Długotrwały i Naturalny</h3>
                                        <p class="clearfix">Przedłużanie rzęs to jeden z najpopularniejszych zabiegów w salonach kosmetycznych. W MAGIC SALON oferujemy profesjonalne przedłużanie rzęs, które sprawia, że Twoje spojrzenie staje się pełne uroku i głębi. Zabieg ten polega na aplikacji syntetycznych rzęs, które przyklejane są do naturalnych włosków za pomocą specjalistycznego kleju. W zależności od Twoich preferencji i oczekiwań, możemy zastosować różne długości, grubości i efekty, aby dopasować wygląd rzęs do kształtu Twoich oczu.</p>
                                        <p>Zalety przedłużania rzęs w MAGIC SALON:<br><b>•	Długotrwały efekt</b> – Rzęsy utrzymują się nawet do 4-6 tygodni, co pozwala zaoszczędzić czas na codziennym makijażu.<br><b>•	Naturalny wygląd</b> – Dzięki precyzyjnemu dopasowaniu do naturalnych rzęs, efekt jest subtelny, a spojrzenie staje się bardziej wyraziste, bez potrzeby stosowania tuszu.<br><b>•	Wielki komfort</b> – Zyskujesz piękne rzęsy bez codziennego wysiłku. Idealne dla osób, które nie mają czasu na codzienny makijaż lub chcą wyglądać doskonale przez cały dzień.</p>
                                         
                                        <h3>Laminacja Rzęs – Naturalne Piękno w Jednym Zabiegu</h3>
                                      <p class="clearfix">Jeśli zależy Ci na podkreśleniu naturalnych rzęs, ale nie chcesz przedłużać ich sztucznymi włoskami, laminacja rzęs jest doskonałym rozwiązaniem. Zabieg ten, nazywany również "liftingiem" rzęs, pozwala na ich podkręcenie, wzmocnienie oraz pogrubienie, dając efekt intensywnie czarnych, pełniejszych rzęs.</p>
                                        <p>Laminacja rzęs w MAGIC SALON to idealna alternatywa dla osób, które preferują naturalny wygląd. Podczas zabiegu używamy specjalnego preparatu, który podkręca rzęsy, nadając im większą objętość, a także wzmacnia ich strukturę. Dodatkowo, możemy wykonać zabieg z koloryzacją rzęs, dzięki czemu efekt jest jeszcze bardziej wyrazisty. W efekcie rzęsy są pełniejsze, bardziej uniesione i wyglądają naturalnie pięknie.</p>
                                        <p>Zalety laminacji rzęs w MAGIC SALON:<br><b>•	Naturalny efekt</b> – Zabieg podkręca i wydłuża rzęsy, nadając im naturalny wygląd, bez potrzeby stosowania tuszu.<br><b>•	Trwałość</b> – Efekt utrzymuje się od 6 do 8 tygodni, co sprawia, że Twoje rzęsy są zawsze perfekcyjnie ułożone.<br><b>•	Bezpieczny zabieg</b> – Laminacja rzęs jest bezinwazyjna i nie uszkadza naturalnych włosków, a dodatkowo wzmacnia je, zapewniając zdrowy wygląd.</p>
                                    
                                        <h3>Jak Dbać o Rzęsy Po Zabiegu?</h3>
                                      <p class="clearfix">Zarówno po przedłużaniu rzęs, jak i laminacji, warto zadbać o odpowiednią pielęgnację, aby efekty utrzymały się jak najdłużej. Oto kilka wskazówek, jak dbać o rzęsy po zabiegu:</p>
                                        <p><b>•	Unikaj mocnego pocierania</b> oczu oraz kontaktu z wodą przez 24 godziny po zabiegu.<br><b>•	Staraj się unikać stosowania</b> tłustych kosmetyków w okolicach oczu, ponieważ mogą one osłabić trwałość rzęs.<br><b>•	Regularnie czyszcz rzęsy</b> za pomocą specjalnego środka do demakijażu, aby usunąć resztki makijażu oraz zanieczyszczenia.<br><b>•	Od czasu do czasu</b> używaj specjalnych serum wzmacniających rzęsy, aby poprawić ich kondycję.</p>
                                    
                                        <h3>Dlaczego Warto Wybrać MAGIC SALON?</h3>
                                      <p class="clearfix">W MAGIC SALON dbamy o to, aby każda wizyta była wyjątkowa. Nasze rzęsy to efekt precyzyjnej pracy profesjonalistów, którzy dbają o każdy szczegół, byś mogła cieszyć się pięknym spojrzeniem przez długi czas. Dzięki naszym zabiegom, nie tylko poprawisz wygląd swoich rzęs, ale również poczujesz się pewniej każdego dnia.</p>
                                        <p>Oferujemy:<br>•	Indywidualne podejście do klienta i dostosowanie zabiegu do Twoich oczekiwań.<br>•	Doświadczenie i profesjonalizm naszych stylistów, którzy są na bieżąco z najnowszymi trendami w branży.<br>•	Wysokiej jakości produkty, które zapewniają bezpieczeństwo i trwałość efektu.</p>
                                        <p>Nie czekaj, umów się na zabieg w MAGIC SALON i odkryj, jak piękne mogą być Twoje rzęsy! Czekamy na Ciebie! Zaufaj specjalistom z MAGIC SALON i pozwól, by Twoje rzęsy zyskały niesamowitą objętość i długość!</p>
                                        
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
