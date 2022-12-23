<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccinecenter extends Model
{
    use HasFactory;
    protected $table='vaccinecenter';
    protected $fillable=['center_number','name','location','country','district','ward_number','street','latitude','longitude','status'];
}
