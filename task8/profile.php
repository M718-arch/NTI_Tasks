<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

include "navbar.php";
?>

<div class="container mt-5">

<h1>Welcome <?php echo $_SESSION["username"]; ?></h1>

</div>

</body>
</html>