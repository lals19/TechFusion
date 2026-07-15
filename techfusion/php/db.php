<?php

$conn = new mysqli("localhost", "root", "", "techfusion_db");

if($conn->connect_error){
    die("Database failed");
}

?>