<?php 

session_start();
$password = $_SESSION['password'];

// var_dump($_SESSION);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password</title>
</head>
<body>
    <a href="./index.php">Torna</a>
    <h1>Questa e la tua password </h1>
    <strong><?php echo $password ?></strong>
</body>
</html>