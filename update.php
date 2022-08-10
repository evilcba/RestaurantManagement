<?php
include_once 'conn.php';
$result = mysqli_query($conn,"  SELECT * FROM crud");



?>
<!DOCTYPE html>
<html>
    <head>
        <title>Retrive data</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="foods.css">
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"> -->
</head>
<body >
<div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Fo<span>Ody.</span></a></div>
            <ul class="menu">
                <li><a href="index.php" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#services" class="menu-btn">Services</a></li>
                <li><a href="#skills" class="menu-btn"> Reviews</a></li>
                <li><a href="menu2.php" class="menu-btn"> Menu</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
                <li><a href="login.php" class="menu-btn">login</a><li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div> 
    </nav>
    <div>

    <h1 class="text-center">Food Orders</h1>
</div>
    <div class="mt-5 mx-3">
    <a href="foodordering.php" class="btn btn-primary " tabindex="-1" role="button" aria-disabled="true">Add Orders</a>
<!-- <a href="#" class="btn btn-secondary disabled" tabindex="-1" role="button" aria-disabled="true">Link</a> -->
</div>





  <div class="container d-flex align-items-center shadow-lg p-3 mb-5 bg-body rounded mt-5">
    <?php
    if(mysqli_num_rows($result)>0){
        ?>
        <table class="table">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Table No</th>
            <th scope="col">Food Order </th>
            <th scope="col">Action</th>
          </tr>
          <?php
          $i=0;
          while($row=mysqli_fetch_array($result)){
            ?>
            <tr>
            <td><?php echo $row['Id'];?></td>
            <td><?php echo$row['tableNo'];?></td>
            <td><?php echo$row['OrderFood'];?></td>
            </tr>
            <?php
            $i++;
          }
          ?>
          </table>
          <?php

          }
          else{
            echo"no result found";
          }
          ?>
        }
      </div>
    </body>
    </html>
    