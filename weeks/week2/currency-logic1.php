<?php
// We have travelled the world and have different currency that we need to exchange
// canada - .80
// rubles 0.013
// pounds 1.37
// euros 1.14
// yen   0.0087
// we have 2000 canadian, rubles, etc

$canadian_rate = .80;
$canadian_us = 2000*$canadian_rate;

$rubles_rate = .013;
$rubles_us = 2000*$rubles_rate;

$pound_rate = 1.37;
$pound_us = 2000*$pound_rate;

$euros_rate = 1.37;
$euros_us = 2000*$euros_rate;

$yen_rate = 0.0087;
$yen_us = 2000*$yen_rate;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charest="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Test Currency Logic</title>
    <style>
    table {
        width:500px;
        margin:0 auto;
        border:1px solid red;
        border-collapse:collapse;
    }

th {
    font-size:2em;
    padding:10px;
}

td {
    border:1px solid red;
    padding:4px;
    font-size:1.2em;
}

h1, h2 {
    text-align:center;
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
    <td><?php echo number_format ($rubles_us, 2) ;?></td>
</tr>

<tr>
           <td>Euros</td>
           <td><?php echo number_format($euros_us, 2) ;?></td>
       </tr>

       <tr>
           <td>Canadian</td>
           <td><?php echo number_format($canadian_us, 2) ;?></td>
       </tr>

       <tr>
           <td>Pounds</td>
           <td><?php echo number_format($pound_us, 2) ;?></td>
       </tr>

       <tr>
           <td>Yen</td>
           <td><?php echo number_format($yen_us, 2) ;?></td>
       </tr>

   </table>
    </body> 


    
    <body>
   <table>
       <h1>Table 2</h1>
       <tr>
           <th>Currency</th>
           <th>US Dollars </th>
       </tr>

       <tr>
    <td>Rubles</td>
    <td><?php echo number_format ($rubles_us, 2) ;?> </td>
</tr>

<tr>
           <td>Euros</td>
           <td><?php echo number_format($euros_us, 2) ;?></td>
       </tr>

       <tr>
           <td>Canadian</td>
           <td><?php echo number_format($canadian_us, 2) ;?></td>
       </tr>

       <tr>
           <td>Pounds</td>
           <td><?php echo number_format($pound_us, 2) ;?></td>
       </tr>

       <tr>
           <td>Yen</td>
           <td><?php echo number_format($yen_us, 2) ;?></td>
       </tr>
</table>
</body>
</html> 