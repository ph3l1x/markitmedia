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

class CSSPseudoLinkTarget extends CSSPropertyHandler {
  function CSSPseudoLinkTarget() { $this->CSSPropertyHandler(true, true); }

  function default_value() { return ""; }

  function is_external_link($value) {
    return (strlen($value) > 0 && $value{0} != "#");
  }

  function is_local_link($value) {
    return (strlen($value) > 0 && $value{0} == "#");
  }

  function parse($value, &$pipeline) { 
    // Keep local links (starting with sharp sign) as-is
    if (CSSPseudoLinkTarget::is_local_link($value)) { return $value; }

    $data = @parse_url($value);
    if (!isset($data['scheme']) || $data['scheme'] == "" || $data['scheme'] == "http") {
      return $pipeline->guess_url($value);
    } else {
      return $value;
    };
  }

  function get_property_code() {
    return CSS_HTML2PS_LINK_TARGET;
  }

  function get_property_name() {
    return '-html2ps-link-target';
  }
}

CSS::register_css_property(new CSSPseudoLinkTarget);

?>