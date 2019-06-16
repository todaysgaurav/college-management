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
   // $user = $_POST["user_id"];
    $userid = $_SESSION['user_id'];
    $qu="select * from Teachers ";
    $result=$con->query($qu);
?>
<!DOCTYPE html>
 <html>
  <head>
   <title> Add Teacher Page </title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="shortcut icon" href="img/01.jpeg" />
	<link rel="stylesheet" href="css/styles.css">
   <link  href="css/add_teacher.css" rel="stylesheet"/>
   <script type="text/javascript" src="javascript/ver.js"></script>
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
	<center><h2> Add Teacher </h2>
         <form  name="RegForm" action="add_teacher_back.php" onsubmit="return validate()" method="post">
           <center>
              <table>
                <tr>
                  <th> First Name </th>
                  <td> <input type="text" name="fname" placeholder="First Name" required/></td>
                </tr>
                <tr>
                  <th> Middle Name </th>
                  <td> <input type="text" name="mname" placeholder="Middle Name"/></td>
                </tr>
                <tr>
                  <th> Last Name </th>
                  <td> <input type="text" name="lname" placeholder="Last Name"</td>
                </tr>
                <tr>
                  <th> User ID </th>
                  <td> <input type="text" name="user_id" placeholder="User Id" required/></td>
                </tr>
                <tr>
                  <th> Password </th>
                  <td> <input type="password" name="pwd" placeholder="Password" required/></td>
                </tr>
                <tr>
                  <th> Email ID </th>
                  <td> <input type="email" name="email_id" placeholder="Email id"  required/></td>
                </tr>
                <tr>
                  <th> Mo No. </th>
                  <td> <input type="text" name="mno" id="mo" placeholder="Mobile no"  required/></td>
                </tr>
                <tr>
                  <th> Address Line1 </th>
                  <td> <input type="text" name="add1" placeholder="Address line 1"  required/></td>
                </tr>
                <tr>
                  <th> Address Line2 </th>
                  <td> <input type="text" name="add2" placeholder="Address Line2"/></td>
                </tr>
                <tr>
                  <th> Address Line3 </th>
                  <td> <input type="text" name="add3" placeholder="Address Line3"/></td>
                </tr>
                <tr>
                  <th> Enter Subject </th>
                  <td> <input type="text" name="subject" placeholder="Subject" required/></td>
                </tr>
              </table>
	  <center><input type='reset' name='reset' value='Reset'/>&nbsp;&nbsp;<input type='submit' name='sub' value='Submit'/></center>
	  <br/>
	  <a href="#top" style="color:red;"> Go To Top</a>
           </center>
          </form>
     </div>
  <br>
    <div style="font-size:15px;color:white;background-color:#696969;text-align:center; width:100%;"> Copyright &copy; All Rights Reserved.
 2018 garc.mnnit.com<br> Terms of Use | Privacy Policy
 
  </div>
  </body>
 </html>
