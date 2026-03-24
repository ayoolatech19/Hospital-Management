<?php 
$page_title = "Lab Results";
include '../includes/header-patient.php'; 
?>
<div class="alert alert-info mb-4">
    <i class="fas fa-info-circle"></i>
    <span>Your lab results will appear here once they are ready. We'll notify you when new results are available.</span>
</div>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Recent Lab Results</h3>
    </div>
    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th>Test Name</th>
                    <th>Date</th>
                    <th>Ordered By</th>
                    <th>Status</th>
                    <th>Result</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Complete Blood Count (CBC)</strong></td>
                    <td>Feb 20, 2026</td>
                    <td>Dr. Sarah Williams</td>
                    <td><span class="badge badge-success">Ready</span></td>
                    <td>Normal</td>
                    <td><button class="btn btn-sm btn-primary" onclick="openModal('viewResult')"><i class="fas fa-eye"></i> View</button></td>
                </tr>
                <tr>
                    <td><strong>Lipid Panel</strong></td>
                    <td>Feb 18, 2026</td>
                    <td>Dr. Sarah Williams</td>
                    <td><span class="badge badge-success">Ready</span></td>
                    <td>Normal</td>
                    <td><button class="btn btn-sm btn-primary"><i class="fas fa-eye"></i> View</button></td>
                </tr>
                <tr>
                    <td><strong>Thyroid Function Test</strong></td>
                    <td>Feb 22, 2026</td>
                    <td>Dr. Michael Chen</td>
                    <td><span class="badge badge-warning">Processing</span></td>
                    <td>Pending</td>
                    <td><button class="btn btn-sm btn-secondary" disabled><i class="fas fa-clock"></i> Wait</button></td>
                </tr>
                <tr>
                    <td><strong>Blood Glucose Test</strong></td>
                    <td>Feb 15, 2026</td>
                    <td>Dr. Sarah Williams</td>
                    <td><span class="badge badge-success">Ready</span></td>
                    <td>Normal</td>
                    <td><button class="btn btn-sm btn-primary"><i class="fas fa-eye"></i> View</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- View Result Modal -->
<div class="modal" id="viewResult">
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">Lab Result Details</h3>
            <button class="modal-close" onclick="closeModal('viewResult')">×</button>
        </div>
        <div class="modal-body">
            <div style="margin-bottom: 20px;">
                <h4 style="font-weight: 600; margin-bottom: 12px;">Complete Blood Count (CBC)</h4>
                <p style="color: var(--text-tertiary);">Test Date: Feb 20, 2026 | Ordered by: Dr. Sarah Williams</p>
            </div>
            <div class="table-container">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Parameter</th>
                            <th>Result</th>
                            <th>Normal Range</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>White Blood Cells</td>
                            <td>7.5 K/uL</td>
                            <td>4.5-11.0 K/uL</td>
                            <td><span class="badge badge-success">Normal</span></td>
                        </tr>
                        <tr>
                            <td>Red Blood Cells</td>
                            <td>4.8 M/uL</td>
                            <td>4.5-5.5 M/uL</td>
                            <td><span class="badge badge-success">Normal</span></td>
                        </tr>
                        <tr>
                            <td>Hemoglobin</td>
                            <td>14.2 g/dL</td>
                            <td>13.5-17.5 g/dL</td>
                            <td><span class="badge badge-success">Normal</span></td>
                        </tr>
                        <tr>
                            <td>Platelets</td>
                            <td>250 K/uL</td>
                            <td>150-400 K/uL</td>
                            <td><span class="badge badge-success">Normal</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-secondary" onclick="closeModal('viewResult')">Close</button>
            <button class="btn btn-primary"><i class="fas fa-download"></i> Download PDF</button>
        </div>
    </div>
</div>
<?php include '../includes/footer.php'; ?>