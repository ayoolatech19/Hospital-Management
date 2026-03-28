<?php 
session_start();
$page_title = "Prescriptions";
include '../includes/header-patient.php'; 

$servername = "localhost";
$username = "root";
$password = "";
$database = "hospital_management";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$username = $_SESSION['fullname'];

$sql = "SELECT * FROM patient_pres WHERE patient_info = '$username'";
$run = mysqli_query($conn, $sql);

?>
<div class="card">

    <div class="card-header">
        <h3 class="card-title">My Prescriptions</h3>
    </div>

    <div class="table-container">
        <table class="table">

            <thead>
                <tr>
                    <th>Medicine</th>
                    <th>Dosage</th>
                    <th>Duration</th>
                    <th>Doctor</th>
                    <th>Date</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>
                <?php
                if (mysqli_num_rows($run) > 0) {
                    while ($row = mysqli_fetch_assoc($run)) {

                        $medname   = $row['medname'];   
                        $dosage    = $row['dosage'];   

                        $meddosage = $medname . ' ' . $dosage;  
                        $duration  = $row['duration'];
                        $doctor    = $row['doctor'] ?? 'Dr. N/A';
                        $date      = date("M d, Y", strtotime($row['dates'] ?? date('Y-m-d')));
                        $status    = $row['status'] ?? 'Active';

                        echo "
                        <tr>
                            <td><strong>$meddosage</strong></td>
                            <td>$dosage</td>
                            <td>$duration</td>
                            <td>$doctor</td>
                            <td>$date</td>
                            <td><span class='badge badge-success'>$status</span></td>
                        </tr>
                        ";
                    }
                } else {
                    echo "<tr><td colspan='6'>No prescriptions found.</td></tr>";
                }
                ?>
            </tbody>

        </table>
    </div>

</div>

<?php include '../includes/footer.php'; ?>