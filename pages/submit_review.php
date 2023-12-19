<?php
// Подключение к базе данных и другие необходимые настройки
session_start();
$conn = new mysqli("localhost", "Tima", "tima12345", "yandex_market");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_id = isset($_POST['product_id']) ? $_POST['product_id'] : null;
    $comment = isset($_POST['comment']) ? $_POST['comment'] : '';
    $rating = isset($_POST['rating']) ? $_POST['rating'] : '';
    $username = isset($_SESSION['username']) ? $_SESSION['username'] : ''; // Предполагается, что у вас есть механизм аутентификации

    // Валидация данных (можно добавить дополнительные проверки)

    // Запрос для вставки отзыва в базу данных
    $sql_insert_review = "INSERT INTO ProductReviews (product_id, username, comment, rating) VALUES (?, ?, ?, ?)";
    $stmt_insert_review = $conn->prepare($sql_insert_review);
    $stmt_insert_review->bind_param("issd", $product_id, $username, $comment, $rating);
    
    if ($stmt_insert_review->execute()) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    } else {
        echo "Ошибка при отправке отзыва: " . $stmt_insert_review->error;
    }

    $stmt_insert_review->close();
} else {
    echo "Доступ запрещен.";
}

// Закрытие подключения к базе данных
$conn->close();
?>