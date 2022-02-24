<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Travel Calculator</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body class="<?php echo $body; ?>">
    <h1>My Travel Calculator</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
   <label>Name</label>
   <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name'])  ;?>">
    
   <label>Total miles driving?</label>
   <input type="number" name="miles" value="<?php if(isset($_POST['miles'])) echo htmlspecialchars($_POST['miles'])  ;?>">

   <label>How fast do you typically drive?</label>
   <input type="number" name="speed" value="<?php if(isset($_POST['speed'])) echo htmlspecialchars($_POST['speed'])  ;?>">

   <label>How many hours per day do you plan on driving?</label>
   <input type="number" name="hours" value="<?php if(isset($_POST['hours'])) echo htmlspecialchars($_POST['hours'])  ;?>">
<!--
rubles = 0.013;
canadian = .80
pounds = 1.37;
euros = 1.14;
yen = 0.0087; -->
<!-- the logic behind the stickiness in our radio button is if post currency is set and if post currency = value, echo checked = checked -->
<label>Price of gas</label>
<ul>
<li>
<input type="radio" name="price" value="3.00"<?php if(isset($_POST['price']) && $_POST['price'] == 3.00 ) echo 'checked = "checked" ' ;?>>$3.00
</li>

<li>
<input type="radio" name="price" value="3.50"<?php if(isset($_POST['price']) && $_POST['price'] == 3.50 ) echo 'checked = "checked" ' ;?>>$3.50
</li>

<li>
<input type="radio" name="price" value="4.00"<?php if(isset($_POST['price']) && $_POST['price'] == 4.00 ) echo 'checked = "checked" ' ;?>>$4.00
</li>



</ul>
<h3>Fuel efficiency</h3>
<!-- checkbox works the same way as a radio button -->
<!-- you cannot select "select One" -->
<select name="fuel">
<option value="" NULL <?php if(isset($_POST['fuel']) && $_POST['fuel'] == NULL) echo 'selected = "unselected" ' ;?>>Select one </option>

<option value="10"  <?php if(isset($_POST['fuel']) && $_POST['fuel'] == '10') echo 'selected = "selected" ' ;?>>@ 10mpg </option>

<option value="20"  <?php if(isset($_POST['fuel']) && $_POST['fuel'] == '20') echo 'selected = "selected" ' ;?>>@ 20mpg </option>

<option value="30" <?php if(isset($_POST['fuel']) && $_POST['fuel'] == '30') echo 'selected = "selected" ' ;?>>@ 30mpg </option>

<option value="40"  <?php if(isset($_POST['fuel']) && $_POST['fuel'] == '40') echo 'selected = "selected" ' ;?>>@ 40mpg</option>

</select>


<input type="submit" value="Calculate">
</form>
<button><a href="">Reset</a?>
</button>
<?php
//if name is not filled out, give me a message 
// if each of ther input field are not filled out, give me a specific message
//name, email, amount, currency, bank
// $_SERVER['REQUEST_METHOD']
// canadian = .80
// rubles = 0.013;
// pounds = 1.37;
// euros = 1.14;
// yen = 0.0087;

if($_SERVER['REQUEST_METHOD'] == 'POST') {

if(empty($_POST['name'])) {
    echo 'Please fill out your name!';
}

if(empty($_POST['miles'])) {
    echo 'Please fill out your miles';
}

if(empty($_POST['speed'])) {
    echo 'Please fill out your speed! A "zero" value will not work!';
}

}
if(empty($_POST['hours'])) {
    echo 'Please fill out your price!';
}

if($_POST['fuel'] == NULL) {
    echo 'Please choose your fuel institution';
}
// name, email, amount, currency bank
if(isset($_POST['name'],
$_POST['miles'],
$_POST['speed'],
$_POST['hours'],
$_POST['price'],
$_POST['fuel'])) {

$name = $_POST['name'];
$miles = $_POST['miles'];
$speed = $_POST['speed'];
$hours = $_POST['hours'];
$price = $_POST['price'];
$fuel = $_POST['fuel'];

 
$total = $miles /$speed; 

$days = $total / $hours;

$gallons = $miles / $fuel;

$dollars = $gallons * $price;

if(!empty($name && $miles && $speed && $hours && $fuel)) {

    echo ' 
    <div class="box">
    <h2>Hello, <b> '.$name.'</b>!</h2>
    <p>you will be travelling a total of <b> '.$total.' </b>,hours!</p>
    <p>taking '.$days.' days </p>
    <p>And, this will equal to '.$gallons.' gallons of gas, </p>
    <p>, costing you '.$dollars.' dollars.</p>
    </div>

';


} // end empty 

} // end isset







// close Server



?>
</body>
</html>