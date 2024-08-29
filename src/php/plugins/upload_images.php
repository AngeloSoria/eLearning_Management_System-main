<?php
// Include the database connection class
require_once('DBConnection.php'); // Adjust the path if necessary

// Create a new instance of the DBConnection class
$db = new DBConnection();
$pdo = $db->getConnection();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['image']['tmp_name']) && !empty($_FILES['image']['tmp_name'])) {
        $imageName = $_FILES['image']['name'];
        $imageData = file_get_contents($_FILES['image']['tmp_name']);

        try {
            // Check if $pdo is set
            if ($pdo === null) {
                throw new Exception("Database connection not established.");
            }

            // Prepare the SQL statement
            $stmt = $pdo->prepare("INSERT INTO carousel_images (image_name, image_data) VALUES (:image_name, :image_data)");

            // Bind parameters and execute the statement
            $stmt->bindParam(':image_name', $imageName);
            $stmt->bindParam(':image_data', $imageData, PDO::PARAM_LOB);

            if ($stmt->execute()) {
                echo "Image uploaded successfully!";
            } else {
                echo "Error uploading image.";
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    } else {
        echo "No file chosen.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image</title>
</head>
<body>
    <h2>Upload Image</h2>
    <form action="upload_images.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image" required>
        <input type="submit" value="Upload Image">
    </form>
</body>
</html>
