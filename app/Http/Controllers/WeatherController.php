<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

//usamos el archivo model searchInfo (que conecta con la base de datos searchInfo)
use App\Models\searchInfo;


class WeatherController extends Controller
{

    public function store() {

        $informacionBusqueda = new SearchInfo();

        //recogemos el cp del form del view Index
        $inputZipCode = request('zipCode');

        //lo añadimos a la columna zip_code de la base de datos 
        $informacionBusqueda-> zip_code = $inputZipCode;

        $informacionBusqueda->save();

        return redirect('/weatherInfo');
    }

    //index se suele usar para mostrar la vista y los records
    public function indexWeather() {
       
        //API KEY OPENWEATHER (CON CUENTA GRATIS)
        $api_key = '7d03ed723e4aaa7cd7643a7ace8655d9';
        //Unidades en las que se mostrará el tiempo (grados celsius en este caso)
        $units = 'metric';

        $zip_code = request('zipCode');

        //Codigo postal 
        //$zip_code = '08860';
        //lengua
        $language = 'es';


        //API TEMP ACTUAL
        $infoWeatherCurrent = HTTP::get('api.openweathermap.org/data/2.5/weather?zip='.$zip_code.',es&units='.$units.'&lang='.$language.'&appid='.$api_key.'');
        $infoWeatherCurrentArray = $infoWeatherCurrent->json();


        //API PREVISION 5 DIAS 

        $infoWeatherForecast = HTTP::get('api.openweathermap.org/data/2.5/forecast/?zip='.$zip_code.',es&units='.$units.'&lang='.$language.'&appid='.$api_key.'');
        $infoWeatherForecastArray = $infoWeatherForecast->json();
          
        //API PREVISION 3 HORAS 

        
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

  


    /*
   //Show se suele usar para mostrar un solo item o record (como un id) 'Wheather/{id}'
    public function showInfo($ZipCode) {
        


        return view ('show',);
        
    }

    //Create se suele usar para crear otra view por ejemplo para un form para añadir algo a la database 'Weather/create'
    public function CreateInfo() {
        
        
    }
*/
}

