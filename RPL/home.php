<html>
<head>
</head>
<body>
   <?php
    $baris=0;
    echo "<h2 align=center>Home</h2>";
    echo "<p align=justify>";
	$fp=fopen("file-home.txt", "r");
	while($isi=fgets($fp, 1000)){
	  $baris++;
	  if($baris==3 || $baris==4){
		echo "<li align=justify>".$isi."</li>";
	  }
	  else {
		echo $isi;
	  }
	}
	echo "</p>";
   ?>
</body>
</html>