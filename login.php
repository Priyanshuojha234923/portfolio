<?php
require('include/db.php');
if(isset($_POST['submit'])){
$user=$_POST['name'];
$password=$_POST['password'];
$query="SELECT * FROM login_form WHERE username ='$user' && password='$password'";
$run=mysqli_query($db,$query); 
//$data=mysqli_fetch_array($run);
if(mysqli_num_rows($run)>0){
   $_SESSION['isUserLoggedIn']=true;
   $_SESSION['nameId']=$_POST['name'];
    echo"<script>window.location.href = 'admin.php'</script>"; 
}
else{
   echo"<script>alert('incorrect user name or password')</script>"; 
}
}
?>
<html lang = "en">
   <head>
      <title>admin login</title>
      <link href = "css/bootstrap.min.css" rel = "stylesheet">
      
      <style>
         body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: white;
         }
         
         .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
            color: #017572;
         }
         
         .form-signin .form-signin-heading,
         .form-signin .checkbox {
            margin-bottom: 10px;
         }
         
         .form-signin .checkbox {
            font-weight: normal;
         }
         
         .form-signin .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
         }
         
         .form-signin .form-control:focus {
            z-index: 2;
         }
         
         .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            border-color:#017572;
         }
         
         .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-color:#017572;
         }
         
         h2{
            text-align: center;
            color: #017572;
         }
      </style>
      
   </head>
 <body>
  <center>
  <div style="border:2px solid black;margin-bottom: 20px;width:400px;height:400px;border-radius: 8px;box-shadow: 0px 5px 5px 5px black">
 <h2>Enter Username and Password</h2> 
     <form class = "form-signin" role = "form"  method = "post">
     
        <input type = "text" class = "form-control" 
           name = "name" placeholder = "username" 
           required autofocus autocomplete="off"></br>
        <input type = "password" class = "form-control"
           name = "password" placeholder = "password" required autocomplete="off">
        <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
           name = "submit">Login</button>     
     </form>
    <center> <a href="index.php"><button class = "btn btn-warning " type = "submit" 
           name = "home">Back to Home</button></a></center> 
 </div>
  </center>
   </body>
</html>