<?php
include("config.php");
include("firebaseRDB.php");
$db = new firebaseRDB($databaseURL);


// $post = $_POST;
// print_r($post);
// die;

$insert = $db->insert("film", [
    "title"     => $_POST['title'],
    "thumbnail" => $_POST['thumbnail'],
    "year"      => $_POST['year'],
    "rating"    => $_POST['rating']

]);

echo "data saved";
