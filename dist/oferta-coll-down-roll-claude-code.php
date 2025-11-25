<?php

/**
 * MAGIC SALON - Oferta: Cool Down Roll
 * Wersja: 1.0 - Premium design z zaawansowanymi animacjami i efektami
 * Innowacyjny zabieg modelujący sylwetkę łączący krioterapię z masażem rolkowym
 */

// Załaduj konfigurację
require_once __DIR__ . DIRECTORY_SEPARATOR . 'config.php';

// Konfiguracja meta tagów dla strony Cool Down Roll
$meta = [
    'title' => 'Cool Down Roll Wrocław | Modelowanie Sylwetki 120 zł | Magic Salon Dobrzykowice',
    'description' => 'Odkryj Cool Down Roll w Magic Salon Dobrzykowice (okolice Wrocławia). Innowacyjny zabieg łączący kriomassaż z masażem rolkowym. ✓ Redukcja cellulitu ✓ Modelowanie sylwetki ✓ Efekty od pierwszego zabiegu. Cena: 120 zł. Umów wizytę!',
    'keywords' => 'cool down roll, cool down roll wrocław, cool down roll cena, kriomassaż rolkowy, kriorolka zabieg, cool down roll dobrzykowice, masaż zimnem ciała, redukcja cellulitu wrocław, modelowanie sylwetki, cool down roll efekty, zabieg chłodzący na cellulit',
    'canonical' => BASE_URL . '/oferta-coll-down-roll.php',
    'robots' => 'index, follow, max-image-preview:large',
    'og' => [
        'type' => 'website',
        'title' => 'Cool Down Roll – Innowacyjne Modelowanie Sylwetki | Magic Salon',
        'description' => 'Przełomowy zabieg łączący moc zimna z masażem rolkowym. Skuteczna redukcja cellulitu, modelowanie sylwetki i drenaż limfatyczny. Zobacz efekty już po pierwszym zabiegu!',
        'url' => BASE_URL . '/oferta-coll-down-roll.php',
        'image' => BASE_URL . '/images/oferta-details/cool-down-roll-og.jpg',
    ],
    'twitter' => [
        'card' => 'summary_large_image',
        'title' => 'Cool Down Roll – Modelowanie Sylwetki | Magic Salon Wrocław',
        'description' => 'Innowacyjny zabieg kriomassażu rolkowego. Redukcja cellulitu i modelowanie sylwetki w Dobrzykowicach.',
    ],
    'schema' => [
        'enabled' => true,
        'type' => 'Service',
        'name' => 'Cool Down Roll – Kriomassaż Rolkowy',
        'description' => 'Innowacyjny zabieg łączący krioterapię miejscową z masażem rolkowym. Skuteczna redukcja cellulitu, modelowanie sylwetki, ujędrnianie skóry i drenaż limfatyczny.',
        'provider' => [
            '@type' => 'BeautySalon',
            'name' => 'MAGIC SALON',
            'address' => [
                'streetAddress' => 'ul. Borówkowa 13',
                'postalCode' => '55-002',
                'addressLocality' => 'Dobrzykowice',
                'addressCountry' => 'PL'
            ],
            'telephone' => '+48883481581',
            'priceRange' => '120 PLN'
        ],
        'areaServed' => [
            '@type' => 'City',
            'name' => 'Dobrzykowice'
        ],
        'hasOfferCatalog' => [
            '@type' => 'OfferCatalog',
            'name' => 'Cool Down Roll',
            'itemListElement' => [
                [
                    '@type' => 'Offer',
                    'itemOffered' => [
                        '@type' => 'Service',
                        'name' => 'Cool Down Roll – Pojedynczy Zabieg',
                        'description' => 'Kriomassaż rolkowy 30-60 minut',
                    ],
                    'price' => '120',
                    'priceCurrency' => 'PLN'
                ],
                [
                    '@type' => 'Offer',
                    'itemOffered' => [
                        '@type' => 'Service',
                        'name' => 'Cool Down Roll – Seria 8 Zabiegów',
                        'description' => 'Kompleksowa seria zabiegów modelujących'
                    ]
                ]
            ]
        ]
    ]
];

// Załaduj head partial
include 'partials/head.php';
?>

<!-- Custom CSS dla Cool Down Roll -->
<style>
/* === PREMIUM ANIMATIONS & EFFECTS === */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(40px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes fadeInLeft {
    from {
        opacity: 0;
        transform: translateX(-40px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes fadeInRight {
    from {
        opacity: 0;
        transform: translateX(40px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes pulse {
    0%, 100% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.05);
    }
}

@keyframes float {
    0%, 100% {
        transform: translateY(0px);
    }
    50% {
        transform: translateY(-20px);
    }
}

@keyframes shimmer {
    0% {
        background-position: -1000px 0;
    }
    100% {
        background-position: 1000px 0;
    }
}

/* === HERO SECTION === */
.cdr-hero {
    position: relative;
    min-height: 75vh;
    display: flex;
    align-items: center;
    background: linear-gradient(135deg, #6D356F 0%, #9F5BA4 50%, #6D356F 100%);
    overflow: hidden;
}

.cdr-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('images/background/bg-7.png') repeat;
    opacity: 0.1;
    animation: float 20s ease-in-out infinite;
}

.cdr-hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(45deg, rgba(109, 53, 111, 0.9) 0%, rgba(159, 91, 164, 0.7) 100%);
}

.cdr-hero-content {
    position: relative;
    z-index: 10;
    color: white;
    animation: fadeInUp 1s ease-out;
}

.cdr-hero-badge {
    display: inline-block;
    padding: 8px 20px;
    background: rgba(215, 165, 79, 0.2);
    border: 2px solid #D7A54F;
    border-radius: 50px;
    color: #D7A54F;
    font-size: 14px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-bottom: 20px;
    animation: shimmer 3s infinite linear;
    background-image: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
    background-size: 1000px 100%;
}

.cdr-hero-title {
    font-size: 3.5rem;
    font-weight: 700;
    line-height: 1.2;
    margin-bottom: 25px;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
}

.cdr-hero-title .highlight {
    color: #D7A54F;
    position: relative;
    display: inline-block;
}

.cdr-hero-subtitle {
    font-size: 1.3rem;
    margin-bottom: 30px;
    opacity: 0.95;
    line-height: 1.6;
}

.cdr-hero-features {
    display: flex;
    gap: 30px;
    flex-wrap: wrap;
    margin: 35px 0;
}

.cdr-hero-feature {
    display: flex;
    align-items: center;
    gap: 12px;
    animation: fadeInLeft 1s ease-out;
}

.cdr-hero-feature:nth-child(2) {
    animation-delay: 0.2s;
}

.cdr-hero-feature:nth-child(3) {
    animation-delay: 0.4s;
}

.cdr-hero-feature-icon {
    width: 50px;
    height: 50px;
    background: rgba(215, 165, 79, 0.2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    color: #D7A54F;
    transition: all 0.3s ease;
}

.cdr-hero-feature:hover .cdr-hero-feature-icon {
    background: #D7A54F;
    color: white;
    transform: scale(1.1) rotate(5deg);
}

.cdr-cta-group {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
    margin-top: 40px;
}

.cdr-btn-primary,
.cdr-btn-secondary {
    padding: 15px 40px;
    border-radius: 50px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
    z-index: 1;
}

.cdr-btn-primary {
    background: #D7A54F;
    color: white;
    border: 2px solid #D7A54F;
}

.cdr-btn-primary::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(120deg, transparent, rgba(255,255,255,0.3), transparent);
    transition: all 0.6s;
    z-index: -1;
}

.cdr-btn-primary:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 30px rgba(215, 165, 79, 0.4);
}

.cdr-btn-primary:hover::before {
    left: 100%;
}

.cdr-btn-secondary {
    background: transparent;
    color: white;
    border: 2px solid white;
}

.cdr-btn-secondary:hover {
    background: white;
    color: #6D356F;
    transform: translateY(-3px);
    box-shadow: 0 10px 30px rgba(255,255,255,0.3);
}

/* === TECHNOLOGY SECTION === */
.cdr-tech-section {
    padding: 100px 0;
    background: #f9f9f9;
    position: relative;
    overflow: hidden;
}

.cdr-section-title {
    font-size: 2.8rem;
    font-weight: 700;
    color: #222;
    margin-bottom: 20px;
    position: relative;
    display: inline-block;
}

.cdr-section-title::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 4px;
    background: linear-gradient(90deg, #6D356F, #D7A54F);
    border-radius: 2px;
}

.cdr-section-subtitle {
    font-size: 1.2rem;
    color: #666;
    margin-bottom: 60px;
}

.cdr-tech-card {
    background: white;
    border-radius: 20px;
    padding: 40px 30px;
    margin-bottom: 30px;
    box-shadow: 0 5px 30px rgba(0,0,0,0.08);
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
}

.cdr-tech-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 5px;
    background: linear-gradient(90deg, #6D356F, #D7A54F);
    transform: scaleX(0);
    transition: transform 0.4s ease;
}

.cdr-tech-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 50px rgba(109, 53, 111, 0.2);
}

.cdr-tech-card:hover::before {
    transform: scaleX(1);
}

.cdr-tech-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, #6D356F, #9F5BA4);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 36px;
    color: white;
    margin: 0 auto 25px;
    transition: all 0.4s ease;
}

.cdr-tech-card:hover .cdr-tech-icon {
    transform: rotateY(360deg);
    background: linear-gradient(135deg, #D7A54F, #6D356F);
}

.cdr-tech-card h3 {
    font-size: 1.6rem;
    color: #6D356F;
    margin-bottom: 15px;
    font-weight: 700;
}

.cdr-tech-card p {
    color: #666;
    line-height: 1.8;
    font-size: 1.05rem;
}

/* === BENEFITS SECTION === */
.cdr-benefits-section {
    padding: 100px 0;
    background: linear-gradient(135deg, #ffffff 0%, #f5f0f6 100%);
}

.cdr-benefit-item {
    display: flex;
    align-items: flex-start;
    gap: 25px;
    padding: 30px;
    background: white;
    border-radius: 15px;
    margin-bottom: 25px;
    box-shadow: 0 3px 20px rgba(0,0,0,0.05);
    transition: all 0.3s ease;
    border-left: 4px solid transparent;
}

.cdr-benefit-item:hover {
    border-left-color: #D7A54F;
    box-shadow: 0 8px 30px rgba(109, 53, 111, 0.15);
    transform: translateX(10px);
}

.cdr-benefit-icon {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, rgba(109, 53, 111, 0.1), rgba(215, 165, 79, 0.1));
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 28px;
    color: #6D356F;
    flex-shrink: 0;
    transition: all 0.3s ease;
}

.cdr-benefit-item:hover .cdr-benefit-icon {
    background: linear-gradient(135deg, #6D356F, #D7A54F);
    color: white;
    transform: scale(1.1);
}

.cdr-benefit-content h4 {
    font-size: 1.4rem;
    color: #6D356F;
    margin-bottom: 10px;
    font-weight: 600;
}

.cdr-benefit-content p {
    color: #666;
    line-height: 1.7;
    margin: 0;
}

/* === PROCESS SECTION === */
.cdr-process-section {
    padding: 100px 0;
    background: #ffffff;
}

.cdr-process-timeline {
    position: relative;
    padding: 40px 0;
}

.cdr-process-timeline::before {
    content: '';
    position: absolute;
    left: 50%;
    top: 0;
    bottom: 0;
    width: 3px;
    background: linear-gradient(180deg, #6D356F, #D7A54F);
    transform: translateX(-50%);
}

.cdr-process-step {
    position: relative;
    margin-bottom: 60px;
}

.cdr-process-step:nth-child(odd) .cdr-process-content {
    padding-right: 60px;
    text-align: right;
}

.cdr-process-step:nth-child(even) .cdr-process-content {
    padding-left: 60px;
    text-align: left;
}

.cdr-process-number {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #6D356F, #D7A54F);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.5rem;
    font-weight: 700;
    box-shadow: 0 5px 20px rgba(109, 53, 111, 0.3);
    z-index: 10;
    transition: all 0.3s ease;
}

.cdr-process-step:hover .cdr-process-number {
    transform: translateX(-50%) scale(1.15);
    animation: pulse 1s infinite;
}

.cdr-process-content {
    background: white;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 5px 25px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
}

.cdr-process-content:hover {
    box-shadow: 0 10px 40px rgba(109, 53, 111, 0.15);
    transform: scale(1.02);
}

.cdr-process-content h4 {
    font-size: 1.5rem;
    color: #6D356F;
    margin-bottom: 15px;
    font-weight: 600;
}

.cdr-process-content p {
    color: #666;
    line-height: 1.7;
    margin: 0;
}

/* === PRICING SECTION === */
.cdr-pricing-section {
    padding: 100px 0;
    background: linear-gradient(135deg, #6D356F 0%, #9F5BA4 100%);
    position: relative;
    overflow: hidden;
}

.cdr-pricing-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('images/background/bg-7.png') repeat;
    opacity: 0.05;
}

.cdr-pricing-section .cdr-section-title,
.cdr-pricing-section .cdr-section-subtitle {
    color: white;
}

.cdr-pricing-section .cdr-section-title::after {
    background: linear-gradient(90deg, #D7A54F, white);
}

.cdr-pricing-card {
    background: white;
    border-radius: 25px;
    padding: 50px 40px;
    position: relative;
    overflow: hidden;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    height: 100%;
}

.cdr-pricing-card::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: linear-gradient(45deg, transparent, rgba(215, 165, 79, 0.1), transparent);
    transform: rotate(45deg);
    transition: all 0.6s;
}

.cdr-pricing-card:hover {
    transform: translateY(-15px);
    box-shadow: 0 20px 60px rgba(0,0,0,0.3);
}

.cdr-pricing-card:hover::before {
    left: 100%;
}

.cdr-pricing-badge {
    position: absolute;
    top: 20px;
    right: 20px;
    background: linear-gradient(135deg, #D7A54F, #6D356F);
    color: white;
    padding: 8px 20px;
    border-radius: 50px;
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.cdr-pricing-card.featured {
    transform: scale(1.05);
    border: 3px solid #D7A54F;
}

.cdr-pricing-title {
    font-size: 1.8rem;
    color: #6D356F;
    margin-bottom: 15px;
    font-weight: 700;
}

.cdr-pricing-price {
    font-size: 3.5rem;
    color: #D7A54F;
    font-weight: 700;
    margin-bottom: 10px;
}

.cdr-pricing-price span {
    font-size: 1.2rem;
    color: #666;
}

.cdr-pricing-desc {
    color: #666;
    margin-bottom: 30px;
    font-size: 1.05rem;
}

.cdr-pricing-features {
    list-style: none;
    padding: 0;
    margin-bottom: 35px;
}

.cdr-pricing-features li {
    padding: 12px 0;
    color: #444;
    border-bottom: 1px solid #f0f0f0;
    display: flex;
    align-items: center;
    gap: 12px;
}

.cdr-pricing-features li i {
    color: #D7A54F;
    font-size: 18px;
}

/* === FAQ SECTION === */
.cdr-faq-section {
    padding: 100px 0;
    background: #f9f9f9;
}

.cdr-faq-accordion .accordion-item {
    border: none;
    margin-bottom: 15px;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 3px 15px rgba(0,0,0,0.05);
    transition: all 0.3s ease;
}

.cdr-faq-accordion .accordion-item:hover {
    box-shadow: 0 5px 25px rgba(109, 53, 111, 0.15);
}

.cdr-faq-accordion .accordion-button {
    background: white;
    color: #6D356F;
    font-weight: 600;
    font-size: 1.15rem;
    padding: 25px 30px;
    border: none;
    transition: all 0.3s ease;
}

.cdr-faq-accordion .accordion-button:not(.collapsed) {
    background: linear-gradient(135deg, #6D356F, #9F5BA4);
    color: white;
    box-shadow: none;
}

.cdr-faq-accordion .accordion-button::after {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%236D356F'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
    transition: all 0.3s ease;
}

.cdr-faq-accordion .accordion-button:not(.collapsed)::after {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='white'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
}

.cdr-faq-accordion .accordion-body {
    padding: 30px;
    color: #666;
    line-height: 1.8;
    font-size: 1.05rem;
    background: white;
}

/* === CTA SECTION === */
.cdr-cta-section {
    padding: 80px 0;
    background: linear-gradient(135deg, #D7A54F 0%, #6D356F 100%);
    position: relative;
    overflow: hidden;
}

.cdr-cta-section::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle, rgba(255,255,255,0.1) 1px, transparent 1px);
    background-size: 50px 50px;
    animation: float 30s linear infinite;
}

.cdr-cta-content {
    position: relative;
    z-index: 10;
    text-align: center;
    color: white;
}

.cdr-cta-content h2 {
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 20px;
}

.cdr-cta-content p {
    font-size: 1.2rem;
    margin-bottom: 35px;
    opacity: 0.95;
}

.cdr-cta-buttons {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap;
}

.cdr-cta-btn {
    padding: 18px 45px;
    border-radius: 50px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: all 0.3s ease;
    background: white;
    color: #6D356F;
    border: 3px solid white;
}

.cdr-cta-btn:hover {
    background: transparent;
    color: white;
    transform: scale(1.05);
}

/* === PARALLAX EFFECTS === */
.cdr-parallax {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* === SCROLL ANIMATIONS === */
.cdr-animate-on-scroll {
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
}

.cdr-animate-on-scroll.cdr-animated {
    opacity: 1;
    transform: translateY(0);
}

/* === MOBILE RESPONSIVE === */
@media (max-width: 991px) {
    .cdr-hero-title {
        font-size: 2.5rem;
    }

    .cdr-hero-subtitle {
        font-size: 1.1rem;
    }

    .cdr-hero-features {
        flex-direction: column;
        gap: 20px;
    }

    .cdr-section-title {
        font-size: 2.2rem;
    }

    .cdr-process-timeline::before {
        left: 30px;
    }

    .cdr-process-number {
        left: 30px;
    }

    .cdr-process-step:nth-child(odd) .cdr-process-content,
    .cdr-process-step:nth-child(even) .cdr-process-content {
        padding-left: 100px;
        text-align: left;
        padding-right: 20px;
    }

    .cdr-pricing-card.featured {
        transform: scale(1);
        margin-bottom: 30px;
    }
}

@media (max-width: 767px) {
    .cdr-hero {
        min-height: 60vh;
        padding: 60px 0;
    }

    .cdr-hero-title {
        font-size: 2rem;
    }

    .cdr-cta-group {
        flex-direction: column;
    }

    .cdr-btn-primary,
    .cdr-btn-secondary {
        width: 100%;
        text-align: center;
    }

    .cdr-tech-section,
    .cdr-benefits-section,
    .cdr-process-section,
    .cdr-pricing-section,
    .cdr-faq-section {
        padding: 60px 0;
    }

    .cdr-pricing-price {
        font-size: 2.5rem;
    }
}

/* === SMOOTH SCROLL === */
html {
    scroll-behavior: smooth;
}
</style>

<body id="bg">

    <div class="page-wraper">

        <!-- HEADER START -->
        <?php include 'partials/header.php'; ?>
        <!-- HEADER END -->

        <!-- CONTENT START -->
        <div class="page-content bg-white">

        <?php
            // Konfiguracja dynamicznego banera i breadcrumbs dla usługi
            $banner_img = 'images/banner/gallery-banner.jpg';
            $page_title = 'Cool Down Roll';
            $page_desc = 'Innowacyjny zabieg łączący moc zimna z precyzją masażu rolkowego. Odkryj przełomową technologię modelowania sylwetki, która gwarantuje spektakularne efekty już po pierwszym zabiegu.';
            $breadcrumbs = [
                [
                    'label' => 'Strona Główna',
                    'url' => 'index.php',
                    'icon' => 'fa fa-home'
                ],
                [
                    'label' => 'Oferta',
                    'url' => 'oferta.php',
                    'icon' => 'fa fa-list'
                ],
                [
                    'label' => 'Cool Down Roll',
                    'url' => '',
                    'icon' => ''
                ]
            ];

            // Załadowanie dedykowanego partiala
            include 'partials/breadcrumbs.php';
        ?>

        <!--====== Start Main Content ======-->

        <!-- HERO SECTION -->
        <section class="cdr-hero">
            <div class="cdr-hero-overlay"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <div class="cdr-hero-content text-center">
                            <div class="cdr-hero-badge">✨ Innowacyjna Technologia Kriomassażu</div>
                            <h1 class="cdr-hero-title">
                                <span class="highlight">Cool Down Roll</span><br>
                                Rewolucja w Modelowaniu Sylwetki
                            </h1>
                            <p class="cdr-hero-subtitle">
                                Przełomowe połączenie <strong>krioterapii miejscowej</strong> z <strong>masażem rolkowym</strong> –
                                dla perfekcyjnej sylwetki, gładkiej skóry i natychmiastowego efektu "lekkich nóg"
                            </p>

                            <div class="cdr-hero-features">
                                <div class="cdr-hero-feature">
                                    <div class="cdr-hero-feature-icon">
                                        <i class="fas fa-snowflake"></i>
                                    </div>
                                    <div>
                                        <strong>Krioterapia</strong><br>
                                        -15°C do +5°C
                                    </div>
                                </div>
                                <div class="cdr-hero-feature">
                                    <div class="cdr-hero-feature-icon">
                                        <i class="fas fa-spa"></i>
                                    </div>
                                    <div>
                                        <strong>Masaż Rolkowy</strong><br>
                                        Głębokie działanie
                                    </div>
                                </div>
                                <div class="cdr-hero-feature">
                                    <div class="cdr-hero-feature-icon">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <strong>Efekty</strong><br>
                                        Od 1. zabiegu
                                    </div>
                                </div>
                            </div>

                            <div class="cdr-cta-group">
                                <a href="https://booksy.magicsalon.pl" target="_blank" class="cdr-btn-primary">
                                    <i class="fas fa-calendar-check me-2"></i>Umów wizytę online
                                </a>
                                <a href="tel:+48883481581" class="cdr-btn-secondary">
                                    <i class="fas fa-phone me-2"></i>Zadzwoń: 883 481 581
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- TECHNOLOGY SECTION -->
        <section class="cdr-tech-section">
            <div class="container">
                <div class="text-center mb-5 cdr-animate-on-scroll">
                    <h2 class="cdr-section-title">Jak Działa Cool Down Roll?</h2>
                    <p class="cdr-section-subtitle">Synergistyczne połączenie dwóch potężnych mechanizmów</p>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-12 cdr-animate-on-scroll">
                        <div class="cdr-tech-card">
                            <div class="cdr-tech-icon">
                                <i class="fas fa-thermometer-empty"></i>
                            </div>
                            <h3>1. Krioterapia Kontaktowa</h3>
                            <p>
                                Wykorzystujemy temperatury od <strong>-15°C do +5°C</strong>, które wywołują kontrolowaną <strong>apoptozę</strong>
                                – programowaną śmierć komórek tłuszczowych. Badania kliniczne potwierdzają <strong>20-30% redukcję</strong>
                                adipocytów po serii zabiegów.
                            </p>
                            <p class="mt-3">
                                <i class="fas fa-check-circle text-success me-2"></i> Obumarłe komórki są naturalnie wydalane w ciągu 2-6 tygodni<br>
                                <i class="fas fa-check-circle text-success me-2"></i> Bezpieczne dla otaczających tkanek<br>
                                <i class="fas fa-check-circle text-success me-2"></i> Pobudza mikrokrążenie dzięki "fali Lewisa"
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 cdr-animate-on-scroll">
                        <div class="cdr-tech-card">
                            <div class="cdr-tech-icon">
                                <i class="fas fa-hands"></i>
                            </div>
                            <h3>2. Masaż Mechaniczny Rolkowy</h3>
                            <p>
                                Schłodzone rolki wykonują precyzyjny <strong>drenaż limfatyczny</strong> zgodnie z anatomicznym kierunkiem
                                przepływu limfy – od obwodu ku sercu. Rozbijamy struktury włókniste odpowiedzialne za "skórkę pomarańczową".
                            </p>
                            <p class="mt-3">
                                <i class="fas fa-check-circle text-success me-2"></i> Zwiększa przepustowość naczyń limfatycznych<br>
                                <i class="fas fa-check-circle text-success me-2"></i> Eliminuje zastoje i obrzęki<br>
                                <i class="fas fa-check-circle text-success me-2"></i> Wygładza nierówności skóry
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-12 text-center cdr-animate-on-scroll">
                        <div class="alert" style="background: linear-gradient(135deg, rgba(109,53,111,0.1), rgba(215,165,79,0.1)); border: none; padding: 30px; border-radius: 15px;">
                            <h4 style="color: #6D356F; font-weight: 700; margin-bottom: 15px;">
                                <i class="fas fa-info-circle me-2"></i>Dwufazowe Działanie na Krążenie
                            </h4>
                            <p style="color: #444; font-size: 1.05rem; margin: 0; line-height: 1.8;">
                                Podczas chłodzenia następuje <strong>wazokonstrykcja</strong> (zwężenie naczyń), która redukuje obrzęki.
                                Następnie pojawia się <strong>fala Lewisa</strong> – gwałtowne rozszerzenie naczyń powodujące intensywny
                                dopływ świeżej, natlenionej krwi. Ten kontrast działa jak pompa dla układu limfatycznego!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- BENEFITS SECTION -->
        <section class="cdr-benefits-section">
            <div class="container">
                <div class="text-center mb-5 cdr-animate-on-scroll">
                    <h2 class="cdr-section-title">Wielowymiarowe Korzyści</h2>
                    <p class="cdr-section-subtitle">Efekty widoczne już po pierwszym zabiegu, pełne rezultaty po 8-10 sesjach</p>
                </div>

                <div class="row">
                    <div class="col-lg-6 cdr-animate-on-scroll">
                        <div class="cdr-benefit-item">
                            <div class="cdr-benefit-icon">
                                <i class="fas fa-fire-alt"></i>
                            </div>
                            <div class="cdr-benefit-content">
                                <h4>Redukcja Cellulitu i Modelowanie</h4>
                                <p>
                                    Wygładzenie "skórki pomarańczowej", zmniejszenie obwodów ciała oraz widoczne wyszczuplenie ud,
                                    pośladków, brzucha i ramion. Masaż rozbija struktury włókniste, a zimno pobudza rozpad komórek tłuszczowych.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 cdr-animate-on-scroll">
                        <div class="cdr-benefit-item">
                            <div class="cdr-benefit-icon">
                                <i class="fas fa-water"></i>
                            </div>
                            <div class="cdr-benefit-content">
                                <h4>Drenaż Limfatyczny</h4>
                                <p>
                                    Natychmiastowy efekt "lekkich nóg" dzięki usunięciu zastojów limfatycznych. Eliminacja opuchlizny
                                    i uczucia ciężkości kończyn. Usprawnienie przepływu krwi i limfy w całym organizmie.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 cdr-animate-on-scroll">
                        <div class="cdr-benefit-item">
                            <div class="cdr-benefit-icon">
                                <i class="fas fa-leaf"></i>
                            </div>
                            <div class="cdr-benefit-content">
                                <h4>Ujędrnienie i Lifting</h4>
                                <p>
                                    Zimno stymuluje produkcję kolagenu i elastyny, co przekłada się na zwiększone napięcie i elastyczność skóry.
                                    Widoczny efekt liftingu na pośladkach, spłycenie rozstępów, zdrowszy koloryt.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 cdr-animate-on-scroll">
                        <div class="cdr-benefit-item">
                            <div class="cdr-benefit-icon">
                                <i class="fas fa-smile-beam"></i>
                            </div>
                            <div class="cdr-benefit-content">
                                <h4>Efekt Relaksacyjny</h4>
                                <p>
                                    Uwolnienie endorfin zapewnia silne działanie relaksacyjne i przeciwbólowe. Klienci opisują zabieg
                                    jako "przyjemną wizytę u masażysty", zgłaszając poprawę jakości snu i redukcję stresu mięśniowego.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- PROCESS TIMELINE -->
        <section class="cdr-process-section">
            <div class="container">
                <div class="text-center mb-5 cdr-animate-on-scroll">
                    <h2 class="cdr-section-title">Przebieg Zabiegu</h2>
                    <p class="cdr-section-subtitle">Co możesz oczekiwać podczas wizyty w Magic Salon</p>
                </div>

                <div class="cdr-process-timeline">
                    <div class="row cdr-process-step cdr-animate-on-scroll">
                        <div class="col-md-6">
                            <div class="cdr-process-content">
                                <h4>Konsultacja i Test Wrażliwości</h4>
                                <p>
                                    Przeprowadzamy szczegółową konsultację oraz test wrażliwości na zimno (przyłożenie kostki lodu
                                    do przedramienia na 3 minuty). Omówimy Twoje cele i dobierzemy optymalną strategię zabiegową.
                                </p>
                            </div>
                        </div>
                        <div class="cdr-process-number">1</div>
                    </div>

                    <div class="row cdr-process-step cdr-animate-on-scroll">
                        <div class="col-md-6 offset-md-6">
                            <div class="cdr-process-content">
                                <h4>Przygotowanie Skóry</h4>
                                <p>
                                    Skóra musi być czysta, sucha i pozbawiona kosmetyków olejowych. Opcjonalnie wykonujemy fazę
                                    rozgrzewającą – podgrzewamy skórę do 40-45°C przez 2-3 minuty dla lepszych efektów.
                                </p>
                            </div>
                        </div>
                        <div class="cdr-process-number">2</div>
                    </div>

                    <div class="row cdr-process-step cdr-animate-on-scroll">
                        <div class="col-md-6">
                            <div class="cdr-process-content">
                                <h4>Aplikacja Kriomassażu</h4>
                                <p>
                                    Aplikujemy schłodzoną głowicę wykonując ruchy masażowe: <strong>okrężne</strong> na brzuchu i pośladkach,
                                    <strong>liniowe</strong> na nogach i ramionach, <strong>drenaż limfatyczny</strong> – wszystkie zgodnie
                                    z kierunkiem przepływu limfy.
                                </p>
                            </div>
                        </div>
                        <div class="cdr-process-number">3</div>
                    </div>

                    <div class="row cdr-process-step cdr-animate-on-scroll">
                        <div class="col-md-6 offset-md-6">
                            <div class="cdr-process-content">
                                <h4>Zakończenie i Rekomendacje</h4>
                                <p>
                                    Po zabiegu może wystąpić przejściowe zaczerwienienie ustępujące w ciągu 1-2 godzin.
                                    Omówimy dalszy plan zabiegowy i udzielimy wskazówek dotyczących domowej pielęgnacji.
                                </p>
                            </div>
                        </div>
                        <div class="cdr-process-number">4</div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-8 mx-auto text-center cdr-animate-on-scroll">
                        <div style="background: #f9f9f9; padding: 30px; border-radius: 15px; border-left: 5px solid #D7A54F;">
                            <h5 style="color: #6D356F; font-weight: 700; margin-bottom: 15px;">
                                <i class="fas fa-clock me-2"></i>Czas Trwania
                            </h5>
                            <p style="color: #666; font-size: 1.1rem; margin: 0;">
                                Pojedynczy zabieg trwa <strong>30-60 minut</strong> w zależności od wielkości obszaru.
                                Rekomendowana seria to <strong>8-12 zabiegów</strong> wykonywanych 2-3 razy w tygodniu.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- PRICING SECTION -->
        <section class="cdr-pricing-section">
            <div class="container">
                <div class="text-center mb-5 cdr-animate-on-scroll">
                    <h2 class="cdr-section-title">Cennik Cool Down Roll</h2>
                    <p class="cdr-section-subtitle">Przystępne ceny, profesjonalna jakość, spektakularne efekty</p>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 mb-4 cdr-animate-on-scroll">
                        <div class="cdr-pricing-card">
                            <h3 class="cdr-pricing-title">Pojedynczy Zabieg</h3>
                            <div class="cdr-pricing-price">120 <span>zł</span></div>
                            <p class="cdr-pricing-desc">Idealny na start lub zabieg podtrzymujący</p>
                            <ul class="cdr-pricing-features">
                                <li><i class="fas fa-check-circle"></i> Konsultacja kosmetologa</li>
                                <li><i class="fas fa-check-circle"></i> Test wrażliwości na zimno</li>
                                <li><i class="fas fa-check-circle"></i> Zabieg 30-60 minut</li>
                                <li><i class="fas fa-check-circle"></i> Rekomendacje pielęgnacyjne</li>
                            </ul>
                            <a href="https://booksy.magicsalon.pl" target="_blank" class="cdr-btn-primary w-100" style="display: inline-block; text-align: center;">
                                Umów się teraz
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4 cdr-animate-on-scroll">
                        <div class="cdr-pricing-card featured">
                            <div class="cdr-pricing-badge">🔥 Najczęściej wybierana</div>
                            <h3 class="cdr-pricing-title">Seria 8 Zabiegów</h3>
                            <div class="cdr-pricing-price">960 <span>zł</span></div>
                            <p class="cdr-pricing-desc"><strong>Oszczędzasz 20%</strong> – Pełen cykl intensywny</p>
                            <ul class="cdr-pricing-features">
                                <li><i class="fas fa-check-circle"></i> 8 pełnych zabiegów</li>
                                <li><i class="fas fa-check-circle"></i> Szczegółowa konsultacja wstępna</li>
                                <li><i class="fas fa-check-circle"></i> Monitoring postępów</li>
                                <li><i class="fas fa-check-circle"></i> Plan pielęgnacji domowej</li>
                                <li><i class="fas fa-check-circle"></i> Widoczne efekty już po 4 tygodniach</li>
                            </ul>
                            <a href="tel:+48883481581" class="cdr-btn-primary w-100" style="display: inline-block; text-align: center;">
                                Zapytaj o pakiet
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4 cdr-animate-on-scroll">
                        <div class="cdr-pricing-card">
                            <h3 class="cdr-pricing-title">Seria 12 Zabiegów</h3>
                            <div class="cdr-pricing-price">1320 <span>zł</span></div>
                            <p class="cdr-pricing-desc"><strong>Oszczędzasz 30%</strong> – Pełna transformacja</p>
                            <ul class="cdr-pricing-features">
                                <li><i class="fas fa-check-circle"></i> 12 pełnych zabiegów</li>
                                <li><i class="fas fa-check-circle"></i> Maksymalne efekty redukcji</li>
                                <li><i class="fas fa-check-circle"></i> Indywidualny plan zabiegowy</li>
                                <li><i class="fas fa-check-circle"></i> Konsultacja dietetyczna</li>
                                <li><i class="fas fa-check-circle"></i> Pomiary "przed i po"</li>
                                <li><i class="fas fa-check-circle"></i> Gwarancja satysfakcji</li>
                            </ul>
                            <a href="https://booksy.magicsalon.pl" target="_blank" class="cdr-btn-primary w-100" style="display: inline-block; text-align: center;">
                                Rezerwuj pakiet
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-lg-10 mx-auto text-center cdr-animate-on-scroll">
                        <div class="alert" style="background: rgba(255,255,255,0.95); border: none; padding: 25px; border-radius: 15px;">
                            <p style="color: #444; font-size: 1.05rem; margin: 0;">
                                <i class="fas fa-gift me-2" style="color: #D7A54F;"></i>
                                <strong>Promocja sezonowa:</strong> Przy zakupie serii 8+ zabiegów otrzymasz <strong>GRATIS</strong>
                                konsultację dietetyczną oraz przewodnik "Dieta Anti-Cellulit" (wartość 150 zł)
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ SECTION -->
        <section class="cdr-faq-section">
            <div class="container">
                <div class="text-center mb-5 cdr-animate-on-scroll">
                    <h2 class="cdr-section-title">Najczęściej Zadawane Pytania</h2>
                    <p class="cdr-section-subtitle">Wszystko, co musisz wiedzieć o Cool Down Roll</p>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="accordion cdr-faq-accordion cdr-animate-on-scroll" id="faqAccordion">

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                        Czy Cool Down Roll jest skuteczny?
                                    </button>
                                </h3>
                                <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Tak! Badania kliniczne wykazują <strong>20-30% redukcję komórek tłuszczowych</strong> po serii zabiegów.
                                        Efekty są widoczne już po pierwszym zabiegu (lekkość, napięcie skóry), a pełne rezultaty po około
                                        4-6 tygodniach. Skuteczność zabiegu została potwierdzona badaniami japońskiego naukowca Toshiro Yamauchi
                                        oraz dr Dietera Mansteina ze szpitala w Massachusetts.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                        Ile zabiegów Cool Down Roll potrzeba?
                                    </button>
                                </h3>
                                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Rekomendujemy <strong>serię 8-12 zabiegów</strong> dla optymalnych rezultatów. W fazie intensywnej
                                        (pierwszy miesiąc) zabiegi wykonujemy 2-3 razy w tygodniu. Po zakończeniu serii zalecamy zabiegi
                                        podtrzymujące 1-2 razy w miesiącu, aby utrzymać efekty długoterminowo. Pierwsze efekty odczuwalne
                                        są już po pierwszej sesji!
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                        Dla kogo jest Cool Down Roll?
                                    </button>
                                </h3>
                                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Zabieg przeznaczony jest dla <strong>kobiet w wieku 25-55 lat</strong> borykających się z cellulitem,
                                        wiotkością skóry lub obrzękami. Sprawdza się u osób szczupłych (cellulit występuje niezależnie od masy ciała)
                                        jak i osób z nadwagą jako wspomaganie procesu odchudzania. Szczególnie polecany dla osób prowadzących
                                        siedzący tryb życia, sportowców szukających regeneracji oraz osób z zastojami limfatycznymi.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                        Czy zabieg jest bezpieczny?
                                    </button>
                                </h3>
                                <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Cool Down Roll jest <strong>bezpiecznym, nieinwazyjnym zabiegiem</strong> bez rekonwalescencji.
                                        Przed zabiegiem przeprowadzamy test wrażliwości na zimno. Istnieją jednak przeciwwskazania bezwzględne:
                                        ciąża i karmienie piersią, choroby nowotworowe, poważne choroby serca, zakrzepowe zapalenie żył,
                                        nadwrażliwość na zimno (krioglobulinemia, choroba Raynauda). Po zabiegu może wystąpić przejściowe
                                        zaczerwienienie ustępujące w ciągu 1-2 godzin.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                        Czy zabieg boli?
                                    </button>
                                </h3>
                                <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Nie! Zabieg jest <strong>bezbolesny i relaksacyjny</strong>. Podczas krioterapii organizm uwalnia endorfiny,
                                        zapewniając silne działanie relaksacyjne i przeciwbólowe. Klienci opisują zabieg jako "przyjemną wizytę
                                        u masażysty". Możesz odczuć przyjemne chłodzenie i delikatny ucisk podczas masażu rolkowego. Po zabiegu
                                        zgłaszają poprawę jakości snu i redukcję stresu mięśniowego.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                                        Jak długo utrzymują się efekty?
                                    </button>
                                </h3>
                                <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Trwałość efektów zależy od stylu życia, diety i aktywności fizycznej. Bez zabiegów podtrzymujących
                                        efekty mogą stopniowo zanikać w ciągu <strong>2-3 miesięcy</strong>. Dlatego zalecamy <strong>zabiegi
                                        podtrzymujące 1-2 razy w miesiącu</strong> po zakończeniu serii intensywnej. Połączenie Cool Down Roll
                                        ze zdrową dietą i regularną aktywnością fizyczną znacząco przedłuża trwałość rezultatów.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq7">
                                        Jaka jest różnica między Cool Down Roll a zwykłym rollmasażem?
                                    </button>
                                </h3>
                                <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Cool Down Roll to <strong>synergistyczne połączenie</strong> dwóch technologii: krioterapii miejscowej
                                        (-15°C do +5°C) oraz masażu rolkowego. Zwykły rollmasaż działa tylko mechanicznie na poziomie tkanki
                                        podskórnej. Cool Down Roll dodatkowo: wywołuje apoptozę komórek tłuszczowych (20-30% redukcja),
                                        pobudza mikrokrążenie przez "falę Lewisa", stymuluje produkcję kolagenu i elastyny, zapewnia silniejszy
                                        drenaż limfatyczny. To sprawia, że efekty są <strong>znacznie bardziej spektakularne</strong> niż przy
                                        samym masażu.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq8">
                                        Gdzie znajduje się Magic Salon?
                                    </button>
                                </h3>
                                <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Nasz salon znajduje się w <strong>Dobrzykowicach, ul. Borówkowa 13</strong> (gmina Czernica),
                                        około 14-15 km od centrum Wrocławia. Łatwy dojazd z wschodnich dzielnic Wrocławia (Psie Pole, Wojnów,
                                        Strachocin, Biskupin) oraz gmin podmiejskich: Długołęka, Święta Katarzyna, Siechnice. Oferujemy wygodny
                                        <strong>parking dla klientów</strong>. Zapraszamy Pn-Pt 09:00-20:00, Sob 09:00-18:00.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA SECTION -->
        <section class="cdr-cta-section">
            <div class="container">
                <div class="cdr-cta-content cdr-animate-on-scroll">
                    <h2>Gotowa Na Transformację?</h2>
                    <p>
                        Dołącz do grona zadowolonych klientek Magic Salon i odkryj moc Cool Down Roll.
                        Umów się na <strong>bezpłatną konsultację</strong> już dziś!
                    </p>
                    <div class="cdr-cta-buttons">
                        <a href="https://booksy.magicsalon.pl" target="_blank" class="cdr-cta-btn">
                            <i class="fas fa-calendar-check me-2"></i>Rezerwuj online przez Booksy
                        </a>
                        <a href="tel:+48883481581" class="cdr-cta-btn">
                            <i class="fas fa-phone-alt me-2"></i>Zadzwoń: +48 883 481 581
                        </a>
                    </div>
                    <p class="mt-4" style="font-size: 0.95rem; opacity: 0.9;">
                        <i class="fas fa-map-marker-alt me-2"></i>
                        ul. Borówkowa 13, 55-002 Dobrzykowice (k. Wrocławia) | Parking dla klientów
                    </p>
                </div>
            </div>
        </section>

        <!--====== End Main Content ======-->

        <!-- INSTAGRAM SECTION START -->
        <div class="section-full p-t50 p-b10 overlay-wraper site-bg-primary bg-repeat" style="background-image:url(images/background/bg-7.png);">
            <div class="container">
                <div class="section-head text-center">
                    <h2 style="color: #fff;"><span class="site-text-primary" style="color: #fff;">Nasz </span> Instagram</h2>
                    <p style="color: #fff;">Najświeższe nowinki z naszego salonu będą dla Państwa dostępne w naszych social mediach na profilu Instagramowym. Koniecznie obserwuj nasze ruchy w social mediach.</p>
                </div>

                <!-- IMAGE CAROUSEL START -->
                <div class="section-content">
                    <!-- LightWidget WIDGET -->
                    <script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script>
                    <iframe src="https://cdn.lightwidget.com/widgets/1b3ffdfb097a529b9970baf400113732.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>
                </div>
                <!-- IMAGE CAROUSEL END -->
            </div>
        </div>
        <!-- OUR INSTAGRAM SLIDER END -->

        <!-- CONTENT END -->
        </div>
        <!-- CONTENT END -->

        <!-- Footer -->
        <?php include 'partials/footer.php'; ?>

    </div>
    <!-- page-wraper END -->

<!-- SCROLL TO TOP -->
<button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>

<!-- Scroll Animations Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Intersection Observer for scroll animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('cdr-animated');
            }
        });
    }, observerOptions);

    // Observe all elements with animation class
    document.querySelectorAll('.cdr-animate-on-scroll').forEach(element => {
        observer.observe(element);
    });

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Add parallax effect to hero
    window.addEventListener('scroll', function() {
        const scrolled = window.pageYOffset;
        const heroOverlay = document.querySelector('.cdr-hero-overlay');
        if (heroOverlay) {
            heroOverlay.style.transform = 'translateY(' + (scrolled * 0.5) + 'px)';
        }
    });
});
</script>

</body>
</html>