<?php
session_start();
$id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : '';
$conn = new mysqli("localhost", "Tima", "tima12345", "yandex_market");

if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

if (isset($_POST['creditcard']) && isset($_POST['card'])) {
    $creditcard = $_POST["creditcard"];
    $card = isset($_POST["card"]) ? $_POST["card"] : "Не выбрано";


    if (isset($_POST['creditcard']) && isset($_POST['card'])) {
        $creditcard = $_POST["creditcard"];
        $card = isset($_POST["card"]) ? $_POST["card"] : "Не выбрано";

        if (validateCreditCard($creditcard, $card) && luhnAlgorithmCheck($creditcard)) {
            $userId = $id; 
            $product_Id = $_POST['product_id'];

            $sqlCreditCards = "INSERT INTO credit_cards (user_id, card_number, card_type) VALUES (?, ?, ?)";
            $stmtCreditCards = $conn->prepare($sqlCreditCards);
            $stmtCreditCards->bind_param("iss", $userId, $creditcard, $card);

            if ($stmtCreditCards->execute()) {
                $sqlCart = "INSERT INTO purchases (user_id, product_id) VALUES (?, ?)";
                $stmtCart = $conn->prepare($sqlCart);
                $stmtCart->bind_param("ii", $userId, $product_Id);

                if ($stmtCart->execute()) {
                    header("location: purchases.php");
                }
                else {
                    echo "Ошибка при обновлении данных мест в билетах: " . $stmtUpdateSeats->error;
                }
                $stmtCart->close();
            } else {
                echo "Ошибка при сохранении данных: " . $stmtCreditCards->error;
            }

            $stmtCreditCards->close();
        } else {
            echo "Неверный номер кредитной карты. Пожалуйста, введите действительный 16-значный номер Visa или MasterCard.";
        }

    }
} else {
    echo "Пожалуйста, заполните все поля. <a href=buyagrade.html>Попробуй еще</a>";
}

function validateCreditCard($creditcard, $cardType) {
    $visaPattern = '/^4[0-9]{15}$/';
    $masterCardPattern = '/^5[0-9]{15}$/';
    $creditcard = str_replace("-", "", $creditcard);
    if (strlen($creditcard) !== 16) {
        return false;
    }
    if ($cardType === "Visa") {
        return preg_match($visaPattern, $creditcard);
    } elseif ($cardType === "Mastercard") {
        return preg_match($masterCardPattern, $creditcard);
    }

    return false;
}

function luhnAlgorithmCheck($number) {
    $number = strrev(preg_replace('/[^\d]/', '', $number));
    $sum = 0;
    for ($i = 0, $j = strlen($number); $i < $j; $i++) {
        $digit = (int)$number[$i];
        if ($i % 2 === 1) {
            $digit *= 2;
            if ($digit > 9) {
                $digit -= 9;
            }
        }
        $sum += $digit;
    }
    return $sum % 10 === 0;
}

$conn->close();
?>
