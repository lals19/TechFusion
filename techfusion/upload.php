<?php

session_start();

include 'php/db.php';

if(isset($_POST['upload'])){
$title = mysqli_real_escape_string($conn, $_POST['title']);

$content = mysqli_real_escape_string($conn, $_POST['content']);

$image = "images/" . $_FILES['image']['name'];

move_uploaded_file($_FILES['image']['tmp_name'], $image);

$conn->query("INSERT INTO news(title,content,image)
VALUES('$title','$content','$image')");

header("Location: admin.php");

}

?>

<!DOCTYPE html>
<html>
<head>

<title>Upload News</title>

<link rel="stylesheet" href="/techfusion/css/style.css">

</head>

<body class="upload-bg">

<form method="POST" enctype="multipart/form-data">

<h2>Upload News</h2>

<input type="text"
name="title"
placeholder="News Title">

<textarea
name="content"
placeholder="Write full news content"></textarea>

<input type="file" name="image">

<button name="upload">Upload</button>

</form>

</body>
</html>