<?php
require('include/db.php');
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query="DELETE FROM skills WHERE id=$id";
    $run=mysqli_query($db,$query);
    if($run){
        echo"<script>window.location.href = 'admin.php'</script>"; 
    }
}
?>