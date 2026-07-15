<?php

session_start();

include 'php/db.php';

if(!isset($_SESSION['role']) ||
$_SESSION['role']!="admin"){

header("Location: login.php");

exit();

}

$id = $_GET['id'];

$conn->query("DELETE FROM tutorials
WHERE id='$id'");

header("Location: tutorials.php");

?>