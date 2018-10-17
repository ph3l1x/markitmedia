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
// $Header: /cvsroot/html2ps/xhtml.comments.inc.php,v 1.2 2005/04/27 16:27:46 Konstantin Exp $

function remove_comments(&$html) {
  $html = preg_replace("#<!--.*?-->#is","",$html);
  $html = preg_replace("#<!.*?>#is","",$html);
}

?>