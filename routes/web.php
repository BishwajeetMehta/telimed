<?php
use App\systemsettings;
use App\specification;

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


//  display

Route::get('/', function () {

    $data['system'] = systemsettings::find(1);
    $data['specifications'] = specification::all();
 // dd($data);
    $_SESSION['setting'] = $data['system'];
    $data['specifications'] = specification::with('doctor')->get();

      return view('frontend.index',$data);
});


Route::get('/appointment', function () {

    $data['system'] = systemsettings::find(1);
        $_SESSION['setting'] = $data['system'];
        $data['specifications'] = specification::with('doctor')->get();

    return view('frontend.appointment',$data);
})->name('appointment');


Route::get('/contact', function () {

    $data['system'] = systemsettings::find(1);
        $_SESSION['setting'] = $data['system'];
    return view('frontend.contact',$data);
})->name('contact');






 

 

Route::view('/create','backend.dashboard.layouts.doctordetails.addDoctor')->name('create');


Route::group(['prefix'=>'admin'], function () {
    Route::view('dashboard','backend.dashboard.index')->name('dashboard');
    Route::view('login-form','backend.dashboard.login')->name('admin.login.submitform');
    Route::post('login','logincontroller@login')->name('admin.login.submit');
    Route::get('logout','logincontroller@logout')->name('admin.login.logout');
    /* System-setting*/
    Route::view('setting','backend.dashboard.layouts.system_setting')->name('system-setting.form');
    Route::resource('system-setting','SystemController');

/* specification*/
    Route::view('create','backend.dashboard.layouts.doctordetails.specification.create')->name('specification.create');
    Route::post('specification_submit','specificationcontroller@create')->name('specification.submit');
    Route::get('/edit/{id}','specificationcontroller@edit')->name('specification.edit');
    Route::post('/update/{id}','specificationcontroller@update')->name('specification.update');
    Route::get('display','specificationcontroller@disp')->name('specification.display');
     Route::get('delete/{id}','specificationcontroller@delete')->name('specification.delete');
//Doctor details
    Route::get('add-dcoctor','doctorcontroller@index')->name('doctor.add');
    Route::post('dcoctor-submit','doctorcontroller@create')->name('doctor.submit');
    Route::get('doctor','doctorcontroller@disp')->name('doctor.display');
    Route::get('editdoctor/{id}','specificationcontroller@edit')->name('doctor.edit');
    Route::get('deletedoctor/{id}','doctorcontroller@delete')->name('doctor.delete');
//manage user
Route::get('manageuser','manageusercontroller@disp')->name('user.display');
Route::get('deleteuser/{id}','manageusercontroller@delete')->name('user.delete');

});

Route::group(['prefix'=>'user'], function () {

    Route::view('login-form','frontend.usersignin')->name('login.submitform');
    Route::post('add-user','logincontroller@signup')->name('user.signup');
    Route::view('signup','frontend.usersignup');


});

Route::get('doctor-list/{specification}','doctorcontroller@doctorList')->name('doctor.list');



