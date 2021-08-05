<?php
    $title = "Array";
    include 'includes/header.php'
?>
<body>
    <h1>Arrays</h1>
    <?php
        //a variable
        $num = 3;

        // an array
        // Only one datatype
        $numbers = array(1,2,3,4,5,6,7,8,9,10);

        echo'<p>'.$numbers[9].'</p>';

        $size = count($numbers); 
        echo "<p>Array Numbers is size:".count($numbers)."</p>";
 
        for($count =0; $count < $size; $count++){
            echo "<p>$numbers[$count]</p>";
        }
       
    ?>
     <button type="button" class="btn btn-dark">Dark</button>
<?php require 'includes/footer.php'?>  