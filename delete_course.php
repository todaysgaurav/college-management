<?php
  session_start();
  require('function.php');
  $con=con();
  if(isset($_SESSION['user_id']))
   {
     $id=$_SESSION['user_id'];
   }
   else
    {
      header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/index.php");
      exit();
    }
    $a;
    //$user = $_POST["user_id"];
    $userid = $_SESSION['user_id'];
    $qu="select * from Courses ";
    $result=$con->query($qu);
?>
<!DOCTYPE html>
 <html>
  <head>
   <title> Delete Course </title>
   <a name="top"> </a>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="shortcut icon" href="img/01.jpeg" />
	<link rel="stylesheet" href="css/styles.css">
   <link  href="css/delete.css" rel="stylesheet"/>
  </head>
  <body>
   <a name="top"> </a>
  
   <table style="width:100%; hight:150px;">
   <tr><td>
   <div style=""><img src="img/11.PNG" height="150" width="125"/></div></td><td><div style="font-size:40px;">
   <img src="img/72.PNG" height="150" width="950px"/></div>
   </td></tr>
   
   </table>
   <table style="width:200%; ">
   <tr> <td><div id='cssmenu' >
   
<ul>
   <li><a href='admin_home.php'><span>Home</span></a></li>
   <li><a href='add.php'><span>Add Course</span></a></li>
   <li><a href='delete_course.php'><span>Delete Course</span></a></li>
   
   <li><a href='add_teacher.php'><span>Add Teacher</span></a></li>
   <li ><a href='delete.php'><span>Remove Teacher</span></a></li>
   <li ><a href='logout.php'><span>Logout</span></a></li>
   <li style="float:right;";><a href='admin_home.php'><span>Welcome  <?php echo "$userid";?></span></a> </li>
   
</ul>
</div></td>



</tr>
</table>
    
       
	  
	    <div style="background-color:#FFFFE0;opacity:.6;color:#191970;"> </br> <center><h2> Available Courses </h2>
      <?php
           echo "<center><table>";
           echo "<tr><th>Course</th><th>Branch</th><th>Semester</th><th>Subject</th><th>Teacher</th><th>Delete</th></tr>";
           $a=0;
           while($row1=$result->fetch_array())
            {
              $a=1;
              echo "<tr><td>$row1[0]</td><td> $row1[1]</td><td> $row1[2]</td><td>$row1[3]</td><td>$row1[4]</td><td><form action='delete_course_back.php' method='post' ><input type='text' value='$row1[0]' style='display:none' name='course'><input type='text' value='$row1[1]' style='display:none' name='branch'><input type='text' value='$row1[2]' style='display:none' name='semester'><input type='text' value='$row1[3]' style='display:none' name='subject'><input type='submit'value='Delete Course'></a></form></td></tr>";
            }
            echo "</table></center>";
            if($a==0)
             {
               echo "No Teacher Available Please add more Teacher";
             }
          ?>
          <a href="#top" style="color:red"> Got to Top </a>
        <br>
 
      </div>
	  <br>
	   <div style="font-size:15px;color:white;background-color:#696969;text-align:center; width:100%;"> Copyright &copy; All Rights Reserved.
 2018 garc.mnnit.com<br> Terms of Use | Privacy Policy
 
  </div>
    </body>
  </html>
