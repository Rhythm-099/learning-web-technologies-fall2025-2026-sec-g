<?php
// Initialize variables
$gender = "";
$error = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!isset($_POST['user_gender'])) {
        $error = "One must be selected. Please choose a gender.";
    } else {
        $gender = $_POST['user_gender'];
        $success = "Success! You selected: " . htmlspecialchars($gender);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gender Validation</title>
    <style>
        fieldset {
            max-width: 300px;
            margin-left: 0;
            padding: 20px;
        }
        .error { color: red; }
        .success { color: green; }
        hr { margin: 15px 0; border: 0; border-top: 1px solid #ccc; }
        .option { margin-bottom: 5px; }
    </style>
</head>
<body>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <fieldset>
            <legend>GENDER</legend>
            
            
            <input type="radio" id="male" name="user_gender" value="Male" 
                <?php if ($gender == "Male") echo "checked"; ?>>
            <label for="male">Male</label>
        

        
            <input type="radio" id="female" name="user_gender" value="Female" 
                <?php if ($gender == "Female") echo "checked"; ?>>
            <label for="female">Female</label>
        

        
            <input type="radio" id="other" name="user_gender" value="Other" 
                <?php if ($gender == "Other") echo "checked"; ?>>
            <label for="other">Other</label>
            
            
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