<?php

namespace App\Http\Controllers;

use App\Http\Requests\VaccineCategoryRequest;
use App\Models\Doze;
use App\Models\VaccineBatch;
use App\Models\Vaccinecategory;
use Illuminate\Http\Request;

class VaccineCategoryController extends Controller
{
    function create()
    {
        // $data1['vaccine_categories'] = Vaccinecategory::all();
        // dd($data1);
        //$data['vaccine_batches'] = Option::pluck('no_of_vaccines','receive_date','batch_no');
        return view('admin.vaccinecategory.create');
    }

    function index()
    {
        $data1 = Vaccinecategory:: all();
        //dd($data1);
        return view('admin.vaccinecategory.index', compact('data1'));
        //return view('admin.vaccinecategory.index', compact('data'));
    }

    function store(VaccineCategoryRequest $request)
    {
//        dd($request->all());

//        if () {
//            $request->session()->flash('success', 'Vaccine category created successfully');
//            return redirect()->route('admin.vaccinecategory.index');
//
//        } else {
//            $request->session()->flash('error', 'Vaccine category creation  failed');
//
//            return redirect()->back();
//        }
        try {
            $record = Vaccinecategory::create($request->all());
            if ($record) {
                $no_of_vaccines = $request->input('no_of_vaccines');
                $receive_date = $request->input('receive_date');
                $batch_no = $request->input('batch_no');
                $doze_name = $request->input('doze_name');
                $vaccine_batch_data['vaccine_category_id'] = $vaccine_doze_data['vaccine_category_id'] = $record->id;
                for ($i = 0; $i < count($no_of_vaccines); $i++) {
                    if (!empty($no_of_vaccines[$i]) && !empty($receive_date[$i])){
                        $vaccine_batch_data['no_of_vaccines'] = $no_of_vaccines[$i];
                        $vaccine_batch_data['receive_date'] = $receive_date[$i];
                        $vaccine_batch_data['batch_no'] = $batch_no[$i];
                        $vaccine_doze_data['doze_name'] = $doze_name[$i];
//                        dd($vaccine_batch_data
                        VaccineBatch::create($vaccine_batch_data);
                        Doze::create($vaccine_doze_data);
                    }
                }

                for ($i = 0; $i < count($doze_name); $i++) {
                    if (!empty($doze_name[$i]) ){
                        $vaccine_doze_data['doze_name'] = $doze_name[$i];
                        Doze::create($vaccine_doze_data);
                    }
                }
                request()->session()->flash('success', "Vaccine Created");
            } else {
                request()->session()->flash('error', " Creation Failed");
            }
        } catch (\Exception $exception) {
            request()->session()->flash('error', "Error: " . $exception->getMessage());
        }
        return redirect()->route('admin.vaccinecategory.index');
    }

    function show($id)
    {
        $data1 = Vaccinecategory:: find($id);
       if (!$data1) {
            request()->session()->flash('error', 'vaccine category not found');
            return redirect()->route('admin.vaccinecategory.index');
       }
        $data2 = $data1->vaccineBatches()->get();
        if (!$data2) {
            request()->session()->flash('error', 'vaccine batches not found');
            return redirect()->route('admin.vaccinecategory.index');
        }
        return view('admin.vaccinecategory.show', compact('data2','data1'));
     }


        function destroy($id)
        {
            $data1 = Vaccinecategory:: find($id);
            if (!$data1) {
                request()->session()->flash('error', 'vaccine center not found');
                return redirect()->route('admin.vaccinecategory.index');

            }
            if ($data1->delete()) {
                request()->session()->flash('success', 'vaccine category delete success');

            } else {
                request()->session()->flash('error', 'vaccine category delete failed');


            }
            return redirect()->back();


        }


        function edit($id)
        {
            $data1 = Vaccinecategory:: find($id);
            if (!$data1) {
                request()->session()->flash('error', 'vaccine category  not found');
                return redirect()->route('admin.vaccinecategory.index');

            }
            return view('admin.vaccinecategory.edit', compact('data1'));
        }

        function update(Request $request, $id)
        {
            $data1 = Vaccinecategory:: find($id);
            if (!$data1) {
                request()->session()->flash('error', ' Vaccinecategory not found');
                return redirect()->route('admin.vaccinecategory.index');
            }
            if ($data1->update($request->all())) {
                $request->session()->flash('success', 'Vaccinecategory updated successfully');
                return redirect()->route('admin.vaccinecategory.index');

            } else {
                $request->session()->flash('error', 'Vaccinecategory update failed failed');

                return redirect()->back();

            }
            $data1->update($request->all());
        }
}


