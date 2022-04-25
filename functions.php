<?php 
$title = "Functions";
include 'includes/header.php' ?>
<body>
    <h1>Functions</h1>
    <?php 
    
        /*Defining a Function */

        function writeMessage(){
            echo "You are a really nice person <br />";
        }
        //Calling a function
        writeMessage();
        
        echo "<hr>";
        
        writeMessage();

        //Functions with parameters

        function addFunction($num1, $num2){
            $sum = $num1 + $num2;
            echo "The sum of $num1 and $num2 is: $sum <br />";
        }
        function changeNum(&$num){
            $num = $num + 10;
        }
        function returnProduct($num1, $num2) {
            $prod = $num1 * $num2;
            return $prod;
        }

        $num = 500;
        addFunction(10,20);

        changeNum($num);
        echo $num . '<br />';

        $return_value = returnProduct(10,200);
        echo $return_value . '<br />';
    ?>
        

<?php require 'includes/footer.php' ?>