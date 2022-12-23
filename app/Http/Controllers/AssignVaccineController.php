<?php

namespace App\Http\Controllers;

use App\Http\Requests\AssignVaccineRequest;
use App\Http\Requests\VaccineCategoryRequest;
use App\Models\AssignVaccine;
use App\Models\Doze;
use App\Models\VaccineBatch;
use App\Models\Vaccinecategory;
use App\Models\Vaccinecenter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AssignVaccineController extends Controller
{
    function create()
    {
        $data1['vaccine_categories'] = Vaccinecategory::all();
        $data1['vaccine_centers'] = Vaccinecenter::all();
        $data1['dozes'] = Doze::all();
        $data1['vaccine_batches'] = VaccineBatch::all();
        return view('admin.assign_vaccine.create',compact('data1'));
    }
    function index()
    {
        $data1 = AssignVaccine:: all();
          //dd($data1);
        return view('admin.assign_vaccine.index', compact('data1'));
   }


    function store(AssignVaccineRequest $request)
    {
//        dd($request);
        if (AssignVaccine::create($request->all())) {
            $request->session()->flash('success', 'Vaccine assign successfully');
            return redirect()->route('admin.assign_vaccine.index');
        } else {
            $request->session()->flash('error', 'Vaccine assign  failed');
            return redirect()->back();
        }
    }
    function show($id)
    {
        $data1 = AssignVaccine:: find($id);
        if (!$data1) {
            request()->session()->flash('error', ' assign vaccine not found');
            return redirect()->route('admin.assign_vaccine.index');


        }
        return view('admin.assign_vaccine.show', compact('data1'));

    }
    function destroy($id)
    {
        $data1 = AssignVaccine:: find($id);
        if (!$data1) {
            request()->session()->flash('error', 'vaccine center not found');
            return redirect()->route('admin.assign_vaccine.index');

        }
        if ($data1->delete()) {
            request()->session()->flash('success', 'assign vaccine delete success');

        } else {
            request()->session()->flash('error', 'assign vaccine delete failed');


        }
        return redirect()->back();


    }
    function edit($id)
    {
        $data1 = AssignVaccine:: find($id);
        if (!$data1) {
            request()->session()->flash('error', 'assign vaccine not found');
            return redirect()->route('admin.assign_vaccine.index');

        }
        return view('admin.assign_vaccine.edit', compact('data1'));
    }
    function update(Request $request,$id)
    {
        $data1 = AssignVaccine:: find($id);
        if (!$data1) {
            request()->session()->flash('error', ' assign vaccine not found');
            return redirect()->route('admin.assign_vaccine.index');
        }
        if ($data1->update($request->all())) {
            $request->session()->flash('success', 'assign vaccine updated successfully');
            return redirect()->route('admin.assign_vaccine.index');

        } else {
            $request->session()->flash('error', 'assign vaccine update failed failed');

            return redirect()->back();

        }
        $data->update($request->all());
    }

    function getBatchNo(Request $request)
    {
        $html = '';
        $vcid = $request->input('cviud');
        $batches = VaccineBatch::where('vaccine_category_id',$vcid)->get();
        $html .= '<option value=""> select batch</option>';
        foreach($batches as $batch){
            $html .= "<option value='$batch->id'>$batch->batch_no</option>";
        }
        return $html;
    }

    function getDozeList(Request $request)
    {
        $html = '';
        $vcid = $request->input('cviud');
        $dozes = Doze::where('vaccine_category_id',$vcid)->get();
        $html .= '<option value=""> select doze</option>';
        foreach($dozes as $doze){
            $html .= "<option value='$doze->id'>$doze->doze_name</option>";
        }
        return $html;
    }

    function getNOOFVACCiNES(Request $request)
    {
        $html = '';
        $did = $request->input('dviud');
        $noofvaccines = VaccineBatch::find($did);

        return $noofvaccines->no_of_vaccines;
    }
}


