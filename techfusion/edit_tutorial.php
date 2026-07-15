<?php

session_start();

include 'php/db.php';

if(!isset($_SESSION['role']) ||
$_SESSION['role']!="admin"){

header("Location: login.php");

exit();

}

$id = $_GET['id'];

$result = $conn->query(
"SELECT * FROM tutorials WHERE id='$id'"
);

$row = $result->fetch_assoc();

if(isset($_POST['update'])){

$title = mysqli_real_escape_string(
$conn,
$_POST['title']
);

$content = mysqli_real_escape_string(
$conn,
$_POST['content']
);

$image = $row['image'];

if($_FILES['image']['name']!=""){

$image = "images/" .
$_FILES['image']['name'];

move_uploaded_file(
$_FILES['image']['tmp_name'],
$image
);

}

$conn->query("UPDATE tutorials
SET
title='$title',
content='$content',
image='$image'
WHERE id='$id'");

header("Location: admin.php");

}

?>

<!DOCTYPE html>
<html>

<head>

<title>Edit Tutorial</title>

<link rel="stylesheet"
href="/techfusion/css/style.css">

<style>

.edit-box{
width:500px;
margin:50px auto;
background:white;
padding:30px;
border-radius:10px;
box-shadow:0 0 10px rgba(0,0,0,0.2);
}

.edit-box input,
.edit-box textarea{
width:100%;
padding:12px;
margin:10px 0;
}

.edit-box img{
width:100%;
height:250px;
object-fit:cover;
margin-bottom:15px;
}

</style>

</head>

<body>

<header>

<h1>Edit Tutorial</h1>

</header>

<div class="edit-box">

<form method="POST"
enctype="multipart/form-data">

<img
src="/techfusion/<?php echo $row['image']; ?>">

<input
type="text"
name="title"
value="<?php echo $row['title']; ?>">

<textarea
name="content"
rows="10"><?php echo $row['content']; ?></textarea>

<label>

Change Image:

</label>

<input
type="file"
name="image">

<button name="update">

Update Tutorial

</button>

</form>

</div>

</body>
</html>
