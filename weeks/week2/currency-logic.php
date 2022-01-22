<?php
// We have travelled the world and have different currency that we need to exchange
// canada - .80
// rubles 0.013
// pounds 1.37
// euros 1.14
// yen   0.0087
// we have 2000 canadian, rubles, etc

$canadian_rate = .80;
$canadian_us = 2000/$canadian_rate;

$rubles_rate = .013;
$rubles_us = 2000/$rubles_rate;

$pound_rate = 1.37;
$pound_us = 2000/$pound_rate;

$eurose_rate = 1.37;
$eurose_us = 2000/$euros_rate;

$yen_rate = 1.37;
$yen_us = 2000/$yen_rate;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charest="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Currency Logic</title>
    <style>
table {
    width:500px;
    margin:0 auto;
    border:1px solid red;
    border-collapse:collapse;
}

    </style>
</head>
<body>
<table>
    <tr>
    <th>Currency</th>
    <th>US Dollars</th>
</tr>

<tr>
    <td>Rubles</td>
    <td><?php echo number_format ($rubles_us, 2); ?> </td>
</tr>
</table>
</body>
</html>