<h1>Get Started!</h1>
<p>Ready to get started? Fill out the form below to get a quote on all our services.</p>
<div class="quoteForm">
    <form action="<?php echo $siteroot; ?>functions/process_markit.php" onsubmit="return validate_form(this)" method="post">
        <input type="hidden" name="page" value="<?php echo $pageName; ?>" />
        <?php session_start(); ?>
        <p><span class="required"><?php echo $_SESSION['error']; ?></span></p>
        <input type="hidden" name="page" value="<?php echo $pageName; ?>" />
        <p class="label">Name<span class="required">*</span></p>
        <input type="text" name="name" class="text" value="<?php echo $_SESSION['name']; ?>" />
        <div class="clear"></div>
        
        <p class="label">Phone<span class="required">*</span></p>
        <input type="text" name="phone" class="text" value="<?php echo $_SESSION['phone']; ?>" />
        <div class="clear"></div>
        
        <p class="label">Email<span class="required">*</span></p>
        <input type="text" name="email" class="text" value="<?php echo $_SESSION['email']; ?>" />
        <div class="clear"></div>
        
        <p class="label">Company</p>
        <input type="text" name="company" class="text" value="<?php echo $_SESSION['company']; ?>" />
        <div class="clear"></div>
        
        <p class="label">Service / Comments<span class="required">*</span></p>
        <textarea class="textArea" name="service"><?php echo $_SESSION['service']; ?></textarea>
        <div class="clear"></div>
        
        <?php session_destroy(); ?>
        
        <br />
                            
        <p class="label">Newsletter Sign Up</p>
        <div class="clear"></div>
        <div class="checkboxes">
            <p><input id="newsletter" type="checkbox" checked="checked" name="newsletter" value="Newsletter" class="checkbox" /><label for="newsletter">Join Our Newsletter</label></p>
        </div>
        
            <div class="googlerecap" style="float:right;margin-top: 1rem;margin-right: 1rem;">
                                <div id="recaptcha1"></div>
                            </div>
                            
                            <input class="submitButton" type="image" align="right" src="<?php echo $siteroot; ?>images/contact_btn_trans.png" width="169" height="72" border="0" />
    </form>
</div>
<div class="clear"></div>
