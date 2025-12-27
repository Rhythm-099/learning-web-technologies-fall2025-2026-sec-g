<?php

$name = "";
$error = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['user_name']);

    if (empty($name)) {
        $error = "Name cannot be empty.";
    } 

    elseif (!preg_match("/^[a-zA-Z]/", $name)) {
        $error = "Name must start with a letter.";
    }

    elseif (!preg_match("/^[a-zA-Z\s.-]+$/", $name)) {
        $error = "Only letters, periods, dashes, and spaces are allowed.";
    }

    elseif (str_word_count($name) < 2) {
        $error = "Name must contain at least two words.";
    } 
    else {
        $success = "Form submitted successfully! Hello, " . htmlspecialchars($name);
    }
}
?>

<html>
    <head>
        <title>Name Validation Form</title>
        <style>
            fieldset {
                max-width: 300px; 
                margin-left: 0;
                margin-right: auto;
                padding: 20px;
            }
    
            .error { color: red; }
            .success { color: green; }
            hr { margin: 15px 0; }
        </style>
    </head>
    <body>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <fieldset>
                <legend>NAME</legend>
                
                <input type="text" name="user_name" value="<?php echo htmlspecialchars($name); ?>">
                
                <hr> <button type="submit">Submit</button>
            </fieldset>
        </form>

        <?php
            if ($error) echo "<p class='error'>$error</p>";
            if ($success) echo "<p class='success'>$success</p>";
        ?>

    </body>
</html>