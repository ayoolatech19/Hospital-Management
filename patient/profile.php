<?php 
$page_title = "My Profile";
include '../includes/header-patient.php'; 
?>

<div class="grid grid-2"><div class="card"><div class="card-header"><h3 class="card-title">Personal Information</h3></div>
<form><div class="form-group"><label class="form-label">Full Name</label><input type="text" class="form-control" value="John Doe"></div>
<div class="form-group"><label class="form-label">Email</label><input type="email" class="form-control" value="john.doe@email.com"></div>
<div class="grid grid-2"><div class="form-group"><label class="form-label">Date of Birth</label><input type="date" class="form-control" value="1990-01-15"></div>
<div class="form-group"><label class="form-label">Gender</label><select class="form-control"><option>Male</option></select></div></div>
<button type="submit" class="btn btn-primary w-full">Update Profile</button></form></div>
<div class="card"><div class="card-header"><h3 class="card-title">Change Password</h3></div>
<form><div class="form-group"><label class="form-label">Current Password</label><input type="password" class="form-control"></div>
<div class="form-group"><label class="form-label">New Password</label><input type="password" class="form-control"></div>
<button type="submit" class="btn btn-primary w-full">Change Password</button></form></div></div>
<?php include '../includes/footer.php'; ?>