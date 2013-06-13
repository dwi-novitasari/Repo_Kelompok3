<?php
  if($_GET["cm"]==""){
    include "home.php";
  }
  else if($_GET["cm"]=="hm"){
    include "home.php";
  }
  else if($_GET["cm"]=="ad"){
    include "admin.php";
  }
  else if($_GET["cm"]=="p2"){
    include "pendataan1.php";
  }
  else if($_GET["cm"]=="d-12"){
    include "d-12.php";
  }
  else if($_GET["cm"]=="d-13"){
    include "d-13.php";
  }
  
?>
