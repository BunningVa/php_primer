<?php
    $title = "Homepage";
    include 'includes/header.php'
?>
    <!-- Basic HTML -->
    <h1>Hello World</h1>
    <br/>
    <?php
        //Printing to HTML using echo
        echo 'Hello PHP!';
        //You can echo HTML tags
        echo '<br/>';
        echo 'Second Line';
        echo '<br/>';
    ?>

    <?php
        // Variable need a '$'. They are not strong typed
        $name = 'Va Bunning';
        $age = 22;
        //echo variable
        echo $name;
        echo '<h1>My Name is: '.$name.'</h1>';
        echo '<h1>My Age is: '.$age. '</h1>';
        
        echo "<h1>My Name is: $name </h1>";
    ?>   
    <button type="button" class="btn btn-dark">CLICK ME!</button>
    <button type="button" class="btn btn-primary">CLICK ME!</button>
    <button type="button" class="btn btn-success">CLICK ME!</button>
    <button type="button" class="btn btn-success">CLICK ME!</button>
    <button type="button" class="btn btn-success">CLICK ME!</button>
    <a href="https://php-primer-ning.herokuapp.com/index.php" target="_blank" class="btn btn-success">Heroku.com</a>
  <?php require 'includes/footer.php'?>  
