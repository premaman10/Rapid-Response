<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/about.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo"><img class="logo" src="img/logo.png"></a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="htmlServices.php">booking history</a>
      <a href="bookings.php">book now</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(img/ank.jpg) no-repeat">
   <h1>about us</h1>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="image">
      <img src="img/cus.jpg" alt="">
   </div>

   <div class="content">
      <h3>why choose us?</h3>
      <p>Verified drivers, an emergency alert button, and live ride tracking are some of the features that we have in place to ensure you a safe travel experience.</p>
      <p>All our driver-partners are background verified and trained to deliver only the best experience</p>
      <div class="icons-container">
         <div class="icons">
            <i class="fas fa-map"></i>
            <span>top destinations</span>
         </div>
         <div class="icons">
            <i class="fas fa-hand-holding-usd"></i>
            <span>affordable price</span>
         </div>
         <div class="icons">
            <i class="fas fa-headset"></i>
            <span>24/7 guide service</span>
         </div>
      </div>
   </div>

</section>

<!-- about section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="heading-title"> clients reviews </h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">
     
         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Rapid Response Corporate provides a very efficient and easy way to book cabs. It increases the convenience for all the employees. The webpage is great!
           and I am a regular customer of Rapid Response. Rapid Response wepsite is awesome and all Rapid Response driver is good. We are feeling comfortable with the
           driver. Good service
           </p>
            <h3>RAPID RESPONSE</h3>
            <span>our partners</span>
            <img src="img/head.jpg" alt="">
            <!-- <img src="img/ujju2.jpg" alt=""> -->
            <img src="img/paarth.jpg" alt="">
            <img src="img/carnav.jpg" alt="">
         </div>

      </div>
            <?php require_once('footer.php'); ?>