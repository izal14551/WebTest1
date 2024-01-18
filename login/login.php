<?php
session_start();
include "koneksi.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT id, email, password FROM tb_login WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['email'] = $row['email'];
            header("Location: /WebTest/index.php");
            exit();
        } else {
            $_SESSION['login_error'] = "Invalid password";
            header("Location: login.html");
            exit();
        }
    } else {
        $_SESSION['login_error'] = "User not found";
        header("Location: login.html");
        exit();
    }
}

$conn->close();
?>
