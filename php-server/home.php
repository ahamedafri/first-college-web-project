<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:page1.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!----- add font link here -->
    <link rel="stylesheet" href="..\font\css\all.min.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="..\font\css\fontawesome.min.css?<?php echo time(); ?>">
  
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  
    <!--- custom css file link -->
    <link rel="stylesheet" href="home.css?<?php echo time(); ?>">
   
</head>
<body>
    
    <!-- header section starts  -->
    
    <header>
    
        <div id="menu-bar" class="fas fa-bars"></div>
    
        <a href="#" class="logo"><span>S</span>aveSea</a>
    
        <nav class="navbar">
        <a href="..\homepage\index.html">HOME</a>
            <a href="https://savingoceanwildlife.org/resources/">CHALENGES</a>
            <a href="https://seasave.org/get-trashy/">OUR VISION</a>
            <a href="https://savingoceanwildlife.org/donate/">HOW TO HELP</a>
            <a href="https://seasave.org/contact-us/">CONTACT US</a>
        </nav>
      
   

   <div class="profile">
      <?php
         $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
         if(mysqli_num_rows($select) > 0){
            $fetch = mysqli_fetch_assoc($select);
         }
         if($fetch['image'] == ''){
            echo '<img class="user-img" src="images/default-avatar.png"  >';
         }else{
            echo '<img class="user-img" src="uploaded_img/'.$fetch['image'].'">';
         }
      ?>
      <h3 class="user-text"><?php echo $fetch['name']; ?></h3>
   </div>

   <div class="btns">
    <button ><a href="update_profile.php" class="btn">update profile</a></button>
    <button ><a href="home.php?logout=<?php echo $user_id; ?>" class="delete-btn">logout</a><button>
   </div>

</header>
     
<div calass="home-header">
<section class="f-section"> 
   
       <ul class="social_icon">
           
        <h3 class="qoute">
              Thank You For Joining Our Community! <br> Let's Make Social Awareness Together!
        </h3>
      </section>  
            
            <section class="card">   
                <div class="blog-post">
                    
                   <div class="blog-post_img">
                   <?php echo "<img src='teamseas.jpg' >";?>  
                   </div>
            
                   <div class="blog-post_info">
                       <div class="blog-post_date">
                           <span></span>
                           <span>Target </span>
                       </div>
                       <h1 class="blog-post_title">#TeamSeas</h1>
                       <p class="blog-post_text">#TeamSeas will be one of the biggest, baddest, most-impactful cleanup projects of all time—and here’s how we’re doing it. Scroll on to see our cutting-edge river Interceptors, info on locally-organized cleanups, ghost-gear removal efforts and professional expeditions to areas where we can have the greatest conservation impact!</p>
                       <a href="https://teamseas.org/" class="blog-post_cta">Read more</a>
                       <a href="link.html" class="blog-post_cta">Spread Awarness</a>       
                    </div>
                </div>        
            </section>
           
            <section class="card">   
                <div class="blog-post">
                    
                   <div class="blog-post_img">
                   <?php echo "<img src='shark.jpg' >";?>  
                   </div>
            
                   <div class="blog-post_info">
                       <div class="blog-post_date">
                           <span></span>
                           <span>Target</span>
                       </div>
                       <h1 class="blog-post_title"> Use Your Voice</h1>
                       <p class="blog-post_text">By signing petitions, and joining our advocacy efforts you will help affect change at a global level. Please sign up for our newsletter to receive notifications.</p>
                       <a href="https://seasave.org/week-in-review/" class="blog-post_cta">Read more</a>
                       <a href="link.html" class="blog-post_cta">Spread Awarness</a>       
                    </div>
                </div>        
            </section>

            <section class="card">   
                <div class="blog-post">
                    
                   <div class="blog-post_img">
                   <?php echo "<img src='seas-vote.png' >";?>  
                   </div>
            
                   <div class="blog-post_info">
                       <div class="blog-post_date">
                           <span></span>
                           <span>Target </span>
                       </div>
                       <h1 class="blog-post_title">Seas the Vote</h1>
                       <p class="blog-post_text">Sea Save Foundation is a non-partisan advocate for practical, science-based policies that defend ocean life while preserving local economies. To be successful, we need elected officials who understand what’s at stake. Before you vote, do your research to know which candidates, if elected, will be making ocean-friendly decisions. After elections are over, call and write to your elected officials, encouraging them to support ocean conservation measures. Make your commitment now to #VoteTheOcean</p>
                       <a href="https://seasave.org/pledge-to-seas-the-vote/" class="blog-post_cta">Read more</a>
                       <a href="link.html" class="blog-post_cta">Spread Awarness</a>       
                    </div>
                </div>        
            </section>

            <section class="card">   
                <div class="blog-post">
                    
                   <div class="blog-post_img">
                   <?php echo "<img src='Plastic-Pollution.png' >";?>  
                   </div>
            
                   <div class="blog-post_info">
                       <div class="blog-post_date">
                           <span></span>
                           <span>Target</span>
                       </div>
                       <h1 class="blog-post_title">Refuse plastic</h1>
                       <p class="blog-post_text">When plastic waste reaches the ocean, it kills birds, sea turtles, and marine mammals. Floating plastic debris often resembles food, and animals may choke or starve when plastic blocks their digestive systems. To help prevent these unnecessary deaths, choose reusable items over single-use plastic bags and bottles, and avoid products with excessive packaging. Sea Save is a proud strategic partner in the Plastic Pollution Coalition.
Learn more about Plastic Pollution and what Sea Save Foundation is doing about it.!</p>
                       <a href="https://seasave.org/plastic-pollution/" class="blog-post_cta">Read more</a>
                       <a href="link.html" class="blog-post_cta">Spread Awarness</a>       
                    </div>
                </div>        
            </section>
    </div>
    <!-- header section ends -->















     <!-----footer starts-->
     <section class="f-section"> 
        <div class="waves">
          <div class="wave" id="wave1"></div>
          <div class="wave" id="wave2"></div>
          <div class="wave" id="wave3"></div>
          <div class="wave" id="wave4"></div>    
        </div>
       <ul class="social_icon">
           
           <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
           <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
           <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
           <li><a href="#"><i class="fa-brands fa-instagram-square"></i></a></li>
           
       </ul>
       <ul class="menu">
           <li><a href="#">Home</a></li>
           <li><a href="#">About</a></li>
           <li><a href="#">services</a></li>
           <li><a href="#">Team</a></li>
           <li><a href="#">Contact</a></li>
       </ul>
       <p>©2022 SaveSea Organization</p>
    <script src="home.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
    </body>

    </html>