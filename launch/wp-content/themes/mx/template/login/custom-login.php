<?php
/**
 * Login Template > login form
 *
 * @since MX 1.0
 */
?>
<div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
	<header>
        <h1 class="login-title"><?php _e('Sign In','MX'); ?></h1>
        <?php 
			$register = isset($_GET['register']) ? $_GET['register'] : "";
			if($register){
		?>
        <div class="alert alert-success"><strong><?php _e('Success!','MX'); ?></strong><?php _e('Check your email get the password and log in.','MX'); ?></p></div>
        <?php
			}
		?>
   	</header>
    <div class="login-form-wrap">
        <form class="mx-login-form" name="loginform" id="loginform" action="<?php echo home_url(); ?>/wp-login.php" method="post">
            <div class="mx-login-form-element">
                <label class="control-label" for="user_login"><?php _e('Username','MX'); ?></label>
                <input type="text" name="log" id="user_login" class="input" value="" size="20" tabindex="10" />
            </div>
            <div class="mx-login-form-element">
                <label class="control-label" for="user_pass"><?php _e('Password','MX'); ?></label>
                <input type="password" name="pwd" id="user_pass" class="input" value="" size="20" tabindex="20" />
            </div>
            <div class="mx-login-form-element">
                <label class="checkbox" for="rememberme">
                <input  name="rememberme" type="checkbox" id="rememberme" value="forever" tabindex="90"><?php _e('Remember me','MX'); ?>
                </label>
                <p class="submit">
                    <input type="submit" name="wp-submit" id="wp-submit" class="btn btn-theme" value="<?php _e('Log In','MX'); ?>" tabindex="100">
                    <input type="hidden" name="redirect_to" value="<?php echo esc_url(get_permalink()); ?>" />
                    <input type="hidden" name="user-cookie" value="1" />
                    <a href="<?php echo esc_url( mx_add_param_for_link(get_permalink(),'action=lostpassword') ); ?>" title="<?php _e('Lost your password!','MX'); ?>"><?php _e('Lost your password?','MX'); ?></a>
                    <?php if(get_option('users_can_register')) { ?>
                    / <a href="<?php echo esc_url( mx_add_param_for_link(get_permalink(),'action=register') ); ?>"><?php _e('Register','MX'); ?></a>
                    <?php } ?>
                </p>
            </div>
        </form>
    </div>
</div>