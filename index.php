<!DOCTYPE html>

<html>

<head>
    
    <meta http-equiv="refresh" content="1">

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--    __________Bootstrap____________-->

    <!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->

    <!--     __________Bootstrap____________-->

    <!--    __________Jquery____________-->

    <!--     <script src="script/jquery-3.3.1.js"></script>-->

    <!--    __________Jquery____________-->

    <link href="style/index.css" type="text/css" rel="stylesheet">

    <title>DHT11</title>

</head>

<?php
    
$json_data = file_get_contents('data.json');
$infos = json_decode($json_data);
$bargraphWeight = 161 + $infos->temperature * 4;
$bargraphTop = 315 -  $infos->temperature * 4;
    
?>

<body>

    <h1>Températures !</h1>

    <div>
        <p>Il fait actuellement
            <?php echo $infos->temperature; ?>° et le taux d'humidité est de
            <?php echo $infos->humidite; ?>%.</p>
        <?php
        
        $filename = 'data.txt';
               {
              echo "La météo à été mise à jour le : " . date("d-m-Y         H:i:s.", filectime($filename));
              }
        ?>
        
    </div>

    <div id="thermometer">
        <div id="bargraph" style="height: <?php echo $bargraphWeight; ?>px; top: <?php echo $bargraphTop; ?>px;"></div>
    </div>









    <!--    __________Bootstrap____________-->

    <!--
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
-->

    <!--    __________Bootstrap____________-->



    <script src="script/index.js"></script>

</body>


</html>
