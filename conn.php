<?php
$local = "localhost";
$user = "root";
$pass = "";
$bd_name = "emprego";

$conn = mysqli_connect($local,$user,$pass,$bd_name);

if ($conn->connect_errno) {
    printf("Connect failed: %s\n", $conn->connect_error);
    exit();
}
?>