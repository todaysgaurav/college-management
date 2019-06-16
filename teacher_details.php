<?php
 session_start();
 require('function.php');
 $user_id=validate($_POST['id']);
 $con=con();
 $sql="Select * from Teachers where user_id='$user_id'"; 
  $result = $con->query($sql);
?>
<!DOCTYPE html>
 <html>
  <head>
   <title> Teacher Detail </title>
    <link rel="shortcut icon" href="img/01.jpeg" />
   <link  href="css/search.css" rel="stylesheet"/>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/styles.css"/>
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
   <table style="width:200%; "><tr><td>
   <div id='cssmenu' >
<ul>
   <li><a href='index.php'><span>Home</span></a></li>
   <li><a href='search.php'><span>Search</span></a></li>
   <li><a href='see_teacher.php'><span>Teacher Details</span></a></li>
   
   <li><a href='login.php'><span>Login</span></a></li>
   <li ><a href='about.php'><span>Contact Us</span></a></li>
   <li><a href='time.html'><span>Time Table</span></a></li>
</ul>
</div></td></tr>
</table>
   <div style="background-color:#FFFFE0;opacity:.6;color:#191970;word-spacing:5px;line-spacing:5px;">
   <center><h2> Details of Teacher  <?php echo "$user_id";?> </h2>
      <?php
           echo "<center><table style='cellspacing:4px;cellpading:5px;margin:5px'>";
           echo "<tr><th>Name</th><th>Email</th><th>Mobile</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Address</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Main_Subject</th></tr>";
           $a=0;
           while($row1=$result->fetch_array())
            {
              $a=1;
              echo "<tr><td>$row1[2] $row1[3] $row1[4]</td><td> $row1[5]</td><td> $row1[6]</td><td>$row1[7] $row1[8] <br>$row1[9]</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$row1[10]</td></tr>";
            }
            echo "</table></center>";
          ?>
     </div>
  <br>
	 <div style="font-size:15px;color:white;background-color:#696969;text-align:center; width:100%;"> Copyright &copy; All Rights Reserved.
 2018 garc.mnnit.com<br> Terms of Use | Privacy Policy
 
  </div>
 </body>
</html>
