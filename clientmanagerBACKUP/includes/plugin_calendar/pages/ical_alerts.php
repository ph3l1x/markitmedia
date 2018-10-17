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

header('Content-type: text/calendar; charset=utf-8');
header('Content-Disposition: inline; filename="cal.ics"');

$alerts = array();
$foo = 'calendar';
$results = handle_hook("home_alerts",$foo,true);
if (is_array($results)) {
    foreach ($results as $res) {
        if (is_array($res)) {
            foreach ($res as $r) {
                $alerts[] = $r;
            }
        }
    }
}

echo 'BEGIN:VCALENDAR
VERSION:2.0
PRODID:-//Ultimate Client Manager/Calendar Plugin v1.0//EN
CALSCALE:GREGORIAN
X-WR-CALNAME:'._l('Alerts').'
X-WR-TIMEZONE:UTC
';


//$local_timezone_string = date('e');
//$local_timezone = new DateTimeZone($local_timezone_string);
//$local_time = new DateTime("now", $local_timezone);
$timezone_hours = module_config::c('timezone_hours',0);


if (count($alerts)) {
    $x = 0;
    foreach ($alerts as $alert) {

        $time = strtotime($timezone_hours.' hours',strtotime($alert['date']));
        echo 'BEGIN:VEVENT
UID:'.md5($alert['name'].$alert['link']).'@ultimateclientmanager.com
';
        // work out the UTC time for this event, based on the timezome we have set in the configuration options

        /*DTSTART;VALUE=DATE:'.date('Ymd',$time).'
DTEND;VALUE=DATE:'.date('Ymd',strtotime('+1 day',$time)).'*/

        echo 'DTSTAMP:'.date('Ymd').'T090000Z
DTSTART:'.date('Ymd',$time).'T090000Z
DTEND:'.date('Ymd',strtotime('+1 day',$time)).'T010000Z
SUMMARY: '.$alert['item'].(isset($alert['name']) ? ' - '.$alert['name'] : '').'
DESCRIPTION:'._l('Alert Item: %s',$alert['name']).'<br><a href="'.$alert['link'].'">'._l('Link').'</a>
END:VEVENT
';
    }
}


echo 'END:VCALENDAR';

