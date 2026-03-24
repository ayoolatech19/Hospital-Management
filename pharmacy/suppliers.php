<?php 
$page_title = "Suppliers";
include '../includes/header-pharmacy.php'; 
?>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Supplier List</h3>
        <button class="btn btn-primary"><i class="fas fa-plus"></i> Add Supplier</button>
    </div>
    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th>Supplier ID</th>
                    <th>Company Name</th>
                    <th>Contact Person</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>SUP-001</strong></td>
                    <td>MedSupply Corp</td>
                    <td>John Smith</td>
                    <td>+1 234 567 8900</td>
                    <td>john@medsupply.com</td>
                    <td><span class="badge badge-success">Active</span></td>
                    <td>
                        <button class="btn btn-sm btn-secondary">Edit</button>
                        <button class="btn btn-sm btn-primary">Order</button>
                    </td>
                </tr>
                <tr>
                    <td><strong>SUP-002</strong></td>
                    <td>PharmaTech Inc</td>
                    <td>Sarah Johnson</td>
                    <td>+1 234 567 8901</td>
                    <td>sarah@pharmatech.com</td>
                    <td><span class="badge badge-success">Active</span></td>
                    <td>
                        <button class="btn btn-sm btn-secondary">Edit</button>
                        <button class="btn btn-sm btn-primary">Order</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?php include '../includes/footer.php'; ?>