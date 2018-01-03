<?php

if (isset($_POST['signIn'])) {
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $encPassword = sha1($password);
    $userType = $_POST['user_type'];
    $sqlStatement = '';

    if($userType == 'company')
        $sqlStatement = "SELECT * FROM companies WHERE email = '$email' AND password = '$password'";
    else
        $sqlStatement = "SELECT * FROM applicants WHERE (email = '$email' OR phone = '$email') AND password = '$encPassword'";

    $stmt = $connect->prepare($sqlStatement);
    $stmt->execute();
    $row = $stmt->fetch();
    $check = $stmt-> rowCount();

    if ($check > 0) {
        if($userType == 'applicant') {
            $_SESSION['userID'] = $row['applicant_ID'];
            header("Location: index.php");
        }
        else{
            $_SESSION['companyID'] = $row['company_ID'];
            header("Location: companyProfile.php?company_id=".$_SESSION['companyID']."");
        }

    } else {
        echo '<style>.signInBlock{display: block}</style>';
        $notify = '<div class="alert alert-danger custom-alert">Invalid <strong>Email</strong> or <strong>Password</strong>.</div>';
        //echo '<script>$(document).ready(function () {var overlay = $(\'<div></div>\').prependTo(\'body\').attr(\'class\', \'overlayForPage\'); overlay.add();}</script>';
    }

}

?>

<!-- Start Navbar -->

<nav class="navbar navbar-fixed-top navbar-inverse backgroundColor">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#our-nav">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <span class="navbar-brand">Careerea</span>
        </div>
        <div class="collapse navbar-collapse navbar-right" id="our-nav">
            <ul class="nav navbar-nav">
                <li <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') echo 'class="active"' ?>><a href="index.php">Home</a></li>
                <li <?php if (basename($_SERVER['PHP_SELF']) == 'about.php') echo 'class="active"' ?>><a href="about.php">About US</a></li>
                <li><a href="index.php#partners">Partners</a></li>
                <li <?php if (basename($_SERVER['PHP_SELF']) == 'jobs.php') echo 'class="active"' ?>><a href="jobs.php">Jobs</a></li>
            </ul>
            <?php if(!isset($_SESSION['userID']) && !isset($_SESSION['companyID'])): ?>
            <button type="button" class="sign navbar-right navbar-btn">
                <i class="fa fa-sign-in fa-fw fa-lg" aria-hidden="true"></i>
                <span>Login</span>
            </button>
            <a href="signUp.php">
                <button type="button" class="signupLink navbar-right navbar-btn">
                    <i class="fa fa-user-plus fa-fw fa-lg" aria-hidden="true"></i>
                    <span>Sign Up</span>
                </button>
            </a>
            <a href="companies-signUp.php">
                <button type="button" class="signupLink navbar-right navbar-btn">
                    <i class="fa fa-building fa-fw fa-lg" aria-hidden="true"></i>
                    <span>Sign Up as company</span>
                </button>
            </a>
            <?php else:

                echo '<div class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">';


                if(isset($_SESSION['userID']))
                    echo'<img src="applicants/profile_pics/'. $ApplicantProfilePhoto .'" />
                        <span>'. $ApplicantName .'</span>';
                else
                    //echo'<script>alert("'.$companyProfilePhoto.'")</script>';
                    echo'<img src="companies/pics/'.$companyProfilePhoto.'" />
                        <span>'.$companyName.'</span>';

                            echo'<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menuProfile">
                            <i class="fa fa-caret-down fa-fw fa-3x"></i>';

                if(isset($_SESSION['userID']))
                    echo'<li><a href="profile.php?user_id='.$_SESSION['userID'].'"><i class="fa fa-user fa-fw fa-lg"></i>Profile</a></li>';
                else{
                    echo'<li><a href="companyProfile.php?company_id='.$_SESSION['companyID'].'"><i class="fa fa-user fa-fw fa-lg"></i>Profile</a></li>';
                    echo'<li><a href="add-job.php"><i class="fa fa-user fa-fw fa-lg"></i>Post New Job</a></li>';
                }

                            echo'<li><a href="settings.php"><i class="fa fa-wrench fa-fw fa-lg"></i>Settings</a></li>
                            <li><a href="php/logout.php"><i class="fa fa-sign-out fa-fw fa-lg"></i>Logout</a></li>
                        </ul>
                    </div>
                    <div class="dropdown notificationGlobe">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-globe fa-fw fa-2x"></i>
                            <span>4</span>
                        </a>
                        <i class="fa fa-caret-down fa-fw fa-3x"></i>
                        <ul class="dropdown-menu dropdown-menuNotification">
                            <li>
                                <h4>You Accepted in Job in Egypt</h4>
                                <p>you accepted in java developer job for go to interview in company to final stage to apply this job. please contact with company to more details.</p>
                                <div class="itemInfo">
                                    <i class="fa fa-globe fa-fw"></i>
                                    <span class="itemDate">10:43AM</span>
                                </div>
                            </li>
                            <li>
                                <h4>You Accepted in Job in Egypt</h4>
                                <p>you accepted in java developer job for go to interview in company to final stage to apply this job. please contact with company to more details.</p>
                                <div class="itemInfo">
                                    <i class="fa fa-globe fa-fw"></i>
                                    <span class="itemDate">10:43AM</span>
                                </div>
                            </li>
                            <li>
                                <h4>You Accepted in Job in Egypt</h4>
                                <p>you accepted in java developer job for go to interview in company to final stage to apply this job. please contact with company to more details.</p>
                                <div class="itemInfo">
                                    <i class="fa fa-globe fa-fw"></i>
                                    <span class="itemDate">10:43AM</span>
                                </div>
                            </li>
                            <li>
                                <h4>You Accepted in Job in Egypt</h4>
                                <p>you accepted in java developer job for go to interview in company to final stage to apply this job. please contact with company to more details.</p>
                                <div class="itemInfo">
                                    <i class="fa fa-globe fa-fw"></i>
                                    <span class="itemDate">10:43AM</span>
                                </div>
                            </li>
                            <li>
                                <h4>You Accepted in Job in Egypt</h4>
                                <p>you accepted in java developer job for go to interview in company to final stage to apply this job. please contact with company to more details.</p>
                                <div class="itemInfo">
                                    <i class="fa fa-globe fa-fw"></i>
                                    <span class="itemDate">10:43AM</span>
                                </div>
                            </li>
                            <li>
                                <h4>You Accepted in Job in Egypt</h4>
                                <p>you accepted in java developer job for go to interview in company to final stage to apply this job. please contact with company to more details.</p>
                                <div class="itemInfo">
                                    <i class="fa fa-globe fa-fw"></i>
                                    <span class="itemDate">10:43AM</span>
                                </div>
                            </li>
                            <li>
                                <h4>You Accepted in Job in Egypt</h4>
                                <p>you accepted in java developer job for go to interview in company to final stage to apply this job. please contact with company to more details.</p>
                                <div class="itemInfo">
                                    <i class="fa fa-globe fa-fw"></i>
                                    <span class="itemDate">10:43AM</span>
                                </div>
                            </li>
                        </ul>
                    </div>';
            endif; ?>
        </div>
    </div>
</nav>

<!-- End Navbar -->

<!-- Start SignIn Block -->

<div class="signInBlock">
    <div>
        <span>Login</span>
        <i class="fa fa-close fa-fw fa-lg"></i>
    </div>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="text" placeholder="Email or Phone" name="email"/>
        <div class="password">
            <input class="passwordField" type="password" placeholder="Password" name="pass" />
            <span class="glyphicon glyphicon-eye-open"></span>
        </div>
        <select  id="user" class="form-control" name="user_type">
            <option value="applicant">I am an Applicant</option>
            <option value="company">I am a Company</option>
        </select><br>
        <?php
            if(isset($notify)) {
                echo $notify;
            }
        ?>
        <button class="btn" type="submit" name="signIn">Sign in</button>
        <span><a href="forgetPassword.php">Forgotten account?</a></span>
        <br />
        <span>Not a member? <a href="signUp.php">Sign up now <i class="fa fa-arrow-right"></i></a></span>
    </form>
</div>

<!-- End SignIn Block -->