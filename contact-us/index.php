<?php
//get vars
$page = 6;
$pageName = 'Contact Us';
$title = 'Web Design Scottsdale, Print, Graphics, SEO, Marketing, Phoenix Arizona';
$description = 'Markit Media is a professional Web Design, Print, Graphics, Marketing, SEO, studio in Scottsdale Arizona.';
$keywords = 'Scottsdale Web Design, Scottsdale Print, Scottsdale Graphic Design, SEO Scottsdale, Marketing Scottsdale, Php Programming Scottsdale';
$bottomDescription = "<p>Markit Media is a one stop shop for all your Web, Graphic, Print and Marketing needs. We are a full service web design company in the United States. We are located here in the valley in Scottsdale Arizona. We offer informational and E-Commerce web sites with HTML and Flash designs. Markit Media can help promote your small business online. We build professional, custom designed, websites. We have packages for new business that include logo and brand identity, 1000 business cards, 1000 tri-fold brochures, custom designed letterhead, and 5 page informative style website.</p>
                	  <p>Markit Media, Scottsdale Web Design, Scottsdale Marketing, Scottsdale Web Developer, Scottsdale Print, Scottsdale Printing, Scottsdale Graphic Design, Professional Marketing Scottsdale AZ, Professional Marketing Phoenix AZ, Professional Marketing Arizona, Professional Web design Scottsdale Arizona, Professional Web Design Phoenix Arizona, Professional Web Design Arizona, Professional Printing Scottsdale Arizona, Professional Printing Phoenix Arizona, Professional Printing Arizona, Professional Business Cards Scottsdale Arizona, Professional Business Cards Phoenix Arizona, Professional Business Cards Arizona.</p>";
require_once('../header.php');
?>

<div class="wrapper">
	<div class="pageContent contactUs">
    	<div id="page_contact_left" style="float:left; padding-left:20px; padding-top:20px; width:400px;">
            <h1>Come Visit Us</h1>
            <p>We offer free consultations regarding all of our services, please call and schedule an appointment in advance to ensure we set aside enough time to discuss your project.</p>
            <br />
            <h1>Contact Information</h1>
            <p>2515 N Scottsdale Rd<br> Suite 108<br> Scottsdale, AZ 85257<br>
            Monday through Friday 8am-6pm<br>
Saturday/Sunday: By Appointment</p>
            <br />
            <h2>Office Phone: (480) 245-4287</h2>
            
        </div>
<iframe width="480" height="320" frameborder="0" marginheight="0" marginwidth="0" style="border:0"
src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJo-61X94LK4cR1BCZFBdq_gI&key=AIzaSyCa2qS24nGm2JDAgeKxIjJpkC0neqbh4RI" allowfullscreen></iframe>
    	<div class="clear"></div>
    </div>
</div>
<div id="content">
	<div id="contentTop"></div>
    <div id="contentBody">
    	<div class="wrapper">
        	<div class="welcome">
            	<div class="left" id="contact_form_block_1">
                	<h1>Have Questions? Contact Us!</h1>
                    <p>Fill out the form below to get answers on all our services.</p>
                    <div class="quoteForm">
                        <form action="<?php echo $siteroot; ?>functions/email.php" onsubmit="validate_form(this)" method="post">
                            <?php session_start(); ?>
                            <p><span class="required"><?php echo $_SESSION['error']; ?></span></p>
                            <input type="hidden" name="page" value="<?php echo $pageName; ?>" required/>
                            <p class="label">Name<span class="required">*</span></p>
                            <input type="text" name="name" class="text" value="<?php echo $_SESSION['name']; ?>" required/>
                            <div class="clear"></div>
                            
                            <p class="label">Phone<span class="required">*</span></p>
                            <input type="text" name="phone" class="text" value="<?php echo $_SESSION['phone']; ?>" required/>
                            <div class="clear"></div>
                            
                            <p class="label">Email<span class="required">*</span></p>
                            <input type="text" name="email" class="text" value="<?php echo $_SESSION['email']; ?>" required/>
                            <div class="clear"></div>
                            
                            <p class="label">Company</p>
                            <input type="text" name="company" class="text" value="<?php echo $_SESSION['company']; ?>" />
                            <div class="clear"></div>
                            
                            <p class="label">Service / Comments<span class="required">*</span></p>
                            <textarea class="textArea" name="service" required><?php echo $_SESSION['service']; ?></textarea>
                            <div class="clear"></div>
                            
                            <br />
                            
                            <?php session_destroy(); ?>
                            
                            <p class="label">Newsletter Sign Up</p>
                            <div class="clear"></div>
                            <div class="checkboxes" id="checkbox_1">
                                <p><input id="newsletter" type="checkbox" checked="checked" name="newsletter" value="Newsletter" class="checkbox" /><label for="newsletter">Join Our Newsletter</label></p>
                            </div>
                            
                              <div class="googlerecap" style="float:right;margin-top: 1rem;margin-right: 1rem;">
                                <div id="recaptcha1"></div>
                            </div>
                            
                            <input class="submitButton" type="image" align="right" src="<?php echo $siteroot; ?>images/contact_btn_trans.png" width="169" height="72" border="0" />
                        </form>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="right" id="contact_form_block_2">
                	<h1>Careers at Markit Media</h1>
                    <p>Want to join our team? We are always looking for new talent to fit the right spots.</p>
                	<div class="quoteForm">
                        <form action="<?php echo $siteroot; ?>functions/application.php" onsubmit="validate_form(this)" method="post">
                            <input type="hidden" name="page" value="<?php echo $pageName; ?>" />
                            
                            <p class="label">Name<span class="required">*</span></p>
                            <input type="text" name="name" class="text" required/>
                            <div class="clear"></div>
                            
                            <p class="label">Phone<span class="required">*</span></p>
                            <input type="text" name="phone" class="text" required/>
                            <div class="clear"></div>
                            
                            <p class="label">Email<span class="required">*</span></p>
                            <input type="text" name="email" class="text" required/>
                            <div class="clear"></div>
                            
                            <div class="field" style="display:none;"><textarea name="comments"></textarea></div>
                            
                            <p class="label" id="label_corr_1">Areas of Application<span class="required">*</span></p>
                            <div class="clear"></div>
                            <div class="checkboxes" id="checkbox_2">
                                <p><input id="webDevelopment" type="checkbox" name="job[]" value="Web Development" class="checkbox" /><label for="webDevelopment">Web Development</label></p>
                                <p><input id="webDesign" type="checkbox" name="job[]" value="Web Design" class="checkbox" /><label for="webDesign">Web Design</label></p>
                                <p><input id="graphic" type="checkbox" name="job[]" value="Graphic Design" class="checkbox" /><label for="graphic">Graphic Design</label></p>
                                 <p><input id="print_production" type="checkbox" name="job[]" value="Print Production" class="checkbox" /><label for="print_production">Print Production</label></p>
                                <p><input id="video" type="checkbox" name="job[]" value="Video / Graphics" class="checkbox" /><label for="video">Video / Graphics</label></p>
                                <p><input id="seo" type="checkbox" name="job[]" value="SEO / Internet Marketing" class="checkbox" /><label for="seo">SEO / Internet Marketing</label></p>
                                <p><input id="sales" type="checkbox" name="job[]" value="Sales / Marketing" class="checkbox" /><label for="sales">Sales / Marketing</label></p>
                            </div>
                            <div class="clear"></div>
                            
                            <p class="label">Brief description of why you want to join the team<span class="required">*</span></p>
                            <textarea class="textArea" name="service" required></textarea>
                            
                            <div class="clear"></div>
                            <div class="googlerecap" style="float:right;margin-top: 1rem;margin-right: 1rem;">
                                <div id="recaptcha2"></div>
                            </div>
                               
    <!-- <button id='btnsubmit'>submit</button> -->
      <!-- <input id='submit' type="submit" value="Submit"> -->
   <!--<input id="btnsubmit" class="img" type="image" src="images/quote_btn.png" width="169" height="72" border="0"/> -->
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