<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="menu.css">
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="foods.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

</head>

<body>
  <!-- navigation bar -->
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
        <li><a href="menu3.php" class="menu-btn"> Menu</a></li>
        <li><a href="#contact" class="menu-btn">Contact</a></li>
        <li><a href="login.php" class="menu-btn">login</a>
        <li>
      </ul>
      <div class="menu-btn">
        <i class="fas fa-bars"></i>
      </div>
    </div>
  </nav>
  <!-- navigation bar ends -->
  <section class="menu">
    <div>
      <h2>All Menus</h2>
      <div id="records_contant">

      </div>
<?php
session_start();
// $_SESSION[]
?>
      <div class="food-menu-box " style="margin-left:25px">
        <div class="food-menu-img">
          <img src="images/noodels.jpg" alt="momo" class="img-responsive img-curve  ">
        </div>
        <div class="food-menu-desc">
          <form action=menu3.php method="post">
          <h4 id="foodname">Noodels</h4>
          <p id="foodPirce">Rs75</p>
          <p class="food-detail">
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, repudiandae?
          </p>
          <br>
          <!-- <button class="btn btn-primary "><a href="orders.php">Add to cart</a></button> -->
          <button type="button" class="btn btn-danger">Order Now</button>
        </div>
      </div>

      
      <div class="food-menu-box " style="margin-left:78px">
        <div class="food-menu-img">
          <img src="images/noodels.jpg" alt="momo" class="img-responsive img-curve  ">
        </div>
        <div class="food-menu-desc">
          <form method="get" action="menuOrder3.php">

          <h4 name="foodname"> Pizza</h4>
          <p class="food-price">Rs 300</p>
          <p class="food-detail">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum, minus?

          </p>
</form>
          <br>
          <!-- <button class="btn btn-primary "><a href="orders.php">Add to cart</a></button> -->
          <button type="button" class="btn btn-danger"><a href="menu3Order.php">ORDER NOW</a></button>
        </div>
      </div>
      
      <div class="food-menu-box " style="margin-left:78px">
        <div class="food-menu-img">
          <img src="images/noodels.jpg" alt="momo" class="img-responsive img-curve  ">
        </div>
        <div class="food-menu-desc">
          <h4>Burger</h4>
          <p class="food-price">Rs 150</p>
          <p class="food-detail">
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, repellendus
          </p>
          <br>
          <!-- <button class="btn btn-primary "><a href="orders.php">Add to cart</a></button> -->
          <button type="button" class="btn btn-danger"><a href="#">ORDER NOW</a></button>
        </div>
      </div>
      
      <div class="food-menu-box " style="margin-left:78px">
        <div class="food-menu-img">
          <img src="images/noodels.jpg" alt="momo" class="img-responsive img-curve  ">
        </div>
        <div class="food-menu-desc">
          <h4>Chowmin</h4>
          <p class="food-price">Rs 220</p>
          <p class="food-detail">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore, voluptatibus.
          </p>
          <br>
          <!-- <button class="btn btn-danger "><a href="#"><a href="#">ORDER NOW</a></a></button> -->
          <button type="button" class="btn btn-danger"><a href="#"><a href="#">ORDER NOW</a></a></button>
        </div>
      </div>
      
      <div class="food-menu-box " style="margin-left:25px">
        <div class="food-menu-img">
          <img src="images/noodels.jpg" alt="momo" class="img-responsive img-curve  ">
        </div>
        <div class="food-menu-desc">
          <h4> Samosa Chat</h4>
          <p class="food-price">Rs 175</p>
          <p class="food-detail">
           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, tenetur?
          </p>
          <br>
          <!-- <button class="btn btn-primary "><a href="orders.php">Add to cart</a></button> -->
          <button type="button" class="btn btn-danger"><a href="#">ORDER NOW</a></button>
        </div>
      </div>
      
      <div class="food-menu-box " style="margin-left:78px">
        <div class="food-menu-img">
          <img src="images/noodels.jpg" alt="momo" class="img-responsive img-curve  ">
        </div>
        <div class="food-menu-desc">
          <h4>Makarel Fish</h4>
          <p class="food-price">Rs500</p>
          <p class="food-detail">
           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, rem!
          </p>
          <br>
          <!-- <button class="btn btn-primary "><a href="orders.php">Add to cart</a></button> -->
          <button type="button" class="btn btn-danger"><a href="#">ORDER NOW</a></button>
        </div>
      </div>
      <div class="food-menu-box " style="margin-left:78px">
        <div class="food-menu-img">
          <img src="images/noodels.jpg" alt="momo" class="img-responsive img-curve  ">
        </div>
        <div class="food-menu-desc">
          <h4>Chopsey</h4>
          <p class="food-price">Rs500</p>
          <p class="food-detail">
           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, rem!
          </p>
          <br>
          <!-- <button class="btn btn-primary "><a href="orders.php">Add to cart</a></button> -->
          <button type="button" class="btn btn-danger"><a href="#">ORDER NOW</a></button>
        </div>
      </div>
      <div class="food-menu-box " style="margin-left:78px">
        <div class="food-menu-img">
          <img src="images/noodels.jpg" alt="momo" class="img-responsive img-curve  ">
        </div>
        <div class="food-menu-desc">
          <h4>Pasta</h4>
          <p class="food-price">Rs500</p>
          <p class="food-detail">
           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, rem!
          </p>
          <br>
          <!-- <button class="btn btn-primary "><a href="orders.php">Add to cart</a></button> -->
          <button type="button" class="btn btn-danger"><a href="#">ORDER NOW</a></button>
        </div>
      </div>






    </div>
  </section>



  </script>
  <!-- <script src="menu2.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>
</body>

</html>
