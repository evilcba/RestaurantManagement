<?php require("conn.php");
$Name=$Email=$Subject=$Message=NULL;
if (isset($_POST['submit'])){
    $Name=$_POST['name'];
    // echo $Name;
    $Email=$_POST['email'];
    $Subject=$_POST['subject'];
    $Message=$_POST['message']; 
}
$sql="INSERT INTO `contacts` ( `name`, `email`, `subject`, `message`) VALUES ( '$Name', '$Email', '$Subject', '$Message')";
$result=mysqli_query($conn,$sql);
if ($result){
    echo "successful";
    header("location: index.php");
}
else{
    echo"error";
}


 ?>
