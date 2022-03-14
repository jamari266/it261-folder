<?php
// our server.php file - this is where our session will start
// our session is a way to store the information

session_start();
include('config.php');
// this is where eventually you will have the header include
// include('./includes/header.php');

// this server.php page will be communicatiing to our database!!!!

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME )or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

// register the user, using if isset reg_user

if(isset($_POST['reg_user'])) {
$first_name = mysqli_real_escape_string($iConn, $_POST['first_name']);
$last_name = mysqli_real_escape_string($iConn, $_POST['last_name']);
$email = mysqli_real_escape_string($iConn, $_POST['email']);
$username = mysqli_real_escape_string($iConn, $_POST['username']);
$password_1 = mysqli_real_escape_string($iConn, $_POST['password_1']);
$password_2 = mysqli_real_escape_string($iConn, $_POST['password_2']);

// we want to make sure that all the input fields have been filled out
// if empty, you are going to use a new function which is called array_push()

if(empty($first_name)) {
    array_push($errors, 'First name is required!!!');
}

if(empty($last_name)) {
    array_push($errors, 'Last name is required!!!');
}

if(empty($email)) {
    array_push($errors, 'email is required!!!');
}

if(empty($username)) {
    array_push($errors, 'username is required!!!');
}

if(empty($password_1)) {
    array_push($errors, 'password is required!!!');
}

// our logic is this - is password_1 !== to password_2

if($password_1 !== $password_2) {
    array_push($errors, 'Passwords do not match!');
}

// we are checking the username and pasword... AND selecting if from the table

$user_check_query = "SELECT * FROM users WHERE username = '$username' OR email = '$email' LIMIT 1 ";

$result = mysqli_query($iConn, $user_check_query) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

$rows = mysqli_fetch_assoc($result);

// we are going to have an if statment, and we will nest 2 additional if statements inside our main if statment
// bottome line is, we cannot have duplicate usernames or duplicate email
if($rows){

if($rows['username'] == $username) {
    array_push($errors, 'Username already exists!');
}

if($rows['email'] == $email) {
    array_push($errors, 'Email already exists!');
}


} // close big if statement

// do we have any errors??? idealistically, no errors!!!

if(count($errors) == 0 ) {

    $password = md5 ($password_1);

// Now is time to insert the infromation into out table!!!


$query = "INSERT INTO users (first_name, last_name, email, username, password) VALUES('$first_name', '$last_name', '$email', '$username', '$password') ";


mysqli_query($iConn, $query);

$_SESSION['username'] = $username;
$_SESSION['success'] = $success;

// if we are successful, the we will be directed to our login page!!!

header('Location:login.php');





} // close if count errors




} // end if isset reg_user