<?php

session_start();

include 'php/db.php';

if(isset($_POST['upload'])){

$title = mysqli_real_escape_string($conn, $_POST['title']);

$content = mysqli_real_escape_string($conn, $_POST['content']);
$image = "images/" . $_FILES['image']['name'];

move_uploaded_file($_FILES['image']['tmp_name'], $image);

$conn->query("INSERT INTO tutorials(title,content,image)
VALUES('$title','$content','$image')");

header("Location: tutorials.php");

}

?>

<!DOCTYPE html>
<html>
<head>

<title>Upload Tutorial</title>

<link rel="stylesheet" href="/techfusion/css/style.css">

</head>

<body class="upload-bg">

<header>
<h1>Upload Tutorial 🚀</h1>
</header>

<nav>

<a href="index.php">Home</a>
<a href="tutorials.php">Tutorials</a>
<a href="admin.php">Admin</a>

</nav>

<form method="POST" enctype="multipart/form-data">

<h2>New Tutorial</h2>

<input type="text"
name="title"
placeholder="Tutorial Title"
required>

<textarea
name="content"
placeholder="Write tutorial content"
required></textarea>

<input type="file"
name="image"
required>

<button name="upload">Upload Tutorial</button>

</form>

</body>
</html>