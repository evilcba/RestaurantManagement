
























<?php 
include 'conn.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="foods.css">
       <title>Admin Dashboard</title>
  </head>
  <body>
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
<?php
    if(mysqli_num_rows($result)>0){
        ?>
        <table>
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
            <td> 
              <button class="btn btn-primary "><a href="foodUpdate.php?
              updateid='.$Id.'" class="text-light">Update</a></button>
                <button class="btn btn-danger "><a href="foodDelete.php?
                deleteid='.$Id.'" class="text-light">Delete</a></button>
            </td>
            <!-- <td><a href=""?id=<?php echo $row['id'];?>Update</a></td> -->
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

    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>