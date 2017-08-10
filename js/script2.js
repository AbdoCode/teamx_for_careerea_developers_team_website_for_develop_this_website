/*global $, console, smoothScroll, alert, WOW */

$(document).ready(function () {
    'use strict';
    var itemCount = $(".coursesPage .col-sm-9 .row > div[class^=col]").length,
        showMore = $(".coursesPage .showMore"),
        itemCoursePageHidden = $(".coursesPage .coursesContainer .itemHidden"),
        itemJobsPageHidden = $(".coursesPage .jobsContainer .itemHidden"),
        
        itemCoursePage = $(".coursesPage .coursesContainer .activityCourse"),
        itemJobPage = $(".coursesPage .jobsContainer .activityCourse"),
        /* profile page */
        itemProfilePage = $(".profile .profileInfo .profileContent .profileAbout .tabsDetails .activityCourse"),
        
        activityAvatar = $(".profile .profileInfo .profileContent .profileAbout .tabsDetails #tab2Content .activityBoxs #activityProfilesBox .activityAvatar"),
        portfolioItem = $(".profile .profileInfo .profileContent .profileAbout .tabsDetails .portfolioItem"),
        
        profileImage = $(".profile .profileInfo .profileContent .profileImage"),
        inputImage = $(".profile .profileInfo .profileContent .profileImage .profileOver .fileUploader .inputImage"),
        iconCamera = $(".profile .profileInfo .profileContent .profileImage .profileOver .fileUploader .iconCamera"),
        profileOver = $(".profile .profileInfo .profileContent .profileImage .profileOver"),
        
        /* notification page */
        itemNotification = $(".notification .notificationContent .tabsDetails .activityCourse"),
        /* Filter search variables  */
        categoryTitle = $(".coursesPage .mainFilterSearch .categoryTitle"),
        categoryTitleSpan = $(".coursesPage .mainFilterSearch .categoryTitle span"),
        categoryFilter = $(".coursesPage .mainFilterSearch .categoryFilter"),
        dateTitle = $(".coursesPage .mainFilterSearch .dateTitle"),
        dateTitleSpan = $(".coursesPage .mainFilterSearch .dateTitle span"),
        dateFilter = $(".coursesPage .mainFilterSearch .dateFilter"),
        languageTitle = $(".coursesPage .mainFilterSearch .languageTitle"),
        languageTitleSpan = $(".coursesPage .mainFilterSearch .languageTitle span"),
        languageFilter = $(".coursesPage .mainFilterSearch .languageFilter"),
        levelTitle = $(".coursesPage .mainFilterSearch .levelTitle"),
        levelTitleSpan = $(".coursesPage .mainFilterSearch .levelTitle span"),
        levelFilter = $(".coursesPage .mainFilterSearch .levelFilter"),
        fieldTitle = $(".coursesPage .mainFilterSearch .fieldTitle"),
        fieldTitleSpan = $(".coursesPage .mainFilterSearch .fieldTitle span"),
        fieldFilter = $(".coursesPage .mainFilterSearch .fieldFilter"),
        locationTitle = $(".coursesPage .mainFilterSearch .locationTitle"),
        locationTitleSpan = $(".coursesPage .mainFilterSearch .locationTitle span"),
        locationFilter = $(".coursesPage .mainFilterSearch .locationFilter"),
        typeTitle = $(".coursesPage .mainFilterSearch .typeTitle"),
        typeTitleSpan = $(".coursesPage .mainFilterSearch .typeTitle span"),
        typeFilter = $(".coursesPage .mainFilterSearch .typeFilter"),
        /* end filter search variables  */
        
        /* filter search mobile variables */
        categoryTitleMobile      = $(".formMobileSearch .categoryTitle"),
        categoryFilterMobile     = $(".formMobileSearch .categoryFilterMobile"),
        categoryFilterMobileSpan = $(".formMobileSearch .categoryTitle span"),
        dateTitleMobile          = $(".formMobileSearch .dateTitle"),
        dateFilterMobile         = $(".formMobileSearch .dateFilterMobile"),
        dateFilterMobileSpan     = $(".formMobileSearch .dateTitle span"),
        languageTitleMobile      = $(".formMobileSearch .languageTitle"),
        languageFilterMobile     = $(".formMobileSearch .languageFilterMobile"),
        languageFilterMobileSpan = $(".formMobileSearch .languageTitle span"),
        levelTitleMobile         = $(".formMobileSearch .levelTitle"),
        levelFilterMobile        = $(".formMobileSearch .levelFilterMobile"),
        levelFilterMobileSpan    = $(".formMobileSearch .levelTitle span"),
        fieldTitleMobile         = $(".formMobileSearch .fieldTitle"),
        feildFilterMobile        = $(".formMobileSearch .feildFilterMobile"),
        feildFilterMobileSpan    = $(".formMobileSearch .fieldTitle span"),
        locationTitleMobile      = $(".formMobileSearch .locationTitle"),
        locationFilterMobile     = $(".formMobileSearch .locationFilterMobile"),
        locationFilterMobileSpan = $(".formMobileSearch .locationTitle span"),
        typeTitleMobile          = $(".formMobileSearch .typeTitle"),
        typeFilterMobile         = $(".formMobileSearch .typeFilterMobile"),
        typeFilterMobileSpan     = $(".formMobileSearch .typeTitle span"),
        
        /* end filter search mobile variables */
        url = "https://www.google.com.eg/",
        url2 = window.location.pathname,
        filename2 = url2.substring(url2.lastIndexOf('/') + 1);
    if (itemCount <= 0) {
        $(".coursesPage .mainFilterSearch").css({
            display: 'none'
        });
        $(".coursesPage").css({
            height: '81.9vh'
        });
        $('.mainSearchBox').css({
            display: 'none'
        })
    } else if(itemCount === 1) {
        $('.mainFilterSearch').css({
            height: '83.5vh'
        });
    }
    /* Start Button showMore */
    showMore.click(function () {
  
        var lable = showMore.text().trim();
        if (lable === "Hide") {
            showMore.text("Show More");
            itemJobsPageHidden.fadeOut(500);
            itemCoursePageHidden.fadeOut(500);
        } else {
            showMore.text("Hide");
            itemJobsPageHidden.fadeIn(500);
            itemCoursePageHidden.fadeIn(500);
        }
        
    });
        /* End Button showMore */
    
    
       // hover course , job box
    $(window).resize(function () {
        if ($(window).width() >= 767) {
            $(itemCoursePage).on("mouseenter.large", function () {
                $(this).children(".activityCourseOver").fadeIn(500);
            }).on("mouseleave.large", function () {
                $(this).children(".activityCourseOver").fadeOut(500);
            });
            $(itemJobPage).on("mouseenter.large", function () {
                $(this).children(".activityCourseOver").fadeIn(500);
            }).on("mouseleave.large", function () {
                $(this).children(".activityCourseOver").fadeOut(500);
            });
            $(itemProfilePage).on("mouseenter.large", function () {
                $(this).children(".activityCourseOver").fadeIn(500);
            }).on("mouseleave.large", function () {
                $(this).children(".activityCourseOver").fadeOut(500);
            });
            $(activityAvatar).on("mouseenter.large", function () {
                $(this).children(".activityAvatarOver").fadeIn(500);
            }).on("mouseleave.large", function () {
                $(this).children(".activityAvatarOver").fadeOut(500);
            });
            $(portfolioItem).on("mouseenter.large", function () {
                $(this).children(".portfolioOver").fadeIn(500);
            }).on("mouseleave.large", function () {
                $(this).children(".portfolioOver").fadeOut(500);
            });
            $(itemNotification).on("mouseenter.large", function () {
                $(this).children(".activityCourseOver").fadeIn(500);
            }).on("mouseleave.large", function () {
                $(this).children(".activityCourseOver").fadeOut(500);
            });
            
            
            
        } else {
            $(itemCoursePage).off("mouseenter.large mouseleave.large");
            $(itemJobPage).off("mouseenter.large mouseleave.large");
            $(itemProfilePage).off("mouseenter.large mouseleave.large");
            $(activityAvatar).off("mouseenter.large mouseleave.large");
            $(portfolioItem).off("mouseenter.large mouseleave.large");
            $(itemNotification).off("mouseenter.large mouseleave.large");
        }
    }).resize();
    
    /*open view course details
    itemCoursePage.click(function () {
        window.open("View-Course-Details.php", "_blank");
    });
    itemJobPage.click(function () {
        window.open("View-Job-Details.php", "_blank");
    });
    
     filterSearch animation
    */
    
    $(categoryTitle).click(function () {
        
        $(categoryFilter).toggle(500);
        if ($(categoryTitleSpan).text() === "-") {
            $(categoryTitleSpan).text("+");
            $(categoryTitleSpan).css({
                verticalAlign: "middle"
            });
        } else {
            $(categoryTitleSpan).text("-");
            $(categoryTitleSpan).css({
                verticalAlign: "baseline"
            });
        }
    });
    $(dateTitle).click(function () {
        
        $(dateFilter).toggle(500);
        if ($(dateTitleSpan).text() === "-") {
            $(dateTitleSpan).text("+");
            $(dateTitleSpan).css({
                verticalAlign: "middle"
            });
        } else {
            $(dateTitleSpan).text("-");
            $(dateTitleSpan).css({
                verticalAlign: "baseline"
            });
        }
    });
    $(languageTitle).click(function () {
        
        $(languageFilter).toggle(500);
        if ($(languageTitleSpan).text() === "-") {
            $(languageTitleSpan).text("+");
            $(languageTitleSpan).css({
                verticalAlign: "middle"
            });
        } else {
            $(languageTitleSpan).text("-");
            $(languageTitleSpan).css({
                verticalAlign: "baseline"
            });
        }
    });
    $(levelTitle).click(function () {
        
        $(levelFilter).toggle(500);
        if ($(levelTitleSpan).text() === "-") {
            $(levelTitleSpan).text("+");
        } else {
            $(levelTitleSpan).text("-");
            $(levelTitleSpan).css({
                verticalAlign: "baseline"
            });
        }
    });
    $(fieldTitle).click(function () {
        
        $(fieldFilter).toggle(500);
        if ($(fieldTitleSpan).text() === "-") {
            $(fieldTitleSpan).text("+");
        } else {
            $(fieldTitleSpan).text("-");
            $(fieldTitleSpan).css({
                verticalAlign: "baseline"
            });
        }
    });
    $(locationTitle).click(function () {
        
        $(locationFilter).toggle(500);
        if ($(locationTitleSpan).text() === "-") {
            $(locationTitleSpan).text("+");
        } else {
            $(locationTitleSpan).text("-");
            $(locationTitleSpan).css({
                verticalAlign: "baseline"
            });
        }
    });
    $(typeTitle).click(function () {
        
        $(typeFilter).toggle(500);
        if ($(typeTitleSpan).text() === "-") {
            $(typeTitleSpan).text("+");
        } else {
            $(typeTitleSpan).text("-");
            $(typeTitleSpan).css({
                verticalAlign: "baseline"
            });
        }
    });
    
    $(categoryTitleMobile).click(function () {
        
        $(categoryFilterMobile).toggle(500);
        if ($(categoryFilterMobileSpan).text() === "+") {
            $(categoryFilterMobileSpan).text("-");
            $(categoryFilterMobileSpan).css({
                verticalAlign: "baseline"
            });
        } else {
            $(categoryFilterMobileSpan).text("+");
            $(categoryFilterMobileSpan).css({
                verticalAlign: "middle"
            });
        }
        
    });
    $(dateTitleMobile).click(function () {
        
        $(dateFilterMobile).toggle(500);
        if ($(dateFilterMobileSpan).text() === "+") {
            $(dateFilterMobileSpan).text("-");
            $(dateFilterMobileSpan).css({
                verticalAlign: 'baseline'
            });
        } else {
            $(dateFilterMobileSpan).text("+");
            $(dateFilterMobileSpan).css({
                verticalAlign: "middle"
            });
        }
        
    });
    $(languageTitleMobile).click(function () {
        
        $(languageFilterMobile).toggle(500);
        if ($(languageFilterMobileSpan).text() === "+") {
            $(languageFilterMobileSpan).text("-");
            $(languageFilterMobileSpan).css({
                verticalAlign: 'baseline'
            });
        } else {
            $(languageFilterMobileSpan).text("+");
            $(languageFilterMobileSpan).css({
                verticalAlign: "middle"
            });
        }
        
    });
    $(levelTitleMobile).click(function () {
        
        $(levelFilterMobile).toggle(500);
        if ($(levelFilterMobileSpan).text() === "+") {
            $(levelFilterMobileSpan).text("-");
            $(levelFilterMobileSpan).css({
                verticalAlign: 'baseline'
            });
        } else {
            $(levelFilterMobileSpan).text("+");
            $(levelFilterMobileSpan).css({
                verticalAlign: "middle"
            });
        }
        
    });
    $(fieldTitleMobile).click(function () {
        
        $(feildFilterMobile).toggle(500);
        if ($(feildFilterMobileSpan).text() === "+") {
            $(feildFilterMobileSpan).text("-");
            $(feildFilterMobileSpan).css({
                verticalAlign: 'baseline'
            });
        } else {
            $(feildFilterMobileSpan).text("+");
            $(feildFilterMobileSpan).css({
                verticalAlign: "middle"
            });
        }
        
    });
    $(locationTitleMobile).click(function () {
        
        $(locationFilterMobile).toggle(500);
        if ($(locationFilterMobileSpan).text() === "+") {
            $(locationFilterMobileSpan).text("-");
            $(locationFilterMobileSpan).css({
                verticalAlign: 'baseline'
            });
        } else {
            $(locationFilterMobileSpan).text("+");
            $(locationFilterMobileSpan).css({
                verticalAlign: "middle"
            });
        }
        
    });
    $(typeTitleMobile).click(function () {
        
        $(typeFilterMobile).toggle(500);
        if ($(typeFilterMobileSpan).text() === "+") {
            $(typeFilterMobileSpan).text("-");
            $(typeFilterMobileSpan).css({
                verticalAlign: 'baseline'
            });
        } else {
            $(typeFilterMobileSpan).text("+");
            $(typeFilterMobileSpan).css({
                verticalAlign: "middle"
            });
        }
        
    });
    
    // SearchFilterMobile 
    $(".coursesPage .mainSearchBox .mainSearchButtonBox .showFilterMobile").click(function () {
       
        $(".coursesPage").hide(500);
        $(".formMobileSearch .filterMobile").show(500);
    });
    $(window).resize(function () {
        var screenWidth = $(window).width();
        if (screenWidth >= 767) {
            $(".formMobileSearch .filterMobile").hide(500);
            $(".coursesPage").show(500);
        }
    });
    // end
    
    // profile image 
    $(profileImage).mouseenter(function () {
    
        $(inputImage).fadeIn(500);
        $(iconCamera).fadeIn(500);
        $(profileOver).fadeIn(500);
    });
    $(profileImage).mouseleave(function () {
        
        $(inputImage).fadeOut(500);
        $(iconCamera).fadeOut(500);
        $(profileOver).fadeOut(500);
    });
    // end
    
    // profile page ==> Tabs
    $(".profile .profileAboutTabs .myTabs li").click(function () {
        
        // Get The Clicked li ID and  cache it in myId Variable
        var profileTabId = $(this).attr("id");
        
        // Remove Class "inactive" From Clicked Li and Add it to other Li in the Same UI 
        $(this).removeClass("inactive").siblings().addClass("inactive");
        
        $(".activityButtons button").click(function () {
            
            $(this).removeClass("inactive").siblings().addClass("inactive");
        });
        $(".favouritButtons button").click(function () {
            $(this).removeClass("inactive").siblings().addClass("inactive");
        });
        
        
        //hide All Divs When Click On The Li
        $(".profileAbout .tabsDetails div[id^=tab]").hide(); // id start with tab 

        // Show Div When Click On The Li 
        $("#" + profileTabId + "Content").fadeIn(500);
        /*
            Note: # ==> for id , myId ==> it get value of id of li , -content ==> to get value of id of div
        */
    });
    
    // profile Tabs ==> activity ==> Buttons
    $(".activityButtons button").click(function () {
        
        var activityId = $(this).attr("id");
        $("#" + activityId + "Box").fadeIn(1000).siblings().hide();
    });
   
    // profile Tabs ==> favourit ==> Buttons
    $(".favouritButtons button").click(function () {
        
        var activityId = $(this).attr("id");
        $("#" + activityId + "Box").fadeIn(1000).siblings().hide();
    });
    
    // end
    
    // view-Course-Details Page ==> Tabs
    $(".viewCourseDetails .myTabs li").click(function () {
        
        var viewCourseTabID = $(this).attr("id");
        // Remove Class "inactive" From Clicked Li and Add it to other Li in the Same UI 
        $(this).removeClass("inactive").siblings().addClass("inactive");
        //hide All Divs When Click On The Li
        $(".viewCourseDetails .tabsDetails div[id^=tab]").hide(); // id start with tab 
        // Show Div When Click On The Li 
        $("#" + viewCourseTabID + "Course").fadeIn(500);
        /*
            Note: # ==> for id , myId ==> it get value of id of li , -content ==> to get value of id of div
        */
    });
    // video animations
    $(".videos div").on('click', function () {

        var divID = $(this).attr("id"),
            divContentID = $("#" + divID + "Content");
        $(divContentID).fadeIn();

    });
    $(".videos div .close").on('click', function () {

        var divContentID = $(this).parent().attr("id");
        $("#" + divContentID).fadeOut();

    });
    $(".videos div[class^=t]").on("click", function () {
        var divID = $(this).attr("id"),
            divContentID = $("#" + divID + "Content i"),
            overlay = $('<div></div>').prependTo('body').attr('class', 'overylayForVideoPlay');
        overlay.add();

        $(divContentID).on("click", function () {
            overlay.remove();
        });


    });
    // end
    
    // view-Jobs-Details Page ==> Tabs
    $(".viewJobDetails .myTabs li").click(function () {
        
        var viewCourseTabID = $(this).attr("id");
        // Remove Class "inactive" From Clicked Li and Add it to other Li in the Same UI 
        $(this).removeClass("inactive").siblings().addClass("inactive");
        //hide All Divs When Click On The Li
        $(".viewJobDetails .tabsDetails div[id^=tab]").hide(); // id start with tab 
        // Show Div When Click On The Li 
        $("#" + viewCourseTabID + "Job").fadeIn(500);
        
        /*
            Note: # ==> for id , myId ==> it get value of id of li , -content ==> to get value of id of div
        */
    });
    
    $(".jobRequirementsButtons button").click(function () {
        $(this).removeClass("inactive").siblings().addClass("inactive");
    });
    $(".jobRequirementsButtons button").click(function () {
        
        var activityId = $(this).attr("id");
        $("#" + activityId + "Box").fadeIn(1000).siblings().hide();
    });
    // end
    
    // skills Blocks
    
    $('.addSkillButton').on('click', function () {
       
        $('.addSkill').fadeIn();
        
    });
    
    $('.addSkill i').on('click', function () {
       
        $('.addSkill').fadeOut();
        
    });
    
    $('.arrangeSkillButton').on('click', function () {
       
        $('.pinSkill').fadeIn();
        
    });
    
    $('.pinSkill div > i').on('click', function () {
       
        $('.pinSkill').fadeOut();
        
    });
    
    $('.editSkillButton').on('click', function () {
       
        $('.editSkill').fadeIn();
        
    });
    
    $('.editSkill i').on('click', function () {
       
        $('.editSkill').fadeOut();
        
    });
    
    // Make Box ==> Filter Search up when get footer when make scroll
    
    if (filename2 === "courses.php" || filename2 === "jobs.php") {
        
        $(window).scroll(function () {
            var windowTopPos = $(window).scrollTop(),
                footerTopPos = $('footer').offset().top,
                navBottomPos = $('.coursesPage .mainFilterSearch').offset().top + $('.coursesPage .mainFilterSearch').outerHeight()+80;

            if (navBottomPos >= footerTopPos && itemCount > 0) {
                $('.coursesPage .mainFilterSearch').css({
                    position: "fixed",
                    width: "23%",
                    height: "73vh"
                });
            } else if (navBottomPos <= footerTopPos && itemCount > 0) {
                $('.coursesPage .mainFilterSearch').css({
                    width: "23%",
                    height: "90vh",
                    overflowY: 'scroll'
                });
            }
            if(navBottomPos >= footerTopPos && itemCount === 1)
            {
                $('.coursesPage .mainFilterSearch').css({
                    position: "fixed",
                    width: "23%",
                    height: "73.5vh"
                });
            } else if (navBottomPos <= footerTopPos && itemCount === 1) {
                $('.coursesPage .mainFilterSearch').css({
                    width: "23%",
                    height: "83.5vh",
                    overflowY: 'scroll'
                });
            }
        });
    }
    
    /* follow button */
    if ($(window).width() >= 1025) {
        
        $(".viewJobDetails .followButton").on("mouseenter.large", function () {
        
            $(".followText").fadeIn(500);
        });
        $(".viewJobDetails .followButton").on("mouseleave.large", function () {
            $(".followText").fadeOut(500);
        });
        
    }
    
    /* start notification page */
    
    $(".notification .notificationContent .notificationTabs .myTabs li").click(function () {
        var notificationTabID = $(this).attr("id");
        $(this).removeClass("inactive").siblings().addClass("inactive");
        $(".notification .notificationContent .tabsDetails div[id^=tab]").hide(); // id start with tab 
        $("#" + notificationTabID + "Content").fadeIn(500);
    });
    
    /* end notification page */
    if (filename2 === "View-Course-Details.php") {
        var videoCount = $(".viewCourseDetails .tabsDetails #tab3Course .agentVideo .gridrow .content div[class^=pages]").size();
        var loop = function loop(i) {
                $('.viewCourseDetails .tabsDetails #tab3Course .agentVideo .gridrow .link' + i).click(function () {
                    $('.viewCourseDetails .tabsDetails #tab3Course .agentVideo .gridrow .links').removeClass('active');
                    $('.viewCourseDetails .tabsDetails #tab3Course .agentVideo .gridrow .pages').removeClass('active');
                    $('.viewCourseDetails .tabsDetails #tab3Course .agentVideo .gridrow .link' + i).addClass('active');
                    $('.viewCourseDetails .tabsDetails #tab3Course .agentVideo .gridrow .page' + i).addClass('active');
                });
            };
        for (var i = 1; i < videoCount +1; i++) {
            loop(i);
        }
    }
    
    var imgSrc = $(".imgBox img").attr('src');
    if( imgSrc === "")
        {
            $(".imgBox img").css({
                visibility: "hidden",
            });
        }

});

