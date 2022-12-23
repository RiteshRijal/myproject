<?php

namespace App\Http\Controllers\VaccineUser;

use App\Http\Controllers\Controller;
use App\Http\Requests\AssignVaccineRequest;
use App\Http\Requests\VaccineUserRequest;
use App\Models\AssignVaccine;
use App\Models\Doze;
use App\Models\VaccineBatch;
use App\Models\Vaccinecategory;
use App\Models\Vaccinecenter;
use App\Models\VaccineUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VaccineRequest extends Controller
{
    function create()
    {
        $data1['vaccine_categories'] = Vaccinecategory::all();
        $data1['vaccine_centers'] = Vaccinecenter::all();
        $data1['dozes'] = Doze::all();

        //code for recommendation of center
        $user_latitude =  '27.7058';
        $user_longitude = '85.3208';
        $data1['centers'] = Vaccinecenter::all();
        $data = [];
       foreach($data1['centers'] as $index => $center){
            $data[$index]['center_name'] = $center->name;
            $data[$index]['distance'] =  $this->twopoints_on_earth($user_latitude, $user_longitude,$center['lalitude'],$center['longitude']);
        }

        $this->array_sort_by_column($data, 'distance');
       $recommended_center = $data[0]['center_name'];
        //end of recommendation code
        return view('vaccine_user.vaccine_request.create', compact('data1','recommended_center'));
    }


    function index()
    {
        $data1 = VaccineUser:: all();
        //dd($data1);
        return view('vaccine_user.vaccine_request.index', compact('data1'));
    }



    function store(Request $request)
    {
//        dd(Auth::guard('vaccine_user')->user()->id);
        $request->request->add(['Status' => 'Pending']);
        $request->request->add(['user_id' => Auth::guard('vaccine_user')->user()->id]);
//        dd($request);
        if (VaccineUser::create($request->all())) {
            $request->session()->flash('success', 'your vaccine is appointed successfully');
            return redirect()->route('vaccine_user.vaccine_request.index');
        } else {
            $request->session()->flash('error', 'Vaccine request  failed');
            return redirect()->back();
        }
    }

    //recommendation logic
    function twopoints_on_earth($latitudeFrom, $longitudeFrom, $latitudeTo,  $longitudeTo){
        $long1 = deg2rad($longitudeFrom);
        $long2 = deg2rad($longitudeTo);
        $lat1 = deg2rad($latitudeFrom);
        $lat2 = deg2rad($latitudeTo);
        //Haversine Formula
        $dlong = $long2 - $long1;
        $dlati = $lat2 - $lat1;
        $val = pow(sin($dlati/2),2)+cos($lat1)*cos($lat2)*pow(sin($dlong/2),2);
        $res = 2 * asin(sqrt($val));
        $radius = 3958.756;
        return ($res*$radius);
    }

    function array_sort_by_column(&$arr, $col, $dir = SORT_ASC) {
        $sort_col = array();
        foreach ($arr as $key => $row) {
            $sort_col[$key] = $row[$col];
        }
        array_multisort($sort_col, $dir, $arr);
    }
    //end of format
}


