<?php
    $user = "root";
    $pass = "";
    $db ="nassp";
    $db = new mysqli('localhost',$user,$pass,$db)
    or die("could not connect");

    $con1="SELECT * FROM cart ";

            $con1a = mysqli_query($db,$con1);

            $con1b  = mysqli_num_rows($con1a);
    $no1= $con1b;

    for($x = 0; $x<$no1; $x++)
    {
        $row = mysqli_fetch_array($con1a);

        echo"<table>";
        echo"<tr><th>".$row['name']."</th>
        <th>".$row['price']."</th>
        </tr >";
        echo"</table>";
    }
?>