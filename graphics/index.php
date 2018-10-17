<?php
//get vars
$page = 3;
$pageName = 'Design - Home';
$title = 'Web Design Scottsdale, Print, Graphics, SEO, Marketing, Phoenix Arizona';
$description = 'Markit Media is a professional Web Design, Print, Graphics, Marketing, SEO, studio in Scottsdale Arizona.';
$keywords = 'Scottsdale Web Design, Scottsdale Print, Scottsdale Graphic Design, SEO Scottsdale, Marketing Scottsdale, Php Programming Scottsdale';
$bottomDescription = "<p>Markit Media is a one stop shop for all your Web, Graphic, Print and Marketing needs. We are a full service web design company in the United States. We are located here in the valley in Scottsdale Arizona. We offer informational and E-Commerce web sites with HTML and Flash designs. Markit Media can help promote your small business online. We build professional, custom designed, websites. We have packages for new business that include logo and brand identity, 1000 business cards, 1000 tri-fold brochures, custom designed letterhead, and 5 page informative style website.</p>
                	  <p>Markit Media, Scottsdale Web Design, Scottsdale Marketing, Scottsdale Web Developer, Scottsdale Print, Scottsdale Printing, Scottsdale Graphic Design, Professional Marketing Scottsdale AZ, Professional Marketing Phoenix AZ, Professional Marketing Arizona, Professional Web design Scottsdale Arizona, Professional Web Design Phoenix Arizona, Professional Web Design Arizona, Professional Printing Scottsdale Arizona, Professional Printing Phoenix Arizona, Professional Printing Arizona, Professional Business Cards Scottsdale Arizona, Professional Business Cards Phoenix Arizona, Professional Business Cards Arizona.</p>";
require_once('../header.php');
?>
<div class="wrapper">
	<div id="graphicMain" class="pageContent webDesign">
    	<h1>Professional Design from Experts who will bring your Ideas to Life</h1>
        <a href="<?php echo $siteroot; ?>portfolio/"><img class="portfolio" src="<?php echo $siteroot; ?>images/portfolio_btn.png" width="213" height="84" border="0" /></a>		<img class="main_graph" src="../images/graphics-main.jpg" width="" height="" border="0">						
    </div>
</div>
<div id="content">
	<div id="contentTop"></div>
    <div id="contentBody">
    	<div class="wrapper">
        	<div class="welcome">
                <div class="left">
                	<h1>We Design to Impress</h1>
                    <p>At Markit Media, our design teams works very closely with it's clients to ensure that we share the right mind set, to create beautiful works of are that represent our clients identity. Using state of the art software we transform ideas into logo, websites, printed material and more.</p>
                    <p>We stand behind our design, and make sure we are always on the same page every step of the way to ensure that you are completely satisfied with our design services. Having professional designed materials make the difference and your customers will notice.</p>
                    <p>Let us design logos, websites, flyers, business cards, banners, promotional material and more!</p>
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