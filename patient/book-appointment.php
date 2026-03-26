<?php 
$page_title = "Book Appointment";
include '../includes/header-patient.php'; 














?>

<div class="card">
    <form>

        <div class="form-group">
            <label class="form-label">Select Department</label>
            <select class="form-control" required>
                <option value="">Choose Department</option>
                <option>Cardiology</option>
                <option>Neurology</option>
                <option>Orthopedics</option>
            </select>
        </div>

        <div class="form-group">
            <label class="form-label">Select Doctor</label>
            <select class="form-control" required>
                <option value="">Choose Doctor</option>
            </select>
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
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="form-label">Reason for Visit</label>
            <textarea class="form-control" placeholder="Describe your symptoms..."></textarea>
        </div>

        <button type="submit" class="btn btn-primary w-full">
            <i class="fas fa-check"></i> Book Appointment
        </button>

    </form>
</div>

<?php include '../includes/footer.php'; ?>