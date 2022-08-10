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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
                <li><a href="menu2.php" class="menu-btn"> Menu</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
                <li><a href="login.php" class="menu-btn">login</a><li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div> 
    </nav>
    <!-- navigation bar ends -->
    <section class="menu">
      <div>
        <h2>All  Menus</h2>
        <div id="records_contant">
    
    </div>
  
    <div class="food-menu-box " style="margin-left:78px">
        <div class="food-menu-img">
            <img src="images/noodels.jpg" alt="momo" class="img-responsive img-curve  ">
        </div>
        <div class="food-menu-desc">
            <h4>Noodels</h4>
            <p class="food-price">$2.3</p>
            <p class="food-detail">
                made with italian sause,chicken, and organic vegitables
            </p>
            <br>
            <!-- <button class="btn btn-primary "><a href="orders.php">Add to cart</a></button> -->
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Add to cart</button>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Menu Order</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>



      <div class="modal-body">
        <!-- <form action="menu2crud.php" class="" method="POST"> -->
            <div class="mb-3">
                 <label for="Table No" class="col-form-label" >Table No:</label>
                 <input type="text" name="tableName" class="form-control" id="tableName">
            </div>

          <div class="mb-3">
            <label for="Order Food" class="col-form-label" >Food Title </label>
            <textarea class="form-control"  name="foodtitle" id="foodtitle"></textarea>
          </div>   
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" name="close">Close</button>
        <button type="submit" class="btn btn-primary" name="submit" id="btnadd" onclick="addRecord()">Order Now</button>
        </form>
      </div>
    </div>


  </div>
</div>

        </div>
        <!-- <div class="clearfix"></div> -->
    </div>

    <div class="food-menu-box">
        <div class="food-menu-img">
            <img src="images/burger.jpg" alt="momo" class="img-responsive img-curve  ">
        </div>
        <div class="food-menu-desc">
            <h4>Noodels</h4>
            <p class="food-price">$2.3</p>
            <p class="food-detail">
                made with italian sause,chicken, and organic vegitables
            </p>
            <br>
            <!-- <button class="btn btn-primary "><a href="orders.php">Add to cart</a></button> -->
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Add to cart</button>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Menu Order</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>



      <div class="modal-body">
        <form action="foodorder.php" class="" method="POST">
            <div class="mb-3">
                 <label for="Table No" class="col-form-label" >Table No:</label>
                 <input type="text" name="tableName" class="form-control" id="tableName">
            </div>

          <div class="mb-3">
            <label for="Order Food" class="col-form-label" >Food Title </label>
            <textarea class="form-control"  name="foodtitle" id="foodtitle"></textarea>
          </div>   
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" name="close">Close</button>
        <button type="submit" class="btn btn-primary" name="submit">Order Now</button>
        </form>
      </div>
    </div>


  </div>
</div>

        </div>
        <!-- <div class="clearfix"></div> -->
    </div>


    <div class="food-menu-box">
        <div class="food-menu-img">
            <img src="images/momo.jpg" alt="momo" class="img-responsive img-curve  ">
        </div>
        <div class="food-menu-desc">
            <h4>Noodels</h4>
            <p class="food-price">$2.3</p>
            <p class="food-detail">
                made with italian sause,chicken, and organic vegitables
            </p>
            <br>
            <!-- <button class="btn btn-primary "><a href="orders.php">Add to cart</a></button> -->
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Add to cart</button>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Menu Order</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>



      <div class="modal-body">
        <form action="foodorder.php" class="" method="POST">
            <div class="mb-3">
                 <label for="Table No" class="col-form-label" >Table No:</label>
                 <input type="text" name="tableName" class="form-control" id="tableName">
            </div>

          <div class="mb-3">
            <label for="Order Food" class="col-form-label" >Food Title </label>
            <textarea class="form-control"  name="foodtitle" id="foodtitle"></textarea>
          </div>   
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" name="close">Close</button>
        <button type="submit" class="btn btn-primary" name="submit">Order Now</button>
        </form>
      </div>
    </div>


  </div>
</div>

        </div>
        <!-- <div class="clearfix"></div> -->
    </div>


    <div class="food-menu-box">
        <div class="food-menu-img">
            <img src="images/cupcake.jpg" alt="momo" class="img-responsive img-curve  ">
        </div>
        <div class="food-menu-desc">
            <h4>Noodels</h4>
            <p class="food-price">$2.3</p>
            <p class="food-detail">
                made with italian sause,chicken, and organic vegitables
            </p>
            <br>
            <!-- <button class="btn btn-primary "><a href="orders.php">Add to cart</a></button> -->
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Add to cart</button>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Menu Order</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>



      <div class="modal-body">
        <form action="foodorder.php" class="" method="POST">
            <div class="mb-3">
                 <label for="Table No" class="col-form-label" >Table No:</label>
                 <input type="text" name="tableName" class="form-control" id="tableName">
            </div>

          <div class="mb-3">
            <label for="Order Food" class="col-form-label" >Food Title </label>
            <textarea class="form-control"  name="foodtitle" id="foodtitle"></textarea>
          </div>   
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" name="close">Close</button>
        <button type="submit" class="btn btn-primary" name="submit">Order Now</button>
        </form>
      </div>
    </div>


  </div>
</div>

        </div>
        <!-- <div class="clearfix"></div> -->
    </div>


    <div class="food-menu-box" style="margin-left:78px">
        <div class="food-menu-img">
            <img src="images/noodels.jpg" alt="momo" class="img-responsive img-curve  ">
        </div>
        <div class="food-menu-desc">
            <h4>Noodels</h4>
            <p class="food-price">$2.3</p>
            <p class="food-detail">
                made with italian sause,chicken, and organic vegitables
            </p>
            <br>
            <!-- <button class="btn btn-primary "><a href="orders.php">Add to cart</a></button> -->
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Add to cart</button>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Menu Order</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>



      <div class="modal-body">
        <form action="foodorder.php" class="" method="POST">
            <div class="mb-3">
                 <label for="Table No" class="col-form-label" >Table No:</label>
                 <input type="text" name="tableName" class="form-control" id="tableName">
            </div>

          <div class="mb-3">
            <label for="Order Food" class="col-form-label" >Food Title </label>
            <textarea class="form-control"  name="foodtitle" id="foodtitle"></textarea>
          </div>   
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" name="close">Close</button>
        <button type="submit" class="btn btn-primary" name="submit">Order Now</button>
        </form>
      </div>
    </div>


  </div>
</div>

        </div>
        <!-- <div class="clearfix"></div> -->
    </div>


    <div class="food-menu-box">
        <div class="food-menu-img">
            <img src="images/noodels.jpg" alt="momo" class="img-responsive img-curve  ">
        </div>
        <div class="food-menu-desc">
            <h4>Noodels</h4>
            <p class="food-price">$2.3</p>
            <p class="food-detail">
                made with italian sause,chicken, and organic vegitables
            </p>
            <br>
            <!-- <button class="btn btn-primary "><a href="orders.php">Add to cart</a></button> -->
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Add to cart</button>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Menu Order</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>



      <div class="modal-body">
        <form action="foodorder.php" class="" method="POST">
            <div class="mb-3">
                 <label for="Table No" class="col-form-label" >Table No:</label>
                 <input type="text" name="tableName" class="form-control" id="tableName">
            </div>

          <div class="mb-3">
            <label for="Order Food" class="col-form-label" >Food Title </label>
            <textarea class="form-control"  name="foodtitle" id="foodtitle"></textarea>
          </div>   
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" name="close">Close</button>
        <button type="submit" class="btn btn-primary" name="submit">Order Now</button>
        </form>
      </div>
    </div>


  </div>
</div>

        </div>
        <!-- <div class="clearfix"></div> -->
    </div>

    <div class="food-menu-box">
        <div class="food-menu-img">
            <img src="images/noodels.jpg" alt="momo" class="img-responsive img-curve  ">
        </div>
        <div class="food-menu-desc">
            <h4>Noodels</h4>
            <p class="food-price">$2.3</p>
            <p class="food-detail">
                made with italian sause,chicken, and organic vegitables
            </p>
            <br>
            <!-- <button class="btn btn-primary "><a href="orders.php">Add to cart</a></button> -->
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Add to cart</button>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Menu Order</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>



      <div class="modal-body">
        <form action="foodorder.php" class="" method="POST">
            <div class="mb-3">
                 <label for="Table No" class="col-form-label" >Table No:</label>
                 <input type="text" name="tableName" class="form-control" id="tableName">
            </div>

          <div class="mb-3">
            <label for="Order Food" class="col-form-label" >Food Title </label>
            <textarea class="form-control"  name="foodtitle" id="foodtitle"></textarea>
          </div>   
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" name="close">Close</button>
        <button type="submit" class="btn btn-primary" name="submit">Order Now</button>
        </form>
      </div>
    </div>


  </div>
</div>

        </div>
        <!-- <div class="clearfix"></div> -->
    </div>

    <div class="food-menu-box">
        <div class="food-menu-img">
            <img src="images/noodels.jpg" alt="momo" class="img-responsive img-curve  ">
        </div>
        <div class="food-menu-desc">
            <h4>Noodels</h4>
            <p class="food-price">$2.3</p>
            <p class="food-detail">
                made with italian sause,chicken, and organic vegitables
            </p>
            <br>
            <!-- <button class="btn btn-primary "><a href="orders.php">Add to cart</a></button> -->
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Add to cart</button>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Menu Order</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>



      <div class="modal-body">
        <form action="foodorder.php" class="" method="POST">
            <div class="mb-3">
                 <label for="Table No" class="col-form-label" >Table No:</label>
                 <input type="text" name="tableName" class="form-control" id="tableName">
            </div>

          <div class="mb-3">
            <label for="Order Food" class="col-form-label" >Food Title </label>
            <textarea class="form-control"  name="foodtitle" id="foodtitle"></textarea>
          </div>   
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" name="close">Close</button>
        <button type="submit" class="btn btn-primary" name="submit">Order Now</button>
        </form>
      </div>
    </div>

  </div>
  
</div>
</div>

        </div>
        <!-- <div class="clearfix"></div> -->
    </div>

  
</div>





    </section>

  

    <!-- <a href="foods.php"> <input type="button" value=" show all orders" class="orders"> </a> -->
    <!-- <button ><a href="foodorderingdisplay.php">My Cart</a></button> -->

    
    <script>
      $(document).ready(function(){

      });
                function readRecords(){
                  var readRecord= " readrecord";
                  $.ajax({
                    url:"showOrder.php",
                    type:"post",
                    data:{readrecord:readrecord },
                    success: function(data,status){
                      

                      $('#records_contant').html(data);
                    }

                  });
                }



      function addRecord(){
         console.log("inside add record")
      
        var tableNum=$('#tableName').val(); 
        var OrderFoods =$('#foodtitle').val();

        console.log("table number is",tableNum,OrderFoods)
        if(tableNum && OrderFoods){
          $.ajax({
          url:"menu2crud.php",
          type:'post',
          data:{
            tableNo : tableNum,
            OrderFood: OrderFoods
          },
          success:function(data,status){
            readRecords();
          }
        });
        }
      }   
      </script>
<!-- <script src="menu2.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>