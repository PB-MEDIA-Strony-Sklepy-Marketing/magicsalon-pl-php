<?php
/**
 * MAGIC SALON - Oferta: Laminacja brwi + architektura + farbka
 * Wersja: 1.0 – Strona premium przygotowana w Cursor
 */

require_once __DIR__ . DIRECTORY_SEPARATOR . 'config.php';

$meta = [
    'title' => 'Laminacja Brwi Dobrzykowice – Laminacja + Architektura + Farbka 140 zł | Magic Salon',
    'description' => 'Zamów kompleksową laminację brwi z architekturą i farbką w Magic Salon (Dobrzykowice, okolice Wrocławia). Perfekcyjne brwi na 6 tygodni, konsultacja, mapping i pielęgnacja profesjonalnymi preparatami.',
    'keywords' => 'laminacja brwi dobrzykowice, laminacja brwi wrocław, architektura brwi, stylizacja brwi, brow lamination, salon kosmetyczny Czernica',
    'canonical' => BASE_URL . '/oferta-laminacja-brwi-cursor.php',
    'robots' => 'index, follow, max-image-preview:large',
    'og' => [
        'type' => 'website',
        'title' => 'Laminacja Brwi – Kompletny Pakiet w Magic Salon',
        'description' => 'Pakiet laminacja + architektura + farbka za 140 zł. Idealne brwi na 4-6 tygodni z mappingiem, odżywieniem keratynowym i farbką premium.',
        'url' => BASE_URL . '/oferta-laminacja-brwi-cursor.php',
        'image' => BASE_URL . '/images/oferta-details/laminacja-brwi-hero.jpg',
    ],
    'twitter' => [
        'card' => 'summary_large_image',
        'title' => 'Laminacja brwi w Magic Salon',
        'description' => 'Poznaj luksusowy rytuał brow lamination z architekturą i farbką w Dobrzykowicach.',
        'image' => BASE_URL . '/images/oferta-details/laminacja-brwi-hero.jpg',
    ],
    'schema' => [
        'enabled' => true,
        'type' => 'Service',
        'name' => 'Laminacja brwi z architekturą i farbką',
        'description' => 'Profesjonalny zabieg laminacji brwi obejmujący konsultację, mapping brwi, laminację, farbowanie i pielęgnację odżywczą.',
        'provider' => [
            '@type' => 'BeautySalon',
            'name' => 'MAGIC SALON – Salon kosmetyczny',
            'address' => [
                'streetAddress' => 'ul. Borówkowa 13',
                'postalCode' => '55-002',
                'addressLocality' => 'Dobrzykowice',
                'addressCountry' => 'PL',
            ],
            'telephone' => '+48 883 481 581',
            'url' => BASE_URL,
        ],
        'areaServed' => [
            '@type' => 'City',
            'name' => 'Dobrzykowice, Wrocław, gmina Czernica',
        ],
        'offers' => [
            '@type' => 'Offer',
            'price' => '140',
            'priceCurrency' => 'PLN',
            'availability' => 'https://schema.org/InStock',
        ],
    ],
];

include __DIR__ . DIRECTORY_SEPARATOR . 'partials' . DIRECTORY_SEPARATOR . 'head.php';
?>

<body id="bg" class="offer-laminacja-brwi">
    <div class="page-wraper">
        <?php include __DIR__ . DIRECTORY_SEPARATOR . 'partials' . DIRECTORY_SEPARATOR . 'header.php'; ?>

        <div class="page-content bg-white">
            <?php
            $banner_img = 'images/banner/gallery-banner.jpg';
            $page_title = 'Laminacja brwi';
            $page_desc = 'Kompletny rytuał brow lamination: laminacja + architektura + farbka + pielęgnacja keratynowa. Perfekcyjne brwi na 6 tygodni w Magic Salon Dobrzykowice.';
            $breadcrumbs = [
                ['label' => 'Strona Główna', 'url' => 'index.php', 'icon' => 'fa fa-home'],
                ['label' => 'Oferta', 'url' => 'oferta.php', 'icon' => 'fa fa-list'],
                ['label' => 'Laminacja brwi', 'url' => '', 'icon' => 'fa fa-eye'],
            ];
            include __DIR__ . DIRECTORY_SEPARATOR . 'partials' . DIRECTORY_SEPARATOR . 'breadcrumbs.php';
            ?>

            <!--====== Start Main Content ======-->
            <style>
                .lb-hero {
                    position: relative;
                    min-height: 70vh;
                    display: flex;
                    align-items: center;
                    background: linear-gradient(120deg, rgba(15, 8, 24, 0.9), rgba(109, 53, 111, 0.7)), url("<?= asset('images/oferta-details/laminacja-brwi-hero.jpg'); ?>") center/cover;
                    color: #fff;
                    overflow: hidden;
                }

                .lb-hero::after {
                    content: '';
                    position: absolute;
                    inset: 0;
                    background: radial-gradient(circle at 20% 30%, rgba(215, 165, 79, 0.5), transparent 40%);
                }

                .lb-hero .container {
                    position: relative;
                    z-index: 1;
                }

                .lb-badge {
                    display: inline-flex;
                    align-items: center;
                    gap: .45rem;
                    padding: .4rem 1.1rem;
                    border-radius: 999px;
                    border: 1px solid rgba(255, 255, 255, 0.4);
                    background: rgba(255, 255, 255, 0.12);
                    letter-spacing: .08em;
                    text-transform: uppercase;
                    font-size: .78rem;
                }

                .lb-hero h1 {
                    font-size: clamp(2.6rem, 4vw, 3.8rem);
                    font-weight: 700;
                    margin: 1.5rem 0 1rem;
                    line-height: 1.15;
                }

                .lb-hero p {
                    font-size: 1.05rem;
                    max-width: 640px;
                    color: rgba(255, 255, 255, 0.9);
                }

                .lb-btn-primary,
                .lb-btn-outline {
                    border-radius: 999px;
                    padding: .85rem 1.8rem;
                    font-weight: 600;
                    text-transform: uppercase;
                    letter-spacing: .02em;
                    transition: all .3s ease;
                    border: 2px solid transparent;
                }

                .lb-btn-primary {
                    background: linear-gradient(135deg, #D7A54F, #9F5BA4);
                    color: #fff;
                    box-shadow: 0 15px 40px rgba(109, 53, 111, 0.3);
                }

                .lb-btn-primary:hover {
                    transform: translateY(-3px);
                    color: #fff;
                }

                .lb-btn-outline {
                    border-color: rgba(255, 255, 255, 0.5);
                    color: #fff;
                }

                .lb-btn-outline:hover {
                    border-color: #fff;
                    background: rgba(255, 255, 255, 0.1);
                }

                .lb-stats {
                    display: flex;
                    gap: 1.5rem;
                    flex-wrap: wrap;
                    margin-top: 1.75rem;
                }

                .lb-stat .value {
                    font-size: 2.5rem;
                    font-weight: 700;
                    color: var(--color-theme-secondary, #D7A54F);
                }

                .lb-section {
                    padding: 80px 0;
                }

                .lb-section-title {
                    font-size: clamp(2rem, 3vw, 2.8rem);
                    font-weight: 700;
                    color: #1C1330;
                }

                .lb-section-subtitle {
                    color: #6E6483;
                    font-size: 1.05rem;
                }

                .lb-card {
                    background: #fff;
                    border-radius: 20px;
                    padding: 1.75rem;
                    box-shadow: 0 25px 55px rgba(20, 16, 38, 0.08);
                    border: 1px solid rgba(109, 53, 111, 0.08);
                    transition: transform .35s ease, border-color .35s ease;
                    height: 100%;
                }

                .lb-card:hover {
                    transform: translateY(-6px);
                    border-color: rgba(215, 165, 79, 0.8);
                }

                .lb-card-icon {
                    width: 54px;
                    height: 54px;
                    border-radius: 16px;
                    background: rgba(109, 53, 111, 0.1);
                    color: var(--color-theme-primary);
                    display: inline-flex;
                    align-items: center;
                    justify-content: center;
                    font-size: 1.25rem;
                    margin-bottom: 1rem;
                }

                .lb-pill {
                    display: inline-flex;
                    align-items: center;
                    gap: .4rem;
                    padding: .4rem .95rem;
                    border-radius: 999px;
                    background: rgba(215, 165, 79, 0.15);
                    color: #8b6120;
                    font-weight: 600;
                    font-size: .85rem;
                }

                .lb-grid {
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
                    gap: 1.5rem;
                    margin-top: 2.5rem;
                }

                .lb-process {
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
                    gap: 1.25rem;
                }

                .lb-process-step {
                    border-radius: 18px;
                    border: 1px solid rgba(109, 53, 111, 0.1);
                    padding: 1.5rem;
                    background: #fff;
                    position: relative;
                    overflow: hidden;
                }

                .lb-process-step::before {
                    content: attr(data-step);
                    position: absolute;
                    top: 1rem;
                    right: 1rem;
                    font-weight: 700;
                    color: rgba(109, 53, 111, 0.15);
                    font-size: 2.5rem;
                }

                .lb-list {
                    list-style: none;
                    padding: 0;
                    margin: 0;
                    display: grid;
                    gap: .85rem;
                }

                .lb-list li {
                    display: flex;
                    align-items: flex-start;
                    gap: .7rem;
                    color: #4a4358;
                }

                .lb-list i {
                    color: var(--color-theme-secondary, #D7A54F);
                    font-size: 1rem;
                    margin-top: 3px;
                }

                .lb-parallax {
                    background-attachment: fixed;
                    background-size: cover;
                    background-position: center;
                    color: #fff;
                    position: relative;
                    padding: 90px 0;
                }

                .lb-parallax::before {
                    content: '';
                    position: absolute;
                    inset: 0;
                    background: rgba(9, 6, 17, 0.78);
                }

                .lb-parallax .container {
                    position: relative;
                    z-index: 1;
                }

                .lb-price-card {
                    background: linear-gradient(150deg, #fff, #f8f2fa);
                    border-radius: 24px;
                    padding: 2.5rem;
                    box-shadow: 0 40px 90px rgba(20, 16, 38, 0.12);
                }

                .lb-price {
                    font-size: 3.2rem;
                    font-weight: 700;
                    color: var(--color-theme-primary);
                    line-height: 1;
                }

                .lb-faq .card {
                    border: none;
                    border-radius: 18px;
                    box-shadow: 0 25px 60px rgba(20, 16, 38, 0.08);
                    margin-bottom: 1rem;
                    overflow: hidden;
                }

                .lb-faq .card-header {
                    background: #fff;
                    border: none;
                    padding: 0;
                }

                .lb-faq button {
                    width: 100%;
                    text-align: left;
                    padding: 1.2rem 1.5rem;
                    font-weight: 600;
                    color: #1C1330;
                    background: #fff;
                }

                .lb-cta {
                    background: linear-gradient(120deg, rgba(109, 53, 111, 0.95), rgba(27, 14, 45, 0.95)), url("<?= asset('images/background/bg-7.png'); ?>");
                    background-blend-mode: overlay;
                    border-radius: 26px;
                    padding: 3rem;
                    color: #fff;
                    text-align: center;
                    box-shadow: 0 40px 100px rgba(9, 6, 17, 0.45);
                }

                .lb-smooth-anchor {
                    cursor: pointer;
                }

                @media (max-width: 767px) {
                    .lb-hero {
                        text-align: center;
                    }

                    .lb-stats {
                        justify-content: center;
                    }
                }
            </style>

            <section class="lb-hero" data-animate="fade">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <span class="lb-badge"><i class="fa fa-feather-alt"></i> Laminacja + architektura + farbka</span>
                            <h1>Brwi jak z runway’u – laminacja, która trwa 6 tygodni</h1>
                            <p>
                                W Magic Salon łączymy laminację brwi z architekturą i farbką, aby w jednej wizycie uzyskać perfekcyjnie ułożone, wyraziste i odżywione brwi.
                                W Dobrzykowicach (20 min od Wrocławia) odkryjesz luksusowy rytuał, który oszczędza Twój czas każdego poranka.
                            </p>
                            <div class="d-flex flex-wrap gap-3 mt-4">
                                <a href="https://booksy.magicsalon.pl" class="lb-btn-primary" target="_blank">
                                    Rezerwuj w Booksy
                                </a>
                                <a class="lb-btn-outline lb-smooth-anchor" data-target="#lb-o-zabiegu">
                                    Poznaj zabieg
                                </a>
                            </div>
                            <div class="lb-stats">
                                <div class="lb-stat">
                                    <div class="value">140 zł</div>
                                    <p>za komplet laminacja + architektura + farbka</p>
                                </div>
                                <div class="lb-stat">
                                    <div class="value">6 tyg.</div>
                                    <p>perfekcyjnych, elastycznych brwi</p>
                                </div>
                                <div class="lb-stat">
                                    <div class="value">60-75'</div>
                                    <p>czas trwania luksusowego rytuału</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="lb-o-zabiegu" class="lb-section cdr-gradient-bg">
                <div class="container">
                    <div class="row align-items-center m-b40">
                        <div class="col-lg-6" data-animate="slide-right">
                            <span class="lb-pill">Kwas tioglikolowy • keratyna • architektura</span>
                            <h2 class="lb-section-title m-t15">Laminacja brwi – co dzieje się podczas zabiegu?</h2>
                            <p class="lb-section-subtitle">
                                Laminacja brow lamination wykorzystuje kwas tioglikolowy, który otwiera łuski włosa, aby nadać im nowy kierunek wzrostu.
                                W Magic Salon łączymy ją z mappingiem brwi i farbką, dzięki czemu wychodzisz z ready to wear brwiami w stylu brow lift.
                            </p>
                        </div>
                        <div class="col-lg-6" data-animate="fade-up">
                            <div class="lb-grid">
                                <div class="lb-card">
                                    <div class="lb-card-icon"><i class="fa fa-swatchbook"></i></div>
                                    <h4>Architektura i mapping</h4>
                                    <p>Analizujemy rysy twarzy, wyznaczamy trzy punkty (start, łuk, koniec) i dopasowujemy kształt do Twoich proporcji.</p>
                                </div>
                                <div class="lb-card">
                                    <div class="lb-card-icon"><i class="fa fa-fire"></i></div>
                                    <h4>Laminacja chemiczna</h4>
                                    <p>Preparat nr 1 zmiękcza włosy, preparat nr 2 utrwala nowy kierunek wzrostu. Dodajemy keratynę i botoks brwi.</p>
                                </div>
                                <div class="lb-card">
                                    <div class="lb-card-icon"><i class="fa fa-palette"></i></div>
                                    <h4>Farbka premium</h4>
                                    <p>Dobieramy pigment do typu urody. Farbka barwi włosy i meszki, dając efekt optycznego zagęszczenia.</p>
                                </div>
                                <div class="lb-card">
                                    <div class="lb-card-icon"><i class="fa fa-leaf"></i></div>
                                    <h4>Pielęgnacja keratynowa</h4>
                                    <p>Kończymy rytuał serum z olejkami, aby włoski były sprężyste, lśniące i odporne na uszkodzenia.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row align-items-center">
                        <div class="col-lg-6 m-b30" data-animate="fade-up">
                            <div class="lb-card h-100">
                                <h4>Etapy wizyty (60-75 minut)</h4>
                                <div class="lb-process m-t20">
                                    <div class="lb-process-step" data-step="01">
                                        <strong>Konsultacja i oczyszczenie</strong>
                                        <p>Wywiad, analiza kształtu twarzy, oczyszczenie z makijażu i sebum.</p>
                                    </div>
                                    <div class="lb-process-step" data-step="02">
                                        <strong>Architektura brwi</strong>
                                        <p>Mapping, wyznaczenie kluczowych punktów, regulacja zbędnych włosków, akceptacja kształtu.</p>
                                    </div>
                                    <div class="lb-process-step" data-step="03">
                                        <strong>Laminacja i odżywienie</strong>
                                        <p>Aplikacja preparatów, czesanie w górę, neutralizacja, keratyna i botoks brwi.</p>
                                    </div>
                                    <div class="lb-process-step" data-step="04">
                                        <strong>Farbka i zalecenia</strong>
                                        <p>Dobór odcienia, aplikacja farbki, finalny olejek i instrukcja pielęgnacji domowej.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6" data-animate="slide-left">
                            <div class="lb-card h-100">
                                <h4>Efekty, które pokochasz</h4>
                                <ul class="lb-list m-t20">
                                    <li><i class="fa fa-check-circle"></i> Idealnie ułożone włoski na 4-6 tygodni bez stylizacji</li>
                                    <li><i class="fa fa-check-circle"></i> Efekt liftingu – uniesione brwi optycznie powiększają oko</li>
                                    <li><i class="fa fa-check-circle"></i> Pełniejszy kształt i wypełnienie luk dzięki farbce</li>
                                    <li><i class="fa fa-check-circle"></i> Nawilżone, elastyczne włosy dzięki keratynie i olejkom</li>
                                    <li><i class="fa fa-check-circle"></i> Oszczędność czasu – zero porannych poprawek</li>
                                    <li><i class="fa fa-check-circle"></i> Brwi dopasowane do Twoich proporcji twarzy</li>
                                </ul>
                                <p class="text-muted m-t20"><i class="fa fa-info-circle"></i> Efekt utrzymuje się nawet 8 tygodni przy właściwej pielęgnacji domowej.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="lb-section">
                <div class="container">
                    <div class="row align-items-center m-b40">
                        <div class="col-lg-6" data-animate="slide-right">
                            <span class="lb-pill">Dla kogo jest brow lamination?</span>
                            <h2 class="lb-section-title m-t15">Najlepsze rozwiązanie dla niesfornych, cienkich i jasnych brwi</h2>
                            <p class="lb-section-subtitle">Zabieg jest idealny dla osób z włoskami rosnącymi w różnych kierunkach, z rzadkimi przerwami oraz dla miłośniczek naturalnego efektu soap brows.</p>
                        </div>
                        <div class="col-lg-6" data-animate="fade-up">
                            <div class="lb-grid">
                                <div class="lb-card">
                                    <strong>Wskazania</strong>
                                    <ul class="lb-list m-t15">
                                        <li><i class="fa fa-check-circle"></i> Niesforne, sterczące włoski</li>
                                        <li><i class="fa fa-check-circle"></i> Cienkie, rzadkie lub jasne brwi</li>
                                        <li><i class="fa fa-check-circle"></i> Brak czasu na codzienną stylizację</li>
                                        <li><i class="fa fa-check-circle"></i> Przygotowanie do ślubu, sesji zdjęciowej</li>
                                    </ul>
                                </div>
                                <div class="lb-card">
                                    <strong>Przeciwwskazania</strong>
                                    <ul class="lb-list m-t15">
                                        <li><i class="fa fa-times-circle text-danger"></i> Alergia na preparaty (kwas tioglikolowy)</li>
                                        <li><i class="fa fa-times-circle text-danger"></i> Ciąża i karmienie piersią</li>
                                        <li><i class="fa fa-times-circle text-danger"></i> Świeży makijaż permanentny (odczekaj 4 tyg.)</li>
                                        <li><i class="fa fa-times-circle text-danger"></i> Stany zapalne lub otwarte rany w okolicy brwi</li>
                                    </ul>
                                    <small class="text-muted">W razie wątpliwości oferujemy test uczuleniowy 24h przed zabiegiem.</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 m-b30" data-animate="slide-right">
                            <div class="lb-card h-100">
                                <h4>Jak przygotować się do laminacji?</h4>
                                <ul class="lb-list m-t15">
                                    <li><i class="fa fa-star"></i> Nie reguluj brwi samodzielnie minimum tydzień przed wizytą</li>
                                    <li><i class="fa fa-star"></i> Unikaj henny i farbowania przez 2 tygodnie</li>
                                    <li><i class="fa fa-star"></i> Nie opalaj twarzy i nie rób intensywnego peelingu 2-3 dni przed zabiegiem</li>
                                    <li><i class="fa fa-star"></i> Przychodź bez makijażu lub z delikatnym makijażem brwi</li>
                                    <li><i class="fa fa-star"></i> Poinformuj stylistkę o alergiach i przyjmowanych lekach</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6" data-animate="slide-left">
                            <div class="lb-card h-100">
                                <h4>Pielęgnacja po zabiegu</h4>
                                <p class="text-muted">Pierwsze 24-48 godzin są kluczowe dla utrwalenia efektu.</p>
                                <ul class="lb-list m-t15">
                                    <li><i class="fa fa-ban"></i> Nie mocz i nie dotykaj brwi, unikaj sauny, basenu, pocenia</li>
                                    <li><i class="fa fa-ban"></i> Nie nakładaj kremów, makijażu, olejków na brwi</li>
                                    <li><i class="fa fa-check-circle"></i> Po 48h codziennie czesz włoski szczoteczką</li>
                                    <li><i class="fa fa-check-circle"></i> Nawilżaj olejkiem arganowym lub serum keratynowym</li>
                                    <li><i class="fa fa-check-circle"></i> Unikaj mocnych peelingów i kosmetyków z alkoholem</li>
                                </ul>
                                <p class="text-muted m-t15"><i class="fa fa-lightbulb"></i> Stosuj odżywkę lub olejek na noc – to wydłuży efekt i ochroni włosy.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="lb-parallax" style="background-image:url('<?= asset('images/background/bg-8.jpg'); ?>');">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8" data-animate="slide-right">
                            <span class="lb-pill">Lokalizacja premium tuż pod Wrocławiem</span>
                            <h2 class="lb-section-title text-white m-t15">Dlaczego warto przyjechać do Magic Salon?</h2>
                            <p class="m-b20">Mieszkasz na wschodzie Wrocławia lub w gminie Czernica? Zamiast jeździć do centrum, wybierz salon z topowymi usługami beauty w Dobrzykowicach. Obsługujemy klientki z Psiego Pola, Wojnowa, Strachocina, Kamieńca Wrocławskiego i Siechnic.</p>
                            <div class="lb-grid">
                                <div class="lb-card">
                                    <strong>Nasze przewagi</strong>
                                    <ul class="lb-list m-t10">
                                        <li><i class="fa fa-map-marker-alt"></i> Prywatny parking i brak korków</li>
                                        <li><i class="fa fa-user-check"></i> Certyfikowane stylistki brwi</li>
                                        <li><i class="fa fa-vial"></i> Profesjonalne preparaty, keratyna, botox brow</li>
                                        <li><i class="fa fa-calendar-check"></i> Szybka rezerwacja w Booksy i elastyczne godziny</li>
                                    </ul>
                                </div>
                                <div class="lb-card">
                                    <strong>SEO & lokalne frazy</strong>
                                    <ul class="lb-list m-t10">
                                        <li><i class="fa fa-search"></i> Laminacja brwi Dobrzykowice</li>
                                        <li><i class="fa fa-search"></i> Laminacja brwi Psie Pole</li>
                                        <li><i class="fa fa-search"></i> Salon brwi Czernica / Kamieniec Wrocławski</li>
                                        <li><i class="fa fa-search"></i> Stylizacja brwi Wojnów, Strachocin</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 m-t30" data-animate="zoom">
                            <div class="lb-price-card text-center">
                                <span class="lb-pill">Cennik laminacji</span>
                                <div class="lb-price m-t20">140 zł</div>
                                <p class="text-muted">Kompletny pakiet: konsultacja, architektura, laminacja, farbka, keratyna.</p>
                                <hr>
                                <ul class="lb-list text-left">
                                    <li><i class="fa fa-gem"></i> Henna + regulacja: 50 zł</li>
                                    <li><i class="fa fa-gem"></i> Henna brwi + rzęs: 65 zł</li>
                                    <li><i class="fa fa-gem"></i> Laminacja + architektura + farbka: <strong>140 zł</strong></li>
                                    <li><i class="fa fa-gem"></i> Zabieg powtórny po 6 tyg.: 130 zł</li>
                                </ul>
                                <a href="https://booksy.magicsalon.pl" class="lb-btn-primary d-inline-flex align-items-center justify-content-center m-t20" target="_blank">
                                    <i class="fa fa-calendar m-r10"></i> Umów wizytę online
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="lb-section cdr-gradient-bg">
                <div class="container">
                    <div class="row m-b40">
                        <div class="col-lg-8 mx-auto text-center">
                            <span class="lb-pill">FAQ</span>
                            <h2 class="lb-section-title m-t15">Najczęściej zadawane pytania o laminację brwi</h2>
                            <p class="lb-section-subtitle">Zebraliśmy odpowiedzi na najpopularniejsze pytania, które słyszymy podczas konsultacji.</p>
                        </div>
                    </div>

                    <div class="lb-faq">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card" data-animate="fade-up">
                                    <div class="card-header">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#faq1">
                                            Czy laminacja brwi boli lub niszczy włoski?
                                        </button>
                                    </div>
                                    <div id="faq1" class="collapse">
                                        <div class="card-body">
                                            Zabieg jest całkowicie bezbolesny. Włosy są zabezpieczone keratyną i olejkami,
                                            dlatego przy zachowaniu 6-8 tygodni przerwy włoski nie ulegają zniszczeniu.
                                        </div>
                                    </div>
                                </div>
                                <div class="card" data-animate="fade-up">
                                    <div class="card-header">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#faq2">
                                            Jak długo utrzymuje się efekt i kiedy powtórzyć zabieg?
                                        </button>
                                    </div>
                                    <div id="faq2" class="collapse">
                                        <div class="card-body">
                                            Efekt trwa 4-6 tygodni, a przy odpowiedniej pielęgnacji nawet 8 tygodni. Zabieg powtarzamy nie częściej niż co 6-8 tygodni,
                                            aby nie przeciążać włosków.
                                        </div>
                                    </div>
                                </div>
                                <div class="card" data-animate="fade-up">
                                    <div class="card-header">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#faq3">
                                            Czy mogę malować brwi po laminacji?
                                        </button>
                                    </div>
                                    <div id="faq3" class="collapse">
                                        <div class="card-body">
                                            Po 48 godzinach możesz używać makijażu, choć większość klientek nie czuje już takiej potrzeby – brwi są gęste, ciemniejsze i idealnie ułożone.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card" data-animate="fade-up">
                                    <div class="card-header">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#faq4">
                                            Co jeśli mam bardzo cienkie lub przycięte brwi?
                                        </button>
                                    </div>
                                    <div id="faq4" class="collapse">
                                        <div class="card-body">
                                            Laminacja nie sprawdzi się na mocno przyciętych brwiach – najpierw pozwól im odrosnąć. Przy bardzo rzadkich włoskach pomoże farbka i optyczne zagęszczenie, ale rozważ też makijaż permanentny.
                                        </div>
                                    </div>
                                </div>
                                <div class="card" data-animate="fade-up">
                                    <div class="card-header">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#faq5">
                                            Czy mogę iść na basen lub saunę po laminacji?
                                        </button>
                                    </div>
                                    <div id="faq5" class="collapse">
                                        <div class="card-body">
                                            Przez pierwsze 24-48 godzin unikaj wody, pary oraz wysokich temperatur. Po tym czasie możesz wrócić do basenu, sauny i treningów.
                                        </div>
                                    </div>
                                </div>
                                <div class="card" data-animate="fade-up">
                                    <div class="card-header">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#faq6">
                                            Jakie są alternatywy dla laminacji?
                                        </button>
                                    </div>
                                    <div id="faq6" class="collapse">
                                        <div class="card-body">
                                            Laminacja daje naturalny efekt. Alternatywy to henna pudrowa (2-4 tyg.), makijaż permanentny (1-3 lata) lub codzienny makijaż. Laminacja wygrywa naturalnością i brakiem stresu związanego z pigmentacją skóry.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="lb-section">
                <div class="container">
                    <div class="lb-cta" data-animate="fade-up">
                        <span class="lb-pill">Zarezerwuj termin już dziś</span>
                        <h2 class="lb-section-title text-white m-t15">Perfekcyjne brwi zaczynają się w Magic Salon</h2>
                        <p class="m-b30">Laminacja, architektura i farbka to inwestycja w Twój komfort i pewność siebie. Zostaw poranne stylizacje za sobą – my zajmiemy się wszystkim.</p>
                        <div class="d-flex flex-wrap gap-3 justify-content-center">
                            <a href="https://booksy.magicsalon.pl" class="lb-btn-primary" target="_blank">
                                Booksy – rezerwacja 24/7
                            </a>
                            <a href="tel:+48883481581" class="lb-btn-outline">
                                Zadzwoń: +48 883 481 581
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const observer = new IntersectionObserver((entries) => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                entry.target.classList.add('animate-visible');
                                observer.unobserve(entry.target);
                            }
                        });
                    }, {
                        threshold: 0.15
                    });

                    document.querySelectorAll('[data-animate]').forEach(el => {
                        el.classList.add('animate-hidden', `animate-${el.dataset.animate}`);
                        observer.observe(el);
                    });

                    document.querySelectorAll('.lb-smooth-anchor').forEach(link => {
                        link.addEventListener('click', e => {
                            e.preventDefault();
                            const target = document.querySelector(link.dataset.target);
                            if (target) {
                                window.scrollTo({
                                    top: target.offsetTop - 80,
                                    behavior: 'smooth'
                                });
                            }
                        });
                    });
                });
            </script>

            <style>
                .animate-hidden {
                    opacity: 0;
                    transform: translateY(25px);
                    transition: all .8s ease;
                }

                .animate-visible {
                    opacity: 1;
                    transform: none;
                }

                .animate-slide-right {
                    transform: translateX(-40px);
                }

                .animate-slide-left {
                    transform: translateX(40px);
                }

                .animate-zoom {
                    transform: scale(0.95);
                }

                .animate-fade-up {
                    transform: translateY(40px);
                }

                .animate-hidden.animate-slide-right.animate-visible,
                .animate-hidden.animate-slide-left.animate-visible,
                .animate-hidden.animate-zoom.animate-visible,
                .animate-hidden.animate-fade-up.animate-visible,
                .animate-hidden.animate-fade.animate-visible {
                    transform: none;
                }
            </style>
            <!--====== End Main Content ======-->
        </div>

        <?php include __DIR__ . DIRECTORY_SEPARATOR . 'partials' . DIRECTORY_SEPARATOR . 'footer.php'; ?>
    </div>
</body>

