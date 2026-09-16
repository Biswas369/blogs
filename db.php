<?php
  $conn = mysqli_connect("localhost", "root", "", "blogs");
  if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
  }
  
?>