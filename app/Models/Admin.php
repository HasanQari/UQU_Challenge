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

    public function getTypeNameAttribute(){
        return $this->type == 1 ? "استراحة":($this->type == 2?'جلسة':'');
    }

    public function bookings(){
        return $this->hasMany(Booking::class,'estate_id','id');
    }

}
