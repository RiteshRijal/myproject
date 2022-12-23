<?php

namespace App\Http\Controllers;

use App\Http\Requests\VaccineRequest;
use App\Models\Vaccinecenter;
use Illuminate\Http\Request;

class VaccineCenterController extends Controller
{
    function create()
    {

        return view('admin.vaccinecenter.create');
    }

    function index()
    {
        $data = Vaccinecenter:: all();
        //dd($data);
        return view('admin.vaccinecenter.index', compact('data'));
    }
    function store(VaccineRequest $request)
    {
        if (Vaccinecenter::create($request->all())) {
            $request->session()->flash('success', 'Vaccine center created successfully');
            return redirect()->route('admin.vaccinecenter.index');

        } else {
            $request->session()->flash('error', 'Vaccine center creation  failed');

            return redirect()->back();

        }

    }
    function show($id)
    {
        $data = Vaccinecenter:: find($id);
        if (!$data) {
            request()->session()->flash('error', 'vaccine center not found');
            return redirect()->route('admin.vaccinecenter.index');


        }
        return view('admin.vaccinecenter.show', compact('data'));

    }
    function destroy($id)
    {
        $data = Vaccinecenter:: find($id);
        if (!$data) {
            request()->session()->flash('error', 'vaccine center not found');
            return redirect()->route('admin.vaccinecenter.index');

        }
        if ($data->delete()) {
            request()->session()->flash('success', 'vaccine center delete success');

        } else {
            request()->session()->flash('error', 'vaccine center delete failed');


        }
        return redirect()->back();


    }
    function edit($id)
    {
        $data = Vaccinecenter:: find($id);
        if (!$data) {
            request()->session()->flash('error', 'vaccinecenter not found');
            return redirect()->route('admin.vaccinecenter.index');

        }
        return view('admin.vaccinecenter.edit', compact('data'));
    }
    function update(Request $request,$id)
    {
        $data = Vaccinecenter:: find($id);
        if (!$data) {
            request()->session()->flash('error', ' Vaccinecenter not found');
            return redirect()->route('admin.vaccinecenter.index');
        }
        if ($data->update($request->all())) {
            $request->session()->flash('success', 'Vaccinecenter updated successfully');
            return redirect()->route('admin.vaccinecenter.index');

        } else {
            $request->session()->flash('error', 'Vaccinecenter update failed failed');

            return redirect()->back();

        }
        $data->update($request->all());
    }

    }

