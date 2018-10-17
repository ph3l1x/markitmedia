<?php 
/** 
  * Copyright: dtbaker 2012
  * Licence: Please check CodeCanyon.net for licence details. 
  * More licence clarification available here:  http://codecanyon.net/wiki/support/legal-terms/licensing-terms/ 
  * Deploy: 4146 85cb4dc3ce4ad91caa2c8b477a6dd3f1
  * Envato: 977933f5-c2bd-415a-9568-b35beb3a6bf1
  * Package Date: 2015-01-24 12:41:25 
  * IP Address: 68.105.129.178
  */


class module_captcha extends module_base{

    // 2.2 - fix for ssl captcha
	private static $captcha_store = array();
    public static function can_i($actions,$name=false,$category=false,$module=false){
        if(!$module)$module=__CLASS__;
        return parent::can_i($actions,$name,$category,$module);
    }
	public static function get_class() {
        return __CLASS__;
    }
	public function init(){
        $this->version = 2.22;
		$this->module_name = "captcha";
		$this->module_position = 65;

        // 2.21 - 2013-04-12 - fix for auto login
        // 2.22 - 2014-12-19 - php fix

	}

    public static function display_captcha_form(){

        $publickey = module_config::c('recaptcha_public_key','6Leym88SAAAAAK6APyjTzJwtwY0zAdcU8yIXwgvR');

        require_once('inc/recaptchalib.php');
        echo recaptcha_get_html($publickey, null, true);
    }
    public static function check_captcha_form(){

        $privatekey = module_config::c('recaptcha_private_key','6Leym88SAAAAANbBjtrjNfeu6NXDSCXGBSbKzqnN');

        require_once('inc/recaptchalib.php');
        $resp = recaptcha_check_answer ($privatekey,
            $_SERVER["REMOTE_ADDR"],
            isset($_POST["recaptcha_challenge_field"]) ? $_POST["recaptcha_challenge_field"] : '',
            isset($_POST["recaptcha_response_field"]) ? $_POST["recaptcha_response_field"] : ''
            );

        if (!$resp->is_valid) {
            // What happens when the CAPTCHA was entered incorrectly
            return false;
        } else {
            return true;
        }
    }

}