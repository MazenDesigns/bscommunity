!function(a){a(".formSubmit").on("click",function(t){t.preventDefault(),a(this).closest("form").submit()});var t=!1;a(document).ajaxStart(function(){t===!0&&xhr.abort(),t=!0}),a(document).ajaxComplete(function(){t=!1}),a("form.ajax").ajaxSubmit(),a(".pre-installer").on("click",function(t){t.preventDefault();var e=a(this);data=e.closest("form").serialize(),finalR=a(".ajax-result.final"),db=a(".ajax-result.db"),mail=a(".ajax-result.mail"),a(".ajax-result").html('<img src="img/loader.gif" alt="loader"></img>').show(),a("html,body").animate({scrollTop:finalR.offset().top},"fast"),e.ajaxRequest({url:"install/preCheck",data:data},function(t){a(".version-rsl").html(t.php),t.required?(finalR.removeClass("succ").addClass("fail").html(t.required),db.hide(),mail.hide()):(db.html(t.database),mail.show().html(t.email),t.createF?finalR.removeClass("succ").addClass("fail").html(t.createF):t.createP?finalR.removeClass("fail").addClass("succ").html(t.createP):finalR.hide()),a(".next").show()})}),a(".install-tables").on("click",function(t){t.preventDefault(),a(".ajax-result").css({display:"inline-block"}),a(".step1").ajaxRequest({url:"install/tables"},function(t){for(key in t)a("#"+key).children(".ajax-result").replaceWith(t[key]);a(".next").show()})}),a(".save-data").on("click",function(t){t.preventDefault(),target=a(".ajax-loader"),form=a("#form"),target.show().html('<img src="img/loader.gif" />'),form.submit(function(a){a.preventDefault()});var e=form.serialize(),l=form.attr("action");form.ajaxRequest({url:l,data:e},function(t){if(t.done)a(".next").show(),form.find("input, textarea").removeClass("error"),target.html("<span>"+t.done+"</span>");else if(t.already)a(".next").show(),target.html('<strong class="color-5">'+t.already+"</strong>");else if(t.displayError)target.html('<strong class="color-5">'+t.displayError+"</strong>");else{var e="<ul class='have-arrow'>";a.each(t,function(){a.each(this,function(a,t){e+="<li>"+t+"</li>"})}),e+="</ul>",target.html(e),form.find("input, textarea").removeClass("error").each(function(){t[a(this).attr("name")]&&a(this).addClass("error")})}a("html,body").animate({scrollTop:target.offset().top},"fast")})})}(jQuery);