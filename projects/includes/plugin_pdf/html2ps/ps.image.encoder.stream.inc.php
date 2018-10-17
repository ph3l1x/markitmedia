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


/**
 * @author Konstantin Bournayev
 * @version 1.0
 * @created 24-џэт-2006 20:56:23
 */
class PSImageEncoderStream
{
  var $last_image_id;

  // Generates new unique image identifier
  // 
  // @return generated identifier
  //
  function generate_id()
	{
    	$this->last_image_id ++;
    	return $this->last_image_id;
	}

}

/**
 * @created 24-џэт-2006 20:56:23
 * @author Konstantin Bournayev
 * @version 1.0
 * @updated 24-џэт-2006 21:19:35
 */
class PSImageEncoder
{

	var $last_image_id;

	function __construct()
	{
	}



	/**
	 * Generates new unique image identifier
	 * @return generated identifier
	 */
	function generate_id()
	{
	}

}
?>