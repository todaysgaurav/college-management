<?php
  require('function.php');
  $con=con();
    $a;
    $qu="select * from Teachers";
    $result=$con->query($qu);
?>


<!DOCTYPE html>
 <html>
  <head>
   <title> Search Page </title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="shortcut icon" href="img/01.jpeg" />
   <link  href="css/see_teacher.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/styles.css"/>
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
   <li><a href='search.php'><span>Search Courses</span></a></li>
   <li><a href='see_teacher.php'><span>Teacher Details</span></a></li>
   <li><a href='login.php'><span>Login</span></a></li>
   <li><a href='about.php'><span>Contect Us</span></a></li>
   <li><a href='time.html'><span>Time Table</span></a></li>
   
  
</ul>
</div></td>




</tr>
</table>
   
    <div style="background-color:#FFFFE0;opacity:.6;color:#191970;"> <center><h2> Available Teachers </h2>
      <?php
           echo "<center><table>";
           echo "<tr><th style='collspace:3;'>Name</th><th>Email</th><th>Mobile</th><th>&nbsp;&nbsp;&nbsp;Address</th><th>Main_Subject</th></tr>";
           $a=0;
           while($row1=$result->fetch_array())
            {
              $a=1;
              echo "<tr><td>$row1[2] $row1[3] $row1[4]</td><td> $row1[5]</td><td> $row1[6] </td><td>&nbsp;&nbsp;&nbsp;$row1[7] $row1[8] <br> &nbsp;&nbsp;&nbsp;$row1[9]</td><td>$row1[10]</td></tr>";
            }
            echo "</table></center>";
            if($a==0)
             {
               echo "No Teacher Available Please add more doctors";
             }
          ?>
        <a href="#top" style="color:red"> Got to Top </a>
     </center>
     </div>
<br> 
	 <div style="font-size:15px;color:white;background-color:#696969;text-align:center; width:100%;"> Copyright &copy; All Rights Reserved.
 2018 garc.mnnit.com<br> Terms of Use | Privacy Policy
 
  </div>
  </div>
 </body>
</html>
