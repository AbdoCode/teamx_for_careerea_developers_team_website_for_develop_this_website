<?php

    session_start();
    include "php/init.php";
    $pageTitle = "Courses";
?>
<!DOCTYPE html>
<html lang="en">
    <?php require 'head.php'; ?>
    <body>
        
        <?php include 'navbar.php'; ?>
                    
        <!-- Start Courses -->
        <?php include 'takeCourse.php'; ?>
        <section class="coursesPage courses">
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
                <section>
                    <div class="row">
                        <div class="col-sm-3 hidden-xs">
                            <div class="mainFilterSearch">
                                <form class="form-inline" method="post"> 
                                    <div class="filterButtons">
                                        <p>Filter Results</p>
                                        <button class="btn btn-md btn-primary reset" type="reset">Reset </button>
                                    </div>
                                    <p class=" categoryTitle"><span> - </span> By Category  </p>
                                    <div class="categoryFilter">
                                        <input type="checkbox" name="category" id="categoryOne" />
                                        <label class="filterListWebLabel" for="categoryOne">All </label>
                                        <input type="checkbox" name="category" id="categoryTwo" />
                                        <label class="filterListWebLabel" for="categoryTwo">Most Enrolled</label>
                                        <input type="checkbox" name="category" id="categoryThree" />
                                        <label class="filterListWebLabel" for="categoryThree">Top Rated</label>
                                        <input type="checkbox" name="category" id="categoryFour" />
                                        <label class="filterListWebLabel" for="categoryFour">Most Searched</label>
                                    </div>

                                    <p class=" dateTitle"><span> - </span> By Date Added  </p>
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

                                    <p class=" languageTitle"><span> - </span> By Language </p>
                                    <div class="languageFilter">
                                        <input type="checkbox" name="language" id="languageOne" />
                                        <label class="filterListWebLabel" for="languageOne">English</label>
                                        <input type="checkbox" name="language" id="languageTwo" />
                                        <label class="filterListWebLabel"  for="languageTwo">Hendi</label>
                                        <input type="checkbox" name="language" id="languageThree" />
                                        <label class="filterListWebLabel"  for="languageThree">Arabic</label>
                                    </div>

                                    <p class=" levelTitle"><span> - </span> By Level </p>
                                    <div class="levelFilter">
                                        <input type="checkbox" name="level" id="levelOne" />
                                        <label class="filterListWebLabel" for="levelOne">Beginner</label>
                                        <input type="checkbox" name="level" id="levelTwo" />
                                        <label class="filterListWebLabel" for="levelTwo">Intermediate</label>
                                        <input type="checkbox" name="level" id="levelThree" />
                                        <label class="filterListWebLabel" for="levelThree">Advanced</label>
                                    </div>

                                    <p class=" fieldTitle"><span> - </span> By Field </p>
                                    <div class="fieldFilter">
                                        <input type="checkbox" name="field" id="fieldOne" />
                                        <label class="filterListWebLabel" for="fieldOne">Design</label>
                                        <input type="checkbox" name="field" id="fieldTwo" />
                                        <label class="filterListWebLabel" for="fieldTwo">Programming</label>
                                        <input type="checkbox" name="field" id="fieldThree" />
                                        <label class="filterListWebLabel" for="fieldThree">Software Engineering</label>
                                    </div>

                                </form>                
                            </div> 
                        </div>
                        <!-- end filter search -->

                        <div class="col-sm-9 coursesContainer allCourses">
                            <div class="row text-center">
                                <div class="col-sm-4">
                                   <div class="courseBox text-center">
                                       <div class="boxWithoutHover">
                                           <div class="simpleContainer">
                                               <div class="imgBlock">
                                                   <img src="courses/pics/logo.png" />
                                               </div>
                                               <div class="headersInfo">
                                                   <h4>php</h4>
                                               </div>
                                           </div>
                                           <div class="allItem">
                                               <div class="item">
                                                   <span class="value">10</span><br />
                                                   <span class="head">Hours</span>
                                               </div>
                                               <div class="item">
                                                   <span class="value">10</span><br />
                                                   <span class="head">Videos</span>
                                               </div>
                                               <div class="item">
                                                   <span class="value">20</span><br />
                                                   <span class="head">Enrolled</span>
                                               </div>
                                           </div>
                                           <h5>Prerequisites</h5>
                                           <div class="topPrerequisites">
                                               <span>php</span>
                                               <span>HTML</span>
                                               <span>CSS</span>

                                           </div>
                                           <div class="rateBox">
                                               <div class="rate">
                                                   <div class="starWrapper">
                                                       <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                       <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                       <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                       <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                       <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                       <div class="starTop" style="width: 73%">
                                                           <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                           <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                           <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                           <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                           <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                       </div>
                                                   </div>
                                               </div>
                                               <div class="rateWord">
                                                   <span>Rate: </span>
                                                   <span></span>
                                               </div>
                                           </div>
                                           <div class="boxHover visible-xs">
                                               <span>Add to Favorite: </span>
                                               <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                               <button class="btn">Take it Now</button>
                                           </div>
                                       </div>
                                       <div class="boxHover">
                                           <span>Add to Favorite: </span>
                                           <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                           <button class="btn">Take it Now</button>
                                       </div>
                                   </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="courseBox text-center">
                                        <div class="boxWithoutHover">
                                            <div class="simpleContainer">
                                                <div class="imgBlock">
                                                    <img src="courses/pics/logo.png" />
                                                </div>
                                                <div class="headersInfo">
                                                    <h4>php</h4>
                                                </div>
                                            </div>
                                            <div class="allItem">
                                                <div class="item">
                                                    <span class="value">10</span><br />
                                                    <span class="head">Hours</span>
                                                </div>
                                                <div class="item">
                                                    <span class="value">10</span><br />
                                                    <span class="head">Videos</span>
                                                </div>
                                                <div class="item">
                                                    <span class="value">20</span><br />
                                                    <span class="head">Enrolled</span>
                                                </div>
                                            </div>
                                            <h5>Prerequisites</h5>
                                            <div class="topPrerequisites">
                                                <span>php</span>
                                                <span>HTML</span>
                                                <span>CSS</span>

                                            </div>
                                            <div class="rateBox">
                                                <div class="rate">
                                                    <div class="starWrapper">
                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                        <div class="starTop" style="width: 73%">
                                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="rateWord">
                                                    <span>Rate: </span>
                                                    <span></span>
                                                </div>
                                            </div>
                                            <div class="boxHover visible-xs">
                                                <span>Add to Favorite: </span>
                                                <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                                <button class="btn">Take it Now</button>
                                            </div>
                                        </div>
                                        <div class="boxHover">
                                            <span>Add to Favorite: </span>
                                            <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                            <button class="btn">Take it Now</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="courseBox text-center">
                                        <div class="boxWithoutHover">
                                            <div class="simpleContainer">
                                                <div class="imgBlock">
                                                    <img src="courses/pics/logo.png" />
                                                </div>
                                                <div class="headersInfo">
                                                    <h4>php</h4>
                                                </div>
                                            </div>
                                            <div class="allItem">
                                                <div class="item">
                                                    <span class="value">10</span><br />
                                                    <span class="head">Hours</span>
                                                </div>
                                                <div class="item">
                                                    <span class="value">10</span><br />
                                                    <span class="head">Videos</span>
                                                </div>
                                                <div class="item">
                                                    <span class="value">20</span><br />
                                                    <span class="head">Enrolled</span>
                                                </div>
                                            </div>
                                            <h5>Prerequisites</h5>
                                            <div class="topPrerequisites">
                                                <span>php</span>
                                                <span>HTML</span>
                                                <span>CSS</span>

                                            </div>
                                            <div class="rateBox">
                                                <div class="rate">
                                                    <div class="starWrapper">
                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                        <div class="starTop" style="width: 73%">
                                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="rateWord">
                                                    <span>Rate: </span>
                                                    <span></span>
                                                </div>
                                            </div>
                                            <div class="boxHover visible-xs">
                                                <span>Add to Favorite: </span>
                                                <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                                <button class="btn">Take it Now</button>
                                            </div>
                                        </div>
                                        <div class="boxHover">
                                            <span>Add to Favorite: </span>
                                            <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                            <button class="btn">Take it Now</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="courseBox text-center">
                                        <div class="boxWithoutHover">
                                            <div class="simpleContainer">
                                                <div class="imgBlock">
                                                    <img src="courses/pics/logo.png" />
                                                </div>
                                                <div class="headersInfo">
                                                    <h4>php</h4>
                                                </div>
                                            </div>
                                            <div class="allItem">
                                                <div class="item">
                                                    <span class="value">10</span><br />
                                                    <span class="head">Hours</span>
                                                </div>
                                                <div class="item">
                                                    <span class="value">10</span><br />
                                                    <span class="head">Videos</span>
                                                </div>
                                                <div class="item">
                                                    <span class="value">20</span><br />
                                                    <span class="head">Enrolled</span>
                                                </div>
                                            </div>
                                            <h5>Prerequisites</h5>
                                            <div class="topPrerequisites">
                                                <span>php</span>
                                                <span>HTML</span>
                                                <span>CSS</span>

                                            </div>
                                            <div class="rateBox">
                                                <div class="rate">
                                                    <div class="starWrapper">
                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                        <div class="starTop" style="width: 73%">
                                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="rateWord">
                                                    <span>Rate: </span>
                                                    <span></span>
                                                </div>
                                            </div>
                                            <div class="boxHover visible-xs">
                                                <span>Add to Favorite: </span>
                                                <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                                <button class="btn">Take it Now</button>
                                            </div>
                                        </div>
                                        <div class="boxHover">
                                            <span>Add to Favorite: </span>
                                            <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                            <button class="btn">Take it Now</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="courseBox text-center">
                                        <div class="boxWithoutHover">
                                            <div class="simpleContainer">
                                                <div class="imgBlock">
                                                    <img src="courses/pics/logo.png" />
                                                </div>
                                                <div class="headersInfo">
                                                    <h4>php</h4>
                                                </div>
                                            </div>
                                            <div class="allItem">
                                                <div class="item">
                                                    <span class="value">10</span><br />
                                                    <span class="head">Hours</span>
                                                </div>
                                                <div class="item">
                                                    <span class="value">10</span><br />
                                                    <span class="head">Videos</span>
                                                </div>
                                                <div class="item">
                                                    <span class="value">20</span><br />
                                                    <span class="head">Enrolled</span>
                                                </div>
                                            </div>
                                            <h5>Prerequisites</h5>
                                            <div class="topPrerequisites">
                                                <span>php</span>
                                                <span>HTML</span>
                                                <span>CSS</span>

                                            </div>
                                            <div class="rateBox">
                                                <div class="rate">
                                                    <div class="starWrapper">
                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                        <div class="starTop" style="width: 73%">
                                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="rateWord">
                                                    <span>Rate: </span>
                                                    <span></span>
                                                </div>
                                            </div>
                                            <div class="boxHover visible-xs">
                                                <span>Add to Favorite: </span>
                                                <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                                <button class="btn">Take it Now</button>
                                            </div>
                                        </div>
                                        <div class="boxHover">
                                            <span>Add to Favorite: </span>
                                            <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                            <button class="btn">Take it Now</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="courseBox text-center">
                                        <div class="boxWithoutHover">
                                            <div class="simpleContainer">
                                                <div class="imgBlock">
                                                    <img src="courses/pics/logo.png" />
                                                </div>
                                                <div class="headersInfo">
                                                    <h4>php</h4>
                                                </div>
                                            </div>
                                            <div class="allItem">
                                                <div class="item">
                                                    <span class="value">10</span><br />
                                                    <span class="head">Hours</span>
                                                </div>
                                                <div class="item">
                                                    <span class="value">10</span><br />
                                                    <span class="head">Videos</span>
                                                </div>
                                                <div class="item">
                                                    <span class="value">20</span><br />
                                                    <span class="head">Enrolled</span>
                                                </div>
                                            </div>
                                            <h5>Prerequisites</h5>
                                            <div class="topPrerequisites">
                                                <span>php</span>
                                                <span>HTML</span>
                                                <span>CSS</span>

                                            </div>
                                            <div class="rateBox">
                                                <div class="rate">
                                                    <div class="starWrapper">
                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                        <div class="starTop" style="width: 73%">
                                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="rateWord">
                                                    <span>Rate: </span>
                                                    <span></span>
                                                </div>
                                            </div>
                                            <div class="boxHover visible-xs">
                                                <span>Add to Favorite: </span>
                                                <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                                <button class="btn">Take it Now</button>
                                            </div>
                                        </div>
                                        <div class="boxHover">
                                            <span>Add to Favorite: </span>
                                            <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                            <button class="btn">Take it Now</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="courseBox text-center">
                                        <div class="boxWithoutHover">
                                            <div class="simpleContainer">
                                                <div class="imgBlock">
                                                    <img src="courses/pics/logo.png" />
                                                </div>
                                                <div class="headersInfo">
                                                    <h4>php</h4>
                                                </div>
                                            </div>
                                            <div class="allItem">
                                                <div class="item">
                                                    <span class="value">10</span><br />
                                                    <span class="head">Hours</span>
                                                </div>
                                                <div class="item">
                                                    <span class="value">10</span><br />
                                                    <span class="head">Videos</span>
                                                </div>
                                                <div class="item">
                                                    <span class="value">20</span><br />
                                                    <span class="head">Enrolled</span>
                                                </div>
                                            </div>
                                            <h5>Prerequisites</h5>
                                            <div class="topPrerequisites">
                                                <span>php</span>
                                                <span>HTML</span>
                                                <span>CSS</span>

                                            </div>
                                            <div class="rateBox">
                                                <div class="rate">
                                                    <div class="starWrapper">
                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                        <div class="starTop" style="width: 73%">
                                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="rateWord">
                                                    <span>Rate: </span>
                                                    <span></span>
                                                </div>
                                            </div>
                                            <div class="boxHover visible-xs">
                                                <span>Add to Favorite: </span>
                                                <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                                <button class="btn">Take it Now</button>
                                            </div>
                                        </div>
                                        <div class="boxHover">
                                            <span>Add to Favorite: </span>
                                            <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                            <button class="btn">Take it Now</button>
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
            <div class="container ">
                <div class="filterMobile col-xs-12 col-xs-visible">
                    <h3 class=>Filter Results</h3>
                    <form class="form-inline" method="post">
                        <p class="categoryTitle"><span> - </span> By Category </p>
                        <div class="categoryFilterMobile">
                            <input type="checkbox" name="categoryMobile" id="categoryOneMobile" />
                            <label class="filterListWebLabelMobile" for="categoryOneMobile">Most Viewed</label>
                            <input type="checkbox" name="categoryMobile" id="categoryTwoMobile" />
                            <label class="filterListWebLabelMobile" for="categoryTwoMobile">Most Searched</label>
                            <input type="checkbox" name="categoryMobile" id="categoryThreeMobile" />
                            <label class="filterListWebLabelMobile" for="categoryThreeMobile">Top Rated</label>
                        </div>

                            <p class="dateTitle"><span> - </span> By Date </p>
                            <div class="dateFilterMobile">
                            <input type="checkbox" name="dateMobile" id="dateOneMobile" />
                                <label class="filterListWebLabelMobile" for="dateOneMobile">Most Viewed</label>
                                <input type="checkbox" name="dateMobile" id="dateTwoMobile" />
                                <label class="filterListWebLabelMobile" for="dateTwoMobile">Most Searched</label>
                                <input type="checkbox" name="dateMobile" id="dateThreeMobile" />
                                <label class="filterListWebLabelMobile"  for="dateThreeMobile">Top Rated</label>
                            </div>

                            <p class="languageTitle"><span> - </span> By Language</p>
                            <div class="languageFilterMobile">
                                <input type="checkbox" name="languageMobile" id="languageOneMobile" />
                                <label class="filterListWebLabelMobile" for="languageOneMobile">English</label>
                                <input type="checkbox" name="languageMobile" id="languageTwoMobile" />
                                <label class="filterListWebLabelMobile"  for="languageTwoMobile">Arabic</label>
                            </div>

                            <p class=" levelTitle"><span> - </span> By Level</p>
                            <div class="levelFilterMobile">
                                <input type="checkbox" name="levelMobile" id="levelOneMobile" />
                                <label class="filterListWebLabelMobile" for="levelOneMobile">Beginner</label>
                                <input type="checkbox" name="levelMobile" id="levelTwoMobile" />
                                <label class="filterListWebLabelMobile" for="levelTwoMobile">Advanced</label>
                            </div>

                            <p class="fieldTitle"><span> - </span> By Field</p>
                            <div class="feildFilterMobile">
                                <input type="checkbox" name="feildMobile" id="feildOneMobile" />
                                <label class="filterListWebLabelMobile" for="feildOneMobile">Design</label>
                                <input type="checkbox" name="feildMobile" id="feildTwoMobile" />
                                <label class="filterListWebLabelMobile" for="feildTwoMobile">Programming</label>
                                <input type="checkbox" name="feildMobile" id="feildThreeMobile" />
                                <label class="filterListWebLabelMobile" for="feildThreeMobile">Software Engineering</label>
                            </div>

                            <input class="form-control inputFilterMobile  input-md" type="text" placeholder="Enter Course name"/>
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
