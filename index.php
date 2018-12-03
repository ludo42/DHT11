<!DOCTYPE html>
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
        <div id="bargraph" style="height: <?php echo $bargraph_height = 161 ; ?> " "top: <?php echo $bargraph_top = 315; ?>"></div>
    </div>

</body>

</html>
