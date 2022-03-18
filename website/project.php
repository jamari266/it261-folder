<?php
include('config.php');
include('./includes/header.php');
?>
<main>
<h1>Welcome to my movie page</h1>
<?php
// we are going to select from the people table and assign it to our $sql variable!
$sql = 'SELECT * FROM movies';
// then we are going to connet to the database!!!

// define('DB_NAME', 'mystud12_winter2022');
// define('DB_USER', 'mystud12_winter2022_user');
// define('DB_PASSWORD', '');
// define('DB_HOST', 'localhost');

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME ) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

// we are asking if the number of rows is greater then zero, then we will be able to see the table...
if(mysqli_num_rows($result) > 0) {
// thnk about our one row being an array - an associative array $row['first_name'] 
while($row = mysqli_fetch_assoc($result)) {

echo '
<h2>Information about '.$row['movies_name'].'</h2>
<ul>
<li><b>Director Name:</b> '.$row['movies_director'].'</li>
<li><b>Actor Name:</b> '.$row['movie_actor'].'</li>
<li><b>Year:</b> '.$row['movie_year'].'</li>
</ul>
<p>For more information about '.$row['movies_name'].' click <a href="project-view.php?id='.$row['movie_id'].' " >here</a></p>

';


} // close while loop


} // close if statment 

?>




</main>

<aside>
<h3>This is my aside that will be displaying random images!</h3>




</aside>

</div>
<!-- end wrapper -->

<?php
include('./includes/footer.php');