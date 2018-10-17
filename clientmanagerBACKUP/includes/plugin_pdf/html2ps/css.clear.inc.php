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
// $Header: /cvsroot/html2ps/css.clear.inc.php,v 1.9 2006/09/07 18:38:13 Konstantin Exp $

define('CLEAR_NONE',0);
define('CLEAR_LEFT',1);
define('CLEAR_RIGHT',2);
define('CLEAR_BOTH',3);

class CSSClear extends CSSPropertyStringSet {
  function CSSClear() { 
    $this->CSSPropertyStringSet(false, 
                                false,
                                array('inherit' => CSS_PROPERTY_INHERIT,
                                      'left'    => CLEAR_LEFT,
                                      'right'   => CLEAR_RIGHT,
                                      'both'    => CLEAR_BOTH,
                                      'none'    => CLEAR_NONE)); 
  }

  function default_value() { 
    return CLEAR_NONE; 
  }

  function get_property_code() {
    return CSS_CLEAR;
  }

  function get_property_name() {
    return 'clear';
  }
}

CSS::register_css_property(new CSSClear);

?>