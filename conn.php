<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="food-order";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if ($conn) 
{
    // echo "sucessfully";         
         }
             else{
                die("Some error occured".mysqli_connect_error());    
             }
?>