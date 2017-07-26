/*global $, console, smoothScroll, alert, WOW, FileReader*/
// view-Course-Details Page ==> Tabs
$(document).ready(function () {
    'use strict';
    $(".adminPanel .tabsContainer .myTabs li").click(function () {

        var viewCourseTabID = $(this).attr("id");
        // Remove Class "inactive" From Clicked Li and Add it to other Li in the Same UI 
        $(this).removeClass("inactive").siblings().addClass("inactive");
        //hide All Divs When Click On The Li
        $(".adminPanel .tabsDetails div[id^=tab]").hide(1000); // id start with tab 
        // Show Div When Click On The Li 
        $("#" + viewCourseTabID + "-content").fadeIn(1000);
        /*
            Note: # ==> for id , myId ==> it get value of id of li , -content ==> to get value of id of div
        */
    });
    
    /* courses Tab*/
    $(".editCourseButton").click(function () {
        $(".courses").hide(1000);
        $(".editCourses").fadeIn(1000);
    });
    $(".addCourseButton").click(function () {
        $(".editCourses").hide(1000);
        $(".courses").fadeIn(1000);
    });
    
    /* Instructor Tab */
    $(".editInstructorButton").click(function () {
       
        $(".instructor").hide(1000);
        $(".editInstructor").fadeIn(1000);
    });
    $(".addInstructorButton").click(function () {
        $(".editInstructor").hide(1000);
        $(".instructor").fadeIn(1000);
    });
    
    /* job Tab */
    $(".editJobButton").click(function () {
        $(".jobs").hide(1000);
        $(".editJobs").fadeIn(1000);
    });
    $(".addJobButton").click(function () {
        $(".editJobs").hide(1000);
        $(".jobs").fadeIn(1000);
    });
    
    /* compaines Tab */
    $(".editCompaniesButton").click(function () {
        $(".companies").hide(1000);
        $(".editCompanies").fadeIn(1000);
    });
    $(".addCompaniesButton").click(function () {
        $(".editCompanies").hide(1000);
        $(".companies").fadeIn(1000);
    });
    
    /* Admin Setting Tab */
    
    /* add admin arrow */
    
    $(".addAdminIconRight").click(function () {
        $(".addAdminIconRight").css({
            display: "none"
        });
        $(".addAdminIconDown").fadeIn();
        $(".adminSettingForm").fadeIn(1000);
    });
    $(".addAdminIconDown").click(function () {
        $(".addAdminIconDown").css({
            display: "none"
        });
        $(".addAdminIconRight").fadeIn();
        $(".adminSettingForm").hide(1000);
    });
    
    // admin activity arrow
    
    $(".adminActivityIconRight").click(function () {
        $(".adminActivityIconRight").css({
            display: "none"
        });
        $(".adminActivityIconDown").fadeIn();
        $(".allAdminsBox").fadeIn(1000);
    });
    $(".adminActivityIconDown").click(function () {
        $(".adminActivityIconDown").css({
            display: "none"
        });
        $(".adminActivityIconRight").fadeIn();
        $(".allAdminsBox").hide(1000);
    });
    
    
    
    /* Password eye animation */
    $('.passwordBox i').on('mouseenter mouseleave', function () {
        $('input').toggleClass('active');
        if ($('input').hasClass('active')) {
            $(this).attr('class', "fa fa-eye-slash fa-lg")
                .prev('input').attr('type', "text");
        } else {
            $(this).attr('class', "fa fa-eye fa-lg")
                .prev('input').attr('type', 'password');
        }
    });
    
    /* upload profile image */
    
    var brand = document.getElementById('logo-id');
    brand.className = 'attachment_upload';
    brand.onchange = function () {
        document.getElementById('fakeUploadLogo').value = this.value.substring(12);
    };

    // Source: http://stackoverflow.com/a/4459419/6396981
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('.img-preview').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#logo-id").change(function () {
        readURL(this);
    });
    
    
    /* jobs buttons */
    $("#salaryTwo").click(function () {
       
        $(".salaryList").fadeIn(1000);
    });
    $("#salaryOne").click(function () {
       
        $(".salaryList").fadeOut(1000);
    });
    
});