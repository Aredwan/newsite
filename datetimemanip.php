<?php 
$title = "Date Time Manipulation";
include 'includes/header.php' ?>
<body>
    <h1>Date Time Manipulation</h1>

    <?php 
    $datenow = getdate();
        echo $datenow['mday'].'/'. $datenow['mon'].'/'. $datenow['year'];
    ?>

<?php require 'includes/footer.php' ?>