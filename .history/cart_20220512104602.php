<?php
$currency = '₹ '; //Currency Character or code

$user = "root";
            $pass = "";
            $db ="nassp";
            $db = new mysqli('localhost',$user,$pass,$db)
            or die("could not connect");

$shipping_cost      = 1.50; //shipping cost
$taxes              = array( //List your Taxes percent here.
                            'VAT' => 12, 
                            'Service Tax' => 5
                            );						



?>