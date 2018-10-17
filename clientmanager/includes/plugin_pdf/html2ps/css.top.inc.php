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
// $Header: /cvsroot/html2ps/css.top.inc.php,v 1.14 2006/11/11 13:43:52 Konstantin Exp $

require_once(HTML2PS_DIR . 'value.top.php');

class CSSTop extends CSSPropertyHandler {
  function CSSTop() { 
    $this->CSSPropertyHandler(false, false); 
    $this->_autoValue = ValueTop::fromString('auto');
  }

  function _getAutoValue() {
    return $this->_autoValue->copy();
  }

  function default_value() { 
    return $this->_getAutoValue();
  }

  function get_property_code() {
    return CSS_TOP;
  }

  function get_property_name() {
    return 'top';
  }

  function parse($value) { 
    return ValueTop::fromString($value);
  }
}

CSS::register_css_property(new CSSTop);

?>