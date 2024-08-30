<html lang="en">

<body>
    <nav>
        <section>
            <div class="logo">
                <button class="mobile_menu">
                    <span class="material-symbols-outlined">menu</span>
                </button>
                <a href="dashboard.php">
                    <img src="../../../img/Secondary-Logo-2.png" alt="Logo">
                </a>
                <span></span>
            </div>
        </section>
        <section>
            <div class="buttons">
                <button class="nav buttons">
                    <span class="material-symbols-outlined">search</span>
                </button>
                <button class="nav buttons" id="profile_mail" onclick="return alert(1337);" aria-haspopup="true" href="/test">
                    <span class="material-symbols-outlined">mail</span>
                </button>
                <button class="nav buttons" id="profile_notifications">
                    <span class="material-symbols-outlined">notifications</span>
                </button>
            </div>
            <span class="vertical_bar"></span>
            <div class="profile_dropdown">
                <div class="dropbtn">
                    <span>username (role_name)</span>
                    <div class="droplisticon">
                        <span class="material-symbols-outlined">arrow_drop_down</span>
                    </div>
                </div>
                <div class="droplist">
                    <div class="content">
                        <a href="#">Profile</a>
                        <a href="#">Settings</a>
                        <hr>
                        <a href="#">Logout</a>
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