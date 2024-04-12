<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'header.php'; ?>

<section class="promo">
   <div class="flexpromo">

      <div class="image">
         <img src="images/home1.png" alt="">
      </div>

      <div class="text-promo">
         <h3>Terms and Conditions:</h3>
         <p>
            1. This Promotion is only valid On 00.00-24.00 (February 28, 2022). <br>
            3. This promotion can't be combined with other promotion. <br>
            4. Your eCoupon Cashback can be used for next purchase with minimum purchase of double up from your Cashback value.<br>
            5. eCoupon Cashback is valid for 7 days from the date we received your payment. <br>
            6. This promotion valid only at Literamedia.com <br>
            7. eCoupon from other promo can't be used to get this promotion. <br>
            8. Your purchase using eCoupon will not receive another eCoupon Cashback from this promotion. <br>
         </p>
      </div>
      <a href="home.php" class="white-btn">Back Home</a>
   </div>
</section>

<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>