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
// $Header: /cvsroot/html2ps/css.border.top.style.inc.php,v 1.1 2006/09/07 18:38:13 Konstantin Exp $

class CSSBorderTopStyle extends CSSSubProperty {
  function CSSBorderTopStyle(&$owner) {
    $this->CSSSubProperty($owner);
  }

  function set_value(&$owner_value, &$value) {
    $owner_value->top->style = $value;
  }

  function get_value(&$owner_value) {
    return $owner_value->top->style;
  }

  function get_property_code() {
    return CSS_BORDER_TOP_STYLE;
  }

  function get_property_name() {
    return 'border-top-style';
  }

  function parse($value) {
    if ($value == 'inherit') {
      return CSS_PROPERTY_INHERIT;
    }

    return CSSBorderStyle::parse_style($value);
  }
}

?>