<?php

//Ultimate Client Manager - config file

define('_DB_SERVER','localhost');
define('_DB_NAME','markitsi_ucm');
define('_DB_USER','markitsi_ucm_usr');
define('_DB_PASS','G4ksRF,JDmE&');
define('_DB_PREFIX','ucm');

define('_UCM_VERSION',2);
define('_UCM_FOLDER',preg_replace('#includes$#','',dirname(__FILE__)));
define('_UCM_SECRET','b6b9711bdcfb41e521f91ef503d85062'); // change this to something unique

define('_EXTERNAL_TUNNEL','ext.php');
define('_EXTERNAL_TUNNEL_REWRITE','external/');
define('_ENABLE_CACHE',true);
define('_DEBUG_MODE',false);
define('_DEMO_MODE',false);
if(!defined('_REWRITE_LINKS'))define('_REWRITE_LINKS',false);

ini_set('display_errors',false);
ini_set('error_reporting',0);

