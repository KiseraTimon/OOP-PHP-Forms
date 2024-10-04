<?php

// Login class
class login
{
    //header
    public function loginheader()
    {
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Login</title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <link rel="stylesheet" href="/assets/css/signup.css">
        </head>
        <body>
        <?php
    }

    // Body
    public function loginbody()
    {
        ?>
        <div class="login-body">
            <form method="POST" action="http://localhost:5000/Components/verifier.php" enctype="multipart/form-data">
                <!--Username-->
                <div class="form-row">
                    <div class="col">
                        <input type="text" name="uname" id="uname" class="form-control" placeholder="Username">
                    </div>
                </div>

                <!--Password-->
                <div class="form-row">
                    <div class="col">
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                    </div>
                </div>

                <!--Submit Button-->
                <div class="form-row">
                    <div class="col">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <p>New here?<a href="../../index.php"> Sign up</a></p>
                    </div>
                </div>
            </form>
        </div>
        <?php
    }
}
?>