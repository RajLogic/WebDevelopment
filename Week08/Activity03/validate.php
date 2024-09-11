<?php
if (isset($_POST['firstname']) && isset($_POST['lastname'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    
}

    
/*
if (empty($firstname)) {
    echo 'Please fill out all fields.';
} else {
   echo 'Thank you for submitting the form!';
}
*/

if (!empty($firstname) && !empty($lastname)) {
    echo "Welcome, $firstname $lastname!";
} else {
    echo "Please fill out all fields.";
}

    ?>
