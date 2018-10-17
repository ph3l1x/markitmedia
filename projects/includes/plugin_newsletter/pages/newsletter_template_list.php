<?php 
/** 
  * Copyright: dtbaker 2012
  * Licence: Please check CodeCanyon.net for licence details. 
  * More licence clarification available here:  http://codecanyon.net/wiki/support/legal-terms/licensing-terms/ 
  * Deploy: 4146 85cb4dc3ce4ad91caa2c8b477a6dd3f1
  * Envato: 977933f5-c2bd-415a-9568-b35beb3a6bf1
  * Package Date: 2015-01-24 12:42:51 
  * IP Address: 68.105.129.178
  */ 

$search = (isset($_REQUEST['search']) && is_array($_REQUEST['search'])) ? $_REQUEST['search'] : array();

$newsletter_templates = module_newsletter::get_templates($search);


$header = array(
    'title' => _l('Newsletter Templates'),
    'type' => 'h2',
    'main' => true,
    'button' => array(),
);
$header['button'] = array(
    'url' => module_newsletter::link_open_template('new'),
    'title' => _l('Add New Template'),
    'type' => 'add',
);
print_heading($header);


$table_manager = module_theme::new_table_manager();
$columns = array();
$columns['newsletter_template_name'] = array(
    'title' => 'Template Name',
    'callback' => function($newsletter_template){
		echo module_newsletter::link_open_template($newsletter_template['newsletter_template_id'],true);
    },
    'cell_class' => 'row_action',
);
$columns['newsletter_template_action'] = array(
    'title' => 'Action',
    'callback' => function($newsletter_template){
		?> <a href="<?php echo module_newsletter::link_open_template($newsletter_template['newsletter_template_id']);?>">Edit</a> <?php
    },
);
$table_manager->set_columns($columns);
$table_manager->set_rows($newsletter_templates);
$table_manager->pagination = false;
$table_manager->print_table();

?>

