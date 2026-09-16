<?php
  session_start();
  include __DIR__ . '/../../backend/config/db.php';

  if(!isset($_SESSION['user_id'])){
    header("location: login.php");
    exit;
  }
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/style.css?v=2">
  <style>
      
      body {
  font-family: Arial, sans-serif;
  background: white;
}

/* Chat Icon Button */
.chat-btn {
  position: fixed;
  bottom: 20px;
  right: 20px;
  background: var(--primaryColor);
  color: white;
  border: none;
  border-radius: 50%;
  width: 60px;
  height: 60px;
  font-size: 26px;
  cursor: pointer;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
  transition: transform 0.2s;
}

.chat-btn:hover {
  transform: scale(1.1);
}

/* Chat Box */
.chat-box {
  position: fixed;
  bottom: 90px;
  right: 20px;
  width: 360px;
  max-height: 500px;
  background: #fff;
  border-radius: 12px;
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
  display: none;
  flex-direction: column;
  overflow: hidden;
  z-index: 7;

}

.chat-header {
  background: #0f9d58;
  color: white;
  padding: 12px 15px;
  font-weight: bold;
  font-size: 16px;
}

#chatboxContent {
  flex: 1;
  padding: 12px;
  overflow-y: auto;
  font-size: 14px;
  background: #f9f9f9;
}

.chat-input {
  display: flex;
  border-top: 1px solid #ddd;
  background: #fff;
}

.chat-input input {
  flex: 1;
  padding: 10px;
  border: none;
  outline: none;
  font-size: 14px;
}

.chat-input button {
  padding: 10px 15px;
  border: none;
  background: #0f9d58;
  color: white;
  cursor: pointer;
  transition: background 0.2s;
}

.chat-input button:hover {
  background: #0c7a42;
}

.user,
.bot {
  display: inline-block;
  padding: 10px 15px;
  margin: 5px 0;
  border-radius: 10px;
  max-width: 80%;
  word-wrap: break-word;
}

.user {
  background: #1a73e8;
  color: white;
  align-self: flex-end;
  display: block;
  margin-top: 30px;
}

.bot {
  background: #e0ffe0;
  color: #006400;
  align-self: flex-start;
}

#chatboxContent::-webkit-scrollbar {
  width: 6px;
}

#chatboxContent::-webkit-scrollbar-thumb {
  background: rgba(0, 0, 0, 0.2);
  border-radius: 3px;
}

#chatboxContent::-webkit-scrollbar-track {
  background: transparent;
}



.chatbotimg {
  width: 40px;
  height: auto;
  animation: zoomInOut 2s infinite ease-in-out;
}

@keyframes zoomInOut {
  0% {
    transform: scale(1);
  }

  50% {
    transform: scale(1.4);
    /* kati thulo banaune */
  }

  100% {
    transform: scale(1);
  }
}

@media only screen and (min-width:200px) and (max-width:575px) {
  .chat-box {
    right: 0;
    width: 100%;
    margin: auto;

  }

  #chatboxContent {
    padding: 15px;
  }

  .chat-box {
    bottom: 48px;
  }

    .chat-btn {
      bottom: -6px;
      right: -7px;
      box-shadow: none;
    }

  }
      
      
      
      
      
      
    form input,
    textarea {
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
      .createForm {
        width: 100% !important;
        border-radius: 10px;
      }
    }

    @media only screen and (min-width:575px) and (max-width:768px) {
      .createForm {
        width: 100% !important;
        border-radius: 10px;
      }
    }
  </style>
</head>

<body>
  <main class="container">
    <div class="row">
      <div class="col-12">
        <div class="shadow w-50 m-auto p-4 p-md-5 createForm">

          <h2 class="text-center  pb-5">Create Blogs</h2>
          <form action="../../backend/actions/insert_post.php" method="POST" enctype="multipart/form-data">
            <label for="title">Title :</label>
            <input type="text" name="title" id="title" class="w-100"><br><br>

            <label for="content">Content:</label>
            <textarea name="content" id="content" rows="6" class="w-100"></textarea><br><br>

            <label for="image">Image:</label>
            <input type="file" name="image" id="image" class="w-100"><br><br>

            <div class="col-12 d-flex justify-content-between">
              <button type="reset" class="btn btn-danger">Clear</button>
              <button type="submit" class="btn btn-success">Publish Post</button>
            </div>


          </form>

        </div>
        <div class="col-12 text-center mt-5">
          <a href="dashboard.php" class="btn btn-primary">Back To Dashboard</a>
        </div>
      </div>
    </div>



  </main>

</body>

</html>