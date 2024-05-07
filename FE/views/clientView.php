<?php
function get_header(){
    ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <img src="assets/images/logo.png" alt="" style="width: 158px;">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="indexClient.php" class="active">Home</a></li>
                      <li><a href="shopClient.php">View Our Platters</a></li>
                      <li><a href="product-details.php">Product Details</a></li>
                      <li><a href="contactClient.php">Contact Us</a></li>
                      <li><a href="#">Sign In</a></li>
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
      <p>Copyright © 2048 LUGX Gaming Company. All rights reserved. &nbsp;&nbsp; <a rel="nofollow" href="https://templatemo.com" target="_blank">Design: TemplateMo</a></p>
    </div>
  </div>
  <?php
}