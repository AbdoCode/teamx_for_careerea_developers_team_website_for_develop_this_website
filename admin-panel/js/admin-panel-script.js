/*global $, console, smoothScroll, alert, WOW, FileReader, URL*/
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
        $(".adminPanel .tabsDetails .activityButtons button").click(function () {
            
            $(this).removeClass("inactive").siblings().addClass("inactive");
        });
        /*
            Note: # ==> for id , myId ==> it get value of id of li , -content ==> to get value of id of div
        */
    });
    
    
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
    
    // profile img of every section
    $(function () {
        $('.adminPanel .tabsDetails .editFile #profileImage').change(function (e) {
            var img = URL.createObjectURL(e.target.files[0]);
            $('.adminPanel .tabsDetails .profile img').attr('src', img);
        });
    });
    
    
    // tab courses
    $(".adminPanel .tabsDetails .activityButtons button").click(function () {
        
        var activityId = $(this).attr("id");
        $("#" + activityId + "Box").fadeIn(1000).siblings().hide();
    });


    
    // Trigger Chosen Plugin
    
    $(".chosen-select1").chosen({
        width: "60%",
        placeholder_text_single: "Choose an Instructor name ...",
        no_results_text: "No Instructor match"

    });
    $(".chosen-select2").chosen({
        width: "60%",
        placeholder_text_single: "Choose a Company name ...",
        no_results_text: "No Company match"

    });
    $(".chosen-select3").chosen({
        width: "60%",
        placeholder_text_multiple : "Choose Top Skill Need ..."
    });
    $(".chosen-select4").chosen({
        width: "60%",
        placeholder_text_multiple : "Choose Course Prequisits ..."
    });
    $(".chosen-select5").chosen({
        width: "30%",
        placeholder_text_single: "Choose Job Salary ...",
        no_results_text: "No Salary match"

    });
    
    /* Toggle Buttons */
    $(".fixed").click(function () {
        if ($(".salaryList").css('display') === 'none') {
            $(".salaryList").fadeIn(1000);
        } else {$(".salaryList").fadeOut(1000); }
    });
    $(".negotiable").click(function () {
        if ($(".salaryList").css('display') === 'block') {
            $(".salaryList").fadeOut(1000);
        } else {$(".salaryList").fadeIn(1000); }
    });
    
    // admin setting tab
    $(".editAdminButton").click(function () {
        if ($("#editAdminForm").css("display") === "none") {
            $("#editAdminForm").fadeIn(1000);
        } else {$("#editAdminForm").fadeOut(1000); }
    });
});