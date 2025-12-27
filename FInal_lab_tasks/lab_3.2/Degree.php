<?php

$degrees = [];
$error = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (!isset($_POST['user_degrees']) || empty($_POST['user_degrees'])) {
        $error = "At least one degree must be selected.";
    } else {
        $degrees = $_POST['user_degrees'];

        $degreeList = implode(", ", $degrees);
        $success = "Success! You selected: " . htmlspecialchars($degreeList);
    }
}
?>


<html>
    <head>
        <title>Degree Validation</title>
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
                <legend>DEGREE</legend>
                
                
                    <input type="checkbox" name="user_degrees[]" value="O Levels" 
                        <?php if (in_array("O Levels", $degrees)) echo "checked"; ?>> O Levels
                

                
                    <input type="checkbox" name="user_degrees[]" value="A Levels" 
                        <?php if (in_array("A Levels", $degrees)) echo "checked"; ?>> A Levels
               

               
                    <input type="checkbox" name="user_degrees[]" value="BSc" 
                        <?php if (in_array("BSc", $degrees)) echo "checked"; ?>> BSc
                

                
                    <input type="checkbox" name="user_degrees[]" value="MSc" 
                        <?php if (in_array("MSc", $degrees)) echo "checked"; ?>> MSc
                
                
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