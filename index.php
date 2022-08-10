<!DOCTYPE html>
<!-- Created By Shibaa Adhikari -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Ordering Website</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Montserrat+Alternates:wght@100&family=Pacifico&family=Roboto:wght@100&display=swap"
        rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->

</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Fo<span>Ody.</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#services" class="menu-btn">Services</a></li>
                <li><a href="#Reviews" class="menu-btn"> Reviews</a></li>
                <li><a href="menu2.php" class="menu-btn"> Menu</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
                <li><a href="login.php" class="menu-btn">login</a><li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <!-- <div class="text-1">Think</div>
                <div class="text-2">Click</div>
                <div class="text-3">And Pick -->
                    <!-- <span class="typing"></span> -->
                <!-- </div> -->
                <p class=text>Think, Click and pick</p>
                <section class="food-search text-center">
        <div class="container">
            
            <form action="food-search.html" method="POST">
                <input type="search" name="search" placeholder="Search for Food.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
                <a href="menu2.php">ORDER NOW</a>
            </div>
        </div>
    </section>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About us</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="images/aboutus2.avif" alt="">
                </div>
                <div class="column right">
                    <div class="text">Kuku restro is on of the
                         <!-- <span class="typing-2"></span> -->
                        </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi ut voluptatum eveniet doloremque autem excepturi eaque, sit laboriosam voluptatem nisi delectus. Facere explicabo hic minus accusamus alias fuga nihil dolorum quae. Explicabo illo unde, odio consequatur ipsam possimus veritatis, placeat, ab molestiae velit inventore exercitationem consequuntur blanditiis omnis beatae. Dolor iste excepturi ratione soluta quas culpa voluptatum repudiandae harum non.</p>
                    <a href="#">More info</a>
                </div>
            </div>
        </div>
    </section>

    <!-- services section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">Our services</h2>
            <div class="serv-content">
                <div class="card shadow-lg p-3 mb-5 bg-body rounded">
                    <div class="box">
                        <i class="fas fa-hamburger"></i>
                        <div class="text">Quality Food</div>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem quia sunt, quasi quo illo enim.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-truck"></i>
                        <div class="text"> Delivery</div>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem quia sunt, quasi quo illo enim.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="far fa-grin"></i>
                        <div class="text">Served better</div>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem quia sunt, quasi quo illo enim.</p>
                    </div>
                </div>
               </div>
            </div>
        </div>
    </section>

    <!-- skills section start -->
    <section class="skills" id="Reviews">
        <div class="max-width">
            <h2 class="title">Reviews</h2>
            <div class="skills-content">
                <div class="column left">
                    <p class="reviews font">Customer Reviews</p>
                    <!-- <div class="text">My creative skills & experiences.</div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, ratione error est recusandae consequatur, iusto illum deleniti quidem impedit, quos quaerat quis minima sequi. Cupiditate recusandae laudantium esse, harum animi aspernatur quisquam et delectus ipsum quam alias quaerat? Quasi hic quidem illum. Ad delectus natus aut hic explicabo minus quod.</p>
                    <a href="#">Read more</a> -->
                    <div class="slideshow-container">

<div class="mySlides">
  <q>I love you the more in that I believe you had liked me for my own sake and for nothing else</q>
  <p class="author">- John Keats</p>
</div>

<div class="mySlides">
  <q>But man is not made for defeat. A man can be destroyed but not defeated.</q>
  <p class="author">- Ernest Hemingway</p>
</div>

<div class="mySlides">
  <q>I have not failed. I've just found 10,000 ways that won't work.</q>
  <p class="author">- Thomas A. Edison</p>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>

                </div>
                 <div class="column right">
                    <div class="">
                        <form action="reviews.php" class="contact" method="POST">
                            <div class="customerName">
                            <label class="font">Customer Name:</label>
                            <input type="text" class="cname" name="customerName" id="customerName" style="padding: 15px;width: 70%;border-radius: 5px;">
                            
                            </div>
                            
                        

                     <div class="food-choose">
                     <label for="food" class="padd font" style="margin-left:5px">Reviews<label>
                     <select name="food" id="food" style="padding: 15px;border-radius: 5px;margin-left: 4.45rem;width: 70%;">
                        <option value="Customer Service">Customer Service</option>
                         <option value="Quality Food">Quality Food</option>
                        <option value="Environment">Environment</option>
                         <option value="Hygenic">Hygenic</option>
                         </select>
                     </div>

                         <div class="field textarea review-write" >
                             
                            <textarea cols="30" rows="10" placeholder="Write Your Review" name="review" id="review" style="margin-left: 10rem;width: 70%;" required></textarea>
                        </div>
                        <div class="button-area">
                            <button type="submit" name="submit" id="submit" style="margin-left:165px">Send message</button>
                        </div>
                        </form>
                    </div>
                         
                        
    </section>


    <!-- teams section start -->
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">Our menus</h2>
            <div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                        <img src="images/biryani.jpg" alt="">
                        <div class="text">Biryani</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/momo.jpg" alt="">
                        <div class="text">MOMO</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/noodels.jpg" alt="">
                        <div class="text">Noodels</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/pasta.jpg" alt="">
                        <div class="text">Pasta</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/burger.jpg" alt="">
                        <div class="text">burger</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
  
    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact Us</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.  lorem34Dignissimos harum corporis fuga corrupti. Doloribus quis soluta nesciunt veritatis vitae nobis?</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">FoOdy </div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Kathmandu, Nepal</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">foody@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message us</div>
                    <form action="contact.php" class="contact" method="POST">
                        <div class="fields">
                            <div class="field name" >
                                <input type="text" placeholder="Name" name="name" required>
                            </div>
                            <div class="field email" >
                                <input type="email" placeholder="Email" name="email" required>
                            </div>
                        </div>
                        <div class="field" >
                            <input type="text" placeholder="Subject" name="subject" required>
                        </div>
                        <div class="field textarea" >
                            <textarea cols="30" rows="10" placeholder="Message.." name="message" required></textarea>
                        </div>
                        <div class="button-area">
                            <button type="submit" name="submit">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- footer section start -->
    <footer>
        <span>Created By <a href="#">Shibaa Adhikari</a> | <span class="far fa-copyright"></span> 2020 All rights reserved.</span>
    </footer>

    <script src="index.js"></script>
</body>
</html>