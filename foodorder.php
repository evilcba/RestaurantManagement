<?php require("conn.php");
if (isset($_POST['submit'])){

$tableNo=$_POST['tableName'];
$OrderFood=$_POST['foodtitle'];
}
$sql="INSERT INTO `foodorder` ( `tableNo`, `OrderFood`) VALUES ( '$tableNo', '$OrderFood')";
$result=mysqli_query($conn,$sql);
if ($result){
    echo "successful";
    header("location: menu2.php");
}
else{
    echo"error";
}

?>