<?php
session_start();

// Check if there's old session data.
if (isset($_SESSION['user_id'])) {
    header('Location: /eLearning_Management_System-main/user_dashboard');
}

$invalidCredentialsResult = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    include_once '../plugins/authLogin.php';

    authenticate($username, $password);
}
?>

<section class="popup">
    <div class="modal">
        <div class="topTool">
            <div class="left">

            </div>
            <div class="mid">
                <p class="modal-title">LOGIN</p>
            </div>
            <div class="right">
                <button class="nav-mobile" id="btnPopupLoginClose">
                    <span class="icon material-symbols-outlined">close</span>
                </button>
            </div>
        </div>
        <br>
        <form class="form-login" method="POST">
            <div>
                <p class="title">User ID:</p>
                <input class="modal-inputbox" type="text" name="username" placeholder="Enter username" title="Username" required>
            </div>
            <div>
                <p class="title">Password:</p>
                <input class="modal-inputbox" type="password" name="password" placeholder="Enter password" required>
            </div>
            <div>
                <input type="checkbox" name="remember_me" id="login_remember_me">
                <label for="login_remember_me">Remember me</label>
            </div>
            <input type="submit" value="LOGIN" class="btn-primary2 form-button btnLogin">

            <?php
            if (!empty($invalidCredentialsResult) && $invalidCredentialsResult) {
                echo '<p class="form-textResult">Invalid username or password. Please try again.</p>';
                echo '<script>$(".popup").fadeIn(100);</script>';
            }
            ?>

        </form>
    </div>
</section>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const usernameField = document.querySelector('input[name="username"]');
        const passwordField = document.querySelector('input[name="password"]');
        const rememberMeCheckbox = document.querySelector('input[name="remember_me"]');

        // Function to get a cookie value by name
        function getCookie(name) {
            const value = `; ${document.cookie}`;
            const parts = value.split(`; ${name}=`);
            if (parts.length === 2) return parts.pop().split(';').shift();
        }

        // Check if there are saved values in cookies
        const savedUsername = getCookie('savedUsername');
        const savedPassword = getCookie('savedPassword');

        if (savedUsername) {
            usernameField.value = savedUsername;
            rememberMeCheckbox.checked = true; // Automatically check if username is found
        }
        if (savedPassword) {
            passwordField.value = savedPassword;
        }

        // Save form data in cookies when the form is submitted
        document.querySelector('.form-login').addEventListener('submit', function(event) {
            if (rememberMeCheckbox.checked) {
                document.cookie = `savedUsername=${usernameField.value}; max-age=${30 * 24 * 60 * 60}; path=/`;
                document.cookie = `savedPassword=${passwordField.value}; max-age=${30 * 24 * 60 * 60}; path=/`;
            } else {
                // Clear cookies if "Remember Me" is not checked
                document.cookie = 'savedUsername=; max-age=0; path=/';
                document.cookie = 'savedPassword=; max-age=0; path=/';
            }
        });
    });
</script>