<?php
require_once("header.php");
?>
<body>
    <h1>Courses by Instructor</h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Prefix</th>
      <th>Number</th>
      <th>CourseID</th>
      <th>Instructor Name</th>
     
     
    </tr>
  </thead>
  <tbody>
    <?php
$servername = "localhost";
$username = "valeriej_databaseuser";
$password = "tI_*dXAL^r[(";
$dbname = "valeriej_homework3";

$conn = new mysqli($servername, $username, $password, $dbname);

   if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$iid = $_GET['id'];
$sql = "Select * From Sections s join Instructor i on s.InstructorID=i.InstructorID where i.InstructorID=" . $iid;
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {
?>
  <tr>
    <td><?=$row["SectionID"]?></td>
    <td><?=$row["Prefix"]?></td>
    <td><?=$row["Number"]?></td>
    <td><?=$row["CourseID"]?></td>
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
