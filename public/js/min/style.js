!function(){function e(e){e.css({height:$(window).outerHeight()})}function n(){var e=$(".res-menu").outerHeight();$("style").text("@media screen and (max-width:480px) { .wrapper { padding-bottom: "+e+"px; } }")}$(window).scroll(function(){$(this).scrollTop()>100?$(window).outerWidth()>450?$(".scroll-up").fadeIn():$(".scroll-up-res").fadeIn():$(window).outerWidth()>450?$(".scroll-up").fadeOut():$(".scroll-up-res").fadeOut()}),$(".scroll-up, .scroll-up-res").click(function(){return $("html, body").animate({scrollTop:0},800),!1}),$(".inner-field").on("focus",function(){$(this).closest(".inner-button-field").addClass("focused"),$(this).on("blur",function(){$(this).closest(".inner-button-field").removeClass("focused")})}),$(".trigger-fs").on("click",function(e){e.preventDefault(),$(this).parents(".category").children(".forums").slideToggle(400),$(this).toggleTwoClass("icon-angle-down","icon-angle-up")}),$(".dropdown-trigger").bsDropdown(),$(".select-trigger").bsSelect(),$(".tool-tip").tooltip(),$(".open-modal").modal(),$(".toggle-input").on("click",function(e){e.preventDefault(),$(this).parents(".input-to-toggle-wrapper").find(".input-to-toggle").fadeIn(400).children("input").focus().parents(".input-to-toggle-wrapper").next(".additional-input").fadeIn(400)}),$(".toggle-back").on("click",function(e){e.preventDefault(),$(this).parents(".input-to-toggle").fadeOut(400).parents(".input-to-toggle-wrapper").next(".additional-input").fadeOut(400)}),$(".trigger-sm-login").on("click",function(e){e.preventDefault(),$(".resp-login").slideToggle(400)}),$(".trigger-sm-userpanel").on("click",function(e){e.preventDefault(),$(".sm-userpanel").slideToggle(400)}),$(".res-menu a").css({width:100/$(".res-menu a").size()+"%"}),$(".triggerPanel").on("click",function(e){e.preventDefault();var n=$(this).data("panel"),t=$("#"+n);centerPanel(t),$(".overlay").show(),t.hide().fadeIn(400),$(window).resize(function(){centerPanel(t)}),$(document).keyup(function(e){var n=e.keyCode||e.which;"27"==n&&($(".overlay").hide(),t.hide())}),$(".overlay, .cancel").on("click",function(e){e.preventDefault(),$(".overlay").hide(),t.hide()})}),e($(".box-page")),$(window).load($(this),function(){centerPanel($(".central-box")),n()}),$(window).on("resize",function(){$(".scroll-up, .scroll-up-res").hide(),centerPanel($(".central-box")),e($(".box-page")),n(),$(this).outerWidth()>480&&$(".resp-login").hide()})}(jQuery);