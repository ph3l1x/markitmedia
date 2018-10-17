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
// $Header: /cvsroot/html2ps/stubs.common.inc.php,v 1.5 2006/11/11 13:43:53 Konstantin Exp $

if (!function_exists('file_get_contents')) {
  require_once(HTML2PS_DIR . 'stubs.file_get_contents.inc.php');
}

if (!function_exists('file_put_contents')) {
  require_once(HTML2PS_DIR . 'stubs.file_put_contents.inc.php');
}

if (!function_exists('is_executable')) {
  require_once(HTML2PS_DIR . 'stubs.is_executable.inc.php');
}

if (!function_exists('memory_get_usage')) {
  require_once(HTML2PS_DIR . 'stubs.memory_get_usage.inc.php');
}

if (!function_exists('_')) {
  require_once(HTML2PS_DIR . 'stubs._.inc.php');
}

?>