<?php
// Database connection
require_once ('connection.php');

// Starting session
session_start();

// Check form method
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    // Populating variables
    $vcode = ($_POST['vcode']);
    $setcode = ($_POST['setcode']);

    // Checking if verification codes match
    if ($vcode != $setcode)
    {
        echo
        "
        <script>
            alert('Incorrect Verification Code');
            window.history.back();
        </script>
        ";
        exit;
    }

    // Updating verification code to database
    $sql = "UPDATE users SET vcode = '$setcode' WHERE userID = '$_SESSION[$userID]'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // Message
    echo
    "
    <script>
        alert('Verification Successful');
        window.location.href = 'http://localhost:5000/Pages/userspage.php';
    </script>
    ";
}