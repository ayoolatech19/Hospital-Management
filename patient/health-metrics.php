<?php 
$page_title = "Health Metrics";
include '../includes/header-patient.php'; 
?>
<div class="grid grid-4 mb-4">
    <div class="stat-card">
        <div class="stat-header">
            <div class="stat-icon red"><i class="fas fa-heartbeat"></i></div>
        </div>
        <div class="stat-body">
            <h3>120/80</h3>
            <p>Blood Pressure (mmHg)</p>
        </div>
    </div>
    <div class="stat-card">
        <div class="stat-header">
            <div class="stat-icon blue"><i class="fas fa-weight"></i></div>
        </div>
        <div class="stat-body">
            <h3>75 kg</h3>
            <p>Weight</p>
        </div>
    </div>
    <div class="stat-card">
        <div class="stat-header">
            <div class="stat-icon green"><i class="fas fa-tint"></i></div>
        </div>
        <div class="stat-body">
            <h3>98 mg/dL</h3>
            <p>Blood Sugar</p>
        </div>
    </div>
    <div class="stat-card">
        <div class="stat-header">
            <div class="stat-icon orange"><i class="fas fa-thermometer-half"></i></div>
        </div>
        <div class="stat-body">
            <h3>98.6°F</h3>
            <p>Body Temperature</p>
        </div>
    </div>
</div>

<div class="grid grid-2">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Blood Pressure Trend</h3>
        </div>
        <div style="height: 300px; display: flex; align-items: center; justify-content: center; color: var(--text-tertiary);">
            <div style="text-align: center;">
                <i class="fas fa-chart-line" style="font-size: 48px; margin-bottom: 16px; opacity: 0.3;"></i>
                <p>Chart will be rendered here with Chart.js</p>
            </div>
        </div>
    </div>
    
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Weight Tracking</h3>
        </div>
        <div style="height: 300px; display: flex; align-items: center; justify-content: center; color: var(--text-tertiary);">
            <div style="text-align: center;">
                <i class="fas fa-chart-bar" style="font-size: 48px; margin-bottom: 16px; opacity: 0.3;"></i>
                <p>Chart will be rendered here with Chart.js</p>
            </div>
        </div>
    </div>
</div>

<div class="card mt-4">
    <div class="card-header">
        <h3 class="card-title">Log New Measurement</h3>
    </div>
    <form>
        <div class="grid grid-4">
            <div class="form-group">
                <label class="form-label">Blood Pressure</label>
                <input type="text" class="form-control" placeholder="120/80">
            </div>
            <div class="form-group">
                <label class="form-label">Weight (kg)</label>
                <input type="number" class="form-control" placeholder="75">
            </div>
            <div class="form-group">
                <label class="form-label">Blood Sugar (mg/dL)</label>
                <input type="number" class="form-control" placeholder="98">
            </div>
            <div class="form-group">
                <label class="form-label">Temperature (°F)</label>
                <input type="number" class="form-control" placeholder="98.6">
            </div>
        </div>
        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save Measurement</button>
    </form>
</div>
<?php include '../includes/footer.php'; ?>