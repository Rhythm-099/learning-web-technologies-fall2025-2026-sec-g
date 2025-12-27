<?php
// Initialize variables
$email = "";
$error = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $email = trim($_POST['user_email']);

    if (empty($email)) {
        $error = "Email cannot be empty.";
    } 
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format. Must contain '@' and a domain (e.g., .com).";
    } 
    else {
        $success = "Success! The email address is valid.";
    }
}
?>

<html>
    <head>
        <title>Email Validation</title>
        <style>
            fieldset {
                max-width: 300px;
                margin-left: 0;
                padding: 20px;
            }
            .error { color: red; }
            .success { color: green; }
            hr { margin: 15px 0; border: 0; border-top: 1px solid #ccc; }
            input { width: 90%; }
        </style>
    </head>
    <body>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <fieldset>
                <legend>EMAIL</legend>
                
                <input type="text" name="user_email" placeholder="Enter email" 
                    value="<?php echo htmlspecialchars($email); ?>">
                
                <hr> <button type="submit">Submit</button>
            </fieldset>
        </form>

        <?php
        if ($error) echo "<p class='error'>$error</p>";
        if ($success) echo "<p class='success'>$success</p>";
        ?>

    </body>
</html>