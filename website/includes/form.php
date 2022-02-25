<?php
ob_start();

$first_name= '';
$last_name= '';
$email = '';
$gender = '';
$phone ='';
$comments = '';
$privacy = '';
$country = '';
$first_name_err='';
$last_name_err='';
$email_err='';
$gender_err='';
$phone_err = '';
$comments_err = '';
$privacy_err = '';
$country_err = '';

if($_SERVER['REQUEST_METHOD'] == 'POST') {

if(empty($_POST['first_name'])) {
    $first_name_err = 'Please enter your first name';
} else {
    $first_name = $_POST['first_name'];
}

if(empty($_POST['last_name'])) {
    $last_name_err = 'Please enter your last name';
} else {
    $last_name = $_POST['last_name'];
}

if(empty($_POST['email'])) {
    $email_err = 'Please enter your email';
} else {
    $email = $_POST['email'];
}

if(empty($_POST['gender'])) {
    $gender_err = 'Please enter your gender';
} else {
    $gender = $_POST['gender'];
}

// if(empty($_POST['phone'])) {
//    $phone_err = 'Please enter your phone number';
//} else {
//    $phone = $_POST['phone'];
//}

if(empty($_POST['phone'])) { // if empty, type in your number
    $phone_err = 'Your phone number please!';
    } elseif(array_key_exists('phone', $_POST)){
    if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
    { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
    $phone_err = 'Invalid format!';
    } else{
    $phone = $_POST['phone'];
    } // end else
    } // end main if





if(empty($_POST['comments'])) {
    $comments_err = 'Your comments, please!';
} else {
    $comments = $_POST['comments'];
}

if(empty($_POST['privacy'])) {
    $privacy_err = 'You cannot pass go!';
} else {
    $privacy = $_POST['privacy'];
}

// our country function!! 

function my_country($country) {
    $my_return = '';
    if(!empty($_POST['country'])) {
        $my_return = implode(', ', ($_POST['country'])) ;
    } else {
        $country_err = 'Please check ';
    }
    return $my_return;
} // end function 

if(isset($_POST['first_name'],
            $_POST['last_name'],
            $_POST['email'],
            $_POST['gender'],
            $_POST['phone'],
            $_POST['regions'],
            $_POST['comments'],
            $_POST['privacy'])) {

$to = 'szemeo@mystudentswa.com';
$subject = 'Test email ' .date('m/d/y, h i A');
$body = '
First Name : '.$first_name.' '.PHP_EOL.'
Last Name : '.$last_name.' '.PHP_EOL.'
Email : '.$email.' '.PHP_EOL.'
Gender : '.$gender.' '.PHP_EOL.'
Phone Number : '.$phone.' '.PHP_EOL.'
Regions : '.$regions.' '.PHP_EOL.'
comments : '.$comments.' '.PHP_EOL.'
';

if(!empty($first_name &&
$last_name &&
$email &&
$gender &&
$comments &&
$phone &&
$privacy ) &&
preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) {

$headers = array(
'From'=>'noreply@mystudentswa.com',
'Reply to:'=>''.$email.''
);

mail($to, $subject, $body);
header('Location:thx.php');

} // close if not empty statement 

} // close isset


}  // end server request
?>
 <form action="<?php echo htmlspecialchars($_SERVER ['PHP_SELF']) ;?>" method="post"> 
 <fieldset>
     <legend>Contact jamari</legend>

     <label>Frist Name</label>
     <input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']) ;?>">
     <span class="error"><?= $first_name_err ?></span>

     <label>Last Name</label>
     <input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']) ;?>">
     <span class="error"><?= $last_name_err ?></span>

    <label>Email</label>
     <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ;?>">
     <span class="error"><?= $email_err ?></span>

     <label>Gender</label>
     <ul>
         <li>
             <input type="radio" name="gender" value="female" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked = "checked" '  ;?>>Female
         </li>

         <li>
             <input type="radio" name="gender" value="male" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked = "checked" '  ;?>>Male
         </li>

         <li>
             <input type="radio" name="gender" value="neither" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'neither') echo 'checked = "checked" '  ;?>>Neither
         </li>
     </ul>
     <span class="error"><?= $gender_err ?></span>

     <label>Phone</label>
     <input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']) ;?>">
     <span class="error"><?= $phone_err ?></span>

     <label>check Box</label>
     <ul>
         <li>
             <input type="checkbox" name="country[]" value="US" <?php if(isset($_POST['country']) && in_array('US', $_POST['country'])) echo 'checked = "checked" '  ;?>>US
         </li>

         <li>
             <input type="checkbox" name="country[]" value="out of US" <?php if(isset($_POST['country']) && in_array('out of US', $_POST['country'])) echo 'checked = "checked" '  ;?>>Out of US
         </li>
        </ul>
        <span class="error"><?= $country_err ?></span>

        <label>Region</label>
        <select name="regions">
        <option value="" NULL <?php  if(isset($_POST['regions']) && $_POST['regions'] == NULL) echo 'selected = "unselected" '  ;?>>Select one </option>
        <option value="nw" <?php  if(isset($_POST['regions']) && $_POST['regions'] == 'nw') echo 'selected = "selected" '  ;?>>Northwest </option>

        <option value="sw" <?php  if(isset($_POST['regions']) && $_POST['regions'] == 'sw') echo 'selected = "selected" '  ;?>>Southwest </option>

        <option value="mw" <?php  if(isset($_POST['regions']) && $_POST['regions'] == 'mw') echo 'selected = "selected" '  ;?>>Midwest </option>

        <option value="se" <?php  if(isset($_POST['regions']) && $_POST['regions'] == 'se') echo 'selected = "selected" '  ;?>>Southeast </option>
        <option value="ne" <?php  if(isset($_POST['regions']) && $_POST['regions'] == 'ne') echo 'selected = "selected" '  ;?>>Northeast </option>
        </select>
        <span class="error"><?= $regions_err ?></span>

        <label>Comments</label>
        <textarea name="comments">"<?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']) ;?></textarea>
        <span class="error"><?= $comments_err ?></span>

        <label>Privacy</label>
     <ul>
         <li>
             <input type="radio" name="privacy" value="yes" <?php if(isset($_POST['privacy']) && $_POST['privacy'] == 'yes') echo 'checked = "checked" '  ;?>>You must agree!
         </li>
    </ul>
    <span class="error"><?= $privacy_err ?></span>
     <input type="submit" value="SEND!">
     <p><a href="">Reset!</a></p>
 </fieldset> 
 </form>

 <?php




?>

</body>
</html>
