<?php
//get vars
$page = 4;
$pageName = 'Marketing - Public Relations / Article Writing';
$title = 'Web Design Scottsdale, Print, Graphics, SEO, Marketing, Phoenix Arizona';
$description = 'Markit Media is a professional Web Design, Print, Graphics, Marketing, SEO, studio in Scottsdale Arizona.';
$keywords = 'PR Phoenix, PR Arizona, PR Services, Online Press Release Distribution, PRWeb, Markit Media, Digital marketing agency phoenix, Website Design Phoenix, Ecommerce';
$bottomDescription = "<p>Markit Media is a one stop shop for all your Web, Graphic, Print and Marketing needs. We are a full service web design company in the United States. We are located here in the valley in Scottsdale Arizona. We offer informational and E-Commerce web sites with HTML and Flash designs. Markit Media can help promote your small business online. We build professional, custom designed, websites. We have packages for new business that include logo and brand identity, 1000 business cards, 1000 tri-fold brochures, custom designed letterhead, and 5 page informative style website.</p>
                	  <p>Markit Media, Scottsdale Web Design, Scottsdale Marketing, Scottsdale Web Developer, Scottsdale Print, Scottsdale Printing, Scottsdale Graphic Design, Professional Marketing Scottsdale AZ, Professional Marketing Phoenix AZ, Professional Marketing Arizona, Professional Web design Scottsdale Arizona, Professional Web Design Phoenix Arizona, Professional Web Design Arizona, Professional Printing Scottsdale Arizona, Professional Printing Phoenix Arizona, Professional Printing Arizona, Professional Business Cards Scottsdale Arizona, Professional Business Cards Phoenix Arizona, Professional Business Cards Arizona.</p>";
require_once('../header.php');
?>

<script type="text/javascript">

	$(document).ready(function(){
	
		$.fancybox([ {href : '#pr_promo_pop', topRatio : 0.1} ]);
		
		// replace obfuscated email with valid address (prevent bot scraping)
		var pr_eml = $('#pr_eml').text().replace('-','@').replace('u','.').replace('sweet','com');
		$('#pr_eml').attr('href','mailto:'+pr_eml).html(pr_eml);

	});

</script>

<div id="pr_promo_pop" style="display:none;">
	<p id="pr_promo"><b>Limited Time Offer!</b></p>
	<div id="pr_promo_sub">PRESS RELEASE SPECIAL</div>
</div>


<div class="wrapper">
	<div id="publicRelationsArticleWriting" class="pageContent publicRelations">
    	<h1>Our professional staff will let your voice be heard.</h1>				<img class="main_graph" src="../images/public-relations-article-writing.jpg" width="" height="" border="0">		
    </div>
</div>
<div id="content">
	<div id="contentTop"></div>
    <div id="contentBody">
    	<div class="wrapper">
        	<div class="welcome">
                <div class="left">
                    <h1>Markit Media is a full service PR firm with a focus on consumer goods, hospitality and restaurants, technology PR, corporate communications, lifestyle, digital/social media and public affairs.</h1>						
                   	<p>We help companies build and engage their community, focus their message and deliver it with heightened public awareness, and create innovative online solutions that help get the job done – and done right.</p>
                    <p>Markit Media understands our clients' business models and how to generate measurable results.</p>
                    <p><b>PUBLIC RELATIONS SERVICES:</b></p>
                    <p>
                    	<ul id='public-relations_ul'>
                    		<li>Public Relations Strategy</li>
	                    	<li>Media Relations Outreach (National and  Local)</li>
    	                	<li>Online Press Release Writing and Distribution</li>
        	            	<li>Strategic Planning/Research</li>
            	        	<li>Community Relations</li>
                	    	<li>Social Media Strategy</li>
                    		<li>Special Events and Promotions</li>
	                    	<li>Consumer Product Launches</li>
    	                	<li>Internal Communications</li>
        	            </ul>
                    </p>
                    <p><b>PR KickStart Program:</b></p>
					<p>For all new PR accounts, Markit Media is offering a discounted kick start package for press release writing and online distribution, starting at just $349. Through a partnership with PR Web, customized press releases are shared with a network of more than 250,000 PRWeb news subscribers and 30,000+ journalists and bloggers. Markit Media’s team of public relations specialists create optimized press releases that generate online publicity and leverage consumer engagement online and through social media channels.</p>
					<p>The discounted press release offering is currently available to new PR clients and can be set up immediately by phone call, email, or by scheduling a meeting at the office location in Scottsdale.</p>
					<p>Phone: 480-245-4287<br />Email: &nbsp;<a href='#' id="pr_eml">pr-markitmediausweet</a></p>
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