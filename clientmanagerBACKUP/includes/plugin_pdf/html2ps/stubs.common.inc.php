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