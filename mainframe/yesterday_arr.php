<?php
require_once('mainframex/KLConn.php');
include('button.php');
    // SimpleHTMLDom Library
    require_once('mainframex/simple_html_dom.php');
    date_default_timezone_set("Asia/Kuala_Lumpur"); 
    $yesterday = date('Y-m-d',strtotime("-1 days"));
    $dbday = date('YMd',strtotime("-1 days"));
    mysql_select_db($dbname);
$line = date('Y-m-d H:i:s') .  - $_SERVER[REMOTE_ADDR];
file_put_contents('/home/myhyazid/Web/AirSafeMy/visitors.log', $line . PHP_EOL, FILE_APPEND);
//////////////////////////////////////////////////////////////////////////////////////
echo("$line <br>");
    $base_url = "http://apims.doe.gov.my/v2";
    // Source Data
    $source = "$base_url/hour1_$yesterday.html";
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
            if ($dbg) { echo $row . PHP_EOL; } 
            //foreach($html->find('td') as $col) {
                // Debug Output
            //if ($dbg) { echo $col->innertext . PHP_EOL; } 
            //echo $row->plaintext . '<br>';
            //}
//run/execute mysql query
           mysql_query("CREATE TABLE IF NOT EXISTS $dbday AS (SELECT * FROM apireading);") or die (mysql_error());
            //if(isset($_POST['submit'])){
//run/execute mysql query
            mysql_query("INSERT IGNORE INTO $dbday(`id`, `state`, `area`, `12am`, `1am`, `2am`, `3am`, `4am`, `5am`, `6am`, `7am`, `8am`, `9am`, `10am`, `11am`, `12pm`, `1pm`, `2pm`, `3pm`, `4pm`, `5pm`, `6pm`, `7pm`, `8pm`, `9pm`, `10pm`, `11pm`) VALUES ('','$state','$area','','','','','','','','','','','','','','','','','','','','','','','','')") or die (mysql_error());
          //  if (!$insertquery) {
            //die('Invalid query: ' . mysql_error());
        mysql_query("UPDATE $dbday SET `12am`='$time',`1am`='$time1',`2am`='$time2',`3am`='$time3',`4am`='$time4',`5am`='$time5' WHERE `area`='$area';");
           //}
          //  mysql_close($conn);
            //echo($state);
            
        }
        }
    }
/////////////////////////  array2.php ////////////////////////////////////////
$source1 = "$base_url/hour2_$yesterday.html";
    echo ($source1);

    // Displays Extra Debug Info
    $dbg = 1;

    // Read DOM
    $html = file_get_html($source1);

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
            $area  = $row->find('td',1)->plaintext;
            $time6 = $row->find('td',2)->plaintext;
            $time7 = $row->find('td',3)->plaintext;
            $time8 = $row->find('td',4)->plaintext;
            $time9 = $row->find('td',5)->plaintext;
            $time10 = $row->find('td',6)->plaintext;
            $time11 = $row->find('td',7)->plaintext;
            // Debug Output
            //f ($dbg) { echo $time11 . PHP_EOL; } 
            //foreach($html->find('td') as $col) {
                // Debug Output
            //if ($dbg) { echo $col->innertext . PHP_EOL; } 
            //echo $row->plaintext . '<br>';
            //}
          mysql_query("UPDATE $dbday SET `6am`='$time6',`7am`='$time7',`8am`='$time8',`9am`='$time9',`10am`='$time10',`11am`='$time11' WHERE `area`='$area';");
        }
        }
    }
////////////////////  array 3 //////////////////////////////////////////
$source2= "$base_url/hour3_$yesterday.html";
    echo ( $source2);

    // Displays Extra Debug Info
    $dbg = 1;

    // Read DOM
    $html = file_get_html($source2);

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
            $area  = $row->find('td',1)->plaintext;
            $time12 = $row->find('td',2)->plaintext;
            $time13 = $row->find('td',3)->plaintext;
            $time14 = $row->find('td',4)->plaintext;
            $time15 = $row->find('td',5)->plaintext;
            $time16 = $row->find('td',6)->plaintext;
            $time17 = $row->find('td',7)->plaintext;
            // Debug Output
            //if ($dbg) { echo $time17 . PHP_EOL; } 
            //foreach($html->find('td') as $col) {
                // Debug Output
            //if ($dbg) { echo $col->innertext . PHP_EOL; } 
            //echo $row->plaintext . '<br>';
            //}
          mysql_query("UPDATE $dbday SET `12pm`='$time12',`1pm`='$time13',`2pm`='$time14',`3pm`='$time15',`4pm`='$time16',`5pm`='$time17' WHERE `area`='$area';");
        }
        }
    }
////////////////// array 4 /////////////////////////////////
$source3 = "$base_url/hour4_$yesterday.html";
    echo ( $source3);

    // Displays Extra Debug Info
    $dbg = 1;

    // Read DOM
    $html = file_get_html($source3);

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
            $area  = $row->find('td',1)->plaintext;
            $time18 = $row->find('td',2)->plaintext;
            $time19 = $row->find('td',3)->plaintext;
            $time20 = $row->find('td',4)->plaintext;
            $time21 = $row->find('td',5)->plaintext;
            $time22 = $row->find('td',6)->plaintext;
            $time23 = $row->find('td',7)->plaintext;
            // Debug Output
            //if ($dbg) { echo $time23 . PHP_EOL; } 
            //foreach($html->find('td') as $col) {
                // Debug Output
            //if ($dbg) { echo $col->innertext . PHP_EOL; } 
            //echo $row->plaintext . '<br>';
            //}
          mysql_query("UPDATE $dbday SET `6pm`='$time18',`7pm`='$time19',`8pm`='$time20',`9pm`='$time21',`10pm`='$time22',`11pm`='$time23' WHERE `area`='$area';") or die (mysql_error());
            
        }
        }
    }

//mysql_query("INSERT INTO $dbday(`id`, `state`, `area`, `12am`, `1am`, `2am`, `3am`, `4am`, `5am`, `6am`, `7am`, `8am`, `9am`, `10am`, `11am`, `12pm`, `1pm`, `2pm`, `3pm`, `4pm`, `5pm`, `6pm`, `7pm`, `8pm`, `9pm`, `10pm`, `11pm`) VALUES ('','$state','$area','$time','$time1','$time2','$time3','$time4','$time5','$time6','$time7','$time8','$time9','$time10','$time11','$time12','$time13','$time14','$time15','$time16','$time17','$time18','$time19','$time20','$time21','$time22','$time23')") or die (mysql_error());

mysql_close($conn);

?>