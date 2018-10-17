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