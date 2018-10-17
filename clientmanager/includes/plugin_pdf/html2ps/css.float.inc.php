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
// $Header: /cvsroot/html2ps/css.float.inc.php,v 1.7 2006/07/09 09:07:44 Konstantin Exp $

define('FLOAT_NONE',0);
define('FLOAT_LEFT',1);
define('FLOAT_RIGHT',2);

class CSSFloat extends CSSPropertyStringSet {
  function CSSFloat() { 
    $this->CSSPropertyStringSet(false, 
                                false,
                                array('left'  => FLOAT_LEFT,
                                      'right' => FLOAT_RIGHT,
                                      'none'  => FLOAT_NONE)); 
  }

  function default_value() { 
    return FLOAT_NONE; 
  }

  function get_property_code() {
    return CSS_FLOAT;
  }

  function get_property_name() {
    return 'float';
  }
}

CSS::register_css_property(new CSSFloat);

?>