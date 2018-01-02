/*global $, console, smoothScroll, alert, WOW, URL, windos*/
$(document).ready(function () {
    'use strict';

    $(".companySignUp .signMainForm button").on('click', function () {

        $(".companySignUp .signMainForm").hide();
        $(".companySignUp .packages").show();

    });
    $(".companySignUp .packages button").on('click', function () {

        $(".companySignUp .packages").hide();
        $(".companySignUp .accessForm").show();

    });
    $(".companySignUp .accessForm button").on('click', function () {

        $(".companySignUp .accessForm").hide();
        $(".companySignUp .finalStep").show();

    });
    $(".companySignUp .finalStep .final > button").on('click', function () {

        $(".companySignUp .finalStep .reviewBlock p span").show();
        $(".companySignUp .finalStep .reviewBlock a").css('display', 'block');

    });
    $(".companySignUp .period span").on('click', function () {

        $(this).addClass('active').siblings().removeClass('active');

    });

    var i = 2;
    $(".add-job #hr .addQ").on('click', function () {
        if (i < 11) {
            $(".hr").append('<div class="panel panel-default"><div class="panel-heading"><h3 class="panel-title"><span>'+ i +'- </span>Question title</h3></div><div class="panel-body"><textarea class="form-control" rows="8"></textarea></div></div>');
            i++;
        }
    });

    var j = 2;
    $(".add-job #Theoretical .addQ").on('click', function () {
        if (j < 11) {
            $("#Theoretical .allQusetion").append('<div class="question"><label>'+ j +'- </label><input type="text" placeholder="Type Your Question" class="form-control" /><div class="input-group"><span class="input-group-addon" id="basic-addon1">A</span><input type="text" class="form-control"><input type="radio" name="rightAnswer"/></div><div class="input-group"><span class="input-group-addon" id="basic-addon1">B</span><input type="text" class="form-control"><input type="radio" name="rightAnswer" /></div><div class="input-group"><span class="input-group-addon" id="basic-addon1">C</span><input type="text" class="form-control"><input type="radio" name="rightAnswer" /></div><div class="input-group"><span class="input-group-addon" id="basic-addon1">D</span><input type="text" class="form-control"><input type="radio" name="rightAnswer" /></div></div>');
            j++;
        }
    });
});