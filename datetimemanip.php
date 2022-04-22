<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Date Time Manipulation</h1>

    <?php 
    $datenow = getdate();
        echo $datenow['mday'].'/'. $datenow['mon'].'/'. $datenow['year'];
    ?>

</body>
</html>