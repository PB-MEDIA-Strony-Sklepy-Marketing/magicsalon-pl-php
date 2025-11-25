<?php
/**
 * MAGIC SALON - Oferta: Cool Down Roll
 * Wersja: 1.0 - Generowana przez Cursor
 */

require_once __DIR__ . DIRECTORY_SEPARATOR . 'config.php';

$meta = [
    'title' => 'Cool Down Roll Wrocław | Modelowanie Sylwetki 120 zł | Magic Salon',
    'description' => 'Poznaj Cool Down Roll w Magic Salon Dobrzykowice. Połączenie krioterapii i masażu rolkowego, które wygładza cellulit, usuwa obrzęki i rzeźbi sylwetkę. Cena: 120 zł.',
    'keywords' => 'cool down roll, kriomasaż rolkowy, modelowanie sylwetki, Magic Salon, Dobrzykowice, cellulit, drenaż limfatyczny',
    'canonical' => BASE_URL . '/oferta-coll-down-roll-cursor.php',
    'robots' => 'index, follow, max-image-preview:large',
    'og' => [
        'type' => 'website',
        'title' => 'Cool Down Roll – Premium zabieg modelujący w Magic Salon',
        'description' => 'Innowacyjne połączenie krioterapii i masażu rolkowego. Redukcja cellulitu, ujędrnienie, detoks limfatyczny.',
        'url' => BASE_URL . '/oferta-coll-down-roll-cursor.php',
        'image' => BASE_URL . '/images/oferta-details/cool-down-roll-hero.jpg',
    ],
    'twitter' => [
        'card' => 'summary_large_image',
        'title' => 'Cool Down Roll w Magic Salon',
        'description' => 'Relaksacyjny zabieg premium: chłodzenie -15°C do +5°C + masaż rolkowy. Efekty od pierwszej wizyty.',
        'image' => BASE_URL . '/images/oferta-details/cool-down-roll-hero.jpg',
    ],
    'schema' => [
        'enabled' => true,
        'type' => 'Service',
        'name' => 'Cool Down Roll – kriomasaż rolkowy',
        'description' => 'Nieinwazyjny zabieg łączący krioterapię kontaktową z masażem mechanicznym. Redukuje cellulit, modeluje sylwetkę i pobudza krążenie.',
        'provider' => [
            '@type' => 'BeautySalon',
            'name' => 'MAGIC SALON',
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
            'name' => 'Wrocław i okolice',
        ],
        'offers' => [
            '@type' => 'Offer',
            'price' => '120',
            'priceCurrency' => 'PLN',
            'availability' => 'https://schema.org/InStock',
        ],
    ],
];

include __DIR__ . DIRECTORY_SEPARATOR . 'partials' . DIRECTORY_SEPARATOR . 'head.php';
?>

<body id="bg" class="offer-cool-down-roll">
    <div class="page-wraper">
        <?php include __DIR__ . DIRECTORY_SEPARATOR . 'partials' . DIRECTORY_SEPARATOR . 'header.php'; ?>

        <div class="page-content bg-white">
            <?php
            $banner_img = 'images/banner/gallery-banner.jpg';
            $page_title = 'Cool Down Roll';
            $page_desc = 'Innowacyjne połączenie krioterapii kontaktowej i masażu rolkowego, które w Magic Salon modeluje sylwetkę, wygładza cellulit i przywraca lekkość ciała.';
            $breadcrumbs = [
                ['label' => 'Strona Główna', 'url' => 'index.php', 'icon' => 'fa fa-home'],
                ['label' => 'Oferta', 'url' => 'oferta.php', 'icon' => 'fa fa-list'],
                ['label' => 'Cool Down Roll', 'url' => '', 'icon' => 'far fa-snowflake'],
            ];

            include __DIR__ . DIRECTORY_SEPARATOR . 'partials' . DIRECTORY_SEPARATOR . 'breadcrumbs.php';
            ?>

            <!--====== Start Main Content ======-->
            <style>
                .cdr-gradient-bg {
                    background: radial-gradient(circle at 10% 20%, rgba(215, 165, 79, 0.15), transparent 45%),
                        radial-gradient(circle at 80% 0%, rgba(109, 53, 111, 0.2), transparent 50%),
                        linear-gradient(120deg, #fdfcfb 0%, #f3f0ff 100%);
                }

                .cdr-hero {
                    position: relative;
                    overflow: hidden;
                    min-height: 70vh;
                    display: flex;
                    align-items: center;
                    color: #fff;
                    background: linear-gradient(120deg, rgba(20, 16, 38, 0.9), rgba(109, 53, 111, 0.85)), url("<?= asset('images/oferta-details/cool-down-roll-hero.jpg'); ?>") center/cover;
                }

                .cdr-hero::after {
                    content: '';
                    position: absolute;
                    inset: 0;
                    background: radial-gradient(circle at 30% 20%, rgba(215, 165, 79, 0.65), transparent 45%);
                    opacity: 0.65;
                }

                .cdr-hero .container {
                    position: relative;
                    z-index: 1;
                }

                .cdr-badge {
                    display: inline-flex;
                    align-items: center;
                    gap: .5rem;
                    padding: .5rem 1rem;
                    border-radius: 999px;
                    background: rgba(255, 255, 255, 0.15);
                    border: 1px solid rgba(255, 255, 255, 0.25);
                    text-transform: uppercase;
                    font-size: .85rem;
                    letter-spacing: .1em;
                }

                .cdr-hero h1 {
                    font-size: clamp(2.5rem, 4vw, 3.75rem);
                    font-weight: 700;
                    line-height: 1.1;
                    margin: 1.5rem 0;
                }

                .cdr-hero p {
                    font-size: 1.125rem;
                    max-width: 720px;
                    color: rgba(255, 255, 255, 0.92);
                }

                .cdr-btn-primary,
                .cdr-btn-outline {
                    border-radius: 999px;
                    padding: .85rem 1.8rem;
                    font-weight: 600;
                    text-transform: uppercase;
                    letter-spacing: .02em;
                    transition: all .3s ease;
                    border: 2px solid transparent;
                }

                .cdr-btn-primary {
                    background: linear-gradient(135deg, #D7A54F, #9F5BA4);
                    color: #fff;
                    box-shadow: 0 15px 35px rgba(109, 53, 111, 0.25);
                }

                .cdr-btn-primary:hover {
                    transform: translateY(-3px);
                    color: #fff;
                    box-shadow: 0 20px 40px rgba(109, 53, 111, 0.35);
                }

                .cdr-btn-outline {
                    border-color: rgba(255, 255, 255, 0.5);
                    color: #fff;
                }

                .cdr-btn-outline:hover {
                    border-color: #fff;
                    background: rgba(255, 255, 255, 0.1);
                }

                .cdr-stats-card {
                    backdrop-filter: blur(15px);
                    background: rgba(255, 255, 255, 0.92);
                    border-radius: 1.5rem;
                    padding: 1.75rem;
                    box-shadow: 0 25px 60px rgba(15, 10, 30, 0.12);
                    transition: transform .4s ease, box-shadow .4s ease;
                }

                .cdr-stats-card:hover {
                    transform: translateY(-6px);
                    box-shadow: 0 30px 70px rgba(109, 53, 111, 0.15);
                }

                .cdr-stats-card .number {
                    font-size: 2.5rem;
                    font-weight: 700;
                    color: var(--color-theme-primary);
                }

                .cdr-section-title {
                    margin-bottom: 1rem;
                    font-weight: 700;
                    font-size: clamp(2rem, 3vw, 2.8rem);
                    color: #1C1330;
                }

                .cdr-section-subtitle {
                    color: #6E6483;
                    font-size: 1.05rem;
                }

                .cdr-feature-grid {
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
                    gap: 1.5rem;
                    margin-top: 2.5rem;
                }

                .cdr-feature-card {
                    background: #fff;
                    border-radius: 1.25rem;
                    padding: 1.5rem;
                    border: 1px solid rgba(109, 53, 111, 0.08);
                    box-shadow: 0 10px 30px rgba(20, 16, 38, 0.05);
                    transition: transform .3s ease, border-color .3s ease;
                }

                .cdr-feature-card:hover {
                    transform: translateY(-4px);
                    border-color: rgba(215, 165, 79, 0.8);
                }

                .cdr-feature-icon {
                    width: 52px;
                    height: 52px;
                    border-radius: 16px;
                    background: rgba(109, 53, 111, 0.1);
                    color: var(--color-theme-primary);
                    display: inline-flex;
                    align-items: center;
                    justify-content: center;
                    font-size: 1.35rem;
                    margin-bottom: 1rem;
                }

                .cdr-bento {
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
                    gap: 1.25rem;
                }

                .cdr-bento-card {
                    position: relative;
                    border-radius: 20px;
                    overflow: hidden;
                    background: #111;
                    min-height: 320px;
                }

                .cdr-bento-card img {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    transition: transform 8s ease;
                }

                .cdr-bento-card:hover img {
                    transform: scale(1.1);
                }

                .cdr-bento-card .content {
                    position: absolute;
                    inset: 0;
                    padding: 2rem;
                    color: #fff;
                    background: linear-gradient(180deg, rgba(7, 7, 9, 0.3) 0%, rgba(7, 7, 9, 0.8) 100%);
                    display: flex;
                    flex-direction: column;
                    justify-content: flex-end;
                }

                .cdr-list-check {
                    list-style: none;
                    padding: 0;
                    margin: 0;
                    display: grid;
                    gap: .85rem;
                }

                .cdr-list-check li {
                    display: flex;
                    align-items: flex-start;
                    gap: .75rem;
                    color: #4a4358;
                    font-weight: 500;
                }

                .cdr-list-check i {
                    color: var(--color-theme-secondary);
                    font-size: 1.05rem;
                    margin-top: 4px;
                }

                .cdr-process-line {
                    border-left: 2px dashed rgba(109, 53, 111, 0.2);
                    padding-left: 1.25rem;
                }

                .cdr-process-step {
                    position: relative;
                    padding-bottom: 2rem;
                    margin-left: 1rem;
                }

                .cdr-process-step::before {
                    content: attr(data-step);
                    position: absolute;
                    left: -3.4rem;
                    top: 0;
                    width: 2.5rem;
                    height: 2.5rem;
                    border-radius: 50%;
                    background: #fff;
                    border: 2px solid rgba(215, 165, 79, 0.8);
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    font-weight: 700;
                    color: var(--color-theme-primary);
                }

                .cdr-pricing-card {
                    border-radius: 24px;
                    padding: 2.25rem;
                    background: linear-gradient(160deg, #fff, #F8F5F9);
                    border: 1px solid rgba(109, 53, 111, 0.08);
                    box-shadow: 0 30px 70px rgba(18, 14, 45, 0.1);
                }

                .cdr-price {
                    font-size: 3rem;
                    font-weight: 700;
                    color: var(--color-theme-primary);
                    line-height: 1;
                }

                .cdr-price small {
                    font-size: 1rem;
                    color: #6a6775;
                }

                .cdr-badge-pill {
                    padding: .35rem .9rem;
                    border-radius: 999px;
                    background: rgba(215, 165, 79, 0.15);
                    color: #a37224;
                    font-weight: 600;
                    font-size: .85rem;
                }

                .cdr-faq .card {
                    border: none;
                    margin-bottom: 1rem;
                    border-radius: 16px;
                    box-shadow: 0 20px 45px rgba(27, 14, 45, 0.08);
                    overflow: hidden;
                }

                .cdr-faq .card-header {
                    background: #fff;
                    border: none;
                    padding: 0;
                }

                .cdr-faq button {
                    width: 100%;
                    text-align: left;
                    padding: 1.25rem 1.5rem;
                    font-weight: 600;
                    color: #1C1330;
                    background: #fff;
                }

                .cdr-faq button:focus {
                    box-shadow: none;
                }

                .cdr-floating-image {
                    animation: floatY 6s ease-in-out infinite;
                }

                @keyframes floatY {
                    0% {
                        transform: translateY(0px);
                    }

                    50% {
                        transform: translateY(-12px);
                    }

                    100% {
                        transform: translateY(0px);
                    }
                }

                .cdr-parallax {
                    background-attachment: fixed;
                    background-position: center;
                    background-size: cover;
                    position: relative;
                    padding: 6rem 0;
                    color: #fff;
                }

                .cdr-parallax::before {
                    content: '';
                    position: absolute;
                    inset: 0;
                    background: rgba(12, 8, 28, 0.7);
                }

                .cdr-parallax .container {
                    position: relative;
                    z-index: 1;
                }

                .cdr-cta-card {
                    border-radius: 1.5rem;
                    padding: 2.5rem;
                    background: linear-gradient(160deg, rgba(109, 53, 111, 0.9), rgba(27, 14, 45, 0.95)), url("<?= asset('images/background/bg-7.png'); ?>");
                    background-blend-mode: overlay;
                    color: #fff;
                    box-shadow: 0 35px 80px rgba(9, 6, 17, 0.4);
                }

                .cdr-smooth-anchor {
                    cursor: pointer;
                }

                @media (max-width: 767px) {
                    .cdr-hero {
                        min-height: 80vh;
                        text-align: center;
                    }

                    .cdr-hero .btn-group {
                        flex-direction: column;
                    }

                    .cdr-process-line {
                        border-left: none;
                        border-top: 2px dashed rgba(109, 53, 111, 0.2);
                        padding-left: 0;
                        padding-top: 1.5rem;
                    }

                    .cdr-process-step::before {
                        left: calc(50% - 1.25rem);
                        top: -2.5rem;
                    }

                    .cdr-process-step {
                        text-align: center;
                    }
                }
            </style>

            <section class="cdr-hero" data-animate="fade">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <span class="cdr-badge"><i class="fa fa-snowflake"></i> Kriomasaż premium</span>
                            <h1>Cool Down Roll – luksusowy rytuał modelowania sylwetki</h1>
                            <p>
                                Stworzyliśmy zabieg, który wykorzystuje temperatury od -15°C do +5°C, aby bezboleśnie
                                redukować cellulit, drenując limfę i pobudzając mikrokrążenie. Doświadcz spektakularnych efektów już po pierwszej sesji.
                            </p>
                            <div class="d-flex flex-wrap gap-3 btn-group">
                                <a href="https://booksy.magicsalon.pl" target="_blank" class="cdr-btn-primary">
                                    Zarezerwuj termin
                                </a>
                                <a class="cdr-btn-outline cdr-smooth-anchor" data-target="#cdr-benefits">
                                    Zobacz korzyści
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="cdr-stats-card mt-4 mt-lg-0">
                                <div class="d-flex justify-content-between flex-wrap gap-3">
                                    <div>
                                        <div class="number">-30%</div>
                                        <p class="mb-0 text-muted">redukcji tkanki tłuszczowej</p>
                                    </div>
                                    <div>
                                        <div class="number">120 zł</div>
                                        <p class="mb-0 text-muted">cena jednego zabiegu</p>
                                    </div>
                                    <div>
                                        <div class="number">8-12</div>
                                        <p class="mb-0 text-muted">sesji w serii</p>
                                    </div>
                                </div>
                                <hr>
                                <ul class="cdr-list-check mt-3">
                                    <li><i class="fa fa-check-circle"></i> Dwufazowa stymulacja krążenia</li>
                                    <li><i class="fa fa-check-circle"></i> Intensywna detoksykacja limfatyczna</li>
                                    <li><i class="fa fa-check-circle"></i> Bez rekonwalescencji</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cdr-floating-elements"></div>
            </section>

            <section id="cdr-benefits" class="section-full cdr-gradient-bg p-t80 p-b60">
                <div class="container">
                    <div class="row align-items-center m-b40">
                        <div class="col-lg-6" data-animate="slide-right">
                            <span class="cdr-badge-pill">Technologia Toshiro Yamauchi x Dieter Manstein</span>
                            <h2 class="cdr-section-title m-t10">Jak działa Cool Down Roll?</h2>
                            <p class="cdr-section-subtitle">
                                Łączymy krioterapię kontaktową z masażem mechanicznym, aby chłodzić adipocyty
                                i jednocześnie manualnie pobudzać przepływ limfy. Skutkiem są widoczne efekty modelowania sylwetki bez skalpela.
                            </p>
                            <ul class="cdr-list-check m-t20">
                                <li><i class="fa fa-snowflake"></i> Krystalizacja trójglicerydów w temperaturze poniżej 4°C</li>
                                <li><i class="fa fa-sync"></i> Fala Lewisa – naprzemienne zwężanie i rozszerzanie naczyń</li>
                                <li><i class="fa fa-heartbeat"></i> Zwiększony dopływ krwi bogatej w tlen i składniki odżywcze</li>
                                <li><i class="fa fa-spa"></i> Głęboki relaks, wyrzut endorfin i redukcja napięcia</li>
                            </ul>
                        </div>
                        <div class="col-lg-6" data-animate="fade-up">
                            <div class="cdr-bento">
                                <div class="cdr-bento-card">
                                    <img src="<?= asset('images/oferta-details/cool-down-roll-tech.jpg'); ?>" alt="Technologia Cool Down Roll">
                                    <div class="content">
                                        <span class="cdr-badge">Temperatura -15°C</span>
                                        <h4 class="m-t15">Precyzyjne chłodzenie adipocytów</h4>
                                        <p>Apoptoza komórek tłuszczowych w kontrolowanych warunkach.</p>
                                    </div>
                                </div>
                                <div class="cdr-bento-card">
                                    <img src="<?= asset('images/oferta-details/cool-down-roll-massage.jpg'); ?>" alt="Masaż limfatyczny">
                                    <div class="content">
                                        <span class="cdr-badge">Ruch rolowania</span>
                                        <h4 class="m-t15">Drenaż limfatyczny 2x szybszy</h4>
                                        <p>Manualny przepływ limfy zgodny z kierunkiem jej biegu.</p>
                                    </div>
                                </div>
                                <div class="cdr-bento-card">
                                    <img src="<?= asset('images/oferta-details/cool-down-roll-sculpt.jpg'); ?>" alt="Modelowanie sylwetki">
                                    <div class="content">
                                        <span class="cdr-badge">Modelowanie 360°</span>
                                        <h4 class="m-t15">Symetria i napięcie skóry</h4>
                                        <p>Połączenie lipolizy i stymulacji kolagenu pozwala osiągnąć lifting.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cdr-feature-grid">
                        <div class="cdr-feature-card" data-animate="zoom">
                            <div class="cdr-feature-icon"><i class="fa fa-water"></i></div>
                            <h4>Redukcja cellulitu</h4>
                            <p>Zwalczamy włókniste przegrody i wygładzamy strukturę skóry, redukując efekt „skórki pomarańczowej”.</p>
                        </div>
                        <div class="cdr-feature-card" data-animate="zoom">
                            <div class="cdr-feature-icon"><i class="fa fa-wind"></i></div>
                            <h4>Drenaż limfatyczny</h4>
                            <p>Masaż zgodny z kierunkiem przepływu limfy niweluje obrzęki i uczucie ciężkości nóg.</p>
                        </div>
                        <div class="cdr-feature-card" data-animate="zoom">
                            <div class="cdr-feature-icon"><i class="fa fa-bolt"></i></div>
                            <h4>Ujędrnienie i lifting</h4>
                            <p>Zimno pobudza fibroblasty do produkcji kolagenu i elastyny, poprawiając napięcie skóry.</p>
                        </div>
                        <div class="cdr-feature-card" data-animate="zoom">
                            <div class="cdr-feature-icon"><i class="fa fa-praying-hands"></i></div>
                            <h4>Relaks i regeneracja</h4>
                            <p>Organizm produkuje endorfiny, co wycisza układ nerwowy i wspiera regenerację potreningową.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-full p-t80 p-b80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 m-b30" data-animate="slide-left">
                            <span class="cdr-badge-pill">Dla kogo?</span>
                            <h2 class="cdr-section-title">Zabieg szyty na miarę Twojego trybu życia</h2>
                            <p class="cdr-section-subtitle">Najlepiej sprawdza się u kobiet 25-55 lat, ale doceniają go również sportowcy i osoby pracujące siedząco.</p>

                            <div class="row m-t30">
                                <div class="col-sm-6 m-b20">
                                    <div class="cdr-feature-card h-100">
                                        <strong>Wskazania</strong>
                                        <ul class="cdr-list-check m-t15">
                                            <li><i class="fa fa-check-circle"></i> Cellulit wszystkich stopni</li>
                                            <li><i class="fa fa-check-circle"></i> Obrzęki limfatyczne</li>
                                            <li><i class="fa fa-check-circle"></i> Wiotkość skóry</li>
                                            <li><i class="fa fa-check-circle"></i> Powrót do formy po treningu</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-6 m-b20">
                                    <div class="cdr-feature-card h-100">
                                        <strong>Przeciwwskazania</strong>
                                        <ul class="cdr-list-check m-t15">
                                            <li><i class="fa fa-times-circle text-danger"></i> Ciąża i karmienie</li>
                                            <li><i class="fa fa-times-circle text-danger"></i> Choroby nowotworowe</li>
                                            <li><i class="fa fa-times-circle text-danger"></i> Rozrusznik serca</li>
                                            <li><i class="fa fa-times-circle text-danger"></i> Nadwrażliwość na zimno</li>
                                        </ul>
                                        <small class="text-muted">W razie wątpliwości wykonujemy test wrażliwości lodem.</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6" data-animate="fade">
                            <div class="cdr-process-line">
                                <div class="cdr-process-step" data-step="01">
                                    <h4>Konsultacja i mapping sylwetki</h4>
                                    <p>Analizujemy potrzeby, wykonujemy test wrażliwości na zimno i dobieramy parametry urządzenia.</p>
                                </div>
                                <div class="cdr-process-step" data-step="02">
                                    <h4>Faza aktywnego chłodzenia</h4>
                                    <p>Głowica pracuje w temperaturze nawet -15°C, aby krystalizować trójglicerydy i inicjować apoptozę adipocytów.</p>
                                </div>
                                <div class="cdr-process-step" data-step="03">
                                    <h4>Masaż rolowany i drenaż</h4>
                                    <p>Schłodzone rolki pracują w kierunku serca, przyspieszając przepływ limfy i metabolizm toksyn.</p>
                                </div>
                                <div class="cdr-process-step" data-step="04">
                                    <h4>Końcowe ujędrnianie i plan serii</h4>
                                    <p>Dobieramy rekomendowaną serię 8-12 zabiegów oraz plan zabiegów podtrzymujących 1-2 razy w miesiącu.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="cdr-parallax" style="background-image:url('<?= asset('images/background/bg-8.jpg'); ?>');">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8" data-animate="slide-right">
                            <h2 class="cdr-section-title text-white">Cool Down Roll w Dobrzykowicach – Twoja przewaga nad miastem</h2>
                            <p class="m-b20">Uniknij zatłoczonych salonów we Wrocławiu. W Magic Salon masz dostęp do niszowej technologii w kameralnej przestrzeni, 14 minut od Psiego Pola. Obsługujemy również Wojnów, Strachocin, Biskupin czy gminę Czernica.</p>
                            <div class="row">
                                <div class="col-sm-6 m-b15">
                                    <div class="cdr-feature-card h-100">
                                        <strong>Lokalne frazy SEO:</strong>
                                        <ul class="cdr-list-check m-t10">
                                            <li><i class="fa fa-map-marker-alt"></i> Cool Down Roll Dobrzykowice</li>
                                            <li><i class="fa fa-map-marker-alt"></i> Zabiegi na cellulit Psie Pole</li>
                                            <li><i class="fa fa-map-marker-alt"></i> Rollmasaż gmina Czernica</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-6 m-b15">
                                    <div class="cdr-feature-card h-100">
                                        <strong>Dlaczego my?</strong>
                                        <ul class="cdr-list-check m-t10">
                                            <li><i class="fa fa-star"></i> Premium cena 120 zł</li>
                                            <li><i class="fa fa-star"></i> Prywatna przestrzeń zabiegowa</li>
                                            <li><i class="fa fa-star"></i> Kalendarz w Booksy</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 m-t30" data-animate="zoom">
                            <div class="cdr-pricing-card text-center">
                                <span class="cdr-badge-pill">Pakiety specjalne</span>
                                <div class="cdr-price m-t15">120 zł <small>/ sesja</small></div>
                                <p class="text-muted">Rekomendowana seria: 8-12 zabiegów, 2-3 razy w tygodniu.</p>
                                <hr>
                                <ul class="cdr-list-check">
                                    <li><i class="fa fa-gem"></i> Pakiet 8 zabiegów: 920 zł</li>
                                    <li><i class="fa fa-gem"></i> Pakiet 12 zabiegów: 1320 zł</li>
                                    <li><i class="fa fa-gem"></i> Zabieg podtrzymujący: 99 zł</li>
                                </ul>
                                <a href="https://booksy.magicsalon.pl" class="cdr-btn-primary m-t20 d-inline-flex align-items-center justify-content-center" target="_blank">
                                    <i class="fa fa-calendar m-r10"></i> Rezerwuj w Booksy
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-full p-t80 p-b80 cdr-gradient-bg">
                <div class="container">
                    <div class="row m-b40">
                        <div class="col-lg-8 mx-auto text-center">
                            <span class="cdr-badge-pill">FAQ</span>
                            <h2 class="cdr-section-title">Najczęstsze pytania o Cool Down Roll</h2>
                            <p class="cdr-section-subtitle">Zebraliśmy wątpliwości klientów, abyś mogła podjąć decyzję świadomie.</p>
                        </div>
                    </div>
                    <div class="cdr-faq">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card" data-animate="fade-up">
                                    <div class="card-header">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#faq1">
                                            Co to jest Cool Down Roll i czym różni się od zwykłego rollmasażu?
                                        </button>
                                    </div>
                                    <div id="faq1" class="collapse">
                                        <div class="card-body">
                                            To niszowy zabieg łączący chłodzenie miejscowe w temperaturze nawet -15°C z mechanicznym masażem rolkowym. Dzięki temu oprócz rozbijania cellulitu inicjuje apoptozę adipocytów i stymuluje krążenie.
                                        </div>
                                    </div>
                                </div>
                                <div class="card" data-animate="fade-up">
                                    <div class="card-header">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#faq2">
                                            Ile zabiegów potrzebuję, aby zobaczyć efekty?
                                        </button>
                                    </div>
                                    <div id="faq2" class="collapse">
                                        <div class="card-body">
                                            Pierwsze uczucie lekkości w nogach i napięcie skóry odczujesz po 1-2 wizytach. Redukcja obwodów i cellulitu jest widoczna po serii 8-10 zabiegów wykonywanych 2-3 razy w tygodniu.
                                        </div>
                                    </div>
                                </div>
                                <div class="card" data-animate="fade-up">
                                    <div class="card-header">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#faq3">
                                            Czy zabieg jest bolesny i czy wymaga rekonwalescencji?
                                        </button>
                                    </div>
                                    <div id="faq3" class="collapse">
                                        <div class="card-body">
                                            Zabieg jest bezbolesny, odczuwalne jest przyjemne chłodzenie i ucisk porównywalny do intensywnego masażu. Nie ma okresu rekonwalescencji, a zaczerwienienie ustępuje w ciągu 1-2 godzin.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card" data-animate="fade-up">
                                    <div class="card-header">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#faq4">
                                            Jakie partie ciała można poddać Cool Down Roll?
                                        </button>
                                    </div>
                                    <div id="faq4" class="collapse">
                                        <div class="card-body">
                                            Najczęściej pracujemy na udach, pośladkach, brzuchu, talii, ramionach i łydkach. Sekcje dobieramy indywidualnie według mapy sylwetki wykonanej podczas konsultacji.
                                        </div>
                                    </div>
                                </div>
                                <div class="card" data-animate="fade-up">
                                    <div class="card-header">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#faq5">
                                            Czy Cool Down Roll jest bezpieczny dla wszystkich?
                                        </button>
                                    </div>
                                    <div id="faq5" class="collapse">
                                        <div class="card-body">
                                            Istnieją przeciwwskazania: ciąża, karmienie, choroby nowotworowe, poważne schorzenia serca, zakrzepica, nadwrażliwość na zimno. Zawsze przeprowadzamy konsultację i test wrażliwości.
                                        </div>
                                    </div>
                                </div>
                                <div class="card" data-animate="fade-up">
                                    <div class="card-header">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#faq6">
                                            Jak dbać o efekty po zakończeniu serii?
                                        </button>
                                    </div>
                                    <div id="faq6" class="collapse">
                                        <div class="card-body">
                                            Zalecamy zabiegi podtrzymujące raz na 4 tygodnie, odpowiednie nawodnienie, dietę antycellulitową i umiarkowaną aktywność. To pozwoli utrzymać wygładzoną sylwetkę nawet przez wiele miesięcy.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-full p-t70 p-b70">
                <div class="container">
                    <div class="cdr-cta-card text-center" data-animate="fade-up">
                        <h2 class="cdr-section-title text-white m-b10">Gotowa na zmrożenie cellulitu?</h2>
                        <p class="m-b30">Cool Down Roll to Twoja tajna broń przed sezonem bikini, ślubem czy ważnym wystąpieniem. Zarezerwuj termin i poczuj różnicę.</p>
                        <div class="d-flex flex-wrap justify-content-center gap-3">
                            <a href="https://booksy.magicsalon.pl" class="cdr-btn-primary" target="_blank">
                                Booksy – zarezerwuj online
                            </a>
                            <a href="tel:+48883481581" class="cdr-btn-outline">
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
                        threshold: 0.1
                    });

                    document.querySelectorAll('[data-animate]').forEach(el => {
                        el.classList.add('animate-hidden', `animate-${el.dataset.animate}`);
                        observer.observe(el);
                    });

                    document.querySelectorAll('.cdr-smooth-anchor').forEach(link => {
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
                    transform: translateY(20px);
                    transition: all .8s ease;
                }

                .animate-visible {
                    opacity: 1;
                    transform: none;
                }

                .animate-fade.animate-visible {
                    transform: none;
                }

                .animate-slide-right {
                    transform: translateX(-40px);
                }

                .animate-slide-left {
                    transform: translateX(40px);
                }

                .animate-slide-right.animate-visible,
                .animate-slide-left.animate-visible {
                    transform: translateX(0);
                }

                .animate-zoom {
                    transform: scale(0.95);
                }

                .animate-zoom.animate-visible {
                    transform: scale(1);
                }

                .animate-fade-up {
                    transform: translateY(40px);
                }

                .animate-fade-up.animate-visible {
                    transform: translateY(0);
                }
            </style>
            <!--====== End Main Content ======-->
        </div>

        <?php include __DIR__ . DIRECTORY_SEPARATOR . 'partials' . DIRECTORY_SEPARATOR . 'footer.php'; ?>
    </div>
</body>







