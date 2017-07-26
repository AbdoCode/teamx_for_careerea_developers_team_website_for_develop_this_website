<!DOCTYPE html>
<html lang="en">
    <?php require 'head.php'; ?>
    <body>
        
        <!-- Start Admin-Panel Page -->
        <section class="adminPanel">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-3 col-xs-12">
                        <div class="tabsContainer">
                            <div class="user-panel">
                                <div class="pull-left image">
                                    <img src="images/person1.jpg" class="img-circle" alt="User Image">
                                </div>
                                <div class="pull-left info">
                                    <p>Chris Coyier</p>
                                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                                </div>
                            </div>
                            <ul class="myTabs nav nav-tabs">
                                <li id="tab1" ><i class="fa fa-dashboard"></i> Main Dashboard</li>
                                <li id="tab2" class="inactive">Courses <span> (3000) </span></li>
                                <li id="tab3" class="inactive">Instructors <span> (570) </span></li>
                                <li id="tab4" class="inactive">Jobs <span> (4000) </span></li>
                                <li id="tab5" class="inactive">Companies <span> (1500) </span></li>
                                <li id="tab6" class="inactive">Admin Setting</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-9 col-xs-12">
                        <div class="tabsDetails">
                            <!-- Start Tab Main Dashboard -->
                            <div id="tab1-content">
                                <section class="dashboard">
                                    <div class="col-xs-6">
                                        <div class="userBox text-center">
                                             <div class="userIcon"><i class="fa fa-user fa-2x fa-fw"></i></div>
                                            <div class="userInfo">
                                                <h4>10,000</h4>
                                                <h4>Users</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="onlineUserBox text-center">
                                             <div class="userIcon"><i class="fa fa-user fa-2x fa-fw"></i></div>
                                            <div class="userInfo">
                                                <h4>4,554</h4>
                                                <h4>Online Users</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="courseBox text-center">
                                            <div class="courseInfo">
                                                <h4>3,000</h4>
                                                <h4>Course</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="enrolledCourseBox text-center">
                                            <div class="enrolledCourseInfo">
                                                <h4>2,000</h4>
                                                <h4>Enrolled Courses</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="jobsBox text-center">
                                            <div class="jobsInfo">
                                                <h4>4,450</h4>
                                                <h4>Jobs</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="appliedJobsBox text-center">
                                            <div class="appliedJobsInfo">
                                                <h4>3,000</h4>
                                                <h4>Applied</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <h2 class="text-center">This Day</h2>
                                    <div class="col-sm-4 col-xs-6">
                                        <div class="newUsers text-center">
                                            <div class="newUsersIcon"><i class="fa fa-user fa-2x fa-fw"></i></div>
                                            <div class="newUsersInfo">
                                                <h4>700</h4>
                                                <h4>Users</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-xs-6">
                                        <div class="newUsers text-center">
                                            <div class="newUsersInfo">
                                                <h4>17</h4>
                                                <h4>Course Uploaded</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-xs-6">
                                        <div class="newUsers text-center">
                                            <div class="newUsersInfo">
                                                <h4>400</h4>
                                                <h4>Job Applied</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-xs-6">
                                        <div class="newUsers text-center">
                                            <div class="newUsersInfo">
                                                <h4>15</h4>
                                                <h4>CV Uploaded</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-xs-6">
                                        <div class="newUsers text-center">
                                            <div class="newUsersInfo">
                                                <h4>25</h4>
                                                <h4>Course Enrolled</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-xs-6">
                                        <div class="newUsers text-center">
                                            <div class="newUsersInfo">
                                                <h4>150</h4>
                                                <h4>Job Posted</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <h2 class="text-center">This Month</h2>
                                    <div class="col-sm-4 col-xs-6">
                                        <div class="newUsers text-center">
                                            <div class="newUsersIcon"><i class="fa fa-user fa-2x fa-fw"></i></div>
                                            <div class="newUsersInfo">
                                                <h4>2500</h4>
                                                <h4>Users</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-xs-6">
                                        <div class="newUsers text-center">
                                            <div class="newUsersInfo">
                                                <h4>200</h4>
                                                <h4>Course Uploaded</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-xs-6">
                                        <div class="newUsers text-center">
                                            <div class="newUsersInfo">
                                                <h4>1000</h4>
                                                <h4>Job Applied</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-xs-6">
                                        <div class="newUsers text-center">
                                            <div class="newUsersInfo">
                                                <h4>800</h4>
                                                <h4>CV Uploaded</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-xs-6">
                                        <div class="newUsers text-center">
                                            <div class="newUsersInfo">
                                                <h4>800</h4>
                                                <h4>Course Enrolled</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-xs-6">
                                        <div class="newUsers text-center">
                                            <div class="newUsersInfo">
                                                <h4>2500</h4>
                                                <h4>Job Posted</h4>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <!-- Start Tab Courses  -->
                            <div id="tab2-content">
                                <div class="row">
                                    <div class="col-sm-12 col-xs-12">
                                        <div class="text-center activityButtons">
                                            <button id="addCourse"    class="btn btn-danger btn-lg ">Add Course</button>
                                            <button id="editCourse" class="btn btn-danger inactive btn-lg">Edit/Delete Course</button>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <section class="courses" id="addCourseBox">
                                        <h1> Add Course</h1>
                                    <form class="form-inline courseForm" method="post">
                                        <h3>Course Name</h3> 
                                        <input type="text" class="form-control input-lg"/>
                                        <h3>Instuctor Name </h3>
                                        <select class="chosen-select1" tabindex="2">
                                            <option value=""></option>
                                            <option value="Ahmed">Ahmed</option> 
                                            <option value="Mohamed">Mohamed</option> 
                                            <option value="Adel">Adel</option> 
                                        </select>
                                        <h3 class="coursePrequisits">Course Prequisits</h3>
                                        <select class="chosen-select4" multiple tabindex="2">
                                            <option value=""></option>
                                            <option value="HTC">HTC</option> 
                                            <option value="HP">HP</option> 
                                            <option value="Dell">Dell</option> 
                                        </select>
                                        <h3>Student Will Learn</h3>
                                        <textarea class="form-control"></textarea>
                                        <h3>Course Content</h3>
                                        <input type="text" class="form-control input-lg"/>
                                        <h3>Course Logo</h3>
                                        <div class="profile">
                                            <img src="" alt="Profile Photo"/>
                                            <div class="editFile">
                                                Upload
                                                <input type="file" id="profileImage" class="hideInput" />
                                            </div>
                                        </div>
                                        <div class="boxFormButton">
                                            <button type="reset" class="btn btn-danger formButtons"> Clear </button>
                                            <button type="submit" class="btn btn-primary formButtons"> Save</button>
                                        </div>
                                    </form>
                                </section>
                                    <section class="editCourses" id="editCourseBox">
                                    <h1> Edit/Delete Course</h1>
                                    <form class="form-inline formSearch courseForm" method="post">
                                        <input type="text" class="form-control input-lg searchInput" placeholder="Course Name ... "/>
                                        <button class="btn btn-danger searchButton" type="submit"><i class="fa fa-search fa-lg fa-fw"></i> Search</button>
                                    </form>
                                    <form class="form-inline" method="post">
                                        <h3>Course Name</h3> 
                                        <input type="text" class="form-control input-lg"/>
                                        <h3>Instuctor Name </h3>
                                        <select class="chosen-select1" tabindex="2">
                                            <option value=""></option>
                                            <option value="Ahmed">Ahmed</option> 
                                            <option value="Mohamed">Mohamed</option> 
                                            <option value="Adel">Adel</option> 
                                        </select>
                                        <h3 class="coursePrequisits">Course Prequisits</h3>
                                        <select class="chosen-select4" multiple tabindex="2">
                                            <option value=""></option>
                                            <option value="HTC">HTC</option> 
                                            <option value="HP">HP</option> 
                                            <option value="Dell">Dell</option> 
                                        </select>
                                        <h3>Student Will Learn</h3>
                                        <textarea class="form-control"></textarea>
                                        <h3>Course Content</h3>
                                        <input type="text" class="form-control input-lg"/>
                                        <h3>Course Logo</h3>
                                        <div class="profile">
                                            <img src="" alt="Profile Photo"/>
                                            <div class="editFile">
                                                Upload
                                                <input type="file" id="profileImage" class="hideInput" />
                                            </div>
                                        </div>
                                        <div class="boxFormButton">
                                            <button type="reset" class="btn btn-danger formButtons"> Clear </button>
                                            <button type="submit" class="btn btn-primary formButtons"> Save </button>
                                            <button type="" class="btn btn-primary formButtons">Delete Full Course Data </button>
                                        </div>
                                    </form>
                                </section> 
                                </div>                               
                            </div>
                            <!-- Start Tab Instructors -->
                            <div id="tab3-content">
                                <div class="row">
                                    <div class="col-sm-12 col-xs-12">
                                        <div class="text-center activityButtons">
                                            <button id="addInstructor"    class="btn btn-danger btn-lg">Add Instructor</button>
                                            <button id="editInstructor" class="btn btn-danger inactive btn-lg">Edit/Delete Instructor</button>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <section class="instructor" id="addInstructorBox">
                                        <h1> Add Instructor</h1>
                                        <form class="form-inline instructorForm" method="post">
                                            <h3>Instructor Name</h3> 
                                            <input type="text" class="form-control input-lg"/>
                                            <h3>Instructor Job</h3> 
                                            <input type="text" class="form-control input-lg"/>
                                            <h3>Facebook Link</h3>
                                            <input type="text" class="form-control input-lg"/>
                                            <h3>LinkedIn Link</h3>
                                            <input type="text" class="form-control input-lg"/>
                                            <h3>Description</h3>
                                            <textarea class="form-control"></textarea>
                                            <h3>Profile Photo</h3>
                                            <div class="profile">
                                                <img src="" alt="Profile Photo"/>
                                                <div class="editFile">
                                                    Upload
                                                    <input type="file" id="profileImage" class="hideInput" />
                                                </div>
                                            </div>
                                            <div class="boxFormButton">
                                                <button type="reset" class="btn btn-danger formButtons"> Clear </button>
                                                <button type="submit" class="btn  btn-primary formButtons"> Save </button>
                                            </div>
                                        </form>
                                    </section>
                                    <section class="editInstructor" id="editInstructorBox">
                                        <h1> Edit/Delete Instructor </h1>
                                        <form class="form-inline formSearch" method="post">
                                            <input type="text" class="form-control input-lg searchInput" placeholder="Instructor Name ... "/>
                                            <button class="btn btn-danger searchButton" type="submit"><i class="fa fa-search fa-lg fa-fw"></i> Search</button>
                                        </form>

                                        <form class="form-inline instructorForm" method="post">
                                            <h3>Instuctor Name </h3>
                                            <select class="chosen-select1" tabindex="2">
                                                <option value=""></option>
                                                <option value="Ahmed">Ahmed</option> 
                                                <option value="Mohamed">Mohamed</option> 
                                                <option value="Adel">Adel</option> 
                                            </select>
                                            <h3>Instructor Job</h3> 
                                            <input type="text" class="form-control input-lg"/>
                                            <h3>Facebook Link</h3>
                                            <input type="text" class="form-control input-lg"/>
                                            <h3>LinkedIn Link</h3>
                                            <input type="text" class="form-control input-lg"/>
                                            <h3>Description</h3>
                                            <textarea class="form-control"></textarea>
                                            <h3>Profile Photo</h3>
                                            <div class="profile">
                                                <img src="" alt="Profile Photo"/>
                                                <div class="editFile">
                                                    Upload
                                                    <input type="file" id="profileImage" class="hideInput" />
                                                </div>
                                            </div>
                                            <div class="boxFormButton">
                                                <button type="reset" class="btn  btn-danger formButtons"> Clear </button>
                                                <button type="submit" class="btn btn-primary formButtons"> Save </button>
                                                <button type="" class="btn  btn-primary formButtons">Delete Full Instructor Data </button>
                                            </div>
                                        </form>
                                    </section>
                                </div>
                            </div>
                            <!-- Start Tab Jobs -->
                            <div id="tab4-content">
                                <div class="row">
                                    <div class="col-sm-12 col-xs-12">
                                        <div class="text-center activityButtons">
                                            <button id="addJob"    class="btn btn-danger btn-lg">Add Job</button>
                                            <button id="editJob" class="btn btn-danger inactive btn-lg">Edit/Delete Job</button>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <section class="jobs" id="addJobBox">
                                        <h1> Add Job </h1>
                                        <form class="form-inline jobForm" method="post">
                                            <h3>Job Title</label> 
                                            <input type="text" class="form-control input-lg"/>
                                            <h3>Company Name </h3><br/>
                                            <select class="chosen-select2" tabindex="2">
                                                <option value=""></option>
                                                <option value="HTC">HTC</option> 
                                                <option value="HP">HP</option> 
                                                <option value="Dell">Dell</option> 
                                            </select>
                                            <h3>Choose Seniority Level</h3>
                                            <input type="checkbox" id="cb" />
                                            <label for="cb">
                                                <span class="junior">Junior</span>
                                                <span class="senior">Senior</span>
                                            </label>
                                            
                                            <h3>Choose Salary Level</h3>
                                            <input type="checkbox" id="cb2"/>
                                            <label for="cb2">
                                                <span class="negotiable">Negotiable</span>
                                                <span class="fixed">Fixed</span>
                                            </label>
                                            <div class="salaryList">
                                                <select class="chosen-select5" tabindex="2">
                                                    <option value=""></option>
                                                    <option value="2000$">2000$</option> 
                                                    <option value="4000$">4000$</option> 
                                                    <option value="6000$">6000$</option> 
                                                </select>
                                            </div>
                                            <h3>Top Skill Needed</h3>
                                            <select class="chosen-select3" multiple tabindex="2">
                                                <option value=""></option>
                                                <option value="HTC">PHP</option> 
                                                <option value="HP">Java</option> 
                                                <option value="Dell">Dell</option> 
                                            </select>
                                            <h3>Main Requirements</h3>
                                            <textarea class="form-control"></textarea>
                                            <h3>Job Description</h3>
                                            <textarea class="form-control"></textarea>
                                            <button type="reset" class="btn btn-danger formButtons"> Clear </button>
                                            <button type="submit" class="btn btn-primary formButtons"> Save</button>
                                        </form>
                                    </section>
                                    <section class="editJobs" id="editJobBox">
                                        <h1> Edit/Delete Job</h1>
                                        <form class="form-inline formSearch jobForm" method="post">
                                            <input type="text" class="form-control input-lg searchInput" placeholder="Job Name ... "/>
                                            <button class="btn  btn-danger searchButton" type="submit"><i class="fa fa-search fa-lg fa-fw"></i> Search</button>
                                        </form>
                                        <form class="form-inline jobForm" method="post">
                                            <label>Job Title</label> 
                                            <input type="text" class="form-control input-lg"/>
                                            <h3>Company Name </h3><br/>
                                            <select class="chosen-select2" tabindex="2">
                                                <option value=""></option>
                                                <option value="HTC">HTC</option> 
                                                <option value="HP">HP</option> 
                                                <option value="Dell">Dell</option> 
                                            </select>
                                            <h3>Choose Seniority Level</h3>
                                            <input type="checkbox" id="cb3" />
                                            <label for="cb3">
                                                <span class="junior">Junior</span>
                                                <span class="senior">Senior</span>
                                            </label>
                                            
                                            <h3>Choose Salary Level</h3>
                                            <input type="checkbox" id="cb4"/>
                                            <label for="cb4">
                                                <span class="negotiable">Negotiable</span>
                                                <span class="fixed">Fixed</span>
                                            </label>
                                            <div class="salaryList">
                                                <select class="chosen-select5" tabindex="2">
                                                    <option value=""></option>
                                                    <option value="2000$">2000$</option> 
                                                    <option value="4000$">4000$</option> 
                                                    <option value="6000$">6000$</option> 
                                                </select>
                                            </div>
                                            <h3>Top Skill Needed</h3>
                                            <select class="chosen-select3" multiple tabindex="2">
                                                <option value=""></option>
                                                <option value="HTC">PHP</option> 
                                                <option value="HP">Java</option> 
                                                <option value="Dell">Dell</option> 
                                            </select>
                                            <h3>Main Requirements</h3>
                                            <textarea class="form-control"></textarea>
                                            <h3>Job Description</h3>
                                            <textarea class="form-control"></textarea>
                                            <button type="reset" class="btn btn-danger formButtons"> Clear </button>
                                            <button type="submit" class="btn btn-primary formButtons"> Save </button>
                                            <button type="" class="btn btn-primary formButtons">Delete Full Course Data </button>
                                        </form>
                                    </section>
                                </div>
                                
                            </div>
                             <!-- Start Tab Compaines -->
                            <div id="tab5-content">
                                <div class="row">
                                    <div class="col-sm-12 col-xs-12">
                                        <div class="text-center activityButtons">
                                            <button id="addCompany"    class="btn btn-danger btn-lg">Add Company</button>
                                            <button id="editCompany" class="btn btn-danger inactive btn-lg">Edit/Delete Company</button>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <section class="companies" id="addCompanyBox">
                                        <h1> Add Company</h1>
                                        <form class="form-inline companiesForm" method="post">
                                            <label>Company Name</label> 
                                            <input type="text" class="form-control input-lg"/>
                                            <label class="socialMediaLabel">Social Media</label> 
                                            <input type="text" class="form-control input-lg socialMediaText"/>
                                            <button class="btn btn-primary addSocial ">Add</button>
                                            <div class="socialIcons">
                                                <a href="#"><i class="fa fa-facebook-square fa-2x fw"></i></a>
                                                <a href="#"><i class="fa fa-twitter-square fa-2x fw"></i></a>
                                                <a href="#"><i class="fa fa-twitter-square fa-2x fw"></i></a>
                                            </div>
                                            <h3>Profile Photo</h3>
                                            <div class="profile">
                                                <img src="" alt="Profile Photo"/>
                                                <div class="editFile">
                                                    Upload
                                                    <input type="file" id="profileImage" class="hideInput" />
                                                </div>
                                            </div>
                                            <h3>Company Bio</h3>
                                            <textarea class="form-control"></textarea>
                                            <div class="boxFormButton">
                                                <button type="reset" class="btn btn-danger formButtons"> Clear </button>
                                                <button type="submit" class="btn btn-primary formButtons"> Save</button>
                                            </div>
                                        </form>
                                    </section>   
                                    <section class="editCompanies" id="editCompanyBox">
                                        <h1> Edit/Delete Company</h1>
                                        <form class="form-inline formSearch companiesForm" method="post">
                                            <input type="text" class="form-control input-lg searchInput" placeholder="Company Name ... "/>
                                            <button class="btn btn-danger searchButton" type="submit"><i class="fa fa-search fa-lg fa-fw"></i> Search</button>
                                        </form>
                                        <form class="form-inline companiesForm" method="post">
                                            <label>Company Name</label> 
                                            <input type="text" class="form-control input-lg"/>
                                            <label class="socialMediaLabel">Social Media</label> 
                                            <input type="text" class="form-control input-lg socialMediaText"/>
                                            <button class="btn btn-primary addSocial ">Add</button>
                                            <div class="socialIcons">
                                                <a href="#"><i class="fa fa-facebook-square fa-2x fw"></i></a>
                                                <a href="#"><i class="fa fa-twitter-square fa-2x fw"></i></a>
                                                <a href="#"><i class="fa fa-twitter-square fa-2x fw"></i></a>
                                            </div>
                                            <h3>Profile Photo</h3>
                                           <div class="profile">
                                                <img src="" alt="Profile Photo"/>
                                                <div class="editFile">
                                                    Upload
                                                    <input type="file" id="profileImage" class="hideInput" />
                                                </div>
                                            </div>
                                            <h3>Company Bio</h3>
                                            <textarea class="form-control"></textarea>
                                            <button type="reset" class="btn  btn-danger formButtons"> Clear </button>
                                            <button type="submit" class="btn  btn-primary formButtons"> Save </button>
                                            <button type="" class="btn  btn-primary formButtons">Delete Full Course Data </button>
                                        </form>
                                    </section>   
                                </div>
                            </div>
                             <!-- Start Tab Admin Setting -->
                            <div id="tab6-content">
                                <section class="adminSetting">
                                    <h3 class="addAdminText"><i class="fa fa-arrow-right fa-lg fa-fw addAdminIconRight"></i><i class="fa fa-arrow-down fa-lg fa-fw addAdminIconDown"></i>Add Admin</h3>
                                    <form class="adminSettingForm form-inline " method="post">
                                        <label>Name</label> 
                                        <input type="text" class="form-control input-lg"/>
                                        <label>Password</label> 
                                        <div class="passwordBox">
                                            <input type="password" placeholder="Enter Your Password" class="form-control passwordInput input-lg"/>
                                            <i class="fa fa-eye fa-lg" aria-hidden="true"></i>
                                        </div>
                                        <label>Confirm Password</label> 
                                        <div class="passwordBox">
                                            <input type="password" placeholder="Enter Your Password" class="form-control passwordInput input-lg"/>
                                            <i class="fa fa-eye fa-lg" aria-hidden="true"></i>
                                        </div>
                                        <h3>Profile Photo</h3>
                                        <div class="profile">
                                            <img src="" alt="Profile Photo"/>
                                            <div class="editFile">
                                                Upload
                                                <input type="file" id="profileImage" class="hideInput" />
                                            </div>
                                        </div>
                                        <button class="btn btn-primary adminSettingFormButton" type="submit">Submit</button>
                                    </form>
                                    <h3 class="adminActivityText"><i class="fa fa-arrow-right fa-lg fa-fw adminActivityIconRight"></i><i class="fa fa-arrow-down fa-lg fa-fw adminActivityIconDown"></i>Admin Activity</h3>
                                    <div class="allAdminsBox">
                                        <table class="table">
                                            <tr>
                                                <td class="adminInfo">Username</td>
                                                <td class="adminInfo">Last Online</td>
                                                <td class="adminInfo">Edit</td>
                                                <td class="adminInfo">Delete</td>
                                            </tr>
                                            <tr>    
                                                <td>Ahmed</td>
                                                <td>17-9-2017</td>
                                                <td>
                                                    <button class="btn btn-primary editAdminButton"> Edit</button>
                                                </td>
                                                <td>    
                                                    <a class="btn btn-danger" href="#">Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Ahmed</td>
                                                <td>17-9-2017</td>
                                                <td>
                                                    <button class="btn btn-primary editAdminButton"> Edit</button>
                                                </td>
                                                <td>
                                                    <a class="btn btn-danger" href="#">Delete</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    
                                    <form class="adminSettingForm form-inline " id="editAdminForm" method="post">
                                        <label>Name</label> 
                                        <input type="text" class="form-control input-lg"/>
                                        <label>Password</label> 
                                        <div class="passwordBox">
                                            <input type="password" placeholder="Enter Your Password" class="form-control passwordInput input-lg"/>
                                            <i class="fa fa-eye fa-lg" aria-hidden="true"></i>
                                        </div>
                                        <label>Confirm Password</label> 
                                        <div class="passwordBox">
                                            <input type="password" placeholder="Enter Your Password" class="form-control passwordInput input-lg"/>
                                            <i class="fa fa-eye fa-lg" aria-hidden="true"></i>
                                        </div>
                                        <h3>Profile Photo</h3>
                                        <div class="profile">
                                            <img src="" alt="Profile Photo"/>
                                            <div class="editFile">
                                                Upload
                                                <input type="file" id="profileImage" class="hideInput" />
                                            </div>
                                        </div>
                                        <button class="btn btn-primary adminSettingFormButton" type="submit">Submit</button>
                                    </form>
                                </section>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- End Admin-Panel Page -->
        <?php require 'scripts.php'; ?>
    </body>
</html>