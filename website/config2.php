<?php
// we need to define the page that we are on as the page
ob_start();

define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');
if(isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch($today) {

    case 'Saturday';
    $actDay = 'black';
    $day= 'Satuday is Dexter Day';
    $details = 'Dexter Morgan is a Miami-based blood splatter expert who doesn\'t just solve muders; he commits them too. In fact, he\'s a serial killer -- but he only murders the guilty, so he feels justified with his lifestyle choices. His policewoman sister and his cop co-workers have no idea Dexter livers a double life; however, adoptive father Harry knows his "skills." It\'s a unique brand of justice for which charming Dexter feels a psychological hunger.';
    $picture = 'dexter.jpg';
    $allTag = 'Dexter';
    $background2 = 'blood';

    break;


    case 'Sunday';
    $actDay = 'orange';
    $day = 'Sunday is reserved for Homeland';
    $details = 'Homeland is a show on Showtime about whatever. The main character is Clair Danes.... etec';
    $picture = 'carrie.jpg';
    $altTag = 'Carrie';
    $background2 = 'homeland';
    break;

    case 'Monday';
    $actDay = 'green';
    $day = 'Monady is reserved for Succession';
    $details = 'Succession is a show on Showtime about whatever. This series is based on the Murdock Family';
    $picture = 'succession.jpg';
    $altTag = 'Succession';
    $background2 = 'money';
    break;

    case 'Tuesday';
    $actDay = 'purple';
    $day = 'Tuesday is reserved for Watchmen';
    $details = 'watchmen details ';
    $picture = 'succession.jpg';
    $altTag = 'Succession';
    $background2 = 'money';
    break;

    case 'Wednesday';
    $actDay = 'green';
    $day = 'Monady is reserved for Succession';
    $details = 'Succession is a show on Showtime about whatever. This series is based on the Murdock Family';
    $picture = 'russell.jpg';
    $altTag = 'Russell';
    $background2 = '';
    break;

    case 'Thursday';
    $actDay = 'orange';
    $day = 'Thursday is the day';
    $details = 'write about thursday';
    $picture = 'night.jpg';
    $altTag = 'The night of';
    $background2 = '';
    break;

    case 'friday';
    $actDay = 'red';
    $day = 'friday is reserved for Succession';
    $details = 'something about friday';
    $picture = 'nicole.jpg';
    $altTag = 'Nicole';
    $background2 = '';
    break;


}


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

        case 'thx.php':
        $title = 'Thank you Page';
        $body = 'contact inner';
        $headline = 'Contact us today';
        break;

        case 'gallery.php':
            $title = 'Our Gallery Page';
            $body = 'gallery inner';
            $headline = 'Welcome to our Gallery!';
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
    $my_return .= '<li><a class="current" href="'.$key.'">'.$value.'</a> </li>';
    } else {
    $my_return .= '<li><a href="' .$key.'"> '.$value.'</a> </li> ';
    }
    
    } //end foreach
    return $my_return;
} // end function





// BELOW IS MY PHP FOR MY FORM
// please do not use regions - use your own select option values
// please do not use wines - you will use your own checkbox options

$first_name = '';






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
$photos[0] = 'photo1';
$photos[1] = 'photo2';
$photos[2] = 'photo3';
$photos[3] = 'photo4';
$photos[4] = 'photo5';

// $i = rand(0, 4);

// $selected_image = ''.$photos[$i].'.jpg ';
// echo '<img src="images/'.$selected_image.'" alt=" '.$photos[$i].' ">';

function random_images($photos) {
$my_return = '';
$i = rand(0, 4);
$selected_image = ''.$photos[$i].'.jpg ';
$my_return ='<img src="images/'.$selected_image.'" alt="'.$photos[$i].' " height="250px" width="500px">';
return $my_return;
}

// echo random_images($photos);
