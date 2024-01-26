<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormatoCita extends Model
{
    use HasFactory;
    protected $table = "formato_cita";


    protected $fillable = [
        'codigo_traduccion',
        'tiempo_aproximado',
        'precio'
    ];

}
