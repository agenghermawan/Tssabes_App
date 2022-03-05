<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class achievement extends Model
{
    use HasFactory;
    protected $cast = [
        'daftarJuara' => 'array',
    ];
    protected $guarded = [];
}
