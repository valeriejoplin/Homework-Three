<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
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
                

            

