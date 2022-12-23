<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VaccineUser extends Model
{
    use HasFactory;
    protected $table='vaccine_request';
    protected $fillable=['Status','user_id','center_id','category_id', 'doze_id','appointment_date'];

}
