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

$sql = "SELECT * from Student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {
?>
   <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?=$row["Name"]?></h5>
      <p class="card-text"><?=$row["Major"]?><ul>
<?php
    $student_sql = "select Name, Major, Minor, GradYear from Student where StudentID=" . $row["StudentID"];
    $student_result = $conn->query($student_sql);
    
    while($student_row = $student_result->fetch_assoc()) {
      echo "<li>" . $student_row["GradYear"] . "</li>";
    }
?>
      </ul></p>
  </div>
    </div>
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
