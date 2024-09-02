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

            <br>

            <section class="modal data_container">
                <!-- A Table that shows user accounts -->
                <table>
                    <thead>
                        <tr>
                            <th>
                                <input type="checkbox" id="selectAll">
                                <!-- <label for="selectAll">Select All</label> -->
                            </th>
                            <th>User ID</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>User Type</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- User data will be populated here -->
                        <tr>
                            <td><input type="checkbox" id="user1"></td>
                            <td>U001</td>
                            <td>johndoe</td>
                            <td>johndoe@example.com</td>
                            <td>Admin</td>
                            <td>Active</td>
                            <td>
                                <button class="edit-button">
                                    <i class="material-symbols-outlined">edit</i>
                                </button>
                                <button class="delete-button">
                                    <i class="material-symbols-outlined">delete_forever</i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
            </section>

        </section>
    </section>

</body>
<?php ob_end_flush(); ?>

</html>