<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "anjappar";
$con = mysqli_connect($servername, $username, $password,$db);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>