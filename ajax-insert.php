<?php

$Student_Name = $_POST["Student_Name"];
$Father_Name = $_POST["Father_Name"];
$City = $_POST["City"];
$Department = $_POST["Department"];

$conn = mysqli_connect("localhost","root","","PHP-Ajax") or die("Connection Failed");

$sql = "INSERT INTO students(Student_Name, Father_Name, City, Department) VALUES ('{$Student_Name}','{$Father_Name}', '{$City}', '{$Department}')";

if(mysqli_query($conn, $sql)){
  echo 1;
}else{
  echo 0;
}


?>
