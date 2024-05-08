<?php



function listPlatters(){
  $plateIDS = getPlateIDs(getConnection());

  $descriptions = getPlatedescription(getConnection());

  $prices = array(36, 25, 20, 28, 30, 50, 45, 40, 33, 22, 28, 32);
  $items = array("adv", "str", "adv rac", "str", "rac str", "rac adv", "rac str", "rac adv", "adv rac", "str", "adv", "str");
  $menuItems = getPlateNames(getConnection());


  for ($i = 0; $i < count($plateIDS); $i++) {
      ?>
      <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 <?php echo $items[$i] ?>">
          <div class="item">
              <div class="thumb">
                  <a><img src="assets/images/<?php echo   $plateIDS[$i] . '.jpg' ?>" alt=""></a>
                 
                  <span class="description"><?php echo $descriptions[$i] ?></span> 
                    <div> </div>
                  <span class="price"><em><?php echo '$'.(int)($prices[$plateIDS[$i]-1]) ?></em> </span>
              </div>
              <div class="down-content">
                  <h4><?php echo $menuItems[$i]?></h4>
              </div>
          </div>
      </div>
      <?php
  }
}
?>






