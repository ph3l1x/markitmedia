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
// $Header: /cvsroot/html2ps/css.direction.inc.php,v 1.7 2006/07/09 09:07:44 Konstantin Exp $

define('DIRECTION_LTR', 1);
define('DIRECTION_RTF', 1);

class CSSDirection extends CSSPropertyStringSet {
  function CSSDirection() { 
    $this->CSSPropertyStringSet(true, 
                                true,
                                array('lrt' => DIRECTION_LTR,
                                      'rtl' => DIRECTION_RTF)); 
  }

  function default_value() { 
    return DIRECTION_LTR; 
  }

  function get_property_code() {
    return CSS_DIRECTION;
  }

  function get_property_name() {
    return 'direction';
  }
}

CSS::register_css_property(new CSSDirection);

?>