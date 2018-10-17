<?php
//get vars
$page = 0;
$pageName = 'Home Page - Quick Quote';
$title = 'Web Design Scottsdale, Print, Graphics, SEO, Marketing, Phoenix Arizona';
$description = 'Call (480) 245-4287 - Markit Media is a Professional Website Development, Print, Graphic Design, Marketing, SEO, Studio in Old Town Scottsdale, Arizona.';
$keywords = 'Scottsdale Web Design, Web Development Phoenix, LAMP Developer, Magento Commerce, Scottsdale Print, Scottsdale Graphic Design, SEO Scottsdale, Marketing Scottsdale, Php Programming Scottsdale, magento web development,';
$bottomDescription = "<p>Markit Media is a one stop shop for all your Web, Graphic, Print and Marketing needs. We are a full service web design company in the United States. We are located here in the valley in Scottsdale Arizona. We offer informational and eCommerce web sites with HTML and Flash designs. Markit Media can help promote your small business online. We build professional, custom designed, websites. We have packages for new business that include logo and brand identity, 1000 business cards, 1000 tri-fold brochures, custom designed letterhead, and 5 page informative style website.</p>
                	  <p>Markit Media, Scottsdale Web Design, Scottsdale Marketing, Scottsdale Web Developer, Scottsdale Print, Scottsdale Printing, Scottsdale Graphic Design, Professional Marketing Scottsdale AZ, Professional Marketing Phoenix AZ, Professional Marketing Arizona, Professional Web design Scottsdale Arizona, Professional Web Design Phoenix Arizona, Professional Web Design Arizona, Professional Printing Scottsdale Arizona, Professional Printing Phoenix Arizona, Professional Printing Arizona, Professional Business Cards Scottsdale Arizona, Professional Business Cards Phoenix Arizona, Professional Business Cards Arizona.</p>";
require_once('header-googlesearch.php');
?>

<div class="wrapper">
	<div id="slider">
    	<div id="slideshow">
        	<div><a href="marketing/seo-sem-marketing"><img src="images/slide_a.png" width="626" height="314" border="0" /></a></div>
        	<div><a href="marketing/seo-sem-marketing"><img src="images/slide_b.png" width="626" height="314" border="0" /></a></div>
        	<div><a href="marketing/seo-sem-marketing"><img src="images/slide_c.png" width="626" height="314" border="0" /></a></div>
        	<div><a href="marketing/seo-sem-marketing"><img src="images/slide_d.png" width="626" height="314" border="0" /></a></div>
        	<div><a href="marketing/seo-sem-marketing"><img src="images/slide_e.png" width="626" height="314" border="0" /></a></div>
        </div>
    </div>
    <div id="quote">
    	<form action="functions/process_markit.php" onsubmit="return validate_form(this)" method="post">
        	<input type="hidden" name="page" value="<?php echo $pageName; ?>" />
        	<div class="field">
            	<input class="text" type="text" name="name" />
            </div>
            <div class="field">
            	<input class="text" type="text" name="email" />
            </div>
            <div class="field">
            	<input class="text" type="text" name="phone" />
            </div>
            <select style="display:none;" name="service" id="source">
            	<option value="0" selected="selected">*Please Select Service</option>
                <option value="Web Design">Web Design</option>
                <option value="Print">Print</option>
                <option value="Graphic Design">Graphic Design</option>
                <option value="Marketing">Marketing</option>
                <option value="Business Starter Package">Business Starter Package</option>
                <option value="Other">Other</option>
            </select>
			<div id="dropdown">
            </div>
            <input class="img" type="image" src="images/quote_btn.png" width="169" height="72" border="0" />
        </form>
    </div>
    <div class="clear"></div>
    <div id="boxes">
    	<div id="box1">
        	<a href="web-design/">We have a range of web services for small to large businesses.</a>
        </div>
        <div id="box2">
        	<a href="marketing/seo-sem-marketing">Rank your business online with Search Engine Optimization and Marketing.</a>
        </div>
        <div id="box3">
        	<a href="graphics/">Brand your business with professional graphic design and printed material.</a>
        </div>
        <div id="box4">
        	<a href="marketing/">Market your business with our wide range of services.</a>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>

<div id="content">
	<div id="contentTop"></div>
    <div id="contentBody">
    	<div class="wrapper">
        	<div class="welcome">
            	<img src="images/welcome_bg.png" width="979" height="79" border="0" />
                <div class="left">
                	<h1>Old Town Scottsdale's Complete Marketing, Print, Web and Graphic Design Company for the Greater Phoenix Area</h1>
                    <p>Markit Media Group specializes in custom graphic and web design, marketing and advertising for small to large companies and startup businesses. We will work closely with you to create a professional looking website that is easy to use, a logo design that dazzles, and a marketing plan that actually builds business.</p>
                    <p>Markit Media Group provides professional, affordable graphic and web design and development services. We'll create a unique website that appeals to your audience and communicates your message to them.</p>
                </div>
                <div class="right">
                	<div class="special">
                        <img src="images/business_cards.jpg" width="140" height="82" align="left" border="0" />
                        <h2><a href="print/business-cards">$49 Business Cards</a></h2>
                        <p>1,000 Full color, UV Coated, 16pt Business Cards.</p>
                        
                        <div class="clear"></div>
                    </div>
                    
                    
                    <div class="special">
                        <img src="images/flyers.jpg" width="140" height="82" align="left" border="0" />
                        <h2><a href="print/flyers-postcards">$89 4x6 Flyers</a></h2>
                        <p>1,000 Full color, UV Coated, 16pt Flyers / Postcards.</p>
                        <div class="clear"></div>
                    </div>
                    
                    
                    <div class="special">
                        <img src="images/Business-Starter.jpg" width="140" height="79" align="left" border="0" />
                        <h2><a href="web-design/business-starter-package">$1725 Business Starter Package</a></h2>
                        <p>5 Page Custom Design Website, Basic SEO and Analytics, Logo Design, 1,000 Business Cards, 1,000 Tri-fold Brochures, Custom Letterhead / Envelope Design.</p>
                        <div class="clear"></div>
                    </div>
                    
                </div>
                <div class="clear"></div>
            </div>
        	<div class="hr"></div>
        	<div class="portfolio">
            	<div class="left">
            		<a href="portfolio/"><img src="images/portfolio_header.png" alt="Our Portfolio" width="213" height="84" border="0" /></a>
                    <p>View our latest work for great clients, ranging from web, graphics and print.</p>
                </div>
                <div class="right">
                	<img src="images/portfolio_img.jpg" width="700" height="191" border="0" />
                </div>
                <div class="clear"></div>
            </div>
            <div class="hr"></div>
<?php
require_once('footer.php');
?>