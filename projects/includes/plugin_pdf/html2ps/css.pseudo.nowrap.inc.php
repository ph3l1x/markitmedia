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
// $Header: /cvsroot/html2ps/css.pseudo.nowrap.inc.php,v 1.6 2006/09/07 18:38:14 Konstantin Exp $

define('NOWRAP_NORMAL',0);
define('NOWRAP_NOWRAP',1);

class CSSPseudoNoWrap extends CSSPropertyHandler {
  function CSSPseudoNoWrap() { $this->CSSPropertyHandler(false, false); }
  function default_value() { return NOWRAP_NORMAL; }

  function get_property_code() {
    return CSS_HTML2PS_NOWRAP;
  }

  function get_property_name() {
    return '-html2ps-nowrap';
  }
}

CSS::register_css_property(new CSSPseudoNoWrap);
  
?>