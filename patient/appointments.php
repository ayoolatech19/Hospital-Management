<?php 
$page_title = "My Appointments";
include '../includes/header-patient.php'; 
?>

<div class="card"><div class="card-header"><h3 class="card-title">Upcoming Appointments</h3>
<button class="btn btn-primary" onclick="window.location.href='book-appointment.php'"><i class="fas fa-plus"></i> Book New</button></div>
<div class="table-container"><table class="table"><thead><tr><th>Date & Time</th><th>Doctor</th><th>Department</th><th>Status</th><th>Action</th></tr></thead>
<tbody><tr><td><strong>Feb 25, 2026 10:00 AM</strong></td><td>Dr. Sarah Williams</td><td>Cardiology</td>
<td><span class="badge badge-primary">Confirmed</span></td><td><button class="btn btn-sm btn-danger">Cancel</button></td></tr></tbody></table></div></div>
<?php include '../includes/footer.php'; ?>