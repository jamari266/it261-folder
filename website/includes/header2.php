<!DOCTYPE html>
<html lang= "en">
    <head>
        <meta charset= "UTF-8" >
        <meta name= "viewport" content= "width=device-width" initial-scale= "1.0" >
        <meta http-equiv= "X-UA-Compatible"content= "ie-edge" >
        <title><?php echo $title ;?> </title>

        <link href= "./css/styles2.css" type="text/css" rel= "stylesheet">
        
        

    </head>

    <body class="<?php echo $body ;?>">

<header>
            <div id="inner-header">
                <a href="index.php"> 
                <h1> My Portal Page!</h1>
                <img class="img-1MAMP"src="images/1MAMP-Logo.png" alt="my 1MAMP">
</a>

<!-- <nav>
                
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="daily.php">Daily</a></li>
        <li><a href="project.php">Project</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        
    </ul>
</nav> -->

<nav>
    <ul>
<?php
echo make_links($nav);
?>
</ul>

</nav>
</div>
<!-- end inner header -->
</header>