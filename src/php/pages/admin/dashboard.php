<?php
ob_start();

if(!isset($_SESSION['user_id'])) {
    header("Location: /eLearning_Management_System-main/");
    exit();  // Exit script to avoid further execution.
}

$page_title = "UCC LMS Admin - Dashboard";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once '../templates/admin/header.php'; ?>
</head>

<body>
    <?php include_once('../templates/admin/TopNav.php'); ?>
    <section class="main">
        <?php include_once('../templates/admin/SideNav.php'); ?>

        <section class="main_content">
            <!-- content here -->
        </section>
    </section>

</body>
<?php ob_end_flush(); ?>
</html>