<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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
</body>
</html>