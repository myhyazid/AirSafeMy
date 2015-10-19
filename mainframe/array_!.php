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
    // SimpleHTMLDom Library
    require_once('mainframex/simple_html_dom.php');
    date_default_timezone_set("Asia/Kuala_Lumpur"); 
    $today = date("Y-m-d");
//echo ( $today)
    $base_url = "http://apims.doe.gov.my/v2";
    // Source Data
    $source = "$base_url/hour1_$today.html";
    echo ( $source);

    // Displays Extra Debug Info
    $dbg = 1;

    // Read DOM
    $html = file_get_html($source);

    // Confirm DOM
    if ($html) {
        // Debug Output
        if ($dbg) { echo '<pre>'; }
        
        // Loop for each <table>
        foreach ($html->find('table') as $table) {

            // Debug Output
            //if ($dbg) { echo 'TABLE' . PHP_EOL; }
        // Loop for each <table>
        foreach($html->find('tr') as $row) {
            $state = $row->find('td',0)->plaintext;
            $area = $row->find('td',1)->plaintext;
            $time = $row->find('td',2)->plaintext;
            $time1 = $row->find('td',3)->plaintext;
            $time2 = $row->find('td',4)->plaintext;
            $time3 = $row->find('td',5)->plaintext;
            $time4 = $row->find('td',6)->plaintext;
            $time5 = $row->find('td',7)->plaintext;
            // Debug Output
            //if ($dbg) { echo $state . PHP_EOL; } 
            //foreach($html->find('td') as $col) {
                // Debug Output
            //if ($dbg) { echo $col->innertext . PHP_EOL; } 
            //echo $row->plaintext . '<br>';
            //}
            
        }
        }
    }
//print_r($table);
//echo '</pre>';
?>