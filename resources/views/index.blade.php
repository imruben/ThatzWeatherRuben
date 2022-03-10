<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ThatzWeather</title>
    <!-- Scripts boostrap -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles boostrap-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <style>
        /*Pongo la foto del background aqui con css porque no he sabido hacerlo con boostrap*/
        body{
            background-image: url("/img/fondo.png");
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover; 
        }

        #input{
            background-color:rgba(0,0,0,0); 
        }      
    }
    </style>
</head>

<body>
    
    <div class="container mt-5 ">

        <div class="row justify-content-center">
             <div class="col-11 col-lg-7 text-center">
                <img class="img-fluid" id="logo" src="/img/logo.png" alt="">
            </div>
        </div>

        
        <div class="row justify-content-center mt-5">
            <div class="col-11 col-lg-5">
                <p class=" lead text-center my-5 text-light fw-bold">Entérate del tiempo en la zona exacta que te interesa buscando por código postal.</p>
            </div>
        </div>

        <!-- ALERT DE BOOSTRAP QUE SOLO SALDRA SI HAY UN ERROR GUARDADO EN LA SESION -->
        @if(session('mensaje'))
        <div class="row justify-content-center">
            <div class="col-11 col-lg-5">
            <div class="alert alert-danger" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             <p class="lead">{{ session('mensaje') }}</p>
            </div>
        </div>
        </div>
        @endif
                <!-- form que recibe el codigo postal y lo envia a /index-->
                      <form action="/weatherInfo" method="POST">
                        <!--evita el error 419-->
                        @csrf
        <div class="row text-light justify-content-center">
            <div class="col-11 col-lg-6">   
                
                <input maxlength="5" minlength="5" class="form-control text-light fs-4 border-2 p-2 px-3" id="input" name ="zipCode" placeholder="Introduce el código postal">  
                
            </div>
        </div>

        <div class="row mt-4 justify-content-center">
            <div class="col-11 col-lg-6">
                <button class="btn btn-primary btn-lg text-light fs-3 shadow fw-bold w-100" type="submit" role="button" aria-disabled="true">Buscar
                <i class="bi bi-search ms-2"></i></button>  
            </div>            
        </div>
          </form>
            
        <div class="row justify-content-center text-light text-center my-5">
            <div class="col-11 col-lg-6">
                <p class="lead fw-bold">¡Que la lluvia no te pare!</p>
            </div>
        </div>

    </div>


</body>
</html>