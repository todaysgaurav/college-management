<?php
 session_start();
 require('function.php');
 $course=validate($_POST['course']);
 $branch=validate($_POST['branch']);
 $semester=validate($_POST['semester']);
 $subject=validate($_POST['subject']);
 $con=con();
  $sql="delete from Courses where (course='$course' and branch='$branch') and (semester='$semester' and subject='$subject')"; 
  $result = $con->query($sql);
  if($result){
    echo "<script>alert('Course  Delete successfully ');window.location='delete_course.php';</script>";
    die(); 
   }
   else
    {
     echo "<script>alert('There is some error this course can not be deleted ');window.location='delete_course.php';</script>";
    die(); 
    }
?>
