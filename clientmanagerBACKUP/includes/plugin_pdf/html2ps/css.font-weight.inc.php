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

class CSSFontWeight extends CSSSubFieldProperty {
  function default_value() {
    return WEIGHT_NORMAL;
  }

  function parse($value) {
    switch (trim(strtolower($value))) {
    case 'inherit':
      return CSS_PROPERTY_INHERIT;
    case 'bold':
    case '700':
    case '800':
    case '900':
    case 'bolder':
      return WEIGHT_BOLD;
    case 'lighter':
    case 'normal':
    case '100':
    case '200':
    case '300':
    case '400':
    case '500':
    case '600':
    default:
      return WEIGHT_NORMAL;
    };
  }

  function get_property_code() {
    return CSS_FONT_WEIGHT;
  }

  function get_property_name() {
    return 'font-weight';
  }
}

?>