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