<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
</head>
<body>
    <!--Testing Database Connection-->
    <?php
        // Including PHP PDO connection
        require_once('Components/connection.php');

        // Validating Connection
        if($conn)
        {
            echo "<h1>Database Connection Successful</h1>";
        }
    ?>
</body>
</html>