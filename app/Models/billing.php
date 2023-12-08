<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class billing extends Model
{
  
    use HasFactory ;
    protected $table='billing';
    
    protected $fillable = [
        'id',
        'name',
        'email',
        'address',
        'city',
        'country',
        'zip_code',
     

    ];
    
}
