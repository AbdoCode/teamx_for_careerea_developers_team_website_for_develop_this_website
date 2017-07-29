<?php

    session_start();
    include "php/init.php";
    $pageTitle = "About Us";

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $contactuser = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $contactemail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $contactphone = filter_var($_POST['phonenumber'], FILTER_SANITIZE_NUMBER_INT);
    $contactmsg = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

    $formErrors = array();

    if(strlen($contactuser) <= 3){

        $formErrors[] = 'Username must be larger than <strong>3</strong> characters';

    }

    if(strlen($contactmsg) < 10){

        $formErrors[] = 'Message can\'t be less than <strong>10</strong> characters';

    }

    $header = 'From: ' . $contactemail . '\r\n';
    $myEmail = 'CareereaEmail@yahoo.com';
    $subject = 'Feedback';

    if (empty($formErrors)) {

        mail($myEmail, $subject, $msg, $header);

        $contactuser = '';
        $contactemail = '';
        $contactphone = '';
        $contactmsg = '';

        $success = '<div class="alert alert-success">We have recived your message</div>';

    }

}
?>
<!DOCTYPE html>
<html lang="en">
    <?php require 'head.php'; ?>
    <body>
        <?php include 'navbar.php'; ?>

        <div class="about">
            <div class="container">
                <div class="aboutUsSection">
                    <div class="row">
                        <div class="image col-sm-4">
                            <img src="images/signUp.png" class="img-responsive"/>
                        </div>
                        <div class="discription col-sm-8">
                            <p class="lead">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem These guys are incredible! I get my project in 10 days and it was awesome! Very good service! Highly recommended! PRINT DESIGN Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit WEB DESIGN Incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam APP DESIGN Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis LOGO DESIGN Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat</p>
                        </div>
                    </div>
                </div>
                <div class="sperator"></div>
                <div class="contactUsSection">
                    <h1 class="text-center">Contact Us</h1>
                    <form class="contact-form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                        <?php if(!empty($formErrors)) { ?>
                            <div class="alert alert-danger alert-dismissable" role="start">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <?php
                                    foreach ($formErrors as $error) {
                                        echo $error . '<br />';
                                    }
                                ?>
                            </div>
                        <?php } ?>
                        <?php if (isset($success)) { echo $success; } ?>
                        <div class="form-group">
                            <input class="form-control username" type="text" name="username" required="required" placeholder="Type your username" value="<?php if (isset($contactuser)) { echo $contactuser; } ?>" />
                            <i class="fa fa-user fa-fw"></i>
                            <span class="astrisx">*</span>
                            <div class="alert alert-danger custom-alert">
                                Username must be larger than <strong>3</strong> characters
                            </div>
                        </div>
                        <div class="form-group">
                            <input class="form-control email" type="email" name="email" required="required" placeholder="Type a valid e-mail" value="<?php if (isset($contactemail)) { echo $contactemail; } ?>" />
                            <i class="fa fa-envelope fa-fw"></i>
                            <span class="astrisx">*</span>
                            <div class="alert alert-danger custom-alert">
                                Email can't be <strong>empty</strong>
                            </div>
                        </div>
                        <input class="form-control phone" type="text" name="phonenumber" placeholder="type your phone number" value="<?php if (isset($contactphone)) { echo $contactphone; } ?>" />
                        <i class="fa fa-phone fa-fw"></i>
                        <div class="form-group">
                            <textarea class="form-control message" name="message" required="required" placeholder="Your message!"><?php if (isset($contactmsg)) { echo $contactmsg; } ?></textarea>
                            <span class="astrisx">*</span>
                            <div class="alert alert-danger custom-alert">
                                Message can't be less than <strong>10</strong> characters
                            </div>
                        </div>
                        <input class="btn" type="submit" value="Send Message" />
                        <i class="fa fa-send fa-fw send-icon"></i>
                    </form>
                </div>
            </div>
        </div>
        
        <?php include 'footer.php'; ?>
        <?php require 'scripts.php'; ?>
    </body>
</html>