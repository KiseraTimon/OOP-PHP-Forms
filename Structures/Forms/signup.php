<?php

// Composing signup form in PHP class
class signupform
{
    public function signUpForm()
    {
        ?>
            <!--Bootstrap Form-->
            <form>
                <!--First name and Last name-->
                <div class="form-row">
                    <div class="col">
                        <input type="text" id="fname" class="form-control" placeholder="First name">
                    </div>
                    <div class="col">
                        <input type="text" id="lname" class="form-control" placeholder="Last name">
                    </div>
                </div>

                <!--Username-->
                <div class="form-row">
                    <div class="col">
                        <input type="text" id="uname" class="form-control" placeholder="Username">
                    </div>
                </div>

                <!--Email-->
                <div class="form-row">
                    <div class="col">
                        <input type="email" id="email" class="form-control" placeholder="Email">
                    </div>
                </div>

                <!--Password-->
                <div class="form-row">
                    <div class="col">
                        <input type="password" id="password" class="form-control" placeholder="Password">
                    </div>
                </div>

                <!--Confirm Password-->
                <div class="form-row">
                    <div class="col">
                        <input type="password" id="confirmpassword" class="form-control" placeholder="Confirm Password">
                    </div>
                </div>
            </form>
        <?php
    }
}
?>