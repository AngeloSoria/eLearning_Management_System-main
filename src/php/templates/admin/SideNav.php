<?php
    // Check which active_page is active and add class="nav_active" to that sideNav child via php.
    // Get the active page from the calling script (e.g., dashboard.php)
    if (!isset($active_page)) {
        $active_page = ''; // Default empty value if $active_page is not set
    }

    // Function to return the "nav_active" class if the page is active
    function isActive($page, $active_page) {
        return $page === $active_page ? 'nav_active' : '';
    }
?>

<html>
    <body>
        <section class="sideNav">
            <ul>
                <li>
                    <a href="user_dashboard" class="<?php echo isActive('dashboard', $active_page); ?>">
                        <span class="icon material-symbols-outlined">dashboard</span>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="subjects.php" class="<?php echo isActive('subjects', $active_page); ?>">
                        <span class="icon material-symbols-outlined">description</span>
                        Subjects
                    </a>
                </li>
                <li>
                    <a href="class.php" class="<?php echo isActive('class', $active_page); ?>">
                        <span class="icon material-symbols-outlined">groups</span>
                        Class
                    </a>
                </li>
                <li>
                    <a href="departments.php" class="<?php echo isActive('departments', $active_page); ?>">
                        <span class="icon material-symbols-outlined">apartment</span>
                        Departments
                    </a>
                </li>
                <li>
                    <a href="students.php" class="<?php echo isActive('students', $active_page); ?>">
                        <span class="icon material-symbols-outlined">face</span>
                        Students
                    </a>
                </li>
                <li>
                    <a href="teachers.php" class="<?php echo isActive('teachers', $active_page); ?>">
                        <span class="icon material-symbols-outlined">face</span>
                        Teachers
                    </a>
                </li>
                <li>
                    <a href="user_config" class="<?php echo isActive('user_config', $active_page); ?>">
                        <span class="icon material-symbols-outlined">shield_person</span>
                        User Configuration
                    </a>
                </li>
                <li>
                    <a href="content.php" class="<?php echo isActive('content', $active_page); ?>">
                        <span class="icon material-symbols-outlined">article</span>
                        Content
                    </a>
                </li>
                <li>
                    <a href="events.php" class="<?php echo isActive('events', $active_page); ?>">
                        <span class="icon material-symbols-outlined">event</span>
                        Events Calendar
                    </a>
                </li>
                <li>
                    <a href="school_year.php" class="<?php echo isActive('school_year', $active_page); ?>">
                        <span class="icon material-symbols-outlined">history_edu</span>
                        School Year
                    </a>
                </li>
                <li>
                    <a href="logs.php" class="<?php echo isActive('logs', $active_page); ?>">
                        <span class="icon material-symbols-outlined">data_info_alert</span>
                        Logs
                    </a>
                </li>
            </ul>
        </section>
    </body>
</html>