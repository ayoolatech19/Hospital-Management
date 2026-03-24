<?php 
$page_title = "Settings";
include '../includes/header-doctor.php'; 
?>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Consultation Settings</h3>
    </div>
    <div class="grid grid-2">
        <div class="form-group">
            <label class="form-label">Average Consultation Time (minutes)</label>
            <input type="number" class="form-control" value="30">
        </div>
        <div class="form-group">
            <label class="form-label">Break Time Between Appointments (minutes)</label>
            <input type="number" class="form-control" value="10">
        </div>
    </div>
    <div class="form-group">
        <label style="display: flex; align-items: center; gap: 8px; cursor: pointer;">
            <input type="checkbox" checked>
            <span>Allow online booking</span>
        </label>
    </div>
    <div class="form-group">
        <label style="display: flex; align-items: center; gap: 8px; cursor: pointer;">
            <input type="checkbox" checked>
            <span>Enable telemedicine consultations</span>
        </label>
    </div>
    <button class="btn btn-primary">Save Settings</button>
</div>
<?php include '../includes/footer.php'; ?>