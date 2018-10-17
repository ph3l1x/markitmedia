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
// $Header: /cvsroot/html2ps/css.page-break-after.inc.php,v 1.3 2007/01/09 20:13:48 Konstantin Exp $

class CSSPageBreakAfter extends CSSPageBreak {
  function get_property_code() {
    return CSS_PAGE_BREAK_AFTER;
  }

  function get_property_name() {
    return 'page-break-after';
  }
}

CSS::register_css_property(new CSSPageBreakAfter);

?>