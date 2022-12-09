<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$database = 'db-name';
$user = 'user123';
$pass = 'pass123';
$host = 'localhost';


$todayDate = date('Y-m-d');
$dir = dirname(__FILE__).'/path/to/xx-db'.$todayDate.'.sql';



/* ------------- this one exludes a table------------------- */

//exec("mysqldump -u $user -p$pass $database --ignore-table=$database.user_activity_logs | gzip -9 > $dir.zip 2>&1");



/* ----------- complete database backup --------------- */

exec("mysqldump -u $user -p$pass $database | gzip -9 > $dir.zip 2>&1");


echo "<p style='font-size:1.6em;'>saved as <code style='color:#0077ff'>{$dir}</code> </p>";

?>