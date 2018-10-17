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

class CSSPseudoLinkDestination extends CSSPropertyHandler {
  function CSSPseudoLinkDestination() { 
    $this->CSSPropertyHandler(false, false); 
  }

  function default_value() { 
    return null; 
  }

  function parse($value) { 
    return $value;
  }

  function get_property_code() {
    return CSS_HTML2PS_LINK_DESTINATION;
  }

  function get_property_name() {
    return '-html2ps-link-destination';
  }
}

CSS::register_css_property(new CSSPseudoLinkDestination);

?>