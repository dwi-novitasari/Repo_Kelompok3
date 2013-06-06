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
?>