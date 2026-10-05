<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$isArabic = strpos(Yii::$app->language, 'ar') === 0;
$dir = $isArabic ? 'rtl' : 'ltr';

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? Yii::t('app', 'HeroLead')]);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? 'HVAC repair, AC installation, Split AC maintenance, Floor standing unit repair, Cassette AC service, Package unit HVAC, Electrical services']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);

// Register Bootstrap 5 RTL CSS if Arabic
if ($isArabic) {
    $this->registerCssFile('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css');
}
$this->registerCssFile('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css');
?>
<?php
$company = Yii::$app->params['company'] ?? [];
$brandTitle = Yii::$app->params['brandTitle'] ?? Yii::t('app', 'BrandTitle');
$companyPhone = $company['phone'] ?? '(800) 555-4822';
$companyWhatsapp = $company['whatsapp'] ?? '+966500000000';
$companyEmail = $company['email'] ?? 'hello@dynapulsar.com';
$companyPermit = $company['permit_number'] ?? 'HVAC-EL-2026-8894';
$cleanPhone = preg_replace('/[^0-9+]/', '', $companyPhone);
$cleanWhatsapp = preg_replace('/[^0-9]/', '', $companyWhatsapp);

$addressStr = ($company['building_no'] ?? '7420') . ' ' 
    . ($isArabic ? ($company['street_ar'] ?? '') : ($company['street_en'] ?? '')) . ', ' 
    . ($isArabic ? ($company['district_ar'] ?? '') : ($company['district_en'] ?? '')) . ', ' 
    . ($isArabic ? ($company['city_ar'] ?? '') : ($company['city_en'] ?? ''));
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" dir="<?= $dir ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?> | <?= Html::encode($brandTitle) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100" dir="<?= $dir ?>">
<?php $this->beginBody() ?>

<header id="header">
    <?php
    NavBar::begin([
        'brandLabel' => '<div class="navbar-brand-text text-white"><i class="bi bi-snow2 text-info me-2"></i>' . Html::encode($brandTitle) . '</div>',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => ['class' => 'navbar-expand-lg navbar-dark navbar-custom fixed-top shadow-sm px-3 px-lg-4'],
        'containerOptions' => ['class' => 'container-fluid px-0']
    ]);

    // Language Toggle Target URL
    $targetLang = $isArabic ? 'en-US' : 'ar-SA';
    $langBtnText = $isArabic ? '🌐 English' : '🌐 العربية';
    $langSwitchUrl = \yii\helpers\Url::current(['lang' => $targetLang]);

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav ms-auto align-items-center gap-1'],
        'items' => [
            ['label' => Yii::t('app', 'Home'), 'url' => ['/site/index']],
            ['label' => Yii::t('app', 'HVAC Systems'), 'url' => ['/site/index', '#' => 'systems']],
            ['label' => Yii::t('app', 'Services'), 'url' => ['/site/index', '#' => 'services']],
            ['label' => Yii::t('app', 'ERP Portal'), 'url' => ['/site/erp-dashboard']],
            ['label' => Yii::t('app', 'Contact Us'), 'url' => ['/site/contact']],
            ['label' => $langBtnText, 'url' => $langSwitchUrl, 'linkOptions' => ['class' => 'btn btn-sm btn-outline-info text-white fw-bold px-3 ms-lg-1 rounded-pill']],
            Yii::$app->user->isGuest
                ? ['label' => '<i class="bi bi-box-arrow-in-right me-1"></i> ' . Yii::t('app', 'Tech Login'), 'url' => ['/site/login'], 'encode' => false, 'linkOptions' => ['class' => 'btn btn-sm btn-accent ms-lg-1 text-white']]
                : '<li class="nav-item ms-lg-2">'
                    . Html::beginForm(['/site/logout'])
                    . Html::submitButton(
                        '<i class="bi bi-person-circle me-1"></i> ' . Yii::t('app', 'Logout') . ' (' . Html::encode(Yii::$app->user->identity->username) . ')',
                        ['class' => 'btn btn-sm btn-outline-light nav-link border-0']
                    )
                    . Html::endForm()
                    . '</li>'
        ]
    ]);
    NavBar::end();
    ?>
</header>

<?php 
$isHomePage = Yii::$app->controller->action->id === 'index';
$mainPaddingClass = $isHomePage ? 'pt-0' : 'pt-5 mt-4';
?>

<main id="main" class="flex-shrink-0 <?= $mainPaddingClass ?>" role="main">
    <?php if (isset($this->params['breadcrumbs']) && !empty($this->params['breadcrumbs'])): ?>
        <div class="container pt-4">
            <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
        </div>
    <?php endif ?>
    
    <div class="container-fluid p-0">
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer id="footer" class="mt-auto py-4 text-white">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4">
                <h5 class="fw-bold text-white mb-3"><i class="bi bi-snow2 text-info me-2"></i><?= Html::encode($brandTitle) ?></h5>
                <p class="text-secondary small"><?= Yii::t('app', 'FooterAbout') ?></p>
                <div class="d-flex gap-3 text-secondary">
                    <span class="small"><i class="bi bi-shield-check text-success fs-5 me-1"></i> <?= Yii::t('app', 'LicensedTechs') ?></span>
                    <span class="small"><i class="bi bi-clock-history text-warning fs-5 me-1"></i> <?= Yii::t('app', 'Emergency247') ?></span>
                </div>
            </div>
            <div class="col-lg-2 col-6">
                <h6 class="fw-bold text-white mb-3"><?= Yii::t('app', 'HVAC Systems') ?></h6>
                <ul class="list-unstyled text-secondary small">
                    <li class="mb-2"><a href="#systems"><?= Yii::t('app', 'SplitAC') ?></a></li>
                    <li class="mb-2"><a href="#systems"><?= Yii::t('app', 'FloorStanding') ?></a></li>
                    <li class="mb-2"><a href="#systems"><?= Yii::t('app', 'CeilingCassette') ?></a></li>
                    <li class="mb-2"><a href="#systems"><?= Yii::t('app', 'PackageUnit') ?></a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-6">
                <h6 class="fw-bold text-white mb-3"><?= Yii::t('app', 'Services') ?></h6>
                <ul class="list-unstyled text-secondary small">
                    <li class="mb-2"><a href="<?= \yii\helpers\Url::to(['/site/privacy']) ?>"><?= Yii::t('app', 'Privacy Policy') ?></a></li>
                    <li class="mb-2"><a href="<?= \yii\helpers\Url::to(['/site/terms']) ?>"><?= Yii::t('app', 'Terms of Service') ?></a></li>
                    <li class="mb-2"><a href="<?= \yii\helpers\Url::to(['/site/contact']) ?>"><?= Yii::t('app', 'Contact Us') ?></a></li>
                    <li class="mb-2"><a href="<?= \yii\helpers\Url::to(['/site/erp-dashboard']) ?>"><?= Yii::t('app', 'ERP Portal') ?></a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h6 class="fw-bold text-white mb-3"><?= Yii::t('app', 'Contact Us') ?></h6>
                <p class="text-secondary small mb-1"><i class="bi bi-geo-alt text-danger me-2"></i> <?= Html::encode($addressStr) ?></p>
                <p class="text-secondary small mb-1"><i class="bi bi-telephone text-success me-2"></i> <?= Html::encode($companyPhone) ?></p>
                <p class="text-secondary small mb-1"><i class="bi bi-envelope text-info me-2"></i> <?= Html::encode($companyEmail) ?></p>
                <p class="text-secondary small"><i class="bi bi-award text-warning me-2"></i> <?= $isArabic ? 'ترخيص رقم ' : 'License #' ?><?= Html::encode($companyPermit) ?></p>
            </div>
        </div>
        <hr class="border-secondary my-4">
        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start text-secondary small">
                &copy; <?= date('Y') ?> <?= Html::encode($brandTitle) ?>. <?= $isArabic ? 'جميع الحقوق محفوظة.' : 'All rights reserved.' ?>
            </div>
            <div class="col-md-6 text-center text-md-end text-secondary small">
                Google Ads Compliant Landing Page & Built-in Enterprise ERP Engine
            </div>
        </div>
    </div>
</footer>

<!-- Floating WhatsApp & Call Quick Action Widgets -->
<div class="floating-widget-container">
    <a href="https://wa.me/<?= $cleanWhatsapp ?>?text=مرحباً،%20أحتاج%20إلى%20خدمة%20صيانة/تركيب%20تكييف" target="_blank" class="floating-btn floating-whatsapp" aria-label="WhatsApp Us">
        <i class="bi bi-whatsapp"></i>
        <span class="floating-tooltip"><?= $isArabic ? 'واتساب مباشر' : 'WhatsApp Us' ?></span>
    </a>
    <a href="tel:<?= $cleanPhone ?>" class="floating-btn floating-call" aria-label="Call Direct">
        <i class="bi bi-telephone-fill"></i>
        <span class="floating-tooltip"><?= $isArabic ? 'اتصال مباشر' : 'Call Direct' ?></span>
    </a>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
