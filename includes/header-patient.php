<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "hospital_management";

$conn = mysqli_connect($servername, $username, $password, $database);

$user_id = $_SESSION['user_id'];
$sql = "SELECT fullname FROM registration WHERE id = '$user_id' AND roles = 'patient'";
$run = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($run);

$fullname = $row['fullname'];
$initials = "";
foreach (explode(" ", $fullname) as $word) {
    if (!empty($word)) $initials .= strtoupper($word[0]);
}
?>
<!DOCTYPE html>
...
<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title ?? 'Dashboard'; ?> - MediCare Hospital</title>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="dashboard-container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-header">
                <div class="logo">
                    <div class="logo-icon">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <div class="logo-text">
                        <h2>MediCare</h2>
                        <p>Patient Portal</p>
                    </div>
                </div>
            </div>
            
            <!-- User Info -->
            <div class="sidebar-user">
                <div class="sidebar-user-avatar">
                    JD
                </div>
                <div class="sidebar-user-info">
                    <h4>John Doe</h4>
                    <p>Patient ID: P-2024-001</p>
                </div>
            </div>
            
            <nav class="sidebar-nav">
                <!-- Main Menu -->
                <div class="nav-section">
                    <h3 class="nav-section-title">Main Menu</h3>
                    <ul class="nav-menu">
                        <li class="nav-item">
                            <a href="dashboard.php" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="appointments.php" class="nav-link">
                                <i class="nav-icon fas fa-calendar-check"></i>
                                <span>Appointments</span>
                                <span class="nav-badge warning">2</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="book-appointment.php" class="nav-link">
                                <i class="nav-icon fas fa-calendar-plus"></i>
                                <span>Book Appointment</span>
                            </a>
                        </li>
                    </ul>
                </div>
                
                <!-- Medical Records -->
                <div class="nav-section">
                    <h3 class="nav-section-title">Medical Records</h3>
                    <ul class="nav-menu">
                        <li class="nav-item">
                            <a href="medical-history.php" class="nav-link">
                                <i class="nav-icon fas fa-file-medical"></i>
                                <span>Medical History</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="prescriptions.php" class="nav-link">
                                <i class="nav-icon fas fa-prescription"></i>
                                <span>Prescriptions</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="lab-results.php" class="nav-link">
                                <i class="nav-icon fas fa-flask"></i>
                                <span>Lab Results</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="health-metrics.php" class="nav-link">
                                <i class="nav-icon fas fa-heartbeat"></i>
                                <span>Health Metrics</span>
                            </a>
                        </li>
                    </ul>
                </div>
                
                <!-- Services -->
                <div class="nav-section">
                    <h3 class="nav-section-title">Services</h3>
                    <ul class="nav-menu">
                        <li class="nav-item">
                            <a href="telemedicine.php" class="nav-link">
                                <i class="nav-icon fas fa-video"></i>
                                <span>Telemedicine</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="billing.php" class="nav-link">
                                <i class="nav-icon fas fa-file-invoice-dollar"></i>
                                <span>Billing</span>
                            </a>
                        </li>
                    </ul>
                </div>
                
                <!-- Account -->
                <div class="nav-section">
                    <h3 class="nav-section-title">Account</h3>
                    <ul class="nav-menu">
                        <li class="nav-item">
                            <a href="profile.php" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="settings.php" class="nav-link">
                                <i class="nav-icon fas fa-cog"></i>
                                <span>Settings</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../logout.php" class="nav-link">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </aside>
        
        <!-- Main Content -->
        <main class="main-content">
            <!-- Header -->
            <header class="header">
                <div class="header-left">
                    <button class="menu-toggle" id="menuToggle">
                        <i class="fas fa-bars"></i>
                    </button>
                    <div>
                        <h1 class="page-title"><?php echo $page_title ?? 'Dashboard'; ?></h1>
                        <?php if (isset($breadcrumb)): ?>
                        <div class="breadcrumb">
                            <?php echo $breadcrumb; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                
                <div class="header-right">
                    <!-- Search Box -->
                    <div class="search-box">
                        <input type="text" placeholder="Search appointments, doctors...">
                        <i class="fas fa-search search-icon"></i>
                    </div>
                    
                    <div class="header-actions">
                        <!-- Theme Toggle -->
                        <button class="header-btn" id="themeToggle">
                            <i class="fas fa-moon"></i>
                        </button>
                        
                        <!-- Notifications -->
                        <button class="header-btn">
                            <i class="fas fa-bell"></i>
                            <span class="badge">3</span>
                        </button>
                        
                        <!-- Messages -->
                        <button class="header-btn">
                            <i class="fas fa-envelope"></i>
                            <span class="badge">5</span>
                        </button>
                    </div>
                    
                    <!-- User Profile -->
                    <div class="user-profile">
                       <div class="user-avatar">
    <?php echo $initials; ?>
</div>
<div class="user-info">
    <h4><?php echo $fullname; ?></h4>
    <p>Patient</p>
</div>
                    </div>
                </div>
            </header>

            
            <!-- Content Area -->
            <div class="content-area">
