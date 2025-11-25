<?php
/**
 * MAGIC SALON - Oferta: Roll & Chill
 * Wersja: 1.0 – Strona premium przygotowana w Cursor
 */

require_once __DIR__ . DIRECTORY_SEPARATOR . 'config.php';

$meta = [
    'title' => 'Roll & Chill Dobrzykowice | Rollmasaż + Relax 120 zł | Magic Salon',
    'description' => 'Roll & Chill łączy rollmasaż, podczerwień i głęboki relaks. Redukcja cellulitu, detoks limfatyczny i ukojenie nerwów w Magic Salon Dobrzykowice. Cena: 120 zł.',
    'keywords' => 'roll chill, rollmasaż Wrocław, masaż na cellulit, drenaż limfatyczny Dobrzykowice, roll shaper, masaż relaksacyjny',
    'canonical' => BASE_URL . '/oferta-roll-chill-cursor.php',
    'robots' => 'index, follow, max-image-preview:large',
    'og' => [
        'type' => 'website',
        'title' => 'Roll & Chill – masaż rolkowy z efektem chill',
        'description' => 'Holistyczny zabieg na cellulit i stres: podgrzewany rollmasaż, podczerwień i aromatyczny relaks. Odkryj Roll & Chill w Magic Salon.',
        'url' => BASE_URL . '/oferta-roll-chill-cursor.php',
        'image' => BASE_URL . '/images/oferta-details/roll-chill-hero.jpg',
    ],
    'twitter' => [
        'card' => 'summary_large_image',
        'title' => 'Roll & Chill w Magic Salon',
        'description' => 'Rollmasaż + infrared + relaks. Seria 10 zabiegów w cenie 120 zł/sesja.',
        'image' => BASE_URL . '/images/oferta-details/roll-chill-hero.jpg',
    ],
    'schema' => [
        'enabled' => true,
        'type' => 'Service',
        'name' => 'Roll & Chill – masaż rolkowy z podczerwienią',
        'description' => 'Nieinwazyjny zabieg łączący rollmasaż, drenaż limfatyczny i terapię podczerwienią w celu redukcji cellulitu i głębokiego relaksu.',
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

<body id="bg" class="offer-roll-chill">
    <div class="page-wraper">
        <?php include __DIR__ . DIRECTORY_SEPARATOR . 'partials' . DIRECTORY_SEPARATOR . 'header.php'; ?>

        <div class="page-content bg-white">
            <?php
            $banner_img = 'images/banner/gallery-banner.jpg';
            $page_title = 'Roll & Chill';
            $page_desc = 'Rollmasaż z podczerwienią i aromaterapią. Wygładza cellulit, drenuje limfę i koi nerwy w jednym zabiegu.';
            $breadcrumbs = [
                ['label' => 'Strona Główna', 'url' => 'index.php', 'icon' => 'fa fa-home'],
                ['label' => 'Oferta', 'url' => 'oferta.php', 'icon' => 'fa fa-list'],
                ['label' => 'Roll & Chill', 'url' => '', 'icon' => 'fa fa-spa'],
            ];
            include __DIR__ . DIRECTORY_SEPARATOR . 'partials' . DIRECTORY_SEPARATOR . 'breadcrumbs.php';
            ?>

            <!--====== Start Main Content ======-->
            <style>
                .rc-hero {
                    position: relative;
                    min-height: 70vh;
                    display: flex;
                    align-items: center;
                    background: linear-gradient(120deg, rgba(10, 8, 18, 0.9), rgba(109, 53, 111, 0.65)), url("<?= asset('images/oferta-details/roll-chill-hero.jpg'); ?>") center/cover;
                    color: #fff;
                    overflow: hidden;
                }

                .rc-hero::after {
                    content: '';
                    position: absolute;
                    inset: 0;
                    background: radial-gradient(circle at 15% 30%, rgba(215, 165, 79, 0.45), transparent 45%);
                }

                .rc-hero .container {
                    position: relative;
                    z-index: 1;
                }

                .rc-badge {
                    display: inline-flex;
                    align-items: center;
                    gap: .45rem;
                    padding: .45rem 1.15rem;
                    border-radius: 999px;
                    border: 1px solid rgba(255, 255, 255, 0.4);
                    background: rgba(255, 255, 255, 0.1);
                    letter-spacing: .08em;
                    text-transform: uppercase;
                    font-size: .78rem;
                }

                .rc-hero h1 {
                    font-size: clamp(2.6rem, 4vw, 3.7rem);
                    font-weight: 700;
                    margin: 1.4rem 0 1rem;
                    line-height: 1.1;
                }

                .rc-hero p {
                    font-size: 1.1rem;
                    max-width: 720px;
                    color: rgba(255, 255, 255, 0.9);
                }

                .rc-btn-primary,
                .rc-btn-outline {
                    border-radius: 999px;
                    padding: .9rem 1.9rem;
                    font-weight: 600;
                    text-transform: uppercase;
                    letter-spacing: .02em;
                    transition: all .3s ease;
                    border: 2px solid transparent;
                }

                .rc-btn-primary {
                    background: linear-gradient(135deg, #D7A54F, #9F5BA4);
                    color: #fff;
                    box-shadow: 0 18px 40px rgba(109, 53, 111, 0.35);
                }

                .rc-btn-primary:hover {
                    transform: translateY(-3px);
                    color: #fff;
                }

                .rc-btn-outline {
                    border-color: rgba(255, 255, 255, 0.5);
                    color: #fff;
                }

                .rc-btn-outline:hover {
                    border-color: #fff;
                    background: rgba(255, 255, 255, 0.1);
                }

                .rc-stats {
                    display: flex;
                    gap: 1.5rem;
                    flex-wrap: wrap;
                    margin-top: 1.7rem;
                }

                .rc-stat .value {
                    font-size: 2.6rem;
                    font-weight: 700;
                    color: var(--color-theme-secondary, #D7A54F);
                }

                .rc-section {
                    padding: 80px 0;
                }

                .rc-section-title {
                    font-size: clamp(2.1rem, 3vw, 2.8rem);
                    font-weight: 700;
                    color: #1C1330;
                }

                .rc-section-subtitle {
                    color: #6E6483;
                    font-size: 1.05rem;
                }

                .rc-grid {
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                    gap: 1.4rem;
                    margin-top: 2.5rem;
                }

                .rc-card {
                    background: #fff;
                    border-radius: 20px;
                    padding: 1.75rem;
                    border: 1px solid rgba(109, 53, 111, 0.08);
                    box-shadow: 0 25px 55px rgba(20, 16, 38, 0.08);
                    transition: transform .3s ease, border-color .3s ease;
                    height: 100%;
                }

                .rc-card:hover {
                    transform: translateY(-6px);
                    border-color: rgba(215, 165, 79, 0.7);
                }

                .rc-card-icon {
                    width: 58px;
                    height: 58px;
                    border-radius: 18px;
                    background: rgba(109, 53, 111, 0.1);
                    color: var(--color-theme-primary);
                    display: inline-flex;
                    align-items: center;
                    justify-content: center;
                    font-size: 1.35rem;
                    margin-bottom: 1rem;
                }

                .rc-pill {
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

                .rc-list {
                    list-style: none;
                    padding: 0;
                    margin: 0;
                    display: grid;
                    gap: .85rem;
                }

                .rc-list li {
                    display: flex;
                    align-items: flex-start;
                    gap: .75rem;
                    color: #4a4358;
                }

                .rc-list i {
                    color: var(--color-theme-secondary, #D7A54F);
                    margin-top: 3px;
                }

                .rc-process {
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
                    gap: 1.25rem;
                    margin-top: 1.5rem;
                }

                .rc-process-step {
                    background: #fff;
                    border-radius: 18px;
                    padding: 1.5rem;
                    border: 1px solid rgba(109, 53, 111, 0.1);
                    position: relative;
                }

                .rc-process-step::before {
                    content: attr(data-step);
                    position: absolute;
                    right: 1rem;
                    top: 1rem;
                    font-size: 2.4rem;
                    font-weight: 700;
                    color: rgba(109, 53, 111, 0.1);
                }

                .rc-parallax {
                    background-attachment: fixed;
                    background-size: cover;
                    background-position: center;
                    position: relative;
                    padding: 90px 0;
                    color: #fff;
                }

                .rc-parallax::before {
                    content: '';
                    position: absolute;
                    inset: 0;
                    background: rgba(7, 5, 15, 0.8);
                }

                .rc-parallax .container {
                    position: relative;
                    z-index: 1;
                }

                .rc-price-card {
                    background: linear-gradient(150deg, #fff, #f3edf8);
                    border-radius: 24px;
                    padding: 2.4rem;
                    box-shadow: 0 45px 90px rgba(18, 14, 45, 0.12);
                }

                .rc-price {
                    font-size: 3rem;
                    font-weight: 700;
                    color: var(--color-theme-primary);
                    line-height: 1;
                }

                .rc-faq .card {
                    border: none;
                    border-radius: 18px;
                    box-shadow: 0 25px 60px rgba(20, 16, 38, 0.08);
                    margin-bottom: 1rem;
                    overflow: hidden;
                }

                .rc-faq .card-header {
                    background: #fff;
                    border: none;
                    padding: 0;
                }

                .rc-faq button {
                    width: 100%;
                    text-align: left;
                    padding: 1.2rem 1.5rem;
                    font-weight: 600;
                    color: #1C1330;
                    background: #fff;
                }

                .rc-cta {
                    background: linear-gradient(120deg, rgba(109, 53, 111, 0.95), rgba(18, 10, 32, 0.95)), url("<?= asset('images/background/bg-7.png'); ?>");
                    background-blend-mode: overlay;
                    border-radius: 28px;
                    padding: 3rem;
                    color: #fff;
                    text-align: center;
                    box-shadow: 0 50px 110px rgba(8, 5, 15, 0.5);
                }

                .rc-smooth-anchor {
                    cursor: pointer;
                }

                @media (max-width: 767px) {
                    .rc-hero {
                        text-align: center;
                    }

                    .rc-stats {
                        justify-content: center;
                    }
                }
            </style>

            <section class="rc-hero" data-animate="fade">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <span class="rc-badge"><i class="fa fa-wave-square"></i> Rollmasaż • Infrared • Chill</span>
                            <h1>Roll & Chill – masaż, który wygładza ciało i resetuje głowę</h1>
                            <p>Otul się ciepłem podczerwieni, poczuj rytm rollmasażu i pozwól, by napięcia zniknęły razem z cellulitem. Za 120 zł otrzymujesz 60 minut drenażu limfatycznego, modelowania sylwetki i głębokiego relaksu.</p>
                            <div class="d-flex flex-wrap gap-3 mt-4">
                                <a href="https://booksy.magicsalon.pl" class="rc-btn-primary" target="_blank">
                                    Rezerwuj w Booksy
                                </a>
                                <a class="rc-btn-outline rc-smooth-anchor" data-target="#rc-mechanizm">
                                    Zobacz jak działa
                                </a>
                            </div>
                            <div class="rc-stats">
                                <div class="rc-stat">
                                    <div class="value">120 zł</div>
                                    <p>za zabieg 45-60 minut</p>
                                </div>
                                <div class="rc-stat">
                                    <div class="value">3-7 cm</div>
                                    <p>mniej w obwodach po serii 10 zabiegów</p>
                                </div>
                                <div class="rc-stat">
                                    <div class="value">45-60'</div>
                                    <p>sesja z aromaterapią i muzyką chill</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="rc-mechanizm" class="rc-section cdr-gradient-bg">
                <div class="container">
                    <div class="row align-items-center m-b40">
                        <div class="col-lg-6" data-animate="slide-right">
                            <span class="rc-pill">3 fazy: Roll • Infrared • Chill</span>
                            <h2 class="rc-section-title m-t15">Podstawa zabiegu: mechanika, ciepło i spokój</h2>
                            <p class="rc-section-subtitle">Roll & Chill to coś więcej niż tradycyjny rollmasaż. Pracujemy według sekwencji, która drenuje limfę, modeluje sylwetkę i kończy się elementem relaksacji z aromaterapią.</p>
                        </div>
                        <div class="col-lg-6" data-animate="fade-up">
                            <div class="rc-grid">
                                <div class="rc-card">
                                    <div class="rc-card-icon"><i class="fa fa-sync-alt"></i></div>
                                    <h4>Faza Roll</h4>
                                    <p>Drewniane rolki głaszczą, ugniatają i drenują ciało od stóp po ramiona, zgodnie z kierunkiem przepływu limfy.</p>
                                </div>
                                <div class="rc-card">
                                    <div class="rc-card-icon"><i class="fa fa-fire"></i></div>
                                    <h4>Faza Infrared</h4>
                                    <p>Podczerwień rozgrzewa tkanki, rozszerza naczynia, przyspiesza metabolizm i rozluźnia mięśnie.</p>
                                </div>
                                <div class="rc-card">
                                    <div class="rc-card-icon"><i class="fa fa-moon"></i></div>
                                    <h4>Faza Chill</h4>
                                    <p>Światło, zapach i muzyka wprowadzają w stan alfa. Spada kortyzol, rosną endorfiny.</p>
                                </div>
                                <div class="rc-card">
                                    <div class="rc-card-icon"><i class="fa fa-heartbeat"></i></div>
                                    <h4>Holistyczny rytuał</h4>
                                    <p>Efekty w ciele i głowie: mniej bólu, lżejsze nogi, gładsza skóra, spokojniejszy umysł.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 m-b30" data-animate="fade-up">
                            <div class="rc-card h-100">
                                <h4>Przebieg sesji (45-60 min)</h4>
                                <div class="rc-process">
                                    <div class="rc-process-step" data-step="01">
                                        <strong>Rozgrzewka</strong>
                                        <p>Delikatne głaskanie stóp i łydek, aktywacja refleksologii i krążenia.</p>
                                    </div>
                                    <div class="rc-process-step" data-step="02">
                                        <strong>Detox nóg</strong>
                                        <p>Łydki, uda i pośladki pracują intensywnie – rozbijamy złogi, usuwamy obrzęki.</p>
                                    </div>
                                    <div class="rc-process-step" data-step="03">
                                        <strong>Talia i brzuch</strong>
                                        <p>Praca wokół brzucha i bioder stymuluje trawienie, modeluje linię talii.</p>
                                    </div>
                                    <div class="rc-process-step" data-step="04">
                                        <strong>Plecy i ramiona</strong>
                                        <p>Zamykamy zabieg rozluźniająco na plecach, barkach i rękach.</p>
                                    </div>
                                </div>
                                <p class="text-muted m-t15"><i class="fa fa-info-circle"></i> Intensywność dobieramy według Twojej wrażliwości – od łagodnego relaksu po mocne modelowanie.</p>
                            </div>
                        </div>
                        <div class="col-lg-6" data-animate="slide-left">
                            <div class="rc-card h-100">
                                <h4>Korzyści estetyczne i zdrowotne</h4>
                                <ul class="rc-list m-t15">
                                    <li><i class="fa fa-check-circle"></i> Redukcja cellulitu I-III stopnia po 4-10 zabiegach</li>
                                    <li><i class="fa fa-check-circle"></i> Detoks i drenaż limfatyczny – koniec z ciężkimi nogami</li>
                                    <li><i class="fa fa-check-circle"></i> Wymodelowanie brzucha, ud, boczków i pośladków</li>
                                    <li><i class="fa fa-check-circle"></i> Ujędrnienie skóry, wygładzenie rozstępów</li>
                                    <li><i class="fa fa-check-circle"></i> Lepszy sen, więcej energii i spokój w głowie</li>
                                </ul>
                                <hr>
                                <h4>Efekty w czasie</h4>
                                <div class="rc-grid">
                                    <div class="rc-card">
                                        <strong>1 zabieg</strong>
                                        <p>Ulga dla nóg, mniejsze obrzęki, błogi chill.</p>
                                    </div>
                                    <div class="rc-card">
                                        <strong>5 zabiegów</strong>
                                        <p>Widoczne wygładzenie skóry, minus 1-3 cm.</p>
                                    </div>
                                    <div class+ "rc-card">
                                        <strong>10-15 zabiegów</strong>
                                        <p>Nowa jakość sylwetki: mniej cellulitu, więcej jędrności i lekkości.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="rc-section">
                <div class="container">
                    <div class="row align-items-center m-b40">
                        <div class="col-lg-6" data-animate="slide-right">
                            <span class="rc-pill">Dla kogo jest Roll & Chill?</span>
                            <h2 class="rc-section-title m-t15">Zabieg dla każdej kobiety, która potrzebuje efektu i relaksu</h2>
                            <p class="rc-section-subtitle">Świetny dla osób siedzących, zmęczonych stresem, po ciąży, dla sportowców w regeneracji i wszystkich walczących z wodą i cellulitem.</p>
                        </div>
                        <div class="col-lg-6" data-animate="fade-up">
                            <div class="rc-grid">
                                <div class="rc-card">
                                    <strong>Wskazania</strong>
                                    <ul class="rc-list m-t15">
                                        <li><i class="fa fa-check-circle"></i> Cellulit i zastój limfy</li>
                                        <li><i class="fa fa-check-circle"></i> Siedząca praca, ciężkie nogi</li>
                                        <li><i class="fa fa-check-circle"></i> Stres, bezsenność, chroniczne napięcie</li>
                                        <li><i class="fa fa-check-circle"></i> Regeneracja po treningu, powrót do formy po ciąży</li>
                                    </ul>
                                </div>
                                <div class="rc-card">
                                    <strong>Przeciwwskazania</strong>
                                    <ul class="rc-list m-t15">
                                        <li><i class="fa fa-times-circle text-danger"></i> Ciąża i karmienie</li>
                                        <li><i class="fa fa-times-circle text-danger"></i> Choroby nowotworowe, zaawansowane żylaki, zakrzepica</li>
                                        <li><i class="fa fa-times-circle text-danger"></i> Otwarte rany, stany zapalne skóry</li>
                                        <li><i class="fa fa-times-circle text-danger"></i> Ciężkie choroby serca, niekontrolowane nadciśnienie</li>
                                    </ul>
                                    <small class="text-muted">Przed pierwszą wizytą wykonujemy wywiad zdrowotny.</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 m-b30" data-animate="slide-right">
                            <div class="rc-card h-100">
                                <h4>Jak przygotować się do zabiegu?</h4>
                                <ul class="rc-list m-t15">
                                    <li><i class="fa fa-check-circle"></i> Załóż biały, przylegający strój i skarpetki (biel przepuszcza IR)</li>
                                    <li><i class="fa fa-check-circle"></i> Nie jedz obfitego posiłku na 2h przed session</li>
                                    <li><i class+"fa fa-check-circle"></i> Wypij szklankę wody przed wejściem na urządzenie</li>
                                    <li><i class="fa fa-check-circle"></i> Zabierz ręcznik i butelkę wody na później</li>
                                    <li><i class="fa fa-check-circle"></i> Poinformuj nas o ewentualnych schorzeniach i lekach</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6" data-animate="slide-left">
                            <div class="rc-card h-100">
                                <h4>Pielęgnacja po Roll & Chill</h4>
                                <ul class="rc-list m-t15">
                                    <li><i class="fa fa-check-circle"></i> Wypij 1,5-2l wody w ciągu dnia – przyspieszy to detoks</li>
                                    <li><i class="fa fa-check-circle"></i> Unikaj ciężkich posiłków i alkoholu przez 24h</li>
                                    <li><i class="fa fa-check-circle"></i> Nałóż kosmetyk antycellulitowy – skóra chłonie wszystko</li>
                                    <li><i class="fa fa-check-circle"></i> Zaplanuj kolejną sesję za 1-2 dni – dla efektu kumulacji</li>
                                </ul>
                                <p class="text-muted m-t15"><i class="fa fa-lightbulb"></i> Połącz zabieg z delikatnym treningiem lub spacerem – metabolizm podziękuje.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="rc-parallax" style="background-image:url('<?= asset('images/background/bg-8.jpg'); ?>');">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8" data-animate="slide-right">
                            <span class="rc-pill">Dobrzykowice • Kamieniec • Psie Pole • Wojnów</span>
                            <h2 class="rc-section-title text-white m-t15">Twoja strefa chill 15 minut od Wrocławia</h2>
                            <p class="m-b20">Wybierz Magic Salon, jeśli chcesz uciec od zgiełku centrum Wrocławia i znajdować się w miejscu, gdzie masaż jest rytuałem, a nie taśmową usługą. Parking, kameralne wnętrza, aromaty i playlista #chillhouse – wszystko gotowe.</p>
                            <div class="rc-grid">
                                <div class="rc-card">
                                    <strong>Lokalne pozycjonowanie</strong>
                                    <ul class="rc-list m-t10">
                                        <li><i class="fa fa-map-marker-alt"></i> Roll & Chill Dobrzykowice</li>
                                        <li><i class="fa fa-map-marker-alt"></i> Rollmasaż Psie Pole / Wojnów</li>
                                        <li><i class="fa fa-map-marker-alt"></i> Masaż na cellulit gmina Czernica</li>
                                        <li><i class="fa fa-map-marker-alt"></i> Drenaż limfatyczny Kamieniec Wrocławski</li>
                                    </ul>
                                </div>
                                <div class="rc-card">
                                    <strong>Przewagi Magic Salon</strong>
                                    <ul class="rc-list m-t10">
                                        <li><i class="fa fa-star"></i> Cena 120 zł (we Wrocławiu 150-250 zł)</li>
                                        <li><i class="fa fa-star"></i> Profesjonalny roll shaper z IR</li>
                                        <li><i class="fa fa-star"></i> Aromaterapia, muzyka, prywatność</li>
                                        <li><i class="fa fa-star"></i> Booksy, telefon, mail – wybierz swój kanał</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 m-t30" data-animate="zoom">
                            <div class="rc-price-card text-center">
                                <span class="rc-pill">Cennik masaży</span>
                                <div class="rc-price m-t15">120 zł</div>
                                <p class="text-muted">Cena za pojedynczą sesję Roll & Chill (45-60 min).</p>
                                <hr>
                                <ul class="rc-list text-left">
                                    <li><i class="fa fa-gem"></i> Seria 5 zabiegów – 550 zł</li>
                                    <li><i class="fa fa-gem"></i> Seria 10 zabiegów – 1050 zł</li>
                                    <li><i class="fa fa-gem"></i> Cool Down Roll – 120 zł</li>
                                    <li><i class="fa fa-gem"></i> Goodbye Cellulite – 180 zł</li>
                                </ul>
                                <a href="https://booksy.magicsalon.pl" class="rc-btn-primary d-inline-flex align-items-center justify-content-center m-t20" target="_blank">
                                    <i class="fa fa-calendar m-r10"></i> Umów wizytę
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="rc-section cdr-gradient-bg">
                <div class="container">
                    <div class="row m-b40">
                        <div class="col-lg-8 mx-auto text-center">
                            <span class="rc-pill">FAQ</span>
                            <h2 class="rc-section-title m-t15">Najczęściej zadawane pytania o Roll & Chill</h2>
                            <p class="rc-section-subtitle">Zebraliśmy odpowiedzi, które najczęściej słyszymy w recepcji Magic Salon.</p>
                        </div>
                    </div>

                    <div class="rc-faq">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card" data-animate="fade-up">
                                    <div class="card-header">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#rc-faq1">
                                            Czy zabieg jest bolesny?
                                        </button>
                                    </div>
                                    <div id="rc-faq1" class="collapse">
                                        <div class="card-body">
                                            Nie. Przy pierwszym zabiegu możesz poczuć lekkie łaskotanie lub intensywniejszą pracę w miejscach z cellulitem, ale intensywność zawsze kontrolujemy i dopasowujemy do Twojej tolerancji.
                                        </div>
                                    </div>
                                </div>
                                <div class="card" data-animate="fade-up">
                                    <div class="card-header">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#rc-faq2">
                                            Jak często wykonywać Roll & Chill?
                                        </button>
                                    </div>
                                    <div id="rc-faq2" class="collapse">
                                        <div class="card-body">
                                            Faza startowa: 2-3 zabiegi w tygodniu przez 4 tygodnie. Później 1-2 zabiegi tygodniowo lub co 2 tygodnie, aby utrzymać efekty.
                                        </div>
                                    </div>
                                </div>
                                <div class="card" data-animate="fade-up">
                                    <div class="card-header">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#rc-faq3">
                                            Czy mogę robić zabieg w czasie miesiączki?
                                        </button>
                                    </div>
                                    <div id="rc-faq3" class="collapse">
                                        <div class="card-body">
                                            Tak, unikamy jedynie mocnego masażu brzucha. Wiele klientek mówi, że dzięki rollmasażowi czują mniejsze napięcie i redukcję bólów menstruacyjnych.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card" data-animate="fade-up">
                                    <div class="card-header">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#rc-faq4">
                                            Jakie efekty zobaczę po jednym zabiegu?
                                        </button>
                                    </div>
                                    <div id="rc-faq4" class="collapse">
                                        <div class="card-body">
                                            Uczucie lekkości, mniejsze obrzęki, gładszą skórę i ogromny chill. Redukcja centymetrów i wygładzenie cellulitu przychodzą po serii kilku wizyt.
                                        </div>
                                    </div>
                                </div>
                                <div class="card" data-animate="fade-up">
                                    <div class="card-header">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#rc-faq5">
                                            Czy mogę łączyć Roll & Chill z innymi zabiegami?
                                        </button>
                                    </div>
                                    <div id="rc-faq5" class="collapse">
                                        <div class="card-body">
                                            Tak, to świetny wstęp do liposukcji ultradźwiękowej, Shape & Lift czy zabiegów na twarz. Przyspiesza usuwanie toksyn i rozbitych adipocytów.
                                        </div>
                                    </div>
                                </div>
                                <div class="card" data-animate="fade-up">
                                    <div class="card-header">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#rc-faq6">
                                            Jaki strój zabrać na sesję?
                                        </button>
                                    </div>
                                    <div id="rc-faq6" class="collapse">
                                        <div class="card-body">
                                            Najlepiej biały, przylegający komplet (legginsy + koszulka). Biały kolor przepuszcza podczerwień, a gładki materiał nie blokuje pracy rolek. W razie potrzeby mamy strój na miejscu.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="rc-section">
                <div class="container">
                    <div class="rc-cta" data-animate="fade-up">
                        <span class="rc-pill">Gotowa na detox i chill?</span>
                        <h2 class="rc-section-title text-white m-t15">Roll & Chill czeka w Magic Salon</h2>
                        <p class="m-b30">Zabierz ciało na masaż, a głowę na wakacje. Zarezerwuj wizytę i poczuj, jak rollmasaż z podczerwienią potrafi odmienić Twoje samopoczucie.</p>
                        <div class="d-flex flex-wrap gap-3 justify-content-center">
                            <a href="https://booksy.magicsalon.pl" class="rc-btn-primary" target="_blank">
                                Booksy – rezerwacja 24/7
                            </a>
                            <a href="tel:+48883481581" class="rc-btn-outline">
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

                    document.querySelectorAll('.rc-smooth-anchor').forEach(link => {
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

