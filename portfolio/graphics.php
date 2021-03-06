<?php
//get vars
$page = 3;
$pageName = 'Graphics - Portfolio';
$title = 'Web Design Scottsdale, Print, Graphics, SEO, Marketing, Phoenix Arizona';
$description = 'Markit Media is a professional Web Design, Print, Graphics, Marketing, SEO, studio in Scottsdale Arizona.';
$keywords = 'Scottsdale Web Design, Scottsdale Print, Scottsdale Graphic Design, SEO Scottsdale, Marketing Scottsdale, Php Programming Scottsdale';
$bottomDescription = "<p>Markit Media is a one stop shop for all your Web, Graphic, Print and Marketing needs. We are a full service web design company in the United States. We are located here in the valley in Scottsdale Arizona. We offer informational and E-Commerce web sites with HTML and Flash designs. Markit Media can help promote your small business online. We build professional, custom designed, websites. We have packages for new business that include logo and brand identity, 1000 business cards, 1000 tri-fold brochures, custom designed letterhead, and 5 page informative style website.</p>
                	  <p>Markit Media, Scottsdale Web Design, Scottsdale Marketing, Scottsdale Web Developer, Scottsdale Print, Scottsdale Printing, Scottsdale Graphic Design, Professional Marketing Scottsdale AZ, Professional Marketing Phoenix AZ, Professional Marketing Arizona, Professional Web design Scottsdale Arizona, Professional Web Design Phoenix Arizona, Professional Web Design Arizona, Professional Printing Scottsdale Arizona, Professional Printing Phoenix Arizona, Professional Printing Arizona, Professional Business Cards Scottsdale Arizona, Professional Business Cards Phoenix Arizona, Professional Business Cards Arizona.</p>";
require_once('../header.php');
?>
<div class="wrapper">
	<div class="pageContent gallery">
    	<ul id="gallery">
			<li><img src="<?php echo $siteroot; ?>images/portfolio/graphics/austin.jpg" title="Everything Austin" longdesc="Everything Austin - Logo Design" alt="Everything Austin" /></li>
            <li><img src="<?php echo $siteroot; ?>images/portfolio/graphics/bonfire.jpg" title="Bon Fire" longdesc="Bon Fire - Email Template" alt="Bon Fire" /></li>
            <li><img src="<?php echo $siteroot; ?>images/portfolio/graphics/kalibre.jpg" title="Kalibre" longdesc="Kalibre - Photo Editing" alt="Kalibre" /></li>
            <li><img src="<?php echo $siteroot; ?>images/portfolio/graphics/s3c.jpg" title="S3C" longdesc="S3C - Logo Design" alt="S3C" /></li>
            <li><img src="<?php echo $siteroot; ?>images/portfolio/graphics/sanitize.jpg" title="Sanitize Solutions" longdesc="Sanitize Solutions - Logo Design" alt="S3C" /></li>
            <li><img src="<?php echo $siteroot; ?>images/portfolio/graphics/shortsale.jpg" title="Shortsale" longdesc="Shortsale - Email Template" alt="Shortsale" /></li>
            <li><img src="<?php echo $siteroot; ?>images/portfolio/graphics/sugar.jpg" title="Sugar Festival" longdesc="Sugar Festival - Email Template" alt="Sugar Festival" /></li>
            <li><img src="<?php echo $siteroot; ?>images/portfolio/graphics/sunrise.jpg" title="Sunrise" longdesc="Sunrise - Logo Design" alt="Sunrise" /></li>
            <li><img src="<?php echo $siteroot; ?>images/portfolio/graphics/vigemus-flyer.jpg" title="Vigemus" longdesc="Vigemus - Flyer Design" alt="Vigemus" /></li>
            <li><img src="<?php echo $siteroot; ?>images/portfolio/graphics/vigemus.jpg" title="Vigemus" longdesc="Vigemus - Logo Design" alt="Vigemus" /></li>
            <li><img src="<?php echo $siteroot; ?>images/portfolio/graphics/vip.jpg" title="VIP Paradise Care" longdesc="VIP Paradise Care - Logo Design" alt="VIP Paradise Care" /></li>
		</ul>
    </div>
</div>
<div id="content">
	<div id="contentTop"></div>
    <div id="contentBody">
    	<div class="wrapper">
        	<div class="welcome">
                <div class="left">
                	<h1>Do You Like Our Work?</h1>
                    <p>Fill in a quote form or call our offices directly to schedule an appointment to discuss what we can offer you and your company.</p>
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