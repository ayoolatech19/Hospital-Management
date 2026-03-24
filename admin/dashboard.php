<?php 
$page_title = "Admin Dashboard";
include '../includes/header-admin.php'; 
?>
<div class="grid grid-4 mb-4">
    <div class="stat-card">
        <div class="stat-header">
            <div class="stat-icon blue"><i class="fas fa-user-injured"></i></div>
            <span class="stat-change up"><i class="fas fa-arrow-up"></i> 12%</span>
        </div>
        <div class="stat-body">
            <h3>1,248</h3>
            <p>Total Patients</p>
        </div>
    </div>
    <div class="stat-card">
        <div class="stat-header">
            <div class="stat-icon green"><i class="fas fa-user-md"></i></div>
            <span class="stat-change up"><i class="fas fa-arrow-up"></i> 5%</span>
        </div>
        <div class="stat-body">
            <h3>45</h3>
            <p>Total Doctors</p>
        </div>
    </div>
    <div class="stat-card">
        <div class="stat-header">
            <div class="stat-icon orange"><i class="fas fa-calendar-check"></i></div>
        </div>
        <div class="stat-body">
            <h3>182</h3>
            <p>Today's Appointments</p>
        </div>
    </div>
    <div class="stat-card">
        <div class="stat-header">
            <div class="stat-icon red"><i class="fas fa-bed"></i></div>
        </div>
        <div class="stat-body">
            <h3>85%</h3>
            <p>Bed Occupancy</p>
        </div>
    </div>
</div>

<div class="grid grid-2">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Department Overview</h3>
        </div>
        <div class="table-container">
            <table class="table">
                <thead>
                    <tr>
                        <th>Department</th>
                        <th>Doctors</th>
                        <th>Patients</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Cardiology</strong></td>
                        <td>8</td>
                        <td>45</td>
                        <td><span class="badge badge-success">Active</span></td>
                    </tr>
                    <tr>
                        <td><strong>Neurology</strong></td>
                        <td>6</td>
                        <td>32</td>
                        <td><span class="badge badge-success">Active</span></td>
                    </tr>
                    <tr>
                        <td><strong>Emergency</strong></td>
                        <td>12</td>
                        <td>89</td>
                        <td><span class="badge badge-danger">Busy</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Revenue Overview</h3>
        </div>
        <div style="padding: 20px; text-align: center;">
            <h2 style="font-size: 48px; font-weight: 800; color: var(--primary-color); margin-bottom: 8px;">$458,230</h2>
            <p style="color: var(--text-tertiary); margin-bottom: 24px;">Total Revenue This Month</p>
            <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px;">
                <div style="padding: 16px; background: var(--bg-secondary); border-radius: 12px;">
                    <h4 style="font-size: 24px; font-weight: 700; color: var(--success);">$124,500</h4>
                    <p style="font-size: 12px; color: var(--text-tertiary);">OPD Revenue</p>
                </div>
                <div style="padding: 16px; background: var(--bg-secondary); border-radius: 12px;">
                    <h4 style="font-size: 24px; font-weight: 700; color: var(--info);">$333,730</h4>
                    <p style="font-size: 12px; color: var(--text-tertiary);">IPD Revenue</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include '../includes/footer.php'; ?>