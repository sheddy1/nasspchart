<?php
    session_start();
    $user = "root";
    $pass = "";
    $db ="nassp";
   $db = new mysqli('localhost',$user,$pass,$db)
            or die("could not connect");

    $con1="SELECT * FROM cart";

    $con1a = mysqli_query($db,$con1);

    $con1b  = mysqli_num_rows($con1a);

    $no1= $con1b;

     $row = mysqli_fetch_assoc($con1a);


        echo $row['name'];
    
    
?>