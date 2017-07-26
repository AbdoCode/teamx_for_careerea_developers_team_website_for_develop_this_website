<?php

    include 'connect.php';

    $sessionUser = '';

    if (isset($_SESSION['userID'])) {
        $sessionUser = $_SESSION['userID'];

        $profileData = $connect->prepare("SELECT name, profile_photo FROM applicants WHERE applicant_ID = ?");
        $profileData->execute(array($_SESSION['userID']));
        $row = $profileData->fetch();

        $ApplicantName = $row['name'];
        $ApplicantProfilePhoto = $row['profile_photo'];

    }
    include 'functions.php';

?>