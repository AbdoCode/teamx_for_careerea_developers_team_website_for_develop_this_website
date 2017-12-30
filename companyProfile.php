<?php
    session_start();
    include "php/init.php";
    $pageTitle = "Profile";
?>

<!DOCTYPE html>
<html lang="en">
    <?php require 'head.php'; ?>
    <body>
        <?php include 'navbar.php'; ?>

        <div class="companyProfile">
            <div class="container">
                <div class="mainInfo">
                    <div class="col-sm-4">
                        <div class="photo text-center">
                            <img src="companies/pics/logo.png" width="300px"/>
                            <div style="position: relative" class="uploads">
                                <label for="files_upload" class="btn btn-primary btn-sm">
                                    <span class="glyphicon glyphicon-upload"></span> Change Photo
                                </label>
                                <input type="file" id="files_upload" class="btn btn-primary" accept="image/*">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="info">
                            <h2>Company Name</h2>
                            <span class="rate">
                                <i class="fa fa-star"></i>
                                3.9
                            </span>
                            <span class="review">19 Review</span>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="followBlock text-center">
                            <button class="btn btn-primary">
                                <i class="fa fa-heart"></i> Follow
                            </button>
                            <p>Follow to get job updates from company name</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="otherInfo">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#About" aria-controls="About" role="tab" data-toggle="tab">About</a></li>
                        <li role="presentation"><a href="#Photos" aria-controls="Photos" role="tab" data-toggle="tab">Photos</a></li>
                        <li role="presentation"><a href="#Jobs" aria-controls="Jobs" role="tab" data-toggle="tab">Jobs</a></li>
                        <li role="presentation"><a href="#Review" aria-controls="Review" role="tab" data-toggle="tab">Review</a></li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="About">
                            <div class="col-sm-6">
                                <div class="aboutInfo">
                                    <label>
                                        <i class="fa fa-archive fa-fw"></i>
                                        <span>Hired: </span>
                                        <span>15</span>
                                    </label>
                                    <label>
                                        <i class="fa fa-bars fa-fw"></i>
                                        <span>Job posts: </span>
                                        <span>35</span>
                                    </label>
                                    <label>
                                        <i class="fa fa-map-marker fa-fw"></i>
                                        <span>Cairo/Egypt</span>
                                    </label>
                                    <label>
                                        <ul class="social">
                                            <li><i class="fa fa-facebook fa-fw"></i></li>
                                            <li><i class="fa fa-twitter fa-fw"></i></li>
                                            <li><i class="fa fa-linkedin fa-fw"></i></li>
                                            <li><i class="fa fa-instagram fa-fw"></i></li>
                                        </ul>
                                    </label>
                                    <label>
                                        <i class="fa fa-globe fa-fw"></i>
                                        <span>www.company.com</span>
                                    </label>
                                    <label>
                                        <span>Size:</span>
                                        <span>100 - 500</span>
                                    </label>
                                    <label>
                                        <span>Industry</span> /
                                        <span>Software</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div>
                                    <h2>About</h2>
                                    <p>This is Company Details This is Company Details This is Company Details This is Company Details This is Company Details This is Company Details This is Company Details This is Company Details This is Company Details </p>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="Photos">
                            <div class="col-sm-4">
                                <div class="img">
                                    <img src="images/jobs/jeep.png" width="100%" class="img-responsive">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="img">
                                    <img src="images/header.jpg" width="100%" class="img-responsive">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="img">
                                    <img src="companies/pics/logo2.png" width="100%" class="img-responsive">
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="Jobs">
                            <div class="row">
                                <?php

                                $gettingJobs = $connect->prepare("SELECT job_ID FROM jobs");
                                $gettingJobs->execute();

                                while ($row = $gettingJobs->fetch(PDO::FETCH_ASSOC)) {

                                    $jobId = $row['job_ID'];

                                    $gettingJobDetails = $connect->prepare("SELECT COUNT( DISTINCT applied_jobs.applied_jobs_ID) AS applied,jobs.viewed, COUNT( DISTINCT skills_compared_jobs.skills_compared_jobs_ID) AS compared,jobs.job_title,jobs.salary,jobs.date_posted,companies.name,companies.location,companies.logo
                                                                        FROM jobs 
                                                                        JOIN applied_jobs ON jobs.job_ID = applied_jobs.job_ID 
                                                                        JOIN skills_compared_jobs ON jobs.job_ID = skills_compared_jobs.job_ID
                                                                        JOIN companies on jobs.company_ID = companies.company_ID
                                                                        WHERE jobs.job_ID = ?");
                                    $gettingJobDetails->execute(array($jobId));
                                    $row = $gettingJobDetails->fetch();

                                    $jobTitle = $row['job_title'];
                                    $appliedNumber = $row['applied'];
                                    $comparedNumber = $row['compared'];
                                    $viewedNumber = $row['viewed'];
                                    $salary = $row['salary'];
                                    $date = $row['date_posted'];
                                    $companyName = $row['name'];
                                    $companyLocation = $row['location'];
                                    $companyLogo = $row['logo'];

                                    $skills = [];
                                    $gettingSkills = $connect->prepare("SELECT skills.skill_name FROM skills JOIN job_main_skills ON skills.skill_ID = job_main_skills.skill_ID WHERE job_main_skills.job_ID = ?");
                                    $gettingSkills->execute(array($jobId));
                                    $rowSkill = $gettingSkills->fetch();

                                    $skills[] = $rowSkill['skill_name'];

                                    while ($rowSkill = $gettingSkills->fetch(PDO::FETCH_ASSOC)) {

                                        $skills[] = $rowSkill['skill_name'];

                                    }

                                    echo '<div class="col-md-4 col-sm-6 col-xs-12 mix">
                                        <div class="jobBox">
                                            <div class="boxWithoutHover">
                                                <div class="simpleContainer">
                                                    <div class="imgBlock">
                                                        <img src="'. $companyLogo .'" />
                                                    </div>
                                                    <div class="headersInfo">
                                                        <h5>'. $jobTitle .'</h5>
                                                        <h5>'. $companyName .'</h5>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <h5>Top Requirment</h5>
                                                <div class="topRequirment">';

                                    foreach($skills as $skillName){
                                        echo '<span>'. $skillName . '</span>';
                                    }

                                    echo '</div>
                                                <div class="allInfo">
                                                    <div class="info">
                                                        <span class="head">Salary</span><br />
                                                        <span class="value">'. $salary .'</span>
                                                    </div>
                                                    <div class="info">
                                                        <span class="head">Posted At</span><br />
                                                        <span class="value">'. $date .'</span>
                                                    </div>
                                                    <div class="info">
                                                        <span class="head">Location</span><br />
                                                        <span class="value">'. $companyLocation .'</span>
                                                    </div>
                                                </div>
                                                <div class="boxHover visible-xs">
                                                    <span>Add to favorite: <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span></span>
                                                    <div class="allInfo">
                                                        <div class="info">
                                                            <span class="head">viewed</span><br />
                                                            <span class="value">'. $viewedNumber .'</span>
                                                        </div>
                                                        <div class="info">
                                                            <span class="head">Applied</span><br />
                                                            <span class="value">'. $appliedNumber .'</span>
                                                        </div>
                                                        <div class="info">
                                                            <span class="head">Compared</span><br />
                                                            <span class="value">'. $comparedNumber .'</span>
                                                        </div>
                                                    </div>
                                                    <button  type="submit" class="btn" name="apply">Apply</button><br />
                                                    <button type="submit" class="btn">Compare with my skills</button>        
                                                
                                                </div>
                                            </div>
                                            <div class="boxHover">
                                                <span>Add to favorite: <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span></span>
                                                <div class="allInfo">
                                                    <div class="info">
                                                        <span class="head">viewed</span><br />
                                                        <span class="value">'. $viewedNumber .'</span>
                                                    </div>
                                                    <div class="info">
                                                        <span class="head">Applied</span><br />
                                                        <span class="value" >'. $appliedNumber .'</span>
                                                    </div>
                                                    <div class="info">
                                                        <span class="head">Compared</span><br />
                                                        <span class="value" >'. $comparedNumber .'</span>
                                                    </div>
                                                </div>
                                                <button  type="submit" class="btn" name="apply">Apply</button><br />
                                                <button type="submit" class="btn">Compare with my skills</button>  
                                            </div>
                                        </div>
                                    </div>';
                                } ?>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="Review">
                            <div class="col-xs-12">
                                <div class="commentBox">
                                    <div class="col-sm-2">
                                        <img src="applicants/profile_pics/abdelrahmanamer64@gmaillll.comScreenshot_2.png" class="img-responsive img-circle" width="100px" />
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="commentRate">
                                        <span class="rate">
                                            <i class="fa fa-star fa-fw"></i>
                                            3.9
                                        </span>
                                            <p class="lead">This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="commentBox">
                                    <div class="col-sm-2">
                                        <img src="applicants/profile_pics/abdelrahmanamer64@gmaillll.comScreenshot_2.png" class="img-responsive img-circle" width="100px" />
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="commentRate">
                                        <span class="rate">
                                            <i class="fa fa-star fa-fw"></i>
                                            3.9
                                        </span>
                                            <p class="lead">This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="commentBox">
                                    <div class="col-sm-2">
                                        <img src="applicants/profile_pics/abdelrahmanamer64@gmaillll.comScreenshot_2.png" class="img-responsive img-circle" width="100px" />
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="commentRate">
                                        <span class="rate">
                                            <i class="fa fa-star fa-fw"></i>
                                            3.9
                                        </span>
                                            <p class="lead">This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment This is Comment </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'footer.php'; ?>
        <?php require 'scripts.php'; ?>
    </body>
</html>