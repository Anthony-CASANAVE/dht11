<?php

$temperature = $_POST["temperature"];
$humidite = $_POST["humidite"];

$temperature_file = "data.json";
$data_entry = '{"temperature":'.$temperature.', "humidite":'.$humidite.'}';

echo "<span>La température est de : ".$temperature."</span>";


if(isset($temperature))
{
    $file = fopen($temperature_file,"r+");
    fwrite($file,$data_entry);
    fclose($file); 
    print_r(error_get_last());
}

?>