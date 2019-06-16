<!DOCTYPE html>
 <html>
  <head>
   <title> Login  </title>
    <link rel="shortcut icon" href="img/01.jpeg" />
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   <link  href="css/search.css" rel="stylesheet"/> 
   <link  href="css/login.css" rel="stylesheet"/> 
    <link rel="stylesheet" href="css/styles.css" >
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

  <div style="background-color:#FFFFE0;opacity:.6;color:#191970;"> </br>
    <center><h2>Restericted Area </h2>
     <form action="login_back.php" method="post">
           <center>
           <table>
             <tr>
               <th> Select Login Type </th>
               <td>
                <select name="se">
                 <option name="ADMIN"> ADMIN </option>
                 <option name="TEACHER"> TEACHER </option>
                 </select>
               </td>
             </tr>
             <tr>
              <th> Enter User Id </th>
              <td> <input type="text" name="login_id" placeholder="Login Id" required/> </td>
             </tr>
             <tr>
              <th> Enter Password </th>
              <td> <input type="password" name="pwd" placeholder="Password" required/> </td>
             </tr>
             </table>
             </center>
             <center><input type="reset" name="reset" value="Reset"/> <span> &nbsp;&nbsp;</span><input type="submit" name="submit" value="submit"/> &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;</center>
             <br/>
          </form>
     </center>
    
    <br><br><br><br><br><br><br><br><br><br><br> </div><br>
	 <div style="font-size:15px;color:white;background-color:#696969;text-align:center; width:100%;"> Copyright &copy; All Rights Reserved.
 2018 garc.mnnit.com<br> Terms of Use | Privacy Policy
 
  </div>
 </body>
</html>
