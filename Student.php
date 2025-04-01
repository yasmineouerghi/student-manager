<?php
include_once "autoload.php"; 
$bdd= ConnexionBDStudent::getInstance();
$query="select * from students";
$response=$bdd->query($query);
$students=$response->fetchAll(PDO::FETCH_OBJ); //tableau associatif contenant les infos des etudiants
//var_dump($students);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootswatch/dist/Lux/bootstrap.css">
    <title>Students</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="homr.php">Student Manager</a>
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
    
   






<table class="table table-striped">
        <tr>
            <th>Student ID</th>
            <th>Name</th>
            <th>Birthday</th>
            <th>Actions</th>
        </tr>
        
        <?php foreach($students as $student) { ?>
       
        <tr>
            <td><?= $student->student_id  ?></td>
            <td> <?= $student->student_name?></td>
            <td> <?= $student->student_birthday?></td>
            <td>
            <a href="DetailStudent.php?id=<?= $student->student_id ?>">
                <div>
                <img style="width:30px ; height:30px" src="icons\info-circle-svgrepo-com (1).svg" alt="infos"></a>
                <img  style="width:30px ; height:30px" src="icons\add-circle-svgrepo-com.svg" alt="">
                <img   style="width:30px ; height:30px" src="icons\update-svgrepo-com.svg" alt="">
                <img  style="width:30px ; height:30px" src="icons\delete-svgrepo-com.svg" alt="">
            </div>
            </td>

               
        </tr>
    
       
        <?php } ?>


    </table>


    
</body>
</html>



 
