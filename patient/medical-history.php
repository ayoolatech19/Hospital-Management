<?php 
$page_title = "Medical History";
include '../includes/header-patient.php'; 

$servername = "localhost";
$username = "root";
$password = "";
$database = "hospital_management";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$username= $_SESSION['fullname'];


?>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Medical Records</h3>
    </div>

    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Doctor</th>
                    <th>Medicine prescribed</th>
                    <th>Dosage</th>
                    <th>Documents</th>
                </tr>
            </thead>
            <tbody>

<?php


$sql = "SELECT * FROM patient_pres WHERE patient_info = '$username' ORDER BY dates DESC";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
?>

<tr>
    <td><?php echo date("M d, Y", strtotime($row['dates'])); ?></td>
    <td><?php echo $row['doctor_name']; ?></td>
    <td><?php echo $row['medname']; ?></td>
    <td><?php echo $row['dosage']; ?></td>
    <td>
        <button class="btn btn-sm btn-secondary">
            <i class="fas fa-download"></i>
        </button>
    </td>
</tr>

<?php
    }
} else {
?>
<tr>
    <td colspan="5" style="text-align:center;">No medical records found</td>
</tr>
<?php } ?>

            </tbody>
        </table>
    </div>
</div>

<?php include '../includes/footer.php'; ?>