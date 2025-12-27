<?php
session_start();

if(!isset($_SESSION['status']) || $_SESSION['status'] !== true){
    header('Location: login.php');
    exit();
}
?>

<html>
    <head>
        <title>Dummy Page</title>
    </head>
    <body>
        <h2>Dummy Page</h2>
        <p>You are logged in as <strong><?php echo $_SESSION['username']; ?></strong></p>
        <a href="logout.php"> logout</a>
    </body>
</html>
