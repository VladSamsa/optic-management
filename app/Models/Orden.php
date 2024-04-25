<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    use HasFactory;

    public function cliente(){
        return $this->hasOne(Cliente::class);
    }

    protected $fillable = ['orden_id'];
}
