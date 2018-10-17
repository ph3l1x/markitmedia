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
// $Header: /cvsroot/html2ps/css.pseudo.localalign.inc.php,v 1.4 2006/09/07 18:38:14 Konstantin Exp $

define('LA_LEFT',0);
define('LA_CENTER',1);
define('LA_RIGHT',2);

class CSSLocalAlign extends CSSPropertyHandler {
  function CSSLocalAlign() { $this->CSSPropertyHandler(false, false); }

  function default_value() { return LA_LEFT; }

  function parse($value) { return $value; }

  function get_property_code() {
    return CSS_HTML2PS_LOCALALIGN;
  }

  function get_property_name() {
    return '-html2ps-localalign';
  }
}

CSS::register_css_property(new CSSLocalAlign);

?>