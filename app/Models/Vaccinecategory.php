<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccinecategory extends Model
{
    use HasFactory;

    protected $table = 'vaccine_categories';

    protected $fillable = ['category_name'];

    function vaccineBatches(){
        return $this->hasMany(VaccineBatch::class,'vaccine_category_id','id');
    }
    //vaccine doze function
    function  VaccineDozes(){
        return $this->hasMany( Doze::class,'vaccine_category_id','id');
    }
}
