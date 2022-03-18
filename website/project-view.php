<?php
//people-view.php
include('config.php');
// if id has been set!!!

if(isset($_GET['id'])) {
$id = (int)$_GET['id'];
} else {
    header('Location:project.php');
}

// we have to select from the table and make sure that people_id = $id

$sql = 'SELECT * FROM movies WHERE movie_id = '.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME ) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));


$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {
// before we copy and past our while loop, we cannot out anything here

while($row = mysqli_fetch_assoc($result)) {
$movies_director = stripslashes($row['movies_director']);
$movie_actor = stripslashes($row['movie_actor']);
$movie_year = stripslashes($row['movie_year']);
$details = stripslashes($row['details']);
$feedback = '';
} // closing the while loop


} else {// closing if mysqli_num_row
$feedback = 'Houston, we have a problem!';

} //close else

// we will place all of the php here BEFORE we call out the header.php


include('./includes/header.php');
?>
<main>
<h1>Welcome to our project View Page!</h1>
<h2>Welcome to <?= $movies_director ?>'s Page</h2>
<!-- <h2>Welcome to <?php echo $movies_director?>'s Page</h2> -->
<ul>
<?php
echo '
<li><b>Director Name:</b>'.$movies_director.'</li>
<li><b>Actor Name:</b>'.$movie_actor.'</li>
<li><b>Year:</b>'.$movie_year.'</li>
<li>
<p>'.$details.'</p>
</li>
';
?>
</ul>


<p><a href="project.php">Return to the project.php page!</a></p>
</main>

<aside>
<h3>Headline three for the aside that will display the person's image</h3>
<figure>
<img src="images/movie<?= $id ?>.jpg" alt="<?= $movie_director ?>">
<figcaption><?php echo ' '.$movie_director.'  '.$movie_actor.', '.$movie_year.'    ';?></figcaption>
</figure>



</aside>

</div>
<!-- end wrapper -->

<?php
include('./includes/footer.php');