<?php
$auto_parts = array(
    array('title' => 'Brakes', 'picture' => 'brakes.png'),
    array('title' => 'Headlight', 'picture' => 'headlight.png'),
    array('title' => 'Spark Plug', 'picture' => 'spark_plug.png'),
    array('title' => 'Steering Wheel', 'picture' => 'steering_wheel.png'),
    array('title' => 'Tire', 'picture' => 'tire.png'),
    array('title' => 'Wiper Blade', 'picture' => 'wiper_blade.png')
);

shuffle($auto_parts);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Bob's Auto Parts</title>
    <style>
        td {
            width: 16%;
            text-align: center;
            vertical-align: top;
            padding: 10px;
        }
        img {
            max-width: 100%;
            max-height: 100px;
        }
    </style>
</head>
<body>
<h1>Steven Halla</h1>
<h1>Bob's Auto Parts</h1>
<table border="1" style="width: 100%;">
    <tr>
        <?php
        foreach ($auto_parts as $part) {
            echo "<td>";
            echo "<strong>" . $part['title'] . "</strong><br>"; // Title above the image
            echo "<img src=\"" . $part['picture'] . "\" alt=\"" . $part['title'] . "\">";
            echo "</td>";
        }
        ?>
    </tr>
</table>
</body>
</html>
