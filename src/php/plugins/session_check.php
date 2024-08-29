<?php
// Start session and configure session settings for better security
session_start([
    'cookie_lifetime' => 86400, // Set session cookie lifetime (1 day)
    'cookie_secure' => isset($_SERVER['HTTPS']), // Use secure cookies if HTTPS is enabled
    'cookie_httponly' => true, // Prevent JavaScript access to session cookies
    'use_strict_mode' => true, // Enforce strict session ID generation
    'use_only_cookies' => true, // Only use cookies to store session ID
]);

// Check if the session variable 'id' is present
if (empty($_SESSION['id'])) {
    // Redirect to login page if the user is not authenticated
    header("Location: index.php");
    exit();
}

// Store session variables in more readable variables for easy access
$session_id = $_SESSION['id'];

// Optional: Refresh the session ID periodically for security (prevent session fixation)
if (!isset($_SESSION['CREATED'])) {
    $_SESSION['CREATED'] = time();
} elseif (time() - $_SESSION['CREATED'] > 1800) {
    // Regenerate session ID every 30 minutes
    session_regenerate_id(true);
    $_SESSION['CREATED'] = time();
}

// Optional: You can also check user role or permissions here
// Example:
// if ($_SESSION['role'] !== 'admin') {
//     header("Location: unauthorized.php");
//     exit();
// }
?>
