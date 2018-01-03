<?php
    session_start();
    include "php/init.php";
    $pageTitle = "Home";
?>
<!DOCTYPE html>

<html lang="en">
    <?php require 'head.php'; ?>
    <body>
        <?php include 'navbar.php'; ?>
        
        <!-- Start Header -->

        <header>
            <div class="overlay">
                <div class="container">
                    <div class="box">
                        <h1 id="heading-fit">Careerea</h1><br />
                        <h1>Know yourself before companies know you</h1>
                        <a href="jobs.php"><button class="btn btn-success">Jobs</button></a>
                    </div>
                </div>
            </div>
        </header>
        
        <!-- End Header -->
        
        <!-- Start AboutUs -->
        
        <section class="aboutUs">
            <div class="container">
                <h1>Careerea in numbers...</h1>
                <div class="items row">
                    <div class="item col-lg-2 col-sm-4 col-xs-6">
                        <span class="countPlugin" data-to="520">0</span>
                        <span>Jobs</span>
                    </div>
                    <div class="item col-lg-2 col-sm-4 col-xs-6">
                        <span class="countPlugin" data-to="802">0</span>
                        <span>Courses</span>
                    </div>
                    <div class="item col-lg-2 col-sm-4 col-xs-6">
                        <span class="countPlugin" data-to="232">0</span>
                        <span>Users</span>
                    </div>
                    <div class="item col-lg-2 col-sm-4 col-xs-6">
                        <span class="countPlugin" data-to="12">0</span>
                        <span>Partaners</span>
                    </div>
                    <div class="item col-lg-2 col-sm-4 col-xs-6">
                        <span class="countPlugin" data-to="194">0</span>
                        <span>CVs</span>
                    </div>
                    <div class="item col-lg-2 col-sm-4 col-xs-6">
                        <span class="countPlugin" data-to="97">0</span>
                        <span>Portfolios</span>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- End AboutUs -->
        
        <!-- Start partners -->
        
        <section id="partners" class="partners">
            <div class="container">
                <h1>Partners</h1>
                <div class="row">
                    <div class="slider">
                        <div>
                            <a href="#"><img class="img-responsive" src="images/partners/bbc.png" alt="BBC" /></a>
                        </div>
                        <div>
                            <a href="#"><img class="img-responsive" src="images/partners/cnn.png" alt="CNN" /></a>
                        </div>
                        <div>
                            <a href="#"><img class="img-responsive" src="images/partners/forbes.png" alt="Forbes" /></a>
                        </div>
                        <div>
                            <a href="#"><img class="img-responsive" src="images/partners/techradar.png" alt="Techradar" /></a>
                        </div>
                        <div>
                            <a href="#"><img class="img-responsive" src="images/partners/wired.png" alt="Wired" /></a>
                        </div>
                        <div>
                            <a href="#"><img class="img-responsive" src="images/partners/wsj.png" alt="Wsj" /></a>
                        </div>
                    </div>
                    <div class="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    </div>
                    <div class="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- End partners -->
        
        <!-- Start Jobs -->
        <section class="jobs">
            <div class="container">
                <h1>Jobs</h1>
                <ul class="list-unstyled shuffle">
                    <li class="active filter" data-filter="all">All Jobs</li>
                    <?php
                        if (isset($_SESSION['userID'])) {
                            echo '<li class="filter" data-filter=".interests">Interests</li>';
                        }
                    ?>
                    <li class="filter" data-filter=".mostViewed">Most viewed</li>
                    <li class="filter" data-filter=".latestAdded">Latest added</li>
                </ul>
                <div id="mixItJobs" class="allJobs text-center">
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
                                                        <img src="companies/pics/'. $companyLogo .'" />
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
                                                            <span class="head">Hired</span><br />
                                                            <span class="value">'. $comparedNumber .'</span>
                                                        </div>
                                                    </div>
                                                    <a href="View-Job-Details.php?job_id='.$jobId.'" type="button" class="btn" name="apply">View</a><br />
                                                    <a href="View-Job-Details.php?job_id='.$jobId.'" type="button" class="btn" name="apply">Save</a>
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
                                                        <span class="head">Hired</span><br />
                                                        <span class="value" >'. $comparedNumber .'</span>
                                                    </div>
                                                </div>
                                                <a href="View-Job-Details.php?job_id='.$jobId.'" type="button" class="btn" name="view">View</a><br />
                                                <a href="View-Job-Details.php?job_id='.$jobId.'" type="button" class="btn" name="save">Save</a>
                                            </div>
                                        </div>
                                    </div>';
                            }

                            if (isset($_SESSION['userID'])) {

                                $gettingJobs = $connect->prepare("SELECT job_main_skills.job_ID
                                                                    FROM interests 
                                                                    JOIN applicant_interests ON interests.Interests_ID = applicant_interests.Interests_ID 
                                                                    JOIN skills ON interests.Interests_name = skills.skill_name 
                                                                    JOIN job_main_skills 
                                                                    JOIN jobs ON job_main_skills.job_ID = jobs.job_ID 
                                                                    WHERE
                                                                    applicant_interests.applicant_ID = ?
                                                                    AND job_main_skills.skill_ID = skills.skill_ID");
                                $gettingJobs->execute(array($_SESSION['userID']));

                                while ($rowInterest = $gettingJobs->fetch(PDO::FETCH_ASSOC)) {

                                    $jobId = $rowInterest['job_ID'];

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

                                    echo '<div class="col-md-4 col-sm-6 col-xs-12 mix interests">
                                                <div class="jobBox">
                                                    <div class="boxWithoutHover">
                                                        <div class="simpleContainer">
                                                            <div class="imgBlock">
                                                                <img src="companies/pics/'. $companyLogo .'" />
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
                                                                <span class="value">' . $salary . '</span>
                                                            </div>
                                                            <div class="info">
                                                                <span class="head">Posted At</span><br />
                                                                <span class="value">' . $date . '</span>
                                                            </div>
                                                            <div class="info">
                                                                <span class="head">Location</span><br />
                                                                <span class="value">' . $companyLocation . '</span>
                                                            </div>
                                                        </div>
                                                        <div class="boxHover visible-xs">
                                                            <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                                            <div class="allInfo">
                                                                <div class="info">
                                                                    <span class="head">viewed</span><br />
                                                                    <span class="value">' . $viewedNumber . '</span>
                                                                </div>
                                                                <div class="info">
                                                                    <span class="head">Applied</span><br />
                                                                    <span class="value">' . $appliedNumber . '</span>
                                                                </div>
                                                                <div class="info">
                                                                    <span class="head">Hired</span><br />
                                                                    <span class="value">' . $comparedNumber . '</span>
                                                                </div>
                                                            </div>
                                                            <a href="View-Job-Details.php?job_id='.$jobId.'" type="button" class="btn" name="apply">View</a><br />
                                                            <a href="View-Job-Details.php?job_id='.$jobId.'" type="button" class="btn" name="save">Save</a>
                                                        </div>
                                                    </div>
                                                    <div class="boxHover">
                                                        <span>Add to favorite: <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span></span>
                                                        <div class="allInfo">
                                                            <div class="info">
                                                                <span class="head">viewed</span><br />
                                                                <span class="value">' . $viewedNumber . '</span>
                                                            </div>
                                                            <div class="info">
                                                                <span class="head">Applied</span><br />
                                                                <span class="value">' . $appliedNumber . '</span>
                                                            </div>
                                                            <div class="info">
                                                                <span class="head">Hired</span><br />
                                                                <span class="value">' . $comparedNumber . '</span>
                                                            </div>
                                                        </div>
                                                        <a href="View-Job-Details.php?job_id='.$jobId.'" type="button" class="btn" name="apply">View</a><br />
                                                        <a href="View-Job-Details.php?job_id='.$jobId.'" type="button" class="btn" name="save">Save</a>
                                                    </div>
                                                </div>
                                            </div>';
                                }
                            }
                        ?>
                    </div>
                </div>
                <a href="jobs.php"><button class="seeMore btn btn-success">See More</button></a>
            </div>
        </section>
        
        <!-- End Jobs -->

        <?php include 'footer.php'; ?>
        <?php require 'scripts.php'; ?>
    </body>
</html>