<?php

session_start();

// Check form method
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    // Populating variables
    $vcode = ($_POST['vcode']);
    $setcode = ($_POST['setcode']);

    // Checking if verification code matches
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

    // Message
    echo
    "
    <script>
        alert('Verification Successful');
        window.location.href = 'http://localhost:5000/Pages/userspage.php';
    </script>
    ";
}