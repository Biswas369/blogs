<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
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
      .regForm {
        width: 100% !important;
        border-radius: 10px;
      }

    }

    @media only screen and (min-width:575px) and (max-width:768px) {

      .regForm {
        width: 100% !important;
        border-radius: 10px;
      }
    }
  </style>
</head>

<body>
  <div class="container ">
    <div class="row-12">
      <form onsubmit="return validateForm()" action="register_process.php" method="POST" class="w-50 shadow p-4 p-md-5 m-auto regForm">
        <h1 class="text-center mb-5">Register Form</h1>

        <label for="name">Name : </label>
        <input type="text" name="name" id="name" class="w-100" placeholder="Enter Name"><br><br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" class="w-100" placeholder="Enter email"><br><br>
        <label for="password">Password: </label>
        <input type="password" name="password" id="password" class="w-100" placeholder="Enter Password"><br><br>
        <div class="col-12 d-flex justify-content-between">
          <button type="reset" class="btn btn-danger">Clear</button>
          <button type="submit" class="btn btn-success">Register</button>
        </div>
        <p class="text-center mt-5 mt-md-0">Do you have account ? <a href="login.php">Login Now</a></p>
        <div class="text-center">
          <a href="index.php">Back To Home</a>
        </div>
      </form>
    </div>
  </div>

<script>
    function validateForm() {
      let name = document.getElementById("name").value;
      let email = document.getElementById("email").value;
      let password = document.getElementById("password").value;

      if (name === "" || email === "" || password === "") {
        alert("You Most fill All Field");
        return false;
      }
    }
  </script>
</body>

</html>