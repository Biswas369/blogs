<?php
  session_start();
  include __DIR__ . '/../config/db.php';
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM users WHERE email='$email' AND password='$password' ";
  $reuslt = mysqli_query($conn, $sql);
  if(mysqli_num_rows($reuslt)>0){
    $user = mysqli_fetch_assoc($reuslt);
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['user_name'] = $user['name'];
    header("location: ../../frontend/pages/dashboard.php");
    exit;
  }else{
    echo "<script>
    alert('Invalid email or password');
    window.location.href='../../frontend/pages/login.php';
    </script>";
    }

?>