<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

   <div class="header-box">
      <div class="flex">
         <a href="home.php" class="logo">Meds24</a>

         <nav class="navbar">
            <a href="home.php" class="<?php if($currentPage =='home'){echo 'active';}?>">home</a>
            <a href="about.php" class="<?php if($currentPage =='about'){echo 'active';}?>">about</a>
            <a href="shop.php" class="<?php if($currentPage =='shop'){echo 'active';}?>">shop</a>
            <a href="contact.php" class="<?php if($currentPage =='contact'){echo 'active';}?>">contact</a>
            <a href="orders.php" class="<?php if($currentPage =='orders'){echo 'active';}?>">orders</a>
         </nav>

         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="search_page.php" class="fas fa-search <?php if($currentPage =='search_page'){echo 'active';}?>"></a>
            <div id="user-btn" class="fas fa-user"></div>
            <?php
               $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
               $cart_rows_number = mysqli_num_rows($select_cart_number); 
            ?>
            <a href="cart.php"> <i class="fas fa-shopping-cart"></i> <span>(<?php echo $cart_rows_number; ?>)</span> </a>
         </div>

         <div class="user-box">
            <p>username : <span><?php echo $_SESSION['user_name']; ?></span></p>
            <p>email : <span><?php echo $_SESSION['user_email']; ?></span></p>
            <a href="logout.php" class="delete-btn">logout</a>
         </div>
      </div>
   </div>

</header>