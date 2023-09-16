<?php
require('include/db.php');
$query="SELECT * FROM home,section_control,social_media,skills,biography,cv,login_form";
$run= mysqli_query($db,$query);
$user_data=mysqli_fetch_array($run);
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?=$user_data['title']?></title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

   <!-- aos css link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
   
  


   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
  

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message" data-aos="zoom-out">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>

<!-- header section starts  -->

<header class="header">

   <div id="menu-btn" class="fas fa-bars"></div>

   <a href="#home" class="logo">Portfolio</a>

   <nav class="navbar">
      <?php
      if($user_data['home_section']){
         ?>
         <a href="#home" class="active">home</a>
         <?php
      }
      if($user_data['about_section']){
         ?>
         <a href="#about"></a>
         <?php
      }
      if($user_data['services_section']){
         ?>
         <a href="#services">services</a>
         <?php
      }
      if($user_data['portfolio_section']){
         ?>
        <a href="#portfolio">portfolio</a>
         <?php
      }
      if($user_data['contact_section']){
         ?>
         <a href="#contact">contact</a>
         <?php }
         ?>
         <a href="login.php">login</a>
   </nav>
<?php
if($user_data['showicon']){
   ?>
    <div class="follow">
      <?php
      if($user_data['facebook']!=''){
         ?>
<a href="https://facebook.com/<?=$user_data['facebook']?>" class="fab fa-facebook-f"></a>
         <?php
      }
      ?>
       <?php
      if($user_data['twitter']!=''){
         ?>
<a href="https://twitter.com/<?=$user_data['twitter']?>" class="fab fa-twitter"></a>
         <?php
      }
      ?>
        <?php
      if($user_data['instagram']!=''){
         ?>
 <a href="https://instagram.com/<?=$user_data['instagram']?>" class="fab fa-instagram"></a>
         <?php
      }
      ?>
      <?php
      if($user_data['linkdin']!=''){
         ?>
 <a href="https://linkdin.com/<?=$user_data['linkdin']?>" class="fab fa-linkedin"></a>
         <?php
      }
      ?>
       <?php
      if($user_data['github']!=''){
         ?>
  <a href="https://github.com/<?=$user_data['github']?>" class="fab fa-github"></a>
         <?php
      }
      ?>
   
   
  
   
  
</div>
   <?php
  
}
?>


</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="image" data-aos="fade-right">
      <img src="images/<?=$user_data['user_pic']?>" alt="">
   </div>

   <div class="content">
      <h3 data-aos="fade-up"><?=$user_data['title']?></h3>
      <span data-aos="fade-up"><?=$user_data['subtitle']?></span>
      <p data-aos="fade-up"><?=$user_data['cotitle']?></p>
      <a data-aos="fade-up" href="#about" class="btn">about me</a>
   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <h1 class="heading" data-aos="fade-up"> <span>Biography</span> </h1>

   <div class="biography">

      <p data-aos="fade-up"><?=$user_data['bio']?></p>

      <div class="bio">
         <?php
$query2="SELECT * FROM about";
$run2= mysqli_query($db,$query2);

while($user_data2=mysqli_fetch_array($run2)){
   ?>
    <h3 data-aos="zoom-in"> <span><?=$user_data2['level']?> : </span> <?=$user_data2['value']?> </h3>
<?php
}
         ?>
        
      </div>

      <a href="cv/<?=$user_data['cvname']?>"class="btn" data-aos="fade-up" target="blank">download CV</a>

   </div>
   
   <div class="skills">

      <h1 class="heading"> <span>skills</span> </h1>

     
      <?php
$query3="SELECT * FROM skills";
$run3= mysqli_query($db,$query3);

while($user_data3=mysqli_fetch_array($run3)){
   ?>
   <div class="col-sm-10" style=" height: 25px;background:lightgrey;border-radius: 20px;margin-top:10px; ;">
        <div class="row" style="background:var(--yellow); color:black; height: 25px;width:<?=$user_data3['value1']?>% ;border-radius: 20px; ">
            <span style="font-size:18px;margin-top:20px"><b><?=$user_data3['lable']?></b></span>
         </div>
<?php
}
         ?>
   </div>

   <div class="edu-exp">

      <h1 class="heading" data-aos="fade-up"> <span>Experience</span> </h1>

      <div class="row">


         <div class="box-container">

         <h3 class="title" data-aos="fade-left">Experience</h3>
            <?php
$query5="SELECT * FROM experience";
$run5= mysqli_query($db,$query5);
while($user_data5=mysqli_fetch_array($run5)){
   ?> 
     <div class="box" data-aos="fade-left">
               <span> <?=$user_data5['year']?></span>
               <h3><?=$user_data5['post']?></h3>
               <p><?=$user_data5['aboutpost']?></p>
            </div>
<?php
}
         ?>
            
         </div>

      </div>
      <h1 class="heading" data-aos="fade-up"> <span>Education</span> </h1>
<div class="row">
   
<div class="box-container">

<h3 class="title" data-aos="fade-right">education</h3>
<?php
$query4="SELECT * FROM education";
$run4= mysqli_query($db,$query4);
while($user_data4=mysqli_fetch_array($run4)){
?>
<div class="box" data-aos="fade-left">
   <span>( <?=$user_data4['year']?> )</span>
   <h3><?=$user_data4['course']?></h3>
   <p><?=$user_data4['aboutcourse']?></p>
</div>
<?php
}
?>

</div>
</div>
   </div>

</section>

<!-- contact section starts  -->

<div style="margin-top: 65%;"><section class="contact" id="contact">

   <h1 class="heading" data-aos="fade-up"> <span>contact me</span> </h1>

   <form action="" method="post">
      <div class="flex">
         <input data-aos="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
         <input data-aos="fade-left" type="email" name="email" placeholder="enter your email" class="box" required>
      </div>
      <input data-aos="fade-up" type="number" min="0" name="number" placeholder="enter your number" class="box" required>
      <textarea data-aos="fade-up" name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
      <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn">
   </form>

   <div class="box-container">
  
  <?php
$query6="SELECT * FROM contact";
$run6= mysqli_query($db,$query6);
while($user_data6=mysqli_fetch_array($run6)){
   ?>
      <div class="box" data-aos="zoom-in">
         <i class="fas fa-phone"></i>
         <h3>phone</h3>
         <p><?=$user_data6['phone']?></p>
      </div>
      <div class="box" data-aos="zoom-in">
         <i class="fas fa-envelope"></i>
         <h3>email</h3>
         <p><?=$user_data6['email']?></p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-map-marker-alt"></i>
         <h3>address</h3>
         <p><?=$user_data6['address']?></p>
      </div>


<?php
}
         ?>

   </div>

</section></div>

<!-- contact section ends -->

<div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>mr. priyanshu ojha

</span> </div>












<!-- custom js file link  -->
<script src="js/script.js"></script>

<!-- aos js link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

   AOS.init({
      duration:800,
      delay:300
   });

</script>
   
</body>
</html>