<html>
<head>
<title>RPL</title>
  <link href=style.css rel=stylesheet type=text/css>
</head>
<body style=background:url(Icon/bg.jpg);>
  <fieldset style="border:none;">
   <h2 align="left">Login Admin</h2>
   <form action="?cm=ad" method="post" class="form">
	 <table cellspacing="0px" cellpadding="5px" width="35%" align="center" class="login">
       <tr><td style="color:dimgray;">Username</td><td><input type="text" name="user" required></td></tr>
	   <tr><td style="color:dimgray;">Password</td><td><input type="password" name="password" required></td></tr>
	   <tr><td></td><td><input type="submit" value="Login" class="button">
	   <input type="reset" value="Cencel" class="button" onclick="history.go(-1);"></td></tr>
	 </table>
   </form>
  </fieldset>
</body>
</html>
