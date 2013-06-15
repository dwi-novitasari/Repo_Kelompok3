<html>
<head>
<title>RPL</title>
  <link href=style.css rel=stylesheet type=text/css>
</head>
<body style=background:url(Icon/bg.jpg);>
  <fieldset style="border:none;">
   <h2 align="left">Edit Data</h2>
   <p align="right" style="font-size:13px;"><a href="index.php">Logout</a></p>
   <form action="?cm=ok" method="post" class="form">
   <table cellspacing="0px" cellpadding="5px" align="center" class="login">
       <tr><td>Nama</td><td> : </td><td>Dr. Taufik Fuadi Abidin, M.Tech</td></tr>
	   <tr><td>NIP</td><td> : </td><td>1234567890</td></tr>
	   <tr><td>Keterangan</td><td> : </td><td>INF IV</td></tr>
	   <tr><td>Ruang</td><td> : </td><td><input type="text" name="ruang"></td></tr>
	   <tr><td>Hari/Tanggal</td><td> : </td><td><input type="date" name="hr"></td></tr>
	   <tr><td>Waktu</td><td> : </td><td><input type="text" name="waktu"></td></tr>
	   <tr><td></td><td></td><td><input type="submit" value="Simpan" class="button">
	   <input type="reset" value="Batal" class="button" onclick="history.go(-1);"></td></tr>
	 </table>
   </form>
  </fieldset>
</body>
</html>
