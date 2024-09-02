<?php
ob_start();

include_once "../../plugins/sessionManager.php";
session_start_safely();

if(!isset($_SESSION['user_id'])) {
    header("Location: /eLearning_Management_System-main/");
    exit();  // Exit script to avoid further execution.
}

$page_title = "UCC LMS Admin - User Configuration";
$active_page = "user_config"; // This is the active page that is referenced by side nav.

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once '../../templates/admin/header.php'; ?>
</head>

<body>
    <?php include_once('../../templates/admin/TopNav.php'); ?>
    <section class="main">
        <?php include_once('../../templates/admin/SideNav.php'); ?>

        <section class="main_content">
            <!-- content here -->
             <h3>User Config</h3>
        </section>
    </section>

</body>
<?php ob_end_flush(); ?>
</html>