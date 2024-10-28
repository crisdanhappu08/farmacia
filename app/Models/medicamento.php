<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medicamento extends Model
{
    protected $table = 'medicamentos';
    protected $guarded = [];
    use HasFactory;
}
