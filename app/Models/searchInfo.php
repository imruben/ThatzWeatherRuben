<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


//modelo creado con artisan para recoger los datos de la base de datos 'searchInfo'
class searchInfo extends Model
{
    //cargo la tabla de la base de datos que quiero porque nose porque no la pilla automaticamente
    protected $table = 'search_info';
    
    //use HasFactory;
}

