<?php

include("config.php");
include("firebaseRDB.php");

//bungkus dengan oop
$db = new firebaseRDB($databaseURL);
$id = $_POST['id'];
// print_r($id);
// die;

$update = $db->update("film", $id, [
    "title"     => $_POST['title'],
    "thumbnail" => $_POST['thumbnail'],
    "year"      => $_POST['year'],
    "rating"    => $_POST['rating']
]);

echo "data update";
