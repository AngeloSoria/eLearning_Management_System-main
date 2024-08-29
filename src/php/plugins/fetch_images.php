<?php
require ('DBConnection.php'); // Adjusted to the root folder

header('Content-Type: application/json');

// Create a new PDO instance using your DBConnection class
try {
    $db = new DBConnection();
    $pdo = $db->getConnection();

    // Query to get images
    $stmt = $pdo->query("SELECT image_name, image_data FROM carousel_images ORDER BY created_at ASC");
    $images = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Convert image data to base64
    foreach ($images as &$image) {
        $image['image_data'] = base64_encode($image['image_data']);
        $image['image_data'] = 'data:image/jpeg;base64,' . $image['image_data'];
    }

    echo json_encode($images);
} catch (PDOException $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
?>
