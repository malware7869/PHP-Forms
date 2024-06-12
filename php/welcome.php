<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>welcome <?php echo $_POST ["name"];?></h3>
    <p>your email is<?php echo $_POST ["email"];?></p>
    <p>your age is<?php echo $_POST ["age"];?></p>

    
    <?php
    if($_POST ["age"] < 18){
        echo "<p>you are too young</p>";
    }
    elseif($_POST["age"] < 30){
        echo "<p>you are young</p>";
    }
    else{
        echo "<p>damn you are old as hell</p>";
    }
        ?>
</body>
</html>

