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
// $Header: /cvsroot/html2ps/css.text-indent.inc.php,v 1.13 2006/11/11 13:43:52 Konstantin Exp $

require_once(HTML2PS_DIR . 'value.text-indent.class.php');

class CSSTextIndent extends CSSPropertyHandler {
  function CSSTextIndent() { 
    $this->CSSPropertyHandler(true, true); 
  }

  function default_value() { 
    return new TextIndentValuePDF(array(0,false)); 
  }

  function parse($value) {
    if ($value === 'inherit') {
      return CSS_PROPERTY_INHERIT;
    };

    if (is_percentage($value)) { 
      return new TextIndentValuePDF(array((int)$value, true));
    } else {
      return new TextIndentValuePDF(array($value, false));
    };
  }

  function get_property_code() {
    return CSS_TEXT_INDENT;
  }

  function get_property_name() {
    return 'text-indent';
  }
}

CSS::register_css_property(new CSSTextIndent());

?>
