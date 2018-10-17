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
// $Header: /cvsroot/html2ps/css.min-width.inc.php,v 1.1 2006/09/07 18:38:14 Konstantin Exp $

class CSSMinWidth extends CSSSubFieldProperty {
  function CSSMinWidth(&$owner, $field) {
    $this->CSSSubFieldProperty($owner, $field);
  }

  function get_property_code() {
    return CSS_MIN_WIDTH;
  }

  function get_property_name() {
    return 'min-width';
  }

  function parse($value) {
    if ($value == 'inherit') {
      return CSS_PROPERTY_INHERIT;
    }
    
    return Value::fromString($value);
  }
}

?>