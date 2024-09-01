<!-- <?php
//session_start(); // Start the session
?> -->

<html lang="en">
<body>
    <nav>
        <section>
            <div class="logo">
                <button class="mobile_menu">
                    <span class="material-symbols-outlined">menu</span>
                </button>
                
                <a href="dashboard.php">
                    <img src="src/img/Secondary-Logo-2.png" alt="Logo">
                </a>
                <span></span>
            </div>
        </section>
        <section>
            <div class="buttons">
                <button class="nav buttons" title="Search">
                    <span class="material-symbols-outlined">search</span>
                </button>
                <button class="nav buttons notif_unread_symbol" id="profile_mail" title="Mail">
                    <span class="material-symbols-outlined">mail</span>
                </button>
                <button class="nav buttons notif_unread_symbol" id="profile_notifications" title="Notifications">
                    <span class="material-symbols-outlined">notifications</span>
                </button>
            </div>
            <span class="vertical_bar"></span>
            <div class="profile_dropdown">
                <div class="dropbtn">
                    <span><?php echo $_SESSION['first_name'] . ' ' . $_SESSION['last_name'] . ' (' . $_SESSION['user_type'] . ')'; ?></span>
                    <div class="droplisticon">
                        <span class="material-symbols-outlined">arrow_drop_down</span>
                    </div>
                </div>
                <div class="droplist">
                    <div class="content">
                        <a href="#">My Profile</a>
                        <a href="#">Settings</a>
                        <hr>
                        <a href="src/php/plugins/process_Logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </section>
    </nav>
</body>
<script>
    $(document).ready(function() {
        $(".profile_dropdown .dropbtn").click(function() {
            $(".profile_dropdown .droplist").toggle();
        });

        // Optionally close the droplist if clicked outside
        $(document).click(function(event) {
            if (!$(event.target).closest('.profile_dropdown').length) {
                $(".profile_dropdown .droplist").hide();
            }
        });
    });
</script>
</html>
