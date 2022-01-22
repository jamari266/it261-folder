<?php
// Playing with out date function!!!

echo date("L") . "<br>";
echo date("L, F j, Y h:i")
// day, month date year time
date_default_timezone_set('America/Los_Angles');
echo date("L") . "<br>";
echo date("l, F j, Y h:i");

echo '<br>';
$our_date = date('H:i ');
echo $our_date;
if($our_date ,= 11) {
    echo '<h1>Good Morning!</h2';
} elseif($our_date <= 17) {
    echo 'Good Afternoon';
} else {
    ech 'Good evening';
}
