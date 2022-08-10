<?php require("conn.php");
if (isset($_POST['customerName'])){
    $customerName=$_POST['customerName'];
    // echo $Name;
    $food=$_POST['food'];
    $review=$_POST['review'];
    
   
 
}
$sql="INSERT INTO `review` ( `customerName`, `chooseFood`, `foodReview`) VALUES ( '$customerName', '$food', '$review')";
$result=mysqli_query($conn,$sql);
if ($result){
    echo "successful";
    header("location: index.php");
}
else{
    echo"error";
}


 ?>
