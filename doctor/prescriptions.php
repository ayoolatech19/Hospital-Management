<?php 
$page_title = "Write Prescription";
include '../includes/header-doctor.php'; 

$servername = "localhost";
$username = "root";
$password = "";
$database = "hospital_management";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$doctorname=  $_SESSION['fullname'];

$sql = "SELECT DISTINCT username 
        FROM appointment 
        WHERE doctors = '$doctorname'";

$run = mysqli_query($conn, $sql);       


if (isset($_POST['create'])) {

$patientid = $_POST['patient_id'];
$medname   = $_POST['medname'];
$dosage    = $_POST['dosage'];
$frequency = $_POST['frequency'];
$duration  = $_POST['duration'];
    


    $sqli = "INSERT INTO patient_pres (patient_info,medname,dosage,frequency,duration)
            VALUES ('$patientid','$medname','$dosage','$frequency','$duration')";

    if (mysqli_query($conn, $sqli)) {
        echo "<script>alert('prescription done!');</script>";
    } else {
        echo "<script>alert('Failed!');</script>";
    }
}
?>
<div class="card">

    <form method="post">

        <div class="form-group">
            <label class="form-label">Patient</label>
<select class="form-control" name="patient_id">
<?php
while ($row = mysqli_fetch_assoc($run)) {
  echo "<option value='".$row['username']."'>"
     .$row['username'].
     "</option>";
}
?>
</select>
        </div>
        <div class="form-group">
            <label class="form-label">Medicine Name</label>
            <input type="text" class="form-control" name="medname" placeholder="Enter medicine name">
        </div>

        <div class="grid grid-3">

            <div class="form-group">
                <label class="form-label">Dosage</label>
                <input type="text" class="form-control" name="dosage" placeholder="500mg">
            </div>

            <div class="form-group">
                <label class="form-label" >Frequency</label>
                <select class="form-control" name="frequency">
                    <option value="3times daily">3 times daily</option>
                    <option value="2times daily ">2 times daily</option>
                </select>
            </div>

            <div class="form-group">
                <label class="form-label">Duration</label>
                <input type="text" class="form-control" name="duration" placeholder="7 days">
            </div>

        </div>

        <button type="submit" name="create"  class="btn btn-primary w-full">
            Create Prescription
        </button>

    </form>

</div>

<?php include '../includes/footer.php'; ?>