<?php

/** @var yii\web\View $this */

use yii\bootstrap5\Html;

$company = Yii::$app->params['company'] ?? [];
$brandTitle = Yii::$app->params['brandTitle'] ?? 'ClimateTech HVAC';
$companyPhone = $company['phone'] ?? '(800) 555-4822';
$companyPermit = $company['permit_number'] ?? 'HVAC-EL-2026-8894';
$isArabic = strpos(Yii::$app->language, 'ar') === 0;

$addressStr = ($company['building_no'] ?? '7420') . ' ' 
    . ($isArabic ? ($company['street_ar'] ?? '') : ($company['street_en'] ?? '')) . ', ' 
    . ($isArabic ? ($company['district_ar'] ?? '') : ($company['district_en'] ?? '')) . ', ' 
    . ($isArabic ? ($company['city_ar'] ?? '') : ($company['city_en'] ?? ''));

$this->title = $isArabic ? 'سياسة الخصوصية' : 'Privacy Policy';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-privacy py-5">
    <div class="container">
        <div class="bg-white p-4 p-md-5 rounded-4 shadow-sm border">
            <h1 class="fw-bold text-dark mb-4"><?= Html::encode($this->title) ?></h1>
            <p class="lead text-muted"><?= $isArabic ? 'تلتزم مؤسستنا بحماية خصوصيتك وبياناتك الشخصية.' : 'We are committed to protecting your privacy and personal data.' ?></p>

            <h4 class="fw-bold text-dark mt-4">1. <?= $isArabic ? 'بيانات المنشأة والترخيص' : 'Business Information & Licensing' ?></h4>
            <p><?= Html::encode($brandTitle) ?> <?= $isArabic ? 'تعمل كمنشأة معتمدة وملاخصة لخدمات التكييف والكهرباء (ترخيص رقم ' : 'operates as a licensed residential air conditioning and electrical service provider (License #' ?><?= Html::encode($companyPermit) ?>). <?= $isArabic ? 'العنوان الرئيسي: ' : 'Physical Address: ' ?><?= Html::encode($addressStr) ?>. <?= $isArabic ? 'هاتف التواصل: ' : 'Direct Phone: ' ?><?= Html::encode($companyPhone) ?>.</p>

            <h4 class="fw-bold text-dark mt-4">2. <?= $isArabic ? 'جمع البيانات الشخصية' : 'Collection of Personal Data' ?></h4>
            <p><?= $isArabic ? 'عند تعبئة نموذج الطلب أو الاتصال، نجمع اسمك، رقم هاتفك، موقعك، وتفاصيل نظام التكييف لتقديم خدمة الفحص والتسليم بشكل دقيق.' : 'When you fill out our online request form, we collect your name, phone number, location, and details regarding your HVAC system. This data is strictly used to schedule technician visits and provide accurate service estimates.' ?></p>

            <h4 class="fw-bold text-dark mt-4">3. <?= $isArabic ? 'حماية البيانات وعدم الإفصاح' : 'Data Sharing & Non-Disclosure' ?></h4>
            <p><?= $isArabic ? 'نحن لا نبيع أو نشارك معلوماتك الشخصية مع أي أطراف ثالثة، ويتم معالجتها حصرياً عبر نظامنا لإدارة الطلبات.' : 'We do NOT sell, rent, or trade your personal information to third parties or data brokers. Data is processed solely by our internal ERP system to fulfill field service orders.' ?></p>

            <h4 class="fw-bold text-dark mt-4">4. <?= $isArabic ? 'إفصاح إعلانات جوجل والملفات النصية (Cookies)' : 'Google Ads & Analytics Disclosures' ?></h4>
            <p><?= $isArabic ? 'يستخدم هذا الموقع تقنيات إعلانات Google Ads لقياس كفاءة الإعلانات. يمكنك إدارة تفضيلات الإعلانات عبر إعدادات حساب Google الخاص بك.' : 'This website uses Google Ads conversion tracking tags and cookies to measure advertising effectiveness. Users may opt out of personalized advertising by visiting Google Ad Settings.' ?></p>
        </div>
    </div>
</div>
