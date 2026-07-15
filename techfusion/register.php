<?php

include 'php/db.php';

if(isset($_POST['register'])){

$username = $_POST['username'];

$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$conn->query("INSERT INTO users(username,password)
VALUES('$username','$password')");

header("Location: login.php");

}

?>

<!DOCTYPE html>
<html>
<head>

<title>Register</title>

<link rel="stylesheet" href="/techfusion/css/style.css">

</head>

<body class="auth-bg">

<form method="POST">

<h2>Create Account</h2>

<input type="text"
name="username"
placeholder="Username"
required>

<input type="password"
name="password"
placeholder="Password"
required>

<button name="register">Register</button>

</form>

</body>
</html>