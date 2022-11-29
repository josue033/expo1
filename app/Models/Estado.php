<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Estado extends Model
{
    use HasFactory;
   use softdeletes;
    protected $table = 'estado';
    protected $fillable = [
       'estado_animo',
       'emocion',
       'reacciones',
       'situacion',
       'pensamientos',
        'comportamiento',
        'fecha'
    ];
    protected $dates = ['fecha'];
    // public const REACCIONES = ['Sudor','Mareo','Temblores','Palpitaciones','Dolor de pecho'];
    // public function reacciones (){
    //         return self::REACCIONES[$this->reacciones];
    // }
}
