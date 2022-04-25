<?php 
$title = "If statements";
include 'includes/header.php' ?>
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
<?php require 'includes/footer.php' ?>