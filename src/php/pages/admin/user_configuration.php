<?php
ob_start();

include_once "../../plugins/sessionManager.php";
session_start_safely();

if (!isset($_SESSION['user_id']) || $_SESSION['user_type'] != 'SuperAdmin') {
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
            <h3 class="page_title">User Configuration</h3>
            <br>
            <hr>
            <br>
            <section class="header_tools">
                <section>
                    <button class="default-button add-button">
                        <i class="material-symbols-outlined">add_circle</i>
                        Add User
                    </button>
                    <button class="default-button delete-button" disabled>
                        <i class="material-symbols-outlined">delete_forever</i>
                        Delete Selected
                    </button>
                </section>
                <section>
                    <div class="search_bar">
                        <i class="material-symbols-outlined">search</i>
                        <input type="text" placeholder="Search data...">
                    </div>
                    <button class="default-button refresh-button">
                        <i class="material-symbols-outlined">refresh</i>
                        Refresh Data
                    </button>
                    <button class="default-button options-button">
                        <i class="material-symbols-outlined">more_vert</i>
                    </button>
                </section>
            </section>

            <div class="modal">
                <div class="topTool">
                    
                </div>
                <div class="modal-title">Title</div>
            </div>

        </section>
    </section>

</body>
<?php ob_end_flush(); ?>

</html>