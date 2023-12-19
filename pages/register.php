<?php
$conn = new mysqli("localhost", "Tima", "tima12345", "yandex_market");

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
$subs = 0;  // Use 0 for false
$stmt = $conn->prepare("INSERT INTO users (username, yandex_subscription, email, password) VALUES (?, ?, ?, ?)");
$stmt->bind_param("siss", $username, $subs, $email, $password);

if ($stmt->execute()) {
    header("location: login.html");
} else {
    echo "Ошибка регистрации: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
