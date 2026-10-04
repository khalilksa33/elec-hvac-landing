<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$isArabic = strpos(Yii::$app->language, 'ar') === 0;
$dir = $isArabic ? 'rtl' : 'ltr';

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);

if ($isArabic) {
    $this->registerCssFile('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css');
}
$this->registerCssFile('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css');
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" dir="<?= $dir ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?> | <?= $isArabic ? 'بوابة إدارة التكييف والكهرباء (ERP)' : 'ClimateTech ERP Management Console' ?></title>
    <?php $this->head() ?>
    <style>
        .erp-sidebar {
            width: 260px;
            background: #0f172a;
            min-height: 100vh;
            color: #94a3b8;
        }
        .erp-content-wrapper {
            flex: 1;
            background: #f8fafc;
            min-height: 100vh;
        }
    </style>
</head>
<body class="d-flex flex-column h-100" dir="<?= $dir ?>">
<?php $this->beginBody() ?>

<!-- Dedicated Isolated ERP Navigation Bar -->
<header id="erp-header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom border-secondary px-3 px-lg-4 py-2">
        <div class="container-fluid px-0">
            <a class="navbar-brand d-flex align-items-center gap-2 fw-bold text-white fs-5" href="<?= \yii\helpers\Url::to(['/site/erp-dashboard']) ?>">
                <span class="p-2 bg-primary bg-opacity-20 rounded-3 text-info"><i class="bi bi-cpu-fill"></i></span>
                <span><?= $isArabic ? 'نظام إدارة التكييف والكهرباء ERP' : 'ClimateTech Enterprise ERP' ?></span>
            </a>

            <div class="d-flex align-items-center gap-2 ms-auto">
                <!-- Language Switcher Button -->
                <?php
                $targetLang = $isArabic ? 'en-US' : 'ar-SA';
                $langBtnText = $isArabic ? '🌐 English' : '🌐 العربية';
                $langSwitchUrl = \yii\helpers\Url::current(['lang' => $targetLang]);
                ?>
                <a href="<?= $langSwitchUrl ?>" class="btn btn-sm btn-outline-info text-white fw-bold px-3 rounded-pill">
                    <?= $langBtnText ?>
                </a>

                <!-- Public Site Link -->
                <a href="<?= \yii\helpers\Url::to(['/site/index']) ?>" class="btn btn-sm btn-outline-light rounded-pill px-3">
                    <i class="bi bi-globe me-1"></i> <?= $isArabic ? 'الموقع العام' : 'Public Site' ?>
                </a>

                <!-- Logout Form -->
                <?php if (!Yii::$app->user->isGuest): ?>
                    <?= Html::beginForm(['/site/logout']) ?>
                    <?= Html::submitButton('<i class="bi bi-box-arrow-right me-1"></i> ' . ($isArabic ? 'خروج' : 'Logout'), ['class' => 'btn btn-sm btn-danger rounded-pill px-3']) ?>
                    <?= Html::endForm() ?>
                <?php endif; ?>
            </div>
        </div>
    </nav>
</header>

<main id="main" class="flex-shrink-0" role="main">
    <div class="container-fluid p-0">
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer id="erp-footer" class="mt-auto py-3 bg-dark text-white border-top border-secondary">
    <div class="container-fluid px-4">
        <div class="d-flex flex-wrap justify-content-between align-items-center extra-small text-secondary">
            <div>
                &copy; <?= date('Y') ?> ClimateTech Enterprise ERP Platform | ZATCA Phase 2 E-Invoicing Certified
            </div>
            <div>
                <?= $isArabic ? 'نظام إدارة البلاغات، الفواتير الضريبية، والمستخدمين' : 'Dispatch, ZATCA Invoicing & RBAC Portal' ?>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
