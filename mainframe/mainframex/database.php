<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'yourpass';
$dbname = 'yourdb';
$conn = mysql_connect($dbhost, $dbuser, $dbpass, $dbname);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
//echo '<b>Connected successfully</b><br />';
?>