<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NASSP CHART</title>
    <script src=""https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js></script>
    <link rel="stylesheet" href="index.css">

    <script>
       
    //    $(".add-employee-button").click(fucnction(){
    //        commentCount = commentCount + 2;
    //        $(".employee-div1").load("index.php",{
    //             commentNewCount: commentCount
    //        });
    //    });
    </script>
</head>
    
<body>
    <div id="header">
        <img src="images/images.jpg" class="logo-image">

        <label class="logo-text">NASSP RETIREMENT CHART</label>

        <form action="" method="POST">
            <button class="view-chart" name="view-chart">
                View Chart
            </button>

            <button class="create-chart" name="create-chart">
                Create Chart
            </button>
        </form>
    </div>
    
    <input type="text">

    <?php
        $page = 2;
        $edit_chart = 1;

        if(isset($_POST['view-chart']))
        {
            // echo"<script>alert('you can view chart')</script>";
            $page = 2;
            
        }

        if(isset($_POST['create-chart']))
        {
            //  echo"<script>alert('you can create chart')</script>";

            $page = 1;  
        }

    
         if($page == 1)
        {
            $user = "root";
            $pass = "";
            $db ="nassp";
            $db = new mysqli('localhost',$user,$pass,$db)
            or die("could not connect");

            $con1="SELECT * FROM employee ";

            $con1a = mysqli_query($db,$con1);

            $con1b  = mysqli_num_rows($con1a);
          
          $no1= $con1b;

            echo "
                <form method='POST' action=''>
                    <div id='chart-name'>
                        <label class='chartname1'>
                        Chart Name
                        </label>

                        <input type='text' class='chart-name-text' name='chart-name-text'>
                    </div>

                    <div id='chart-month'>
                        <label class='chartname1'>
                        Chart Month
                        </label>

                        <select name='chart-month-select'
                         class='chart-name-text'>
                            <option value='1'>January</option>
                            <option value='2'>Febuary</option>
                            <option value='3'>March</option>
                            <option value='4'>April</option>
                            <option value='5'>May</option>
                            <option value='6'>June</option>
                            <option value='7'>July</option>
                            <option value='8'>August</option>
                            <option value='9'>September</option>
                            <option value='10'>October</option>
                            <option value='11'>November</option>
                            <option value='12'>December</option>
                        </select>
                    </div>

                    <div id='employees'>
             <label class='chartname1'>
             Employees Name
             </label>
             
             <div class='employee-div1'>

             <table class='employees-table'>

             <tr class='employees-table-row'>
                 <th>Employees</th>
                 </tr>
             
             ";
             for($x = 0; $x<$no1; $x++)
             {
                 $row = mysqli_fetch_array($con1a);

                 echo"<tr class='employees-table-row1'><th>".$row['employee']."</th></tr  >";
             }
             echo"
              
             </table>
             </div>
             
         </div>

            <input type ='submit' value='Create Chart' name='btn-chart' class='btn-chart'>
                    
            </form>";

                   
          
            

            echo"
            <form method='POST' action=''>
            <div id='add-employee'>
                    <label class='chartname1'>
                    Add Employee
                    </label>

                    <input type='text'
                     class='chart-name-text' name='employee-name-text'>

                     <button type='submit' id ='add-employee-button' 
                     name='add-employee-button'>
                        Add Employee
                     </button> 

                     
                </div>
                </form>
            ";

           
            
        }

        else if($page == 2)
        {
            echo"
                <form method='POST' action=''>
                    <button class='view_chart2' name='view_chart2'>
                        View Chart
                    </button>
                    <button name='edit_chart2' name='edit_chart2'>
                        Edit Chart
                    </button>
                </form>
            ";

            if(isset($_POST['edit_chart2']))
            {
               echo"
               <script>
               alert('God is good')
           </script>
               ";
            }
        }

        if(isset($_POST['add-employee-button']))
        {
            header("refresh: 0;");

            $employee = $_POST['employee-name-text'];

            // echo"<script>alert('the stuff is');</script>";

            $user = "root";
            $pass = "";
            $db ="nassp";
            $db = new mysqli('localhost',$user,$pass,$db)
            or die("could not connect");

            $open = "open";

            $insert_employee = "INSERT INTO employee (employee) VALUES ('$employee')";

            mysqli_query($db,$insert_employee);

            mysqli_close($db);

        


        }

        if(isset($_POST['btn-chart']))
        {
            // header("refresh: 3;");

            // location.reload();

            echo"<script>alert('posted');</script>";

            $name = $_POST['chart-name-text'];

            $month = $_POST['chart-month-select'];

            $user = "root";
            $pass = "";
            $db ="nassp";
            $db = new mysqli('localhost',$user,$pass,$db)
            or die("could not connect");

            $con1="SELECT * FROM employee";

            $con1a = mysqli_query($db,$con1);

            $con1b  = mysqli_num_rows($con1a);
          
            $no1= $con1b;

            $open = "open";

            $closed = "closed";

            $row = mysqli_fetch_array($con1a);

            $employee = $row['employee'];

            $idnum = rand(10000,99999);


            for($x = -1; $x<=$no1; $x++)
                 {
                    $row = mysqli_fetch_assoc($con1a);

                    $employee = $row['employee'];

                    // echo"<tr class='employees-table-row1'><th>".$row['employee']."</th></tr  >";

                    $insert_chart = "INSERT INTO employees (employee,table1,month1,id,`1`,`2`,`3`,`4`,`5`,`6`,`7`,`8`,`9`,`10`,`11`,`12`,`13`,`14`,`15`,`16`,`17`,`18`,`19`,`20`,`21`,`22`,`23`,`24`,`25`,`26`,`27`,`28`,`29`,`30`,`31`) VALUES
                    ('$employee','$name','$month','$idnum','$open','$open','$open','$open','$open','$open','$open','$open','$open','$open','$open','$open','$open','$open','$open','$open','$open','$open','$open','$open','$open','$open','$open','$open','$open','$open','$open','$open','$open','$open','$open')";

                    mysqli_query($db,$insert_chart);
                }

                $page = 2;  
        }

        // if(isset($_POST['chart-name-text']))
        // {
        //     echo"<script>alert('the stuff is');</script>";
        // }
    ?>
</body>
</html>