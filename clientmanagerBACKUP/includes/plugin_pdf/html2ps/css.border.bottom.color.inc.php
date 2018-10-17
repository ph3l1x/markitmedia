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
// $Header: /cvsroot/html2ps/css.border.bottom.color.inc.php,v 1.2 2006/11/16 03:32:56 Konstantin Exp $

class CSSBorderBottomColor extends CSSSubProperty {
  function CSSBorderBottomColor(&$owner) {
    $this->CSSSubProperty($owner);
  }

  function set_value(&$owner_value, &$value) {
    $owner_value->bottom->setColor($value);
  }

  function get_value(&$owner_value) {
    $value = $owner_value->bottom->color->copy();
    return $value;
  }

  function get_property_code() {
    return CSS_BORDER_BOTTOM_COLOR;
  }

  function get_property_name() {
    return 'border-bottom-color';
  }

  function parse($value) {
    if ($value == 'inherit') {
      return CSS_PROPERTY_INHERIT;
    }

    return parse_color_declaration($value);
  }
}

?>