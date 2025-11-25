<?php

/**
 * partials/footer.php
 * Dynamiczny footer z widget'ami, social media i skryptami
 * MAGIC SALON - Wersja 2.2 - Poprawiono błędy wyświetlania
 * @author piotroq
 * @date 2025-10-20
 */

// Dane kontaktowe - bez zmian
$footer_contact = [
    'company_name' => 'MAGIC SALON',
    'tagline' => 'Salon kosmetyczny | Beauty & Spa',
    'email' => 'biuro@magicsalon.pl',
    'phone' => '+48883481581',
    'phone_display' => '+48 883 481 581',
    'whatsapp' => '48883481581',
    'address' => [
        'street' => 'ul. Borówkowa 13',
        'postal' => '55-002',
        'city' => 'Dobrzykowice'
    ],
    'booksy_url' => 'https://booksy.magicsalon.pl',
    'google_maps' => 'https://share.google/mmjMbJdmtpYNbyPYh'
];

// Social Media Links - bez zmian
$footer_social = [
    'facebook' => [
        'url' => 'https://www.facebook.com/magicsalonpl',
        'icon' => 'fa-brands fa-facebook',
        'name' => 'Facebook',
        'page_id' => 'magicsalonpl'
    ],
    'instagram' => [
        'url' => 'https://www.instagram.com/magicsalonpl',
        'icon' => 'fa-brands fa-instagram',
        'name' => 'Instagram'
    ],
    'tiktok' => [
        'url' => 'https://www.tiktok.com/@magicsalonpl',
        'icon' => 'fa-brands fa-tiktok',
        'name' => 'TikTok'
    ],
    'whatsapp' => [
        'url' => 'https://wa.me/' . $footer_contact['whatsapp'],
        'icon' => 'fa-brands fa-whatsapp',
        'name' => 'WhatsApp'
    ]
];

// Blog Posts - bez zmian
$footer_blog_posts = [
    [
        'title' => 'Odkryj Moc Twój Piękno: Najnowsze Trendy i Innowacje w Pielęgnacji Skóry w MAGIC SALON',
        'url' => 'blog/odkryj-moc-twoj-piekno-najnowsze-trendy-i-innowacje-w-pielegnacji-skory-w-magic-salon.php',
        'date' => '20',
        'month' => 'Mar',
        'author' => 'MAGIC SALON'
    ],
    [
        'title' => 'Przedłużanie Rzęs i Laminacja – Twoje Piękno w Nowym Wydaniu!',
        'url' => 'blog/przedluzanie-rzes-i-laminacja-twoje-piekno-w-nowym-wydaniu.php',
        'date' => '30',
        'month' => 'Mar',
        'author' => 'MAGIC SALON'
    ]
];

// Footer Menu - bez zmian
$footer_menu = [
    ['title' => 'O firmie', 'url' => 'o-firmie.php'],
    ['title' => 'Opinie klientów', 'url' => 'opinie-klientow.php'],
    ['title' => 'Oferta', 'url' => 'oferta.php'],
    ['title' => 'FAQ & Pytania', 'url' => 'faq-pytania.php'],
    ['title' => 'Galeria', 'url' => 'galeria.php'],
    ['title' => 'Zarezerwuj wizytę', 'url' => 'zarezerwuj-wizyte.php']
];

// Rok bieżący dla copyright - bez zmian
$current_year = date('Y');

// Helper function dla URL
if (!function_exists('footer_url')) {
    function footer_url($path)
    {
        // Usuwamy .php z adresów URL jeśli jest włączona opcja pretty URLs
        $path = ltrim($path, '/');
        $url = BASE_URL . '/' . $path;
        return $url;
    }
}
?>

<!-- FOOTER START -->
<footer class="site-footer footer-dark" role="contentinfo">
    <!-- CALL-TO-ACTION START -->
    <div class="section-full overlay-wraper site-bg-primary">
        <div class="section-content">
            <!-- CALL-TO ACTION START -->
            <div class="wt-subscribe-box">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-8">
                            <div class="call-to-action-left p-tb20 p-r50">
                                <h4 class="text-uppercase m-b10">Jesteśmy gotowi zbudować Twoje marzenie. Opowiedz nam więcej o swoim planowanym zabiegu.</h4>
                                <p>Skorzystaj z wiedzy specjalistów MAGIC SALON i przejdź do kontaktu.</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="call-to-action-right p-tb30">
                                <a href="<?php echo footer_url('kontakt.php'); ?>" class="site-button-secondry text-uppercase radius-sm font-weight-600">Kontakt</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER WIDGETS START -->
    <div class="footer-top overlay-wraper">
        <div class="overlay-main"></div>
        <div class="container">
            <div class="row">
                <!-- ABOUT COMPANY -->
                <div class="col-lg-3 col-md-6">
                    <div class="widget widget_about">
                        <h4 class="widget-title">O Magic Salon</h4>
                        <div class="logo-footer clearfix p-b15">
                            <a href="<?php echo footer_url('index.php'); ?>"><img src="<?php echo asset('../images/logo-7.png'); ?>" width="230" height="67" alt="Logo Magic Salon"></a>
                        </div>
                        <p>MAGIC SALON to nowoczesny salon kosmetyczny i beauty spa. Zabiegi na twarz i ciało, lasery medyczne, manicure, lifting rzęs i więcej – poczuj magię pielęgnacji!</p>
                    </div>
                </div>

                <!-- RECENT POSTS -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget recent-posts-entry-date">
                        <h4 class="widget-title">Na naszym blogu</h4>
                        <div class="widget-post-bx">
                            <?php foreach ($footer_blog_posts as $post): ?>
                                <div class="bdr-light-blue widget-post clearfix bdr-b-1 m-b10 p-b10">
                                    <div class="wt-post-date text-center text-uppercase text-white">
                                        <strong><?php echo e($post['date']); ?></strong>
                                        <span><?php echo e($post['month']); ?></span>
                                    </div>
                                    <div class="wt-post-info">
                                        <div class="wt-post-header">
                                            <h6 class="post-title">
                                                <a href="<?php echo footer_url($post['url']); ?>"><?php echo e($post['title']); ?></a>
                                            </h6>
                                        </div>
                                        <div class="wt-post-meta">
                                            <ul>
                                                <li class="post-author"><i class="fa fa-user"></i>Przez <?php echo e($post['author']); ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <!-- USEFUL LINKS -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget widget_services">
                        <h4 class="widget-title">Nawigacja strony</h4>
                        <ul>
                            <?php foreach ($footer_menu as $menu_item): ?>
                                <li><a href="<?php echo footer_url($menu_item['url']); ?>"><?php echo e($menu_item['title']); ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

                <!-- SOCIAL MEDIA -->
                <div class="col-lg-3 col-md-6">
                    <div class="widget widget_social_inks">
                        <h4 class="widget-title">Social media</h4>
                        <ul class="social-icons social-square social-darkest">
                            <?php foreach ($footer_social as $social): ?>
                                <li>
                                    <a href="<?php echo e($social['url']); ?>"
                                        class="<?php echo e($social['icon']); ?> ikonascale"
                                        target="_blank"
                                        rel="noopener"
                                        aria-label="<?php echo e($social['name']); ?>"></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="fb-page"
                        data-href="<?php echo e($footer_social['facebook']['url']); ?>"
                        data-tabs=""
                        data-width=""
                        data-height=""
                        data-small-header="false"
                        data-adapt-container-width="true"
                        data-hide-cover="false"
                        data-show-facepile="true">
                        <blockquote cite="<?php echo e($footer_social['facebook']['url']); ?>" class="fb-xfbml-parse-ignore">
                            <a href="<?php echo e($footer_social['facebook']['url']); ?>">
                                MAGICSALON.pl - salon kosmetyczny / salon beauty / spa / salon piękności
                            </a>
                        </blockquote>
                    </div>
                </div>
            </div>

            <!-- DANE KONTAKTOWE STOPKA -->
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 p-tb20">
                    <div class="wt-icon-box-wraper left bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix">
                        <div class="icon-md site-text-primary">
                            <span class="iconmoon-travel"></span>
                        </div>
                        <div class="icon-content">
                            <h5 class="wt-tilte text-uppercase m-b0">Adres salonu:</h5>
                            <p><?php echo e($footer_contact['address']['street']); ?>, <?php echo e($footer_contact['address']['postal']); ?> <?php echo e($footer_contact['address']['city']); ?></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 p-tb20">
                    <div class="wt-icon-box-wraper left bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix">
                        <div class="icon-md site-text-primary">
                            <span class="iconmoon-smartphone-1"></span>
                        </div>
                        <div class="icon-content">
                            <h5 class="wt-tilte text-uppercase m-b0">Numer telefonu:</h5>
                            <p class="m-b0"><a href="tel:<?php echo e($footer_contact['phone']); ?>"><?php echo e($footer_contact['phone_display']); ?></a></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 p-tb20">
                    <div class="wt-icon-box-wraper left bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix">
                        <div class="icon-md site-text-primary">
                            <span class="iconmoon-email"></span>
                        </div>
                        <div class="icon-content">
                            <h5 class="wt-tilte text-uppercase m-b0">Adres e-mail:</h5>
                            <p class="m-b0"><a href="mailto:<?php echo e($footer_contact['email']); ?>"><?php echo e($footer_contact['email']); ?></a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- DANE KONTAKTOWE STOPKA END -->
        </div>
    </div>

    <!-- FOOTER COPYRIGHT -->
    <div class="footer-bottom overlay-wraper">
        <div class="overlay-main"></div>
        <div class="constrot-strip"></div>
        <div class="container p-t30">
            <div class="row ftr-btm">
                <div class="wt-footer-bot-left">
                    <span class="copyrights-text">
                        © <?php echo $current_year; ?> All Rights Reserved. MAGICSALON.pl - salon kosmetyczny / salon beauty / salon piękności.
                        <a class="colorsecondary" target="_blank" rel="dofollow" href="https://pbmediaonline.pl">PB MEDIA Studio Strony &amp; Sklepy Internetowe</a>
                    </span>
                </div>
                <div class="wt-footer-bot-right">
                    <ul class="copyrights-nav pull-right">
                        <li><a href="<?php echo footer_url('polityka-prywatnosci-rodo.php'); ?>">Polityka Prywatności & RODO</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- FOOTER END -->

<!-- EXTERNAL WIDGETS -->
<!-- WhatsApp Click-to-Chat Button -->
<div class="custom-ctc-button" onclick="toggleCtcChatbox()" role="button" tabindex="0" aria-label="Otwórz czat WhatsApp">
    <div class="custom-ctc-icon">
        <img src="<?php echo asset('../images/svg/WhatsApp.svg'); ?>" alt="WhatsApp" width="32" height="32">
    </div>
</div>

<!-- WhatsApp Chatbox -->
<div class="custom-ctc-chatbox" id="customCtcChatbox" role="dialog" aria-labelledby="whatsappChatTitle" aria-hidden="true">
    <div class="ctc_g_heading">
        <div class="ctc_g_header_content">
            <p><span style="font-size: 17px; font-weight: 500;"><?php echo e($footer_contact['company_name']); ?> - odkryj magię profesjonalnej pielęgnacji!</span></p>
            <p><span style="font-size: 12px;">Zwykle odpowiadamy w ciągu kilku minut</span></p>
        </div>
    </div>

    <div class="ctc_g_content">
        <div class="ctc_g_content_for_bg_image">
            <div class="ctc_g_message_box">
                <p>Masz pytania dotyczące naszych usług? Nie czekaj, napisz!</p>
            </div>
        </div>
    </div>

    <div class="ctc_g_sentbutton">
        <div class="g_ctc_s_7_1" onclick="window.open('https://wa.me/<?php echo e($footer_contact['whatsapp']); ?>', '_blank')">
            <p class="g_ctc_s_7_1_cta">Napisz do nas na WhatsApp</p>
            <div class="g_ctc_s_7_icon_padding">
                <svg height="20px" viewBox="0 0 509 512" width="20px" xmlns="http://www.w3.org/2000/svg">
                    <g fill="none" fill-rule="evenodd" stroke="none" stroke-width="1">
                        <path fill="#ffffff" d="M259.25 0C121.5 0 9.84 111.66 9.84 249.41c0 47.12 13.08 91.18 35.79 128.78L0.61 512l138.09-44.21c35.73 19.76 76.82 30.99 120.55 30.99 137.74 0 249.41-111.66 249.41-249.38C508.66 111.66 396.99 0 259.25 0z" />
                    </g>
                </svg>
            </div>
        </div>
    </div>

    <div class="ctc_g_bottom">
        <p><img draggable="false" role="img" class="emoji" alt="🟢" src="<?php echo asset('../images/svg/1f7e2.svg'); ?>" width="10px" height="10px"> Online | <a href="<?php echo footer_url('polityka-prywatnosci-rodo.php'); ?>" target="_blank">Polityka prywatności & RODO</a></p>
    </div>
</div>

<!-- Booksy Click to Chat -->
<div class="booksy-ctc-button" onclick="toggleBooksyChatbox()" role="button" tabindex="0" aria-label="Otwórz czat Booksy">
    <div class="booksy-ctc-icon">
        <img src="<?php echo asset('../images/svg/booksyonlyicon.svg'); ?>" alt="Booksy" width="32" height="32" loading="lazy">
    </div>
</div>

<div class="booksy-ctc-chatbox" id="booksyChatboxWidget" role="dialog" aria-labelledby="booksyChatTitle" aria-hidden="true">
    <div class="booksy-heading">
        <div class="booksy-header-content">
            <p id="booksyChatTitle"><span style="font-size: 1.0625rem; font-weight: 600;">MAGIC SALON</span></p>
            <p><span style="font-size: 0.8125rem; opacity: 0.95;">📅 Zarezerwuj wizytę online</span></p>
        </div>
    </div>

    <div class="booksy-content">
        <div class="booksy-content-wrapper">
            <div class="booksy-message-box">
                <p style="margin: 0; padding-top: 16px;">Umów się szybko i wygodnie przez Booksy! Dostępne terminy na wszystkie nasze zabiegi kosmetyczne.</p>
            </div>
        </div>
    </div>

    <div class="booksy-sentbutton">
        <a href="<?php echo e($footer_contact['booksy_url']); ?>" target="_blank" rel="noopener noreferrer" class="booksy-cta-btn" onclick="trackBooksyClick(event)">
            <p class="booksy-cta-text">Zarezerwuj wizytę teraz</p>
            <div class="booksy-icon-wrapper">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.5 4.5L21 12M21 12L13.5 19.5M21 12H3" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
        </a>
    </div>

    <div class="booksy-bottom">
        <p>
            <span class="booksy-status-indicator"></span>
            Online 24/7 |
            <a href="<?php echo footer_url('polityka-prywatnosci-rodo.php'); ?>" target="_blank" rel="noopener">Polityka prywatności</a>
        </p>
    </div>
</div>

<!-- Slideout widgets -->
<div class="slideout-widget widget-facebook">
    <div class="slideout-widget-handler">
        <i class="fa-brands fa-facebook"></i>
    </div>
    <div class="slideout-widget-content">
        <a href="<?php echo e($footer_social['facebook']['url']); ?>" target="_blank">Facebook</a>
    </div>
</div>

<div class="slideout-widget widget-twitter">
    <div class="slideout-widget-handler">
        <i class="fa-brands fa-instagram"></i>
    </div>
    <div class="slideout-widget-content">
        <a href="<?php echo e($footer_social['instagram']['url']); ?>" target="_blank">Instagram</a>
    </div>
</div>

<div class="slideout-widget widget-telefon">
    <div class="slideout-widget-handler">
        <i class="fa-brands fa-tiktok"></i>
    </div>
    <div class="slideout-widget-content">
        <a href="<?php echo e($footer_social['tiktok']['url']); ?>" target="_blank">TikTok</a>
    </div>
</div>

<div class="slideout-widget slideout-big widget-gplus-2">
    <div class="slideout-widget-handler">
        <i class="fa-solid fa-location-dot"></i>
    </div>
    <div class="slideout-widget-content">
        <a href="<?php echo e($footer_contact['google_maps']); ?>" target="_blank">Lokalizacja Google</a>
    </div>
</div>

</div><!-- Page Wrapper End -->

<!-- LOADING AREA START -->
<div class="loading-area">
    <div class="loading-box"></div>
    <div class="loading-pic">
        <div class="cssload-container">
            <div class="cssload-progress cssload-float cssload-shadow">
                <div class="cssload-progress-item"></div>
            </div>
        </div>
    </div>
</div>
<!-- LOADING AREA END -->

<!-- JAVASCRIPT FILES -->
<script src="<?php echo asset('../js/jquery-3.6.1.min.js'); ?>"></script><!-- JQUERY.MIN JS -->
<script src="<?php echo asset('../js/popper.min.js'); ?>"></script><!-- POPPER.MIN JS -->
<script src="<?php echo asset('../js/bootstrap.min.js'); ?>"></script><!-- BOOTSTRAP.MIN JS -->
<script src="<?php echo asset('../js/bootstrap-select.min.js'); ?>"></script><!-- FORM JS -->
<script src="<?php echo asset('../js/jquery.bootstrap-touchspin.min.js'); ?>"></script><!-- FORM JS -->
<script src="<?php echo asset('../js/magnific-popup.min.js'); ?>"></script><!-- MAGNIFIC-POPUP JS -->
<script src="<?php echo asset('../js/waypoints.min.js'); ?>"></script><!-- WAYPOINTS JS -->
<script src="<?php echo asset('../js/counterup.min.js'); ?>"></script><!-- COUNTERUP JS -->
<script src="<?php echo asset('../js/waypoints-sticky.min.js'); ?>"></script><!-- COUNTERUP JS -->
<script src="<?php echo asset('../js/isotope.pkgd.min.js'); ?>"></script><!-- MASONRY -->
<script src="<?php echo asset('../js/imagesloaded.pkgd.min.js'); ?>"></script><!-- MASONRY -->
<script src="<?php echo asset('../js/owl.carousel.min.js'); ?>"></script><!-- OWL SLIDER -->
<script src="<?php echo asset('../js/scrolla.min.js'); ?>"></script><!-- ON SCROLL CONTENT ANIMATE -->
<script src="<?php echo asset('../js/custom.js'); ?>"></script><!-- CUSTOM FUNCTIONS -->
<script src="<?php echo asset('../js/shortcode.js'); ?>"></script><!-- SHORTCODE FUNCTIONS -->
<!-- BOOKSY & WHATSAPP -->
<script src="<?php echo asset('../js/booksy-embed.js'); ?>"></script>
<script src="<?php echo asset('../js/booksy-widget.js'); ?>"></script>
<script src="<?php echo asset('../js/whatsapp-ctc-chatbox.js'); ?>"></script>
<script src="<?php echo asset('../js/booksy-iframe-fix.js'); ?>"></script>

<!-- POLITYKA PRYWATNOŚCI JS -->
<script type="module" src="<?php echo asset('../js/cookieconsent-config.js'); ?>"></script>
<script defer src="<?php echo asset('../js/iframemanager.js'); ?>"></script>
<!-- Facebook SDK Initialization -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v24.0&appId=464369106147391"></script>

<!-- CUSTOM FOOTER SCRIPTS -->
<script>
    // Funkcja do ukrywania loadera dla iframe Booksy
    function hideLoader() {
        const loader = document.getElementById('iframeLoader');
        if (loader) {
            loader.style.display = 'none';
        }
    }

    // Toggle WhatsApp Chatbox
    function toggleCtcChatbox() {
        const chatbox = document.getElementById('customCtcChatbox');
        if (chatbox) {
            chatbox.style.display = chatbox.style.display === 'none' || chatbox.style.display === '' ? 'block' : 'none';
            chatbox.setAttribute('aria-hidden', chatbox.style.display === 'none' ? 'true' : 'false');
        }
    }

    // Toggle Booksy Chatbox
    function toggleBooksyChatbox() {
        const chatbox = document.getElementById('booksyChatboxWidget');
        if (chatbox) {
            chatbox.style.display = chatbox.style.display === 'none' || chatbox.style.display === '' ? 'block' : 'none';
            chatbox.setAttribute('aria-hidden', chatbox.style.display === 'none' ? 'true' : 'false');
        }
    }

    // Track Booksy Click
    function trackBooksyClick(event) {
        if (typeof gtag !== 'undefined') {
            gtag('event', 'click', {
                'event_category': 'Booksy',
                'event_label': 'Footer Widget',
                'value': 1
            });
        }
    }

    // Initialize slideout widgets
    document.addEventListener('DOMContentLoaded', function() {
        const slideoutWidgets = document.querySelectorAll('.slideout-widget');

        slideoutWidgets.forEach(function(widget) {
            const handler = widget.querySelector('.slideout-widget-handler');
            const content = widget.querySelector('.slideout-widget-content');

            handler.addEventListener('click', function() {
                // Zamknij wszystkie inne widgety
                slideoutWidgets.forEach(function(w) {
                    if (w !== widget) {
                        w.querySelector('.slideout-widget-content').style.display = 'none';
                    }
                });

                // Toggle obecnego widgetu
                if (content.style.display === 'block') {
                    content.style.display = 'none';
                } else {
                    content.style.display = 'block';
                }
            });
        });

        // Hide loading screen when page is loaded
        window.addEventListener('load', function() {
            const loader = document.querySelector('.loading-area');
            if (loader) {
                loader.style.opacity = '0';
                setTimeout(() => {
                    loader.style.display = 'none';
                }, 300);
            }
        });
    });
</script>

<!-- Dodatkowy inline script dla development -->
<?php if (APP_ENV === 'development'): ?>
<script>
// Development helper - ignoruj błędy AdBlocka
(function() {
    const originalError = console.error;
    console.error = function() {
        const args = Array.from(arguments);
        const errorString = args.join(' ');
        
        // Ignoruj błędy związane z AdBlockiem i rozszerzeniami
        const ignoredErrors = [
            'ERR_BLOCKED_BY_CLIENT',
            'Failed to apply filter',
            'Invalid flags supplied to RegExp',
            'VM'
        ];
        
        const shouldIgnore = ignoredErrors.some(error => errorString.includes(error));
        
        if (!shouldIgnore) {
            originalError.apply(console, arguments);
        }
    };
})();
</script>
<?php endif; ?>

</body>

</html>