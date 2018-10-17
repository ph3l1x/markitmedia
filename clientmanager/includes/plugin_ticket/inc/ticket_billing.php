<?php 
/** 
  * Copyright: dtbaker 2012
  * Licence: Please check CodeCanyon.net for licence details. 
  * More licence clarification available here:  http://codecanyon.net/wiki/support/legal-terms/licensing-terms/ 
  * Deploy: 4875 748b5706505849baa3c828b967993faf
  * Envato: 95d3e251-990b-4e39-8210-3c31e1148599
  * Package Date: 2015-04-27 08:15:35 
  * IP Address: 68.105.129.178
  */
if($ticket_id > 0 && module_config::c('ticket_allow_billing',1) && module_ticket::can_edit_tickets()){
	$done_in_ticket_billing = true;
	$fieldset_data = array(
        'heading' => array(
            'type' => 'h3',
            'title' => 'Ticket Billing',
        ),
        'class' => 'tableclass tableclass_form tableclass_full',
        'elements' => array(),
    );

	$c = array();
    $res = module_customer::get_customers();
    while($row = array_shift($res)){
        $c[$row['customer_id']] = $row['customer_name'];
    }
    if($ticket['customer_id']<0)$ticket['customer_id']=false;

    $fieldset_data['elements'][] = array(
        'title' => _l('Customer'),
        'fields' => array(
            array(
                'type' => 'select',
                'name' => 'change_customer_id',
                'value' => $ticket['customer_id'],
	            'options' => $c,
            ),
            array(
                'type' => 'button',
                'name' => 'new_customer',
                'value' => _l('New'),
                'onclick' => "window.location.href='".module_customer::link_open('new',false) . "&move_user_id=".$ticket['user_id']."';",
            ),
        )
    );
	if(class_exists('module_quote',false) && module_quote::is_plugin_enabled()){
		$quote_list = '';
		$quotes = module_quote::get_quotes(array('ticket_id' => $ticket_id));
		foreach($quotes as $quote){
			$quote_list .= module_quote::link_open($quote['quote_id'],true,$quote) .' (<a href="#" onclick="ucm.ticket.add_to_message($(this).data(\'link\'));return false;" data-link="<a href=\''.module_quote::link_public($quote['quote_id']).'\'>View Quote</a>">insert link</a>) <br/>';
		}
		$fieldset_data['elements'][] = array(
	        'title' => _l('Quotes'),
	        'fields' => array(
		        $quote_list,
	            array(
	                'type' => 'button',
	                'name' => 'new_quote',
	                'value' => _l('New'),
	                'onclick' => "window.location.href='".module_quote::link_open('new',false) . "&ticket_id=".$ticket_id."';",
	            ),
	        )
	    );
	}


    echo module_form::generate_fieldset($fieldset_data);
}