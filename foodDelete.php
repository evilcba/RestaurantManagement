<?php
include 'conn.php';
if(isset($_GET['deleteid'])){
    $Id=$_GET['deleteid'];

    $sql="delete from `crud` where id= $Id";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo"deleted successfully";
        header('location:Dmenu.php');

    }else{
        die(mysqli_error($conn));
    }

}

?>