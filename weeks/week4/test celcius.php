<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celcius Form</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body class="celcius">
    <form action="" method="post">
        <fieldset>
<legend>Our Celcius Form</legend> 
<label>Enter your celcius Value</label> 
<input type="number" name="cel">

<input type="submit" value="Convert it">
        </fieldset>
    </form>

<p><a href="">Reset!</a></p>

<?php
// introducing the intval function
// use this function when you have a non-numeric error  displaying
if(isset($_POST['cel'])) {
$cel = intval($_POST['cel']);
$far = ($cel * 9/5) + 32;

if($cel ==NULL) {
echo 'Please enter your Celcius Value!';
} elseif($far <= 32) {
echo $far;
} elseif($far<= 40) {
echo $far;

} elseif($far<= 50) {
echo $far;
} else {
    echo $far;
}


} // end isset


?>
</body>
</html>