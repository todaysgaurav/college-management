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
  // $user_id = validate($_POST["id"]);
 
   $sq="select *from Teachers where user_id='$userid'";
   $result=$con->query($sq);
   $row=$result->fetch_array();
   $fname=$row['fname'];
   $mname=$row['mname'];
   $lname=$row['lname'];
   $mno=$row['mob'];
   $email_id=$row['email'];
   $add1=$row['address_line1'];
   $subject=$row['subject'];
?>
<!DOCTYPE html>
 <html>
  <head>
   <title>  Update Teacher </title>
   <a name="top"> </a>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="shortcut icon" href="img/01.jpeg" />
    <link  href="css/update_teacher.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/styles.css"/>
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
   <table style="width:200%; "><tr><td>
   <div id='cssmenu' >
<ul>
   <li><a href='teacher_home.php'><span>Home</span></a></li>
   <li><a href='update_teacher.php'><span>Update Details</span></a></li>
   <li><a href='see_details.php'><span>See Courses</span></a></li>
   
   <li><a href='logout.php'><span>Logout</span></a></li>
   
   <li style="float:right;"><a href='teacher_home.php'><span>Welcome Mr. <?php echo "$userid";?> </span></a></li>
</ul>
</div></td>
</tr>
</table>
   
  
  
  <div style="background-color:#FFFFE0;opacity:.6;color:#191970;">
    
         <center > <h2 style="color:;opacity:1;"> Update Teacher </h2></center>
         <center><h2 style="color:;"> Fill the form </h2></center>
          <!--<form action="dupdate_back.php" method="post">-->
          <form  name="RegForm" action="update_teacher_back.php" onsubmit="return validate()" method="post">
           <center>
              <table border=1 >
                <tr>
                  <th> First Name : </th>
                  <td> <input type="text" name="fname" placeholder="" value="<?php echo "$fname";?>" required/></td>
                </tr>
                <tr>
                  <th> Middle Name : </th>
                  <td> <input type="text" name="mname" placeholder="" value="<?php echo "$mname";?>"/></td>
                </tr>
                <tr>
                  <th> Last Name : </th>
                  <td> <input type="text" name="lname" placeholder="" value="<?php echo "$lname";?>"/></td>
                </tr>
                <tr>
                  <th> User ID : </th>
                  <td> <input type="text" name="user_id" placeholder="User Id" readonly value="<?php echo "$userid";?>" /></td>
                </tr>
                <tr>
                  <th> Password : </th>
                  <td> <input type="password" name="pwd" placeholder="Password" required/></td>
                </tr>
                <tr>
                  <th> Email ID : </th>
                  <td> <input type="email" name="email_id" placeholder="" value="<?php echo "$email_id";?>" required/></td>
                </tr>
                <tr>
                  <th> Mo No. : </th>
                  <td> <input type="text" name="mno" id="mo" placeholder="" value="<?php echo "$mno";?>" required/></td>
                </tr>
                <tr>
                  <th> Address Line1 : </th>
                  <td> <input type="text" name="add1" placeholder="" value="<?php echo "$add1";?>" required/></td>
                </tr>
                <tr>
                  <th> Address Line2 : </th>
                  <td> <input type="text" name="add2" placeholder="Address Line2"/></td>
                </tr>
                <tr>
                  <th> Address Line3 : </th>
                  <td> <input type="text" name="add3" placeholder="Address Line3"/></td>
                </tr>
                <tr>
                  <th> Enter Subject : </th>
                  <td> <input type="text" name="subject" placeholder="" value="<?php echo "$subject";?>" required/></td>
                </tr>
			   
				
              </table>
			   <br>
			  <table >
			 
			  <tr><td ><input type='reset' name='reset' value='Reset'/>&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<td> <input type='submit' name='sub' value='Submit'/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				</tr>
				</table>
	 
           </center>
          </form>
		  <br>
		  <br>
  </div>
  <br>
  <div style="font-size:15px;color:white;background-color:#696969;text-align:center; width:100%;"> Copyright &copy; All Rights Reserved.
 2018 garc.mnnit.com<br> Terms of Use | Privacy Policy
 
  </div>
   </body>
 </html>
