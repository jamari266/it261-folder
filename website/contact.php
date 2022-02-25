<?php
include ('config.php');
include ('includes/header.php');




if(isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}


?>



    
        <div id= "wrapper" >
        

        <main>
        <h1><?php echo $headline ;?></h1> 
        

        



<style>


</style>

</head>


<body>
 

<?php
echo $coffee;
?>

<p><?php echo $content;?></p>



<h2>Here is my Contact Form!!!</h2>
<?php include ('includes/form.php')  ;?>
</main>
<aside>
  <h3> This is my aside with an appropriate image for my topic </h3>
  <img src="images/<?php echo $pic;  ?>" alt="<?php echo $alt;  ?>">

</aside>
</div>  <!--end wrapper-->


<?php
include ('includes/footer.php')
?>
