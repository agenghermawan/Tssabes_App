<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class galery extends Model
{
    protected $guarded = [];
    use HasFactory;

    public function getimageAttribute($value)
    {
        return url('storage/'.$value);
    }

}
