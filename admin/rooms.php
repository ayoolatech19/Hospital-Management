<?php 
$page_title = "Rooms & Beds";
include '../includes/header-admin.php'; 
?>
<div class="grid grid-4 mb-4">
    <div class="stat-card">
        <div class="stat-header">
            <div class="stat-icon blue"><i class="fas fa-bed"></i></div>
        </div>
        <div class="stat-body">
            <h3>150</h3>
            <p>Total Beds</p>
        </div>
    </div>
    <div class="stat-card">
        <div class="stat-header">
            <div class="stat-icon green"><i class="fas fa-check"></i></div>
        </div>
        <div class="stat-body">
            <h3>128</h3>
            <p>Occupied</p>
        </div>
    </div>
    <div class="stat-card">
        <div class="stat-header">
            <div class="stat-icon orange"><i class="fas fa-door-open"></i></div>
        </div>
        <div class="stat-body">
            <h3>22</h3>
            <p>Available</p>
        </div>
    </div>
    <div class="stat-card">
        <div class="stat-header">
            <div class="stat-icon red"><i class="fas fa-percent"></i></div>
        </div>
        <div class="stat-body">
            <h3>85%</h3>
            <p>Occupancy Rate</p>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Room Status</h3>
    </div>
    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th>Room No</th>
                    <th>Type</th>
                    <th>Beds</th>
                    <th>Occupied</th>
                    <th>Patient</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>101</strong></td>
                    <td>Private</td>
                    <td>1</td>
                    <td>1</td>
                    <td>John Doe (P-001)</td>
                    <td><span class="badge badge-danger">Occupied</span></td>
                    <td><button class="btn btn-sm btn-secondary">View</button></td>
                </tr>
                <tr>
                    <td><strong>102</strong></td>
                    <td>Shared</td>
                    <td>2</td>
                    <td>1</td>
                    <td>Sarah Smith (P-045)</td>
                    <td><span class="badge badge-warning">Partial</span></td>
                    <td><button class="btn btn-sm btn-secondary">View</button></td>
                </tr>
                <tr>
                    <td><strong>103</strong></td>
                    <td>Private</td>
                    <td>1</td>
                    <td>0</td>
                    <td>-</td>
                    <td><span class="badge badge-success">Available</span></td>
                    <td><button class="btn btn-sm btn-primary">Assign</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?php include '../includes/footer.php'; ?>