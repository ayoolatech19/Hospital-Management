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

$sql = "SELECT DISTINCT * 
        FROM appointment 
        WHERE doctors = '$docname'";

$run = mysqli_query($conn, $sql);  

?>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Patient List</h3>
    </div>

    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Last Visit</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
<tbody>
<?php
if (mysqli_num_rows($run) > 0) {

    while ($row = mysqli_fetch_assoc($run)) {

        $username = $row['username'];
        $pfdd = $row['pfd'];
         
    $formatted_date = date("M j, Y", strtotime($pfdd));

        echo "<tr>
                <td>$username</td>
                <td>$formatted_date</td>
                <td>
                    <span class='badge badge-success'>Active</span>
                </td>
                <td>
                    <button class='btn btn-sm btn-primary'>View</button>
                </td>
              </tr>";
    }

} else {
    echo "<tr>
            <td colspan='5'>No patients found</td>
          </tr>";
}
?>
</tbody>
        </table>
    </div>
</div>

<?php include '../includes/footer.php'; ?>