<?php 
$title = "Home";
include 'includes/header.php' ?>
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
<?php require 'includes/footer.php' ?>