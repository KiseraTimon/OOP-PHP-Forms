<?php

//User class
class users
{
    //Header function
    public function header()
    {
        ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Registered Users</title>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            </head>
            <body>
        <?php
    }

    //Tables function
    public function tables()
    {
        // Fetching connection file
        
        require_once(__DIR__.'\..\..\Components\connection.php');

        // Fetching data from database
        $sql = "SELECT * FROM users";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $users = $stmt->fetchAll();

        //Assigning data to variables
        $count = 1;
        foreach ($users as $user)
        {
            $fname = $user['fname'];
            $lname = $user['lname'];
            $uname = $user['uname'];
            $email = $user['email'];

            ?>
            <!--Bootstrap Table-->
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"><?php echo $count; ?></th>
                        <td><?php echo $fname; ?></td>
                        <td><?php echo $lname; ?></td>
                        <td><?php echo $uname; ?></td>
                        <td><?php echo $email; ?></td>
                    </tr>
                </tbody>
            </table>
            <?php
            $count++;
        }

        if ($users == null)
        {
            echo "<h1>No Users Registered</h1>";
        }
    }
}
?>