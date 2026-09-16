<?php
  include __DIR__ . '/../config/db.php';
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "INSERT INTO users (name,email,password)VALUES('$name','$email','$password')";
  $result = mysqli_query($conn, $sql);
  if($result){
    echo "
    <script>
      alert('Register Successfull.');
      window.location.href = '../../frontend/pages/login.php';
    </script> ";
  }else{
    echo "Error: ";
  }
?>