<?php
include __DIR__ . '/../config/db.php';

$id = $_POST['id'];
$title = $_POST['title'];
$content = $_POST['content'];

$image = $_FILES['image']['name'];
$tmp = $_FILES['image']['tmp_name'];

if($image){
    move_uploaded_file($tmp, __DIR__ . "/../../frontend/uploads/".$image);
    $sql = "UPDATE posts SET title='$title', image='$image', content='$content' WHERE id='$id'";
}else{
    $sql = "UPDATE posts SET title='$title', content='$content' WHERE id='$id'";
}

mysqli_query($conn,$sql);

header("location: ../../frontend/pages/my_posts.php");
?>