<?php
/**
 * MAGIC SALON - Oferta: Goodbye Cellulite
 * Wersja: 1.0 - Strona premium przygotowana w Cursor
 */

require_once __DIR__ . DIRECTORY_SEPARATOR . 'config.php';

$meta = [
    'title' => 'Goodbye Cellulite – Redukcja Cellulitu 180 zł | Magic Salon Dobrzykowice',
    'description' => 'Pozbądź się cellulitu dzięki terapii Goodbye Cellulite w Magic Salon. Połączenie RF, vacuum i drenażu limfatycznego. Seria 10-15 zabiegów, efekty już po 3 wizytach.',
    'keywords' => 'goodbye cellulite, zabiegi na cellulit, redukcja cellulitu Wrocław, masaż próżniowy Dobrzykowice, endermologia okolice Wrocławia',
    'canonical' => BASE_URL . '/oferta-goodbye-cellulite-cursor.php',
    'robots' => 'index, follow, max-image-preview:large',
    'og' => [
        'type' => 'website',
        'title' => 'Goodbye Cellulite – Skuteczna Terapia Antycellulitowa',
        'description' => 'Kombinacja masażu próżniowego, fal RF i kawitacji w Magic Salon. Redukcja obwodów o 2-7 cm, jędrna skóra bez „skórki pomarańczowej”.',
        'url' => BASE_URL . '/oferta-goodbye-cellulite-cursor.php',
        'image' => BASE_URL . '/images/oferta-details/goodbye-cellulite-hero.jpg',
    ],
    'twitter' => [
        'card' => 'summary_large_image',
        'title' => 'Goodbye Cellulite – Zabiegi na cellulit w Magic Salon',
        'description' => 'Seria 10-15 zabiegów w cenie 180 zł za sesję. Efekty potwierdzone badaniami klinicznymi.',
        'image' => BASE_URL . '/images/oferta-details/goodbye-cellulite-hero.jpg',
    ],
    'schema' => [
        'enabled' => true,
        'type' => 'Service',
        'name' => 'Goodbye Cellulite – Profesjonalna terapia antycellulitowa',
        'description' => 'Zabieg łączący masaż próżniowy, fale radiowe i drenaż limfatyczny w celu redukcji cellulitu i obwodów ciała.',
        'provider' => [
            '@type' => 'BeautySalon',
            'name' => 'MAGIC SALON – Salon kosmetyczny',
            'address' => [
                'streetAddress' => 'ul. Borówkowa 13',
                'postalCode' => '55-002',
                'addressLocality' => 'Dobrzykowice',
                'addressCountry' => 'PL'
            ],
            'telephone' => '+48 883 481 581',
            'url' => BASE_URL
        ],
        'areaServed' => [
            '@type' => 'City',
            'name' => 'Wrocław, Dobrzykowice, gmina Czernica'
        ],
        'offers' => [
            '@type' => 'Offer',
            'price' => '180',
            'priceCurrency' => 'PLN',
            'availability' => 'https://schema.org/InStock'
        ]
    ]
];

include __DIR__ . DIRECTORY_SEPARATOR . 'partials' . DIRECTORY_SEPARATOR . 'head.php';
?>

<body id="bg" class="offer-goodbye-cellulite">
    <div class="page-wraper">
        <?php include __DIR__ . DIRECTORY_SEPARATOR . 'partials' . DIRECTORY_SEPARATOR . 'header.php'; ?>

        <div class="page-content bg-white">
            <?php
            $banner_img = 'images/banner/gallery-banner.jpg';
            $page_title = 'Goodbye Cellulite';
            $page_desc = 'Luksusowa terapia antycellulitowa łącząca fale radiowe, vacuum i drenaż limfatyczny. Skuteczna redukcja cellulitu I-III stopnia i wymodelowana sylwetka.';
            $breadcrumbs = [
                ['label' => 'Strona Główna', 'url' => 'index.php', 'icon' => 'fa fa-home'],
                ['label' => 'Oferta', 'url' => 'oferta.php', 'icon' => 'fa fa-list'],
                ['label' => 'Goodbye Cellulite', 'url' => '', 'icon' => 'fa fa-spa'],
            ];
            include __DIR__ . DIRECTORY_SEPARATOR . 'partials' . DIRECTORY_SEPARATOR . 'breadcrumbs.php';
            ?>

            <!--====== Start Main Content ======-->
            <style>
                .gc-hero {
                    position: relative;
                    overflow: hidden;
                    min-height: 65vh;
                    display: flex;
                    align-items: center;
                    background: linear-gradient(120deg, rgba(12, 6, 21, 0.9), rgba(109, 53, 111, 0.8)), url("<?= asset('images/oferta-details/goodbye-cellulite-hero.jpg'); ?>") center/cover;
                    color: #fff;
                }

                .gc-hero::after {
                    content: '';
                    position: absolute;
                    inset: 0;
                    background: radial-gradient(circle at 20% 30%, rgba(215, 165, 79, 0.55), transparent 40%);
                }

                .gc-hero .container {
                    position: relative;
                    z-index: 1;
                }

                .gc-badge {
                    display: inline-flex;
                    align-items: center;
                    gap: .5rem;
                    background: rgba(255, 255, 255, 0.15);
                    border: 1px solid rgba(255, 255, 255, 0.4);
                    border-radius: 30px;
                    padding: .35rem 1.1rem;
                    text-transform: uppercase;
                    font-size: .8rem;
                    letter-spacing: .08em;
                }

                .gc-hero h1 {
                    font-size: clamp(2.5rem, 4vw, 3.8rem);
                    font-weight: 700;
                    line-height: 1.1;
                    margin: 1.2rem 0;
                }

                .gc-hero p {
                    font-size: 1.1rem;
                    max-width: 650px;
                    color: rgba(255, 255, 255, 0.9);
                }

                .gc-btn-primary,
                .gc-btn-outline {
                    border-radius: 999px;
                    padding: .85rem 1.7rem;
                    font-weight: 600;
                    text-transform: uppercase;
                    letter-spacing: .02em;
                    transition: all .3s ease;
                    border: 2px solid transparent;
                }

                .gc-btn-primary {
                    background: linear-gradient(135deg, #D7A54F, #9F5BA4);
                    color: #fff;
                    box-shadow: 0 15px 40px rgba(109, 53, 111, 0.3);
                }

                .gc-btn-primary:hover {
                    transform: translateY(-3px);
                    color: #fff;
                }

                .gc-btn-outline {
                    border-color: rgba(255, 255, 255, 0.5);
                    color: #fff;
                }

                .gc-btn-outline:hover {
                    border-color: #fff;
                    background: rgba(255, 255, 255, 0.1);
                }

                .gc-stats {
                    display: flex;
                    gap: 1.5rem;
                    flex-wrap: wrap;
                    margin-top: 1.5rem;
                }

                .gc-stat {
                    min-width: 140px;
                }

                .gc-stat .number {
                    font-size: 2.8rem;
                    font-weight: 700;
                    color: var(--color-theme-secondary, #D7A54F);
                }

                .gc-section {
                    padding: 80px 0;
                }

                .gc-section-title {
                    font-size: clamp(2rem, 3vw, 2.8rem);
                    font-weight: 700;
                    color: #1C1330;
                }

                .gc-section-subtitle {
                    color: #6E6483;
                    font-size: 1.05rem;
                }

                .gc-info-grid {
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
                    gap: 1.5rem;
                    margin-top: 2rem;
                }

                .gc-card {
                    background: #fff;
                    border-radius: 20px;
                    padding: 1.8rem;
                    box-shadow: 0 20px 45px rgba(20, 16, 38, 0.08);
                    border: 1px solid rgba(109, 53, 111, 0.08);
                    transition: transform .3s ease, border-color .3s ease;
                }

                .gc-card:hover {
                    transform: translateY(-5px);
                    border-color: rgba(215, 165, 79, 0.7);
                }

                .gc-card-icon {
                    width: 54px;
                    height: 54px;
                    border-radius: 16px;
                    background: rgba(109, 53, 111, 0.1);
                    color: var(--color-theme-primary);
                    display: inline-flex;
                    align-items: center;
                    justify-content: center;
                    font-size: 1.3rem;
                    margin-bottom: 1rem;
                }

                .gc-tab-nav {
                    display: inline-flex;
                    border-radius: 999px;
                    background: rgba(109, 53, 111, 0.07);
                    padding: .35rem;
                    margin-bottom: 2rem;
                }

                .gc-tab-nav button {
                    border: none;
                    background: transparent;
                    padding: .65rem 1.5rem;
                    border-radius: 999px;
                    font-weight: 600;
                    color: #6E6483;
                    transition: all .25s ease;
                }

                .gc-tab-nav button.active {
                    background: #fff;
                    color: var(--color-theme-primary);
                    box-shadow: 0 10px 30px rgba(20, 16, 38, 0.08);
                }

                .gc-timeline {
                    border-left: 2px dashed rgba(109, 53, 111, 0.2);
                    padding-left: 1.5rem;
                }

                .gc-timeline-step {
                    position: relative;
                    margin-bottom: 2rem;
                }

                .gc-timeline-step::before {
                    content: attr(data-step);
                    position: absolute;
                    left: -3.5rem;
                    top: 0;
                    width: 2.75rem;
                    height: 2.75rem;
                    border-radius: 50%;
                    background: #fff;
                    border: 2px solid rgba(215, 165, 79, 0.8);
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    font-weight: 700;
                    color: var(--color-theme-primary);
                }

                .gc-pill {
                    display: inline-flex;
                    align-items: center;
                    gap: .4rem;
                    background: rgba(215, 165, 79, 0.15);
                    color: #8b6120;
                    padding: .35rem .85rem;
                    border-radius: 999px;
                    font-weight: 600;
                    font-size: .85rem;
                }

                .gc-parallax {
                    background-attachment: fixed;
                    background-size: cover;
                    background-position: center;
                    color: #fff;
                    position: relative;
                    padding: 90px 0;
                }

                .gc-parallax::before {
                    content: '';
                    position: absolute;
                    inset: 0;
                    background: rgba(9, 6, 17, 0.75);
                }

                .gc-parallax .container {
                    position: relative;
                    z-index: 1;
                }

                .gc-table th,
                .gc-table td {
                    padding: 1rem;
                    border-bottom: 1px solid rgba(0, 0, 0, 0.05);
                }

                .gc-table th {
                    color: #6d637c;
                    font-weight: 600;
                }

                .gc-price-card {
                    background: linear-gradient(150deg, #fff, #f4eff7);
                    border-radius: 24px;
                    padding: 2.5rem;
                    box-shadow: 0 40px 80px rgba(17, 8, 28, 0.12);
                }

                .gc-price {
                    font-size: 3.2rem;
                    font-weight: 700;
                    color: var(--color-theme-primary);
                    line-height: 1;
                }

                .gc-faq .card {
                    border: none;
                    border-radius: 18px;
                    box-shadow: 0 20px 50px rgba(20, 16, 38, 0.08);
                    margin-bottom: 1rem;
                    overflow: hidden;
                }

                .gc-faq .card-header {
                    background: #fff;
                    border: none;
                    padding: 0;
                }

                .gc-faq button {
                    width: 100%;
                    text-align: left;
                    padding: 1.2rem 1.5rem;
                    font-weight: 600;
                    color: #1C1330;
                    background: #fff;
                }

                .gc-faq button:focus {
                    box-shadow: none;
                }

                .gc-cta {
                    background: linear-gradient(120deg, rgba(109, 53, 111, 0.95), rgba(19, 10, 32, 0.95)), url("<?= asset('images/background/bg-7.png'); ?>");
                    background-blend-mode: overlay;
                    border-radius: 24px;
                    padding: 3rem;
                    color: #fff;
                    text-align: center;
                    box-shadow: 0 40px 90px rgba(9, 6, 17, 0.5);
                }

                .gc-list {
                    list-style: none;
                    padding: 0;
                    margin: 0;
                    display: grid;
                    gap: .85rem;
                }

                .gc-list li {
                    display: flex;
                    align-items: flex-start;
                    gap: .75rem;
                    color: #4a4358;
                }

                .gc-list i {
                    margin-top: 3px;
                    color: var(--color-theme-secondary, #D7A54F);
                }

                .gc-smooth-anchor {
                    cursor: pointer;
                }

                @media (max-width: 767px) {
                    .gc-hero {
                        text-align: center;
                    }

                    .gc-timeline {
                        border-left: none;
                        border-top: 2px dashed rgba(109, 53, 111, 0.2);
                        padding-left: 0;
                        padding-top: 1.5rem;
                    }

                    .gc-timeline-step::before {
                        left: calc(50% - 1.3rem);
                        top: -2.6rem;
                    }
                }
            </style>

            <section class="gc-hero" data-animate="fade">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <span class="gc-badge"><i class="fa fa-wave-square"></i> Terapia 360°</span>
                            <h1>Goodbye Cellulite – nowa definicja gładkiej skóry</h1>
                            <p>
                                Łączymy moc fal radiowych, masażu próżniowego i drenażu limfatycznego, by wygładzić cellulit,
                                wymodelować sylwetkę i przywrócić Twojej skórze jędrność. Seria 10-15 zabiegów daje przewagę,
                                której nie musisz szukać we Wrocławiu.
                            </p>
                            <div class="d-flex flex-wrap gap-3 mt-4">
                                <a href="https://booksy.magicsalon.pl" class="gc-btn-primary" target="_blank">
                                    Rezerwuj w Booksy
                                </a>
                                <a class="gc-btn-outline gc-smooth-anchor" data-target="#gc-technologie">
                                    Zobacz jak działamy
                                </a>
                            </div>
                            <div class="gc-stats">
                                <div class="gc-stat">
                                    <div class="number">2-7 cm</div>
                                    <p>redukcji obwodu ud lub brzucha</p>
                                </div>
                                <div class="gc-stat">
                                    <div class="number">50%</div>
                                    <p>lepszy drenaż limfatyczny po 1 sesji</p>
                                </div>
                                <div class="gc-stat">
                                    <div class="number">180 zł</div>
                                    <p>konkurencyjna cena za zabieg</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="gc-technologie" class="gc-section cdr-gradient-bg">
                <div class="container">
                    <div class="row align-items-center m-b40">
                        <div class="col-lg-6" data-animate="slide-right">
                            <span class="gc-pill">Badania kliniczne ENGIN, Alster, LPG</span>
                            <h2 class="gc-section-title m-t15">Technologie ukryte pod nazwą Goodbye Cellulite</h2>
                            <p class="gc-section-subtitle">
                                Naszą terapię dostosowujemy do stopnia cellulitu i wskazań medycznych: od vacuum i kawitacji po fale RF
                                i głowice podczerwieni IR. To nie urządzenie, to strategia, która działa w trzech etapach.
                            </p>
                        </div>
                        <div class="col-lg-6" data-animate="fade-up">
                            <div class="gc-info-grid">
                                <div class="gc-card">
                                    <div class="gc-card-icon"><i class="fa fa-broadcast-tower"></i></div>
                                    <h4>Fale radiowe RF 40-60°C</h4>
                                    <p>Kurczą włókna kolagenowe nawet o 85% i pobudzają produkcję nowego kolagenu – skóra napina się jak po liftingu.</p>
                                </div>
                                <div class="gc-card">
                                    <div class="gc-card-icon"><i class="fa fa-water"></i></div>
                                    <h4>Masaż próżniowy / vacuum</h4>
                                    <p>Rozbija zwłókniałe przegrody, usprawnia krążenie limfy o 50% i redukuje obrzęki.</p>
                                </div>
                                <div class="gc-card">
                                    <div class="gc-card-icon"><i class="fa fa-wind"></i></div>
                                    <h4>Kawitacja ultradźwiękowa</h4>
                                    <p>Ultradźwięki 25-40 kHz rozbijają adipocyty, zmniejszając ich wielkość o 23-26% w badaniach histologicznych.</p>
                                </div>
                                <div class="gc-card">
                                    <div class="gc-card-icon"><i class="fa fa-sync"></i></div>
                                    <h4>Drenaż limfatyczny</h4>
                                    <p>Ruchy zgodne z kierunkiem limfy przyspieszają metabolizm toksyn i dają efekt „lekkich nóg”.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row align-items-center">
                        <div class="col-lg-6 m-b30" data-animate="fade-up">
                            <div class="gc-tab-nav">
                                <button class="active" data-tab="gc-efekty">Efekty</button>
                                <button data-tab="gc-korzysci">Korzyści</button>
                                <button data-tab="gc-badania">Badania</button>
                            </div>
                            <div class="gc-tab-content">
                                <div id="gc-efekty" class="gc-card-tab active">
                                    <ul class="gc-list">
                                        <li><i class="fa fa-check-circle"></i> Redukcja cellulitu o 1-2 stopnie w skali Nürnberger-Müller</li>
                                        <li><i class="fa fa-check-circle"></i> Redukcja obwodów ud, brzucha i talii o 2-7 cm</li>
                                        <li><i class="fa fa-check-circle"></i> Ujędrnienie skóry o 9-15%, widoczna poprawa sprężystości</li>
                                        <li><i class="fa fa-check-circle"></i> Pełna przebudowa kolagenu po 2-5 miesiącach</li>
                                    </ul>
                                </div>
                                <div id="gc-korzysci" class="gc-card-tab">
                                    <ul class="gc-list">
                                        <li><i class="fa fa-leaf"></i> Bezbolesny zabieg przypominający intensywny masaż</li>
                                        <li><i class="fa fa-heartbeat"></i> Ulga przy „ciężkich nogach” i obrzękach limfatycznych</li>
                                        <li><i class="fa fa-tint"></i> Detoksykacja i dotlenienie tkanek dzięki lepszemu krążeniu</li>
                                        <li><i class="fa fa-user-md"></i> Indywidualny protokół – łączymy technologie w jednej terapii</li>
                                    </ul>
                                </div>
                                <div id="gc-badania" class="gc-card-tab">
                                    <ul class="gc-list">
                                        <li><i class="fa fa-book-medical"></i> Badanie Alster (2005): 90% pacjentek po 8 zabiegach RF odnotowało >50% poprawę</li>
                                        <li><i class="fa fa-book-medical"></i> Engin (2013): 117 osób, średnia redukcja 2,9 cm na miejsce</li>
                                        <li><i class="fa fa-book-medical"></i> LPG Alliance: FDA potwierdziło skuteczność w 145 badaniach klinicznych</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6" data-animate="slide-left">
                            <div class="gc-card h-100">
                                <h4>Procedura zabiegu krok po kroku</h4>
                                <div class="gc-timeline m-t20">
                                    <div class="gc-timeline-step" data-step="01">
                                        <strong>Konsultacja i rozpoznanie</strong>
                                        <p>Wywiad medyczny, określenie stopnia cellulitu (skala Nürnberger-Müller) i dobór protokołu.</p>
                                    </div>
                                    <div class="gc-timeline-step" data-step="02">
                                        <strong>Przygotowanie skóry</strong>
                                        <p>Oczyszczenie, ewentualny peeling i założenie stroju zabiegowego.</p>
                                    </div>
                                    <div class="gc-timeline-step" data-step="03">
                                        <strong>Główna terapia 30-60 min</strong>
                                        <p>Praca głowicą vacuum/RF/kawitacją zgodnie z kierunkiem przepływu limfy.</p>
                                    </div>
                                    <div class="gc-timeline-step" data-step="04">
                                        <strong>Drenaż i zalecenia</strong>
                                        <p>Końcowy masaż limfatyczny, aplikacja serum i plan zabiegów podtrzymujących.</p>
                                    </div>
                                </div>
                                <p class="text-muted m-t10"><i class="fa fa-info-circle"></i> Cały zabieg trwa 40-60 minut. Pierwsze efekty odczuwalne po 1 sesji.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="gc-section">
                <div class="container">
                    <div class="row align-items-center m-b40">
                        <div class="col-lg-7" data-animate="fade-up">
                            <span class="gc-pill">Wskazania i obszary zabiegowe</span>
                            <h2 class="gc-section-title m-t15">Dla kogo jest Goodbye Cellulite?</h2>
                            <p class="gc-section-subtitle">Celujemy w kobiety 25-55 lat z cellulitem stopnia I-III oraz osoby z obrzękami limfatycznymi, wiotkością skóry czy wahaniami wagi. Zabieg jest świetny również dla sportowców w regeneracji.</p>
                        </div>
                        <div class="col-lg-5 m-t30" data-animate="zoom">
                            <div class="gc-card">
                                <strong>Obszary zabiegowe</strong>
                                <ul class="gc-list m-t15">
                                    <li><i class="fa fa-dot-circle"></i> Uda zewnętrzne i wewnętrzne</li>
                                    <li><i class="fa fa-dot-circle"></i> Pośladki i okolica lędźwiowa</li>
                                    <li><i class="fa fa-dot-circle"></i> Brzuch, talia i biodra</li>
                                    <li><i class="fa fa-dot-circle"></i> Ramiona, kolana, łydki</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 m-b30" data-animate="slide-right">
                            <div class="gc-card h-100">
                                <h4>Wskazania</h4>
                                <ul class="gc-list m-t15">
                                    <li><i class="fa fa-check-circle"></i> Cellulit wodny i tłuszczowy stopnia I-III</li>
                                    <li><i class="fa fa-check-circle"></i> Obrzęki limfatyczne, uczucie ciężkości nóg</li>
                                    <li><i class="fa fa-check-circle"></i> Wiotkość skóry po ciąży lub utracie wagi</li>
                                    <li><i class="fa fa-check-circle"></i> Nierówności po liposukcji lub lipolizie</li>
                                </ul>
                                <hr>
                                <h4 class="m-t20">Zalecenia przed zabiegiem</h4>
                                <ul class="gc-list m-t15">
                                    <li><i class="fa fa-tint"></i> 8 szklanek wody w dniu zabiegu</li>
                                    <li><i class="fa fa-seedling"></i> Peeling ciała 2 dni wcześniej</li>
                                    <li><i class="fa fa-ban"></i> Brak alkoholu 24-48h przed terapią</li>
                                    <li><i class="fa fa-tshirt"></i> Luźna, wygodna odzież</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6" data-animate="slide-left">
                            <div class="gc-card h-100">
                                <h4>Przeciwwskazania</h4>
                                <ul class="gc-list m-t15">
                                    <li><i class="fa fa-times-circle text-danger"></i> Ciąża, karmienie piersią</li>
                                    <li><i class="fa fa-times-circle text-danger"></i> Nowotwory, zakrzepica, zaawansowane żylaki</li>
                                    <li><i class="fa fa-times-circle text-danger"></i> Rozrusznik serca, implanty metalowe w obszarze zabiegowym</li>
                                    <li><i class="fa fa-times-circle text-danger"></i> Nadwrażliwość skóry, aktywne stany zapalne</li>
                                </ul>
                                <hr>
                                <h4 class="m-t20">Zalecenia po zabiegu</h4>
                                <ul class="gc-list m-t15">
                                    <li><i class="fa fa-tint"></i> 2-3 litry wody dziennie na detoksykację</li>
                                    <li><i class="fa fa-running"></i> 40 minut umiarkowanej aktywności tuż po zabiegu</li>
                                    <li><i class="fa fa-apple-alt"></i> Lekka dieta, mniej cukrów prostych</li>
                                    <li><i class="fa fa-sun"></i> Unikanie słońca i solarium przez 48h</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="gc-parallax" style="background-image:url('<?= asset('images/background/bg-8.jpg'); ?>');">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8" data-animate="slide-right">
                            <span class="gc-pill">Cena premium w wersji podmiejskiej</span>
                            <h2 class="gc-section-title text-white m-t15">Dlaczego Magic Salon w Dobrzykowicach?</h2>
                            <p class="m-b20">Wysokiej klasy technologie antycellulitowe bez konieczności jazdy do centrum Wrocławia. Łatwy parking, brak korków, elastyczne terminy i Booksy. Obsługujemy Psie Pole, Wojnów, Strachocin, Siechnice oraz Kamieniec Wrocławski.</p>
                            <div class="gc-info-grid">
                                <div class="gc-card">
                                    <strong>Strategia SEO lokalnego lidera</strong>
                                    <ul class="gc-list m-t10">
                                        <li><i class="fa fa-map-marker-alt"></i> „Zabiegi na cellulit Dobrzykowice”</li>
                                        <li><i class="fa fa-map-marker-alt"></i> „Endermologia okolice Wrocławia”</li>
                                        <li><i class="fa fa-map-marker-alt"></i> „Gabinet kosmetyczny Czernica”</li>
                                    </ul>
                                </div>
                                <div class="gc-card">
                                    <strong>Przewagi nad konkurencją</strong>
                                    <ul class="gc-list m-t10">
                                        <li><i class="fa fa-star"></i> Cena 180 zł vs 250-350 zł we Wrocławiu</li>
                                        <li><i class="fa fa-star"></i> Brak kolejek, kameralna atmosfera</li>
                                        <li><i class="fa fa-star"></i> Indywidualny plan terapii i monitoring efektów</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 m-t30" data-animate="zoom">
                            <div class="gc-price-card text-center">
                                <span class="gc-pill">Cennik Goodbye Cellulite</span>
                                <div class="gc-price m-t15">180 zł <small>/ sesja</small></div>
                                <p class="text-muted">Rekomendowana seria: 10-15 zabiegów wykonywanych 2 razy w tygodniu.</p>
                                <hr>
                                <ul class="gc-list">
                                    <li><i class="fa fa-gem"></i> Pakiet 10 zabiegów: 1600 zł (160 zł/szt.)</li>
                                    <li><i class="fa fa-gem"></i> Pakiet 15 zabiegów: 2250 zł (150 zł/szt.)</li>
                                    <li><i class="fa fa-gem"></i> Zabieg podtrzymujący raz w miesiącu: 150 zł</li>
                                </ul>
                                <a href="https://booksy.magicsalon.pl" class="gc-btn-primary d-inline-flex align-items-center justify-content-center m-t20" target="_blank">
                                    <i class="fa fa-calendar m-r10"></i> Umów wizytę online
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="gc-section cdr-gradient-bg">
                <div class="container">
                    <div class="row m-b40">
                        <div class="col-lg-8 mx-auto text-center">
                            <span class="gc-pill">FAQ</span>
                            <h2 class="gc-section-title m-t15">Najczęściej zadawane pytania</h2>
                            <p class="gc-section-subtitle">Rozwiewamy wątpliwości dotyczące zabiegu Goodbye Cellulite, abyś mogła bez stresu zaplanować swoją serię.</p>
                        </div>
                    </div>
                    <div class="gc-faq">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card" data-animate="fade-up">
                                    <div class="card-header">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#gc-faq1">
                                            Ile kosztuje zabieg Goodbye Cellulite?
                                        </button>
                                    </div>
                                    <div id="gc-faq1" class="collapse">
                                        <div class="card-body">
                                            Standardowa cena to 180 zł za sesję, a w pakiecie 10 zabiegów płacisz 160 zł za wizytę.
                                            Pierwsza konsultacja jest zawsze bezpłatna.
                                        </div>
                                    </div>
                                </div>
                                <div class="card" data-animate="fade-up">
                                    <div class="card-header">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#gc-faq2">
                                            Po ilu zabiegach widać efekty?
                                        </button>
                                    </div>
                                    <div id="gc-faq2" class="collapse">
                                        <div class="card-body">
                                            Uczucie lekkości w nogach i lepsze napięcie skóry pojawia się po 1-2 zabiegach. Pierwsze
                                            widoczne wygładzenie cellulitu – po 3-4 wizytach. Pełne spektakularne efekty uzyskujemy po 10-15 sesjach.
                                        </div>
                                    </div>
                                </div>
                                <div class="card" data-animate="fade-up">
                                    <div class="card-header">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#gc-faq3">
                                            Czy zabieg jest bolesny?
                                        </button>
                                    </div>
                                    <div id="gc-faq3" class="collapse">
                                        <div class="card-body">
                                            Zabieg jest bezbolesny i przypomina intensywny masaż. Wrażliwe osoby mogą odczuwać
                                            delikatne ciepło przy falach RF lub ciągnięcie przy vacuum – jest to w granicach komfortu.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card" data-animate="fade-up">
                                    <div class="card-header">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#gc-faq4">
                                            Jak długo utrzymują się efekty?
                                        </button>
                                    </div>
                                    <div id="gc-faq4" class="collapse">
                                        <div class="card-body">
                                            Przy zdrowym stylu życia efekty utrzymują się miesiącami. Rekomendujemy zabieg
                                            podtrzymujący raz w miesiącu, by zachować gładkość skóry przez cały rok.
                                        </div>
                                    </div>
                                </div>
                                <div class="card" data-animate="fade-up">
                                    <div class="card-header">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#gc-faq5">
                                            Czy mogę zrobić zabieg w ciąży?
                                        </button>
                                    </div>
                                    <div id="gc-faq5" class="collapse">
                                        <div class="card-body">
                                            Niestety nie. Ciąża i karmienie piersią to bezwzględne przeciwwskazania. Zapraszamy po
                                            zakończeniu laktacji – wtedy przygotujemy plan powrotu do formy.
                                        </div>
                                    </div>
                                </div>
                                <div class="card" data-animate="fade-up">
                                    <div class="card-header">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#gc-faq6">
                                            Co jeśli mam żylaki lub choroby przewlekłe?
                                        </button>
                                    </div>
                                    <div id="gc-faq6" class="collapse">
                                        <div class="card-body">
                                            Przy zaawansowanych żylakach, zakrzepicy, nadciśnieniu lub rozruszniku serca zabieg jest przeciwwskazany.
                                            Podczas konsultacji dokładnie przeanalizujemy Twój stan zdrowia.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="gc-section">
                <div class="container">
                    <div class="gc-cta" data-animate="fade-up">
                        <span class="gc-pill">Zacznij swoją serię już dziś</span>
                        <h2 class="gc-section-title text-white m-t15">Pożegnaj cellulit i przywitaj gładką skórę</h2>
                        <p class="m-b30">Magic Salon to Twoje miejsce na mapie Dolnego Śląska, gdzie premium oznacza
                            troskę, skuteczność i piękno w najwyższym standardzie. Umów wizytę online lub telefonicznie.</p>
                        <div class="d-flex flex-wrap gap-3 justify-content-center">
                            <a href="https://booksy.magicsalon.pl" class="gc-btn-primary" target="_blank">
                                Booksy – rezerwacja 24/7
                            </a>
                            <a href="tel:+48883481581" class="gc-btn-outline">
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

                    document.querySelectorAll('.gc-smooth-anchor').forEach(link => {
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

                    const tabs = document.querySelectorAll('.gc-tab-nav button');
                    const tabContents = document.querySelectorAll('.gc-card-tab');
                    tabs.forEach(tab => {
                        tab.addEventListener('click', () => {
                            tabs.forEach(btn => btn.classList.remove('active'));
                            tab.classList.add('active');
                            tabContents.forEach(content => content.classList.remove('active'));
                            document.getElementById(tab.dataset.tab).classList.add('active');
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

                .gc-card-tab {
                    display: none;
                }

                .gc-card-tab.active {
                    display: block;
                    animation: fadeIn .4s ease;
                }

                @keyframes fadeIn {
                    from {
                        opacity: 0;
                        transform: translateY(10px);
                    }

                    to {
                        opacity: 1;
                        transform: translateY(0);
                    }
                }
            </style>
            <!--====== End Main Content ======-->
        </div>

        <?php include __DIR__ . DIRECTORY_SEPARATOR . 'partials' . DIRECTORY_SEPARATOR . 'footer.php'; ?>
    </div>
</body>

