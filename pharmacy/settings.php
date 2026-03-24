<?php 
$page_title = "Pharmacy Settings";
include '../includes/header-pharmacy.php'; 
?>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Inventory Settings</h3>
    </div>
    <div class="grid grid-2">
        <div class="form-group">
            <label class="form-label">Low Stock Alert Threshold</label>
            <input type="number" class="form-control" value="50">
        </div>
        <div class="form-group">
            <label class="form-label">Critical Stock Alert</label>
            <input type="number" class="form-control" value="20">
        </div>
    </div>
    <div class="form-group">
        <label style="display: flex; align-items: center; gap: 8px;">
            <input type="checkbox" checked>
            <span>Send email alerts for low stock</span>
        </label>
    </div>
    <div class="form-group">
        <label style="display: flex; align-items: center; gap: 8px;">
            <input type="checkbox" checked>
            <span>Auto-generate purchase orders</span>
        </label>
    </div>
    <button class="btn btn-primary">Save Settings</button>
</div>
<?php include '../includes/footer.php'; ?>