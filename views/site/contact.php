<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\ContactForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\captcha\Captcha;

$isArabic = strpos(Yii::$app->language, 'ar') === 0;
$company = $company ?? Yii::$app->params['company'] ?? [];
$this->title = Yii::t('app', 'ContactTitle');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact py-4">
    <div class="row justify-content-center">
        <div class="col-lg-11 col-xl-10">
            <div class="bg-white p-4 p-md-5 rounded-4 shadow-sm border">
                
                <div class="text-center max-w-700 mx-auto mb-5">
                    <span class="badge bg-primary-subtle text-primary fw-bold px-3 py-2 rounded-pill mb-2">
                        <i class="bi bi-headset me-1"></i> <?= Yii::t('app', 'ContactTitle') ?>
                    </span>
                    <h1 class="fw-extrabold text-dark display-6"><?= Html::encode($this->title) ?></h1>
                    <p class="text-muted lead fs-6 mb-0"><?= Yii::t('app', 'ContactSubtitle') ?></p>
                </div>

                <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>
                    <div class="alert alert-success d-flex align-items-center rounded-3 p-4 mb-4" role="alert">
                        <i class="bi bi-check-circle-fill fs-2 me-3 text-success"></i>
                        <div>
                            <h5 class="fw-bold m-0"><?= Yii::t('app', 'ContactSuccessMsg') ?></h5>
                        </div>
                    </div>
                <?php else: ?>

                    <div class="row g-5">
                        <!-- Form Section -->
                        <div class="col-lg-7 border-end-lg">
                            <?php $form = ActiveForm::begin([
                                'id' => 'contact-form',
                                'options' => ['class' => 'needs-validation'],
                                'fieldConfig' => [
                                    'template' => "{label}\n{input}\n{error}",
                                    'labelOptions' => ['class' => 'form-label fw-bold text-dark small'],
                                    'inputOptions' => ['class' => 'form-control form-control-lg'],
                                    'errorOptions' => ['class' => 'invalid-feedback d-block'],
                                ],
                            ]); ?>

                                <div class="row g-3 mb-3">
                                    <div class="col-md-6">
                                        <?= $form->field($model, 'name')->textInput([
                                            'autofocus' => true,
                                            'placeholder' => $isArabic ? 'أدخل اسمك الكامل' : 'John Doe'
                                        ])->label(Yii::t('app', 'ContactName')) ?>
                                    </div>
                                    <div class="col-md-6">
                                        <?= $form->field($model, 'email')->textInput([
                                            'placeholder' => 'example@domain.com'
                                        ])->label(Yii::t('app', 'ContactEmail')) ?>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <?= $form->field($model, 'subject')->textInput([
                                        'placeholder' => $isArabic ? 'عنوان الموضوع أو الاستفسار' : 'Subject of inquiry'
                                    ])->label(Yii::t('app', 'ContactSubject')) ?>
                                </div>

                                <div class="mb-3">
                                    <?= $form->field($model, 'body')->textarea([
                                        'rows' => 5,
                                        'placeholder' => $isArabic ? 'اكتب تفاصيل طلبك أو استفسارك هنا...' : 'Write your details here...'
                                    ])->label(Yii::t('app', 'ContactBody')) ?>
                                </div>

                                <div class="mb-4">
                                    <?= $form->field($model, 'verifyCode')->widget(Captcha::class, [
                                        'template' => '<div class="row align-items-center g-2"><div class="col-sm-4">{image}</div><div class="col-sm-8">{input}</div></div>',
                                        'options' => ['class' => 'form-control form-control-lg', 'placeholder' => $isArabic ? 'أدخل الرمز' : 'Enter Code']
                                    ])->label(Yii::t('app', 'ContactVerification')) ?>
                                </div>

                                <div class="form-group">
                                    <?= Html::submitButton('<i class="bi bi-send-fill me-2"></i>' . Yii::t('app', 'ContactSubmit'), ['class' => 'btn btn-accent btn-lg w-100 text-white fw-bold shadow-sm', 'name' => 'contact-button']) ?>
                                </div>

                            <?php ActiveForm::end(); ?>
                        </div>

                        <!-- Info Cards Section -->
                        <div class="col-lg-5">
                            <div class="h-100 bg-light p-4 rounded-4 border d-flex flex-column justify-content-between">
                                <div>
                                    <h4 class="fw-bold text-dark mb-3 pb-2 border-bottom">
                                        <i class="bi bi-building me-2 text-primary"></i>
                                        <?= $isArabic ? Html::encode($company['name_ar'] ?? '') : Html::encode($company['name_en'] ?? '') ?>
                                    </h4>

                                    <div class="p-3 bg-white rounded-3 border mb-4 text-muted">
                                        <div class="row g-2 text-center text-md-start extra-small">
                                            <div class="col-6 border-end">
                                                <div class="text-muted"><i class="bi bi-card-text me-1 text-primary"></i> <strong><?= $isArabic ? 'السجل التجاري (CR)' : 'CR Number' ?></strong></div>
                                                <div class="fw-bold text-dark mt-1"><?= Html::encode($company['cr_number'] ?? '1010889421') ?></div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-muted"><i class="bi bi-receipt me-1 text-success"></i> <strong><?= $isArabic ? 'الرقم الضريبي (VAT)' : 'VAT Number' ?></strong></div>
                                                <div class="fw-bold text-dark mt-1"><?= Html::encode($company['vat_number'] ?? '310488942100003') ?></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-start gap-3 mb-4">
                                        <div class="p-3 bg-primary bg-opacity-10 text-primary rounded-3 fs-4">
                                            <i class="bi bi-geo-alt-fill"></i>
                                        </div>
                                        <div>
                                            <h6 class="fw-bold text-dark m-0"><?= Yii::t('app', 'ContactAddress') ?></h6>
                                            <p class="text-muted small m-0">
                                                <?= Html::encode(($company['building_no'] ?? '7420') . ' ' . ($isArabic ? ($company['street_ar'] ?? '') : ($company['street_en'] ?? '')) . ', ' . ($isArabic ? ($company['district_ar'] ?? '') : ($company['district_en'] ?? '')) . ', ' . ($isArabic ? ($company['city_ar'] ?? '') : ($company['city_en'] ?? ''))) ?>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-start gap-3 mb-4">
                                        <div class="p-3 bg-success bg-opacity-10 text-success rounded-3 fs-4">
                                            <i class="bi bi-telephone-fill"></i>
                                        </div>
                                        <div>
                                            <h6 class="fw-bold text-dark m-0"><?= Yii::t('app', 'ContactPhone') ?></h6>
                                            <p class="text-muted small m-0" dir="ltr"><?= Html::encode($company['phone'] ?? '(800) 555-4822') ?> / <?= Html::encode($company['whatsapp'] ?? '+966500000000') ?></p>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-start gap-3 mb-4">
                                        <div class="p-3 bg-info bg-opacity-10 text-info rounded-3 fs-4">
                                            <i class="bi bi-envelope-fill"></i>
                                        </div>
                                        <div>
                                            <h6 class="fw-bold text-dark m-0"><?= Yii::t('app', 'ContactEmailAddr') ?></h6>
                                            <p class="text-muted small m-0"><?= Html::encode($company['email'] ?? 'hello@dynapulsar.com') ?></p>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-start gap-3 mb-4">
                                        <div class="p-3 bg-warning bg-opacity-10 text-warning rounded-3 fs-4">
                                            <i class="bi bi-clock-fill"></i>
                                        </div>
                                        <div>
                                            <h6 class="fw-bold text-dark m-0"><?= Yii::t('app', 'ContactWorkHours') ?></h6>
                                            <p class="text-muted small m-0"><?= Yii::t('app', 'ContactWorkHoursVal') ?></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-3 bg-white rounded-3 border text-center">
                                    <div class="extra-small text-muted mb-1"><?= $isArabic ? 'هل تحتاج مساعدة عاجلة؟' : 'Need urgent help?' ?></div>
                                    <a href="https://wa.me/<?= preg_replace('/[^0-9]/', '', $company['whatsapp'] ?? '966500000000') ?>" target="_blank" class="btn btn-sm btn-success w-100 rounded-pill fw-bold">
                                        <i class="bi bi-whatsapp me-1"></i> <?= $isArabic ? 'محادثة واتساب فورية' : 'Instant WhatsApp Chat' ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
