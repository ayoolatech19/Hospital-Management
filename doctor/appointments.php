<?php 
$page_title = "Appointments";
include '../includes/header-doctor.php'; 
?>

<div class="card"><div class="card-header"><h3 class="card-title">Today's Appointments</h3></div>
<div class="table-container"><table class="table"><thead><tr><th>Time</th><th>Patient</th><th>Type</th><th>Status</th><th>Actions</th></tr></thead>
<tbody><tr><td>09:00 AM</td><td>John Doe (P-001)</td><td>Check-up</td><td><span class="badge badge-success">Completed</span></td>
<td><button class="btn btn-sm btn-primary">View</button></td></tr></tbody></table></div></div>
<?php include '../includes/footer.php'; ?>