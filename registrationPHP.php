<?php

$firstName = filter_input(INPUT_POST, 'firstName');
$lastName = filter_input(INPUT_POST, 'lastName');
$birthday = filter_input(INPUT_POST, 'birthday');
$emailText = filter_input(INPUT_POST, 'emailText');
$password = filter_input(INPUT_POST, 'password');

// Validate if password is greater than eight characters
if(strlen($firstName) == 0) {
    echo 'You first name can\'t be empty. '; }
if(strlen($lastName) == 0) {
    echo 'You last name can\'t be empty. '; }
if(strlen($birthday) == 0) {
    echo 'You last name can\'t be empty. '; }
if (filter_var($emailText, FILTER_VALIDATE_EMAIL) && (strpos($emailText, '@')==false)) {
    $emailErr = "Invalid email format. "; }
if(strlen($password) == 0) {
    echo 'Password can\'t be empty. '; }
elseif(strlen($password) < 8) {
    echo 'Password should be at least 8 characters in length. '; }

?>

<html lang="en">
    <head>
        <title>Echo - Registration</title>
    </head>
    <body>

    <div>
        Fist name: <?php echo $firstName; ?>
    </div>
    <div>
        Last name: <?php echo $lastName; ?>
    </div>
    <div>
        Birthday: <?php echo $birthday; ?>
    </div>
    <div>
        Email Text: <?php echo $emailText; ?>
    </div>
    <div>
        Password: <?php echo $password; ?>
    </div>

    </body>
</html>
