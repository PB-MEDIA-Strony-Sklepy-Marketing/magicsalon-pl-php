<?php
/**
 * partials/breadcrumbs-botttom-header.php
 * Dynamiczny baner podstrony wraz z nawigacją okruszkową (Breadcrumbs)
 *
 * Wymagane zmienne przed includowaniem:
 * $banner_img (string) - Ścieżka do obrazka tła
 * $page_title (string) - Tytuł H1 wyświetlany na banerze
 * $breadcrumbs (array) - Tablica z elementami nawigacji [['label' => '', 'url' => '', 'icon' => '']]
 */

// Domyślne wartości, aby uniknąć błędów PHP jeśli zmienne nie zostaną zdefiniowane
$banner_img = $banner_img ?? '../images/banner/default-banner.jpg';
$page_title = $page_title ?? '';
$page_desc = $page_desc ??'Domyślne description p pod page title';
$breadcrumbs = $breadcrumbs ?? [];
?>

<!-- INNER PAGE BANNER -->
<div class="wt-bnr-inr overlay-wraper" style="background-image:url(<?php echo htmlspecialchars($banner_img); ?>);">
    <div class="overlay-main bg-black opacity-07"></div>
    <div class="container">
        <div class="wt-bnr-inr-entry">
            <h1 class="text-white"><?php echo htmlspecialchars($page_title); ?></h1>
            <p class="text-white"><?php echo htmlspecialchars($page_desc); ?></p>
        </div>
    </div>
</div>
<!-- INNER PAGE BANNER END -->

<!-- BREADCRUMB ROW -->
<div class="bg-gray-light p-tb20">
    <div class="container">
        <ul class="wt-breadcrumb breadcrumb-style-2">
            <?php foreach ($breadcrumbs as $crumb): ?>
                <li>
                    <?php if (!empty($crumb['url'])): ?>
                        <a href="<?php echo htmlspecialchars($crumb['url']); ?>">
                            <?php if (!empty($crumb['icon'])): ?>
                                <i class="<?php echo htmlspecialchars($crumb['icon']); ?>"></i>
                            <?php endif; ?>
                            <?php echo htmlspecialchars($crumb['label']); ?>
                        </a>
                    <?php else: ?>
                        <!-- Ostatni element (aktywny) bez linku -->
                        <?php echo htmlspecialchars($crumb['label']); ?>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
<!-- BREADCRUMB ROW END -->