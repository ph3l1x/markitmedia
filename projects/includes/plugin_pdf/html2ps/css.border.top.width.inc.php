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
// $Header: /cvsroot/html2ps/css.border.top.width.inc.php,v 1.2 2007/02/04 17:08:18 Konstantin Exp $

class CSSBorderTopWidth extends CSSSubProperty {
  function CSSBorderTopWidth(&$owner) {
    $this->CSSSubProperty($owner);
  }

  function set_value(&$owner_value, &$value) {
    if ($value != CSS_PROPERTY_INHERIT) {
      $owner_value->top->width = $value->copy();
    } else {
      $owner_value->top->width = $value;
    };
  }

  function get_value(&$owner_value) {
    return $owner_value->top->width;
  }

  function get_property_code() {
    return CSS_BORDER_TOP_WIDTH;
  }

  function get_property_name() {
    return 'border-top-width';
  }

  function parse($value) {
    if ($value == 'inherit') {
      return CSS_PROPERTY_INHERIT;
    }

    $width_handler = CSS::get_handler(CSS_BORDER_WIDTH);
    $width = $width_handler->parse_value($value);
    return $width;
  }
}

?>