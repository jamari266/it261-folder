<?php
include ('config.php');
include ('includes/header.php');
?>

<div id= "wrapper" >


<main>
<h1><?php echo $headline ;?></h1>
<p> write something here</p>



</main>


<aside>
  <h3> This is my wonderful aside container! </h3>
  <img src="images/<?php echo $pic;  ?>" alt="<?php echo $alt;  ?>">

</aside>
</div>  <!--end wrapper-->

  
<?php
include ('includes/footer.php')
?>
