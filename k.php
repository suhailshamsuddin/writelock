<?php
    $k = fopen("king.text", "w");
    if (flock($k, LOCK_EX)) {
        fwrite($k,"hello ");
        echo "Got lock!\n";
        flock($k, LOCK_UN);
    } else {
        print "Could not get lock!\n";
    }
?>
