<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootswatch/dist/lux/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Student Manager</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Student.php">Student List</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Section.php">Section List</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="logout.php">Log out</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    


    <div class="container mt-5">
        <h1>Welcome to the Student Manager</h1>
        <p>This is a simple application to manage students and sections.</p>
        <a href="Student.php" class="btn btn-primary">Access to Students</a>
        <a href="Section.php" class="btn btn-secondary">Acces to Sections</a>
    </body>
</html>