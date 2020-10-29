<?php

$emailText = filter_input(INPUT_POST, 'emailText');
$password = filter_input(INPUT_POST, 'password');

// Validate email
if (!filter_var($emailText, FILTER_VALIDATE_EMAIL) && (strpos($emailText, '@')==true)) {
    $emailErr = "Invalid email format. ";
}
// Validate if password is greater than eight characters
if(strlen($password) == 0) {
    echo 'Password can\'t be empty. '; }
elseif(strlen($password) < 8) {
    echo 'Password should be at least 8 characters in length. '; }

?>

<html>
    <head>
        <title>Echo - Login Page</title>
    </head>
    <body>

        <h2>Email Input!</h2>
        <div>
            Email Text: <?php echo $emailText; ?>
        </div>
        <div>
            Password: <?php echo $password; ?>
        </div>

    </body>
</html>
