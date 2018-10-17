<?php
//get vars
$page = 6;
$pageName = 'Contact Us';
$title = 'Web Design Scottsdale, Print, Graphics, SEO, Marketing, Phoenix Arizona';
$description = 'Markit Media is a professional Web Design, Print, Graphics, Marketing, SEO, studio in Scottsdale Arizona.';
$keywords = 'Scottsdale Web Design, Scottsdale Print, Scottsdale Graphic Design, SEO Scottsdale, Marketing Scottsdale, Php Programming Scottsdale';
$bottomDescription = "<p>Markit Media is a one stop shop for all your Web, Graphic, Print and Marketing needs. We are a full service web design company in the United States. We are located here in the valley in Scottsdale Arizona. We offer informational and E-Commerce web sites with HTML and Flash designs. Markit Media can help promote your small business online. We build professional, custom designed, websites. We have packages for new business that include logo and brand identity, 1000 business cards, 1000 tri-fold brochures, custom designed letterhead, and 5 page informative style website.</p>
                	  <p>MarkIt Media, Scottsdale Web Design, Scottsdale Marketing, Scottsdale Web Developer, Scottsdale Print, Scottsdale Printing, Scottsdale Graphic Design, Professional Marketing Scottsdale AZ, Professional Marketing Phoenix AZ, Professional Marketing Arizona, Professional Web design Scottsdale Arizona, Professional Web Design Phoenix Arizona, Professional Web Design Arizona, Professional Printing Scottsdale Arizona, Professional Printing Phoenix Arizona, Professional Printing Arizona, Professional Business Cards Scottsdale Arizona, Professional Business Cards Phoenix Arizona, Professional Business Cards Arizona.</p>";
require_once('../header.php');
?>
<div class="wrapper">
	<div class="pageContent contactUs">
    	<div style="float:left; padding-left:20px; padding-top:20px; width:400px;">
            <h1>Come Visit Us</h1>
            <p>We offer free consultations regarding all of our services, please call and schedule an appointment in advance to ensure we set aside enough time to discuss your project.</p>
            <br />
            <h1>Contact Information</h1>
            <p>4419 North Scottsdale Road, Suite 118<br />
            Scottsdale, Arizona 85251</p>
            <br />
            <h2>Office: (480) 245-4287</h2>
            <h2>Toll Free: (888) 711-7771</h2>
        </div>
    	<iframe style="float:right;" width="480" height="320" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?client=safari&amp;q=markit+media&amp;oe=UTF-8&amp;ie=UTF8&amp;hl=en&amp;cid=16645647699110027803&amp;ll=33.503757,-111.923561&amp;spn=0.042942,0.06506&amp;z=13&amp;output=embed"></iframe>
    	<div class="clear"></div>
    </div>
</div>
<div id="content">
	<div id="contentTop"></div>
    <div id="contentBody">
    	<div class="wrapper">
        	<div class="welcome">
            	<div class="left">
                	<h1>Have Questions? Contact Us!</h1>
                    <p>Fill out the form below to get answers on all our services.</p>
                    <div class="quoteForm">
                        <form action="<?php echo $siteroot; ?>functions/email.php" onsubmit="return validate_form(this)" method="post">
                            <input type="hidden" name="page" value="<?php echo $pageName; ?>" />
                            <p class="label">Name<span class="required">*</span></p>
                            <input type="text" name="name" class="text" />
                            <div class="clear"></div>
                            
                            <p class="label">Phone<span class="required">*</span></p>
                            <input type="text" name="phone" class="text" />
                            <div class="clear"></div>
                            
                            <p class="label">Email<span class="required">*</span></p>
                            <input type="text" name="email" class="text" />
                            <div class="clear"></div>
                            
                            <p class="label">Company</p>
                            <input type="text" name="company" class="text" />
                            <div class="clear"></div>
                            
                            <p class="label">Service / Comments<span class="required">*</span></p>
                            <textarea class="textArea" name="service"></textarea>
                            <div class="clear"></div>
                            
                            <br />
                            
                            <p class="label">Newsletter Sign Up</p>
                            <div class="clear"></div>
                            <div class="checkboxes">
                                <p><input id="newsletter" type="checkbox" checked="checked" name="newsletter" value="Newsletter" class="checkbox" /><label for="newsletter">Join Our Newsletter</label></p>
                            </div>
                            
                            <input class="submitButton" type="image" align="right" src="<?php echo $siteroot; ?>images/contact_btn_trans.png" width="169" height="72" border="0" />
                        </form>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="right">
                	<h1>Careers at Markit Media</h1>
                    <p>Want to join our team? We are always looking for new talent to fit the right spots.</p>
                	<div class="quoteForm">
                        <form action="<?php echo $siteroot; ?>functions/application.php" onsubmit="return validate_form(this)" method="post">
                            <input type="hidden" name="page" value="<?php echo $pageName; ?>" />
                            <p class="label">Name<span class="required">*</span></p>
                            <input type="text" name="name" class="text" />
                            <div class="clear"></div>
                            
                            <p class="label">Phone<span class="required">*</span></p>
                            <input type="text" name="phone" class="text" />
                            <div class="clear"></div>
                            
                            <p class="label">Email<span class="required">*</span></p>
                            <input type="text" name="email" class="text" />
                            <div class="clear"></div>
                            
                            <p class="label">Areas of Application<span class="required">*</span></p>
                            <div class="clear"></div>
                            <div class="checkboxes">
                                <p><input id="webDevelopment" type="checkbox" name="job[]" value="Web Development" class="checkbox" /><label for="webDevelopment">Web Development</label></p>
                                <p><input id="webDesign" type="checkbox" name="job[]" value="Web Design" class="checkbox" /><label for="webDesign">Web Design</label></p>
                                <p><input id="graphic" type="checkbox" name="job[]" value="Graphic Design" class="checkbox" /><label for="graphic">Graphic Design</label></p>
                                <p><input id="video" type="checkbox" name="job[]" value="Video / Graphics" class="checkbox" /><label for="video">Video / Graphics</label></p>
                                <p><input id="seo" type="checkbox" name="job[]" value="SEO / Internet Marketing" class="checkbox" /><label for="seo">SEO / Internet Marketing</label></p>
                                <p><input id="sales" type="checkbox" name="job[]" value="Sales / Marketing" class="checkbox" /><label for="sales">Sales / Marketing</label></p>
                            </div>
                            <div class="clear"></div>
                            
                            <p class="label">Brief description of why you want to join the team<span class="required">*</span></p>
                            <textarea class="textArea" name="service"></textarea>
                            <div class="clear"></div>
                            
                            <input class="submitButton" type="image" align="right" src="<?php echo $siteroot; ?>images/apply_btn_trans.png" width="169" height="72" border="0" />
                        </form>
                    </div>
                    <div class="clear"></div>
                </div>
                
                <div class="clear"></div>
            </div>
        	<div class="hr"></div>
<?php
require_once('../footer.php');
?>