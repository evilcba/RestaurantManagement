<?php require("conn.php");
if (isset($_POST["submit"])){
    $food=$_POST["food"];
    $quantity=$_POST["qty"];
    $price=$_POST["price"];
    $name=$_POST["full_name"];
    $contact=$_POST['contact'];
    $email=$_POST["email"];
    $address=$_POST["address"];


    $sql="INSERT INTO `order` ( `food`, `quantity`, `price`, `name`, `contact`, `email`, `address`) VALUES ( '$food', '$quantity', '$price', '$name', '$contact', '$email', '$address')";
    $result=mysqli_query($conn,$sql);
    if ($result){
        echo "successful";
        
    }
    else{
        echo"error";
    }
}
?>