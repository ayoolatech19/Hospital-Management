<!DOCTYPE html>
<html lang="en" data-theme="light">
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "hospital_management";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['create'])) {

    $firstname = $_POST['firstname'];
    $email    = $_POST['mail'];
    $phone    = $_POST['phone_num'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $role = $_POST['role'];
    $reg_id = rand(1000000000, 9999999999);
    $password = $_POST['password'];

    $sql = "INSERT INTO registration (reg_id, fullname, email, phone, dob, gender, password,roles)
            VALUES ('$reg_id','$firstname','$email','$phone','$dob','$gender','$password','$role')";

    if (mysqli_query($conn, $sql)) {
        echo "Account created successfully!";
    } else {
        echo "Account creation failed!";
    }
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - MediCare Hospital</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { min-height: 100vh; display: flex; align-items: center; justify-content: center; 
               background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)); padding: 40px 0; }
        .auth-container { width: 100%; max-width: 600px; padding: 20px; }
        .auth-card { background-color: var(--bg-card); border-radius: 24px; padding: 48px; box-shadow: var(--shadow-xl); }
        .auth-header { text-align: center; margin-bottom: 32px; }
        .auth-logo { width: 80px; height: 80px; 
                     background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)); 
                     border-radius: 20px; display: flex; align-items: center; justify-content: center; 
                     margin: 0 auto 20px; color: white; font-size: 40px; }
        .auth-title { font-size: 32px; font-weight: 800; margin-bottom: 8px; }
    </style>
</head>
<body>
    <button style="position: absolute; top: 20px; right: 20px; background: rgba(255,255,255,0.2); 
                   border: none; padding: 12px; border-radius: 12px; color: white; cursor: pointer;" 
            id="themeToggle"><i class="fas fa-moon"></i></button>

    <div class="auth-container">
        <div class="auth-card">
            <div class="auth-header">
                <div class="auth-logo"><i class="fas fa-heartbeat"></i></div>
                <h1 class="auth-title">Create Account</h1>
                <p style="color: var(--text-tertiary);">Register as a new patient</p>
            </div>

            <form method="post" onsubmit="return handleRegister(event)">
                <div class="grid grid-2">
                    <div class="form-group">
                        <label class="form-label">First Name</label>
                        <input type="text" name="firstname" class="form-control" placeholder="John" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Email Address</label>
                    <input type="email" name="mail" class="form-control" placeholder="john.doe@example.com" required>
                </div>

                <div class="form-group">
                    <label class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" name="phone_num" placeholder="+1 234 567 8900" required>
                </div>

                <div class="grid grid-2">
                    <div class="form-group">
                        <label class="form-label">Date of Birth</label>
                        <input type="date" name="dob" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Gender</label>
                        <select class="form-control" name="gender" required>
                            <option value="">Select</option>
                            <option>Male</option>
                            <option>Female</option>
                            <option>Other</option>
                        </select>
                    </div>
                </div>

                <!-- NEW ROLE SELECT -->
                <div class="form-group">
                    <label class="form-label">Register As</label>
                    <select name="role" required 
                        style="width: 100%; padding: 12px; border-radius: 12px; 
                               border: 1px solid #ddd; font-size: 14px; 
                               background-color: transparent; outline: none;">
                        
                        <option value="">Select</option>
                        <option value="admin">Admin</option>
                        <option value="patient">Patient</option>
                        <option value="pharmacy">Pharmacy</option>
                        <option value="doctor">Doctor</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Create a strong password" required>
                </div>

                <div class="form-group">
                    <label class="form-label">Confirm Password</label>
                    <input type="password" name="confirm_pass" class="form-control" placeholder="Confirm your password" required>
                </div>

                <div style="margin-bottom: 24px;">
                    <label style="display: flex; gap: 8px; font-size: 13px;">
                        <input type="checkbox" required>
                        <span>I agree to the <a href="#" style="color: var(--primary-color);">Terms of Service</a> and 
                        <a href="#" style="color: var(--primary-color);">Privacy Policy</a></span>
                    </label>
                </div>

                <button type="submit" name="create" class="btn btn-primary w-full btn-lg">
                    <i class="fas fa-user-plus"></i> Create Account
                </button>
            </form>

            <div style="text-align: center; margin-top: 24px; font-size: 14px;">
                Already have an account? <a href="login.php" style="color: var(--primary-color); font-weight: 600;">Login here</a>
            </div>
        </div>
    </div>

    <script src="assets/js/main.js"></script>
</body>
</html>