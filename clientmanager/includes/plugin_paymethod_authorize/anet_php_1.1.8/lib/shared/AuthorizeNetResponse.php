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
 * Base class for the AuthorizeNet AIM & SIM Responses.
 *
 * @package    AuthorizeNet
 * @subpackage    AuthorizeNetResponse
 */


/**
 * Parses an AuthorizeNet Response.
 *
 * @package AuthorizeNet
 * @subpackage    AuthorizeNetResponse
 */
class AuthorizeNetResponse
{

    const APPROVED = 1;
    const DECLINED = 2;
    const ERROR = 3;
    const HELD = 4;
    
    public $approved;
    public $declined;
    public $error;
    public $held;
    public $response_code;
    public $response_subcode;
    public $response_reason_code;
    public $response_reason_text;
    public $authorization_code;
    public $avs_response;
    public $transaction_id;
    public $invoice_number;
    public $description;
    public $amount;
    public $method;
    public $transaction_type;
    public $customer_id;
    public $first_name;
    public $last_name;
    public $company;
    public $address;
    public $city;
    public $state;
    public $zip_code;
    public $country;
    public $phone;
    public $fax;
    public $email_address;
    public $ship_to_first_name;
    public $ship_to_last_name;
    public $ship_to_company;
    public $ship_to_address;
    public $ship_to_city;
    public $ship_to_state;
    public $ship_to_zip_code;
    public $ship_to_country;
    public $tax;
    public $duty;
    public $freight;
    public $tax_exempt;
    public $purchase_order_number;
    public $md5_hash;
    public $card_code_response;
    public $cavv_response; // cardholder_authentication_verification_response
    public $account_number;
    public $card_type;
    public $split_tender_id;
    public $requested_amount;
    public $balance_on_card;
    public $response; // The response string from AuthorizeNet.

}
