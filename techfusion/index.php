<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>

<title>TechFusion</title>

<link rel="stylesheet" href="/techfusion/css/style.css">

</head>

<body>

<header>
<h1>TechFusion 🚀</h1>
<p>Technology News and Learning Platform</p>
</header>

<nav>

<a href="index.php">Home</a>
<a href="news.php">News</a>
<a href="tutorials.php">Tutorials</a>
<a href="trending.php">Trending</a>
<a href="contact.php">Contact</a>
<a href="about.php">About</a>

<?php if(isset($_SESSION['user_id'])) { ?>

<a href="upload.php">Upload</a>
<a href="logout.php">Logout</a>

<?php if($_SESSION['role']=="admin") { ?>
<a href="admin.php">Admin</a>
<?php } ?>

<?php } else { ?>

<a href="login.php">Login</a>
<a href="register.php">Register</a>

<?php } ?>

</nav>

<section class="hero">

<h1>Welcome To TechFusion</h1>

<p>Explore technology news, tutorials and trends.</p>

</section>

<section class="cards">

<div class="card">
<img src="/techfusion/images/news.jpg">

<div class="card-content">
<h2>Latest News</h2>
<p>Read the newest technology updates.</p>
</div>

</div>

<div class="card">
<img src="/techfusion/images/tutorial.jpg">

<div class="card-content">
<h2>Programming Tutorials</h2>
<p>Learn web development step-by-step.</p>
</div>

</div>

<div class="card">
<img src="/techfusion/images/community.jpg">

<div class="card-content">
<h2>Tech Community</h2>
<p>Connect with developers and learners.</p>
</div>

</div>

</section>

<script src="/techfusion/js/main.js"></script>

<footer>

<p>© 2026 TechFusion | Technology News Platform</p>

</footer>
</body>
</html>