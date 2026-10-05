<?php

use yii\helpers\Html;

$brandTitle = Yii::$app->params['brandTitle'] ?? 'ClimateTech HVAC';
$isArabic = strpos(Yii::$app->language, 'ar') === 0;

$this->title = $isArabic ? 'شروط الخدمة' : 'Terms of Service';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container py-5 mt-4">
    <div class="bg-white p-5 rounded-4 shadow-sm border max-w-900 mx-auto">
        <h1 class="fw-bold text-dark mb-4"><i class="bi bi-file-earmark-text text-primary me-2"></i><?= Html::encode($this->title) ?></h1>
        <p class="text-muted"><?= $isArabic ? 'آخر تحديث: أكتوبر 2026' : 'Last Updated: October 2026' ?></p>

        <h4 class="fw-bold text-dark mt-4">1. <?= $isArabic ? 'نطاق الخدمات' : 'Scope of Services' ?></h4>
        <p><?= Html::encode($brandTitle) ?> <?= $isArabic ? 'تقدم خدمات فحص وصيانة وإصلاح وتركيب أنظمة التكييف والكهرباء المنزلية بكافة أنواعها (سبلت، دولابي، كاسيت، مركزي package).' : 'provides residential HVAC (Split AC, Floor Standing, Cassette, Package Central Units) and electrical diagnostic, repair, and installation services.' ?></p>

        <h4 class="fw-bold text-dark mt-4">2. <?= $isArabic ? 'شفافية الأسعار والضمان' : 'Upfront Pricing & Warranties' ?></h4>
        <p><?= $isArabic ? 'تحدد جميع تكاليف الفحص والصيانة مسبقاً وبكل شفافية، مع تقديم ضمان على قطع الغيار والخدمات المقدمة ومسجلة في نظامنا الإلكتروني.' : 'All service call diagnostic fees are disclosed upfront and waived if repair work is authorized. All replacement parts and labor carry a limited warranty registered within our ERP database.' ?></p>
    </div>
</div>
