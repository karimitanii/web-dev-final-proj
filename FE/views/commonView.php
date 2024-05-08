   <?php
function get_header(){
    ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="indexClient.php" class="logo">
                        <img src="assets/images/logo.png" alt="" style="width: 50%;">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="indexClient.php">Home</a></li>
                      <li><a href="shopClient.php">View Our Platters</a></li>
                      <li><a href="contactClient.php">Contact Us</a></li>
                      <li><a href="CMS/login.php">Admin Log In</a></li>
                     
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>

<?php
}


function get_header_2(){ //this header is used when the admin presses on the view client side , on the indexclient.php this header displays which enbales the admin while viewing the client side to siwtch back to admin page without re logging in 
    ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="indexClient.php" class="logo">
                        <img src="assets/images/logo.png" alt="" style="width: 50%;">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="indexClient.php">Home</a></li>
                      <li><a href="shopClient.php">View Our Platters</a></li>
                      <li><a href="contactClient.php">Contact Us</a></li>
                      <li><a href="cmsindex.php">Continue as an admin</a></li>
                     
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>

<?php
}


function get_footer(){
    ?>
    <div class="container">
    <div class="col-lg-12">
      <p>Karim Hallal, Razan Hourani, Omar Mayassi, Karim Itani. All rights reserved.</p>
    </div>
  </div>
  <?php
}

?>