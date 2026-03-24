<?php 
$page_title = "Pharmacy Dashboard";
include '../includes/header-pharmacy.php'; 
?>
<div class="grid grid-4 mb-4">
    <div class="stat-card">
        <div class="stat-header">
            <div class="stat-icon blue"><i class="fas fa-prescription"></i></div>
        </div>
        <div class="stat-body">
            <h3>28</h3>
            <p>Pending Prescriptions</p>
        </div>
    </div>
    <div class="stat-card">
        <div class="stat-header">
            <div class="stat-icon green"><i class="fas fa-boxes"></i></div>
        </div>
        <div class="stat-body">
            <h3>1,248</h3>
            <p>Medicines in Stock</p>
        </div>
    </div>
    <div class="stat-card">
        <div class="stat-header">
            <div class="stat-icon orange"><i class="fas fa-exclamation-triangle"></i></div>
        </div>
        <div class="stat-body">
            <h3>15</h3>
            <p>Low Stock Items</p>
        </div>
    </div>
    <div class="stat-card">
        <div class="stat-header">
            <div class="stat-icon red"><i class="fas fa-dollar-sign"></i></div>
        </div>
        <div class="stat-body">
            <h3>$45,230</h3>
            <p>Today's Sales</p>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Low Stock Alert</h3>
    </div>
    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th>Medicine</th>
                    <th>Current Stock</th>
                    <th>Min Required</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Paracetamol 500mg</strong></td>
                    <td>50</td>
                    <td>200</td>
                    <td><span class="badge badge-danger">Critical</span></td>
                    <td><button class="btn btn-sm btn-primary">Reorder</button></td>
                </tr>
                <tr>
                    <td><strong>Amoxicillin 250mg</strong></td>
                    <td>150</td>
                    <td>300</td>
                    <td><span class="badge badge-warning">Low</span></td>
                    <td><button class="btn btn-sm btn-primary">Reorder</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?php include '../includes/footer.php'; ?>