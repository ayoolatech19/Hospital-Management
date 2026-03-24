<?php 
$page_title = "Write Prescription";
include '../includes/header-doctor.php'; 
?>

<div class="card"><form><div class="form-group"><label class="form-label">Patient</label>
<select class="form-control"><option>John Doe (P-001)</option></select></div>
<div class="form-group"><label class="form-label">Medicine Name</label><input type="text" class="form-control" placeholder="Enter medicine name"></div>
<div class="grid grid-3"><div class="form-group"><label class="form-label">Dosage</label><input type="text" class="form-control" placeholder="500mg"></div>
<div class="form-group"><label class="form-label">Frequency</label><select class="form-control"><option>3 times daily</option><option>2 times daily</option></select></div>
<div class="form-group"><label class="form-label">Duration</label><input type="text" class="form-control" placeholder="7 days"></div></div>
<button type="submit" class="btn btn-primary w-full">Create Prescription</button></form></div>
<?php include '../includes/footer.php'; ?>