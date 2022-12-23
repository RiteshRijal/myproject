<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doze extends Model
{
    use HasFactory;
    protected $table='dozes';
    protected $fillable=['vaccine_category_id','doze_name'];
}
