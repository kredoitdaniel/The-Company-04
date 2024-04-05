<?php

include "../classes/User.php";

// Create an obj
$user = new User;

// Call the method
$user->store($_POST);

// $_POST - holds the data from the form views > register.php
/*
    $_POST['first_name'];
    $_POST['last_name'];
    $_POST['username'];
    $_POST['password'];
*/ 

?>