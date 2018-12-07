<?php
/*
$temperature = $_POST["temperature"];

echo $temperature;*/

if (isset($_POST['temperature'])){
    
    $temperature = $_POST["temperature"];
    $filename_temperature = "data.json";
    
    $op = file_put_contents($filename_temperature, $temperature);
    if (! $op) {
        
        echo "store error";
    }
    
}
    else {
        
        echo "data error";
    }
?>
<!--{"temperature":"55","humidite":"10"}-->