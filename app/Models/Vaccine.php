<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{
    use HasFactory;
    protected $table='vaccines';
    protected $fillable=['vc_id','vc_name','vc-location','vaccine_type','quantity','status'];
}
