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
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Nunito&family=Poppins&family=Roboto&display=swap" rel="stylesheet">
   <link rel="icon" type="image/x-icon" href="images/icons8-open-book-64.png">
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">Home</a> / About </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-almond.png" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Built up in 2023. Even we are that new, Almond Bookstore is offering same quality as other bookstore. We offer a tremendous gathering of books in the various classifications of Fiction, Non-fiction, Biographies, History, Religions, Self – Help, and Children.  </p>
         <p>We are offering our products with low price as possible so that all groups of people can read and enjoy our products</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>Best site ever to buy books! fast and good customer service. Recommended to buy your books here from best store in the town!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Taffan Muhammad Rizqi</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>What a nice e-commerce for books. Nice UI and UX from this website. And the books has good quality too. Overall im happy with this bookstore.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Ali Akbar Permana</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>Good job Almond!. I've never seen a bookstore web this beautiful and aesthetic. it also has easy experience to buy books.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Yuval Adilah</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>Im the storm that is approaching, approaching! Fortune favours the one who buys books in this store. GG everyone Siuuuu</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Vergil</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>When I wasn’t working, the weekends would usually find me alone in an empty apartment, making do with the company of books.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Obama</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>Read a lot. Expect something big, something exalting or deepening from a book. No book is worth reading that isn't worth re-reading.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Kermit</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">great authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/jk-rowling-2_43.jpeg" alt="">
         <div class="share">
            
            <a href="https://twitter.com/jk_rowling?" class="fab fa-twitter"></a>
            
            
         </div>
         <h3>J. K. Rowling</h3>
      </div>

      <div class="box">
         <img src="images/3000.jpeg" alt="">
         <div class="share">
            
            <a href="https://twitter.com/StephenKing?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="fab fa-twitter"></a>
           
            
         </div>
         <h3>Stephen King</h3>
      </div>

      <div class="box">
         <img src="images/Screenshot+2022-07-15+at+16.03.18.png" alt="">
         <div class="share">
            
            <a href="https://twitter.com/johngreen?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/johngreenwritesbooks/?hl=en" class="fab fa-instagram"></a>
            
         </div>
         <h3>John Green</h3>
      </div>

      <div class="box">
         <img src="images/download.jpeg" alt="">
         <div class="share">
            
            <a href="https://twitter.com/JP_Books?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/jamespattersonbooks/?hl=en" class="fab fa-instagram"></a>
            
         </div>
         <h3>James Patterson</h3>
      </div>

      <div class="box">
         <img src="images/image17.png" alt="">
         <div class="share">
            
            <a href="https://twitter.com/pidibaiq" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/pidibaiq/?hl=en" class="fab fa-instagram"></a>
            
         </div>
         <h3>Pidi Baiq</h3>
      </div>

      <div class="box">
         <img src="images/DB-Author-Photo-Credit-Dan-Courter-20170530_034-Edit.jpg" alt="">
         <div class="share">
            
            <a href="https://twitter.com/authordanbrown?lang=en" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/authordanbrown/?hl=en" class="fab fa-instagram"></a>
         </div>
         <h3>Dan Brown</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>