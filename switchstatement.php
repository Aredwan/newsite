<?php 
$title = "Switch Statement";
include 'includes/header.php' ?>
<body>
    <h1>Switch Statements</h1>
    <?php 
        $grade = 'B';

        switch($grade){
            case 'A':
                echo 'You are a superstar';
                break;
            case 'B':
                echo'You did well';
                break;
            default:
            echo 'You have failed';
            break;
        }
    ?>



<?php require 'includes/footer.php' ?>