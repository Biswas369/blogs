<?php
  session_start();
  include "db.php";
  if(!isset($_SESSION['user_id'])){
    header("location: login.php");
    exit;
  }
  $title = $_POST['title'];
  $content = $_POST['content'];
  $user_id = $_SESSION['user_id'];

  $image = $_FILES['image']['name'];
  $tmp_name = $_FILES['image']['tmp_name'];
  $folder = "uploads/" .$image;
  move_uploaded_file($tmp_name, $folder);


  $sql = "INSERT INTO posts(title,content,image,user_id)VALUES('$title','$content','$image','$user_id')";
  $result = mysqli_query($conn, $sql);

  if($result){
    echo "<script> 
    alert('New post create Successfully.');
    window.location.href = 'dashboard.php';
    </script>";
  }else{
     echo "<script> 
    alert('Error: not work.');
    window.location.href = 'dashboard.php';
    </script>";
  }

?>