<?php

    include 'connect.php';

    $sessionUser = '';

    if (isset($_SESSION['userID'])) {
        $sessionUser = $_SESSION['userID'];

        $profileData = $connect->prepare("SELECT * FROM applicants WHERE applicant_ID = ?");
        $profileData->execute(array($_SESSION['userID']));
        $row = $profileData->fetch();

        $ApplicantName = $row['name'];
        $ApplicantProfilePhoto = $row['profile_photo'];

    }
if (isset($_SESSION['companyID'])) {
    $sessionUser = $_SESSION['companyID'];

    $profileData = $connect->prepare("SELECT * FROM companies WHERE company_ID = ?");
    $profileData->execute(array($_SESSION['companyID']));
    $row = $profileData->fetch();

    $companyName = $row['name'];
    $companyProfilePhoto = $row['logo'];

}
    include 'functions.php';

?>