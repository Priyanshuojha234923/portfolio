<?php
require('include/db.php');
$query="SELECT * FROM home,section_control,social_media,skills,biography,cv";
$run= mysqli_query($db,$query);
$user_data=mysqli_fetch_array($run);
$querry6="SELECT * FROM contact";
$run6=mysqli_query($db,$querry6);
$user_data6=mysqli_fetch_array($run6);
$query7="SELECT * FROM login_form";
$run7= mysqli_query($db,$query7);
$user_data7=mysqli_fetch_array($run7);
if(isset($_SESSION['isUserLoggedIn'])){
    echo"<script>window.location.href = 'admin.php'</script>"; 
}
else{
    echo"<script>window.location.href = 'login.php'</script>"; 
}
$query="SELECT * FROM home,section_control,social_media,skills,biography,cv";
$run= mysqli_query($db,$query);
$user_data=mysqli_fetch_array($run);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <style>
    aside #navbar :hover{
      background: var(--yellow);
    } 
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->

      <!-- Notifications Dropdown Menu -->

      
      <li class="nav-item">
        <a class="nav-link"  href="logout.php" role="button">
         <b><i>LogOut</i></b>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <div class="brand-link bg-yellow">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
      <span class="brand-text font-weight-light">Admin Panel</span>
</div>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="images/<?=$user_data['user_pic']?>" class="brand-image img-circle elevation-3" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block font-weight-bolder"><?=$user_data['title']?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->


      <!-- Sidebar Menu -->
      <nav class="mt-2" id="navbar">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open ">
            <a href="#sectionsetting" class="nav-link  bg-yellow" >
            <i class="fas fa-paperclip"></i>
              <p>
                Section Control
               
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="#showform" class="nav-link">
            <i class="far fa-envelope"></i>
              <p>
                Show-Message 
               
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="#homesetting" class="nav-link">
            <i class="fas fa-home"></i>
              <p>
                Home Control
               
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="#picsetting" class="nav-link">
            <i class="fas fa-home"></i>
              <p>
               Profile Pic Change
               
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="#biosetting" class="nav-link">
            <i class="fas fa-gem"></i>
              <p>
               About Control
               
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="#mesetting" class="nav-link">
            <i class="fas fa-home"></i>
              <p>
               About me
               
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="#skillsetting" class="nav-link">
            <i class="fas fa-pen"></i>
              <p>
                Skill Control
               
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="#educationsetting" class="nav-link">
            <i class="fas fa-graduation-cap"></i>
              <p>
                Education Control
               
              </p>
              
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="#experiencesetting" class="nav-link">
            <i class="fas fa-building"></i>
              <p>
                Experience Control
               
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="#resumesetting" class="nav-link">
            <i class="far fa-file"></i>
              <p>
                Update Resume
               
              </p>
            </a>
          </li>
          
          <li class="nav-item menu-open">
            <a href="#contactsetting" class="nav-link">
            <i class="fas fa-anchor"></i>
              <p>
                Contact Control
               
              </p>
            </a>
          </li>
          
          <li class="nav-item menu-open">
            <a href="#seosetting" class="nav-link">
            <i class="fas fa-search"></i>
              <p>
                Social Media Control
               
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="#accountsetting" class="nav-link">
            <i class="fas fa-key"></i>
              <p>
               Change Password
               
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
             <div class="card-header bg-yellow"id="sectionsetting">
                <span><b><i>Show /Hide Icons</b></span>
              </div><!-- /.col -->
        <!-- /.row -->
      <!-- /.container-fluid -->    
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <!-- /.row -->
        <!-- Main row -->
        <div class="row" style="margin-left:10px ;" >

    <form method="POST" action="control.php">
      <br>
        <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                      <input type="checkbox" class="custom-control-input" id="customSwitch1"name="home"
                      <?php
                          if($user_data['home_section']){
                            echo "checked";
                          }
                      ?>
                      >                      
                      <label class="custom-control-label" for="customSwitch1">Home Section</label>
                    </div>
                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                      <input type="checkbox" class="custom-control-input" id="customSwitch2"name="about"
                      <?php
                          if($user_data['about_section']){
                            echo "checked";
                          }
                      ?>
                      >
                      <label class="custom-control-label" for="customSwitch2">About Section</label>
                    </div>
                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                      <input type="checkbox" class="custom-control-input" id="customSwitch3"name="services" <?php
                          if($user_data['services_section']){
                            echo "checked";
                          }
                      ?>>
                      <label class="custom-control-label" for="customSwitch3">Services Section</label>
                    </div>
                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                      <input type="checkbox" class="custom-control-input" id="customSwitch4"name="portfolio" <?php
                          if($user_data['portfolio_section']){
                            echo "checked";
                          }
                      ?>>
                      <label class="custom-control-label" for="customSwitch4">Portfolio Section</label>
                    </div>
                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                      <input type="checkbox" class="custom-control-input" id="customSwitch5"        name="contact" <?php
                          if($user_data['contact_section']){
                            echo "checked";
                          }
                      ?>>
                      <label class="custom-control-label" for="customSwitch5">Contact Section</label>
                    </div>
                    <br>
                    <input type="submit" class="btn  btn-primary bg-yellow" name="update-section" value="save changes">
                    </form>
                    <!--section control end-->
                   
                    

                             </div>
                    </div>
               </section>


   <!----Contact form show start--->
   <section>
               <div class="card card-primary" id="showform">
              <div class="card-header bg-yellow">
              <span><b><i>Show Message</b></span>
              </div>
              <!-- /.card-header -->
              
              <div class="card-body">
                <table class="table table-hover  table-responsive-lg table-bordered " >
                  <thead>
                    <tr>
                      <Th >#</Th >
                      <Th >Name</Th >
                      <Th  >Email</Th >
                      <Th >Number</Th >
                      <Th >Message</Th >
                      <Th  >Action</Th >
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                    $q="SELECT * FROM contact_form";
                    $r=mysqli_query($db,$q);
                    $c=1;
                    While($form=mysqli_fetch_array($r)){
                    ?>
                    <tr>
                      <td><?=$c?></td>
                      <td><?=$form['name']?></td>
                      <td>
                      <?=$form['email']?>
                      </td>
                      <td><?=$form['number']?></td>
                      <td><?=$form['message']?></td>
                      <td><a href="deleteform.php?id=<?=$form['id']?>">Delete</a></td>
                    </tr>
                   <?php
                   $c++;
                    }
                    ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            </section>
             <!----Contact form show end--->


   
         <!--home control start-->
         <section>
        <div class="card card-primary" id="homesetting">
              <div class="card-header bg-yellow">
                <span><b><i>Home Settings</b></span>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="control.php"method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="title"class="form-control" value="<?=$user_data['title']?>" id="exampleInputEmail1" placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Title</label>
                    <input type="text" name="subtitle"class="form-control" value="<?=$user_data['subtitle']?>"id="exampleInputPassword1" placeholder="Enter Title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Sub Title</label>
                    <input type="text" name="cotitle"class="form-control" value="<?=$user_data['cotitle']?>" id="exampleInputPassword1" placeholder="Enter Sub Title">
                  </div>
                  
                  <div class="form-check">
                    <input type="checkbox" name="showicon" class="form-check-input" id="exampleCheck1"  <?php
                          if($user_data['showicon']){
                            echo "checked";
                          }
                      ?>>
                    <label class="form-check-label"for="exampleCheck1">Show Social Icon</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit"name="update-home" class="btn btn-primary bg-yellow" >Save Changes</button>
                </div>
              </form>
            </div> 
            </section>
             <!--home control end-->




              <!--pic control start-->
         <section>
        <div class="card card-primary" id="picsetting">
              <div class="card-header bg-yellow">
                <span><b><i>Profile Pic Change</b></span>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="control.php"method="POST" enctype="multipart/form-data">
                <div class="card-body">
                 
                  <div class="form-group">
                    <label for="exampleInputFile">Upload Photo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="profile" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="form-group">
                    <input type="hidden" name="oldpic"class="form-control" value="<?=$user_data['user_pic']?>"id="exampleInputPassword1" placeholder="Enter Title">
                  </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit"name="update-pic" class="btn btn-primary bg-yellow" >Update profile</button>
                </div>
              </form>
            </div> 
            </section>
             <!--pic control end-->
            

             <section>
             <!--bio control start-->
             <div class="card card-primary" id="biosetting">
              <div class="card-header bg-yellow" style="width: auto;">
              <span><b><i>Biography Settings</b></span>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="control.php"method="POST">
               
              <div class="card-body">
              <!-- /.card-header -->
                <table class="table  table-bordered" style="width: 100%;">
                  <thead>
                    <tr>
                      <Th >#</Th >
                      <Th >level</Th >
                      <Th >Value</Th >
                      <Th >Action</Th >
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $q="SELECT * FROM about";
                    $r=mysqli_query($db,$q);
                    $c=1;
                    While($about=mysqli_fetch_array($r)){
                        ?>

                         <tr>
                      <td><?=$c?></td>
                      <td><?=$about['level']?></td>
                      <td>
                      <?=$about['value']?>
                      </td>
                      <td><a href="deleteabout.php?id=<?=$about['id']?>">Delete</a></td>
                    </tr>
                    <tr>

                        <?php
                        $c++;
                    }

                    ?>
                  </tbody>
                </table>
                <div class="form-group">
                    <label for="exampleInputEmail1">level</label>
                    <input type="text" name="level"class="form-control" id="exampleInputEmail1" placeholder="Enter Level Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Value</label>
                    <input type="text" name="value"class="form-control"  id="exampleInputEmail1" placeholder="Enter value">
                  </div>
                  <div class="card-footer">
                  <button type="submit"name="add-bio" class="btn btn-primary bg-yellow" >Add Bio</button>
                </div>
              </div>
              

                </form>

             
            </div>
             <!--bio control end-->
             </section>





             
             <section>
             <!--bio control start-->
             <div class="card card-primary" id="mesetting">
              <div class="card-header bg-yellow" style="width: auto;">
              <span><b><i>About Me</b></span>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="control.php"method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">BIOGRAPHY</label>
                    <input type="text" name="bio"class="form-control" value="<?=$user_data['bio']?>" id="exampleInputEmail1" placeholder="Enter Name">
                  </div>
              <!-- /.card-header -->
                <div class="card-footer">
                  <button type="submit"name="update-bio" class="btn btn-primary bg-yellow" >Save changes</button>
                </div>

                </form>

             
            </div>
             <!--biography about control end-->
             </section>




         <!--resume control start-->
         <section>
        <div class="card card-primary" id="resumesetting">
              <div class="card-header bg-yellow">
                <span><b><i>Update Resume</b></span>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="control.php"method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputFile">Update Resume</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="resume" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit"name="update-resume" class="btn btn-primary bg-yellow" >Save Changes</button>
                </div>
              </form>
            </div> 
            </section>
             <!--resume control end-->




             <section>
                     <!--skill control start-->
                     <div class="card card-primary" id="skillsetting">
              <div class="card-header bg-yellow">
              <span><b><i>Skill Settings</b></span>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="control.php"method="POST">
                <div class="card-body">
                 <!-- /.card-header -->
                <table class="table  table-hover  table-responsive-lg table-bordered">
                  <thead>
                    <tr>
                      <Th >#</Th >
                      <Th >level</Th >
                      <Th >Value</Th >
                      <Th >Persentages</Th >
                      <Th >Action</Th >
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $q="SELECT * FROM skills";
                    $r=mysqli_query($db,$q);
                    $c=1;
                    While($skills=mysqli_fetch_array($r)){
                        ?>

                      <tr>
                      <td><?=$c?></td>
                      <td><?=$skills['lable']?></td>
                      <td>
                        <div class="progress progress-xs" style="min-width:100px ;">
                          <div class="progress-bar progress-bar-danger" style="width: <?=$skills['value1']?>%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-danger"><?=$skills['value1']?>%</span></td>
                      <td><a href="deleteskill.php?id=<?=$skills['id']?>">Delete</a> </td>
                    </tr>
                    
                        <?php
                        $c++;

                    }

                    ?>
                  </tbody>
                </table>
                <div class="form-group">
                    <label for="exampleInputEmail1">Skill Name</label>
                    <input type="text" name="lable"class="form-control" id="exampleInputEmail1" placeholder="Enter Level Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Skill Level</label>
                    <input type="text" name="value1"class="form-control" min="1"max="100" id="exampleInputEmail1" placeholder="Enter value">
                  </div>
              
                <div class="card-footer">
                  <button type="submit"name="add-skill" class="btn btn-primary bg-yellow" >Add Skills</button>
                </div>

                </form>

             
            </div>
             <!--skill control end-->
             </section>
             <section>


               <!--education control start-->
               <div class="card card-primary" id="educationsetting">
              <div class="card-header bg-yellow">
              <span><b><i>Education Settings</b></span>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="control.php"method="POST">
                <div class="card-body">

              <!-- /.card-header -->
                <table class="table  table-hover  table-responsive-lg table-bordered">
                  <thead>
                    <tr>
                      <Th >#</Th >
                      <Th >Year</Th >
                      <Th >Course</Th >
                      <Th >About Course</Th >
                      <Th >Action</Th >
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $q="SELECT * FROM education";
                    $r=mysqli_query($db,$q);
                    $c=1;
                    While($education=mysqli_fetch_array($r)){
                        ?>

                      <tr>
                      <td><?=$c?></td>
                      <td><?=$education['year']?></td>
                      <td>
                      <?=$education['course']?>
                      </td>
                      <td><?=$education['aboutcourse']?></td>
                      <td><a href="deleteeducation.php?id=<?=$education['id']?>">Delete</a> </td>
                    </tr>
                    
                        <?php
                        $c++;

                    }

                    ?>
                  </tbody>
                </table>
                <div class="form-group">
                    <label for="exampleInputEmail1">Year</label>
                    <input type="text" name="year"class="form-control" id="exampleInputEmail1" placeholder="Enter Year">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Course</label>
                    <input type="text" name="course"class="form-control" min="1"max="100" id="exampleInputEmail1" placeholder="Enter Course Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">About Course</label>
                    <input type="text" name="aboutcourse"class="form-control" id="exampleInputEmail1" placeholder="About Course">
                  </div>
              
                <div class="card-footer">
                  <button type="submit"name="add-education" class="btn btn-primary bg-yellow" >Add Education</button>
                </div>

                </form>

             
            </div>
             <!--education control end-->
             </section>





<section>
              <!--experience control start-->
              <div class="card card-primary" id="experiencesetting">
              <div class="card-header bg-yellow">
              <span><b><i>Experience Settings</b></span>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="control.php"method="POST">
                <div class="card-body">

              <!-- /.card-header -->
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <Th >#</Th >
                      <Th >Year</Th >
                      <Th >Post</Th >
                      <Th >About Post</Th >
                      <Th >Action</Th >
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $q="SELECT * FROM experience";
                    $r=mysqli_query($db,$q);
                    $c=1;
                    While($experience=mysqli_fetch_array($r)){
                        ?>

                      <tr>
                      <td><?=$c?></td>
                      <td><?=$experience['year']?></td>
                      <td>
                      <?=$experience['post']?>
                      </td>
                      <td><?=$experience['aboutpost']?></td>
                      <td><a href="deleteexperience.php?id=<?=$experience['id']?>">Delete</a> </td>
                    </tr>
                    
                        <?php
                        $c++;

                    }

                    ?>
                  </tbody>
                </table>
                <div class="form-group">
                    <label for="exampleInputEmail1">Year</label>
                    <input type="text" name="year"class="form-control" id="exampleInputEmail1" placeholder="Enter Year">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Post</label>
                    <input type="text" name="post"class="form-control" id="exampleInputEmail1" placeholder="Enter Post Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">About Post</label>
                    <input type="text" name="aboutpost"class="form-control" id="exampleInputEmail1" placeholder="About Post">
                  </div>
              
                <div class="card-footer">
                  <button type="submit"name="add-experience" class="btn btn-primary bg-yellow" >Add Education</button>
                </div>

                </form>

             
            </div>
<!---expirence end--->
</section>


<section>
   <!--contact control start-->
   <div class="card card-primary" id="contactsetting">
              <div class="card-header bg-yellow">
              <span><b><i>Contact Settings</b></span>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="control.php"method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Phone</label>
                    <input type="text" name="phone"class="form-control" value="<?=$user_data6['phone']?>" id="exampleInputEmail1" placeholder="Enter phone">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="text" name="email"class="form-control" value="<?=$user_data6['email']?>"id="exampleInputPassword1" placeholder="Enter Title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <input type="text" name="address"class="form-control" value="<?=$user_data6['address']?>" id="exampleInputPassword1" placeholder="Enter Sub Title">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit"name="update-contact" class="btn btn-primary bg-yellow" >Save Changes</button>
                </div>
              </form>
            </div> 
             <!--Contact control end-->
             </section>
<section>

<!--SEO control start-->
<div class="card card-primary" id="seosetting">
              <div class="card-header bg-yellow">
                <span><b><i>social_media Settings</b></span>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="control.php"method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Facebook</label>
                    <input type="text" name="facebook"class="form-control" value="<?=$user_data['facebook']?>" id="exampleInputEmail1" placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Instagram</label>
                    <input type="text" name="instagram"class="form-control" value="<?=$user_data['instagram']?>"id="exampleInputPassword1" placeholder="Enter Title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Twitter</label>
                    <input type="text" name="twitter"class="form-control" value="<?=$user_data['twitter']?>" id="exampleInputPassword1" placeholder="Enter Sub Title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Linkedin</label>
                    <input type="text" name="linkedin"class="form-control" value="<?=$user_data['linkdin']?>" id="exampleInputPassword1" placeholder="Enter Sub Title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Github</label>
                    <input type="text" name="github"class="form-control" value="<?=$user_data['github']?>" id="exampleInputPassword1" placeholder="Enter Sub Title">
                  </div>
              
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit"name="update-seo" class="btn btn-primary bg-yellow" >Save Changes</button>
                </div>
              </form>
            </div> 
            </section>
             <!--SEO control end-->






<!--change control start-->
<section>
<div class="card card-primary" id="accountsetting">
              <div class="card-header bg-yellow">
                <span><b><i>Change Password </b></span>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="control.php"method="POST" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">User Name</label>
                    <input type="text" name="username"class="form-control" value="<?=$user_data7['username']?>" id="exampleInputEmail1" placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="text" name="password"class="form-control" value="<?=$user_data7['password']?>"id="exampleInputPassword1" placeholder="Enter Title">
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit"name="update-password" class="btn btn-primary bg-yellow" >Save Changes</button>
                </div>
              </form>
            </div>
            </section> 
             <!--change password control end-->



      <!-- /.container-fluid -->
    

            


    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
