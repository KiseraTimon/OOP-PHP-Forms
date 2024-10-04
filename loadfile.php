<?php

// Reading classes
require 'Structures/Homepage/home.php';
require 'Structures/Footer/footer.php';
require 'Structures/Forms/signup.php';
require 'Structures/Tables/users.php';

//Homepage instances
$homepage = new home();

//Footer instances
$footer = new footer();

// Signup form instances
$signup = new signupform();

// Users table
$users = new users();