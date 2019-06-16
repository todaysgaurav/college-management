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
?>
<!DOCTYPE html>
 <html>
  <head>
   <title> Add Course Page </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="shortcut icon" href="img/01.jpeg" />
   <link  href="css/add_teacher.css" rel="stylesheet"/>
   <link rel="stylesheet" href="css/styles.css">
   <script type="text/javascript" src="javascript/var.js"></script>
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
   
   
     <div style="background-color:#FFFFE0;opacity:.6;color:#191970;"> </br>
	 <center><h2>Add Course </h2>
         <form  name="RegForm" action="add_course_back.php" onsubmit="return validate()" method="post">
           <center>
              <table>
                 <tr>
                  <th> Enter Course </th>
                  <td> <input type="text" name="course" placeholder="Course Name" required/></td>
                 </tr>
                 <tr>
                  <th> Enter Branch </th>
                  <td> <input type="text" name="branch" placeholder="Branch Name" required/></td>
                 </tr>
                 <tr>
                  <th> Enter Semester </th>
                  <td> <input type="text" name="semester" placeholder="Semester" required/></td>
                 </tr>
                  <tr>
                  <th> Enter Subject </th>
                  <td> <input type="text" name="subject" placeholder="Subject" required/></td>
                 </tr>
                 <tr>
                  <th> Enter Teacher </th>
                  <td> <input type="text" name="teacher" placeholder="Teacher" required/></td>
                 </tr>
              </table>
	  <center><input type='reset' name='reset' value='Reset'/>&nbsp;&nbsp;<input type='submit' name='sub' value='Submit'/></center>
           </center>
          </form>
   </br>
   <br>
   </div>
    <div style="font-size:15px;color:white;background-color:#696969;text-align:center; width:100%;"> Copyright &copy; All Rights Reserved.
 2018 garc.mnnit.com<br> Terms of Use | Privacy Policy
 
  </div>
  </body>
 </html>
