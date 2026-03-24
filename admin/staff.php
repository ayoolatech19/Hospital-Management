<?php 
$page_title = "Manage Staff";
include '../includes/header-admin.php'; 
?>
<div class="grid grid-3 mb-4">
    <div class="stat-card">
        <div class="stat-header">
            <div class="stat-icon blue"><i class="fas fa-users"></i></div>
        </div>
        <div class="stat-body">
            <h3>85</h3>
            <p>Total Staff</p>
        </div>
    </div>
    <div class="stat-card">
        <div class="stat-header">
            <div class="stat-icon green"><i class="fas fa-user-nurse"></i></div>
        </div>
        <div class="stat-body">
            <h3>45</h3>
            <p>Nurses</p>
        </div>
    </div>
    <div class="stat-card">
        <div class="stat-header">
            <div class="stat-icon orange"><i class="fas fa-user-check"></i></div>
        </div>
        <div class="stat-body">
            <h3>40</h3>
            <p>Support Staff</p>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">All Staff Members</h3>
        <button class="btn btn-primary"><i class="fas fa-user-plus"></i> Add Staff</button>
    </div>
    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Department</th>
                    <th>Phone</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>S-001</td>
                    <td>Mary Johnson</td>
                    <td>Head Nurse</td>
                    <td>Cardiology</td>
                    <td>+1 234 567 8901</td>
                    <td><span class="badge badge-success">Active</span></td>
                    <td><button class="btn btn-sm btn-secondary">Edit</button></td>
                </tr>
                <tr>
                    <td>S-002</td>
                    <td>John Smith</td>
                    <td>Lab Technician</td>
                    <td>Laboratory</td>
                    <td>+1 234 567 8902</td>
                    <td><span class="badge badge-success">Active</span></td>
                    <td><button class="btn btn-sm btn-secondary">Edit</button></td>
                </tr>
                <tr>
                    <td>S-003</td>
                    <td>Emma Davis</td>
                    <td>Receptionist</td>
                    <td>Front Desk</td>
                    <td>+1 234 567 8903</td>
                    <td><span class="badge badge-success">Active</span></td>
                    <td><button class="btn btn-sm btn-secondary">Edit</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?php include '../includes/footer.php'; ?>