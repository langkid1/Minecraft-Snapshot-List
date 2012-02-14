<html>
<head>
<title>Complete list of Minecraft "snapshots"</title>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-26121955-1']);
  _gaq.push(['_setDomainName', 'langkid1.me']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<style type="text/css">
.main
{
text-align:center;
}
.notch
{
margin-left:0px;
margin-right:0px;
position:absolute;
text-align:right;
}
.jeb
{
text-align:left;
}
</style>
</head>
<body>

<h1 class="main">Complete list of Minecraft Snapshots</h1>
<table border="1" align="center">
<tr>
<th>Version</th>
<th>Date Released</th>
<th>Client</th>
<th>Server</th>
<th>MC Wiki Link</th>
<?php
/*$curweek = date("W");
$link = "http://assets.minecraft.net/12w" . "$curweek" . "a/minecraft.jar";
$serverlink = "http://assets.minecraft.net/12w" . "$curweek" . "a/minecraft_server.jar";
$wikilink = "http://www.minecraftwiki.net/wiki/Version_history/Development_versions#" . "12w" . "$curweek" . "a";
$name = "12w" . "$curweek" . "a";

       ini_set("default_socket_timeout","05");
       //set_time_limit(5);
       $f=fopen("$link","r");
       $r=fread($f,1000);
       fclose($f);
       if(strlen($r)>1)
       {
       // online
       echo '<tr><td>';
       echo "$name";
       echo '</td><td>N/A</td><td><a href="';
       echo "$link";
       echo '">Download</a></td><td><a href="';
       echo "$serverlink";
       echo '">Download</a></td><td><a href="';
       echo "$wikilink";
       echo '">MC Wiki Page</a></td></tr>';
       }
       else
       {
       // does not work, does nothing!
       }*/
?>
<?php
$curweek = date("W");
for( ; $curweek != "0"; $curweek--)
{
    if(strpos($curweek, '0') === 0)
{
$link = "http://assets.minecraft.net/12w" . "$curweek" . "a/minecraft.jar";
$serverlink = "http://assets.minecraft.net/12w" . "$curweek" . "a/minecraft_server.jar";
$wikilink = "http://www.minecraftwiki.net/wiki/Version_history/Development_versions#" . "12w" . "$curweek" . "a";
$name = "12w" . "$curweek" . "a";

$blink = "http://assets.minecraft.net/12w" . "$curweek" . "b/minecraft.jar";
$bserverlink = "http://assets.minecraft.net/12w" . "$curweek" . "b/minecraft_server.jar";
$bwikilink = "http://www.minecraftwiki.net/wiki/Version_history/Development_versions#" . "12w" . "$curweek" . "b";
$bname = "12w" . "$curweek" . "b";

$clink = "http://assets.minecraft.net/12w" . "$curweek" . "c/minecraft.jar";
$cserverlink = "http://assets.minecraft.net/12w" . "$curweek" . "c/minecraft_server.jar";
$cwikilink = "http://www.minecraftwiki.net/wiki/Version_history/Development_versions#" . "12w" . "$curweek" . "c";
$cname = "12w" . "$curweek" . "c";
}
else
{
$link = "http://assets.minecraft.net/12w0" . "$curweek" . "a/minecraft.jar";
$serverlink = "http://assets.minecraft.net/12w0" . "$curweek" . "a/minecraft_server.jar";
$wikilink = "http://www.minecraftwiki.net/wiki/Version_history/Development_versions#" . "12w0" . "$curweek" . "a";
$name = "12w0" . "$curweek" . "a";

$blink = "http://assets.minecraft.net/12w0" . "$curweek" . "b/minecraft.jar";
$bserverlink = "http://assets.minecraft.net/12w0" . "$curweek" . "b/minecraft_server.jar";
$bwikilink = "http://www.minecraftwiki.net/wiki/Version_history/Development_versions#" . "12w0" . "$curweek" . "b";
$bname = "12w0" . "$curweek" . "b";

$clink = "http://assets.minecraft.net/12w0" . "$curweek" . "c/minecraft.jar";
$cserverlink = "http://assets.minecraft.net/12w0" . "$curweek" . "c/minecraft_server.jar";
$cwikilink = "http://www.minecraftwiki.net/wiki/Version_history/Development_versions#" . "12w0" . "$curweek" . "c";
$cname = "12w0" . "$curweek" . "c";
}
       ini_set("default_socket_timeout","05");
       //set_time_limit(5);
       if($f=fopen($clink,"r"))
           {
       // online
       echo '<tr><td>';
       echo "$cname";
       echo '</td><td>N/A</td><td><a href="';
       echo "$clink";
       echo '">Download</a></td><td><a href="';
       echo "$cserverlink";
       echo '">Download</a></td><td><a href="';
       echo "$cwikilink";
       echo '">MC Wiki Page</a></td></tr>';
       }
        fclose($f);
       ini_set("default_socket_timeout","05");
       //set_time_limit(5);
       if($f=fopen($blink,"r"))
           {
       // online
       echo '<tr><td>';
       echo "$bname";
       echo '</td><td>N/A</td><td><a href="';
       echo "$blink";
       echo '">Download</a></td><td><a href="';
       echo "$bserverlink";
       echo '">Download</a></td><td><a href="';
       echo "$bwikilink";
       echo '">MC Wiki Page</a></td></tr>';
       }
       fclose($f);
       
       ini_set("default_socket_timeout","05");
       //set_time_limit(5);
       
       if($f=fopen($link,"r"))
           {
       // online
       echo '<tr><td>';
       echo "$name";
       echo '</td><td>N/A</td><td><a href="';
       echo "$link";
       echo '">Download</a></td><td><a href="';
       echo "$serverlink";
       echo '">Download</a></td><td><a href="';
       echo "$wikilink";
       echo '">MC Wiki Page</a></td></tr>';
       }
       fclose($f);
       
}
?>
<tr>
<td>11W50a</td>
<td>December 15, 2011</td>
<td><a href="http://assets.minecraft.net/11w50a/minecraft.jar">Download</a></td>
<td><a href="http://assets.minecraft.net/11w50a/minecraft_server.jar">Download</a></td>
<td><a href="http://www.minecraftwiki.net/wiki/Version_history/Development_versions#11w50a">MC Wiki Page</a></td>
</tr>
<tr>
<td>11W49a</td>
<td>December 8, 2011</td>
<td><a href="http://assets.minecraft.net/11w49a/minecraft.jar">Download</a></td>
<td><a href="http://assets.minecraft.net/11w49a/minecraft_server.jar">Download</a></td>
<td><a href="http://www.minecraftwiki.net/wiki/Version_history/Development_versions#11w49a">MC Wiki Page</a></td>
</tr>
<tr>
<td>11W48a</td>
<td>December 1, 2011</td>
<td><a href="http://assets.minecraft.net/11w48a/minecraft.jar">Download</a></td>
<td><a href="http://assets.minecraft.net/11w48a/minecraft_server.jar">Download</a></td>
<td><a href="http://www.minecraftwiki.net/wiki/Version_history/Development_versions#11w48a">MC Wiki Page</a></td>
</tr>
<tr>
<td>11W47a</td>
<td>November 24, 2011</td>
<td><a href="http://assets.minecraft.net/11w47a/minecraft.jar">Download</a></td>
<td><a href="http://assets.minecraft.net/11w47a/minecraft_server.jar">Download</a></td>
<td><a href="http://www.minecraftwiki.net/wiki/Version_history/Development_versions#11w47a">MC Wiki Page</a></td>
</tr>
</table>
<p style="font-size:14px;" class="main">Does not include any of the "pre-releases" before the release of Minecraft 1.0</p>
<p style="font-size:14px;" class="main">The links listed here do NOT point to any files locally hosted, all links go to external websites.</p>
<p style="font-size:14px;" class="main">This website is not affiliated with Minecraft Wiki or mojang.</p>
<p style="font-size:14px;" class="main">This page is powered by PHP.</p>
<!---
Example code for a row
<tr>
<td></td>
<td></td>
<td><a href="">Download</a></td>
<td><a href="">Download</a></td>
<td><a href="">MC Wiki Page</a></td>
</tr>
--->
</body>
</html>
