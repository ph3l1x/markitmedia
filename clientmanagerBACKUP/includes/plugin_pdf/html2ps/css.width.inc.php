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
// $Header: /cvsroot/html2ps/css.width.inc.php,v 1.19 2007/01/24 18:55:53 Konstantin Exp $

require_once(HTML2PS_DIR . 'css.min-width.inc.php');
require_once(HTML2PS_DIR . 'css.property.sub.class.php');

class CSSCompositeWidth extends CSSPropertyHandler {
  function CSSCompositeWidth() {
    $this->CSSPropertyHandler(false, false); 
  }

  function get_property_code() {
    return CSS_HTML2PS_COMPOSITE_WIDTH;
  }

  function get_property_name() {
    return '-html2ps-composite-width';
  }

  function default_value() {
    return new WCNone();
  }
}

class CSSWidth extends CSSSubProperty {
  function CSSWidth($owner) { 
    $this->CSSSubProperty($owner);
  }

  function set_value(&$owner_value, &$value) {
    $min = $owner_value->_min_width;
    $owner_value = $value->copy();
    $owner_value->_min_width = $min;
  }

  function &get_value(&$owner_value) {
    return $owner_value;
  }

  function default_value() { 
    return new WCNone; 
  }

  function parse($value) { 
    if ($value === 'inherit') {
      return CSS_PROPERTY_INHERIT;
    };

    // Check if user specified empty value
    if ($value === '') { return new WCNone; };

    // Check if this value is 'auto' - default value of this property
    if ($value === 'auto') {
      return new WCNone;
    };

    if (substr($value,strlen($value)-1,1) == '%') {
      // Percentage 
      return new WCFraction(((float)$value)/100);
    } else {
      // Constant
      return new WCConstant(trim($value));
    }
  }

  function get_property_code() {
    return CSS_WIDTH;
  }

  function get_property_name() {
    return 'width';
  }
}

$width = new CSSCompositeWidth;
CSS::register_css_property($width);
CSS::register_css_property(new CSSWidth($width));
CSS::register_css_property(new CSSMinWidth($width, '_min_width'));

?>