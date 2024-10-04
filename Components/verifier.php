<?php

// Database connection
require_once ('connection.php');

// Checking form method
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    //Populating variables
    $uname = ($_POST['uname']);
    $password = ($_POST['password']);

    // Checking if username exists
    $sql = "SELECT * FROM users WHERE uname = '$uname'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $user = $stmt->fetch();

    if ($user == null)
    {
        echo
        "
        <script>
            alert('Username does not exist');
            window.history.back();
        </script>
        ";
        exit;
    }

    // Checking if password matches
    if (!password_verify($password, $user['password']))
    {
        echo
        "
        <script>
            alert('Incorrect Password');
            window.history.back();
        </script>
        ";
        exit;
    }

    // Message
    echo
    "
    <script>
        alert('Login Successful');
        window.location.href = 'http://localhost:5000/Structures/Tables/users.php';
    </script>
    ";
}
?>