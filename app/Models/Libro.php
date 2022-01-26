<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Libro extends Model
{
    use HasFactory;
    use softDeletes;
    public function biblioteca(){
        return $this->hasMany(Biblioteca::class);
    }

}
