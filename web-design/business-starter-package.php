<?php
//get vars
$page = 1;
$pageName = 'Web - Business Starter Package';
$title = 'Web Design Scottsdale, Print, Graphics, SEO, Marketing, Phoenix Arizona';
$description = 'Markit Media is a professional Web Design, Print, Graphics, Marketing, SEO, studio in Scottsdale Arizona.';
$keywords = 'Scottsdale Web Design, Scottsdale Print, Scottsdale Graphic Design, SEO Scottsdale, Marketing Scottsdale, Php Programming Scottsdale';
$bottomDescription = "<p>Markit Media is a one stop shop for all your Web, Graphic, Print and Marketing needs. We are a full service web design company in the United States. We are located here in the valley in Scottsdale Arizona. We offer informational and E-Commerce web sites with HTML and Flash designs. Markit Media can help promote your small business online. We build professional, custom designed, websites. We have packages for new business that include logo and brand identity, 1000 business cards, 1000 tri-fold brochures, custom designed letterhead, and 5 page informative style website.</p>
                	  <p>MarkIt Media, Scottsdale Web Design, Scottsdale Marketing, Scottsdale Web Developer, Scottsdale Print, Scottsdale Printing, Scottsdale Graphic Design, Professional Marketing Scottsdale AZ, Professional Marketing Phoenix AZ, Professional Marketing Arizona, Professional Web design Scottsdale Arizona, Professional Web Design Phoenix Arizona, Professional Web Design Arizona, Professional Printing Scottsdale Arizona, Professional Printing Phoenix Arizona, Professional Printing Arizona, Professional Business Cards Scottsdale Arizona, Professional Business Cards Phoenix Arizona, Professional Business Cards Arizona.</p>";
require_once('../header.php');
?>
<div class="wrapper">
	<div id="businessStarterPackage" class="pageContent webDesign">
    	<h1>Starting a new business? We have everything to get your new business off the ground.</h1>
        <a href="<?php echo $siteroot; ?>portfolio/"><img class="portfolio" src="<?php echo $siteroot; ?>images/portfolio_btn.png" width="213" height="84" border="0" /></a>		<img class="main_graph" src="../images/business-starter-package.jpg" width="" height="" border="0">		
    </div>
</div>
<div id="content">
	<div id="contentTop"></div>
    <div id="contentBody">
    	<div class="wrapper">
        	<div class="welcome">
                <div class="left">
                	<h1>Welcoming new businesses and new ideas with open arms</h1>
                    <p>We at Markit Media have come up with the perfect package to turn your new idea, into a fully equipped new business. Our <b>Business Starter Package</b> includes everything you need:</p>
                    <ul class="checked">
                      <li>5 page Custom Designed Website</li>
                      <li>SEO and Website Analytics</li>
                      <li>Logo / Professional Identity Design</li>
                      <li>1000 Business Cards Designed and Printed</li>
                      <li>1000 4x6 Flyer / Mailers Designed and Printed</li>
                      <li>Custom Letterhead and Envelopes</li>
                      <li>Free Marketing Consulting</li>
                    </ul>
                    <div class="clear"></div>
                    <p>Our package comes at a discounted price, and gives you discounts on all of our great products in case you want to customize your package with more business cards, car wraps, additional printed material, website functionality or more!</p>
                    <p>Get your new business started today!</p> 
                </div>
                <div class="right">
                	<?php include_once('../includes/sidebar.php'); ?>
                </div>
                <div class="clear"></div>
            </div>
        	<div class="hr"></div>
<?php
require_once('../footer.php');
?>