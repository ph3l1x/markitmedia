<?php 
/** 
  * Copyright: dtbaker 2012
  * Licence: Please check CodeCanyon.net for licence details. 
  * More licence clarification available here:  http://codecanyon.net/wiki/support/legal-terms/licensing-terms/ 
  * Deploy: 4146 85cb4dc3ce4ad91caa2c8b477a6dd3f1
  * Envato: 977933f5-c2bd-415a-9568-b35beb3a6bf1
  * Package Date: 2015-01-24 12:43:31 
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

        $this->version=2.32;
		// 2.3 - 2014-07-07 - initial setup improvements
		// 2.31 - 2014-07-25 - initial setup improvements
		// 2.32 - 2014-09-18 - sql mode fix

	}





}