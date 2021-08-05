<?php
    $title = "Date And Time";
    include 'includes/header.php'
?>
<body>
    <h1>Date and Time Manipulation</h1>
    <?php
        $datenow = getdate();
        echo "Today's Date: <br/>";
        echo $datenow['mday']. '<br/>';
        echo $datenow['mon']. '<br/>';
        echo $datenow['year']. '<br/>';

        echo "Today's Date: ".$datenow['mday'].'/'.$datenow['mon'].'/'.$datenow['year'].'<br/>';
        print date("m/d/y G.i:s", time()) .'<br/>';
        
    ?>
<?php require 'includes/footer.php'?>  