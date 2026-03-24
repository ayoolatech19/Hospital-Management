<?php 
$page_title = "Billing & Payments";
include '../includes/header-patient.php'; 
?>
<div class="grid grid-4 mb-4"><div class="stat-card">
    <div class="stat-header">
        <div class="stat-icon red"><i class="fas fa-file-invoice-dollar"></i></div>
    </div>
    <div class="stat-body">
        <h3>$450</h3>
        <p>Pending Bills</p>
    </div>
</div><div class="stat-card">
    <div class="stat-header">
        <div class="stat-icon green"><i class="fas fa-check-circle"></i></div>
    </div>
    <div class="stat-body">
        <h3>$2,340</h3>
        <p>Paid This Year</p>
    </div>
</div></div>
<div class="card"><div class="card-header"><h3 class="card-title">Recent Bills</h3></div>
<div class="table-container"><table class="table"><thead><tr><th>Bill ID</th><th>Date</th><th>Service</th><th>Amount</th><th>Status</th><th>Action</th></tr></thead>
<tbody><tr><td>#INV-2024-089</td><td>Feb 20, 2026</td><td>Consultation - Cardiology</td><td>$150</td>
<td><span class="badge badge-warning">Pending</span></td><td><button class="btn btn-sm btn-success">Pay Now</button></td></tr></tbody></table></div></div>
<?php include '../includes/footer.php'; ?>