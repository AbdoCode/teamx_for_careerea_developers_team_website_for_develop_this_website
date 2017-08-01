/*global $, console, smoothScroll, alert, WOW, URL, windos*/
$(document).ready(function () {
    'use strict';

    // overlay for whole page

    $(".sign:first-of-type, .jobs .allJobs .jobBox .boxHover button:last-of-type, .jobs .allJobs .jobBox .boxHover button:first-of-type, .courses .allCourses .courseBox .boxHover button, .profile .profileInfo .profileContent .profileAbout .tabsDetails #tab1Content .addSkillButton, .profile .profileInfo .profileContent .profileAbout .tabsDetails #tab1Content .arrangeSkillButton, .profile .profileInfo .profileContent .profileAbout .tabsDetails #tab1Content .editSkillButton, .signUp .container > span, .settings .subSettings .content .security .changePasswordButton, .coursesPage .coursesContainer .activityCourse .takeCourse, .viewCourseDetails .takeCourse, .viewJobDetails .applyJob, .viewJobDetails .compareSkills, .notification .notificationContent .tabsDetails #tab1Content .takeCourse, .notification .notificationContent .tabsDetails #tab2Content .compareSkills, .notification .notificationContent .tabsDetails #tab2Content .applyJob, .coursesPage .jobsContainer .activityCourse .applyJob, .coursesPage .jobsContainer .activityCourse .compareSkills, .profile .profileInfo .profileContent .profileAbout .tabsDetails .takeCourse, .profile .profileInfo .profileContent .profileAbout .tabsDetails .applyJob, .profile .profileInfo .profileContent .profileAbout .tabsDetails .compareSkills").on("click", function () {

        var overlay = $('<div></div>').prependTo('body').attr('class', 'overlayForPage');

        overlay.add();

        $(".overlayForPage, .signInBlock div i, .compareBox i, .applyBox i, .takeCourse1 .plans button:first-of-type, .takeCourse2 i, .addSkill i, .editSkill i, .pinSkill div > i, .changePassword i, .signInBlock form button").on("click", function () {

            overlay.remove();

        });

        $(".overlayForPage").on('click', function () {

            $(".compareBox, .applyBox, .changePassword, .takeCourse1, .takeCourse2, .addSkill, .editSkill, .pinSkill, .signInBlock").hide(0);

        });

    });

    // header height

    $('header').height($(window).height());

    $(window).resize(function () {

        $('header').height($(window).height());

    });

    // Change background color for navbar when scroll

    var url = window.location.pathname,
        filename = url.substring(url.lastIndexOf('/') + 1);

    if (filename === "index.php" && window.innerWidth > 767) {

        if ($(window).scrollTop() < 100) {

            $(".navbar-inverse").removeClass("backgroundColor").addClass("backgroundColor2");

        }

        $(window).scroll(function () {

            if ($(this).scrollTop() > 100) {

                if (window.innerWidth > 767) {

                    $(".navbar-inverse").removeClass("backgroundColor2").addClass("backgroundColor");

                }
            } else {

                if (window.innerWidth > 767) {

                    $(".navbar-inverse").removeClass("backgroundColor").addClass("backgroundColor2");

                }
            }

        });

    }

    $(window).resize(function () {

        if (filename === "index.php" && window.innerWidth > 767) {

            if ($(".navbar-inverse").hasClass("backgroundColor")) {

                $(".navbar-inverse").removeClass("backgroundColor").addClass("backgroundColor2");

            }

            $(window).scroll(function () {

                if ($(this).scrollTop() > 100) {

                    if (window.innerWidth > 767) {

                        $(".navbar-inverse").removeClass("backgroundColor2").addClass("backgroundColor");

                    }
                } else {

                    if (window.innerWidth > 767) {

                        $(".navbar-inverse").removeClass("backgroundColor").addClass("backgroundColor2");

                    }
                }

            });

        } else if (filename === "index.php" && window.innerWidth <= 767) {

            if ($(".navbar-inverse").hasClass("backgroundColor2")) {

                $(".navbar-inverse").removeClass("backgroundColor2").addClass("backgroundColor");

            }

        }

    });

    // Smooth Scroll To Div

    $(".navbar ul li").on('click', function () {

        $("html, body").animate({

            scrollTop: $("#partners").offset().top - 53

        }, 1000);

    });

    //Adjust Navbar Links

    $("nav .nav li").on('click', function () {

        $(this).addClass('active').siblings().removeClass('active');

    });

    //show signIn Block

    $("nav .sign, .signUp .container > span").on('click', function () {

        $(".signInBlock").fadeIn();

    });

    $(".signInBlock div i").on('click', function () {

        $(".signInBlock").fadeOut();

    });

    // center boxes

    $.fn.centerBox = function () {

        $(this).css({

            'position': 'fixed',

            'left': ($(window).width() - $(this).width()) / 2,

            'top': ($(window).height() - $(this).height()) / 2

        });

    };

    $(".compareBox").centerBox();
    $(".applyBox").centerBox();
    $(".changePassword").centerBox();
    $(".addSkill").centerBox();
    $(".editSkill").centerBox();
    $(".pinSkill").centerBox();
    $(".takeCourse1").centerBox();
    $(".takeCourse2").centerBox();
    $(".signInBlock").centerBox();

    //control eye button in password field for signIn

    $(".signInBlock form input.passwordField").on("keyup", function () {

        if ($(this).val()) {

            $(".signInBlock form .glyphicon-eye-open").show();
        } else {

            $(".signInBlock form .glyphicon-eye-open").hide();
        }
    });

    $(".signInBlock form .glyphicon-eye-open").mousedown(function () {

        $(".signInBlock form input.passwordField").attr('type', 'text');

    }).mouseup(function () {

        $(".signInBlock form input.passwordField").attr('type', 'password');

    }).mouseout(function () {

        $(".signInBlock form input.passwordField").attr('type', 'password');

    });

    //control eye button in password field for signUp feild one

    $(".signUp .form3 form input.passwordField").on("keyup", function () {

        if ($(this).val()) {

            $(".signUp .form3 form input.passwordField + span").show();
        } else {

            $(".signUp .form3 form input.passwordField + span").hide();
        }
    });

    $(".signUp .form3 form input.passwordField + span").mousedown(function () {

        $(".signUp .form3 form input.passwordField").attr('type', 'text');

    }).mouseup(function () {

        $(".signUp .form3 form input.passwordField").attr('type', 'password');

    }).mouseout(function () {

        $(".signUp .form3 form input.passwordField").attr('type', 'password');

    });

    //control eye button in password field for signUp feild two

    $(".signUp .form3 form input.passwordFieldConfirm").on("keyup", function () {

        if ($(this).val()) {

            $(".signUp .form3 form input.passwordFieldConfirm + span").show();
        } else {

            $(".signUp .form3 form input.passwordFieldConfirm + span").hide();
        }
    });

    $(".signUp .form3 form input.passwordFieldConfirm + span").mousedown(function () {

        $(".signUp .form3 form input.passwordFieldConfirm").attr('type', 'text');

    }).mouseup(function () {

        $(".signUp .form3 form input.passwordFieldConfirm").attr('type', 'password');

    }).mouseout(function () {

        $(".signUp .form3 form input.passwordFieldConfirm").attr('type', 'password');

    });

    //Trigger MixItUp

    $("#mixItJobs").mixItUp();

    $("#mixItCourses").mixItUp({
        selectors: {
            filter: '.filterc'
        }
    });

    // disable hover in mobile

    if (window.innerWidth > 767) {

        //hover in job box

        $(".jobs .allJobs .jobBox").mouseenter(function () {

            $(this).find('.boxWithoutHover').fadeOut(0);
            $(this).find('.boxHover').fadeIn(0);

        }).mouseleave(function () {

            $(this).find('.boxWithoutHover').fadeIn(0);
            $(this).find('.boxHover').fadeOut(0);

        });

        //hover in course box

        $(".courses .allCourses .courseBox").mouseenter(function () {

            $(this).find('.boxWithoutHover').fadeOut(0);
            $(this).find('.boxHover').fadeIn(0);

        }).mouseleave(function () {

            $(this).find('.boxWithoutHover').fadeIn(0);
            $(this).find('.boxHover').fadeOut(0);

        });

    }
    //active favorite star in job box

    $(".jobs .allJobs .jobBox .boxHover > span span").click(function () {

        $(this).toggleClass("glyphicon-star").toggleClass("glyphicon-star-empty").toggleClass("active");

    });

    // Show Compare Box

    $(".jobs .allJobs .jobBox .boxHover button:last-of-type").on('click', function () {

        $(".compareBox").fadeIn();

    });

    $(".compareBox i").on('click', function () {

        $(".compareBox").fadeOut();

    });

    // Show Apply Box

    $(".jobs .allJobs .jobBox .boxHover button:first-of-type").on('click', function () {

        $(".applyBox").fadeIn();

    });

    $(".applyBox i").on('click', function () {

        $(".applyBox").fadeOut();

    });

    // Select Pin in PinBox

    $(".pinSkill .pins div").on('click', function () {

        $(this).toggleClass('active');

    });

    // edit skill in edit Box

    $('.editSkill form > button:first-of-type').on('click', function () {

        $('.editSkill .editBox').slideDown();

    });

    //active favorite star in course box
    $(".courses .allCourses .courseBox .boxHover > span:last-of-type").on("click", function () {

        $(this).toggleClass("glyphicon-star").toggleClass("glyphicon-star-empty").toggleClass("active");

    });

    //active rate stars in course boxes

    $(".courses .allCourses .courseBox .boxHover .rate span").on("click", function () {

        if ($(this).siblings().hasClass('glyphicon-star')) {
            return;
        }

        $(this).parent().addClass('no-hover');
        $(this).siblings().andSelf().addClass('no-hover');
        $(this).prevAll().andSelf().addClass("glyphicon-star").removeClass("glyphicon-star-empty").addClass("active").css('cursor', 'auto');
        $(this).nextAll().css('cursor', 'auto');

    });

    //Adjust Shuffle Links

    $(".jobs .shuffle li").on('click', function () {

        $(this).addClass('active').siblings().removeClass('active');

    });

    $(".courses .shuffle li").on('click', function () {

        $(this).addClass('active').siblings().removeClass('active');

    });

    // profile image

    $('#profileImage').change(function (e) {
        var img = URL.createObjectURL(e.target.files[0]);
        $('.signUp .form3 form img').attr('src', img);
    });

    // to color chooses in signUp Form2

    $(".signUp .form2 .interests .tab-content .btn label.clicked").on('click', function () {

        $(this).parent().toggleClass("active");
        $(this).parent().find('label.select').toggle();

    });

    // Mobility signUp

    $(".signUp .form2 .interests div > button.back").on('click', function () {

        $(".signUp .form1").show();
        $(".signUp .form2").hide();
        $(".signUp .form3").hide();
        $(".signUp .numbers > span:first-of-type").addClass('active').siblings().removeClass('active');

    });

    $(".signUp .form3 button").on('click', function () {

        $(".signUp .form1").hide();
        $(".signUp .form2").show();
        $(".signUp .form3").hide();
        $(".signUp .numbers > span:nth-of-type(2)").addClass('active').siblings().removeClass('active');

    });

    // valid in signUp

    var userError = true,
        emailError = true,
        phoneError = true,
        birthdayError = true;

    $('.signUp .form1 .username').blur(function () {

        if ($(this).val().length < 4) {

            $(this).css('border', '2px solid #F00').next().fadeIn(200);
            userError = true;
        } else {

            $(this).css('border', '2px solid #080').next().fadeOut(200);
            userError = false;
        }

    });

    $('.signUp .form1 .email').blur(function () {

        if ($(this).val() === '') {

            $(this).css('border', '2px solid #F00').next().fadeIn(200);
            emailError = true;
        } else {

            $(this).css('border', '2px solid #080').next().fadeOut(200);
            emailError = false;
        }

    });

    $('.signUp .form1 .phone').blur(function () {

        if ($(this).val().length != 11) {

            $(this).css('border', '2px solid #F00').next().fadeIn(200);
            phoneError = true;
        } else {

            $(this).css('border', '2px solid #080').next().fadeOut(200);
            phoneError = false;
        }

    });

    $('.signUp .form1 .birthday').blur(function () {

        if ($(this).val() === '') {

            $(this).css('border', '2px solid #F00').next().fadeIn(200);
            birthdayError = true;
        } else {

            $(this).css('border', '2px solid #080').next().fadeOut(200);
            birthdayError = false;
        }

    });

    $('.signUp .form1 .form1Submit').on('click', function (event) {

        if (userError === true || emailError === true || phoneError === true || birthdayError === true) {

            $('.signUp .form1 .username, .signUp .form1 .email, .signUp .form1 .phone, .signUp .form1 .birthday').blur();

        } else {

            $(".signUp .form1").hide();
            $(".signUp .form2").show();
            $(".signUp .form3").hide();
            $(".signUp .numbers > span:nth-of-type(2)").addClass('active').siblings().removeClass('active');

        }

    });


    $('.signUp .form2 .form2Submit').on('click', function () {

        var counter = $(".signUp .form2 .interests .tab-content .field input:checked").length;

        if (counter >= 3) {

            $(".signUp .form1").hide();
            $(".signUp .form2").hide();
            $(".signUp .form3").show();
            $(".signUp .numbers > span:last-of-type").addClass('active').siblings().removeClass('active');

        } else {

            $(".signUp .form2 .custom-alert").fadeIn(200);

        }

    });



    // Tabs in Settings

    $('.settings .subSettings .tabs li').on('click', function () {

        $(this).addClass('active').siblings().removeClass('active');
        var dataTab = $(this).attr('data-tab');
        $('.settings .subSettings .content > div.' + dataTab).show(0).siblings().hide(0);

    });

    // Handle accountInfo in Settings

    $('.settings .subSettings .content .accountInfo .fa-pencil-square').on('click', function () {

        $(this).hide(0);
        $('.settings .subSettings .content .accountInfo .fa-pencil').show(0);
        $('.settings .subSettings .content .accountInfo input').prop('disabled', false);
        $('.settings .subSettings .content .accountInfo button').css('visibility', 'visible');
        $('.settings .subSettings .content .accountInfo form > i:last-of-type').show();

    });

    $('.settings .subSettings .content .accountInfo .fa-pencil').on('click', function () {

        $(this).hide(0);
        $('.settings .subSettings .content .accountInfo .fa-pencil-square').show(0);
        $('.settings .subSettings .content .accountInfo input').prop('disabled', true);
        $('.settings .subSettings .content .accountInfo button').css('visibility', 'hidden');
        $('.settings .subSettings .content .accountInfo form > i:last-of-type').hide();

    });

    // security eye in password field 

    $(".settings .subSettings .content .security > form input.passwordField").on("keyup", function () {

        if ($(this).val()) {

            $(".settings .subSettings .content .security > form .password .glyphicon-eye-open").show();
        } else {

            $(".settings .subSettings .content .security > form .password .glyphicon-eye-open").hide();
        }
    });

    $(".settings .subSettings .content .security > form .password .glyphicon-eye-open").mousedown(function () {

        $(".settings .subSettings .content .security > form input.passwordField").attr('type', 'text');

    }).mouseup(function () {

        $(".settings .subSettings .content .security > form input.passwordField").attr('type', 'password');

    }).mouseout(function () {

        $(".settings .subSettings .content .security > form input.passwordField").attr('type', 'password');

    });

    // security & Notification accordion

    $(".settings .subSettings .content .security .accordion .head, .settings .subSettings .content .notification .accordion .head").on('click', function () {

        $(this).find('.fa').toggleClass('fa-caret-right').toggleClass('fa-caret-down');
        $(this).next('.subContent').slideToggle();

    });

    
    // courses page
    $(".coursesPage .coursesContainer .activityCourse .takeCourse").click(function () {
       
        $(".takeCourse1").show();
    });
    $(".coursesPage .coursesContainer .activityCourse .courseDetails").click(function () {
        window.open("View-Course-Details.php", "_blank");
    });
    
    //jobs page
    $(".coursesPage .jobsContainer .activityCourse .applyJob").click(function () {
        $(".applyBox").show();
    });
    $(".coursesPage .jobsContainer .activityCourse .compareSkills").click(function () {
        $(".compareBox").show();
    });
    $(".coursesPage .jobsContainer .activityCourse .jobDetails").click(function () {
        window.open("View-Job-Details.php", "_blank");
    });
    
    // view-course-details page
    $(".viewCourseDetails .takeCourse").click(function () {
        $(".takeCourse1").show();
    });
    
    // view-job-details page
    $(".viewJobDetails .applyJob").click(function () {
        $(".applyBox").show();
    });
    
    $(".viewJobDetails .compareSkills").click(function () {
        $(".compareBox").show();
    });
    
    /* notification page */
    $(".notification .notificationContent .tabsDetails #tab1Content .takeCourse").click(function () {
        $(".takeCourse1").show();
    });
    
    $(".notification .notificationContent .tabsDetails #tab2Content .compareSkills").click(function () {
        $(".compareBox").show();
    });
    $(".notification .notificationContent .tabsDetails #tab2Content .applyJob").click(function () {
        $(".applyBox").show();
    });
    $(".notification .notificationContent .tabsDetails #tab1Content .courseDetails").click(function () {
        window.open("View-Course-Details.php", "_blank");
    });
    $(".notificationContent .tabsDetails #tab2Content .jobDetails").click(function () {
        window.open("View-Job-Details.php", "_blank");
    });
    /* profile page */
    $(".profile .profileInfo .profileContent .profileAbout .tabsDetails .takeCourse").click(function () {
        $(".takeCourse1").show();
    });
    $(".profile .profileInfo .profileContent .profileAbout .tabsDetails .applyJob").click(function () {
        $(".applyBox").show();
    });
    $(".profile .profileInfo .profileContent .profileAbout .tabsDetails .compareSkills").click(function () {
        $(".compareBox").show();
    });
    
    $(".profile .profileInfo .profileContent .profileAbout .tabsDetails .courseDetails").click(function () {
        window.open("View-Course-Details.php", "_blank");
    });
    $(".profile .profileInfo .profileContent .profileAbout .tabsDetails .jobDetails ").click(function () {
        window.open("View-Job-Details.php", "_blank");
    });
    
    $(".profile .profileInfo .profileContent #editProfileButton").click(function () {
        window.open("editProfile.php", "_blank");
    });
    // 
    
    // takeCourse Blocks

    $('.courses .allCourses .courseBox .boxHover button').on('click', function () {

        $('.takeCourse1').show();

    });

    $('.takeCourse1 .plans button:first-of-type').on('click', function () {

        $('.takeCourse1').hide(0);

    });

    $('.takeCourse1 .plans button:last-of-type').on('click', function (event) {

        event.preventDefault();
        $('.takeCourse1').hide(0);
        $('.takeCourse2').show();

    });

    $('.takeCourse1 .plans .tabs li').on('click', function () {

        $(this).addClass('active').siblings().removeClass('active');
        var dataTab = $(this).attr('data-tab');
        $('.takeCourse1 .plans .content .' + dataTab).show(0).siblings().hide(0);

    });

    $('.takeCourse2 i').on('click', function () {

        $('.takeCourse2').hide();

    });

    $('.takeCourse2 div p button').on('click', function () {

        $('.takeCourse2').hide(0);
        $('.takeCourse1').show();

    });

    // Show ChangePassword Block

    $('.settings .subSettings .content .security .changePasswordButton').on('click', function () {

        $('.changePassword').show();

        $('.changePassword i').on('click', function () {

            $('.changePassword').hide();

        });

    });

    // check all in notification settings

    $(".selectAll").click(function () {

        if ($(this).is(":checked")) {

            $(this).siblings('input').prop('checked', true);

        } else {

            $(this).siblings('input').prop('checked', false);

        }

    });

    // button scroll top ==> For all pages

    if (window.innerWidth > 767) {

        var scrollButton = $("#scrollTop");

        $(window).scroll(function () {

            if ($(this).scrollTop() >= 300) {

                scrollButton.fadeIn(1000);

            } else {

                scrollButton.fadeOut(1000);

            }

        });

        scrollButton.click(function () {

            $("html,body").animate({scrollTop: 0}, 700);

        });

    }

    // Valid contact form

    var contactuserError = true,
        contactemailError = true,
        contactmsgError = true;

    $('.about .contactUsSection .contact-form .username').blur(function () {

        if ($(this).val().length < 4) {

            $(this).css('border', '1px solid #F00').parent().find('.custom-alert').fadeIn(200).end().find('.astrisx').fadeIn(100);
            contactuserError = true;
        } else {

            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrisx').fadeOut(100);
            contactuserError = false;
        }

    });

    $('.about .contactUsSection .contact-form .email').blur(function () {

        if ($(this).val() === '') {

            $(this).css('border', '1px solid #F00').parent().find('.custom-alert').fadeIn(200).end().find('.astrisx').fadeIn(100);
            contactemailError = true;
        } else {

            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrisx').fadeOut(100);
            contactemailError = false;
        }

    });

    $('.about .contactUsSection .contact-form .message').blur(function () {

        if ($(this).val().length < 10) {

            $(this).css('border', '1px solid #F00').parent().find('.custom-alert').fadeIn(200).end().find('.astrisx').fadeIn(100);
            contactmsgError = true;
        } else {

            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrisx').fadeOut(100);
            contactmsgError = false;
        }

    });

    $('.about .contactUsSection .contact-form').submit(function (event) {

        if (contactuserError === true || contactemailError === true || contactmsgError === true) {

            event.preventDefault();
            $('.about .contactUsSection .contact-form .username, .about .contactUsSection .contact-form .email, .about .contactUsSection .contact-form .message').blur();

        }

    });


    // Trigger chosen plugin on add skills

    $(".chosen-select1").chosen({

        width: "65%",
        placeholder_text_multiple: "Select Some Skills..."

    });

    // Trigger chosen plugin on edit skills

    $(".chosen-select2").chosen({

        width: "100%",
        no_results_text: "No skills match",
        placeholder_text_single: "Select Your Skill..."

    });

    // Trigger chosen plugin on edit skills Box2

    $(".chosen-select3").chosen({

        width: "65%",
        no_results_text: "No skills match",
        placeholder_text_single: "Edit Chosen Skill..."

    });

    // Trigger countTo plugin

    var interval = true;

    $(window).scroll(function () {

        if ($(this).scrollTop() > 60 && interval === true) {

            interval = false;
            $(".countPlugin").countTo({

                refreshInterval: 40

            });

        }

    });

    // Trigger nicescroll plugin

    $("body").niceScroll({
        cursorcolor: "#34495E",
        cursorborder: "0",
        cursorborderradius: "0",
        autohidemode: "leave"
    });

    // Trigger FitText plugin

    $("#heading-fit").fitText(0.6, {

        minFontSize: '45px',
        maxFontSize: '140px'

    });

    // Trigger slick plugin
    
    $(".partners .slider").slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autiplaySpeed: 5000,
        prevArrow: $('.prev'),
        nextArrow: $('.next'),
        responsive: [{
            breakpoint: 1200,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1
            }
        }, {
            breakpoint: 992,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
            ]
    });
    
});