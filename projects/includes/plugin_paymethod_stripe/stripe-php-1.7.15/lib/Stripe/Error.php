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

class Stripe_Error extends Exception
{
  public function __construct($message=null, $http_status=null, $http_body=null, $json_body=null)
  {
    parent::__construct($message);
    $this->http_status = $http_status;
    $this->http_body = $http_body;
    $this->json_body = $json_body;
  }

  public function getHttpStatus()
  {
    return $this->http_status;
  }

  public function getHttpBody()
  {
    return $this->http_body;
  }

  public function getJsonBody()
  {
    return $this->json_body;
  }
}
