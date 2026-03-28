<?php 
$page_title = "Appointments";
include '../includes/header-doctor.php'; 

$servername = "localhost";
$username = "root";
$password = "";
$database = "hospital_management";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM appointment";
$run = mysqli_query($conn, $sql);
?>

<div class="card">

    <div class="card-header">
        <h3 class="card-title">Today's Appointments</h3>
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
                <?php
                while ($row = mysqli_fetch_assoc($run)) {
                ?>
                    <tr>
                        <td><?php echo $row['pft']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['reasons']; ?></td>
                        <td>
                            <span class="badge badge-<?php echo ($row['status'] == 'pending') ? 'success' : 'warning'; ?>">
                                <?php echo $row['status']; ?>
                            </span>
                        </td>
                        <td>
                            <button class="btn btn-sm btn-primary">View</button>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>

        </table>
    </div>

</div>

<?php include '../includes/footer.php'; ?>