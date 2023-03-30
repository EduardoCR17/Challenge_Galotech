<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipoCambio extends Model
{
    use SoftDeletes;
    protected $table = 'tipo_cambios';

    protected $fillale = [
        'tc_venta',
        'tc_compra',
        'fecha_registro'
    ];
}
