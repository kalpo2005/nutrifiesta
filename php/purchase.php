<?php
session_start();
require_once __DIR__ . '/../Admin/inc/db-config.php';


// Now safe to handle order
if (isset($_POST['purchase'])) {
    $fullName = $_POST['Full_Name'];
    $phone = $_POST['Phone_Number'];
    $address = $_POST['Address'];
    $payMode = $_POST['Pay_Mode'];

    // Insert into orders table
    $stmt = $con->prepare("INSERT INTO orders (full_name, phone_number, address, pay_mode) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $fullName, $phone, $address, $payMode);
    $stmt->execute();
    $order_id = $stmt->insert_id;
    $stmt->close();

    // Insert order items
    foreach ($_SESSION['cart'] as $item) {
        $itemName = $item['Item_Name'];
        $price = $item['Price'];
        $quantity = $item['Quantity'];

        $stmt = $con->prepare("INSERT INTO order_items (order_id, item_name, price, quantity) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("isdi", $order_id, $itemName, $price, $quantity);
        $stmt->execute();
        $stmt->close();
    }

    // Clear cart
    unset($_SESSION['cart']);

    echo "
    <script>
        alert('Order Placed Successfully!');
        window.location.href = '../Cart.php';
    </script>
    ";
} else {
    echo "
    <script>
        alert('Something went wrong!');
        window.location.href = '../Cart.php';
    </script>
    ";
}
?>
