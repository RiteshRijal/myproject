<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignVaccine extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table='assign_vaccines';
    protected $fillable=['category_id','batch_no', 'doze_id','center_id','no_of_vaccines','assign_date', 'valid_date','assign_vaccines','remaining_vaccines'];
}
