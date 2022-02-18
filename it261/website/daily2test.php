
<?php
include ('includes/header.php');


?>
    
        <div id= "wrapper" >
        

        <main>
        <h1><?php echo $headline ;?></h1> 
        

        <?php
if(isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

// switch

switch($today) {
case 'Thursday' :
$coffee = '<h2>Thursday is our Blue day!</h2>';
$pic = 'Blue6.jpg';
$alt = 'blue';
$content = 'A <b>blue</b> Those with Blue color personality strengths tend to be enthusiastic, sympathetic, communicative, compassionate, idealistic, sincere and imaginative. They care and want to contribute to everything they are a part of. Relationships are important to blues.';
break;

case 'Friday' ;
$coffee = '<h2>Friday is our Red Day!</h2>';
$pic = 'red.png';
$alt = 'red';
$content = '<b>red</b> Courage, sacrifice, and love or anger, danger, and war? The color red can be associated with the happiest feelings as well as with the worst. Being the color that elicits the strongest reactions, it is no surprise that its symbolism can lie on both ends of the spectrum.';
break;

case 'Saturday' ;
$coffee = '<h2>Saturday is our green Day!</h2>';
$pic = 'green.png';
$alt = 'green';
$content = 'Shades of green found in nature may help put us at ease in a new place. <br>
<i>For this reason, designers often feature the color green in public spaces like restaurants and hotels.</i>';
break;

case 'Sunday' ;
$coffee = '<h2>Sunday is our orange Day!</h2>';
$pic = 'orange.png';
$alt = 'orange';
$content = '<b>orange</b> Orange is the colour between yellow and red on the spectrum of visible light. Human eyes perceive orange when observing light with a dominant wavelength between roughly 585 and 620 nanometres. '; 
break;

case 'Monday' ;
$coffee = '<h2>Monday is our pink Day!</h2>';
$pic = 'pink.png';
$alt = 'pink';
$content = '<b>pink</b> Pink is a light red hue and is typically associated with love and romance. '; 
break;

case 'Tuesday' ;
$coffee = '<h2>Tuesday is our Yellow Day!</h2>';
$pic = 'Yellow.png';
$alt = 'yellow';
$content = '<b>yellow</b> yellow symbolizes happiness, warmth and sunshine in most cultures'; 
break;

case 'Wednesday' ;
$coffee = '<h2>Wednesday is our gray Day!</h2>';
$pic = 'gray.png';
$alt = 'gray';
$content = '<b>gray/b> Gray and grey are both common spellings of the color between black and white. '; 
break;

}
?>


<link href= "./css/daily-styles.css" type="text/css" rel= "stylesheet">
<style>


</style>

</head>


<body>
 
<h1>My Wonderful Daily Page Classwork Exercise! </h1>
<?php
echo $coffee;
?>

<p><?php echo $content;?></p>
<p><?php echo $details;


<h2>Check out our Daily Specials</h2>

<ul>
<li><a href="daily.php?today=Wednesday">Wedensday</a></li>
    <li><a href="daily.php?today=Thursday">Thursday</a></li>
    <li><a href="daily.php?today=Friday">Friday</a></li>
    <li><a href="daily.php?today=Saturday">Saturday</a></li>
    <li><a href="daily.php?today=Sunday">Sunday</a></li>
    <li><a href="daily.php?today=Monday">Monday</a></li>
    <li><a href="daily.php?today=Tuesday">Tuesday</a></li>
</ul>
</main>
<aside>
  <h3> This is my wonderful aside container! </h3>
  <img src="images/<?php echo $pic;  ?>" alt="<?php echo $alt;  ?>">

</aside>
</div>  <!--end wrapper-->

  
<?php
include ('includes/footer.php')
?>
