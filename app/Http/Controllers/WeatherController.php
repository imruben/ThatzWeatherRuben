<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

//usamos el archivo model searchInfo (que conecta con la base de datos searchInfo)
use App\Models\searchInfo;


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
            $zip_code = $inputZipCode;

            //lenguaje
            $language = 'es';

            //API TEMP ACTUAL
            $infoWeatherCurrent = HTTP::get('api.openweathermap.org/data/2.5/weather?zip='.$zip_code.',es&units='.$units.'&lang='.$language.'&appid='.$api_key.'');
            $infoWeatherCurrentArray = $infoWeatherCurrent->json();

            //API PREVISION CADA 3
            $infoWeatherForecast = HTTP::get('api.openweathermap.org/data/2.5/forecast/?zip='.$zip_code.',es&units='.$units.'&lang='.$language.'&appid='.$api_key.'');
            $infoWeatherForecastArray = $infoWeatherForecast->json();
                 
        
            $informacionBusqueda = new SearchInfo();
            $informacionBusqueda-> zip_code = $inputZipCode;
           /* try {
                $informacionBusqueda-> zip_code = $inputZipCode;
            }
            catch(QueryException $e){
                $informacionBusqueda-> SearchInfo::update('zip_code' , $inputZipCode);
            }
            
            $informacionBusqueda->save();*/

        return view('indexWeather', compact('infoWeatherCurrentArray'), compact('infoWeatherForecastArray'));


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

    public function store() {
        

        //lo añadimos a la columna zip_code de la base de datos 
        

        

        error_log($inputZipCode);

        //Devolvemos a la 
        return redirect('/weatherInfo')->with('zipcode', $inputZipCode)
                                        ->with('pepe','pepe');
    }

  
    

}

