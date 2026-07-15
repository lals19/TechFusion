<?php

include 'php/db.php';

$news_id = $_POST['news_id'];

$comment = $_POST['comment'];

$conn->query("INSERT INTO comments(news_id,comment)
VALUES('$news_id','$comment')");

header("Location: news.php");

?>