<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salmon Publishers</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

</head>
<body>
  <?php
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Salmon<span>Publishers.</span></a></div>
            <ul class="menu">
                <li><a href="index.html" class="menu-btn">Home</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>
            
    <div class="row">
        <div class="col-75">
          <div class="container">
      
              <div class="row">
                <div class="col-50">
                  <h4>BLACK LOVE</h4>
                  <div class="#">
                    <img src="images/IMG-20220825-WA0013.jpg" width="250px" height="280px">
                  </div>
                  <h3>R350</h3>
                </br>
                 <h2>SUMMARY</h2>
                </br>
                <p>“Your love for me is warming daily even through challenges we soldier on cause only we know our journey spiritually and emotionally with all challenges .This journey changed my l
                    ife for the better to be with my soul mate and for the worse to go through 
                    in-law abuse to be diagnosed with what could have been chronic disease but I knelt down more than 
                    I cried and I thank you @tolassmothegamer for being my every source of strength through the stomps, losses 
                    (miscarriages, emotional and mental trauma of being cursed to fail at this marriage by in-laws).”</p>
                </div>
                <form action="mail.php" mathod="POST">
                  <div class="col-50">
                    <h3>Address</h3>
                    <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                    <input type="text" id="fname" name="firstname" placeholder="John M. Doe" required>
                    <label for="email"><i class="fa fa-envelope"></i> Email</label>
                    <input type="text" id="email" name="email" placeholder="john@example.com" required>
                    <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                    <input type="text" id="adr" name="address" placeholder="542 W. 15th Street" required>
                    <label for="city"><i class="fa fa-institution"></i> City</label>
                    <input type="text" id="city" name="city" placeholder="New York"required>
        
                    <div class="row">
                      <div class="col-50">
                        <label for="state">State</label>
                        <input type="text" id="state" name="state" placeholder="NY" required>
                      </div>
                      <div class="col-50">
                        <label for="zip">Zip</label>
                        <input type="text" id="zip" name="zip" placeholder="10001" required>
                      </div>
                      <input type="submit" value="Continue to checkout" class="btn" required>
                    </div>
                  </div>
                </form>
              </div>
          </div>
        </div>
    </div>
    <!-- footer section start -->
    <footer>
        <div>
            <a href="https://www.instagram.com/salmonpublishers/"><i class="fa fa-instagram"></i>
            </a>
            <a href="https://www.facebook.com/salmonpublishers/"><i class="fa fa-facebook-f"></i></a>
            <a href="https://www.linkedin.com/in/xolani-gule-6b39a81a4"><i class="fa fa-linkedin-square"></i></a>
        </div>
    </br></br>
        <span>Created By <a href="#">Khethiwe Matsheni</a> | <span class="far fa-copyright"></span> 2020 All rights reserved.</span>
    </footer>

    <script src="script.js"></script>
?>
</body>
</html>