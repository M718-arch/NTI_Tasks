<?php

$conn = mysqli_connect("localhost", "root", "", "users_task_8");

if ($conn) {
    echo "Database connected successfully!";
} else {
    echo "Connection failed!";
}

?>