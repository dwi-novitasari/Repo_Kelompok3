<html>
<head>
<title>RPL</title>
  <link href=style.css rel=stylesheet type=text/css>
</head>
<body style=background:url(Icon/bg.jpg);>
  <fieldset style="border:none;">
   <h2 align="left">Kirim Data</h2>
   <p align="right" style="font-size:13px;"><a href="index.php">Logout</a></p>
   <form action="?cm=ok" method="post" class="form">
   <table cellspacing="0px" cellpadding="10px" align="center" class="login">
	   <tr><td align="center"><b>Upload Data Absensi</b></td></tr>
	   <tr><td align="center">Silahkan masukkan file PDF rekap data absensi</td></tr>
	   <tr></tr>
       <tr><td><input type="file" name="file"></td></tr>
	   <tr><td><select>
	     <option>PUKSI</option>
		 <option>Jurusan</option>
	   </select></td></tr>
	   <tr><td align="center"><input type="submit" value="Kirim" class="button">
	   <input type="reset" value="Batal" class="button" onclick="history.go(-1);"></td></tr>
	 </table>
   </form>
  </fieldset>
</body>
</html>
