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