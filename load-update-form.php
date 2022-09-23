<?php

$student_id = $_POST["id"];

$conn = mysqli_connect("localhost","root","","PHP-Ajax") or die("Connection Failed");

$sql = "SELECT * FROM students WHERE id = {$student_id}";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");
$output = "";
if(mysqli_num_rows($result) > 0 ){

  while($row = mysqli_fetch_assoc($result)){
    $output .= "<tr>
      <td width='90px'>Student_Name</td>
      <td><input type='text' id='edit-sname' value='{$row["Student_Name"]}'>
          <input type='text' id='edit-id' hidden value='{$row["id"]}'>
      </td>
    </tr>
    <tr>
      <td>Father_Name</td>
      <td><input type='text' id='edit-fname' value='{$row["Father_Name"]}'></td>
    </tr>
    <tr>
      <td>City</td>
      <td><input type='text' id='edit-city' value='{$row["City"]}'></td>
    </tr>
    <tr>
      <td>Department</td>
      <td><input type='text' id='edit-dept' value='{$row["Department"]}'></td>
    </tr>
    <tr>
      <td></td>
      <td><input type='submit' id='edit-submit' value='save'></td>
    </tr>";

  }

    mysqli_close($conn);

    echo $output;
}else{
    echo "<h2>No Record Found.</h2>";
}

?>
