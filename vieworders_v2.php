<?php
$document_root = $_SERVER['DOCUMENT_ROOT'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Bob's Auto Parts - Customer Orders</title>
    <style type="text/css">
        table, th, td {
            border-collapse: collapse;
            border: 1px solid black;
            padding: 6px;
        }
        th {
            background: #ccccff;
        }
    </style>
</head>
<body>
<h1>Steven Halla</h1>
<h1>Bob's Auto Parts</h1>
<h2>Customer Orders</h2>
<?php
$filename = $document_root . '/orders.txt';

if (file_exists($filename)) {
    $orders = file($filename);
    $number_of_orders = count($orders);

    if ($number_of_orders == 0) {
        echo "<p><strong>No orders pending.<br />
                Please try again later.</strong></p>";
    } else {
        echo "<table>\n";
        echo "<tr>
                  <th>Order Date</th>
                  <th>Tires</th>
                  <th>Oil</th>
                  <th>Spark Plugs</th>
                  <th>GPS Units</th>
                  <th>Total</th>
                  <th>Address</th>
                </tr>";

        foreach ($orders as $order) {
            $line = explode("\t", $order);

            echo "<tr>
                    <td>".$line[0]."</td>
                    <td style=\"text-align: right;\">".intval($line[1])."</td>
                    <td style=\"text-align: right;\">".intval($line[2])."</td>    
                    <td style=\"text-align: right;\">".intval($line[3])."</td>
                    <td style=\"text-align: right;\">".intval($line[4])."</td>
                    <td style=\"text-align: right;\">".$line[5]."</td>
                    <td>".htmlspecialchars($line[6])."</td>
                </tr>";
        }
        echo "</table>";
    }
} else {
    echo "<p><strong>Order file does not exist.<br />
              Please check the path and file permissions.</strong></p>";
}
?>
</body>
</html>
