<!--<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8">

    <link type="text/css" rel="stylesheet" href="main.css">

</head>

<body>

    <h1>Température</h1>



    <?php
  
    $file='data.txt'; 
    $contenu=file_get_contents($file); 
    echo $contenu ;
    $bargraph_height = 161 + $data->temperature * 4;
    $bargraph_top = 315 + $data->temperature * 4;
    ?>

    <?php
    $data = json_decode($contenu);
    
    
    ?>
    <p>il fait
        <?php echo $data->temperature ?>° avec
        <?php echo $data->humidite ?>% d'humidité. </p>

    <br>

    <div id="thermometer">
        <div id="bargraph" style="height: <?php echo $bargraph_height; ?>px; top: <?php echo $bargraph_top; ?>px; "></div>
    </div>

</body>

</html>
-->
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <link rel="stylesheet" href="main.css">
    <meta charset="utf-8">
    <title>Thermometre</title>
  </head>
  <body>
    <h1>Température</h1>
    <?php
    $json = file_get_contents('data.json');

    $obj = json_decode($json);
    echo "Il fait ".$obj->temperature." °C <br>";
    echo "Il fait ".$obj->humidite."% d'humidité <br>";


    $date = date("d-m-Y");
    $heure = date('H:i');

    echo "Nous sommes le " .$date. " et il est ".$heure."<br>";

    $filename = 'data.json';
      if (file_exists($filename)) {
        echo "La météo a été update le : " . date("d-m-Y H:i:s.", filectime($filename));
      }

    $bargraph_height = 161 + $obj->temperature * 4;
    $bargraph_top = 315 - $obj->temperature * 4;
    ?>
    <div id="thermometer">
      <div id="bargraph" style="height:<?php echo $bargraph_height; ?>px; top:<?php echo $bargraph_top; ?>px;">
      </div>
    </div>

  </body>
</html>
