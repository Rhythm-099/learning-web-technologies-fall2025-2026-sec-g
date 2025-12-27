<?php

$dob = "";
$error = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dob = $_POST['user_dob'];

    if (empty($dob)) {
        $error = "Date of Birth cannot be empty.";
    } 

    elseif (!strtotime($dob)) {
        $error = "Please enter a valid date number.";
    } 
    else {

        if (strtotime($dob) > time()) {
            $error = "Date of Birth cannot be in the future!";
        } else {
            $success = "Success! " . date("F j, Y", strtotime($dob)) . " is a valid date.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>DOB Validation</title>
    <style>
        fieldset {
            max-width: 300px;
            margin-left: 0;
            padding: 20px;
        }
        .error { color: red; }
        .success { color: green; }
        hr { margin: 15px 0; border: 0; border-top: 1px solid #ccc; }
    </style>
</head>
<body>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <fieldset>
            <legend>DATE OF BIRTH</legend>
            
            <input type="date" name="user_dob" 
                   value="<?php echo htmlspecialchars($dob); ?>">
            
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