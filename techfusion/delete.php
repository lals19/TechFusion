<?php

include 'php/db.php';

$id = $_GET['id'];

$conn->query("DELETE FROM news WHERE id='$id'");

header("Location: admin.php");

?>