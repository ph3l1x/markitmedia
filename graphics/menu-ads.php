<?php
//get vars
$page = 3;
$pageName = 'Design - Menu / Ads';
$title = 'Web Design Scottsdale, Print, Graphics, SEO, Marketing, Phoenix Arizona';
$description = 'Markit Media is a professional Web Design, Print, Graphics, Marketing, SEO, studio in Scottsdale Arizona.';
$keywords = 'Scottsdale Web Design, Scottsdale Print, Scottsdale Graphic Design, SEO Scottsdale, Marketing Scottsdale, Php Programming Scottsdale';
$bottomDescription = "<p>Markit Media is a one stop shop for all your Web, Graphic, Print and Marketing needs. We are a full service web design company in the United States. We are located here in the valley in Scottsdale Arizona. We offer informational and E-Commerce web sites with HTML and Flash designs. Markit Media can help promote your small business online. We build professional, custom designed, websites. We have packages for new business that include logo and brand identity, 1000 business cards, 1000 tri-fold brochures, custom designed letterhead, and 5 page informative style website.</p>
                	  <p>Markit Media, Scottsdale Web Design, Scottsdale Marketing, Scottsdale Web Developer, Scottsdale Print, Scottsdale Printing, Scottsdale Graphic Design, Professional Marketing Scottsdale AZ, Professional Marketing Phoenix AZ, Professional Marketing Arizona, Professional Web design Scottsdale Arizona, Professional Web Design Phoenix Arizona, Professional Web Design Arizona, Professional Printing Scottsdale Arizona, Professional Printing Phoenix Arizona, Professional Printing Arizona, Professional Business Cards Scottsdale Arizona, Professional Business Cards Phoenix Arizona, Professional Business Cards Arizona.</p>";
require_once('../header.php');
?>
<div class="wrapper">
	<div id="menuAds" class="pageContent webDesign">
    	<h1>Keep a Professional look on all your Materials</h1>
        <a href="<?php echo $siteroot; ?>portfolio/"><img class="portfolio" src="<?php echo $siteroot; ?>images/portfolio_btn.png" width="213" height="84" border="0" /></a>
    </div>
</div>
<div id="content">
	<div id="contentTop"></div>
    <div id="contentBody">
    	<div class="wrapper">
        	<div class="welcome">
                <div class="left">
                	<h1>Professionally Designed Menus and Advertisements </h1>
                    <p>You operate your business professionally, so why not have professionally designed materials? Our design team will create the perfect look to match your business and keep consistency between your brand and your materials.</p>
                    <p>Having a well designed, easy to read menu will help your customers concentrate more on your products, rather than having to struggle with legibility and organization. Our Design team will meet with you to make sure we understand your business and create a menu that will impress you and your customers.</p>
                    <p>Professionally designed advertisements will yield more results, whether your are thinking of direct mailers, door hangers or a more hands on approach. Give your customers materials that you feel proud of.</p>
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