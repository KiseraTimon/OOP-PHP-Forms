<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
</head>
<body>
    <!--Verifying Connection-->
    <?php
        // Fetching connection file
        require_once ('Components/connection.php');

        // Validating connection
        if (isset($conn) && $conn)
        {
            echo "<h1>Connection Achieved</h1>";
        }
        else
        {
            echo "<h1>Connection Failed</h1>";
        }
    ?>
</body>
</html>