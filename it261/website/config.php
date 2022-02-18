<?php
// we need to define the page that we are on as the page
ob_start();
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

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
}

// my navigation and my function!!!

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['project.php'] = 'Project';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

function make_links($nav) {
    $my_return ='';
    foreach($nav as $key => $value) {
    if(THIS_PAGE == $key) {
    $my_return .= '<li><a class="current" href="'.$key.'">'.$value.'</a></li>';
    } else {
    $my_return .= '<li><a href="' .$key.'"> '.$value.'</a> </li> ';
    }
    
    } //end foreach
    return $my_return;

} // end function

// BELOW IS MY PHP FOR MY FORM
