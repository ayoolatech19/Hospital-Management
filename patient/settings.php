<?php 
$page_title = "Settings";
include '../includes/header-patient.php'; 
?>
<div class="grid grid-2">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Notification Preferences</h3>
        </div>
        <div style="display: flex; flex-direction: column; gap: 16px;">
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <div>
                    <strong style="font-size: 14px;">Email Notifications</strong>
                    <p style="font-size: 12px; color: var(--text-tertiary); margin-top: 2px;">Receive appointment reminders via email</p>
                </div>
                <input type="checkbox" checked style="width: 20px; height: 20px; cursor: pointer;">
            </div>
            <div style="height: 1px; background: var(--border-color);"></div>
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <div>
                    <strong style="font-size: 14px;">SMS Notifications</strong>
                    <p style="font-size: 12px; color: var(--text-tertiary); margin-top: 2px;">Get text messages for appointments</p>
                </div>
                <input type="checkbox" checked style="width: 20px; height: 20px; cursor: pointer;">
            </div>
            <div style="height: 1px; background: var(--border-color);"></div>
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <div>
                    <strong style="font-size: 14px;">Lab Results</strong>
                    <p style="font-size: 12px; color: var(--text-tertiary); margin-top: 2px;">Notify when lab results are ready</p>
                </div>
                <input type="checkbox" checked style="width: 20px; height: 20px; cursor: pointer;">
            </div>
        </div>
    </div>
    
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Privacy Settings</h3>
        </div>
        <div style="display: flex; flex-direction: column; gap: 16px;">
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <div>
                    <strong style="font-size: 14px;">Share Medical Records</strong>
                    <p style="font-size: 12px; color: var(--text-tertiary); margin-top: 2px;">Allow doctors to access your medical history</p>
                </div>
                <input type="checkbox" checked style="width: 20px; height: 20px; cursor: pointer;">
            </div>
            <div style="height: 1px; background: var(--border-color);"></div>
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <div>
                    <strong style="font-size: 14px;">Two-Factor Authentication</strong>
                    <p style="font-size: 12px; color: var(--text-tertiary); margin-top: 2px;">Add extra security to your account</p>
                </div>
                <input type="checkbox" style="width: 20px; height: 20px; cursor: pointer;">
            </div>
        </div>
    </div>
</div>

<div class="card mt-4">
    <div class="card-header">
        <h3 class="card-title">Language & Region</h3>
    </div>
    <div class="grid grid-2">
        <div class="form-group">
            <label class="form-label">Language</label>
            <select class="form-control">
                <option>English</option>
                <option>Spanish</option>
                <option>French</option>
            </select>
        </div>
        <div class="form-group">
            <label class="form-label">Timezone</label>
            <select class="form-control">
                <option>EST (UTC-5)</option>
                <option>PST (UTC-8)</option>
                <option>GMT (UTC+0)</option>
            </select>
        </div>
    </div>
    <button class="btn btn-primary"><i class="fas fa-save"></i> Save Settings</button>
</div>
<?php include '../includes/footer.php'; ?>