<?php

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'HVAC & Electrical Enterprise ERP';
$isArabic = strpos(Yii::$app->language, 'ar') === 0;
?>

<div class="container-fluid py-4 px-4 bg-light min-vh-100">
    <!-- Header Banner -->
    <div class="d-flex flex-wrap justify-content-between align-items-center mb-4 bg-white p-4 rounded-4 shadow-sm border">
        <div>
            <div class="d-flex align-items-center gap-2">
                <span class="badge bg-primary fs-6"><i class="bi bi-cpu-fill me-1"></i> Enterprise ERP v3.0</span>
                <span class="badge bg-success"><i class="bi bi-shield-check me-1"></i> ZATCA Phase 2 E-Invoicing Compliant</span>
            </div>
            <h2 class="fw-extrabold text-dark mt-2 mb-0">لوحة تحكم إدارة أنظمة التكييف والكهرباء والفوترة الإلكترونية</h2>
            <p class="text-muted small m-0">إدارة الشركة، الفواتير الضريبية (ZATCA)، العملاء، الفنيين، الصلاحيات، وإعدادات الرقم التجاري والعنوان الوطني.</p>
        </div>
        <div class="d-flex gap-2 mt-3 mt-md-0">
            <button class="btn btn-outline-secondary rounded-3" onclick="location.reload();"><i class="bi bi-arrow-clockwise me-1"></i> تحديث البيانات</button>
            <a href="<?= Url::to(['/site/index']) ?>" class="btn btn-accent text-white rounded-3"><i class="bi bi-globe me-1"></i> عرض الموقع المباشر</a>
        </div>
    </div>

    <!-- Navigation Tabs for Modules -->
    <ul class="nav nav-pills mb-4 gap-2 bg-white p-2 rounded-4 border shadow-sm" id="erpTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active fw-bold rounded-3" id="superadmin-tab" data-bs-toggle="tab" data-bs-target="#superadmin" type="button" role="tab"><i class="bi bi-shield-lock-fill text-danger me-2"></i>لوحة التحكم العليا (SuperAdmin Console)</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link fw-bold rounded-3" id="dispatch-tab" data-bs-toggle="tab" data-bs-target="#dispatch" type="button" role="tab"><i class="bi bi-speedometer2 me-2"></i>التوزيع والمربط الميداني</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link fw-bold rounded-3" id="zatca-tab" data-bs-toggle="tab" data-bs-target="#zatca" type="button" role="tab"><i class="bi bi-qr-code-scan me-2"></i>الفواتير الإلكترونية (ZATCA)</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link fw-bold rounded-3" id="customers-tab" data-bs-toggle="tab" data-bs-target="#customers" type="button" role="tab"><i class="bi bi-people-fill me-2"></i>سجلات العملاء والخدمات</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link fw-bold rounded-3" id="users-tab" data-bs-toggle="tab" data-bs-target="#users" type="button" role="tab"><i class="bi bi-person-badge-fill me-2"></i>المستخدمون والصلاحيات (RBAC)</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link fw-bold rounded-3" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings" type="button" role="tab"><i class="bi bi-gear-wide-connected me-2"></i>إعدادات الشركة والرقم الضريبي</button>
        </li>
    </ul>

    <div class="tab-content" id="erpTabContent">

        <!-- TAB 0: SuperAdmin Executive Command Center -->
        <div class="tab-pane fade show active" id="superadmin" role="tabpanel">
            <!-- Executive Metrics -->
            <div class="row g-4 mb-4">
                <div class="col-xl-3 col-md-6">
                    <div class="card border-0 shadow-lg rounded-4 bg-dark text-white p-4 position-relative overflow-hidden">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="text-white-50 extra-small fw-bold text-uppercase">إجمالي الإيرادات الشهرية</div>
                                <div class="display-6 fw-extrabold text-warning">148,950 ر.س</div>
                                <div class="text-success extra-small"><i class="bi bi-arrow-up-right me-1"></i> +32.4% زيادة سنوية</div>
                            </div>
                            <div class="p-3 bg-warning bg-opacity-20 text-warning rounded-4 fs-2">
                                <i class="bi bi-currency-dollar"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="card border-0 shadow-lg rounded-4 bg-primary text-white p-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="text-white-50 extra-small fw-bold text-uppercase">معدل تحويل إعلانات جوجل</div>
                                <div class="display-6 fw-extrabold text-white">14.8%</div>
                                <div class="text-white-50 extra-small"><i class="bi bi-bullseye me-1"></i> 240 زيارة / 35 طلب</div>
                            </div>
                            <div class="p-3 bg-white bg-opacity-20 text-white rounded-4 fs-2">
                                <i class="bi bi-google"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="card border-0 shadow-lg rounded-4 bg-success text-white p-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="text-white-50 extra-small fw-bold text-uppercase">حالة مطابقة ZATCA هيئة الزكاة</div>
                                <div class="display-6 fw-extrabold text-white">100%</div>
                                <div class="text-white-50 extra-small"><i class="bi bi-check-all me-1"></i> Phase 2 Active</div>
                            </div>
                            <div class="p-3 bg-white bg-opacity-20 text-white rounded-4 fs-2">
                                <i class="bi bi-shield-check"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="card border-0 shadow-lg rounded-4 bg-dark text-white p-4 border border-secondary">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="text-white-50 extra-small fw-bold text-uppercase">الفنيين الميدانيين النشطين</div>
                                <div class="display-6 fw-extrabold text-info">16 فني</div>
                                <div class="text-info extra-small"><i class="bi bi-geo-fill me-1"></i> GPS Live Track</div>
                            </div>
                            <div class="p-3 bg-info bg-opacity-20 text-info rounded-4 fs-2">
                                <i class="bi bi-person-workspace"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Executive Quick Controls & System Health -->
            <div class="row g-4 mb-4">
                <div class="col-lg-8">
                    <div class="card border-0 shadow-sm rounded-4 bg-white p-4">
                        <div class="d-flex justify-content-between align-items-center border-bottom pb-3 mb-3">
                            <h5 class="fw-bold text-dark m-0"><i class="bi bi-sliders text-danger me-2"></i>تحكم النظام والتنبيهات المباشرة (System Control)</h5>
                            <span class="badge bg-danger">SuperAdmin Mode</span>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="p-3 bg-light rounded-3 border">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="fw-bold text-dark">حالة الربط المباشر مع ZATCA</span>
                                        <span class="badge bg-success">Online</span>
                                    </div>
                                    <p class="text-muted extra-small m-0">تأكيد اتصال الخادم بشبكة هيئة الزكاة والضريبة والجمارك لتوليد رمز QR مشفر لحظياً.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-3 bg-light rounded-3 border">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="fw-bold text-dark">مربط إعلانات جوجل Conversion Pixel</span>
                                        <span class="badge bg-primary">Active</span>
                                    </div>
                                    <p class="text-muted extra-small m-0">يتم إرسال أحداث التحويل (Form Submit & Phone Call) فوراً إلى حساب Google Ads.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card border-0 shadow-sm rounded-4 bg-white p-4">
                        <h5 class="fw-bold text-dark mb-3"><i class="bi bi-lightning-charge-fill text-warning me-2"></i>إجراءات الإدارة السريعة</h5>
                        <div class="d-grid gap-2">
                            <button class="btn btn-outline-danger fw-bold rounded-3 text-start" onclick="alert('توليد تقرير المبيعات الضريبي الشامل ZATCA');"><i class="bi bi-file-earmark-pdf me-2"></i>تصدير التقرير الضريبي النهائي</button>
                            <button class="btn btn-outline-primary fw-bold rounded-3 text-start" onclick="alert('جار تنظيف وتفريغ الذاكرة المؤقتة Cache');"><i class="bi bi-arrow-repeat me-2"></i>تحديث وتفريغ الذاكرة (Flush Cache)</button>
                            <button class="btn btn-outline-dark fw-bold rounded-3 text-start" onclick="alert('نسخ احتياطي لقاعدة البيانات والسجلات');"><i class="bi bi-database-check me-2"></i>إنشاء نسخة احتياطية للبيانات (Backup)</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- TAB 1: Dispatch & Live Console -->
        <div class="tab-pane fade" id="dispatch" role="tabpanel">
            <!-- Stat Cards -->
            <div class="row g-3 mb-4">
                <div class="col-xl-3 col-md-6">
                    <div class="card border-0 shadow-sm rounded-4 bg-white p-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="text-muted small fw-bold uppercase">طلبات اليوم (Leads)</div>
                                <div class="display-6 fw-extrabold text-dark">18</div>
                                <div class="text-success extra-small"><i class="bi bi-graph-up-arrow me-1"></i> +24% من إعلانات جوجل</div>
                            </div>
                            <div class="p-3 bg-primary bg-opacity-10 text-primary rounded-4 fs-3">
                                <i class="bi bi-person-lines-fill"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="card border-0 shadow-sm rounded-4 bg-white p-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="text-muted small fw-bold uppercase">أعمال الصيانة النشطة</div>
                                <div class="display-6 fw-extrabold text-dark">12</div>
                                <div class="text-info extra-small"><i class="bi bi-truck me-1"></i> 8 فنيين في الميدان</div>
                            </div>
                            <div class="p-3 bg-warning bg-opacity-10 text-warning rounded-4 fs-3">
                                <i class="bi bi-tools"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="card border-0 shadow-sm rounded-4 bg-white p-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="text-muted small fw-bold uppercase">مخزون الفريون وقطع الغيار</div>
                                <div class="display-6 fw-extrabold text-dark">342</div>
                                <div class="text-success extra-small"><i class="bi bi-check-circle me-1"></i> جاهزية فريون R410A / R32</div>
                            </div>
                            <div class="p-3 bg-success bg-opacity-10 text-success rounded-4 fs-3">
                                <i class="bi bi-box-seam-fill"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="card border-0 shadow-sm rounded-4 bg-white p-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="text-muted small fw-bold uppercase">الفواتير المفوترة (ZATCA)</div>
                                <div class="display-6 fw-extrabold text-dark">48,250 ر.س</div>
                                <div class="text-primary extra-small"><i class="bi bi-shield-check me-1"></i> 98% مدفوعة إلكترونياً</div>
                            </div>
                            <div class="p-3 bg-info bg-opacity-10 text-info rounded-4 fs-3">
                                <i class="bi bi-cash-stack"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Core ERP Tables: Jobs & Customer Leads -->
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="card border-0 shadow-sm rounded-4 bg-white overflow-hidden">
                        <div class="card-header bg-white py-3 px-4 d-flex justify-content-between align-items-center border-bottom">
                            <h5 class="m-0 fw-bold text-dark"><i class="bi bi-wrench-adjustable me-2 text-primary"></i>مركز توجيه الفنيين الميداني</h5>
                            <span class="badge bg-primary-subtle text-primary">تحديث مباشر</span>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="bg-light">
                                    <tr>
                                        <th>رقم أمر العمل</th>
                                        <th>العميل والموقع</th>
                                        <th>نوع الجهاز والمشكلة</th>
                                        <th>الفني المسؤول</th>
                                        <th>الحالة</th>
                                        <th>الإجراء</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($jobs as $job): ?>
                                        <tr>
                                            <td><strong class="text-primary"><?= Html::encode($job['id']) ?></strong></td>
                                            <td>
                                                <div class="fw-bold text-dark"><?= Html::encode($job['customer']) ?></div>
                                                <div class="text-muted extra-small"><i class="bi bi-geo-alt"></i> <?= Html::encode($job['location']) ?></div>
                                            </td>
                                            <td>
                                                <span class="badge bg-dark-subtle text-dark"><?= Html::encode($job['unit']) ?></span>
                                                <div class="extra-small text-muted"><?= Html::encode($job['issue']) ?></div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width:28px; height:28px; font-size:11px;">
                                                        <?= strtoupper(substr($job['tech'], 0, 2)) ?>
                                                    </div>
                                                    <span class="small font-weight-bold"><?= Html::encode($job['tech']) ?></span>
                                                </div>
                                            </td>
                                            <td>
                                                <?php 
                                                $badge = 'bg-secondary';
                                                if ($job['status'] == 'In Progress') $badge = 'bg-warning text-dark';
                                                if ($job['status'] == 'Completed') $badge = 'bg-success';
                                                if ($job['status'] == 'Dispatched') $badge = 'bg-info text-dark';
                                                ?>
                                                <span class="badge <?= $badge ?> rounded-pill px-3 py-2"><?= Html::encode($job['status']) ?></span>
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-secondary rounded-pill px-3" onclick="alert('تفاصيل أمر العمل <?= Html::encode($job['id']) ?>');">إدارة</button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card border-0 shadow-sm rounded-4 bg-white overflow-hidden">
                        <div class="card-header bg-white py-3 px-4 d-flex justify-content-between align-items-center border-bottom">
                            <h5 class="m-0 fw-bold text-dark"><i class="bi bi-lightning-fill me-2 text-warning"></i>طلبات العملاء الجدد</h5>
                            <span class="badge bg-danger">Google Ads</span>
                        </div>
                        <div class="card-body p-0">
                            <div class="list-group list-group-flush">
                                <?php foreach ($leads as $lead): ?>
                                    <div class="list-group-item p-3">
                                        <div class="d-flex justify-content-between align-items-center mb-1">
                                            <span class="fw-bold text-dark"><?= Html::encode($lead['name']) ?></span>
                                            <span class="badge bg-light text-dark border"><?= Html::encode($lead['time']) ?></span>
                                        </div>
                                        <div class="text-primary small fw-bold mb-1"><i class="bi bi-telephone"></i> <?= Html::encode($lead['phone']) ?></div>
                                        <div class="d-flex justify-content-between text-muted extra-small">
                                            <span>الجهاز: <strong><?= Html::encode($lead['unit']) ?></strong></span>
                                            <span>المنطقة: <?= Html::encode($lead['location']) ?></span>
                                        </div>
                                        <div class="mt-2">
                                            <button class="btn btn-sm btn-success w-100 py-1" onclick="alert('تم تحويل الطلب للفني لـ <?= Html::encode($lead['name']) ?>');">
                                                <i class="bi bi-plus-circle me-1"></i> تعيين فني
                                            </button>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- TAB 2: ZATCA E-Invoices -->
        <div class="tab-pane fade" id="zatca" role="tabpanel">
            <div class="card border-0 shadow-sm rounded-4 bg-white p-4">
                <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-3">
                    <div>
                        <h4 class="fw-bold text-dark m-0"><i class="bi bi-qr-code text-success me-2"></i>الفواتير الضريبية المبسطة والإلكترونية (ZATCA Compliant)</h4>
                        <p class="text-muted small mb-0">إصدار فواتير متوافقة مع المرحلة الثانية لهيئة الزكاة والضريبة والجمارك (توليد رمز QR مشفر وصيغة XML/PDF).</p>
                    </div>
                    <button class="btn btn-success rounded-3 fw-bold" onclick="alert('جار إنشاء فاتورة ضريبية جديدة متوافقة مع ZATCA');"><i class="bi bi-plus-lg me-1"></i> إصدار فاتورة ضريبية جديدة</button>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="bg-light">
                            <tr>
                                <th>رقم الفاتورة</th>
                                <th>اسم العميل</th>
                                <th>الخدمة / الجهاز</th>
                                <th>المبلغ (غير شامل)</th>
                                <th>ضريبة القيمة المضافة (15%)</th>
                                <th>الإجمالي الصافي</th>
                                <th>رمز QR وشفرة ZATCA</th>
                                <th>الإجراء</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>INV-2026-00891</strong></td>
                                <td>سعد العتيبي</td>
                                <td>غسيل نفاث 3 مكيفات سبلت + شحن فريون R410A</td>
                                <td>450.00 ر.س</td>
                                <td>67.50 ر.س</td>
                                <td class="fw-bold text-success">517.50 ر.س</td>
                                <td><span class="badge bg-success-subtle text-success"><i class="bi bi-qr-code me-1"></i> QR Compliant</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary rounded-2 me-1"><i class="bi bi-printer me-1"></i> طباعة PDF</button>
                                    <button class="btn btn-sm btn-outline-secondary rounded-2"><i class="bi bi-file-earmark-code me-1"></i> XML</button>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>INV-2026-00892</strong></td>
                                <td>شركة الأفق العقارية</td>
                                <td>تركيب وتوريد 2 مكيف كاسيت 4 طن (LG Inverter)</td>
                                <td>11,200.00 ر.س</td>
                                <td>1,680.00 ر.س</td>
                                <td class="fw-bold text-success">12,880.00 ر.س</td>
                                <td><span class="badge bg-success-subtle text-success"><i class="bi bi-qr-code me-1"></i> QR Compliant</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary rounded-2 me-1"><i class="bi bi-printer me-1"></i> طباعة PDF</button>
                                    <button class="btn btn-sm btn-outline-secondary rounded-2"><i class="bi bi-file-earmark-code me-1"></i> XML</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- TAB 3: Customers & Records -->
        <div class="tab-pane fade" id="customers" role="tabpanel">
            <div class="card border-0 shadow-sm rounded-4 bg-white p-4">
                <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-3">
                    <div>
                        <h4 class="fw-bold text-dark m-0"><i class="bi bi-person-lines-fill text-primary me-2"></i>سجلات العملاء والعناوين الوطنية</h4>
                        <p class="text-muted small mb-0">إدارة قاعدة بيانات عملاء المنازل والشركات وسجل أجهزة التكييف الخاصة بهم.</p>
                    </div>
                    <button class="btn btn-primary rounded-3 fw-bold" onclick="alert('إضافة عميل جديد');"><i class="bi bi-person-plus me-1"></i> إضافة عميل جديد</button>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="bg-light">
                            <tr>
                                <th>معرف العميل</th>
                                <th>اسم العميل</th>
                                <th>رقم الجوال</th>
                                <th>العنوان الوطني والحي</th>
                                <th>الأجهزة المسجلة</th>
                                <th>تاريخ آخر صيانة</th>
                                <th>الإجراء</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#CUST-1042</td>
                                <td>عبدالله الشهري</td>
                                <td>0551234567</td>
                                <td>الرياض - حي النخيل - شارع التخصصي (7892)</td>
                                <td><span class="badge bg-info text-dark">4 سبلت + 1 دولابي</span></td>
                                <td>15 مايو 2026</td>
                                <td>
                                    <button class="btn btn-sm btn-outline-dark rounded-pill px-3">السجل الكامل</button>
                                </td>
                            </tr>
                            <tr>
                                <td>#CUST-1043</td>
                                <td>م. نورة السبيعي</td>
                                <td>0509876543</td>
                                <td>جدة - حي الشاطئ - فيلا 12</td>
                                <td><span class="badge bg-warning text-dark">2 كاسيت + 1 مركزي</span></td>
                                <td>01 يونيو 2026</td>
                                <td>
                                    <button class="btn btn-sm btn-outline-dark rounded-pill px-3">السجل الكامل</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- TAB 4: Users & Permissions (RBAC) -->
        <div class="tab-pane fade" id="users" role="tabpanel">
            <div class="card border-0 shadow-sm rounded-4 bg-white p-4">
                <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-3">
                    <div>
                        <h4 class="fw-bold text-dark m-0"><i class="bi bi-shield-lock-fill text-danger me-2"></i>إدارة المستخدمين وصلاحيات النظام (RBAC)</h4>
                        <p class="text-muted small mb-0">تعيين الأدوار والصلاحيات (مدير النظام، مسؤول الفواتير، المشرف الميداني، الفني).</p>
                    </div>
                    <button class="btn btn-accent text-white rounded-3 fw-bold" onclick="alert('إضافة مستخدم جديد');"><i class="bi bi-person-plus me-1"></i> إضافة موظف / فني</button>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="bg-light">
                            <tr>
                                <th>اسم الموظف</th>
                                <th>اسم المستخدم / البريد</th>
                                <th>الدور الوظيفي (Role)</th>
                                <th>الصلاحيات الممنوحة</th>
                                <th>حالة الحساب</th>
                                <th>الإجراء</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>خليل السعيد</td>
                                <td>admin@climatetech.com</td>
                                <td><span class="badge bg-danger">Super Admin</span></td>
                                <td>صلاحيات كاملة (إعدادات، فواتير ZATCA، مستخدمين)</td>
                                <td><span class="badge bg-success">نشط</span></td>
                                <td><button class="btn btn-sm btn-outline-secondary">تعديل</button></td>
                            </tr>
                            <tr>
                                <td>أليكس ريفيرا</td>
                                <td>alex.tech@climatetech.com</td>
                                <td><span class="badge bg-info text-dark">Field Technician</span></td>
                                <td>عرض وإغلاق أومر العمل الميدانية فقط</td>
                                <td><span class="badge bg-success">نشط</span></td>
                                <td><button class="btn btn-sm btn-outline-secondary">تعديل</button></td>
                            </tr>
                            <tr>
                                <td>ريم الشمري</td>
                                <td>billing@climatetech.com</td>
                                <td><span class="badge bg-warning text-dark">Accountant</span></td>
                                <td>إصدار وتصديق فواتير ZATCA والتقارير المالية</td>
                                <td><span class="badge bg-success">نشط</span></td>
                                <td><button class="btn btn-sm btn-outline-secondary">تعديل</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- TAB 5: Company Settings, VAT, CR & National Address -->
        <div class="tab-pane fade" id="settings" role="tabpanel">
            <div class="card border-0 shadow-sm rounded-4 bg-white p-4">
                <div class="border-bottom pb-3 mb-4">
                    <h4 class="fw-bold text-dark m-0"><i class="bi bi-building-gear text-primary me-2"></i>إعدادات بيانات الشركة والرقم الضريبي والسجل التجاري</h4>
                    <p class="text-muted small mb-0">هذه البيانات تُستخدم تلقائياً في ترويسة الفواتير الإلكترونية (ZATCA) وعروض الأسعار ومُعرّفات إعلانات جوجل.</p>
                </div>

                <form id="company-settings-form" onsubmit="event.preventDefault(); alert('تم حفظ إعدادات الشركة والسجل التجاري والواتساب بنجاح!');">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label fw-bold text-dark">اسم الشركة / المؤسسة الرسمي <span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-lg" value="شركة كلايميت تك لأنظمة التكييف والكهرباء المحدودة" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-bold text-dark">رقم السجل التجاري (CR Number) <span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-lg" value="1010889421" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-bold text-dark">رقم التسجيل الضريبي (VAT Number - 15 رقم) <span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-lg" value="310488942100003" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-bold text-dark">رقم التلخيص والترخيص المعتمد</label>
                            <input type="text" class="form-control form-control-lg" value="HVAC-EL-2026-8894">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-bold text-dark">رقم الهاتف الرئيسي للاتصال (Calling Widget Number) <span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-lg" value="(800) 555-4822" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-bold text-dark">رقم الواتساب المباشر للعملاء (WhatsApp Widget) <span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-lg" value="+966500000000" placeholder="+966XXXXXXXXX" required>
                        </div>

                        <div class="col-12">
                            <h5 class="fw-bold text-dark mt-3 mb-2"><i class="bi bi-map me-2 text-danger"></i>العنوان الوطني الرسمي (National Address Details)</h5>
                        </div>

                        <div class="col-md-3">
                            <label class="form-label fw-bold small">رقم المبنى (Building No)</label>
                            <input type="text" class="form-control" value="7420">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label fw-bold small">اسم الشارع (Street Name)</label>
                            <input type="text" class="form-control" value="طريق الملك فهد الفرعي">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label fw-bold small">الحي (District)</label>
                            <input type="text" class="form-control" value="حي العليا">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label fw-bold small">المدينة والرمز البريدي (City & Zip)</label>
                            <input type="text" class="form-control" value="الرياض 12214">
                        </div>

                        <div class="col-md-3">
                            <label class="form-label fw-bold small">الرقم الإضافي (Additional No)</label>
                            <input type="text" class="form-control" value="3892">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label fw-bold small">الرمز الإضافي / الوحدة</label>
                            <input type="text" class="form-control" value="مكتب 402">
                        </div>
                    </div>

                    <div class="mt-4 pt-3 border-top d-flex justify-content-end gap-2">
                        <button type="reset" class="btn btn-outline-secondary px-4">إلغاء التغييرات</button>
                        <button type="submit" class="btn btn-primary px-5 fw-bold"><i class="bi bi-floppy me-1"></i> حفظ إعدادات الشركة والفواتير</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
