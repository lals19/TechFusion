<?php

session_start();

include 'php/db.php';

if(isset($_POST['login'])){

$username = $_POST['username'];

$password = $_POST['password'];

$result = $conn->query("SELECT * FROM users
WHERE username='$username'");

$user = $result->fetch_assoc();

if($user && password_verify($password,$user['password'])){

$_SESSION['user_id'] = $user['id'];

$_SESSION['role'] = $user['role'];

header("Location: index.php");

}else{

echo "Wrong username or password";

}

}

?>

<!DOCTYPE html>
<html>
<head>

<title>Login</title>

<link rel="stylesheet" href="/techfusion/css/style.css">

</head>

<body class="auth-bg">

<form method="POST">

<h2>Login</h2>

<input type="text"
name="username"
placeholder="Username"
required>

<input type="password"
name="password"
placeholder="Password"
required>

<button name="login">Login</button>

</form>

</body>
</html>