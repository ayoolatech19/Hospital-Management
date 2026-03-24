<?php 
$page_title = "Medicine Inventory";
include '../includes/header-pharmacy.php'; 
?>

<div class="card"><div class="card-header"><h3 class="card-title">Stock Overview</h3>
<button class="btn btn-primary"><i class="fas fa-plus"></i> Add Medicine</button></div>
<div class="table-container"><table class="table"><thead><tr><th>Medicine</th><th>Category</th><th>Stock</th><th>Price</th><th>Expiry</th><th>Status</th></tr></thead>
<tbody><tr><td><strong>Paracetamol 500mg</strong></td><td>Pain Relief</td><td>150</td><td>$5.00</td><td>Dec 2026</td>
<td><span class="badge badge-success">In Stock</span></td></tr></tbody></table></div></div>
<?php include '../includes/footer.php'; ?>