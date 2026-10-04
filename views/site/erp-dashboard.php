<?php

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'HVAC & Electrical ERP Dashboard';
?>

<div class="container-fluid py-4 px-4 bg-light min-vh-100">
    <!-- Header Banner -->
    <div class="d-flex flex-wrap justify-content-between align-items-center mb-4 bg-white p-4 rounded-4 shadow-sm border">
        <div>
            <div class="d-flex align-items-center gap-2">
                <span class="badge bg-primary fs-6"><i class="bi bi-cpu-fill me-1"></i> Yii2 ERP v2.4</span>
                <span class="badge bg-success"><i class="bi bi-wifi me-1"></i> Field Sync Online</span>
            </div>
            <h2 class="fw-extrabold text-dark mt-2 mb-0">Electrical & HVAC Service Operations ERP</h2>
            <p class="text-muted small m-0">Live technician dispatch, customer job cards, inventory parts & Google Ads lead tracking.</p>
        </div>
        <div class="d-flex gap-2 mt-3 mt-md-0">
            <button class="btn btn-outline-secondary rounded-3" onclick="location.reload();"><i class="bi bi-arrow-clockwise me-1"></i> Refresh Data</button>
            <a href="<?= Url::to(['/site/index']) ?>" class="btn btn-accent text-white rounded-3"><i class="bi bi-globe me-1"></i> View Live Landing Page</a>
        </div>
    </div>

    <!-- Overview Stat Cards -->
    <div class="row g-3 mb-4">
        <div class="col-xl-3 col-md-6">
            <div class="card border-0 shadow-sm rounded-4 bg-white p-4">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-muted small fw-bold uppercase">Today's Leads</div>
                        <div class="display-6 fw-extrabold text-dark">18</div>
                        <div class="text-success extra-small"><i class="bi bi-graph-up-arrow me-1"></i> +24% from Google Ads</div>
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
                        <div class="text-muted small fw-bold uppercase">Active Jobs</div>
                        <div class="display-6 fw-extrabold text-dark">12</div>
                        <div class="text-info extra-small"><i class="bi bi-truck me-1"></i> 8 Techs Dispatched</div>
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
                        <div class="text-muted small fw-bold uppercase">Spare Parts Stock</div>
                        <div class="display-6 fw-extrabold text-dark">342</div>
                        <div class="text-success extra-small"><i class="bi bi-check-circle me-1"></i> R410A / R32 Gas Ready</div>
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
                        <div class="text-muted small fw-bold uppercase">Monthly Revenue</div>
                        <div class="display-6 fw-extrabold text-dark">$48,250</div>
                        <div class="text-primary extra-small"><i class="bi bi-shield-check me-1"></i> 98% Invoice Paid</div>
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
        <!-- Live Field Dispatch Jobs -->
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm rounded-4 bg-white overflow-hidden">
                <div class="card-header bg-white py-3 px-4 d-flex justify-content-between align-items-center border-bottom">
                    <h5 class="m-0 fw-bold text-dark"><i class="bi bi-wrench-adjustable me-2 text-primary"></i>Live HVAC Job Dispatch Center</h5>
                    <span class="badge bg-primary-subtle text-primary">Real-time Feed</span>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="bg-light">
                            <tr>
                                <th>Job ID</th>
                                <th>Customer & Location</th>
                                <th>System & Issue</th>
                                <th>Assigned Tech</th>
                                <th>Status</th>
                                <th>Action</th>
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
                                        <button class="btn btn-sm btn-outline-secondary rounded-pill px-3" onclick="alert('Viewing Job Details for <?= Html::encode($job['id']) ?>');">Manage</button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Recent Google Ads Leads -->
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm rounded-4 bg-white overflow-hidden">
                <div class="card-header bg-white py-3 px-4 d-flex justify-content-between align-items-center border-bottom">
                    <h5 class="m-0 fw-bold text-dark"><i class="bi bi-lightning-fill me-2 text-warning"></i>New Customer Leads</h5>
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
                                    <span>System: <strong><?= Html::encode($lead['unit']) ?></strong></span>
                                    <span>Loc: <?= Html::encode($lead['location']) ?></span>
                                </div>
                                <div class="mt-2">
                                    <button class="btn btn-sm btn-success w-100 py-1" onclick="alert('Converting Lead to Job for <?= Html::encode($lead['name']) ?>');">
                                        <i class="bi bi-plus-circle me-1"></i> Assign Technician
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
