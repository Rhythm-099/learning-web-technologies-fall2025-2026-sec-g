<?php
session_start();

if(isset($_SESSION['status']) && $_SESSION['status'] === true){
    header('Location: dummy.php');
    exit();
}

if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "" || $password == ""){
        $error = "Username or password cannot be empty";
    }else{
        // Dummy credentials
        $valid_user = "qw";
        $valid_pass = "12";

        if($username === $valid_user && $password === $valid_pass){
            $_SESSION['status'] = true;
            $_SESSION['username'] = $username;
            header('Location: dummy.php');
            exit();
        }else{
            $error = "Invalid username or password";
        }
    }
}
?>

<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <h2>Login</h2>

        <?php if(isset($error)): ?>
            <p style="color:red;"><?php echo $error; ?></p>
        <?php endif; ?>

        <form method="POST" action="">
            <label>Username:</label><br>
            <input type="text" name="username"><br><br>

            <label>Password:</label><br>
            <input type="password" name="password"><br><br>

            <button type="submit" name="submit">Login</button>
        </form>

    </body>
</html>
