<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


//modelo creado con artisan para recoger los datos de la base de datos 'searchInfo'
class searchInfo extends Model
{
    //aqui podria usar otra base de datos
    //pero automaticamente ya se conecta a la que se llama 'searchInfo'
    protected $table = 'search_info';
    
    //use HasFactory;
}
