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
// $Id: bcpowmod.php,v 1.1 2007-07-02 04:19:55 terrafrost Exp $


/**
 * Replace bcpowmod()
 *
 * @category    PHP
 * @package     PHP_Compat
 * @license     LGPL - http://www.gnu.org/licenses/lgpl.html
 * @copyright   2004-2007 Aidan Lister <aidan@php.net>, Arpad Ray <arpad@php.net>
 * @link        http://php.net/function.bcpowmod
 * @author      Sara Golemon <pollita@php.net>
 * @version     $Revision: 1.1 $
 * @since       PHP 5.0.0
 * @require     PHP 4.0.0 (user_error)
 */
function php_compat_bcpowmod($x, $y, $modulus, $scale = 0)
{
    // Sanity check
    if (!is_scalar($x)) {
        user_error('bcpowmod() expects parameter 1 to be string, ' .
            gettype($x) . ' given', E_USER_WARNING);
        return false;
    }

    if (!is_scalar($y)) {
        user_error('bcpowmod() expects parameter 2 to be string, ' .
            gettype($y) . ' given', E_USER_WARNING);
        return false;
    }

    if (!is_scalar($modulus)) {
        user_error('bcpowmod() expects parameter 3 to be string, ' .
            gettype($modulus) . ' given', E_USER_WARNING);
        return false;
    }

    if (!is_scalar($scale)) {
        user_error('bcpowmod() expects parameter 4 to be integer, ' .
            gettype($scale) . ' given', E_USER_WARNING);
        return false;
    }

    $t = '1';
    while (bccomp($y, '0')) {
        if (bccomp(bcmod($y, '2'), '0')) {
            $t = bcmod(bcmul($t, $x), $modulus);
            $y = bcsub($y, '1');
        }

        $x = bcmod(bcmul($x, $x), $modulus);
        $y = bcdiv($y, '2');
    }

    return $t;    
}


// Define
if (!function_exists('bcpowmod')) {
    function bcpowmod($x, $y, $modulus, $scale = 0)
    {
        return php_compat_bcpowmod($x, $y, $modulus, $scale);
    }
}