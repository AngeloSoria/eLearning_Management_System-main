
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
    <form action="authRegister.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="username">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <label for="user_type">User Type:</label>
        <select id="user_type" name="user_type" required>
            <option value="Student">Student</option>
            <option value="Employee">Employee</option>
            <option value="Admission">Admission</option>
            <option value="Admin">Admin</option>
            <option value="Super Admin">Super Admin</option>
        </select><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="personal_email">Personal Email:</label>
        <input type="email" id="personal_email" name="personal_email"><br><br>

        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" required><br><br>

        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select><br><br>

        <button type="submit" name="register">Register</button>
    </form>
</body>
</html>
