<?php 
/** 
  * Copyright: dtbaker 2012
  * Licence: Please check CodeCanyon.net for licence details. 
  * More licence clarification available here:  http://codecanyon.net/wiki/support/legal-terms/licensing-terms/ 
  * Deploy: 4875 748b5706505849baa3c828b967993faf
  * Envato: 95d3e251-990b-4e39-8210-3c31e1148599
  * Package Date: 2015-04-27 08:15:10 
  * IP Address: 68.105.129.178
  */



class module_setup extends module_base{
    public static function can_i($actions,$name=false,$category=false,$module=false){
        if(!$module)$module=__CLASS__;
        return parent::can_i($actions,$name,$category,$module);
    }
	public static function get_class() {
        return __CLASS__;
    }
	public function init(){
		$this->module_name = "setup";
		$this->module_position = 20;

        $this->version=2.321;
		// 2.3 - 2014-07-07 - initial setup improvements
		// 2.31 - 2014-07-25 - initial setup improvements
		// 2.32 - 2014-09-18 - sql mode fix
		// 2.321 - 2015-03-18 - db prefix fix

	}





}