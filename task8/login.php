<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

$conn = mysqli_connect("localhost", "root", "", "users_task_8");

$error = "";

if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

        $_SESSION["username"] = $username;

        header("Location: profile.php");
        exit();

    } else {

        $error = "Invalid username or password.";

    }
}

include "navbar.php";
?>

<div class="container mt-5" style="max-width:500px;">

<h2 class="mb-4">Login</h2>

<?php
if ($error != "") {
    echo "<div class='alert alert-danger'>$error</div>";
}
?>

<form method="post">

<div class="mb-3">
<label>Username</label>
<input type="text" name="username" class="form-control" required>
</div>

<div class="mb-3">
<label>Password</label>
<input type="password" name="password" class="form-control" required>
</div>

<button class="btn btn-primary w-100" name="login">Login</button>

</form>

</div>

</body>
</html>