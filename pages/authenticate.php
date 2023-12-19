<?php
session_start();

$conn = new mysqli("localhost", "Tima", "tima12345", "yandex_market");

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}
$email = $_POST['email'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT user_id, username, password,yandex_subscription FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->bind_result($id, $username, $hashed_password,$yandex_subscription);
$stmt->fetch();
$stmt->close();

if (password_verify($password, $hashed_password)) {
    $_SESSION['user_id'] = $id;
    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;
    $_SESSION['yandex']=$yandex_subscription;
    $_SESSION["login"] = "1";
    $_SESSION["success_message"] = "Login successful!";

    header("location: main.php");
} else {
    $_SESSION["error_message"] = "Invalid email or password.";
    header("location: login.html?err=1");
}
$conn->close();
?>
