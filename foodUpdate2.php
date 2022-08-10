<?php session_start();?>
<?php include 'conn.php';
if (isset($_GET['updateid'])) {
  $_SESSION['id']=$_GET['updateid'];
}


if(isset($_POST['submit'])){
  $id=$_SESSION['id'];
  $tableNo=$_POST['tableName'];
   $OrderFood=$_POST['foodtitle'];


   $sql="update `crud` set tableNo='$tableNo',OrderFood='$OrderFood' where Id =$id";
   $result=mysqli_query($conn,$sql);
   if ($result){
       echo "updated sucessfully";
       header("location: Dmenu.php");
   }
   else{
       echo"error";
   }
}
 
// $tableNo=$OrderFood="";
// $Id = isset($_GET['Id']) ? $_GET['Id'] : '';


// $tableNo=$_GET['tableNo'];
// $OrderFood=$_GET['OrderFood'];
// $id = ''; 
// if( isset( $_GET['updateid'])) {
//     $id = $_GET['Id']; 
//     $tableNo=$_GET['tableNo'];
// $OrderFood=$_GET['OrderFood'];
// } 

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div class="container my-5">
  <form action="foodUpdate.php" method="post">
  <div class="mb-3">
    <label class="form-label">TableNo:</label>
    <input type="text" class="form-control" name="tableName" id="tableName">
   
  </div>
  <div class="mb-3">
    <label class="form-label">FoodTitle:</label>
    <input type="text" class="form-control" id="foodtitle" name="foodtitle">
  </div>
 
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>

