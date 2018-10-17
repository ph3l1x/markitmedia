<?php 
/** 
  * Copyright: dtbaker 2012
  * Licence: Please check CodeCanyon.net for licence details. 
  * More licence clarification available here:  http://codecanyon.net/wiki/support/legal-terms/licensing-terms/ 
  * Deploy: 4146 85cb4dc3ce4ad91caa2c8b477a6dd3f1
  * Envato: 977933f5-c2bd-415a-9568-b35beb3a6bf1
  * Package Date: 2014-01-03 10:30:21 
  * IP Address: 119.95.119.2
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