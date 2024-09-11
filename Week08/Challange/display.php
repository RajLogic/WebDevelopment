<?php
if (isset($_POST['firstName']) && isset($_POST['lastName']) && 
    isset($_POST['email']) && isset($_POST['destination']) &&
    isset($_POST['colour'])) {

    $firstname = $_POST['firstName'];
    $lastname = $_POST['lastName'];
    $email = $_POST['email'];
    $destination = $_POST['destination'];
    $colour = $_POST['colour'];
}

if (!empty($firstname) && !empty($lastname) && !empty($email) && !empty($destination) && !empty($colour)) {
    echo "Your name is $firstname $lastname!";
    echo "<br>";
    echo "Your email contact is $email!";
    echo "<br>";
    echo "Your favourite colour is $colour!";
    echo "<br>";
    echo "Your holiday destination is $destination!";
} else {
    echo "Please fill out all fields.";
}
?>
