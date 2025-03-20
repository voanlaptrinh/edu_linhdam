!function (e) {
    "use strict";
    var i = e(window);

    var t = document.getElementById("year");
    if (t) {
        t.innerHTML = new Date().getFullYear();
    }

    e(document).ready(function () {
        var i = e(".bd-mobile-menu-active > ul").clone(),
            t = e(".bd-offcanvas-menu nav");
        t.append(i),
        0 != e(t).find(".submenu, .mega-menu").length && e(t).find(".submenu, .mega-menu").parent().append('<button class="bd-menu-close"><i class="fa fa-chevron-right"></i></button>');
        
        var s = e(".bd-offcanvas-menu nav > ul > li button.bd-menu-close, .bd-offcanvas-menu nav > ul li.has-dropdown > a");
        e(s).on("click", function (i) {
            i.preventDefault();
            var t = e(this).parent(),
                s = t.siblings("li");
            t.hasClass("active") 
                ? t.removeClass("active").children(".submenu, .mega-menu").slideUp() 
                : (e(".bd-offcanvas-menu nav > ul > li> ul > li.active").removeClass("active").children(".submenu, .mega-menu").slideUp(),
                   t.addClass("active").children(".submenu, .mega-menu").slideDown(),
                   s.removeClass("active").children(".submenu, .mega-menu").slideUp());
        });

        e(".sidebar-toggle .bar-icon").on("click", function () {
            e(".bd-offcanvas-menu").toggleClass("active");
        });

        e(".bd-offcanvas-close,.bd-offcanvas-overlay").on("click", function () {
            e(".bd-offcanvas-area").removeClass("info-open"),
            e(".bd-offcanvas-overlay").removeClass("overlay-open");
        });

        e(".sidebar-toggle").on("click", function () {
            e(".bd-offcanvas-area").addClass("info-open"),
            e(".bd-offcanvas-overlay").addClass("overlay-open");
        });

        e(".body-overlay").on("click", function () {
            e(".bd-offcanvas-area").removeClass("opened"),
            e(".body-overlay").removeClass("opened");
        });

        i.on("scroll", function () {
            e(window).scrollTop() < 250 
                ? e("#header-sticky").removeClass("bd-sticky") 
                : e("#header-sticky").addClass("bd-sticky");
        });

        e("[data-background]").each(function () {
            e(this).css("background-image", "url(" + e(this).attr("data-background") + ")");
        });

        e("[data-width]").each(function () {
            e(this).css("width", e(this).attr("data-width"));
        });

        e("[data-bg-color]").each(function () {
            e(this).css("background-color", e(this).attr("data-bg-color"));
        });

        e(".bd-sorting-select, .form-select-option, .country-list, .course-level, .course-name, .course-lessons, .course-intro, .input-box-select").niceSelect();

        var i = document.querySelector(".backtotop-wrap path"),
            t = i.getTotalLength();
        i.style.transition = i.style.WebkitTransition = "none";
        i.style.strokeDasharray = t + " " + t;
        i.style.strokeDashoffset = t;
        i.getBoundingClientRect();
        i.style.transition = i.style.WebkitTransition = "stroke-dashoffset 10ms linear";

        var s = function () {
            var s = e(window).scrollTop(),
                o = e(document).height() - e(window).height();
            i.style.strokeDashoffset = t - (s * t) / o;
        };

        s();
        e(window).scroll(s);

        jQuery(window).on("scroll", function () {
            jQuery(this).scrollTop() > 150 
                ? jQuery(".backtotop-wrap").addClass("active-progress") 
                : jQuery(".backtotop-wrap").removeClass("active-progress");
        });

        jQuery(".backtotop-wrap").on("click", function (e) {
            e.preventDefault();
            jQuery("html, body").animate({
                scrollTop: 0
            }, 550);
            return false;
        });
    });

}(jQuery);
