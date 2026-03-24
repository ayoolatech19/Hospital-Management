<?php 
$page_title = "Manage Doctors";
include '../includes/header-admin.php'; 
?>
<div class="grid grid-4 mb-4"><div class="stat-card">
    <div class="stat-header">
        <div class="stat-icon blue"><i class="fas fa-user-md"></i></div>
    </div>
    <div class="stat-body">
        <h3>45</h3>
        <p>Total Doctors</p>
    </div>
</div><div class="stat-card">
    <div class="stat-header">
        <div class="stat-icon green"><i class="fas fa-user-check"></i></div>
    </div>
    <div class="stat-body">
        <h3>42</h3>
        <p>Active</p>
    </div>
</div></div>
<div class="card"><div class="card-header"><h3 class="card-title">All Doctors</h3>
<button class="btn btn-primary"><i class="fas fa-user-plus"></i> Add Doctor</button></div>
<div class="table-container"><table class="table"><thead><tr><th>ID</th><th>Name</th><th>Department</th><th>Specialization</th><th>Experience</th><th>Actions</th></tr></thead>
<tbody><tr><td>D-001</td><td>Dr. Sarah Williams</td><td>Cardiology</td><td>Heart Specialist</td><td>15 years</td>
<td><button class="btn btn-sm btn-secondary">View</button></td></tr></tbody></table></div></div>
<?php include '../includes/footer.php'; ?>