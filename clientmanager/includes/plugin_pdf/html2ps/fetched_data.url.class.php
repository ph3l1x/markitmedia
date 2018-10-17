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
class FetchedDataURL extends FetchedDataHTML {
  var $content;
  var $headers;
  var $url;

  function detect_encoding() {
    // First, try to get encoding from META http-equiv tag
    //
    $encoding = $this->_detect_encoding_using_meta($this->content);

    // If no META encoding specified, try to use encoding from HTTP response
    //
    if (is_null($encoding)) {
      foreach ($this->headers as $header) {
        if (preg_match("/Content-Type: .*charset=\s*([^\s;]+)/i", $header, $matches)) {
          $encoding = strtolower($matches[1]);
        };
      };
    }

    // At last, fall back to default encoding
    //
    if (is_null($encoding)) { $encoding = "iso-8859-1";  }

    return $encoding;
  }

  function FetchedDataURL($content, $headers, $url) {
    $this->content     = $content;
    $this->headers     = $headers;
    $this->url         = $url;
  }

  function get_additional_data($key) {
    switch ($key) {
    case 'Content-Type':
      foreach ($this->headers as $header) {
        if (preg_match("/Content-Type: (.*)/", $header, $matches)) {
          return $matches[1];
        };
      };
      return null;
    };
  }

  function get_uri() {
    return $this->url;
  }

  function get_content() {
    return $this->content;
  }

  function set_content($data) {
    $this->content = $data;
  }
}
?>
