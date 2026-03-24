<?php 
$page_title = "Doctor Dashboard";
include '../includes/header-doctor.php'; 
?>
<div class="grid grid-4 mb-4">
    <div class="stat-card">
        <div class="stat-header">
            <div class="stat-icon blue"><i class="fas fa-calendar-day"></i></div>
        </div>
        <div class="stat-body">
            <h3>8</h3>
            <p>Today's Appointments</p>
        </div>
    </div>
    <div class="stat-card">
        <div class="stat-header">
            <div class="stat-icon green"><i class="fas fa-users"></i></div>
        </div>
        <div class="stat-body">
            <h3>124</h3>
            <p>Total Patients</p>
        </div>
    </div>
    <div class="stat-card">
        <div class="stat-header">
            <div class="stat-icon orange"><i class="fas fa-prescription"></i></div>
        </div>
        <div class="stat-body">
            <h3>45</h3>
            <p>Prescriptions Written</p>
        </div>
    </div>
    <div class="stat-card">
        <div class="stat-header">
            <div class="stat-icon red"><i class="fas fa-user-clock"></i></div>
        </div>
        <div class="stat-body">
            <h3>3</h3>
            <p>Pending Consultations</p>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Today's Schedule</h3>
    </div>
    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th>Time</th>
                    <th>Patient</th>
                    <th>Type</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>09:00 AM</strong></td>
                    <td>John Doe (P-001)</td>
                    <td>Check-up</td>
                    <td><span class="badge badge-success">Completed</span></td>
                    <td><button class="btn btn-sm btn-secondary"><i class="fas fa-eye"></i></button></td>
                </tr>
                <tr>
                    <td><strong>10:30 AM</strong></td>
                    <td>Sarah Smith (P-045)</td>
                    <td>Follow-up</td>
                    <td><span class="badge badge-info">In Progress</span></td>
                    <td><button class="btn btn-sm btn-primary"><i class="fas fa-notes-medical"></i></button></td>
                </tr>
                <tr>
                    <td><strong>02:00 PM</strong></td>
                    <td>Mike Johnson (P-089)</td>
                    <td>Consultation</td>
                    <td><span class="badge badge-warning">Waiting</span></td>
                    <td><button class="btn btn-sm btn-secondary"><i class="fas fa-eye"></i></button></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?php include '../includes/footer.php'; ?>