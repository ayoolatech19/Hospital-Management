<?php 
// session_start();
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

$docname=   $_SESSION['fullname'] ;

$sql = "SELECT * FROM appointment where doctors='$docname'";
$run = mysqli_query($conn, $sql);



if (isset($_POST['accept'])) {
    $id =  $_POST['appointment_id'];

    $update = "UPDATE appointment SET status='accepted' WHERE id=$id";
    mysqli_query($conn, $update);
}

if (isset($_POST['reject'])) {
    $id =  $_POST['appointment_id'];

    $update = "UPDATE appointment SET status='rejected' WHERE id=$id";
    mysqli_query($conn, $update);
}

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
    <form method="POST" style="display:inline;">
        <input type="hidden" name="appointment_id" value="<?php echo $row['id']; ?>">
        <button type="submit" name="accept" 
            style="padding:6px 12px; border:none; border-radius:6px; background:#22c55e; color:#fff; cursor:pointer; font-size:12px; margin-right:5px;">
            Accept
        </button>
    </form>

    <form method="POST" style="display:inline;">
        <input type="hidden" name="appointment_id" value="<?php echo $row['id']; ?>">
        <button type="submit" name="reject" 
            style="padding:6px 12px; border:none; border-radius:6px; background:#ef4444; color:#fff; cursor:pointer; font-size:12px;">
            Reject
        </button>
    </form>
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