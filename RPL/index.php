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
		  <table align="center">
		    <tr>
			  <td align="center"><h1><font face="Brush Script MT" color="blue" size="18">Absensi Elektronik Finger Print</font></h1></td>
			</tr>
			<tr>
			  <td align="center"><h3><font color="blue">Jurusan Informatika</font></h3></td>
			</tr>
			<tr>
			  <td align="center"><h3><font color="blue" >Fakultas Matematika & Ilmu Pengetahuan Alam </font></h3></td>
			</tr>
			<tr>
			  <td align="center"><h3><font color="blue" >Universitas Syiah Kuala</font></h3></td>
			</tr>
		  </table>
		</td>
		<td align="left"><img src="logo.png" width="180px" height="150px"></td>
	  </tr>
	</table>
  </h1>
</div>
<div id="menu">
  <ul>
	<li><a href="?cm=hm">Home</a></li>
	<li><a href="#">Data Dosen</a>
	  <ul>
		<li><a href="?cm=d-19">Tahun Ajaran 2010/2011</a></li>
		<li><a href="?cm=d-20">Tahun Ajaran 2011/2012</a></li>
		<li><a href="?cm=d-21">Tahun Ajaran 2012/2013</a></li>
	  </ul>
	</li>
	<li><a href="#">Data Mahasiswa</a>
	  <ul>
		<li><a href="#">Angkatan 2010</a>
		   <ul>
			<li><a href="?cm=d-22">Tahun Ajaran 2010/2011</a></li>
			<li><a href="?cm=d-23">Tahun Ajaran 2011/2012</a></li>
			<li><a href="?cm=d-24">Tahun Ajaran 2012/2013</a></li>
	       </ul>
		</li>
		<li><a href="#">Angkatan 2011</a>
	      <ul>
			<li><a href="?cm=d-25">Tahun Ajaran 2011/2012</a></li>
			<li><a href="?cm=d-26">Tahun Ajaran 2012/2013</a></li>
	       </ul>
		</li>
		<li><a href="#">Angkatan 2012</a>
	      <ul>
			<li><a href="?cm=d-27">Tahun Ajaran 2012/2013</a></li>
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

 <div id='isi'>
  
    <?php include "content.php"; ?>
 
</div>


<div id='footer'>
  <p align='center'>Design By : Kelompok 3 RPL</font></p>
</div>  
</div>
</center>
</body>
</font>
</html>
