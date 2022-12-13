<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table = 'real_estate';
    protected $primaryKey = 'id';
    protected $fillable = ['name','type','descrip','location','price_night','price_hour'];
}
