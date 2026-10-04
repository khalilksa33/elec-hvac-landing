<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;

$isArabic = strpos(Yii::$app->language, 'ar') === 0;
$this->title = $isArabic ? 'تسجيل دخول الفنيين وإدارة النظام' : 'Technician & Admin Portal Login';
?>

<div class="login-wrapper py-5 min-vh-100 d-flex align-items-center bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-9">
                <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
                    <div class="row g-0">
                        <!-- Left Brand & Features Banner -->
                        <div class="col-lg-6 bg-dark text-white p-5 d-flex flex-column justify-content-between position-relative" style="background: linear-gradient(135deg, #0f172a 0%, #0284c7 100%);">
                            <div>
                                <div class="d-flex align-items-center gap-2 mb-4">
                                    <div class="bg-white bg-opacity-20 p-2 rounded-3 text-info fs-3">
                                        <i class="bi bi-snow2"></i>
                                    </div>
                                    <h4 class="fw-extrabold m-0 text-white">ClimateTech Pro</h4>
                                </div>

                                <h3 class="fw-extrabold mb-3">
                                    <?= $isArabic ? 'بوابة إدارة الصيانة والفواتير الإلكترونية ZATCA' : 'HVAC & Electrical Enterprise Operations' ?>
                                </h3>
                                <p class="text-white-50 small mb-4">
                                    <?= $isArabic 
                                        ? 'منصة الفنيين والإدارة لمتابعة بلاغات الصيانة، الفواتير الضريبية، السجل التجاري، وإدارة العملاء.'
                                        : 'Unified portal for field technicians, dispatchers, and admins to manage jobs, ZATCA e-invoices, and customers.' ?>
                                </p>

                                <div class="d-flex flex-column gap-3 extra-small">
                                    <div class="d-flex align-items-center gap-2 bg-white bg-opacity-10 p-3 rounded-3">
                                        <i class="bi bi-shield-check text-success fs-5"></i>
                                        <div>
                                            <strong><?= $isArabic ? 'صلاحيات متعددة (RBAC)' : 'Role-Based Access' ?></strong>
                                            <div class="text-white-50"><?= $isArabic ? 'مدير نظام، محاسب، مشرف ميداني، فني' : 'Super Admin, Accountant, Dispatcher, Tech' ?></div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center gap-2 bg-white bg-opacity-10 p-3 rounded-3">
                                        <i class="bi bi-qr-code text-warning fs-5"></i>
                                        <div>
                                            <strong><?= $isArabic ? 'مطابقة هيئة الزكاة (ZATCA)' : 'ZATCA Phase 2 Ready' ?></strong>
                                            <div class="text-white-50"><?= $isArabic ? 'توليد فواتير ضريبية برمز QR مشفر' : 'Encrypted QR Code & PDF Invoicing' ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4 pt-3 border-top border-white border-opacity-10 text-white-50 extra-small">
                                &copy; <?= date('Y') ?> ClimateTech HVAC & Electrical Systems.
                            </div>
                        </div>

                        <!-- Right Login Form -->
                        <div class="col-lg-6 bg-white p-5 d-flex flex-column justify-content-center">
                            <div class="text-center text-lg-start mb-4">
                                <h3 class="fw-extrabold text-dark m-0"><?= $isArabic ? 'تسجيل الدخول' : 'Sign In' ?></h3>
                                <p class="text-muted small"><?= $isArabic ? 'أدخل اسم المستخدم كلمة المرور للوصول للوحة التحكم' : 'Enter your credentials to access the ERP console' ?></p>
                            </div>

                            <!-- Preset Login Quick Selectors -->
                            <div class="p-3 bg-light rounded-3 mb-4 border">
                                <div class="extra-small fw-bold text-dark mb-2"><i class="bi bi-key-fill text-warning me-1"></i> <?= $isArabic ? 'حسابات التجربة السريعة:' : 'Quick Demo Credentials:' ?></div>
                                <div class="d-flex gap-2">
                                    <button type="button" class="btn btn-sm btn-outline-danger w-50 rounded-2 text-start" onclick="fillCreds('admin', 'admin')">
                                        <div class="fw-bold">Super Admin</div>
                                        <div class="extra-small text-muted">admin / admin</div>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-outline-primary w-50 rounded-2 text-start" onclick="fillCreds('demo', 'demo')">
                                        <div class="fw-bold">Field Technician</div>
                                        <div class="extra-small text-muted">demo / demo</div>
                                    </button>
                                </div>
                            </div>

                            <?php $form = ActiveForm::begin([
                                'id' => 'login-form',
                                'options' => ['class' => 'needs-validation'],
                                'fieldConfig' => [
                                    'template' => "{label}\n{input}\n{error}",
                                    'labelOptions' => ['class' => 'form-label fw-bold text-dark small'],
                                    'inputOptions' => ['class' => 'form-control form-control-lg'],
                                    'errorOptions' => ['class' => 'invalid-feedback d-block'],
                                ],
                            ]); ?>

                            <div class="mb-3">
                                <?= $form->field($model, 'username')->textInput([
                                    'id' => 'login-username',
                                    'placeholder' => $isArabic ? 'اسم المستخدم (admin / demo)' : 'Username (admin / demo)',
                                    'autofocus' => true
                                ])->label($isArabic ? 'اسم المستخدم' : 'Username') ?>
                            </div>

                            <div class="mb-3">
                                <?= $form->field($model, 'password')->passwordInput([
                                    'id' => 'login-password',
                                    'placeholder' => '••••••••'
                                ])->label($isArabic ? 'كلمة المرور' : 'Password') ?>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <?= $form->field($model, 'rememberMe')->checkbox([
                                    'template' => "<div class=\"form-check\">{input} <label class=\"form-check-label small text-muted\">" . ($isArabic ? 'تذكر بياناتي' : 'Remember me') . "</label></div>",
                                ])->label(false) ?>
                                <a href="javascript:void(0);" onclick="alert('يرجى التواصل مع مدير النظام لإعادة تعيين كلمة المرور');" class="small text-primary text-decoration-none"><?= $isArabic ? 'نسيت كلمة المرور؟' : 'Forgot password?' ?></a>
                            </div>

                            <button type="submit" class="btn btn-accent btn-lg w-100 text-white fw-bold shadow-sm">
                                <i class="bi bi-box-arrow-in-right me-2"></i> <?= $isArabic ? 'تسجيل الدخول للنظام' : 'Login to ERP System' ?>
                            </button>

                            <?php ActiveForm::end(); ?>

                            <div class="text-center mt-4">
                                <a href="<?= Url::to(['/site/index']) ?>" class="small text-muted text-decoration-none">
                                    <i class="bi bi-arrow-left me-1"></i> <?= $isArabic ? 'العودة للموقع الرئيسي' : 'Return to Home Page' ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function fillCreds(user, pass) {
    document.getElementById('login-username').value = user;
    document.getElementById('login-password').value = pass;
}
</script>
