<?php

// Database Connection
require_once ('connection.php');

// Checking form method
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    // Prepared variables for data insertion
    $fname = ($_POST['fname']);
    $lname = ($_POST['lname']);
    $uname = ($_POST['uname']);
    $email = ($_POST['email']);
    $password = ($_POST['password']);
    $confirmpassword = ($_POST['confirmpassword']);

    // Checking if passwords match
    if ($password != $confirmpassword)
    {
        echo
        "
        <script>
            alert('Passwords do not match');
            window.history.back();
        ";
        exit;
    }

    // Checking if uname or email exists
    $sql = "SELECT * FROM users WHERE uname = '$uname' OR email = '$email'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $user = $stmt->fetch();

    if ($user != null)
    {
        echo
        "
        <script>
            alert('Username or Email already exists');
            window.history.back();
        </script>
        ";
        exit;
    }

    // Password Hashing
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Database insertion
    $sql = "INSERT INTO users (fname, lname, uname, email, password) VALUES ('$fname', '$lname', '$uname', '$email', '$password')";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // Session variables
    session_start();

    // Fetching userID
    $sql = "SELECT userID FROM users WHERE uname = '$uname'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $user = $stmt->fetch();
    $userID = $user['userID'];

    $_SESSION['userID'] = $userID;
    $_SESSION['fname'] = $fname;
    $_SESSION['lname'] = $lname;
    $_SESSION['uname'] = $uname;
    $_SESSION['email'] = $email;

    // Generating unique verification code
    $vcode = rand(100000, 999999);
    $_SESSION['vcode'] = $vcode;

    // Message
    echo
    "
    <script>
        alert('User Registered Successfully');
        window.location.href = 'http://localhost:5000/Pages/verify.php';
    </script>
    ";
}
?>