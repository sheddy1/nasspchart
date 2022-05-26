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

    for($x = 0; $x<$no1; $x++)
    { 
        $row = mysqli_fetch_assoc($con1a);

        $name_table = $row['name'];

        $name_id = $row['price'];


        echo "<form method='post'>
            ".$row['name']."
            ".$row['price']."
            <button name='btn1'>add</button>
        </form><br>";
    
    }

    if(isset($_POST['btn1']))
    {
        
    }

?>