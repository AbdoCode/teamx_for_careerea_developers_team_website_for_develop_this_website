<?php
    session_start();
    include "php/init.php";
    $pageTitle = "Sign Up For Companies";


?>

<!DOCTYPE html>
<html lang="en">
    <?php require 'head.php'; ?>
    <body>

    <?php include 'navbar.php'; ?>

        <!-- Company SignUp -->

        <div class="companySignUp">
            <div class="container">
                <form class="form-horizontal signMainForm" id="form1">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Company Name" name="company_name" />
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="company_size">
                            <option value="" selected disabled>Company Size</option>
                            <option value="1-11">1-11</option>
                            <option value="12-40">12-40</option>
                            <option value="41-100">41-100</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="industry">
                            <option value="" selected disabled>Industry</option>
                            <option value="web development">Web Development</option>
                            <option value="mobile development">Mobile Development</option>
                            <option value="software development">Software Development</option>
                            <option value="digital design">Digital Design</option>
                            <option value="online recruitment">Online Recruitment</option>
                            <option value="real state">Real Estate</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="location">
                            <option value="" selected disabled>Location</option>
                            <option value="cairo">Cairo</option>
                            <option value="giza">Giza</option>
                            <option value="maadi">Maadi</option>
                            <option value="nasr">Nasr City</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Phone Number" name="phone"/>
                    </div>
                    <div class="form-group">
                        <button type="button" class="col-sm-4 col-sm-offset-4 btn btn-primary">Next</button>
                    </div>
                </form>
                <div class="packages">
                    <p>What package suites you best? <a class="btn btn-success btn-sm">You can try it for free for 3 weeks.</a></p>
                    <div class="period">
                        <span>1 Month</span>
                        <span>3 Months</span>
                        <span>6 Months</span>
                        <span>1 Years</span>
                    </div>
                    <div class="offers">
                        <div class="col-sm-3">
                            <div class="offer">
                                <h2>Economy</h2>
                                <p>Suitable for Startups</p>
                                <span>10$ / Month</span>
                                <button class="btn btn-default">Choose</button>
                                <div class="benfits">
                                    <label>Benfits</label>
                                    <ul>
                                        <li>2 jobs per month</li>
                                        <li>View 50 Applicants in the Live Table</li>
                                        <li>Choose 10 applicants to go from Technical to Hr</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="special">Best Selling</div>
                            <div class="offer">
                                <h2>Silver</h2>
                                <p>Suitable for small business</p>
                                <span>40$ / Month</span>
                                <button class="btn btn-default">Choose</button>
                                <div class="benfits">
                                    <label>Benfits</label>
                                    <ul>
                                        <li>4 jobs per month</li>
                                        <li>View 100 Applicants in the Live Table</li>
                                        <li>Choose 20 applicants to go from Technical to Hr</li>
                                        <li>Choose 10 applicants to go from HR to Task</li>
                                        <li>Choose 5 applicants to send them a task</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="offer">
                                <h2>Gold</h2>
                                <p>Suitable for Medium Business</p>
                                <span>100$ / Month</span>
                                <button class="btn btn-default">Choose</button>
                                <div class="benfits">
                                    <label>Benfits</label>
                                    <ul>
                                        <li>8 jobs per month</li>
                                        <li>View 150 Applicants in the Live Table</li>
                                        <li>Choose 50 applicants to go from Technical to Hr</li>
                                        <li>Choose 30 applicants to go from HR to Task</li>
                                        <li>Choose 20 applicants to send them a task</li>
                                        <li>Choose 4 jobs To be added to Careerea Hot Jobs Section</li>
                                        <li>Choose 2 jobs To be pushed as a notifications to every applicant who live in company region and interested in company industry</li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="offer">
                                <h2>Ultimate</h2>
                                <p>Suitable for Large Corporations / Factories</p>
                                <span>200$ / Month</span>
                                <button class="btn btn-default">Choose</button>
                                <div class="benfits">
                                    <label>Benfits</label>
                                    <ul>
                                        <li>15 jobs per month</li>
                                        <li>View 250 Applicants per job in the Live Table</li>
                                        <li>Choose 150 applicants per job to go from Technical to Hr</li>
                                        <li>Choose 100 applicants per job to go from HR to Task</li>
                                        <li>Choose 80 applicants per job to send them a task</li>
                                        <li>Choose 10 jobs To be added to Careerea Hot Jobs Section</li>
                                        <li>Review Applicant Tasks by seniors in the field of job post</li>
                                        <li>Put company logo in Careerea Home page in Partners section</li>
                                        <li>Push all Jobs as notifications to Company followers</li>
                                        <li>Push all Jobs as notifications to every applicant who live in company region and have the job skills or experience level</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="col-sm-4 col-sm-offset-4 btn btn-primary">Next</button>
                </div>
                <form class="form-horizontal accessForm">
                    <p>Write your access information</p>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email" form="form1"/>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" form="form1"/>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Confirm Password" form="form1"/>
                    </div>
                    <div class="form-group">
                        <button type="button" class="col-sm-4 col-sm-offset-4 btn btn-primary">Next</button>
                    </div>
                </form>
                <form class="finalStep">
                    <div class="col-sm-7">
                        <div class="final">
                            <p class="lead">
                                Here is the final step your plan is <span>Silver</span>
                                <br /> for
                                <select class="form-control">
                                    <option value="">1 Month</option>
                                    <option value="">3 Months</option>
                                    <option value="">6 Months</option>
                                    <option value="">1 Year</option>
                                </select>
                            </p>
                            <p class="lead">
                                Credit card number
                                <input type="text" class="form-control" />
                            </p>
                            <p class="lead">
                                Payment type
                                <input type="radio" id="visa" name="payment" form="form1" />
                                <label for="visa">Visa</label>
                                <input type="radio" id="master" name="payment" form="form1" />
                                <label for="master">Master Card</label>
                            </p>
                            <p class="lead">
                                Pin code
                                <input type="text" class="form-control" />
                            </p>
                            <button type="button" class="btn btn-default">Review</button>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="reviewBlock">
                            <p class="lead">Sub total:<span>100$</span></p>
                            <p class="lead">Taxes:<span>20$</span></p>
                            <p class="lead">Total:<span>120$</span></p>
                            <a href="profile.php" type="submit" class="btn btn-success btn-block" form="form1">Checkout</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Company SignUp -->

    <?php include 'footer.php'; ?>

    <?php require 'scripts.php'; ?>
    </body>
</html>