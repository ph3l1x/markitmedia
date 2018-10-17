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