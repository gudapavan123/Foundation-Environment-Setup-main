<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "student_db1";   // your database name

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}

echo "Database Connected Successfully";

?>