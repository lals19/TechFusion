<?php

include 'php/db.php';

$result = $conn->query("SELECT * FROM tutorials ORDER BY id DESC");

?>

<!DOCTYPE html>
<html>
<head>

<title>Tutorials</title>

<link rel="stylesheet" href="/techfusion/css/style.css">

</head>

<body>

<header>
<h1>Programming Tutorials</h1>
</header>

<nav>

<a href="index.php">Home</a>
<a href="news.php">News</a>
<a href="tutorials.php">Tutorials</a>
<a href="trending.php">Trending</a>
<a href="contact.php">Contact</a>

</nav>

<section class="hero">

<h1>Learn Programming 🚀</h1>



</section>

<div class="cards">

<?php while($row = $result->fetch_assoc()) { ?>

<div class="card">

<img src="/techfusion/<?php echo $row['image']; ?>">

<div class="card-content">

<h2><?php echo $row['title']; ?></h2>

<p><?php echo nl2br($row['content']); ?></p>
</div>

</div>

<?php } ?>

</div>

<footer>

<p>TechFusion Tutorials</p>

</footer>

</body>
</html>