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

     $check="SELECT * from names WHERE id=18560";

    // $check1 = mysqli_query($db,$check);

    // echo $check1;

    $exists = mysqli_query($db,$check);

if($exists !== FALSE)
{
   echo("This table exists");
}else{
   echo("This table doesn't exist");
}

    // if($check1 == TRUE)
    // {
    //     echo"<script>alert('true')</script>";
    // }
    // else
    // {
    //     echo"<script>alert('false')</script>";
    // }


    ?>