<html>
<head><font face="calibri">
  <title>RPL</title>
  <link href="desain.css" rel="stylesheet" type="text/css">	
</head>
<body bgcolor="grey"><center>
<!-- page -->
<div id="page">
<!-- header -->
<div id="header">
  <h1 align="left">
	<table width="100%">
	  <tr>
	    <td align="center"><img src="sidik.jpg" width="100px" height="150px"></td>
		<td align="left">
		  <table align="left">
		    <tr>
			  <td><h1>Absensi Elektronik Finger Print</h1></td>
			</tr>
			<tr>
			  <td><h3>Jurusan Informatika</h3></td>
			</tr>
			<tr>
			  <td><h3>FMIPA - Universitas Syiah Kuala</h3></td>
			</tr>
		  </table>
		</td>
	  </tr>
	</table>
  </h1>
</div>
<div id="menu">
  <ul>
	<li><a href="?cm=hm">Home</a></li>
	<li><a href="?cm=d-dsn">Data Dosen</a>
	  <ul>
		<li><a href="?cm=d-10">Tahun Ajaran 2010/2011</a></li>
		<li><a href="?cm=d-11">Tahun Ajaran 2011/2012</a></li>
		<li><a href="?cm=d-12">Tahun Ajaran 2012/2013</a></li>
	  </ul>
	</li>
	<li><a href="?cm=d-dsn">Data Mahasiswa</a>
	  <ul>
		<li><a href="?cm=d-10">Angkatan 2010</a>
		   <ul>
			<li><a href="?cm=d-10">Tahun Ajaran 2010/2011</a></li>
			<li><a href="?cm=d-11">Tahun Ajaran 2011/2012</a></li>
			<li><a href="?cm=d-12">Tahun Ajaran 2012/2013</a></li>
	       </ul>
		</li>
		<li><a href="?cm=d-11">Angkatan 2011</a>
	      <ul>
			<li><a href="?cm=d-11">Tahun Ajaran 2011/2012</a></li>
			<li><a href="?cm=d-12">Tahun Ajaran 2012/2013</a></li>
	       </ul>
		</li>
		<li><a href="?cm=d-12">Angkatan 2012</a>
	      <ul>
			<li><a href="?cm=d-12">Tahun Ajaran 2012/2013</a></li>
	       </ul>		
		</li>
		
	  </ul>
	</li>
  </ul>
</font>
</div>
<div id="content">
  <table align="left" width="100%" cellpadding="7px">
    <tr>
	  <td><a href="admin.php"><img src="home.jpg" width="30px" height="40px"></a></td>
	  <td align="right">
		<form action="?cm=ad" method="post">
		  <input type="text" name="username" placeholder="Username" required>
		  <input type="password" name="password" placeholder="Password" required>
		  <input type="submit" value="Sign In" class="tombol">
		</form>
	  </td>
	</tr>
  </table>
</div>
<div id="isi">
  <?php
    include "content.php";
  ?>
</div>
<!--footer -->
<div id="footer">
  <p align="center">Design By : Kelompok 3 RPL</font></p>
</div>  
</div>
</center>
</body>
</font>
</html>
