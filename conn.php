<?php
    $local = "localhost";
    $user = "root";
    $pass = ""; 
    $bd_name = "emprego";

    // $local = "fdb7.freehostingeu.com";
    // $user = "1942710_imp";
    // $pass = "george123,";
    // $bd_name = "1942710_imp";    
$conn = mysqli_connect($local,$user,$pass,$bd_name);

if ($conn->connect_errno) {
    printf("Connect failed: %s\n", $conn->connect_error);
    exit();
}
?>