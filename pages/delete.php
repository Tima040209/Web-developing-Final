<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_id'])) {
    $productId = $_POST['product_id'];
    $conn = new mysqli("localhost", "Tima", "tima12345", "yandex_market");
    echo $productId;
    if ($conn->connect_error) {
        die("Ошибка подключения: " . $conn->connect_error);
    }

    $deleteSql = "DELETE FROM cart WHERE id = ?";
    $stmtDelete = $conn->prepare($deleteSql);
    $stmtDelete->bind_param("i", $productId);

    if ($stmtDelete->execute()) {
        echo "Билет";
        header("location:cart.php");
    } else {
        echo "Ошибка при удалении билета из корзины: " . $stmtDelete->error;
    }

    $stmtDelete->close();
    $conn->close();
} else {
    echo "Ошибка: Не удалось получить идентификатор билета.";
}
?>
