<?php 
$page_title = "Billing System";
include '../includes/header-admin.php'; 
?>
<div class="grid grid-4 mb-4">
    <div class="stat-card">
        <div class="stat-header">
            <div class="stat-icon blue"><i class="fas fa-dollar-sign"></i></div>
        </div>
        <div class="stat-body">
            <h3>$458,230</h3>
            <p>Total Revenue</p>
        </div>
    </div>
    <div class="stat-card">
        <div class="stat-header">
            <div class="stat-icon green"><i class="fas fa-check-circle"></i></div>
        </div>
        <div class="stat-body">
            <h3>$405,120</h3>
            <p>Paid</p>
        </div>
    </div>
    <div class="stat-card">
        <div class="stat-header">
            <div class="stat-icon orange"><i class="fas fa-clock"></i></div>
        </div>
        <div class="stat-body">
            <h3>$53,110</h3>
            <p>Pending</p>
        </div>
    </div>
    <div class="stat-card">
        <div class="stat-header">
            <div class="stat-icon red"><i class="fas fa-exclamation-triangle"></i></div>
        </div>
        <div class="stat-body">
            <h3>124</h3>
            <p>Overdue Bills</p>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Recent Bills</h3>
        <button class="btn btn-primary"><i class="fas fa-file-invoice"></i> New Invoice</button>
    </div>
    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th>Invoice ID</th>
                    <th>Patient</th>
                    <th>Date</th>
                    <th>Services</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>#INV-2024-089</strong></td>
                    <td>John Doe</td>
                    <td>Feb 20, 2026</td>
                    <td>Consultation, Lab Tests</td>
                    <td>$450</td>
                    <td><span class="badge badge-warning">Pending</span></td>
                    <td><button class="btn btn-sm btn-primary">View</button></td>
                </tr>
                <tr>
                    <td><strong>#INV-2024-088</strong></td>
                    <td>Sarah Smith</td>
                    <td>Feb 19, 2026</td>
                    <td>Surgery, Medicines</td>
                    <td>$5,200</td>
                    <td><span class="badge badge-success">Paid</span></td>
                    <td><button class="btn btn-sm btn-secondary">View</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?php include '../includes/footer.php'; ?>