;
window.Modernizr = function(a, b, c) {
    function y(a, b) {
        return !!~("" + a).indexOf(b)
    }

    function x(a, b) {
        return typeof a === b
    }

    function w(a, b) {
        return v(m.join(a + ";") + (b || ""))
    }

    function v(a) {
        j.cssText = a
    }
    var d = "2.0.6",
        e = {},
        f = b.documentElement,
        g = b.head || b.getElementsByTagName("head")[0],
        h = "modernizr",
        i = b.createElement(h),
        j = i.style,
        k, l = Object.prototype.toString,
        m = " -webkit- -moz- -o- -ms- -khtml- ".split(" "),
        n = {},
        o = {},
        p = {},
        q = [],
        r = function(a, c, d, e) {
            var g, i, j, k = b.createElement("div");
            if (parseInt(d, 10))
                while (d--) j = b.createElement("div"), j.id = e ? e[d] : h + (d + 1), k.appendChild(j);
            g = ["&shy;", "<style>", a, "</style>"].join(""), k.id = h, k.innerHTML += g, f.appendChild(k), i = c(k, a), k.parentNode.removeChild(k);
            return !!i
        },
        s, t = {}.hasOwnProperty,
        u;
    !x(t, c) && !x(t.call, c) ? u = function(a, b) {
        return t.call(a, b)
    } : u = function(a, b) {
        return b in a && x(a.constructor.prototype[b], c)
    };
    var z = function(c, d) {
        var f = c.join(""),
            g = d.length;
        r(f, function(c, d) {
            var f = b.styleSheets[b.styleSheets.length - 1],
                h = f.cssRules && f.cssRules[0] ? f.cssRules[0].cssText : f.cssText || "",
                i = c.childNodes,
                j = {};
            while (g--) j[i[g].id] = i[g];
            e.touch = "ontouchstart" in a || j.touch.offsetTop === 9
        }, g, d)
    }([, ["@media (", m.join("touch-enabled),("), h, ")", "{#touch{top:9px;position:absolute}}"].join("")], [, "touch"]);
    n.touch = function() {
        return e.touch
    };
    for (var A in n) u(n, A) && (s = A.toLowerCase(), e[s] = n[A](), q.push((e[s] ? "" : "no-") + s));
    v(""), i = k = null, e._version = d, e._prefixes = m, e.testStyles = r;
    return e
}(this, this.document);


// if (999 < scr){

jQuery.fn.megaMenu = function(a) {
    function e() {
        $(c).click(function() {
            $(this).parent("li").toggleClass("active").siblings().removeClass("active");
            $(d).fadeOut(400, 0);
            $(this).parent("li").children(d).fadeTo(400, 1)
console.log('test_Click fired');
        })
    }
    var b = $(".megamenu li"),
        c = $(b).find("a"),
        d = ".dropcontent, .fullwidth";
    $(".dropcontent").css("left", "auto").hide();
    $(".fullwidth").css("left", "-1px").hide();

//    scr = window.innerWidth;
    console.log('scr = '+ scr);
//   if (999 < scr){
//        $(".fullwidth").css("left", "-1px").hide();
//    }

//    $(".fullwidth").css({'left':'-1px', "width":"0", "height":"0"}).fadeTo(200, 0);
//    $(".fullwidth").css("left", "-1px").hide( function() {
//        console.log('fadeTo - 0 fired');
//        $(this).css({"width":"0", "height":"0"});
//        $(this).delay( 800 ).css({"left":"","display":""});
//    })


//  $(".fullwidth").css("left", "-1px").hide(), function() { $(".fullwidth").css("display", "block"); };
//    $( ".fullwidth" ).css("left", "-1px").hide().delay( 5000 ).show();

//    (function() { $(".fullwidth").css("left", "-1px").hide(); $(".fullwidth").show("normal");});
//    (function() { $(".fullwidth").hide("normal", function() { $(".fullwidth").show(); });});

console.log('test_1 fired');
    
    
    
    if (Modernizr.touch) {
        $(c).bind("touchstart", function() {
            var a = $(this);
            a.parent("li").toggleClass("isvisible");
            if (a.parent("li").hasClass("isvisible")) {
                a.parent("li").removeClass("noactive").siblings().children(d).css("left", "-999em").fadeOut(1);
                if (a.parent("li").children(d).hasClass("fullwidth")) {
                    a.parent("li").children(d).css("left", "-1px").fadeTo(1, 1)
console.log('test_c fired');
                } else {
                    a.parent("li").children(d).css("left", "auto").fadeTo(1, 1)
                }
            } else {
                a.parent("li").addClass("noactive").children(d).css("left", "-999em").fadeOut(1)
            }
        });
        $(".megamenu").bind("touchstart", function(a) {
            a.stopPropagation()
        });
        $(document).bind("touchstart", function() {
            $(d).css("left", "-999em");
            $(b).addClass("noactive").removeClass("isvisible")
        })
    } else {
        switch (a) {
            case "hover_fade":
                $(b).hover(function() {
//                    $(this).children(d).stop().delay(200).fadeTo(400, 1)
                   scr = window.innerWidth;
console.log('scr = '+ scr);
                    if (999 < scr){
                    $(this).children(d).stop().css({"width":"100%", "height":"auto"}).delay(200).fadeTo(400, 1);
console.log('fadeTo - 1 fired');
                    }
                }, function() {
                    scr = window.innerWidth;
                    if (999 < scr){
                    $(this).children(d).stop().fadeTo(200, 0, function() {
//                    $(this).children(d).stop().fadeTo(200, 0, function() {
console.log('fadeTo - 0 fired');
//                        $(this).hide()
//                    $(this).hide().delay( 1500 ).css({"width":"0", "height":"0"});
                    })
                }
                });
                break;
            case "hover_fadein":
                $(b).hover(function() {
                    $(this).children(d).stop().delay(200).fadeTo(400, 1)
                }, function() {
                    $(this).children(d).stop().fadeTo(0, 0).hide()
                });
                break;
            case "hover_slide":
                $(b).hover(function() {
                    $(this).children(d).delay(200).animate({
                        height: "toggle"
                    }, 200)
                }, function() {
                    $(this).children(d).animate({
                        height: "toggle"
                    }, 200)
                });
                break;
            case "hover_toggle":
                $(b).hover(function() {
                    $(this).children(d).delay(200).toggle(200)
                }, function() {
                    $(this).children(d).toggle(0)
                });
                break;
            case "click_fade":
                $(b).click(function() {
                    $(this).children(d).fadeIn(400);
                    $(this).hover(function() {}, function() {
                        $(this).children(d).fadeOut(200)
                    })
                });
                break;
            case "click_slide":
                $(b).click(function() {
                    $(this).children(d).slideDown(200);
                    $(this).hover(function() {}, function() {
                        $(this).children(d).slideUp(200)
                    })
                });
                break;
            case "click_toggle":
                $(b).click(function() {
                    $(this).children(d).show(200);
                    $(this).hover(function() {}, function() {
                        $(this).children(d).hide(200)
                    })
                });
                break;
            case "click_open_close":
                e();
                break;
            case "click_open_close_slide":
                $(c).click(function() {
                    $(this).parent("li").toggleClass("active").siblings().removeClass("active").children(d).slideUp(400);
                    $(this).parent("li").children(d).slideToggle(400)
                });
                break;
            case "click_open_close_toggle":
                $(c).click(function() {
                    $(this).parent("li").toggleClass("active").siblings().removeClass("active").children(d).hide(400);
                    $(this).parent("li").children(d).toggle(400)
                });
                break;
            case "opened_first":
                $(".megamenu li:first-child > div").fadeTo(400, 1).parent().toggleClass("active");
                e();
                break;
            case "opened_last":
                $(".megamenu li:last-child > div").fadeTo(400, 1).parent().toggleClass("active");
                e();
                break;
            case "opened_second":
                $(".megamenu li:nth-child(2) > div").fadeTo(400, 1).parent().toggleClass("active");
                e();
                break;
            case "opened_third":
                $(".megamenu li:nth-child(3) > div").fadeTo(400, 1).parent().toggleClass("active");
                e();
                break;
            case "opened_fourth":
                $(".megamenu li:nth-child(4) > div").fadeTo(400, 1).parent().toggleClass("active");
                e();
                break;
            case "opened_fifth":
                $(".megamenu li:nth-child(5) > div").fadeTo(400, 1).parent().toggleClass("active");
                e();
                break
        }
    }
}
// };