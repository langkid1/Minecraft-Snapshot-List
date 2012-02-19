<?php

        $snaplistfiles = fopen("snapshots.txt", "r");
        $snaplistfile = fread($snaplistfiles, "999");
        $snaplist = explode(";", $snaplistfile);
        $snapnum = 0;
        for(; $snaplist[$snapnum]; $snapnum++)
        {
            //initalize links
            $link = "http://assets.minecraft.net/" . $snaplist[$snapnum] . "/minecraft.jar";
            $serverlink = "http://assets.minecraft.net/" . $snaplist[$snapnum] . "/minecraft_server.jar";
            $wikilink = "http://www.minecraftwiki.net/wiki/Version_history/Development_versions#" . $snaplist[$snapnum];
            
           {
               //This could probably be cleaned up quite a bit :|
                echo '<tr><td>';
                echo "$snaplist[$snapnum]";
                echo '</td><td>N/A</td><td><a target="_top" href="';
                echo "$link";
                echo '">Download</a></td><td><a target="_top" href="';
                echo "$serverlink";
                echo '">Download</a></td><td><a target="_top" href="';
                echo "$wikilink";
                echo '">MC Wiki Page</a></td></tr>';
           }
        }
        fclose($snaplistfiles);
?>
