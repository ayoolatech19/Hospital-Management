<?php 
$page_title = "Telemedicine";
include '../includes/header-patient.php'; 
?>
<div class="alert alert-info mb-4">
    <i class="fas fa-video"></i>
    <span>Connect with your doctor remotely through secure video consultations.</span>
</div>

<div class="grid grid-3 mb-4">
    <div class="stat-card">
        <div class="stat-header">
            <div class="stat-icon blue"><i class="fas fa-video"></i></div>
        </div>
        <div class="stat-body">
            <h3>5</h3>
            <p>Past Consultations</p>
        </div>
    </div>
    <div class="stat-card">
        <div class="stat-header">
            <div class="stat-icon green"><i class="fas fa-calendar-check"></i></div>
        </div>
        <div class="stat-body">
            <h3>2</h3>
            <p>Upcoming Sessions</p>
        </div>
    </div>
    <div class="stat-card">
        <div class="stat-header">
            <div class="stat-icon orange"><i class="fas fa-clock"></i></div>
        </div>
        <div class="stat-body">
            <h3>45 min</h3>
            <p>Total Time</p>
        </div>
    </div>
</div>

<div class="card mb-4">
    <div class="card-header">
        <h3 class="card-title">Schedule Video Consultation</h3>
    </div>
    <form>
        <div class="grid grid-2">
            <div class="form-group">
                <label class="form-label">Select Doctor</label>
                <select class="form-control" required>
                    <option value="">Choose a doctor</option>
                    <option>Dr. Sarah Williams - Cardiology</option>
                    <option>Dr. Michael Chen - General Practice</option>
                    <option>Dr. Emily Johnson - Pediatrics</option>
                </select>
            </div>
            <div class="form-group">
                <label class="form-label">Consultation Type</label>
                <select class="form-control" required>
                    <option value="">Select type</option>
                    <option>Follow-up</option>
                    <option>New Consultation</option>
                    <option>Prescription Renewal</option>
                    <option>Second Opinion</option>
                </select>
            </div>
        </div>
        <div class="grid grid-2">
            <div class="form-group">
                <label class="form-label">Preferred Date</label>
                <input type="date" class="form-control" required>
            </div>
            <div class="form-group">
                <label class="form-label">Preferred Time</label>
                <select class="form-control" required>
                    <option>09:00 AM</option>
                    <option>10:00 AM</option>
                    <option>11:00 AM</option>
                    <option>02:00 PM</option>
                    <option>03:00 PM</option>
                    <option>04:00 PM</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="form-label">Reason for Consultation</label>
            <textarea class="form-control" placeholder="Please describe your symptoms or concerns..." rows="4"></textarea>
        </div>
        <button type="submit" class="btn btn-primary w-full"><i class="fas fa-calendar-plus"></i> Request Consultation</button>
    </form>
</div>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Upcoming Video Consultations</h3>
    </div>
    <div style="display: flex; flex-direction: column; gap: 16px;">
        <div style="padding: 20px; background: var(--bg-secondary); border-radius: 12px; border-left: 4px solid var(--primary-color);">
            <div style="display: flex; justify-content: between; align-items: start; margin-bottom: 12px;">
                <div>
                    <h4 style="font-weight: 600; margin-bottom: 4px;">Dr. Sarah Williams - Cardiology</h4>
                    <p style="font-size: 14px; color: var(--text-tertiary);">
                        <i class="fas fa-calendar"></i> Tomorrow, Feb 25, 2026<br>
                        <i class="fas fa-clock"></i> 10:00 AM - 10:30 AM
                    </p>
                </div>
                <span class="badge badge-primary">Confirmed</span>
            </div>
            <div style="display: flex; gap: 8px;">
                <button class="btn btn-success btn-sm"><i class="fas fa-video"></i> Join Call</button>
                <button class="btn btn-secondary btn-sm"><i class="fas fa-calendar-times"></i> Reschedule</button>
                <button class="btn btn-danger btn-sm"><i class="fas fa-times"></i> Cancel</button>
            </div>
        </div>
    </div>
</div>
<?php include '../includes/footer.php'; ?>