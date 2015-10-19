<?php 
/*
AirSafeMy - Malaysian Air API Monitoring App by Myhyazid
Copyright 2015 Myhyazid
Website : www.myhyazid.com
Email : admin@myhyazid.com
Template : Material Design Lite by google
        :   bootstrap
Data Source from Malaysian DOE Website
////////////////////////////////////////////
AirSafeMy by myhyazid
//////////////////////////////////////
*/
require_once('mainframe/mainframex/KLConn.php');
require_once('mainframe/mainframex/geoplugin.class.php');
$geoplugin = new geoPlugin();
mysql_select_db($dbname);
////////////////////////////////////////////////////
date_default_timezone_set("Asia/Kuala_Lumpur"); 
$hour = date('ga',strtotime("-1 hour"));
//echo $hour;
///////////////////////////////////////////////////
$geoplugin->locate();
//echo $geoplugin->city;
$geoplugin->region;
$apisql = "SELECT * FROM apireading WHERE area = '" . $geoplugin->city . "'";
$apistatus = mysql_query($apisql) or die (mysql_error());
$status = mysql_fetch_array($apistatus);
//echo $status[1];
//while ($status = mysql_fetch_array($apistatus)) {
//    echo $status[0];
//    echo $status[45];
//}
//basename .php?menu=senarai
function ActiveBridge($requestUri)
{
    $current_file_name = basename($_SERVER['REQUEST_URI'], ".php?menu=senarai", ".php");

    if ($current_file_name == $requestUri)
        echo 'class="active"';
}
//$sql = mysql_query("SELECT * FROM apireading 
function apihealth($status){
    if($sql >= 300) {
        echo "#F44336";
    }
    elseif ($status >= 201) {
        echo "#EF6C00";
    }
    elseif ($status >= 101) {
        echo "#FFEB3B";
    }
    elseif ($status >= 51) {
        echo "#8BC34A";
    }
    elseif ($status >= 1) {
        echo "#1976D2";
    }
    else {
        echo "#9E9E9E";
    }
}

?>