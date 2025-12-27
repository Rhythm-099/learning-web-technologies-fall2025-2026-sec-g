<?php

$bloodGroup = "";
$error = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bloodGroup = $_POST['blood_group'];


    if (empty($bloodGroup)) {
        $error = "One must be selected. Please choose your blood group.";
    } else {
        $success = "Success! Your blood group is: " . htmlspecialchars($bloodGroup);
    }
}
?>

<html>
    <head>
        <title>Blood Group Validation</title>
        <style>
            fieldset {
                max-width: 300px;
                margin-left: 0;
                padding: 20px;
            }
            .error { color: red; }
            .success { color: green; }
            hr { margin: 15px 0; border: 0; border-top: 1px solid #ccc; }
            select { width: 20%; padding: 5px; }
        </style>
    </head>
    <body>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <fieldset>
                <legend>BLOOD GROUP</legend>
                
                <select name="blood_group">
                    <option value=""> </option>
                    
                    <option value="A+" <?php if ($bloodGroup == "A+") echo "selected"; ?>>A+</option>
                    <option value="A-" <?php if ($bloodGroup == "A-") echo "selected"; ?>>A-</option>
                    <option value="B+" <?php if ($bloodGroup == "B+") echo "selected"; ?>>B+</option>
                    <option value="B-" <?php if ($bloodGroup == "B-") echo "selected"; ?>>B-</option>
                    <option value="O+" <?php if ($bloodGroup == "O+") echo "selected"; ?>>O+</option>
                    <option value="O-" <?php if ($bloodGroup == "O-") echo "selected"; ?>>O-</option>
                    <option value="AB+" <?php if ($bloodGroup == "AB+") echo "selected"; ?>>AB+</option>
                    <option value="AB-" <?php if ($bloodGroup == "AB-") echo "selected"; ?>>AB-</option>
                </select>
                
                <hr>
                
                <button type="submit">Submit</button>
            </fieldset>
        </form>

        <?php
        if ($error) echo "<p class='error'>$error</p>";
        if ($success) echo "<p class='success'>$success</p>";
        ?>

    </body>
</html>