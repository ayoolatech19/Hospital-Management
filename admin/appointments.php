<?php 
$page_title = "All Appointments";
include '../includes/header-admin.php'; 
?>
<div class="grid grid-4 mb-4">
    <div class="stat-card">
        <div class="stat-header">
            <div class="stat-icon blue"><i class="fas fa-calendar-day"></i></div>
        </div>
        <div class="stat-body">
            <h3>182</h3>
            <p>Today's Appointments</p>
        </div>
    </div>
    <div class="stat-card">
        <div class="stat-header">
            <div class="stat-icon green"><i class="fas fa-check-circle"></i></div>
        </div>
        <div class="stat-body">
            <h3>145</h3>
            <p>Completed</p>
        </div>
    </div>
    <div class="stat-card">
        <div class="stat-header">
            <div class="stat-icon orange"><i class="fas fa-clock"></i></div>
        </div>
        <div class="stat-body">
            <h3>25</h3>
            <p>Pending</p>
        </div>
    </div>
    <div class="stat-card">
        <div class="stat-header">
            <div class="stat-icon red"><i class="fas fa-times-circle"></i></div>
        </div>
        <div class="stat-body">
            <h3>12</h3>
            <p>Cancelled</p>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">All Appointments</h3>
        <div style="display: flex; gap: 8px;">
            <input type="date" class="form-control" style="width: auto;">
            <select class="form-control" style="width: auto;">
                <option>All Doctors</option>
                <option>Dr. Williams</option>
                <option>Dr. Chen</option>
            </select>
        </div>
    </div>
    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Patient</th>
                    <th>Doctor</th>
                    <th>Date & Time</th>
                    <th>Department</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>#APT-001</td>
                    <td>John Doe</td>
                    <td>Dr. Williams</td>
                    <td>Feb 24, 2026 10:00 AM</td>
                    <td>Cardiology</td>
                    <td><span class="badge badge-success">Completed</span></td>
                    <td><button class="btn btn-sm btn-secondary">View</button></td>
                </tr>
                <tr>
                    <td>#APT-002</td>
                    <td>Sarah Smith</td>
                    <td>Dr. Chen</td>
                    <td>Feb 24, 2026 11:30 AM</td>
                    <td>General</td>
                    <td><span class="badge badge-info">In Progress</span></td>
                    <td><button class="btn btn-sm btn-secondary">View</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?php include '../includes/footer.php'; ?>