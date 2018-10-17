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

function memory_get_usage() {
  // If its Windows
  // Tested on Win XP Pro SP2. Should work on Win 2003 Server too
  // Doesn't work for 2000
  // If you need it to work for 2000 look at http://us2.php.net/manual/en/function.memory-get-usage.php#54642
  if ( substr(PHP_OS,0,3) == 'WIN') {
    $output = array();
    exec(HTML2PS_DIR.'utils/pslist.exe -m ' . getmypid() , $output);

    $resultRow = $output[8];
    $items     = preg_split("/\s+/",$resultRow);
    
    return $items[3] . ' KB';
  } else {
    // We now assume the OS is UNIX
    // Tested on Mac OS X 10.4.6 and Linux Red Hat Enterprise 4
    // This should work on most UNIX systems
    $pid = getmypid();
    exec("ps -eo%mem,rss,pid | grep $pid", $output);
    $output = explode("  ", $output[0]);
    //rss is given in 1024 byte units
    return $output[1] * 1024;
  }
}

?>