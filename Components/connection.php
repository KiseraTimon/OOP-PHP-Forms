<?php
//PDO Variables
$servername = "localhost";
$username = "root";
$password = "timonkisera123456_";
$dbname = "assignmentII";

//Data Source Name (DSN)
$dsn = "mysql:host=$servername;dbname=$dbname";

// Create Connection
try
{
    $conn = new PDO($dsn, $username, $password);

    // PDO Error Mode
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    $errMessage = $e->getMessage();
    echo "<script>
        alert('Connection Failed: ' . $errMessage);
        </script>";
}
