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
    <style>

        body{
            background-image: url("/img/fondo.png");
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover; 
        } 

    }
    </style>
    
</head>
<body>
    
    <div class="container-fluid w-75">
        <!-- Row con logo -->
        <div class="row justify-content-center mt-5">
            <div class="col-11 col-lg-6 text-center">
                <img class="img-fluid" id="logo" src="/img/logo.png" alt="">
            </div>
            <div class="col-11 col-lg-7 text-end">
                <p class="fs-3 text-light ">Que la lluvia no te pare!</p>                
            </div>
        </div>

        <!-- Row con todo lo demas -->
        <div class="row mt-5 ">
            <!-- Caja tiempo busqueda -->
            <div class="col-12 col-lg-8 bg-secondary shadow">
                <!-- Info arriba -->
                <div class="row align-items-center m-3">
                    <div class="col ">       
                        <p class="text-light fs-5">Código Postal: 08860</p>
                        <p class="text-light fs-5"> Ciudad: <em class="fw-bold">{{$infoWeatherCurrentArray['name']}} </em></p>
                    </div>
                    <div class="col text-light ">
                        <i class="bi bi-search me-2"></i></button>  
                        <a class= "text-light fs-5"href="/Home">Buscar otra zona</a>
                    </div>
                </div>
                <!-- Row con todas temp -->
                <div class="row text-light p-4 mb-5">
                    <!-- Columna temp actual -->
                    <div class="col-12 col-lg-5 border-end text-center">
                        <div class="row mb-3">
                            <p class="fs-4">Ahora</p>                                                    
                        </div>
                        <div class="row align-items-center">
                            <div class="col-5">
                                <i class="fa-solid fa-bolt fa-5x"></i>
                            </div>
                            <div class="col-5">
                                <div class="fs-3 fw-bold">{{$infoWeatherCurrentArray['weather']['0']['description']}}</div>
                                <p class="display-4 fw-bold">{{$infoWeatherCurrentArray['main']['temp']}}º</p>
                            </div>    
                            <div>                                
                            </div>        
                        </div>
                    </div>
                        <!-- Columna temp proximas horas -->
                    <div class="col-12 col-lg-7 text-center mt-4">
                        <div class="row mb-3">
                            <p class="fs-4">Próximas horas</p>
                        </div>
                        <div class="row">
                            <div class="col-4 col-lg-3 border-end">                              
                                <p>{{$infoWeatherForecastArray['list']['0']['dt_txt']}}</p>
                                <i class="fa-solid fa-cloud fa-3x"></i> 
                                <p>{{$infoWeatherForecastArray['list']['0']['weather']['0']['description']}}</p>
                                <p class="fw-bold fs-5">{{$infoWeatherForecastArray['list']['0']['main']['temp']}}º</p>                                 
                            </div>
                            <div class="col-4 col-lg-3 border-end">
                                <p>{{$infoWeatherForecastArray['list']['1']['dt_txt']}}</p>
                                <i class="fa-solid fa-cloud fa-3x"></i> 
                                <p>{{$infoWeatherForecastArray['list']['1']['weather']['0']['description']}}</p>
                                <p class="fw-bold fs-5">{{$infoWeatherForecastArray['list']['1']['main']['temp']}}º</p>     
                            </div>
                            <div class="col-4 col-lg-3 border-end">
                                <p>{{$infoWeatherForecastArray['list']['2']['dt_txt']}}</p>
                                <i class="fa-solid fa-cloud fa-3x"></i> 
                                <p>{{$infoWeatherForecastArray['list']['2']['weather']['0']['description']}}</p>
                                <p class="fw-bold fs-5">{{$infoWeatherForecastArray['list']['2']['main']['temp']}}º</p>     
                            </div>
                            <div class="col-4 col-lg-3">         
                                <p>{{$infoWeatherForecastArray['list']['3']['dt_txt']}}</p>
                                <i class="fa-solid fa-cloud fa-3x"></i> 
                                <p>{{$infoWeatherForecastArray['list']['3']['weather']['0']['description']}}</p>
                                <p class="fw-bold fs-5">{{$infoWeatherForecastArray['list']['3']['main']['temp']}}º</p>                                 
                            </div>
                        </div>
                    </div>                   
                </div>
            </div>
                <!-- Columna con top5 temp mas frias -->
            <div class="col-12 col-lg-4">
                <div class="row text-center">
                    <p class="fs-3 text-light mb-3">Top 5 de las zonas más frias según tus busquedas</p>
                </div>
                <div class="row align-items-center border-bottom">
                    <div class="col text-center ">
                        <p class="text-light display-6">1.</p>
                    </div>
                    <div class="col">
                        <p class="text-light display-4">-3º</p>
                    </div>
                    <div class="col">
                        <p class="text-light fs-6 fw-bold">CP: 08860</p>
                        <p class="text-light fs-6 fw-bold">Ciudad: Barcelona</p>                         
                    </div>    
                </div>
                <div class="row align-items-center border-bottom">
                    <div class="col text-center ">
                        <p class="text-light display-6">2.</p>
                    </div>
                    <div class="col">
                        <p class="text-light display-4">-3º</p>
                    </div>
                    <div class="col">
                        <p class="text-light fs-6 fw-bold">CP: 08860</p>
                        <p class="text-light fs-6 fw-bold">Ciudad: Barcelona</p>                         
                    </div>
                </div>
                <div class="row align-items-center border-bottom">
                    <div class="col text-center ">
                        <p class="text-light display-6">3.</p>
                    </div>
                    <div class="col">
                        <p class="text-light display-4">-3º</p>
                    </div>
                    <div class="col">
                        <p class="text-light fs-6 fw-bold">CP: 08860</p>
                        <p class="text-light fs-6 fw-bold">Ciudad: Barcelona</p>                         
                    </div>
                </div>
                <div class="row align-items-center border-bottom">
                    <div class="col text-center ">
                        <p class="text-light display-6">4.</p>
                    </div>
                    <div class="col">
                        <p class="text-light display-4">-3º</p>
                    </div>
                    <div class="col">
                        <p class="text-light fs-6 fw-bold">CP: 08860</p>
                        <p class="text-light fs-6 fw-bold">Ciudad: Barcelona</p>                         
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col text-center ">
                        <p class="text-light display-6">5.</p>
                    </div>
                    <div class="col">
                        <p class="text-light display-4">-3º</p>
                    </div>
                    <div class="col">
                        <p class="text-light fs-6 fw-bold">CP: 08860</p>
                        <p class="text-light fs-6 fw-bold">Ciudad: Barcelona</p>                         
                    </div>
                </div>
            </div>
            
            



        </div>




       </div>
 
      <!-- <br><br>
        <section>
        <div class="container justify-content-center">  
       <p>ICONOS</p>
       <!-- 01d 
       <i class="fa-solid fa-sun"></i>
       <!-- 02d     <i class="fa-solid fa-cloud-sun"></i>
       <!-- 03d        <i class="fa-solid fa-cloud"></i>
       <!-- 04d        <i class="fa-solid fa-cloud-meatball"></i>
       <!-- 09d
       <i class="fa-solid fa-cloud-rain"></i>
       <!-- 10d        <i class="fa-solid fa-cloud-sun-rain"></i>
       <!-- 11d        <i class="fa-solid fa-bolt"></i>
       <!-- 13d        <i class="fa-solid fa-snowflake"></i>
       <!-- 50d        <i class="fa-solid fa-smog"></i>     
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
        </section>-->



</body>
</html>