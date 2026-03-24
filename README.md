# 🏥 MediCare Hospital Management System

A complete, ultra-modern hospital management system with HTML, CSS, and JavaScript. Production-ready frontend for your PHP backend integration.

## ✨ Features

### 🎨 Design
- **Medical Green/Blue Theme** - Professional healthcare aesthetics
- **Dark/Light Mode Toggle** - User preference support
- **Ultra Modern UI** - Clean, technical, minimalist design
- **Fully Responsive** - Mobile, tablet, desktop optimized
- **Smooth Animations** - Professional transitions

### 👥 Multi-Portal System

#### 🩺 **PATIENT PORTAL** (8 Complete Pages)
1. ✅ Dashboard - Medical overview with stats
2. ✅ Appointments - View & manage appointments
3. ✅ Book Appointment - Schedule new visits
4. ✅ Medical History - Complete medical records
5. ✅ Prescriptions - View active medications
6. ✅ Billing & Payments - Invoice management
7. ✅ Profile - Personal information
8. ✅ Settings - Account preferences

#### 👨‍⚕️ **DOCTOR PORTAL** (7 Complete Pages)
1. ✅ Dashboard - Today's schedule & statistics
2. ✅ My Patients - Patient list management
3. ✅ Appointments - Daily appointment schedule
4. ✅ Write Prescriptions - Create new prescriptions
5. ✅ Schedule - Manage availability
6. ✅ Profile - Doctor information
7. ✅ Settings - Portal preferences

#### 🏛️ **ADMIN PORTAL** (10 Complete Pages)
1. ✅ Dashboard - Hospital overview & analytics
2. ✅ Manage Patients - Patient database
3. ✅ Manage Doctors - Doctor database
4. ✅ Manage Staff - Staff management
5. ✅ Appointments - All appointments view
6. ✅ Departments - Department management
7. ✅ Rooms & Beds - Facility management
8. ✅ Billing System - Financial management
9. ✅ Reports & Analytics - Data insights
10. ✅ Settings - System configuration

#### 💊 **PHARMACY PORTAL** (5 Complete Pages)
1. ✅ Dashboard - Pharmacy overview
2. ✅ Inventory - Medicine stock management
3. ✅ Prescriptions - Fulfillment queue
4. ✅ Suppliers - Vendor management
5. ✅ Settings - Pharmacy configuration

#### 🔐 **AUTHENTICATION** (3 Pages)
- Login with role selection (Patient/Doctor/Admin/Pharmacy)
- Registration (Patient signup)
- Index (Auto-redirect)

## 📁 Project Structure

```
hospital-management/
├── assets/
│   ├── css/
│   │   └── style.css          # Complete styling system
│   └── js/
│       └── main.js            # All JavaScript functions
├── includes/
│   ├── header-patient.php     # Patient portal header
│   ├── header-doctor.php      # Doctor portal header
│   ├── header-admin.php       # Admin portal header
│   ├── header-pharmacy.php    # Pharmacy portal header
│   └── footer.php             # Universal footer
├── patient/                   # Patient Portal (8 pages)
│   ├── dashboard.php
│   ├── appointments.php
│   ├── book-appointment.php
│   ├── medical-history.php
│   ├── prescriptions.php
│   ├── billing.php
│   ├── profile.php
│   └── settings.php
├── doctor/                    # Doctor Portal (7 pages)
│   ├── dashboard.php
│   ├── patients.php
│   ├── appointments.php
│   ├── prescriptions.php
│   ├── schedule.php
│   ├── profile.php
│   └── settings.php
├── admin/                     # Admin Portal (10 pages)
│   ├── dashboard.php
│   ├── patients.php
│   ├── doctors.php
│   ├── staff.php
│   ├── appointments.php
│   ├── departments.php
│   ├── rooms.php
│   ├── billing.php
│   ├── reports.php
│   └── settings.php
├── pharmacy/                  # Pharmacy Portal (5 pages)
│   ├── dashboard.php
│   ├── inventory.php
│   ├── prescriptions.php
│   ├── suppliers.php
│   └── settings.php
├── login.php                  # Authentication login
├── register.php               # Patient registration
├── index.php                  # Entry point
└── README.md                  # This file
```

## 🚀 Quick Start

### Installation

1. **Extract** the project files to your web server directory

2. **Access the project:**
   ```
   http://localhost/hospital-management/
   ```

3. **Login pages** (no authentication yet - mock system):
   - Patient: `login.php` → Select "Patient" → `patient/dashboard.php`
   - Doctor: `login.php` → Select "Doctor" → `doctor/dashboard.php`
   - Admin: `login.php` → Select "Admin" → `admin/dashboard.php`
   - Pharmacy: `login.php` → Select "Pharmacy" → `pharmacy/dashboard.php`

### For Development

All pages are **pure HTML/CSS/JS** with PHP structure - no backend required to view!

**To add PHP backend:**
1. Create database schema
2. Add authentication system
3. Replace static content with database queries
4. Add form processing logic
5. Implement role-based access control

## 🎨 Customization

### Change Theme Colors

Edit `/assets/css/style.css`:

```css
:root {
    --primary-color: #0ea5e9;      /* Main blue */
    --secondary-color: #10b981;    /* Medical green */
    /* ... customize as needed */
}
```

### Add New Pages

1. Create new PHP file in appropriate portal folder
2. Include header:
   ```php
   <?php 
   $page_title = "Your Page Title";
   include '../includes/header-PORTALNAME.php'; 
   ?>
   ```
3. Add your content
4. Include footer:
   ```php
   <?php include '../includes/footer.php'; ?>
   ```
5. Add navigation link in corresponding header file

## 🔧 Backend Integration Guide

### 1. Database Schema

Create tables for:
- `users` (patients, doctors, admin, pharmacy staff)
- `appointments` (booking system)
- `prescriptions` (medication records)
- `medical_records` (patient history)
- `billing` (invoices & payments)
- `inventory` (medicine stock)
- `departments` (hospital departments)
- `rooms` (bed management)

### 2. Authentication System

```php
<?php
session_start();
// Add role-based authentication
if (!isset($_SESSION['user_id'])) {
    header('Location: ../login.php');
    exit();
}
?>
```

### 3. Form Processing

Replace form submissions with PHP handlers:

```php
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate input
    // Process data
    // Update database
    // Redirect with message
}
?>
```

### 4. Security Checklist

- [ ] Use prepared statements (PDO/MySQLi)
- [ ] Hash passwords (password_hash)
- [ ] Sanitize all inputs
- [ ] Implement CSRF protection
- [ ] Enable HTTPS
- [ ] Set secure session settings
- [ ] Role-based access control
- [ ] Input validation
- [ ] SQL injection prevention
- [ ] XSS protection

## 📱 Responsive Breakpoints

- **Desktop**: 1024px and above
- **Tablet**: 768px - 1023px
- **Mobile**: Below 768px

## 🌈 Theme System

- **Light Mode**: Default professional theme
- **Dark Mode**: Eye-friendly dark theme
- Auto-saves user preference in localStorage

## 📦 What's Included

### Core Features
✅ 33 Complete, functional pages
✅ 4 Portal systems (Patient/Doctor/Admin/Pharmacy)
✅ Dark/Light mode toggle
✅ Responsive design
✅ Modern UI components
✅ Medical-specific features
✅ Role-based navigation
✅ Professional healthcare design

### UI Components
- Stat cards with animations
- Data tables with sorting
- Modal windows
- Form controls
- Buttons & badges
- Alerts & notifications
- Responsive grids
- Search functionality

## 🎯 Next Steps for Backend

### Essential Tasks
1. Create MySQL database
2. Build authentication system
3. Implement session management
4. Add appointment booking logic
5. Create prescription management
6. Build billing system
7. Implement medical records
8. Add user management
9. Create reporting system
10. Add email notifications

### Optional Enhancements
- SMS notifications
- Telemedicine video calls
- Lab test integration
- Pharmacy inventory alerts
- Report generation (PDF)
- Analytics dashboard
- Appointment reminders
- Payment gateway integration
- Medical imaging viewer
- Real-time notifications

## 🎨 Icons

Font Awesome 6.4.0 included. Use medical icons:

```html
<i class="fas fa-heartbeat"></i>     <!-- Heart -->
<i class="fas fa-user-md"></i>       <!-- Doctor -->
<i class="fas fa-pills"></i>         <!-- Medicine -->
<i class="fas fa-syringe"></i>       <!-- Injection -->
<i class="fas fa-hospital"></i>      <!-- Hospital -->
```

Browse more: https://fontawesome.com/icons

## 🌐 Browser Support

- ✅ Chrome (latest)
- ✅ Firefox (latest)
- ✅ Safari (latest)
- ✅ Edge (latest)
- ✅ Mobile browsers

## 📝 License

This is a frontend template for your hospital management project. Use it freely for your backend development.

## 🤝 Development Tips

### For Backend Integration
1. Start with authentication (login/logout)
2. Then patient management
3. Add appointment system
4. Build prescription module
5. Implement billing
6. Add reporting last

### Database Design Tips
- Use foreign keys for relationships
- Index frequently queried columns
- Store sensitive data encrypted
- Use ENUM for status fields
- Timestamp all records
- Soft delete instead of hard delete

### Security Best Practices
- Never trust user input
- Always use prepared statements
- Hash passwords with bcrypt
- Implement rate limiting
- Log all critical actions
- Regular security audits
- Keep software updated

## 🎓 Learning Resources

- **PHP**: https://www.php.net/manual/en/
- **MySQL**: https://dev.mysql.com/doc/
- **Security**: https://owasp.org/www-project-top-ten/
- **Healthcare IT**: HIPAA compliance guidelines

## ✨ Credits

- **Design**: Ultra-modern medical UI/UX
- **Icons**: Font Awesome
- **Fonts**: Google Fonts (Inter)
- **Theme**: Medical Green/Blue

---

**Built with ❤️ for your hospital management backend project**

🚀 **Ready for production backend integration!**

**Total Pages**: 33 complete, professional pages
**Portals**: 4 role-based systems
**Components**: 50+ UI elements
**Status**: 100% Complete Frontend

Good luck with your PHP backend development! 🏥
