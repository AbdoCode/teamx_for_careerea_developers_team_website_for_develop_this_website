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

});