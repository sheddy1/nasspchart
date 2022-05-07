<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

   

</head>
<body>

<script>
        $(document).ready(function(){
           $('#sheddy1').click(function(){
                var employee = $('#sheddy').val();
                
                    alert(employee);
                
           });
       });
   </script>


    <form action="" method="POST" >
        <input type="text" id='sheddy'>
        <button id="sheddy1" name="sheddy1"> 
            submit stuff
        </button>
    </form>
</body>
</html>

<?php

if(isset($_POST['sheddy1']))
{
    // echo"<script>alert('you can view chart')</script>";

    
}

?>

