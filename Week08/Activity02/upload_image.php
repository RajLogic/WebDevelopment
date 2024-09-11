<?php
//var_dump($_FILES['image']);
//echo "<h1>Image Upload</h1>";
//echo $_FILES['image']['name']."<br>";
//echo $_FILES['image']['type']."<br>";
//echo $_FILES["image"]["size"]."<br>";

echo "<h1>Image Upload</h1>";
$name = $_FILES['image']['name'];
$type = $_FILES['image']['type'];
$size = $_FILES["image"]["size"];

echo "Name: ".$name."<br>";
echo "Type: ".$type."<br>";
echo "Size: ".$size."<br>";

move_uploaded_file($_FILES['image']['tmp_name'], "images/".$name);
echo "Image uploaded successfully";
echo "<br>";

echo "<img src='images/".$name."' width='200' height='200'>";
?>