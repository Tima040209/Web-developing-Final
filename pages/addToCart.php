<?php
session_start();
$conn = new mysqli("localhost", "Tima", "tima12345", "yandex_market");

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : '';
$product_id = isset($_POST['product_id']) ? $_POST['product_id'] : '';

// Check if the product is already in the user's cart
$sql_check_cart = "SELECT * FROM cart WHERE user_id = ? AND product_id = ?";
$stmt_check_cart = $conn->prepare($sql_check_cart);
$stmt_check_cart->bind_param("ii", $user_id, $product_id);
$stmt_check_cart->execute();
$result_check_cart = $stmt_check_cart->get_result();

if ($result_check_cart->num_rows > 0) {
    // Product already exists in the cart, you can handle this case (e.g., show a message)
    echo 'window.alert("Товар уже есть в корзине")';
    header("Location: ".$_SERVER['HTTP_REFERER']);
    echo 'window.alert("Товар уже есть в корзине")';

} else {
    // Insert the product into the cart for the logged-in user
    $sql_insert_cart = "INSERT INTO cart (user_id, product_id) VALUES (?, ?)";
    $stmt_insert_cart = $conn->prepare($sql_insert_cart);
    $stmt_insert_cart->bind_param("ii", $user_id, $product_id);

    if ($stmt_insert_cart->execute()) {
        header("Location: ".$_SERVER['HTTP_REFERER']); // Redirect back to the previous page
        echo 'window.alert("Товар добавлен в корзину")';
        exit();
    } else {
        echo 'Error adding product to cart: ' . $stmt_insert_cart->error;
    }

    $stmt_insert_cart->close();
}

$stmt_check_cart->close();
$conn->close();
?>
