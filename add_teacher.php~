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
   <a name="top"> </a>
    <link rel="shortcut icon" href="img/01.jpeg" />
   <link  href="css/add_teacher.css" rel="stylesheet"/>
   <script type="text/javascript" src="javascript/ver.js"></script>
  </head>
  <body>
   <a name="top"> </a>
    <div id="full">
      <div id="header">
        <div id="lg"> <img src="img/03.jpeg" alt="Image" height="65" width="100"/></div>
        <div id="li">
          <a href="admin_home.php" class="link"> Home Page &nbsp; &nbsp;</a>
          <a href="add.php" class="link" > Add Course  &nbsp;  &nbsp;</a>
          <a href="delete_course.php" class="link" > Delete Course  &nbsp;  &nbsp;</a>
           <a href="add_teacher.php" class="link" > Add Teacher  &nbsp;  &nbsp;</a>
          <a href="delete.php" class="link"> Delete Teacher &nbsp;&nbsp; </a> 
          <a href="logout.php" class="link"> Logout  &nbsp;  &nbsp;</a>
        </div>
      </div>
     <div id="about"> <marquee><h4> Welcome Admin <?php echo "$userid";?> Now You can Manage DATA </h4></marquee></div>
      <div id="te"> <center><h1> Add Teacher </h1>
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
   </div>
  </body>
 </html>
