

<?php  include "../be/common/session.php";
ensureLoggedInIndex();
ensureadminloggedin();



?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Walter White</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-lugx-gaming.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 589 lugx gaming

https://templatemo.com/tm-589-lugx-gaming

-->


  </head>

 

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="cmsindex.php" class="active">Home</a></li>
                      <li><a href="CMS/addItem.php">Add Item</a></li>
                      <li><a href="CMS/activate.php">Activate/Deactive Item</a></li>
                      
                      <li><a href="CMS/AddAdmin.php">Add Admin</a></li>

                      <li><a href="indexClient.php">View Client Side</a></li>
                      <li><a href="../BE/common/logout.php">Logout</a></li>

                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner" style="padding-bottom: 100px; padding-top: 150px">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="caption header-text">
            <h4>Welcome Back, </h4>
            <h4> <?php if (isset($_SESSION['dn'])) {
                    $username = $_SESSION['dn'];
                    echo "$username !";
                } ?> </h4>
                <p> </p>
            <p style="font-size: 120%" > Welcome back to the Admin Page. Here you can add, activate, and deactivate items. </p>
       
            
          </div>
        </div>
        <div class="col-lg-4 offset-lg-2">
          <div class="right-image">
            <img src="assets/images/banner-image.jpg" alt="" style="margin-bottom:180px">
            
          </div>
        </div>
      </div>
    </div>
    <div class="features">
    <h2 style= "color:white; margin-bottom:20px">Here are the perks of being an admin! </h2>
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <a href="CMS/addItem.php">
            <div class="item">
              <div class="image">
                <img src="assets/images/featured-01.png" alt="" style="max-width: 44px;">
              </div>
              <h4>Add Item</h4>
              
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="CMS/activate.php">
            <div class="item">
              <div class="image">
                <img src="assets/images/featured-02.png" alt="" style="max-width: 44px;">
              </div>
              <h4>Activate Item</h4>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="CMS/activate.php">
            <div class="item">
              <div class="image">
                <img src="assets/images/featured-02.png" alt="" style="max-width: 44px;">
              </div>
              <h4>Deactivate Item</h4>
            </div>
          </a>
        </div>
        
        <div class="col-lg-3 col-md-6">
        <a href="CMS/addAdmin.php">
        <div class="item">
            <div class="image">
                <img src="assets/images/featured-04.png" alt="" style="max-width: 44px;">
            </div>
            <h4>Add Admin</h4>
        </div>
    </a>
</div>

      </div>
    </div>
  </div>
  </div>

 
 
  
        

  

 

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>

  </body>
</html>