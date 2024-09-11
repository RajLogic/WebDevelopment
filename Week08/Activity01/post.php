<?php
//echo"Hello, " . $_POST["name"] . "!";  // This line will display the name entered in the form.
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
echo"Hello".$firstname."".$lastname."!";
var_dump($_POST["name"]);  // This line will display the name entered in the form.
print_r($_POST);  // This line will display the array of data entered in the form.
?>
