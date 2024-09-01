<?php
function authenticate($username, $password) {
    require_once 'DBConnection.php'; // Include the database connection class
    $dbConnection = new DBConnection();
    $pdo = $dbConnection->getConnection();

    try {
        // Prepare SQL statement to get user data
        $stmt = $pdo->prepare("
            SELECT user_id, password, user_type, first_name, last_name, isActive
            FROM users
            WHERE username = :username
        ");
        $stmt->execute(['username' => $username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Check if user exists and if password is correct
        if ($user && password_verify($password, $user['password'])) {
            if ($user['isActive']) {
                // Start a session and store user information
                $_SESSION['user_id'] = $user['user_id'];
                $_SESSION['user_type'] = $user['user_type'];
                $_SESSION['first_name'] = $user['first_name'];
                $_SESSION['last_name'] = $user['last_name'];
                
                // Redirect based on user type
                header("Location: /eLearning_Management_System-main/user_dashboard");
                exit();
            } else {
                $invalidCredentialsResult = "Account is inactive.";
            }
        } else {
            $invalidCredentialsResult = "Invalid username or password.";
        }
    } catch (PDOException $e) {
        $invalidCredentialsResult = "Error: " . $e->getMessage();
    }
}
?>
