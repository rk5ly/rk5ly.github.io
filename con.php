<?php

$dbh='https://rk5ly.github.io'; //db host
$dbn='admin'; //db name
$dbu='admin'; //db user
$dbp='admin'; //db pass

$db = mysql_connect("$dbh","$dbu","$dbp") or die("Could not connect: " . mysql_error());
mysql_select_db("$dbn", $db) or die(mysql_error());
?>
