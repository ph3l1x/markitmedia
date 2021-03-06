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

require_once(HTML2PS_DIR . 'filter.data.encoding.class.php');

class DataFilterUTF8 extends DataFilterEncoding {
  function _convert(&$data, $encoding) {
    $converter = Converter::create();
    $data->set_content($converter->to_utf8($data->get_content(), $encoding));
  }
}

?>