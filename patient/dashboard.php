<?php 
$page_title = "Dashboard";
include '../includes/header-patient.php'; 
?>
<div class="grid grid-4 mb-4">
    <div class="stat-card">
        <div class="stat-header">
            <div class="stat-icon blue"><i class="fas fa-calendar-check"></i></div>
            <span class="stat-change up"><i class="fas fa-arrow-up"></i> 2 New</span>
        </div>
        <div class="stat-body">
            <h3>5</h3>
            <p>Upcoming Appointments</p>
        </div>
    </div>
    <div class="stat-card">
        <div class="stat-header">
            <div class="stat-icon green"><i class="fas fa-prescription"></i></div>
        </div>
        <div class="stat-body">
            <h3>3</h3>
            <p>Active Prescriptions</p>
        </div>
    </div>
    <div class="stat-card">
        <div class="stat-header">
            <div class="stat-icon orange"><i class="fas fa-file-medical"></i></div>
        </div>
        <div class="stat-body">
            <h3>12</h3>
            <p>Medical Records</p>
        </div>
    </div>
    <div class="stat-card">
        <div class="stat-header">
            <div class="stat-icon red"><i class="fas fa-file-invoice-dollar"></i></div>
        </div>
        <div class="stat-body">
            <h3>$450</h3>
            <p>Pending Bills</p>
        </div>
    </div>
</div>

<div class="grid grid-2">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Upcoming Appointments</h3>
            <a href="appointments.php" class="card-action">View All</a>
        </div>
        <div style="display: flex; flex-direction: column; gap: 12px;">
            <div style="padding: 16px; background: var(--bg-secondary); border-radius: 12px; border-left: 4px solid var(--primary-color);">
                <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                    <strong>Dr. Sarah Williams - Cardiology</strong>
                    <span class="badge badge-primary">Tomorrow</span>
                </div>
                <p style="font-size: 14px; color: var(--text-tertiary);">
                    <i class="fas fa-clock"></i> Feb 25, 2026 at 10:00 AM<br>
                    <i class="fas fa-map-marker-alt"></i> Room 204, Building A
                </p>
            </div>
            <div style="padding: 16px; background: var(--bg-secondary); border-radius: 12px; border-left: 4px solid var(--secondary-color);">
                <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                    <strong>Dr. Michael Chen - General</strong>
                    <span class="badge badge-success">Feb 28</span>
                </div>
                <p style="font-size: 14px; color: var(--text-tertiary);">
                    <i class="fas fa-clock"></i> Feb 28, 2026 at 2:30 PM<br>
                    <i class="fas fa-map-marker-alt"></i> Room 105, Building B
                </p>
            </div>
        </div>
    </div>
    
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Active Prescriptions</h3>
            <a href="prescriptions.php" class="card-action">View All</a>
        </div>
        <div class="table-container">
            <table class="table">
                <thead>
                    <tr>
                        <th>Medicine</th>
                        <th>Dosage</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Amoxicillin</strong></td>
                        <td>500mg 3x daily</td>
                        <td><span class="badge badge-success">Active</span></td>
                    </tr>
                    <tr>
                        <td><strong>Ibuprofen</strong></td>
                        <td>400mg as needed</td>
                        <td><span class="badge badge-success">Active</span></td>
                    </tr>
                    <tr>
                        <td><strong>Lisinopril</strong></td>
                        <td>10mg daily</td>
                        <td><span class="badge badge-warning">Expiring Soon</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include '../includes/footer.php'; ?>