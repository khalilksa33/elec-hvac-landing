<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$company = Yii::$app->params['company'] ?? [];
$brandTitle = Yii::$app->params['brandTitle'] ?? Yii::t('app', 'BrandTitle');
$companyPhone = $company['phone'] ?? '(800) 555-4822';
$companyPermit = $company['permit_number'] ?? 'HVAC-EL-2026-8894';
$cleanPhone = preg_replace('/[^0-9+]/', '', $companyPhone);
$isArabic = strpos(Yii::$app->language, 'ar') === 0;

$this->title = $isArabic ? ('أنظمة الصيانة والكهرباء | ' . $brandTitle) : ('HVAC & Electrical Systems | ' . $brandTitle);
?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <div class="hero-badge">
                    <i class="bi bi-patch-check-fill text-warning"></i> <?= Yii::t('app', 'HeroBadge') ?>
                </div>
                <h1 class="hero-title">
                    <?= Yii::t('app', 'HeroTitlePrefix') ?> <span><?= Html::encode($brandTitle) ?></span>
                </h1>
                <p class="hero-lead">
                    <?= Yii::t('app', 'HeroLead') ?>
                </p>

                <div class="d-flex flex-wrap gap-3 mb-4">
                    <div class="d-flex align-items-center gap-2 bg-dark bg-opacity-50 px-3 py-2 rounded-3 border border-secondary">
                        <i class="bi bi-clock-history text-warning fs-4"></i>
                        <div>
                            <div class="fw-bold text-white small"><?= Yii::t('app', 'SameDayDispatch') ?></div>
                            <div class="text-secondary extra-small" style="font-size: 0.75rem;"><?= Yii::t('app', 'DispatchedUnder60') ?></div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-2 bg-dark bg-opacity-50 px-3 py-2 rounded-3 border border-secondary">
                        <i class="bi bi-shield-lock-fill text-info fs-4"></i>
                        <div>
                            <div class="fw-bold text-white small"><?= Yii::t('app', 'Warranty1Year') ?></div>
                            <div class="text-secondary extra-small" style="font-size: 0.75rem;"><?= Yii::t('app', 'Satisfaction100') ?></div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-2 bg-dark bg-opacity-50 px-3 py-2 rounded-3 border border-secondary">
                        <i class="bi bi-star-fill text-warning fs-4"></i>
                        <div>
                            <div class="fw-bold text-white small"><?= Yii::t('app', 'RatingScore') ?></div>
                            <div class="text-secondary extra-small" style="font-size: 0.75rem;"><?= Yii::t('app', 'OverHomeowners') ?></div>
                        </div>
                    </div>
                </div>

                <div class="d-flex gap-3">
                    <a href="tel:<?= $cleanPhone ?>" class="btn btn-accent btn-lg text-white">
                        <i class="bi bi-telephone-outbound-fill me-2"></i> <?= ($isArabic ? 'اتصل الآن: ' : 'Call Now: ') . Html::encode($companyPhone) ?>
                    </a>
                    <a href="#services" class="btn btn-outline-light btn-lg rounded-3">
                        <i class="bi bi-tools me-2"></i> <?= Yii::t('app', 'ExploreServicesBtn') ?>
                    </a>
                </div>
            </div>

            <!-- Instant Lead Booking Form (Google Ads Conversion Ready) -->
            <div class="col-lg-5">
                <div class="glass-card">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h3 class="m-0"><i class="bi bi-calendar2-check-fill text-primary me-2"></i>Schedule Service</h3>
                        <span class="badge bg-danger">Fast Dispatch</span>
                    </div>
                    <p class="text-muted small mb-4">Request a free estimate or emergency dispatch technician today.</p>

                    <?php if (Yii::$app->session->hasFlash('leadSubmitted')): ?>
                        <div class="alert alert-success d-flex align-items-center" role="alert">
                            <i class="bi bi-check-circle-fill me-2 fs-4"></i>
                            <div>
                                <strong>Request Received!</strong> Our technician will call you within 15 minutes.
                            </div>
                        </div>
                    <?php else: ?>
                        <?php $form = ActiveForm::begin([
                            'action' => ['site/book-lead'],
                            'id' => 'hvac-booking-form',
                            'options' => ['class' => 'needs-validation']
                        ]); ?>

                        <div class="mb-3">
                            <label class="form-label fw-bold text-dark small">Full Name <span class="text-danger">*</span></label>
                            <input type="text" name="Lead[customer_name]" class="form-control form-control-lg" placeholder="John Doe" required>
                        </div>

                        <div class="row g-2 mb-3">
                            <div class="col-6">
                                <label class="form-label fw-bold text-dark small">Phone Number <span class="text-danger">*</span></label>
                                <input type="tel" name="Lead[phone]" class="form-control form-control-lg" placeholder="(555) 000-0000" required>
                            </div>
                            <div class="col-6">
                                <label class="form-label fw-bold text-dark small">City / Zip Code <span class="text-danger">*</span></label>
                                <input type="text" name="Lead[location]" class="form-control form-control-lg" placeholder="e.g. Dallas, TX" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold text-dark small">HVAC / Electrical Unit Type <span class="text-danger">*</span></label>
                            <select name="Lead[unit_type]" class="form-select form-select-lg" required>
                                <option value="" selected disabled>Select AC/Electrical Unit System...</option>
                                <option value="Split AC Unit">Split Wall Mounted AC Unit</option>
                                <option value="Floor Standing Unit">Floor Standing Tower AC</option>
                                <option value="Ceiling Cassette Unit">Ceiling Cassette AC Unit</option>
                                <option value="Package Central Unit">Package Central HVAC System</option>
                                <option value="General Electrical Service">Home Electrical & Wiring Inspection</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold text-dark small">Service Needed <span class="text-danger">*</span></label>
                            <select name="Lead[service_type]" class="form-select form-select-lg" required>
                                <option value="Repair / Troubleshooting">Repair & Troubleshooting (Not Cooling/Strange Noise)</option>
                                <option value="New Installation">New Unit Installation & Replacement</option>
                                <option value="Preventative Maintenance">Preventative Maintenance & Deep Washing</option>
                                <option value="Electrical Repair">Electrical Wiring & Circuit Panel Service</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-accent w-100 btn-lg text-white mt-2">
                            <i class="bi bi-send-check-fill me-2"></i> Get Free Quote & Dispatch
                        </button>
                        <div class="text-center text-muted extra-small mt-2" style="font-size: 0.75rem;">
                            <i class="bi bi-shield-check text-success"></i> No spam guarantee. Your details are safe with us under our <a href="<?= Url::to(['/site/privacy']) ?>">Privacy Policy</a>.
                        </div>

                        <?php ActiveForm::end(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Google Ads Compliance & Trust Banner -->
<div class="compliance-bar text-center">
    <div class="container d-flex flex-wrap justify-content-center align-items-center gap-4">
        <span><i class="bi bi-check-circle-fill text-success me-1"></i> <?= $isArabic ? 'ترخيص رسمي معتمد #' : 'Official Certified License #' ?><?= Html::encode($companyPermit) ?></span>
        <span><i class="bi bi-currency-dollar text-warning me-1"></i> Upfront Transparent Pricing (No Hidden Fees)</span>
        <span><i class="bi bi-award-fill text-info me-1"></i> EPA Certified HVAC Engineers & Electricians</span>
        <span><i class="bi bi-telephone-fill text-primary me-1"></i> <?= $isArabic ? 'الخط الساخن 24/7: ' : '24/7 Hotline: ' ?><?= Html::encode($companyPhone) ?></span>
    </div>
</div>

<!-- HVAC & Electrical Systems Showcase Section -->
<section id="systems" class="py-5 bg-white">
    <div class="container">
        <div class="text-center max-w-700 mx-auto mb-5">
            <span class="badge bg-primary-subtle text-primary fw-bold px-3 py-2 rounded-pill mb-2">Supported Systems</span>
            <h2 class="fw-extrabold text-dark display-6">Specialized Care for All Residential AC & Electrical Units</h2>
            <p class="text-muted">Whether you need urgent repair, seasonal maintenance, or a brand new energy-efficient installation, our certified technicians are trained on all major brands.</p>
        </div>

        <div class="row g-4">
            <!-- Split AC -->
            <div class="col-lg-3 col-md-6">
                <div class="system-card text-center">
                    <div class="system-icon mx-auto">
                        <i class="bi bi-snow"></i>
                    </div>
                    <h4>Split AC Units</h4>
                    <p class="text-muted small">High-efficiency wall-mounted ductless & mini-split systems for targeted zone cooling and heating.</p>
                    <ul class="list-unstyled text-start small text-secondary border-top pt-3 mt-3">
                        <li class="mb-1"><i class="bi bi-check2 text-success me-2"></i>Freon gas recharge</li>
                        <li class="mb-1"><i class="bi bi-check2 text-success me-2"></i>Inverter PCB repair</li>
                        <li class="mb-1"><i class="bi bi-check2 text-success me-2"></i>Jet wash deep cleaning</li>
                    </ul>
                </div>
            </div>

            <!-- Floor Standing AC -->
            <div class="col-lg-3 col-md-6">
                <div class="system-card text-center">
                    <div class="system-icon mx-auto">
                        <i class="bi bi-box-seam"></i>
                    </div>
                    <h4>Floor Standing Units</h4>
                    <p class="text-muted small">Powerful high-capacity tower AC units designed for large living rooms, villas, and open halls.</p>
                    <ul class="list-unstyled text-start small text-secondary border-top pt-3 mt-3">
                        <li class="mb-1"><i class="bi bi-check2 text-success me-2"></i>Heavy compressor fix</li>
                        <li class="mb-1"><i class="bi bi-check2 text-success me-2"></i>Air filter replacement</li>
                        <li class="mb-1"><i class="bi bi-check2 text-success me-2"></i>Drain line unblocking</li>
                    </ul>
                </div>
            </div>

            <!-- Ceiling Cassette AC -->
            <div class="col-lg-3 col-md-6">
                <div class="system-card text-center">
                    <div class="system-icon mx-auto">
                        <i class="bi bi-grid-3x3-gap"></i>
                    </div>
                    <h4>Ceiling Cassette Units</h4>
                    <p class="text-muted small">Discreet 4-way airflow ceiling mounted AC systems for luxury residential residences & modern apartments.</p>
                    <ul class="list-unstyled text-start small text-secondary border-top pt-3 mt-3">
                        <li class="mb-1"><i class="bi bi-check2 text-success me-2"></i>Condensate pump repair</li>
                        <li class="mb-1"><i class="bi bi-check2 text-success me-2"></i>Multi-directional vane fix</li>
                        <li class="mb-1"><i class="bi bi-check2 text-success me-2"></i>Remote control receiver setup</li>
                    </ul>
                </div>
            </div>

            <!-- Package Central Unit -->
            <div class="col-lg-3 col-md-6">
                <div class="system-card text-center">
                    <div class="system-icon mx-auto">
                        <i class="bi bi-cpu"></i>
                    </div>
                    <h4>Central Package Units</h4>
                    <p class="text-muted small">All-in-one outdoor rooftop & ground central package units delivering whole-home HVAC climate control.</p>
                    <ul class="list-unstyled text-start small text-secondary border-top pt-3 mt-3">
                        <li class="mb-1"><i class="bi bi-check2 text-success me-2"></i>Duct inspection & sealing</li>
                        <li class="mb-1"><i class="bi bi-check2 text-success me-2"></i>Blower motor overhaul</li>
                        <li class="mb-1"><i class="bi bi-check2 text-success me-2"></i>Thermostat integration</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Visual HVAC Diagram Showcase -->
        <div class="mt-5 p-4 bg-light rounded-4 border text-center">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src="<?= Url::to('@web/ac_units.jpg') ?>" alt="HVAC Systems Showcase" class="img-fluid rounded-3 shadow">
                </div>
                <div class="col-lg-6 text-start mt-4 mt-lg-0">
                    <span class="badge bg-warning text-dark fw-bold mb-2">Electrical & HVAC Synergy</span>
                    <h3 class="fw-bold text-dark">Complete Home Electrical & Air Conditioning Protection</h3>
                    <p class="text-muted">Faulty wiring or voltage fluctuations can ruin your expensive inverter AC unit compressors. Our technicians inspect both electrical breaker panels and HVAC refrigerant lines to guarantee safe, long-lasting performance.</p>
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-lightning-charge-fill text-warning fs-4"></i>
                                <div>
                                    <strong>Voltage Testing</strong>
                                    <div class="text-muted extra-small">Prevent compressor burnout</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-thermometer-half text-info fs-4"></i>
                                <div>
                                    <strong>Temp Calibration</strong>
                                    <div class="text-muted extra-small">Optimize energy consumption</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Detailed Services & Pricing Guidance -->
<section id="services" class="py-5 bg-light">
    <div class="container">
        <div class="text-center max-w-700 mx-auto mb-5">
            <span class="badge bg-success-subtle text-success fw-bold px-3 py-2 rounded-pill mb-2">Transparent Service Packages</span>
            <h2 class="fw-extrabold text-dark display-6">No Hidden Fees. 100% Upfront Pricing.</h2>
            <p class="text-muted">Google Ads compliant service guarantees. Know exact costs before work begins.</p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                    <div class="card-header bg-primary text-white py-3 text-center">
                        <h5 class="m-0 fw-bold">Emergency AC Repair</h5>
                        <div class="display-6 fw-extrabold my-2">$79 <span class="fs-6 fw-normal">Diagnostic Fee (Waived with Repair)</span></div>
                    </div>
                    <div class="card-body p-4">
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Comprehensive 21-Point AC Inspection</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Refrigerant Gas Leak Detection</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Electrical Capacitor & Contactor Check</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Same-Day Emergency Service</li>
                        </ul>
                    </div>
                    <div class="card-footer bg-white border-0 p-4 pt-0">
                        <a href="tel:<?= $cleanPhone ?>" class="btn btn-outline-primary w-100 rounded-3 fw-bold">Book Repair Now</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border-primary shadow-lg rounded-4 overflow-hidden style-popular" style="border-width: 2px;">
                    <div class="bg-primary text-white text-center py-1 fw-bold extra-small text-uppercase tracking-wider">Most Popular for Homeowners</div>
                    <div class="card-header bg-dark text-white py-3 text-center">
                        <h5 class="m-0 fw-bold text-warning">Annual HVAC Maintenance</h5>
                        <div class="display-6 fw-extrabold my-2 text-white">$149 <span class="fs-6 fw-normal">/ Unit per year</span></div>
                    </div>
                    <div class="card-body p-4">
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> 2 Complete Deep Jet Cleanings / Year</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Full Gas Top-Up & Pressure Balancing</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Electrical Panel & Voltage Tune-up</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Priority 2-Hour Dispatch Guarantee</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> 15% Discount on All Replacement Parts</li>
                        </ul>
                    </div>
                    <div class="card-footer bg-white border-0 p-4 pt-0">
                        <a href="tel:<?= $cleanPhone ?>" class="btn btn-accent w-100 rounded-3 fw-bold text-white">Get Protection Plan</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                    <div class="card-header bg-dark text-white py-3 text-center">
                        <h5 class="m-0 fw-bold">New Unit Installation</h5>
                        <div class="display-6 fw-extrabold my-2">Free Quote <span class="fs-6 fw-normal">On-Site Estimate</span></div>
                    </div>
                    <div class="card-body p-4">
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Split, Standing, Cassette & Package Units</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Official Factory Warranty (Up to 10 Yrs)</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Old Unit Removal & Eco-Disposal</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Full Electrical Wiring & Breaker Setup</li>
                        </ul>
                    </div>
                    <div class="card-footer bg-white border-0 p-4 pt-0">
                        <a href="#hvac-booking-form" class="btn btn-outline-dark w-100 rounded-3 fw-bold">Request Free Estimate</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Integrated Enterprise ERP System Showcase -->
<section class="py-5 bg-dark text-white position-relative">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <span class="badge bg-info text-dark fw-bold px-3 py-2 rounded-pill mb-2">Integrated Tech ERP Engine</span>
                <h2 class="display-5 fw-extrabold text-white">Powered by Enterprise ERP Management System</h2>
                <p class="text-secondary fs-5">
                    Our proprietary ERP backend links website customer leads directly to field technicians, job cards, inventory spare parts, and automated invoicing.
                </p>

                <div class="row g-3 my-4">
                    <div class="col-sm-6">
                        <div class="erp-stat-badge">
                            <div class="erp-stat-num"><i class="bi bi-lightning-auto"></i> Instant</div>
                            <div class="text-secondary small">Lead to Technician Dispatch</div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="erp-stat-badge">
                            <div class="erp-stat-num">100%</div>
                            <div class="text-secondary small">Inventory & Parts Tracking</div>
                        </div>
                    </div>
                </div>

                <div class="d-flex gap-3">
                    <a href="<?= Url::to(['/site/erp-dashboard']) ?>" class="btn btn-info btn-lg fw-bold text-dark rounded-3">
                        <i class="bi bi-speedometer2 me-2"></i> Launch ERP Portal
                    </a>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="erp-preview-box border border-secondary shadow-lg">
                    <div class="d-flex justify-content-between align-items-center pb-3 mb-3 border-bottom border-secondary">
                        <div class="fw-bold text-info"><i class="bi bi-pc-display me-2"></i>ERP Dispatch Live Console</div>
                        <span class="badge bg-success">System Active</span>
                    </div>

                    <div class="mb-3 p-3 bg-secondary bg-opacity-25 rounded-3 border border-secondary">
                        <div class="d-flex justify-content-between text-white extra-small mb-1">
                            <span>Job #HVAC-2026-9912</span>
                            <span class="text-warning">In Progress</span>
                        </div>
                        <div class="fw-bold text-white mb-1">Split AC Jet Wash & Freon Top-Up</div>
                        <div class="text-secondary extra-small"><i class="bi bi-geo-alt me-1"></i> Customer: Sarah Jenkins (Villa 42, West Oak)</div>
                        <div class="text-secondary extra-small"><i class="bi bi-person-badge me-1"></i> Assigned Tech: Alex Rivera (ID: TECH-04)</div>
                    </div>

                    <div class="p-3 bg-secondary bg-opacity-25 rounded-3 border border-secondary">
                        <div class="d-flex justify-content-between text-white extra-small mb-1">
                            <span>Job #HVAC-2026-9913</span>
                            <span class="text-info">Dispatched</span>
                        </div>
                        <div class="fw-bold text-white mb-1">Central Package Unit Blower Repair</div>
                        <div class="text-secondary extra-small"><i class="bi bi-geo-alt me-1"></i> Customer: Robert Miller (Penthouse 8B)</div>
                        <div class="text-secondary extra-small"><i class="bi bi-person-badge me-1"></i> Assigned Tech: Marcus Vance (ID: TECH-02)</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
