<?php

echo '<h2>What will be the answer???</h2>';
$a = 0;
echo 'a is '.is_null($a).'';

echo '<h2>What will be the answer?</h2>';
$b = null;
echo 'b is '.is_null($b).'';

echo '<h2></h2>';
$c = "null";
echo 'c is '.is_null($c).'';

echo '<h2></h2>';
$d = NULL;
echo 'd is '.is_null($d).'';

echo '<h2></h2>';
$e = "";
echo 'e is '.is_null($e).'';
