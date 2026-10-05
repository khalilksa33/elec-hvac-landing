<?php

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'HVAC & Electrical Enterprise ERP';
$isArabic = strpos(Yii::$app->language, 'ar') === 0;

$companyNameAr = Html::encode($company['name_ar'] ?? 'شركة كلايميت تك لأنظمة التكييف والكهرباء المحدودة');
$companyNameEn = Html::encode($company['name_en'] ?? 'ClimateTech Electrical & HVAC Solutions Co. Ltd.');
$crNum = Html::encode($company['cr_number'] ?? '1010889421');
$vatNum = Html::encode($company['vat_number'] ?? '310488942100003');
$permitNum = Html::encode($company['permit_number'] ?? 'HVAC-EL-2026-8894');
$hotline = Html::encode($company['phone'] ?? '(800) 555-4822');
$waNum = Html::encode($company['whatsapp'] ?? '+966500000000');
$compEmail = Html::encode($company['email'] ?? 'hello@dynapulsar.com');

$bldg = Html::encode($company['building_no'] ?? '7420');
$streetAr = Html::encode($company['street_ar'] ?? 'طريق الملك فهد الفرعي');
$streetEn = Html::encode($company['street_en'] ?? 'King Fahd Branch Road');
$distAr = Html::encode($company['district_ar'] ?? 'حي العليا');
$distEn = Html::encode($company['district_en'] ?? 'Al Olaya District');
$cityAr = Html::encode($company['city_ar'] ?? 'الرياض 12214');
$cityEn = Html::encode($company['city_en'] ?? 'Riyadh 12214');
$addNo = Html::encode($company['additional_no'] ?? '3892');
$unitAr = Html::encode($company['unit_no_ar'] ?? 'مكتب 402');
$unitEn = Html::encode($company['unit_no_en'] ?? 'Office 402');
?>

<style>
@media print {
    html, body {
        height: auto !important;
        overflow: visible !important;
        background: #fff !important;
        margin: 0 !important;
        padding: 0 !important;
    }
    #erp-header, #erp-footer, #erpTabs, #erpTabContent, .modal-backdrop, .modal-header, .modal-footer, .no-print, header, footer, nav {
        display: none !important;
    }
    .modal {
        position: absolute !important;
        left: 0 !important;
        top: 0 !important;
        width: 100% !important;
        height: auto !important;
        display: block !important;
        overflow: visible !important;
        margin: 0 !important;
        padding: 0 !important;
        border: none !important;
        box-shadow: none !important;
        background: #fff !important;
    }
    .modal-dialog {
        max-width: 100% !important;
        width: 100% !important;
        margin: 0 !important;
        padding: 0 !important;
    }
    .modal-content {
        border: none !important;
        box-shadow: none !important;
        padding: 0 !important;
        margin: 0 !important;
        background: #fff !important;
    }
    .modal-body {
        padding: 0 !important;
        margin: 0 !important;
    }
    .printable-area {
        position: relative !important;
        width: 100% !important;
        margin: 0 !important;
        padding: 0 !important;
    }
    @page {
        size: A4 portrait;
        margin: 12mm 10mm 12mm 10mm;
    }
}
</style>

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
                                <div class="display-6 fw-extrabold text-warning" id="total-revenue-metric">148,950 <?= $isArabic ? 'ر.س' : 'SAR' ?></div>
                                <div class="text-success extra-small"><i class="bi bi-arrow-up-right me-1"></i> <?= $isArabic ? '+32.4% زيادة سنوية' : '+32.4% YoY Growth' ?></div>
                            </div>
                            <div class="p-3 bg-warning bg-opacity-20 text-warning rounded-4 fs-2">
                                <i class="bi bi-cash-coin"></i>
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

            <!-- Executive Quick Controls & Live Inquiries -->
            <div class="row g-4 mb-4">
                <div class="col-lg-8">
                    <div class="card border-0 shadow-sm rounded-4 bg-white p-4">
                        <div class="d-flex justify-content-between align-items-center border-bottom pb-3 mb-3">
                            <h5 class="fw-bold text-dark m-0"><i class="bi bi-envelope-open-fill text-primary me-2"></i><?= $isArabic ? 'استفسارات ومطلوبات العملاء الجدد (Direct Inquiries)' : 'Live Customer Inquiries & Email Sync' ?></h5>
                            <span class="badge bg-success"><i class="bi bi-check-circle me-1"></i> Sync: <?= $compEmail ?></span>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="bg-light">
                                    <tr>
                                        <th><?= $isArabic ? 'العميل' : 'Customer' ?></th>
                                        <th><?= $isArabic ? 'الجوال' : 'Phone' ?></th>
                                        <th><?= $isArabic ? 'الخدمة المطلوب' : 'Service Requested' ?></th>
                                        <th><?= $isArabic ? 'المنطقة' : 'Location' ?></th>
                                        <th><?= $isArabic ? 'الوقت' : 'Time' ?></th>
                                        <th><?= $isArabic ? 'الإجراء' : 'Action' ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($leads as $index => $lead): ?>
                                        <tr>
                                            <td><strong><?= Html::encode($lead['name']) ?></strong></td>
                                            <td class="text-primary fw-bold"><?= Html::encode($lead['phone']) ?></td>
                                            <td><span class="badge bg-info-subtle text-info border"><?= Html::encode($lead['unit']) ?></span></td>
                                            <td><small><?= Html::encode($lead['location']) ?></small></td>
                                            <td><span class="badge bg-light text-muted border"><?= Html::encode($lead['time']) ?></span></td>
                                            <td>
                                                <button class="btn btn-sm btn-success rounded-pill px-3" onclick="openAssignTechModal('<?= Html::encode(addslashes($lead['name'])) ?>', '<?= Html::encode(addslashes($lead['unit'])) ?>')">
                                                    <i class="bi bi-plus-circle me-1"></i> <?= $isArabic ? 'تعيين فني' : 'Assign Tech' ?>
                                                </button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card border-0 shadow-sm rounded-4 bg-white p-4">
                        <h5 class="fw-bold text-dark mb-3"><i class="bi bi-lightning-charge-fill text-warning me-2"></i><?= $isArabic ? 'إجراءات الإدارة السريعة' : 'Executive Quick Actions' ?></h5>
                        <div class="d-grid gap-2">
                            <button class="btn btn-outline-danger fw-bold rounded-3 text-start py-2" onclick="alert('<?= $isArabic ? 'جاري تصدير التقرير الضريبي النهائي بملف PDF متوافق مع هيئة الزكاة' : 'Exporting final ZATCA tax report PDF file...' ?>');"><i class="bi bi-file-earmark-pdf me-2"></i><?= $isArabic ? 'تصدير التقرير الضريبي النهائي' : 'Export ZATCA Tax Report' ?></button>
                            <button class="btn btn-outline-primary fw-bold rounded-3 text-start py-2" onclick="alert('<?= $isArabic ? 'تم تحديث وتفريغ الذاكرة المؤقتة (Cache Cleaned)' : 'Application cache flushed successfully!' ?>');"><i class="bi bi-arrow-repeat me-2"></i><?= $isArabic ? 'تحديث وتفريغ الذاكرة (Flush Cache)' : 'Flush App Cache' ?></button>
                            <button class="btn btn-outline-dark fw-bold rounded-3 text-start py-2" onclick="alert('<?= $isArabic ? 'تم إنشاء نسخة احتياطية مشفرة للبيانات بنجاح' : 'System encrypted database backup created successfully!' ?>');"><i class="bi bi-database-check me-2"></i><?= $isArabic ? 'إنشاء نسخة احتياطية للبيانات (Backup)' : 'Create System Backup' ?></button>
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
                                <div class="display-6 fw-extrabold text-dark"><?= count($leads) ?></div>
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
                            <table class="table table-hover align-middle mb-0" id="jobs-table">
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
                                            <button class="btn btn-sm btn-success w-100 py-1" onclick="openAssignTechModal('<?= Html::encode(addslashes($lead['name'])) ?>', '<?= Html::encode(addslashes($lead['unit'])) ?>')">
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

        <!-- TAB 2: ZATCA E-Invoices (A4 Tax Invoice Only) -->
        <div class="tab-pane fade" id="zatca" role="tabpanel">
            <div class="card border-0 shadow-sm rounded-4 bg-white p-4">
                <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-3">
                    <div>
                        <h4 class="fw-bold text-dark m-0"><i class="bi bi-qr-code text-success me-2"></i><?= $isArabic ? 'الفواتير الضريبية المبسطة والإلكترونية (ZATCA Compliant)' : 'ZATCA Phase 2 E-Invoices & Tax Receipts' ?></h4>
                        <p class="text-muted small mb-0"><?= $isArabic ? 'إصدار فواتير متوافقة مع المرحلة الثانية لهيئة الزكاة والضريبة والجمارك (توليد رمز QR مشفر وصيغة XML/PDF القياسية).' : 'Issue phase-2 compliant tax e-invoices with cryptographic QR & standard A4 PDF/XML generation.' ?></p>
                    </div>
                    <button class="btn btn-success rounded-3 fw-bold" onclick="openNewInvoiceModal();"><i class="bi bi-plus-lg me-1"></i> <?= $isArabic ? 'إصدار فاتورة ضريبية جديدة' : 'Create Tax Invoice' ?></button>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover align-middle" id="zatca-invoices-table">
                        <thead class="bg-light">
                            <tr>
                                <th><?= $isArabic ? 'رقم الفاتورة' : 'Invoice #' ?></th>
                                <th><?= $isArabic ? 'اسم العميل' : 'Customer Name' ?></th>
                                <th><?= $isArabic ? 'الخدمة / الجهاز' : 'Service / Equipment' ?></th>
                                <th><?= $isArabic ? 'المبلغ (غير شامل)' : 'Subtotal (Excl. VAT)' ?></th>
                                <th><?= $isArabic ? 'ضريبة القيمة المضافة (15%)' : 'VAT Amount (15%)' ?></th>
                                <th><?= $isArabic ? 'الإجمالي الصافي' : 'Total Net' ?></th>
                                <th><?= $isArabic ? 'رمز QR وشفرة ZATCA' : 'ZATCA QR Code' ?></th>
                                <th><?= $isArabic ? 'طباعة ومعاينة A4' : 'A4 Print & Export' ?></th>
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
                                <td><span class="badge bg-success-subtle text-success pointer" onclick="viewPdfInvoice('INV-2026-00891', '<?= $isArabic ? 'سعد العتيبي' : 'Saad Al-Otaibi' ?>', '450.00', '67.50', '517.50')"><i class="bi bi-qr-code me-1"></i> QR Compliant</span></td>
                                <td>
                                    <div class="btn-group btn-group-sm">
                                        <button class="btn btn-outline-primary fw-bold" onclick="viewPdfInvoice('INV-2026-00891', '<?= $isArabic ? 'سعد العتيبي' : 'Saad Al-Otaibi' ?>', '450.00', '67.50', '517.50')"><i class="bi bi-printer me-1"></i> <?= $isArabic ? 'فاتورة A4 PDF' : 'A4 Tax Invoice' ?></button>
                                        <button class="btn btn-outline-secondary" onclick="viewXmlInvoice('INV-2026-00891')"><i class="bi bi-file-earmark-code"></i> XML</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>INV-2026-00892</strong></td>
                                <td><?= $isArabic ? 'شركة الأفق العقارية' : 'Horizon Real Estate Co.' ?></td>
                                <td><?= $isArabic ? 'تركيب وتوريد 2 مكيف كاسيت 4 طن (LG Inverter)' : 'Supply & Install 2x 4-Ton Cassette AC (LG Inverter)' ?></td>
                                <td>11,200.00 <?= $isArabic ? 'ر.س' : 'SAR' ?></td>
                                <td>1,680.00 <?= $isArabic ? 'ر.س' : 'SAR' ?></td>
                                <td class="fw-bold text-success">12,880.00 <?= $isArabic ? 'ر.س' : 'SAR' ?></td>
                                <td><span class="badge bg-success-subtle text-success pointer" onclick="viewPdfInvoice('INV-2026-00892', '<?= $isArabic ? 'شركة الأفق العقارية' : 'Horizon Real Estate Co.' ?>', '11,200.00', '1,680.00', '12,880.00')"><i class="bi bi-qr-code me-1"></i> QR Compliant</span></td>
                                <td>
                                    <div class="btn-group btn-group-sm">
                                        <button class="btn btn-outline-primary fw-bold" onclick="viewPdfInvoice('INV-2026-00892', '<?= $isArabic ? 'شركة الأفق العقارية' : 'Horizon Real Estate Co.' ?>', '11,200.00', '1,680.00', '12,880.00')"><i class="bi bi-printer me-1"></i> <?= $isArabic ? 'فاتورة A4 PDF' : 'A4 Tax Invoice' ?></button>
                                        <button class="btn btn-outline-secondary" onclick="viewXmlInvoice('INV-2026-00892')"><i class="bi bi-file-earmark-code"></i> XML</button>
                                    </div>
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
                    <button class="btn btn-primary rounded-3 fw-bold" onclick="openNewCustomerModal();"><i class="bi bi-person-plus me-1"></i> <?= $isArabic ? 'إضافة عميل جديد' : 'Add New Customer' ?></button>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover align-middle" id="customers-table">
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
                                    <button class="btn btn-sm btn-outline-dark rounded-pill px-3" onclick="alert('<?= $isArabic ? 'تفاصيل السجل الكامل للعميل #CUST-1042' : 'Full history log for #CUST-1042' ?>');"><?= $isArabic ? 'السجل الكامل' : 'Full History' ?></button>
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
                                    <button class="btn btn-sm btn-outline-dark rounded-pill px-3" onclick="alert('<?= $isArabic ? 'تفاصيل السجل الكامل للعميل #CUST-1043' : 'Full history log for #CUST-1043' ?>');"><?= $isArabic ? 'السجل الكامل' : 'Full History' ?></button>
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
                    <button class="btn btn-accent text-white rounded-3 fw-bold" onclick="openNewUserModal();"><i class="bi bi-person-plus me-1"></i> <?= $isArabic ? 'إضافة موظف / فني' : 'Add Staff / Tech' ?></button>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover align-middle" id="users-table">
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
                                <td><button class="btn btn-sm btn-outline-secondary" onclick="alert('تعديل حساب خليل السعيد');"><?= $isArabic ? 'تعديل' : 'Edit' ?></button></td>
                            </tr>
                            <tr>
                                <td><?= $isArabic ? 'أليكس ريفيرا' : 'Alex Rivera' ?></td>
                                <td>alex.tech@climatetech.com</td>
                                <td><span class="badge bg-info text-dark">Field Technician</span></td>
                                <td><?= $isArabic ? 'عرض وإغلاق أومر العمل الميدانية فقط' : 'View & Close Field Work Orders Only' ?></td>
                                <td><span class="badge bg-success"><?= $isArabic ? 'نشط' : 'Active' ?></span></td>
                                <td><button class="btn btn-sm btn-outline-secondary" onclick="alert('تعديل حساب أليكس ريفيرا');"><?= $isArabic ? 'تعديل' : 'Edit' ?></button></td>
                            </tr>
                            <tr>
                                <td><?= $isArabic ? 'ريم الشمري' : 'Reem Al-Shammari' ?></td>
                                <td>billing@climatetech.com</td>
                                <td><span class="badge bg-warning text-dark">Accountant</span></td>
                                <td><?= $isArabic ? 'إصدار وتصديق فواتير ZATCA والتقارير المالية' : 'Issue & Submit ZATCA Invoices & Financial Reports' ?></td>
                                <td><span class="badge bg-success"><?= $isArabic ? 'نشط' : 'Active' ?></span></td>
                                <td><button class="btn btn-sm btn-outline-secondary" onclick="alert('تعديل حساب ريم الشمري');"><?= $isArabic ? 'تعديل' : 'Edit' ?></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- TAB 5: Company Settings, VAT, CR & National Address (Bilingual Form) -->
        <div class="tab-pane fade" id="settings" role="tabpanel">
            <div class="card border-0 shadow-sm rounded-4 bg-white p-4">
                <div class="border-bottom pb-3 mb-4">
                    <h4 class="fw-bold text-dark m-0"><i class="bi bi-building-gear text-primary me-2"></i><?= $isArabic ? 'إعدادات بيانات الشركة والرقم الضريبي والسجل التجاري' : 'Bilingual Company Info, VAT Number & Commercial Register (CR)' ?></h4>
                    <p class="text-muted small mb-0"><?= $isArabic ? 'هذه البيانات تُحفظ بالنظام باللغتين العربية والإنجليزية وتنعكس تلقائياً في صفحة الاتصال، ترويسات الفواتير الضريبية، ومستندات هيئة الزكاة (ZATCA).' : 'These details are stored in both Arabic & English to dynamically reflect on the Contact page, E-Invoices header, and ZATCA records.' ?></p>
                </div>

                <?php if (Yii::$app->session->hasFlash('companySaved')): ?>
                    <div class="alert alert-success d-flex align-items-center rounded-3 p-3 mb-4">
                        <i class="bi bi-check-circle-fill me-2 fs-4"></i>
                        <div><strong><?= $isArabic ? 'تم حفظ بيانات وإعدادات الشركة والسجل التجاري باللغتين بنجاح!' : 'Bilingual Company settings, CR, VAT & address saved successfully!' ?></strong></div>
                    </div>
                <?php endif; ?>

                <form id="company-settings-form" action="<?= Url::to(['/site/save-company-settings']) ?>" method="POST">
                    <input type="hidden" name="<?= Yii::$app->request->csrfParam ?>" value="<?= Yii::$app->request->getCsrfToken() ?>">

                    <!-- Shared Registration & Contact Details Section (Two Columns) -->
                    <div class="p-4 bg-light rounded-4 border mb-4">
                        <h5 class="fw-bold text-dark mb-3"><i class="bi bi-shield-check text-success me-2"></i><?= $isArabic ? 'بيانات السجل التجاري والترخيص والتواصل العام' : 'CR, Tax Registration & Contact Details' ?></h5>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label fw-bold text-dark small"><?= $isArabic ? 'رقم السجل التجاري (CR Number)' : 'Commercial Register (CR Number)' ?> <span class="text-danger">*</span></label>
                                <input type="text" name="Company[cr_number]" class="form-control" value="<?= $crNum ?>" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-bold text-dark small"><?= $isArabic ? 'رقم التسجيل الضريبي (VAT - 15 رقم)' : 'VAT Registration Number (15 Digits)' ?> <span class="text-danger">*</span></label>
                                <input type="text" name="Company[vat_number]" class="form-control" value="<?= $vatNum ?>" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-bold text-dark small"><?= $isArabic ? 'رقم الترخيص المعتمد' : 'Licensed Activity Permit #' ?></label>
                                <input type="text" name="Company[permit_number]" class="form-control" value="<?= $permitNum ?>">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-bold text-dark small"><?= $isArabic ? 'البريد الإلكتروني المعتمد' : 'Official Support Email' ?> <span class="text-danger">*</span></label>
                                <input type="email" name="Company[email]" class="form-control" value="<?= $compEmail ?>" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-bold text-dark small"><?= $isArabic ? 'رقم الهاتف الرئيسي (Hotline)' : 'Primary Hotline Phone' ?> <span class="text-danger">*</span></label>
                                <input type="text" name="Company[phone]" class="form-control" value="<?= $hotline ?>" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-bold text-dark small"><?= $isArabic ? 'رقم الواتساب المباشر (WhatsApp)' : 'Direct WhatsApp Number' ?> <span class="text-danger">*</span></label>
                                <input type="text" name="Company[whatsapp]" class="form-control" value="<?= $waNum ?>" required>
                            </div>
                        </div>
                    </div>

                    <!-- Side-by-Side Two Columns for Bilingual Information -->
                    <div class="row g-4">
                        <!-- Left Column: Arabic Information -->
                        <div class="col-lg-6">
                            <div class="card border-0 shadow-sm rounded-4 h-100 bg-white border border-secondary border-opacity-10 p-4">
                                <div class="d-flex align-items-center gap-2 border-bottom pb-3 mb-3">
                                    <span class="fs-4">🇸🇦</span>
                                    <h5 class="fw-extrabold text-dark m-0">البيانات والعنوان باللغة العربية</h5>
                                </div>
                                <div class="row g-3">
                                    <div class="col-12">
                                        <label class="form-label fw-bold text-dark small">اسم الشركة / المؤسسة الرسمي (بالعربية) <span class="text-danger">*</span></label>
                                        <input type="text" name="Company[name_ar]" class="form-control form-control-lg" value="<?= $companyNameAr ?>" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-bold text-dark small">رقم المبنى</label>
                                        <input type="text" name="Company[building_no]" class="form-control" value="<?= $bldg ?>">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-bold text-dark small">الرمز الإضافي</label>
                                        <input type="text" name="Company[additional_no]" class="form-control" value="<?= $addNo ?>">
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label fw-bold text-dark small">اسم الشارع (بالعربية)</label>
                                        <input type="text" name="Company[street_ar]" class="form-control" value="<?= $streetAr ?>">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-bold text-dark small">اسم الحي (بالعربية)</label>
                                        <input type="text" name="Company[district_ar]" class="form-control" value="<?= $distAr ?>">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-bold text-dark small">المدينة والرمز البريدي (بالعربية)</label>
                                        <input type="text" name="Company[city_ar]" class="form-control" value="<?= $cityAr ?>">
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label fw-bold text-dark small">رقم الوحدة / الملاحظات (بالعربية)</label>
                                        <input type="text" name="Company[unit_no_ar]" class="form-control" value="<?= $unitAr ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Right Column: English Information -->
                        <div class="col-lg-6">
                            <div class="card border-0 shadow-sm rounded-4 h-100 bg-white border border-secondary border-opacity-10 p-4">
                                <div class="d-flex align-items-center gap-2 border-bottom pb-3 mb-3">
                                    <span class="fs-4">🌐</span>
                                    <h5 class="fw-extrabold text-dark m-0">Official Details in English</h5>
                                </div>
                                <div class="row g-3">
                                    <div class="col-12">
                                        <label class="form-label fw-bold text-dark small">Official Company Name (English) <span class="text-danger">*</span></label>
                                        <input type="text" name="Company[name_en]" class="form-control form-control-lg" value="<?= $companyNameEn ?>" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-bold text-dark small">Building Number</label>
                                        <input type="text" class="form-control bg-light" value="<?= $bldg ?>" readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-bold text-dark small">Additional No</label>
                                        <input type="text" class="form-control bg-light" value="<?= $addNo ?>" readonly>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label fw-bold text-dark small">Street Name (English)</label>
                                        <input type="text" name="Company[street_en]" class="form-control" value="<?= $streetEn ?>">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-bold text-dark small">District Name (English)</label>
                                        <input type="text" name="Company[district_en]" class="form-control" value="<?= $distEn ?>">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-bold text-dark small">City & Postal Zip (English)</label>
                                        <input type="text" name="Company[city_en]" class="form-control" value="<?= $cityEn ?>">
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label fw-bold text-dark small">Unit / Suite Details (English)</label>
                                        <input type="text" name="Company[unit_no_en]" class="form-control" value="<?= $unitEn ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 pt-3 border-top d-flex justify-content-end gap-2">
                        <button type="reset" class="btn btn-outline-secondary px-4"><?= $isArabic ? 'إلغاء التغييرات' : 'Discard Changes' ?></button>
                        <button type="submit" class="btn btn-primary px-5 fw-bold"><i class="bi bi-floppy me-1"></i> <?= $isArabic ? 'حفظ إعدادات الشركة والفواتير' : 'Save Bilingual Company Settings' ?></button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

<!-- ================= MODALS FOR PROTOTYPE FUNCTIONALITY ================= -->

<!-- Modal 1: Create New ZATCA Invoice -->
<div class="modal fade" id="newInvoiceModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 shadow-lg rounded-4">
            <div class="modal-header bg-dark text-white rounded-top-4">
                <h5 class="modal-title fw-bold"><i class="bi bi-receipt me-2 text-success"></i><?= $isArabic ? 'إصدار فاتورة ضريبية جديدة (ZATCA)' : 'Create ZATCA Tax E-Invoice' ?></h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <form id="create-invoice-form" onsubmit="submitNewInvoice(event)">
                    <div class="row g-3 mb-3">
                        <div class="col-md-7">
                            <label class="form-label fw-bold small"><?= $isArabic ? 'اسم العميل' : 'Customer Name' ?> <span class="text-danger">*</span></label>
                            <input type="text" id="inv-cust-name" class="form-control form-control-lg" placeholder="<?= $isArabic ? 'مثال: سعد العتيبي / شركة الأفق' : 'e.g. Abdullah Al-Otaibi / Horizon Co.' ?>" required autofocus>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label fw-bold small"><?= $isArabic ? 'نوع الفاتورة (ZATCA Type)' : 'Invoice Type' ?></label>
                            <select id="inv-type-select" class="form-select form-select-lg">
                                <option value="B2C Simplified"><?= $isArabic ? 'فاتورة ضريبية مبسطة (B2C)' : 'Simplified Tax Invoice (B2C)' ?></option>
                                <option value="B2B Standard"><?= $isArabic ? 'فاتورة ضريبية قياسية (B2B)' : 'Standard Tax Invoice (B2B)' ?></option>
                            </select>
                        </div>
                    </div>

                    <!-- Dynamic Line Items Section -->
                    <div class="mb-4">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <label class="form-label fw-bold text-dark small m-0">
                                <i class="bi bi-list-check me-1 text-primary"></i> <?= $isArabic ? 'بنود الفاتورة والخدمات' : 'Invoice Line Items & Services' ?>
                            </label>
                            <button type="button" class="btn btn-sm btn-outline-primary rounded-pill px-3 fw-bold" onclick="addInvoiceItemRow()">
                                <i class="bi bi-plus-circle me-1"></i> <?= $isArabic ? 'إضافة بند آخر' : 'Add Line Item' ?>
                            </button>
                        </div>
                        <div class="table-responsive border rounded-3 bg-light p-2">
                            <table class="table table-borderless align-middle mb-0" id="invoice-items-table">
                                <thead class="border-bottom extra-small text-muted">
                                    <tr>
                                        <th style="min-width: 240px;"><?= $isArabic ? 'وصف البند / الخدمة' : 'Item Description / Service' ?></th>
                                        <th style="width: 100px;"><?= $isArabic ? 'الكمية' : 'Qty' ?></th>
                                        <th style="width: 140px;"><?= $isArabic ? 'سعر الوحدة (ر.س)' : 'Unit Price (SAR)' ?></th>
                                        <th style="width: 130px;"><?= $isArabic ? 'المبلغ الإجمالي' : 'Subtotal' ?></th>
                                        <th style="width: 40px;"></th>
                                    </tr>
                                </thead>
                                <tbody id="invoice-items-tbody">
                                    <!-- Populated via JavaScript -->
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Summary Totals Breakdown -->
                    <div class="row g-2 mb-3">
                        <div class="col-md-4">
                            <label class="form-label fw-bold extra-small text-muted mb-1"><?= $isArabic ? 'المبلغ قبل الضريبة' : 'Subtotal (Excl. VAT)' ?></label>
                            <input type="text" id="inv-subtotal" class="form-control bg-white fw-bold" readonly value="0.00 SAR">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label fw-bold extra-small text-muted mb-1"><?= $isArabic ? 'ضريبة القيمة المضافة (15%)' : 'VAT Amount (15%)' ?></label>
                            <input type="text" id="inv-vat" class="form-control bg-white fw-bold text-primary" readonly value="0.00 SAR">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label fw-bold extra-small text-muted mb-1"><?= $isArabic ? 'الإجمالي النهائي الصافي' : 'Net Total' ?></label>
                            <input type="text" id="inv-net-display" class="form-control bg-success text-white fw-extrabold" readonly value="0.00 SAR">
                        </div>
                    </div>

                    <!-- Live Amount in Words -->
                    <div class="p-2 bg-light border rounded-3 mb-3 extra-small">
                        <div class="fw-bold text-dark mb-1"><i class="bi bi-chat-quote me-1 text-success"></i> <?= $isArabic ? 'المبلغ بالكلمات:' : 'Amount in Words (AR):' ?> <span id="inv-words-ar" class="text-primary fw-bold">فقط صفر ريال لا غير</span></div>
                        <div class="text-muted"><i class="bi bi-translate me-1 text-info"></i> <?= $isArabic ? 'بالإنجليزية:' : 'In Words (EN):' ?> <span id="inv-words-en" class="fw-bold">Zero Saudi Riyals Only</span></div>
                    </div>
                    <button type="submit" class="btn btn-success w-100 fw-bold py-2 fs-6 shadow-sm">
                        <i class="bi bi-qr-code me-1"></i> <?= $isArabic ? 'إصدار الفاتورة وتشفير QR (ZATCA)' : 'Generate & Stamp ZATCA Invoice' ?>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal 2: Standard A4 ZATCA PDF Print Invoice (Clean A4 Print Format Only) -->
<div class="modal fade" id="pdfInvoiceModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 shadow-lg rounded-4">
            <div class="modal-header bg-primary text-white rounded-top-4 no-print d-flex align-items-center justify-content-between">
                <h5 class="modal-title fw-bold m-0"><i class="bi bi-file-earmark-pdf me-2"></i><?= $isArabic ? 'معاينة وطباعة الفاتورة الضريبية ZATCA' : 'ZATCA Tax Invoice Preview' ?></h5>
                <div class="d-flex align-items-center gap-2">
                    <div class="btn-group btn-group-sm">
                        <button type="button" class="btn <?= $isArabic ? 'btn-light text-primary fw-bold' : 'btn-outline-light' ?> btn-inv-lang" id="btn-inv-lang-ar" onclick="switchInvoiceLanguage('ar')">🇸🇦 بالعربية</button>
                        <button type="button" class="btn <?= !$isArabic ? 'btn-light text-primary fw-bold' : 'btn-outline-light' ?> btn-inv-lang" id="btn-inv-lang-en" onclick="switchInvoiceLanguage('en')">🌐 In English</button>
                    </div>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            </div>
            <div class="modal-body p-4 bg-white printable-area" id="a4-invoice-content" dir="<?= $isArabic ? 'rtl' : 'ltr' ?>">
                <div class="border p-4 rounded-3 bg-white" style="font-family: Arial, sans-serif;">
                    <!-- Invoice Header -->
                    <div class="d-flex justify-content-between align-items-start border-bottom pb-3 mb-3">
                        <div>
                            <!-- Arabic Company Info Header -->
                            <div class="inv-lang-ar" style="<?= $isArabic ? '' : 'display:none;' ?>">
                                <h4 class="fw-bold text-dark mb-1"><?= $companyNameAr ?></h4>
                                <div class="extra-small text-muted mt-2">
                                    <div><strong>الرقم الضريبي (VAT):</strong> <?= $vatNum ?></div>
                                    <div><strong>السجل التجاري (CR):</strong> <?= $crNum ?> | <strong>الترخيص:</strong> <?= $permitNum ?></div>
                                    <div><strong>العنوان الوطني:</strong> <?= $bldg ?> <?= $streetAr ?> - <?= $distAr ?> - <?= $cityAr ?></div>
                                </div>
                            </div>
                            <!-- English Company Info Header -->
                            <div class="inv-lang-en" style="<?= !$isArabic ? '' : 'display:none;' ?>">
                                <h4 class="fw-bold text-dark mb-1"><?= $companyNameEn ?></h4>
                                <div class="extra-small text-muted mt-2">
                                    <div><strong>VAT Number:</strong> <?= $vatNum ?></div>
                                    <div><strong>CR Number:</strong> <?= $crNum ?> | <strong>License #:</strong> <?= $permitNum ?></div>
                                    <div><strong>National Address:</strong> Bldg <?= $bldg ?>, <?= $streetEn ?>, <?= $distEn ?>, <?= $cityEn ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="text-end">
                            <span class="badge bg-success fs-6 mb-2 inv-lang-ar" style="<?= $isArabic ? '' : 'display:none;' ?>">فاتورة ضريبية مبسطة ZATCA</span>
                            <span class="badge bg-success fs-6 mb-2 inv-lang-en" style="<?= !$isArabic ? '' : 'display:none;' ?>">ZATCA Simplified Tax Invoice</span>
                            <h5 class="fw-bold text-primary m-0" id="pdf-inv-num">INV-2026-00891</h5>
                            <div class="extra-small text-muted mt-1 inv-lang-ar" style="<?= $isArabic ? '' : 'display:none;' ?>">تاريخ الإصدار: <?= date('Y-m-d H:i') ?></div>
                            <div class="extra-small text-muted mt-1 inv-lang-en" style="<?= !$isArabic ? '' : 'display:none;' ?>">Issue Date: <?= date('Y-m-d H:i') ?></div>
                        </div>
                    </div>

                    <!-- Customer Info -->
                    <div class="row g-3 mb-4">
                        <div class="col-6">
                            <div class="p-3 bg-light rounded-3 border">
                                <div class="extra-small text-muted fw-bold inv-lang-ar" style="<?= $isArabic ? '' : 'display:none;' ?>">اسم العميل:</div>
                                <div class="extra-small text-muted fw-bold inv-lang-en" style="<?= !$isArabic ? '' : 'display:none;' ?>">Customer Name:</div>
                                <div class="fw-bold text-dark fs-6" id="pdf-cust-name">سعد العتيبي</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 bg-light rounded-3 border text-end">
                                <div class="extra-small text-muted fw-bold inv-lang-ar" style="<?= $isArabic ? '' : 'display:none;' ?>">حالة الفاتورة والربط:</div>
                                <div class="extra-small text-muted fw-bold inv-lang-en" style="<?= !$isArabic ? '' : 'display:none;' ?>">Compliance & Payment Status:</div>
                                <div class="fw-bold text-success fs-6">
                                    <i class="bi bi-shield-check me-1"></i>
                                    <span class="inv-lang-ar" style="<?= $isArabic ? '' : 'display:none;' ?>">مدفوعة (ZATCA Verified)</span>
                                    <span class="inv-lang-en" style="<?= !$isArabic ? '' : 'display:none;' ?>">Paid (ZATCA Verified)</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Line Items Table -->
                    <div class="table-responsive mb-4">
                        <table class="table table-bordered align-middle extra-small mb-0">
                            <thead class="bg-light">
                                <tr class="inv-lang-ar" style="<?= $isArabic ? '' : 'display:none;' ?>">
                                    <th style="width: 40px;">#</th>
                                    <th>الوصف / الخدمة</th>
                                    <th style="width: 70px;">الكمية</th>
                                    <th style="width: 110px;">سعر الوحدة</th>
                                    <th style="width: 120px;">المبلغ (قبل الضريبة)</th>
                                    <th style="width: 110px;">ضريبة (15%)</th>
                                    <th style="width: 120px;">الإجمالي الصافي</th>
                                </tr>
                                <tr class="inv-lang-en" style="<?= !$isArabic ? '' : 'display:none;' ?>">
                                    <th style="width: 40px;">#</th>
                                    <th>Item Description / Service</th>
                                    <th style="width: 70px;">Qty</th>
                                    <th style="width: 110px;">Unit Price</th>
                                    <th style="width: 120px;">Subtotal (Excl. VAT)</th>
                                    <th style="width: 110px;">VAT (15%)</th>
                                    <th style="width: 120px;">Net Total</th>
                                </tr>
                            </thead>
                            <tbody id="pdf-items-tbody">
                                <tr>
                                    <td>1</td>
                                    <td>صيانة غسيل نفاث 3 مكيفات سبلت + شحن فريون R410A</td>
                                    <td>1</td>
                                    <td>450.00 SAR</td>
                                    <td>450.00 SAR</td>
                                    <td>67.50 SAR</td>
                                    <td class="fw-bold text-success">517.50 SAR</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Footer ZATCA QR & Totals Block -->
                    <div class="row align-items-center p-3 bg-light rounded-3 border g-3">
                        <div class="col-md-7">
                            <div class="d-flex align-items-center gap-3">
                                <div class="bg-white p-2 border rounded-3 text-center shadow-sm">
                                    <img id="pdf-zatca-qr-img" src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=ZATCA-Phase2-Stamp" alt="ZATCA Phase 2 QR Code" style="width: 110px; height: 110px; display: block; margin: 0 auto;">
                                    <div class="extra-small text-dark fw-bold mt-1" style="font-size: 8px;">ZATCA STAMP</div>
                                </div>
                                <div class="extra-small text-muted">
                                    <div class="fw-bold text-dark inv-lang-ar" style="<?= $isArabic ? '' : 'display:none;' ?>">رمز QR مشفر ومختوم إلكترونياً وفق معايير هيئة الزكاة (Phase 2)</div>
                                    <div class="fw-bold text-dark inv-lang-en" style="<?= !$isArabic ? '' : 'display:none;' ?>">Cryptographically Stamped QR Code per ZATCA Phase 2</div>
                                    <div>Hash: 4a8e8f90c12e34bd7810fe90aa812f</div>
                                    <div>UUID: 3f2504e0-4f89-11d3-9a0c-0305e82c3301</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 text-end">
                            <div class="text-muted extra-small inv-lang-ar" style="<?= $isArabic ? '' : 'display:none;' ?>">الإجمالي النهائي المستحق:</div>
                            <div class="text-muted extra-small inv-lang-en" style="<?= !$isArabic ? '' : 'display:none;' ?>">Grand Net Total Due:</div>
                            <div class="display-6 fw-extrabold text-success mb-1" id="pdf-total-display">517.50 SAR</div>
                            <div class="p-2 bg-white rounded-3 border text-start extra-small border-success border-opacity-25 shadow-sm">
                                <div class="fw-bold text-dark inv-lang-ar" style="<?= $isArabic ? '' : 'display:none;' ?>">
                                    <i class="bi bi-chat-quote-fill me-1 text-success"></i> <span id="pdf-total-words-ar">فقط خمسمائة وسبعة عشر ريالاً سعودياً وخمسون هللة لا غير</span>
                                </div>
                                <div class="fw-bold text-dark inv-lang-en" style="<?= !$isArabic ? '' : 'display:none;' ?>">
                                    <i class="bi bi-chat-quote-fill me-1 text-success"></i> <span id="pdf-total-words-en">Five Hundred Seventeen Saudi Riyals and Fifty Halalas Only</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer bg-light no-print">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?= $isArabic ? 'إغلاق' : 'Close' ?></button>
                <button type="button" class="btn btn-primary fw-bold" onclick="window.print()"><i class="bi bi-printer me-1"></i> <?= $isArabic ? 'طباعة مستند A4' : 'Print A4 PDF' ?></button>
            </div>
        </div>
    </div>
</div>

<!-- Modal 3: View ZATCA UBL 2.1 XML -->
<div class="modal fade" id="xmlInvoiceModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 shadow-lg rounded-4">
            <div class="modal-header bg-dark text-white rounded-top-4">
                <h5 class="modal-title fw-bold"><i class="bi bi-file-earmark-code me-2 text-warning"></i>ZATCA UBL 2.1 Cryptographic XML View</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4 bg-dark text-warning">
                <pre class="m-0 extra-small" style="max-height: 400px; overflow-y: auto;"><code>&lt;?xml version="1.0" encoding="UTF-8"?&gt;
&lt;Invoice xmlns="urn:oasis:names:specification:ubl:schema:xsd:Invoice-2"
         xmlns:cac="urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2"
         xmlns:cbc="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2"&gt;
    &lt;cbc:ProfileID&gt;reporting:1.0&lt;/cbc:ProfileID&gt;
    &lt;cbc:ID id="xml-inv-id"&gt;INV-2026-00891&lt;/cbc:ID&gt;
    &lt;cbc:UUID&gt;3f2504e0-4f89-11d3-9a0c-0305e82c3301&lt;/cbc:UUID&gt;
    &lt;cbc:IssueDate&gt;<?= date('Y-m-d') ?>&lt;/cbc:IssueDate&gt;
    &lt;cbc:InvoiceTypeCode name="0200000"&gt;388&lt;/cbc:InvoiceTypeCode&gt;
    &lt;cac:AccountingSupplierParty&gt;
        &lt;cac:Party&gt;
            &lt;cac:PartyTaxScheme&gt;
                &lt;cbc:CompanyID&gt;<?= $vatNum ?>&lt;/cbc:CompanyID&gt;
            &lt;/cac:PartyTaxScheme&gt;
        &lt;/cac:Party&gt;
    &lt;/cac:AccountingSupplierParty&gt;
    &lt;cac:TaxTotal&gt;
        &lt;cbc:TaxAmount currencyID="SAR"&gt;67.50&lt;/cbc:TaxAmount&gt;
    &lt;/cac:TaxTotal&gt;
&lt;/Invoice&gt;</code></pre>
            </div>
            <div class="modal-footer bg-light">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?= $isArabic ? 'إغلاق' : 'Close' ?></button>
                <button type="button" class="btn btn-warning fw-bold" onclick="alert('Downloading ZATCA XML file...');"><i class="bi bi-download me-1"></i> Download XML</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal 4: Add New Customer -->
<div class="modal fade" id="newCustomerModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg rounded-4">
            <div class="modal-header bg-primary text-white rounded-top-4">
                <h5 class="modal-title fw-bold"><i class="bi bi-person-plus me-2"></i><?= $isArabic ? 'إضافة عميل جديد' : 'Add New Customer Record' ?></h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <form id="create-customer-form" onsubmit="submitNewCustomer(event)">
                    <div class="mb-3">
                        <label class="form-label fw-bold small"><?= $isArabic ? 'اسم العميل / الشركة' : 'Customer / Company Name' ?></label>
                        <input type="text" id="cust-name-input" class="form-control" placeholder="e.g. Eng. Tariq Al-Mansoor" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold small"><?= $isArabic ? 'رقم الجوال' : 'Phone Number' ?></label>
                        <input type="text" id="cust-phone-input" class="form-control" placeholder="050XXXXXXX" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold small"><?= $isArabic ? 'العنوان الوطني والحي' : 'National Address & District' ?></label>
                        <input type="text" id="cust-address-input" class="form-control" placeholder="Riyadh - Al-Malqa District" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 fw-bold py-2"><i class="bi bi-check-circle me-1"></i> <?= $isArabic ? 'حفظ العميل' : 'Save Customer Record' ?></button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal 5: Add New Staff / Technician -->
<div class="modal fade" id="newUserModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg rounded-4">
            <div class="modal-header bg-dark text-white rounded-top-4">
                <h5 class="modal-title fw-bold"><i class="bi bi-person-badge me-2 text-info"></i><?= $isArabic ? 'إضافة موظف / فني ميداني' : 'Add Staff User / Technician' ?></h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <form id="create-user-form" onsubmit="submitNewUser(event)">
                    <div class="mb-3">
                        <label class="form-label fw-bold small"><?= $isArabic ? 'اسم الموظف الرسمي' : 'Staff Member Name' ?></label>
                        <input type="text" id="user-name-input" class="form-control" placeholder="e.g. Marcus Vance" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold small"><?= $isArabic ? 'البريد الإلكتروني / اسم المستخدم' : 'Email / Username' ?></label>
                        <input type="email" id="user-email-input" class="form-control" placeholder="marcus@climatetech.com" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold small"><?= $isArabic ? 'الدور الوظيفي (Role)' : 'Assigned Role' ?></label>
                        <select id="user-role-select" class="form-select">
                            <option value="Field Technician">Field Technician</option>
                            <option value="Accountant">Accountant</option>
                            <option value="Dispatch Manager">Dispatch Manager</option>
                            <option value="Super Admin">Super Admin</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-accent text-white w-100 fw-bold py-2"><i class="bi bi-shield-check me-1"></i> <?= $isArabic ? 'إنشاء الحساب وتعيين الصلاحيات' : 'Create User & Assign RBAC' ?></button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal 6: Assign Technician Modal -->
<div class="modal fade" id="assignTechModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg rounded-4">
            <div class="modal-header bg-success text-white rounded-top-4">
                <h5 class="modal-title fw-bold"><i class="bi bi-truck me-2"></i><?= $isArabic ? 'تعيين فني لأمر العمل الميداني' : 'Assign Technician to Lead' ?></h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <form id="assign-tech-form" onsubmit="submitAssignTech(event)">
                    <div class="mb-3">
                        <label class="form-label fw-bold small"><?= $isArabic ? 'اسم العميل' : 'Customer Name' ?></label>
                        <input type="text" id="assign-cust-name" class="form-control bg-light" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold small"><?= $isArabic ? 'نوع الخدمة' : 'Service Type' ?></label>
                        <input type="text" id="assign-service-type" class="form-control bg-light" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold small"><?= $isArabic ? 'اختر الفني الميداني' : 'Select Field Technician' ?></label>
                        <select id="assign-tech-select" class="form-select">
                            <option value="Alex Rivera">Alex Rivera (Split AC Specialist)</option>
                            <option value="Marcus Vance">Marcus Vance (Central HVAC Specialist)</option>
                            <option value="Daniel Kim">Daniel Kim (Electrical Specialist)</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success w-100 fw-bold py-2"><i class="bi bi-send me-1"></i> <?= $isArabic ? 'إرسال التوجيه للفني' : 'Dispatch Order to Tech' ?></button>
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
    // Auto-focus input when ZATCA invoice modal opens
    var newInvModalEl = document.getElementById('newInvoiceModal');
    if (newInvModalEl) {
        newInvModalEl.addEventListener('shown.bs.modal', function () {
            var nameInput = document.getElementById('inv-cust-name');
            if (nameInput) {
                nameInput.focus();
                nameInput.select();
            }
        });
    }
});

window.generatedInvoicesMap = window.generatedInvoicesMap || {};

function addInvoiceItemRow(desc, qty, price) {
    desc = desc || '';
    qty = qty || 1;
    price = (price !== undefined && price !== null && price !== '') ? price : '';

    var tbody = document.getElementById('invoice-items-tbody');
    if (!tbody) return;

    var tr = document.createElement('tr');
    tr.className = 'inv-item-row';
    tr.innerHTML = '<td><input type="text" class="form-control form-control-sm inv-item-desc" value="' + desc.replace(/"/g, '&quot;') + '" placeholder="<?= $isArabic ? "وصف الخدمة أو قطعة الغيار" : "Service or item description" ?>" oninput="recalcInvoiceTotals()" required></td>' +
        '<td><input type="number" min="1" step="1" class="form-control form-control-sm inv-item-qty" value="' + qty + '" oninput="recalcInvoiceTotals()" required></td>' +
        '<td><input type="number" min="0" step="0.01" class="form-control form-control-sm inv-item-price" value="' + price + '" placeholder="0.00" oninput="recalcInvoiceTotals()" required></td>' +
        '<td><input type="text" class="form-control form-control-sm bg-light inv-item-subtotal" readonly value="0.00 SAR"></td>' +
        '<td><button type="button" class="btn btn-sm btn-outline-danger border-0 p-1" onclick="removeInvoiceItemRow(this)" title="Remove item"><i class="bi bi-trash"></i></button></td>';
    tbody.appendChild(tr);
    recalcInvoiceTotals();
}

function removeInvoiceItemRow(btn) {
    var tbody = document.getElementById('invoice-items-tbody');
    if (tbody && tbody.children.length > 1) {
        btn.closest('tr').remove();
        recalcInvoiceTotals();
    } else {
        alert('<?= $isArabic ? "يجب أن تحتوي الفاتورة على بند واحد على الأقل" : "An invoice must contain at least one line item." ?>');
    }
}

function numberToWordsArabic(amount) {
    if (isNaN(amount) || amount <= 0) return 'فقط صفر ريال لا غير';
    var riyals = Math.floor(amount);
    var halalas = Math.round((amount - riyals) * 100);

    function convertNumber(n) {
        if (n === 0) return '';
        var units = ['', 'واحد', 'اثنان', 'ثلاثة', 'أربعة', 'خمسة', 'ستة', 'سبعة', 'ثمانية', 'تسعة'];
        var tens = ['', 'عشرة', 'عشرون', 'ثلاثون', 'أربعون', 'خمسون', 'ستون', 'سبعون', 'ثمانون', 'تسعون'];
        var teens = ['عشرة', 'أحد عشر', 'إثنا عشر', 'ثلاثة عشر', 'أربعة عشر', 'خمسة عشر', 'ستة عشر', 'سبعة عشر', 'ثمانية عشر', 'تسعة عشر'];
        var hundreds = ['', 'مائة', 'مائتان', 'ثلاثمائة', 'أربعمائة', 'خمسعمائة', 'ستمائة', 'سبعمائة', 'ثمانمائة', 'تسعمائة'];

        if (n < 10) return units[n];
        if (n >= 10 && n < 20) return teens[n - 10];
        if (n >= 20 && n < 100) {
            var u = n % 10;
            var t = Math.floor(n / 10);
            return u === 0 ? tens[t] : units[u] + ' و' + tens[t];
        }
        if (n >= 100 && n < 1000) {
            var h = Math.floor(n / 100);
            var rem = n % 100;
            return rem === 0 ? hundreds[h] : hundreds[h] + ' و' + convertNumber(rem);
        }
        if (n >= 1000 && n < 1000000) {
            var th = Math.floor(n / 1000);
            var remTh = n % 1000;
            var thWord = th === 1 ? 'ألف' : (th === 2 ? 'ألفان' : (th >= 3 && th <= 10 ? convertNumber(th) + ' آلاف' : convertNumber(th) + ' ألفاً'));
            return remTh === 0 ? thWord : thWord + ' و' + convertNumber(remTh);
        }
        return n.toString();
    }

    var rText = convertNumber(riyals);
    var text = rText ? (rText + (riyals === 1 ? ' ريال سعودي' : ' ريالاً سعودياً')) : '';
    if (halalas > 0) {
        var hText = convertNumber(halalas);
        text += (text ? ' و' : '') + hText + ' هللة';
    }
    return text ? ('فقط ' + text + ' لا غير') : 'فقط صفر ريال لا غير';
}

function numberToWordsEnglish(amount) {
    if (isNaN(amount) || amount <= 0) return 'Zero Saudi Riyals Only';
    var riyals = Math.floor(amount);
    var halalas = Math.round((amount - riyals) * 100);

    function convertNumber(n) {
        if (n === 0) return '';
        var units = ['', 'One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine'];
        var tens = ['', 'Ten', 'Twenty', 'Thirty', 'Forty', 'Fifty', 'Sixty', 'Seventy', 'Eighty', 'Ninety'];
        var teens = ['Ten', 'Eleven', 'Twelve', 'Thirteen', 'Fourteen', 'Fifteen', 'Sixteen', 'Seventeen', 'Eighteen', 'Nineteen'];

        if (n < 10) return units[n];
        if (n >= 10 && n < 20) return teens[n - 10];
        if (n >= 20 && n < 100) {
            var u = n % 10;
            var t = Math.floor(n / 10);
            return u === 0 ? tens[t] : tens[t] + ' ' + units[u];
        }
        if (n >= 100 && n < 1000) {
            var h = Math.floor(n / 100);
            var rem = n % 100;
            return rem === 0 ? units[h] + ' Hundred' : units[h] + ' Hundred ' + convertNumber(rem);
        }
        if (n >= 1000 && n < 1000000) {
            var th = Math.floor(n / 1000);
            var remTh = n % 1000;
            return remTh === 0 ? convertNumber(th) + ' Thousand' : convertNumber(th) + ' Thousand ' + convertNumber(remTh);
        }
        return n.toString();
    }

    var rText = convertNumber(riyals);
    var text = rText ? (rText + (riyals === 1 ? ' Saudi Riyal' : ' Saudi Riyals')) : '';
    if (halalas > 0) {
        var hText = convertNumber(halalas);
        text += (text ? ' and ' : '') + hText + (halalas === 1 ? ' Halala' : ' Halalas');
    }
    return text ? (text + ' Only') : 'Zero Saudi Riyals Only';
}

function recalcInvoiceTotals() {
    var rows = document.querySelectorAll('#invoice-items-tbody .inv-item-row');
    var totalSub = 0;
    rows.forEach(function(row) {
        var qty = parseFloat(row.querySelector('.inv-item-qty').value) || 0;
        var price = parseFloat(row.querySelector('.inv-item-price').value) || 0;
        var rowSub = qty * price;
        totalSub += rowSub;
        row.querySelector('.inv-item-subtotal').value = rowSub.toFixed(2) + ' SAR';
    });

    var vat = totalSub * 0.15;
    var net = totalSub + vat;

    var subEl = document.getElementById('inv-subtotal');
    var vatEl = document.getElementById('inv-vat');
    var netEl = document.getElementById('inv-net-display');
    var wordsArEl = document.getElementById('inv-words-ar');
    var wordsEnEl = document.getElementById('inv-words-en');

    if (subEl) subEl.value = totalSub.toFixed(2) + ' SAR';
    if (vatEl) vatEl.value = vat.toFixed(2) + ' SAR';
    if (netEl) netEl.value = net.toFixed(2) + ' SAR';
    if (wordsArEl) wordsArEl.innerText = numberToWordsArabic(net);
    if (wordsEnEl) wordsEnEl.innerText = numberToWordsEnglish(net);
}

function openNewInvoiceModal() {
    var tbody = document.getElementById('invoice-items-tbody');
    if (tbody) {
        tbody.innerHTML = '';
        addInvoiceItemRow('<?= $isArabic ? "صيانة وتنظيف غسيل نفاث مكيف سبلت" : "Split AC Jet Wash Maintenance" ?>', 1, 150.00);
        addInvoiceItemRow('<?= $isArabic ? "تعبئة غاز فريون R410A أصلي (كجم)" : "Original R410A Gas Refill (Kg)" ?>', 2, 100.00);
    }
    var modalEl = document.getElementById('newInvoiceModal');
    var modal = bootstrap.Modal.getOrCreateInstance(modalEl);
    modal.show();
}

function submitNewInvoice(e) {
    e.preventDefault();
    var name = document.getElementById('inv-cust-name').value;
    var rows = document.querySelectorAll('#invoice-items-tbody .inv-item-row');

    var items = [];
    var totalSub = 0;
    rows.forEach(function(row) {
        var desc = row.querySelector('.inv-item-desc').value || 'Service Item';
        var qty = parseFloat(row.querySelector('.inv-item-qty').value) || 1;
        var price = parseFloat(row.querySelector('.inv-item-price').value) || 0;
        var sub = qty * price;
        totalSub += sub;
        items.push({ desc: desc, qty: qty, price: price, subtotal: sub });
    });

    var vat = totalSub * 0.15;
    var net = totalSub + vat;
    var invNum = 'INV-2026-00' + Math.floor(100 + Math.random() * 900);

    window.generatedInvoicesMap[invNum] = {
        num: invNum,
        name: name,
        items: items,
        subtotal: totalSub,
        vat: vat,
        net: net
    };

    var serviceSummary = items.map(function(i) { return i.desc; }).join(' + ');
    if (serviceSummary.length > 55) {
        serviceSummary = serviceSummary.substring(0, 52) + '...';
    }

    var tbody = document.querySelector('#zatca-invoices-table tbody');
    var tr = document.createElement('tr');
    tr.innerHTML = '<td><strong>' + invNum + '</strong></td>' +
        '<td>' + name + '</td>' +
        '<td>' + serviceSummary + '</td>' +
        '<td>' + totalSub.toFixed(2) + ' SAR</td>' +
        '<td>' + vat.toFixed(2) + ' SAR</td>' +
        '<td class="fw-bold text-success">' + net.toFixed(2) + ' SAR</td>' +
        '<td><span class="badge bg-success-subtle text-success pointer" onclick="viewPdfInvoice(\'' + invNum + '\')"><i class="bi bi-qr-code me-1"></i> QR Compliant</span></td>' +
        '<td><div class="btn-group btn-group-sm">' +
        '<button class="btn btn-outline-primary fw-bold" onclick="viewPdfInvoice(\'' + invNum + '\')"><i class="bi bi-printer me-1"></i> A4 Tax Invoice</button>' +
        '<button class="btn btn-outline-secondary" onclick="viewXmlInvoice(\'' + invNum + '\')"><i class="bi bi-file-earmark-code"></i> XML</button>' +
        '</div></td>';
    tbody.prepend(tr);

    var modalEl = document.getElementById('newInvoiceModal');
    var modal = bootstrap.Modal.getInstance(modalEl);
    if (modal) modal.hide();
    alert('ZATCA Tax Invoice ' + invNum + ' generated and encrypted successfully with ' + items.length + ' item(s)!');
}

function switchInvoiceLanguage(lang) {
    var isAr = (lang === 'ar');

    var btnAr = document.getElementById('btn-inv-lang-ar');
    var btnEn = document.getElementById('btn-inv-lang-en');
    if (btnAr && btnEn) {
        if (isAr) {
            btnAr.className = 'btn btn-light text-primary fw-bold btn-inv-lang';
            btnEn.className = 'btn btn-outline-light text-white btn-inv-lang';
        } else {
            btnAr.className = 'btn btn-outline-light text-white btn-inv-lang';
            btnEn.className = 'btn btn-light text-primary fw-bold btn-inv-lang';
        }
    }

    var pdfModal = document.getElementById('pdfInvoiceModal');
    if (pdfModal) {
        pdfModal.querySelectorAll('.inv-lang-ar').forEach(function(el) {
            el.style.display = isAr ? '' : 'none';
        });
        pdfModal.querySelectorAll('.inv-lang-en').forEach(function(el) {
            el.style.display = isAr ? 'none' : '';
        });
        var printContent = document.getElementById('a4-invoice-content');
        if (printContent) {
            printContent.setAttribute('dir', isAr ? 'rtl' : 'ltr');
        }
    }
}

function viewPdfInvoice(num, fallbackName, fallbackSub, fallbackVat, fallbackNet) {
    var invData = window.generatedInvoicesMap && window.generatedInvoicesMap[num];

    var name = invData ? invData.name : (fallbackName || 'Saad Al-Otaibi');
    var subtotal = invData ? invData.subtotal : (parseFloat(fallbackSub) || 450);
    var vat = invData ? invData.vat : (parseFloat(fallbackVat) || 67.5);
    var total = invData ? invData.net : (parseFloat(fallbackNet) || 517.5);
    var items = invData ? invData.items : [
        { desc: 'صيانة غسيل نفاث 3 مكيفات سبلت + شحن فريون R410A', qty: 1, price: subtotal, subtotal: subtotal }
    ];

    document.getElementById('pdf-inv-num').innerText = num;
    document.getElementById('pdf-cust-name').innerText = name;
    document.getElementById('pdf-total-display').innerText = total.toFixed(2) + ' SAR';

    var wordsArEl = document.getElementById('pdf-total-words-ar');
    var wordsEnEl = document.getElementById('pdf-total-words-en');
    if (wordsArEl) wordsArEl.innerText = numberToWordsArabic(total);
    if (wordsEnEl) wordsEnEl.innerText = numberToWordsEnglish(total);

    var tbody = document.getElementById('pdf-items-tbody');
    if (tbody) {
        tbody.innerHTML = '';
        items.forEach(function(item, idx) {
            var itemVat = item.subtotal * 0.15;
            var itemTotal = item.subtotal + itemVat;
            var tr = document.createElement('tr');
            tr.innerHTML = '<td>' + (idx + 1) + '</td>' +
                '<td>' + item.desc + '</td>' +
                '<td>' + item.qty + '</td>' +
                '<td>' + item.price.toFixed(2) + ' SAR</td>' +
                '<td>' + item.subtotal.toFixed(2) + ' SAR</td>' +
                '<td>' + itemVat.toFixed(2) + ' SAR</td>' +
                '<td class="fw-bold text-success">' + itemTotal.toFixed(2) + ' SAR</td>';
            tbody.appendChild(tr);
        });
    }

    switchInvoiceLanguage('<?= $isArabic ? "ar" : "en" ?>');

    var qrContent = 'ZATCA|Seller:<?= urlencode($companyNameEn) ?>|VAT:<?= $vatNum ?>|Inv:' + num + '|Total:' + total.toFixed(2) + '|VAT:' + vat.toFixed(2);
    document.getElementById('pdf-zatca-qr-img').src = 'https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=' + encodeURIComponent(qrContent);

    var modal = new bootstrap.Modal(document.getElementById('pdfInvoiceModal'));
    modal.show();
}

function viewXmlInvoice(num) {
    document.getElementById('xml-inv-id').innerText = num;
    var modal = new bootstrap.Modal(document.getElementById('xmlInvoiceModal'));
    modal.show();
}

function openNewCustomerModal() {
    var modal = new bootstrap.Modal(document.getElementById('newCustomerModal'));
    modal.show();
}

function submitNewCustomer(e) {
    e.preventDefault();
    var name = document.getElementById('cust-name-input').value;
    var phone = document.getElementById('cust-phone-input').value;
    var address = document.getElementById('cust-address-input').value;
    var custId = '#CUST-' + Math.floor(1000 + Math.random() * 9000);

    var tbody = document.querySelector('#customers-table tbody');
    var tr = document.createElement('tr');
    tr.innerHTML = '<td>' + custId + '</td>' +
        '<td>' + name + '</td>' +
        '<td>' + phone + '</td>' +
        '<td>' + address + '</td>' +
        '<td><span class="badge bg-info text-dark">Split AC Unit</span></td>' +
        '<td>Just Registered</td>' +
        '<td><button class="btn btn-sm btn-outline-dark rounded-pill px-3" onclick="alert(\'Full history log for ' + custId + '\');">Full History</button></td>';
    tbody.prepend(tr);

    var modalEl = document.getElementById('newCustomerModal');
    var modal = bootstrap.Modal.getInstance(modalEl);
    if (modal) modal.hide();
    alert('Customer ' + name + ' registered successfully!');
}

function openNewUserModal() {
    var modal = new bootstrap.Modal(document.getElementById('newUserModal'));
    modal.show();
}

function submitNewUser(e) {
    e.preventDefault();
    var name = document.getElementById('user-name-input').value;
    var email = document.getElementById('user-email-input').value;
    var role = document.getElementById('user-role-select').value;

    var tbody = document.querySelector('#users-table tbody');
    var tr = document.createElement('tr');
    tr.innerHTML = '<td>' + name + '</td>' +
        '<td>' + email + '</td>' +
        '<td><span class="badge bg-primary">' + role + '</span></td>' +
        '<td>Granted RBAC Permissions</td>' +
        '<td><span class="badge bg-success">Active</span></td>' +
        '<td><button class="btn btn-sm btn-outline-secondary">Edit</button></td>';
    tbody.prepend(tr);

    // If added as Field Technician, dynamically append to technician dispatch dropdown
    if (role === 'Field Technician' || role.indexOf('Technician') !== -1) {
        var select = document.getElementById('assign-tech-select');
        if (select) {
            var opt = document.createElement('option');
            opt.value = name;
            opt.innerText = name + ' (Newly Registered Tech)';
            opt.selected = true;
            select.appendChild(opt);
        }
    }

    var modalEl = document.getElementById('newUserModal');
    var modal = bootstrap.Modal.getInstance(modalEl);
    if (modal) modal.hide();
    alert('Staff account created for ' + name + ' with role: ' + role);
}

function openAssignTechModal(custName, service) {
    document.getElementById('assign-cust-name').value = custName;
    document.getElementById('assign-service-type').value = service;
    var modal = new bootstrap.Modal(document.getElementById('assignTechModal'));
    modal.show();
}

function submitAssignTech(e) {
    e.preventDefault();
    var cust = document.getElementById('assign-cust-name').value;
    var tech = document.getElementById('assign-tech-select').value;
    var jobNum = 'JOB-99' + Math.floor(15 + Math.random() * 80);

    var tbody = document.querySelector('#jobs-table tbody');
    var tr = document.createElement('tr');
    tr.innerHTML = '<td><strong class="text-primary">' + jobNum + '</strong></td>' +
        '<td><div class="fw-bold text-dark">' + cust + '</div><div class="text-muted extra-small"><i class="bi bi-geo-alt"></i> Assigned Location</div></td>' +
        '<td><span class="badge bg-dark-subtle text-dark">HVAC Unit</span></td>' +
        '<td><div class="d-flex align-items-center gap-2"><div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width:28px; height:28px; font-size:11px;">' + tech.substr(0, 2).toUpperCase() + '</div><span class="small font-weight-bold">' + tech + '</span></div></td>' +
        '<td><span class="badge bg-info text-dark rounded-pill px-3 py-2">Dispatched</span></td>' +
        '<td><button class="btn btn-sm btn-outline-secondary rounded-pill px-3" onclick="alert(\'Work order ' + jobNum + '\');">Manage</button></td>';
    tbody.prepend(tr);

    var modalEl = document.getElementById('assignTechModal');
    var modal = bootstrap.Modal.getInstance(modalEl);
    if (modal) modal.hide();
    alert('Dispatched ' + jobNum + ' for ' + cust + ' to technician ' + tech + '!');
}
</script>
