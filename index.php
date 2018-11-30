<!DOCTYPE html>

<html>

<head>

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
    
$json_data = file_get_contents('data.txt');
$infos = json_decode($json_data);

?>

<body>

    <h1>Températures !</h1>

    <div>
        <p>Il fait actuellement
            <?php echo $infos->temperature; ?>° et le taux d'humidité est de
            <?php echo $infos->humidite; ?>%.</p>
    </div>

    <div class="temp"></div>
    <img src="img/thermometer.jpg" alt="Image d'un thermometre">










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
