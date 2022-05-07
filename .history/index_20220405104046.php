<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NASSP CHART</title>
    <link rel="stylesheet" href="index.css">
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
        $page = 0;
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

        if($page==0)
        {

        }
        else if($page == 1)
        {
            echo "
                <form>
                    <div id='chart-name'>
                        <label class='chartname1'>
                        Chart Name
                        </label>

                        <input type='text'
                         class='chart-name-text' name='chart-name-text'>
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
                        Chart Name
                        </label>
                        
                        <div class='employee-div1'>
                        <table class='employees-table'>
                            <tr class='employees-table-row'>
                            <th>Employees</th>
                            </tr>

                            <tr class='employees-table-row1'>
                            <th>Employees</th>
                            </tr>

                            <tr class='employees-table-row1'>
                            <th>Employees</th>
                            </tr>
                            
                        </table>
                        </div>
                        
                    </div>

                    
                </form>

                <form method='POST' action=''>
                <div id='add-employee'>
                        <label class='chartname1'>
                        Add Employee
                        </label>

                        <input type='text'
                         class='chart-name-text' name='chart-name-text'>

                         <button type='submit' class ='add-employee-button' 
                         name='add-employee-button'>
                            Add Employee
                         </button> 

                         
                    </div>
                    </form>

                    
                    
            ";

           
        }

        else if($page == 2)
        {

        }

        if(isset($_POST['add-employee-button']))
        {
            

            $employee = $_POST['chart-name-text'];
            
            echo "<h1>$employee</h1>";

            echo"<script>alert('the stuff is');</script>";
        }

        // if(isset($_POST['chart-name-text']))
        // {
        //     echo"<script>alert('the stuff is');</script>";
        }
    ?>
</body>
</html>