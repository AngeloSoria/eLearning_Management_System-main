
<!-- THIS FILE IS TEMPORARY -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Account</title>
</head>
<body>
<h2>Register</h2>
    <form id="registrationForm" method="POST" action="authRegister.php">
        <label for="userID">User ID:</label>
        <input type="text" id="userID" name="userID" required><br>

        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required><br>

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required><br>

        <label for="middle_name">Middle Name:</label>
        <input type="text" id="middle_name" name="middle_name"><br>

        <label for="prefix">Prefix:</label>
        <input type="text" id="prefix" name="prefix"><br>

        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select><br>

        <label for="birth_date">Birth Date:</label>
        <input type="date" id="birth_date" name="birth_date" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br>

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" placeholder="+63 ### ### ####"><br>

        <label for="user_type">User Type:</label>
        <select id="user_type" name="user_type" required>
            <option value="student">Student</option>
            <option value="teacher">Teacher</option>
            <option value="registrar">Registrar</option>
            <option value="admission">Admission</option>
            <option value="admin">Admin</option>
            <option value="superadmin">Superadmin</option>
        </select><br>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" readonly><br>

        <label for="password">Password:</label>
        <input type="text" id="password" name="password" readonly><br>

        <button type="submit">Register</button>
    </form>

    <!-- Link to external JavaScript file -->
    <script src="../../js/register_user.js"></script>

</body>
</html>
