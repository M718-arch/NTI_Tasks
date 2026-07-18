<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

$conn = mysqli_connect("localhost", "root", "", "users_task_8");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST["register"])) {

    $fullname = $_POST["fullname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];
    $password = $_POST["password"];

    $sql = "INSERT INTO users (fullname, username, email, phone, gender, dob, password)
            VALUES ('$fullname',
    '$username',
    '$email',
    '$phone',
    '$gender',
    '$dob',
    '$password')";

    mysqli_query($conn, $sql);

    header("Location: login.php");
    exit();
}

include "navbar.php";
?>

<div class="container mt-5 mb-5">

    <div class="card shadow mx-auto" style="max-width:700px;">

        <div class="card-header bg-primary text-white text-center">
            <h2>Create Your Account</h2>
            <p class="mb-0">Please fill in the information below.</p>
        </div>

        <div class="card-body">

            <form method="post">

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Full Name</label>
                        <input
                            type="text"
                            class="form-control"
                            name="fullname"
                            minlength="3"
                            maxlength="50"
                            required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Username</label>
                        <input
                            type="text"
                            class="form-control"
                            name="username"
                            minlength="4"
                            maxlength="20"
                            pattern="[A-Za-z0-9_]+"
                            title="Username can contain letters, numbers and underscore only."
                            required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Email Address</label>
                        <input
                            type="email"
                            class="form-control"
                            name="email"
                            placeholder="example@gmail.com"
                            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                            title="Enter a valid email address."
                            required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Phone Number</label>
                        <input
                            type="tel"
                            class="form-control"
                            name="phone"
                            placeholder="01XXXXXXXXX"
                            pattern="01[0-2,5]{1}[0-9]{8}"
                            title="Enter a valid Egyptian phone number."
                            required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Gender</label>

                        <select class="form-select" name="gender" required>
                            <option value="">Choose...</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Date of Birth</label>
                        <input
                            type="date"
                            class="form-control"
                            name="dob"
                            required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Password</label>
                        <input
                            type="password"
                            class="form-control"
                            name="password"
                            minlength="8"
                            pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&_#])[A-Za-z\d@$!%*?&_#]{8,}$"
                            title="Must be at least 8 characters, contain uppercase, lowercase, number and special character."
                            required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Confirm Password</label>
                        <input
                            type="password"
                            class="form-control"
                            name="confirm"
                            required>
                    </div>

                </div>

                <div class="form-check mb-4">
                    <input
                        class="form-check-input"
                        type="checkbox"
                        required>

                    <label class="form-check-label">
                        I agree to the Terms & Conditions
                    </label>
                </div>

                <button
                    class="btn btn-primary w-100"
                    type="submit"
                    name="register">

                    Create Account

                </button>

            </form>

        </div>

    </div>

</div>

</body>
</html>
