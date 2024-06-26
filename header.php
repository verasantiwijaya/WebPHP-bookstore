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
   
   <div class="header-1">
      <div class="flex">
         <section class="search-form">
               <form id="searchForm" action="search_page.php" method="GET">
                  <input type="text" name="search" id="searchInput" placeholder="Type here..." class="box">
                  <button type="submit" class="btnsrc"><i class="fas fa-search"></i></button>
               </form>
         </section>
      </div>
   </div>



   <div class="header-2">
      <div class="flex">
         <a href="home.php" class="logo">Literamedia</a>

         <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="orders.php">orders</a>
         </nav>

         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="user-btn" class="fas fa-user"></div>
            <?php
               $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
               $cart_rows_number = mysqli_num_rows($select_cart_number); 
            ?>
            <a href="cart.php"> <i class="fas fa-shopping-cart"></i> <span>(<?php echo $cart_rows_number; ?>)</span> </a>
         </div>

         <div class="user-box">
            <p> Username : <span><?php echo $_SESSION['user_name']; ?></span></p>
            <p> Email : <span><?php echo $_SESSION['user_email']; ?></span></p>
            <p> Role : <span>customer</span></p>
            <a href="logout.php" class="white-btn">Log Out</a>
            <a href="register.php" class="white-btn">Sign in</a>
         </div>
      </div>
   </div>

</header>
