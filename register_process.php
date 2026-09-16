<?php
  include "db.php";
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "INSERT INTO users (name,email,password)VALUES('$name','$email','$password')";
  $result = mysqli_query($conn, $sql);
  if($result){
    echo "
    <script>
      alert('Register Successfull.');
      window.location.href = 'login.php';
    </script> ";
  }else{
    echo "Error: ";
  }
?>