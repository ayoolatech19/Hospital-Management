<?php 
$page_title = "My Schedule";
include '../includes/header-doctor.php'; 
?>
<div class="card mb-4">
    <div class="card-header">
        <h3 class="card-title">Weekly Schedule</h3>
        <button class="btn btn-primary"><i class="fas fa-calendar-plus"></i> Add Availability</button>
    </div>
    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th>Day</th>
                    <th>Morning Shift</th>
                    <th>Afternoon Shift</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Monday</strong></td>
                    <td>09:00 AM - 12:00 PM</td>
                    <td>02:00 PM - 05:00 PM</td>
                    <td><span class="badge badge-success">Active</span></td>
                    <td><button class="btn btn-sm btn-secondary"><i class="fas fa-edit"></i></button></td>
                </tr>
                <tr>
                    <td><strong>Tuesday</strong></td>
                    <td>09:00 AM - 12:00 PM</td>
                    <td>02:00 PM - 05:00 PM</td>
                    <td><span class="badge badge-success">Active</span></td>
                    <td><button class="btn btn-sm btn-secondary"><i class="fas fa-edit"></i></button></td>
                </tr>
                <tr>
                    <td><strong>Wednesday</strong></td>
                    <td>09:00 AM - 12:00 PM</td>
                    <td>-</td>
                    <td><span class="badge badge-success">Active</span></td>
                    <td><button class="btn btn-sm btn-secondary"><i class="fas fa-edit"></i></button></td>
                </tr>
                <tr>
                    <td><strong>Thursday</strong></td>
                    <td>09:00 AM - 12:00 PM</td>
                    <td>02:00 PM - 05:00 PM</td>
                    <td><span class="badge badge-success">Active</span></td>
                    <td><button class="btn btn-sm btn-secondary"><i class="fas fa-edit"></i></button></td>
                </tr>
                <tr>
                    <td><strong>Friday</strong></td>
                    <td>09:00 AM - 12:00 PM</td>
                    <td>-</td>
                    <td><span class="badge badge-success">Active</span></td>
                    <td><button class="btn btn-sm btn-secondary"><i class="fas fa-edit"></i></button></td>
                </tr>
                <tr>
                    <td><strong>Saturday</strong></td>
                    <td>-</td>
                    <td>-</td>
                    <td><span class="badge badge-danger">Off</span></td>
                    <td><button class="btn btn-sm btn-secondary"><i class="fas fa-edit"></i></button></td>
                </tr>
                <tr>
                    <td><strong>Sunday</strong></td>
                    <td>-</td>
                    <td>-</td>
                    <td><span class="badge badge-danger">Off</span></td>
                    <td><button class="btn btn-sm btn-secondary"><i class="fas fa-edit"></i></button></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Set Leave/Time Off</h3>
    </div>
    <form>
        <div class="grid grid-2">
            <div class="form-group">
                <label class="form-label">From Date</label>
                <input type="date" class="form-control" required>
            </div>
            <div class="form-group">
                <label class="form-label">To Date</label>
                <input type="date" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <label class="form-label">Reason</label>
            <textarea class="form-control" placeholder="Reason for leave..."></textarea>
        </div>
        <button type="submit" class="btn btn-primary"><i class="fas fa-calendar-times"></i> Request Leave</button>
    </form>
</div>
<?php include '../includes/footer.php'; ?>