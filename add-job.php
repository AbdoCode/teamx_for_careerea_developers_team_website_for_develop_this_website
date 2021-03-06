<?php
    session_start();
    include "php/init.php";
 $pageTitle = "Add Job";

if(!isset($_SESSION['userID']) && !isset($_SESSION['companyID']))
    header('Location: signUp.php');

if(isset($_POST['right_answer'])) {

    //echo'<script>alert("'.$_POST['rightAnswer'].'")</script>';
}


?>

<!DOCTYPE html>
<html lang="en">
    <?php require 'head.php'; ?>
    <body>
        <?php include 'navbar.php'; ?>

        <div class="add-job">
            <div class="container">

                <?php

                if(isset($_SESSION['companyID']))
                    echo'<select class="form-control">
                    <option value="" selected disabled>Job Title</option>
                    <option value="">Software Developer</option>
                    <option value="">Web Developer</option>
                    <option value="">Graphic Designer</option>
                    <option value="">Software Tester</option>

                </select>';
                else
                    echo'<h1>Senior PHP Developer</h1>';

                ?>
                <div class="jobDetails">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#technical" aria-controls="technical" role="tab" data-toggle="tab">Technical Test</a></li>
                        <li role="presentation"><a href="#hr" aria-controls="hr" role="tab" data-toggle="tab">HR Test</a></li>
                        <li role="presentation"><a href="#task" aria-controls="task" role="tab" data-toggle="tab">Task</a></li>
                        <?php
                        if(isset($_SESSION['companyID']))
                            echo'<li role="presentation"><a href="#finish" aria-controls="finish" role="tab" data-toggle="tab">Finish</a></li>';
                        ?>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="technical">
                            <form method="post">
                                <div>
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#Theoretical" aria-controls="Theoretical" role="tab" data-toggle="tab">Theoretical Question</a></li>
                                        <li role="presentation"><a href="#Photo" aria-controls="Photo" role="tab" data-toggle="tab">Photo Question</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="Theoretical">

                                            <?php
                                            if(isset($_SESSION['companyID']))
                                            echo'<a class="btn btn-primary pull-right addQ">
                                                <i class="fa fa-plus-circle"></i>
                                                Add Question
                                            </a>';
                                            ?>
                                            <div class="allQusetion">
                                                <div class="question">
                                                    <label>1-</label>
                                                    <input type="text" placeholder="Type Your Question" class="form-control" />
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon1">A</span>
                                                        <input type="text" class="form-control">
                                                        <label>
                                                        <input type="radio" value="1a" name="rightAnswer"/> Right answer
                                                            </label>
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon1">B</span>
                                                        <input type="text" class="form-control">
                                                        <label>
                                                            <input type="radio" value="1b" name="rightAnswer"/> Right answer
                                                        </label>
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon1">C</span>
                                                        <input type="text" class="form-control">
                                                        <label>
                                                            <input type="radio" value="1c" name="rightAnswer"/> Right answer
                                                        </label>
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon1">D</span>
                                                        <input type="text" class="form-control">
                                                        <label>
                                                            <input type="radio" value="1d" name="rightAnswer"/> Right answer
                                                        </label>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="Photo">
                                            <div class="photoQuestion">
                                                <div style="position: relative" class="uploads">
                                                    <label for="files_upload" class="btn btn-primary btn-sm">
                                                        <span class="glyphicon glyphicon-upload"></span> Upload Photo
                                                    </label>
                                                    <input type="file" id="files_upload" class="btn btn-primary" accept="image/*">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div role="tabpanel" class="tab-pane" id="hr">
                            <div class="hr">
                    <?php
                    if(isset($_SESSION['companyID']))
                        echo'
                                <a class="btn btn-primary pull-right addQ">
                                    <i class="fa fa-plus-circle"></i>
                                    Add Question
                                </a>';
                    ?>

                                <div class="clearfix"></div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><span>1- </span>Question title</h3>
                                    </div>
                                    <div class="panel-body">
                                        <textarea class="form-control" rows="8"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane" id="task">
                            <div class="task">
                                <form class="form-horizontal">
<?php
                                if(isset($_SESSION['companyID']))
                                    echo'
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Task Title" />
                                    </div>';
                                    else
                                        echo'<b>Web page security</b><br>';

                                if(isset($_SESSION['companyID']))
                                    echo'
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option value="" selected disabled>Dead Line</option>
                                            <option value="">1 Day</option>
                                            <option value="">2 Days</option>
                                            <option value="">3 Days</option>
                                            <option value="">4 Days</option>
                                            <option value="">5 Days</option>
                                            <option value="">6 Days</option>
                                            <option value="">7 Days</option>
                                        </select>
                                    </div>';
                                else
                                    echo'Dead Line: <b style="color: red">4 Days</b><br>';


                                if(isset($_SESSION['companyID']))
                                echo'
                                    <div class="form-group">
                                        <label>Expected Answer: </label>
                                        <input type="radio" value="link" name="answer" id="link"/>
                                        <label for="link">Link</label>
                                        <input type="radio" value="attachment" name="answer" id="attachment"/>
                                        <label for="attachment">Attachment</label>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="5" placeholder="Task Content"></textarea>
                                    </div>';

                                else
                                    echo'<br><h1>Task Content</h1><p>Your task is to develop a web page that includes 3 buttons at the header 1. Login 2. Sign up 3. contact us </p>';

                                    if(isset($_SESSION['userID']))
                                    echo'<div class="form-group">
                                        <input type="text" class="form-control" placeholder="Link" />
                                    </div>

                                    <div class="form-group">
                                        <div style="position: relative" class="uploads">
                                            <label for="files_upload" class="btn btn-primary btn-sm">
                                                <span class="glyphicon glyphicon-upload"></span> Upload Attachment
                                            </label>
                                            <input type="file" id="files_upload" class="btn btn-primary" accept="image/*">
                                        </div>
                                    </div>';

                                    ?>

                                </form>
                            </div>
                        </div>

                        <?php
                        if(isset($_SESSION['companyID']))
                        echo'<div role="tabpanel" class="tab-pane" id="finish">
                            <div class="finish">

                                Number of Technical Questions: <br> <br>
                                Number of HR Questions: <br><br>

                                <input type="submit" class="btn btn-primary" value="Post Job">
                            </div>
                        </div>
                        ';
                        ?>

                    </div>
                </div>
            </div>
        </div>

        <?php include 'footer.php'; ?>
        <?php require 'scripts.php'; ?>
    </body>
</html>