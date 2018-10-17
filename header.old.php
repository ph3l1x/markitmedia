<?php

/* let's not air out our dirty laundry */
ini_set('display_errors', '0');
/***************************************/

if (isset($_GET['adtrack']) && strlen($_GET['adtrack']) > 0) {

	// set cookie for 7 days
	setcookie('conversion_track',$_GET['adtrack'],time() + (86400 * 7), "/", "markitmedia.com"); // 86400 = 1 day

	header('Location:'.$_SERVER['PHP_SELF']);
	exit(0);
}



$siteroot = '/';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Markit Media - <?php echo $title; ?></title>
<link rel="shortcut icon" href="https://markitmedia.com/favicon.ico" />
<meta name="description" content="<?php echo $description; ?>" />
<meta name="keywords" content="<?php echo $keywords; ?>" />
<meta name="author" content="Markit Media Web Design" />
<meta name="google-site-verification" content="fy3wP4lF7N3RUdmQYt3FIaVD1484Xbxdbmck8HN7ps8" />
<meta name="p:domain_verify" content="9f84528a00c84151ee4a49726ff11967"/>
<link rel="SHORTCUT ICON" href="https://markitmedia.com/favicon.ico" />
<meta name="zipcode" content="85268,85213,85253,85260,85207,85205,85215,85252,85251,85209,85032,85250,85258,85281,85280,85282" />
<meta name="city" content="Apache Jct,Apache Junction,Ahwatukee,Anthem,Avondale,Buckeye,Carefree,Cave Creek,Chandler,El Mirage,Fountain Hills,Gilbert,Glendale,Guadalupe,Litchfield Park,Mesa,Paradise Valley,Peoria,Phoenix,Queen Creek,Scottsdale,Sun City,Sun City Grand,Sun City West,Surprise,Tempe,Tolleson,Youngtown" />
<meta name="county" content="Maricopa,Pinal,Gila" />
<meta name="state" content="Arizona, AZ" />
<meta name="country" content="United States, USA, United States of America" />

<meta name="alexaVerifyID" content="9nQLBtx6isqM_hlFLfMEMll7sgA" />
<meta name="msvalidate.01" content="09EE1F095C086647274CFD20FB3DEF7F" />
<meta name="y_key" content="8f57299917bc5035" />

<meta name="robots" content="noodp,noydir" />
<meta name="googlebot" content="index,follow" />
<meta name="revisit-after" content="7 Days" />
<meta name="mssmarttagspreventparsing" content="true" />
<meta name="rating" content="General" />
<meta name="language" content="en" />
<meta name="author" content="Markit Media Group" />
<meta name="copyright" content="Markit Media Group 1999-2015" />

<link rel="stylesheet" href="<?php echo $siteroot; ?>css/megamenu.css" type="text/css" media="screen" />
<?php if ($pageName == 'Home Page - Quick Quote') { ?>
<link rel="stylesheet" type="text/css" href="<?php echo $siteroot; ?>js/slider/themes/default/jquery.slider.css" />
<?php } ?>
<?php if (strpos($pageName, 'Portfolio') !== false) { ?>
<link type="text/css" rel="stylesheet" href="<?php echo $siteroot; ?>css/jquery.galleryview-3.0-dev.css" />
<?php } ?>
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="js/slider/themes/default/jquery.slider.ie6.css" />
<![endif]-->
<link href="<?php echo $siteroot; ?>css/main.css" rel="stylesheet" type="text/css" />
<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css' />
<link href="<?php echo $siteroot; ?>css/footer.css" rel="stylesheet" type="text/css" />
<!-- localsaver script -->
<script id="localsaver-mobile" data-link="https://mobile.localsaver.com/mw/BDSP-12618923.html" data-version="1" src="//cdn.dtswg.com/mobhp/widget.js"></script>
<!-- end localsaver script -->
<script type="text/javascript" src="<?php echo $siteroot; ?>js/jquery.min.js"></script>
<?php if ($pageName == 'Home Page - Quick Quote') { ?>
<script type="text/javascript" src="<?php echo $siteroot; ?>js/slider/jquery.slider.js"></script>
<script type="text/javascript" src="<?php echo $siteroot; ?>js/home.js"></script>
<?php } ?>
<script type="text/javascript" src="<?php echo $siteroot; ?>js/megamenu.min.js"></script>
<?php if (strpos($pageName, 'Portfolio') !== false) { ?>
<script type="text/javascript" src="<?php echo $siteroot; ?>js/jquery.timers-1.2.js"></script>
<script type="text/javascript" src="<?php echo $siteroot; ?>js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php echo $siteroot; ?>js/jquery.galleryview-3.0-dev.js"></script>
<script type="text/javascript" src="<?php echo $siteroot; ?>js/gallery.js"></script>
<?php } ?>
<script type="text/javascript" src="<?php echo $siteroot; ?>js/custom.js"></script>
 <script src="https://apis.google.com/js/platform.js" async defer></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-13291996-1']);
  _gaq.push(['_trackPageview']);
  console.log(_gaq);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	console.log(ga);
	console.log(ga.src);
	console.log(s);
	console.log("should have logged");
})();

</script>

<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript" src="<?php echo $siteroot; ?>js/jquery.fancybox.js?v=2.0.6"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $siteroot; ?>css/jquery.fancybox.css?v=2.0.6" media="screen" />
<!-- Initiate FancyBox -->
<?php if ( $_SERVER["REQUEST_URI"] == '/thank-you/' ) { ?>
	<script type="text/javascript">
        $(document).ready(function() {
            $.fancybox([ {href : '#thankyou'} ])
        });
    </script>
    
    
	<!-- ADOSIA CAMPAIGN TRACKING CODE -->
	<script type="text/javascript">
		var adosia_proto = ('https:' == document.location.protocol ? 'https://' : 'http://');
		var adosia_ifrm = document.createElement("IFRAME");
		var adosia_url = adosia_proto + "adosia.com/adscroll/beacon_conversion.php?tkey=0682a849b2c4b6b0a2e4872872acc15e";
		adosia_ifrm.setAttribute("src", encodeURI(adosia_url));
		adosia_ifrm.style.width = 0+"px";
		adosia_ifrm.style.height = 0+"px";
		adosia_ifrm.style.display = "none";
		document.body.appendChild(adosia_ifrm);
	</script>
	<noscript>
		<iframe src="https://adosia.com/adscroll/beacon_conversion.php?tkey=0682a849b2c4b6b0a2e4872872acc15e" style="height:0px;width:0px;display:none;"></iframe>
	</noscript>
    
	<?php  
	// determine if thank you page lead submission was from external ad source

		if (isset($_COOKIE['conversion_track'])) {
	
			if ($_COOKIE['conversion_track'] == "fb") { ?>

				<!-- Facebook Conversion Code for First Pixel -->
				<script>
					(function() {
						var _fbq = window._fbq || (window._fbq = []);
						if (!_fbq.loaded) {
						    var fbds = document.createElement('script');
					    	fbds.async = true;
						    fbds.src = '//connect.facebook.net/en_US/fbds.js';
					    	var s = document.getElementsByTagName('script')[0];
					    	s.parentNode.insertBefore(fbds, s);
						    _fbq.loaded = true;
						}
					})();
					window._fbq = window._fbq || [];
					window._fbq.push(['track', '6016206244766', {'value':'0.00','currency':'USD'}]);
				</script>
				<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6016206244766&amp;cd[value]=0.00&amp;cd[currency]=USD&amp;noscript=1" /></noscript>
			<?php }
		
			// unset cookie
			setcookie("conversion_track", "", time()-3600);
		
		}
	?>    
<?php } ?>


<!-- ADROLL Retargeting Code -->
<script type="text/javascript"> 
adroll_adv_id = "UGK2BPQE6NDC3HAWOWKCRE"; 
adroll_pix_id = "CZE5PBISW5HY5JCRW7XCOQ"; 
(function () { 
var oldonload = window.onload; 
window.onload = function(){ 
   __adroll_loaded=true; 
   var scr = document.createElement("script"); 
   var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com"); 
   scr.setAttribute('async', 'true'); 
   scr.type = "text/javascript"; 
   scr.src = host + "/j/roundtrip.js"; 
   ((document.getElementsByTagName('head') || [null])[0] || 
    document.getElementsByTagName('script')[0].parentNode).appendChild(scr); 
   if(oldonload){oldonload()}}; 
}()); 
</script>



<!-- Facebook Retargeting Code -->
<script>
(function() {
	var _fbq = window._fbq || (window._fbq = []);
	if (!_fbq.loaded) {
	    var fbds = document.createElement('script');
		fbds.async = true;
		fbds.src = '//connect.facebook.net/en_US/fbds.js';
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(fbds, s);
		_fbq.loaded = true;
	}
	_fbq.push(['addPixelId', '690093911074860']);
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', 'PixelInitialized', {}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=690093911074860&amp;ev=PixelInitialized" /></noscript>
<!-- Retargeting by DataSphere Retargeting Code Begins -->

  <script type="text/javascript">

    (function() {

      window._pa = window._pa || {};

      var pa = document.createElement('script'); pa.type =
'text/javascript'; pa.async = true;

      pa.src = ('https:' == document.location.protocol ? 'https:' : 'http:')
+ "//tag.perfectaudience.com/serve/507e0153f16a97000200001c.js";

      var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(pa, s);

      window._pq = window._pq || [];

      _pq.push(['datasphere.track', 'BDSP-12618923']);

    })();

  </script>

<!-- Retargeting by DataSphere Code Ends -->

 
</head>
<body>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KWL6V6');</script>
<!-- End Google Tag Manager -->
<!-- Facebook Like -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=334932323343737";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- End Facebook Like -->
<div id="topBar">
	<div class="wrapper">
    	<div id="domainSearch2">
            	<h1>Start Your Domain Search</h1>
                <form qaid="1" style="margin:0px" name="RegisterDomainForm" id="RegisterDomainForm" method="post" onsubmit="return checkDomain(this);"  action="http://www.securepaynet.net/?prog_id=451792"><input type="hidden" name="postBack" value="true">           <input type="hidden" name="Validate" value="0" />
                    <input type="hidden" name="currStep" value="0" />
                    <input type="hidden" name="searchSB" value="0" />
                    <input type="hidden" name="searchSBname" value="" />
                    <input type="hidden" name="tldReg" value="" />
                    <input type="hidden" name="searchSBselected" value="" />
                    <input type="hidden" name="queryOingo" value="" />
                    <input type="hidden" name="showAltTLDs" value="" />
                    <input type="hidden" name="fblur" value="0" />
                    <input type="hidden" name="checkAvail" value="1" />
                    <input qaid="2017" type="text" class="bodyText" name="domainToCheck" size="37" maxlength="63" />
                    <select style="float:left;" qaid="2018" name="tld" class="dropdown">
                      <option value=".com" selected="selected">.com</option>
                      <option value=".co">.co</option>
                      <option value=".net">.net</option>
                      <option value=".info">.info</option>
                      <option value=".org">.org</option>
                      <option value=".me">.me</option>
                      <option value=".mobi">.mobi</option>
                      <option value=".biz">.biz</option>
                      <option value=".us">.us</option>
                      <option value=".ca">.ca</option>
                      <option value=".asia">.asia</option>
                      <option value=".in">.in</option>
                      <option value=".ws">.ws</option>
                      <option value=".at">.at</option>
                      <option value=".be">.be</option>
                      <option value=".cc">.cc</option>
                      <option value=".de">.de</option>
                      <option value=".eu">.eu</option>
                      <option value=".fm">.fm</option>
                      <option value=".gs">.gs</option>
                      <option value=".jobs">.jobs</option>
                      <option value=".jp">.jp</option>
                      <option value=".ms">.ms</option>
                      <option value=".nu">.nu</option>
                      <option value=".co.nz">.co.nz</option>
                      <option value=".net.nz">.net.nz</option>
                      <option value=".org.nz">.org.nz</option>
                      <option value=".tc">.tc</option>
                      <option value=".tw">.tw</option>
                      <option value=".com.tw">.com.tw</option>
                      <option value=".org.tw">.org.tw</option>
                      <option value=".idv.tw">.idv.tw</option>
                      <option value=".co.uk">.co.uk</option>
                      <option value=".me.uk">.me.uk</option>
                      <option value=".org.uk">.org.uk</option>
                      <option value=".vg">.vg</option>
                      <option value=".tv">.tv</option>
                      <option value=".co.in">.co.in</option>
                      <option value=".net.in">.net.in</option>
                      <option value=".org.in">.org.in</option>
                      <option value=".firm.in">.firm.in</option>
                      <option value=".gen.in">.gen.in</option>
                      <option value=".ind.in">.ind.in</option>
                    </select>
                      <input class="searchBtn" qaid="2020" type="image" src="https://img1.wsimg.com/fos/base/0/53845_btn_search.png" width="65" height="20" alt="Check Domain Name" id="image1" name="image1" />
                </form>
                <div class="clear"></div>
            </div>
			<ul class="topNav">
          <li><a href="http://seo.markitmedia.com/" target="_blank">SEO Client Login</a></li>
        </ul>
		<ul class="topNav">
		  <li style="padding-right:46px;"><a href="https://visitor.r20.constantcontact.com/d.jsp?llr=ziyxu4jab&p=oi&m=1110237241625&sit=x5pf7x4gb&f=d196d4e9-094f-4171-99ea-6ef99ff30b79" target="_blank">Newsletter Signup</a></li></ul>
    </div>
</div>
<div class="wrapper">
	<div id="header">
    	<div id="logo">
        	<a href="<?php echo $siteroot; ?>"><img src="<?php echo $siteroot; ?>images/logo.png" width="295" height="132" border="0" /></a>
        </div>
        <div id="follow">
        <div id="follow2-top">
        <img src="<?php echo $siteroot; ?>images/icon-godaddy.png" class="imagespacer" alt="GoDaddy" title="GoDaddy"/><img src="<?php echo $siteroot; ?>images/icon-google.png" class="imagespacer" alt="Google" title="Google"/><img src="<?php echo $siteroot; ?>images/icon-yahoo.png" class="imagespacer" alt="Yahoo!" title="Yahoo!"/>
        </div>
         <div id="follow2-middle">
        <img src="<?php echo $siteroot; ?>images/icon-magento.png" title="Magento" alt="Magento"/><img src="<?php echo $siteroot; ?>images/wht-box-bg.png" alt="We Support" title="We Support" /><img src="<?php echo $siteroot; ?>images/icon-bing.png" title="Bing" alt="Bing" />
        </div>
         <div id="follow2-btm">
         <img src="<?php echo $siteroot; ?>images/icon-wordpress.png" class="imagespacer" title="WordPress" alt="WordPress"/><img src="<?php echo $siteroot; ?>images/icon-sql.png" class="imagespacer" title="MySQL" alt="MySQL"/><img src="<?php echo $siteroot; ?>images/icon-php.png" class="imagespacer" alt="PHP"  title="PHP"/>
        </div>
        
        </div>
        <div id="phone">
        	<h1>480.245.4287</h1>
        </div>
        <div class="clear"></div>
   <div style="margin-top: -20px;margin-bottom: 20px;height: 30px; width: 100%; position: relative; font-size:28px">
            <div class="col_3" style="position: absolute; top: 10px; right: 7px;">
                <!-- <div style="margin-right:0" class="fb-like" data-href="https://www.facebook.com/markitmedia" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div> -->
                <div
  style="margin-right:0" class="fb-like" data-href="https://www.facebook.com/markitmedia" data-layout="button" data-action="like" 
  data-share="false"
  data-width="50"
  data-show-faces="false">
</div>
                <!-- Place this tag where you want the +1 button to render. -->
                <a style="" class="twitter-share-button"
                   href="https://twitter.com/share"
                   data-url="https://twitter.com/markitmedia"
                   data-via="MarkitMedia"
		   data-size="20px"	>
                    Tweet
                </a>
                <script>
                    window.twttr=(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],t=window.twttr||{};if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);t._e=[];t.ready=function(f){t._e.push(f);};return t;}(document,"script","twitter-wjs"));
                </script>
                <div style="margin-top: 15px" class="g-plusone" data-size="medium" data-annotation="none" data-href="markitmedia.com"></div>
                <a href="//www.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark"  data-pin-color="red" data-pin-height="20"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_20.png" /></a>
<!-- Please call pinit.js only once per page -->
<script type="text/javascript" async defer src="//assets.pinterest.com/js/pinit.js"></script>
            </div>
        </div>   
 </div>
    <div id="nav" class="megamenu_container">
    	<ul class="nav megamenu">
        	<li><a href="<?php echo $siteroot; ?>"><img src="<?php echo $siteroot; ?>images/home<?php if($page == 0) echo '_active'; ?>_btn.png" width="120" height="62" border="0"  /></a></li>
            <li>
            	<a href="<?php echo $siteroot; ?>web-design/" class="drop"><img src="<?php echo $siteroot; ?>images/web<?php if($page == 1) echo '_active'; ?>_btn.png" width="105" height="62" border="0" /></a>
           	<div class="fullwidth"><!-- Begin Item Container -->
         <div class="col_3">
                        <img src="<?php echo $siteroot; ?>images/web_header.png" width="210" height="109" border="0" />
                        
                    </div>
                    
                    <div class="col_3">
                        <h4>Web Services</h4>
                        <ul>
                          <li><a href="<?php echo $siteroot; ?>web-design/">Custom Web Design</a></li>
                          <li><a href="<?php echo $siteroot; ?>web-design/website-redesign.php">Website Redesign</a></li>
                          <li><a href="<?php echo $siteroot; ?>web-design/wordpress-websites.php">WordPress Websites</a></li>
                          <li><a href="<?php echo $siteroot; ?>web-design/joomla-websites.php">Joomla Websites</a></li>
                          <li><a href="<?php echo $siteroot; ?>web-design/paypal-integration.php">PayPal Integration</a></li>
                        </ul>
                    </div>
                    
                    <div class="col_3">
                        <h4>Web Programming</h4>
                        <ul>
                          <li><a href="<?php echo $siteroot; ?>web-design/php-programming.php">PHP Programming</a></li>
                          <li><a href="<?php echo $siteroot; ?>web-design/aspnet-programming.php">ASP / .NET Programming</a></li>
                          <li><a href="<?php echo $siteroot; ?>web-design/javascript-jquery.php">Javascript / jQuery</a></li>
                          <li><a href="<?php echo $siteroot; ?>web-design/flash-actionscript.php">Flash / Actionscript</a></li>
                        </ul>
                    </div>
                    
                    <div class="col_3">
                        <h4>Web Packages</h4>
                        <ul>
                          <li><a href="<?php echo $siteroot; ?>web-design/business-starter-package.php">Business Starter Package</a></li>
                          <li><a href="https://securepaynet.net/default.aspx?ci=1767&prog_id=451792" target="_blank">Domain / Hosting</a></li>
                          <li><a href="<?php echo $siteroot; ?>portfolio/"><b>View Portfolio</b></a></li>
                        </ul>
                    </div>
              </div><!-- End Item Container -->
            </li>
            <li>
            	<a href="<?php echo $siteroot; ?>print/" class="drop"><img src="<?php echo $siteroot; ?>images/print<?php if($page == 2) echo '_active'; ?>_btn.png" width="125" height="62" border="0" /></a>
             	<div class="fullwidth"><!-- Begin Item Container -->
                    <div class="col_3">
                        <img src="<?php echo $siteroot; ?>images/print_header.png" width="210" height="127" border="0" />
                        
                    </div>
                    
                    <div class="col_3">
                        <h4>Print Services</h4>
                        <ul>
                          <li><a href="<?php echo $siteroot; ?>print/business-cards.php">Business Cards</a></li>
                          <li><a href="<?php echo $siteroot; ?>print/flyers-postcards.php">Flyers and Postcards</a></li>
                          <li><a href="<?php echo $siteroot; ?>print/tri-fold-brochures.php">Tri-Fold Brochures</a></li>
                          <li><a href="<?php echo $siteroot; ?>print/posters.php">Posters</a></li>
                          <li><a href="<?php echo $siteroot; ?>print/door-hangers.php">Door Hangers</a></li>
                       	  <li><a href="<?php echo $siteroot; ?>print/every-door-direct-mailer.php">Every Door Direct Mailer</a></li>
			 </ul>
                    </div>
                    
                    <div class="col_3">
                    	<h4>&nbsp;</h4>
                        <ul>
                          <li><a href="<?php echo $siteroot; ?>print/vinyl-banners.php">Vinyl Banners</a></li>
                          <li><a href="<?php echo $siteroot; ?>print/signage.php">Signage</a></li>
                          <li><a href="<?php echo $siteroot; ?>print/a-frames.php">A Frames</a></li>
			  <li><a href="<?php echo $siteroot; ?>print/car-wrapping.php">Car Wrapping</a></li>
                          <li><a href="<?php echo $siteroot; ?>print/screen-printing-embroidery.php">Screen Printing / Embroidery</a></li>
                        <li><a href="<?php echo $siteroot; ?>print/political-signs.php">Political Signs</a></li> </ul>
                    </div>
                    
                    <div class="col_3">
                    	<h4>&nbsp;</h4>
                        <ul>
                          <li><a href="<?php echo $siteroot; ?>print/promotional-material.php">Promotional Material</a></li>
                          <li><a href="<?php echo $siteroot; ?>print/presentation-folders.php">Presentation Folders</a></li>
                          <li><a href="<?php echo $siteroot; ?>print/tradeshow-displays.php">Tradeshow Displays</a></li>
                          <li><a href="<?php echo $siteroot; ?>print/restaurant-menus.php">Restaurant Menus</a></li>
			  <li><a href="<?php echo $siteroot; ?>portfolio/print.php"><b>View Portfolio</b></a></li>
                        </ul>
                    </div>
              </div><!-- End Item Container -->
            </li>
            <li>
            	<a href="<?php echo $siteroot; ?>graphics/" class="drop"><img src="<?php echo $siteroot; ?>images/graphics<?php if($page == 3) echo '_active'; ?>_btn.png" width="159" height="62" border="0" /></a>
             	<div class="fullwidth"><!-- Begin Item Container -->
                    <div class="col_3">
                        <img src="<?php echo $siteroot; ?>images/graphics_header.png" width="210" height="117" border="0" />
                        
                    </div>
                    
                    <div class="col_3">
                        <h4>Design Services</h4>
                        <ul>
                          <li><a href="<?php echo $siteroot; ?>graphics/logo-design.php">Logo Design</a></li>
                          <li><a href="<?php echo $siteroot; ?>graphics/website-design.php">Website Design</a></li>
                          <li><a href="<?php echo $siteroot; ?>graphics/print-design.php">Print Design</a></li>
                          <li><a href="<?php echo $siteroot; ?>graphics/menu-ads.php">Menu / Ads</a></li>
                        </ul>
                    </div>
                    
                    <div class="col_3">
                        <h4>&nbsp;</h4>
                        <ul>
                          <li><a href="<?php echo $siteroot; ?>graphics/corporate-identity.php">Corporate Identity</a></li>
                          <li><a href="<?php echo $siteroot; ?>graphics/proposals-resumes.php">Proposals / Resumes</a></li>
                          <li><a href="<?php echo $siteroot; ?>graphics/photography-photo-editing.php">Photography / Photo Editing</a></li>
                        </ul>
                    </div>
                    
                    <div class="col_3">
                        <h4>Software Specialties</h4>
                        <ul>
                          <li><a href="<?php echo $siteroot; ?>graphics/adobe-photoshop.php">Adobe Photoshop</a></li>
                          <li><a href="<?php echo $siteroot; ?>graphics/adobe-illustrator.php">Adobe Illustrator</a></li>
                          <li><a href="<?php echo $siteroot; ?>graphics/adobe-indesign.php">Adobe InDesign</a></li>
                          <li><a href="<?php echo $siteroot; ?>portfolio/graphics.php"><b>View Portfolio</b></a></li>
                        </ul>
                    </div>
              </div><!-- End Item Container -->
            </li>
            <li>
            	<a href="<?php echo $siteroot; ?>marketing" class="drop"><img src="<?php echo $siteroot; ?>images/marketing<?php if($page == 4) echo '_active'; ?>_btn.png" width="175" height="62" border="0" /></a>
             	<div class="fullwidth"><!-- Begin Item Container -->
                    <div class="col_3">
                        <img src="<?php echo $siteroot; ?>images/marketing_header.png" width="210" height="163" border="0" />
                        
                    </div>
                    
                    <div class="col_3">
                        <h4>Marketing Services</h4>
                        <ul>
                          <li><a href="<?php echo $siteroot; ?>marketing/seo-sem-marketing.php">SEO / SEM Marketing</a></li>
                          <li><a href="<?php echo $siteroot; ?>marketing/email-campaigns.php">Email Campaigns</a></li>
                          <li><a href="<?php echo $siteroot; ?>marketing/online-lead-generations.php">Online Lead Generations</a></li>
                          <li><a href="<?php echo $siteroot; ?>marketing/promotional-products.php">Promotional Products</a></li>
                            <li><a href="<?php echo $siteroot; ?>marketing/local-directory.php">Local Directory</a></li>
                        </ul>
                    </div>
                    
                    <div class="col_3">
                        <h4>&nbsp;</h4>
                        <ul>
                          <li><a href="<?php echo $siteroot; ?>marketing/display-advertising-campaigns.php">Online Display Advertising</a></li>
                          <li><a href="<?php echo $siteroot; ?>marketing/internet-video-videography.php">Internet Video / Videography</a></li>
                          <!--<li><a href="<?php echo $siteroot; ?>marketing/affiliate-product-feeds.php">Affiliate / Product Feeds</a></li>-->
                          <li><a href="<?php echo $siteroot; ?>marketing/classified-advertising.php">Classified Advertising</a></li>
                          <li><a href="<?php echo $siteroot; ?>marketing/web-ads.php">Web Ads</a></li>
                        </ul>
                    </div>
                    
                    <div class="col_3">
                        <h4>&nbsp;</h4>
                        <ul>
                          <li><a href="<?php echo $siteroot; ?>marketing/public-relations-article-writing.php">Public Relations / Article Writing</a></li>
                          <li><a href="<?php echo $siteroot; ?>marketing/social-media.php">Social Media</a></li>
                          <li><a href="<?php echo $siteroot; ?>marketing/advertising-tv-print-radio.php">Advertising TV / Print / Radio </a></li>
                          <li><a href="<?php echo $siteroot; ?>marketing/flyer-distribution.php">Flyer Distribution</a></li>
                        </ul>
                    </div>
              </div><!-- End Item Container -->
            </li>
            <li><a href="<?php echo $siteroot; ?>about-us"><img src="<?php echo $siteroot; ?>images/about<?php if($page == 5) echo '_active'; ?>_btn.png" width="159" height="62" border="0" /></a></li>
            <li><a href="<?php echo $siteroot; ?>contact-us"><img src="<?php echo $siteroot; ?>images/contact<?php if($page == 6) echo '_active'; ?>_btn.png" width="137" height="62" border="0" /></a></li>
        </ul>
        <div class="clear"></div>
    </div>
</div>