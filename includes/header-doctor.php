<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "hospital_management";

$conn = mysqli_connect($servername, $username, $password, $database);

$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM registration WHERE id = '$user_id' AND roles = 'doctor'";
$run = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($run);

$fullname = $row['fullname'];
$initials = "";
foreach (explode(" ", $fullname) as $word) {
    if (!empty($word)) $initials .= strtoupper($word[0]);
}
?>

<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title ?? 'Dashboard'; ?> - MediCare Hospital</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="dashboard-container">
        <aside class="sidebar">
            <div class="sidebar-header">
                <div class="logo">
                    <div class="logo-icon"><i class="fas fa-user-md"></i></div>
                    <div class="logo-text">
                        <h2>MediCare</h2>
                        <p>Doctor Portal</p>
                    </div>
                </div>
            </div>
            <nav class="sidebar-nav">
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
                            <a href="patients.php" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <span>My Patients</span>
                                
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="appointments.php" class="nav-link">
                                <i class="nav-icon fas fa-calendar-check"></i>
                                <span>Appointments</span>
                                <span class="nav-badge warning">5</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="nav-section">
                    <h3 class="nav-section-title">Medical</h3>
                    <ul class="nav-menu">
                        <li class="nav-item">
                            <a href="prescriptions.php" class="nav-link">
                                <i class="nav-icon fas fa-prescription"></i>
                                <span>Prescriptions</span>
                                
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="schedule.php" class="nav-link">
                                <i class="nav-icon fas fa-clock"></i>
                                <span>My Schedule</span>
                                
                            </a>
                        </li>
                    </ul>
                </div>
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
                    </ul>
                </div>
            </nav>
        </aside>
        <main class="main-content">
            <header class="header">
                <div class="header-left">
                    <button class="menu-toggle" id="menuToggle"><i class="fas fa-bars"></i></button>
                    <div>
                        <h1 class="page-title"><?php echo $page_title ?? 'Dashboard'; ?></h1>
                    </div>
                </div>
                <div class="header-right">
                    <div class="search-box">
                        <input type="text" placeholder="Search...">
                        <i class="fas fa-search search-icon"></i>
                    </div>
                    <div class="header-actions">
                        <button class="header-btn" id="themeToggle"><i class="fas fa-moon"></i></button>
                        <button class="header-btn"><i class="fas fa-bell"></i><span class="badge">3</span></button>
                    </div>
                    <div class="user-profile">
                        <div class="user-avatar">
                        </div>
                        <div class="user-info">
                            <h4><?php echo $fullname ?></h4>
                            <p>Doctor</p>
                        </div>
                    </div>
                </div>
            </header>
            <div class="content-area">