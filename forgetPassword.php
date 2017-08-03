<?php

session_start();
include "php/init.php";
$pageTitle = "Sign Up";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['signUp'])) {

    $formErrors = array();

    if (isset($username)){

        $filterdUser = filter_var($username, FILTER_SANITIZE_STRING);

        if (strlen($filterdUser) < 4) {

            $formErrors[] = "Username Must Be Larger Than 4 Characters.";

        }

    }


    if (empty($formErrors)) {

        $checkQuery = checkItem("email", "applicants", $filterdEmail);

        if ($checkQuery == 1) {

            $formErrors[] = "Sorry this email is exist.";

        }

    }

}
?>

<!DOCTYPE html>
<html lang="en">
    <?php require 'head.php'; ?>
    <body>

        <?php include 'navbar.php'; ?>

        <!-- Start SignUp -->

        <section class="forgetPassword text-center">
            <div class="container">
                <div class="numbers hidden-xs">
                    <span class="active">1</span>
                    <hr />
                    <span>2</span>
                    <hr />
                    <span>3</span>
                </div>
                <div class="form1 text-left">
                    <p class="lead">You will receive code from 8 digits via this e-mail.</p>
                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                        <div class="form-group">
                            <input class="form-control" type="email" name="forgetEmail" required="required" placeholder="Type your e-mail.." value="<?php if (isset($forgetEmail)) { echo $forgetEmail; } ?>" />
                            <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                        </div>
                        <button type="submit" class="btn">Send</button>
                    </form>
                    <span>- I've remembered my password, Login <i class="fa fa-arrow-right fa-fw"></i></span><br />
                    <a href="#">- Careerea help !</a>
                </div>
                <div class="form2 text-left">
                    <p class="lead">Just copy the 8 digits code, Paste it here.</p>
                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                        <div class="form-group">
                            <input class="form-control" type="number" name="digits" required="required" placeholder="8 digits code.." value="<?php if (isset($digits)) { echo $digits; } ?>" />
                            <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                        </div>
                        <button type="submit" class="btn">Ok</button>
                    </form>
                    <span>- Send 8 digits code again!</span><br />
                    <span>- Back to change e-mail</span>
                </div>
                <div class="form3 text-left">
                    <p class="lead">Type a new password</p>
                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                        <div class="form-group">
                            <input class="form-control" type="password" name="newPassword" required="required" placeholder="New password.." value="<?php if (isset($newPassword)) { echo $newPassword; } ?>" />
                            <input class="form-control" type="password" name="confirmNewPassword" required="required" placeholder="Confirm new password.." value="<?php if (isset($confirmNewPassword)) { echo $confirmNewPassword; } ?>" />
                        </div>
                        <button type="submit" class="btn">Confirm</button>
                    </form>
                </div>
                <div class="clearfix"></div>
                <div class="the-errors">
                    <?php

                    if (!empty($formErrors)) {

                        foreach ($formErrors as $error) {

                            echo '<div class="alert alert-danger msg">' . $error . '</div>';

                        }

                    }

                    ?>
                </div>
            </div>
        </section>

        <!-- End SignUp -->

        <?php include 'footer.php'; ?>
        <?php require 'scripts.php'; ?>
    </body>
</html>