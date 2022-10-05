<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Homework 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
 <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">
          <div class="logo-image">
            <img src="data:image/png;base64,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" class="img-fluid">
      </div>
      </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="instructors.php">Instructors</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="course.php">Courses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="student.php">Students</a>
        </li>
      <li class="nav-item">
          <a class="nav-link" href="sections.php">Sections</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
