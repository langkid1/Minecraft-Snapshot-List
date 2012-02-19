<?php
/*
 * It is worth noting that this file is NOT displayed in any way in the production web page.
 * This page is run by a CRON job every 5 minutes to keep the snapshots.txt file up to date with the snapshot list :)
 */
$log = fopen("snapshotGetter.log", "a");
$date = date("D m-d-y h:i A");
fwrite($log, "*RUN ON $date == ");
fclose($log);
$snapshotsfile = fopen("/home/langkid1/pub/pre/snapshots.txt", "w b");
error_reporting(E_ALL ^ E_WARNING);
date_default_timezone_set('America/New_York');
$curweek = date("W");
for( ; $curweek != "0"; $curweek--)
{
    if(strpos($curweek, '0') === 0)
{
$name = "12w" . "$curweek" . "a";
$bname = "12w" . "$curweek" . "b";
$cname = "12w" . "$curweek" . "c";
}
else
{
$name = "12w0" . "$curweek" . "a";
$bname = "12w0" . "$curweek" . "b";
$cname = "12w0" . "$curweek" . "c";
}
//c
$f = fopen("http://assets.minecraft.net/" . $cname . "/minecraft.jar", "r");
if($f)
{
    fwrite($snapshotsfile, $cname . ";");
}
fclose($f);
//b
$f = fopen("http://assets.minecraft.net/" . $bname . "/minecraft.jar", "r");
if($f)
{
    fwrite($snapshotsfile, $bname . ";");
}
fclose($f);
//a
$f = fopen("http://assets.minecraft.net/" . $name . "/minecraft.jar", "r");
if($f)
{
    fwrite($snapshotsfile, $name . ";");
}
fclose($f);
}
?>
