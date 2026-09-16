<?php
  session_start();
  include __DIR__ . '/../config/db.php';
  $id = $_GET['id'];
  $sql = "DELETE FROM posts WHERE id='$id'";
  $result = mysqli_query($conn, $sql);
  if($result){
    header("location: ../../frontend/pages/my_posts.php");
  }else{
    echo "Delete Error: ";
  }

?>