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
 * Generic schema interchange format that can be converted to a runtime
 * representation (HTMLPurifier_ConfigSchema) or HTML documentation. Members
 * are completely validated.
 */
class HTMLPurifier_ConfigSchema_Interchange
{

    /**
     * Name of the application this schema is describing.
     */
    public $name;

    /**
     * Array of Directive ID => array(directive info)
     */
    public $directives = array();

    /**
     * Adds a directive array to $directives
     */
    public function addDirective($directive) {
        if (isset($this->directives[$i = $directive->id->toString()])) {
            throw new HTMLPurifier_ConfigSchema_Exception("Cannot redefine directive '$i'");
        }
        $this->directives[$i] = $directive;
    }

    /**
     * Convenience function to perform standard validation. Throws exception
     * on failed validation.
     */
    public function validate() {
        $validator = new HTMLPurifier_ConfigSchema_Validator();
        return $validator->validate($this);
    }

}

// vim: et sw=4 sts=4
