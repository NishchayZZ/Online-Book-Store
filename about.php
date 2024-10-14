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
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Choose BookBazaar for an immersive literary experience unlike any other. With our extensive collection spanning genres and authors, we offer a curated selection tailored to every reader's taste. Our commitment to exceptional service ensures that every interaction is personalized and memorable. Whether you're seeking a timeless classic or the latest bestseller, BookBazaar is your trusted destination, where each book is more than just a purchase—it's a journey waiting to unfold.</p>
         <p>BookBazaar offers a world of literary treasures,
Where every book is a gateway to new adventures.
With an unparalleled selection and personalized service,
Join us in exploring the magic of storytelling together.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>"Absolutely loved my experience with BookBazaar! The selection is fantastic, and the customer service is top-notch. Highly recommend!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>John deo</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>"BookBazaar has become my go-to for all my reading needs. The website is easy to navigate, and the delivery is always prompt. A wonderful online bookstore!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sarah W</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>"I stumbled upon BookBazaar while searching for a specific title, and I'm so glad I did! Not only did I find what I was looking for, but I also discovered several other gems. A hidden treasure trove for book lovers!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Micheal Myers</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>"I've been a loyal customer of BookBazaar for years, and they never disappoint. Whether it's classics or new releases, I can always count on finding something captivating. Thank you for enriching my reading journey!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Emily Wade</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>"BookBazaar exceeded my expectations! The prices are competitive, the packaging is secure, and the books arrive in pristine condition. I couldn't ask for more from an online bookstore."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Rosh Paul</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>"BookBazaar is a literary haven! Their collection is diverse, their service is impeccable, and their love for books shines through in every interaction. I've never been disappointed with a purchase. Highly recommended!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Amanda Cerny</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">Great Authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/WhatsApp Image 2024-04-03 at 10.17.38 PM.jpeg"alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Karen White</h3>
      </div>

      <div class="box">
         <img src="images/author-2.jpg"\\ alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Haley bee</h3>
      </div>

      <div class="box">
         <img src="images/WhatsApp Image 2024-04-03 at 10.20.17 PM.jpeg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Benjamin Dreyer</h3>
      </div>

      <div class="box">
         <img src="images/WhatsApp Image 2024-04-03 at 10.18.47 PM.jpeg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Ann Claire</h3>
      </div>

      <div class="box">
         <img src="images/author-5.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Pierce Brown</h3>
      </div>

      <div class="box">
         <img src="images/author-6.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Shelly Anderson</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>