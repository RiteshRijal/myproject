<?php

namespace App\Http\Controllers\CenterAdmin;

use App\Http\Controllers\Controller;
use App\Models\AssignVaccine;
use Illuminate\Http\Request;

class AssignVaccineListController extends Controller
{

    function index()
    {
        $data1 = AssignVaccine:: all();
        //dd($data1);
        return view('center_admin.listofvaccine.index', compact('data1'));
    }
}
