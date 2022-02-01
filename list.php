<?php

$json = file_get_contents('data.txt');
$afspraken = json_decode($json, true);


foreach($afspraken as $afspraak) {
    echo 'Titel:' . $afspraak['titel'];
    echo 'Datum:' . $afspraak['date'];
    echo '<hr>';
}