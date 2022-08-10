<?php 
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Dashboard</title>
</head>
<body>
    <div class="wrapper">
        <div class="sidebar">
            <h2 style="color: wheat;">Dashboard</h2>
            <ul>
                <li class="list"><a href="Dmenu.php" style="color: wheat;">FOODS</a></li>
               <li class="list"><a href="DMessage.php"style="color: wheat;">Reviews</a></li>
               <li class="list"><a href="Dashboard.php"style="color: wheat;">Message</a></li>
            </ul>
        </div>
        <div class="main-content">
            <div class="header">
            <div class="mt-5 mx-3">
    <a href="foodordering.php" class="btn btn-primary " tabindex="-1" role="button" aria-disabled="true" style="margin-left:414px">Add Orders</a>
            <div class="container d-flex align-items-center shadow-lg p-3 mb-5 bg-body rounded" style="margin-left: 400px;
    margin-top: 70px;
}">
      <table class="table table-secondary table-striped">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Table No</th>
            <th scope="col">Food Order </th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sql="Select * from `crud`";
          $result=mysqli_query($conn,$sql);
          $Id=$tableNo=$OrderFood="";
          $row=mysqli_fetch_assoc($result);
          if($result){
            while($row=mysqli_fetch_assoc($result)){
              $Id=$row['Id'];
              $tableNo=$row['tableNo'];           
              $OrderFood=$row['OrderFood'];
             
              echo'<tr>
              <th scope="row">'.$Id.'</th>
              <td>'.$tableNo.'</td>
              <td>'.$OrderFood.'</td>
              <td> 
              <button class="btn btn-primary "><a href="foodUpdate.php?
              updateid='.$Id.'" class="text-light">Update</a></button>
                <button class="btn btn-danger "><a href="foodDelete.php?
                deleteid='.$Id.'" class="text-light">Delete</a></button>
            </td>
              </tr>';
            }
          }
           
               
          ?>
        
</tbody>
          
     
      </table>

            </div>
            <div class="info">
                
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    
</body>
</html>


    
   