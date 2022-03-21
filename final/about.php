<?php

//out index page which must show the session_start()

session_start();

include('config.php');

// did the user log in correctly, and if not, the user will receive a massage and will be directed back to the log in page

if(isset($_SESSION['username'])) {
$_SESSION['msg'] = 'You must login first';
header('Location:login.php');
}



if(isset($_GET['logout'])) {
session_destroy();
unset($_SESSION['username']);
header('Location:login.php');
}

include('./includes/header.php');
?>

<header>

<?php
if(isset($_SESSION['success'])) :?>
<div class="succes">
<h3>
    <?php echo $_SESSION['success'];
    unset($_SESSION['success']); ?>
</h3>
</div>
<!-- close success div -->
<?php endif; ?>

<?php // is our wonderful session username set???

if(isset($_SESSION['username'])) ;?>
<div class="welcome-logout">
<h3> Welcome,
<?= $_SESSION['username'] ?>
</h3>
<p><a href="index.php?logout='1">Logout</a></p>
</div>
<!-- close welcome logout -->
</php endif;  ?>

</header>

<div id="wrapper">
<h1><?= $headline ?></h1>
<img src="images/user.ping" alt="user table screenshot">


</div>

<?php
include('./includes/footer.php');
?>