<?php
require_once 'DBConnection.php'; // Include the database connection

// Get database connection
$dbConnection = new DBConnection();
$conn = $dbConnection->getConnection();

// Check if the form was submitted
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password before storing it
    $user_type = $_POST['user_type'];
    $email = $_POST['email'];
    $personal_email = $_POST['personal_email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $created_at = date("Y-m-d H:i:s");

    // Insert data into the database
    $sql = "INSERT INTO user_accounts (username, password_hash, user_type, email, personal_email, phone, gender, created_at) 
            VALUES (:username, :password, :user_type, :email, :personal_email, :phone, :gender, :created_at)";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':user_type', $user_type);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':personal_email', $personal_email);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':gender', $gender);
    $stmt->bindParam(':created_at', $created_at);

    if ($stmt->execute()) {
        echo "Registration successful!";
    } else {
        echo "There was an error with the registration.";
    }
}
?>