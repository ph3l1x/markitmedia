<?php

//get vars

$page = 99;

$pageName = 'blog';

$title = '';

$description = '';

$keywords = '';

$bottomDescription = "";

get_header('blog'); 

//require_once('../header.php');

?>



<div class="wrapper">

	<div class="pageContent blog">

    </div>

</div>

<div id="content">

	<div id="contentTop"></div>

    <div id="contentBody">

    	<div class="wrapper">

        

     			<?php get_sidebar('blog'); ?>

        

        

        	<div class="welcome">

    			<?php

    				/* Run the loop to output the posts.

    				 * If you want to overload this in a child theme then include a file

    				 * called loop-index.php and that will be used instead.

    				 */

    				 get_template_part( 'loop', 'blog' );

    			?>

            </div>

            

            

            



            

            

            <div style="clear:both;"></div>

                        

<?php

require_once('../footer.php');

?>