<?php

    session_start();
    include "php/init.php";
    $pageTitle = "Jobs";

?>

<!DOCTYPE html>
<html lang="en">
    <?php require 'head.php'; ?>
    <body>

        <?php include 'navbar.php'; ?>
        <!-- Start Courses -->
        <?php include 'applyBox-compareBox.php'; ?>
        <section class="coursesPage jobs">
            <div class="container-fluid">
                <section class="mainSearchBox text-center">
                    <div class="row">
                        <div class="col-xs-12">
                            <form class="form-inline text-center" method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
                                <input name="search" class="form-control input-lg inputSearchMain " type="text" placeholder="Course name.../ Course Title"/>
                                <div class="mainSearchButtonBox">
                                    <button name="searchCourse" class="btn btn-lg searchButton text-center"><i class="fa fa-search fa-lg fa-fw"></i> Search </button>
                                    <a class="btn btn-lg showFilterMobile visible-xs"><i class="fa fa-search fa-lg fa-fw"></i> Filter Search </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
                <!-- -->
                <section class="">
                    <div class="row">
                        <div class="col-sm-3 hidden-xs">
                            <div class="mainFilterSearch">
                                <form class="form-inline" method="post"> 
                                    <div class="filterButtons">
                                        <p>Filter Results</p>
                                        <button class="btn btn-md btn-primary reset" type="reset">Reset </button>
                                    </div>
                                    <p class= "categoryTitle"><span> - </span> By Category  </p>
                                    <div class="categoryFilter">
                                        <input type="checkbox" name="category" id="categoryOne" />
                                        <label class="filterListWebLabel" for="categoryOne">Most Viewed </label>
                                        <input type="checkbox" name="category" id="categoryTwo" />
                                        <label class="filterListWebLabel" for="categoryTwo">Most Searched</label>
                                        <input type="checkbox" name="category" id="categoryThree" />
                                        <label class="filterListWebLabel" for="categoryThree">Top Rated</label>
                                    </div>
                                    <p class=" dateTitle"><span> - </span> By Date </p>
                                    <div class="dateFilter">
                                        <input type="checkbox" name="date" id="dateOne" />
                                        <label class="filterListWebLabel" for="dateOne">This Day</label>
                                        <input type="checkbox" name="date" id="dateTwo" />
                                        <label class="filterListWebLabel" for="dateTwo">This Month</label>
                                        <input type="checkbox" name="date" id="dateThree" />
                                        <label class="filterListWebLabel"  for="dateThree">This Year</label>
                                        <input type="checkbox" name="date" id="dateFour" />
                                        <label class="filterListWebLabel"  for="dateFour">Later</label>
                                    </div>
                                    <p class= "languageTitle"><span> - </span> By Language </p>
                                    <div class="languageFilter">
                                        <input type="checkbox" name="language" id="languageOne" />
                                        <label class="filterListWebLabel" for="languageOne">English</label>
                                        <input type="checkbox" name="language" id="languageTwo" />
                                        <label class="filterListWebLabel"  for="languageTwo">Arabic</label>
                                    </div>
                                    <p class= "levelTitle"><span> - </span> By Level </p>
                                    <div class="levelFilter">
                                        <input type="checkbox" name="level" id="levelOne" />
                                        <label class="filterListWebLabel" for="levelOne">Beginner</label>
                                        <input type="checkbox" name="level" id="levelTwo" />
                                        <label class="filterListWebLabel" for="levelTwo">Advanced</label>
                                    </div>
                                    <p class= "locationTitle"><span> - </span> By Location </p>
                                    <div class="locationFilter">
                                        <input type="checkbox" name="location" id="locationOne" />
                                        <label class="filterListWebLabel" for="locationOne">Near To Me</label>
                                        <input type="checkbox" name="location" id="locationTwo" />
                                        <label class="filterListWebLabel" for="locationTwo">Cairo</label>
                                        <input type="checkbox" name="location" id="locationThree" />
                                        <label class="filterListWebLabel" for="locationThree">Giza</label>
                                        <input type="checkbox" name="location" id="locationFour" />
                                        <label class="filterListWebLabel" for="locationFour">Alex</label>
                                    </div>
                                    <p class= "typeTitle"><span> - </span> By Type </p>
                                    <div class="typeFilter">
                                        <input type="checkbox" name="type" id="typeOne" />
                                        <label class="filterListWebLabel" for="typeOne">Full Time</label>
                                        <input type="checkbox" name="type" id="typeTwo" />
                                        <label class="filterListWebLabel" for="typeTwo">Part Time</label>
                                    </div>
                                </form>                
                            </div> 
                        </div>
                        <!-- end filter search -->

                        <div class="col-sm-9  jobsContainer allJobs">
                            <div class="row text-center">
                                <div class="col-sm-6 col-xs-12">
                                    <div class="jobBox">
                                        <div class="boxWithoutHover">
                                            <div class="simpleContainer">
                                                <div class="imgBlock">
                                                    <img src="companies/pics/logo.png" />
                                                </div>
                                                <div class="headersInfo">
                                                    <h5> Android Developer </h5>
                                                    <h5> Dell </h5>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <h5>Top Requirment</h5>
                                            <div class="topRequirment">
                                                <span> Java </span>
                                            </div>
                                            <div class="allInfo">
                                                <div class="info">
                                                    <span class="head">Salary</span><br />
                                                    <span class="value"> 50$ </span>
                                                </div>
                                                <div class="info">
                                                    <span class="head">Posted At</span><br />
                                                    <span class="value"> 15/7/2017 </span>
                                                </div>
                                                <div class="info">
                                                    <span class="head">Location</span><br />
                                                    <span class="value">6-October</span>
                                                </div>
                                            </div>
                                            <div class="boxHover visible-xs">
                                                <span>Add to favorite: <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span></span>
                                                <div class="allInfo">
                                                    <div class="info">
                                                        <span class="head">viewed</span><br />
                                                        <span class="value">250</span>
                                                    </div>
                                                    <div class="info">
                                                        <span class="head">Applied</span><br />
                                                        <span class="value">50</span>
                                                    </div>
                                                    <div class="info">
                                                        <span class="head">Compared</span><br />
                                                        <span class="value">20</span>
                                                    </div>
                                                </div>
                                                <a href="View-Job-Details.php" type="button" class="btn" name="apply">View</a><br />
                                                <button type="button" class="btn">Save</button>

                                            </div>
                                        </div>
                                        <div class="boxHover">
                                            <span>Add to favorite: <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span></span>
                                            <div class="allInfo">
                                                <div class="info">
                                                    <span class="head">viewed</span><br />
                                                    <span class="value">250</span>
                                                </div>
                                                <div class="info">
                                                    <span class="head">Applied</span><br />
                                                    <span class="value" >50</span>
                                                </div>
                                                <div class="info">
                                                    <span class="head">Compared</span><br />
                                                    <span class="value" >20</span>
                                                </div>
                                            </div>
                                            <a href="View-Job-Details.php" type="button" class="btn" name="apply">View</a><br />
                                            <button type="button" class="btn">Save</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="jobBox">
                                        <div class="boxWithoutHover">
                                            <div class="simpleContainer">
                                                <div class="imgBlock">
                                                    <img src="companies/pics/logo.png" />
                                                </div>
                                                <div class="headersInfo">
                                                    <h5> Android Developer </h5>
                                                    <h5> Dell </h5>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <h5>Top Requirment</h5>
                                            <div class="topRequirment">
                                                <span> Java </span>
                                            </div>
                                            <div class="allInfo">
                                                <div class="info">
                                                    <span class="head">Salary</span><br />
                                                    <span class="value"> 50$ </span>
                                                </div>
                                                <div class="info">
                                                    <span class="head">Posted At</span><br />
                                                    <span class="value"> 15/7/2017 </span>
                                                </div>
                                                <div class="info">
                                                    <span class="head">Location</span><br />
                                                    <span class="value">6-October</span>
                                                </div>
                                            </div>
                                            <div class="boxHover visible-xs">
                                                <span>Add to favorite: <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span></span>
                                                <div class="allInfo">
                                                    <div class="info">
                                                        <span class="head">viewed</span><br />
                                                        <span class="value">250</span>
                                                    </div>
                                                    <div class="info">
                                                        <span class="head">Applied</span><br />
                                                        <span class="value">50</span>
                                                    </div>
                                                    <div class="info">
                                                        <span class="head">Compared</span><br />
                                                        <span class="value">20</span>
                                                    </div>
                                                </div>
                                                <a href="View-Job-Details.php" type="button" class="btn" name="apply">View</a><br />
                                                <button type="button" class="btn">Save</button>

                                            </div>
                                        </div>
                                        <div class="boxHover">
                                            <span>Add to favorite: <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span></span>
                                            <div class="allInfo">
                                                <div class="info">
                                                    <span class="head">viewed</span><br />
                                                    <span class="value">250</span>
                                                </div>
                                                <div class="info">
                                                    <span class="head">Applied</span><br />
                                                    <span class="value" >50</span>
                                                </div>
                                                <div class="info">
                                                    <span class="head">Compared</span><br />
                                                    <span class="value" >20</span>
                                                </div>
                                            </div>
                                            <a href="View-Job-Details.php" type="button" class="btn" name="apply">View</a><br />
                                            <button type="button" class="btn">Save</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6  col-xs-12">
                                    <div class="jobBox">
                                        <div class="boxWithoutHover">
                                            <div class="simpleContainer">
                                                <div class="imgBlock">
                                                    <img src="companies/pics/logo.png" />
                                                </div>
                                                <div class="headersInfo">
                                                    <h5> Android Developer </h5>
                                                    <h5> Dell </h5>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <h5>Top Requirment</h5>
                                            <div class="topRequirment">
                                                <span> Java </span>
                                            </div>
                                            <div class="allInfo">
                                                <div class="info">
                                                    <span class="head">Salary</span><br />
                                                    <span class="value"> 50$ </span>
                                                </div>
                                                <div class="info">
                                                    <span class="head">Posted At</span><br />
                                                    <span class="value"> 15/7/2017 </span>
                                                </div>
                                                <div class="info">
                                                    <span class="head">Location</span><br />
                                                    <span class="value">6-October</span>
                                                </div>
                                            </div>
                                            <div class="boxHover visible-xs">
                                                <span>Add to favorite: <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span></span>
                                                <div class="allInfo">
                                                    <div class="info">
                                                        <span class="head">viewed</span><br />
                                                        <span class="value">250</span>
                                                    </div>
                                                    <div class="info">
                                                        <span class="head">Applied</span><br />
                                                        <span class="value">50</span>
                                                    </div>
                                                    <div class="info">
                                                        <span class="head">Compared</span><br />
                                                        <span class="value">20</span>
                                                    </div>
                                                </div>
                                                <a href="View-Job-Details.php" type="button" class="btn" name="apply">View</a><br />
                                                <button type="button" class="btn">Save</button>

                                            </div>
                                        </div>
                                        <div class="boxHover">
                                            <span>Add to favorite: <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span></span>
                                            <div class="allInfo">
                                                <div class="info">
                                                    <span class="head">viewed</span><br />
                                                    <span class="value">250</span>
                                                </div>
                                                <div class="info">
                                                    <span class="head">Applied</span><br />
                                                    <span class="value" >50</span>
                                                </div>
                                                <div class="info">
                                                    <span class="head">Compared</span><br />
                                                    <span class="value" >20</span>
                                                </div>
                                            </div>
                                            <a href="View-Job-Details.php" type="button" class="btn" name="apply">View</a><br />
                                            <button type="button" class="btn">Save</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6  col-xs-12">
                                    <div class="jobBox">
                                        <div class="boxWithoutHover">
                                            <div class="simpleContainer">
                                                <div class="imgBlock">
                                                    <img src="companies/pics/logo.png" />
                                                </div>
                                                <div class="headersInfo">
                                                    <h5> Android Developer </h5>
                                                    <h5> Dell </h5>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <h5>Top Requirment</h5>
                                            <div class="topRequirment">
                                                <span> Java </span>
                                            </div>
                                            <div class="allInfo">
                                                <div class="info">
                                                    <span class="head">Salary</span><br />
                                                    <span class="value"> 50$ </span>
                                                </div>
                                                <div class="info">
                                                    <span class="head">Posted At</span><br />
                                                    <span class="value"> 15/7/2017 </span>
                                                </div>
                                                <div class="info">
                                                    <span class="head">Location</span><br />
                                                    <span class="value">6-October</span>
                                                </div>
                                            </div>
                                            <div class="boxHover visible-xs">
                                                <span>Add to favorite: <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span></span>
                                                <div class="allInfo">
                                                    <div class="info">
                                                        <span class="head">viewed</span><br />
                                                        <span class="value">250</span>
                                                    </div>
                                                    <div class="info">
                                                        <span class="head">Applied</span><br />
                                                        <span class="value">50</span>
                                                    </div>
                                                    <div class="info">
                                                        <span class="head">Compared</span><br />
                                                        <span class="value">20</span>
                                                    </div>
                                                </div>
                                                <a href="View-Job-Details.php" type="button" class="btn" name="apply">View</a><br />
                                                <button type="button" class="btn">Save</button>

                                            </div>
                                        </div>
                                        <div class="boxHover">
                                            <span>Add to favorite: <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span></span>
                                            <div class="allInfo">
                                                <div class="info">
                                                    <span class="head">viewed</span><br />
                                                    <span class="value">250</span>
                                                </div>
                                                <div class="info">
                                                    <span class="head">Applied</span><br />
                                                    <span class="value" >50</span>
                                                </div>
                                                <div class="info">
                                                    <span class="head">Compared</span><br />
                                                    <span class="value" >20</span>
                                                </div>
                                            </div>
                                            <a href="View-Job-Details.php" type="button" class="btn" name="apply">View</a><br />
                                            <button type="button" class="btn">Save</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6  col-xs-12">
                                    <div class="jobBox">
                                        <div class="boxWithoutHover">
                                            <div class="simpleContainer">
                                                <div class="imgBlock">
                                                    <img src="companies/pics/logo.png" />
                                                </div>
                                                <div class="headersInfo">
                                                    <h5> Android Developer </h5>
                                                    <h5> Dell </h5>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <h5>Top Requirment</h5>
                                            <div class="topRequirment">
                                                <span> Java </span>
                                            </div>
                                            <div class="allInfo">
                                                <div class="info">
                                                    <span class="head">Salary</span><br />
                                                    <span class="value"> 50$ </span>
                                                </div>
                                                <div class="info">
                                                    <span class="head">Posted At</span><br />
                                                    <span class="value"> 15/7/2017 </span>
                                                </div>
                                                <div class="info">
                                                    <span class="head">Location</span><br />
                                                    <span class="value">6-October</span>
                                                </div>
                                            </div>
                                            <div class="boxHover visible-xs">
                                                <span>Add to favorite: <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span></span>
                                                <div class="allInfo">
                                                    <div class="info">
                                                        <span class="head">viewed</span><br />
                                                        <span class="value">250</span>
                                                    </div>
                                                    <div class="info">
                                                        <span class="head">Applied</span><br />
                                                        <span class="value">50</span>
                                                    </div>
                                                    <div class="info">
                                                        <span class="head">Compared</span><br />
                                                        <span class="value">20</span>
                                                    </div>
                                                </div>
                                                <a href="View-Job-Details.php" type="button" class="btn" name="apply">View</a><br />
                                                <button type="button" class="btn">Save</button>

                                            </div>
                                        </div>
                                        <div class="boxHover">
                                            <span>Add to favorite: <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span></span>
                                            <div class="allInfo">
                                                <div class="info">
                                                    <span class="head">viewed</span><br />
                                                    <span class="value">250</span>
                                                </div>
                                                <div class="info">
                                                    <span class="head">Applied</span><br />
                                                    <span class="value" >50</span>
                                                </div>
                                                <div class="info">
                                                    <span class="head">Compared</span><br />
                                                    <span class="value" >20</span>
                                                </div>
                                            </div>
                                            <a href="View-Job-Details.php" type="button" class="btn" name="apply">View</a><br />
                                            <button type="button" class="btn">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
            </div> 
        </section>
        <!-- End courses -->

        <!-- Start filterSearchMobile -->
        <div class="row formMobileSearch text-center">
            <div class="container">
                <div class="filterMobile col-xs-12 col-xs-visible">
                    <h3 class=text-center>Filter Results</h3>
                    <p class="text-center categoryTitle"><span> - </span>By Category</p>
                    <form class="form-inline" method="post"> 
                        <div class="categoryFilterMobile">
                            <input type="checkbox" name="categoryMobile" id="categoryOneMobile" />
                            <label class="filterListWebLabelMobile" for="categoryOneMobile">All</label>
                            <input type="checkbox" name="categoryMobile" id="categoryTwoMobile" />
                            <label class="filterListWebLabelMobile" for="categoryTwoMobile">Most Viewed</label>
                            <input type="checkbox" name="categoryMobile" id="categoryThreeMobile" />
                            <label class="filterListWebLabelMobile" for="categoryThreeMobile">Most Applied</label>
                        </div>
                            <p class="text-center dateTitle"><span> - </span>By Date Posted</p>
                            <div class="dateFilterMobile">
                            <input type="checkbox" name="dateMobile" id="dateOneMobile" />
                                <label class="filterListWebLabelMobile" for="dateOneMobile">Last 24 hours</label>
                                <input type="checkbox" name="dateMobile" id="dateTwoMobile" />
                                <label class="filterListWebLabelMobile" for="dateTwoMobile">This Week</label>
                                <input type="checkbox" name="dateMobile" id="dateThreeMobile" />
                                <label class="filterListWebLabelMobile"  for="dateThreeMobile">This Month</label>
                                 <input type="checkbox" name="dateMobile" id="dateFourMobile" />
                                <label class="filterListWebLabelMobile"  for="dateFourMobile">Last 2 Month</label>
                            </div>
                            <p class="text-center levelTitle"><span> - </span>By Level</p>
                            <div class="levelFilterMobile">
                                <input type="checkbox" name="levelMobile" id="levelOneMobile" />
                                <label class="filterListWebLabelMobile" for="levelOneMobile">Junior</label>
                                <input type="checkbox" name="levelMobile" id="levelTwoMobile" />
                                <label class="filterListWebLabelMobile" for="levelTwoMobile">Senior</label>
                            </div>
                            <p class="text-center locationTitle"><span> - </span>By Location</p>
                            <div class="locationFilterMobile">
                                <input type="checkbox" name="locationMobile" id="locationOneMobile" />
                                <label class="filterListWebLabelMobile" for="locationOneMobile">Near To Me</label>
                                <input type="checkbox" name="locationMobile" id="locationTwoMobile" />
                                <label class="filterListWebLabelMobile" for="locationTwoMobile">Cairo</label>
                                <input type="checkbox" name="locationMobile" id="locationThreeMobile" />
                                <label class="filterListWebLabelMobile" for="locationThreeMobile">Giza</label>
                                <input type="checkbox" name="locationMobile" id="locationFourMobile" />
                                <label class="filterListWebLabelMobile" for="locationFourMobile">Alex</label>
                            </div>

                            <p class="text-center typeTitle"><span> - </span>By Type</p>
                            <div class="typeFilterMobile">
                                <input type="checkbox" name="typeMobile" id="typeOneMobile" />
                                <label class="filterListWebLabelMobile" for="typeOneMobile">Full Time</label>
                                <input type="checkbox" name="typeMobile" id="typeTwoMobile" />
                                <label class="filterListWebLabelMobile" for="typeTwoMobile">Part Time</label>
                            </div>
                            <input class="form-control inputFilterMobile input-md" type="text" placeholder="Enter Course name"/>
                            <div class="filterButtons text-center">
                            <button class="btn btn-md searchFilterMobile" type="submit">Search </button>
                            <button class="btn btn-md btn-primary" type="reset">Reset </button>
                            </div>
                        </form>                            
                    </div>
                </div>
            </div>
        <!--End filterSearchMobile -->

        <?php include 'footer.php'; ?>
        <?php require 'scripts.php'; ?>			
    </body>
</html>