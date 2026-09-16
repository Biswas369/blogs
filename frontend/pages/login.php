<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/style.css">
  <style>
    body{
    background:white;
}
    form input {
      padding: 4px 10px;
      outline: none;
      border: 1px solid navy;
      border-radius: 3px;
    }

    p a {
      color: rgb(14, 24, 126);
    }

    p a:hover {
      color: rgb(17, 103, 40);
    }

    @media only screen and (min-width:200px) and (max-width:575px) {
      .loginForm {
        width: 100% !important;
        border-radius: 10px;
      }
    }

    @media only screen and (min-width:575px) and (max-width:768px) {

      .loginForm {
        width: 100% !important;
        border-radius: 10px;
      }
    }
  </style>

</head>

<body>

  <div class="container ">
    <div class="row-12">
      <form onsubmit=" return validation()" action="../../backend/actions/login_process.php" method="POST" class="w-50 shadow p-4 p-md-5 m-auto loginForm ">
        <h1 class="text-center mb-5">Login</h1>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" class="w-100" placeholder="Enter email"><br><br>
        <label for="password">Password: </label>
        <input type="password" name="password" id="password" class="w-100" placeholder="Enter Password"><br><br>
        <div class="col-12 d-flex justify-content-between">
          <button type="reset" class="btn btn-danger">Clear</button>
          <button type="submit" class="btn btn-success">Login</button>
        </div>
        <p class="text-center mt-5 mt-md-0">Do not have account ? <a href="register.php">Register Now</a></p>
        <div class="text-center">
          <a href="index.php">Back To Home</a>
        </div>
      </form>
    </div>
  </div>



<script>
    function validation(){
      let email = document.getElementById("email").value;
      let password = document.getElementById("password").value;

      if(email ==="" || password ===""){
        alert("You must be fill all field");
        return false;
      }
    }
  </script>
</body>

</html>