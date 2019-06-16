<?php
 session_start();
 require('function.php');
 $user_id=validate($_POST['id']);
 $con=con();
  $sql="delete from Teachers where user_id='$user_id'"; 
  $result = $con->query($sql);
  if($result){
    echo "<script>alert('Teacher Delete successfully ');window.location='delete.php';</script>";
    die(); 
   }
   else
    {
     echo "<script>alert('This Teacher can not be deleted because it has registered with some Course ');window.location='delete.php';</script>";
    die(); 
    }
?>
