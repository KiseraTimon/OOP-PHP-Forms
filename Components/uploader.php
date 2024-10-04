<?php

// Database Connection
require_once ('connection.php');

if (isset($conn) && $conn)
{
    // Checking form method
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        // Prepared variables for data insertion
        $fname = $mysqli->real_escape_string($_POST['fname']);
        $lname = $mysqli->real_escape_string($_POST['lname']);
        $uname = $mysqli->real_escape_string($_POST['uname']);
        $email = $mysqli->real_escape_string($_POST['email']);
        $password = $mysqli->real_escape_string($_POST['password']);
        $confirmpassword = $mysqli->real_escape_string($_POST['confirmpassword']);

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

        // Password Hashing
        $password = password_hash($password, PASSWORD_DEFAULT);

        // Database insertion
        $sql = "INSERT INTO users (fname, lname, uname, email, password) VALUES ('$fname', '$lname', '$uname', '$email', '$password')";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        // Message
        echo
        "
        <script>
            alert('User Registered Successfully');
            window.location.href = 'http://localhost:5000/Structures/Forms/signup.php';
        </script>
        ";
    }
}
?>