
<?php
include ('includes/header.php');


?>
    
        <div id= "wrapper" >
        

        <main>
        <h1><?php echo $headline ;?></h1> 
        <h2>Welcome to Daily Page</h2> 
        <p>Here comes my specials</p>

        <?php
// class coffee exercise
// it today is thursday, it will be pumpkin latte day
// we will start with the isset() function
// then we will introduce our first GLOBAL variable
// our switch 

// $variable = 'Life is good!';
// if(isset($variable)) {
//    echo 'Yippy-skippy!!!';
// } else {
//    echo 'Not';
// }

// starting the switch 
// if something is set, $today , then all is well
// else, today is TODAY 

// GLOBAL VARIABLES are capitalized and start with $_GET


if(isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

// switch

switch($today) {
case 'Thursday' :
$coffee = '<h2>Thursday is our Cap Day!</h2>';
$pic = 'cap.jpg';
$alt = 'cappacino';
$content = 'A <b>cappuccino</b> is an espresso-based coffee drink that originated in Austria with later development taking place in Italy,and is prepared with steamed milk foam. Variations of the drink involve the use of cream instead of milk, using non-dairy milk substitutes and flavoring with cinnamon or chocolate powder.';
break;

case 'Friday' ;
$coffee = '<h2>Friday is our Americano Day!</h2>';
$pic = 'americano.jpg';
$alt = 'Americano';
$content = '<b>Caffè Americano</b> is a type of coffee drink prepared by diluting an espresso with hot water, giving it a similar strength to, but different flavor from, traditionally brewed coffee. Its strength varies with the number of shots of espresso and amount of water added.';
break;

case 'Saturday' ;
$coffee = '<h2>Saturday is our Regular Joe Day!</h2>';
$pic = 'coffee.png';
$alt = 'Coffe';
$content = 'In New York, coffee snobbery is the norm with fancy (and admittedly delicious) java joints like Blue Bottle, Gorilla Coffee, and Brooklyn Roasting. But the mark of an authentic coffee snob is someone who demands a "regular coffee"—usually at a deli/corner store/bodega. <br>
<i>A regular coffee is a coffee with cream (or milk) and two sugars.</i>';
break;

case 'Sunday' ;
$coffee = '<h2>Sunday is our Green Tea Day!</h2>';
$pic = 'green-tea.jpg';
$alt = 'Green Tea';
$content = '<b>Green tea</b> is at ype of tea that is made from Camellia sinensis leaves and buds that have not undergone the same withering and oxidation process used to make oolong teas and black teas.Green tea originated in China, but its production and manufacture has spread to other countries in East Asia.'; 
break;

case 'Monday' ;
$coffee = '<h2>Monday is our Frappuccino Day!</h2>';
$pic = 'frap.jpg';
$alt = 'Frappuccino';
$content = '<b>Frappuccino</b> Frappuccino is a line of blended iced coffee drinks sold by Starbucks. It consists of coffee or crème base, blended with ice and ingredients such as flavored syrups and usually topped with whipped cream and or spices.'; 
break;

case 'Tuesday' ;
$coffee = '<h2>Tuesday is our Latte Day!</h2>';
$pic = 'latte.jpg';
$alt = 'latte';
$content = '<b>Latte</b> Caffè latte, often shortened to just latte in English, is a coffee drink of Italian origin made with espresso and steamed milk.'; 
break;

case 'Wednesday' ;
$coffee = '<h2>Wednesday is our pumpkin latte Day!</h2>';
$pic = 'pumpkin.jpg';
$alt = 'pumpkin';
$content = '<b>pumpkin latte</b> The Pumpkin Spice Latte is a coffee drink made with a mix of traditional autumn spice flavors, steamed milk, espresso, and often sugar, topped with whipped cream and pumpkin pie spice. '; 
break;

}
?>
<!doctype html>
<html lang="en">
<head> 
<meta charest="UTF-8">
<title>Switch Classwork Exercise</title>
<style>

#wrapper {
    width:940px;
    margin:20px auto;
}
</style>

</head>


<body>
    <div id="wrapper">
<h1>My Wonderful Switch Classwork Exercise! </h1>
<?php
echo $coffee;
?>
<img src="images/<?php echo $pic;  ?>" alt="<?php echo $alt;  ?>">
<p><?php echo $content;?></p>



<h2>Check out our Daily Specials</h2>

<ul>
<li><a href="switch.php?today=Wedensday">Wedensday</a></li>
    <li><a href="switch.php?today=Thursday">Thursday</a></li>
    <li><a href="switch.php?today=Friday">Friday</a></li>
    <li><a href="switch.php?today=Saturday">Saturday</a></li>
    <li><a href="switch.php?today=Sunday">Sunday</a></li>
    <li><a href="switch.php?today=Monday">Monday</a></li>
    <li><a href="switch.php?today=Tuesday">Tuesday</a></li>
</ul>
</div>  <!--end wrapper-->
</body>
</html>

        </main>

<aside>
  <h3> This is my wonderful aside container! </h3>

</aside>

</div> <!--end wrapper--> 
<?php
include ('includes/footer.php')
?>
