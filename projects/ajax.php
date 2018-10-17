<?php 
/** 
  * Copyright: dtbaker 2012
  * Licence: Please check CodeCanyon.net for licence details. 
  * More licence clarification available here:  http://codecanyon.net/wiki/support/legal-terms/licensing-terms/ 
  * Deploy: 4146 85cb4dc3ce4ad91caa2c8b477a6dd3f1
  * Envato: 977933f5-c2bd-415a-9568-b35beb3a6bf1
  * Package Date: 2015-01-24 12:44:21 
  * IP Address: 68.105.129.178
  */

$start_search_time = microtime(true);

$noredirect = true;
header( 'Content-Type: text/html; charset=UTF-8' );
require_once('init.php');

if(module_security::is_logged_in()){
    if(!isset($_SESSION['previous_search'])){
        $_SESSION['previous_search'] = array();
    }
    $search_text = isset($_REQUEST['ajax_search_text']) ? trim(urldecode($_REQUEST['ajax_search_text'])) : false;
	if($search_text){
		$search_results = array();
		foreach($plugins as $plugin_name => &$plugin){
            // we work out if we bother searching this plugin for results or not.
            if(strlen($search_text)>module_config::c('search_ajax_min_length',2)){
                if(
                    // skip searching this plugin if the last search "foo" didn't return anything and the new search is "foob"
                    isset($_SESSION['previous_search'][$plugin_name]) &&
                    $_SESSION['previous_search'][$plugin_name]['c'] == 0 &&
                    strlen($search_text)>=strlen($_SESSION['previous_search'][$plugin_name]['l']) &&
                    strpos($search_text,$_SESSION['previous_search'][$plugin_name]['l']) === 0
                ){
                    $_SESSION['previous_search'][$plugin_name]['l']=$search_text; // not really needed. but when you backspace a failed search it will force refresh all which might be good.
                    //$this_plugin_results=array('skipping ' . $search_text.' in '.$plugin_name.' last search was '.$_SESSION['previous_search'][$plugin_name]['l'],);
                    continue;
                }else{
                  $this_plugin_results = $plugin->ajax_search($search_text);
                    $_SESSION['previous_search'][$plugin_name] = array(
                        'l'=>$search_text,
                        'c' => count($this_plugin_results),
                    );
                }

                $search_results = array_merge( $search_results , $this_plugin_results );
            }
		}
        if(count($search_results)){
            echo '<ul>';
            foreach($search_results as $r){
                echo '<li>' . $r . '</li>';
            }
            echo '</ul>';
        }else{
            //_e('No results');
        }
	}else{
		echo '';
	}
    if(module_config::c('search_ajax_show_time',0)){
        echo '<br>';
        echo 'Search took: '.round(microtime(true)-$start_search_time,5);
    }
	exit;
}

