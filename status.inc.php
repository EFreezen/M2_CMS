<?php

        $ip = gethostbyname($serverSettings['server_ip']);
        $portlist=array(11002,11005,13000,3306); // Ports
        $status=array("Login Server:", "Char Server:", "World Server:", "Mysql Server:");  // Bezeichnung
        $i=0;


    foreach  ($portlist as $port){

        $online = @fsockopen($ip, $port, $errno, $errstr, 1);
    if ($online)
    {
	echo '<div>';
        echo '<tr>'.$status[$i].' <font color="#5d765d">Online</font>';
	echo '</div>';
    }
    else
    {
	echo '<div>';
        echo '<tr>'.$status[$i].' <font color="#765d5d">Offline</font>';
	echo '</div>';
    }
        @fclose($online);
        $i++;
    }
echo '<div>';
	$result1 = mysql_fetch_assoc(mysql_query("SELECT COUNT(id) AS count FROM player.player WHERE DATE_SUB(NOW(), INTERVAL 5 MINUTE) < last_play"));
		echo 'Player Online: <font color="#5d765d">'.$result1['count'].' </font>';
echo '</div>';

?>