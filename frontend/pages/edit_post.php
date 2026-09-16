<?php
  session_start();
  include __DIR__ . '/../../backend/config/db.php';

  $id = $_GET['id'];
  $sql = "SELECT * FROM posts WHERE id='$id'";
  $result = mysqli_query($conn, $sql);
  $post = mysqli_fetch_assoc($result);

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
      .editForm {
        width: 100% !important;
      }

    }
  </style>
</head>

<body>

  <main class="container">
    <div class="w-50 m-auto shadow p-4 p-md-5 editForm">

      <h2 class="mb-5 text-center">Edit Post</h2>
      <form action="../../backend/actions/update_post.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $post['id']; ?>">

        <label for="title">Title : </label>
        <input type="text" name="title" class="w-100" id="title" value="<?php echo $post['title']; ?>"><br><br>

        <label for="image">Current Image:</label><br>
        <img src="../uploads/<?php echo $post['image']; ?>" width="120"><br><br>

        <label for="image">Upload Image</label>
        <input type="file" name="image" class="w-100"> <br><br>

        <label for="content">Content:</label>
        <textarea name="content" class="w-100 p-3" id="content"
          rows="12"><?php echo $post['content']; ?></textarea><br><br>
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Update Post</button>

        </div>
      </form>
    </div>




  </main>


</body>

</html>