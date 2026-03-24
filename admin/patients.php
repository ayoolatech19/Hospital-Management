<?php 
$page_title = "Manage Patients";
include '../includes/header-admin.php'; 
?>
<div class="grid grid-4 mb-4"><div class="stat-card">
    <div class="stat-header">
        <div class="stat-icon blue"><i class="fas fa-users"></i></div>
    </div>
    <div class="stat-body">
        <h3>1,248</h3>
        <p>Total Patients</p>
    </div>
</div><div class="stat-card">
    <div class="stat-header">
        <div class="stat-icon green"><i class="fas fa-user-plus"></i></div>
    </div>
    <div class="stat-body">
        <h3>24</h3>
        <p>New This Month</p>
    </div>
</div></div>
<div class="card"><div class="card-header"><h3 class="card-title">All Patients</h3>
<button class="btn btn-primary"><i class="fas fa-user-plus"></i> Add Patient</button></div>
<div class="table-container"><table class="table"><thead><tr><th>ID</th><th>Name</th><th>Age</th><th>Phone</th><th>Last Visit</th><th>Actions</th></tr></thead>
<tbody><tr><td>P-001</td><td>John Doe</td><td>34</td><td>+1 234 567 8900</td><td>Feb 20, 2026</td>
<td><button class="btn btn-sm btn-secondary">View</button></td></tr></tbody></table></div></div>
<?php include '../includes/footer.php'; ?>