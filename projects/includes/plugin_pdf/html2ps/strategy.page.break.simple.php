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

class StrategyPageBreakSimple {
  function StrategyPageBreakSimple() {
  }

  function run(&$pipeline, &$media, &$box) {
    $num_pages = ceil($box->get_height() / mm2pt($media->real_height()));
    $page_heights = array();
    for ($i=0; $i<$num_pages; $i++) {
      $page_heights[] = mm2pt($media->real_height());
    };    

    return $page_heights;
  }
}

?>