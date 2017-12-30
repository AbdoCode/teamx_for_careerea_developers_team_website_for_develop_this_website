<?php
    session_start();
    include "php/init.php";
    $pageTitle = "Add Job";
?>

<!DOCTYPE html>
<html lang="en">
    <?php require 'head.php'; ?>
    <body>
        <?php include 'navbar.php'; ?>

        <div class="add-job">
            <div class="container">
                <select class="form-control">
                    <option value="" selected disabled>Job Title</option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                </select>
                <div class="jobDetails">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#technical" aria-controls="technical" role="tab" data-toggle="tab">Technical Test</a></li>
                        <li role="presentation"><a href="#hr" aria-controls="hr" role="tab" data-toggle="tab">HR Test</a></li>
                        <li role="presentation"><a href="#task" aria-controls="task" role="tab" data-toggle="tab">Task</a></li>
                        <li role="presentation"><a href="#finish" aria-controls="finish" role="tab" data-toggle="tab">Finish</a></li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="technical">
                            <form>
                                <div class="type">
                                    <input type="radio" value="photo" name="question" id="photo"/>
                                    <label for="photo">Photo Question</label>
                                    <input type="radio" value="theoretical" name="question" id="theoretical"/>
                                    <label for="theoretical">Theoretical Question</label>
                                </div>
                                <div class="question">
                                    <label>1-</label>
                                    <input type="text" placeholder="Type Your Question" class="form-control" />
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">A</span>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">B</span>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">C</span>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">D</span>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="btn btn-primary">
                                        Next
                                        <i class="fa fa-chevron-right fa-fw"></i>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="hr">
                            <div class="hr">
                                <a class="btn btn-primary pull-right addQ">
                                    <i class="fa fa-plus-circle"></i>
                                    Add Question
                                </a>
                                <div class="clearfix"></div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Question title</h3>
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
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Task Title" />
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option value="" selected disabled>Dead Line</option>
                                            <option value=""></option>
                                            <option value=""></option>
                                            <option value=""></option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Expected Answer: </label>
                                        <input type="radio" value="link" name="answer" id="link"/>
                                        <label for="link">Link</label>
                                        <input type="radio" value="attachment" name="answer" id="attachment"/>
                                        <label for="attachment">Attachment</label>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="5" placeholder="Task Content"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Link" />
                                    </div>
                                    <div class="form-group">
                                        <div style="position: relative" class="uploads">
                                            <label for="files_upload" class="btn btn-primary btn-sm">
                                                <span class="glyphicon glyphicon-upload"></span> Upload Attachment
                                            </label>
                                            <input type="file" id="files_upload" class="btn btn-primary" accept="image/*">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="finish">
                            <div class="finish">
                                <a class="btn btn-primary pull-right addQ">
                                    <i class="fa fa-plus-circle"></i>
                                    Add Question
                                </a>
                                <div class="clearfix"></div>
                                <select class="form-control">
                                    <option value="" selected disabled>Right Answer</option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                </select>
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