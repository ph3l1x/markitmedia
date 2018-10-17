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
// $Header: /cvsroot/html2ps/css.html2ps.html.content.inc.php,v 1.3 2007/03/15 18:37:30 Konstantin Exp $

require_once(HTML2PS_DIR . 'value.content.php');

class CSSHTML2PSHTMLContent extends CSSPropertyHandler {
  function CSSHTML2PSHTMLContent() { 
    $this->CSSPropertyHandler(false, false); 
  }

  function &default_value() { 
    $data =& new ValueContent();
    return $data;
  }

  // CSS 2.1 p 12.2: 
  // Value: [ <string> | <uri> | <counter> | attr(X) | open-quote | close-quote | no-open-quote | no-close-quote ]+ | inherit
  //
  // TODO: process values other than <string>
  //
  function &parse($value) {
    if ($value === 'inherit') {
      return CSS_PROPERTY_INHERIT;
    };

    $value_obj =& ValueContent::parse($value);
    return $value_obj;
  }

  function get_property_code() {
    return CSS_HTML2PS_HTML_CONTENT;
  }

  function get_property_name() {
    return '-html2ps-html-content';
  }
}

CSS::register_css_property(new CSSHTML2PSHTMLContent);

?>