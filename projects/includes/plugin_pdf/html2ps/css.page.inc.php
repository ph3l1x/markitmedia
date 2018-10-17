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
// $Header: /cvsroot/html2ps/css.color.inc.php,v 1.13 2007/01/24 18:55:51 Konstantin Exp $

class CSSPage extends CSSPropertyHandler {
  function CSSPage() { 
    $this->CSSPropertyHandler(true, true); 
  }

  function default_value() { 
    return 'auto'; 
  }

  function parse($value) {
    return $value;
  }

  function get_property_code() {
    return CSS_PAGE;
  }

  function get_property_name() {
    return 'page';
  }
}

CSS::register_css_property(new CSSPage());

?>