<?php
require_once('mainframex/simple_html_dom.php');
//echo file_get_html('http://www.google.com/')->plaintext; 
date_default_timezone_set("Asia/Kuala_Lumpur"); 
$today = date('YMd',strtotime("-2 days"));
echo ( $today);
require_once('mainframex/KLConn.php');
require_once('mainframex/geoplugin.class.php');
$geoplugin = new geoPlugin();
mysql_select_db($dbname);
////////////////////////////////////////////////////
date_default_timezone_set("Asia/Kuala_Lumpur"); 
$hour = date('ga',strtotime("-1 hour"));
//echo $hour;
///////////////////////////////////////////////////
$geoplugin->locate();
echo $geoplugin->city;
?>