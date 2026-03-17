<?php

$conn = mysqli_connect("localhost","root","","student_db");

if(!$conn){
die("Connection Failed");
}

$sql = "SELECT * FROM students";

$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result)){

echo "ID: ".$row['id']."<br>";
echo "Name: ".$row['name']."<br>";
echo "Email: ".$row['email']."<br><br>";

}

?>