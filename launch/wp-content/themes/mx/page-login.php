<?php
/**
 * Template Name: Login / Register Template
 *
 * @since MX 1.0
 */
global $user_ID, $user_identity; wp_get_current_user();
$action = isset($_GET['action']) ? $_GET['action'] : "";
get_header();

?>
<div id="main" class="container">
	<div class="row">
        <section class="col-md-12 col-sm-12">
        	<div class="row">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            	<div class="col-md-12 col-sm-12">
                <?php the_content(); ?>
                <?php wp_link_pages(); ?>
                </div>
                <?php 
					if(!$user_ID) { 
						if($action == "lostpassword"){
							get_template_part( 'template/login/custom', 'lostpass');
						}else if($action == "register"){
							get_template_part( 'template/login/custom', 'register');
						}else {
							get_template_part( 'template/login/custom', 'login');
						}
					}else{
						get_template_part( 'template/login/custom', 'account');
					}
				?>
            <?php endwhile; else: ?>
                <p><?php _e('Sorry, this page does not exist.' , 'MX' ); ?></p>
            <?php endif; ?>
            </div>
        </section>
    </div>
</div>
<?php get_footer(); ?>