<?php
// this file will demonstrate for loops and in addition to                placing your php inside your HTML!!!
// celcius and fahrenheit

$celcius = 15;
$far = ($celcius *9/5) + 32;
?>
<!DOCTYPE html>
<html lang= "en">
    <head>
        <meta charset= "UTF-8" >
        <meta name= "viewport" content= "width=device-width" initial-scale= "1.0" >
        <meta http-equiv= "X-UA-Compatible"content= "ie-edge" >
        <title>Document </title>
        <style>

            * {
                padding:0;
                margin:0;
                box-sizing:border-box;
                border-collapse:collapse;
            }
                table {
                    width:300px;
                    margin:20px auto;
                    border:1px solid green;
            }

            td {
                border:1px solid green;

            }

            h1, h2 {
                text-align:center;
            }

        </style>
    </head>
    <body>
        <h1>My two tables using the forloop</h1> 
        <h2>Celcius/Fahrenheit Table</h2>
        <table>
<tr>
    <th>Celcius</th>
    <th>Fahrenheit</th>
</tr>
     <?php
    for($cel = 0; $cel <=100; $cel += 5) {
        $far = ($cel * 9/5) + 32;
        echo '<tr>';
        echo '<td>  '.$cel.' degrees      </td>';
        echo '<td>   '.$far.' degrees     </td>';
        echo '</tr>';
    }
     ?>   


</table>
<h2>Kilometer/Miles Table</h2>

    </body>
    </html> 