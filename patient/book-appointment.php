<?php 
session_start();
$page_title = "Book Appointment";
include '../includes/header-patient.php'; 

$servername = "localhost";
$username = "root";
$password = "";
$database = "hospital_management";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['book'])) {

    $department = $_POST['department'];
    $doctor     = $_POST['doctor'];
    $date       = $_POST['date'];
    $time       = $_POST['time'];
    $reason     = $_POST['reason'];
    $username   =   $_SESSION['fullname'] ;
    


    $sql = "INSERT INTO appointment (username,department, doctors, pfd, pft, reasons)
            VALUES ('$username','$department', '$doctor', '$date', '$time', '$reason')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Appointment Booked Successfully!');</script>";
    } else {
        echo "<script>alert('Booking Failed!');</script>";
    }
}






?>

<div class="card">
    <form method="post">

        <!-- Department -->
        <div class="form-group">
            <label class="form-label">Select Department</label>
            <select class="form-control" name="department" required>
                <option value="">Choose Department</option>
                <option value="Cardiology">Cardiology</option>
                <option value="Neurology">Neurology</option>
                <option value="Orthopedics">Orthopedics</option>
            </select>
        </div>

        <!-- Doctor -->
        <div class="form-group">
            <label class="form-label">Select Doctor</label>
            <select class="form-control" name="doctor" required>
                <option value="">Choose Doctor</option>
                <option value="Dr Bill">Dr Bill</option>
                <option value="Dr Phill">Dr Phill</option>
                <option value="Dr Faith">Dr Faith</option>
            </select>
        </div>

        <!-- Date & Time -->
        <div class="grid grid-2">
            <div class="form-group">
                <label class="form-label">Preferred Date</label>
                <input type="date" name="date" class="form-control" required>
            </div>

            <div class="form-group">
                <label class="form-label">Preferred Time</label>
                <select class="form-control" name="time" required>
                    <option value="09:00 AM">09:00 AM</option>
                    <option value="10:00 AM">10:00 AM</option>
                </select>
            </div>
        </div>

        <!-- Reason -->
        <div class="form-group">
            <label class="form-label">Reason for Visit</label>
            <textarea class="form-control" name="reason" placeholder="Describe your symptoms..."></textarea>
        </div>

        <!-- Button -->
        <button type="submit" name="book" class="btn btn-primary w-full">
            <i class="fas fa-check"></i> Book Appointment
        </button>

    </form>
</div>

<?php include '../includes/footer.php'; ?>