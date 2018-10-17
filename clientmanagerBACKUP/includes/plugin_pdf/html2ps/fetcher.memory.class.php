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