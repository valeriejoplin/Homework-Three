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

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * from Student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
   <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?=$row["Name"]?></h5>
      <p class="card-text"><ul>
<?php
    $student_sql = "select * from Student st where st.StudentID=" . $row["StudentID"];
    $student_result = $conn->query($section_sql);
    
    while($section_row = $student_result->fetch_assoc()) {
      echo "<li>" . $section_row["Major"] . "</li>";
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
