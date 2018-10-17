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
// $Header: /cvsroot/html2ps/css.position.inc.php,v 1.12 2006/09/07 18:38:14 Konstantin Exp $

define('POSITION_STATIC',0);
define('POSITION_RELATIVE',1);
define('POSITION_ABSOLUTE',2);
define('POSITION_FIXED',3);

// CSS 3

define('POSITION_FOOTNOTE',4);

class CSSPosition extends CSSPropertyStringSet {
  function CSSPosition() { 
    $this->CSSPropertyStringSet(false, 
                                false,
                                array('inherit'  => CSS_PROPERTY_INHERIT,
                                      'absolute' => POSITION_ABSOLUTE,
                                      'relative' => POSITION_RELATIVE,
                                      'fixed'    => POSITION_FIXED,
                                      'static'   => POSITION_STATIC,
                                      'footnote' => POSITION_FOOTNOTE)); 
  }

  function default_value() { 
    return POSITION_STATIC; 
  }

  function get_property_code() {
    return CSS_POSITION;
  }

  function get_property_name() {
    return 'position';
  }
}

CSS::register_css_property(new CSSPosition);

?>