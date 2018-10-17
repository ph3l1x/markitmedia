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
class DataFilterEncoding extends DataFilter {
  function DataFilterEncoding($encoding) {
    $this->encoding = $encoding;
  }

  function getEncoding() {
    return $this->encoding;
  }

  function process(&$data) {
    // Remove control symbols if any
    $data->set_content(preg_replace('/[\x00-\x07]/', "", $data->get_content()));

    if (empty($this->encoding)) {
      $encoding = $data->detect_encoding();

      if (is_null($encoding)) {
        $encoding = DEFAULT_ENCODING;
      };
      $converter = Converter::create();
      $data->set_content($converter->to_utf8($data->get_content(), $encoding));
    } else {
      $converter = Converter::create();
      $data->set_content($converter->to_utf8($data->get_content(), $this->encoding));
    };

    return $data;
  }

  function _convert(&$data, $encoding) {
    error_no_method('_convert', get_class($this));
  }
}
?>