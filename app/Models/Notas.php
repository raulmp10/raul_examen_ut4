<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
//modelo de nuestra clase notas
class Notas extends Model
{
    use HasFactory;
  protected $fillable = ['nombre', 'nombre_modulo' , 'calificacion'];

}
