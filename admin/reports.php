<?php 
$page_title = "Reports & Analytics";
include '../includes/header-admin.php'; 
?>
<div class="card mb-4">
    <div class="card-header">
        <h3 class="card-title">Generate Report</h3>
    </div>
    <div class="grid grid-3">
        <div class="form-group">
            <label class="form-label">Report Type</label>
            <select class="form-control">
                <option>Patient Statistics</option>
                <option>Revenue Report</option>
                <option>Department Performance</option>
                <option>Doctor Performance</option>
                <option>Appointment Summary</option>
            </select>
        </div>
        <div class="form-group">
            <label class="form-label">Date Range</label>
            <select class="form-control">
                <option>This Month</option>
                <option>Last Month</option>
                <option>Last 3 Months</option>
                <option>This Year</option>
                <option>Custom Range</option>
            </select>
        </div>
        <div class="form-group">
            <label class="form-label">Format</label>
            <select class="form-control">
                <option>PDF</option>
                <option>Excel</option>
                <option>CSV</option>
            </select>
        </div>
    </div>
    <button class="btn btn-primary"><i class="fas fa-file-download"></i> Generate Report</button>
</div>

<div class="grid grid-2">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Monthly Revenue Trend</h3>
        </div>
        <div style="height: 300px; display: flex; align-items: center; justify-content: center; color: var(--text-tertiary);">
            <div style="text-align: center;">
                <i class="fas fa-chart-line" style="font-size: 48px; margin-bottom: 16px; opacity: 0.3;"></i>
                <p>Revenue chart will be rendered here</p>
            </div>
        </div>
    </div>
    
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Department Wise Patients</h3>
        </div>
        <div style="height: 300px; display: flex; align-items: center; justify-content: center; color: var(--text-tertiary);">
            <div style="text-align: center;">
                <i class="fas fa-chart-pie" style="font-size: 48px; margin-bottom: 16px; opacity: 0.3;"></i>
                <p>Pie chart will be rendered here</p>
            </div>
        </div>
    </div>
</div>
<?php include '../includes/footer.php'; ?>