<?php
    session_start();
?>

DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NASSP CHART</title>

    <link rel="stylesheet" href="index1.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->

</head>
    
<body>
    <div id="header">
        <img src="images/images.jpg" class="logo-image">

        <label class="logo-text">NASSCO RETIREMENT CHART</label>

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
        $edit_chart = 2;

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
                            <option value='January'>January</option>
                            <option value='Febuary'>Febuary</option>
                            <option value='March'>March</option>
                            <option value='April'>April</option>
                            <option value='May'>May</option>
                            <option value='June'>June</option>
                            <option value='July'>July</option>
                            <option value='August'>August</option>
                            <option value='September'>September</option>
                            <option value='October'>October</option>
                            <option value='November'>November</option>
                            <option value='December'>December</option>
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


            for($x = 2; $x<=$no1; $x++)
                 {
                    $idnum_user = rand(10000,99999);

                    $row = mysqli_fetch_assoc($con1a);

                    $employee = $row['employee'];

                    // echo"<tr class='employees-table-row1'><th>".$row['employee']."</th></tr  >";

                    $insert_chart = "INSERT INTO employees (employee,table1,month1,id,userid,`1`,`2`,`3`,`4`,`5`,`6`,`7`,`8`,`9`,`10`,`11`,`12`,`13`,`14`,`15`,`16`,`17`,`18`,`19`,`20`,`21`,`22`,`23`,`24`,`25`,`26`,`27`,`28`,`29`,`30`,`31`) VALUES
                    ('$employee','$name','$month','$idnum','$idnum_user','$open','$open','$open','$open','$open','$open','$open','$open','$open','$open','$open','$open','$open','$open','$open','$open','$open','$open','$open','$open','$open','$open','$open','$open','$open','$open','$open','$open','$open','$open','$open')";

                    mysqli_query($db,$insert_chart);
                }

             
        }




        else if($page == 2)
        {
            echo"
                <form method='POST' action=''>
                    <button class='view-chart2' name='view_chart2'>
                        View Chart
                    </button>
                    <button name='edit_chart2' class='edit_chart2'>
                        Edit Chart
                    </button>
                </form>
            ";

            if(isset($_POST['edit_chart2']))
            {
                $edit_chart = 2;   
            }

            if(isset($_POST['view_chart2']))
            {
                $edit_chart = 1;

            }

            if($edit_chart == 2)
            {
                $table_no = 1;
                echo"<div class='view-charts-scrool' id='slider'>";
                $user = "root";
                $pass = "";
                $db ="nassp";
                $db = new mysqli('localhost',$user,$pass,$db)
                or die("could not connect");

                $con1="SELECT * FROM employees GROUP BY id";

                $con1a = mysqli_query($db,$con1);

                $con1b  = mysqli_num_rows($con1a);
            
                $no1= $con1b;

                // echo"<script>alert($no1)</script>";

                // $get_name="SELECT * FROM employees GROUP BY id";

                //     $run_get_name = mysqli_query($db,$get_name);
                    
                // $row = mysqli_fetch_array($con1a);

                    // $name_table = $row['table1'];

                for($x = 0; $x<$no1; $x++)
                {
                    $row = mysqli_fetch_array($con1a);

                    $name_table = $row['table1'];

                    $name_id = $row['id'];

                    echo"
                        <div id='pictures'>
                            <label class='slidephotos'>$name_table : $name_id</label> 
                        </div>
                    ";

                }

                // mysqli_close($db);

                echo"
                <img src='images/download.png' class='sliderleft'  onclick='plusDivs(-1)'>

                <img src='images/download.png' class='sliderright'  onclick='plusDivs(-1)'>
                ";

                echo" </div>";

                echo"
                <form method='POST' action=''>
                    <input type='text' name='input-id' class='input-id' placeholder='input id'>

                    <button type='submit' class='button-select-id' name='button-select-id'>See chart</button>

                </form>
                ";

                if(isset($_POST['button-select-id']))
                {
                    $id = $_POST['input-id'];

                    // echo"<script>alert($id);</script>";
                    $_SESSION['id'] = $id;

                    $table_no = 2;
                }

                if($table_no == 2)
                {
                    echo"<div class='chart-table1' border='5'>";
                echo "<table class='chart-table' >";

                $id_session = $_SESSION['id'];

                $select_employee="SELECT * FROM employees WHERE id = '$id_session'";

                $run_sel = mysqli_query($db,$select_employee);

                $row_cell  = mysqli_num_rows($run_sel);
                

                

                echo"
                    </tr><td>Name</td>
                    <td>Mission</td>
                    <td>Month</td>
                    <td>ID</td>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>
                    <td>8</td>
                    <td>9</td>
                    <td>10</td>
                    <td>11</td>
                    <td>12</td>
                    <td>13</td>
                    <td>14</td>
                    <td>15</td>
                    <td>16</td>
                    <td>17</td>
                    <td>18</td>
                    <td>19</td>
                    <td>20</td>
                    <td>21</td>
                    <td>22</td>
                    <td>23</td>
                    <td>24</td>
                    <td>25</td>
                    <td>26</td>
                    <td>27</td>
                    <td>28</td>
                    <td>29</td>
                    <td>30</td>
                    <td>31</td>

                    </tr>


                ";

                for($x = 0; $x<$row_cell; $x++)
                 {
                $row1 = mysqli_fetch_array($run_sel);

                    echo"
                    <tr>
                    <td>".$row1['employee']."</td>
                    <td>".$row1['table1']."</td>
                    <td>".$row1['month1']."</td>
                    <td>".$row1['id']."</td>
                    <td>".$row1['1']."</td>
                    <td>".$row1['2']."</td>
                    <td>".$row1['3']."</td>
                    <td>".$row1['4']."</td>
                    <td>".$row1['5']."</td>
                    <td>".$row1['6']."</td>
                    <td>".$row1['7']."</td>
                    <td>".$row1['8']."</td>
                    <td>".$row1['9']."</td>
                    <td>".$row1['10']."</td>
                    <td>".$row1['11']."</td>
                    <td>".$row1['12']."</td>
                    <td>".$row1['13']."</td>
                    <td>".$row1['14']."</td>
                    <td>".$row1['15']."</td>
                    <td>".$row1['16']."</td>
                    <td>".$row1['17']."</td>
                    <td>".$row1['18']."</td>
                    <td>".$row1['19']."</td>
                    <td>".$row1['20']."</td>
                    <td>".$row1['21']."</td>
                    <td>".$row1['22']."</td>
                    <td>".$row1['23']."</td>
                    <td>".$row1['24']."</td>
                    <td>".$row1['25']."</td>
                    <td>".$row1['26']."</td>
                    <td>".$row1['27']."</td>
                    <td>".$row1['28']."</td>
                    <td>".$row1['29']."</td>
                    <td>".$row1['30']."</td>
                    <td>".$row1['31']."</td>

                    </tr>
                    ";
                 }

                echo"</table>";
                echo"</div>";
                }

                else if($table_no ==1)
                {
                    echo"<div class='chart-table1'>";
                echo "<table class='chart-table'>";
                
                    echo"hsdbajsbjabs";

                echo"</table>";
                echo"</div>";
                }
                
                echo"<form>
                <div class='select_dates'>
                    <label class='start_date_label'>Start Date</label>
                    <input type='text' class='start_date'> 
                    <label class='end_date_label'>End Date</label>
                    <input type='text' class='end_date'>
                </div>
                </form>
                ";

                echo "
                    <form>
                        <div class='view_names'>
                            <table class='view_names_table'>
                                "; 
                                
                                for($x = 0; $x<$row_cell; $x++){
                                    $sheddy1 = mysqli_fetch_array($run_sel);
                                    echo"<tr><td>".$sheddy['employee']."</td></tr>";
                                }
                                
                            echo"
                            </table>
                        </div>
                    </form>      
                ";

            }

        }
        //end of 2nd page

       
        // if(isset($_POST['chart-name-text']))
        // {
        //     echo"<script>alert('the stuff is');</script>";
        // }
    ?>

<script>
    
    var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("slidephotos");
  if (n > x.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none"; 
  }
  x[slideIndex-1].style.display = "block"; 
}
    
    
    var slideIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("slidephotos");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none"; 
    
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1} 
  x[slideIndex-1].style.display = "block"; 
  setTimeout(carousel, 15000); // Change image every 2 seconds

}
    </script>


    <img src="images/download" alt="">

     <table class="stuff">

     </table>
</body>
</html>