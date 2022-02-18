<?php
// introduction to our variables
// as well as syntax!!!
// What is a varible ?? a variable is a container


$name = 'Olga';
// the infromation between the single quotes is a string
echo $name;
echo '<br>';
$name = 'Anthony';
echo $name;
echo '<br>';
echo 'My frist name is $name';
echo '<br>';
echo "My frist name is $name";
echo '<br>';
// I like single quotes because later on we will be placing php inside out hmtl values <a href=""
echo 'My frist name is '.$name.' ';
echo '<br>';
$temp = 45;
// another data type is integers
echo 'The temperature today was ' .$temp. ' degrees ';
echo '<br>';

$body_temp = 98.6;
// anything with a decimal is called a float
echo $body_temp; 


// another data type is boolean = true or false
// another data type is NULL
// <select> <option value="" NULL> Select one ,</option> </select>

$vehicle = 'truck'; 
echo '<br>';
$x = 20; 
$y = 30;
$z = $x * $y;
echo $z;

// circumference of a circle 2 pie r
echo '<br>';
$pie = 3.14;
$radious = 10;
$circumfrence = (2 * $pie) * $radius;
echo $circumfrence;

echo '<br>';

// $celcius = 4; 
$far = ($celcius * 9/5) + 32;
$friendly_far = floor($far);
// celi is a function  that will round up 
// floor is a function that will round down 
// echo $friendly_far; 

$celcius = 4; 
$far = ($celcius * 9/5) + 32;

// celi is a function  that will round up 
// floor is a function that will round down 
echo ceil($far);
echo '<br>';
$money = 10330;
$divide = 71;
$amount = $money / $divide; 
echo 'I now have <b> $'.number_format($smount, 2).'</b>'; 
// number_format($amount, 2)
echo '<br>';
$friendly_amount = number_format ($amount, 2);
echo ' <p> I now have <b> $' .$friendly_amount. ' </b>  dollars! </p>'; 
?>