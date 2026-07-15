<?php

session_start();

include 'php/db.php';

if(!isset($_SESSION['role']) ||
$_SESSION['role']!="admin"){

header("Location: login.php");

exit();

}

$news = $conn->query("SELECT * FROM news ORDER BY id DESC");

$tutorials = $conn->query("SELECT * FROM tutorials ORDER BY id DESC");

?>

<!DOCTYPE html>
<html>

<head>

<title>Admin Dashboard</title>

<link rel="stylesheet"
href="/techfusion/css/style.css">

<style>

table{
width:90%;
margin:30px auto;
border-collapse:collapse;
background:white;
}

table th{
background:black;
color:white;
padding:15px;
}

table td{
padding:15px;
border:1px solid #ccc;
text-align:center;
}

table img{
width:150px;
height:100px;
object-fit:cover;
}

.edit-btn{
background:green;
color:white;
padding:10px;
text-decoration:none;
border-radius:5px;
}

.delete-btn{
background:red;
color:white;
padding:10px;
text-decoration:none;
border-radius:5px;
}

.top-buttons{
width:90%;
margin:auto;
margin-top:20px;
}

.top-buttons a{
background:#007BFF;
color:white;
padding:12px 20px;
text-decoration:none;
border-radius:5px;
margin-right:10px;
}

.section-title{
width:90%;
margin:30px auto 10px;
font-size:30px;
font-weight:bold;
}

</style>

</head>

<body>

<header>

<h1>Admin Dashboard 🚀</h1>

</header>

<nav>

<a href="index.php">Home</a>
<a href="news.php">News</a>
<a href="tutorials.php">Tutorials</a>
<a href="logout.php">Logout</a>

</nav>

<div class="top-buttons">

<a href="upload.php">

Upload News

</a>

<a href="upload_tutorial.php">

Upload Tutorial

</a>

</div>

<div class="section-title">

News Management

</div>

<table>

<tr>

<th>ID</th>
<th>Image</th>
<th>Title</th>
<th>Actions</th>

</tr>

<?php while($row = $news->fetch_assoc()){ ?>

<tr>

<td>

<?php echo $row['id']; ?>

</td>

<td>

<img src="/techfusion/<?php echo $row['image']; ?>">

</td>

<td>

<?php echo $row['title']; ?>

</td>

<td>

<a class="edit-btn"
href="edit.php?id=<?php echo $row['id']; ?>">

Edit

</a>

<a class="delete-btn"
href="delete.php?id=<?php echo $row['id']; ?>">

Delete

</a>

</td>

</tr>

<?php } ?>

</table>

<div class="section-title">

Tutorial Management

</div>

<table>

<tr>

<th>ID</th>
<th>Image</th>
<th>Title</th>
<th>Actions</th>

</tr>

<?php while($row = $tutorials->fetch_assoc()){ ?>

<tr>

<td>

<?php echo $row['id']; ?>

</td>

<td>

<img src="/techfusion/<?php echo $row['image']; ?>">

</td>

<td>

<?php echo $row['title']; ?>

</td>

<td>

<a class="edit-btn"
href="edit_tutorial.php?id=<?php echo $row['id']; ?>">

Edit

</a>

<a class="delete-btn"
href="delete_tutorial.php?id=<?php echo $row['id']; ?>">

Delete

</a>

</td>

</tr>

<?php } ?>

</table>

</body>
</html>