<?php

//     $a = 0;
 

//     for($x=0;$x<3;$x++)
//     {
//         for($y=$a; $y<=10; $y++)
//         {
//             echo $y; 
            
//             echo"<br>";
//         }
//         echo"<br>";
//     }

$user = "root";
                    $pass = "";
                    $db ="nassp";
                    $db = new mysqli('localhost',$user,$pass,$db)
                    or die("could not connect");

    $check="SELECT EXISTS(SELECT * from names WHERE id=1856220)";

    $check1 = mysqli_query($db,$check);

    if($check1 == TRUE)
    {
        echo"<script>alert('true')</script>";
    }
    else
    {
        echo"<script>alert('false')</script>";
    }


    ?>