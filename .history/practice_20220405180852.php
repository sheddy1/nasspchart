<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

   <script>
        $(document).ready(function(){
           $('#add-employee-button').click(function(){
                var employee = $('#employees').val();
                if($.trim(employee) != '')
                {
                    alert(employee);
                }
           });
       });
   </script>

</head>
<body>
    <form action="">
        <input type="text" id='sheddy'>
        <input type="submit" id='sheddy1'>
    </form>
</body>
</html>