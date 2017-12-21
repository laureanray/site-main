<?php

$connection = mysqli_connect('localhost', 'root', '', 'laureanray.com');

global $connection;

if(!$connection){
    die("Error connecting to the database!");
}



?>
