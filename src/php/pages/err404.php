<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found</title>
</head>

<body>
    <h1>404 - Page Not Found</h1>
    <p>Sorry, the page you are looking for does not exist.</p>
    <a href="/eLearning_Management_System-main/">Go back to Home</a>

    <?php
    // Log the 404 error
    error_log("\n404 - Page Not Found: " . $_SERVER['REQUEST_URI'], 3, "error_log.txt");
    ?>
</body>

</html>