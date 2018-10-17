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