<?php
require_once("header.php");
?>
<body>
    <h1>Sections</h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Prefix</th>
      <th>Number</th>
      <th>Section</th>
      <th>Instructor</th>
    </tr>
  </thead>
  <tbody>
    <?php
$servername = "localhost";
$username = "valeriej_databaseuser";
$password = "tI_*dXAL^r[(";
$dbname = "valeriej_homework3";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "select SectionID, Section_Number, i.Name, c.Prefix, c.Number from Section s join Instructor i on i.InstructorID = s.InstructorID join Course c on c.CourseID = s.CourseID";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
  <tr>
    <td><?=$row["SectionID"]?></td>
    <td><?=$row["Prefix"]?></td>
    <td><?=$row["Number"]?></td>
    <td><?=$row["Section_Number"]?></td>
    <td><?=$row["Instructor_Name"]?></td>
  </tr>
<?php
  }
} else {
  echo "0 results";
}
$conn->close();
?>
  </tbody>
    </table>
    
 <?php
    require_once("footer.php");
  ?>
    
