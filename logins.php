<?php require("conn.php");

if (isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
   
   
}
$sql="INSERT INTO `logintable` ( `username`, `password`) VALUES ( '$username', '$password')";
$result=mysqli_query($conn,$sql);
if ($result){
    echo "successful";
    header("location: Dashboard.php");
}
else{
    echo"error";
}



 ?>
