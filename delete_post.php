<?php
  session_start();
  include "db.php";
  $id = $_GET['id'];
  $sql = "DELETE FROM posts WHERE id='$id'";
  $result = mysqli_query($conn, $sql);
  if($result){
    header("location: my_posts.php");
  }else{
    echo "Delete Error: ";
  }

?>