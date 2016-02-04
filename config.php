<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "0000";
$dbname = "band_base";
$conn=mysql_connect($dbhost,$dbuser,$dbpass);
if (!$conn)
  {
    die('Could not connect: ' . mysql_error());
  }

mysql_select_db($dbname, $conn);
?>