<?php 
$page_title = "System Settings";
include '../includes/header-admin.php'; 
?>
<div class="card mb-4">
    <div class="card-header">
        <h3 class="card-title">Hospital Information</h3>
    </div>
    <div class="grid grid-2">
        <div class="form-group">
            <label class="form-label">Hospital Name</label>
            <input type="text" class="form-control" value="MediCare Hospital">
        </div>
        <div class="form-group">
            <label class="form-label">Registration Number</label>
            <input type="text" class="form-control" value="HOSP-2024-001">
        </div>
    </div>
    <div class="form-group">
        <label class="form-label">Address</label>
        <textarea class="form-control" rows="3">123 Healthcare Street, Medical District, City, State 12345</textarea>
    </div>
    <div class="grid grid-2">
        <div class="form-group">
            <label class="form-label">Phone</label>
            <input type="tel" class="form-control" value="+1 234 567 8900">
        </div>
        <div class="form-group">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" value="info@medicare.com">
        </div>
    </div>
    <button class="btn btn-primary">Save Changes</button>
</div>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">System Configuration</h3>
    </div>
    <div class="form-group">
        <label style="display: flex; align-items: center; gap: 8px;">
            <input type="checkbox" checked>
            <span>Enable online appointment booking</span>
        </label>
    </div>
    <div class="form-group">
        <label style="display: flex; align-items: center; gap: 8px;">
            <input type="checkbox" checked>
            <span>Allow telemedicine consultations</span>
        </label>
    </div>
    <div class="form-group">
        <label style="display: flex; align-items: center; gap: 8px;">
            <input type="checkbox" checked>
            <span>Send email notifications</span>
        </label>
    </div>
    <button class="btn btn-primary">Save Settings</button>
</div>
<?php include '../includes/footer.php'; ?>