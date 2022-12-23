<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VaccineBatch extends Model
{
    use HasFactory;
    protected $table='vaccine_batches';
    protected $fillable=['vaccine_category_id','no_of_vaccines','receive_date','batch_no',''];
}
