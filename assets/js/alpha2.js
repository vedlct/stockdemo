$(document).ready(function() {
    function e(e) {
        $(e).block({
            message: "",
            css: {
                border: "none",
                padding: "0px",
                margin: "-20px 0 0 0",
                width: "100%",
                height: "100%",
                backgroundColor: "transparent"
            },
            overlayCSS: {
                backgroundColor: "#fff",
                opacity: .6,
                cursor: "wait"
            }
        })
    }

    function a(e) {
        $(e).unblock()
    }
    if (1 === $(".material-design-hamburger__icon").length && document.querySelector(".material-design-hamburger__icon").addEventListener("click", function() {
            var e;
            document.body.classList.toggle("background--blur"), this.parentNode.nextElementSibling.classList.toggle("menu--on"), e = this.childNodes[1].classList, e.contains("material-design-hamburger__icon--to-arrow") ? (e.remove("material-design-hamburger__icon--to-arrow"), e.add("material-design-hamburger__icon--from-arrow")) : (e.remove("material-design-hamburger__icon--from-arrow"), e.add("material-design-hamburger__icon--to-arrow"))
        }), $(".fixed-sidebar .navigation-toggle a").removeClass("button-collapse"), $(".fixed-sidebar .navigation-toggle a").addClass("reverse-icon"), $(".fixed-sidebar .navigation-toggle a").click(function() {
            $("#slide-out").toggle(), $(".mn-inner").toggleClass("hidden-fixed-sidebar"), $(".mn-content").toggleClass("fixed-sidebar-on-hidden"), $(document).trigger("fixedSidebarClick")
        }), $(window).width() < 993 && !$(".mn-content").hasClass("fixed-sidebar-on-hidden") && ($(".fixed-sidebar .navigation-toggle a").click(), $(".fixed-sidebar .navigation-toggle a span").addClass("material-design-hamburger__icon--to-arrow")), $(".sidebar-menu > li > a.collapsible-header").click(function() {
            $(".sidebar-menu > li > a.active:not(.collapsible-header)").parent().removeClass("active"), $(".sidebar-menu > li > a.active:not(.collapsible-header)").removeClass("active")
        }), $(".search-toggle").click(function() {
            $(".search").removeClass("hide-on-small-and-down"), $(".search input").focus()
        }), $(".close-search").click(function() {
            $(".search").addClass("hide-on-small-and-down")
        }), $(".search-results").hide(), !$("body").hasClass("quick-results-off")) {
        $(document).mouseup(function(e) {
            var a = $(".search-results"),
                t = $(".search input#search");
            a.is(e.target) || t.is(e.target) || 0 !== a.has(e.target).length || 0 !== t.has(e.target).length || a.fadeOut(300)
        }), $(document).keyup(function(e) {
            27 == e.keyCode && ($(".search-results").fadeOut(300), $(".search input#search").blur())
        }), $(".search input#search").focus(function() {
            0 != $.trim($(".search input#search").val()).length && $(".search-results").fadeIn(300)
        }), $(".search input#search").keypress(function() {
            $(".search-results").fadeIn(300)
        }), $(".search-result-container").fadeOut();
        var t = function() {
            var e = 0;
            return function(a, t) {
                clearTimeout(e), e = setTimeout(a, t)
            }
        }();
        $(".search-result-container").fadeOut(1), $(".res-not-found").fadeOut(1), $(".search input#search").on("input", function() {
            $(".search-result-container").fadeOut(1), $(".res-not-found").fadeOut(1), t(function() {
                0 != !$.trim($(".search input#search").val()).length ? ($(".search-result-container").fadeOut(1), $(".res-not-found").fadeIn(1)) : $(".search-result-container").fadeIn()
            }, 500), $(".search-text").text(this.value)
        })
    }
    $(".sidebar-account-settings:not(.show)").fadeOut(0), $(".account-settings-link").click(function() {
        $(".sidebar-account-settings").hasClass("show") ? ($(".sidebar-account-settings").fadeOut(0), $(".sidebar-menu").fadeIn(300), $(".sidebar-account-settings").removeClass("show")) : ($(".sidebar-account-settings").fadeIn(300), $(".sidebar-menu").fadeOut(0), $(".sidebar-account-settings").addClass("show"))
    }), $(".dropdown-right").dropdown({
        alignment: "right"
    }), $(".button-collapse:not(.right-sidebar-button)").sideNav(), $(".button-collapse.right-sidebar-button").sideNav({
        edge: "right"
    }), $(".chat-button").sideNav({
        edge: "right"
    }), $(".chat-message-link").sideNav({
        menuWidth: 320,
        edge: "right"
    }), $(".chat-message").click(function() {
        $(".chat-message-link").click()
    }), $(".collapsible").collapsible(), $(".slider").slider({
        full_width: !0
    }), $(".left-sidebar-hover").mouseover(function() {
        $(".button-collapse").click(), $(".material-design-hamburger__layer").removeClass("material-design-hamburger__icon--from-arrow"), $(".material-design-hamburger__layer").addClass("material-design-hamburger__icon--to-arrow"), $("#slide-out").addClass("openOnHover"), $("#slide-out").mouseleave(function() {
            $(this).hasClass("openOnHover") && ($(".button-collapse").click(), $(".material-design-hamburger__layer").addClass("material-design-hamburger__icon--from-arrow"), $(".material-design-hamburger__layer").removeClass("material-design-hamburger__icon--to-arrow"), $("#slide-out").removeClass("openOnHover"))
        })
    }), $(".modal-trigger").leanModal(), $("select").material_select(), preloader = new $.materialPreloader({
        position: "top",
        height: "5px",
        col_1: "#159756",
        col_2: "#da4733",
        col_3: "#3b78e7",
        col_4: "#fdba2c",
        fadeIn: 200,
        fadeOut: 200
    }), preloader.on(), $(window).load(function() {
        preloader.off()
    }), $(".card-refresh").click(function() {
        var t = $(this).closest(".card");
        e(t), window.setTimeout(function() {
            a(t)
        }, 100)
    }), $(".card-remove").click(function() {
        $(this).closest(".card").fadeOut(300)
    }), window.onload = function() {
        setTimeout(function() {
            $("body").addClass("loaded")
        }, 10), setTimeout(function() {
            $(".loader").fadeOut("400")
        }, 10)
    }, $("input.expand-search").click(function() {
        $(this).addClass("open-search")
    }), $("input.expand-search").blur(function() {
        $(this).removeClass("open-search")
    })
});