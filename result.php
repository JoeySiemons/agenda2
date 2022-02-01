<?php
$title = $_POST["title"];
$oms = $_POST["Omschrijving"];
$date = $_POST["Datum"];


$afspraak = ["titel" => $title, "oms" => $oms, "date" => $date];

$json2 = file_get_contents("data.txt");
$afspraken = json_decode($json2);

$afspraken[] = $afspraak;

$json = json_encode($afspraken);
file_put_contents("data.txt", $json);

echo "<br>";
Print_r($afspraken);

foreach($afspraken as $afspraak) {
    echo 'Titel: ' . $afspraak['titel'];
    echo ' Datum: ' . $afspraak['date'];
    echo '<hr>';
}

$exp_date= $date;
$today_date = date('Y/m/d');

$exp=strtotime($exp_date);
$td=strtotime($today_date);

if ($td>$exp) {
    echo "een van uw afspraken is over de datum!";
}else {
    echo "Afspraak is nog niet over de datum";
}


?>