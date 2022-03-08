<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ThatzWeather</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    
    <!-- Kit iconos  -->
    <script src="https://kit.fontawesome.com/e71ce77d0f.js" crossorigin="anonymous"></script>

    
</head>
<body>
        <h2 class="text-center m-5">WEATHER RESULTS</h2>
<?php
   /* print_r($infoWeatherCurrentArray);
    print "<br><br><br>";
    print_r($infoWeatherForecastArray);*/
?>      
       <br><br>
        <section>

        <div class="container justify-content-center">
            
       
      
       <p>ICONOS</p>
       <!-- 01d -->
       <i class="fa-solid fa-sun"></i>
       <!-- 02d -->
       <i class="fa-solid fa-cloud-sun"></i>
       <!-- 03d -->
       <i class="fa-solid fa-cloud"></i>
       <!-- 04d -->
       <i class="fa-solid fa-cloud-meatball"></i>
       <!-- 09d -->
       <i class="fa-solid fa-cloud-rain"></i>
       <!-- 10d -->
       <i class="fa-solid fa-cloud-sun-rain"></i>
       <!-- 11d -->
       <i class="fa-solid fa-bolt"></i>
       <!-- 13d -->
       <i class="fa-solid fa-snowflake"></i>
       <!-- 50d -->
       <i class="fa-solid fa-smog"></i>
      
        
        <p>Ciudad: {{$infoWeatherCurrentArray['name']}}</p>
        <p>Temperatura actual: {{$infoWeatherCurrentArray['main']['temp']}}</p><br>
        <p>Cielo: {{$infoWeatherCurrentArray['weather']['0']['description']}}</p><br><br><br>
        <p>Icono: {{$infoWeatherCurrentArray['weather']['0']['icon']}}</p>
        <h2>TEMPERATURA 5 DIAS</h2>
        <p>DIA 1:  {{$infoWeatherForecastArray['list']['0']['main']['temp']}} </p>
        <p>DIA 2:  {{$infoWeatherForecastArray['list']['1']['main']['temp']}} </p>
        <p>DIA 3:  {{$infoWeatherForecastArray['list']['2']['main']['temp']}} </p>
        <p>DIA 4:  {{$infoWeatherForecastArray['list']['3']['main']['temp']}} </p>
        <p>DIA 5:  {{$infoWeatherForecastArray['list']['4']['main']['temp']}} </p>

        <p>TEMPERATURA DE 5 BUSQUEDAS (ORDENADAS DE MAS FRIAS A MENOS)</p>

        </div>

        </section>
</body>
</html>