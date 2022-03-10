<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

//use Symfony\Component\HttpKernel\Exception\HttpException;

//usamos el archivo model searchInfo (que conecta con la base de datos searchInfo)
use App\Models\searchInfo;

//funcion que dependiendo de la informacion "main" de la api, devuelve un icono de FontAwesome diferente 
function getIcon (string $maindescription) {

        if($maindescription == 'Clouds'){
            $icon = 'fa-solid fa-cloud';
        }
        elseif($maindescription == 'Thunderstorm'){
            $icon = 'fa-solid fa-bolt';
        }
        elseif($maindescription == 'Drizzle'){
            $icon = 'fa-solid fa-cloud-rain';
        } 
        elseif($maindescription == 'Rain'){
            $icon = 'fa-solid fa-cloud-showers-heavy';
        }
        elseif($maindescription == 'Snow'){
            $icon = 'fa-solid fa-snowflake';
        }
        elseif($maindescription == 'Clear'){
            $icon = 'fa-solid fa-sun';
        }else{
            $icon = 'fa-solid fa-smog'; 
        }
    return $icon;
    
    }

class WeatherController extends Controller
{

  
    public function zipCodePost() {
       
        //recogemos el cp del form del view Index
        $inputZipCode = request('zipCode');

        //RECOGEMOS DATOS DE LA API 

            //API KEY OPENWEATHER (CON CUENTA GRATIS)
            $api_key = '7d03ed723e4aaa7cd7643a7ace8655d9';

            //Unidades en las que se mostrará el tiempo (grados celsius en este caso)
            $units = 'metric';

            //Codigo postal 
            //$zip_code = $inputZipCode;
            $zip_code = $inputZipCode;

            //lenguaje de las descripciones del tiempo 
            $language = 'es';

            //API CURRENT WEATHER           
            $infoWeatherCurrent = HTTP::get('api.openweathermap.org/data/2.5/weather?zip='.$zip_code.',es&units='.$units.'&lang='.$language.'&appid='.$api_key.'');

            //si la api nos devuelve un error en el json, volvemos al buscador con una variable de sesion con el mensaje
            if($infoWeatherCurrent=='{"cod":"404","message":"city not found"}'){
                return redirect('/Home')->with('mensaje', 'No se ha encontrado una ciudad con ese código postal (Recuerda que solo se acepta España)');
            }elseif($infoWeatherCurrent=='{"cod":401, "message": "Invalid API key. Please see http://openweathermap.org/faq#error401 for more info."}'){
                return redirect('/Home')->with('mensaje', 'Hay un problema con la API key de OpenWeather');
            }elseif($zip_code == null){
                return redirect('/Home')->with('mensaje', 'Por favor introduce un codigo postal');   
            }
            //$infoWeatherCurrentArray = $infoWeatherCurrent->json();

            $tempactual = $infoWeatherCurrent['main']['temp'];
            $maindescactual = $infoWeatherCurrent['weather']['0']['main'];
            //$maindescactual = 'Thunderstorm';
            $descriptactual = $infoWeatherCurrent['weather']['0']['description'];
            $iconactual = getIcon($maindescactual);
            $city = $infoWeatherCurrent['name'];
            //cojo la latitud y longitud para usarlo en la otra api (la one time call no deja usar codigo postal para buscar)
            $lat = $infoWeatherCurrent['coord']['lat'];
            $lon = $infoWeatherCurrent['coord']['lon'];
            
            //ICONOS DEPENDIENDO DE LA INFORMACION "MAIN" DEL JSON (8 POSIBILIDADES)
                     
            //API ONE TIME CALL (INCLUYE 7 DIAS Y 48 HORAS FORECAST(excluyo minutos,actual y alertas de la llamada))
            $infoWeatherForecast = HTTP::get('//api.openweathermap.org/data/2.5/onecall?lat='.$lat.'&lon='.$lon.'&exclude=current,minutely,alerts&units='.$units.'&lang='.$language.'&appid=7d03ed723e4aaa7cd7643a7ace8655d9');
                
            //$infoWeatherForecastArray = $infoWeatherForecast->json();

            $temphour1 = $infoWeatherForecast['hourly']['1']['temp'];
            $temphour2 = $infoWeatherForecast['hourly']['2']['temp'];
            $temphour3 = $infoWeatherForecast['hourly']['3']['temp'];
            $iconhour1 = getIcon($infoWeatherForecast['hourly']['2']['weather']['0']['main']);
            $iconhour2 = getIcon($infoWeatherForecast['hourly']['2']['weather']['0']['main']);
            $iconhour3 = getIcon($infoWeatherForecast['hourly']['3']['weather']['0']['main']);
            $descripthour1 = $infoWeatherForecast['hourly']['1']['weather']['0']['description'];
            $descripthour2 = $infoWeatherForecast['hourly']['2']['weather']['0']['description'];
            $descripthour3 = $infoWeatherForecast['hourly']['3']['weather']['0']['description'];
            
            $tempday1 = $infoWeatherForecast['daily']['1']['temp']['day'];
            $tempday2 = $infoWeatherForecast['daily']['2']['temp']['day'];
            $tempday3 = $infoWeatherForecast['daily']['3']['temp']['day'];
            $tempday4 = $infoWeatherForecast['daily']['4']['temp']['day'];
            $tempday5 = $infoWeatherForecast['daily']['5']['temp']['day'];
            $iconday1 = getIcon($infoWeatherForecast['daily']['1']['weather']['0']['main']);
            $iconday2 = getIcon($infoWeatherForecast['daily']['2']['weather']['0']['main']);
            $iconday3 = getIcon($infoWeatherForecast['daily']['3']['weather']['0']['main']);
            $iconday4 = getIcon($infoWeatherForecast['daily']['4']['weather']['0']['main']);
            $iconday5 = getIcon($infoWeatherForecast['daily']['5']['weather']['0']['main']);
            $descriptday1 = $infoWeatherForecast['daily']['1']['weather']['0']['description'];
            $descriptday2 = $infoWeatherForecast['daily']['2']['weather']['0']['description'];
            $descriptday3 = $infoWeatherForecast['daily']['3']['weather']['0']['description'];
            $descriptday4 = $infoWeatherForecast['daily']['4']['weather']['0']['description'];
            $descriptday5 = $infoWeatherForecast['daily']['5']['weather']['0']['description'];

            

            


            $informacionBusqueda = new SearchInfo();
            $informacionBusqueda-> zip_code = $inputZipCode;
            $informacionBusqueda-> name = $city;
            $informacionBusqueda-> current_temp = $tempactual;
            $informacionBusqueda-> day1_temp = $tempday1;
            $informacionBusqueda-> day2_temp = $tempday2;
            $informacionBusqueda-> day3_temp = $tempday3;
            $informacionBusqueda-> day4_temp = $tempday4;
            $informacionBusqueda-> day5_temp = $tempday5;          
            $informacionBusqueda->save();
            
            $lolo = $informacionBusqueda::find(2);
            $top5info =  $informacionBusqueda::orderBy('current_temp')->get();

            
            
            

            //devuelvo la view IndexWeather junto con todas las variables que he sacado de la api
            return view('indexWeather',['zipcode'=>$zip_code,'city'=>$city,'tempactual' =>$tempactual,'descriptactual' =>$descriptactual,'iconactual'=>$iconactual, 'maindescactual'=>$maindescactual,
            'temphour1' =>$temphour1,'temphour2' =>$temphour2,'temphour3' =>$temphour3,'descripthour1'=>$descripthour1,'descripthour2'=>$descripthour2,'descripthour3'=>$descripthour3,
            'iconhour1'=>$iconhour1,'iconhour2'=>$iconhour2,'iconhour3'=>$iconhour3,
            'tempday1' =>$tempday1,'tempday2' =>$tempday2,'tempday3' =>$tempday3,'tempday4' =>$tempday4,'tempday4' =>$tempday4,'tempday5' =>$tempday5,
            'descriptday1'=>$descriptday1,'descriptday2'=>$descriptday2,'descriptday3'=>$descriptday3,'descriptday4'=>$descriptday4,'descriptday5'=>$descriptday5,
            'iconday1'=>$iconday2,'iconday2'=>$iconday2,'iconday3'=>$iconday3,'iconday4'=>$iconday4,'iconday5'=>$iconday5,
            'top5info' => $top5info,'lolo' => $lolo
        ]);
        



        //$WeatherbyZipCode = Weather::find($id);

        //$weatherZipCode = Weather::find($ZipCode);

        //recoge la informacion de la base de datos
        //$WeatherInfo = Weather::all();
        //$WeatherInfo = Weather::orderBy('city','desc')->get();
        //$WeatherInfo = Weather::where('city','Barcelona')->get();
        //$WeatherInfo = Weather::latest()->get();

        //enviamos la informacion de la base de datos en la variable
        //"WeatherInfo i la view
        /*return view('indexWeather', [
            //'weatherInfo' => $WeatherInfo,
            'weatherZipCode'=> $weatherZipCode,
        ]);  */

    }

    //funcion para guardar los datos que necesitamos para el top5 en la base de datos
    public function store() {

       

       
        //lo añadimos a la columna zip_code de la base de datos 
        
    }

  
    

}

