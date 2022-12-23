<?php
//dd(\Illuminate\Support\Facades\Hash::make('test1234'));
use Illuminate\Support\Facades\Route;
//dd(\Illuminate\Support\Facades\Hash::make('abcd1234'));
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// for vaccinerequest
Route::get('/vaccine_user/vaccine_request/create', [App\Http\Controllers\VaccineUser\VaccineRequest::class, 'create'])->name('vaccine_user.vaccine_request.create');
Route::get('/vaccine_user/vaccine_request', [App\Http\Controllers\VaccineUser\VaccineRequest::class, 'index'])->name('vaccine_user.vaccine_request.index');
Route::post('/vaccine_user/vaccine_request/store', [App\Http\Controllers\VaccineUser\VaccineRequest::class, 'store'])->name('vaccine_user.vaccine_request.store11');


Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');
Route::get('/contactus', function () {
    return view('contactus');
})->name('contactus');


Auth::routes();


Route::prefix('/center_admin')->name('center_admin.')->namespace('CenterAdmin')->group(function(){
    Route::get('/dashboard',[\App\Http\Controllers\CenterAdmin\HomeController::class,'index'])->name('home');
    Route::namespace('Auth')->group(function(){

        //Login Routes
        Route::get('/login',[\App\Http\Controllers\CenterAdmin\Auth\LoginController::class,'showLoginForm'])->name('login');
        Route::post('/login',[\App\Http\Controllers\CenterAdmin\Auth\LoginController::class,'login']);
        Route::post('/logout','LoginController@logout')->name('logout');

        //Forgot Password Routes
        Route::get('/password/reset','ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::post('/password/email','ForgotPasswordController@sendResetLinkEmail')->name('password.email');

        //Reset Password Routes
        Route::get('/password/reset/{token}','ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('/password/reset','ResetPasswordController@reset')->name('password.update');

    });

});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/vaccinecenter/create', [App\Http\Controllers\VaccineCenterController::class, 'create'])->name('admin.vaccinecenter.create');
Route::get('/admin/vaccinecenter', [App\Http\Controllers\VaccineCenterController::class, 'index'])->name('admin.vaccinecenter.index');
Route::post('/admin/vaccinecenter', [App\Http\Controllers\VaccineCenterController::class, 'store'])->name('admin.vaccinecenter.store');
Route::get('/admin/vaccinecenter/{id}', [App\Http\Controllers\VaccineCenterController::class, 'show'])->name('admin.vaccinecenter.show');
Route::delete('/admin/vaccinecenter/{id}', [App\Http\Controllers\VaccineCenterController::class, 'destroy'])->name('admin.vaccinecenter.destroy');
Route::get('/admin/vaccinecenter/{id}/edit', [App\Http\Controllers\VaccineCenterController::class, 'edit'])->name('admin.vaccinecenter.edit');
Route::put('/admin/vaccinecenter/{id}/update', [App\Http\Controllers\VaccineCenterController::class, 'update'])->name('admin.vaccinecenter.update');

// for vaccinecategory
Route::get('/admin/vaccinecategory/create', [App\Http\Controllers\VaccineCategoryController::class, 'create'])->name('admin.vaccinecategory.create');
Route::get('/admin/vaccinecategory', [App\Http\Controllers\VaccineCategoryController::class, 'index'])->name('admin.vaccinecategory.index');
Route::post('/admin/vaccinecategory', [App\Http\Controllers\VaccineCategoryController::class, 'store'])->name('admin.vaccinecategory.store');
Route::get('/admin/vaccinecategory/{id}', [App\Http\Controllers\VaccineCategoryController::class, 'show'])->name('admin.vaccinecategory.show');
Route::delete('/admin/vaccinecategory/{id}', [App\Http\Controllers\VaccineCategoryController::class, 'destroy'])->name('admin.vaccinecategory.destroy');
Route::get('/admin/vaccinecategory/{id}/edit', [App\Http\Controllers\VaccineCategoryController::class, 'edit'])->name('admin.vaccinecategory.edit');
Route::put('/admin/vaccinecategory/{id}/update', [App\Http\Controllers\VaccineCategoryController::class, 'update'])->name('admin.vaccinecategory.update');

//Assign vaccine
Route::get('/admin/assign_vaccine/create', [App\Http\Controllers\AssignVaccineController::class, 'create'])->name('admin.assign_vaccine.create');
Route::get('/admin/assign_vaccine', [App\Http\Controllers\AssignVaccineController::class, 'index'])->name('admin.assign_vaccine.index');
Route::post('/admin/assign_vaccine', [App\Http\Controllers\AssignVaccineController::class, 'store'])->name('admin.assign_vaccine.store');
Route::get('/admin/assign_vaccine/{id}', [App\Http\Controllers\AssignVaccineController::class, 'show'])->name('admin.assign_vaccine.show');
Route::delete('/admin/assign_vaccine/{id}', [App\Http\Controllers\AssignVaccineController::class, 'destroy'])->name('admin.assign_vaccine.destroy');
Route::get('/admin/assign_vaccine/{id}/edit', [App\Http\Controllers\AssignVaccineController::class, 'edit'])->name('admin.assign_vaccine.edit');
Route::put('/admin/assign_vaccine/{id}/update', [App\Http\Controllers\VaccineCenterController::class, 'update'])->name('admin.assign_vaccine.update');
// for center admin list of vaccines
Route::get('/center_admin/listofvaccine', [App\Http\Controllers\CenterAdmin\AssignVaccineListController::class, 'index'])->name('center_admin.listofvaccine.index');

// for doze
Route::get('/admin/doze/create', [App\Http\Controllers\DozeController::class, 'create'])->name('admin.doze.create');
Route::get('/admin/doze', [App\Http\Controllers\DozeController::class, 'index'])->name('admin.doze.index');
Route::post('/admin/doze', [App\Http\Controllers\DozeController::class, 'store'])->name('admin.doze.store');


// for UserRegister
Route::get('/vaccine_user/register', [App\Http\Controllers\VaccineUser\userregister::class, 'create'])->name('vaccine_user.register');
Route::post('/vaccine_user/vaccine_request', [App\Http\Controllers\VaccineUser\VaccineRequest::class, 'registration_process'])->name('vaccine_user.vaccine_request.registration_process');


    Route::prefix('/vaccine_user')->name('vaccine_user.')->namespace('VaccineUser')->group(function(){
    Route::get('/dashboard',[\App\Http\Controllers\VaccineUser\HomeController::class,'index'])->name('home');
    Route::namespace('Auth')->group(function(){

        //Login Routes
        Route::get('/login',[\App\Http\Controllers\VaccineUser\Auth\LoginController::class,'showLoginForm'])->name('login');
        Route::post('/login',[\App\Http\Controllers\VaccineUser\Auth\LoginController::class,'login']);
        Route::post('/logout','LoginController@logout')->name('logout');

        //Forgot Password Routes
        Route::get('/password/reset','ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::post('/password/email','ForgotPasswordController@sendResetLinkEmail')->name('password.email');

        //Reset Password Routes
        Route::get('/password/reset/{token}','ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('/password/reset','ResetPasswordController@reset')->name('password.update');

        // for  superadmin profile
        Route::get('/admin/myprofile/{id}', [App\Http\Controllers\VaccineCenterController::class, 'show'])->name('admin.vaccinecenter.myprofile');
        //route for Ajax
        Route:: get('admin.assign_vaccine.create',[\App\Http\Controllers\AssignVaccineController::class,'index1']);

       // Route:: post('/get_batch_no',[\App\Http\Controllers\AssignVaccineController::class,'getBatchNo'])->name('vaccine_category.get_batch_no');
        //Route:: post('/get_no_of_vaccines',[\App\Http\Controllers\AssignVaccineController::class,'getNoOFVACCiNES'])->name('batch_no.get_no_of_vaccines');
    });


});
Route:: post('/get_batch_no',[\App\Http\Controllers\AssignVaccineController::class,'getBatchNo'])->name('vaccine_category.get_batch_no');
Route:: post('/get_doze_list',[\App\Http\Controllers\AssignVaccineController::class,'getDozeList'])->name('vaccine_category.get_dozes_list');
Route:: post('/get_no_of_vaccines',[\App\Http\Controllers\AssignVaccineController::class,'getNOOFVACCiNES'])->name('doze_id.get_no_of_vaccines');

