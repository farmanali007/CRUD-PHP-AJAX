<?php

$search_value = $_POST["search"];

$conn = mysqli_connect("localhost","root","","PHP-Ajax") or die("Connection Failed");

$sql = "SELECT * FROM students WHERE Student_Name LIKE '%{$search_value}%' OR City LIKE '%{$search_value}%' OR Department LIKE '%{$search_value}%'";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");
$output = "";
if(mysqli_num_rows($result) > 0 ){
  $output = '<table border="1" width="100%" cellspacing="0" cellpadding="10px">
              <tr>
                <th width="60px">Id</th>
                <th>Studnet_Name</th>
                <th>Father_Name</th>
                <th>City</th>
                <th>Department</th>
                <th width="90px">Edit</th>
                <th width="90px">Delete</th>
              </tr>';

              while($row = mysqli_fetch_assoc($result)){
                $output .= "<tr><td align='center'>{$row["id"]}</td><td>{$row["Student_Name"]}</td><td>{$row["Father_Name"]}</td><td>{$row["City"]}</td><td>{$row["Department"]}</td><td align='center'><button class='edit-btn' data-eid='{$row["id"]}'>Edit</button></td><td align='center'><button Class='delete-btn' data-id='{$row["id"]}'>Delete</button></td></tr>";
              }
    $output .= "</table>";

    mysqli_close($conn);

    echo $output;
}else{
    echo "<h2>No Record Found.</h2>";
}

?>
