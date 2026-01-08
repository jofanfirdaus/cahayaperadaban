<?php
date_default_timezone_set('Asia/Jakarta');

$servername="localhost";
$username="root";
$password = "";
$db = "cahaya_peradaban";

//create connection
$conn = new mysqli($servername, $username, $password, $db);

//check connection
if($conn->connect_error){
    die("connection failed : ".
    $conn->connect_error);
}

//echo "connected successfully<hr>";
?>