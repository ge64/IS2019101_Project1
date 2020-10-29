<?php

$fullName = filter_input(INPUT_POST, "fullName");
$fullTextQuestion = filter_input(INPUT_POST, "fullTextQuestion");
$fullTextQuestion = htmlspecialchars($fullTextQuestion);
$skills = filter_input(INPUT_POST, 'skills', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);

if(strlen($fullName) == 0) {
    echo 'You name can\'t be blank. '; }
elseif(strlen($fullName) < 3) {
    echo 'Name should be at least 3 characters in length. '; }

if(strlen($fullTextQuestion) == 0) {
    echo 'Question can\'t be empty. '; }
elseif(strlen($fullTextQuestion) < 3) {
    echo 'Question should be under 500 characters in length. '; }

if(isset($_POST['skills'])) {
    foreach ($_POST['Color'] as $skills) {
        echo "You have selected: " . $skills;
    }
}

?>


<html lang="en">
    <head>
        <title>Echo - New Question</title>
    </head>
    <body>

    <div>
        Full name: <?php echo $fullName; ?>
    </div>
    <div>
        Password: <?php echo $fullTextQuestion; ?>
    </div>
    <div>
        Skills Array: <?php print_r($skills); ?>
    </div>

    </body>
</html>
