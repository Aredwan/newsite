<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - If Statements</title>
</head>
<body>
<h1>If Statements</h1>
    <?php 
    
    echo '<h2>If Statement</h2>';
    $grade = 50;

    if($grade >= 50){
        echo '<h3 style="color: Green;">You have passed</h3>';
    } else {
        echo '<h3 style="color: red;"> You have failed </h3>';
    }
    ?>
</body>
</html>