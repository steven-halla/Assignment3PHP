<?php
$document_root = $_SERVER['DOCUMENT_ROOT'];
$filepath = $document_root . '/orders.txt';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Bob's Auto Parts - Customer Orders</title>
</head>
<body>
<h1>Bob's Auto Parts</h1>
<h2>Customer Orders</h2>
<?php
if (file_exists($filepath)) {
    $orders = file($filepath);
    $number_of_orders = count($orders);
    if ($number_of_orders == 0) {
        echo "<p><strong>No orders pending.<br />
              Please try again later.</strong></p>";
    } else {
        foreach ($orders as $order) {
            echo htmlspecialchars($order) . "<br />";
        }
    }
} else {
    echo "<p><strong>Order file does not exist.<br />
            Please try again later.</strong></p>";
}
?>
</body>
</html>
