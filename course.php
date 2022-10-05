<?php
require_once("header.php");
?>
 <body>
<table class="table table-striped">
  <thead>
    <tr>
      <th>CourseID</th>
      <th>Prefix</th>
      <th>Number</th>
      <th>Description</th>
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

$sql = "SELECT * from Course c";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {
?>
  <tr>
    <td><?=$row["CourseID"]?></td>  
    <td><?=$row["Prefix"]?></td>  
    <td><?=$row["Number"]?></td>
    <td><?=$row["Description"]?></td>
    <td>
    <form method "post" action="sections.php">
    <input type="hidden" name="CourseID" value="<?=$row["CourseID"]?>"/>
    <input type="submit" value="View Sections" />
    </form>
    </td>
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
    
