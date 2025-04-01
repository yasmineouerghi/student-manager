<?php
session_start();
// Check if the user is logged in, if not redirect to login page
include_once "autoload.php"; 
$bdd= ConnexionBDSection::getInstance();
$query="select * from section";
$response=$bdd->query($query);
$sections=$response->fetchAll(PDO::FETCH_OBJ); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootswatch/dist/Lux/bootstrap.css">
    <title>Sections</title>
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
                <a class="nav-link" href="logout.php">Log out</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    
   






<table class="table table-striped">
        <tr>
            <th>Section ID</th>
            <th>Designation</th>
            <th>description</th>
            <th>Actions</th>
        </tr>
        
        <?php foreach($sections as $section) { ?>
       
        <tr>
            <td><?= $section->id  ?></td>
            <td> <?= $section->designation?></td>
            <td> <?= $section->description?></td>
            <td>
     
            <?php
            if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {?>
           <a href="sectionlist.php"> <img style="width:30px ; height:30px" src="icons\list-ul-alt-svgrepo-com.svg" alt="infos"></a>
            
 <?php } else { ?>
  <div>
     <a href="sectionlist.php"> <img style="width:30px ; height:30px" src="icons\list-ul-alt-svgrepo-com.svg" alt="infos"></a>
     <a href="">  <img  style="width:30px ; height:30px" src="icons\add-circle-svgrepo-com.svg" alt=""> </a>
     <a href=""><img   style="width:30px ; height:30px" src="icons\update-svgrepo-com.svg" alt=""> </a>
     <a href=""> <img  style="width:30px ; height:30px" src="icons\delete-svgrepo-com.svg" alt=""> </a>
    </div>
    </td>
    </tr>
               
  <?php } ?>
        <?php } ?>
        
    
    
       
      

    </table>


    
</body>
</html>
