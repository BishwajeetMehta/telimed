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

Route::get('/', function () {

    $data['system'] = systemsettings::find(1);
    $data['specifications'] = specification::with('doctor')->get();
 // dd($data);
    $_SESSION['setting'] = $data['system'];
    return view('frontend.index',$data);
});


Route::view('/team','frontend.team')->name('team');



Route::post('/login','LoginController@login')->name('admin.login.submit');


Route::view('/create','backend.dashboard.layouts.doctordetails.addDoctor')->name('create');


Route::group(['prefix'=>'admin'], function () {
    Route::view('dashboard','backend.dashboard.index')->name('dashboard');
    Route::view('login','backend.dashboard.login')->name('admin.login.submitform');
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

    
});




