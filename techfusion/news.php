<?php
session_start();
include 'php/db.php';

$result = $conn->query("SELECT * FROM news ORDER BY id DESC");
if(isset($_GET['search'])){

$search = $_GET['search'];

$result = $conn->query("SELECT * FROM news
WHERE title LIKE '%$search%'
OR content LIKE '%$search%'");

}else{

if(isset($_GET['search'])){

$search = $_GET['search'];

$result = $conn->query("SELECT * FROM news
WHERE title LIKE '%$search%'
OR content LIKE '%$search%'");

}else{

$result = $conn->query("SELECT * FROM news ORDER BY id DESC");

}

}
?>

<!DOCTYPE html>
<html>
<head>

<title>News</title>

<link rel="stylesheet" href="/techfusion/css/style.css">

</head>

<body>

<header>
<h1>Technology News</h1>
</header>

<nav>

<a href="index.php">Home</a>
<a href="news.php">News</a>
<a href="tutorials.php">Tutorials</a>
<a href="trending.php">Trending</a>
<a href="contact.php">Contact</a>

<?php if(isset($_SESSION['user_id'])) { ?>

<a href="upload.php">Upload</a>
<a href="logout.php">Logout</a>

<?php if($_SESSION['role']=="admin"){ ?>
<a href="admin.php">Admin</a>
<?php } ?>

<?php } else { ?>

<a href="login.php">Login</a>
<a href="register.php">Register</a>

<?php } ?>

</nav>

<section class="news-hero">

<h1>Latest Technology Updates 🚀</h1>

<p>AI, Programming, Cybersecurity, Gadgets and Innovation</p>

</section>

<form method="GET">

<div class="search-box">

<input type="text"
name="search"
placeholder="Search technology news...">

<button>Search</button>

</div>

</form>


<div class="news-container">
    <div class="search-box">

<input type="text" placeholder="Search technology news...">

</div>

<?php while($row = $result->fetch_assoc()) { ?>

<div class="news-card">

<img src="/techfusion/<?php echo $row['image']; ?>">

<div class="news-content">

<h2><?php echo $row['title']; ?></h2>

<p><?php echo $row['content']; ?></p>

<a href="like.php?id=<?php echo $row['id']; ?>">
<button>Like</button>
<?php

$news_id = $row['id'];

$likes = $conn->query("SELECT * FROM likes
WHERE news_id='$news_id'");

$like_count = $likes->num_rows;

?>

<button>

Like (<?php echo $like_count; ?>)

</button>
</a>

<form method="POST" action="comment.php">
<?php

$news_id = $row['id'];

$comments = $conn->query("SELECT * FROM comments
WHERE news_id='$news_id'");

while($comment = $comments->fetch_assoc()){

?>

<div style="background:#f4f4f4;
padding:10px;
margin-top:10px;
border-radius:5px;">

<?php echo $comment['comment']; ?>

</div>

<?php } ?>
<input type="hidden" name="news_id" value="<?php echo $row['id']; ?>">

<input type="text" name="comment" placeholder="Write a comment">

<button>Comment</button>

</form>

</div>

</div>

<?php } ?>

</div>

</body>
</html>