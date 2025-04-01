<?php
session_start();
include_once "autoload.php"; 
$bdd= ConnexionBDUser::getInstance();
$query="select * from utilisateurs";
$response=$bdd->query($query);
$users=$response->fetchAll(PDO::FETCH_OBJ); 


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user_email = $_POST['user_email'];
    $user_username= $_POST['user_username'];

    // Check if the user exists (by email or username)
    $stmt = $bdd->prepare("SELECT * FROM utilisateurs WHERE email = ? and username = ?");
    $stmt->execute([$user_email, $user_username]);
    $user = $stmt->fetch( PDO::FETCH_ASSOC);

    if (!$user) {
        die("User not found!");
    }

    // Log in the user
    $_SESSION['user'] = $user['username'];
   header("Location: home.php");
    exit();
}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign In</title>
    <link rel="stylesheet" href="node_modules/bootswatch/dist/Lux/bootstrap.min.css">
<body class="d-flex align-items-center justify-content-center vh-100 bg-light">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow-lg p-4">
                <h3 class="text-center mb-3">Sign In To Acces Student Track</h3>

                <form action="index.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Email </label>
                        <input type="text" name="user_email" class="form-control" placeholder="Enter your email  " required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">UserName </label>
                        <input type="text" name="user_username" class="form-control" placeholder="Enter your username " required>
                    </div>
                
                
                    <button type="submit" class="btn btn-primary w-100">Sign In</button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>

