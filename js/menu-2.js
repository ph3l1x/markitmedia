var mainNav=function(){var e={obj_nav:$(arguments[0])||$("nav"),settings:{show_delay:0,hide_delay:0,_ie6:/MSIE 6.+Win/.test(navigator.userAgent),_ie7:/MSIE 7.+Win/.test(navigator.userAgent)},init:function(n,i){n.lists=n.childElements(),n.lists.each(function(t,s){e.handlNavElement(t),(e.settings._ie6||e.settings._ie7)&&i&&e.ieFixZIndex(t,s,n.lists.size())}),e.settings._ie6&&!i&&document.execCommand("BackgroundImageCache",!1,!0)},handlNavElement:function(n){void 0!==n&&(n.onmouseover=function(){e.fireNavEvent(this,!0)},n.onmouseout=function(){e.fireNavEvent(this,!1)},n.down("ul")&&e.init(n.down("ul"),!0))},ieFixZIndex:function(e,n,i){-1==e.tagName.toString().toLowerCase().indexOf("iframe")?e.style.zIndex=i-n:(e.onmouseover="null",e.onmouseout="null")},fireNavEvent:function(n,i){i?(n.addClassName("over"),n.down("a").addClassName("over"),n.childElements()[1]&&e.show(n.childElements()[1])):(n.removeClassName("over"),n.down("a").removeClassName("over"),n.childElements()[1]&&e.hide(n.childElements()[1]))},show:function(n){n.hide_time_id&&clearTimeout(n.hide_time_id),n.show_time_id=setTimeout(function(){n.hasClassName("shown-sub")||n.addClassName("shown-sub")},e.settings.show_delay)},hide:function(n){n.show_time_id&&clearTimeout(n.show_time_id),n.hide_time_id=setTimeout(function(){n.hasClassName("shown-sub")&&n.removeClassName("shown-sub")},e.settings.hide_delay)}};arguments[1]&&(e.settings=Object.extend(e.settings,arguments[1])),e.obj_nav&&e.init(e.obj_nav,!1)};jQuery(document).ready(function(){menuTitle="Menu";var e=jQuery("ul#nav").clone();e.removeAttr("id").removeClass("menu").addClass("et-mobile-menu"),e.find(".static-nav").remove(),e.before('<span class="et-menu-title">'+menuTitle+"</span>"),e.find("li:has(ul)",this).each(function(){jQuery(this).prepend('<span class="open-child">(open)</span>')}),e.find(".open-child").toggle(function(){jQuery(this).parent().addClass("over").find(".fullwidth").find("div ul").slideDown(100)},function(){jQuery(this).parent().removeClass("over").find(".fullwidth").find("div ul").slideUp(100)}),jQuery("ul#nav").after(e).after('<span class="et-menu-title">'+menuTitle+"</span>"),jQuery(".et-menu-title").toggle(function(){jQuery(this).next().slideDown(100)},function(){jQuery(this).next().slideUp(100)})});