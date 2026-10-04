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
                <span class="badge bg-success"><i class="bi bi-shield-check me-1"></i> <?= $isArabic ? 'مطابق لـ ZATCA المرحلة الثانية' : 'ZATCA Phase 2 Compliant' ?></span>
            </div>
            <h2 class="fw-extrabold text-dark mt-2 mb-0">
                <?= $isArabic ? 'لوحة تحكم إدارة أنظمة التكييف والكهرباء والفوترة الإلكترونية' : 'HVAC & Electrical Operations & E-Invoicing ERP Portal' ?>
            </h2>
            <p class="text-muted small m-0">
                <?= $isArabic ? 'إدارة الشركة، الفواتير الضريبية (ZATCA)، العملاء، الفنيين، الصلاحيات، وإعدادات الرقم التجاري والعنوان الوطني.' : 'Manage company settings, ZATCA e-invoices, customer records, field technicians, permissions, and National Address.' ?>
            </p>
        </div>
        <div class="d-flex gap-2 mt-3 mt-md-0">
            <button class="btn btn-outline-secondary rounded-3" onclick="location.reload();"><i class="bi bi-arrow-clockwise me-1"></i> <?= $isArabic ? 'تحديث البيانات' : 'Refresh Data' ?></button>
            <a href="<?= Url::to(['/site/index']) ?>" class="btn btn-accent text-white rounded-3"><i class="bi bi-globe me-1"></i> <?= $isArabic ? 'عرض الموقع المباشر' : 'View Live Website' ?></a>
        </div>
    </div>

    <!-- Navigation Tabs for Modules -->
    <ul class="nav nav-pills mb-4 gap-2 bg-white p-2 rounded-4 border shadow-sm" id="erpTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active fw-bold rounded-3" id="superadmin-tab" data-bs-toggle="tab" data-bs-target="#superadmin" type="button" role="tab">
                <i class="bi bi-shield-lock-fill text-danger me-2"></i><?= $isArabic ? 'لوحة التحكم العليا (SuperAdmin Console)' : 'SuperAdmin Executive Console' ?>
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link fw-bold rounded-3" id="dispatch-tab" data-bs-toggle="tab" data-bs-target="#dispatch" type="button" role="tab">
                <i class="bi bi-speedometer2 me-2"></i><?= $isArabic ? 'التوزيع والمربط الميداني' : 'Field Technician Dispatch' ?>
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link fw-bold rounded-3" id="zatca-tab" data-bs-toggle="tab" data-bs-target="#zatca" type="button" role="tab">
                <i class="bi bi-qr-code-scan me-2"></i><?= $isArabic ? 'الفواتير الإلكترونية (ZATCA)' : 'ZATCA E-Invoicing' ?>
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link fw-bold rounded-3" id="customers-tab" data-bs-toggle="tab" data-bs-target="#customers" type="button" role="tab">
                <i class="bi bi-people-fill me-2"></i><?= $isArabic ? 'سجلات العملاء والعناوين' : 'Customer Records & Addresses' ?>
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link fw-bold rounded-3" id="users-tab" data-bs-toggle="tab" data-bs-target="#users" type="button" role="tab">
                <i class="bi bi-person-badge-fill me-2"></i><?= $isArabic ? 'المستخدمون والصلاحيات (RBAC)' : 'Users & Permissions (RBAC)' ?>
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link fw-bold rounded-3" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings" type="button" role="tab">
                <i class="bi bi-gear-wide-connected me-2"></i><?= $isArabic ? 'إعدادات الشركة والرقم الضريبي' : 'Company & Tax Settings' ?>
            </button>
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
                                <div class="text-white-50 extra-small fw-bold text-uppercase"><?= $isArabic ? 'إجمالي الإيرادات الشهرية' : 'Total Monthly Revenue' ?></div>
                                <div class="display-6 fw-extrabold text-warning">148,950 <?= $isArabic ? 'ر.س' : 'SAR' ?></div>
                                <div class="text-success extra-small"><i class="bi bi-arrow-up-right me-1"></i> <?= $isArabic ? '+32.4% زيادة سنوية' : '+32.4% YoY Growth' ?></div>
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
                                <div class="text-white-50 extra-small fw-bold text-uppercase"><?= $isArabic ? 'معدل تحويل إعلانات جوجل' : 'Google Ads Conv. Rate' ?></div>
                                <div class="display-6 fw-extrabold text-white">14.8%</div>
                                <div class="text-white-50 extra-small"><i class="bi bi-bullseye me-1"></i> <?= $isArabic ? '240 زيارة / 35 طلب' : '240 Visits / 35 Leads' ?></div>
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
                                <div class="text-white-50 extra-small fw-bold text-uppercase"><?= $isArabic ? 'حالة مطابقة ZATCA هيئة الزكاة' : 'ZATCA Compliance Status' ?></div>
                                <div class="display-6 fw-extrabold text-white">100%</div>
                                <div class="text-white-50 extra-small"><i class="bi bi-check-all me-1"></i> <?= $isArabic ? 'المرحلة الثانية نشطة' : 'Phase 2 Active' ?></div>
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
                                <div class="text-white-50 extra-small fw-bold text-uppercase"><?= $isArabic ? 'الفنيين الميدانيين النشطين' : 'Active Field Technicians' ?></div>
                                <div class="display-6 fw-extrabold text-info"><?= $isArabic ? '16 فني' : '16 Techs' ?></div>
                                <div class="text-info extra-small"><i class="bi bi-geo-fill me-1"></i> <?= $isArabic ? 'تتبع GPS مباشر' : 'GPS Live Track' ?></div>
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
                            <h5 class="fw-bold text-dark m-0"><i class="bi bi-sliders text-danger me-2"></i><?= $isArabic ? 'تحكم النظام والتنبيهات المباشرة (System Control)' : 'System Control & Live Signals' ?></h5>
                            <span class="badge bg-danger">SuperAdmin Mode</span>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="p-3 bg-light rounded-3 border">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="fw-bold text-dark"><?= $isArabic ? 'حالة الربط المباشر مع ZATCA' : 'ZATCA Direct API Connection' ?></span>
                                        <span class="badge bg-success">Online</span>
                                    </div>
                                    <p class="text-muted extra-small m-0"><?= $isArabic ? 'تأكيد اتصال الخادم بشبكة هيئة الزكاة والضريبة والجمارك لتوليد رمز QR مشفر لحظياً.' : 'Server connection verified with ZATCA network for instant encrypted QR generation.' ?></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-3 bg-light rounded-3 border">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="fw-bold text-dark"><?= $isArabic ? 'مربط إعلانات جوجل Conversion Pixel' : 'Google Ads Conversion Pixel' ?></span>
                                        <span class="badge bg-primary">Active</span>
                                    </div>
                                    <p class="text-muted extra-small m-0"><?= $isArabic ? 'يتم إرسال أحداث التحويل (Form Submit & Phone Call) فوراً إلى حساب Google Ads.' : 'Conversion events (Form Submit & Calls) synced directly to Google Ads.' ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card border-0 shadow-sm rounded-4 bg-white p-4">
                        <h5 class="fw-bold text-dark mb-3"><i class="bi bi-lightning-charge-fill text-warning me-2"></i><?= $isArabic ? 'إجراءات الإدارة السريعة' : 'Executive Quick Actions' ?></h5>
                        <div class="d-grid gap-2">
                            <button class="btn btn-outline-danger fw-bold rounded-3 text-start" onclick="alert('<?= $isArabic ? 'تصدير التقرير الضريبي النهائي' : 'Exporting ZATCA Tax Report' ?>');"><i class="bi bi-file-earmark-pdf me-2"></i><?= $isArabic ? 'تصدير التقرير الضريبي النهائي' : 'Export ZATCA Tax Report' ?></button>
                            <button class="btn btn-outline-primary fw-bold rounded-3 text-start" onclick="alert('<?= $isArabic ? 'تحديث وتفريغ الذاكرة' : 'Flushing application cache' ?>');"><i class="bi bi-arrow-repeat me-2"></i><?= $isArabic ? 'تحديث وتفريغ الذاكرة (Flush Cache)' : 'Flush App Cache' ?></button>
                            <button class="btn btn-outline-dark fw-bold rounded-3 text-start" onclick="alert('<?= $isArabic ? 'إنشاء نسخة احتياطية' : 'Creating database backup' ?>');"><i class="bi bi-database-check me-2"></i><?= $isArabic ? 'إنشاء نسخة احتياطية للبيانات (Backup)' : 'Create System Backup' ?></button>
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
                                <div class="text-muted small fw-bold text-uppercase"><?= $isArabic ? 'طلبات اليوم (Leads)' : 'Today\'s Leads' ?></div>
                                <div class="display-6 fw-extrabold text-dark">18</div>
                                <div class="text-success extra-small"><i class="bi bi-graph-up-arrow me-1"></i> <?= $isArabic ? '+24% من إعلانات جوجل' : '+24% from Google Ads' ?></div>
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
                                <div class="text-muted small fw-bold text-uppercase"><?= $isArabic ? 'أعمال الصيانة النشطة' : 'Active Maintenance Jobs' ?></div>
                                <div class="display-6 fw-extrabold text-dark">12</div>
                                <div class="text-info extra-small"><i class="bi bi-truck me-1"></i> <?= $isArabic ? '8 فنيين في الميدان' : '8 Techs in Field' ?></div>
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
                                <div class="text-muted small fw-bold text-uppercase"><?= $isArabic ? 'مخزون الفريون وقطع الغيار' : 'Gas & Spare Parts Inventory' ?></div>
                                <div class="display-6 fw-extrabold text-dark">342</div>
                                <div class="text-success extra-small"><i class="bi bi-check-circle me-1"></i> <?= $isArabic ? 'جاهزية فريون R410A / R32' : 'R410A / R32 Gas Stocked' ?></div>
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
                                <div class="text-muted small fw-bold text-uppercase"><?= $isArabic ? 'الفواتير المفوترة (ZATCA)' : 'Invoiced Total (ZATCA)' ?></div>
                                <div class="display-6 fw-extrabold text-dark">48,250 <?= $isArabic ? 'ر.س' : 'SAR' ?></div>
                                <div class="text-primary extra-small"><i class="bi bi-shield-check me-1"></i> <?= $isArabic ? '98% مدفوعة إلكترونياً' : '98% Paid Electronically' ?></div>
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
                            <h5 class="m-0 fw-bold text-dark"><i class="bi bi-wrench-adjustable me-2 text-primary"></i><?= $isArabic ? 'مركز توجيه الفنيين الميداني' : 'Field Technician Dispatch Center' ?></h5>
                            <span class="badge bg-primary-subtle text-primary"><?= $isArabic ? 'تحديث مباشر' : 'Live Sync' ?></span>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="bg-light">
                                    <tr>
                                        <th><?= $isArabic ? 'رقم أمر العمل' : 'Work Order #' ?></th>
                                        <th><?= $isArabic ? 'العميل والموقع' : 'Customer & Location' ?></th>
                                        <th><?= $isArabic ? 'نوع الجهاز والمشكلة' : 'Unit & Issue' ?></th>
                                        <th><?= $isArabic ? 'الفني المسؤول' : 'Assigned Technician' ?></th>
                                        <th><?= $isArabic ? 'الحالة' : 'Status' ?></th>
                                        <th><?= $isArabic ? 'الإجراء' : 'Action' ?></th>
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
                                                if ($job['status'] == 'In Progress' || $job['status'] == 'قيد التنفيذ') $badge = 'bg-warning text-dark';
                                                if ($job['status'] == 'Completed' || $job['status'] == 'مكتمل') $badge = 'bg-success';
                                                if ($job['status'] == 'Dispatched' || $job['status'] == 'تم التوجيه') $badge = 'bg-info text-dark';
                                                ?>
                                                <span class="badge <?= $badge ?> rounded-pill px-3 py-2"><?= Html::encode($job['status']) ?></span>
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-secondary rounded-pill px-3" onclick="alert('<?= $isArabic ? 'تفاصيل أمر العمل' : 'Work Order Details' ?> <?= Html::encode($job['id']) ?>');"><?= $isArabic ? 'إدارة' : 'Manage' ?></button>
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
                            <h5 class="m-0 fw-bold text-dark"><i class="bi bi-lightning-fill me-2 text-warning"></i><?= $isArabic ? 'طلبات العملاء الجدد' : 'Incoming Customer Leads' ?></h5>
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
                                            <span><?= $isArabic ? 'الجهاز' : 'Unit' ?>: <strong><?= Html::encode($lead['unit']) ?></strong></span>
                                            <span><?= $isArabic ? 'المنطقة' : 'Area' ?>: <?= Html::encode($lead['location']) ?></span>
                                        </div>
                                        <div class="mt-2">
                                            <button class="btn btn-sm btn-success w-100 py-1" onclick="alert('<?= $isArabic ? 'تم تحويل الطلب للفني لـ' : 'Lead assigned to technician for' ?> <?= Html::encode($lead['name']) ?>');">
                                                <i class="bi bi-plus-circle me-1"></i> <?= $isArabic ? 'تعيين فني' : 'Assign Tech' ?>
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
                        <h4 class="fw-bold text-dark m-0"><i class="bi bi-qr-code text-success me-2"></i><?= $isArabic ? 'الفواتير الضريبية المبسطة والإلكترونية (ZATCA Compliant)' : 'ZATCA Phase 2 E-Invoices & Tax Receipts' ?></h4>
                        <p class="text-muted small mb-0"><?= $isArabic ? 'إصدار فواتير متوافقة مع المرحلة الثانية لهيئة الزكاة والضريبة والجمارك (توليد رمز QR مشفر وصيغة XML/PDF).' : 'Issue phase-2 compliant tax e-invoices with cryptographic QR & XML/PDF generation.' ?></p>
                    </div>
                    <button class="btn btn-success rounded-3 fw-bold" onclick="alert('<?= $isArabic ? 'جار إنشاء فاتورة ضريبية جديدة متوافقة مع ZATCA' : 'Creating new ZATCA tax invoice' ?>');"><i class="bi bi-plus-lg me-1"></i> <?= $isArabic ? 'إصدار فاتورة ضريبية جديدة' : 'Create Tax Invoice' ?></button>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="bg-light">
                            <tr>
                                <th><?= $isArabic ? 'رقم الفاتورة' : 'Invoice #' ?></th>
                                <th><?= $isArabic ? 'اسم العميل' : 'Customer Name' ?></th>
                                <th><?= $isArabic ? 'الخدمة / الجهاز' : 'Service / Equipment' ?></th>
                                <th><?= $isArabic ? 'المبلغ (غير شامل)' : 'Subtotal (Excl. VAT)' ?></th>
                                <th><?= $isArabic ? 'ضريبة القيمة المضافة (15%)' : 'VAT Amount (15%)' ?></th>
                                <th><?= $isArabic ? 'الإجمالي الصافي' : 'Total Net' ?></th>
                                <th><?= $isArabic ? 'رمز QR وشفرة ZATCA' : 'ZATCA QR Code' ?></th>
                                <th><?= $isArabic ? 'الإجراء' : 'Actions' ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>INV-2026-00891</strong></td>
                                <td><?= $isArabic ? 'سعد العتيبي' : 'Saad Al-Otaibi' ?></td>
                                <td><?= $isArabic ? 'غسيل نفاث 3 مكيفات سبلت + شحن فريون R410A' : 'Pressure Wash 3 Split ACs + R410A Gas Refill' ?></td>
                                <td>450.00 <?= $isArabic ? 'ر.س' : 'SAR' ?></td>
                                <td>67.50 <?= $isArabic ? 'ر.س' : 'SAR' ?></td>
                                <td class="fw-bold text-success">517.50 <?= $isArabic ? 'ر.س' : 'SAR' ?></td>
                                <td><span class="badge bg-success-subtle text-success"><i class="bi bi-qr-code me-1"></i> QR Compliant</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary rounded-2 me-1"><i class="bi bi-printer me-1"></i> PDF</button>
                                    <button class="btn btn-sm btn-outline-secondary rounded-2"><i class="bi bi-file-earmark-code me-1"></i> XML</button>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>INV-2026-00892</strong></td>
                                <td><?= $isArabic ? 'شركة الأفق العقارية' : 'Horizon Real Estate Co.' ?></td>
                                <td><?= $isArabic ? 'تركيب وتوريد 2 مكيف كاسيت 4 طن (LG Inverter)' : 'Supply & Install 2x 4-Ton Cassette AC (LG Inverter)' ?></td>
                                <td>11,200.00 <?= $isArabic ? 'ر.س' : 'SAR' ?></td>
                                <td>1,680.00 <?= $isArabic ? 'ر.س' : 'SAR' ?></td>
                                <td class="fw-bold text-success">12,880.00 <?= $isArabic ? 'ر.س' : 'SAR' ?></td>
                                <td><span class="badge bg-success-subtle text-success"><i class="bi bi-qr-code me-1"></i> QR Compliant</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary rounded-2 me-1"><i class="bi bi-printer me-1"></i> PDF</button>
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
                        <h4 class="fw-bold text-dark m-0"><i class="bi bi-person-lines-fill text-primary me-2"></i><?= $isArabic ? 'سجلات العملاء والعناوين الوطنية' : 'Customer Records & National Address Registry' ?></h4>
                        <p class="text-muted small mb-0"><?= $isArabic ? 'إدارة قاعدة بيانات عملاء المنازل والشركات وسجل أجهزة التكييف الخاصة بهم.' : 'Manage database of residential & commercial customers, equipped units and addresses.' ?></p>
                    </div>
                    <button class="btn btn-primary rounded-3 fw-bold" onclick="alert('<?= $isArabic ? 'إضافة عميل جديد' : 'Adding new customer' ?>');"><i class="bi bi-person-plus me-1"></i> <?= $isArabic ? 'إضافة عميل جديد' : 'Add New Customer' ?></button>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="bg-light">
                            <tr>
                                <th><?= $isArabic ? 'معرف العميل' : 'Customer ID' ?></th>
                                <th><?= $isArabic ? 'اسم العميل' : 'Customer Name' ?></th>
                                <th><?= $isArabic ? 'رقم الجوال' : 'Phone Number' ?></th>
                                <th><?= $isArabic ? 'العنوان الوطني والحي' : 'National Address & District' ?></th>
                                <th><?= $isArabic ? 'الأجهزة المسجلة' : 'Registered Units' ?></th>
                                <th><?= $isArabic ? 'تاريخ آخر صيانة' : 'Last Maintenance' ?></th>
                                <th><?= $isArabic ? 'الإجراء' : 'Action' ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#CUST-1042</td>
                                <td><?= $isArabic ? 'عبدالله الشهري' : 'Abdullah Al-Shehri' ?></td>
                                <td>0551234567</td>
                                <td><?= $isArabic ? 'الرياض - حي النخيل - شارع التخصصي (7892)' : 'Riyadh - Al-Nakheel - Takhassusi St (7892)' ?></td>
                                <td><span class="badge bg-info text-dark"><?= $isArabic ? '4 سبلت + 1 دولابي' : '4 Split + 1 Floor' ?></span></td>
                                <td><?= $isArabic ? '15 مايو 2026' : 'May 15, 2026' ?></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-dark rounded-pill px-3"><?= $isArabic ? 'السجل الكامل' : 'Full History' ?></button>
                                </td>
                            </tr>
                            <tr>
                                <td>#CUST-1043</td>
                                <td><?= $isArabic ? 'م. نورة السبيعي' : 'Eng. Noura Al-Subaie' ?></td>
                                <td>0509876543</td>
                                <td><?= $isArabic ? 'جدة - حي الشاطئ - فيلا 12' : 'Jeddah - Al-Shati - Villa 12' ?></td>
                                <td><span class="badge bg-warning text-dark"><?= $isArabic ? '2 كاسيت + 1 مركزي' : '2 Cassette + 1 Central' ?></span></td>
                                <td><?= $isArabic ? '01 يونيو 2026' : 'June 01, 2026' ?></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-dark rounded-pill px-3"><?= $isArabic ? 'السجل الكامل' : 'Full History' ?></button>
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
                        <h4 class="fw-bold text-dark m-0"><i class="bi bi-shield-lock-fill text-danger me-2"></i><?= $isArabic ? 'إدارة المستخدمين وصلاحيات النظام (RBAC)' : 'User Accounts & Role-Based Access Control (RBAC)' ?></h4>
                        <p class="text-muted small mb-0"><?= $isArabic ? 'تعيين الأدوار والصلاحيات (مدير النظام، مسؤول الفواتير، المشرف الميداني، الفني).' : 'Assign roles & permissions (Super Admin, Billing Manager, Dispatcher, Field Tech).' ?></p>
                    </div>
                    <button class="btn btn-accent text-white rounded-3 fw-bold" onclick="alert('<?= $isArabic ? 'إضافة مستخدم جديد' : 'Adding new staff user' ?>');"><i class="bi bi-person-plus me-1"></i> <?= $isArabic ? 'إضافة موظف / فني' : 'Add Staff / Tech' ?></button>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="bg-light">
                            <tr>
                                <th><?= $isArabic ? 'اسم الموظف' : 'Staff Name' ?></th>
                                <th><?= $isArabic ? 'اسم المستخدم / البريد' : 'Username / Email' ?></th>
                                <th><?= $isArabic ? 'الدور الوظيفي (Role)' : 'Assigned Role' ?></th>
                                <th><?= $isArabic ? 'الصلاحيات الممنوحة' : 'Granted Permissions' ?></th>
                                <th><?= $isArabic ? 'حالة الحساب' : 'Account Status' ?></th>
                                <th><?= $isArabic ? 'الإجراء' : 'Action' ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= $isArabic ? 'خليل السعيد' : 'Khalil Al-Saeed' ?></td>
                                <td>admin@climatetech.com</td>
                                <td><span class="badge bg-danger">Super Admin</span></td>
                                <td><?= $isArabic ? 'صلاحيات كاملة (إعدادات، فواتير ZATCA، مستخدمين)' : 'Full Root System Access (Settings, ZATCA, Users)' ?></td>
                                <td><span class="badge bg-success"><?= $isArabic ? 'نشط' : 'Active' ?></span></td>
                                <td><button class="btn btn-sm btn-outline-secondary"><?= $isArabic ? 'تعديل' : 'Edit' ?></button></td>
                            </tr>
                            <tr>
                                <td><?= $isArabic ? 'أليكس ريفيرا' : 'Alex Rivera' ?></td>
                                <td>alex.tech@climatetech.com</td>
                                <td><span class="badge bg-info text-dark">Field Technician</span></td>
                                <td><?= $isArabic ? 'عرض وإغلاق أومر العمل الميدانية فقط' : 'View & Close Field Work Orders Only' ?></td>
                                <td><span class="badge bg-success"><?= $isArabic ? 'نشط' : 'Active' ?></span></td>
                                <td><button class="btn btn-sm btn-outline-secondary"><?= $isArabic ? 'تعديل' : 'Edit' ?></button></td>
                            </tr>
                            <tr>
                                <td><?= $isArabic ? 'ريم الشمري' : 'Reem Al-Shammari' ?></td>
                                <td>billing@climatetech.com</td>
                                <td><span class="badge bg-warning text-dark">Accountant</span></td>
                                <td><?= $isArabic ? 'إصدار وتصديق فواتير ZATCA والتقارير المالية' : 'Issue & Submit ZATCA Invoices & Financial Reports' ?></td>
                                <td><span class="badge bg-success"><?= $isArabic ? 'نشط' : 'Active' ?></span></td>
                                <td><button class="btn btn-sm btn-outline-secondary"><?= $isArabic ? 'تعديل' : 'Edit' ?></button></td>
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
                    <h4 class="fw-bold text-dark m-0"><i class="bi bi-building-gear text-primary me-2"></i><?= $isArabic ? 'إعدادات بيانات الشركة والرقم الضريبي والسجل التجاري' : 'Company Info, VAT Number & Commercial Register (CR)' ?></h4>
                    <p class="text-muted small mb-0"><?= $isArabic ? 'هذه البيانات تُستخدم تلقائياً في ترويسة الفواتير الإلكترونية (ZATCA) وعروض الأسعار ومُعرّفات إعلانات جوجل.' : 'These details are automatically printed on ZATCA E-Invoices, quotes, and Google Ads metadata.' ?></p>
                </div>

                <form id="company-settings-form" onsubmit="event.preventDefault(); alert('<?= $isArabic ? 'تم حفظ إعدادات الشركة والسجل التجاري والواتساب بنجاح!' : 'Company settings, CR, VAT & WhatsApp saved successfully!' ?>');">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label fw-bold text-dark"><?= $isArabic ? 'اسم الشركة / المؤسسة الرسمي' : 'Official Registered Company Name' ?> <span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-lg" value="<?= $isArabic ? 'شركة كلايميت تك لأنظمة التكييف والكهرباء المحدودة' : 'ClimateTech Electrical & HVAC Solutions Co. Ltd.' ?>" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-bold text-dark"><?= $isArabic ? 'رقم السجل التجاري (CR Number)' : 'Commercial Registration Number (CR)' ?> <span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-lg" value="1010889421" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-bold text-dark"><?= $isArabic ? 'رقم التسجيل الضريبي (VAT Number - 15 رقم)' : 'VAT Identification Number (15 Digits)' ?> <span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-lg" value="310488942100003" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-bold text-dark"><?= $isArabic ? 'رقم الترخيص المعتمد' : 'Licensed HVAC Activity Permit #' ?></label>
                            <input type="text" class="form-control form-control-lg" value="HVAC-EL-2026-8894">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-bold text-dark"><?= $isArabic ? 'رقم الهاتف الرئيسي للاتصال (Calling Widget)' : 'Primary Hotline Number (Calling Widget)' ?> <span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-lg" value="(800) 555-4822" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-bold text-dark"><?= $isArabic ? 'رقم الواتساب المباشر للعملاء (WhatsApp Widget)' : 'Direct Customer WhatsApp Number' ?> <span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-lg" value="+966500000000" placeholder="+966XXXXXXXXX" required>
                        </div>

                        <div class="col-12">
                            <h5 class="fw-bold text-dark mt-3 mb-2"><i class="bi bi-map me-2 text-danger"></i><?= $isArabic ? 'العنوان الوطني الرسمي (National Address Details)' : 'Official National Address Details' ?></h5>
                        </div>

                        <div class="col-md-3">
                            <label class="form-label fw-bold small"><?= $isArabic ? 'رقم المبنى (Building No)' : 'Building No' ?></label>
                            <input type="text" class="form-control" value="7420">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label fw-bold small"><?= $isArabic ? 'اسم الشارع (Street Name)' : 'Street Name' ?></label>
                            <input type="text" class="form-control" value="<?= $isArabic ? 'طريق الملك فهد الفرعي' : 'King Fahd Branch Road' ?>">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label fw-bold small"><?= $isArabic ? 'الحي (District)' : 'District' ?></label>
                            <input type="text" class="form-control" value="<?= $isArabic ? 'حي العليا' : 'Al Olaya District' ?>">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label fw-bold small"><?= $isArabic ? 'المدينة والرمز البريدي (City & Zip)' : 'City & Postal Zip' ?></label>
                            <input type="text" class="form-control" value="<?= $isArabic ? 'الرياض 12214' : 'Riyadh 12214' ?>">
                        </div>

                        <div class="col-md-3">
                            <label class="form-label fw-bold small"><?= $isArabic ? 'الرقم الإضافي (Additional No)' : 'Additional No' ?></label>
                            <input type="text" class="form-control" value="3892">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label fw-bold small"><?= $isArabic ? 'الرمز الإضافي / الوحدة' : 'Unit / Suite No' ?></label>
                            <input type="text" class="form-control" value="<?= $isArabic ? 'مكتب 402' : 'Office 402' ?>">
                        </div>
                    </div>

                    <div class="mt-4 pt-3 border-top d-flex justify-content-end gap-2">
                        <button type="reset" class="btn btn-outline-secondary px-4"><?= $isArabic ? 'إلغاء التغييرات' : 'Discard Changes' ?></button>
                        <button type="submit" class="btn btn-primary px-5 fw-bold"><i class="bi bi-floppy me-1"></i> <?= $isArabic ? 'حفظ إعدادات الشركة والفواتير' : 'Save Company & Tax Settings' ?></button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var tabButtons = document.querySelectorAll('#erpTabs button[data-bs-toggle="tab"]');
    tabButtons.forEach(function(btn) {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            tabButtons.forEach(function(b) { b.classList.remove('active'); });
            this.classList.add('active');
            var targetSelector = this.getAttribute('data-bs-target');
            var tabPanes = document.querySelectorAll('#erpTabContent .tab-pane');
            tabPanes.forEach(function(pane) {
                pane.classList.remove('show', 'active');
            });
            var targetPane = document.querySelector(targetSelector);
            if (targetPane) {
                targetPane.classList.add('show', 'active');
            }
        });
    });
});
</script>
