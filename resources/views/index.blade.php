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

    <style>
       
        body{
            width:100%;
            background-image: url("/img/fondo.png");
            height: 100%;

            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        #logo{
            height:150px;
            width:auto;
        }

        #input{
            background-color:rgba(0,0,0,0);
       
    }


    </style>
</head>

<body>
    
    <div class="container w-50 mt-5">

        <div class="row justify-content-center ">
            <img class="img-fluid" id="logo" src="/img/logo.png" alt="">
        </div>
      
        <div class="row justify-content-center mt-5">
        <p class=" lead text-center my-5 text-light fw-bold">Entérate del tiempo en la zona exacta que te interesa buscando por código postal.</p>
        </div>

        <div class="row justify-content-center align-items-center text-light">
        <input type="email" class="form-control text-light fs-4 border-2 p-2 px-3" id="input" placeholder="Introduce el código postal">  
        </div>

        <div class="row justify-content-center mt-4">
        <!--<input class=" lead btn btn-lg btn-primary text-light fw-bold" type="submit" value="Buscar">-->
        <a href="#" class="btn btn-primary btn-lg text-light fs-3 shadow fw-bold" type="submit" role="button" aria-disabled="true">Buscar
        <i class="bi bi-search ms-2"></i>
        </a> 
        
        </div>

        <div class="row justify-content-center text-light text-center my-5">
        <p class="lead fw-bold">¡Que la lluvia no te pare!</p>
        </div>

    </div>

</body>
</html>