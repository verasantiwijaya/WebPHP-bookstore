<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
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

<div class="heading">
   <h3><span class="firsttxt">About</span> <span class="secondtxt">Us</span></h3>
   <p> <a href="home.php">home</a> / about </p>
   <hr>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/logo.jpg" alt="">
      </div>

      <div class="content">
         <h3>Why Choose Us?</h3>
         <hr>
         <p>
            Literamedia, tempat di mana cinta bertemu dengan sajak mendalam. Sejak tahun 2020, kami telah menjadi destinasi utama bagi para pencinta buku dengan komitmen kami menyediakan koleksi buku yang luas dan beragam. Di Literamedia, kami bukan hanya menyediakan buku, tetapi juga membuka pintu menuju pengetahuan, imajinasi, dan kebijaksanaan.
            <br>
            Kami percaya bahwa membaca bukan hanya tentang mengkonsumsi kata, tetapi juga tentang fantasi pengalaman pembaca. Dengan demikian, kami selalu berusaha untuk menjadi tempat yang ramah dan inspiratif bagi para pecinta buku dari segala lapisan masyarakat. Segera kunjungi kami di Literamedia dan temukan dunia yang luas di dalam halaman-halaman buku yang kami tawarkan!
         </p>

      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">Our Testimonial</h1>
   <p>What Client Say About Us?</p>

   <hr>

   <div class="box-container">

      <div class="box">
         <img src="images/review 1.jpg" alt="">
         <p>Situs ini luar biasa! Saya menemukan buku favorit saya dengan mudah. Layanan pengiriman cepat dan harga terjangkau!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Rina Puspita</h3>
      </div>

      <div class="box">
         <img src="images/review 2.jpg" alt="">
         <p>Saya sangat senang menemukan situs ini! Koleksi bukunya sangat lengkap, mulai dari klasik hingga buku-buku terbaru.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Adi Nugroho</h3>
      </div>

      <div class="box">
         <img src="images/review 3.jpg" alt="">
         <p>Situs ini adalah surga bagi pecinta buku! Banyak diskon dan penawaran menarik. Saya pasti akan kembali lagi untuk belanja.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Anisa Rahma</h3>
      </div>

      <div class="box">
         <img src="images/review 4.jpg" alt="">
         <p>Sangat praktis! Cari, beli, dan terima buku dalam hitungan hari. Tidak pernah kecewa dengan kualitas buku yang saya terima.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Dewi Kusuma</h3>
      </div>

      <div class="box">
         <img src="images/review 5.jpg" alt="">
         <p>Pelayanan pelanggan yang ramah Pesanan saya tiba lebih cepat dari yang saya perkirakan. Sungguh puas dengan pengalaman ini!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Agus Setiawan</h3>
      </div>

      <div class="box">
         <img src="images/review 6.webp" alt="">
         <p>Situs ini memberikan pengalaman belanja yang menyenangkan. Saya menemukan banyak buku langka yang sulit ditemukan di tempat lain.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Fatur Rahman</h3>
      </div>

      <div class="box">
         <img src="images/review 7.jpg" alt="">
         <p>Sungguh luar biasa! Situs ini menyediakan koleksi buku yang sangat lengkap, termasuk buku yang telah sangat sulit ditemui.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Endang Purnomo</h3>
      </div>

      <div class="box">
         <img src="images/review 8.jpg" alt="">
         <p>Terima atas pengalaman berbelanja yang menyenangkan! Saya pasti akan merekomendasikan kepada teman dan keluarga.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Ananda Putri</h3>
      </div>

   </div>

</section>


<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>