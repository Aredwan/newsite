<?php 
$title = "Strig Manipulation";
include 'includes/header.php' ?>
<body>
    <h1>PHP String Manipulation</h1>
    <?php 
        $phrase1 = "student who came late";
        $phrase2 = "in class, stand with Rock";
        echo $phrase1." ".$phrase2;
        $name = "ahmed redwan";
        echo '<br/>';
        echo '<hr>';

        //string transformation
        echo 'Uppercase first letter:' . ucfirst($name). '<br/>';
        echo 'Upper case first letter of each word:' .ucwords($name). '<br/>';
        echo 'Upper case:'. strtoupper($name). '<br/>';
        echo '<hr>';
        echo 'Repeat string: '. str_repeat('a', 10). '<br/>';

    ?>
<?php require 'includes/footer.php' ?>