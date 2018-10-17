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

class FetcherMemory extends Fetcher {
  var $base_path;
  var $base_url;
  var $content;

  function FetcherMemory($content, $base_path) {
    $this->content   = $content;
    $this->base_path = $base_path;
    $this->base_url  = $base_path;
  }

  function get_base_url() {
    return $this->base_path;
  }

  function &get_data($url) {
    if ($url != $this->base_path) {
      $null = null;
      return $null;
    };

    $data =& new FetchedDataFile($this->content, $this->base_path);
    return $data;
  }

  function set_base_url($base_url) {
    $this->base_url = $base_url;
  }
}


?>