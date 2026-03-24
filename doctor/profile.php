<?php 
$page_title = "My Profile";
include '../includes/header-doctor.php'; 
?>
<div class="grid grid-2">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Professional Information</h3>
        </div>
        <form>
            <div class="form-group">
                <label class="form-label">Full Name</label>
                <input type="text" class="form-control" value="Dr. Sarah Williams">
            </div>
            <div class="form-group">
                <label class="form-label">Specialization</label>
                <input type="text" class="form-control" value="Cardiology">
            </div>
            <div class="grid grid-2">
                <div class="form-group">
                    <label class="form-label">License Number</label>
                    <input type="text" class="form-control" value="MED-12345">
                </div>
                <div class="form-group">
                    <label class="form-label">Years of Experience</label>
                    <input type="number" class="form-control" value="15">
                </div>
            </div>
            <div class="form-group">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" value="dr.williams@medicare.com">
            </div>
            <div class="form-group">
                <label class="form-label">Phone</label>
                <input type="tel" class="form-control" value="+1 234 567 8900">
            </div>
            <button type="submit" class="btn btn-primary w-full">Update Profile</button>
        </form>
    </div>
    
    <div>
        <div class="card mb-3">
            <div class="card-header">
                <h3 class="card-title">Profile Statistics</h3>
            </div>
            <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px;">
                <div style="text-align: center; padding: 16px; background: var(--bg-secondary); border-radius: 12px;">
                    <h3 style="font-size: 32px; font-weight: 700; color: var(--primary-color);">124</h3>
                    <p style="color: var(--text-tertiary); font-size: 14px;">Total Patients</p>
                </div>
                <div style="text-align: center; padding: 16px; background: var(--bg-secondary); border-radius: 12px;">
                    <h3 style="font-size: 32px; font-weight: 700; color: var(--success);">456</h3>
                    <p style="color: var(--text-tertiary); font-size: 14px;">Consultations</p>
                </div>
                <div style="text-align: center; padding: 16px; background: var(--bg-secondary); border-radius: 12px;">
                    <h3 style="font-size: 32px; font-weight: 700; color: var(--warning);">98%</h3>
                    <p style="color: var(--text-tertiary); font-size: 14px;">Success Rate</p>
                </div>
                <div style="text-align: center; padding: 16px; background: var(--bg-secondary); border-radius: 12px;">
                    <h3 style="font-size: 32px; font-weight: 700; color: var(--info);">4.9</h3>
                    <p style="color: var(--text-tertiary); font-size: 14px;">Rating</p>
                </div>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Change Password</h3>
            </div>
            <form>
                <div class="form-group">
                    <label class="form-label">Current Password</label>
                    <input type="password" class="form-control">
                </div>
                <div class="form-group">
                    <label class="form-label">New Password</label>
                    <input type="password" class="form-control">
                </div>
                <div class="form-group">
                    <label class="form-label">Confirm Password</label>
                    <input type="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary w-full">Change Password</button>
            </form>
        </div>
    </div>
</div>
<?php include '../includes/footer.php'; ?>