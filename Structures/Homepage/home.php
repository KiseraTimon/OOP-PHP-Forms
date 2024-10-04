<?php

class home
{
    //Header
    public function header()
    {
        ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Welcome</title>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
                <link rel="stylesheet" href="/assets/css/homepage.css">
            </head>
            <body>
        <?php
    }

    public function body()
    {
        ?>
        <div class="home-body">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="/assets/images/signup.png">
                <div class="card-body">
                    <h5 class="card-title">Hello</h5>
                    <p class="card-text">Welcome to our company. Become a part of us today by creating an account with us</p>
                    <a href="../../Pages/signuppage.php" class="btn btn-primary">Sign Up</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="/assets/images/login.png" alt="Login image">
                <div class="card-body">
                    <h5 class="card-title">Welcome</h5>
                    <p class="card-text">Are you a member already. Login to your account to continue with the services</p>
                    <a href="../../Pages/loginpage.php" class="btn btn-primary">Sign In</a>
                </div>
            </div>
        </div>
        <?php
    }
}
?>