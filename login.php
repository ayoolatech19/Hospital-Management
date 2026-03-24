<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - MediCare Hospital</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { min-height: 100vh; display: flex; align-items: center; justify-content: center; 
               background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)); }
        .auth-container { width: 100%; max-width: 500px; padding: 20px; }
        .auth-card { background-color: var(--bg-card); border-radius: 24px; padding: 48px; box-shadow: var(--shadow-xl); }
        .auth-header { text-align: center; margin-bottom: 32px; }
        .auth-logo { width: 80px; height: 80px; 
                     background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)); 
                     border-radius: 20px; display: flex; align-items: center; justify-content: center; 
                     margin: 0 auto 20px; color: white; font-size: 40px; }
        .auth-title { font-size: 32px; font-weight: 800; margin-bottom: 8px; }
        .auth-subtitle { color: var(--text-tertiary); font-size: 14px; }
        .role-selector { display: grid; grid-template-columns: repeat(2, 1fr); gap: 12px; margin-bottom: 24px; }
        .role-btn { padding: 16px; border: 2px solid var(--border-color); border-radius: 12px; 
                    background: var(--bg-secondary); cursor: pointer; transition: all 0.2s; text-align: center; }
        .role-btn:hover { border-color: var(--primary-color); background: rgba(14, 165, 233, 0.05); }
        .role-btn.active { border-color: var(--primary-color); background: rgba(14, 165, 233, 0.1); }
        .role-btn i { font-size: 28px; color: var(--primary-color); display: block; margin-bottom: 8px; }
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
                <h1 class="auth-title">Welcome Back</h1>
                <p class="auth-subtitle">Sign in to MediCare Hospital Management System</p>
            </div>
            <div class="role-selector">
                <div class="role-btn active" onclick="selectRole(this, 'patient')">
                    <i class="fas fa-user"></i>
                    <strong>Patient</strong>
                </div>
                <div class="role-btn" onclick="selectRole(this, 'doctor')">
                    <i class="fas fa-user-md"></i>
                    <strong>Doctor</strong>
                </div>
                <div class="role-btn" onclick="selectRole(this, 'admin')">
                    <i class="fas fa-user-shield"></i>
                    <strong>Admin</strong>
                </div>
                <div class="role-btn" onclick="selectRole(this, 'pharmacy')">
                    <i class="fas fa-pills"></i>
                    <strong>Pharmacy</strong>
                </div>
            </div>
            <form onsubmit="return handleLogin(event)">
                <div class="form-group">
                    <label class="form-label">Email or ID</label>
                    <input type="text" class="form-control" placeholder="Enter your email or ID" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" placeholder="Enter password" required>
                </div>
                <div style="display: flex; justify-content: space-between; margin-bottom: 24px;">
                    <label style="display: flex; align-items: center; gap: 8px;">
                        <input type="checkbox"> <span style="font-size: 14px;">Remember me</span>
                    </label>
                    <a href="#" style="color: var(--primary-color); font-size: 14px; font-weight: 600;">Forgot Password?</a>
                </div>
                <button type="submit" class="btn btn-primary w-full btn-lg">
                    <i class="fas fa-sign-in-alt"></i> Sign In
                </button>
            </form>
            <div style="text-align: center; margin-top: 24px; color: var(--text-tertiary); font-size: 14px;">
                Don't have an account? <a href="register.php" style="color: var(--primary-color); font-weight: 600;">Register here</a>
            </div>
        </div>
    </div>
    <script src="assets/js/main.js"></script>
    <script>
        let selectedRole = 'patient';
        function selectRole(btn, role) {
            document.querySelectorAll('.role-btn').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            selectedRole = role;
        }
        function handleLogin(e) {
            e.preventDefault();
            setTimeout(() => window.location.href = selectedRole + '/dashboard.php', 500);
            return false;
        }
    </script>
</body>
</html>