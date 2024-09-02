<?php
if (!isset($page_title)) {
    $page_title = "UCC LMS Admin - null"; // Default page title
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="src/img/icons/favicon.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="src/css/normalize.css">
    <link rel="stylesheet" href="src/css/main.css">
    <link rel="stylesheet" href="src/css/admin-main.css">
    <script src="src/js/jquery-3.6.0.min.js"></script>
    <title><?php echo $page_title ?></title>
</head>