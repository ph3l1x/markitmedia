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
// $Header: /cvsroot/html2ps/css.white-space.inc.php,v 1.8 2006/12/24 14:42:44 Konstantin Exp $

define('TABLE_LAYOUT_AUTO',   1);
define('TABLE_LAYOUT_FIXED',  2);

class CSSTableLayout extends CSSPropertyStringSet {
  function CSSTableLayout() { 
    $this->CSSPropertyStringSet(false, 
                                false,
                                array('auto'  => TABLE_LAYOUT_AUTO,
                                      'fixed' => TABLE_LAYOUT_FIXED)); 
  }

  function default_value() { 
    return TABLE_LAYOUT_AUTO; 
  }

  function get_property_code() {
    return CSS_TABLE_LAYOUT;
  }

  function get_property_name() {
    return 'table-layout';
  }
}

CSS::register_css_property(new CSSTableLayout());
  
?>