<?php
$siteroot = '/new/';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>MarkIt Media - Web Marketing Graphics and Print - <?php echo $title; ?></title>
<meta name="description" content="<?php echo $description; ?>" />
<meta name="keywords" content="<?php echo $keywords; ?>" />
<link rel="stylesheet" href="<?php echo $siteroot; ?>css/megamenu.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo $siteroot; ?>js/slider/themes/default/jquery.slider.css" />
<link href="<?php echo $siteroot; ?>css/main.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="js/slider/themes/default/jquery.slider.ie6.css" />
<![endif]-->
<script type="text/javascript" src="<?php echo $siteroot; ?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $siteroot; ?>js/slider/jquery.slider.js"></script>
<script type="text/javascript" src="<?php echo $siteroot; ?>js/megamenu.min.js"></script>
<script type="text/javascript" src="<?php echo $siteroot; ?>js/custom.js"></script>

<script type="text/javascript" src="<?php echo $siteroot; ?>js/jquery.timers-1.2.js"></script>
<script type="text/javascript" src="<?php echo $siteroot; ?>js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php echo $siteroot; ?>js/jquery.galleryview-3.0-dev.js"></script>
<link type="text/css" rel="stylesheet" href="<?php echo $siteroot; ?>css/jquery.galleryview-3.0-dev.css" />
</head>

<body>
<div id="topBar">
	<div class="wrapper">
    	<ul class="topNav">
          <li><a href="#">SEO Client Login</a></li>
          <li class="drop">
          	<a href="#">Domain Search<img class="arrow" src="<?php echo $siteroot; ?>images/arrow_drop.png" width="13" height="9" border="0" /></a>
            <div id="domainSearch">
            	<h1>Start Your Domain Search</h1>
                <form qaid="1" style="margin:0px" name="RegisterDomainForm" id="RegisterDomainForm" method="POST" onSubmit="return checkDomain(this);"  action="https://www.securepaynet.net/gdshop/registrar/search.asp?prog_id=451792"><input type="hidden" name="postBack" value="true">
                    <input type="hidden" name="Validate" value="0">
                    <input type="hidden" name="currStep" value="0">
                    <input type="hidden" name="searchSB" value="0">
                    <input type="hidden" name="searchSBname" value="">
                    <input type="hidden" name="tldReg" value="">
                    <input type="hidden" name="searchSBselected" value="">
                    <input type="hidden" name="queryOingo" value="">
                    <input type="hidden" name="showAltTLDs" value="">
                    <input type="hidden" name="fblur" value="0">
                    <input type="hidden" name="checkAvail" value="1">
                    <input qaid="2017" type="text" class="bodyText" name="domainToCheck" size="37" maxlength="63">
                    <select style="float:left;" qaid="2018" name="tld" class="dropdown">
                      <OPTION VALUE=".com" selected="selected">.com
                      <OPTION VALUE=".co">.co
                      <OPTION VALUE=".net">.net
                      <OPTION VALUE=".info">.info
                      <OPTION VALUE=".org">.org
                      <OPTION VALUE=".me">.me
                      <OPTION VALUE=".mobi">.mobi
                      <OPTION VALUE=".biz">.biz<OPTION VALUE=".us">.us<OPTION VALUE=".ca">.ca<OPTION VALUE=".asia">.asia<OPTION VALUE=".in">.in<OPTION VALUE=".ws">.ws<OPTION VALUE=".at">.at<OPTION VALUE=".be">.be<OPTION VALUE=".cc">.cc<OPTION VALUE=".de">.de<OPTION VALUE=".eu">.eu<OPTION VALUE=".fm">.fm<OPTION VALUE=".gs">.gs<OPTION VALUE=".jobs">.jobs<OPTION VALUE=".jp">.jp<OPTION VALUE=".ms">.ms<OPTION VALUE=".nu">.nu<OPTION VALUE=".co.nz">.co.nz<OPTION VALUE=".net.nz">.net.nz<OPTION VALUE=".org.nz">.org.nz<OPTION VALUE=".tc">.tc<OPTION VALUE=".tw">.tw<OPTION VALUE=".com.tw">.com.tw<OPTION VALUE=".org.tw">.org.tw<OPTION VALUE=".idv.tw">.idv.tw<OPTION VALUE=".co.uk">.co.uk<OPTION VALUE=".me.uk">.me.uk<OPTION VALUE=".org.uk">.org.uk<OPTION VALUE=".vg">.vg<OPTION VALUE=".tv">.tv<OPTION VALUE=".co.in">.co.in<OPTION VALUE=".net.in">.net.in<OPTION VALUE=".org.in">.org.in<OPTION VALUE=".firm.in">.firm.in<OPTION VALUE=".gen.in">.gen.in<OPTION VALUE=".ind.in">.ind.in</select>
                      <input style="float:left; margin-left:10px; margin-top:4px;" qaid="2020" type="image" src="/Images/53845_btn_search.png" border="0" width="65" height="20" alt="Check Domain Name" id=image1 name=image1>
                </form>
                <div class="clear"></div>
            </div>
         </li>
        </ul>
    </div>
</div>
<div class="wrapper">
	<div id="header">
    	<div id="logo">
        	<a href="<?php echo $siteroot; ?>"><img src="<?php echo $siteroot; ?>images/logo.png" width="295" height="132" border="0" /></a>
        </div>
        <div id="follow">
        	<a href="http://facebook.com/markitmedia" target="_blank"><img src="<?php echo $siteroot; ?>images/facebook.png" width="30" height="30" border="0" /></a>
            <a href="http://twitter.com/markitmedia" target="_blank"><img src="<?php echo $siteroot; ?>images/twitter.png" width="30" height="30" border="0" /></a>
            <a href="http://youtube.com/markitmedia" target="_blank"><img src="<?php echo $siteroot; ?>images/youtube.png" width="30" height="30" border="0" /></a>
            <a href="http://linkedin.com/markitmedia" target="_blank"><img src="<?php echo $siteroot; ?>images/linkedin.png" width="30" height="30" border="0" /></a>
        </div>
        <div id="phone">
        	<h1>480.245.4287</h1>
        </div>
        <div class="clear"></div>
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
                          <li><a href="<?php echo $siteroot; ?>web-design/wordpress-websites.php">Wordpress Websites</a></li>
                          <li><a href="<?php echo $siteroot; ?>web-design/joomla-websites.php">Joomla Websites</a></li>
                        </ul>
                    </div>
                    
                    <div class="col_3">
                        <h4>Web Programming</h4>
                        <ul>
                          <li><a href="<?php echo $siteroot; ?>web-design/php-programming.php">Php Programming</a></li>
                          <li><a href="<?php echo $siteroot; ?>web-design/aspnet-programming.php">ASP / .NET Programming</a></li>
                          <li><a href="<?php echo $siteroot; ?>web-design/javascript-jquery.php">Javascript / jQuery</a></li>
                          <li><a href="<?php echo $siteroot; ?>web-design/flash-actionscript.php">Flash / Actionscript</a></li>
                        </ul>
                    </div>
                    
                    <div class="col_3">
                        <h4>Web Packages</h4>
                        <ul>
                          <li><a href="<?php echo $siteroot; ?>web-design/business-starter-package.php">Business Starter Package</a></li>
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
                          <li><a href="<?php echo $siteroot; ?>print/4x6-flyers.php">4x6 Flyers</a></li>
                          <li><a href="<?php echo $siteroot; ?>print/tri-fold-brochures.php">Tri-Fold Brouchures</a></li>
                          <li><a href="<?php echo $siteroot; ?>print/door-hangers.php">Door Hangers</a></li>
                        </ul>
                    </div>
                    
                    <div class="col_3">
                    	<h4>&nbsp;</h4>
                        <ul>
                          <li><a href="<?php echo $siteroot; ?>print/vinyl-banners.php">Vinyl Banners</a></li>
                          <li><a href="<?php echo $siteroot; ?>print/signage.php">Signage</a></li>
                          <li><a href="<?php echo $siteroot; ?>print/car-wrapping.php">Car wrapping</a></li>
                          <li><a href="<?php echo $siteroot; ?>print/screen-printing-embroidery.php">Screen Printing / Embroidery</a></li>
                        </ul>
                    </div>
                    
                    <div class="col_3">
                    	<h4>&nbsp;</h4>
                        <ul>
                          <li><a href="<?php echo $siteroot; ?>print/promotional-material.php">Promotional Material</a></li>
                          <li><a href="<?php echo $siteroot; ?>print/presentation-folders.php">Presentation Folders</a></li>
                          <li><a href="<?php echo $siteroot; ?>print/tradeshow-displays.php">Tradeshow Displays</a></li>
                          <li><a href="<?php echo $siteroot; ?>portfolio/print.php"><b>View Portfolio</b></a></li>
                        </ul>
                    </div>
              </div><!-- End Item Container -->
            </li>
            <li>
            	<a href="#" class="drop"><img src="<?php echo $siteroot; ?>images/graphics<?php if($page == 3) echo '_active'; ?>_btn.png" width="159" height="62" border="0" /></a>
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
            	<a href="#" class="drop"><img src="<?php echo $siteroot; ?>images/marketing<?php if($page == 4) echo '_active'; ?>_btn.png" width="175" height="62" border="0" /></a>
             	<div class="fullwidth"><!-- Begin Item Container -->
                    <div class="col_3">
                        <img src="<?php echo $siteroot; ?>images/marketing_header.png" width="210" height="163" border="0" />
                        
                    </div>
                    
                    <div class="col_3">
                        <h4>Marketing Services</h4>
                        <ul>
                          <li><a href="#">SEO / SEM Marketing</a></li>
                          <li><a href="#">Email Campaigns</a></li>
                          <li><a href="#">Online Lead Generations</a></li>
                          <li><a href="#">Promotional Products</a></li>
                        </ul>
                    </div>
                    
                    <div class="col_3">
                        <h4>&nbsp;</h4>
                        <ul>
                          <li><a href="#">Internet Video</a></li>
                          <li><a href="#">Affiliate / Product Feeds</a></li>
                          <li><a href="#">Classified Advertising</a></li>
                          <li><a href="#">Web Ads</a></li>
                        </ul>
                    </div>
                    
                    <div class="col_3">
                        <h4>&nbsp;</h4>
                        <ul>
                          <li><a href="#">Public Relations / Article Writing</a></li>
                          <li><a href="#">Social Media</a></li>
                          <li><a href="#">Advertising TV / Print / Radio </a></li>
                          <li><a href="#">Flyer Distribution</a></li>
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