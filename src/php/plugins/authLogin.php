<?php
function authenticate($username, $password) {
    require_once 'DBConnection.php';

    // Get database connection
    $dbConnection = new DBConnection();
    $conn = $dbConnection->getConnection();

    if ($conn) {
        // Prepare and execute SQL query to check credentials
        $query = "SELECT password_hash FROM user_accounts WHERE username = :username";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            // Fetch the user data
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            $hashed_password = $user['password_hash'];

            // Verify the password using password_verify()
            if (password_verify($password, $hashed_password)) {
                // Password is correct, return success
                return true;
            } else {
                // Incorrect password
                return "Invalid username or password. Please try again.";
            }
        } else {
            // Username not found
            return "Invalid username or password. Please try again.";
        }
    } else {
        return "Database connection error.";
    }
}
?>
