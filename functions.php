<?php
    $title = "Functions";
    include 'includes/header.php'
?>
<body>
    <h1>Functions</h1>
    <?php
        /*Defining a Function */

        function writeMessage(){
            echo "You are really a nice person, Have a nice time!";
        }
        /* Calling a Function */
        writeMessage();

        echo "<hr/>";
        writeMessage();
        echo "<hr/>";
        /* Functions with parameters */
        function addFunction($num1,$num2){
            $sum = $num1 + $num2;
            echo "The sum of $num1 and $num2 is: $sum <br/>";
        }

        /*Pass by Reference -use ampersand in parameter */
        function changeNum(&$num3){
            $num3 = $num3 + 10;
        }
        function returnProduct($num1, $num2){
            $prod = $num1 * $num2;
            return $prod;
        }

        $num3 = 500;
        $num = 1;
        addFunction(10, 20);
       
        addFunction(10, $num);
        changeNum($num3);
        echo $num3 . '<br/>'; 
        $return_value = returnProduct(10, 200);
        
    ?>
<?php require 'includes/footer.php'?>  