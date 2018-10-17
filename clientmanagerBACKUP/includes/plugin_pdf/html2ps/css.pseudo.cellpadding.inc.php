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