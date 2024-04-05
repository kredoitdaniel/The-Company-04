<?php

include "../classes/User.php";

// Create an obj
$user = new User;

// Call the method
$user->login($_POST);

// $_POST - holds the data from the form views > index.php/login page
/*
    $_POST['username'];
    $_POST['password'];
*/ 

?>