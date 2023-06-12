<?php 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Website</title>
    <!-- Custom css -->
    <link rel="stylesheet" href="style.css">
    <!-- Font Awesome Cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
 <!-- Header Section -->
 <div class="header" id="home">
    <nav id="navbar">
        <div class="logo">
            <img src="img\logo.png">
        </div>
        <div class="links" id="nav">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#blog">Blog</a>
            <a href="#contact">Contact</a>
            <a href="login.php">Login</a>
        </div>
        <div class="fas fa-bars" id="menu-btn" onclick="openmenu()"></div>
        <div class="fa-solid fa-xmark" id="close" onclick="closemenu()"></div>
    </nav>
    <div class="content">
        <h3>Feel the Energy</h3>
        <h1>start your day with <br>a coffee</h1>
        <div class="form-group">
            <input type="submit" value="Buy Now">
        </div>
    </div>
</div>
<!-- Header Section End -->

<!-- About Section -->
<section class="about" id="about">
    <h1 class="heading">About <span>Us</span></h1>
    <div class="container">
        <div class="image">

        </div>
        <div class="about-content">
            <h1>What makes our coffee special?</h1>
            <h3>Coffee & Craft</h3>
            <p>It takes many hands to craft the perfect cup of coffee from the farmers who tend
               to the red-ripe coffee cherries, to the master roasters who coax the best from every bean, 
               and to the barista who serves it with care. We are committed to the highest standards of 
               quality and service, embracing our heritage while innovating to create new experiences to savor.
            </p>
            <div class="form-group">
                <input type="submit" value="More About Us">
            </div>
        </div>
    </div>
</section>
<!-- About Section End-->

<!-- Blog Section -->
<section class="blog" id="blog">
    <h1 class="heading">Our <span>Blog</span></h1>
    <p class="heading-description">Read our blog and know more about our latest update..</p>
    <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img\post1.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                    <h3>By Admin |<span> Lee Minho</span></h3>
                    <h1>We Love what We Do</h1>
                    <h4>Straightforwardness is significantly more than exactly where we get our beans from.</h4>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img\post2.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                    <h3>By Employee |<span> John Doe</span><a href=""></a></h3>
                    <h1>Tasty and refresing coffee</h1>
                    <h4>A culture of consistent learning is the way to continue driving coffee forward.</h4>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img\post3.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                    <h3>By Customer |<span> Katherine Pierce</span></h3>
                    <h1>Coffee Inspires Us</h1>
                    <h4>Sourcing the best coffee beans does not ensure great coffee.</h4>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </div>
</section>

    <!-- Contact Section  -->
    <section class="contact" id="contact">
        <h1 class="heading">Contact <span>Us</span></h1>
        <p class="heading-description">We are always here for you...</p>
        <div class="container">
            <div class="contact-box">
                <div>
                    <i class="fa-solid fa-envelope"></i>
                    <h2>Email address <br> <span>Send email anytime</span></h2>
                </div>
                <div>
                    <p>admin@brewtopia.com</p>
                    <i class="fa-solid fa-right-long"></i>
                </div>
            </div>
            <div class="contact-box">
                <div>
                    <i class="fa-solid fa-location-dot"></i>
                    <h2>Address <br> <span>Find Us</span></h2>
                </div>
                <div>
                    <p>Bangalore , India</p>
                    <i class="fa-solid fa-right-long"></i>
                </div>
            </div>
            <div class="contact-box">
                <div>
                    <i class="fa-solid fa-phone"></i>
                    <h2>Call Us <br> <span>Call us anytime</span></h2>
                </div>
                <div>
                    <p>+080 352837897</p>
                    <i class="fa-solid fa-right-long"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section End -->

    <!-- Footer Section -->
    <section class="footer">

        <div class="container">
            <div class="footer-box">
                <h3>about us </h3>
                <p>It takes many hands to craft the perfect cup of coffee from the farmers who tend
                    to the red-ripe coffee cherries, to the master roasters who coax the best from every bean, 
                    and to the barista who serves it with care.
                </p>
                <p>Copyrights &copy; 2023 All rights reserved By <a href="index.php">Brewtopia</a>
                </p>
            </div>
            <div class="footer-box">
                <h3>Newsletter</h3>
                <p>Stay updated with our latests</p>
                <form>
                    <input type="email" name="email" placeholder="admin@gmail.com">
                    <button type="submit"><i class="fa-solid fa-right-long"></i></button>
                </form>
            </div>
            <div class="footer-box">
                <h3>Follow Us</h3>
                <p>Connect With Us On:</p>
                <div>
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Section End -->

    <script src="script.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>