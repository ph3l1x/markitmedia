<?php

//Ultimate Client Manager - config file

define('_DB_SERVER','50.62.166.176');
define('_DB_NAME','markitme_ucm');
define('_DB_USER','markitme_ucmuser');
define('_DB_PASS','8Gn!bfMT$Xko');
define('_DB_PREFIX','ucm_');

define('_UCM_VERSION',2);
define('_UCM_FOLDER',preg_replace('#includes$#','',dirname(__FILE__)));
define('_UCM_SECRET','003eeb9029bf6cab0318a81c3da6bbee'); // change this to something unique

define('_EXTERNAL_TUNNEL','ext.php');
define('_EXTERNAL_TUNNEL_REWRITE','external/');
define('_ENABLE_CACHE',true);
define('_DEBUG_MODE',false);
define('_DEMO_MODE',false);
if(!defined('_REWRITE_LINKS'))define('_REWRITE_LINKS',false);

ini_set('display_errors',false);
ini_set('error_reporting',0);

