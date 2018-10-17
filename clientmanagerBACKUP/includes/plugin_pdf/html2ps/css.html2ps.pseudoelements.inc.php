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
// $Header: /cvsroot/html2ps/css.html2ps.pseudoelements.inc.php,v 1.1 2006/09/07 18:38:14 Konstantin Exp $

define('CSS_HTML2PS_PSEUDOELEMENTS_NONE'  ,0);
define('CSS_HTML2PS_PSEUDOELEMENTS_BEFORE',1);
define('CSS_HTML2PS_PSEUDOELEMENTS_AFTER' ,2);

class CSSHTML2PSPseudoelements extends CSSPropertyHandler {
  function CSSHTML2PSPseudoelements() { 
    $this->CSSPropertyHandler(false, false); 
  }

  function default_value() { 
    return CSS_HTML2PS_PSEUDOELEMENTS_NONE; 
  }

  function parse($value) {
    return $value;
  }

  function get_property_code() {
    return CSS_HTML2PS_PSEUDOELEMENTS;
  }

  function get_property_name() {
    return '-html2ps-pseudoelements';
  }
}

CSS::register_css_property(new CSSHTML2PSPseudoelements);

?>