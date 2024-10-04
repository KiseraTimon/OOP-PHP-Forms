<?php

// Reading classes
require 'Structures/Homepage/home.php';
require 'Structures/Footer/footer.php';
require 'Structures/Forms/signup.php';
require 'Structures/Forms/login.php';
require 'Structures/Tables/users.php';

//Homepage instances
$homepage = new home();

//Footer instances
$footer = new footer();

// Signup form instances
$signup = new signupform();

// Login form instances
$login = new login();


// Users table
$users = new users();