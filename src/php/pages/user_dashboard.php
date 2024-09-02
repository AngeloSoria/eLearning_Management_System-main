<?php
include_once "../plugins/sessionManager.php";
session_start_safely();

// Get role from URL parameter
$user_type = $_SESSION['user_type']; // 'superadmin' or 'student'

// echo "<script>alert('bloop: $user_type')</script>";

if ($user_type === 'SuperAdmin') {
    // Load superadmin dashboard
    include_once 'admin/dashboard.php';
} elseif ($user_type === 'Student') {
    // Load student dashboard
    include_once 'student/dashboard.php';
} else {
    // Redirect or show an error if role is unknown
    header('Location: /eLearning_Management_System-main/error/404');
    exit();
}
