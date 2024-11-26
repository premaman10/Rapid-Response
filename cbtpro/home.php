<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Rapid Response</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/about.css">

</head>
<body>
   
<!-- header section starts  -->

<link rel="stylesheet" href="css/about.css">
<?php require_once('header.php'); ?>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(css/hud.jpg) no-repeat">
            <div class="content">
               <span>travel with rapid response</span>
               <h3 style="color: black;">Book a City Taxi</h3>
               <a href="bookings.php" class="btn">Book Now</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(img/carb.jpg) no-repeat">
            <div class="content">
               <span>travel with rapid response</span>
               <h3>go to any loaction</h3>
               <a href="bookings.php" class="btn">Book Now</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(img/env.webp) no-repeat">
            <div class="content">
              
               <h3>environment friendly cars</h3>
               <a href="bookings.php" class="btn">Book Now</a>
            </div>
         </div>
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>
<!-- home section ends -->

<!-- services section starts  -->

<section class="services">

   <h1 class="heading-title"> our services </h1>

   <div class="box-container">
   
   <div class="box">
         <img src="img/hatch.png" alt="">
         <h3>e hatch back</h3>
      </div>

      <div class="box">
         <img src="img/ajj.png" alt="">
         <h3>e suv</h3>
      </div>

      <div class="box">
         <img src="img/sedani.png" alt="">
         <h3>e sedan</h3>
      </div>

      <div class="box">
         <img src="img/rik.png" alt="">
         <h3>e rickshaw</h3>
</div>

      <div class="box">
         <img src="img/sc.png" alt="">
         <h3>e bike</h3>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="img/jk.jpg" alt="">
   </div>

   <div class="content">
      <h3>about us</h3>
      <p>Ride out of town at affordable one-way and round-trip fares with Rapid response
         intercity travel service. Choose from a range of AC cabs driven by top partners,
         available in 1 hour or book upto 7 days in advance.City taxis are available 24/7 and you can book and travel</p>
      <a href="about.php" class="btn">read more</a>
   </div>

</section>

<!-- home about section ends -->

<!-- home packages section starts  -->

<section class="home-packages">

   <h1 class="heading-title"> our packages </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="img/hond.webp" alt="">
         </div>
         <div class="content">
            <h3>1 month pack in suv </h3>
            <p>1 km in suv cost 15 Rs but in one month pack it cost 12 rs per km and in one day one user can travel maximum 20 km total in 30 days = Rs 7200 </p>
            <center><a href="PaymentGateway/index.php" class="btn">subscribe now</a></center>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="img/taa.webp" alt="">
         </div>
         <div class="content">
            <h3>1 month pack in sedan</h3>
            <p>1 km in sedan cost 12 Rs but in one month pack it cost 10 rs per km and in one day one user can travel maximum 20 km total in 30 days = Rs 6000 </p>
            <center><a href="PaymentGateway/index.php" class="btn">subscribe now</a></center>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="img/hat.png" alt="">
         </div>
         <div class="content">
            <h3>1 month pack in hatchback</h3>
            <p>1 km in hatchback cost 10 Rs but in one month pack it cost 8 rs per km and in one day one user can travel maximum 20 km total in 30 days = Rs 4800 </p>
            <center><a href="PaymentGateway/index.php" class="btn">subscribe now</a></center>
         </div>
      </div>

   </div>

</section>

<!-- home packages section ends -->

<!-- home offer section starts  -->

<section class="home-offer">
   <div class="content">
      <h3>upto 30% off</h3>
      <p>Rapid response New User Special: FLAT 30% OFF on your Rides</p>
      <a href="bookings.php" class="btn">book now</a>
   </div>
</section>

<!-- home offer section ends -->
<!---common footer->
<?php require_once('footer.php'); ?>


!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>