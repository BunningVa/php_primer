<?php
    $title = "While and Do While Loop";
    include 'includes/header.php'
?>
<body>
    <h1>While Loop</h1>
        <?php
        $grade= 0;
        //Pre-Codndition Loop
            while($grade < 10){
                echo '<p>I AM LESS THAN 10</p>';
                $grade++;
            }
        echo $grade;
        ?>
    <h1>Do-While Loop</h1>
    <?php
        //Post-Condition Loop
        do{
            echo '<p>I AM DO WHILE LOOP </p>';
            $grade++;
        }while($grade < 10 );
        echo 'EXIT LOOP!';
    ?>
<?php require 'includes/footer.php'?>  