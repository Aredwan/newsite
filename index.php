<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Index</title>
</head>
<body>
<h2>Follow each link to the page example</h2>
    <ul>
        <li><a href="array.php">Array</a></li>
        <li><a href="forloop.php">For Loop</a></li>
        <li><a href="whiledowhileloop.php">Do While</a></li>
        <li><a href="ifstatement.php">If Statement</a></li>
        <li><a href="switchstatement.php">Switch Statement</a></li>
        <li><a href="stringmanip.php">String Manipulation<a></li>
        <li><a href="datetimemanip.php">String Manipulation<a></li>
    </ul>
    <!-- Basic HTML -->
    <h1>Hello World - PHP Primer</h1>
    <br />
    <?php
    //Printing to HTML using echo
    echo   'Hello PHP';
    echo '<br/>';
    echo 'Second Line';
    ?>

    <?php 
        $name = 'Ahmed Redwan';
        echo $name;
        echo '<h1>My Name is: '.$name.'</h1>'
    ?>
</body>
</html>