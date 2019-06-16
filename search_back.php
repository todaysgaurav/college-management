<?php
    require('function.php');
    $con=con();
    $a;
    $course = $_POST["course"];
    $branch = $_POST["branch"];
    $semester = $_POST["semester"];
    $qu="select * from Courses where course='$course' and (branch='$branch' and semester='$semester') ";
    $result=$con->query($qu);
?>

<!DOCTYPE html>
 <html>
  <head>
   <title> Course Details </title>
    <link rel="shortcut icon" href="img/01.jpeg" />
   <link  href="css/search.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/styles.css"/>
  </head>
  <body>
   <a name="top"> </a>
   <table style="width:100%; hight:150px;">
   <tr><td>
   <div style=""><img src="img/11.PNG" height="150" width="125"/></div></td><td><div style="font-size:40px;">
   <img src="img/72.PNG" height="150" width="950px"/></div>
  </div>
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
</ul>
</div></td></tr>
</table>
 <div style="background-color:#FFFFE0;opacity:.6;color:#191970;">    
	<center><h4>  Details  of course <u><?php echo "$course";?></u> branch <u> <?php echo "$branch";?></u> Semester <u><?php echo " $semester";?></u></h4>
     
     <?php
           echo "<center><table>";
           echo "<tr> <th>Subject </th> <th> Teacher </th><th> &nbsp;&nbsp;Teacher Details </th></tr>";
           $a=0;
           while($row1=$result->fetch_array())
            {
              $a=1;
              echo "<tr><td>$row1[3]</td><td> $row1[4]</td><td><form action='teacher_details.php' method='post'target='_blank' ><input type='text' value='$row1[4]' style='display:none' name='id'><input type='submit'value='See Teacher Details'></a></form></td></tr>";
            }
            echo "</table></center>";
            if($a==0)
             {
              echo "<center>No Data found releated to this Course found search again </center><br/><br/> <form action='search.php' method='post'>  <center><input type='submit' value='Search Again' name='sub'/></center></form>";
             }
          ?>
         <br/>
         <br/>
         <hr/>
        <a href="#top" style="color:red"> Got to Top </a>
    
   </div>
   <br>
   <div style="font-size:15px;color:white;background-color:#696969;text-align:center; width:100%;"> Copyright &copy; All Rights Reserved.
 2018 garc.mnnit.com<br> Terms of Use | Privacy Policy
 
  </div>
  </div>
  </body>
 </html>
