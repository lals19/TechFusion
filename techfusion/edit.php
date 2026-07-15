<?php

session_start();

include 'php/db.php';

$id = $_GET['id'];

$result = $conn->query("SELECT * FROM news WHERE id='$id'");

$row = $result->fetch_assoc();

if(isset($_POST['update'])){

$title = $_POST['title'];
$content = $_POST['content'];

if($_FILES['image']['name']){

$image = "images/" . $_FILES['image']['name'];

move_uploaded_file($_FILES['image']['tmp_name'], $image);

$conn->query("UPDATE news SET
title='$title',
content='$content',
image='$image'
WHERE id='$id'");

}else{

$conn->query("UPDATE news SET
title='$title',
content='$content'
WHERE id='$id'");

}

header("Location: admin.php");

}

?>

<!DOCTYPE html>
<html>
<head>

<title>Edit News</title>

<link rel="stylesheet" href="/techfusion/css/style.css">

</head>

<body class="upload-bg">

<form method="POST" enctype="multipart/form-data">

<h2>Edit News</h2>

<input type="text"
name="title"
value="<?php echo $row['title']; ?>">

<textarea
name="content"><?php echo $row['content']; ?></textarea>

<input type="file" name="image">

<button name="update">Update</button>

</form>

</body>
</html>