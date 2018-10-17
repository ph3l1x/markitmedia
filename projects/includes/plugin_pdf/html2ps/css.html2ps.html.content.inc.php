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