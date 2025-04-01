<?php
 include_once "autoload.php"; 


if (isset($_GET['id']) && is_numeric($_GET['id'])) { 
    $id = intval($_GET['id']);
   
    $bdd= ConnexionBDStudent::getInstance();

    $stmt = $bdd->prepare("SELECT * FROM students WHERE student_id = :id"); 
    $stmt->bindParam(':id', $id, PDO::PARAM_INT); 
    $stmt->execute();
    $etudiant = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$etudiant) {
        die("Étudiant non trouvé.");
    }
    } else {
    die("ID invalide.");
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootswatch/dist/Lux/bootstrap.css">
    <title>Students Details</title>
</head>
<body>
  
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="home.php">Student Manager</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="home.php">Home</a>
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





<div class="card text-center">
  <div class="card-header">
  Student Details
  </div>
  <div class="card-body">
    <p class="card-text">Student Name:</strong> <?= htmlspecialchars($etudiant['student_name']) . "<br>" ?></p>
    <p class="card-text">Student Birthday:</strong> <?= htmlspecialchars($etudiant['student_birthday']) . "<br>" ?></p>
    <p class="card-text">Filière:</strong> <?= htmlspecialchars($etudiant['filiere']) ?></p> 

    
    <a href="Student.php" class="btn btn-info">Student list</a>
  </div>
</div>


    

</body>
</html>