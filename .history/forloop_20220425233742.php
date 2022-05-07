<?php
session_start();
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

//     $exists = mysqli_query($db,$check);

//     $exist1 = mysqli_num_rows($exists);

// if($exist1 > 0)
// {
//    echo("This table exists");
// }else{
//    echo("This table doesn't exist");
// }

    // if($check1 == TRUE)
    // {
    //     echo"<script>alert('true')</script>";
    // }
    // else
    // {
    //     echo"<script>alert('false')</script>";
    // }

    $_SESSION['idt'] = 0;

    for ($x=0; $x<10; $x++)
    {
        $name1 = "name".$x;
        $_SESSION['idt'] = $x;
        echo"
            <form method='POST'>
                <button type='submit' name='$name1'>
                    $x
                </button>
            </form>
        ";
    }

    if(isset($_POST['$name1']))
    {
        echo"<script>alert($_SESSION['idt'])</script>";
    }


    ?>