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

class CSSHTML2PSPixels extends CSSPropertyHandler {
  function CSSHTML2PSPixels() { 
    $this->CSSPropertyHandler(false, false); 
  }

  function &default_value() { 
    $value = 800;
    return $value;
  }

  function &parse($value) {
    $value_data = (int)$value;
    return $value_data;
  }

  function get_property_code() {
    return CSS_HTML2PS_PIXELS;
  }

  function get_property_name() {
    return '-html2ps-pixels';
  }
}

CSS::register_css_property(new CSSHTML2PSPixels);

?>