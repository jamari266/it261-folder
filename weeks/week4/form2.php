<?php
// the logic - if I do not enter anything inside the iput field,. Something                  will show up!!!
// first_name, last_name, email, comments

if(isset($_POST['first_name'],
        $_POST['last_name'],
        $_POST['email'],
        $_POST['comments'])) {
$frist_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$comments = $_POST['comments'];

if(empty($_POST['frist_name'] &&
        $_POST['last_name'] &&
        $_POST['email'] &&
        $_POST['comments']  )) {
echo 'Please fill out the fields!';

} else {
echo $frist_name;
echo '<br>';
echo $last_name;
echo '<br>';
echo $email;
echo '<br>';
echo $comments;
echo '<br>';

}

} else {
echo '
<form action="" method="post">
<label>First Name</label>
<input type="text" name="frist_name">

<label>Last Name</label>
<input type="text" name="last_name">

<label>Email</label>
<input type="email" name="email">

<label>Comments</label>
<textarea name="comments"></textarea> 

<input type="submit" value="Confirm">
</form>

<p><a href="">Reset</a></p>
';



}