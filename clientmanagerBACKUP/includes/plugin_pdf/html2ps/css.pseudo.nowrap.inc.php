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