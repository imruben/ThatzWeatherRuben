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

    /*Pongo la foto del background aqui con css porque no he sabido hacerlo con boostrap*/
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
            <div class="col-12 col-lg-9 bg-secondary shadow">
                <!-- Info arriba -->
                <div class="row align-items-center m-3">
                    <div class="col ">       
                        <p class="text-light fs-5">Código Postal: {{$zipcode}}</p>
                        <p class="text-light fs-5">Ciudad: <em class="fw-bold">{{ $city }} </em></p>
                    </div>
                    <div class="col text-light ">
                        <i class="bi bi-search me-2"></i></button>  
                        <a class= "text-light fs-5"href="/Home">Buscar otra zona</a>
                    </div>
                </div>
                <!-- Row con todas temp -->
                <div class="row text-light p-4 ">
                    <!-- Columna temp actual -->
                    <div class="col-12 col-lg-12 border-bottom text-center">
                        <div class="row">
                            <p class="fs-4">Ahora</p>                                                    
                        </div>
                        <div class="row">
                            <div class="col-5">
                            <i class="{{$iconactual}} fa-10x"></i> 
                            </div>
                            <div class="col-5">
                                <div class="fs-3 fw-bold">{{ $descriptactual }}</div>
                                <p class="display-5 fw-bold">{{ $tempactual }}º</p>
                            </div>    
                            <div>                                
                            </div>        
                        </div>
                    </div>
                        <!-- Columna temp proximas horas -->
                    <div class="col-12 col-lg-8 text-center mt-4 border-end ">
                        <div class="row mb-3 ">
                            <p class="fs-4">Próximas horas</p>
                        </div>
                        <div class="row">
                            <div class="col-4 col-lg-3 border-end">                              
                                <p>Ahora</p>
                                <i class="{{$iconactual}} fa-2x"></i> 
                                <p>{{$descriptactual}}</p>
                                <p class="fw-bold fs-5">{{$tempactual}}º</p>                                 
                            </div>
                            <div class="col-4 col-lg-3 border-end">
                                <p>1 hora</p>
                                <i class="{{$iconhour1}} fa-2x"></i> 
                                <p>{{$descripthour1}}</p>
                                <p class="fw-bold fs-5">{{$temphour1}}º</p>     
                            </div>
                            <div class="col-4 col-lg-3 border-end">
                                <p>2 horas</p>
                                <i class="{{$iconhour2}} fa-2x"></i> 
                                <p>{{$descripthour2}}</p>
                                <p class="fw-bold fs-5">{{$temphour2}}º</p>     
                            </div>
                            <div class="col-4 col-lg-3">         
                                <p>3 horas</p>
                                <i class="{{$iconhour3}} fa-2x"></i> 
                                <p>{{$descripthour3}}</p>
                                <p class="fw-bold fs-5">{{$temphour3}}º</p>                                 
                            </div>
                        </div>
                    </div>  
                    <!-- COLUMNA CON CARROUSEL PROXIMOS DIAS -->
                    <div class="col-12 col-lg-4 text-center mt-4">
                    <div class="row mb-3 ">
                            <p class="fs-4">Próximos dias</p>
                    </div>
                    <div class="row">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">                       
                            <div class="carousel-inner">
                            <div class="carousel-item active">
                                <p>Mañana</p>
                                <i class="{{$iconday1}} fa-2x"></i> 
                                <p>{{$descriptday1}}</p>
                                <p class="fw-bold fs-5">{{$tempday1}}º</p> 
                            </div>
                                <div class="carousel-item">
                                <p>Pasado mañana</p>
                                <i class="{{$iconday2}} fa-2x"></i> 
                                <p>{{$descriptday2}}</p>
                                <p class="fw-bold fs-5">{{$tempday2}}º</p> 
                                </div>
                                <div class="carousel-item">
                                <p>Dia 3</p>
                                <i class="{{$iconday3}} fa-2x"></i> 
                                <p>{{$descriptday3}}</p>
                                <p class="fw-bold fs-5">{{$tempday3}}º</p> 
                                </div>
                                <div class="carousel-item">
                                <p>Dia 4</p>
                                <i class="{{$iconday4}} fa-2x"></i> 
                                <p>{{$descriptday4}}</p>
                                <p class="fw-bold fs-5">{{$tempday4}}º</p> 
                                </div>
                                <div class="carousel-item">
                                <p>Dia 5</p>
                                <i class="{{$iconday5}} fa-2x"></i> 
                                <p>{{$descriptday5}}</p>
                                <p class="fw-bold fs-5">{{$tempday5}}º</p> 
                                </div>
                                
                            </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                 </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                            
                        </div>
                    </div> 
                    </div>               
                </div>
            </div>
                <!-- Columna con top5 temp mas frias -->
            <div class="col-12 col-lg-3">
                <div class="row text-center">
                    <p class="fs-3 text-light mb-3">Top 5 de las zonas más frias según tus busquedas</p>
                </div>
                <div class="row align-items-center border-bottom">
                    <div class="col text-center ">
                        <p class="text-light display-6">1.</p>
                    </div>
                    <div class="col">
                        <p class="text-light display-4">{{$top5info[0]->current_temp}}</p>
                    </div>
                    <div class="col">
                        <p class="text-light fs-6">CP: {{$top5info[0]->zip_code}}</p>
                        <p class="text-light fs-6">Ciudad: {{$top5info[0]->name}}</p>                         
                    </div>    
                </div>
                <div class="row align-items-center border-bottom">
                    <div class="col text-center ">
                        <p class="text-light display-6">2.</p>
                    </div>
                    <div class="col">
                        <p class="text-light display-4">{{$top5info[1]->current_temp}}</p>
                    </div>
                    <div class="col">
                        <p class="text-light fs-6 fw-bold">CP: {{$top5info[1]->zip_code}}</p>
                        <p class="text-light fs-6 fw-bold">Ciudad: {{$top5info[1]->name}}</p>                         
                    </div>
                </div>
                <div class="row align-items-center border-bottom">
                    <div class="col text-center ">
                        <p class="text-light display-6">3.</p>
                    </div>
                    <div class="col">
                        <p class="text-light display-4">{{$top5info[2]->current_temp}}</p>
                    </div>
                    <div class="col">
                        <p class="text-light fs-6 fw-bold">CP: {{$top5info[2]->zip_code}}</p>
                        <p class="text-light fs-6 fw-bold">Ciudad: {{$top5info[2]->name}}</p>                         
                    </div>
                </div>
                <div class="row align-items-center border-bottom">
                    <div class="col text-center ">
                        <p class="text-light display-6">4.</p>
                    </div>
                    <div class="col">
                        <p class="text-light display-4">{{$top5info[3]->current_temp}}</p>
                    </div>
                    <div class="col">
                        <p class="text-light fs-6 fw-bold">CP: {{$top5info[3]->zip_code}}</p>
                        <p class="text-light fs-6 fw-bold">Ciudad: {{$top5info[3]->name}}</p>                         
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col text-center ">
                        <p class="text-light display-6">5.</p>
                    </div>
                    <div class="col">
                        <p class="text-light display-4">{{$top5info[4]->current_temp}}</p>
                    </div>
                    <div class="col">
                        <p class="text-light fs-6 fw-bold">CP: {{$top5info[4]->zip_code}}</p>
                        <p class="text-light fs-6 fw-bold">Ciudad: {{$top5info[4]->name}}</p>                         
                    </div>
                </div>
            </div>
            
        </div>

       </div>


</body>



</html>