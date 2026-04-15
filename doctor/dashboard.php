<?php 
$page_title = "My Patients";
include '../includes/header-doctor.php'; 
$servername = "localhost";
$username = "root";
$password = "";
$database = "hospital_management";

$conn = mysqli_connect($servername, $username, $password, $database);
 
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$docname=   $_SESSION['fullname'] ;

$count_app = "SELECT doctors, COUNT(*) AS pending_count 
          FROM appointment 
          WHERE status = 'pending' 
          AND doctors = '$docname'
          AND dates = CURDATE()
          ";
$results = mysqli_query($conn, $count_app);          
$row = mysqli_fetch_assoc($results);
$pending_count = $row['pending_count'] ?? 0;


$count_query = "SELECT COUNT(DISTINCT username) AS totalpatient 
                FROM appointment 
                WHERE doctors = '$docname'";

$results = mysqli_query($conn, $count_query);          
$row = mysqli_fetch_assoc($results);
$total_patients = $row['totalpatient'] ?? 0;


$count_pres = "SELECT COUNT(id) AS totalprescription 
                FROM patient_pres 
                WHERE doctor_name = '$docname'";

$results = mysqli_query($conn, $count_pres);          
$row = mysqli_fetch_assoc($results);
$total_prescription = $row['totalprescription'] ?? 0;







?>
<div class="grid grid-4 mb-4">
    <div class="stat-card">
        <div class="stat-header">
            <div class="stat-icon blue"><i class="fas fa-calendar-day"></i></div>
        </div>
        <div class="stat-body">
            <h3><?php echo $pending_count?></h3>
            <p>Today's Appointments</p>
        </div>
    </div>
    <div class="stat-card">
        <div class="stat-header">
            <div class="stat-icon green"><i class="fas fa-users"></i></div>
        </div>
        <div class="stat-body">
            <h3><?php echo $total_patients?></h3>
            <p>Total Patients</p>
        </div>
    </div>
    <div class="stat-card">
        <div class="stat-header">
            <div class="stat-icon orange"><i class="fas fa-prescription"></i></div>
        </div>
        <div class="stat-body">
            <h3><?php echo $total_prescription?></h3>
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