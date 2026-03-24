<?php 
$page_title = "Prescription Fulfillment";
include '../includes/header-pharmacy.php'; 
?>

<div class="card"><div class="card-header"><h3 class="card-title">Pending Prescriptions</h3></div>
<div class="table-container"><table class="table"><thead><tr><th>RX ID</th><th>Patient</th><th>Doctor</th><th>Medicines</th><th>Date</th><th>Action</th></tr></thead>
<tbody><tr><td>#RX-001</td><td>John Doe</td><td>Dr. Williams</td><td>Amoxicillin 500mg</td><td>Feb 20, 2026</td>
<td><button class="btn btn-sm btn-success">Dispense</button></td></tr></tbody></table></div></div>
<?php include '../includes/footer.php'; ?>