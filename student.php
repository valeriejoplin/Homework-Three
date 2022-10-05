<?php
require_once("header.php");
?>
 <body>
<table class="table table-striped">
  <thead>
    <tr>
      <th>StudentID</th>
      <th>Name</th>
      <th>Major</th>
      <th>Minor</th>
      <th>Graduation Date</th>
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

$sql = "SELECT StudentID, Name, Major, Minor, GradYear from Student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {
?>
  <tr>
    <td><?=$row["StudentID"]?></td>  
    <td><a href="student-cards.php?id=<?=$row["StudentID"]?>"><?=$row["Name"]?></a></td>
    <td><?=$row["Major"]?></td>
    <td><?=$row["Minor"]?></td>
    <td><?=$row["GradYear"]?></td>
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
