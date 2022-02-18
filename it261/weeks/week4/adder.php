<doctype html>
<html lang="en">
<head>
<title>My Adder Assignment</title>
<style>

</style>
</head>
<body>
<h1>Adder.php</h1>
 <form action="" method="post">
<br><label>Enter the first number:</label><input type="text" name="Num1"></br>
<br><label>Enter the second number:</label><input type="text" name="num2"></br>
<input type="submit" value="Add Em!!"> </form>

<?php
//adder-wrong.php

if (isset($_POST['Num1'])) {
$Num1 = $_POST['Num1'];
$num2 = $_POST['num2'];
$myTotal = $Num1 + $num2;
echo '<h2>You added '.$Num1.' and '.$num2.'</h2>';

echo '<br><p>and the answer is</p> <br>';
echo '<p style="color:red;">' . $myTotal . '!</p>';
// echo ' <p> and the answer is <br>

// <style='color: 'red'; > '.$myTotal.' "!"</p>;

echo '<p><a href="">Reset!</a></p>';
}

?>

</body>
</html>
