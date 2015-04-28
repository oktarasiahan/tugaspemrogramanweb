<?php
$dbhost = 'localhost';
$dbusn  = 'root';
$dbpass = 'kutukupret';
$upload = 'tutorial';
$dbconn = mysql_connect($host,$dbusn,$dbpass);
$dbopen = mysql_select_db($upload,$dbconn);
?>
