<?php

$student_id = $_POST["id"];
$StudentName = $_POST["Student_Name"];
$FatherName = $_POST["Father_Name"];
$City = $_POST["City"];
$Department = $_POST["Department"];

$conn = mysqli_connect("localhost","root","","PHP-Ajax") or die("Connection Failed");

$sql = "UPDATE students SET Student_Name = '{$StudentName}',Father_Name = '{$FatherName}', City = '{$City}', Department = '{$Department}' WHERE id = {$student_id}";

if(mysqli_query($conn, $sql)){
  echo 1;
}else{
  echo 0;
}

?>
