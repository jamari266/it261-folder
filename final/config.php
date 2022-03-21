<?php
// Our config file!!!!
ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');

 $success = 'You have successfully logged on!!!';
$errors = array();
 
// my php for my daily page
if(isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}
 
switch($today) {

    case 'Sunday';
    $day = 'Sunday is my .......';
    $details = '';
    $picture = '';
    $altTag = '';

    break;

    case 'Monday';
    $day = 'Monday is my .......';
    $details = '';
    $picture = '';
    $altTag = '';

    break;

    case 'Tuesday';
    $day = 'Tuesday is my .......';
    $details = '';
    $picture = '';
    $altTag = '';

    break;
 


} // end switch


define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
// my switch for my title, body class and possibly headline

// these are our pages
// Home
// About
// Daily
// Museum
// Contact

// Register
// Login Page

switch(THIS_PAGE) {
    case 'index.php':
    $title = 'Our Home Page';
    $body = 'home';
    $headline = 'Welcome to our Home Page';
    break;

    case 'daily.php':
    $title = 'Our Daily Page';
    $body = 'daily inner';
    $headline = 'Welcome to our Daily Page';
    break;

    case 'contact.php':
    $title = 'Our contact Page';
    $body = 'daily inner';
    $headline = 'Contact us today';
    break;

    case 'thx.php':
    $title = 'Thank you Page';
    $body = 'contact inner';
    $headline = 'Contact us today';
    break;

    case 'about.php':
    $title = 'About our Screenshots';
    $body = 'about inner';
    $headline = 'About our wonderful screenshots';
    break;


    case 'register.php':
    $title = 'Register Today!';
    $body = 'register inner';
    $headline = 'Register today!';
    break;

    case 'login.php':
    $title = 'Login Today!';
    $body = 'login inner';
    $headline = 'Login page!';
    break;

    case 'museum.php':
    $title = 'Top Museums in United States';
    $body = 'museums inner';
    $headline = 'Welcome to the best museum!!!';
    break;

} // closing switch for my titles, body class, etc


// my navigation and my function!!!

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['musem.php'] = 'Musems';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

function make_links($nav) {
$my_return = '';
foreach($nav as $key => $value) {
if(THIS_PAGE == $key) {
$my_return .= '<li><a class="current" href="'.$key.'"> '.$value.'</a></li> ';
} else {
$my_return .= '<li><a href="'.$key.'"> '.$value.'</a></li> ';
}

} //end foreach
return $my_return;
}
 
function myError($myFile, $myLine, $errorMsg)
{
if(defined('DEBUG') && DEBUG)
{
 echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
      echo 'Error message: <b> '.$errorMsg.'</b>';
      die();
  }  else {
      echo ' Houston, we have a problem!';
      die();
  }
    
    
}

 