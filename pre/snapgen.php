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
