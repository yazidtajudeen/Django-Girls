<?php
session_start(); // Ensure the session is started
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars(trim($_POST['username']));
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));

    $checkEmailStmt = $conn->prepare("SELECT email FROM user WHERE email = ?");
    $checkEmailStmt->bind_param("s", $email);
    $checkEmailStmt->execute();
    $checkEmailStmt->store_result();

    if ($checkEmailStmt->num_rows > 0) {
        $_SESSION['error'] = "Error: Email already exists.";
    } else {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $conn->prepare("INSERT INTO user (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $hashedPassword);

        if ($stmt->execute()) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "User registered successfully!";
            header("Location: index.php");
            exit();
        } else {
            $_SESSION['error'] = "Error: " . $stmt->error;
        }

        $stmt->close();
    }

    $checkEmailStmt->close();
    $conn->close();
}