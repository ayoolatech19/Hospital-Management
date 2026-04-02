<?php 
$page_title = "My Patients";
include '../includes/header-doctor.php'; 





?>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Patient List</h3>
    </div>

    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th>Patient ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Last Visit</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>P-001</td>
                    <td>John Doe</td>
                    <td>34</td>
                    <td>Feb 20, 2026</td>
                    <td>
                        <span class="badge badge-success">Active</span>
                    </td>
                    <td>
                        <button class="btn btn-sm btn-primary">View</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php include '../includes/footer.php'; ?>