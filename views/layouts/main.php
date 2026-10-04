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

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? 'Certified Residential & Home HVAC & Electrical Installation, Repair and Maintenance Services for Split AC, Floor Standing, Cassette & Package Units.']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? 'HVAC repair, AC installation, Split AC maintenance, Floor standing unit repair, Cassette AC service, Package unit HVAC, Electrical services']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
$this->registerCssFile('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css');
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?> | ClimateTech HVAC & Electrical ERP</title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header id="header">
    <?php
    NavBar::begin([
        'brandLabel' => '<div class="navbar-brand-text text-white"><i class="bi bi-snow2 text-info me-2"></i>Climate<span>Tech</span> Pro</div>',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => ['class' => 'navbar-expand-lg navbar-dark navbar-custom fixed-top shadow-sm']
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav ms-auto align-items-center'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'HVAC Systems', 'url' => ['/site/index', '#' => 'systems']],
            ['label' => 'Services', 'url' => ['/site/index', '#' => 'services']],
            ['label' => 'ERP Portal', 'url' => ['/site/erp-dashboard']],
            ['label' => 'Contact Us', 'url' => ['/site/contact']],
            ['label' => 'Privacy Policy', 'url' => ['/site/privacy']],
            ['label' => 'Call: (800) 555-HVAC', 'url' => 'tel:8005554822', 'linkOptions' => ['class' => 'btn btn-sm btn-outline-warning text-white fw-bold px-3 ms-lg-2 rounded-pill']],
            Yii::$app->user->isGuest
                ? ['label' => '<i class="bi bi-box-arrow-in-right me-1"></i> Tech Login', 'url' => ['/site/login'], 'encode' => false, 'linkOptions' => ['class' => 'btn btn-sm btn-accent ms-lg-2 text-white']]
                : '<li class="nav-item ms-lg-2">'
                    . Html::beginForm(['/site/logout'])
                    . Html::submitButton(
                        '<i class="bi bi-person-circle me-1"></i> Logout (' . Html::encode(Yii::$app->user->identity->username) . ')',
                        ['class' => 'btn btn-sm btn-outline-light nav-link border-0']
                    )
                    . Html::endForm()
                    . '</li>'
        ]
    ]);
    NavBar::end();
    ?>
</header>

<main id="main" class="flex-shrink-0" role="main">
    <?php if (isset($this->params['breadcrumbs']) && !empty($this->params['breadcrumbs'])): ?>
        <div class="container pt-5 mt-4">
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
                <h5 class="fw-bold text-white mb-3"><i class="bi bi-snow2 text-info me-2"></i>ClimateTech HVAC & Electrical</h5>
                <p class="text-secondary small">Licensed & Certified Home HVAC & Electrical Solutions. Premier installation, maintenance, and repair for Split AC, Floor Standing, Cassette & Package units.</p>
                <div class="d-flex gap-3 text-secondary">
                    <i class="bi bi-shield-check text-success fs-5"></i> Licensed Technicians
                    <i class="bi bi-clock-history text-warning fs-5"></i> 24/7 Emergency Service
                </div>
            </div>
            <div class="col-lg-2 col-6">
                <h6 class="fw-bold text-white mb-3">Systems</h6>
                <ul class="list-unstyled text-secondary small">
                    <li class="mb-2"><a href="#systems">Split AC Units</a></li>
                    <li class="mb-2"><a href="#systems">Floor Standing Units</a></li>
                    <li class="mb-2"><a href="#systems">Ceiling Cassette Units</a></li>
                    <li class="mb-2"><a href="#systems">Central Package Units</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-6">
                <h6 class="fw-bold text-white mb-3">Compliance & Info</h6>
                <ul class="list-unstyled text-secondary small">
                    <li class="mb-2"><a href="<?= \yii\helpers\Url::to(['/site/privacy']) ?>">Privacy Policy</a></li>
                    <li class="mb-2"><a href="<?= \yii\helpers\Url::to(['/site/terms']) ?>">Terms of Service</a></li>
                    <li class="mb-2"><a href="<?= \yii\helpers\Url::to(['/site/contact']) ?>">Contact & Business Info</a></li>
                    <li class="mb-2"><a href="<?= \yii\helpers\Url::to(['/site/erp-dashboard']) ?>">Technician ERP Portal</a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h6 class="fw-bold text-white mb-3">Contact Information</h6>
                <p class="text-secondary small mb-1"><i class="bi bi-geo-alt text-danger me-2"></i> 100 HVAC Commerce Way, Suite 400</p>
                <p class="text-secondary small mb-1"><i class="bi bi-telephone text-success me-2"></i> Direct: (800) 555-4822</p>
                <p class="text-secondary small mb-1"><i class="bi bi-envelope text-info me-2"></i> service@climatetech-hvac.com</p>
                <p class="text-secondary small"><i class="bi bi-clock text-warning me-2"></i> License # HVAC-EL-2026-8894</p>
            </div>
        </div>
        <hr class="border-secondary my-4">
        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start text-secondary small">
                &copy; <?= date('Y') ?> ClimateTech HVAC & Electrical Systems Inc. All rights reserved.
            </div>
            <div class="col-md-6 text-center text-md-end text-secondary small">
                Google Ads Compliant Landing Page & Built-in Yii2 ERP Backend
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
