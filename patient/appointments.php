<?php 
session_start();
$page_title = "My Appointments";
include '../includes/header-patient.php'; 
$servername = "localhost";
$username = "root";
$password = "";
$database = "hospital_management";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 $username   =   $_SESSION['fullname'] ;
    



$sql="SELECT * from appointment where username='$username'";
  $run= mysqli_query($conn,$sql);
  





?>

<div class="card">

    <!-- Header -->
    <div class="card-header">
        <h3 class="card-title">Upcoming Appointments</h3>

        <button class="btn btn-primary" 
                onclick="window.location.href='book-appointment.php'">
            <i class="fas fa-plus"></i> Book New
        </button>
    </div>

    <!-- Table -->
    <div class="table-container">
        <table class="table">

            <thead>
                <tr>
                    <th>Date & Time</th>
                    <th>Doctor</th>
                    <th>Department</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>

         <tbody>
<?php
if (mysqli_num_rows($run) > 0) {

    while ($row = mysqli_fetch_assoc($run)) {

        $date = $row['pfd'];   // date column
        $time = $row['pft'];   // time column

        $datetime = $date . ' ' . $time;
        $formatted = date("M d, Y h:i A", strtotime($datetime));

        echo "<tr>
                <td>$formatted</td>

                <td>".$row['doctors']."</td>

                <td>".$row['department']."</td>

                <td>".$row['status']."</td>

                <td>
                    <button class='btn btn-sm btn-danger'>
                        Cancel
                    </button>
                </td>
              </tr>";
    }

} else {
    echo "<tr><td colspan='5' style='text-align:center;'>No appointments found</td></tr>";
}
?>
</tbody>

        </table>
    </div>

</div>

<?php include '../includes/footer.php'; ?>