<?php

class verification
{
    public function header()
    {
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Verification Code</title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <link rel="stylesheet" href="/assets/css/signup.css">
        </head>
        <body>
        <?php
    }

    public function verify()
    {
        // Session start
        session_start();

        if (isset($_SESSION['vcode']))
        {
            $setcode = $_SESSION['vcode'];
        }
        else
        {
            $setcode = null;
        }
        ?>
            <div class="ver-body">
                <form method="POST" action="http://localhost:5000/Components/codeverify.php" enctype="multipart/form-data">
                    <!--Verification Code-->
                    <div class="form-row">
                        <div class="col">
                            <input type="hidden" name="setcode" id="setcode" class="form-control" value="<?php echo $setcode;?>">
                            <input type="number" name="vcode" id="vcode" class="form-control" placeholder="Verification Code">
                        </div>
                    </div>

                    <!--Submit Button-->
                    <div class="form-row">
                        <div class="col">
                            <button type="submit" class="btn btn-primary">Verify</button>
                        </div>
                    </div>
                </form>
            </div>
        <?php
    }
}
?>