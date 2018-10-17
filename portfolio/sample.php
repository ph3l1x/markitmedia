<?php

//get vars

$page = 2;

$pageName = 'Print - Portfolio';

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
    	   	<li><img src="<?php echo $siteroot; ?>images/portfolio/tradeshow/displays.jpg" title="Banners" longdesc="Tradeshow Displays from Markit Media" alt="Promotional Products" /></li>


			<li><img src="<?php echo $siteroot; ?>images/portfolio/tradeshow/bud.jpg" title="Banners" longdesc="Tradeshow Displays from Markit Media" alt="Promotional Products" /></li>

			<li><img src="<?php echo $siteroot; ?>images/portfolio/tradeshow/displays1.jpg" title="Banners" longdesc="Tradeshow Displays from Markit Media" alt="Promotional Products" /></li>
			<li><img src="<?php echo $siteroot; ?>images/portfolio/tradeshow/farm.jpg" title="Banners" longdesc="Tradeshow Displays from Markit Media" alt="Promotional Products" /></li>
			<li><img src="<?php echo $siteroot; ?>images/portfolio/tradeshow/gat.jpg" title="Banners" longdesc="Tradeshow Displays from Markit Media" alt="Promotional Products" /></li>
			<li><img src="<?php echo $siteroot; ?>images/portfolio/tradeshow/tablethrow.jpg" title="Banners" longdesc="Tradeshow Displays from Markit Media" alt="Promotional Products" /></li>


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