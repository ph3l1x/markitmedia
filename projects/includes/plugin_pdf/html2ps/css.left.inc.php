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
// $Header: /cvsroot/html2ps/css.left.inc.php,v 1.9 2006/11/11 13:43:52 Konstantin Exp $

require_once(HTML2PS_DIR . 'value.left.php');

class CSSLeft extends CSSPropertyHandler {
  function CSSLeft() { 
    $this->CSSPropertyHandler(false, false); 
    $this->_autoValue = ValueLeft::fromString('auto');
  }

  function _getAutoValue() {
    return $this->_autoValue->copy();
  }

  function default_value() { 
    return $this->_getAutoValue();
  }

  function parse($value) { 
    return ValueLeft::fromString($value);
  }

  function get_property_code() {
    return CSS_LEFT;
  }

  function get_property_name() {
    return 'left';
  }
}

CSS::register_css_property(new CSSLeft);

?>