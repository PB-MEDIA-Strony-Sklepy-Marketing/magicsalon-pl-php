<?php
/**
 * MAGIC SALON - Oferta: Shape & Lift
 * Wersja: 1.0 – Strona premium przygotowana w Cursor
 */

require_once __DIR__ . DIRECTORY_SEPARATOR . 'config.php';

$meta = [
    'title' => 'Shape & Lift – Modelowanie Sylwetki EMS + RF | Magic Salon Dobrzykowice',
    'description' => 'Shape & Lift łączy EMS, HIFEM, fale radiowe i vacuum. Wzmocnij mięśnie, zredukuj tłuszcz i ujędrnij skórę w Magic Salon (Dobrzykowice). Ramiona 120 zł, brzuch/uda/pośladki 160 zł.',
    'keywords' => 'shape lift, modelowanie sylwetki Wrocław, EMS Dobrzykowice, lifting pośladków, elektrostymulacja mięśni, zabiegi na brzuch',
    'canonical' => BASE_URL . '/oferta-shape-lift-cursor.php',
    'robots' => 'index, follow, max-image-preview:large',
    'og' => [
        'type' => 'website',
        'title' => 'Shape & Lift – EMS + RF + Vacuum w Magic Salon',
        'description' => 'Kompleksowy program ujędrniania ciała z technologią EMS, HIFEM, RF i masażem podciśnieniowym. Efekty już po 2-3 zabiegach.',
        'url' => BASE_URL . '/oferta-shape-lift-cursor.php',
        'image' => BASE_URL . '/images/oferta-details/shape-lift-hero.jpg',
    ],
    'twitter' => [
        'card' => 'summary_large_image',
        'title' => 'Shape & Lift w Magic Salon',
        'description' => 'Nieinwazyjny lifting ciała i mięśni bez bólu i rekonwalescencji.',
        'image' => BASE_URL . '/images/oferta-details/shape-lift-hero.jpg',
    ],
    'schema' => [
        'enabled' => true,
        'type' => 'Service',
        'name' => 'Shape & Lift – kompleksowe modelowanie sylwetki',
        'description' => 'Zabieg łączący elektrostymulację EMS/HIFEM, fale radiowe i masaż vacuum dla ujędrnienia ciała i redukcji tkanki tłuszczowej.',
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
            'name' => 'Dobrzykowice, Wrocław, gmina Czernica',
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

<body id="bg" class="offer-shape-lift">
    <div class="page-wraper">
        <?php include __DIR__ . DIRECTORY_SEPARATOR . 'partials' . DIRECTORY_SEPARATOR . 'header.php'; ?>

        <div class="page-content bg-white">
            <?php
            $banner_img = 'images/banner/gallery-banner.jpg';
            $page_title = 'Shape & Lift';
            $page_desc = 'Synergia EMS, HIFEM, RF i vacuum. Podnieś pośladki, wzmacniaj mięśnie i redukuj tłuszcz bez skalpela.';
            $breadcrumbs = [
                ['label' => 'Strona Główna', 'url' => 'index.php', 'icon' => 'fa fa-home'],
                ['label' => 'Oferta', 'url' => 'oferta.php', 'icon' => 'fa fa-list'],
                ['label' => 'Shape & Lift', 'url' => '', 'icon' => 'fa fa-dumbbell'],
            ];
            include __DIR__ . DIRECTORY_SEPARATOR . 'partials' . DIRECTORY_SEPARATOR . 'breadcrumbs.php';
            ?>

            <!--====== Start Main Content ======-->
            <style>
                .sl-hero {
                    position: relative;
                    min-height: 70vh;
                    display: flex;
                    align-items: center;
                    background: linear-gradient(120deg, rgba(10, 10, 20, 0.9), rgba(109, 53, 111, 0.7)), url("<?= asset('images/oferta-details/shape-lift-hero.jpg'); ?>") center/cover;
                    color: #fff;
                    overflow: hidden;
                }

                .sl-hero::after {
                    content: '';
                    position: absolute;
                    inset: 0;
                    background: radial-gradient(circle at 20% 30%, rgba(215, 165, 79, 0.45), transparent 45%);
                }

                .sl-hero .container {
                    position: relative;
                    z-index: 1;
                }

                .sl-badge {
                    display: inline-flex;
                    align-items: center;
                    gap: .45rem;
                    padding: .45rem 1.1rem;
                    border-radius: 999px;
                    border: 1px solid rgba(255, 255, 255, 0.45);
                    background: rgba(255, 255, 255, 0.1);
                    font-size: .78rem;
                    letter-spacing: .08em;
                    text-transform: uppercase;
                }

                .sl-hero h1 {
                    font-size: clamp(2.6rem, 4vw, 3.8rem);
                    font-weight: 700;
                    margin: 1.4rem 0 1rem;
                    line-height: 1.1;
                }

                .sl-hero p {
                    font-size: 1.1rem;
                    max-width: 720px;
                    color: rgba(255, 255, 255, 0.9);
                }

                .sl-btn-primary,
                .sl-btn-outline {
                    border-radius: 999px;
                    padding: .9rem 1.9rem;
                    font-weight: 600;
                    text-transform: uppercase;
                    letter-spacing: .02em;
                    transition: all .3s ease;
                    border: 2px solid transparent;
                }

                .sl-btn-primary {
                    background: linear-gradient(135deg, #D7A54F, #9F5BA4);
                    color: #fff;
                    box-shadow: 0 18px 40px rgba(109, 53, 111, 0.35);
                }

                .sl-btn-outline {
                    border-color: rgba(255, 255, 255, 0.5);
                    color: #fff;
                }

                .sl-btn-primary:hover,
                .sl-btn-outline:hover {
                    transform: translateY(-3px);
                    color: #fff;
                }

                .sl-stats {
                    display: flex;
                    flex-wrap: wrap;
                    gap: 1.5rem;
                    margin-top: 1.6rem;
                }

                .sl-stat .value {
                    font-size: 2.6rem;
                    font-weight: 700;
                    color: var(--color-theme-secondary, #D7A54F);
                }

                .sl-section {
                    padding: 80px 0;
                }

                .sl-section-title {
                    font-size: clamp(2.1rem, 3vw, 2.9rem);
                    font-weight: 700;
                    color: #1C1330;
                }

                .sl-section-subtitle {
                    color: #6E6483;
                    font-size: 1.05rem;
                }

                .sl-grid {
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                    gap: 1.4rem;
                    margin-top: 2.5rem;
                }

                .sl-card {
                    background: #fff;
                    border-radius: 20px;
                    padding: 1.75rem;
                    border: 1px solid rgba(109, 53, 111, 0.08);
                    box-shadow: 0 25px 55px rgba(20, 16, 38, 0.08);
                    transition: transform .3s ease, border-color .3s ease;
                    height: 100%;
                }

                .sl-card:hover {
                    transform: translateY(-6px);
                    border-color: rgba(215, 165, 79, 0.7);
                }

                .sl-card-icon {
                    width: 58px;
                    height: 58px;
                    border-radius: 18px;
                    background: rgba(109, 53, 111, 0.1);
                    color: var(--color-theme-primary);
                    display: inline-flex;
                    justify-content: center;
                    align-items: center;
                    font-size: 1.3rem;
                    margin-bottom: 1rem;
                }

                .sl-pill {
                    display: inline-flex;
                    align-items: center;
                    gap: .45rem;
                    padding: .35rem .9rem;
                    border-radius: 999px;
                    background: rgba(215, 165, 79, 0.15);
                    color: #8b6120;
                    font-weight: 600;
                    font-size: .85rem;
                }

                .sl-list {
                    list-style: none;
                    padding: 0;
                    margin: 0;
                    display: grid;
                    gap: .85rem;
                }

                .sl-list li {
                    display: flex;
                    align-items: flex-start;
                    gap: .75rem;
                    color: #4a4358;
                }

                .sl-list i {
                    color: var(--color-theme-secondary, #D7A54F);
                    margin-top: 3px;
                }

                .sl-process {
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
                    gap: 1.2rem;
                    margin-top: 1.5rem;
                }

                .sl-process-step {
                    background: #fff;
                    border-radius: 18px;
                    padding: 1.5rem;
                    border: 1px solid rgba(109, 53, 111, 0.1);
                    position: relative;
                }

                .sl-process-step::before {
                    content: attr(data-step);
                    position: absolute;
                    right: 1rem;
                    top: 1rem;
                    font-size: 2.4rem;
                    font-weight: 700;
                    color: rgba(109, 53, 111, 0.1);
                }

                .sl-parallax {
                    background-attachment: fixed;
                    background-size: cover;
                    background-position: center;
                    position: relative;
                    padding: 90px 0;
                    color: #fff;
                }

                .sl-parallax::before {
                    content: '';
                    position: absolute;
                    inset: 0;
                    background: rgba(7, 5, 15, 0.78);
                }

                .sl-parallax .container {
                    position: relative;
                    z-index: 1;
                }

                .sl-price-card {
                    background: linear-gradient(150deg, #fff, #f4eff7);
                    border-radius: 24px;
                    padding: 2.4rem;
                    box-shadow: 0 45px 90px rgba(18, 14, 45, 0.12);
                }

                .sl-price {
                    font-size: 3rem;
                    font-weight: 700;
                    color: var(--color-theme-primary);
                    line-height: 1;
                }

                .sl-faq .card {
                    border: none;
                    border-radius: 18px;
                    box-shadow: 0 25px 60px rgba(20, 16, 38, 0.08);
                    margin-bottom: 1rem;
                    overflow: hidden;
                }

                .sl-faq .card-header {
                    background: #fff;
                    border: none;
                    padding: 0;
                }

                .sl-faq button {
                    width: 100%;
                    text-align: left;
                    padding: 1.2rem 1.5rem;
                    font-weight: 600;
                    color: #1C1330;
                    background: #fff;
                }

                .sl-cta {
                    background: linear-gradient(120deg, rgba(109, 53, 111, 0.95), rgba(26, 13, 44, 0.95)), url("<?= asset('images/background/bg-7.png'); ?>");
                    background-blend-mode: overlay;
                    border-radius: 28px;
                    padding: 3rem;
                    color: #fff;
                    text-align: center;
                    box-shadow: 0 50px 110px rgba(8, 5, 15, 0.5);
                }

                .sl-smooth-anchor {
                    cursor: pointer;
                }

                @media (max-width: 767px) {
                    .sl-hero {
                        text-align: center;
                    }

                    .sl-stats {
                        justify-content: center;
                    }
                }
            </style>

            <section class="sl-hero" data-animate="fade">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <span class="sl-badge"><i class="fa fa-bolt"></i> EMS • HIFEM • RF • VACUUM</span>
                            <h1>Shape & Lift – trening 30 000 skurczów w 30 minut</h1>
                            <p>Połącz moc elektrostymulacji mięśni, fal radiowych i masażu vacuum. Wzmocnij brzuch, podnieś pośladki i ujędrnij uda bez potu na siłowni i bez skalpela. Pierwsze efekty zobaczysz po 2-3 zabiegach.</p>
                            <div class="d-flex flex-wrap gap-3 mt-4">
                                <a href="https://booksy.magicsalon.pl" class="sl-btn-primary" target="_blank">
                                    Rezerwuj w Booksy
                                </a>
                                <a class="sl-btn-outline sl-smooth-anchor" data-target="#sl-tech">
                                    Poznaj technologię
                                </a>
                            </div>
                            <div class="sl-stats">
                                <div class="sl-stat">
                                    <div class="value">+20%</div>
                                    <p>więcej masy mięśniowej po serii 6-12 zabiegów</p>
                                </div>
                                <div class="sl-stat">
                                    <div class="value">-19%</div>
                                    <p>tkanki tłuszczowej w newralgicznych strefach</p>
                                </div>
                                <div class="sl-stat">
                                    <div class="value">160 zł</div>
                                    <p>za brzuch, uda, pośladki lub łydki (ramiona 120 zł)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="sl-tech" class="sl-section cdr-gradient-bg">
                <div class="container">
                    <div class="row align-items-center m-b40">
                        <div class="col-lg-6" data-animate="slide-right">
                            <span class="sl-pill">Synergia 4 technologii</span>
                            <h2 class="sl-section-title m-t15">Jak działa Shape & Lift?</h2>
                            <p class="sl-section-subtitle">Łączymy impulsy EMS/HIFEM, fale radiowe i masaż vacuum. Każda technologia pracuje nad inną warstwą: mięśniem, skórą i tkanką tłuszczową.</p>
                        </div>
                        <div class="col-lg-6" data-animate="fade-up">
                            <div class="sl-grid">
                                <div class="sl-card">
                                    <div class="sl-card-icon"><i class="fa fa-dumbbell"></i></div>
                                    <h4>EMS / HIFEM</h4>
                                    <p>20–30 tys. skurczów supramaksymalnych w trakcie jednego zabiegu. Mięśnie rosną, tłuszcz ulega lipolizie.</p>
                                </div>
                                <div class="sl-card">
                                    <div class="sl-card-icon"><i class="fa fa-wave-square"></i></div>
                                    <h4>Fale RF</h4>
                                    <p>Podgrzewamy tkanki do 40-42°C. Kolagen się obkurcza, skóra napina i zaczyna produkować nowe włókna.</p>
                                </div>
                                <div class="sl-card">
                                    <div class="sl-card-icon"><i class="fa fa-water"></i></div>
                                    <h4>Vacuum</h4>
                                    <p>Drenaż limfatyczny usuwa nadmiar wody, toksyny i wygładza cellulit. Skóra staje się gładka i promienna.</p>
                                </div>
                                <div class="sl-card">
                                    <div class="sl-card-icon"><i class="fa fa-chart-line"></i></div>
                                    <h4>Programy personalizowane</h4>
                                    <p>Dobieramy parametry do Twojej partii ciała: brzuch, pośladki, uda, ramiona lub łydki.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sl-card" data-animate="fade-up">
                        <h4>Przebieg zabiegu (20-30 minut)</h4>
                        <div class="sl-process">
                            <div class="sl-process-step" data-step="01">
                                <strong>Konsultacja i mapping</strong>
                                <p>Analizujemy stan skóry, mięśni i oczekiwania. Ustalamy liczbę zabiegów (6-12) i dobieramy program.</p>
                            </div>
                            <div class="sl-process-step" data-step="02">
                                <strong>Przygotowanie</strong>
                                <p>Oczyszczamy skórę, zakładamy aplikatory i ustawiamy intensywność tak, by czuć mocne, ale komfortowe skurcze.</p>
                            </div>
                            <div class="sl-process-step" data-step="03">
                                <strong>Shape & Lift</strong>
                                <p>Impulsy EMS/HIFEM wywołują głęboką pracę mięśni, RF podgrzewa skórę, vacuum drenuje.</p>
                            </div>
                            <div class="sl-process-step" data-step="04">
                                <strong>Plan i zalecenia</strong>
                                <p>Omawiamy nawadnianie, dietę, aktywność i terminy kolejnych wizyt. Nie ma rekonwalescencji.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="sl-section">
                <div class="container">
                    <div class="row align-items-center m-b40">
                        <div class="col-lg-6" data-animate="slide-right">
                            <span class="sl-pill">Dla kogo?</span>
                            <h2 class="sl-section-title m-t15">Shape & Lift rozwiązuje konkretnie sześć problemów</h2>
                            <p class="sl-section-subtitle">Utrata jędrności, osłabione mięśnie, cellulit, trudne fałdki, obrzęki i rozstęp mięśni prostych brzucha – ten zabieg odpowiada na wszystkie te potrzeby.</p>
                        </div>
                        <div class="col-lg-6" data-animate="fade-up">
                            <div class="sl-grid">
                                <div class="sl-card">
                                    <strong>Rozwiązuje</strong>
                                    <ul class="sl-list m-t15">
                                        <li><i class="fa fa-check-circle"></i> Brak jędrności po ciąży lub redukcji wagi</li>
                                        <li><i class="fa fa-check-circle"></i> Osłabione mięśnie brzucha, pośladków, ramion</li>
                                        <li><i class="fa fa-check-circle"></i> Cellulit i nierówna skóra</li>
                                        <li><i class="fa fa-check-circle"></i> Diastasis recti – rozstęp mięśni prostych</li>
                                        <li><i class="fa fa-check-circle"></i> Obrzęki, zastoje limfy</li>
                                        <li><i class="fa fa-check-circle"></i> Lokalna tkanka tłuszczowa oporna na dietę</li>
                                    </ul>
                                </div>
                                <div class="sl-card">
                                    <strong>Przeciwwskazania</strong>
                                    <ul class="sl-list m-t15">
                                        <li><i class="fa fa-times-circle text-danger"></i> Ciąża, karmienie, rozrusznik serca</li>
                                        <li><i class="fa fa-times-circle text-danger"></i> Metalowe implanty, przepukliny</li>
                                        <li><i class="fa fa-times-circle text-danger"></i> Choroby nowotworowe, zakrzepica</li>
                                        <li><i class="fa fa-times-circle text-danger"></i> Nieuregulowane nadciśnienie, infekcje</li>
                                    </ul>
                                    <small class="text-muted">Każdą serię poprzedza szczegółowy wywiad zdrowotny.</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 m-b30" data-animate="slide-right">
                            <div class="sl-card h-100">
                                <h4>Efekty w czasie</h4>
                                <div class="sl-grid">
                                    <div class="sl-card">
                                        <strong>Po 1-3 zabiegach</strong>
                                        <p>Skóra napięta, obrzęki mniejsze, mięśnie „obudzone”.</p>
                                    </div>
                                    <div class="sl-card">
                                        <strong>Po 6-8 zabiegach</strong>
                                        <p>-2 do -4 cm w talii, jędrniejsze uda i pośladki, mniej cellulitu.</p>
                                    </div>
                                    <div class="sl-card">
                                        <strong>Po 12 zabiegach</strong>
                                        <p>Lifting pośladków, brzuch jak po setkach planków, +20% mięśni, -19% tłuszczu.</p>
                                    </div>
                                </div>
                                <p class="text-muted m-t15"><i class="fa fa-info-circle"></i> Badania kliniczne potwierdzają: 96% pacjentek jest zadowolonych, a 92% adipocytów ulega apoptozie w 8h po sesji.</p>
                            </div>
                        </div>
                        <div class="col-lg-6" data-animate="slide-left">
                            <div class="sl-card h-100">
                                <h4>Zalecenia przed i po zabiegu</h4>
                                <div class="sl-grid">
                                    <div class="sl-card">
                                        <strong>Przed</strong>
                                        <ul class="sl-list m-t15">
                                            <li><i class="fa fa-check-circle"></i> Wypij 1,5-2l wody</li>
                                            <li><i class="fa fa-check-circle"></i> Zjedz lekki posiłek</li>
                                            <li><i class="fa fa-check-circle"></i> Usuń kosmetyki z obszaru zabiegowego</li>
                                        </ul>
                                    </div>
                                    <div class="sl-card">
                                        <strong>Po</strong>
                                        <ul class="sl-list m-t15">
                                            <li><i class="fa fa-check-circle"></i> Pij więcej wody (2-3l)</li>
                                            <li><i class="fa fa-check-circle"></i> Unikaj sauny i gorących kąpieli 24h</li>
                                            <li><i class="fa fa-check-circle"></i> Nie ćwicz intensywnie tego samego dnia</li>
                                            <li><i class="fa fa-check-circle"></i> Zadbaj o lekką, białkową dietę</li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="text-muted m-t15"><i class="fa fa-lightbulb"></i> Połączenie z aktywnością fizyczną i zdrową dietą daje spektakularne, długotrwałe efekty.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="sl-parallax" style="background-image:url('<?= asset('images/background/bg-8.jpg'); ?>');">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8" data-animate="slide-right">
                            <span class="sl-pill">Dobrzykowice • Kamieniec Wrocławski • Psie Pole</span>
                            <h2 class="sl-section-title text-white m-t15">Najnowocześniejszy park technologiczny w Twojej okolicy</h2>
                            <p class="m-b20">Nie musisz jechać do centrum Wrocławia. W Magic Salon masz dostęp do certyfikowanych urządzeń EMS/HIFEM i RF w kameralnej atmosferze, z łatwym parkingiem i elastycznymi godzinami.</p>
                            <div class="sl-grid">
                                <div class="sl-card">
                                    <strong>Dlaczego my?</strong>
                                    <ul class="sl-list m-t10">
                                        <li><i class="fa fa-star"></i> Indywidualne protokoły zabiegowe</li>
                                        <li><i class="fa fa-star"></i> Certyfikowane kosmetolożki</li>
                                        <li><i class="fa fa-star"></i> Pakiety na ramiona, brzuch, pośladki, uda, łydki</li>
                                        <li><i class="fa fa-star"></i> Możliwość łączenia z innymi zabiegami: lipolaser, Detox & Drenaż</li>
                                    </ul>
                                </div>
                                <div class="sl-card">
                                    <strong>Lokalne SEO i wygoda</strong>
                                    <ul class="sl-list m-t10">
                                        <li><i class="fa fa-map-marker-alt"></i> Shape & Lift Dobrzykowice</li>
                                        <li><i class="fa fa-map-marker-alt"></i> Elektrostymulacja mięśni Psie Pole / Wojnów</li>
                                        <li><i class="fa fa-map-marker-alt"></i> Lifting pośladków Kamieniec Wrocławski</li>
                                        <li><i class="fa fa-map-marker-alt"></i> EMS na brzuch gmina Czernica</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 m-t30" data-animate="zoom">
                            <div class="sl-price-card text-center">
                                <span class="sl-pill">Cennik Shape & Lift</span>
                                <div class="sl-price m-t15">120-160 zł</div>
                                <p class="text-muted">Cena za jedną partię, 20-30 minut intensywnej pracy mięśni i skóry.</p>
                                <hr>
                                <ul class="sl-list text-left">
                                    <li><i class="fa fa-gem"></i> Ramiona – 120 zł / zabieg</li>
                                    <li><i class="fa fa-gem"></i> Brzuch / pośladki / uda / łydki – 160 zł</li>
                                    <li><i class="fa fa-gem"></i> Pakiet 6 zabiegów – 5% rabatu</li>
                                    <li><i class="fa fa-gem"></i> Pakiet 12 zabiegów – 10% rabatu</li>
                                </ul>
                                <a href="https://booksy.magicsalon.pl" class="sl-btn-primary d-inline-flex align-items-center justify-content-center m-t20" target="_blank">
                                    <i class="fa fa-calendar m-r10"></i> Rezerwuj serię
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="sl-section cdr-gradient-bg">
                <div class="container">
                    <div class="row m-b40">
                        <div class="col-lg-8 mx-auto text-center">
                            <span class="sl-pill">FAQ</span>
                            <h2 class="sl-section-title m-t15">Najczęściej zadawane pytania o Shape & Lift</h2>
                            <p class="sl-section-subtitle">Zebraliśmy odpowiedzi na najpopularniejsze wątpliwości naszych klientek i klientów.</p>
                        </div>
                    </div>
                    <div class="sl-faq">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card" data-animate="fade-up">
                                    <div class="card-header">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#sl-faq1">
                                            Czy zabieg jest bolesny?
                                        </button>
                                    </div>
                                    <div id="sl-faq1" class="collapse">
                                        <div class="card-body">
                                            Nie. Czujesz intensywne skurcze mięśni i ciepło, ale poziom impulsów dobieramy tak, aby był komfortowy. Większość osób uważa zabieg za przyjemny i relaksujący.
                                        </div>
                                    </div>
                                </div>
                                <div class="card" data-animate="fade-up">
                                    <div class="card-header">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#sl-faq2">
                                            Kiedy zobaczę efekty?
                                        </button>
                                    </div>
                                    <div id="sl-faq2" class="collapse">
                                        <div class="card-body">
                                            Pierwsze napięcie skóry i aktywację mięśni poczujesz po 1-2 zabiegach, a realną zmianę kształtu ciała zobaczysz po 6-12 wizytach.
                                        </div>
                                    </div>
                                </div>
                                <div class="card" data-animate="fade-up">
                                    <div class="card-header">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#sl-faq3">
                                            Czy po zabiegu mogę wrócić do pracy?
                                        </button>
                                    </div>
                                    <div id="sl-faq3" class="collapse">
                                        <div class="card-body">
                                            Tak, nie ma żadnej rekonwalescencji. Po zabiegu możesz wrócić do codziennych czynności – tylko pamiętaj o nawodnieniu.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card" data-animate="fade-up">
                                    <div class="card-header">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#sl-faq4">
                                            Czy Shape & Lift zastępuje ćwiczenia?
                                        </button>
                                    </div>
                                    <div id="sl-faq4" class="collapse">
                                        <div class="card-body">
                                            To intensywny trening dla mięśni, ale najlepsze efekty osiągniesz łącząc zabieg z aktywnością fizyczną. Shape & Lift wzmacnia i przyspiesza rezultaty treningów.
                                        </div>
                                    </div>
                                </div>
                                <div class="card" data-animate="fade-up">
                                    <div class="card-header">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#sl-faq5">
                                            Czy mogę łączyć Shape & Lift z innymi zabiegami?
                                        </button>
                                    </div>
                                    <div id="sl-faq5" class="collapse">
                                        <div class="card-body">
                                            Tak! Najlepsze efekty daje w połączeniu z lipolaserem, liposukcją ultradźwiękową, Detox & Drenaż czy Roll & Chill. Przygotujemy dla Ciebie plan 360°.
                                        </div>
                                    </div>
                                </div>
                                <div class="card" data-animate="fade-up">
                                    <div class="card-header">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#sl-faq6">
                                            Jak długo utrzymują się efekty?
                                        </button>
                                    </div>
                                    <div id="sl-faq6" class="collapse">
                                        <div class="card-body">
                                            Przy zdrowej diecie i ruchu efekty utrzymują się wiele miesięcy. Zalecamy zabieg podtrzymujący raz na 3-4 tygodnie, aby zachować efekt „wow”.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="sl-section">
                <div class="container">
                    <div class="sl-cta" data-animate="fade-up">
                        <span class="sl-pill">Metamorfoza zaczyna się dziś</span>
                        <h2 class="sl-section-title text-white m-t15">Shape & Lift – Twój nowy rytuał ciała</h2>
                        <p class="m-b30">Zarezerwuj pierwszą serię i zobacz, co potrafi Twój organizm, gdy dostanie wsparcie najnowszej technologii beauty.</p>
                        <div class="d-flex flex-wrap gap-3 justify-content-center">
                            <a href="https://booksy.magicsalon.pl" class="sl-btn-primary" target="_blank">
                                Booksy – umów online
                            </a>
                            <a href="tel:+48883481581" class="sl-btn-outline">
                                +48 883 481 581
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

                    document.querySelectorAll('.sl-smooth-anchor').forEach(link => {
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

