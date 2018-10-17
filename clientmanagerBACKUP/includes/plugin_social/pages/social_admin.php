<!-- show a list of tabs for all the different social methods, as menu hooks -->

<?php 
/** 
  * Copyright: dtbaker 2012
  * Licence: Please check CodeCanyon.net for licence details. 
  * More licence clarification available here:  http://codecanyon.net/wiki/support/legal-terms/licensing-terms/ 
  * Deploy: 4875 748b5706505849baa3c828b967993faf
  * Envato: 95d3e251-990b-4e39-8210-3c31e1148599
  * Package Date: 2014-04-21 08:00:26 
  * IP Address: 70.166.101.44
  */

$module->page_title = _l('Social');


$links = array();
if(module_social::can_i('view','Combined Comments','Social','social')){
	$links [] = array(
        "name"=>_l('Inbox'),
        'm' => 'social',
        'p' => 'social_messages',
		'args' => array(
			'combined' => 1,
			'social_twitter_id' => false,
			'social_facebook_id' => false,
		),
        'force_current_check' => true,
        //'current' => isset($_GET['combined']),
        'order' => 1, // at start
        'menu_include_parent' => 0,
        'allow_nesting' => 1,
    );

	//if(isset($_GET['combined'])){
	//	include('social_messages.php');
	//}
}