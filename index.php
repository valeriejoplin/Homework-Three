<?php
require_once("header.php");
?>
  <body>
 <table class ="table table-striped>
  <thead>
   <tr>
      <th>ID</th>
      <th>Name</th>
   </tr>
  </thead>
  <tbody>
 <?php                
$servername = "localhost";
$username = "valeriej_user";
$password = "3vVv6zGYU2mf";
$dbname = "valerej_homework3";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
                
$sql = "SELECT instructor_id, instructor_name from instructor";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
  <tr>
    <td><?=$row["instructor_id"]?></td>
    <td><?=$row["instructor_name"]?></td>
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
    <h1>Hello, world!</h1>
    <form action="handlepost.php" method="get">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>
    
    <a class="btn btn-primary" href="page2.html" role="button">Page 2</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
            

