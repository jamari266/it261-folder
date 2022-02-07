<?php
// we need to define the page that we are on as the page

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
}


$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['project.php'] = 'Project';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';
?>
<!DOCTYPE html>
<html lang= "en">
    <head>
        <meta charset= "UTF-8" >
        <meta name= "viewport" content= "width=device-width" initial-scale= "1.0" >
        <meta http-equiv= "X-UA-Compatible"content= "ie-edge" >
        <title><?php echo $title ;?> </title>
        <link href= "./css/styles.css" type="text/css" rel= "stylesheet">
    </head>

    <body class="<?php echo $body ;?>">

<header>
            <div id="inner-header">
                <a href="index.php"> 
                <h1> My Portal Page!</h1>
                <img class="img-1MAMP"src="images/1MAMP-Logo.png" alt="my 1MAMP">
</a>

<nav>
                
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="About.php">About</a></li>
        <li><a href="Daily.php">Daily</a></li>
        <li><a href="project.php">Project</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        
    </ul>
</nav>-->

<nav>
    <ul>
<?php
foreach($nav as $key => $value) {
    echo ' <li style="list-style-type:none;"><a style="text-decoration:none; 
    color:red;" href="' . $key.'"> ' . $Value . '</a> </li> ';
}
?>
</ul>

</nav>
</div>
<!-- end inner header -->
</header>