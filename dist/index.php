<?php

/**
 * MAGIC SALON - Strona główna (index.php)
 * Wersja: 2.1 - Naprawiono ścieżki i błędy
 */

// Załaduj konfigurację
require_once __DIR__ . DIRECTORY_SEPARATOR . 'config.php';

// Konfiguracja meta tagów dla strony głównej
$meta = [
    'title' => 'MAGIC SALON – Salon Kosmetyczny Dobrzykowice | Profesjonalne Zabiegi Beauty',
    'description' => 'Profesjonalny salon kosmetyczny MAGIC SALON w Dobrzykowicach k. Wrocławia ✨ Zabiegi na twarz, depilacja laserowa, modelowanie sylwetki, lifting rzęs ⭐ Rezerwuj online przez Booksy!',
    'keywords' => 'salon kosmetyczny dobrzykowice, beauty salon wrocław, depilacja laserowa, zabiegi na twarz, modelowanie ciała, lifting rzęs, magic salon, spa dobrzykowice',
    'canonical' => BASE_URL . '/',
    'robots' => 'index, follow, max-image-preview:large',
    'og' => [
        'type' => 'website',
        'title' => 'MAGIC SALON – Profesjonalny Salon Kosmetyczny w Dobrzykowicach',
        'description' => 'Odkryj magię profesjonalnej pielęgnacji w MAGIC SALON! Zabiegi na twarz, depilacja laserowa, modelowanie sylwetki. Umów wizytę online!',
        'url' => BASE_URL . '/',
        'image' => BASE_URL . '/images/og-image.jpg',
    ],
    'twitter' => [
        'card' => 'summary_large_image',
        'title' => 'MAGIC SALON – Salon Kosmetyczny Dobrzykowice',
        'description' => 'Profesjonalne zabiegi kosmetyczne w Dobrzykowicach k. Wrocławia',
    ],
    'schema' => [
        'enabled' => true,
        'type' => 'BeautySalon',
        'name' => 'MAGIC SALON',
        'description' => 'Profesjonalny salon kosmetyczny oferujący zabiegi na twarz i ciało, depilację laserową, stylizację rzęs i brwi',
        'telephone' => '+48883481581',
        'email' => 'biuro@magicsalon.pl',
        'priceRange' => '20-450 PLN',
        'address' => [
            'streetAddress' => 'ul. Borówkowa 13',
            'postalCode' => '55-002',
            'addressLocality' => 'Dobrzykowice',
            'addressRegion' => 'Dolnośląskie',
            'addressCountry' => 'PL'
        ],
        'geo' => [
            'latitude' => '51.0961',
            'longitude' => '17.1994'
        ],
        'openingHours' => [
            'Mo-Fr 09:00-20:00',
            'Sa 09:00-18:00'
        ]
    ]
];

// Załaduj head partial - POPRAWIONA ŚCIEŻKA
$headFile = __DIR__ . DIRECTORY_SEPARATOR . 'partials' . DIRECTORY_SEPARATOR . 'head.php';
if (file_exists($headFile)) {
    require_once $headFile;
} else {
    die('ERROR: Brak pliku head.php. Oczekiwana ścieżka: ' . htmlspecialchars($headFile));
}
?>

<body id="bg" class="home-page">

    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K76PV6PD"
            height="0" width="0" style="display:none;visibility:hidden" aria-hidden="true"></iframe>
    </noscript>

    <div class="page-wraper">

        <!-- HEADER START -->

        <!-- Header -->
        <?php require_once __DIR__ . '/partials/header.php'; ?>

        <!-- HEADER END -->

        <!-- CONTENT START -->
        <div class="page-content">

            <!-- SLIDER START -->
            <div id="rev_slider_1050_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="webproduct-light" data-source="gallery" style="background-color:transparent;padding:0px;">
                <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
                <div id="rev_slider_1050_1" class="slider-dots rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
                    <ul>
                        <!-- SLIDE  -->
                        <li data-index="rs-2938" data-transition="slideleft" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/main-slider/slider2/slide1.jpg" data-rotate="0" data-fsslotamount="7" data-saveperformance="off" data-title="" data-param1="Additional Text" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="images/main-slider/slider2/slide1.jpg" alt="Slider 1 Magic Salon" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->


                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption WebProduct-Title tp-resizeme"
                                id="slide-2938-layer-01"
                                data-x="['left','left','left','left']" data-hoffset="['60','60','20','20']"
                                data-y="['middle','middle','top','top']" data-voffset="['-80','-80','200','130']"
                                data-fontsize="['57','55','55','30']"
                                data-lineheight="['65','65','65','65']"
                                data-width="['700','700','700','300']"
                                data-height="none"
                                data-whitespace="nowrap"

                                data-type="text"
                                data-responsive_offset="on"

                                data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1000,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"

                                style="z-index: 11;
                                white-space: nowrap;
                                text-transform:uppercase;">
                                <div class="text-secondry"> Najlepsze miejsce <span class="site-text-primary"> Dla Ciebie!</span></div>
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption WebProduct-SubTitle tp-resizeme"
                                id="slide-2938-layer-02"
                                data-x="['left','left','left','left']" data-hoffset="['60','60','20','20']"
                                data-y="['middle','middle','top','top']" data-voffset="['0','0','280','180']"
                                data-fontsize="['55','55','55','30']"
                                data-lineheight="['75','75','75','75']"
                                data-width="['700','700','700','300']"
                                data-height="none"
                                data-whitespace="nowrap"

                                data-type="text"
                                data-responsive_offset="on"

                                data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1250,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"

                                style="z-index: 12; 
                                white-space: nowrap;
                                text-transform:uppercase;
                               	font-weight: 700;
                                ">
                                <div class="text-secondry">
                                    <span class="site-text-primary">Piękno</span> w zasięgu ręki!
                                </div>
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption WebProduct-Content   tp-resizeme"
                                id="slide-2938-layer-03"
                                data-x="['left','left','left','left']" data-hoffset="['60','60','20','20']"
                                data-y="['middle','middle','top','top']" data-voffset="['80','80','380','250']"
                                data-fontsize="['21','21','24','18']"
                                data-lineheight="['28','28','32','26']"
                                data-width="['700','700','700','300']"
                                data-height="['none','none','76','68']"
                                data-whitespace="normal"

                                data-type="text"
                                data-responsive_offset="on"

                                data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1500,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"

                                style="z-index: 13; white-space: normal;">
                                <div class="text-secondry"> Witaj w MAGIC SALON – wyjątkowym salonie piękności, który powstał z pasji do estetyki, zdrowia i holistycznego podejścia do pielęgnacji ciała i ducha.</div>
                            </div>

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption tp-resizeme"
                                id="slide-2938-layer-04"
                                data-x="['left','left','left','left']" data-hoffset="['60','60','20','20']"
                                data-y="['middle','middle','top','top']" data-voffset="['180','180','480','400']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"

                                data-type="button"
                                data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-2939","delay":""}]'
                                data-responsive_offset="on"
                                data-responsive="on"
                                data-frames='[ 
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[40,40,40,40]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"

                                style="z-index:13; text-transform:uppercase; font-weight:700;">
                                <a href="oferta.html" class="site-button radius-sm button-lg">Oferta</a>
                            </div>
                            <!-- LAYER NR. 5 -->

                            <div class="tp-caption tp-resizeme"
                                id="slide-2938-layer-05"
                                data-x="['left','left','left','left']" data-hoffset="['240','240','200','200']"
                                data-y="['middle','middle','top','top']" data-voffset="['180','180','480','400']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"

                                data-type="button"
                                data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-2939","delay":""}]'
                                data-responsive_offset="on"
                                data-responsive="on"
                                data-frames='[ 
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[40,40,40,40]"

                                style="z-index:13; text-transform:uppercase; font-weight:700;">
                                <a href="o-firmie.html" class="site-button-secondry radius-sm button-lg">O firmie</a>
                            </div>

                        </li>

                        <!-- SLIDE  -->
                        <li data-index="rs-2940" data-transition="slideleft" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/main-slider/slider2/slide2.jpg" data-rotate="0" data-fsslotamount="7" data-saveperformance="off" data-title="" data-param1="Additional Text" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="images/main-slider/slider2/slide2.jpg" alt="Slider 2 Magic Salon" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->


                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption WebProduct-Title   tp-resizeme"
                                id="slide-2940-layer-01"
                                data-x="['left','left','left','left']" data-hoffset="['60','60','20','20']"
                                data-y="['middle','middle','top','top']" data-voffset="['-80','-80','200','130']"
                                data-fontsize="['57','55','55','30']"
                                data-lineheight="['65','65','65','65']"
                                data-width="['700','700','700','300']"
                                data-height="none"
                                data-whitespace="nowrap"

                                data-type="text"
                                data-responsive_offset="on"

                                data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1000,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"

                                style="z-index: 11;
                                white-space: nowrap;
                                text-transform:uppercase;">
                                <div class="text-secondry"> Zrelaksuj się <span class="site-text-primary"> Salon Magic</span></div>
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption WebProduct-SubTitle   tp-resizeme"
                                id="slide-2940-layer-02"
                                data-x="['left','left','left','left']" data-hoffset="['60','60','20','20']"
                                data-y="['middle','middle','top','top']" data-voffset="['0','0','280','180']"
                                data-fontsize="['55','55','55','30']"
                                data-lineheight="['75','75','75','75']"
                                data-width="['700','700','700','300']"
                                data-height="none"
                                data-whitespace="nowrap"

                                data-type="text"
                                data-responsive_offset="on"

                                data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1250,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"

                                style="z-index: 12; 
                                white-space: nowrap;
                                text-transform:uppercase;
                               	font-weight: 700;
                                ">
                                <div class="text-secondry">
                                    <span class="site-text-primary">Twoje piękno</span> nasza pasja
                                </div>
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption WebProduct-Content   tp-resizeme"
                                id="slide-2940-layer-03"
                                data-x="['left','left','left','left']" data-hoffset="['60','60','20','20']"
                                data-y="['middle','middle','top','top']" data-voffset="['80','80','380','250']"
                                data-fontsize="['21','21','24','18']"
                                data-lineheight="['28','28','32','26']"
                                data-width="['700','700','700','300']"
                                data-height="['none','none','76','68']"
                                data-whitespace="normal"

                                data-type="text"
                                data-responsive_offset="on"

                                data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1500,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"

                                style="z-index: 13; white-space: normal;">
                                <div class="text-secondry"> Nasze motto: "Piękno w zasięgu ręki. Zrelaksuj się i poczuj się wyjątkowo." – to nie tylko slogan, ale codzienna filozofia, którą realizujemy z troską i zaangażowaniem.</div>
                            </div>

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption tp-resizeme"
                                id="slide-2940-layer-04"
                                data-x="['left','left','left','left']" data-hoffset="['60','60','20','20']"
                                data-y="['middle','middle','top','top']" data-voffset="['180','180','480','400']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"

                                data-type="button"
                                data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-2939","delay":""}]'
                                data-responsive_offset="on"
                                data-responsive="on"
                                data-frames='[ 
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[40,40,40,40]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"

                                style="z-index:13; text-transform:uppercase; font-weight:700;">
                                <a href="opinie-klientow.html" class="site-button radius-sm button-lg">Opinie klientów</a>
                            </div>
                            <!-- LAYER NR. 5 -->

                            <div class="tp-caption tp-resizeme"
                                id="slide-2940-layer-05"
                                data-x="['left','left','left','left']" data-hoffset="['240','240','200','200']"
                                data-y="['middle','middle','top','top']" data-voffset="['180','180','480','400']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"

                                data-type="button"
                                data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-2939","delay":""}]'
                                data-responsive_offset="on"
                                data-responsive="on"
                                data-frames='[ 
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[40,40,40,40]"

                                style="z-index:13; text-transform:uppercase; font-weight:700;">
                                <a href="faq-pytania.html" class="site-button-secondry radius-sm button-lg">FAQ & Najczęściej zadawane pytania</a>
                            </div>

                        </li>

                        <!-- SLIDE  -->
                        <li data-index="rs-2941" data-transition="slideleft" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/main-slider/slider2/slide3.jpg" data-rotate="0" data-fsslotamount="7" data-saveperformance="off" data-title="" data-param1="Additional Text" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="images/main-slider/slider2/slide3.jpg" alt="Slider 3 Magic Salon" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->


                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption WebProduct-Title   tp-resizeme"
                                id="slide-2941-layer-01"
                                data-x="['left','left','left','left']" data-hoffset="['60','60','20','20']"
                                data-y="['middle','middle','top','top']" data-voffset="['-80','-80','200','130']"
                                data-fontsize="['57','55','55','30']"
                                data-lineheight="['65','65','65','65']"
                                data-width="['700','700','700','300']"
                                data-height="none"
                                data-whitespace="nowrap"

                                data-type="text"
                                data-responsive_offset="on"

                                data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1000,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"

                                style="z-index: 11;
                                white-space: nowrap;
                                text-transform:uppercase;">
                                <div class="text-secondry"> Witamy <span class="site-text-primary"> w Magicznym Miejscu</span></div>
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption WebProduct-SubTitle   tp-resizeme"
                                id="slide-2941-layer-02"
                                data-x="['left','left','left','left']" data-hoffset="['60','60','20','20']"
                                data-y="['middle','middle','top','top']" data-voffset="['0','0','280','180']"
                                data-fontsize="['55','55','55','30']"
                                data-lineheight="['75','75','75','75']"
                                data-width="['700','700','700','300']"
                                data-height="none"
                                data-whitespace="nowrap"

                                data-type="text"
                                data-responsive_offset="on"

                                data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1250,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"

                                style="z-index: 12; 
                                white-space: nowrap;
                                text-transform:uppercase;
                               	font-weight: 700;
                                ">
                                <div class="text-secondry">
                                    <span class="site-text-primary">Gdzie Twoje</span> Piękno Rozkwita!
                                </div>
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption WebProduct-Content   tp-resizeme"
                                id="slide-2941-layer-03"
                                data-x="['left','left','left','left']" data-hoffset="['60','60','20','20']"
                                data-y="['middle','middle','top','top']" data-voffset="['80','80','380','250']"
                                data-fontsize="['21','21','24','18']"
                                data-lineheight="['28','28','32','26']"
                                data-width="['700','700','700','300']"
                                data-height="['none','none','76','68']"
                                data-whitespace="normal"

                                data-type="text"
                                data-responsive_offset="on"

                                data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1500,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"

                                style="z-index: 13; white-space: normal;">
                                <div class="text-secondry"> To właśnie tu, w atmosferze luksusu i profesjonalizmu, odkryjesz swoją prawdziwą urodę.</div>
                            </div>

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption tp-resizeme"
                                id="slide-2941-layer-04"
                                data-x="['left','left','left','left']" data-hoffset="['60','60','20','20']"
                                data-y="['middle','middle','top','top']" data-voffset="['180','180','480','400']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"

                                data-type="button"
                                data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-2939","delay":""}]'
                                data-responsive_offset="on"
                                data-responsive="on"
                                data-frames='[ 
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[40,40,40,40]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"

                                style="z-index:13; text-transform:uppercase; font-weight:700;">
                                <a href="galeria.html" class="site-button radius-sm button-lg">Galeria</a>
                            </div>
                            <!-- LAYER NR. 5 -->

                            <div class="tp-caption tp-resizeme"
                                id="slide-2941-layer-05"
                                data-x="['left','left','left','left']" data-hoffset="['240','240','200','200']"
                                data-y="['middle','middle','top','top']" data-voffset="['180','180','480','400']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"

                                data-type="button"
                                data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-2939","delay":""}]'
                                data-responsive_offset="on"
                                data-responsive="on"
                                data-frames='[ 
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[40,40,40,40]"

                                style="z-index:13; text-transform:uppercase; font-weight:700;">
                                <a href="zarezerwuj-wizyte.html" class="site-button-secondry radius-sm button-lg">Zarezerwuj wizytę</a>
                            </div>

                        </li>
                    </ul>

                </div>
            </div>
            <!-- SLIDER END -->

            <!-- ABOUT SECTION START -->
            <div class="section-full p-t100 p-b70 bg-bottom-center bg-full-width bg-no-repeat">
                <div class="container ">
                    <div class="section-content about4-section">
                        <div class="row">
                            <div class="col-md-5 col-sm-5 m-b30 animate rubberBand animated">
                                <div class="about4-section-pic ">
                                    <div class="wt-media">
                                        <img src="images/slid-2.jpg" alt="Logo oficjalne Magic Salon">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-7 col-sm-7 m-b30 animate rubberBand animated">
                                <div class="about4-content">
                                    <h3 class="text-uppercase text-secondry">Zaopiekujemy się Tobą!</h3>
                                    <h2><span class="site-text-primary">Witamy w </span> MAGIC SALON </h2>
                                    <p><strong>MAGIC SALON – Twoje piękno, nasza pasja – odkryj magię profesjonalnej pielęgnacji!</strong></p>
                                    <p>Witamy w Magicznym Miejscu, Gdzie Twoje Piękno Rozkwita! Witaj w MAGIC SALON – wyjątkowym salonie piękności, który powstał z pasji do estetyki, zdrowia i holistycznego podejścia do pielęgnacji ciała i ducha. Nasze motto: "Piękno w zasięgu ręki. Zrelaksuj się i poczuj się wyjątkowo." – to nie tylko slogan, ale codzienna filozofia, którą realizujemy z troską i zaangażowaniem. To właśnie tu, w atmosferze luksusu i profesjonalizmu, odkryjesz swoją prawdziwą urodę. </p>
                                    <div class="text-left p-b30">
                                        <img src="images/piekno.png" alt="Piękno nie musi być daleko!">
                                    </div>
                                    <div>
                                        <a href="blog.html" class="site-button radius-sm">
                                            <span class="font-weight-700 inline-block text-uppercase p-lr15">Blog</span>
                                        </a>
                                        <a href="oferta.html" class="site-button-secondry radius-sm">
                                            <span class="font-weight-700 inline-block text-uppercase p-lr15">Oferta</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ABOUT COMPANY SECTION END -->

            <!-- WELCOME SECTION START -->
            <div class="section-full p-t100  p-b70 bg-bottom-center bg-full-width bg-no-repeat" style="background-image:url(images/background/bg-1.png);">
                <div class="container ">
                    <div class="section-head text-center">
                        <h1><span class="site-text-primary"> MAGIC SALON </span> Twoje piękno, nasza pasja</h1>
                        <div class="wt-separator-outer ">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left site-bg-primary"></span>
                                <span class="separator-right site-bg-primary"></span>
                            </div>
                        </div>

                        <p class="font-16"><strong>
                                Co wyróżnia MAGIC SALON?
                            </strong>
                        </p>

                    </div>
                    <div class="section-content text-center about-spa m-b30">
                        <p>
                            MAGIC SALON to miejsce, gdzie najnowsze technologie spotykają się z indywidualnym podejściem do klienta. Wiemy, że każda osoba jest wyjątkowa, dlategO firmieze zabiegi są precyzyjnie dobierane do potrzeb skóry, sylwetki i stylu życia naszych Klientów. Wyróżnia nas szeroka oferta zabiegów kosmetycznych, estetycznych i relaksacyjnych – wykonywanych wyłącznie przez certyfikowanych specjalistów z doświadczeniem.
                        </p>
                        <p>
                            Naszą misją jest nie tylko poprawa wyglądu, ale i samopoczucia – wierzymy, że piękno to równowaga ciała i ducha.
                        </p>
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-4 col-md-6 m-b30 animate tada animated">
                                <div class="wt-icon-box-wraper p-a30 center">
                                    <div class="wt-icon-box-md radius bg-secondry m-b20 circle-line-effect">
                                        <span class="icon-cell text-white"><span class="flaticon-female-hairs"></span></span>
                                    </div>
                                    <div class="icon-content">
                                        <h4 class="wt-tilte font-weight-500">Profesjonalizm na najwyższym poziomie</h4>
                                        <p class="text-secondry">W Salonie Magic stawiamy na najwyższą jakość usług. Nasi wykwalifikowani specjaliści dbają o każdy detal, abyś czuła się w pełni zaopiekowana. Każdy zabieg wykonywany jest z pełnym zaangażowaniem i indywidualnym podejściem.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 m-b30 animate tada animated">
                                <div class="wt-icon-box-wraper p-a30 center">
                                    <div class="wt-icon-box-md radius bg-secondry m-b20 circle-line-effect">
                                        <span class="icon-cell text-white"><span class="flaticon-female-hairs"></span></span>
                                    </div>
                                    <div class="icon-content">
                                        <h4 class="wt-tilte font-weight-500">Innowacyjne technologie</h4>
                                        <p class="text-secondry">Korzystamy z najnowszych urządzeń i technologii, które zapewniają skuteczność i bezpieczeństwO firmiezych zabiegów. Dzięki zaawansowanym metodom, takim jak liposukcja ultradźwiękowa czy terapia mikrodrgań, osiągamy spektakularne efekty w krótkim czasie.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 m-b30 animate tada animated">
                                <div class="wt-icon-box-wraper p-a30 center">
                                    <div class="wt-icon-box-md radius bg-secondry m-b20 circle-line-effect">
                                        <span class="icon-cell text-white"><span class="flaticon-female-hairs"></span></span>
                                    </div>
                                    <div class="icon-content">
                                        <h4 class="wt-tilte font-weight-500">Komfort i relaks</h4>
                                        <p class="text-secondry">Dbamy o to, aby każda wizyta w naszym salonie była przyjemnością. Oferujemy komfortową atmosferę, w której możesz się zrelaksować i odpocząć, a także doświadczyć wyjątkowej pielęgnacji, która odmieni Twoje ciało i umysł.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <a href="opinie-klientow.html" class="m-b15 site-button text-uppercase radius-sm m-lr15 font-weight-700 button-lg">Opinie klientów</a>
                            <a href="faq-pytania.html" class="m-b15 site-button-secondry text-uppercase radius-sm m-lr15 font-weight-700 button-lg">FAQ & Najczęściej zadawane pytania</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- WELCOME COMPANY SECTION END -->

            <!-- PRICING SECTION START  -->
            <div class="section-full bg-gray p-t100 p-b70">
                <div class="container">
                    <!-- TITLE START-->
                    <div class="section-head text-center">
                        <h1><span class="site-text-primary">Nasze</span> usługi – piękno w każdej formie</h1>
                        <div class="wt-separator-outer">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left site-bg-primary"></span>
                                <span class="separator-right site-bg-primary"></span>
                            </div>
                        </div>
                        <p>To miejsce, gdzie Twoje piękno staje się naszą pasją. Zaufaj profesjonalistom i odkryj magię pielęgnacji, która odmieni Twoje ciało i umysł! W MAGIC SALON oferujemy szeroki wachlarz nowoczesnych zabiegów, które zostały zaprojektowane z myślą o osobach wymagających – tych, którzy cenią sobie wysoką jakość, bezpieczeństwo i trwałe efekty.</p>
                    </div>
                    <!-- TITLE END-->
                    <div class="section-content">
                        <div class="owl-carousel our-pricing-carousel owl-btn-vertical-center owl-btn-hover nav nav-tabs">

                            <!-- Block 1 -->
                            <div class="item active-arrow active">
                                <a data-bs-toggle="tab" href="#pricing-item1" class="tab-block">
                                    <div class="our-pricing-tab  radius-sm bdr-1 bdr-gray">
                                        <div class="wt-icon-box-wraper center p-lr10">
                                            <div class="icon-lg m-b5">
                                                <span class="icon-cell text-black"><i class="flaticon-people"></i></span>
                                            </div>
                                            <div class="icon-content">
                                                <span class="wt-tilte text-uppercase p-b10 inline-block font-weight-600">Zabiegi na twarz</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- Block 2 -->
                            <div class="item">
                                <a data-bs-toggle="tab" href="#pricing-item2" class="tab-block">
                                    <div class="our-pricing-tab  radius-sm bdr-1 bdr-gray">
                                        <div class="wt-icon-box-wraper center  p-lr10">
                                            <div class="icon-lg m-b5">
                                                <span class="icon-cell  text-black"><i class="flaticon-eye"></i></span>
                                            </div>
                                            <div class="icon-content">
                                                <span class="wt-tilte text-uppercase p-b10 inline-block font-weight-600">Epilacja i pielęgnacja</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- Block 3 -->
                            <div class="item">
                                <a data-bs-toggle="tab" href="#pricing-item3" class="tab-block">
                                    <div class="our-pricing-tab  radius-sm bdr-1 bdr-gray">
                                        <div class="wt-icon-box-wraper center  p-lr10">
                                            <div class="icon-lg m-b5">
                                                <span class="icon-cell  text-black"><i class="flaticon-female-hairs"></i></span>
                                            </div>
                                            <div class="icon-content">
                                                <span class="wt-tilte text-uppercase p-b10 inline-block font-weight-600">Zabiegi na ciało</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>

                        <div class="tab-content m-b30">
                            <!-- Block 1 -->
                            <div id="pricing-item1" class="pricing-tab-content-block tab-pane active-arrow">
                                <div class="section-content p-t50">
                                    <!-- TABS DEFAULT NAV LEFT -->
                                    <div class="wt-tabs vertical bg-tabs">
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#pricing-tab1-1">Glow & Lift</a></li>
                                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#pricing-tab1-2">Peeling kawitacyjny</a></li>
                                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#pricing-tab1-3">SilkRoll</a></li>
                                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#pricing-tab1-5">Laminacja i lifting rzęs</a></li>
                                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#pricing-tab1-6">Architektura i laminacja brwi</a></li>
                                        </ul>
                                        <div class="tab-content p-l50">

                                            <div id="pricing-tab1-1" class="tab-pane active">
                                                <div class="pricing-tab-inner">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="wt-media">
                                                                <img src="images/our-services/large/s1.jpg" alt="Glow & Lift">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="wt-tilte">
                                                                <h3 class="font-26 font-weight-400">Glow & Lift</h3>

                                                                <p>Zabieg Glow & Lift to kompleksowa pielęgnacja twarzy, która łączy w sobie oczyszczające, regenerujące i liftingujące działanie.
                                                                </p>
                                                                <a href="nasza-oferta/glow-lift.html" class="site-button skew-icon-btn radius-sm">
                                                                    <span class="font-weight-700 inline-block text-uppercase p-lr15">Więcej o zabiegu</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="pricing-tab1-2" class="tab-pane">
                                                <div class="pricing-tab-inner">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="wt-media">
                                                                <img src="images/our-services/large/s2.jpg" alt="Peeling kawitacyjny">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="wt-tilte">
                                                                <h3 class="font-26 font-weight-400">Peeling kawitacyjny</h3>

                                                                <p>Peeling kawitacyjny to nowoczesny, bezbolesny zabieg oczyszczania skóry, który wykorzystuje działanie ultradźwięków.
                                                                </p>
                                                                <a href="nasza-oferta/peeling-kawitacyjny.html" class="site-button skew-icon-btn radius-sm">
                                                                    <span class="font-weight-700 inline-block text-uppercase p-lr15">Więcej o zabiegu</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="pricing-tab1-3" class="tab-pane">
                                                <div class="pricing-tab-inner">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="wt-media">
                                                                <img src="images/our-services/large/s3.jpg" alt="SilkRoll">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="wt-tilte">
                                                                <h3 class="font-26 font-weight-400">SilkRoll</h3>

                                                                <p>Innowacyjny, nieinwazyjny zabieg łączący mikrodrgania, kompresję i światłoterapię LED, który kompleksowo oddziałuje na kondycję skóry oraz modelowanie sylwetki.
                                                                </p>
                                                                <a href="nasza-oferta/silkroll.html" class="site-button skew-icon-btn radius-sm">
                                                                    <span class="font-weight-700 inline-block text-uppercase p-lr15">Więcej o zabiegu</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="pricing-tab1-5" class="tab-pane">
                                                <div class="pricing-tab-inner">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="wt-media">
                                                                <img src="images/our-services/large/s5.jpg" alt="Laminacja i lifting rzęs">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="wt-tilte">
                                                                <h3 class="font-26 font-weight-400">Laminacja i lifting rzęs</h3>

                                                                <p>Lifting i laminacja rzęs z koloryzacją to doskonała alternatywa dla przedłużania rzęs, przeznaczona dla osób, które pragną podkreślić naturalne piękno swoich rzęs bez ich zagęszczania.
                                                                </p>
                                                                <a href="nasza-oferta/laminacja-i-lifting-rzes.html" class="site-button skew-icon-btn radius-sm">
                                                                    <span class="font-weight-700 inline-block text-uppercase p-lr15">Więcej o zabiegu</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="pricing-tab1-6" class="tab-pane">
                                                <div class="pricing-tab-inner">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="wt-media">
                                                                <img src="images/our-services/large/s6.jpg" alt="Architektura i laminacja brwi">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="wt-tilte">
                                                                <h3 class="font-26 font-weight-400">Architektura i laminacja brwi</h3>

                                                                <p>Zadbane i odpowiednio ukształtowane brwi nadają twarzy wyrazistość i podkreślają naturalne piękno. Zabieg architektury i laminacji brwi z henną lub farbką pozwala uzyskać idealny kształt, objętość i kolor brwi, dostosowany do indywidualnych rysów twarzy.
                                                                </p>
                                                                <a href="nasza-oferta/architektura-i-laminacja-brwi.html" class="site-button skew-icon-btn radius-sm">
                                                                    <span class="font-weight-700 inline-block text-uppercase p-lr15">Więcej o zabiegu</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Block 2 -->
                            <div id="pricing-item2" class="pricing-tab-content-block tab-pane">
                                <div class="section-content p-t50">
                                    <!-- TABS DEFAULT NAV LEFT -->
                                    <div class="wt-tabs vertical bg-tabs">
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#pricing-tab2-1">Epilacja laserowa</a></li>
                                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#pricing-tab2-2">Depilacja woskiem</a></li>
                                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#pricing-tab2-4">Przedłużanie i zagęszczanie rzęs</a></li>
                                        </ul>
                                        <div class="tab-content p-l50">

                                            <div id="pricing-tab2-1" class="tab-pane active">
                                                <div class="pricing-tab-inner">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="wt-media">
                                                                <img src="images/our-services/large/s7.jpg" alt="Epilacja laserowa">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="wt-tilte">
                                                                <h3 class="font-26 font-weight-400">Epilacja laserowa</h3>

                                                                <p>Epilacja laserowa przy użyciu Trio Laser Medika to nowoczesna i niezwykle skuteczna metoda trwałego usuwania owłosienia. Dzięki zastosowaniu trzech długości fal laserowych w jednym impulsie, urządzenie precyzyjnie działa na różne głębokości skóry, eliminując zarówno powierzchowne, jak i głębiej osadzone cebulki włosów.
                                                                </p>
                                                                <a href="nasza-oferta/epilacja-laserowa.html" class="site-button skew-icon-btn radius-sm">
                                                                    <span class="font-weight-700 inline-block text-uppercase p-lr15">Więcej o zabiegu</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="pricing-tab2-2" class="tab-pane">
                                                <div class="pricing-tab-inner">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="wt-media">
                                                                <img src="images/our-services/large/s8.jpg" alt="Depilacja woskiem">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="wt-tilte">
                                                                <h3 class="font-26 font-weight-400">Depilacja woskiem</h3>

                                                                <p>Depilacja woskiem to skuteczna i szybka metoda usuwania niechcianego owłosienia, pozwalająca na długotrwały efekt gładkiej skóry.
                                                                </p>
                                                                <a href="nasza-oferta/depilacja-woskiem.html" class="site-button skew-icon-btn radius-sm">
                                                                    <span class="font-weight-700 inline-block text-uppercase p-lr15">Więcej o zabiegu</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="pricing-tab2-4" class="tab-pane">
                                                <div class="pricing-tab-inner">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="wt-media">
                                                                <img src="images/our-services/large/s10.jpg" alt="Przedłużanie i zagęszczanie rzęs">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="wt-tilte">
                                                                <h3 class="font-26 font-weight-400">Przedłużanie i zagęszczanie rzęs</h3>

                                                                <p>Przedłużanie i zagęszczanie rzęs to idealna propozycja dla kobiet, które marzą o wyrazistym spojrzeniu bez codziennego malowania.
                                                                </p>
                                                                <a href="nasza-oferta/przedluzanie-i-zageszczanie-rzes.html" class="site-button skew-icon-btn radius-sm">
                                                                    <span class="font-weight-700 inline-block text-uppercase p-lr15">Więcej o zabiegu</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Block 3 -->
                            <div id="pricing-item3" class="pricing-tab-content-block tab-pane">
                                <div class="section-content p-t50">
                                    <!-- TABS DEFAULT NAV LEFT -->
                                    <div class="wt-tabs vertical bg-tabs">
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#pricing-tab3-1">Modelowanie sylwetki 360°</a></li>
                                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#pricing-tab3-2">Dermomasaż podciśnieniowy</a></li>
                                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#pricing-tab3-3">Liposukcja ultradźwiękowa</a></li>
                                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#pricing-tab3-4">Lipolaser Duo</a></li>
                                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#pricing-tab3-5">Detox & Drenaż</a></li>
                                        </ul>
                                        <div class="tab-content p-l50">

                                            <div id="pricing-tab3-1" class="tab-pane active">
                                                <div class="pricing-tab-inner">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="wt-media">
                                                                <img src="images/our-services/large/s11.jpg" alt="Modelowanie sylwetki 360°">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="wt-tilte">
                                                                <h3 class="font-26 font-weight-400">Modelowanie sylwetki 360°</h3>

                                                                <p>Kompleksowy program wyszczuplająco-modelujący, łączący nowoczesne technologie w celu uzyskania maksymalnych efektów redukcji tkanki tłuszczowej, ujędrnienia skóry oraz poprawy konturu ciała.
                                                                </p>
                                                                <a href="nasza-oferta/modelowanie-360.html" class="site-button skew-icon-btn radius-sm">
                                                                    <span class="font-weight-700 inline-block text-uppercase p-lr15">Więcej o zabiegu</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="pricing-tab3-2" class="tab-pane">
                                                <div class="pricing-tab-inner">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="wt-media">
                                                                <img src="images/our-services/large/s12.jpg" alt="Dermomasaż podciśnieniowy">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="wt-tilte">
                                                                <h3 class="font-26 font-weight-400">Dermomasaż podciśnieniowy</h3>

                                                                <p>Nowoczesna i niezwykle skuteczna metoda walki z cellulitem, utratą jędrności oraz nagromadzoną tkanką tłuszczową.
                                                                </p>
                                                                <a href="nasza-oferta/dermomasaz.html" class="site-button skew-icon-btn radius-sm">
                                                                    <span class="font-weight-700 inline-block text-uppercase p-lr15">Więcej o zabiegu</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="pricing-tab3-3" class="tab-pane">
                                                <div class="pricing-tab-inner">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="wt-media">
                                                                <img src="images/our-services/large/s13.jpg" alt="Liposukcja ultradźwiękowa">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="wt-tilte">
                                                                <h3 class="font-26 font-weight-400">Liposukcja ultradźwiękowa</h3>

                                                                <p>Liposukcja ultradźwiękowa to nowoczesna, bezinwazyjna metoda modelowania sylwetki i redukcji tkanki tłuszczowej, wykorzystująca działanie ultradźwięków.
                                                                </p>
                                                                <a href="nasza-oferta/liposukcja-ultradzwiekowa.html" class="site-button skew-icon-btn radius-sm">
                                                                    <span class="font-weight-700 inline-block text-uppercase p-lr15">Więcej o zabiegu</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="pricing-tab3-4" class="tab-pane">
                                                <div class="pricing-tab-inner">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="wt-media">
                                                                <img src="images/our-services/large/s14.jpg" alt="Lipolaser Duo">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="wt-tilte">
                                                                <h3 class="font-26 font-weight-400">Lipolaser Duo</h3>

                                                                <p>Nowoczesna, nieinwazyjna metoda redukcji tkanki tłuszczowej, oparta na działaniu tzw. zimnego lasera.
                                                                </p>
                                                                <a href="nasza-oferta/lipolaser-duo.html" class="site-button skew-icon-btn radius-sm">
                                                                    <span class="font-weight-700 inline-block text-uppercase p-lr15">Więcej o zabiegu</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="pricing-tab3-5" class="tab-pane">
                                                <div class="pricing-tab-inner">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="wt-media">
                                                                <img src="images/our-services/large/s15.jpg" alt="Detox & Drenaż">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="wt-tilte">
                                                                <h3 class="font-26 font-weight-400">Detox & Drenaż</h3>

                                                                <p>Kompleksowy zabieg łączący kilka nowoczesnych technologii, których celem jest oczyszczenie organizmu z toksyn, pobudzenie krążenia, redukcja obrzęków oraz poprawa jędrności i elastyczności skóry.
                                                                </p>
                                                                <a href="nasza-oferta/detox-drenaz.html" class="site-button skew-icon-btn radius-sm">
                                                                    <span class="font-weight-700 inline-block text-uppercase p-lr15">Więcej o zabiegu</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <!-- PRICING SECTION END  -->


            <!-- WELCOME SECTION START -->
            <div class="section-full p-t100 p-b70 bg-bottom-center bg-full-width bg-no-repeat" style="background-image:url(images/background/bg-1.png);">
                <div class="container ">
                    <div class="section-head text-center">
                        <h2><span class="site-text-primary">Dla kogo </span> jest MAGIC SALON? </h2>
                        <div class="wt-separator-outer ">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left site-bg-primary"></span>
                                <span class="separator-right site-bg-primary"></span>
                            </div>
                        </div>

                        <p>
                            Nasze zabiegi są skierowane zarówno do kobiet, jak i mężczyzn. Dbamy o każdego Klienta z tą samą uwagą i troską. Wyglądaj dobrze, czuj się dobrze. Specjalizujemy się w zabiegach kosmetycznych wykonywanych w formie zastrzyków oraz zabiegach pielęgnacyjnych skóry o charakterze medycznym dla osób, które chcą wyglądać i czuć się jak najlepiej.
                        </p>

                    </div>
                    <div class="section-content circle-block-outer" data-bs-toggle="tab-hover">
                        <div class="row  nav nav-tab">

                            <div class="col-lg-4 col-md-12 m-b30">
                                <div class="nav-item">
                                    <a class="nav-link active wt-icon-box-wraper right p-a10 m-b20" href="#tab1" data-bs-toggle="tab">
                                        <div class="icon-md site-text-primary radius">
                                            <span class="icon-cell  site-text-primary"><img src="images/icon/candle-1.png" alt="Profesjonalizm"></span>
                                        </div>
                                        <div class="icon-content">
                                            <h4 class="wt-tilte text-uppercase">• Profesjonalizm</h4>
                                            <p>Nasz zespół tworzą wykwalifikowane kosmetolożki, linergistki i terapeuci</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="nav-item">
                                    <a class="nav-link wt-icon-box-wraper right p-a10 m-r30 m-b20" href="#tab2" data-bs-toggle="tab">
                                        <div class="icon-md site-text-primary radius">
                                            <span class="icon-cell  site-text-primary"><img src="images/icon/leaves.png" alt="Bezpieczeństwo"></span>
                                        </div>
                                        <div class="icon-content">
                                            <h4 class="wt-tilte text-uppercase">• Bezpieczeństwo</h4>
                                            <p>Pracujemy na certyfikowanym sprzęcie i sprawdzonych preparatach.</p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-12 m-b30">
                                <div class="circle-content-pic tab-content ">
                                    <div id="tab1" class="tab-pane in active">
                                        <div class="wt-box">
                                            <div class="wt-media site-text-primary m-b20 ">
                                                <img src="images/circle-block/1.jpg" class="radius-bx" alt="Dla kogo jest MAGIC SALON?">
                                            </div>
                                        </div>
                                    </div>

                                    <div id="tab2" class="tab-pane">
                                        <div class="wt-box">
                                            <div class="wt-media site-text-primary m-b20">
                                                <img src="images/circle-block/2.jpg" class="radius-bx" alt="Dla kogo jest MAGIC SALON?">
                                            </div>
                                        </div>
                                    </div>

                                    <div id="tab4" class="tab-pane">
                                        <div class="wt-box">
                                            <div class="wt-media site-text-primary m-b20">
                                                <img src="images/circle-block/4.jpg" class="radius-bx" alt="Dla kogo jest MAGIC SALON?">
                                            </div>
                                        </div>
                                    </div>

                                    <div id="tab5" class="tab-pane">
                                        <div class="wt-box">
                                            <div class="wt-media site-text-primary m-b20">
                                                <img src="images/circle-block/5.jpg" class="radius-bx" alt="Dla kogo jest MAGIC SALON?">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-4 col-md-12 m-b30">
                                <div class="nav-item">
                                    <a class="nav-link wt-icon-box-wraper left p-a10 m-b20" href="#tab4" data-bs-toggle="tab">
                                        <div class="icon-md site-text-primary radius">
                                            <span class="icon-cell  site-text-primary"><img src="images/icon/bathtub.png" alt="Indywidualne podejście"></span>
                                        </div>
                                        <div class="icon-content">
                                            <h4 class="wt-tilte text-uppercase">• Indywidualne podejście</h4>
                                            <p>Każdy zabieg poprzedzony jest konsultacją.</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="nav-item">
                                    <a class="nav-link wt-icon-box-wraper left p-a10 m-l30 m-b20" href="#tab5" data-bs-toggle="tab">
                                        <div class="icon-md site-text-primary radius">
                                            <span class="icon-cell  site-text-primary"><img src="images/icon/jacuzzi.png" alt="Nowoczesność"></span>
                                        </div>
                                        <div class="icon-content">
                                            <h4 class="wt-tilte text-uppercase">• Nowoczesność</h4>
                                            <p>Śledzimy najnowsze trendy w kosmetologii i stale rozszerzamy ofertę.</p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- WELCOME COMPANY SECTION END -->

            <!-- OUR SPECIAL OFFER SECTION start  -->
            <div class="section-full  special-offer-block2 overlay-wraper bg-repeat p-t100 p-b70" style="background-image:url(images/background/bg-6.jpg);">
                <div class="overlay-main bg-white opacity-01"></div>
                <div class="left-larg-pic">
                    <div class="wt-media">
                        <img src="images/stone_flower2.png" alt="Zarezerwuj swoją chwilę dla siebie – zasługujesz na to, co najlepsze">
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3">

                        </div>
                        <div class="col-md-9 col-sm-9 m-b30">
                            <div class="awesome-counter text-right">
                                <h3 class="font-24 text-secondry">Odwiedź nas już dziś!</h3>
                                <h2 class="font-60 font-weight-600"><span class="site-text-primary">Zarezerwuj swoją chwilę dla siebie – zasługujesz na to, co najlepsze. </span></h2>
                                <p>Zapraszamy Cię dO firmiezego salonu, gdzie możesz zadbać o siebie w atmosferze spokoju i pełnego komfortu. Nasza przestrzeń została stworzona z myślą o tym, by każdy klient poczuł się wyjątkowo od pierwszego kroku. Magiczna atmosfera, pachnące olejki, relaksacyjna muzyka i uśmiechnięty personel czekają na Ciebie.</p>
                            </div>
                            <div class="pull-right counter-small-1">
                                <ul class="list-inline">
                                    <li>
                                        <div class="wt-icon-box-wraper left p-a10 text-secondry">
                                            <span class="icon-sm">
                                                <span class="flaticon-happy"></span>
                                            </span>
                                            <div class="icon-content">
                                                <div class="font-20 font-weight-600"><span class="counter">100</span><b>+</b></div>
                                                <span class="text-uppercase">Zadowolonych klientów</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wt-icon-box-wraper left p-a10 text-secondry">
                                            <span class="icon-sm">
                                                <span class="flaticon-trophy"></span>
                                            </span>
                                            <div class="icon-content">
                                                <div class="font-20 font-weight-600"><span class="counter">100</span><b>%</b></div>
                                                <span class="text-uppercase">Naszego zaangażowania</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wt-icon-box-wraper left p-a10 text-secondry">
                                            <span class="icon-sm">
                                                <span class="flaticon-female-hairs"></span>
                                            </span>
                                            <div class="icon-content">
                                                <div class="font-20 font-weight-600"><span class="counter">100</span><b>+</b></div>
                                                <span class="text-uppercase">Wykonanych zabiegów</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- OUR SPECIAL OFFER SECTION END  -->

            <!-- GALLERY STYLE-2 -->
            <div class="section-full p-t100 p-b70 bg-white" id="content1">
                <div class="container">
                    <!-- TITLE START-->
                    <div class="section-head text-center">
                        <h2><span class="site-text-primary">Nasza</span> Galeria</h2>
                        <div class="wt-separator-outer ">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left site-bg-primary"></span>
                                <span class="separator-right site-bg-primary"></span>
                            </div>
                        </div>
                        <p>Odzyskaj młody wygląd. Wystarczy jeden krok! Twoje bezpieczeństwo i komfort są dla nas priorytetem. Każdy zabieg dostosowujemy indywidualnie, aby osiągnąć naturalny, piękny i trwały efekt.</p>
                    </div>
                    <!-- TITLE END-->

                    <div class="portfolio-wrap mfp-gallery  no-col-gap m-b30">
                        <div class="row">
                            <div class="masonry-item cat-filter-1 col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                <div class="wt-gallery-bx">
                                    <div class="wt-thum-bx wt-img-effect wt-img-overlay7">

                                        <a href="services-detail.html">
                                            <img src="images/gallery/portrait/pic5.jpg" alt="Nasza Galeria">
                                        </a>

                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <a href="services-detail.html">
                                                    <i class="fa fa-link wt-icon-box-xs"></i>
                                                </a>
                                                <a href="images/gallery/portrait/pic5.jpg" class="mfp-link">
                                                    <i class="fa fa-picture-o wt-icon-box-xs"></i>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="masonry-item cat-filter-2 col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                <div class="wt-gallery-bx">
                                    <div class="wt-thum-bx wt-img-effect wt-img-overlay7">

                                        <a href="services-detail.html">
                                            <img src="images/gallery/portrait-half/pic1.jpg" alt="Nasza Galeria">
                                        </a>

                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <a href="services-detail.html">
                                                    <i class="fa fa-link wt-icon-box-xs"></i>
                                                </a>
                                                <a href="images/gallery/portrait-half/pic1.jpg" class="mfp-link">
                                                    <i class="fa fa-picture-o wt-icon-box-xs"></i>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="masonry-item cat-filter-3 col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                <div class="wt-gallery-bx">
                                    <div class="wt-thum-bx wt-img-effect wt-img-overlay7">

                                        <a href="services-detail.html">
                                            <img src="images/gallery/portrait/pic6.jpg" alt="Nasza Galeria">
                                        </a>

                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <a href="services-detail.html">
                                                    <i class="fa fa-link wt-icon-box-xs"></i>
                                                </a>
                                                <a href="images/gallery/portrait/pic6.jpg" class="mfp-link">
                                                    <i class="fa fa-picture-o wt-icon-box-xs"></i>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="masonry-item cat-filter-4 col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                <div class="wt-gallery-bx">
                                    <div class="wt-thum-bx wt-img-effect wt-img-overlay7">

                                        <a href="services-detail.html">
                                            <img src="images/gallery/portrait-half/pic2.jpg" alt="Nasza Galeria">
                                        </a>

                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <a href="services-detail.html">
                                                    <i class="fa fa-link wt-icon-box-xs"></i>
                                                </a>
                                                <a href="images/gallery/portrait-half/pic2.jpg" class="mfp-link">
                                                    <i class="fa fa-picture-o wt-icon-box-xs"></i>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="masonry-item cat-filter-5 col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                <div class="wt-gallery-bx">
                                    <div class="wt-thum-bx wt-img-effect wt-img-overlay7">

                                        <a href="services-detail.html">
                                            <img src="images/gallery/portrait-half/pic3.jpg" alt="Nasza Galeria">
                                        </a>

                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <a href="services-detail.html">
                                                    <i class="fa fa-link wt-icon-box-xs"></i>
                                                </a>
                                                <a href="images/gallery/portrait-half/pic3.jpg" class="mfp-link">
                                                    <i class="fa fa-picture-o wt-icon-box-xs"></i>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="masonry-item cat-filter-1 col-lg-8 col-md-8 col-sm-8 col-xs-6">
                                <div class="wt-gallery-bx">
                                    <div class="wt-thum-bx wt-img-effect wt-img-overlay7">

                                        <a href="services-detail.html">
                                            <img src="images/gallery/landscape-half/pic1.jpg" alt="Nasza Galeria">
                                        </a>

                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <a href="services-detail.html">
                                                    <i class="fa fa-link wt-icon-box-xs"></i>
                                                </a>
                                                <a href="images/gallery/landscape-half/pic1.jpg" class="mfp-link">
                                                    <i class="fa fa-picture-o wt-icon-box-xs"></i>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- GALLERY STYLE-2 End -->

            <!-- OUR SPECIAL OFFER SECTION END  -->
            <div class="section-full site-bg-primary">
                <div class="container-fluid bg-top-right bg-no-repeat bg-full-height special-offer-block no-col-gap" style="background-image:url(images/special-offer.jpg);">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="section-content special-offer-outer site-bg-primary radius  p-tb60">
                                <div class="special-offer radius p-tb60">
                                    <div class="wt-left-part special-offer-in">
                                        <div class="wt-box p-r100 text-white">
                                            <h1>Skorzystaj z naszych okazyjnych zabiegów!</h1>
                                            <h2 class="text-uppercase">Nasz zespół MAGIC SALON</h2>
                                            <p>"W naszej klinice dbamy o najwyższą jakość i bezpieczeństwo wykonywanych zabiegów. Komfort i satysfakcja naszych pacjentów to dla nas absolutny priorytet."</p>
                                            <a href="oferta.html" class="site-button text-uppercase radius-sm font-weight-700 button-lg">zobacz naszą kompleksową ofertę</a>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="section-content">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- OUR SPECIAL OFFER SECTION END  -->

            <!-- Sekcja Rezerwacji Online - Booksy Embed -->
            <section class="booksy-reservation-section" id="rezerwacja">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <!-- Nagłówek sekcji -->
                            <div class="section-header text-center mb-4 mb-md-5">
                                <h2 class="section-title">Zarezerwuj Swoją Wizytę Online</h2>
                                <p class="section-subtitle">Wybierz termin i usługę w kilka sekund przez system Booksy</p>
                            </div>

                            <script>
                                // Funkcja do ukrywania loadera dla iframe Booksy
                                function hideLoader() {
                                    const loader = document.getElementById('iframeLoader');
                                    if (loader) {
                                        loader.style.display = 'none';
                                    }
                                }
                            </script>

                            <!-- Kontener Iframe -->
                            <div class="booksy-iframe-wrapper">
                                <!-- Loader Animation -->
                                <div class="iframe-loader" id="iframeLoader">
                                    <div class="spinner-border" role="status">
                                        <span class="visually-hidden">Ładowanie...</span>
                                    </div>
                                    <p class="loader-text mt-3">Ładowanie systemu rezerwacji...</p>
                                </div>

                                <!-- Responsive Iframe -->
                                <iframe
                                    id="booksyFrame"
                                    src="https://magicsalon28.booksy.com"
                                    class="booksy-iframe"
                                    title="Rezerwacja online - Magic Salon"
                                    loading="lazy"
                                    allow="geolocation; payment"
                                    referrerpolicy="no-referrer-when-downgrade"
                                    sandbox="allow-same-origin allow-scripts allow-popups allow-forms allow-top-navigation"
                                    onload="hideLoader()">
                                </iframe>
                            </div>

                            <!-- Przycisk alternatywny -->
                            <div class="text-center mt-4">
                                <a
                                    href="https://booksy.magicsalon.pl"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="btn btn-primary-magic btn-reservation-alt"
                                    aria-label="Otwórz rezerwację w nowym oknie">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-calendar-check me-2" viewBox="0 0 16 16">
                                        <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                                    </svg>
                                    Otwórz rezerwację w nowej karcie
                                </a>
                            </div>

                            <!-- Info box -->
                            <div class="reservation-info-box mt-4">
                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <div class="info-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="info-icon" viewBox="0 0 16 16">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                            </svg>
                                            <div class="info-content">
                                                <h4>Rezerwacja 24/7</h4>
                                                <p>Zarezerwuj wizytę o dowolnej porze</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="info-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="info-icon" viewBox="0 0 16 16">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                            </svg>
                                            <div class="info-content">
                                                <h4>Natychmiastowe potwierdzenie</h4>
                                                <p>Otrzymasz SMS i email z potwierdzeniem</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="info-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="info-icon" viewBox="0 0 16 16">
                                                <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z" />
                                            </svg>
                                            <div class="info-content">
                                                <h4>Bezpieczne płatności</h4>
                                                <p>Twoje dane są w pełni chronione</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <!-- CONTACT US SECTION END  -->
            <div class="section-full p-t100 p-b70">
                <div class="container equal-wraper no-col-gap m-b30">

                    <!-- TITLE START -->
                    <div class="section-head text-center">
                        <h1><span class="site-text-primary"> Kontakt z nami</span> Umów się na wizytę</h1>
                        <div class="wt-separator-outer ">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left site-bg-primary"></span>
                                <span class="separator-right site-bg-primary"></span>
                            </div>
                        </div>
                        <p>Dzięki bogatemu doświadczeniu oraz ciągłemu podnoszeniu swoich kwalifikacji, jesteśmy w stanie zapewnić Ci usługi na najwyższym poziomie. Każdy zabieg, bez względu na jego rodzaj, traktujemy indywidualnie, uwzględniając Twoje potrzeby, oczekiwania i typ skóry. Chcemy, aby każda wizyta w naszym salonie była nie tylko efektywna, ale również przyjemna i relaksująca.</p>
                    </div>
                    <!-- TITLE END -->

                    <div class="row conntact-home bg-gray m-b30">
                        <div class="col-lg-4 col-md-6 contact-home-left bg-no-repeat site-bg-primary bg-left-center" style="background-image:url(images/background/contact-map.png);">
                            <div class="section-content">
                                <div class="p-a50">

                                    <div class="wt-icon-box-wraper left p-b20 text-white">
                                        <span class="icon-lg">
                                            <span class="flaticon-placeholder"></span>
                                        </span>
                                        <div class="icon-content">
                                            <h4 class="m-b5">Adres</h4>
                                            <span class="font-12">MAGIC SALON ul. Borówkowa 13, 55-002 Dobrzykowice</span>
                                        </div>
                                    </div>

                                    <div class="wt-icon-box-wraper left p-b20 text-white">
                                        <span class="icon-lg">
                                            <span class="flaticon-envelope"></span>
                                        </span>
                                        <div class="icon-content">
                                            <h4 class="m-b5">Adres e-mail</h4>
                                            <span class="font-12">biuro@magicsalon.pl </span><br>
                                            <span class="font-12">wizyty@magicsalon.pl </span>
                                        </div>
                                    </div>

                                    <div class="wt-icon-box-wraper left p-b20 text-white">
                                        <span class="icon-lg">
                                            <span class="flaticon-smartphone"></span>
                                        </span>
                                        <div class="icon-content">
                                            <h4 class="m-b5">Numer telefonu</h4>
                                            <span class="font-12" style="color: #fff"><a href="tel:+48 883 481 581" style="color: #fff">+48 883 481 581</a></span>
                                        </div>
                                    </div>

                                    <div class="Opening-hours text-white">
                                        <h3 class="wt-title text-uppercase m-t0">Godziny otwarcia</h3>
                                        <ul class="list-unstyled">
                                            <li>Poniedziałek - Sobota <span class="pull-right">9:00 - 18:00</span></li>
                                            <li>Niedziela <span class="pull-right">Zamknięte</span></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-6">
                            <div class="section-content bg-gray">
                                <div class="contact-home-right p-a30">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2505.7127763849394!2d17.19449491252832!3d51.095308040605865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470fe7e89195dbfd%3A0xdef91235a7163465!2sMagic%20Salon%20-%20Salon%20kosmetyczny!5e0!3m2!1spl!2spl!4v1760599642418!5m2!1spl!2spl" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- CONTACT US OFFER SECTION END  -->

            <!-- LATEST BLOG SECTION START -->
            <div class="section-full latest-blog bg-gray p-t100 p-b70">
                <div class="container">
                    <!-- TITLE -->
                    <div class="section-head text-center">
                        <h2><span class="site-text-primary">Najnowsze </span> wpisy na naszym blogu</h2>
                        <div class="wt-separator-outer ">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left site-bg-primary"></span>
                                <span class="separator-right site-bg-primary"></span>
                            </div>
                        </div>
                        <p>Przejrzyj nasz blog kosmetyczny. Dobierz do siebie odpowiednie zabiegi. Pozyskuj wiedzę ekspercką z naszych wpisów. Zainspiruj się do zmian w swoim wyglądzie.</p>
                    </div>

                    <!-- TITLE -->

                    <div class="section-content ">
                        <div class="row equal-wraper">
                            <!-- COLUMNS 1 -->
                            <div class="col-lg-6 col-md-12 m-b30">

                                <div class="blog-post latest-blog-3 blog-md date-style-1 clearfix">
                                    <div class="wt-post-media wt-img-effect zoom-slow">
                                        <a href="blog/jak-nowoczesne-zabiegi-kosmetyczne-zmieniaja-nasze-podejscie-do-pielegnacji-skory.html"><img src="images/blog/blog-small/pic1.jpg" alt="Jak Nowoczesne Zabiegi Kosmetyczne Zmieniają Nasze Podejście do Pielęgnacji Skóry"></a>
                                    </div>
                                    <div class="wt-post-info">
                                        <div class="wt-post-title ">
                                            <h4 class="post-title font-weight-800"><a href="blog/jak-nowoczesne-zabiegi-kosmetyczne-zmieniaja-nasze-podejscie-do-pielegnacji-skory.html">Jak Nowoczesne Zabiegi Kosmetyczne Zmieniają Nasze Podejście do Pielęgnacji Skóry</a></h4>
                                        </div>

                                    </div>
                                </div>

                                <div class="blog-post latest-blog-3 blog-md date-style-1 clearfix">
                                    <div class="wt-post-media wt-img-effect zoom-slow">
                                        <a href="blog/jak-wybrac-idealny-zabieg-kosmetyczny-dla-siebie.html"><img src="images/blog/blog-small/pic2.jpg" alt="Jak Wybrać Idealny Zabieg Kosmetyczny dla Siebie?"></a>
                                    </div>
                                    <div class="wt-post-info">
                                        <div class="wt-post-title ">
                                            <h4 class="post-title font-weight-800"><a href="blog/jak-wybrac-idealny-zabieg-kosmetyczny-dla-siebie.html">Jak Wybrać Idealny Zabieg Kosmetyczny dla Siebie?</a></h4>
                                        </div>

                                    </div>
                                </div>

                                <div class="blog-post latest-blog-3 blog-md date-style-1 clearfix">
                                    <div class="wt-post-media wt-img-effect zoom-slow">
                                        <a href="blog/nowoczesne-zabiegi-kosmetyczne-jak-technologie-zmienia-twoje-piekno.html"><img src="images/blog/blog-small/pic3.jpg" alt="Nowoczesne Zabiegi Kosmetyczne: Jak Technologie Zmienią Twoje Piękno"></a>
                                    </div>
                                    <div class="wt-post-info">
                                        <div class="wt-post-title ">
                                            <h4 class="post-title font-weight-800"><a href="blog/nowoczesne-zabiegi-kosmetyczne-jak-technologie-zmienia-twoje-piekno.html">Nowoczesne Zabiegi Kosmetyczne: Jak Technologie Zmienią Twoje Piękno</a></h4>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="blog-post latest-blog-3 overlay-wraper post-overlay date-style-1 bg-cover bg-no-repeat bg-top-center" style="background-image:url(images/blog-big.jpg);">
                                    <div class="overlay-main opacity-08 primary-gradi"></div>
                                    <div class="wt-post-info p-a30 text-white">
                                        <div class="post-overlay-position">
                                            <div class="wt-post-title ">
                                                <h3 class="post-title"><a href="blog/odkryj-moc-nowoczesnej-pielegnacji-innowacyjne-zabiegi-na-twarz-i-cialo-w-magic-salon.html" class="text-white text-capitalize">Odkryj Moc Nowoczesnej Pielęgnacji: Innowacyjne Zabiegi na Twarz i Ciało w MAGIC SALON</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- LATEST BLOG SECTION END -->

            <!-- INSTAGRAM SECTION START -->
            <div class="section-full p-t50 p-b10 overlay-wraper site-bg-primary bg-repeat">
                <div class="container">
                    <div class="section-head text-center">
                        <h2 style="color: #fff;"><span class="site-text-primary" style="color: #fff;">Nasz </span> Instagram</h2>
                        <p style="color: #fff;">Najświeższe nowinki z naszego salonu będą dla Państwa dostepne w naszych social mediach na profilu Instagramowym. Koniecznie obserwuj nasze ruchy w social mediach.</p>
                    </div>

                    <!-- IMAGE CAROUSEL START -->
                    <div class="section-content">

                        <!-- LightWidget WIDGET -->
                        <script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="https://cdn.lightwidget.com/widgets/1b3ffdfb097a529b9970baf400113732.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>

                    </div>
                    <!-- IMAGE CAROUSEL START -->
                </div>
            </div>
            <!-- OUR INSTAGRAM SLIDER END -->

        </div>
        <!-- CONTENT END -->

        <!-- Footer -->
        <?php require_once __DIR__ . '/partials/footer.php'; ?>