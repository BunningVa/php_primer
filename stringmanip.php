<?php
    $title = "String Manipulation";
    include 'includes/header.php'
?>
<body>
    <?php
        $phrase1 = "student who came late";
        $phrase2 = "in class, stand with Rock";
        $name = "trevoir williams"; 
        echo $phrase1. ", named Tiffany". $phrase2;
        echo '<br/>';
        echo '<hr/>';
        //String transformation
        echo 'Uppercase first letter' .ucfirst($name). '</br>';
        echo 'Uppercase first letter of each word: '.ucwords($name). '<br/>';
        echo 'Upper case: '.strtoupper($name). '<br/>';
        echo 'Lower case: '.strtolower("THIS WAS ALL UPPER CASE"). '<br/>';
        echo '<hr/>';
        echo 'Repeat String: ' .str_repeat('a',10) . '<br/>';
        echo 'Repeat String - Nested Function: ' . strtoupper(str_repeat('a',10)).'<br/>';
        echo 'Get a Substring: ' . substr($name, 3, 7). '<br/>';
        // Returns NULL
        // echo 'Get position of string: ' . strpos($combine,'z').'<br/>';
        echo 'Find Character "R": ' .strchr($name, 'R').'<br/>';
        echo 'Find Character "r": ' .strchr($name, 'r').'<br/>';
        echo 'Find Character "s": ' .strchr($name, 's').'<br/>';
        echo 'Find character "e": ' .strchr($name, 'e').'<br/>';
    ?>
<?php require 'includes/footer.php'?>  