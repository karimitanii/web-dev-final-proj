<?php



function listPlatters($plateIDS){
      ?>
    <?php 
    $items = array("adv", "str", "adv rac", "str", "rac str", "rac adv", "rac str", "rac adv", "adv rac", "str", "adv", "str");
    
    for($i = 0; $i< count($plateIDS); $i++){
      ?>
      <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 <?php echo $items[$i] ?>">
        <div class="item">
          <div class="thumb">
            <a href="product-details.php"><img src="assets/images/<?php echo 'trending-01.jpg'?>" alt=""></a>
            <span class="price"><em>$36</em>$24</span>
          </div>
          <div class="down-content">
            <span class="category">Action</span>
            <h4>Assasin Creed</h4>
            <a href="product-details.php"><i class="fa fa-shopping-bag"></i></a>
          </div>
        </div>
      </div>




<?php
    }



}

function signupForm(){
    ?>
    <form action="..\be\controllers\userController.php" method="POST">
      <input type="hidden" name="action" value="SIGNUP">
      <h1>Signup Form</h1>
      <section id="personal-details">
        <h2>Personal Details</h2>
        <ul>
          <li>
            <label for="fn">Full Name</label>
            <input
              type="text"
              id="fn"
              name="full-name"
              required
              maxlength="20"
            />
          </li>

          <li>
            <label for="dob">Date of Birth</label>
            <input type="date" id="dob" name="date-of-birth" />
          </li>

          <li id="gender-box">
            <label for="m-sex"
              ><input type="radio" id="m-sex" name="sex" checked value="M"/> Male</label
            >
            <br />
            <label for="f-sex"
              ><input type="radio" id="f-sex" name="sex" value="F"/> Female</label
            >
          </li>
        </ul>
      </section>

      <section id="account-creation">
        <h2>Account Creation</h2>
        <ul>
          <li>
            <label for="dn">Display Name</label>
            <input type="text" id="dn"  name="display-name" />
          </li>

          <li>
            <label for="user-email">Email Address</label>
            <input type="email" id="user-email" name="user-email">
          </li>
          <li>
            <label for="pass1">Password</label>
            <input type="password" id="pass1"  name="password" />
          </li>

          <li>
            <label for="pass2">Confirm Password</label>
            <input type="password" id="pass2"  />
          </li>
        </ul>
      </section>

      <section id="submission">
        <button type="button" onclick="validityCheck()">Create Account</button>
        <p>Already have an account? <a href="login.php">Login</a></p>
      </section>
    </form>

    <?php
}


function loginForm(){
?>
 <form action="..\be\controllers\userController.php" method="POST">
 <input type="hidden" name="action" value="LOGIN">

      <h1>Login Form</h1>
    
      <section id="account-creation">
        <h2>Enter your credentials</h2>
        <ul>
          <li>
            <label for="dn">Email Address</label>
            <input type="email" id="dn" name="user-email" />
          </li>
          <li>
            <label for="pass1">Password</label>
            <input type="password" id="pass1" name="pass" />
          </li>

        </ul>
      </section>

      <section id="submission">
        <button type="submit">Log In</button>
        <p>Don't have an account? <a href="signup.php">Sign up</a></p>
      </section>
    </form>

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

<<<<<<< HEAD
?>
=======
function get_footer(){
    ?>
    <div class="container">
    <div class="col-lg-12">
      <p>Copyright © 2048 LUGX Gaming Company. All rights reserved. &nbsp;&nbsp; <a rel="nofollow" href="https://templatemo.com" target="_blank">Design: TemplateMo</a></p>
    </div>
  </div>
  <?php
}
>>>>>>> 1a3d1ffd65b4ce10e0f021611b59e06f73b571c6
