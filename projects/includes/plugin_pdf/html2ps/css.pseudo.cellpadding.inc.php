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
// $Header: /cvsroot/html2ps/css.pseudo.cellpadding.inc.php,v 1.6 2006/09/07 18:38:14 Konstantin Exp $

class CSSCellPadding extends CSSPropertyHandler {
  function CSSCellPadding() { 
    $this->CSSPropertyHandler(true, false); 
  }

  function default_value() { 
    return Value::fromData(1, UNIT_PX);
  }

  function parse($value) { 
    return Value::fromString($value);
  }

  function get_property_code() {
    return CSS_HTML2PS_CELLPADDING;
  }

  function get_property_name() {
    return '-html2ps-cellpadding';
  }
}

CSS::register_css_property(new CSSCellPadding);

?>