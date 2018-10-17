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

if(!$module->can_i('view','Products') || !$module->can_i('edit','Products')){
    redirect_browser(_BASE_HREF);
}

$module->page_title = 'Product Settings';

$links = array(
    array(
        "name"=>'Products',
        'm' => 'product',
        'p' => 'product_admin',
        'force_current_check' => true,
        'order' => 1, // at start.
        'menu_include_parent' => 1,
        'allow_nesting' => 1,
        'args'=>array('product_id'=>false),
    ),
    array(
        "name"=>'Categories',
        'm' => 'product',
        'p' => 'product_admin_category',
        'force_current_check' => true,
        'order' => 2, // at start.
        'menu_include_parent' => 1,
        'allow_nesting' => 1,
        'args'=>array('product_id'=>false,'product_category_id'=>false),
    ),
);

