<?php
session_start();

// Get role from URL parameter
$user_type = $_SESSION['user_type']; // 'superadmin' or 'student'

if ($user_type === 'SuperAdmin') {
    echo "<script>alert('$user_type')</script>";
    // Load superadmin dashboard
    include 'admin/dashboard.php';
} elseif ($user_type === 'Student') {
    echo "<script>alert('$user_type')</script>";
    // Load student dashboard
    include 'student/dashboard.php';
} else {
    // Redirect or show an error if role is unknown
    header('Location: /eLearning_Management_System-main/error.php');
    exit();
}
