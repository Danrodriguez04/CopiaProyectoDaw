<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoCita extends Model
{
    use HasFactory;
    protected $table = "tipos_cita";


    protected $fillable = [
        'precio',
        
    ];}
