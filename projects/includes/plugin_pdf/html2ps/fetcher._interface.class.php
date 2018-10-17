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
class Fetcher {
  /**
   * Fetches the data identified by $data_id, wraps it into FetchedData object together with 
   * any auxiliary information (like HTTP response headers, number of redirect, fetched file information
   * or something else) and returns this object.
   *
   * @param String $data_id unique identifier of the data to be fetched (URI, file path, primary key of the database record or something else)
   *
   * @return FetchedData object containing the fetched file contents and auxiliary information, if exists.
   */
  function get_data($data_id) {
    die("Oops. Inoverridden 'get_data' method called in ".get_class($this));
  }

  /**
   * @return String value of base URL to use for resolving relative links inside the document
   */
  function get_base_url() {
    die("Oops. Inoverridden 'get_base_url' method called in ".get_class($this));
  }

  function error_message() {
    die("Oops. Inoverridden 'error_message' method called in ".get_class($this));
  }
}
?>