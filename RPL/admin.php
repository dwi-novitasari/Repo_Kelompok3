<html>
<head><font face="calibri">
  <title>RPL</title>
  <link href="desain.css" rel="stylesheet" type="text/css">	
  <?php 
	$username=$_POST["username"];
	$password=$_POST["password"];
  ?>
</head>
<body bgcolor="grey"><center>
<!-- page -->
<div id="page">
<!-- header -->
<div id="header">
  <h1 align="left">
	<table width="100%">
	  <tr>
	    <td align="left"><img src="sidik.jpg" width="40%" height="55%"></td>
		<td align="left">
		  <table>
		    <tr>
			  <td><font face="Brush Script MT" size="10px"><b>Absensi Elektronik Finger Print</b></font></td>
			</tr>
			<tr>
			  <td><font face="calibri" size="4px"><b>Jurusan </font><font face="calibri" size="6px"> INFORMATIKA</b></font></td>
			</tr>
			<tr>
			  <td><font face="calibri" size="4px"><b>FMIPA - Universitas Syiah Kuala</b></font></td>
			</tr>
		  </table>
		</td>
	  </tr>
	</table>
  </h1>
</div>
<div id="menu"><font face="calibri">
  <ul>
	<li><a href="?cm=krm">Kirim Data</a></li>
	<li><a href="?cm=ed">Edit</a></li>
	<li><a href="?cm=tmpl">Tampil Data</a></li>
  </ul>
</font>
</div>
<div id="content">
  <table align="left" width="100%" cellpadding="7px">
    <tr>
	  <td><a href="?cm=hm"><img src="home.jpg" width="30px" height="40px"></a></td>
	  <td align="right">
		  <?php echo "$username"; ?> | <a href="logout.php"><input type="submit" value="Log Out" class="tombol"></a>
	  </td>
	</tr>
  </table>
</div>
<div id="isi">
  <?php
    include "content1.php";
  ?>
</div>
<!--footer -->
<div id="footer">
  <p align="center"><font face="Brush Script MT" size="4px">Design By : Kelompok 3 RPL</font></p>
</div>  
</div>
</center>
</body>
</font>
</html>