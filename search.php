<!DOCTYPE html>
 <html>
  <head>
   <title> Search Page </title>
    <link rel="shortcut icon" href="img/01.jpeg" />
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   <link  href="css/search.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/styles.css"/>
   <script type="text/javascript" src="javascript/var.js"></script>
  </head>
  <body>
   <a name="top"> </a>
   <table style="width:100%; hight:150px;">
   <tr><td>
   <div style=""><img src="img/11.PNG" height="150" width="125"/></div></td><td><div style="font-size:40px;">
     <img src="img/72.PNG" height="150" width="950px"/>
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
   <li><a href='time.html'><span>Time Table</span></a></li>
</ul>
</div></td></tr>
</table>
  
   <div style="background-color:#FFFFE0;opacity:.6;color:#191970;">
   <center><h2> Search Courses </h2>
     <form  name="RegForm" action="search_back.php" onsubmit="return validate()" method="post">
      <table>
        <tr>
         <th> Course </th>
         <th> Branch </th>
         <th> Semester </th> 
        </tr>
        <tr>
          <td> <input type="text" name="course" placeholder="Course" required/></td>
          <td> <input type="text" name="branch" placeholder="Branch" required/></td>
          <td> <input type="text" name="semester" placeholder="Semester" required/></td>
        </tr>
      </table>
      <br/>
      <input type="submit" name="sub" value="Check" />
      </form>
     </center>
	 <br><br><br><br><br><br><br><br><br><br><br><br>
     </div>
  <br>
	 <div style="font-size:15px;color:white;background-color:#696969;text-align:center; width:100%;"> Copyright &copy; All Rights Reserved.
 2018 garc.mnnit.com<br> Terms of Use | Privacy Policy
 
  </div>
 </body>
</html>
