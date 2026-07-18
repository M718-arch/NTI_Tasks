<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Task 8</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
    <div class="container">

        <a class="navbar-brand fw-bold" href="profile.php">Task 8</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar">

            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="profile.php">Home</a>
                </li>

                <?php
                if(isset($_SESSION["username"]))
                {
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="profile.php">Profile</a>
                </li>
                <?php
                }
                ?>
            </ul>

            <?php
            if(isset($_SESSION["username"]))
            {
            ?>

            <span class="text-white me-3">
                Welcome, <b><?php echo $_SESSION["username"]; ?></b>
            </span>

            <a href="logout.php" class="btn btn-light">
                Logout
            </a>

            <?php
            }
            else
            {
            ?>

            <a href="login.php" class="btn btn-outline-light me-2">
                Login
            </a>

            <a href="register.php" class="btn btn-warning">
                Register
            </a>

            <?php
            }
            ?>

        </div>

    </div>
</nav>