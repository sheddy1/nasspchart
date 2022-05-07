<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

   <script>
        $(document).ready(function(){
           $('#sheddy1').click(function(){
                var employee = $('#sheddy').val();
                if($.trim(employee) != '')
                {
                    alert(employee);
                }
           });
       });
   </script>

</head>
<body>
    <form action="" method="POST" >
        <input type="text" id='sheddy'>
        <input type="submit" id='sheddy1'>
    </form>
</body>
</html>