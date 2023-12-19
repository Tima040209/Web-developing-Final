
<?php
session_start();

$conn = new mysqli("localhost", "Tima", "tima12345", "yandex_market");


if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : '';

$sql_update_subscription = "UPDATE Users SET yandex_subscription = 1 WHERE user_id = ?";
$stmt_update_subscription = $conn->prepare($sql_update_subscription);
$stmt_update_subscription->bind_param("i", $user_id);

if ($stmt_update_subscription->execute()) {
    header("Location: ".$_SERVER['HTTP_REFERER']); // Перенаправление пользователя обратно на страницу профиля
    exit();
} else {
    // Ошибка при обновлении
    echo "Ошибка при обновлении подписки: " . $stmt_update_subscription->error;
}

// Закрытие подключения к базе данных
$stmt_update_subscription->close();
$conn->close();
?>