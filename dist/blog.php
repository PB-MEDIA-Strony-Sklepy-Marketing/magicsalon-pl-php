<?php

/**
 * MAGIC SALON - Blog (blog.php)
 * Wersja: 2.3 - Zoptymalizowane treści SEO i zmienne dla Bloga
 */

// Załaduj konfigurację
require_once __DIR__ . DIRECTORY_SEPARATOR . 'config.php';

// Konfiguracja meta tagów dla strony Bloga
$meta = [
    'title' => 'Blog Kosmetyczny – Porady, Trendy i Nowości | MAGIC SALON',
    'description' => 'Odkryj świat profesjonalnej pielęgnacji z MAGIC SALON. Czytaj nasz blog o zabiegach na twarz, ciało i rzęsy. Ekspercka wiedza, porady i inspiracje w Dobrzykowicach.',
    'keywords' => 'blog kosmetyczny, porady beauty, pielęgnacja skóry blog, zabiegi kosmetyczne trendy, kosmetolog radzi, magic salon blog, edukacja beauty',
    'canonical' => BASE_URL . '/blog.php',
    'robots' => 'index, follow, max-image-preview:large',
    'og' => [
        'type' => 'blog',
        'title' => 'Blog MAGIC SALON – Twoja Dawka Wiedzy o Pięknie',
        'description' => 'Poznaj tajniki nowoczesnej kosmetologii. Artykuły, porady i ciekawostki ze świata Beauty.',
        'url' => BASE_URL . '/blog.php',
        'image' => BASE_URL . '/images/blog/grid/pic1.jpg', // Zdjęcie pierwszego artykułu jako reprezentatywne
    ],
    'twitter' => [
        'card' => 'summary_large_image',
        'title' => 'Blog MAGIC SALON – Ekspercka Wiedza',
        'description' => 'Czytaj o nowościach w pielęgnacji i zabiegach.',
    ],
    'schema' => [
        'enabled' => true,
        'type' => 'Blog',
        'name' => 'Blog MAGIC SALON',
        'description' => 'Blog o tematyce urody, pielęgnacji skóry i zabiegach kosmetycznych prowadzony przez ekspertów Magic Salon.',
        'url' => BASE_URL . '/blog.php',
        'publisher' => [
            '@type' => 'Organization',
            'name' => 'MAGIC SALON',
            'logo' => [
                '@type' => 'ImageObject',
                'url' => BASE_URL . '/images/logo-7.png'
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
        <div class="page-content">
        
                <?php
            // Konfiguracja dynamicznego banera i breadcrumbs dla podstrony Blog
            // Używamy banera pasującego do tematyki edukacyjnej/beauty
            $banner_img = 'images/banner/gallery-banner.jpg'; 
            $page_title = 'Strefa Wiedzy i Inspiracji';
            // Unikalny opis zachęcający do zgłębiania wiedzy
            $page_desc = 'Witaj w naszej przestrzeni edukacyjnej! Tutaj dzielimy się pasją do piękna, obalamy mity pielęgnacyjne i przybliżamy tajniki nowoczesnych technologii kosmetycznych. Znajdziesz tu rzetelną wiedzę, porady naszych ekspertów oraz inspiracje, które pomogą Ci świadomie dbać o swoją urodę każdego dnia.';
            $breadcrumbs = [
                [
                    'label' => 'Strona Główna',
                    'url' => 'index.php',
                    'icon' => 'fa fa-home'
                ],
                [
                    'label' => 'Blog & Porady',
                    'url' => '', // Pusty URL oznacza element aktywny
                    'icon' => ''
                ]
            ];
            
            // Załadowanie dedykowanego partiala
            include 'partials/breadcrumbs.php';
            ?>
            
            <!-- ABOUT COMPANY SECTION START -->
            <div class="section-full m-t80">
                    <div class="container">
                        <div class="row">
                            <h1 class="text-uppercase">Blog MAGIC SALON – odkrywaj świat urody z nami!</h1>
                            <div class="col-lg-12 col-md-12 m-b30">
                            <div class="section-head text-left">
                                <p>Witaj na blogu MAGIC SALON, miejscu stworzonym z myślą o wszystkich, którzy kochają piękno, pasjonują się pielęgnacją, a także szukają sprawdzonych informacji o najnowszych trendach w kosmetologii, zabiegach estetycznych i naturalnej trosce o ciało i umysł. Niezależnie od tego, czy jesteś stałą klientką, czy dopiero planujesz wizytę – ten blog powstał właśnie dla Ciebie!</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 m-b30">
                                <div class="section-head text-left">
                                    <h3 class="text-uppercase">Czym jest blog MAGIC SALON?</h3>
                                    <p>To przestrzeń, w której dzielimy się naszą wiedzą, doświadczeniem i pasją do upiększania. Nasz zespół kosmetolożek, stylistek oraz ekspertów z dziedziny estetyki i odnowy biologicznej regularnie tworzy wartościowe treści, które mają inspirować, edukować i pomóc Ci w dokonywaniu świadomych wyborów dotyczących Twojej urody i zdrowia.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 m-b30">
                            <div class="section-head text-left">
                                    <h3 class="text-uppercase">Blog to nie tylko teksty – to kontakt z Tobą!</h3>
                                <p>Dzięki blogowi mamy jeszcze bliższy kontakt z naszymi Klientkami i Klientami. Możesz komentować wpisy, zadawać pytania, a także proponować tematy, które Cię interesują. Naszym celem jest budowanie społeczności wokół piękna, zdrowia i samopoczucia – bo dbanie o siebie to coś więcej niż chwilowa moda. To styl życia, który chcemy Ci przybliżyć.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- ABOUT COMPANY SECTION END -->
        
            <!-- SECTION CONTENT START -->
            <div class="section-full p-b50">
                <div class="container">
                    
                    <!-- BLOG GRID START -->
                    <div class="portfolio-wrap wt-blog-grid-3 row">
                        <!-- COLUMNS 1 --> 
                        <div class="post masonry-item col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="blog-post blog-grid date-style-1">
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="../blog/jak-nowoczesne-zabiegi-kosmetyczne-zmieniaja-nasze-podejscie-do-pielegnacji-skory.php"><img src="../images/blog/grid/pic1.jpg" alt="Jak Nowoczesne Zabiegi Kosmetyczne Zmieniają Nasze Podejście do Pielęgnacji Skóry"></a>
                                </div>
                                <div class="wt-post-info p-t30 ">
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a href="../blog/jak-nowoczesne-zabiegi-kosmetyczne-zmieniaja-nasze-podejscie-do-pielegnacji-skory.php">Jak Nowoczesne Zabiegi Kosmetyczne Zmieniają Nasze Podejście do Pielęgnacji Skóry</a></h3>
                                    </div>
                                    <div class="wt-post-text">
                                        <p>Współczesna pielęgnacja skóry to coś więcej niż tylko codzienne nawilżanie. W dobie rosnącej świadomości o wpływie różnych czynników na stan naszej skóry, stawiamy na kompleksowe zabiegi kosmetyczne, które zapewniają spektakularne efekty i długotrwałe rezultaty. W MAGIC SALON łączymy najnowsze technologie z profesjonalną opieką, oferując szeroką gamę usług, które nie tylko poprawiają wygląd, ale także wpływają na nasze samopoczucie i zdrowie.</p> 
                                    </div>
                                    <div class="clearfix">
                                <div class="wt-post-readmore pull-left">
                                        <a href="../blog/jak-nowoczesne-zabiegi-kosmetyczne-zmieniaja-nasze-podejscie-do-pielegnacji-skory.php" title="CZYTAJ WIĘCEJ" rel="bookmark" class="site-button-link">Czytaj więcej</a>
                                </div>
                            </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 2 -->
                        <div class="post masonry-item col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="blog-post blog-grid date-style-1">
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="../blog/jak-wybrac-idealny-zabieg-kosmetyczny-dla-siebie.php"><img src="../images/blog/grid/pic2.jpg" alt="Jak Wybrać Idealny Zabieg Kosmetyczny dla Siebie?"></a>
                                </div>
                                <div class="wt-post-info p-t30 ">
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a href="../blog/jak-wybrac-idealny-zabieg-kosmetyczny-dla-siebie.php">Jak Wybrać Idealny Zabieg Kosmetyczny dla Siebie?</a></h3>
                                    </div>
                                    <div class="wt-post-text">
                                        <p>W dzisiejszych czasach, kiedy tempo życia jest niezwykle szybkie, a otoczenie pełne jest nowych technologii, dbanie o siebie stało się nie tylko modą, ale również koniecznością. W salonach kosmetycznych, takich jak MAGIC SALON, dostępne są najnowocześniejsze zabiegi, które pomagają poprawić wygląd, samopoczucie i zdrowie skóry. Jednak, jak wybrać zabieg, który będzie odpowiedni do Twoich potrzeb i oczekiwań? W tym wpisie podpowiemy, jak dokonać wyboru, który pozwoli Ci poczuć się piękniejszą, młodszą i bardziej zrelaksowaną!</p> 
                                    </div>
                                    <div class="clearfix">
                                <div class="wt-post-readmore pull-left">
                                        <a href="../blog/jak-wybrac-idealny-zabieg-kosmetyczny-dla-siebie.php" title="CZYTAJ WIĘCEJ" rel="bookmark" class="site-button-link">Czytaj więcej</a>
                                </div>
                            </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 3 -->
                        <div class="post masonry-item col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="blog-post blog-grid date-style-1">
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="../blog/nowoczesne-zabiegi-kosmetyczne-jak-technologie-zmienia-twoje-piekno.php"><img src="../images/blog/grid/pic3.jpg" alt="Nowoczesne Zabiegi Kosmetyczne: Jak Technologie Zmienią Twoje Piękno"></a>
                                </div>
                                <div class="wt-post-info p-t30 ">
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a href="../blog/nowoczesne-zabiegi-kosmetyczne-jak-technologie-zmienia-twoje-piekno.php">Nowoczesne Zabiegi Kosmetyczne: Jak Technologie Zmienią Twoje Piękno</a></h3>
                                    </div>
                                    <div class="wt-post-text">
                                        <p>W dzisiejszym świecie, gdzie tempo życia jest szybkie, a oczekiwania co do wyglądu rosną, coraz więcej osób decyduje się na profesjonalne zabiegi kosmetyczne, które pomogą im zadbać o skórę i wygląd w sposób kompleksowy. MAGIC SALON to miejsce, w którym spotykają się najnowsze technologie z pasją do piękna. Dzięki innowacyjnym zabiegom możesz poczuć się lepiej, wyglądać młodziej i cieszyć się zdrową skórą. W tym wpisie podpowiemy, jak nowoczesne zabiegi mogą zmienić Twoje podejście do pielęgnacji skóry oraz dlaczego warto inwestować w technologie, które zmieniają wygląd i samopoczucie.</p> 
                                    </div>
                                    <div class="clearfix">
                                <div class="wt-post-readmore pull-left">
                                        <a href="../blog/nowoczesne-zabiegi-kosmetyczne-jak-technologie-zmienia-twoje-piekno.php" title="CZYTAJ WIĘCEJ" rel="bookmark" class="site-button-link">Czytaj więcej</a>
                                </div>
                            </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 4 -->
                        <div class="post masonry-item col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="blog-post blog-grid date-style-1">
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="../blog/odkryj-moc-nowoczesnej-pielegnacji-innowacyjne-zabiegi-na-twarz-i-cialo-w-magic-salon.php"><img src="../images/blog/grid/pic4.jpg" alt="Odkryj Moc Nowoczesnej Pielęgnacji: Innowacyjne Zabiegi na Twarz i Ciało w MAGIC SALON"></a>
                                </div>
                                <div class="wt-post-info p-t30 ">
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a href="../blog/odkryj-moc-nowoczesnej-pielegnacji-innowacyjne-zabiegi-na-twarz-i-cialo-w-magic-salon.php">Odkryj Moc Nowoczesnej Pielęgnacji: Innowacyjne Zabiegi na Twarz i Ciało w MAGIC SALON</a></h3>
                                    </div>
                                    <div class="wt-post-text">
                                        <p>Każdy z nas zasługuje na chwilę relaksu, odrobinę luksusu oraz skuteczną pielęgnację, która pozwoli poczuć się wyjątkowo. MAGIC SALON to miejsce, gdzie profesjonalizm łączy się z pasją, oferując Ci kompleksową pielęgnację twarzy i ciała, dostosowaną do Twoich indywidualnych potrzeb. Dzięki innowacyjnym zabiegom, które łączą nowoczesne technologie z doświadczeniem naszych specjalistów, możesz w łatwy sposób poprawić kondycję swojej skóry, zadbać o sylwetkę oraz poczuć się pięknie i zdrowo. Przeczytaj, jak MAGIC SALON może odmienić Twoje ciało i umysł!</p> 
                                    </div>
                                    <div class="clearfix">
                                <div class="wt-post-readmore pull-left">
                                        <a href="../blog/odkryj-moc-nowoczesnej-pielegnacji-innowacyjne-zabiegi-na-twarz-i-cialo-w-magic-salon.php" title="CZYTYAJ WIĘCEJ" rel="bookmark" class="site-button-link">Czytaj więcej</a>
                                </div>
                            </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 5 -->
                        <div class="post masonry-item col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="blog-post blog-grid date-style-1">
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="../blog/odkryj-moc-twoj-piekno-najnowsze-trendy-i-innowacje-w-pielegnacji-skory-w-magic-salon.php"><img src="../images/blog/grid/pic5.jpg" alt="Odkryj Moc Twój Piękno: Najnowsze Trendy i Innowacje w Pielęgnacji Skóry w MAGIC SALON"></a>
                                </div>
                                <div class="wt-post-info p-t30 ">
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a href="../blog/odkryj-moc-twoj-piekno-najnowsze-trendy-i-innowacje-w-pielegnacji-skory-w-magic-salon.php">Odkryj Moc Twój Piękno: Najnowsze Trendy i Innowacje w Pielęgnacji Skóry w MAGIC SALON</a></h3>
                                    </div>
                                    <div class="wt-post-text">
                                        <p>Piękno nie jest jedynie tym, co widzimy na zewnątrz – to także to, jak się czujemy i jak dbamy o siebie. W MAGIC SALON wierzymy, że każda kobieta zasługuje na to, by poczuć się wyjątkowo, dlatego oferujemy szeroką gamę usług pielęgnacyjnych, które pozwolą Ci podkreślić swoją naturalną urodę, poczuć się pewnie i komfortowo we własnej skórze. Nasz salon kosmetyczny to miejsce, gdzie nowoczesne technologie łączą się z doświadczeniem i pasją naszych specjalistów.</p> 
                                    </div>
                                    <div class="clearfix">
                                <div class="wt-post-readmore pull-left">
                                        <a href="../blog/odkryj-moc-twoj-piekno-najnowsze-trendy-i-innowacje-w-pielegnacji-skory-w-magic-salon.php" title="CZYTAJ WIĘCEJ" rel="bookmark" class="site-button-link">Czytaj więcej</a>
                                </div>
                            </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 6 -->
                        <div class="post masonry-item col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="blog-post blog-grid date-style-1">
                                <div class="wt-post-media wt-img-effect zoom-slow">
                                    <a href="../blog/przedluzanie-rzes-i-laminacja-twoje-piekno-w-nowym-wydaniu.php"><img src="../images/blog/grid/pic6.jpg" alt="Przedłużanie Rzęs i Laminacja – Twoje Piękno w Nowym Wydaniu!"></a>
                                </div>
                                <div class="wt-post-info p-t30 ">
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a href="../blog/przedluzanie-rzes-i-laminacja-twoje-piekno-w-nowym-wydaniu.php">Przedłużanie Rzęs i Laminacja – Twoje Piękno w Nowym Wydaniu!</a></h3>
                                    </div>
                                    <div class="wt-post-text">
                                        <p>Piękne i zadbane rzęsy to jeden z kluczowych elementów, który podkreśla wyrazistość naszego spojrzenia. W dzisiejszym zabieganym świecie, gdzie każdy dzień pełen jest wyzwań, codzienna aplikacja maskary i poświęcanie czasu na makijaż może stać się uciążliwe. Jednak teraz, dzięki nowoczesnym zabiegom takim jak przedłużanie rzęs i laminacja, możesz cieszyć się idealnym wyglądem swoich rzęs bez codziennego nakładania tuszu!</p> 
                                    </div>
                                    <div class="clearfix">
                                <div class="wt-post-readmore pull-left">
                                        <a href="../blog/przedluzanie-rzes-i-laminacja-twoje-piekno-w-nowym-wydaniu.php" title="CZYTAJ WIĘCEJ" rel="bookmark" class="site-button-link">Czytaj więcej</a>
                                </div>
                            </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- BLOG GRID END -->
                    
                </div>
            </div>
            <!-- SECTION CONTENT END -->
            
            <!-- ABOUT COMPANY SECTION START -->
            <div class="section-full">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 m-b30">
                                <div class="section-head text-left">
                                    <h3 class="text-uppercase">Dla kogo jest nasz blog?</h3>
                                    <p>Dla wszystkich, którzy:<br><br>•	szukają <b>sprawdzonych informacji</b> o kosmetyce i estetyce,<br>•	chcą <b>poznać nasze zabiegi</b> od kuchni i dowiedzieć się, co najlepiej sprawdzi się w ich przypadku,<br>•	interesują się <b>nowoczesnymi rozwiązaniami pielęgnacyjnymi,</b><br>•	chcą poznać <b>opinie ekspertów</b> i klientów,<br>•	szukają <b>inspiracji do świadomego dbania o siebie.</b></p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 m-b30">
                            <div class="section-head text-left">
                                <h3 class="text-uppercase">Zostań z nami na dłużej</h3>
                                <p>Jeśli chcesz być na bieżąco z nowinkami kosmetycznymi, promocjami w salonie, sezonowymi ofertami oraz nowymi usługami – obserwuj nasz blog. To tutaj publikujemy wszystko, co warto wiedzieć, zanim zdecydujesz się na zabieg, zmianę pielęgnacji lub konsultację w naszym salonie.</p>
                                <p><b>Niech blog będzie Twoim przewodnikiem po świecie piękna, zdrowia i urody!</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- ABOUT COMPANY SECTION END -->
            
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
