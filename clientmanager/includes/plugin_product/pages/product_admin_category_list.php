<?php 
/** 
  * Copyright: dtbaker 2012
  * Licence: Please check CodeCanyon.net for licence details. 
  * More licence clarification available here:  http://codecanyon.net/wiki/support/legal-terms/licensing-terms/ 
  * Deploy: 4875 748b5706505849baa3c828b967993faf
  * Envato: 95d3e251-990b-4e39-8210-3c31e1148599
  * Package Date: 2015-04-27 08:14:59 
  * IP Address: 68.105.129.178
  */


if(!module_config::can_i('view','Settings')){
    redirect_browser(_BASE_HREF);
}

$search = isset($_REQUEST['search']) ? $_REQUEST['search'] : array();
$product_categories = module_product::get_product_categories($search);

$heading = array(
    'title' => 'Product Categories',
    'type' => 'h2',
    'main' => true,
    'button' => array(),
);
if(module_product::can_i('create','Products')) {
    $heading['button'][] = array(
        'title' => "Create New Category",
        'type'  => 'add',
        'url'   => module_product::link_open_category('new'),
    );
}
print_heading($heading);
?>

<form action="" method="post">

<?php
/** START TABLE LAYOUT **/
$table_manager = module_theme::new_table_manager();
$columns = array();
$columns['product_name'] = array(
        'title' => _l('Category Name'),
        'callback' => function($product){
            echo module_product::link_open_category($product['product_category_id'],true,$product);
        },
        'cell_class' => 'row_action',
    );
$table_manager->set_id('product_category_list');
$table_manager->set_columns($columns);
$table_manager->set_rows($product_categories);
$table_manager->pagination = true;
$table_manager->print_table();
/** END TABLE LAYOUT **/
?>

</form>