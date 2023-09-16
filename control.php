<?php
require('include/db.php');
if(isset($_POST['update-section'])){
    $home=$_POST['home'] ?? 0;
    $about=$_POST['about'] ?? 0;
    $services=$_POST['services'] ?? 0;
    $portfolio=$_POST['portfolio'] ?? 0;
    $contact=$_POST['contact'] ?? 0;

    $query ="UPDATE section_control SET ";
    $query.="home_section='$home',";
    $query.="about_section='$about',";
    $query.="services_section='$services',";
    $query.="portfolio_section='$portfolio',";
    $query.="contact_section='$contact' WHERE id=1";
    $run=mysqli_query($db,$query);
    if($run){
        echo"<script>window.location.href = 'admin.php'</script>"; 
    }
    else{echo"<script>window.location.href = 'admin.php'</script>";

    }
}


if(isset($_POST['update-home'])){
    $title=$_POST['title'] ?? 0;
    $subtitle=$_POST['subtitle'] ?? 0;
    $cotitle=$_POST['cotitle'] ?? 0;
    $showicon=$_POST['showicon'] ?? 0;

    $query ="UPDATE `home` SET `title`='$title',`subtitle`='$subtitle',`cotitle`='$cotitle',`showicon`='$showicon' WHERE id=1";
    $run=mysqli_query($db,$query);
    if($run){
        echo"<script>window.location.href = 'admin.php?#homesetting'</script>"; 
    }else{echo"<script>window.location.href = 'admin.php'</script>";

    }
   

    }


if(isset($_POST['update-pic'])){
    $imagename=time().$_FILES['profile']['name'];
    $imgtemp=$_FILES['profile']['tmp_name'];
    if($imgtemp==''){
        $q ='SELECT * FROM home WHERE id=1';
        $r=mysqli_query($db,$q);
        $d=mysqli_fetch_array($r);
        $imagename=$d['user_pic'];

    }


    if(move_uploaded_file($imgtemp,"images/$imagename")){
        $q='SELECT user_pic FROM home WHERE id=1';
        $r=mysqli_query($db,$q);
        $d=mysqli_fetch_array($r);
        $old_img=$d['user_pic'];
        $query ="UPDATE home SET ";
        $query.="user_pic='$imagename' WHERE id=1";
        unlink("images/".$old_img);
        $run=mysqli_query($db,$query);
        if($run){
            echo"<script>window.location.href = 'admin.php'</script>"; 
        }else{echo"<script>window.location.href = 'admin.php'</script>";

        }
    } else{echo"<script>window.location.href = 'admin.php'</script>";

    }
}



#klhk





if(isset($_POST['update-bio'])){
    $bio=$_POST['bio'] ?? 0;

    $query ="UPDATE biography SET bio='$bio'where id=1";
    
    $run=mysqli_query($db,$query);
    if($run){
        echo"<script>window.location.href = 'admin.php'</script>"; 
    }else{echo"<script>window.location.href = 'admin.php'</script>";

    }
}


if(isset($_POST['add-bio'])){
    $level=$_POST['level'] ?? 0;
    $value=$_POST['value'] ?? 0;

    $query ="INSERT INTO `about` (`id`, `level`, `value`) VALUES (NULL, '$level', '$value');";
    $run=mysqli_query($db,$query);
    if($run){
        echo"<script>window.location.href = 'admin.php'</script>"; 
    }else{echo"<script>window.location.href = 'admin.php'</script>";

    }
}

if(isset($_POST['add-skill'])){
    $lable=$_POST['lable'] ?? 0;
    $value1=$_POST['value1'] ?? 0;

    $query ="INSERT INTO `skills` ( `lable`, `value1`) VALUES ('$lable', '$value1');";
    $run=mysqli_query($db,$query);
    if($run){
        echo"<script>window.location.href = 'admin.php'</script>"; 
    }else{echo"<script>window.location.href = 'admin.php'</script>";

    }
}

if(isset($_POST['add-education'])){
    $year=$_POST['year'] ;
    $course=$_POST['course'] ;
    $aboutcourse=$_POST['aboutcourse'];

    $query ="INSERT INTO `education` ( `year`, `course`, `aboutcourse`) VALUES ('$year', '$course','$aboutcourse');";
    $run=mysqli_query($db,$query);
    if($run){
        echo"<script>window.location.href = 'admin.php'</script>"; 
    }else{echo"<script>window.location.href = 'admin.php'</script>";

    }
}

if(isset($_POST['add-experience'])){
    $year=$_POST['year'] ;
    $post=$_POST['post'] ;
    $aboutpost=$_POST['aboutpost'];

    $query ="INSERT INTO `experience` ( `year`, `post`, `aboutpost`) VALUES ('$year', '$post','$aboutpost');";
    $run=mysqli_query($db,$query);
    if($run){
        echo"<script>window.location.href = 'admin.php'</script>"; 
    }else{echo"<script>window.location.href = 'admin.php'</script>";

    }
}


if(isset($_POST['update-contact'])){
    $phone=$_POST['phone'] ?? 0;
    $email=$_POST['email'] ?? 0;
    $address=$_POST['address'] ?? 0;

    $query ="UPDATE contact SET ";
    $query.="phone='$phone',";
    $query.="email='$email',";
    $query.="address='$address' WHERE id=1";
    $run=mysqli_query($db,$query);
    if($run){
        echo"<script>window.location.href = 'admin.php'</script>"; 
    }
    else{echo"<script>window.location.href = 'admin.php'</script>";

    }
}

if(isset($_POST['update-seo'])){
    $facebook=$_POST['facebook'] ?? 0;
    $instagram=$_POST['instagram'] ?? 0;
    $twitter=$_POST['twitter'] ?? 0;
    $linkdin=$_POST['linkedin'] ?? 0;
    $github=$_POST['github'] ?? 0;

    $query ="UPDATE social_media SET ";
    $query.="facebook='$facebook',";
    $query.="instagram='$instagram',";
    $query.="twitter='$twitter',";
    $query.="linkdin='$linkdin',";
    $query.="github='$github' WHERE id=1";
    $run=mysqli_query($db,$query);
    if($run){
        echo"<script>window.location.href = 'admin.php'</script>"; 
    }else{echo"<script>window.location.href = 'admin.php'</script>";

    }
}
if(isset($_POST['update-password'])){
    $username=$_POST['username'] ?? 0;
    $password=$_POST['password'] ?? 0;
    

    $query ="UPDATE login_form SET ";
    $query.="username='$username',";
    
    $query.="password='$password' WHERE id=1";
    $run=mysqli_query($db,$query);
    if($run){
        echo"<script>window.location.href = 'admin.php'</script>"; 
    }else{echo"<script>window.location.href = 'admin.php'</script>";

    }
}




if(isset($_POST['update-resume'])){
    $imagename=time().$_FILES['resume']['name'];
    $imgtemp=$_FILES['resume']['tmp_name'];
    if($imgtemp==''){
        $q ='SELECT * FROM cv WHERE id=1';
        $r=mysqli_query($db,$q);
        $d=mysqli_fetch_array($r);
        $imagename=$d['cvname'];

    }


    if(move_uploaded_file($imgtemp,"cv/$imagename")){
        $query ="UPDATE cv SET ";
        $query.="cvname='$imagename' WHERE id=1";
        $run=mysqli_query($db,$query);
        if($run){
            echo"<script>window.location.href = 'admin.php'</script>"; 
        }else{echo"<script>window.location.href = 'admin.php'</script>";

        }
    } else{echo"<script>window.location.href = 'admin.php'</script>";

    }
}

?>