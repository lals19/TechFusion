<?php

include 'php/db.php';

$id = $_GET['id'];

$conn->query("INSERT INTO likes(news_id)
VALUES('$id')");

header("Location: news.php");

?>