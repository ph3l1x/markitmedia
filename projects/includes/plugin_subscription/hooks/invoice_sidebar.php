<?php 
/** 
  * Copyright: dtbaker 2012
  * Licence: Please check CodeCanyon.net for licence details. 
  * More licence clarification available here:  http://codecanyon.net/wiki/support/legal-terms/licensing-terms/ 
  * Deploy: 4146 85cb4dc3ce4ad91caa2c8b477a6dd3f1
  * Envato: 977933f5-c2bd-415a-9568-b35beb3a6bf1
  * Package Date: 2015-01-24 12:43:49 
  * IP Address: 68.105.129.178
  */
if($subscription['subscription_owner_id']){
    $subscription_owner = get_single('subscription_owner','subscription_owner_id',$subscription['subscription_owner_id']);
    if(count($subscription_owner)){

		ob_start();
	    ?>
	    <table border="0" cellspacing="0" cellpadding="2" class="tableclass tableclass_form tableclass_full">
	        <tbody>
	        <tr>
	            <td>
	                <?php
	                switch($subscription_owner['owner_table']){
	                    case 'member':
	                        $member_name = module_member::link_open($subscription_owner['owner_id'],true);
	                        break;
	                    case 'website':
	                        $member_name = module_website::link_open($subscription_owner['owner_id'],true);
	                        break;
	                    case 'customer':
	                        $member_name = module_customer::link_open($subscription_owner['owner_id'],true);
	                        break;
	                }
	                $subscription_name = module_subscription::link_open($subscription['subscription_id'],true);
	                _e('This is a subscription payment for %s %s on the subscription: %s',$subscription_owner['owner_table'],$member_name,$subscription_name); ?>
	            </td>
	        </tr>
	        </tbody>
	    </table>
		<?php
		$fieldset_data = array(
		    'heading' => array(
		        'title' => _l('%s Subscription',_l(ucwords($subscription_owner['owner_table']))),
		        'type' => 'h3',
		    ),
		    'elements_before' => ob_get_clean(),
		);
		echo module_form::generate_fieldset($fieldset_data);
    }
} ?>