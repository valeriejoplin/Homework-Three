<?php
require_once("header.php")
?>
  <h1>Students</h1>
<div class="card-group">
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
$sql = "SELECT * from Student WHERE StudentID=" . $iid;
$result = $conn->query($sql);

if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {
?>
   <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?=$row["Name"]?></h5>
      <p class="card-text"><?=$row["Major"]?><ul>

<?php
  }
} else {
  echo "0 results";
}
$conn->close();
?>
  </card-group>

<?php
require_once("footer.php")
?>
