<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>While Loop</h1>
    <?php 
    $grade = 0;
    //Pre-Condition Loop
    while($grade <10 ){
        echo '<p>I am less than 10! </p>';
        $grade++;
    }
    echo '<p>Exited Loop</p>';
    ?>


    <h1>Do-While Loop</h1>
    <?php 
    //Post-Condition Loop
    do{
        echo '<p>I am DO WHILE Loop</p>';
        $grade++;
    } while ($grade <10 );
    
    ?>
</body>
</html>