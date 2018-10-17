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
 * Interchange component class describing configuration directives.
 */
class HTMLPurifier_ConfigSchema_Interchange_Directive
{

    /**
     * ID of directive, instance of HTMLPurifier_ConfigSchema_Interchange_Id.
     */
    public $id;

    /**
     * String type, e.g. 'integer' or 'istring'.
     */
    public $type;

    /**
     * Default value, e.g. 3 or 'DefaultVal'.
     */
    public $default;

    /**
     * HTML description.
     */
    public $description;

    /**
     * Boolean whether or not null is allowed as a value.
     */
    public $typeAllowsNull = false;

    /**
     * Lookup table of allowed scalar values, e.g. array('allowed' => true).
     * Null if all values are allowed.
     */
    public $allowed;

    /**
     * List of aliases for the directive,
     * e.g. array(new HTMLPurifier_ConfigSchema_Interchange_Id('Ns', 'Dir'))).
     */
    public $aliases = array();

    /**
     * Hash of value aliases, e.g. array('alt' => 'real'). Null if value
     * aliasing is disabled (necessary for non-scalar types).
     */
    public $valueAliases;

    /**
     * Version of HTML Purifier the directive was introduced, e.g. '1.3.1'.
     * Null if the directive has always existed.
     */
    public $version;

    /**
     * ID of directive that supercedes this old directive, is an instance
     * of HTMLPurifier_ConfigSchema_Interchange_Id. Null if not deprecated.
     */
    public $deprecatedUse;

    /**
     * Version of HTML Purifier this directive was deprecated. Null if not
     * deprecated.
     */
    public $deprecatedVersion;

    /**
     * List of external projects this directive depends on, e.g. array('CSSTidy').
     */
    public $external = array();

}

// vim: et sw=4 sts=4
