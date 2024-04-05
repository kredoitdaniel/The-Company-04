<?php

include "../classes/User.php";

$user = new User;

$user->update($_POST, $_FILES);

// $_FILES holds the info of the image or file such as name and the actual image or file
// $_FILES is a 2D Associative Array
// $_FILES[''][''];
/*
    $_POST['first_name'];
    $_POST['last_name'];
    $_POST['username'];
*/ 

?>