<?php
require_once 'DBConnection.php'; // Include the database connection class

// Create an instance of DBConnection
$dbConnection = new DBConnection();

// Get the PDO connection
$pdo = $dbConnection->getConnection();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userID = $_POST['userID'] ?? null;
    $username = $_POST['username'] ?? null;
    $password = $_POST['password'] ?? null;
    $email = $_POST['email'] ?? null;
    $phone = $_POST['phone'] ?? null;
    $user_type = $_POST['user_type'] ?? null;
    $first_name = $_POST['first_name'] ?? null;
    $last_name = $_POST['last_name'] ?? null;
    $middle_name = $_POST['middle_name'] ?? null;
    $prefix = $_POST['prefix'] ?? null;
    $gender = $_POST['gender'] ?? null;
    $birth_date = $_POST['birth_date'] ?? null;
    $created_by = "system"; // Replace with the actual creator's username

    // Simple validation
    if (!$userID || !$username || !$password || !$email || !$user_type || !$first_name || !$last_name || !$birth_date) {
        die("Error: Required fields are missing.");
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    try {
        // Prepare SQL statement
        $stmt = $pdo->prepare("
            INSERT INTO users (user_id, username, password, email, phone, user_type, first_name, last_name, middle_name, prefix, gender, birth_date, created_by, isActive)
            VALUES (:userID, :username, :password, :email, :phone, :user_type, :first_name, :last_name, :middle_name, :prefix, :gender, :birth_date, :created_by, 1)
        ");

        // Execute SQL statement
        $stmt->execute([
            'userID' => $userID,
            'username' => $username,
            'password' => $hashed_password,
            'email' => $email,
            'phone' => $phone,
            'user_type' => $user_type,
            'first_name' => $first_name,
            'last_name' => $last_name,
            'middle_name' => $middle_name,
            'prefix' => $prefix,
            'gender' => $gender,
            'birth_date' => $birth_date,
            'created_by' => $created_by
        ]);

        echo "User registered successfully.";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
