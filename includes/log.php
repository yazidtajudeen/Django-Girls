<?php
require 'db.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));


    $stmt = $conn->prepare("SELECT password FROM user WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($hashedPassword);
        $stmt->fetch();


        if (password_verify($password, $hashedPassword)) {
            $_SESSION['email'] = $email;
            $_SESSION['success'] = "Login successful!";
            header("Location: index.php");
            exit();
        } else {
            $_SESSION['error'] = "Error: Incorrect password.";
        }
    } else {
        $_SESSION['error'] = "Error: Email not found.";
    }

    $stmt->close();
    $conn->close();
}