<?php

// Composing signup form in PHP class
class signupform
{
    // Signup form header
    public function signupHeader()
    {
        ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Join Us Today</title>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
                <link rel="stylesheet" href="/assets/css/signup.css">
            </head>
            <body>
                
            </body>
            </html>
        <?php
    }

    // Signup form body
    public function signUpForm()
    {
        ?>
        <div class="signup-body">
            <!--Bootstrap Form-->
            <form method="POST" action="http://localhost:5000/Components/uploader.php" enctype="multipart/form-data">
                <!--First name and Last name-->
                <div class="form-row">
                    <div class="col">
                        <input type="text" name="fname" id="fname" class="form-control" placeholder="First name">
                    </div>
                    <div class="col">
                        <input type="text" name="lname" id="lname" class="form-control" placeholder="Last name">
                    </div>
                </div>

                <!--Username-->
                <div class="form-row">
                    <div class="col">
                        <input type="text" name="uname" id="uname" class="form-control" placeholder="Username">
                    </div>
                </div>

                <!--Email-->
                <div class="form-row">
                    <div class="col">
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                    </div>
                </div>

                <!--Password-->
                <div class="form-row">
                    <div class="col">
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                    </div>
                </div>

                <!--Confirm Password-->
                <div class="form-row">
                    <div class="col">
                        <input type="password"
                        name="confirmpassword"
                        id="confirmpassword" class="form-control" placeholder="Confirm Password">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <button type="submit" class="btn btn-primary">Sign Up</button>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <p>Already a member?<a href="../../Pages/loginpage.php"> Sign in</a></p>
                    </div>
                </div>
            </form>
        </div>
        <?php
    }
}
?>